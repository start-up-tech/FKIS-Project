<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <nav>FKIS</nav>
    <div id="loginPanel">
        <form action="login.php" method="post">
            <input type="text" name="userID" id="" placeholder="User ID">
            <input type="password" name="userPwd" id="" placeholder="Password">
            <input type="submit" value="Login">
            <p>
                Don't reuse your bank password,
                we didn't spend a lot on security 
                for this app 
            </p>
        </form>
    </div>
    
</body>
</html>