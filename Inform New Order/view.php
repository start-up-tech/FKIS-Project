<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/Project/Inform New Order/Controller.php';

$order = new OrderController();

// confirmOrder 
if (isset($_POST['confirm'])) {
    $order->confirmOrder();
}
if (isset($_POST['delete'])) {
    $order->cancelOrder();
}
?>

<div class="container center content">
    <h3>NEW ORDERS</h3>
    <div class="table-responsive-lg">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Admin ID</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Order Quantity</th>
                    <th>Item Price (RM)</th>
                    <th>Total Price (RM)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {?>
                <tr>
                    <td><?=$row['order_id']?></td>
                    <td><?=$row['admin_id']?></td>
                    <td><?=$row['item_code']?></td>
                    <td><?=$row['item_name']?></td>
                    <td><?=$row['order_qty']?></td>
                    <td><?=$row['item_price']?></td>
                    <td><?=$row['order_totalPrice']?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
