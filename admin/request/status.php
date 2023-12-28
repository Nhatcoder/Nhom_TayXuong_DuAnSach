<?php
    include("../../models/pdo.php");

    $status=$_GET['status']??0;
    $order_id=$_GET['order_id']??0; 

    
    // function update_thanhtoan($order_id) {
    //     $sql = "UPDATE donhang SET payment_method = 1 WHERE id = $order_id";
    //     pdo_execute($sql);
    // }

    // if($status == 3) {
    //     update_thanhtoan($order_id);
    // }

    update($status,$order_id);
    function update($newStatus,$order_id) {
        $sql = "UPDATE donhang SET trang_thai = '$newStatus' WHERE ma_don = $order_id";
        pdo_execute($sql);
    }

    echo $status;
?>