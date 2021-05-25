<?php

//login Information//
include("control.php");
extract( $_POST );


$query = "INSERT INTO registration (Username,Password,Email,UserTypes)
 VALUES('$username','$password','$email','$level')";
     
	 if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='displaylogin.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>
