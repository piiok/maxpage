<?php
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 ?>
 <div class="row">
 <div id="myCarousel"  class="carousel slide" data-ride="carousel"  style="width:100%;" align="center">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="height:40%;"> <!-- Recuerden cambiar las imagenes por una que sean de tipo marketin -->
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

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<div id="client">
  <div class="container">
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
  </div>
</div>
  <?php
	include("./footer.php");
   ?>
