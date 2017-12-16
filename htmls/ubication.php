
<?php
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");

 ?>
<div class="row">
    	<!-- <h3>Aquí estamos: </h3> -->
    	<div class="titulo" style="padding-top:20px;color: #3B5998;" align="center"> Nuestra ubicación</div>
      <p style="font-size:1.2em;color:#000023; margin:20px;">
    		Si te encuentras interesado en alguno de nuestros productos o servicios, visitanos en nuestra tienda fisica y con gusto lo atenderemos.
    		<br>
    	</p>
      <iframe src="./ubicacion.php" width="100%" height="400" frameborder="0"></iframe>

    	 <!-- En este div se proyecta el mapa -->

    	<center>
        <br>
    		<a target="_blank" href="https://goo.gl/maps/UoyKLavFTh32"> <button type="button" class="btn btn-primary">Ver en Google Maps</button> </a>
    		<br><br>
    	</center>
</div>
<?php
include("./footer.php");
?>
