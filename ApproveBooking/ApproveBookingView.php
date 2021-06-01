<?php
  $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "fkisdb") or die(mysqli_error($link));
    $display = "SELECT * FROM booking";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
	
 mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/Sidebar.php'?>FKIS</nav>
  <center>
    <h1><b>Booking List</b></h1>
        <table style="border: 3px solid maroon;margin:10px;padding:50px; width:60%;">
            <thead>
                <th colspan="5">Booking ID</th>
                <th colspan="5">Staff ID</th>
                <th colspan="5">Item Code</th>
                <th colspan="5">Item Quantity</th>
				<th colspan="5">Action</th>
            </thead>
            <tbody>
                <?php
				    $i=0;
                    while ($row=mysqli_fetch_array($rs_display)){
                ?>
     
                    <tr style="text-align:center";>
                        <td colspan="5"><?php echo $row['Booking_ID']?></td>
                        <td colspan="5"><?php echo $row['Staff_ID']?></td>
                        <td colspan="5"><?php echo $row['Item_Code']?></td>
                        <td colspan="5"><?php echo $row['Item_Quantity']?></td>
						<td><form action="approve.php" method="get">
						<label for="Collection_Date">Collection Date:</label>
                        <input type="date" name="Collection_Date" id="Collection_Date">
                        <input type="submit" name="approve" value="Approve"/>
						</form></td>
						<td><form action="reject.php" method="get">
						<input type="submit" name="reject" value="Reject"/>
						</form></td>
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
