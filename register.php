<?php 

include "db/connect.php";
include "inc/helpers.php";

$error = '';

if(isset($_POST['name']))
{
	$name = trim($_POST['name']);

	$email = trim($_POST['email']);

	$password = trim($_POST['password']);

	$confirmPassword = trim($_POST['password_confirmation']);

	

	if($password != $confirmPassword)
	{
		$error = 'Password confirmation do not match!';
	} else {
		$sql = "INSERT into users (name, email, password) VALUES ( :name , :email, :password )";

		$stmt = $database->prepare($sql);

		$result = $stmt->execute( array(':name' => $_POST['name'], ':email' => $_POST['email']
								, ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)) ); 

		if(!empty($result))
		{
			$_SESSION['loggedIn'] = true;
			$_SESSION['user_id'] = $database->lastInsertId();
			$_SESSION['user_name'] = $_POST['name'];
			$_SESSION['user_email'] = $_POST['email'];

			header('location:listing.php');
		}
	}
}


include "views/partials/header.view.php";
include "views/register.view.php";
include "views/partials/footer.view.php";

?>
