
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
        Inicio
        <small>Controle do painel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
            $sql = "SELECT quantidade FROM valorsms WHERE idusuario='$idusuario'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                  $sms=$row["quantidade"];
                }
              }
              
            ?>
              <h3><?php echo"$sms"; ?></h3>

              <p>Crédito(s)</p>
            </div>
            <div class="icon">
              <i class="fa fa-wechat"></i>
            </div>
            <a href="#" class="small-box-footer">
              Mais informações <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php
            $sql = "SELECT COUNT(id) AS a FROM registro WHERE idusuario='$idusuario'";
            $result = $conn->query($sql);
            
            if (@$result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $registro=$row["a"];
                }
              }
              if (@$registro == NULL){
                $registro = 0;
              } 
            ?>
              <h3><?php echo"$registro" ?></h3>

              <p>Envio(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="registro.php" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <?php
            $sql = "SELECT COUNT(id) AS b FROM usuario WHERE idusuario='$idusuario'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $usuario=$row["b"];
                }
              }
              
            ?>
              <h3><?php echo"$usuario" ?></h3>

              <p>Usuario(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <?php
            if ($_SESSION['tipocicspro'] == "admin"){
                ?>
            <a href="tableusuario.php" class="small-box-footer">Mais informações<i class="fa fa-arrow-circle-right"></i></a>
        
            <?php
        }
        else{
          ?>
          <a href="" class="small-box-footer">Sem informações</a>
          
          <?php
        }
            ?>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <?php
            $sql = "SELECT COUNT(id) AS c FROM sms WHERE idusuario='$idusuario'";
            $result = $conn->query($sql);
            
            if (@$result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $sms=$row["c"];
                }
              }
              if (@$sms == NULL){
                $sms = 0;
              } 
            ?>
              <h3><?php echo"$sms" ?></h3>

              <p>Telefone(s)</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
            <a href="tablesms.php" class="small-box-footer">Mais informações<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      
            <!-- /.chat -->
            
            <!-- /.box-header -->
            
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include"footer.php";
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
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

