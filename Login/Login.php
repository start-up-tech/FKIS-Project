<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <nav>FKIS</nav>
  <center>
  <h1><b>LOGIN</b></h1>
         <form method="post" action="information.php">
        
            <label>Username : </label> 
            <input type="text"  name="username" required><br><br>
            <label>Password : </label> 
            <input type="password"  name="password" required><br><br>
			
			 <label>Email   : </label> 
            <input type="email" name="email" required><br><br>
             
			<label for="Level"><b>Category</b></label>
                <select id="Level" name="level" class="loginclass">
                                  <option selected="selected" value="Admin">Admin</option>
                                  <option value="Staff">Staff</option>
                                  <option value="Treasurer">Treasurer</option>
            </select>
			 
			
            <button type="submit" >Login</button>             
            <button type="button" class="cancelbtn"> Cancel</button> <br>
			<input type="checkbox" checked="checked"> Remember me 
            <a href="recovery.php"> Forgot password? </a> 
						 
         
     </form></center>
 </body>
 </html>
