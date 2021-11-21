<?php

include('db.php');

if (isset($_POST['SaveRegister2'])) {
  $Nombre = $_POST['Nombre'];
  $NombreEmpresa = $_POST['NombreEmpresa'];
  $Contacto = $_POST['Contacto'];
  $Mail = $_POST['Mail'];
  $Mail2 = $_POST['Mail2'];

  $query = "INSERT INTO contacto(Nombre, NombreEmpresa,Contacto,Mail,Mail2) VALUES ('$Nombre', '$NombreEmpresa','$Contacto','$Mail','$Mail2')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado Exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index2.php');

}

?>