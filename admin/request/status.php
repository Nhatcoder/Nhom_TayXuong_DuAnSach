<?php
    include("../../models/pdo.php");

    $status=$_GET['status']??0;
    $order_id=$_GET['order_id']??0; 
    
    
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

    $chitiet_update = select_sach($order_id);

    function update_thanhtoan($soluong,$ma_sach) {
        $sql = "UPDATE sach SET so_luong = so_luong + ? WHERE ma_sach = ?";
        pdo_execute($sql,$soluong,$ma_sach);
    }

    if($status == 'canceled') {
        foreach($chitiet_update as $sanpham) {
            update_thanhtoan($sanpham['so_luong'],$sanpham['ma_sach']);
        }
    }

    update($status,$order_id);
    function update($newStatus,$order_id) {
        $sql = "UPDATE donhang SET trang_thai = '$newStatus' WHERE ma_don = $order_id";
        pdo_execute($sql);
    }

    echo $status;
?>