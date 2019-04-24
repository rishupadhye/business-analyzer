<?php

include "db/connect.php";
include "inc/helpers.php";


    $stmt = $database->prepare("SELECT COUNT(id) FROM properties WHERE user_id = :uid"); 
   	     $stmt->execute(array('uid' => $_SESSION['user_id']));
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $listings = $stmt->fetchColumn();


    $stmt = $database->prepare("SELECT * FROM properties WHERE user_id = :uid"); 
         $stmt->execute(array('uid' => $_SESSION['user_id']));
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();

    $listings_count =  count($stmt->fetchAll();

    $enquiries = [];

    foreach ($listings as $key => $listing) {
        
        $stmt = $database->prepare("SELECT * from enquiry WHERE property_id = :pid");

        $stmt->execute(array('pid' => $listing->id));

        $enquiriesSet = $stmt->fetchAll();

        $enquiries = array_merge($enquiries, $enquiriesSet);

        $listing->enquiries_count = count($enquiries);
    }

    $enquiries_count = count($enquiries);

    $stmt = $database->prepare("SELECT SUM(visited) FROM properties WHERE user_id = :uid"); 
   	     $stmt->execute(array('uid' => $_SESSION['user_id']));
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $visits_count = $stmt->fetchColumn();

include 'views/partials/header.view.php';
include 'views/dashboard.view.php';
include 'views/partials/footer.view.php';