<!--To display all information of database(admin)-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Login Page </title>
<link rel="stylesheet" href="main.css">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<nav>FKIS SYSTEM</nav>

<center><h3>FKIS SYSTEM ADMIN PAGE</h3>
<?php
include("control.php");

$query = "SELECT * FROM registration";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    $username = $row["Username"];
	$password = $row["Password"];
	$email = $row["Email"];
	$level = $row["UserTypes"];
	
	?>
	
	Username : <?php echo $username; ?><br>
	Email : <?php echo $email; ?><br>
	UserTypes : <?php echo $level; ?><br>
	<?php
    }
} else {
    echo "0 results";

}
?>
</center>
</body>
</html>
