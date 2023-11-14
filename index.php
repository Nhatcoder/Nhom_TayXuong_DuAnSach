<?php
    session_start();

    include("views/header.php");
    if (isset($_GET["act"]) && $_GET["act"]) {
        $act = $_GET["act"];
        switch ($act) {
            case 'themdanhmuc':
                // include('danhmuc/them.php');
                break;
            
        }
    } else {
        include("views/main.php");
    }
    include("views/footer.php");
?>