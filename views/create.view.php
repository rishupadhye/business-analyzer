<div class="container" style="margin-top: 30px;">
	
	<form method="POST">
		<div class="form-group">
			<label>Property Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>Property Locality</label>
			<textarea class="form-control" name="location"></textarea>
		</div>

		<div class="" style="width: 550px">
        <div class="form-group" style="padding-top: 10px;">
                <input type="text" name="address"  class="form-control" placeholder="Enter a location"  id="us3-address" />
	        </div>
	       <div id="us3" style="width: 550px; height: 400px;"></div>
	        
	       
	    </div>

    	<div class="form-group">
			<label>Latitude</label>
			<input type="text" readonly="" id="latitude" name="latitude" class="form-control">
		</div>

		<div class="form-group">
			<label>Longitude</label>
			<input type="text" readonly="" id="longitude" name="longitude" class="form-control">
		</div>


		<div class="form-group">
			<label>Rate</label>
			<input type="number" name="rate" class="form-control">
		</div>



		<div class="form-group">
			<label>Type</label>
			<select class="custom-select" name="type">
	  			<option value="1">Flat</option>
	  			<option value="2">Shop</option>
	  			<option value="3">Plot</option>
			</select>
		</div>


		<div class="form-group">
			<button type="submit" class="btn btn-success">Add Property</button>
		</div>
	</form>


</div>


