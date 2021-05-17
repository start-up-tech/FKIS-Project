<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/Project/Inform New Order/database.php';

class OrderModel{
    public $order_id, $admin_id, $treasurer_id, $item_id, $item_name, $order_qty, $item_price, $order_totalPrice , $order_status;

    function addOrder(){
        $sql = "insert into `order`(admin_id,treasurer_id,item_id,item_name,order_qty,item_price,order_totalPrice,order_status) values(:admin_id,:treasurer_id_id,:item_id,:item_name,:order_qty,:item_price,:order_totalPrice,:order_status)";
        $args = [':admin_id' => $this->admin_id, ':treasurer_id' => $this->treasurer_id, ':item_id' => $this->item_id, ':item_name' => $this->item_name, ':order_qty' => $this->order_qty, ':item_price' => $this->item_price,':order_totalPrice'=>$this->order_totalPrice, ':order_status' => $this->order_status];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        $sql_orderid = "SELECT LAST_INSERT_ID()";
        $fetch_orderid = DB::run($sql_orderid);
        $_SESSION['payment_orderid'] = $fetch_orderid->fetchColumn();
        return $count;
    }

    function viewOrder(){
        $sql = "select * from `order` where treasurer_id=:treasurer_id";
        $args = [':treasurer_id' => $this->treasurer_id];
        return DB::run($sql, $args);
    }

    function confirmOrder(){
        $sql = "update `order` set order_status=:order_status where order_id=:order_id";
        $args = [':order_status' => $this->order_status, ':order_id' => $this->order_id];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }

    function deleteOrder(){
        $sql = "delete from `order` where order_id=:order_id";
        $args = [':order_id' => $this->order_id];
        return DB::run($sql, $args);
    }

    function customerViewAllOrder(){
        $sql = "select * from `order` where admin_id=:admin_id";
        $args = [':admin_id' => $this->admin_id];
        return DB::run($sql, $args);
    }
}
?>