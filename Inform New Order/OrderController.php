<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/Project/Inform New Order/OrderModel.php';


class OrderController{
    function addOrder(){
        $order = new OrderModel();
        $order->customer_id = $_POST['inputAdminId'];
		$order->serviceprovider_id = $_POST['inputTreasurerId'];
        $order->item_id = $_POST['inputItemCode'];
        $order->item_name = $_POST['inputItemName'];
        $order->order_qty = $_POST['inputOrderQty'];
        $order->item_price = $_POST['inputItemPrice'];
        $order->order_totalPrice = $_POST['inputOrderTotalPrice'];
    }

	function viewOrder($serviceprovider_id){
        $order = new OrderModel();
        $order->treasurer_id = $treasurer_id;
        return $order->viewOrder();
    }
	
    function confirmOrder(){
        $order = new OrderModel();
        $order->order_id = $_POST['inputOrderId'];
        $order->order_status = "confirmed";
    }

    function cancelOrder(){
        $order = new OrderModel();
        $order->order_id = $_POST['inputOrderId'];
        $order->deleteOrder();
    }

    function adminViewAllOrder(){
        $order = new OrderModel;
        $order->customer_id = $_SESSION['admin_id'];
        return $order->adminViewAllOrder();
    }
}
?>
