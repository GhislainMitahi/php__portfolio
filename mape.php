<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            #mapid { height: 500px; width: 300px;}        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <title>Document</title>
</head>
<body>
   
<div id="mapid">

 <script>
 
        var mymap = L.map('mapid').setView([-1.6592844, 29.1820978], 15);
        var marker = L.marker([ -1.6592844, 29.1820978]).addTo(mymap);
        marker.bindPopup("<b>CRES</b><br>Ulpgl Fsta.").openPopup();
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWl0YWhpIiwiYSI6ImNrdXkzczB2eTBtZWUydXF3MG96aWt4Z2kifQ.-Cjx88ftWuj72ZTjZ9DurQ'
}).addTo(mymap);
    </script>
</div>
</body>
 </html>  
<!-- 12345twitghis.. -->