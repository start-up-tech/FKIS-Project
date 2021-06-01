<?php
  $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "fkisdb") or die(mysqli_error($link));
    $display = "SELECT * FROM booking INNER JOIN booking_conformation ON booking_conformation.Booking_ID = booking.Booking_ID
                     WHERE Rejected_Booking='Rejected'";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
	
 mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Booking</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/Sidebar.php'?>FKIS</nav>
  <center>
    <h1><b>Approved Booking List</b></h1>
        <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
            <thead>
                <th colspan="5">Booking ID</th>
				<th colspan="5">Staff ID</th>
				<th colspan="5">Collection Date</th>
				<th colspan="5">Status</th>
            </thead>
            <tbody>
                <?php
				    $i=0;
                    while ($row=mysqli_fetch_array($rs_display)){
                ?>
     
                    <tr style="text-align:center";>
                        <td colspan="5"><?php echo $row['Booking_ID']?></td>
						<td colspan="5"><?php echo $row['Staff_ID']?></td>
						<td colspan="5"><?php echo $row['Collection_Date']?></td>
						<td colspan="5"><?php echo $row['Approved_Booking']?></td>
						
                <?php
				$i++;
                    }
                ?>
            </tbody>
        </table>
        <br>
    </center>
</body>
</html>
