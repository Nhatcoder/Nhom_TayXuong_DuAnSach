<?php

    function select_donhang() {
        $sql = "SELECT 

                    u.ma_nguoi_dung as user_id,
                    o.ma_don as orderid,
                    u.ho_ten AS fullName,
                    u.dia_chi AS addr,
                    u.so_dien_thoai AS phone,
                    o.ma_don_hang as ma_donhang,
                    o.ma_nguoi_dung,
                    o.trang_thai,
                    o.payment_method,
                    o.create_at,

                    SUM(od.gia * od.so_luong) AS total
                FROM 
                    `donhang` o
                JOIN 

                    `nguoidung` u ON u.ma_nguoi_dung = o.ma_nguoi_dung
                JOIN 
                    `chitiet_donhang` od ON od.ma_don = o.ma_don
                GROUP BY 
                    o.ma_don";
        return pdo_query($sql);
    }

    function listOrder_detail($order_id){
        $sql="SELECT 
                od.ma_chi_tiet as id,
                od.ma_sach,
                p.ma_sach,
                p.ten_sach as name,
                p.hinh as images,
                od.gia as price,
                od.so_luong as quantity,
                od.gia * od.so_luong AS total
            FROM 
                chitiet_donhang od
            JOIN 
                sach p ON p.ma_sach = od.ma_sach
            WHERE 
                od.ma_chi_tiet = ".$order_id;

        return pdo_query($sql);
    }
?>