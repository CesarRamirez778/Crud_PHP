<?php
include("db.php");
$Nombre = '';
$Direccion = '';
$Contacto = '';
$Website = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM empresa WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Direccion = $row['Direccion'];
    $Contacto = $row['Contacto'];
    $Website = $row['Website'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nombre = $_POST['Nombre'];
  $Direccion = $_POST['Direccion'];
  $Contacto = $_POST['Contacto'];
  $Website = $_POST['Website'];

  $query = "UPDATE empresa set Nombre = '$Nombre', Direccion = '$Direccion',Contacto = '$Contacto',Website = '$Website' WHERE id=$id";
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
       <!-- Nuevo txt Direccion-->
         <div class="form-group">
          <input name="Direccion" type="text" class="form-control" value="<?php echo $Direccion; ?>" placeholder="Actualizar Direccion">
        </div>
        <!-- Nuevo txt contacto-->
         <div class="form-group">
          <input name="Contacto" type="text" class="form-control" value="<?php echo $Contacto; ?>" placeholder="Actualizar Contacto">
        </div>
       <!-- Nuevo txt website-->
        <div class="form-group">
          <input name="Website" type="text" class="form-control" value="<?php echo $Website; ?>" placeholder="Actualizar Website">
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
