<?php
    function list__danhmuc() {
        $sql = "SELECT * FROM danhmuc";
        return pdo_query($sql);
    }

    function load_sanpham_bydanhmuc($iddm) {
        $sql = "SELECT 
                    sach.ma_sach,
                    sach.ten_sach,
                    sach.hinh,
                    sach.so_luong,
                    sach.gia,
                    sach.mo_ta,
                    sach.ma_danh_muc,
                    danhmuc.ma_danhmuc,
                    danhmuc.ten_danhmuc
                FROM 
                    sach 
                INNER JOIN
                    danhmuc ON sach.ma_danh_muc = danhmuc.ma_danhmuc    
                WHERE
                    sach.ma_danh_muc = ?
        ";
        return pdo_query($sql,$iddm);
    }
?>