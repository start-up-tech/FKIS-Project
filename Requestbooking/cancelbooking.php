<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="booking.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <div class="header">
      <div class="title" id="title"> </div>
      <h1 style="text-align: center;"> Cancel Booking</h1>
    </div>
    <?php
    include("controlbooking.php");
    $Staff_ID= $_POST['Staff_ID'];
    $sql = "DELETE FROM booking WHERE Staff_ID= $Staff_ID";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>

     <a href="viewitem.php" class="button">Home</a> 
</body>
</html>