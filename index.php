<?php
ob_start();
session_start();

include("views/header/header.php");


if (isset($_GET["act"]) && $_GET["act"]) {
    $act = $_GET["act"];
    switch ($act) {
        case 'themgiohang':

            echo '<script>alert("Thêm thành công")</script>';
            echo '<script>window.location.href="index.php"</script>';
            break;

        case 'giohang':

            include("views/main/giohang.php");
            break;

        case 'thanhtoan':

            include("views/main/thanhtoan.php");
            break;


    }
} else {
    include("views/main/main.php");
}
include("views/footer/footer.php");

ob_end_flush();
?>