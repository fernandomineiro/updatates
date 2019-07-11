<?php 
include "menu.php";
include "config.php";
$idusuario= $_SESSION['idusuariocicspro'];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SMS
        <small>Registro</small>
      </h1>
      
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
            <form action="importexcel2.php" method="post" name="upload_excel" enctype="multipart/form-data">
   <div>
      <div class="col-xs-6">
         <label>Import CSV/Excel File:</label>
         <input type="file" class="form-control" multiple name="filename" id="filename"><a href="exemplo.zip"> EXEMPLO DE ARQUIVO PARA IMPORTAÇÃO</a>
         <br />
         <button type="submit" id="submit" class="btn btn-primary" name="submit" data-loading-text="Loading...">Upload</button>
      </div>
   </div>
</form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SMS</th>
                  <th>NOME</th>
                  <th>EMPRESA</th>
                  <th>ESTADO</th>
                  <th>CIDADE</th>
                  <th>DATA DE NASCIMENTO</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    $sql = "SELECT * FROM sms WHERE idusuario='$idusuario'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
                  <td><?php echo $row["sms"]; ?></td>
                  <td><?php echo $row["nome"]; ?></td>
                  <td><?php echo $row["empresa"]; ?></td>
                  <td><?php echo $row["estado"]; ?></td>
                  <td><?php echo $row["cidade"]; ?></td>
                  <td><?php echo $row["datadenascimento"]; ?></td>
                  
                </tr>
                <?php
                  }
                }
                ?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "footer.php";
  ?>

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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
