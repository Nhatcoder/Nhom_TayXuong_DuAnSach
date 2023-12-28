<?php

function load_all_product()
{
    $sql = "SELECT 
                sach.ma_sach,
                sach.ten_sach,
                sach.hinh,
                sach.so_luong,
                sach.gia,
                sach.mo_ta,
                sach.nha_xuat_ban,
                sach.ngay_xuat_ban,
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

function load_one_sach($id_product)
{
    $sql = "SELECT * FROM sach WHERE ma_sach=?";
    return pdo_query_one($sql, $id_product);
}
function insert_product($ma_danh_muc,$name, $image, $gia, $mo_ta, $so_luong, $nha_xb, $ngay_xb)
{
    $sql = "INSERT INTO sach(`ma_danh_muc`, `ten_sach`, `hinh`, `gia`, `mo_ta`, `so_luong`, `nha_xuat_ban`, `ngay_xuat_ban`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_danh_muc,$name, $image, $gia, $mo_ta, $so_luong, $nha_xb, $ngay_xb);
}
function update_product($category_id, $name, $images,$gia, $mo_ta, $so_luong,$id ,$nha_xb, $ngay_xb)
{
    $sql = "UPDATE sach SET ma_danh_muc=?, ten_sach=?, hinh=?, gia=?, mo_ta=?, so_luong=? , nha_xuat_ban=?, ngay_xuat_ban=? WHERE ma_sach=?";
    pdo_execute($sql,$category_id, $name, $images,$gia, $mo_ta, $so_luong, $nha_xb, $ngay_xb, $id);
}
//Xóa cứng
function delete_product($id_product)
{
    $sql = "DELETE FROM sach WHERE ma_sach=?";
    pdo_execute($sql, $id_product);
}


?>