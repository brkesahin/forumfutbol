<?php 
 

	include "ban_kontrol.php";



if(!isset($_SESSION['k_id'])){
		 header("Location: http://theamazingpets.com/misafir.php"); 
		
	}


 if($_POST['k_adi_sikayet']==$_SESSION['k_adi']){

       echo "KENDİNİZİ ŞİKAYET EDEMEZSİNİZ" ;
       header("refresh:2;url=mesaj_yolla.php");
 }
 else {
    $db = new PDO("mysql:host=localhost;dbname=futbol_forum;charset=utf8","enesakturk","tanlar123");
    $sorgu = $db->prepare("INSERT INTO kullanici_sikayet (sikayet_eden,sikayet_edilen) VALUES(?,?)");
    $sorgu->execute(array($_SESSION['k_adi'],test_input($_POST['k_adi_sikayet'])));
     
    echo "Kullanıcı Şikayet edilmiştir";
    header("refresh:2;url=mesaj_yolla.php");

 }



	     function test_input($data) {
  
        $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
            
            
      return $data;
            
            
    }
	



?>