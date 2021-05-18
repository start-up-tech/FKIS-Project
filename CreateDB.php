<?php
//First, connect to the MySQL server.
$link = mysql_connect("localhost", "root", "");

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//Then, create a database named "DataInventory".

$sql = "CREATE DATABASE DataInventory";

if (mysql_query($sql, $link)) {
    echo "Database created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}

//And finally we close the connection to the MySQL server
mysql_close($link);
?>
