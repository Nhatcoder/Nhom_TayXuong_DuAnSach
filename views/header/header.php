<!DOCTYPE html>
<html lang="en">

<head>
        <title>Trang chủ</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="./views/assets/img/favicon.png">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./views/assets/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="./views/assets/vendor/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="./views/assets/vendor/animate.css/animate.css">
        <link rel="stylesheet" href="./views/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="./views/assets/vendor/slick-carousel/slick/slick.css" />
        <link rel="stylesheet" href="./views/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" href="./views/assets/css/theme.css">
</head>


<body>
        <header id="site-header" class="site-header__v1">
                <div class="topbar border-bottom d-none d-md-block">
                        <div class="container-fluid px-2 px-md-5 px-xl-8d75">
                                <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                                        <ul class="topbar__nav--left nav ml-md-n3">
                                                <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Can
                                                                we help you?</a></li>
                                                <li class="nav-item"><a href="tel:+1246-345-0695" class="nav-link link-black-100"><i class="glph-icon flaticon-phone mr-2"></i>+1
                                                                246-345-0695</a></li>
                                        </ul>
                                        <ul class="topbar__nav--right nav mr-md-n3">
                                                <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-pin"></i></a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-switch"></i></a></li>
                                                <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-heart"></i></a></li>
                                                <li class="nav-item">

                                                        <a id="sidebarNavToggler" href="index.php?act=login" role="button" class="nav-link link-black-100"  data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                                <i class="glph-icon flaticon-user"></i>
                                                                <?php
                                                                if (isset($_SESSION['username'])) {
                                                                        echo $_SESSION['username']?$_SESSION['username']['ho_ten']:"";
                                                                        echo '<a href="index.php?act=logout">Đăng xuất</a>';
                                                                        if ($_SESSION['username']['trangthai'] == 1) {
                                                                                echo '<a href="../xuong1_nhom1/admin/index.php">Admin</a>';
                                                                        }
                                                                }
                                                                ?>
                                                        </a>

                                                </li>
                                                <li class="nav-item">

                                                        <a id="sidebarNavToggler1" href="index.php?act=giohang" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay="{
                                    &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                                    &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                                    &quot;animationSpeed&quot;: 500
                                }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                                <span class="position-absolute bg-dark width-16 height-16 rounded-circle d-flex align-items-center justify-content-center text-white font-size-n9 right-0">3</span>
                                                                <i class="glph-icon flaticon-icon-126515"></i>
                                                        </a>

                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>

                <!-- Menu -->
                <?php
                include("menu.php");
                ?>
        </header>

        <!-- Tài khoản -->
        <aside id="sidebarContent9" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler9">
                <div class="u-sidebar__scroller">
                        <div class="u-sidebar__container">
                                <div class="u-header-sidebar__footer-offset">

                                        <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                                                <button type="button" class="close ml-auto" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                                                </button>
                                        </div>


                                        <!-- Tài khoản -->
                                        

                                </div>
                        </div>
                </div>
        </aside>