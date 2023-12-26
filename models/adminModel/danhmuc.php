<?php




function load_all_danhmuc() {
    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}

function load_one_danhmuc($ma_danh_muc) {
    $sql = "SELECT * FROM categories WHERE id =?";
    return pdo_query_one($sql, $ma_danh_muc);
}

function insert_danhmuc ($ten_danh_muc, $trang_thai){
    $sql = "INSERT INTO categories(ten_danhmuc, trang_thai) VALUES (?, ?)";
    pdo_execute($sql,$ten_danh_muc,$trang_thai);
}

function update_danhmuc($ma_danh_muc,$ten_danh_muc,$trang_thai){
    $sql ="UPDATE categories SET ten_danhmuc=? , trang_thai=? WHERE id = ?";
    pdo_execute($sql,$ten_danh_muc,$trang_thai,$ma_danh_muc);
}

function delete_danhmuc($ma_danh_muc){
    $sql = "DELETE FROM categories WHERE id= ?";
    pdo_execute($sql,$ma_danh_muc);
}

// @@$ma_danh_muc là tham số chứa mảng danh mục
function delete_danhmuc_multi_item ($ma_danh_muc){
    $madm = implode(",", $ma_danh_muc);
    $sql = "DELETE FROM categories WHERE id IN ($madm)";
    pdo_execute($sql);
}