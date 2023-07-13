<?php
$name 		= $_POST["name"];
$empresa 	= $_POST["empresa"];
$tel 		= $_POST["tel"];
$email 		= $_POST["email"];
$message 	= $_POST["message"];
 
$EmailTo = "deliaygambino@hotmail.com";
$Subject = "Solicitud de cotización:";
 
// prepare email body text
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Empresa: ";
$Body .= $empresa;
$Body .= "\n";

$Body .= "Tel: ";
$Body .= $tel;
$Body .= "\n";

 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>