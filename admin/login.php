<?php 

 session_start();

    

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
include "inc/helpers.php";


$error = '';

if(isset($_POST['email']))
{
	$email = trim($_POST['email']);

	$password = trim($_POST['password']);


	

		$sql = "SELECT * FROM users WHERE email = :email";

		$stmt = $database->prepare($sql);

		 $stmt->execute( array(':email' => $_POST['email'] )); 

			$user = $stmt->fetch();

		if(!empty($user))
		{
			$_SESSION['loggedIn'] = true;
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['user_name'] = $user['name'];
			$_SESSION['user_email'] = $user['email'];

			header('location:index.php');
		} else {
			$error = 'Please check your credentials';
		}
	
}




include "views/partials/header.view.php";
include "views/login.view.php";
include "views/partials/footer.view.php";

?>
