<?php

require_once "pdo.php";

function load_all_sach()
{
    $sql = "SELECT 
                sach.ma_sach,
                sach.ten_sach,
                sach.hinh,
                sach.nha_xuat_ban,
                sach.so_luong,
                sach.gia,
                sach.mo_ta,
                sach.ngay_xuat_ban,
                sach.ma_danh_muc,
                danhmuc.ma_danhmuc,
                danhmuc.ten_danhmuc
            FROM 
                sach 
            INNER JOIN
                danhmuc ON sach.ma_danh_muc = danhmuc.ma_danhmuc    
            ORDER BY ma_sach DESC";
    return pdo_query($sql);
}

function load_one_sach($ma_sach)
{
    $sql = "SELECT * FROM sach WHERE ma_sach=?";
    return pdo_query_one($sql, $ma_sach);
}
function insert_sach($ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc, $trang_thai)
{
    $sql = "INSERT INTO sach(ten_sach, hinh, nha_xuat_ban, so_luong, gia, mo_ta, ngay_xuat_ban, ma_danh_muc, trang_thai) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc, $trang_thai);
}
function update_sach($ma_sach, $ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc)
{
    $sql = "UPDATE sach SET ten_sach=?, hinh=?, nha_xuat_ban=?, so_luong=?, gia=?, mo_ta=?, ngay_xuat_ban=?, ma_danh_muc=? WHERE ma_sach=?";
    pdo_execute($sql, $ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc, $ma_sach);
}
//Xóa cứng
function delete_sach($ma_sach)
{
    $sql = "DELETE FROM sach WHERE ma_sach=?";
    pdo_execute($sql, $ma_sach);
}

//Xóa mềm
function delete_sach_mem($ma_sach)
{
    $sql = "UPDATE sach SET trang_thai=0 WHERE ma_sach=?";
    pdo_execute($sql, $ma_sach);
}

?>