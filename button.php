<?php 
session_start();
include('include/config.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <style type="text/css">
    	.wrapper{
			text-align: center;
			width: 800px;
			margin: auto;
			
		}
		input{
			height: 30px;
			width: 355px;
			padding-left:10px
			background-color: gradient-top gray 50px;
		}
    </style>
  	  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDUG45eACluPNeVyeJMLQghDrVVXOuQ24"></script>

  <body>
  	<script type="text/javascript">
  		var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

    

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
  	</script>
  	<div class="wrapper">
	<label>Address</label>
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"/>
    </div>
  </body>
</html>
