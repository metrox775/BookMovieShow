<?php

session_start();

?>

<?php
// ini_set("display_errors", "1");
// error_reporting(E_ALL);
//echo $name;
include('Database/Controller.php');

$movie_name = array_column($booking, 'movie_name');
$theater_name = array_column($booking,'theater_name');
$movie_timing= array_column($booking, 'movie_timing');
$total_sheet= array_column($booking, 'total_sheets');

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Listing &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">

  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<style type="text/css">

  /* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #777;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}
    /* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 20px;
;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
ul.demo {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
li{
	float: left;

}
li.active{
  color: red;
}
li.box {
  box-sizing: border-box;
  width: 5%;
  border: 5px solid red;
 }
 a{
 	color: black;
 }
  </style>
  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    
      <form class="modal-content animate" action="" method="post">
   <!--  <div class="imgcontainer">
      <span  class="close" title="Close Modal">&times;</span>
      
    </div> -->

    <div class="container">
      <center><div class="row justify-content-center px-3 mb-3">
               <h2 class="mb-5 text-center heading">Hii! <?php echo $_SESSION['username']; ?> How Many Seats? </h2>
            </div>
      </center>
         <!-- <h3 class="mb-5 text-center heading">BookMovieShow</h3>
          <h6 class="msg-info">Please login to your account</h6> -->
      <center><div class="row">
        <div class="col-md-12">
          <input type="hidden" id="btnClickedValue" name="btnClickedValue" />
          <input type="hidden" name="totalseats" id="totalseats" value=""> 
          <input type="hidden" name="selectedseats" id="selectedseats">



          <input type="hidden" name="moviename" value="<?php echo $movie_name[0];?>" />
          <input type="hidden" name="theatername" value="<?php echo $theater_name[0];?>" />
          <input type="hidden" name="movietiming" value="<?php echo $movie_timing[0];?>" />
          <input type="hidden" name="totalseat" value="<?php echo $total_sheet[0]; ?>" />
        </div>
        <div class="col-md-12">
        <nav aria-label="...">
			  <ul class="pagination pagination-lg">
            <?php 
            $j=15; 
            for($i=1; $i < $total_sheet[0]+1;$i++ )
              {
                if($i==$j)
                {
                  echo "<br>";
                  $j = $j+10; 
                }
              ?>
				          <li class="page-item" ><input type="hidden" id="tid"value="<?php echo $i; ?>"/><a class="page-link" href="#"><?php echo $i; ?></a></li>

			       <?php
             }
             ?>
			  </ul>
			</nav>
    </div>
       <div class="col-md-12">
        <button type="submit" id="print" name="buyticket" class="btn btn-primary" style="background-color: #333;">Buy Ticket</button>
         <div>
      </div></center>
      <p id = "GFG_DOWN"></p>
    </div>

    
  </form>

  

  </div>
  <!-- END fh5co-page -->

  </div>
  <!-- END fh5co-wrapper -->

  <!-- jQuery -->


  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function() 
 {
    $('li').click(function(e) 
    { 

     var value = $(this).attr('value');
     document.getElementById("btnClickedValue").value = value;
      
      $(this).addClass('active');
      
     });

    });


   $(function () {
      var counter = 0;
      var arr= [];
  $("form li").on('click', function () {
    var tid = $('input[type="hidden"]', this).val();
    arr.push($(this).text())
    counter = counter + 1 ;
    alert (counter);
    alert ('"' + arr.join('", "') + '"');
    var x = arr.toString();
    console.log(x);
    document.getElementById("selectedseats").value = x;
    document.getElementById("totalseats").value = counter;



  });
});
    
   
  </script>
  </body>
</html>

