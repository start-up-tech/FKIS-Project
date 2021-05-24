<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "fkisdb";
 
 $con = mysqli_connect($servername, $username, $password, $dbname);

 if(mysqli_connect_errno()){
     echo "Failed to connect to database";
     exit();
 }
 echo "Connection Success";
 
require_once $_SERVER["DOCUMENT_ROOT"] . '/Project/InformNewOrder/OrderController.php';

$order = new OrderController();

//confirmOrder 
if (isset($_POST['confirm'])) {
    $order->confirmOrder();
}
if (isset($_POST['delete'])) {
    $order->cancelOrder();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <style>

        </style>
        <link rel="stylesheet" href="../styles/main.css">
    </head>
    <body>
    <nav>FKIS</nav>
        <div class="container center content">
            <h3>NEW ORDERS</h3>
            <div class="table-responsive-lg">
                <table border="1" width="80%" cellpadding="5" align="center">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Admin ID</th>
                            <th>Item Code</th>
                            <th>Item Quantity (RM)</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($data as $row) {
                        /*print '<tr><td><?=$row['Order_ID']?></td><td><?=$row['Admin_ID']?></td><td><?=$row['Item_Code']?></td><td><?=$row['Item_Quantity']?></td></tr>'; */
                        print '<tr><td>' .$row['Order_ID']. '</td><td>' .$row['Admin_ID']. '</td><td>' .$row['Item_Code']. '</td><td>' .$row['Item_Quantity']. '</td></tr>';     
                    }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>