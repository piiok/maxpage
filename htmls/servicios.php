<?php
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
include("./encabezado.php");
?>
<style type="text/css">
.logo-small {
      color: #f4511e;
      font-size: 100px;
  }
  .h2p{
  	font-size: 4em;
  	margin-bottom: 40px;
    text-shadow:5px 5px 5px #000000;
    color:white;
  }
h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
      margin-top: 30px;
  }
  .slide{
  	padding-top: 3%;
  	padding-bottom: 15%;
  	background-color: 
  }
</style>
<script>
  $(document).ready( function(){
      $("#slide1").fadeIn(3000);
  });


  </script>

<br>
<div id="slide1" class="slide text-center" high="100%">
	<a id="servicios"></a>
	<h2  class=" h2p ">SERVICIOS</h2>
	<div class="row slideanim">
		<div class="col-sm-2">
		</div>	
		<div class="col-sm-4">
		      <span class="glyphicon glyphicon-shopping-cart logo-small"></span>
		      <h4 style="color:#303030;">VENTA DE ARTICULOS TECNOLÓGICOS</h4>
		      <!-- <p>Venta de accesorios y artículos tecnológicos nuevos y usados.</p> -->
		</div>
		<div class="col-sm-4">
		      <span class="glyphicon glyphicon-wrench logo-small"></span>
		      <h4 style="color:#303030;">SERVICIO TÉCNICO</h4>
		      <!-- <p>Soporte técnico para aparatos tecnológicos.</</p> -->
		</div>
	</div>
</div>

<?php
include("./footer.php");
?>