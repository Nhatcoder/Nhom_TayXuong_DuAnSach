<?php
    session_start();
    include("header.php");

    if (isset($_GET["act"]) && $_GET["act"]) {

        $act = $_GET["act"];

        switch ($act) {

            // Danh mục sản phẩm
            case 'listdanhmuc':
                include('danhmuc/listdanhmuc.php');
                break;
            case 'themdanhmuc':
                include('danhmuc/them.php');
                break;
            case 'suadanhmuc':
                include('danhmuc/suadanhmuc.php');
                break;


            // Sản phẩm
            case 'listsanpham':
                include('sanpham/listsanpham.php');
                break;
            case 'themsanpham':
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