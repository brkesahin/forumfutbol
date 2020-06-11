<?php 
	ob_start();
    session_start();
    $db = new PDO("mysql:host=localhost;dbname=futbol_forum;charset=utf8","enesakturk","tanlar123");
	
	if(!(isset($_SESSION['k_id']))){
		
	} else {
	
	
    $lazım = $_SESSION['k_id'];
    $v = $db->prepare("SELECT * FROM kullanicilar WHERE k_id=?");
    $v ->execute(array($lazım));
    $c = $v->fetch(PDO::FETCH_ASSOC);
      if($c['ban']==1){
      
        header("Location:http://theamazingpets.com/banli_sayfa.php");
 }}


?>