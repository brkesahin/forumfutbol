<?php 
	include "ban_kontrol.php";



if($_POST['k_adi_engel']==$_SESSION['k_adi']){
    echo "KENDİNİZE KARŞI BÖYLE BİR ŞEY YAPAMAZSINIZ";
    header("refresh:2;url=mesaj_yolla.php");

}
else {
    $db = new PDO("mysql:host=localhost;dbname=futbol_forum;charset=utf8","enesakturk","tanlar123");
$sorgu = $db->prepare("DELETE FROM chat_engellemeler WHERE engel_atan=? AND engel_yiyen=?");
$sorgu->execute(array($_SESSION['k_adi'],$_POST['k_adi_engel']));

echo test_input($_POST['k_adi_engel'])." kullanıcı engeli kaldırdınız";

header("refresh:2;url=mesaj_yolla.php");
    
}



	     function test_input($data) {
  
        $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
            
            
      return $data;
            
		 }

?>








 