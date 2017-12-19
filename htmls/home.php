<?php
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 ?>
<style type="text/css">
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
    width: 100%;height:100vh;
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
  width: 15%;
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
h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
      margin-top: 30px;
  }
.titlep1{
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 100%;
  /*background-color: white;*/
  left: 0px;
  animation-delay:0s;
  animation-duration: 3s;
  animation-name: anim4;
 }
 .titlep2{
  /*background-color: white;*/
  position: absolute;
  width: 100%;
  /*height: 20%;*/
  top: 18%;
  left: 0px;
 }
.titlep{  
  /*position: absolute;*/
  width: 90%;
  /*height: auto;*/
  /*top: 0%;
  left: 0px;*/

  /*background-image: url("./../img/servicio3.png");
  background-position: right;
  background-repeat: no-repeat;
  /* z-index: 3;*/
  /*background-size: auto;*/
  
}
.img1{
  position: absolute;
  width: 10%;
  bottom:25%;
  left: 20%;
  z-index: 10;
}
.img2{
  left: 40%;
}
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
@keyframes anim3 {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}
@keyframes anim4 {
  from {
    opacity: 0;
    left: -50%;
  }

  to {
    opacity: 1;
    left: 0px;
  }
}
</style>
<a id="portada"></a>
<div class="row" >
  <div id="slide1" class="cajap">
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

<div class="row"><a id="servicios"></a>
  <div id="slide2" class="cajap" >
    <div class="titlep1">
      <div id="div1" class="titlep2">
        <img id="div2" src="./../img/servicio.png" class="titlep">
        <img src="./../img/compra.png" class="img1">
        <img src="./../img/llave.png" class="img2 img1">
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  // var x=(screen.width*0.9*384)/959;
  // document.getElementById("div1").style.height=(String)(x)+"px";
  // var alt=(String)(document.body.scrollHeight)+"px";
  // var alt=(String)(screen.height)+"px";
  // document.getElementById("slide1").style.height=alt;
  // document.getElementById("slide2").style.height=alt;
</script>
  <?php
	include("./footer.php");
   ?>
