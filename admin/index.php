<?php
session_start();
include("view/header.php");

// if (isset($_GET["act"]) && $_GET["act"]) {
//     $act = $_GET["act"];
//     switch ($act) {
//         case 'themdanhmuc':
//             include('danhmuc/them.php');
//             break;


//     }
// } else {
// }

include("view/main.php");
include("view/footer.php");
?>