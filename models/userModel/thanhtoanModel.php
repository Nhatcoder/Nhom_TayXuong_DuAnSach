<?php
    function insert_bill($user_id,$ma_donhang,$name,$phone,$addr,$thanhtoan,$payment_method) {
        $sql = "INSERT INTO `orders`(`user_id`, `ma_donhang`, `name`, `phone`, `addr`,`thanhtoan`,`payment_method`) 
                VALUES 
                (?,?,?,?,?,?,?)";
        return pdo_execute_returnLastInsertId($sql,$user_id,$ma_donhang,$name,$phone,$addr,$thanhtoan,$payment_method);
    }

    function insert_bill_detail($order_id,$product_id,$quantity,$price) {
        $sql = "INSERT INTO `order_detail`(`order_id`, `product_id`, `quantity`, `price`) 
                VALUES 
                (?,?,?,?)";
        pdo_execute($sql,$order_id,$product_id,$quantity,$price);
    }
?>