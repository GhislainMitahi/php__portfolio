<?php
 
  //include 'connect.php';
 
  $apikey = "AIzaSyBCzUYWNCuxcHHEnZPFNqJUUOJ9pG4rzEU";
  //$id = $_GET['id'];
 
  $lat = -1.6592844;
  $long =  29.1820978;
  $zoom = 20;
 
  //$findmap = "SELECT centerLat, centerLong, zoom FROM maps WHERE ID = $id";
 /*
  if(!$result = $con->query($findmap)){
     die('There was an error running the query [' . $con->error . ']');
  } else {
    $row = $result->fetch_assoc();
    $lat = $row['centerLat'];
    $long = $row['centerLong'];
    $zoom = $row['zoom'];
  } */

  //Ajouter un pointeur avec l'adresse postale

  //  $map->addMarkerByAddress( "université ULPGL-campus salomon-", "Localisation", "<em>max detail</em> de l'adresse", "<place>");

  //  Ajouter un pointeur avec les coordonnées géographiques (longitude et latitude)

    // $map->addMarkerByCoords( "<longitude>", "<latitude>", "<titre de l'infobulle>", "<em>contenu</em> de l'infobulle", "<Title du pointeur>");

    //Tracer une droite entre deux adresses postales

    // $map->addPolyLineByAddress( "<Adresse 1>", "<Adresse 2>", "<couleur>", "<epaisseur>", "<opacite>");

    //Tracer une droite entre deux coordonnées géographiques (longitude et latitude)
    // $map->addPolyLineByAddress( "<longitude départ>", "<latitude départ>", "<longitude arrivée>", "<latitude arrivée>", "<couleur>", "<épaisseur>", "<opacité>");
  //refer link
  //https://pub.phyks.me/sdz/sdz/google-maps-sur-votre-page-web.html
?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=
          <?php echo $apikey; ?>&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        //const uluru = { lat: 1.49, lng: 29.13 };
        var mapOptions = {
          center: new google.maps.LatLng(<?php echo $lat.', '.$long; ?>),
          zoom: <?php echo $zoom; ?>
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>