<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Thoát <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <?php
                        if ($user) {
                        ?>
                            <div id="login" data-target-group="idForm">
                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Thông tin tài khoản</h2>
                                </header>

                                <div class="p-4 p-md-6">
                                    <?php
                                    if ($user['cap_bac'] == 1) {
                                    ?>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel" class="form-label" for="signinEmail"><a class="text__hover" href="admin/index.php" style="color: #000;">Vào trang quản trị</a></label>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel" class="form-label" for="signinEmail">Người dùng:<a class="text__hover" href="index.php?act=account" style="color: #000;"> <?= $user['ho_ten'] ?></a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel" class="form-label" for="signinPassword"><a class="text__hover" href="index.php?act=account" style="color: #000;">Thông tin tài khoản</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel" class="form-label" for="signinPassword"><a class="text__hover" href="index.php?act=order" style="color: #000;">Đơn hàng của bạn</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-4d75">
                                        <a href="index.php?act=dangxuat" class="btn btn-block py-3 rounded-0 btn-dark">Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <form action="index.php" method="post">
                                <div id="login" data-target-group="idForm">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Tài khoản</h2>
                                    </header>

                                    <div class="p-4 p-md-6">
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel" class="form-label" for="signinEmail">Email / Số điện thoại *</label>
                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="email" placeholder="creativelayers088@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel" class="form-label" for="signinPassword">Mật khẩu *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" aria-describedby="signinPasswordLabel">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-5 align-items-center">
                                            <div class="js-form-message">
                                                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                                    <label class="custom-control-label" for="termsCheckbox">
                                                        <span class="font-size-2 text-secondary-gray-700">
                                                            Ghi nhớ tôi
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="index.php?act=quenMatKhau" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Quên mật khẩu?</a>
                                        </div>
                                        <div class="mb-4d75">
                                            <button type="submit" name="dangnhap" class="btn btn-block py-3 rounded-0 btn-dark">Đăng nhập</button>
                                        </div>
                                        <div class="mb-2">
                                            <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Tạo tài khoản</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="index.php" onsubmit="return send_user()" method="post" enctype="multipart/form-data">
                                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Tạo tài khoản</h2>
                                    </header>
                                    <div class="p-4 p-md-6">
                                        <div class="form-group mb-4">
                                            <div class="">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Ảnh
                                                    *</label><br>
                                                <input type="file" class="" name="hinh" id="signinEmail1" placeholder="Nhập họ và tên..." aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Họ và tên
                                                    *</label>
                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="name" id="username" placeholder="Nhập họ và tên..." aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1">
                                                <span id="err_username" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="email" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1">
                                                <span id="err_email" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Số điện thoại
                                                    *</label>
                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="phone" id="phone" placeholder="Nhập số điện thoại..." aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1">
                                                <span id="err_phone" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Địa chỉ
                                                    *</label>
                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="address" id="address" placeholder="Nhập địa chỉ..." aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1">
                                                <span id="err_address" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Mật khẩu *</label>
                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="password" placeholder="VD: 123@abc,v.v" aria-label aria-describedby="signinPasswordLabel1">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Giới tính *</label><br>
                                                Nam <input name="gender" value="Nam" type="radio" checked>
                                                 Nữ <input name="gender" value="Nữ" type="radio">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="dangky" class="btn btn-block py-3 rounded-0 btn-dark">Tạo tài khoản</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Bạn đã có tài khoản?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Đăng nhập
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>


                            <form action="index.php?act=quenMatKhau" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">

                                    <header class="border-bottom px-4 px-md-6 py-4">
                                        <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Quên mật khẩu?</h2>
                                    </header>

                                    <div class="p-4 p-md-6">

                                        <div class="form-group mb-4">
                                            <div class="js-form-message js-focus-state">
                                                <label id="signinEmailLabel3" class="form-label" for="signinEmail3">Email
                                                    *</label>
                                                <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail3" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel3" required>
                                            </div>
                                            <span style="color: green;"><?= isset($successMail) ? $successMail : "" ?></span>
                                            <span style="color: red;"><?= isset($err_Mail) ? $err_Mail : "" ?></span>
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="btn_forgot_password" class="btn btn-block py-3 rounded-0 btn-dark">Phục hồi mật khẩu</button>
                                        </div>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Bạn có nhớ mật khẩu của mình không?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Login
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<footer>
    <div class="border-top space-top-3">
        <div class="border-bottom pb-5 space-bottom-lg-3">
            <div class="container">

                <div class="space-bottom-2 space-bottom-md-3">
                    <div class="text-center mb-5">
                        <h5 class="font-size-7 font-weight-medium">Tham gia bản tin của chúng tôi</h5>
                        <p class="text-gray-700">Đăng ký để trở thành người đầu tiên nghe về các ưu đãi độc quyền, đặc biệt
                            Ưu đãi và sắp tới
                            Bộ sưu tập</p>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="col-md-5 mb-3 mb-md-2">
                            <div class="js-form-message">
                                <div class="input-group">
                                    <input type="text" class="form-control px-5 height-60 border-dark" name="name" id="signupSrName" placeholder="Nhập email cho bản tin hàng tuần." aria-label="Your name" required data-msg="Name must contain only letters." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 ml-md-2">
                            <button type="submit" class="btn btn-dark rounded-0 btn-wide py-3 font-weight-medium">Gửi
                            </button>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4 mb-6 mb-lg-0">
                        <div class="pb-6">
                            <a href="index.html" class="d-inline-block mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="170px" height="30px">
                                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M166.225,28.691 L165.065,15.398 L160.598,28.691 L158.229,28.691 L153.762,15.398 L152.590,28.691 L148.928,28.691 L150.405,11.052 L155.629,11.052 L159.389,22.124 L163.198,11.052 L168.422,11.052 L169.875,28.691 L166.225,28.691 ZM142.641,28.691 L138.051,20.928 L136.989,20.928 L136.989,28.691 L133.327,28.691 L133.327,11.052 L139.724,11.052 C140.692,11.052 141.546,11.189 142.287,11.461 C143.028,11.734 143.620,12.112 144.063,12.596 C144.507,13.081 144.840,13.636 145.064,14.263 C145.288,14.889 145.400,15.577 145.400,16.326 C145.400,17.506 145.078,18.472 144.436,19.225 C143.793,19.978 142.869,20.484 141.665,20.745 L146.975,28.691 L142.641,28.691 ZM141.896,16.204 C141.896,15.544 141.673,15.028 141.225,14.653 C140.777,14.279 140.086,14.092 139.150,14.092 L136.989,14.092 L136.989,18.303 L139.150,18.303 C140.981,18.303 141.896,17.603 141.896,16.204 ZM125.570,27.831 C124.206,28.567 122.666,28.936 120.949,28.936 C119.224,28.936 117.680,28.567 116.317,27.831 C114.953,27.094 113.881,26.034 113.100,24.651 C112.319,23.267 111.928,21.672 111.928,19.866 C111.928,18.051 112.319,16.454 113.100,15.074 C113.881,13.695 114.953,12.639 116.317,11.907 C117.680,11.174 119.224,10.808 120.949,10.808 C122.674,10.808 124.217,11.174 125.576,11.907 C126.935,12.639 128.005,13.695 128.786,15.074 C129.567,16.454 129.958,18.051 129.958,19.866 C129.958,21.672 129.567,23.267 128.786,24.651 C128.005,26.034 126.933,27.094 125.570,27.831 ZM124.807,15.715 C123.797,14.690 122.512,14.177 120.949,14.177 C119.387,14.177 118.101,14.690 117.092,15.715 C116.083,16.741 115.578,18.124 115.578,19.866 C115.578,21.616 116.083,23.005 117.092,24.034 C118.101,25.064 119.387,25.579 120.949,25.579 C122.512,25.579 123.797,25.064 124.807,24.034 C125.816,23.005 126.320,21.616 126.320,19.866 C126.320,18.124 125.816,16.741 124.807,15.715 ZM66.872,28.691 L61.391,21.196 L60.097,21.196 L60.097,28.691 L56.435,28.691 L56.435,11.052 L60.097,11.052 L60.097,17.986 L61.342,17.986 L66.872,11.052 L71.340,11.052 L64.504,19.487 L71.547,28.691 L66.872,28.691 ZM48.677,27.831 C47.314,28.567 45.774,28.936 44.057,28.936 C42.332,28.936 40.788,28.567 39.425,27.831 C38.061,27.094 36.989,26.034 36.208,24.651 C35.427,23.267 35.036,21.672 35.036,19.866 C35.036,18.051 35.427,16.454 36.208,15.074 C36.989,13.695 38.061,12.639 39.425,11.907 C40.788,11.174 42.332,10.808 44.057,10.808 C45.782,10.808 47.324,11.174 48.684,11.907 C50.043,12.639 51.113,13.695 51.894,15.074 C52.675,16.454 53.066,18.051 53.066,19.866 C53.066,21.672 52.675,23.267 51.894,24.651 C51.113,26.034 50.040,27.094 48.677,27.831 ZM47.915,15.715 C46.905,14.690 45.620,14.177 44.057,14.177 C42.495,14.177 41.209,14.690 40.200,15.715 C39.191,16.741 38.686,18.124 38.686,19.866 C38.686,21.616 39.191,23.005 40.200,24.034 C41.209,25.064 42.495,25.579 44.057,25.579 C45.620,25.579 46.905,25.064 47.915,24.034 C48.924,23.005 49.428,21.616 49.428,19.866 C49.428,18.124 48.924,16.741 47.915,15.715 ZM28.487,27.831 C27.124,28.567 25.584,28.936 23.867,28.936 C22.141,28.936 20.597,28.567 19.234,27.831 C17.871,27.094 16.799,26.034 16.018,24.651 C15.236,23.267 14.846,21.672 14.846,19.866 C14.846,18.051 15.236,16.454 16.018,15.074 C16.799,13.695 17.871,12.639 19.234,11.907 C20.597,11.174 22.141,10.808 23.867,10.808 C25.592,10.808 27.134,11.174 28.493,11.907 C29.852,12.639 30.922,13.695 31.704,15.074 C32.485,16.454 32.875,18.051 32.875,19.866 C32.875,21.672 32.485,23.267 31.704,24.651 C30.922,26.034 29.850,27.094 28.487,27.831 ZM27.724,15.715 C26.715,14.690 25.429,14.177 23.867,14.177 C22.304,14.177 21.018,14.690 20.009,15.715 C19.000,16.741 18.496,18.124 18.496,19.866 C18.496,21.616 19.000,23.005 20.009,24.034 C21.018,25.064 22.304,25.579 23.867,25.579 C25.429,25.579 26.715,25.064 27.724,24.034 C28.733,23.005 29.238,21.616 29.238,19.866 C29.238,18.124 28.733,16.741 27.724,15.715 ZM11.672,27.367 C10.736,28.250 9.361,28.691 7.546,28.691 L0.283,28.691 L0.283,11.052 L5.996,11.052 C7.875,11.052 9.314,11.478 10.311,12.328 C11.308,13.178 11.806,14.365 11.806,15.886 C11.806,16.676 11.633,17.374 11.287,17.980 C10.941,18.586 10.431,19.052 9.755,19.377 C11.969,19.988 13.076,21.445 13.076,23.748 C13.076,25.278 12.608,26.484 11.672,27.367 ZM7.827,14.647 C7.420,14.277 6.821,14.092 6.032,14.092 L3.811,14.092 L3.811,18.242 L6.191,18.242 C6.940,18.242 7.501,18.047 7.875,17.656 C8.250,17.266 8.437,16.753 8.437,16.118 C8.437,15.508 8.233,15.018 7.827,14.647 ZM8.876,21.709 C8.445,21.278 7.749,21.062 6.789,21.062 L3.811,21.062 L3.811,25.554 L6.862,25.554 C7.782,25.554 8.455,25.347 8.883,24.932 C9.310,24.517 9.523,23.988 9.523,23.345 C9.523,22.686 9.308,22.140 8.876,21.709 Z">
                                    </path>
                                    <path class="fill-primary" fill-rule="evenodd" d="M105.996,23.499 C105.995,26.752 103.950,29.265 100.748,29.950 C100.713,29.958 100.681,29.983 100.647,30.000 C100.588,30.000 100.529,30.000 100.471,30.000 C100.467,28.585 100.460,27.171 100.466,25.756 C100.467,25.675 100.550,25.565 100.626,25.518 C101.352,25.068 101.714,24.425 101.711,23.571 C101.707,22.020 101.710,20.469 101.710,18.892 C103.133,18.892 104.546,18.892 105.996,18.892 C105.996,18.989 105.996,19.093 105.996,19.196 C105.996,20.630 105.997,22.065 105.996,23.499 ZM101.715,17.089 C101.715,15.990 101.683,14.917 101.724,13.847 C101.767,12.679 102.761,11.806 103.931,11.838 C105.060,11.869 105.978,12.794 105.993,13.940 C106.005,14.954 105.995,15.969 105.995,16.983 C105.995,17.011 105.987,17.040 105.980,17.089 C104.569,17.089 103.157,17.089 101.715,17.089 ZM96.421,29.234 C94.322,27.983 93.199,26.136 93.155,23.703 C93.108,21.138 93.145,18.571 93.146,16.005 C93.146,15.957 93.153,15.910 93.159,15.841 C94.572,15.841 95.976,15.841 97.426,15.841 C97.426,15.948 97.426,16.060 97.426,16.172 C97.426,18.602 97.430,21.031 97.423,23.461 C97.421,24.364 97.757,25.066 98.548,25.540 C98.629,25.589 98.688,25.740 98.689,25.844 C98.699,27.122 98.695,28.401 98.696,29.679 C98.696,29.786 98.703,29.893 98.707,30.000 C98.648,30.000 98.590,30.000 98.531,30.000 C97.799,29.823 97.075,29.624 96.421,29.234 ZM93.145,14.043 C93.145,13.935 93.145,13.823 93.145,13.711 C93.145,11.318 93.137,8.926 93.149,6.534 C93.154,5.625 92.818,4.928 92.023,4.460 C91.961,4.424 91.894,4.332 91.894,4.265 C91.886,2.850 91.888,1.436 91.888,0.000 C93.423,0.232 94.703,0.889 95.731,2.009 C96.833,3.209 97.413,4.630 97.421,6.261 C97.433,8.791 97.426,11.319 97.427,13.849 C97.427,13.906 97.421,13.964 97.416,14.043 C96.005,14.043 94.599,14.043 93.145,14.043 ZM89.588,4.782 C89.034,5.128 88.866,5.768 88.868,6.431 C88.875,8.061 88.870,9.692 88.869,11.322 C88.869,12.143 88.869,12.963 88.867,13.783 C88.867,13.869 88.857,13.954 88.851,14.051 C87.434,14.051 86.035,14.051 84.587,14.051 C84.587,13.958 84.587,13.866 84.587,13.774 C84.588,11.294 84.579,8.814 84.590,6.334 C84.605,3.158 86.853,0.543 90.000,0.018 C90.028,0.013 90.058,0.017 90.125,0.017 C90.125,0.639 90.125,1.243 90.125,1.848 C90.125,2.405 90.109,2.962 90.130,3.518 C90.149,4.032 90.126,4.447 89.588,4.782 ZM84.585,15.837 C86.015,15.837 87.420,15.837 88.868,15.837 C88.868,15.951 88.868,16.065 88.868,16.179 C88.868,18.608 88.849,21.039 88.873,23.468 C88.908,27.007 86.358,29.493 83.589,29.955 C83.552,29.961 83.518,29.985 83.482,30.000 C83.424,30.000 83.365,30.000 83.306,30.000 C83.310,28.634 83.319,27.268 83.313,25.902 C83.311,25.691 83.376,25.580 83.559,25.467 C84.268,25.031 84.587,24.371 84.587,23.549 C84.587,21.099 84.586,18.650 84.585,16.201 C84.585,16.085 84.585,15.970 84.585,15.837 ZM81.366,30.000 C80.875,29.844 80.360,29.740 79.897,29.524 C77.435,28.380 76.120,26.440 76.027,23.732 C75.974,22.192 76.017,20.649 76.016,19.107 C76.016,19.040 76.016,18.973 76.016,18.886 C77.447,18.886 78.859,18.886 80.303,18.886 C80.303,19.000 80.303,19.104 80.303,19.209 C80.303,20.663 80.308,22.117 80.302,23.571 C80.298,24.427 80.666,25.065 81.387,25.518 C81.463,25.566 81.547,25.675 81.547,25.756 C81.553,27.171 81.546,28.585 81.542,30.000 C81.484,30.000 81.425,30.000 81.366,30.000 ZM76.017,17.097 C76.017,16.540 76.017,15.997 76.017,15.453 C76.017,14.965 76.012,14.478 76.017,13.990 C76.030,12.831 76.911,11.892 78.032,11.838 C79.203,11.781 80.217,12.619 80.282,13.797 C80.341,14.885 80.294,15.978 80.294,17.097 C78.857,17.097 77.452,17.097 76.017,17.097 Z">
                                    </path>
                                </svg>
                            </a>
                            <address class="font-size-2 mb-5">
                                <span class="mb-2 font-weight-normal text-dark">
                                    1418 River Drive, Suite 35 Cottonhall, CA 9622 <br> United States
                                </span>
                            </address>
                            <div class="mb-4">
                                <a href="mailto:sale@bookworm.com" class="font-size-2 d-block link-black-100 mb-1">sale@bookworm.com</a>
                                <a href="tel:+1246-345-0695" class="font-size-2 d-block link-black-100">+1
                                    246-345-0695</a>
                            </div>
                            <ul class="list-unstyled mb-0 d-flex">
                                <li class="btn pl-0">
                                    <a class="link-black-100" href="#">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="#">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="#">
                                        <span class="fab fa-youtube"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="#">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="#">
                                        <span class="fab fa-pinterest"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Explore</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">About
                                    as</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sitemap</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Bookmarks</a>
                            </li>
                            <li class="pt-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Sign
                                    in/Join</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Customer Service</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Help
                                    Center</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Returns</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Product
                                    Recalls</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Accessibility</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Contact
                                    Us</a>
                            </li>
                            <li class="pt-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Store
                                    Pickup</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Policy</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Return
                                    Policy</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Terms
                                    Of Use</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Security</a>
                            </li>
                            <li class="pt-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Privacy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Categories</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Action</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Comedy</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Drama</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Horror</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Kids</a>
                            </li>
                            <li class="pt-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Romantic Comedy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-1">
            <div class="container">
                <div class="d-lg-flex text-center text-lg-left justify-content-between align-items-center">

                    <p class="mb-3 mb-lg-0 font-size-2">©2020 Book Worm. All rights reserved</p>

                    <div class="ml-auto d-lg-flex align-items-center">
                        <div class="mb-4 mb-lg-0 mr-5">
                            <img class="img-fluid" src="./views/assets/img/324x38/img1.png" alt="Image-Description">
                        </div>

                        <select class="js-select selectpicker dropdown-select mb-3 mb-lg-0" data-style="border px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2" data-dropdown-align-right="true">
                            <option value="one" selected>English (United States)</option>
                            <option value="two">Deutsch</option>
                            <option value="three">Français</option>
                            <option value="four">Español</option>
                        </select>


                        <select class="js-select selectpicker dropdown-select ml-md-3" data-style="border px-4 py-2 rounded-0 height-5 outline-none shadow-none form-control font-size-2" data-dropdown-align-right="true" data-width="fit">
                            <option value="one" selected>$ USD</option>
                            <option value="two">€ EUR</option>
                            <option value="three">₺ TL</option>
                            <option value="four">₽ RUB</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="./views/public/validate_js/register.js"></script>
<script src="./views/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./views/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="./views/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./views/assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="./views/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./views/assets/vendor/slick-carousel/slick/slick.min.js"></script>
<script src="./views/assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
<script src="./views/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="./views/assets/js/hs.core.js"></script>
<script src="./views/assets/js/components/hs.unfold.js"></script>
<script src="./views/assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="./views/assets/js/components/hs.header.js"></script>
<script src="./views/assets/js/components/hs.slick-carousel.js"></script>
<script src="./views/assets/js/components/hs.selectpicker.js"></script>
<script src="./views/assets/js/components/hs.show-animation.js"></script>


<script>
    $(document).on('ready', function() {
        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // init zeynepjs
        var zeynep = $('.zeynep').zeynep({
            onClosed: function() {
                // enable main wrapper element clicks on any its children element
                $("body main").attr("style", "");

                console.log('the side menu is closed.');
            },
            onOpened: function() {
                // disable main wrapper element clicks on any its children element
                $("body main").attr("style", "pointer-events: none;");

                console.log('the side menu is opened.');
            }
        });

        // handle zeynep overlay click
        $(".zeynep-overlay").click(function() {
            zeynep.close();
        });

        // open side menu if the button is clicked
        $(".cat-menu").click(function() {
            if ($("html").hasClass("zeynep-opened")) {
                zeynep.close();
            } else {
                zeynep.open();
            }
        });
    });
</script>
</body>