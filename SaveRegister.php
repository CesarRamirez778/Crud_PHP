<?php

include('db.php');

if (isset($_POST['saveRegister'])) {
  $Nombre = $_POST['Nombre'];
  $Direccion = $_POST['Direccion'];
  $Contacto = $_POST['Contacto'];
  $Website = $_POST['Website'];
  $query = "INSERT INTO empresa(Nombre, Direccion,Contacto,Website) VALUES ('$Nombre', '$Direccion','$Contacto','$Website')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>