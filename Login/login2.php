<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
 <nav>FKIS SYSTEM</nav>
	<center>
	USER LOGIN :
<?php 
	if(isset($_POST['login'])){
		if($_POST['login']=="fail"){
			echo "<div class='alert'>Username dan Password are not correct!</div>";
		}
	}
	?>
	
	
		<form action="check.php" method="post">
			
			
			<br>
			<label><b>Username :</b></label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<br><br>

			<label><b>Password :</b></label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<br><br>

			<label for="Level"><b>User Type :</b></label>
                <select id="Level" name="level" class="loginclass">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="treasurer">Treasurer</option>
                    
                </select>
				<br><br>

				<button class="button">Login</button>
			
			
		</form>
		<p><a href="recoverpassword.php">Forgot your password?</a></p>
</center>
 
 
</body>
</html>
