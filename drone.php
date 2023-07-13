  <!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="UTF-8">
     <title>TISOL</title>
     
        <?php include 'inc/head_common.php'; ?>

<!-- Latest compiled and minified JavaScript -->
   </head>
   <body>


<?php include 'inc/header.php'; ?>

<!--Img superior-->
<div class="container-fluid sinpadding margen-sup-b">
  <div class="row sinpadding">
    <div class="col-lg-12 sinpadding"> 
      <img src="img/11.png" class="img-responsive" alt="">
    </div>
  </div>
</div>
<!--End Img superior-->
</br></br></br>

<div class="container margen-sup">
	<div class="row">
		<div class="col-sm-12 text-center"  >
       <section class="border flat gradient press">
            <button onclick="changeTxtImg('bt-DATOS','img/dron1.jpg','');" id="bt-DATOS">DRONES</button>
            <!--<button id="bt-ROLLO">ROLLO</button>
            <button id="bt-INSTALACION">INSTALACION</button>-->
    </section>

</br></br></br>

		</div>
    </div>
		
    <div class="row">
<!--</div> -->
       <div class="col-sm-12 col-md-6">
      <!--<div class="col-sm-12 col-md-7 col-md-offset-1"> -->
           <h1>DRONES</h1>
           <p>Un dron es un vehículo aéreo no tripulado, es decir, que es un tipo de aeronave que es capaz de desplazarse por el aire sin que haya un piloto a bordo. Pueden ser controlados de manera remota, o por medio de programación específica mediante software y GPS para que operen de forma autónoma.

También son conocidos con el nombre de UAV o RPA, aunque es necesario hacer una diferenciación entre las características que distinguen a estos tipos de drones según sus siglas.</p>
           </br>
            <h1>FALLAS</h1>
              <li>Rotura de brazos o en la estructura.</li>
              <li>Revisión de las baterías.</li>
              <li>Revisión de los líquidos.</li>
              <li>Revisión de los equipos de comunicación.</li>
              <li>Revisión de la estructura, equipos y sistemas.</li>
      </div>

      <div class="col-sm-12 col-md-6">
      <!--<div class="col-sm-12 col-md-7 col-md-offset-1"> -->
           <img id="imagen" class="img-rounded  img-responsive " src="img/dron1.jpg" alt="">
      </div>
    </div>
    
    <?php include 'inc/catalog-cotizar.php'; ?>

    </div>

</div>

<?php include 'inc/footer.php'; ?>
<?php include 'inc/footer_common.php'; ?>
    
     
   </body>
   </html>