<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="row" style="margin-right: 0; ">
		<div class="col-md-12" style="text-align: center; margin: 20px 0px 10px 0px; ">
			<div class="copyrights">© 2018 buildersHub. PID - 33.</div>
		</div>
	</div>
    <script src="js/jquery-3.2.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src='http://maps.google.com/maps/api/js?key=AIzaSyA9Gf43ZroXhxcXTwnjUY6WvVjdBhsKpTw&sensor=false&libraries=places'></script>
    <script src="js/locationpicker.jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <script>
            $('#us3').locationpicker({
                location: {
                    latitude:  19.99289,
                    longitude: 73.7882423  
                },
                radius: 0,
                addressFormat: 'street_address',
                inputBinding: {
                    latitudeInput: $('#latitude'),
                    longitudeInput: $('#longitude'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        </script>
        <script>
        // Initialize and add the map
        function initMap(lat, lng) {
        // The location of Uluru
        var uluru = {lat: lat, lng: lng};
        // The map, centered at Uluru
        var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
       
        </script>

       <?php if(isset($property)): ?>
        <script type="text/javascript">
            initMap(<?= $property['latitude']; ?>, <?= $property['longitude']; ?>);
        </script>

    <?php endif; ?>
  </body>
</html>