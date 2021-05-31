<?php
	$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

	mysqli_select_db($link, "fkisdb") or die(mysqli_error());
    
    $Order_ID = $_POST['Order_ID'];
    $Admin_ID = $_POST['Admin_ID'];
    $Item_Code = $_POST['Item_Code'];
    $Item_Quantity = $_POST['Item_Quantity'];

    $query = "insert into `new_order` values('$Order_ID', '$Admin_ID', '$Item_Code', '$Item_Quantity')" or die(mysqli_error());
    $result = mysqli_query($link, $query);

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
<nav><?php include '../styles/Sidebar.php'?>FKIS</nav>
  <center>
    <h1><b>Order List</b></h1>
         <div>
            <table style="width:30%; border: 3px solid maroon; " border="1">
                <tr>
                    <td><label for="Order_ID">Order ID:</label></td>
                    <td colspan="5"><?php echo $Order_ID ?></td>
                </tr>
                <tr>
                    <td><label for="Admin_ID">Admin ID:</label></td>
                    <td colspan="5"><?php echo $Admin_ID ?></td>
                </tr>
                <tr>
                    <td><label for="Item_Code">Item Code:</label></td>
                    <td colspan="5"><?php echo $Item_Code ?></td>
                </tr>
                <tr>
                    <td><label for="Item_Quantity">Item Quantity:</label></td>
                    <td colspan="5"><?php echo $Item_Quantity ?></td>
                </tr>
 
            </table><br>
              <br><button onclick="location.href='AddOrderInterface.php'">Add Order</button><button onclick="location.href='DeleteController.php'">Delete Order</button><button onclick="location.href='ModelOrder.php'">Display List</button><br><br>
            <?php
            if($result) {
		        echo("Data inserted");
			}
		    else {
			    die("Insert failed. Report_ID already exist.");
            }

            mysqli_close($link);
            ?>
        </div>


    </center>
</body>
</html>
