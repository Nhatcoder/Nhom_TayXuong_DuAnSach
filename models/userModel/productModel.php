<?php
    function load_all_product() {
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
                ORDER BY sach.ma_sach DESC";
        return pdo_query($sql);
    }

    function product_chitiet($id) {
        $sql = "SELECT
                    sach.ma_sach,
                    sach.ten_sach,
                    sach.hinh,
                    sach.so_luong,
                    sach.gia,
                    sach.mo_ta,
                    sach.ma_danh_muc
                FROM
                    sach 
                WHERE
                    sach.ma_sach = ?
        ";
        return pdo_query_one($sql, $id);
    }

    function sanpham_lienquan($ma_danh_muc,$id) {
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
                WHERE ma_danh_muc = $ma_danh_muc AND ma_sach <> $id ORDER BY ma_sach DESC";
        return pdo_query($sql);
    }

    function search_product($keyword) {
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
                    danhmuc ON sach.ma_danh_muc = danhmuc.ma_danhmuc WHERE sach.ten_sach LIKE '%".$keyword."%' ";
        return pdo_query($sql);
    }
?>