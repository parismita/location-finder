<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>

latitude: <?php echo $_GET["name"]; ?><br>
longitude: <?php echo $_GET["email"]; ?>


<p>Click the button to Map the location.</p>

<button onclick="initMap()">Map It</button>
    <div id="map"></div>
    <script>
     function initMap() {  
        var x=document.cookie;
        var myLatLng = {lat: 19, lng: 73};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      } 
     


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyB64-MVtLL6VmHuBE8bBpYSxqLTab3CVmQ &callback=initMap">
    </script>
  </body>
</html>
