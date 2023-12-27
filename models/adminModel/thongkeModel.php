<?php
    function count_donhang() {
        $sql = "SELECT * FROM donhang
                WHERE create_at >= CURRENT_TIMESTAMP - INTERVAL 7 DAY
                ORDER BY ma_don DESC";
        return pdo_query($sql);
    }

    function count_Account() {
        $sql = "SELECT * FROM nguoidung WHERE 1 ORDER BY ma_nguoi_dung ASC";
        return pdo_query($sql);
    }

    function danh_thu($day = 7) {
        $sql = "SELECT
                    o.ma_don AS order_id,
                    SUM(od.so_luong * p.gia) AS total_sell
                FROM
                    chitiet_donhang od
                JOIN
                    sach p ON od.ma_sach = p.ma_sach
                JOIN
                    donhang o ON od.ma_don = o.ma_don
                WHERE
                    date(create_at) >= DATE_SUB(CURRENT_DATE,INTERVAL $day DAY)";
        return pdo_query_one($sql);
    }

    function count_product() {
        $sql = "SELECT * FROM sach WHERE 1 ORDER BY ma_sach DESC";
        return pdo_query($sql);
    }
?>