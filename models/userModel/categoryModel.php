<?php
    function list__danhmuc() {
        $sql = "SELECT * FROM categories";
        return pdo_query($sql);
    }

    function load_sanpham_bydanhmuc($iddm) {
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
                WHERE
                    products.category_id = ?
        ";
        return pdo_query($sql,$iddm);
    }
?>