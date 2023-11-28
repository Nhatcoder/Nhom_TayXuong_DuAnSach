<?php
ob_start();
session_start();

include("./models/pdo.php");
include("./models/list_sach_home.php");
include("./models/randomDonhang.php");
include("./models/config_vnpay.php");
include("./models/orderModel.php");
include("./models/danhmuc.php");
include("./models/accountModel.php");
include("views/header/header.php");

$userID = $_SESSION['user_id'] ?? 0;
$user = load_account(1);


$list_sach_all_home = list_sach_all_home();

// session_destroy();
// die();

// echo "<pre>";
// print_r($_SESSION["cart"]);
// echo "<pre>";

// unset($_SESSION['cart']);
// unset($_SESSION['ma_don_hang']);
// unset($_SESSION['payment_session']);
// unset($_SESSION['thongtin']);

if (isset($_GET["act"]) && $_GET["act"]) {
    $act = $_GET["act"];

    switch ($act) {
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
                $_SESSION["cart"] = $updatedCart;
            }
            include("views/main/giohang.php");
            break;

        case 'thanhtoan':

            if(isset($_POST['quantity'])) {
                foreach($_POST['quantity'] as $key => $soluong) {
                    $_SESSION['cart'][$key]['quantity'] = $soluong;
                }
            }

            if(isset($_POST['xacnhan'])) {

                $_SESSION['payment_session'] = $_POST['payment'];
                $_SESSION['ma_don_hang'] = generateRandomOrderCode();

                $_SESSION['thongtin'] = $_POST;

                if(isset($_POST['payment']) && ($_POST['payment']) == "vnpay") {
                        
                    $_SESSION['thongtin'] = $_POST;
                    $_SESSION['ma_don_hang'] = generateRandomOrderCode();


                    $thanhtien = 0;

                    foreach ($_SESSION['cart'] as $cartItem) {
                        $tongtien = $cartItem['gia'] * $cartItem['soluongmua'];
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
                    foreach ($_SESSION['cart'] as $cartItem) {         
                        $tongtien = $cartItem['gia'] * $cartItem['soluongmua'];
                        $thanhtien = $tongtien + $thanhtien;
                    }

                    header('Location: index.php?act=camon');
                }

            }

            include("views/main/thanhtoan.php");
            break;
        case 'camon':
            if($_SESSION['payment_session'] == "vnpay") {

                if (isset($_GET["vnp_Amount"]) && $_GET['vnp_ResponseCode'] == '00') {
    
                    $ma_donhang = $_SESSION["ma_don_hang"];

                    $loai_thanhtoan = "VNPAY";
                    
                    $id_bill = insert_bill(1,$ma_donhang,$_SESSION['thongtin']['tonggia'],$_SESSION['thongtin']['ghichu'],$loai_thanhtoan);

                    $i = 0;
                    $tongtien = 0;
    
                    foreach ($_SESSION['cart'] as $cartItem) {
                        $thanhtien = $cartItem['soluongmua'] * $cartItem['gia'];
                        insert_bill_detail($id_bill,$cartItem['ma_sach'],$cartItem['soluongmua'],$cartItem['gia'],$thanhtien);
                    }
    
                    $vnp_BankCode = $_GET["vnp_BankCode"];
                    $vnp_BankTranNo = $_GET["vnp_BankTranNo"];
                    $vnp_CardType = $_GET["vnp_CardType"];
                    $vnp_OrderInfo = $_GET["vnp_OrderInfo"];
                    $vnp_PayDate = $_GET["vnp_PayDate"];
                    $vnp_TmnCode = $_GET["vnp_TmnCode"];
                    $vnp_TransactionNo = $_GET["vnp_TransactionNo"];
            
                    
                    unset($_SESSION['cart']);
                    unset($_SESSION['ma_don_hang']);
                    unset($_SESSION['payment_session']);
                    unset($_SESSION['thongtin']);
                    include("./views/main/camon.php");
                } else {
                    echo "<script>alert('Đã hủy thanh toán');</script>";
                    echo '<script>window.location.href = "index.php?act=thanhtoan";</script>';
    
                }
            } else {
                $loai_thanhtoan = "tienmat";
                
                $ma_donhang = $_SESSION["ma_don_hang"];

                $id_bill = insert_bill(1,$ma_donhang,$_SESSION['thongtin']['tonggia'],$_SESSION['thongtin']['ghichu'],$loai_thanhtoan);

                $i = 0;
                $tongtien = 0;

                foreach ($_SESSION['cart'] as $cartItem) {
                    $thanhtien = $cartItem['soluongmua'] * $cartItem['gia'];
                    insert_bill_detail($id_bill,$cartItem['ma_sach'],$cartItem['soluongmua'],$cartItem['gia'],$thanhtien);
                }

                unset($_SESSION['cart']);
                unset($_SESSION['ma_don_hang']);
                unset($_SESSION['payment_session']);
                unset($_SESSION['thongtin']);
                include("views/main/camon.php");
            }
    
            break;

    }
} else {
    include("views/main/main.php");
}
include("views/footer/footer.php");

ob_end_flush();
?>