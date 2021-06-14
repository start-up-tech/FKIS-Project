<?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
    mysqli_select_db($link, "fkisdb") or die(mysqli_error($link));
    $display = "SELECT * FROM `new_order`";
    $rs_display = mysqli_query($link, $display) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
<nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
  <center>
    <h1><b>Order List</b></h1>
        <table style="width:30%; border: 3px solid maroon;" border="1">
            <thead>
                <th colspan="5">Order ID</th>
                <th colspan="5">Admin ID</th>
                <th colspan="5">Item Code</th>
                <th colspan="5">Item Quantity</th>
            </thead>
            <tbody>
                <?php
                    while ($row=mysqli_fetch_array($rs_display)){
                ?>
     
                    <tr style="text-align:center";>
                        <td colspan="5"><?php echo $row['Order_ID']?></td>
                        <td colspan="5"><?php echo $row['Admin_ID']?></td>
                        <td colspan="5"><?php echo $row['Item_Code']?></td>
                        <td colspan="5"><?php echo $row['Item_Quantity']?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br>
    </center>
</body>
</html>
<?php
    mysqli_close($link);
?>