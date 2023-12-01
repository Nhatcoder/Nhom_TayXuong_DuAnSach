
<div class="js-scrollbar u-sidebar__body">
                                                <div class="u-sidebar__content u-header-sidebar__content">
                                                        <form method="post" class>
                                                                <div id="login1" data-target-group="idForm1">
                                                                        <header class="border-bottom px-4 px-md-6 py-4">
                                                                                <h2 class="font-size-3 mb-0 d-flex align-items-center">
                                                                                        <i class="flaticon-user mr-3 font-size-5"></i>Account
                                                                                </h2>
                                                                        </header>

                                                                        
                                                                        <div class="p-4 p-md-6">
                                                                        <form action="index.php?act=dangnhap" method="post">
                                                                        <div class="form-group mb-4">
                                                                        <div class="js-form-message js-focus-state">
                                                                                <label id="signinEmailLabel9" class="form-label" for="signinEmail9">Email
                                                                                        *</label>
                                                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="username" id="signinEmail9" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel9">
                                                                      </div>
                                                                        </div>


                                                                                <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signinPasswordLabel9" class="form-label" for="signinPassword9">Password
                                                                                                        *</label>
                                                                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword9" placeholder aria-label aria-describedby="signinPasswordLabel9">
                                                                                                                                             </div>
                                                                                </div>

                                                                                <div class="d-flex justify-content-between mb-5 align-items-center">

                                                                                        <div class="js-form-message">
                                                                                                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                                                                        <input type="checkbox" class="custom-control-input" id="termsCheckbox1" name="termsCheckbox1">
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
                                                                                        <button type="submit" name="dangnhap" class="btn btn-block py-3 rounded-0 btn-dark">Sign
                                                                                                In</button>
                                                                                                <?= (isset($thongbao)) ? $thongbao : false ?>
                                                                                </div>
                                                                                <div class="mb-2">
                                                                                        <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup1" data-link-group="idForm1" data-animation-in="fadeIn">Create
                                                                                                Account</a>
                                                                                </div>
                                                                                </form>
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
                                                                        <form action="index.php?act=dangky" enctype="multipart/form-data"  method="post">
                                                                        <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signinEmailLabel11" class="form-label" for="signinEmail11">Họ và tên
                                                                                                        *</label>
                                                                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="username" id="signinEmail11" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel11" required>
                                                                                        </div>
                                                                                </div>

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
                                                                                                <input type="password" class="form-control rounded-0 height-4 px-4" name="new-password" id="signinPassword11" placeholder aria-label aria-describedby="signinPasswordLabel11" required>
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
                                                                                <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Số điện thoại
                                                                                                        *</label>
                                                                                                <input type="number" class="form-control rounded-0 height-4 px-4" name="so_dien_thoai" id="signupConfirmPassword9" placeholder aria-label aria-describedby="signupConfirmPasswordLabel9" required>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Địa chỉ
                                                                                                        *</label>
                                                                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="dia_chi" id="signupConfirmPassword9" placeholder aria-label aria-describedby="signupConfirmPasswordLabel9" required>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Hình ảnh
                                                                                                        *</label>
                                                                                                <input type="file" class="form-control rounded-0 height-4 px-4" name="img" id="signupConfirmPassword9" placeholder aria-label aria-describedby="signupConfirmPasswordLabel9" required>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                        <div class="js-form-message js-focus-state">
                                                                                                <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Giới tính
                                                                                                        *</label>
                                                                                                <input type="text" class="form-control rounded-0 height-4 px-4" name="gioitinh" id="signupConfirmPassword9" placeholder aria-label aria-describedby="signupConfirmPasswordLabel9" required>
                                                                                        </div>
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create
                                                                                                Account</button>
                                                                                </div>
                                                                        </form>
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