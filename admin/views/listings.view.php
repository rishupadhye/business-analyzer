<!-- Property Item End -->
		<div class="row">

         		<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Active Listings</h4>
					<ul>

						
				  <?php foreach($listings as $listing) { ?>
			
						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="images/listing-item-01.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#"><?= $listing->name; ?></a></h3>
										<span><?= $listing->location; ?></span> | 
										<span><?= getPropertyType($listing->type); ?></span> <br>
										<span><b>No. of Enquiries :</b> <?= $listing->enquiries_count; ?></span>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
											  

								<a href="<?= 'property.php?id=' . $listing->id; ?>" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
								<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
							</div>
						</li>

				         <?php } ?>
						

					</ul>
				</div>
			</div>

         </div>	