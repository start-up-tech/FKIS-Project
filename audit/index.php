<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fkisdb";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);

        if(mysqli_connect_errno()){
            echo "Failed to connect to database";
            exit();
        }
        echo "Connection Success"
        
        //Let's just say below is a forbidden move
        //mysql_connect($servername, $username, $password) or die("Error connecting to database: ".mysql_error());
	    //mysql_select_db("fkisdb") or die(mysql_error()); 
        
	    
    ?>
    <nav>FKIS</nav>
    <div id="loginPanel">
        <form action="search.php" method="GET">
            <input type="text" name="query" id="" placeholder="Audit ID">
            <input type="submit" value="Search">
        </form>
    </div>
    
</body>
</html>