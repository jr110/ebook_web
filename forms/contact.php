<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
 

  
  
  $Nombre = $_POST['name'];
  $Email = $_POST['email'];
  $Tema = $_POST['subject'];
  $Mensaje =$_POST['message'];

  if(isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['subject']) && !empty($_POST['subject']) &&
    isset($_POST['message']) && !empty($_POST['message']))
    {
      $EnlaceBD = mysql_connect(localhost,root,"") or die ("No se puedo establecer conexion");
      mysql_select_db(nombre,$EnlaceBD) or die("No se encontro la base de datos");

      mysql_query("INSERT INTO nombre VALUES('$Nombre','$Email','$Tema','$Mensaje')");
      echo "Datos enviados correctamente";
    }
    else{
      echo "Error al enviar los datos";
    }


  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

?>
