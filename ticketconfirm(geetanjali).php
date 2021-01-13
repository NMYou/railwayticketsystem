<?php
        session_start();
        include("database.php");
        error_reporting(0);
        $conn = mysqli_connect("localhost","root","","railway");
        if(!$conn){  
      	  echo "<script type='text/javascript'>alert('Database failed');</script>";
  	      die('Could not connect: '.mysqli_connect_error());  
        }
				if(isset($_SESSION['user_info'])){
					
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>tickets for events - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
  padding: 10px 10px 40px 50px
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
<?php 
session_start();
include("header.php"); ?>

<div id="main"><div id="logo">
<A HREF="index.php">
</A></div>

<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Are you sure you want to leave?";
    }
</script>

<section class="container">
<h1>TICKETS GENERATOR</h1>

  <div class="row">


    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
          <span>PNR NO.</span>
          <span>872-</span>
          <span id="demo"></span>
          <script>
            document.getElementById("demo").innerHTML =
            Math.floor(Math.random() * 10000000);
          </script>
        </time>
      </section>
      <section class="card-cont">
        <h3>
        Gitanjali Express - Howrah Jn(HWH) to Mumbai Cst(CSTM)
        </h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
           <span>Howrah Jn(HWH) to Mumbai Cst(CSTM)</span>
           <span>Howrah Jn(HWH): Arrival-11:50 :: Departure-13:50</span>
           <span>Mumbai Cst(CSTM): Arrival-21:20</span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Passenger Name<br>&age
          </p>
          <p>

<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM geetanjali where fp_name =(select max(fp_name) from geetanjali);"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['fp_name']; ?></td><br>&
    <td><?php echo $data['fp_age']; ?></td>

  </tr>	
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>



          </p>
        </div>
        <a href="#">Print</a>
      </section>
    </article>


    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
        <span>PNR NO.</span>
          <span>872-</span>
          <span id="demo1"></span>
          <script>
            document.getElementById("demo1").innerHTML =
            Math.floor(Math.random() * 10000000);
          </script>
        </time>
      </section>
      <section class="card-cont">
        <h3>
        Gitanjali Express - Howrah Jn(HWH) to Mumbai Cst(CSTM)
        </h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
         <span>Howrah Jn(HWH) to Mumbai Cst(CSTM)</span>
           <span>Howrah Jn(HWH): Arrival-11:50 :: Departure-13:50</span>
           <span>Mumbai Cst(CSTM): Arrival-21:20</span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Passenger Name<br>&age
          </p>
          <p>

<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM geetanjali where sp_name =(select max(sp_name) from geetanjali);"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['sp_name']; ?></td><br>&
    <td><?php echo $data['sp_age']; ?></td>

  </tr>	
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>



          </p>

        </div>
        <a href="#">Print</a>
      </section>
    </article>
  </div>



  <div class="row">


    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
        <span>PNR NO.</span>
          <span>872-</span>
          <span id="demo2"></span>
          <script>
            document.getElementById("demo2").innerHTML =
            Math.floor(Math.random() * 10000000);
          </script>
        </time>
      </section>
      <section class="card-cont">
      <h3>
      Gitanjali Express - Howrah Jn(HWH) to Mumbai Cst(CSTM)
        </h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
         <span>Howrah Jn(HWH) to Mumbai Cst(CSTM)</span>
           <span>Howrah Jn(HWH): Arrival-11:50 :: Departure-13:50</span>
           <span>Mumbai Cst(CSTM): Arrival-21:20</span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Passenger Name<br>&age
          </p>
          <p>

<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM geetanjali where tp_name =(select max(tp_name) from geetanjali);"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['tp_name']; ?></td><br>&
    <td><?php echo $data['tp_age']; ?></td>
  </tr>	
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>

          </p>
        </div>
        <a href="#">Print</a>
      </section>
    </article>


    <article class="card fl-left">
      <section class="date">
        <time datetime="23th feb">
        <span>PNR NO.</span>
          <span>872-</span>
          <span id="demo3"></span>
          <script>
            document.getElementById("demo3").innerHTML =
            Math.floor(Math.random() * 10000000);
          </script>
        </time>
      </section>
      <section class="card-cont">
      <h3>
      Gitanjali Express - Howrah Jn(HWH) to Mumbai Cst(CSTM)
        </h3>
        <div class="even-date">
         <i class="fa fa-calendar"></i>
         <time>
         <span>Howrah Jn(HWH) to Mumbai Cst(CSTM)</span>
           <span>Howrah Jn(HWH): Arrival-11:50 :: Departure-13:50</span>
           <span>Mumbai Cst(CSTM): Arrival-21:20</span>
         </time>
        </div>
        <div class="even-info">
          <i class="fa fa-map-marker"></i>
          <p>
            Passenger Name<br>&age
          </p>
          <p>

<?php

include "database.php"; // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM geetanjali where ftp_name =(select max(ftp_name) from geetanjali);"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['ftp_name']; ?></td><br>&
    <td><?php echo $data['ftp_age']; ?></td>

  </tr>	
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>



          </p>
        </div>
        <a href="#">Print</a>
      </section>
    </article>


  </div>



</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>