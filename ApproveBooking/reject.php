<?php
require_once "connect.php";
$rowCount = count($_POST["booking"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "UPDATE booking SET booking_status='Rejected' WHERE booking_id='" . $_POST["booking"][$i] . "'");
}
header("Location:booking.php");
?>
