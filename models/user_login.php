<?php
require_once "pdo.php";
function load_all_user(){
    $sql = "SELECT * FROM nguoidung";
    return pdo_query($sql);
}
function load_one_user($ma_nguoi_dung){
    $sql = "SELECT FROM nguoidung WHERE ma_nguoi_dung=?";
    return pdo_query_one($sql,$ma_nguoi_dung);
}
function insert_nguoidung($ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai){
    $sql = "INSERT INTO nguoidung(ho_ten,email,mat_khau,so_dien_thoai,dia_chi,hinh,gioitinh,cap_bac,trang_thai) VALUES(?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai);
}
function update_nguoidung($ma_nguoi_dung,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai) {
    $sql = "UPDATE nguoidung SET ho_ten=?,email=?,mat_khau=?,so_dien_thoai=?,dia_chi=?,hinh=?,gioitinh=?,cap_bac=?,trang_thai=? WHERE ma_nguoi_dung=?";
    pdo_execute($sql,$ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh,$cap_bac,$trang_thai,$ma_nguoi_dung);
}
function checkuser($email, $password)
{
  $sql = "SELECT * FROM nguoidung WHERE email='" . $email . "' AND mat_khau='" . $password . "'";
  $user = pdo_query_one($sql);
  return $user;
}
function insert_nguoidung1($ho_ten,$email,$mat_khau,$so_dien_thoai,$dia_chi,$hinh,$gioitinh){
    $sql = "INSERT INTO nguoidung(ho_ten,email,mat_khau,so_dien_thoai,dia_chi,hinh,gioitinh) VALUES('$ho_ten','$email','$mat_khau','$so_dien_thoai','$dia_chi','$hinh','$gioitinh') ";
  return pdo_execute($sql);
}
?>