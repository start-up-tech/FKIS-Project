<?php
	// to make a connection with database
	$link = mysql_connect("localhost", "root") or die(mysql_error());

	// to select the targeted database
	mysql_select_db("fkisdb", $link) or die(mysql_error());
	if(isset($_POST["submit"])) {

		echo "You have entered a data";
		//get POST Data
		$staffid = $_POST["staffid"];
		$item = $_POST["item"];
		$qty = $_POST["qty"];
	
		$sql = "INSERT INTO booking (staffid, item, qtyr) VALUES('$staffid', '$item', '$qty') ";
		$query = $mysqli->query($sql);
	}
	
	or die(mysql_error());


	// to run sql query in database
	$result = mysql_query($query);
	     
	//Check whether the insert was successful or not
	if($result) 
	        {
		        
                    echo("Data insert");
					
		    }
		else 
	        {
			        
	            die("Insert failed");
	        }
	 
?>