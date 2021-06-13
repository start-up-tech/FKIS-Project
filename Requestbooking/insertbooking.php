<?php
	
	include("controlbooking.php");
    extract( $_POST );
	 
	
	$query = "INSERT INTO booking (Staff_ID, Item_code, Item_Quantity, collection_date) VALUES('$Staff_ID', '$item', '$qty', '$collection_date')";
		
		if (mysqli_query($conn, $query)) {
		echo "<script type='text/javascript'> window.location='viewitem.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
	 
?>
