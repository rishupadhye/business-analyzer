<?php
    
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) 
 	{
 		header('Location: login.php');
 	}

	$server="127.0.0.1";
	$username="root";
	$password="";
	//$username="banalyzer";
	//$password="123456";

	$db="banalyzer";



	try{
		$database = new PDO("mysql:host=$server;dbname=$db",$username,$password);
		$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e){
		die("Database Error");

	}
?>