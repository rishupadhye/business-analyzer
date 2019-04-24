<?php

include "db/connect.php";
include "inc/helpers.php";
    

    $stmt = $database->prepare("SELECT * FROM properties WHERE user_id = :uid"); 
         $stmt->execute(array('uid' => $_SESSION['user_id']));
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();

    $enquiries = [];

    foreach ($listings as $key => $listing) {
        
        $stmt = $database->prepare("SELECT * from enquiry WHERE property_id = :pid");

        $stmt->execute(array('pid' => $listing->id));

        $enquiriesSet = $stmt->fetchAll();

        $enquiries = array_merge($enquiries, $enquiriesSet);

        $listing->enquiries_count = count($enquiries);
    }

    foreach ($enquiries as $key => $enquiry) {
    	
    	$stmt = $database->prepare("SELECT * from properties WHERE id = :pid LIMIT 1");

    	$stmt->execute(array('pid' => $enquiry->property_id));

    	$stmt->setFetchMode(PDO::FETCH_OBJ); 

    	$property = $stmt->fetch();

    	$enquiry->property = $property;
    }
    

include 'views/partials/header.view.php';
include 'views/enquiries.view.php';
include 'views/partials/footer.view.php';