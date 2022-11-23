<?php
  var_dump($_POST);  
  $enlaceBD = mysqli_connect('localhost', 'root', '', 'ebook') or die(mysql_error($error));
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $tema = $_POST['subject'];
  $mensaje = $_POST['message'];

  // mysql_select_db(ebook,$EnlaceBD) or die("No se encontro la base de datos");
  $consulta = "INSERT INTO contactos(nombre, email, Asunto, Mensaje) VALUES ('$nombre','$email','$tema','$mensaje')";
  mysqli_query($enlaceBD,$consulta);
  mysqli_close($enlaceBD);



?>
