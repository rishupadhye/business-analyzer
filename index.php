<?php 

include "db/connect.php";
include "inc/helpers.php";

    $stmt = $database->prepare("SELECT * FROM properties LIMIT 3"); 
    
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    // set the resulting array to associative
    $listings = $stmt->fetchAll();



//$listings = $database->get();


include "views/partials/header.view.php";
include "views/index.view.php";
include "views/partials/footer.view.php";

?>
