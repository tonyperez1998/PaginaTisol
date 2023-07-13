   
<!--INDEX CARROUSELL BOOTSTRAP-->
   <!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="UTF-8">
     <title>TISOL</title>
     <?php include 'inc/head_common.php'; ?>

     <!--<link rel="shortcut icon" href="img/mundo.ico" type="image/x-icon" /> -->
     
     <!-- NO DEBERIA IR AQUI
     <link rel="icon" type="image/png" href="/images/logomkt.png" />
     -->
 
<!-- Latest compiled and minified JavaScript -->
   </head>
   <body>

<?php include 'inc/header.php'; ?>
<!-- Inicia Carrusel -->

<!--<div id="mycarousel" class="carousel slide margen-inf" data-ride="carousel" data-interval="3000"> -->
  <div id="mycarousel" class="carousel slide margen-sup" data-ride="carousel" data-interval="2700">

    <ul class="carousel-indicators">
      <li data-target="#mycarousel" data-slide-to="0" class="active"  ></li>
      <li data-target="#mycarousel" data-slide-to="1"   ></li>
      <li data-target="#mycarousel" data-slide-to="2"   ></li>
      <li data-target="#mycarousel" data-slide-to="3"   ></li>
    </ul>  

  <div class="carousel-inner i" >
        <div class="item active" >
          <img src="img/rec/15.png" alt="Marketing1" class="img-responsive"> 
          <div class="carousel-caption">

            <!--<h1>Marketing Steel</h1>
            <h4>Galvanizado</h4> -->
          </div>
      </div>

      <div class="item" >
          <img src="img/rec/16.png" alt="Marketing1" class="img-responsive"> 
          <div class="carousel-caption">
            <!--<h1>Marketing Steel</h1>
            <h4>Acero</h4> -->
          </div>
      </div>
  
      <div class="item" >
        <img src="img/rec/17.png" alt="Marketing2" class="img-responsive"> 
        <div class="carousel-caption">
            <!--<h1>Marketing Steel</h1>
            <h4>Estructuras</h4> -->
          </div>
      </div>

      <div class="item" >
        <img src="img/rec/18.png" alt="Marketing2" class="img-responsive"> 
        <div class="carousel-caption">
            <!--<h1>Marketing Steel</h1>
            <h4>Laminado</h4> -->
          </div>
      </div>  

  </div>
  <a class="carousel-control left"  href="#mycarousel" data-slide="prev"  >
      <span class="icon-prev"></span>
  </a>

  <a class="carousel-control right"  href="#mycarousel" data-slide="next"  >
      <span class="icon-next"></span>
  </a>


</div>

<!--Ends carrousel-->


<!--Despues del Carrusel Jumbotron-->
<!--Flat para el boton-->
<!--lOS BOTONES SE TRABAJARON EN MANUFACTURA  -->
  <section class="jumbotron jumbotron-ms3 flat"> 
  <div class="container">  
  <br/><br/>  
      <div class="col-xs-12">
        <h3 style="font-weight:100;" class="text-center">COTIZA TU REPARACION AQUI!</h3>
        <br/><br/> <br/>
        <section class="border text-center">
            <!--<button>COTIZAR</button>-->
            <a href="mapa.php" class="button">COTIZAR</a>

        </section>
        <br/><br/> <br/> 
        <h4 class="text-center"><em>TECH INSIGHTS SOLUTIONS</em></h4>
        <h4 class="text-center"><em>-En TISOL contamos con las herramientas profesionales y clean room, para asegurar la mayor eficiencia en su servicio.-</em> </h4>

        <br/><br/>
      </div>
  </div>
  </section>


<!--
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4"  >
              <div class="hovereffect">
                <img class="img-responsive" src="img/manufactura_marketingsteel.jpg" alt="" >
                  <div class="overlay" >
                    <h2>Hover effect1</h2>
                    <a class="info" href="#">link here</a>    
                  </div>         
              </div>
-->        

<br/><br/><br/><br/>
 <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 text-center"  >
        <!--<div class="thumbnail">
             <img src="img/manufactura_marketingsteel.jpg" alt="" class="src">
             <div class="caption text-center">
               <h3>Servicios</h3>
               <p>Manufactura de acero, trabajos en herrería y galvanizado por inmersión en caliente.</p>
               <a href="" class="btn btn-custom">Servicios</a>
             </div>  
        </div> -->
        <a href="Respaldoinf.php" class="thumbnail enfocado">
          <img src="img/rec/Recuperacion.jpg" alt="">
        </a>
        <h3>Recuperacion</h3>
        <p>Recupera informacion perdida de tus discos de almacenamiento.</p>
         <a href="Respaldoinf.php" class="btn btn-custom">Recuperacion</a> 
        <br/>
         <!-- <section class="border"> -->
            <!-- NO  <button>COTIZAR</button>-->
            <!-- <a href="productos_galvanizado.php" class="button-chico">Servicios</a> -->

        <!-- </section> -->

      </div>

        <div class="col-xs-12 col-sm-12 col-md-4 text-center">
        <!--<div class="thumbnail">
             <img src="img/productos.jpg" alt="productos.php" class="src">
             <div class="caption text-center">
               <h3 class="center">Productos</h3>
               <p>Las mejores marcas en material para la construcción y desarrollo de tus proyectos.</p>
               <a href="" class="btn btn-custom">Productos</a>
             </div>  
        </div>-->

            <a href="MRT_ULTRA.php" class="thumbnail  enfocado">
              <img src="img/rec/computadora(1).png" alt="productos.php">
            </a>
            <h3>Herramienta</h3>
            <p>En TISOL contamos con las herramientas profesionales, como es el clean room, mrt ultra, entre otras...</p>
            <a href="MRT_ULTRA.php" class="btn btn-custom">HERRAMIENTA</a>
            <br/>
            <!-- <section class="border"> -->
                      <!--  NO <button>COTIZAR</button>-->
              <!-- <a href="productos_lamina.php" class="button-chico">Productos</a> -->
            <!-- </section> -->

        </div>


         <div class="col-xs-12  col-sm-12 col-md-4 text-center"> 
         <!--<div class="thumbnail">
             <img src="img/ubicacion.jpg" alt="" class="src">
             <div class="caption text-center">
               <h3>Ubicación</h3>
               <p>Ubicados en la ciudad de Tijuana Baja California.<br/><br/></p>
               <a href="mapa.php" class="btn btn-custom">Ubicación</a>
             </div>  
        </div> -->
        <a href="mapa.php" class="thumbnail enfocado">
              <img src="img/ubicacion.jpg" alt="mapa.php">
            </a>
            <h3>Ubicación</h3>
            <p class="margen-inf">Ubicados en la ciudad de Tijuana Baja California.</p>
            <a href="mapa.php" class="btn btn-custom">Ubicación</a>

            <br/>
            <!-- <section class="border"> -->
              <!--   NO <button>COTIZAR</button>-->
              <!-- <a href="mapa.php" class="button-chico">Ubicación</a> -->
            <!-- </section> -->
        </div> 

      </div>
    </div>  
<br/>


<!--
<!<div class="container-fluid" >
  <div class="row">

  <ul class="caption-style-4">
    <li>
          <img class="img-responsive" src="img/manufactura_marketingsteel.jpg" alt="productos.php" >

          <div class="caption">

            <div class="blur"></div>

            <div class="caption-text">

              <h1 class="text-center" >Servicios</h1>

              <p class="text-center">Manufactura de acero, trabajos en herrería y galvanizado por inmersión en caliente.</p>

            </div>

          </div>

    </li>
  </ul>

  <ul class="caption-style-4">
    <li>
          <img class="img-responsive"  src="img/productos.jpg" alt="">

          <div class="caption">

            <div class="blur"></div>

            <div class="caption-text">

              <h1>Productos</h1>

              <p>Las mejores marcas en material para la construcción y desarrollo de tus proyectos.</p>

            </div>

          </div>

    </li>
  </ul>

  <ul class="caption-style-4">
    <li>
          <img class="img-responsive" src="img/ubicacion.jpg" alt="">

          <div class="caption">

            <div class="blur"></div>

            <div class="caption-text">

              <h1>Ubicación</h1>

              <p>Ubicados en la ciudad de Tijuana Baja California.</p>

            </div>

          </div>

    </li>
  </ul>
  
</div>
</div>    -->


<br/><br/><br/><br/>



</div>




<?php include 'inc/footer.php'; ?>


<!-- Termina Carrusel -->

<script src="js/jquery.js"></script>

<script src="js/main.js"></script>

<script src="assets/jquery.validate.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     
   </body>
   </html>