<?php
    function insert_bill($ma_donhang,$ten_nguoi_dung,$so_dien_thoai,$dia_chi,$tong_gia,$ghi_chu,$payment_method) {
        $sql = "INSERT INTO `donhang`(`ma_don_hang`, `ten_nguoi_dung`, `so_dien_thoai`, `dia_chi`,`tong_gia`, `ghi_chu`,`payment_method`) 
                VALUES 
                (?,?,?,?,?,?,?)";
        return pdo_execute_returnLastInsertId($sql,$ma_donhang,$ten_nguoi_dung,$so_dien_thoai,$dia_chi,$tong_gia,$ghi_chu,$payment_method);
    }

    function insert_bill_detail($order_id,$product_id,$quantity,$price,$thanhtien) {
        $sql = "INSERT INTO `chitiet_donhang`(`ma_don`, `ma_sach`, `so_luong`, `gia`,`thanh_tien`) 
                VALUES 
                (?,?,?,?,?)";
        pdo_execute($sql,$order_id,$product_id,$quantity,$price,$thanhtien);
    }

    function update_thanhtoan($soluong,$ma_sach) {
        $sql = "UPDATE sach SET so_luong = so_luong - ? WHERE ma_sach = ?";
        pdo_execute($sql,$soluong,$ma_sach);
    }
?>