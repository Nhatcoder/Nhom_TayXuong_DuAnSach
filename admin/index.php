<?php
    ob_start();
    session_start();

    require_once "../models/pdo.php";

    include "../models/adminModel/danhmuc.php";
    include "../models/adminModel/product.php";
    include "../models/adminModel/accountModel.php";
    include "../models/adminModel/orderModel.php";
    include "../models/adminModel/thongkeModel.php";
    include "../models/userModel/accountModel.php";

    $userID = $_SESSION['user_id'] ?? 0;
    $user = select__userByid($userID);

    if($user['role_as'] != 1) {
        header('location: ../index.php');
        die;
    }


    include("header.php");

    // Danh mục
    $listDanhmuc = load_all_danhmuc();

    // Đơn hàng
    $countOrder = count_donhang();
    $countAccount = count_Account();
    $doanhthu = danh_thu();
    $countProduct = count_product();


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
                    die;
                }
                
                // lấy thông tin danh mục cần sửa
                if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)){
                    $ma_danh_muc = $_GET['id_danhmuc'];
                    $danhmuc = load_one_danhmuc($ma_danh_muc);
                    extract($danhmuc);
                    include ("./danhmuc/suadanhmuc.php");
                }
            
                break;
            case "xoadanhmuc";
                // lấy thông tin danh mục cần sửa
                if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)){
                    $ma_danh_muc = $_GET['id_danhmuc'];   
                } else {
                    $ma_danh_muc = "";   
                }

                delete_danhmuc($ma_danh_muc);
                header('Location: index.php?act=listdanhmuc');
                break;
            // Sản phẩm
            case 'listsanpham':

                $listsanpham = load_all_product();
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
                    insert_product($_POST['ma_danh_muc'],$_POST['ten_sp'], $hinh, $_POST['gia'], $_POST['mo_ta'], $_POST['so_luong']);

                    header("location: ?act=listsanpham");
                    die;
                }

                $listDanhmuc = load_all_danhmuc();
                include('sanpham/themsanpham.php');
                break;
            case 'suasanpham':
                if(isset($_GET['sneaker_id']) && ($_GET['sneaker_id'] > 0)){
                    $sneaker_id = $_GET['sneaker_id'];
                    $sanpham = load_one_sach($sneaker_id);
                    extract($sanpham);
                } else {
                    $id_sach = "";
                }

                if ($_SERVER['REQUEST_METHOD'] === "POST") {

                    $oldhinh = $_POST['oldhinh'];

                    $file = $_FILES['hinh'];
                    $hinh = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../public/upload/" . $hinh);

                    update_product($_POST['ma_danh_muc'], $_POST['ten_sp'], $hinh ? $hinh : $oldhinh, $_POST['gia'], $_POST['mo_ta'], $_POST['so_luong'],$_POST['sneaker_id']);
                    header("location: index.php?act=listsanpham");
                }

                include('sanpham/suasanpham.php');
                break;
            case 'xoasanpham':
                if(isset($_GET['sneaker_id']) && ($_GET['sneaker_id'] > 0)){
                    $sneaker_id = $_GET['sneaker_id'];
                } else {
                    $sneaker_id = "";
                }

                delete_product($sneaker_id);
                header("location: index.php?act=listsanpham");
                break;

            case 'listcomment':
                $loadComment = loadall__comment__Byid();
                include ('comment/listcomment.php');
                break;
            case 'xoacomment':
                if(isset($_GET['id_comment']) && ($_GET['id_comment'] > 0)) {
                    $id_comment = $_GET['id_comment'];
                }
                deleteComment($id_comment);
                header('Location: index.php?act=listcomment');
                break;
            case 'listorder':
                $listorder = select_donhang();
                include ('order/listorder.php');
                break;
            case 'listOrder_detail':
                $order_id = $_GET['order_id'];
                $listOrderdetail = listOrder_detail($order_id);
                include ('order/listorderdetail.php');
                break;
            case 'listaccount':
                $listaccount = list_account();
                include ('taikhoan/listaccount.php');
                break;
            case 'deleteAccount';
                if(isset($_GET['account_id']) && ($_GET['account_id'] > 0)) {
                    $accountId = $_GET['account_id'];
                } else {
                    $accountId = "";
                }

                deleteAccount($accountId);
                header('Location: index.php?act=listaccount');
                break;
        }
    } else {
        include("main.php");
    }
    include("menu.php");

    include("footer.php");
?>