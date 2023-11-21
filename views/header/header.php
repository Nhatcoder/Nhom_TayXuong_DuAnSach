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

                                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay="{
                                    &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                                    &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                                    &quot;animationSpeed&quot;: 500
                                }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                                                <i class="glph-icon flaticon-user"></i>
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