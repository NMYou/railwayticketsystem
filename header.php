<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:16px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="pnrstatus.php">PNR Status</A></li>
            <li><A href="booktkt.php">Book a ticket</a></li>
            <li><A href="foodorder.php">Food Order</a></li>
            <li><?php  
				if(isset($_SESSION['user_info'])){
					echo '<div id="dropdown">'.$_SESSION['user_info'];
        }
				else
					echo '<A HREF="register.php">Login/Register</A>';
				?>
            </li>
            <li><?php  
				if(isset($_SESSION['user_info'])){
          echo '<A href="logout.php">Logout</a></li>';
        }?>  
            </ul>
          </div>
        </div>
      </div>
</body>
</html>