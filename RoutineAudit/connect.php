<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fkisdbb";
    /*
    fskdb  - darwish local(darwish)
    fskdbb - darwish local(safwan)
    NOBODY TOUCH THIS 
    */
    
        
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