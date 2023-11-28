<?php
    function insert_bill($userId,$ma_don_hang,$tonggia,$ghi_chu,$payment_method) {
        $sql = "INSERT INTO donhang (ma_nguoi_dung,ma_don_hang,tong_gia,ghi_chu,payment_method) VALUES (?,?,?,?,?)";
        return pdo_execute_returnLastInsertId($sql, $userId, $ma_don_hang, $tonggia, $ghi_chu, $payment_method);
    }
    function insert_bill_detail($ma_don,$ma_sach,$so_luong,$gia,$thanh_tien) {
        $sql = "INSERT INTO chitiet_donhang (ma_don,ma_sach,so_luong,gia,thanh_tien) VALUES (?,?,?,?,?)";
        pdo_execute($sql,$ma_don,$ma_sach,$so_luong,$gia,$thanh_tien);
    }
    
?>