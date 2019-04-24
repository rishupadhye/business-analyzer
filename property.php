<?php

	$name = isset($_GET['name']) ? $_GET['name'] : '';

	include "db/connect.php";
	include "inc/helpers.php";

	$id = isset($_GET['id']) ? $_GET['id'] : '' ;

	
	$stmt = $database->prepare("SELECT * FROM properties WHERE id = :id LIMIT 1"); 
	$stmt->execute(array(':id' => $id));
	
	$property = $stmt->fetch();

	$visited = $property['visited'];

	$visited++;

	$stmt = $database->prepare("UPDATE properties SET visited=:visited WHERE id = :id"); 
	$stmt->execute(array(':id' => $id, ':visited' => $visited));

	if(isset($_POST['name']))
{
	$sql = "INSERT INTO enquiry (name, email, mobile_no, current_location, property_id, user_id) VALUES ( :name , :email, :mobile, :location, :property_id, :user_id )";

	$stmt = $database->prepare($sql);

	$result = $stmt->execute( array(':name' => $_POST['name'], ':email' => $_POST['email']
							, ':mobile' => $_POST['mobile'], ':location' => $_POST['location'],  ':property_id' => $id, 
							':user_id' => $_SESSION['user_id']) ); 

	if(!empty(result))
	{
		
	 			
		header('location:property.php?id=' . $id);
	}
}
	
	// if(isset($_POST['name']))
	// 	{
	// 		$sql = "INSERT into enquiry (name, email, mobile_no, current_location) VALUES ( :name, :email, :mobile_no, :current_location )";

	// 		$stmt = $database->prepare($sql);

	// 		$result = $stmt->execute( array(':name' => $_POST['name'], ':email' => $_POST['email_id']
	// 								, ':mobile_no' => $_POST['mobile_num'], ':current_location' => $_POST['current_loc']) ); 

	// 		if(!empty(result))
	// 		{
	// 			/*$message = "Enquiry Sucessfully registered";
	// 			echo "<script type='text/javascript'>alert('$message');</script>";;*/
	// 			header('location:listing.php');
	// 		}
	// 	}


	include 'views/partials/header.view.php';
	include 'views/property.view.php';
	include 'views/partials/footer.view.php';