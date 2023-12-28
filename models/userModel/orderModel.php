<?php
    function list_orderDetail($user_id) {
        $sql = "SELECT 
                    donhang.id,
                    donhang.user_id,
                    donhang.ma_donhang,
                    donhang.status,
                    donhang.thanhtoan,
                    chitiet_donhang.id,
                    chitiet_donhang.order_id,
                    chitiet_donhang.product_id,
                    chitiet_donhang.quantity,
                    chitiet_donhang.price,
                    sach.id_product,
                    sach.name as namepro,
                    sach.images
                FROM 
                    donhang
                JOIN 
                    chitiet_donhang ON donhang.id = chitiet_donhang.order_id
                JOIN 
                    sach ON chitiet_donhang.product_id = sach.id_product
                WHERE
                    donhang.user_id = ?
                ";
        return pdo_query($sql,$user_id);
    }

    function huydon($id_donhang) {
        $sql = "UPDATE donhang SET status = 4 WHERE id = ?";
        pdo_execute($sql,$id_donhang);
    }
?>