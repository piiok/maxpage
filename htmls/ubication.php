
<?php 
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 
 ?>

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ&callback=initMap"
  type="text/javascript"></script>
  <head>
    <style>
       /*Dimenciones del mapa*/
       #map {
        height: 400px; 
        width: 100%;
       }
    </style>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="background-color:#dddddd;">
    	<!-- <h3>Aquí estamos: </h3> -->
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
    	
    	<div id="map" style="border-radius:10px;margin-bottom:10px;"></div> <?php //En este div se proyecta el mapa ?>

    	<center>
    		<a target="_blank" href="https://www.google.com.co/maps/place/7%C2%B008'11.6%22N+73%C2%B007'27.5%22W/@7.1365533,-73.1264797,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d7.136548!4d-73.124291"> <button type="button" class="btn btn-primary">Ver en Google Maps</button> </a>
    		<br>
    		<br>
    	</center>
    </div>
</div>


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
    
  <?php 
	include("./footer.php");
   ?>