<?php
//First, connect to the MySQL server.
mysql_connect("localhost", "root", "") or die(mysql_error());

//Then, select the database.
mysql_select_db("DatabaseInventory") or die(mysql_error());

//After that, create a table.
mysql_query("CREATE TABLE requestbooking (orderid INT AUTO_INCREMENT, staffid VARCHAR(100), qty INT, item VARCHAR(100), PRIMARY KEY(orderid))") or die(mysql_error());

//And finally we close the connection to the MySQL server
mysql_close();
?>
