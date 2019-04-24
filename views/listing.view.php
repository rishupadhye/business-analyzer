<section id="recent-listings" class="mb-5" style="margin-top: 30px;">
 
 <div class="container">	
 	<div class="card card-default my-2">
				<form method="GET" action="listing.php">
				<div class="card-body d-flex" style="padding: 10px;">
					<input type="text" name="name" class="form-control" placeholder="What are you looking for?" style="border: none;border-right: 1px solid #ccc;" value="<?= $name; ?>">
					<input type="text" name="location" class="form-control" placeholder="Location" style="border: none;border-right: 1px solid #ccc;"  value="<?= $location; ?>">
					<select class="custom-select" name="type" style="border: none;border-right: 1px solid #ccc;">
			  			<option>All Categories</option>
			  			<option value="1" <?= $type == 1 ? 'selected' : '';?>>Flat</option>
			  			<option value="2" <?= $type == 2 ? 'selected' : '';?>>Shop</option>
			  			<option value="3" <?= $type == 3 ? 'selected' : '';?>>Plot</option>
					</select>

					<button type="submit" class="btn btn-primary">Search</button>
				  </form>	
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
			    <a href="<?= 'property.php?id=' . $listing['id']; ?>" class="btn btn-primary">Make an Enquiry</a>
			  </div>
			</div>
		</div>	
        <!-- Property Item End -->
        <?php } ?>


	</div>
</div>

</section>