<?php

function select_donhang()
{
    $sql = "SELECT 
                    o.ma_don as orderid,
                    o.ten_nguoi_dung AS fullName,
                    o.dia_chi AS addr,
                    o.so_dien_thoai AS phone,
                    o.ma_don_hang as ma_donhang,
                    o.trang_thai,
                    o.payment_method,
                    o.create_at,
                    SUM(od.gia * od.so_luong) AS total
                FROM 
                    `donhang` o
                JOIN 
                    `chitiet_donhang` od ON od.ma_don = o.ma_don
                GROUP BY 
                    o.ma_don";
    return pdo_query($sql);
}

function listOrder_detail($order_id)
{
    $sql = "SELECT 
                od.ma_chi_tiet as id,
                od.ma_don,
                od.ma_sach,
                o.ma_don as madonhang,
                o.trang_thai,
                p.ma_sach,
                p.ten_sach as name,
                p.hinh as images,
                od.gia as price,
                od.so_luong as quantity,
                od.gia * od.so_luong AS total
            FROM 
                chitiet_donhang od
            JOIN 
                sach p ON od.ma_sach = p.ma_sach
            JOIN 
                donhang o ON od.ma_don = o.ma_don
            WHERE 
                od.ma_don = $order_id";
    return pdo_query($sql);
}


function select_donhangCheck($madon) {
    $sql = "SELECT
                od.ma_chi_tiet,
                od.ma_don as machitietdon,
                od.ma_sach,
                od.so_luong,
                o.ma_don as madonhang,
                o.trang_thai,
                p.ma_sach as masach
            FROM
                donhang o
            JOIN
                chitiet_donhang od ON od.ma_don = o.ma_don
            JOIN
                sach p ON od.ma_sach = p.ma_sach
            WHERE
                o.ma_don = ?
    ";
    return pdo_query_one($sql,$madon);
}


function select_sach($madon) {
    $sql = "SELECT
                od.ma_chi_tiet,
                od.ma_don as machitietdon,
                od.ma_sach,
                od.so_luong,
                o.ma_don as madonhang,
                o.trang_thai,
                p.ma_sach as masach
            FROM
                chitiet_donhang od
            JOIN
                donhang o ON od.ma_don = o.ma_don
            JOIN
                sach p ON od.ma_sach = p.ma_sach
            WHERE
                od.ma_don = ?
    ";
    return pdo_query($sql,$madon);
}