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
    background-image: url("./../img/fondo.jpg");
    background-position: center;
    background-repeat: no-repeat;
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
  width: 85%;
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
}
.logomarca{
  width: 100%;
  position: relative;
  top: 0px; left: 0px;
  opacity: 0;
}
.logomarca:hover{
  opacity: 1;
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
</style>
<a id="portada"></a>
<div class="row" style="height:100%;">
  <div id="cajap"class="slideP cajap ">
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
          <div class="logonokia">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logoapple">
            <img class="logomarca"src="./../img/luz.png">
          </div>
          <div class="logosams">
            <img class="logomarca"src="./../img/luz.png">
          </div>
    </div>
  </div>
  <script type="text/javascript">
    document.getElementById("cajap").style.height=(String)(document.body.scrollHeight)+"px";
    // document.getElementById("cajap").
    </script>
</div>

  <?php
	include("./footer.php");
   ?>
