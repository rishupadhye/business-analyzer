


<div class="container" style="margin-top: 35px;">
	<div class="card card-default">
		<div class="card-body">

			<div class="row">

				<div class="col-md-8">
			<h2><?= $property['name'] ?></h2>

			<p><?= $property['location'] ?></p>

			<p><b>Type : </b> <?= getPropertyType($property['type']); ?></p>

			<?php if($property['rate'] != null) : ?>
			<p><b>Rate : </b> <?= $property['rate'] ?></p>
		    <?php endif; ?>
		    </div>

		    <div class="col-md-4">
		    	<div id="map"></div> 	
		    	
		    </div>

		    </div>

		</div>
	</div>
</div>

<div class="container" style="margin-top: 30px;">
	
	<form method="POST">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label>Email-Id</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Mobile No.</label>
			<input type="text" name="mobile" class="form-control">
		</div>

		<div class="form-group">
			<label>Your current location</label>
			<input type="text" name="location" class="form-control">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-success">Make Enquiry</button>
		</div>
	</form>
