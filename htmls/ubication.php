
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
        width: 80%;
        border-radius:10px;
        margin-bottom:10px;
        margin-left:10%;
        margin-right:10%;
       }
    </style>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="background-color:#dddddd;">
    	<!-- <h3>Aquí estamos: </h3> -->
    	<div class="titulo" style="padding-top:20px;color: #000057;" align="center"> Nuestra ubicación</div>
    	<p style="font-size:1.2em;color:#000023; margin:20px;"> 
    		Si te encuentras interezado en alguno de nuestros productos, visitanos en nuestra tienda fisica y con gusto te atenderemos.
    		<br>
    	</p>
    	<p align="center">
    		Nuestra dirección: "No me la sé, toca que se la pregunten al men :v" <br>
    	</p>
    	 <!-- En este div se proyecta el mapa -->
    	<div id="map"></div>

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
          center: uluru,
          zoom:8, 
          scrollwheel:false, 
          draggable:false, 
          mapTypeId:google.maps.MapTypeId.ROADMAP
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