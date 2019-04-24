<?php


include "db/connect.php";
include "inc/helpers.php";

   /****** MOST ENQUIRED AREA *****/
	    
   	    $stmt = $database->prepare("SELECT property_id,COUNT(property_id) FROM enquiry GROUP BY property_id "); 
 	   	
	   	$stmt->execute();
	  
	    $stmt->setFetchMode(PDO::FETCH_ASSOC); 

	    // set the resulting array to associative
	    $listings = $stmt->fetchAll();

	    $max = 0;
	    $maxPropId = 0;

	    foreach ($listings as $key => $listing) {
	    	if($listing['COUNT(property_id)'] > $max)
	    	{
	    		$max = $listing['COUNT(property_id)'];
	    		$maxPropId = $listing['property_id'];
	    	}
	    }


	    $stmt = $database->prepare("SELECT * FROM properties where id = :id LIMIT 1");
	    
	    $stmt->execute(array('id' => $maxPropId));

	    $stmt->setFetchMode(PDO::FETCH_OBJ); 

	    $propertyEnquired = $stmt->fetch(); 	
    
    /******** MOST ENQUIRED AREA *******/

     /****** MOST VISITED AREA *****/
	    
   	    $stmt = $database->prepare("SELECT MAX(visited) FROM properties"); 
 	   	
	   	$stmt->execute();
	  
	    $stmt->setFetchMode(PDO::FETCH_OBJ); 

	    // set the resulting array to associative
	  
	    $propertyVisitedId = $stmt->fetchColumn();

	   

	    $stmt = $database->prepare("SELECT * FROM properties where visited = :id LIMIT 1");
	    
	    $stmt->execute(array('id' => $propertyVisitedId));

	    $stmt->setFetchMode(PDO::FETCH_OBJ); 

	    $propertyVisited = $stmt->fetch(); 

    
    /******** MOST ENQUIRED AREA *******/

     /****** MOST VISITED AREA *****/
		
		$porbablePropertyId = 0;

		$weitage = 999;			

   	   $stmt = $database->prepare("SELECT * FROM properties"); 
   	     $stmt->execute();
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();

    $probableProperty = null;

    foreach ($listings as $key => $listing) {
    	
    	$stmt = $database->prepare("SELECT id from enquiry WHERE property_id = :pid");

    	$stmt->execute(array('pid' => $listing->id));

    	$enquiries = $stmt->fetchAll();

    	$listing->enquiries_count = count($enquiries);
    }

	foreach($listings as $listing) {
	  if($listing->visited - $listing->enquiries_count < $weitage)
	  {
	  	$weitage = $listing->visited - $listing->enquiries_count;
	  	$probableProperty = $listing;
	  }					
	}     


	
    
    /******** MOST ENQUIRED AREA *******/
    
    include 'views/partials/header.view.php';
    include 'views/analysis.view.php';
    include 'views/partials/footer.view.php';