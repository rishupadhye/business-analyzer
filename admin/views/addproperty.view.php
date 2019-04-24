<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">
					<form method="post">
					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="fa fa-th"></i> Basic Informations</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-12">
								<h3>Property Name <i class="tip" data-tip-content="Mention your property name"></i></h3>
								<input class="search-field" type="text" name = "name"   value=""/>
							</div>
						</div>
						<div class="add-listing-section margin-top-45">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="fa fa-th"></i> Property Location</h3>
							<input class="form-control" name="location">

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

						<div class="submit-section">

							<!-- Row -->
							<div class="row with-forms">

								<!-- City -->
								<div class="col-md-6">
									<h5>City</h5>
									<select class="chosen-select-no-single" >
										<option label="blank">Select City</option>	
										<option>New York</option>
										<option>Los Angeles</option>
										<option>Chicago</option>
										<option>Houston</option>
										<option>Phoenix</option>
										<option>San Diego</option>
										<option>Austin</option>
									</select>
								</div>

								

							</div>
							<!-- Row / End -->

						</div>
					</div>
					<!-- Section / End -->

						<!-- Row -->
						<div class="row with-forms">

							<!-- Status -->
							<div class="col-md-6">
								<h3>Type</h3>
								<select class="chosen-select-no-single" name="type" >
									<option label="blank">Select Type</option>	
									<option value="1">Flat</option>
									<option value="2">Shop</option>
									<option value="3">Plot</option>
								</select>
							</div> 

							<!-- Type 
							<div class="col-md-6">
								<h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
								<input type="text" placeholder="Keywords should be separated by commas">
							</div>
								-->
						</div>
						<!-- Row / End -->

					</div>
					<!-- Section / End -->

					<!-- Section -->
					


					<!-- Section 
					<div class="add-listing-section margin-top-45">

						
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-picture"></i> Gallery</h3>
						</div>

						
						<div class="submit-section">
							<form action="/file-upload" class="dropzone" ></form>
						</div>

					</div>
					 Section / End -->


					<!-- Section -->
					
						<!-- Row / End -->


						<!-- Checkboxes 
						<h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
						<div class="checkboxes in-row margin-bottom-20">
					
							<input id="check-a" type="checkbox" name="check">
							<label for="check-a">Elevator in building</label>

							<input id="check-b" type="checkbox" name="check">
							<label for="check-b">Friendly workspace</label>

							<input id="check-c" type="checkbox" name="check">
							<label for="check-c">Instant Book</label>

							<input id="check-d" type="checkbox" name="check">
							<label for="check-d">Wireless Internet</label>

							<input id="check-e" type="checkbox" name="check" >
							<label for="check-e">Free parking on premises</label>

							<input id="check-f" type="checkbox" name="check" >
							<label for="check-f">Free parking on street</label>

							<input id="check-g" type="checkbox" name="check">
							<label for="check-g">Smoking allowed</label>	

							<input id="check-h" type="checkbox" name="check">
							<label for="check-h">Events</label>
					
						</div>
						-->
						<!-- Checkboxes / End -->

					
					<!-- Section / End -->


					
										<!-- Section -->
					<div class="add-listing-section margin-top-45">
						
						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-book-open"></i> Rate</h3>
							<input type="number" name="rate" class="form-control">
							<!-- Switcher 
							<label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>-->
						</div>

						<!-- Switcher ON-OFF Content 
						<div class="switcher-content">

							<div class="row">
								<div class="col-md-12">
									<table id="pricing-list-container">
										<tr class="pricing-list-item pattern">
											<td>
												<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
												<div class="fm-input pricing-name"><input type="text" placeholder="Title" /></div>
												<div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" /></div>
												<div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD" /></div>
												<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
											</td>
										</tr>
									</table>
									<a href="#" class="button add-pricing-list-item">Add Item</a>
									<a href="#" class="button add-pricing-submenu">Add Category</a>
								</div>
							</div>

						</div>
						-->
						<!-- Switcher ON-OFF Content / End -->

					</div>
					<!-- Section / End -->


					<button type="submit" class="button preview">Submit <i class="fa fa-arrow-circle-right"></i></button>

				</div>
			</div>
			</form>
			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
			</div>

		</div>

	</div>
	<!-- Content / End -->