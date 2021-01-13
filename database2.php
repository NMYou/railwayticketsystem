<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "railway_food";

$conn1 = mysqli_connect($servername,$username,$password,$dbname);

if($conn1)
{
    //echo "Connection OK";
}
else
{
    echo "Connection Failed" .mysqli_connect_error();
}

?>