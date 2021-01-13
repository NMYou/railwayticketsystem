<?php
session_start();
include("database2.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <LINK REL="STYLESHEET" HREF="STYLE.CSS">
            <style type="text/css"></style>
    <style>
    .error {color: #FF0000;}
    .
    </style>  
    <style>
    body { 
  background: url(https://k6u8v6y8.stackpathcdn.com/blog/wp-content/uploads/2014/05/Luxury-Hotels-in-India.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:700px;
		height: 300px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>  
</head>


<body>
<?php 
include("header.php")
?>
<br><br><br><br><br><br>
<div id="main">
<div id="logo">
<?php
// define variables and set to empty values
 $foodErr =  "";

 $food = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {




  if (empty($_POST["food"])) {
    $foodErr = "";
  } else {
    $food = test_input($_POST["food"]);
  }


 


  if (empty($_POST["data"])) {
    header("Location: index.php"); 
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<script type="text/javascript">
    window.onbeforeunload = function() {
        return "Are you sure you want to leave?";
    }
</script>



                  <!-- ------------------SURVEY FORM---------------------------- -->
<center>
<div id="outside">
<form id="survey-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <h1 id="title">Food Booking system</h1>  <br>

  <fieldset> <br>
   
  <h1>Choose your foods</h1>
      <br><br>

	  <select id="food" name="food" required>
			<option selected disabled>-------------------Menu----------------------</option>
			<option value="vegplatter" >Veg platter - Rs 100 (per plate)</option>
			<option value="nonvegplatter" >Non Veg platter - Rs 120 (per plate)</option>
			<option value="southindianplatter">South indian platter - Rs 100 (per plate)</option>
			<option value="italianplatter" >italian platter - Rs 90 (per plate)</option>
			<option value="chinesseplatter" >Chinesse platter - Rs 100 (per plate)</option>
		</select>
</fieldset>
<br><br>
        <input type="submit" name="submit" id="submit" class="button" />


</center>

<?php


$food = $_POST['food'];




$query = "INSERT INTO foodorder VALUES ('$food');";

$data=mysqli_query($conn1,$query);

if($data)
{
  //echo "Data inserted into Database";
}
else
{
  echo " Failed to insert Data into Database";

}
?>


</body>
</html>