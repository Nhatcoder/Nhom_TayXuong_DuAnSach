<?php
    function load_account($user_id) {
        $sql = "SELECT * FROM nguoidung WHERE ma_nguoi_dung = $user_id";
        return pdo_query_one($sql);
    }
?>