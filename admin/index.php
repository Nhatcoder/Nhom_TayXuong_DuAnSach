<?php
    ob_start();
    session_start();

    include "../models/danhmuc.php";
    include "../models/sach.php";

    include("header.php");


    // Danh mục
    $listDanhmuc = load_all_danhmuc();

    if (isset($_GET["act"]) && $_GET["act"]) {

        $act = $_GET["act"];

        switch ($act) {

            // Danh mục sản phẩm
            case 'listdanhmuc':
                if($_SERVER['REQUEST_METHOD']=== "POST"){
                    $id_checkbox = $_POST['id_checkbox'] ?? 0;
                    delete_danhmuc_multi_item ($id_checkbox);
                    header("Location:".$_SERVER['HTTP_REFERER']);
                    die;
                }

                include('danhmuc/listdanhmuc.php');
                break;  
            case 'themdanhmuc':
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    $trang_thai = $_POST['trang_thai'] ?? 0;
                    
                    // Thêm dữ liệu vào database
                    insert_danhmuc($ten_danh_muc,$trang_thai);
                    setcookie("thongbao", "Thêm danh mục thành công", time()+1);
                    header("location: index.php?act=listdanhmuc");
                    die;
                }
                include('danhmuc/them.php');
                break;
            case 'suadanhmuc':
                if($_SERVER['REQUEST_METHOD']=== "POST"){
                    $ma_danhmuc =$_POST['ma_danhmuc'];
                    $trang_thai = $_POST['trang_thai'] ?? 0;
                    $ten_danh_muc = $_POST['ten_danh_muc'];
                    // cập nhật
                    update_danhmuc($ma_danhmuc, $ten_danh_muc, $trang_thai);
                    $thongbao = "Cập nhật dữ liệu thành công";
                    header("location: index.php?act=listdanhmuc");
                    die();
                }
                
                // lấy thông tin danh mục cần sửa
                if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)){
                    $ma_danh_muc = $_GET['id_danhmuc'];
                    $danhmuc = load_one_danhmuc($ma_danh_muc);
                    extract($danhmuc);
                    include ("./danhmuc/suadanhmuc.php");
                }
            
                break;

            // Sản phẩm
            case 'listsanpham':
                $listsanpham = load_all_sach();
                include('sanpham/listsanpham.php');
                break;
            case 'themsanpham':
                if ($_SERVER['REQUEST_METHOD'] === "POST") {
                    extract($_POST);

                    //Hình ảnh
                    $file = $_FILES['hinh'];
                    $hinh = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../public/upload/" . $hinh);

                    //insert vào database
                    insert_sach($ten_sach, $hinh, $nha_xuat_ban, $so_luong, $gia, $mo_ta, $ngay_xuat_ban, $ma_danh_muc, 1);

                    header("location: ?act=listsanpham");
                    die();
                }

                $listDanhmuc = load_all_danhmuc();
                include('sanpham/themsanpham.php');
                break;
            case 'suasanpham':
                include('sanpham/suasanpham.php');
                break;
                
        }
    } else {
        include("main.php");
    }
    include("menu.php");

    include("footer.php");
?>