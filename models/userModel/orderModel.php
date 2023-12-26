<?php
    function list_orderDetail($user_id) {
        $sql = "SELECT 
                    orders.id,
                    orders.user_id,
                    orders.ma_donhang,
                    orders.status,
                    orders.thanhtoan,
                    order_detail.id,
                    order_detail.order_id,
                    order_detail.product_id,
                    order_detail.quantity,
                    order_detail.price,
                    products.id_product,
                    products.name as namepro,
                    products.images
                FROM 
                    orders
                JOIN 
                    order_detail ON orders.id = order_detail.order_id
                JOIN 
                    products ON order_detail.product_id = products.id_product
                WHERE
                    orders.user_id = ?
                ";
        return pdo_query($sql,$user_id);
    }

    function huydon($id_donhang) {
        $sql = "UPDATE orders SET status = 4 WHERE id = ?";
        pdo_execute($sql,$id_donhang);
    }
?>