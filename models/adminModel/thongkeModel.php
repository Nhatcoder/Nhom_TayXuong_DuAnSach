<?php
    function count_donhang() {
        $sql = "SELECT * FROM orders
                WHERE created_at >= CURRENT_TIMESTAMP - INTERVAL 7 DAY
                ORDER BY id DESC";
        return pdo_query($sql);
    }

    function count_Account() {
        $sql = "SELECT * FROM users WHERE 1 ORDER BY id ASC";
        return pdo_query($sql);
    }

    function danh_thu($day = 7) {
        $sql = "SELECT
                    o.id AS order_id,
                    SUM(od.quantity * p.gia) AS total_sell
                FROM
                    order_detail od
                JOIN
                    products p ON od.product_id = p.id_product
                JOIN
                    orders o ON od.order_id = o.id
                WHERE
                    date(created_at) >= DATE_SUB(CURRENT_DATE,INTERVAL $day DAY)";
        return pdo_query_one($sql);
    }

    function count_product() {
        $sql = "SELECT * FROM products WHERE 1 ORDER BY id_product DESC";
        return pdo_query($sql);
    }
?>