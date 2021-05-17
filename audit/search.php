<?php
    $query = $_GET['query'];
    $min_length = 3; //minimum length(optional)
    
    if(strlen($query) >= $min_length){

        $query = htmlspecialchars($query);//change to html equivalents
        $query = mysql_real_escape_string($query);//no SQL injection
        $raw_results = mysql_query("
        SELECT * FROM fkisdb
        where (`Audit_ID` 
            '%".$query."%')
        ");

        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
			while($results = mysql_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				echo "<p><h3>".$results['Audit_ID']."</h3>".$results['text']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
    }
    else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>