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
    <link rel="stylesheet" href="./views/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./views/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="./views/assets/css/theme.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
</head>

<?php
    $act = $_GET['act'] ?? "";
?>

<body class="<?= $act == "sanpham" || $act == "danhmuc" || $act == "search" ? "left-sidebar" : "" ?>">
    <header id="site-header" class="site-header__v1">
        <div class="topbar border-bottom d-none d-md-block">
            <div class="container-fluid px-2 px-md-5 px-xl-8d75">
                <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                    <ul class="topbar__nav--left nav ml-md-n3">
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-question mr-2"></i>Bạn có vấn đề?</a></li>
                        <li class="nav-item"><a href="tel:+1246-345-0695" class="nav-link link-black-100"><i class="glph-icon flaticon-phone mr-2"></i>+1
                                246-345-0695</a></li>
                    </ul>
                    <ul class="topbar__nav--right nav mr-md-n3">
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-pin"></i></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-switch"></i></a></li>
                        <li class="nav-item"><a href="#" class="nav-link link-black-100"><i class="glph-icon flaticon-heart"></i></a></li>
                        <li class="nav-item">

                            <a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100 target-of-invoker-has-unfolds" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay="{
        &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
        &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
        &quot;animationSpeed&quot;: 500
        }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li>
                        <li class="nav-item">

                            <?php
                                if($user) {
                                    if(isset($_SESSION['myCart'])) {
                                        ?>
                                            <a id="sidebarNavToggler1" href="index.php?act=giohang" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay="{
                        &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                        &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                        &quot;animationSpeed&quot;: 500
                        }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                <span class="position-absolute bg-dark width-16 height-16 rounded-circle d-flex align-items-center justify-content-center text-white font-size-n9 right-0"><?= $_SESSION['myCart'] ?></span>
                                                <i class="glph-icon flaticon-icon-126515"></i>
                                            </a>
                                        <?php
                                    } else {
                                        ?>
                                            <a id="sidebarNavToggler1" href="index.php?act=giohang" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay="{
                        &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                        &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                        &quot;animationSpeed&quot;: 500
                        }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                <i class="glph-icon flaticon-icon-126515"></i>
                                            </a>
                                        <?php
                                    }
                                } else {
                                    ?>
                                        <a id="sidebarNavToggler1" href="index.php?act=giohang" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay="{
                    &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                    &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                    &quot;animationSpeed&quot;: 500
                    }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                        
                                            <i class="glph-icon flaticon-icon-126515"></i>
                                        </a>
                                    <?php
                                }
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <div class="masthead border-bottom position-relative" style="margin-bottom: -1px;">
            <div class="container-fluid px-3 px-md-5 px-xl-8d75 py-2 py-md-0">
                <div class="d-flex align-items-center position-relative flex-wrap">
                    <div class="offcanvas-toggler mr-4 mr-lg-8">
                        <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu target-of-invoker-has-unfolds" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-overlay="{
                            &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                            &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                            &quot;animationSpeed&quot;: 100
                        }" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="100">
                            <svg width="20px" height="18px">
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z"></path>
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z"></path>
                                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="site-branding pr-md-4">
                        <a href="index.php" class="d-block mb-1">
                            <img width="120px" src="./images/lgsnk.jpg" alt="">
                        </a>
                    </div>
                    <div class="site-navigation mr-auto d-none d-xl-block">
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a id="homeDropdownInvoker" href="index.php" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center active" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#homeDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="nav-item"><a href="index.php?act=sanpham" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium border-bottom border-primary border-width-2">Sản phẩm</a>
                            </li>
                            <li class="nav-item dropdown">

                                <a id="shopDropdownInvoker" href="index.php?act=danhmuc" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center target-of-invoker-has-unfolds" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#shopDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    Danh mục
                                </a>
                                <ul id="shopDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900 u-unfold--css-animation u-unfold--hidden" aria-labelledby="shopDropdownInvoker" style="animation-duration: 200ms;">
                                    <?php
                                    foreach ($listDanhmuc as $danhmuc) {
                                    ?>
                                        <li>
                                            <a href="index.php?act=danhmuc&id_danhmuc=<?= $danhmuc['id'] ?>" class="dropdown-item link-black-100">
                                                <?= $danhmuc['ten_danhmuc'] ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a id="featuresDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#featuresDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    Trang
                                </a>
                                <div id="featuresDropdownMenu" class="p-0 dropdown-unfold dropdown-menu megamenu font-size-2 rounded-0 border-gray-900 u-unfold--css-animation u-unfold--hidden" aria-labelledby="featuresDropdownInvoker" style="width: 1100px; animation-duration: 200ms;">
                                    <div class="row no-gutters">
                                        <div class="col-8 px-1">
                                            <div class="px-5 py-2 pb-5">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <ul class="menu list-unstyled">
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Home</span>
                                                            </li>
                                                            <li><a href="index.html" class="d-block link-black-100 py-1">Home
                                                                    v1</a>
                                                            </li>
                                                            <li><a href="home-v2.html" class="d-block link-black-100 py-1">Home
                                                                    v2</a>
                                                            </li>
                                                            <li><a href="home-v3.html" class="d-block link-black-100 py-1">Home
                                                                    v3</a>
                                                            </li>
                                                            <li><a href="home-v4.html" class="d-block link-black-100 py-1">Home
                                                                    v4</a>
                                                            </li>
                                                            <li><a href="home-v5.html" class="d-block link-black-100 py-1">Home
                                                                    v5</a>
                                                            </li>
                                                            <li><a href="home-v6.html" class="d-block link-black-100 py-1">Home
                                                                    v6</a>
                                                            </li>
                                                            <li><a href="home-v7.html" class="d-block link-black-100 py-1">Home
                                                                    v7</a>
                                                            </li>
                                                            <li><a href="home-v8.html" class="d-block link-black-100 py-1">Home
                                                                    v8</a>
                                                            </li>
                                                            <li><a href="home-v9.html" class="d-block link-black-100 py-1">Home
                                                                    v9</a>
                                                            </li>
                                                            <li><a href="home-v10.html" class="d-block link-black-100 py-1">Home
                                                                    v10</a>
                                                            </li>
                                                            <li><a href="home-v11.html" class="d-block link-black-100 py-1">Home
                                                                    v11</a>
                                                            </li>
                                                            <li><a href="home-v12.html" class="d-block link-black-100 py-1">Home
                                                                    v12</a>
                                                            </li>
                                                            <li><a href="home-v13.html" class="d-block link-black-100 py-1">Home
                                                                    v13</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <ul class="menu list-unstyled">
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Single
                                                                    Product</span>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v1</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v2.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v2</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v3</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v4.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v4</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v5.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v5</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v6.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v6</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v7.html" class="d-block link-black-100 py-1">Single
                                                                    Product
                                                                    v7</a>
                                                            </li>
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Shop
                                                                    Pages</span>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/cart.html" class="d-block link-black-100 py-1">Shop
                                                                    cart</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/checkout.html" class="d-block link-black-100 py-1">Shop
                                                                    checkout</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/my-account.html" class="d-block link-black-100 py-1">Shop
                                                                    My
                                                                    Account</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-received.html" class="d-block link-black-100 py-1">Shop
                                                                    Order
                                                                    Received</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-tracking.html" class="d-block link-black-100 py-1">Shop
                                                                    Order
                                                                    Tracking</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/store-location.html" class="d-block link-black-100 py-1">Shop
                                                                    Store
                                                                    Location</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <ul class="menu list-unstyled">
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Shop
                                                                    List</span>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v1</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v2.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v2</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v3.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v3</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v4.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v4</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v5.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v5</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v6.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v6</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v7.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v7</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v8.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v8</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v9.html" class="d-block link-black-100 py-1">Shop
                                                                    List
                                                                    v9</a>
                                                            </li>
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Blog</span>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v1.html" class="d-block link-black-100 py-1">Blog
                                                                    v1</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v2.html" class="d-block link-black-100 py-1">Blog
                                                                    v2</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v3.html" class="d-block link-black-100 py-1">Blog
                                                                    v3</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-single.html" class="d-block link-black-100 py-1">Blog
                                                                    Single</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <ul class="menu list-unstyled">
                                                            <li><span class=" d-block link-black-100 py-3 font-size-3 font-weight-medium">Others</span>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/404.html" class="d-block link-black-100 py-1">404</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/about.html" class="d-block link-black-100 py-1">About
                                                                    Us</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-list.html" class="d-block link-black-100 py-1">Authors
                                                                    List</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="d-block link-black-100 py-1">Authors
                                                                    Single</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/coming-soon.html" class="d-block link-black-100 py-1">Coming
                                                                    Soon</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/contact.html" class="d-block link-black-100 py-1">Contact
                                                                    Us</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/faq.html" class="d-block link-black-100 py-1">FAQ</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/pricing-table.html" class="d-block link-black-100 py-1">Pricing
                                                                    Table</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/terms-conditions.html" class="d-block link-black-100 py-1">Terms
                                                                    Conditions</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/documentation/index.html" class="btn btn-primary mb-3 mb-md-0 mb-xl-3 mt-4 font-size-2 btn-block">Documentation</a>
                                                            </li>
                                                            <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/starter/index.html" class="btn btn-secondary font-size-2 btn-block mb-2">Starter</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 bg-gray-200">
                                            <div class="banner px-8 py-5">
                                                <div class="banner__body">
                                                    <h3 class="banner_text m-0">
                                                        <span class="d-block mb-1 font-size-7 font-weight-regular">Deals
                                                            in
                                                        </span>
                                                        <span class="d-block mb-2 font-size-10 text-primary font-weight-bold">Books</span>
                                                    </h3>
                                                    <a href="#" class="d-block link-black-100 mb-6">Shop
                                                        Now</a>
                                                    <div class="banner__image">
                                                        <img src="./views/assets/img/280x213/img1.png" class="img-fluid" alt="image-description">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="blogDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#blogDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    Tin tức
                                </a>
                                <ul id="blogDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900 u-unfold--css-animation u-unfold--hidden" aria-labelledby="blogDropdownInvoker" style="animation-duration: 200ms;">
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v1.html" class="dropdown-item link-black-100">Blog
                                            v1</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v2.html" class="dropdown-item link-black-100">Blog
                                            v2</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v3.html" class="dropdown-item link-black-100">Blog
                                            v3</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-single.html" class="dropdown-item link-black-100">Blog
                                            Single</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="pagesDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#pagesDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    Others
                                </a>
                                <ul id="pagesDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900 u-unfold--css-animation u-unfold--hidden" aria-labelledby="pagesDropdownInvoker" style="animation-duration: 200ms;">
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/404.html" class="dropdown-item link-black-100">404</a>
                                    </li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/about.html" class="dropdown-item link-black-100">About
                                            Us</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-list.html" class="dropdown-item link-black-100">Authors
                                            List</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="dropdown-item link-black-100">Authors
                                            Single</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/coming-soon.html" class="dropdown-item link-black-100">Coming
                                            Soon</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/contact.html" class="dropdown-item link-black-100">Contact
                                            Us</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/faq.html" class="dropdown-item link-black-100">FAQ</a>
                                    </li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/pricing-table.html" class="dropdown-item link-black-100">Pricing
                                            Table</a></li>
                                    <li><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/terms-conditions.html" class="dropdown-item link-black-100">Terms
                                            Conditions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="d-md-none nav mr-md-n3 ml-auto">
                        <li class="nav-item">

                            <a id="sidebarNavToggler9" href="javascript:;" role="button" class="px-2 nav-link link-black-100 target-of-invoker-has-unfolds" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-overlay="{
                                    &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                                    &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                                    &quot;animationSpeed&quot;: 500
                                }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li>
                    </ul>
                    <div class="site-search ml-xl-0 ml-md-auto w-r-100 my-2 my-xl-0">
                        <form class="form-inline" method="post" action="index.php?act=search">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="glph-icon flaticon-loupe input-group-text py-2d75 bg-white-100 border-white-100"></i>
                                </div>
                                <input class="form-control bg-white-100 min-width-380 py-2d75 height-4 border-white-100" type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm..." aria-label="Search">
                            </div>
                            <input class="btn btn-outline-success my-2 my-sm-0 sr-only" name="timkiem" value="Tìm kiếm" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="js-scrollbar u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">
                            <form class>
                                <div id="login1" data-target-group="idForm1">
                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center">
                                            <i class="flaticon-user mr-3 font-size-5"></i>Account
                                        </h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel9" class="form-label" for="signinEmail9">Username
                                                    or email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail9" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel9" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel9" class="form-label" for="signinPassword9">Password
                                                    *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword9" placeholder aria-label aria-describedby="signinPasswordLabel9" required>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mb-5 align-items-center">

                                            <div class="js-form-message">
                                                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox1" name="termsCheckbox1" required>
                                                    <label class="custom-control-label" for="termsCheckbox1">
                                                        <span class="font-size-2 text-secondary-gray-700">
                                                            Remember
                                                            me
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:;" data-target="#forgotPassword1" data-link-group="idForm1" data-animation-in="fadeIn">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="mb-4d75">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign
                                                In</button>
                                        </div>
                                        <div class="mb-2">
                                            <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup1" data-link-group="idForm1" data-animation-in="fadeIn">Create
                                                Account</a>
                                        </div>
                                    </div>
                                </div>

                                <div id="signup1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center">
                                            <i class="flaticon-resume mr-3 font-size-5"></i>Create
                                            Account
                                        </h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel11" class="form-label" for="signinEmail11">Email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail11" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel11" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel11" class="form-label" for="signinPassword11">Password
                                                    *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword11" placeholder aria-label aria-describedby="signinPasswordLabel11" required>
                                            </div>
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Confirm
                                                    Password
                                                    *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword" id="signupConfirmPassword9" placeholder aria-label aria-describedby="signupConfirmPasswordLabel9" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create
                                                Account</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already
                                                have an account?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Login
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div id="forgotPassword1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center">
                                            <i class="flaticon-question mr-3 font-size-5"></i>Forgot
                                            Password?
                                        </h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel33" class="form-label" for="signinEmail33">Email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail33" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel33" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recover
                                                Password</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember
                                                your password?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Login
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>
    