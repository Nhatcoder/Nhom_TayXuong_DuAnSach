<?php
    function list_account() {
        $sql = "SELECT * FROM nguoidung WHERE 1 ORDER BY ma_nguoi_dung DESC";
        return pdo_query($sql);
    }
    function sp_bl()
    {
        $sql = "SELECT 
                        binhluan.ma_binhluan,
                binhluan.ma_nguoidung,
                binhluan.ma_sach,
                binhluan.noi_dung,
                binhluan.ngay_binh_luan,
                nguoidung.ma_nguoi_dung,
                nguoidung.ho_ten,
                nguoidung.email,
                sach.ten_sach,
                sach.hinh
                    FROM
                        binhluan
                        INNER JOIN
                nguoidung ON binhluan.ma_nguoidung = nguoidung.ma_nguoi_dung
            INNER JOIN
                sach ON binhluan.ma_sach = sach.ma_sach
                        group by ma_sach;";
        $result = pdo_query($sql);
        return $result;
    }
    function loadall__comment__Byid($ma_sach) {
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
                WHERE binhluan.ma_sach = $ma_sach
                    ORDER BY binhluan.ma_binhluan DESC
        ";
        return pdo_query($sql);
    }

    function deleteComment($id) {
        $sql = "DELETE FROM binhluan WHERE ma_binhluan = ?";
        pdo_execute($sql,$id);
    }

    function deleteAccount($id) {
        $sql = "DELETE FROM nguoidung WHERE ma_nguoi_dung = ?";
        pdo_execute($sql,$id);
    }
?>