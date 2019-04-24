<?php


if(isset($_POST['name']))
{
	$data = [];

	$data['name'] = trim($_POST['name']);

   $data['phone'] = $_POST['phone'];


   // Store to database;
   
   
   header('Location: listing.php');

}

<?php

include "db/connect.php";

    
if(isset($_POST['name']))
{
	$sql = "INSERT INTO properties ( name, location, user_id) VALUES ( :name, :location, :user_id )";
	$stmt = $database->prepare( $sql );

	$result = $stmt->execute( array( ':name'=>$_POST['name'], ':location'=>$_POST['location'], ':user_id' => $_SESSION['user_id'] ) );

	if (!empty($result) ) {
		
		header('location:index.php');
	
	}
}

//$listings = $database->get();


include "views/partials/header.view.php";
include "views/create.view.php";
include "views/partials/footer.view.php";