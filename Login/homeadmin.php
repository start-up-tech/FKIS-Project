<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FKIS Online</title>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="calculationwarden.js"></script>
    <?php 
include("control.php"); ?>
</head>
   <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
</head>
<body onload="getDateTime()">
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fkisdb";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM login"; ?>

<section>
  <b>
    <ul>
      <a href="#"><img src ="images/fk.jpg"/><br>
    </ul>
</b>
  
  <article>
    <h1>About Us <br>
    Admin Home Page<h1>
<P>
This system is for the use for Faculty of Computing staff to manage the inventory of the faculty.<br>
This is the first version of FKIS System.<br><br><br><br><br><br>
<div  class="date" id="currDateTime"> </div>
</div>
</p>
</article>
</section><br>

<footer>
  <p><a href="#"><img src ="images/socmed.png"/></p>
</footer>

</body>
</html>