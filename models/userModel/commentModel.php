<?php
    function insert__comment($userId,$productId,$content) {
        $sql = "INSERT INTO `binhluan`(`ma_nguoidung`, `ma_sach`, `noi_dung`) 
                VALUES 
                ('$userId','$productId','$content')";
        pdo_execute($sql);
    }

    function loadall__comment__Byid($idproduct) {
        $sql = "SELECT
                    binhluan.ma_binhluan,
                    binhluan.ma_nguoidung,
                    binhluan.ma_sach,
                    binhluan.noi_dung,
                    binhluan.ngay_binh_luan,
                    nguoidung.ma_nguoi_dung,
                    nguoidung.ho_ten,
                    nguoidung.email
                FROM
                    binhluan
                INNER JOIN
                    nguoidung ON binhluan.ma_nguoidung = nguoidung.ma_nguoi_dung
                INNER JOIN
                    sach ON binhluan.ma_sach = sach.ma_sach
                WHERE
                    sach.ma_sach = $idproduct
        ";
        return pdo_query($sql);
    }
?>