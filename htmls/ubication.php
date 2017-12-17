   <?php
   // AIzaSyBCDrwD0qSoTb7e96i2R_KH0_fSxTSs6hQ API KEY
    include("./encabezado.php");

    ?>
   <div class="row"  style="background-color:#dddddd;">
        <iframe src="./ubicacion.php" width="100%" height="400" frameborder="0"></iframe>
        <div class="col-sm-12" style="background-color:#6c6c6c;margin-top:-5px;">
          <div class="titulo" style="padding-top:20px;color: #fff; font-family:Barlow;" align="center"> Cra 23 #10-53, San Francisco - Bucaramanga</div>
          <center>
            <a target="_blank" href="https://goo.gl/maps/UoyKLavFTh32"> <button type="button" class="btn btn-primary">Ver en Google Maps</button> </a>
          </center>
          <br>
        </div>
       	<!-- <h3>Aquí estamos: </h3> -->
          <div class="col-sm-12" style="background-image: url('../img/bg.jpg');margin-top:-5px;">
            <div class="titulo" style="padding-top:20px;color: #3B5998; font-family:Barlow;" align="center">Solicita más Información</div>
                <div class="col-sm-4"></div>
                <center>
                  <div class="col-sm-4" style="background-image: url('../img/telefono.png');width:330px; height:685px;background-repeat: no-repeat;">

                        <br><br><br><br>
                      <form action="" method="post" style="color:#fff;font-family:Barlow;">
                              *Nombre:<br>
                              <input class="celdas" type="text" name="first_name" /><br><br>

                               *Apellido:<br>
                               <input class="celdas" type="text" name="last_name" /><br><br>

                               *Telefono:<br>
                               <input class="celdas" type="text" name="telefono"/><br><br>

                               *Email:<br>
                               <input class="celdas" type="email" name="email"/><br><br>

                               *Mensaje:<br>
                               <textarea class="celdas" name="message" rows="4" style="height:80px"></textarea><br><br>

                               <button type="submit" class="btn btn-primary">Enviar</button>

                      </form>
                    </div>
                    </center>
                  </div>
                </div>
              </div>
   <?php
   include("./footer.php");
   ?>
