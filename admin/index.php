<?php
session_start();

include("header.php");
include("menu.php");

if (isset($_GET["act"]) && $_GET["act"]) {
    $act = $_GET["act"];
    switch ($act) {
        case 'themdanhmuc':
            include('danhmuc/them.php');
            break;


    }
} else {
    include("main.php");
}
include("footer.php");
?>