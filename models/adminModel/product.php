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
function thong_ke_hang_hoa(){
    $sql = "SELECT danhmuc.ma_danhmuc AS madm, danhmuc.ten_danhmuc AS tendm, COUNT(sach.ma_sach) AS countSp, MIN(sach.gia) AS minPrice, MAX(sach.gia) AS maxPrice, AVG(sach.gia) AS avgPrice
    FROM danhmuc
    LEFT JOIN sach ON danhmuc.ma_danhmuc = sach.ma_danh_muc
    GROUP BY danhmuc.ma_danhmuc
    ORDER BY danhmuc.ma_danhmuc";
   return pdo_query($sql);
}

function tk_sp_bc($subdays, $now){
    $sql="SELECT
    sp.ten_sach AS TenSanPham,
    SUM(c.so_luong) AS TongSoLuong
FROM
    chitiet_donhang c
JOIN
    sach sp ON c.ma_sach = sp.ma_sach
JOIN
    donhang ON c.ma_don = donhang.ma_don
WHERE donhang.create_at BETWEEN '$subdays' AND '$now'
GROUP BY
    c.ma_sach, sp.ten_sach
ORDER BY
    TongSoLuong DESC
LIMIT 3";
return pdo_query($sql);
}

?>