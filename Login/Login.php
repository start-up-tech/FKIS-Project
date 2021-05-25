<html> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Login Page </title>
    <link rel="stylesheet" href="main.css"></head>

    
<body>  
    <nav> FKIS SYSTEM </nav> 
    <center><form method="post" action="information.php">
        
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
            <a href=""> Forgot password? </a> 
						 
         
     </form></center>
 </body>
 </html>
