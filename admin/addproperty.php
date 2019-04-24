<?php

include "db/connect.php";
if(isset($_POST['name']))
{
	$sql = "INSERT into properties (name, location, address, latitude, longitude, rate, type, user_id) VALUES ( :name , :location, :address, :latitude, :longitude, :rate, :type, :user_id )";


	$stmt = $database->prepare($sql);

	$result = $stmt->execute( array(':name' => $_POST['name'], ':location' => $_POST['location'] , ':address' => $_POST['address'] , ':latitude' => $_POST['latitude'] ,':longitude' => $_POST['longitude'] , ':rate' => $_POST['rate'], ':type' => $_POST['type'], ':user_id' => $_SESSION['user_id']) ); 

	if(!empty($result))
	{
		header('location:index.php');
	}
}


include 'views/partials/header.view.php';
include 'views/addproperty.view.php';
include 'views/partials/footer.view.php';