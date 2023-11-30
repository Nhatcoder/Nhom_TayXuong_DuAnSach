<?php
require_once "pdo.php";
function load_all_user(){
    $sql = "SELECT * FROM nguoidung ORDER BY ma_nguoi_dung asc";
    return pdo_query($sql);
}
function load_one_user($ma_nguoi_dung){
    $sql = "SELECT FROM nguoidung WHERE ma_nguoi_dung=?";
    return pdo_query_one($sql,$ma_nguoi_dung);
}
function check_account($username,$password){
    $sql = "SELECT * FROM nguoidung WHERE
     email = '".$username."' OR 
     so_dien_thoai = '".$username."' AND 
     mat_khau = '".$password."'";
    return pdo_query_one($sql);
}

function insert_nguoidung($ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai){
    $sql = "INSERT INTO nguoidung(ho_ten,email,mat_khau,so_dien_thoai,dia_chi,hinh,gioitinh,cap_bac,trang_thai) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai);
}
function insert_nguoidung1($ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh){
    $sql = "INSERT INTO nguoidung(ho_ten,email,mat_khau,so_dien_thoai,dia_chi,hinh,gioitinh) VALUES('$ho_ten','$email','$mat_khau','$so_dien_thoai','$dia_chi','$hinh','$gioitinh') ";
  return pdo_execute($sql);
}
function insert_client_user($ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai)
{
  $sql = "INSERT INTO nguoidung(ho_ten,email,mat_khau,so_dien_thoai,dia_chi,hinh,gioitinh,cap_bac,trang_thai) VALUES('$ho_ten','$email','$mat_khau','$so_dien_thoai','$dia_chi','$hinh','$gioitinh','$cap_bac','$trang_thai') ";
  pdo_execute($sql);
}
function checkuser($ho_ten, $mat_khau)
{
  $sql = "SELECT * FROM nguoidung WHERE email ='" . $ho_ten . "' AND mat_khau ='" . $mat_khau . "'";
  $user = pdo_query_one($sql);
  return $user;
}
function update_nguoidung($ma_nguoi_dung,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai) {
    $sql = "UPDATE nguoidung SET ho_ten=?,email=?,mat_khau=?,so_dien_thoai=?,dia_chi=?,hinh=?,gioitinh=?,cap_bac=?,trang_thai=? WHERE ma_nguoi_dung=?";
    pdo_execute($sql,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai,$ma_nguoi_dung);
}
function delete_nguoidung() {
    
}
?>