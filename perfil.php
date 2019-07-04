<?php 

include"menu.php";?>
<?php include "config.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuário
        <small>Configurações</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php
            $idusuario = $_SESSION['id']; 
     $sql = "SELECT * FROM image where id_usuario ='$idusuario'";
	 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	 ?>
	  
    <img class="profile-user-img img-responsive img-circle"  src="<?php echo $row['location']; ?>" alt="User profile picture">
    
	<?php 
	  }
    }
    else{
      ?>
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      <?php
    }
  ?>
 
              <h3 class="profile-username text-center"><?php echo $_SESSION['nome'];?></h3>
<?php
$ola =$_SESSION['tipo'];
?>
              <p class="text-muted text-center"><?php echo"$ola";?></p>
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            
                            
                                <div class="control-group">
                                    <label class="control-label" for="input01"></label>
                                    <div class="controls">
                                        <input type="file" name="image" class="font"  required> 
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" class="btn btn-primary btn-block" name="submit" class="btn btn-success">Mudar foto</button>
                                    </div>
                                </div>
                            </form>
              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <?php
                $nome = $_SESSION['nome'];
                $sql = "SELECT COUNT(id) AS contador FROM registro WHERE usuario ='$nome'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $numeros=$row["contador"];
                    }
                  }
                
                ?>
                  <b>Envio de sms</b> <a class="pull-right"><?php echo"$numeros"; ?></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Pessoal</a></li>
              <li><a href="#timeline" data-toggle="tab">Senha</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <?php
                $sql = "SELECT * FROM usuario WHERE nome = '$nome'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name =  $row["nome"];
      $email =  $row["email"];

        }
} 
?>
                <form class="form-horizontal" method="POST" action="">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Novo nome</label>

                    <div class="col-sm-10">
                      <input type="text" required class="form-control" name="nome"value="<?php echo"$nome" ?>" id="inputName" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Senha</label>

                    <div class="col-sm-10">
                      <input type="password" required place name="senha" class="form-control" id="inputName" >
                    </div>
                  </div>
                 
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    
                      <button type="submit" class="btn btn-danger" name="atualizar">Atualizar</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="active tab-pane" id="activity">
                <!-- Post -->
                
                <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Senha antiga</label>

                    <div class="col-sm-10">
                      <input type="password" required name="senhaantiga" class="form-control" id="inputName">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Senha nova</label>

                    <div class="col-sm-10">
                      <input type="text" required name="senha" class="form-control" id="inputName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Repetir senha</label>

                    <div class="col-sm-10">
                      <input type="password" required name="repetirsenha" class="form-control" id="inputName"  placeholder="">
                    </div>
                  </div>
                 
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="atualizarsenha" class="btn btn-danger">Atualizar</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->
              </div>
              </div>

              <?php
              if (isset($_POST["atualizar"])){
                
                $novo= $_POST["nome"];
                $senha= $_POST["senha"];

                
                $sql = "SELECT senha FROM usuario Where nome='$nome' and senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $sql = "UPDATE usuario SET nome='$novo' WHERE senha='$senha'";

  if ($conn->query($sql) === TRUE) {
      
      $_SESSION['nome'] = $novo;
      echo "<script>window.location = 'perfil.php'</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}    
 else {
    echo "Senha errada";
}
}               
                
                
                
                if (isset($_POST["atualizarsenha"])){
                  $senhaantiga= $_POST["senhaantiga"];
                  $senha= $_POST["senha"];
                  $repetirsenha= $_POST["repetirsenha"];
                    if($senha == $repetirsenha){
                    $sql = "SELECT senha FROM usuario where senha = '$senhaantiga' and nome='$nome'";
                    $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      $sql = "UPDATE usuario SET senha='$senha' WHERE nome='$nome'";
                        if ($conn->query($sql) === TRUE) {
                         echo "Senha atualizada com sucesso";
                         } else {
                         echo "erro: " . $conn->error;
                         }
                      } 
                      else {
                      echo "Senha errada";
                      } 
                    }
                   else{
                     echo"senhas diferentes";
                  }
                }
              ?>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0
    </div>
    <strong>
    CICS
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
 if (isset($_POST['submit'])) {
  $idusuario = $_SESSION['id'];                         
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
  $image_size = getimagesize($_FILES['image']['tmp_name']);

  $location = "upload/" . $_FILES["image"]["name"];
  
  
    $sql = "DELETE FROM image WHERE id_usuario='$idusuario'";

  if ($conn->query($sql) === TRUE) {
    if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'. $_FILES["image"]['name'])) {
      $sql = "INSERT INTO image (location, id_usuario)
      VALUES ('$location', '$idusuario')";
      
      if ($conn->query($sql) === TRUE) {
        echo "<script>window.location = 'perfil.php'</script>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
   
   
    }
    else {
      echo "File was not uploaded";
   }
    
   } else {
    echo "Error deleting record: " . $conn->error;
}
 




  

  
 }
?>
 
