<?php
        // ini_set("display_errors", "1");
        // error_reporting(E_ALL);
        include '../Database/Controller.php';

        $movie_name = array_column($array,'movie_name');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Add Theater</title>

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
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php

    include("master.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Theater</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Enter Theater Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Theater Name" name="theatername">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Select Movie</label>
              <select class="form-control form-select" aria-label="Default select example" name="selectmovie">
                
                <option selected>Select Movie</option>
                <?php 
                
                for($i=0;$i<sizeof($array);$i++)
                {
                  ?>
                  <option><?php echo $movie_name[$i]; ?></option>
                  <?php
                }

                ?>
                
                </select>
            </div>
          </div>
           <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Enter Movie Time</label>
              <input type="Time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Movie Time" name="movietime">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Enter Total Movie Sheet</label>
              <input type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Total Movie Sheet" name="movieseats">
            </div>
          </div>
           <button type="submit" name="addtheater"  class="btn btn-primary">Add Theater</button>
          <hr>
             <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">Import Excel File</h1>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
          <div class="row">
            <div class="form-group col-md-6">

              <label for="exampleInputEmail1">SELECT EXCEL FILE</label>
                <input type="file" name="excel" class="form-control">
              </div>
            </div>
                <button type="submit" name="submit" class="btn btn-primary" >Import</button>
      </form>
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

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021</strong>
  </footer>
</div>
<!-- ./wrapper -->

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
