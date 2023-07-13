   
<!--INDEX CARROUSELL BOOTSTRAP-->
   <!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="UTF-8">
     <title>TISOL</title>
     <link rel="shortcut icon" href="img/mundo.ico" type="image/x-icon" />
     <link rel="icon" type="image/png" href="/images/logomkt.png" />
 
 
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/estilos.css">

<!--Tipo de Letra. Letra. Letra. Letra.-->

<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet"> 




<!-- Latest compiled and minified JavaScript -->
   </head>
   <body>


<?php include 'inc/head_common.php'; ?>
<!-- Inicia Carrusel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/estructuras.jpg" alt="Estructuras">
      <div class="carousel-caption">
          <h3>MARKETING STEEL</h3>
          <p>Estructuras</p>
      </div>
    </div>
    <div class="item">
      <img src="img/galvanizado.jpg" alt="Galvanizado">
      <div class="carousel-caption">
          <h3>MARKETING STEEL</h3>
          <p>Galvanizado</p>
      </div>
    </div>
    
    <div class="item">
      <img src="img/varilla.jpg" alt="Varilla">
      <div class="carousel-caption">
            <h3>MARKETING STEEL</h3>
            <p>Varilla</p>
      </div>
    </div>


    <div class="item">
      <img src="img/manufactura.jpg" alt="Manufactura">
      <div class="carousel-caption">
          <h3>MARKETING STEEL</h3>
          <p>Manufactura</p>
      </div>
    </div>

     <div class="item">
      <img src="img/material.jpg" alt="Manufactura">
      <div class="carousel-caption">
          <h3>MARKETING STEEL</h3>
          <p>Manufactura</p>
      </div>
    </div>

     <div class="item">
      <img src="img/rollodelamina.jpg" alt="Manufactura">
      <div class="carousel-caption">
          <h3">Marketing Steel</h3>
          <p">Manufactura</p>
      </div>
    </div>

  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Despues del Carrusel Jumbotron-->
<section class="jumbotron">
<div class="container">
  <br/>
    <!-- <h1 class="text-center">Cotiza Aquí <a href="mapa.php" class="btn btn btn-default">Cotización</a></h1> -->
    <h1 class="text-center">Cotiza Aquí <a href="mapa.php" class="btn btn btn-default">Cotización</a></h1>
    <br/><br/>
  </div>
</section>



<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4"  >
        <div class="thumbnail">
             <img src="img/manufactura_marketingsteel.jpg" alt="" class="src">
             <div class="caption text-center">
               <h3>Servicios</h3>
               <p>Manufactura de acero, trabajos en herrería y galvanizado por inmersión en caliente.</p>
               <a href="" class="btn btn-custom">Servicios</a>
             </div>  
        </div>
      </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="thumbnail">
             <img src="img/productos.jpg" alt="productos.php" class="src">
             <div class="caption text-center">
               <h3 class="center">Productos</h3>
               <p>Las mejores marcas en material para la construcción y desarrollo de tus proyectos.</p>
               <a href="" class="btn btn-custom">Productos</a>
             </div>  
        </div>
        </div>


         <div class="col-xs-12  col-sm-12 col-md-4"> 
         <div class="thumbnail">
             <img src="img/ubicacion.jpg" alt="" class="src">
             <div class="caption text-center">
               <h3>Ubicación</h3>
               <p>Ubicados en la ciudad de Tijuana Baja California.<br/><br/></p>
               <a href="mapa.php" class="btn btn-custom">Ubicación</a>
             </div>  
        </div>
        </div>

      </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>


<!-- Termina Carrusel -->

<script src="js/jquery.js"></script>

<script src="js/main.js"></script>

<script src="assets/jquery.validate.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     
   </body>
   </html>