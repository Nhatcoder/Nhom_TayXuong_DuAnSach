<?php
// ob_start();
session_start();

include("./models/pdo.php");
include("./models/list_sach_home.php");
include("./models/danhmuc.php");
include("./models/user_login.php");
include("views/header/header.php");


$list_sach_all_home = list_sach_all_home();

// session_destroy();
// die();

// echo "<pre>";
// print_r($_SESSION["cart"]);
// echo "<pre>";


if (isset($_GET["act"]) && $_GET["act"]) {
    $act = $_GET["act"];

    switch ($act) {
        case 'home':
            include("./views/main/main.php");
            break;
        case 'tangsoluong':
            if (isset($_GET["ma_sach"])) {
                $ma_sach = $_GET["ma_sach"];

                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }

                $productExit = false;

                foreach ($_SESSION['cart'] as $key => $value) {
                    if ($value['ma_sach'] == $ma_sach) {
                        if ($value['soluongmua'] < 999) {
                            $tangsoluong = $value['soluongmua'] + 1;
                            $_SESSION['cart'][$key]['soluongmua'] = $tangsoluong;
                        }
                        $productExit = true;
                        break;
                    }
                }
            }

            include("views/main/giohang.php");
            break;

        case "sanpham":
            $onesach = list_sach_one_id($_GET['idsp']);
            extract($onesach);
            $onedm =load_one_danhmuc($ma_danh_muc);
            extract($onedm);
            $load_all_sp=list_sach_all_home();
            
            include("views/main/chitietsanpham.php");
            break;
        case 'themgiohang':
            if (isset($_GET["ma_sach"])) {
                $id = $_GET["ma_sach"];

                $list_sach_one = list_sach_one_id($id);
                $soluongmua = 1;

                if (is_array($list_sach_one)) {
                    // print_r($list_sach_one);
                    extract($list_sach_one);
                    $new_sach = [
                        "ma_sach" => $ma_sach,
                        "ten_sach" => $ten_sach,
                        "hinh" => $hinh,
                        "soluongmua" => $soluongmua,
                        "gia" => $gia
                    ];
                }

                if (isset($_SESSION['cart'])) {
                    $found = false;
                    foreach ($_SESSION['cart'] as &$item) {
                        if ($item['ma_sach'] == $id) {
                            $found = true;
                            $item['soluongmua'] += $soluongmua;
                            break;
                        }
                    }
                    if ($found == false) {
                        array_push($_SESSION['cart'], $new_sach);
                    }
                } else {
                    $_SESSION["cart"] = array($new_sach);

                }
            }
            // echo "<pre>";
            // print_r($_SESSION['cart']);
            // die;

            echo '<script>alert("Thêm thành công")</script>';
            echo '<script>window.location.href="index.php"</script>';
            break;

        case 'giohang':
            include("views/main/giohang.php");
            break;

        case 'xoasach':
            if (isset($_SESSION["cart"]) && isset($_GET["ma_sach"])) {
                $ma_sach = $_GET["ma_sach"];
                $updatedCart = [];

                foreach ($_SESSION["cart"] as $item) {
                    if ($item["ma_sach"] != $ma_sach) {
                        $updatedCart[] = $item;
                    }
                }

                // Cập nhật phiên giỏ hàng với danh sách đã lọc
                $_SESSION["cart"] = $updatedCart;
            }
            include("views/main/giohang.php");
            break;

        case 'thanhtoan':

            include("views/main/thanhtoan.php");
            break;
        case 'dangnhap' : 
           $VIEW = "";
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $checkuser = checkuser($username, $password);
                    if (is_array($checkuser)) {
                        $_SESSION['username'] = $checkuser;
                        if ($_SESSION['username']['trangthai'] == 'false') {
                            $thongbao = "Tài khoản đã bị khóa.";
                            unset($_SESSION['username']);
                        } else {
                            $VIEW = "views/main/main.php";
                        }
                    } else {
                        $thongbao = "tài khoản không tồn tại.";
                    }
                }
            
            
            include($VIEW?$VIEW:"views/main/login.php");
            break;
            case 'dangxuat';
            session_unset();
            include("views/main/main.php");
            break;
            case 'dangky':
                $VIEW="";
                $list_user = load_all_user();
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $ho_ten = $_POST['username'];
                    $mat_khau = $_POST['new-password'];
                    $email = $_POST['email'];
                    $nhap_lai_mk = $_POST['confirmPassword'];
                    $so_dien_thoai = $_POST['so_dien_thoai'];
                    $dia_chi = $_POST['dia_chi'];
                    $avatar = $_FILES['img']['name'];
                    $target_dir = "../img/";
                    $gioitinh = $_POST['gioitinh'];
                    $target_file = $target_dir . $_FILES['img']['name'];
    
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], substr($target_file, 1))) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    insert_nguoidung1($ho_ten, $email, $mat_khau,$so_dien_thoai,$dia_chi,$avatar,$gioitinh);
                    $thongbao = "Đăng ký thành công";
                    $VIEW = "views/main/main.php";
                }
        
                include($VIEW?$VIEW:"views/main/login.php");
            break;
                case 'dangnhapadmin';
               
                break;

    }
} else {
    include("views/main/main.php");
}
include("views/footer/footer.php");

ob_end_flush();
?>