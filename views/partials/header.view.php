<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >

    <style type="text/css">
      #map { width: 300px; height: 300px; }
    </style>

    <title>Banalyzer</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container">
  <a class="navbar-brand" href="index.php">BAnalyzer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listing.php">Listings</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="create.php">Add New Property</a>
      </li>
    

      <?php if(isset($_SESSION['loggedIn']) &&  $_SESSION['loggedIn'] == true) {  ?>

          <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

      <?php  } else { ?>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
       
       <?php } ?>

    </ul>
   
  </div>
  </div>
</nav>
    
    