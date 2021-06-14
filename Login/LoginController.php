<?php 
session_start();

include 'control.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$login = mysqli_query($mysqli,"select * from login where Username='$username' and level='$level' and Password='$password'");
$check = mysqli_num_rows($login);


if($check > 0){

	$data = mysqli_fetch_assoc($login);


	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:AdminHomeInterface.php");

	}else if($data['level']=="staff"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "staff";
		header("location:StaffHomeInterface.php");


	}else if($data['level']=="treasurer"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "treasurer";
		header("location:TreasurerHomeInterface.php");

	}
	else{

		header("location:AccLoginInterface.php?login=fail");
	}

	}
	

	else{
	header("location:AccLoginInterface.php?login=fail");
}


?>