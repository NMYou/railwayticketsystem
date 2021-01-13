<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 80px;
			width: 40%;
			height: 90%;
			padding: auto;
			padding-top: 90px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
			border-radius: 25px;
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			margin-left: 90px;
			font-size: 15px;
			
		}

	</style>

    <script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('trains').value)
{
case "rajdhani":
window.location="../railwayticketsystem/bookingsystem(rajdhani).php";
break;

case "duronto":
window.location="../railwayticketsystem/bookingsystem(duronto).php";
break;

case "geetanjali":
window.location="../railwayticketsystem/bookingsystem(geetanjali).php";
break;

case "garibrath":
window.location="../railwayticketsystem/bookingsystem(garibrath).php";
break;

case "mysoreexp":
window.location="../railwayticketsystem/bookingsystem(mysoreexp).php";
break;

/// Can be extended to other different selections of SubCategory //////
default:
window.location="../index.php"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
////////////////// 
</script>
</head>
<body>
    <?php
		include ('header.php');
	?>

<div id="booktkt">
	<h1 align="center" id="journeytext">Choose your journey</h1><br/><br/>

		<select id="trains" name="trains" onChange="SelectRedirect();" required>
			<option selected disabled>-------------------Select trains here----------------------</option>
			<option value="rajdhani" >Rajdhani Express - Mumbai Central to Delhi</option>
			<option value="duronto" >Duronto Express - Mumbai Central to Ernakulum</option>
			<option value="geetanjali">Geetanjali Express - CST to Kolkata</option>
			<option value="garibrath" >Garib Rath - Udaipur to Jammu Tawi</option>
			<option value="mysoreexp" >Mysore Express - Talguppa to Mysore Jn</option>
		</select>
	</form>
	</div>

</body>
</html>