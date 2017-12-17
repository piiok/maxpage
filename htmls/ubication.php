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
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <center>
                      <form action="" method="post">
                              <div>
                                  <input type="text" name="first_name" placeholder="Nombre"/>
                              </div><br>
                              <div>
                                  <input type="text" name="last_name" placeholder="Apellido"/>
                              </div><br>
                              <div>
                                  <input type="text" name="email" placeholder="Email"/>
                              </div><br>
                              <div>
                                  <div class="small">Envianos una breve descripción de tu solicitud.</div>
                                  <textarea name="message" placeholder="Mensaje"></textarea>
                              </div><br>
                              <button type="submit" class="btn btn-primary">Enviar</button>
                              <br><br>
                      </form>
                    </center>
                </div>
              </div>
            <br>
          </div>
   </div>
   <?php
   include("./footer.php");
   ?>
