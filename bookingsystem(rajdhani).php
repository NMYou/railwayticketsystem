<?php
session_start();
include("database.php");
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
  background: url(img/bg7.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:700px;
		height: 450px;
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
 $pname1Err = $page1Err = $pname2Err = $page2Err = $pname3Err = $page3Err = $pname4Err = $page4Err = $pname5Err = $page5Err = "";

 $pname1 = $page1 = $pname2 = $page2 = $pname3 = $page3 = $pname4 = $page4 = $pname5 = $page5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["pname1"])) {
    $pname1Err = "Name is required";
  } else {
    $pname1 = test_input($_POST["pname1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname1)) {
      $pname1Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["page1"])) {
    $page1Err = "Age is required";
  } else {
    $page1 = test_input($_POST["page1"]);
  }


  if (empty($_POST["pname2"])) {
    $pname2Err = "Name is required";
  } else {
    $pname2 = test_input($_POST["pname2"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname2)) {
      $pname2Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["page2"])) {
    $page2Err = "Age is required";
  } else {
    $page2 = test_input($_POST["page2"]);
  }

  if (empty($_POST["pname3"])) {
    $pname3Err = "Name is required";
  } else {
    $pname3 = test_input($_POST["pname3"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname3)) {
      $pname3Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["page3"])) {
    $page3Err = "Age is required";
  } else {
    $page3 = test_input($_POST["page3"]);
  }

  if (empty($_POST["pname4"])) {
    $pname4Err = "Name is required";
  } else {
    $pname4 = test_input($_POST["pname4"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname4)) {
      $pname4Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["page4"])) {
    $page4Err = "Age is required";
  } else {
    $page4 = test_input($_POST["page4"]);
  }

  if (empty($_POST["pname5"])) {
    $pname5Err = "Name is required";
  } else {
    $pname5 = test_input($_POST["pname5"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$pname5)) {
      $pname5Err = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["page5"])) {
    $page5Err = "Age is required";
  } else {
    $page5 = test_input($_POST["page5"]);
  }


  if (empty($_POST["data"])) {
    header("Location: ticketconfirm(rajdhani).php"); 
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
  <h1 id="title">Rajdhani Booking System</h1>  <br>

  <fieldset> <br>
   
  <h1>PASSENGERS DETAILS</h1>
      <br><br>

    <label for="name">Person's 1 Name:</label>
 <input type="text" id="pname1" name="pname1"  required>
        <label for="age">Age:</label>
<input type="tel" id="page1" name="page1" required>
<br><br>
        <label for="name">Person's 2 Name:</label>
 <input type="text" id="pname2" name="pname2" required>
        <label for="age">Age:</label>
<input type="tel" id="page2" name="page2" required>
<br><br>

        <label for="name">Person's 3 Name:</label>
 <input type="text" id="pname3" name="pname3" required>
        <label for="age">Age:</label>
<input type="tel" id="page3" name="page3" required>
<br><br>

        <label for="name">Person's 4 Name:</label>
 <input type="text" id="pname4" name="pname4" required>
        <label for="age">Age:</label>
<input type="tel" id="page4" name="page4" required>
<br><br>

        <label for="name">Person's 5 Name:</label>
 <input type="text" id="pname5" name="pname5" required>
        <label for="page5">Age:</label>
<input type="tel" id="page5" name="page5" required>
</fieldset>
<br><br>
        <input type="submit" name="submit" id="submit" class="button" />


</center>

<?php


$pname1 = $_POST['pname1'];
$page1 = $_POST['page1'];
$pname2 = $_POST['pname2'];
$page2 = $_POST['page2'];
$pname3 = $_POST['pname3'];
$page3 = $_POST['page3'];
$pname4 = $_POST['pname4'];
$page4 = $_POST['page4'];
$pname5 = $_POST['pname5'];
$page5 = $_POST['page5'];



$query = "INSERT INTO rajdhani VALUES ('$pname1', '$page1','$pname2', '$page2','$pname3', '$page3',
'$pname4', '$page4','$pname5', '$page5');";

$data=mysqli_query($conn,$query);

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