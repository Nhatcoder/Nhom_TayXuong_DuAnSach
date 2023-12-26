<?php
    function load_all_product() {
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

    function product_chitiet($id) {
        $sql = "SELECT
                    products.id_product,
                    products.name,
                    products.images,
                    products.so_luong,
                    products.gia,
                    products.mo_ta,
                    products.category_id
                FROM
                    products 
                WHERE
                    products.id_product = ?
        ";
        return pdo_query_one($sql, $id);
    }

    function sanpham_lienquan($category_id,$id) {
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
                WHERE category_id = $category_id AND id_product <> $id ORDER BY id_product DESC";
        return pdo_query($sql);
    }

    function search_product($keyword) {
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
                    categories ON products.category_id = categories.id WHERE name LIKE '%".$keyword."%'";
        return pdo_query($sql);
    }
?>