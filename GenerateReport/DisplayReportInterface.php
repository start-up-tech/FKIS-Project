<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "fkisdb") or die(mysqli_error($link));
    $display = "SELECT * FROM `report`";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report List</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/sidebartreasurer.php'?>FK Inventory System</nav> 
  <center>
    <h1><b>Report List</b></h1>
        <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
            <thead>
                <th colspan="5">Report ID</th>
                <th colspan="5">Report Date</th>
                <th colspan="5">Audit ID</th>
                <th colspan="5">Order ID</th>
            </thead>
            <tbody>
                <?php
                    while ($fetch_booking=mysqli_fetch_array($rs_display)){
                ?>
     
                    <tr style="text-align:center";>
                        <td colspan="5"><?php echo $fetch_booking['Report_ID']?></td>
                        <td colspan="5"><?php echo $fetch_booking['Report_Date']?></td>
                        <td colspan="5"><?php echo $fetch_booking['Audit_ID']?></td>
                        <td colspan="5"><?php echo $fetch_booking['Order_ID']?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
        <h1><b>Approved Booking List</b></h1>
        <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
            <thead>
                <th colspan="5">Booking ID</th>
                <th colspan="5">Item Code</th>
                <th colspan="5">Item Quantity</th>
            </thead>
            <tbody>
                <?php
		              $q_booking = $link->query("SELECT * FROM `booking` WHERE Booking_Status='Approved'") or die($link->error);
                      while($fetch_booking = $q_booking->fetch_array()){
                ?>
     
                    <tr style="text-align:center";>
                        <td colspan="5"><?php echo $fetch_booking['Booking_ID']?></td>
                        <td colspan="5"><?php echo $fetch_booking['Item_Code']?></td>
                        <td colspan="5"><?php echo $fetch_booking['Item_Quantity']?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>
<?php
    mysqli_close($link);
?>
