
<?php 

include "db/connect.php";
include "inc/helpers.php";


    $stmt = $database->prepare("SELECT * FROM properties WHERE user_id = :uid"); 
   	     $stmt->execute(array('uid' => $_SESSION['user_id']));
  

    $stmt->setFetchMode(PDO::FETCH_OBJ); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();


    foreach ($listings as $key => $listing) {
    	
    	$stmt = $database->prepare("SELECT id from enquiry WHERE property_id = :pid");

    	$stmt->execute(array('pid' => $listing->id));

    	$enquiries = $stmt->fetchAll();

    	$listing->enquiries_count = count($enquiries);
    }

include 'views/partials/header.view.php';
include 'views/listings.view.php';
include 'views/partials/footer.view.php';


