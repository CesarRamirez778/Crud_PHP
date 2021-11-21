<?php include("db.php") ?>
<?php include('Main/header.php') ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- agregar registro FORM -->
      <div class="card card-body">
        <form action="saveRegister.php" method="POST">
        	<em> Toma de datos de la empresa</em>
        	<hr>
			<!-- txt Nombre-->
          <div class="form-group">
         	 <input type="text" name="Nombre" class="form-control" placeholder="Nombre*" required autofocus>
          </div>
           	<!-- Txt Direccion-->
           <div class="form-group">
            <input type="text" name="Direccion" class="form-control" placeholder="Direccion" autofocus>
          </div>
           	<!-- Txt contacto-->
          <div class="form-group">
            <input type="text" name="Contacto" class="form-control" placeholder="Contacto*"required autofocus>
          </div>
           	<!-- Txt Web-->
          <div class="form-group">
            <input type="text" name="Website" class="form-control" placeholder="Sitio Web" autofocus>
          </div>
          	<!-- BTN guardar-->
          <input type="submit" name="saveRegister" class="btn btn-success btn-block" value="guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Contacto</th>
            <th>Web</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM empresa";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Contacto']; ?></td>
            <td><?php echo $row['Website']; ?></td>
            <td>
              <a href="Edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('Main/footer.php'); ?>
