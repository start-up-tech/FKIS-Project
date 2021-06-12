<?php include('recoverlogic.php'); ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Recovery</title>
	<link rel="stylesheet" href="main2.css">
</head>
<body>

	<form class="login-form" action="login2.php" method="post" style="text-align: center;">
		<p>
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p>Please login into your email account and click on the link we sent to reset your password</p>
	</form>
	<p><center><p><a href="login2.php">BACK TO LOGIN PAGE</a></</center></p>	
</body>
</html>