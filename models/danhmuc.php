<?php

require_once "pdo.php";

function load_all_danhmuc () {
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function load_one_danhmuc ($ma_danh_muc) {
    $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc =?";
    return pdo_query_one($sql, $ma_danh_muc);
}

function insert_danhmuc ($ten_danh_muc, $trang_thai){
    $sql = "INSERT INTO danhmuc(ten_danhmuc, trang_thai) VALUES (?, ?)";
    pdo_execute($sql,$ten_danh_muc,$trang_thai);
}

function update_danhmuc($ma_danh_muc,$ten_danh_muc,$trang_thai){
    $sql ="UPDATE danhmuc SET ten_danhmuc=? , trang_thai=? WHERE ma_danhmuc = ?";
    pdo_execute($sql,$ten_danh_muc,$trang_thai,$ma_danh_muc);
}
function delete_danhmuc ($ma_danh_muc){
    $sql = "DELETE FROM danhmuc WHERE ma_danh_muc= ?";
    pdo_execute($sql,$ma_danh_muc);
}

// @@$ma_danh_muc là tham số chứa mảng danh mục
function delete_danhmuc_multi_item ($ma_danh_muc){
    $madm = implode(",", $ma_danh_muc);
    $sql = "DELETE FROM danhmuc WHERE ma_danhmuc IN ($madm)";
    pdo_execute($sql);
}