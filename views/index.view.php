

<div class="jumbotron top-banner " >
 <div class="overlay">
	 <div class="container text-white" style="padding: 80px;">
		  <h1 class="display-4">Best Properties Listed</h1>
		  <p class="lead">Explore top-rated locations in your city</p>
		  
			<div class="card card-default my-2">
				<form method="GET" action="listing.php">
				<div class="card-body d-flex" style="padding: 5px;">
					<input type="text" name="name" class="form-control" placeholder="What are you looking for?" style="border: none;border-right: 1px solid #ccc;">
					<input type="text" name="location" class="form-control" placeholder="Location" style="border: none;border-right: 1px solid #ccc;">
					<select class="custom-select" name="type" style="border: none;border-right: 1px solid #ccc;">
			  			<option selected>All Categories</option>
			  			<option value="1">Flat</option>
			  			<option value="2">Shop</option>
			  			<option value="3">Plot</option>
					</select>

					<button type="submit" class="btn btn-primary">Search</button>
				  </form>	
				</div>
			</div>
		    <a class="btn btn-success mt-2" href="listing.php" role="button">Explore Properties</a>
		  </p>
	  </div>
  </div>
</div>



<section id="recent-listings" class="mb-5">
 
 <div class="container">
 	<div class="row">

		<div class="col-md-12" style="text-align: center;">
			<h3 class="headline centered margin-bottom-45">Most Enquired Places</h3>
				<p>Discover top-rated local constructions</p>
			
		</div>
	</div>
	<div class="row">
		
		<?php foreach($listings as $listing) { ?>
		<!-- Property Item -->	
		<div class="col-md-4">
			<div class="card m-2" style="width: 18rem;">
			  <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title"><?= $listing['name'] ?></h5>
			    <p class="card-text"><?= $listing['location'] ?><br>
			    <?= getPropertyType($listing['type']) ?></p>
			    <a href="<?= 'property.php?id=' . $listing['id']; ?>" class="btn btn-primary">Make Enquiry</a>
			  </div>
			</div>
		</div>	
        <!-- Property Item End -->
        <?php } ?>


	</div>
</div>

</section>
