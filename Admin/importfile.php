<?php
        // ini_set("display_errors", "1");
        // error_reporting(E_ALL);
        include '../Database/Controller.php';

        $id = array_column($userdata, 'id');
        $email = array_column($userdata, 'email');
        $phone = array_column($userdata, 'phone');
        $password = array_column($userdata, 'password');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="container">
    <div class="row">
        <h2>Import File</h2>
    </div>
    <div class="row">
       <form class="form-inline" action ="#" method="post" enctype="multipart/form-data">
        <label>SELECT EXCEL FILE</label><br>
          <input type="file" name="excel" class="form-control">
          <input type="submit" name="submit" class="btn btn-light" value="IMPORT" style="background-color:#e83e8c; color:#ffff;">
        </form>
    </div>
  </div>
  <?php 
    if(isset($_FILES['excel']['name'])){
      $conn=mysqli_connect("localhost","root","root","ihub");
      include 'xlsx.php';
      if($conn){
        $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
        echo "<pre>";
        print_r($excel->dimension());
        print_r($excel->sheetNames());
        for($sheet=0; $sheet < sizeof($excel->sheetNames());$sheet++)
        {
          $rowcol=$excel->dimension($sheet);
          $i=0;
          if($rowcol[0]!=1 && $rowcol[1]!=1){
          foreach ($excel->rows($sheet) as $key => $row) {
            //print_r($row);
            $q="";
            foreach ($row as $key => $cell) {
              //print_r($cell);
              //echo "<br>";
              if($i==0){
                $q.=$cell." varchar(50),";
              }else
              {
                $q.="'".$cell."',";
              }
            }
            if($i==0){

              $query="CREATE table ".$excel->sheetName($sheet)."(".rtrim($q,",").");";

            }else
            {
              $query="INSERT INTO ".$excel->sheetName($sheet)." values(".rtrim($q,",").");";
            }
            echo $query;
            if(mysqli_query($conn,$query))
            {
              echo "true";
            }
            echo"<br>";
            $i++;
            }
          }
        }
      }
    }
  ?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>


</body>
</html>
