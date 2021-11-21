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
        <form action="SaveRegister2.php" method="POST">
        	<em> Toma Datos del contacto</em>
        	<hr>
			     <!-- txt Nombre-->
          <div class="form-group">
         	 <input type="text" name="Nombre" class="form-control" placeholder="Nombre*" required autofocus>
          </div>
          <!-- txt Nombre empresa-->
          <div class="form-group">
           <input type="text" name="NombreEmpresa" class="form-control" placeholder="Nombre de la empresa*" required autofocus>
          </div>
           <!-- txt Nombre celular-->
          <div class="form-group">
           <input type="tel" name="Contacto" class="form-control" placeholder="Numero de telefono*" required autofocus>
          </div>
           <!-- txt Email1-->
          <div class="form-group">
           <input type="email" name="Mail" class="form-control" placeholder="Email*" required autofocus>
          </div>
           <!-- txt Email2-->
          <div class="form-group">
           <input type="email" name="Mail2" class="form-control" placeholder="Email 2"  autofocus>
          </div>
          
          	<!-- BTN guardar-->
          <input type="submit" name="SaveRegister2" class="btn btn-success btn-block" value="guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Nombre Empresa</th>
            <th>Contacto</th>
            <th>Email</th>
            <th>Email2</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM contacto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['NombreEmpresa']; ?></td>
            <td><?php echo $row['Contacto']; ?></td>
            <td><?php echo $row['Mail']; ?></td>
            <td><?php echo $row['Mail2']; ?></td>
            <td>
              <a href="Edit2.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i> 
              </a>
               <a href="Delete2.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
