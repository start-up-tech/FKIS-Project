<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fkisdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
$Collection_Date = mysqli_real_escape_string($link, $_REQUEST['Collection_Date']);
$sql = "INSERT INTO booking_conformation (Collection_Date) VALUES ('$Collection_Date')";
if(mysqli_query($link, $sql)){
    echo "Booking has been approved successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<body>
<p><a href="http://localhost/ApproveBooking/ApproveBookingView.php">Back</a></p>
</body>
</html>