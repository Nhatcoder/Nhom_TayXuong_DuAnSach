<?php
ob_start();
session_start();


include("models/pdo.php");
include("models/config_vnpay.php");
include("models/randomDonhang.php");
include("models/userModel/accountModel.php");
include("models/userModel/orderModel.php");
include("models/userModel/productModel.php");
include("models/userModel/categoryModel.php");
include("models/userModel/thanhtoanModel.php");
include("models/userModel/commentModel.php");

// Tài khoản session
$userID = $_SESSION['user_id'] ?? 0;
$user = select__userByid($userID);

$listDanhmuc = list__danhmuc();


// session_destroy();

// echo "<pre>";
// print_r($_SESSION['mycart']);
// die();

include("views/header/header.php");


// Đăng ký
if(isset($_POST['dangky'])) {
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $hinh = $_FILES['hinh']['name'];
    move_uploaded_file($_FILES['hinh']['tmp_name'], "public/upload/" . $hinh);

    insert__account($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$hinh, $_POST['gender'],$hashed_password);
    echo "<script>alert('Chúc mừng bạn đã đăng ký thành công')</script>";
    echo '<script>window.location.href="index.php"</script>';
}

// Đăng nhập
if(isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkaccount = selectAllAccount($email);

    if(!$checkaccount) {
        $row = checkPass($email);

        if($row) {
            $hashed_password = $row['mat_khau'];
            if(password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $row['ma_nguoi_dung'];
                echo "<script>alert('Xin chào: {$row['ho_ten']}')</script>";
                echo '<script>window.location.href="index.php"</script>';
                // header('location: index.php');
                // exit();
            } else {
                echo "<script>alert('Tên tài khoản hoặc mật khẩu không đúng')</script>";
            }
        } else {
            echo "<script>alert('Tài khoản không tồn tại')</script>";
        }

    } else {
        echo "<script>alert('lỗi truy vấn cơ sở dữ liệu')</script>";
    }
}


// Thêm vào giỏ hàng
if (isset($_POST['addCart'])) {
    $thanhtien = 0;

    $ma_sach = $_POST['ma_sach'];
    $ten_sach = $_POST['ten_sach'];
    $hinh = $_POST['hinh'];
    $gia = $_POST['gia'];
    $so_luong = $_POST['so_luong'];
    $thanhtien = $gia * $so_luong;

    $index = count($_SESSION['mycart']);

    $found = false;

    if ($_SESSION['mycart']) {
        foreach ($_SESSION['mycart'] as $key => $value) {
            if ($value['ma_sach'] == $ma_sach) {
                $_SESSION['mycart'][$key]['so_luong'] += $so_luong;
                $_SESSION['mycart'][$key]['thanhtien'] = $gia * $_SESSION['mycart'][$key]['so_luong'];
                $found = true;
                echo '<script>alert("Thêm vào giỏ hàng thành công.")</script>';
                break;
            }
        }
    }

    if (!$found) {
        $_SESSION['mycart'][$index] = $_POST;
        $_SESSION['mycart'][$index]['thanhtien'] = $thanhtien;
        echo '<script>alert("Thêm vào giỏ hàng thành công.")</script>';
    }
}



// Sản phẩm
$listProduct = load_all_product();

if (isset($_GET["act"]) && $_GET["act"]) {
    $act = $_GET["act"];
    switch ($act) {
        case "search":
            if (isset($_POST['timkiem'])) {
                $listpro_search = search_product($_POST['keyword']);
            }
            include("views/main/viewsearch.php");
            break;
        case "sanpham";
            include("views/main/sanpham.php");
            break;
        case "danhmuc";
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
            } else {
                $id_danhmuc = "";
            }
            $listproduct_dm = load_sanpham_bydanhmuc($id_danhmuc);
            include("views/main/danhmuc.php");
            break;
        case 'chi-tiet-san-pham':
            if (isset($_GET['giay']) && ($_GET['giay']) > 0) {
                $giayId = $_GET['giay'];
                $sp_chitiet = product_chitiet($giayId);
                $sanpham_lienquan = sanpham_lienquan($sp_chitiet['ma_danh_muc'], $giayId);
                $load_comment = loadall__comment__Byid($giayId);
            } else {
                $giayId = "";
            }


            if (isset($_POST['binhluan'])) {
                insert__comment($userID, $giayId, $_POST['noidung']);
                header('Location: index.php?act=chi-tiet-san-pham&giay=' . $_GET['giay']);
            }

            include("views/main/chitietsp.php");
            break;

            // if (isset($_POST['addToCart'])) {



        case 'themgiohang':
            if (isset($_POST['addToCart'])) {

                if ($user) {
                    $id = $_POST['id_sanpham'];
                    $name = $_POST['name'];
                    $img = $_POST['images'];
                    $price = $_POST['gia'];
                    $soluong = $_POST['quantity'];
                    $thanhtien = $price * $soluong;

                    // $itemExists = false;

                    $index = count($_SESSION['mycart']);

                    if ($_SESSION['mycart']) {
                        foreach ($_SESSION['mycart'] as $key => $value) {
                            if ($value['id_sanpham'] == $id) {
                                $_SESSION['mycart'][$key]['quantity'] += $soluong;
                                break;
                            } else {
                                $_SESSION['mycart'][$index] = $_POST;
                                $_SESSION['mycart'][$index]['thanhtien'] = $thanhtien;
                                break;
                            }
                        }
                    } else {
                        $_SESSION['mycart'][$index] = $_POST;
                        $_SESSION['mycart'][$index]['thanhtien'] = $thanhtien;
                    }


                    // foreach ($_SESSION['mycart'] as &$cartItem) {
                    //     if ($cartItem[0] == $id) {
                    //         // Cập nhật số lượng và tổng giá của sản phẩm đã tồn tại
                    //         $cartItem[4] += $soluong;
                    //         $itemExists = true;
                    //         break;
                    //     }
                    // }

                    // if (!$itemExists) {
                    //     // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm nó vào giỏ
                    //     $sanphamadd = [$id, $name, $img, $price, $soluong, $thanhtien];
                    //     $_SESSION['mycart'][] = $sanphamadd;
                    // }

                    echo '<script>alert("Thêm vào giỏ hàng thành công")</script>';
                    echo '<script>window.location.href="index.php?act=chi-tiet-san-pham&giay=' . $_POST['id_sanpham'] . '"</script>';
                } else {
                    echo '<script>alert("Vui lòng đăng nhập!")</script>';
                    echo '<script>window.location.href="index.php"</script>';
                }
            }

            break;

        case 'capnhatgiohang':
            // // Cập nhật giỏ hàng
            if (isset($_POST['update_cart'])) {
                $ma_sach_arr = $_POST['ma_sach'];
                $so_luong_arr = $_POST['so_luong'];

                foreach ($_SESSION['mycart'] as $key => $value) {
                    $ma_sach = $ma_sach_arr[$key];
                    $so_luong_moi = $so_luong_arr[$key];

                    if ($value['ma_sach'] == $ma_sach) {
                        $gia = $value['gia'];

                        $_SESSION['mycart'][$key]['so_luong'] = $so_luong_moi;
                        $_SESSION['mycart'][$key]['thanhtien'] = $gia * $so_luong_moi;
                    }
                }
            }


            include("views/main/giohang.php");

            break;

        case 'giohang':
            include("views/main/giohang.php");
            break;

        case 'delete_cart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                // tham số thứ nhất truyền vào là 1 mảng, tham số thứ 2 là vị trí cần xóa, tham số thứ 3 xóa bao nhiều phần tử
            } else {
                $_SESSION['mycart'] = [];
            }
            break;

        case 'thanhtoan':

            if (!isset($_SESSION['user_id'])) {
                header('Location: index.php');
                exit();
            }


            if (isset($_POST['quantity'])) {
                foreach ($_POST['quantity'] as $key => $soluong) {
                    $_SESSION['mycart'][$key]['quantity'] = $soluong;
                }
            }

            if (isset($_POST['xacnhan'])) {

                $_SESSION['payment_session'] = $_POST['payment'];
                $_SESSION['ma_don_hang'] = generateRandomOrderCode();

                $_SESSION['thongtin'] = $_POST;

                if (isset($_POST['payment']) && ($_POST['payment']) == "vnpay") {

                    $_SESSION['thongtin'] = $_POST;
                    $_SESSION['ma_don_hang'] = generateRandomOrderCode();


                    $thanhtien = 0;

                    foreach ($_SESSION['mycart'] as $cartItem) {
                        $tongtien = $cartItem['gia'] * $cartItem['quantity'];
                        $thanhtien += $tongtien; // Update the total
                    }

                    $vnp_TxnRef = $_SESSION['ma_don_hang']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY

                    $vnp_OrderInfo = "Thanh toán đơn hàng";
                    $vnp_OrderType = "Billpayment";
                    $vnp_Amount = $thanhtien * 100; //Giá tiền
                    $vnp_Locale = "VN";
                    $vnp_BankCode = "NCB";
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                    $vnp_ExpireDate = $expire;
                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef,
                        "vnp_ExpireDate" => $vnp_ExpireDate
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }


                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    $returnData = array(
                        'code' => '00',
                        'message' => 'success',
                        'data' => $vnp_Url
                    );

                    if (isset($_POST['xacnhan']) && isset($_POST['payment']) == "vnpay") {
                        echo '<script>window.location.href = "' . $vnp_Url . '";</script>';
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                } else {
                    $_SESSION['ma_don_hang'] = generateRandomOrderCode();
                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION['mycart'] as $cartItem) {
                        $tongtien = $cartItem['gia'] * $cartItem['quantity'];
                        $thanhtien = $tongtien + $thanhtien;
                    }

                    header('Location: index.php?act=camon');
                }
            }


            include("views/main/thanhtoan.php");
            break;
        case 'huydon':
            if (isset($_GET['id_donhang']) && ($_GET['id_donhang'] > 0)) {
                $id_donhang = $_GET['id_donhang'];
                huydon($id_donhang);
                echo "<script>alert('Đơn hàng của bạn đã được hủy thành công.')</script>";
                echo "<script>window.location.href = 'index.php?act=order';</script>";
            } else {
                $id_donhang = "";
            }
            break;
        case 'camon':
            if ($_SESSION['payment_session'] == "vnpay") {
                if (isset($_GET["vnp_Amount"]) && $_GET['vnp_ResponseCode'] == '00') {
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaymua = date("Y-m-d H:i:s");

                    if (isset($_SESSION["user_id"])) {

                        $ma_donhang = $_SESSION["ma_don_hang"];

                        $loai_thanhtoan = "VNPAY";
                        $thanhtoan = 1;

                        $id_bill = insert_bill($userID, $ma_donhang, $_SESSION['thongtin']['billing_first_name'], $_SESSION['thongtin']['billing_phone'], $_SESSION['thongtin']['billing_address'], $thanhtoan, $loai_thanhtoan);

                        $i = 0;
                        $tongtien = 0;

                        foreach ($_SESSION['mycart'] as $cartItem) {
                            $tongtien = $cartItem['gia'] * $cartItem['quantity'];
                            insert_bill_detail($id_bill, $cartItem['id_sanpham'], $cartItem['quantity'], $tongtien);
                            $i++;
                        }
                    }

                    $vnp_BankCode = $_GET["vnp_BankCode"];
                    $vnp_BankTranNo = $_GET["vnp_BankTranNo"];
                    $vnp_CardType = $_GET["vnp_CardType"];
                    $vnp_OrderInfo = $_GET["vnp_OrderInfo"];
                    $vnp_PayDate = $_GET["vnp_PayDate"];
                    $vnp_TmnCode = $_GET["vnp_TmnCode"];
                    $vnp_TransactionNo = $_GET["vnp_TransactionNo"];


                    unset($_SESSION["cart"]);
                    unset($_SESSION["mycart"]);
                    unset($_SESSION["madonhang"]);
                    include("./views/main/camon.php");
                } else {
                    echo "<script>alert('Đã hủy thanh toán');</script>";
                    echo '<script>window.location.href = "index.php?act=thanhtoan";</script>';
                }
            } else {
                $loai_thanhtoan = "tienmat";

                $ma_donhang = $_SESSION["ma_don_hang"];
                $thanhtoan = 0;
                $id_bill = insert_bill($userID, $ma_donhang, $_SESSION['thongtin']['billing_first_name'], $_SESSION['thongtin']['billing_phone'], $_SESSION['thongtin']['billing_address'], $thanhtoan, $loai_thanhtoan);

                $i = 0;
                $tongtien = 0;

                foreach ($_SESSION['mycart'] as $cartItem) {

                    $tongtien = $cartItem['gia'] * $cartItem['quantity'];
                    insert_bill_detail($id_bill, $cartItem['id_sanpham'], $cartItem['quantity'], $tongtien);
                    $i++;
                }

                unset($_SESSION['mycart']);
                unset($_SESSION['ma_don_hang']);
                include("views/main/camon.php");
            }

            break;
        case 'account':
            if (isset($_POST['capnhat'])) {
                $password = $_POST['password'];
                $hashpass = password_hash($password, PASSWORD_DEFAULT);

                update__account($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $hashpass, $userID);
                echo '<script>alert("Cập nhật tài khoản thành công")</script>';
                echo '<script>window.location.href="' . $_SERVER['HTTP_REFERER'] . '"</script>';
            }
            include("views/main/account.php");
            break;
        case 'dangxuat':
            unset($_SESSION['user_id']);
            unset($_SESSION['mycart']);
            header('Location: index.php');
            break;
            
        case 'order':
            $listorder_detail = list_orderDetail($userID);
            include("views/main/order.php");
            break;
    }
} else {
    include("views/main/main.php");
}
include("views/footer/footer.php");

ob_end_flush();
