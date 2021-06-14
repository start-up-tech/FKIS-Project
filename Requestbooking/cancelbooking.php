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
    
    <h3>UPDATE COLLECTED LIST:</h3>
    <table>
        <tr>
        <th>Booking ID</th>
        <th>Staff ID</th>
        <th>Item code</th>
        <th>Quantity</th>
        <th>Collection Date</th>
        <th>Collection status</th>	
        </tr><br>
    <?php
    include ("connectbooking.php");
    $Staff_ID= $_POST['Staff_ID'];
    $sql = "SELECT * FROM booking WHERE Staff_ID='$Staff_ID'";	
        $result = mysqli_query($conn,$sql);
        
        if ($result->num_rows > 0) {
      // output data of each row
      $no=1;
      while($row = mysqli_fetch_assoc($result)) {
          
        $bookingid = $row["Booking_ID"];
        $staffid = $row["Staff_ID"];
        $icode= $row["Item_Code"];
        $qty = $row["Item_Quantity"];
        $collectdate = $row["Collection_date"];
        $status = $row["Collection_status"]; ?>
            
        <tr>
        
        <td>&emsp;&emsp;<?php echo($bookingid) ?></td>
        <td>&emsp;&emsp;<?php echo($staffid) ?></td>
        <td>&emsp;&emsp;<?php echo($icode) ?></td>
        <td>&emsp;&emsp;<?php echo($qty) ?></td>
        <td>&emsp;&emsp;<?php echo($collectdate) ?></td>
        <td>&emsp;&emsp;<?php echo($status) ?></td>
        
      <?php $no++; ?>
     <?php }?>
        <?php }?>
      </tr>     
    </table><br><br>
    ?>

    <?php
    include ("connectbooking.php");
    $Staff_ID= $_POST['Staff_ID'];
    $sql = "DELETE FROM booking WHERE Staff_ID='$Staff_ID'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
            

        } 
    ?>

    
</body>
</html>