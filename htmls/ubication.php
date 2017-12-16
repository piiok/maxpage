
<?php 
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 ?>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ&callback=initMap"
  type="text/javascript"></script>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Aquí estamos: </h3>
    <div id="map" style="border-radius:10px;"></div> <?php //En este div se proyecta el mapa ?>

    <script>
      function initMap() {
        var uluru = {lat: 7.136548, lng: -73.124291}; // direcciones geograficas de repair maxter cell
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ&callback=initMap">
    </script>
    <a target="_blank" href="https://www.google.com.co/maps/place/7%C2%B008'11.6%22N+73%C2%B007'27.5%22W/@7.1365533,-73.1264797,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d7.136548!4d-73.124291"> Haz click aquí para verlo directamente en Google maps. </a>
  </body>