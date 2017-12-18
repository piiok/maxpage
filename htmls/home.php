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

.logo{
  position: absolute;
  width: 70%;
  z-index: 5;
  top: 15%;
  left: 15%;
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
</style>
<div class="row" style="height:100%;">
  <div id="cajap"class="slideP cajap ">
    <!-- <img id="imgp" src="./../img/fondo.jpg" class="imgContainer">
    <div id="cajap" class="cajap"></div> -->
    <img src="./../img/logo3.png" class="logoanim logo">
    
  </div>
  <script type="text/javascript">
    document.getElementById("cajap").style.height=(String)(document.body.scrollHeight)+"px";
    // document.getElementById("cajap").
    </script>
</div>

 <!-- <div class="row">
 <div id="myCarousel"  class="carousel slide" data-ride="carousel"  style="width:100%;" align="center">
     
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      
      <div class="carousel-inner" style="height:40%;"> 
        <div class="item active">
          <img style="height:100%;width:100%;" src="./../img/5.jpg" alt="Imagen1" >
        </div>
        <div class="item">
          <img style="height:100%;width:100%;" src="./../img/2.jpg" alt="Imagen2">
        </div>


        <div class="item">
          <img style="height:100%;width:100%;" src="./../img/3.jpg" alt="Imagen3">
        </div>

        <div class="item">
          <img style="height:100%;width:100%;" src="./../img/1.jpg" alt="Imagen4" >
        </div>
        <div class="item">
          <img  style="height:100%;width:100%;" src="./../img/4.jpg" alt="Imagen5" >
        </div>
      </div>

      
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div> -->
    <div class="row">

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client1.png" alt="">
      </div>

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client2.png" alt="">
      </div>

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client3.png" alt="">
      </div>

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client4.png" alt="">
      </div>

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client5.png" alt="">
      </div>

      <div class="col-sm-4 col-md-2">
        <span></span><img src="../img/client/client6.png" alt="">
      </div>

    </div>

  <?php
	include("./footer.php");
   ?>
