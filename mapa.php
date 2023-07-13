  <?
  
 
      $file = 'img/publicidad.jpg';
      
      // Configuración de encabezados HTTP
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="'.basename($file).'"');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      
      // Leer el archivo y enviarlo como respuesta HTTP
      readfile($file);
      exit;
  
  


    if (isset($_POST["submit"])) {
      $name= $_POST['name'];
      $empresa = $_POST['empresa'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $from = 'Contact form';
      $to = 'fong.antonio98@gmail.com';
      $to = 'Mensaje de contact form';
        
        /*Validacion nombre*/
        if (!$_POST['name']) {
          $errName='Por favor, especifique su nombre';
        }

        
        /*Validacion tel*/
        if (!$_POST['tel']) {
          $errTel='Por favor, especifique su teléfono';
        }

        /*Validacion tel*/
        if (!$_POST['email'] || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
          $errEmail='Por favor, especifique una direccion de correo válida';
        }

        /*Validacion email*/
        if (!$_POST['message']) {
          $errMessage='Por favor, especifique un mensaje';
        }

      }
  ?>



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
  

<!--      Mapa      -->
<!--  <section class="jumbotron">
      <div class="container">
          <h1 class="text-center"><section class="glyphicon glyphicon-pushpin"></section> </h1>
          <h1 class="text-center">Contacto</h1>
      </div>
  </section> -->
  <!--      End Mapa -->
<!-- Imagen principal contacto       -->
<div class="container-fluid sinpadding margen-sup-b">
  <div class="row sinpadding">
    <div class="col-lg-12 sinpadding"> 
      <img src="img/contacto.png" class="img-responsive" alt="">
    </div>
  </div>
</div>
<!-- end Imagen principal contacto  -->
<section class="jumbotron jumbotron-ms1 ">
</br></br>
      <h1 id="text-marino"  class="text-center"><section class="fa fa-user"></section> </h1>
      <h1 id="text-marino"  class="text-center ">Contacto</h1>
      <hr class="hr-quie-som">
      <p class="empresa text-center"><em>“Nos aseguramos de responder a las necesidades de cada cliente mediante soluciones, para la reparacion de su equipo”.</em></p> 
</br></br></br></br>
</section>


<!-- Formulario -->
</br></br>
<section>
<div class="container">

<div class="row">

<!-- <div class="col-md-12  col-lg-5 col-md-offset-2">   -->
    <div class="col-md-6">
      <img src="img/secretaria.jpg" class="img-responsive" alt="">
    </div>

  <div class="col-md-5 col-md-offset-1">
    <div class="signup-form-container">
    
         <!-- form start -->
         <!--<form role="form" id="register-form" autocomplete="off"> -->
        <form role="form" id="contactForm" autocomplete="off">
        </br></br>
         
         <div class="form-header">
          <!--<h2 class="form-signin-heading"> <span class="glyphicon glyphicon-pencil align=pull-right"> Mensaje</span></h2>-->

          <!-- <h3 class="form-title"><i class="fa fa-user"></i> Sign Up</h3> -->
        
   
          <h3 class="form-title"><i></i>Cotiza Aquí</h3>

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
                     
                     <!-- ESTE ES ELOTRO <label for="name" class="h4">Name</label> -->
                     <input id="name"  name="name" type="text" class="form-control" placeholder="Nombre" data-error="Error en el nombre" required>
  
                     <div class="help-block with-errors"></div>
                   </div>

                   <!-- <span class="help-block" id="error"></span>  -->
              </div>

            <!-- Era prueba
            <div class="form-group has-danger">
                <label class="form-control-label" for="inputDanger1">Input with danger</label>
                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                <small class="form-text text-muted">Example help text that remains unchanged.</small>
            </div>-->
              <!-- <input name="name" type="text" class="form-control" placeholder="Username"> -->
              <!--<span class="help-block" id="error"></span> -->

              
             <!-- comente la opcion de empresa en la pagina
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                   
                   
                   <input id="empresa"  name="empresa" type="text" class="form-control" placeholder="Empresa"  data-error="Error en empresa" required>
                   <div class="help-block with-errors"></div>
                   </div>
                  
              </div>-->

              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
                   <!-- <input name="name" type="text" class="form-control" placeholder="Username"> -->
                   
                   <input id="tel" name="tel" type="tel" class="form-control" placeholder="Teléfono"  data-error="Error en teléfono" required>
                   <div class="help-block with-errors"></div>
                   </div>
                   <!-- <span class="help-block" id="error"></span> -->
              </div>

              <!--Era pruueba
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div> -->
 
                        
              <div class="form-group">
                   <div class="input-group">
                   <!-- ESTE ES EL OTRO <label for="email" class="h4">Email</label> -->
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <!-- <input name="email" type="text" class="form-control" placeholder="Email"> -->
                   
                   <input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" data-error="Error en correo" required >
                   <div class="help-block with-errors"></div>
                   </div> 
                   <!--<span class="help-block" id="error"></span>-->                    
              </div>


               <div class="form-group">
                   <div class="input-group">
                   <!-- <label for="message" class="h4 ">Message</label> -->
                   <div class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></div>
                   <!-- <input name="email" type="text" class="form-control" placeholder="Email"> -->
                   <!--<input name="mensaje" type="text" class="form-control" placeholder="Mensaje"> -->
                   <!--<input name="mensaje" type="text" class="form-control" placeholder="Mensaje"> -->
                   
                   <textarea id="message" class="form-control" rows="8" placeholder="Mensaje" data-error="Error en el mensaje"></textarea >
                   <!-- <textarea class="input-group-addon" rows="10" cols="100" >Escribe tu mensaje...</textarea> -->
                   <div class="help-block with-errors"></div>
                   </div> 
                   <!-- <span class="help-block" id="error"></span>-->    
              </div>
                                                
                        
            </div>
            
            <div class="form-footer frm-actions">
                 <!--<button type="submit" class="btn btn-info btn-mio"> -->
                  <button id="form-submit"   class="btn btn-lg btn-primary btn-custom btn-success pull-right" type="submit">
                  <!-- <span class="glyphicon glyphicon-log-in"></span> Sign Me Up ! -->
                   <span class="glyphicon glyphicon-send"></span>  Enviar Mensaje
                 </button>
                   <!-- <div id="msgSubmit" class="h3 text-center hidden">Mensaje Enviado!</div> -->
                   <div id="msgSubmit" class="h3 text-center hidden"></div>

            </div>



            </form>
            
           </div>
</div>

</div><!--Row-->
 </div> <!--container-->
</br></br></br></br>
</section>
<!-- Final del formulario -->

<!--      Mapa      -->

 <!-- <section class="jumbotron jumbotron-ms2">
      <div class="container">
      </div>
      <br/>
  </section>  -->
<!--      End Mapa -->


<!--      Mapa      -->
<!--   <section class="maps"> -->
  <div class="containe-fluid">
    <div class="row">
      <div class="col-xs-12">
  
      <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.834623378695!2d-116.97616219999999!3d32.503848999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d93806951b7f45%3A0x6ad18d4d988eb656!2sAv.%20Ermita%20Sur%204670%2C%20Quinta%20Alta%2C%2022106%20Tijuana%2C%20B.C.!5e0!3m2!1ses-419!2smx!4v1688671032772!5m2!1ses-419!2smx"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!--              <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="350" width="100%"></iframe>

-->
  </div>
  </div> 
<!--   </section> -->
<!--      End Mapa -->
 </div> 


  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer_common.php'; ?>
  
</body>
</html>