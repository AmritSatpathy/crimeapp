<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Reverse Geocoding</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        width: 225px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <input id="submit" type="button" value="Get Location">
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        navigator.geolocation.getCurrentPosition(showPosition);
           function showPosition(position){
            var lat = position.coords.latitude;
            var long = position.coords.longitude;
        <?php
        
        ?>

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: lat, lng: long}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit').addEventListener('click', function() {
          geocodeLatLng(geocoder, map, infowindow);
        });
      }}

      function geocodeLatLng(geocoder, map, infowindow) {

        navigator.geolocation.getCurrentPosition(showPosition);
           function showPosition(position){
           var lat = position.coords.latitude;
           var long = position.coords.longitude;
        //var latlngStr = input.split(',', 2);
        var latlng = {lat: lat, lng: long};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              map.setZoom(18);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
      }}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPg6zrbn3ZAjeVUnUVLAhr05ceQsFRNFI&callback=initMap">
    </script>
  </body>
</html>