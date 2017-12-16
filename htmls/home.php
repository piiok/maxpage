<?php 
// AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
 include("./encabezado.php");
 ?>
 <div id="myCarousel" style="margin-top:50px;" class="carousel slide" data-ride="carousel"  style="width:100%;" align="center">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner"> <!-- Recuerden cambiar las imagenes por una que sean de tipo marketin -->
        <div class="item active">
          <img style="height:400px;width:100%;" src="./../img/9.jpg" alt="Imagen1" >
        </div>

        <div class="item">
          <img style="height:400px;width:100%;" src="./../img/18.jpg" alt="Imagen2">
        </div>
    
        <div class="item">
          <img style="height:400px;width:100%;" src="./../img/19.jpg" alt="Imagen3" >
        </div>
        <div class="item">
          <img  style="height:400px;width:100%;" src="./../img/13.jpg" alt="Imagen4" >
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
        
  <?php 
	include("./footer.php");
   ?>