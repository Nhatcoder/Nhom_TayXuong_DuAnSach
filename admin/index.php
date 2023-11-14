<?php
    session_start();
    include("header.php");

    if (isset($_GET["act"]) && $_GET["act"]) {
        $act = $_GET["act"];
        switch ($act) {
            case 'listdanhmuc':
                include('danhmuc/lisdanhmuc.php');
                break;
            case 'themdanhmuc':
                include('danhmuc/them.php');
                break;
            case 'suadanhmuc':
                include('danhmuc/suadanhmuc.php');
                break;
        }
    } else {

    }
    include("main.php");

    include("footer.php");
?>