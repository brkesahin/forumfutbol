<?php 


	include "ban_kontrol.php";

$db = new PDO("mysql:host=localhost;dbname=futbol_forum;charset=utf8","enesakturk","tanlar123");
$id = test_input($_GET["mesaj_id"]);


//görüldü görülmeme
$deger=1;

$sorgu = $db->prepare("UPDATE mesajlar SET gonderen_seen=? WHERE mesaj_id=? AND mesaj_gonderen=?");
$sorgu->execute(array($deger,$id,$_SESSION['k_adi']));

//veritabanından tamamen silme
$sil = $db->prepare("DELETE  FROM mesajlar WHERE alan_seen=? AND gonderen_seen=? ");
$sil -> execute(array($deger,$deger));

header("refresh:2;url=giden_mesajlar.php");



	     function test_input($data) {
  
        $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
            
            
      return $data;
            
            
    }
	





//if($x){
  //  echo "mesaj başarı ile silindi";
    //header("refresh:2;url=giden_mesajlar.php");
//}

?>



