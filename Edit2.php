<?php
include("db.php");
$Nombre = '';
$Direccion = '';
$Contacto = '';
$Website = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM contacto WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $NombreEmpresa = $row['NombreEmpresa'];
    $Contacto = $row['Contacto'];
    $Mail = $row['Mail'];
    $Mail2 = $row['Mail2'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nombre = $_POST['Nombre'];
  $NombreEmpresa = $_POST['NombreEmpresa'];
  $Contacto = $_POST['Contacto'];
  $Mail = $_POST['Mail'];
  $Mail2 = $_POST['Mail2'];


  $query = "UPDATE contacto set Nombre = '$Nombre', NombreEmpresa = '$NombreEmpresa',Contacto = '$Contacto',Mail = '$Mail/',Mail2='Mail2' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro Actualizado exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('Main/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
         <!-- Nuevo txt Nombre-->
        <div class="form-group">
          <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Actualizar Nombre">
        </div>
        <!-- Nuevo txt NombreEmpresa-->
       <div class="form-group">
          <input name="NombreEmpresa" type="text" class="form-control" value="<?php echo $NombreEmpresa; ?>" placeholder="Actualizar Nombre">
        </div>
         <!-- Nuevo txt contacto-->
         <div class="form-group">
          <input name="Contacto" type="text" class="form-control" value="<?php echo $Contacto; ?>" placeholder="Actualizar Nombre">
        </div>
        <!-- Nuevo txt email1-->
          <div class="form-group">
          <input name="Mail" type="text" class="form-control" value="<?php echo $Mail; ?>" placeholder="Actualizar Nombre">
        </div>
        <!-- Nuevo txt email2-->
          <div class="form-group">
          <input name="Mail2" type="text" class="form-control" value="<?php echo $Mail2; ?>" placeholder="Actualizar Nombre">
        </div>

        <button class="btn-success" name="update">
          Actualizar Datos
        </button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include('Main/footer.php'); ?>
