<?php 

include "db/connect.php";
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

			header('location:listing.php');
		} else {
			$error = 'Please check your credentials';
		}
	
}




include "views/partials/header.view.php";
include "views/login.view.php";
include "views/partials/footer.view.php";

?>
