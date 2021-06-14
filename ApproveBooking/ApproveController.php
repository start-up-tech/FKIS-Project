<?php
require_once "connect.php";
$rowCount = count($_POST["booking"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn,"UPDATE booking SET Booking_Status='Approved' WHERE Booking_ID='" . $_POST["booking"][$i] . "'");
}
header("Location:ViewBookingInterface.php");
?>
