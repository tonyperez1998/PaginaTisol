   <!DOCTYPE html>
   <html lang="es">
   <head>
     <meta charset="UTF-8">
     <title>TISOL</title>
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
  

<!--      Mapa      -->
<!--  <section class="jumbotron">
      <div class="container">
          <h1 class="text-center"><section class="glyphicon glyphicon-pushpin"></section> </h1>
          <h1 class="text-center">Contacto</h1>
      </div>
  </section> -->
  <!--      End Mapa -->
<!-- Imagen principal contacto      -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 sinpadding"> 
      <img src="img/contacto.jpg" class="img-responsive" alt="">
    </div>
  </div>
<!--</div> div del container 1-->
<!-- end Imagen principal contacto  -->
<section class="jumbotron jumbotron-ms1 sinpadding ">
      <h1 id="text-marino"  class="text-center"> <section class="fa fa-user"></section> </h1>
      <h1 id="text-marino"  class="text-center ">Contacto</h1>
      <hr class="hr-quie-som">
      <p class="empresa text-center">“Servir a las necesidades de nuestros clientes en calidad, costo y servicio creando valor para nuestra empresa y sus colaboradores; siempre buscando el éxito y ser mejores día con día”.</p> 
</section>





<!-- Formulario -->
</br></br></br>
<section>
<!--<div class="container"> container 2-->

<div class="row">

<!-- <div class="col-md-12  col-lg-5 col-md-offset-2">   -->
    <div class="col-md-5 col-md-offset-1">
      <img src="img/contacto-marketing.jpg" class="img-responsive" alt="">
    </div>


  <!--Formulario-->

  <div class="col-md-6 ">
    <div class="signup-form-container">
    
         <!-- form start -->
         <!--<form role="form" id="register-form" autocomplete="off"> -->
        <form role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
          <!--<h2 class="form-signin-heading"> <span class="glyphicon glyphicon-pencil align=pull-right"> Mensaje</span></h2>-->

          <!-- <h3 class="form-title"><i class="fa fa-user"></i> Sign Up</h3> -->
        
   
          <!--<h3 class="form-title"><i class="fa fa-user"></i> <span class="glyphicon glyphicon-pencil align=pull-right"> Mensaje<
            /span></h3> -->
          </br></br></br>
         <!-- <h2 class="form-signin-heading"><i class="fa fa-user"></i> Contacto</span></h2> -->            
         <!--<div class="pull-right"> -->
         <!--<h3 class="form-title pull-right"><span class="glyphicon glyphicon-pencil"></span></h3> -->
         <!--</div> -->
                      
         </div>
         
         <div class="form-body">
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <!-- <input name="name" type="text" class="form-control" placeholder="Username"> -->
                   <input name="name" type="text" class="form-control" placeholder="Nombre">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

            <!-- Era prueba
            <div class="form-group has-danger">
                <label class="form-control-label" for="inputDanger1">Input with danger</label>
                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                <small class="form-text text-muted">Example help text that remains unchanged.</small>
            </div>-->

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   <!-- <input name="name" type="text" class="form-control" placeholder="Username"> -->
                   <input name="empresa" type="text" class="form-control" placeholder="Empresa">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                   <!-- <input name="name" type="text" class="form-control" placeholder="Username"> -->
                   <input name="tel" type="text" class="form-control" placeholder="Teléfono">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>

              <!--Era pruueba
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div> -->
 
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <!-- <input name="email" type="text" class="form-control" placeholder="Email"> -->
                   <input name="email" type="text" class="form-control" placeholder="Correo electrónico">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>


               <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></div>
                   <!-- <input name="email" type="text" class="form-control" placeholder="Email"> -->
                   <!--<input name="mensaje" type="text" class="form-control" placeholder="Mensaje"> -->
                   <!--<input name="mensaje" type="text" class="form-control" placeholder="Mensaje"> -->
                   <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Mensaje"></textarea>

                   <!-- <textarea class="input-group-addon" rows="10" cols="100" >Escribe tu mensaje...</textarea> -->
                   
                   </div> 
                   <span class="help-block" id="error"></span>    
              </div>
                                                
                        
            </div>
            
            <div class="form-footer frm-actions">
                 <!--<button type="submit" class="btn btn-info btn-mio"> -->
                  <button class="btn btn-lg btn-primary btn-custom" type="submit">
                  <!-- <span class="glyphicon glyphicon-log-in"></span> Sign Me Up ! -->
                   <span class="glyphicon glyphicon-send"></span>  Enviar Mensaje
                 </button>
            </div>


            </form>
            
           </div>
</div>

</div><!--Row-->
<!--</div>  --> <!--container2-->
</section>
<!-- Final del formulario -->

<!--      Mapa      -->

  <section class="jumbotron jumbotron-ms2">
      <div class="container">
      </div>
      <br/>
  </section>  
<!--      End Mapa -->


<!--      Mapa      -->
<!--   <section class="maps"> -->
<!--  <div class="containe-fluid"> container 2-->
    <div class="row">
      <div class="col-xs-12">
  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.976010726337!2d-117.01791985054471!3d32.4733334066244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d937b8d7a1d771%3A0x4fbe54b01e09a90b!2sMarketing+Steel+Comercializadora!5e0!3m2!1sen!2smx!4v1508035209637" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  <!--              <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="350" width="100%"></iframe>

-->
  </div>
  </div> 
<!--   </section> -->
<!--      End Mapa -->
 </div><!--End Container-->


  <?php include 'inc/footer.php'; ?>

  <script src="js/jquery.js"></script>

  <script src="js/main.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  
</body>
</html>