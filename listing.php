<?php 

include "db/connect.php";
include "inc/helpers.php";

$name = isset($_GET['name']) ? $_GET['name'] : '' ;

$location = isset($_GET['location']) ? $_GET['location'] : '' ;

$type = isset($_GET['type']) ? $_GET['type'] : '' ;


	/*if($name != '' && $location != '' && $type != '')
	{
		 $stmt = $database->prepare("SELECT * FROM properties WHERE name LIKE :name OR WHERE location LIKE :location"); 
		 $stmt->execute(array(':name' => "%$name%", ':location' => "%$location%"));	
	} 
	else */ if($name != '')
	{
	     $stmt = $database->prepare("SELECT * FROM properties WHERE name LIKE :name"); 
		 $stmt->execute(array(':name' => "%$name%"));
	} 
	else if($location != '')
	{
		 $stmt = $database->prepare("SELECT * FROM properties WHERE location LIKE :loc"); 
		 $stmt->execute(array(':loc' => "%$location%"));
	}
	else if($type != '')
	{
		 $stmt = $database->prepare("SELECT * FROM properties WHERE type = :type"); 
		 $stmt->execute(array(':type' => $type));
	}
    else 
    {
   	     $stmt = $database->prepare("SELECT * FROM properties"); 
   	     $stmt->execute();
    }
  
    
  

    $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();


include "views/partials/header.view.php";
	
include "views/listing.view.php";
include "views/partials/footer.view.php";