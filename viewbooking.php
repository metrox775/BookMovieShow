<?php

session_start();

?>

<?php
// ini_set("display_errors", "1");
//  error_reporting(E_ALL);
//echo $name;
include('Database/Controller.php');

$movie_name = array_column($tickets, 'movie_name');
$theater_name = array_column($tickets,'theater_name');
$movie_timing= array_column($tickets, 'timing');
$total_sheet= array_column($tickets, 'total_seat');
//$booking_sheet= array_column($tickets, 'booking_seat');
$selected_seat=array_column($tickets, 'selectedseats');

print_r($selected_seat);
print_r($total_sheet);


?>
<html>
  <head>
     <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>


    <style type="text/css">



    @import url('https://fonts.googleapis.com/css?family=Oswald');
*
{
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box
}

body
{
  background-color: #dadde6;
  font-family: arial
}

.fl-left{float: left}

.fl-right{float: right}

.container
{
  width: 90%;
  margin: 100px auto
}

h1
{
  text-transform: uppercase;
  font-weight: 900;
  border-left: 10px solid #fec500;
  padding-left: 10px;
  margin-bottom: 30px
}

.row{overflow: hidden}

.card
{
  display: table-row;
  width: 49%;
  background-color: #fff;
  color: #989898;
  margin-bottom: 10px;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  border-radius: 4px;
  position: relative
}

.card + .card{margin-left: 2%}

.date
{
  display: table-cell;
  width: 25%;
  position: relative;
  text-align: center;
  border-right: 2px dashed #dadde6
}

.date:before,
.date:after
{
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  background-color: #DADDE6;
  position: absolute;
  top: -15px ;
  right: -15px;
  z-index: 1;
  border-radius: 50%
}

.date:after
{
  top: auto;
  bottom: -15px
}

.date time
{
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%)
}

.date time span{display: block}

.date time span:first-child
{
  color: #2b2b2b;
  font-weight: 600;
  font-size: 250%
}

.date time span:last-child
{
  text-transform: uppercase;
  font-weight: 600;
  margin-top: -10px
}

.card-cont
{
  display: table-cell;
  width: 75%;
  font-size: 85%;
  padding: 10px 10px 30px 50px
}

.card-cont h3
{
  color: #3C3C3C;
  font-size: 130%
}

.row:last-child .card:last-of-type .card-cont h3
{
  text-decoration: line-through
}

.card-cont > div
{
  display: table-row
}

.card-cont .even-date i,
.card-cont .even-info i,
.card-cont .even-date time,
.card-cont .even-info p
{
  display: table-cell
}

.card-cont .even-date i,
.card-cont .even-info i
{
  padding: 5% 5% 0 0
}

.card-cont .even-info p
{
  padding: 30px 50px 0 0
}

.card-cont .even-date time span
{
  display: block
}

.card-cont a
{
  display: block;
  text-decoration: none;
  width: 80px;
  height: 30px;
  background-color: #D8DDE0;
  color: #fff;
  text-align: center;
  line-height: 30px;
  border-radius: 2px;
  position: absolute;
  right: 10px;
  bottom: 10px
}

.row:last-child .card:first-child .card-cont a
{
  background-color: #037FDD
}

.row:last-child .card:last-child .card-cont a
{
  background-color: #F8504C
}

@media screen and (max-width: 860px)
{
  .card
  {
    display: block;
    float: none;
    width: 100%;
    margin-bottom: 10px
  }
  
  .card + .card{margin-left: 0}
  
  .card-cont .even-date,
  .card-cont .even-info
  {
    font-size: 75%
  }
}
</style>
  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <section class="container">
<h1>Ticket Booked</h1>
  <div class="row">
    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <h2><span><?php echo $total_sheet[0]?></span></h2>
          <span><?php echo $selected_seat[0]?></span>
        </time>
      </section>
      <section class="card-cont">
        <h3><?php echo $movie_name[0] ?></h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
           <h2><span><?php echo $theater_name[0]?></span></h2>
            <h2><span><?php echo $movie_timing[0]?></span></h2>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
           Ashram Rd, near Dena Bank, Muslim Society, Navrangpura, Ahmedabad, Gujarat 380009
          </p>
        </div>
        <a href="index.php">Back to Home</a> 
      </section>
    </article>
    <article class="card fl-left">
      
    </article>
  </div>
</div>
</div>
</div>
  </body>

</html>