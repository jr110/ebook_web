<?php
  //var_dump($_POST);  
  //$enlaceBD = mysqli_connect('localhost', 'root', '', 'ebook') or die(mysqli_error($error));
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $tema = $_POST['subject'];
  $mensaje = $_POST['message'];

  // mysql_select_db(ebook,$EnlaceBD) or die("No se encontro la base de datos");
  $conexion =mysqli_init();
  mysqli_ssl_set($conexion,null,null,"ssl/BaltimoreCyberTrustRoot.crt.pem",null,null);
  mysqli_real_connect($conexion,"ebookserver.mysql.database.azure.com","erick@ebookserver","e18212247!","ebook", 3306, 
    MYSQLI_CLIENT_SSL) or die("Error al conectar" . mysqli_error($error) );
  session_start();
  if(!empty($_POST['name'])){
    $consulta = "INSERT INTO contactos(nombre, email, Asunto, Mensaje) VALUES ('$nombre','$email','$tema','$mensaje')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header("Location: enviado.html");
  }else{
    header("Location: contact.html");
  }
  



?>
