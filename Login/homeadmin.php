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
   <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color:hsl(0, 79%, 40%);
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: black;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
b {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background-color:hsl(0, 0%, 85%);
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
  color: black;
}

/* Style the footer */
footer {
    background-color:hsl(0, 80%, 50%);
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
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

<header>
  <h2>Welcome to the Admin page of FKIS System :]</h2>
</header><br>

<section>
  <b>
    <ul>
      <a href="#"><img src ="images/petakom.jpg"/><br>
    </ul>
</b>
  
  <article>
    <h1>About Us<h1>
<P>
This system is for the use for Faculty of Computing staff to manage the inventory of the faculty.<br><br><br><br>
<div  class="date" id="currDateTime"> </div>
</div>
</p>
</article>
</section>

<footer>
  <p><a href="#"><img src ="images/socmed.png"/></p>
</footer>

</body>
</html>