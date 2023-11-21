<?php
function list_sach_all_home()
{
    $sql = "SELECT sach.ma_sach, sach.ten_sach, sach.hinh, sach.so_luong, sach.gia, sach.nha_xuat_ban, sach.ngay_xuat_ban, sach.mo_ta, sach.ma_danh_muc FROM sach INNER JOIN danhmuc ON sach.ma_danh_muc = danhmuc.ma_danhmuc WHERE sach.gia < 100000;";
    $list_sach = pdo_query($sql);
    return $list_sach;
}


?>