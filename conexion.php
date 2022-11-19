<?php
  

  $EnlaceBD = mysqli_connect('127.0.0.1:5500', 'root', '', 'ebook') or die(mysql_error($error));

  insertar($EnlaceBD);
 

  function insertar($EnlaceBD){
    $Nombre = $_POST['name'];
    $Email = $_POST['email'];
    $Tema = $_POST['subject'];
    $Mensaje = $_POST['message'];

    // mysql_select_db(ebook,$EnlaceBD) or die("No se encontro la base de datos");
    $consulta = "INSERT INTO contactos(nombre, email, Asunto, Mensaje) 
      VALUES ('$Nombre','$Email','$Tema','$Mensaje')";
    mysqli_query($EnlaceBD,$consulta);
    mysqli_close($EnlaceBD);
  }


?>
