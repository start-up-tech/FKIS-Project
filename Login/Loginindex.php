<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
 <link rel="stylesheet" href="logincss.css">
</head> 
<body>  
    <center> <h1> FKIS SYSTEM </h1>  <!--search how to add login using facebook(api)-->
    <form>
        
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required><br>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required><br>
            <button type="submit" formaction="/mockhome.php">Login</button><br> 
            <input type="checkbox" checked="checked"> Remember me 
            <button type="button" class="cancelbtn"> Cancel</button> 
            <a href="recovery.php"> Forgot password? </a> 
         
    </form></center>   
</body>   
</html>
