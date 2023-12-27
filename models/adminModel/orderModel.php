<?php

    function select_donhang() {
        $sql = "SELECT 
                    u.id as ma_nguoi_dung ,
                    o.id as ma_don,
                    CONCAT(u.name) AS fullName,
                    o.ma_don_hang,
                    o.ho_ten,
                    o.so_dien_thoai,
                    o.dia_chi,
                    o.trangthai,
                    o.payment_method,
                    o.created_at,
                    SUM(od.gia * od.so_luong) AS total
                FROM 
                    `donhang` o
                JOIN 
                nguoidung u ON u.ma_don = o.ma_nguoi_dung
                JOIN 
                chitiet_donhang od ON od.ma_don = o.ma_don
                GROUP BY 
                    o.ma_don";
        return pdo_query($sql);
    }

    function listOrder_detail($order_id){
        $sql="SELECT 
                od.id,
                od.product_id,
                p.id_product,
                p.name,
                p.images,
                od.price,
                od.quantity,
                od.price * od.quantity AS total
            FROM 
                order_detail od
            JOIN 
                products p ON p.id_product = od.product_id
            WHERE 
                od.order_id = ".$order_id;

        return pdo_query($sql);
    }
?>