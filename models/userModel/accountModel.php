<?php
    function select__userByid($userID) {
        $sql = "SELECT * FROM nguoidung WHERE ma_nguoi_dung=?";
        return pdo_query_one($sql, $userID);
    }

    function insert__account($ho_ten,$email,$so_dien_thoai,$dia_chi,$hinh, $gioitinh,$mat_khau) {
        $sql = "INSERT INTO nguoidung (ho_ten,email,so_dien_thoai,dia_chi,hinh,gioitinh,mat_khau) VALUES (?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql,$ho_ten,$email,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$mat_khau);
    }

    function selectAllAccount($email) {
        $sql = "SELECT * FROM nguoidung WHERE email = ?";
        pdo_execute($sql,$email);
    }

    function checkPass($email) {
        $sql = "SELECT * FROM nguoidung WHERE email = ? OR so_dien_thoai = ?";
        return pdo_query_one($sql,$email,$email);
    }

    function update__account($ho_ten,$email,$so_dien_thoai,$dia_chi,$mat_khau,$user_id) {
        $sql = "UPDATE nguoidung SET ho_ten = ?, email = ?, so_dien_thoai = ?, dia_chi = ?, mat_khau = ? WHERE ma_nguoi_dung = ?";
        pdo_execute($sql,$ho_ten,$email,$so_dien_thoai,$dia_chi,$mat_khau, $user_id);
    }

?>