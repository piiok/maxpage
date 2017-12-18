<?php
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 ?>
<style type="text/css">
.slideP{
  width: 100%;
}
.imgContainer {
    /*position: absolute;*/
    top: 0px; left: 0px;
    width: 100%; height:100%;
    background-position: center;
    background-repeat: no-repeat;
    /*z-index: 2;*/
    /*background-size: cover;*/
}
.cajap {
    /*position: relative;*/
    width: 100%;/*height:100%;*/
    top: 0px; left: 0px;
    /*background-image: url("./../img/fondo.jpg");
    background-position: center;
    background-repeat: no-repeat;*/
    z-index: 3;
    background-size: cover;
}
.logoanim{
  animation-delay:0s;
  animation-duration: 3s;
  animation-name: anim1;
}
.tablestyle{
  position: absolute;
  width: 90%;
  bottom: 5px;
  left: 0px;
  padding-left: 15%;
  animation-delay:0s;
  animation-duration: 3s;
  animation-name: anim2;
}
.logo{
  position: absolute;
  width: 70%;
  z-index: 5;
  top: 24%;
  left: 15%;
}
.logohuawei{
  background-image: url("./../img/client/huawei.png");
}
.logolg{
  background-image: url("./../img/client/lg.png");
}
.logomoto{
  background-image: url("./../img/client/motorola.png");
}
.logonokia{
  background-image: url("./../img/client/nokia.png");
}
.logoapple{
  background-image: url("./../img/client/apple.png");
}
.logosams{
  background-image: url("./../img/client/samsung.png");
}
.logohuawei , .logolg , .logomoto, .logonokia , .logoapple , .logosams{
  display: inline-block;
  width: 15.9999%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: 8;
}
.logomarca{
  width: 100%;
  position: relative;
  top: 0px; left: 0px;
  opacity: 0;
  z-index: 9;
}
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
  }
/*.logomarca:hover{
  opacity: 1;
  z-index: 4;
}*/
@keyframes anim1 {
  from {
    opacity: 0;
    left: 0%;
  }

  to {
    opacity: 1;
    left: 15%;
  }
}
@keyframes anim2 {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
</style>
<a id="portada"></a>
<div class="row" >
  <div id="slide1"class="slideP cajap ">
    <!-- <img id="imgp" src="./../img/fondo.jpg" class="imgContainer">
    <div id="cajap" class="cajap"></div> -->
    <img src="./../img/logo3.png" class="logoanim logo">
    <div class="tablestyle">
          <div class="logohuawei">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logolg">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logomoto">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logoapple">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logosams">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logonokia"> <!-- En realidad es 'Y más' -->
            <img class="logomarca"src="./../img/luz.png">
          </div>
    </div>
  </div>
 
</div>
<a id="servicios"></a>
<div class="row">
  <div id="slide2" class="slide cajap text-center" high="100%">
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
</div>
<script type="text/javascript">
  var alt=(String)(document.body.scrollHeight)+"px";
  document.getElementById("slide1").style.height=alt;
  document.getElementById("slide2").style.height=alt;
  // document.getElementById("cajap").
</script>
  <?php
	include("./footer.php");
   ?>
