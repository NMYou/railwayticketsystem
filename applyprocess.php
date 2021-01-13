<?php
//including the database connection file
require_once ('database.php');

$name1 = $_POST['pname1'];
$age1 = $_POST['page1'];

$name2 = $_POST['pname2'];
$age2 = $_POST['page2'];

$name3 = $_POST['pname3'];
$age3 = $_POST['page3'];

$name4 = $_POST['pname4'];
$age4 = $_POST['page4'];

$name5 = $_POST['pname5'];
$age5 = $_POST['page5'];


$sql="INSERT INTO 'pass' VALUES ('$name1','$age1','$name2','$age2','$name3','$age3','$name4','$age4','$name5','$age5')";

$result = mysqli_query($con, $sql);



//redirecting to the display page (index.php in our case)
header("location: ./ticketconfirm.php");
?>