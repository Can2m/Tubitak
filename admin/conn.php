<?php 
	$ip = "localhost";
	$user = "root";  
	$password = "";  
	$db = "tubitak"; 
	
	//bağlantı
		$db = new PDO("mysql:host=$ip;dbname=$db",$user,$password);
		$db->exec("SET CHARSET UTF8");
?>