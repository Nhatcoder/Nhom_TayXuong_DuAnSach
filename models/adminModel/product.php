<?php

function load_all_product()
{
    $sql = "SELECT 
                products.id_product,
                products.name,
                products.images,
                products.so_luong,
                products.gia,
                products.mo_ta,
                products.category_id,
                categories.id,
                categories.ten_danhmuc
            FROM 
                products 
            INNER JOIN
                categories ON products.category_id = categories.id    
            ORDER BY products.id_product DESC";
    return pdo_query($sql);
}

function load_one_sach($id_product)
{
    $sql = "SELECT * FROM products WHERE id_product=?";
    return pdo_query_one($sql, $id_product);
}
function insert_product($ma_danh_muc,$name, $image, $gia, $mo_ta, $so_luong)
{
    $sql = "INSERT INTO products(`category_id`, `name`, `images`, `gia`, `mo_ta`, `so_luong`) VALUES(?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_danh_muc,$name, $image, $gia, $mo_ta, $so_luong);
}
function update_product($category_id, $name, $images,$gia, $mo_ta, $so_luong,$id)
{
    $sql = "UPDATE products SET category_id=?, name=?, images=?, gia=?, mo_ta=?, so_luong=? WHERE id_product=?";
    pdo_execute($sql,$category_id, $name, $images,$gia, $mo_ta, $so_luong,$id);
}
//Xóa cứng
function delete_product($id_product)
{
    $sql = "DELETE FROM products WHERE id_product=?";
    pdo_execute($sql, $id_product);
}


?>