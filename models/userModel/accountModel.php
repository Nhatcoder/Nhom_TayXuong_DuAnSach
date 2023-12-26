<?php
    function select__userByid($userID) {
        $sql = "SELECT * FROM users WHERE id=?";
        return pdo_query_one($sql, $userID);
    }

    function insert__account($name,$email,$phone,$address,$password) {
        $sql = "INSERT INTO users (name,email,phone,address,password) VALUES (?, ?, ?, ?, ?)";
        pdo_execute($sql,$name,$email,$phone,$address,$password);
    }

    function selectAllAccount($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        pdo_execute($sql,$email);

    }

    function checkPass($email) {
        $sql = "SELECT * FROM users WHERE email = ? OR phone = ?";
        return pdo_query_one($sql,$email,$email);
    }

    function update__account($name,$email,$phone,$address,$password,$user_id) {
        $sql = "UPDATE users SET name = ?, email = ?, phone = ?, address = ?, password = ? WHERE id = ?";
        pdo_execute($sql,$name,$email,$phone,$address,$password, $user_id);
    }

?>