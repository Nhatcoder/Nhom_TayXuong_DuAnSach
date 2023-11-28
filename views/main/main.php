<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                        <form class>

                            <div id="login" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel" class="form-label" for="signinEmail">Username
                                                or email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel" class="form-label" for="signinPassword">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword" placeholder aria-label aria-describedby="signinPasswordLabel" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5 align-items-center">

                                        <div class="js-form-message">
                                            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required>
                                                <label class="custom-control-label" for="termsCheckbox">
                                                    <span class="font-size-2 text-secondary-gray-700">
                                                        Remember me
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Forgot Password?</a>
                                    </div>
                                    <div class="mb-4d75">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign
                                            In</button>
                                    </div>
                                    <div class="mb-2">
                                        <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Create Account</a>
                                    </div>
                                </div>
                            </div>

                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Email
                                                *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail1" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel1" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword1" placeholder aria-label aria-describedby="signinPasswordLabel1" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signupConfirmPasswordLabel" class="form-label" for="signupConfirmPassword">Confirm
                                                Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword" id="signupConfirmPassword" placeholder aria-label aria-describedby="signupConfirmPasswordLabel" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create
                                            Account</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Already have an account?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel3" class="form-label" for="signinEmail3">Email
                                                *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail3" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel3" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recover
                                            Password</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Remember your password?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Login
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


<!-- Cái menu giỏ hàng -->
<!-- <aside id="sidebarContent1" class="u-sidebar u-sidebar__xl" aria-labelledby="sidebarNavToggler1">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent1" aria-haspopup="true"
                        aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                        data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
                        data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
                        data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-6 py-4">
                            <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                                    class="flaticon-icon-126515 mr-3 font-size-5"></i>Your shopping bag (3)</h2>
                        </header>

                        <div class="px-4 py-5 px-md-6 border-bottom">
                            <div class="media">
                                <a href="#" class="d-block"><img src="./views/assets/img/120x180/img6.jpg"
                                        class="img-fluid" alt="image-description"></a>
                                <div class="media-body ml-4d875">
                                    <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a
                                            href="#">Hard Cover</a>
                                    </div>
                                    <h2
                                        class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                                        <a href="#" class="text-dark">The Ride of a Lifetime: Lessons Learned from
                                            15 Years as CEO</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Robert
                                            Iger</a></div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount">1 x <span
                                                class="woocommerce-Price-currencySymbol">$</span>125.30</span>
                                    </div>
                                </div>
                                <div class="mt-3 ml-3">
                                    <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-5 px-md-6 border-bottom">
                            <div class="media">
                                <a href="#" class="d-block"><img src="./views/assets/img/120x180/img6.jpg"
                                        class="img-fluid" alt="image-description"></a>
                                <div class="media-body ml-4d875">
                                    <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a
                                            href="#">Hard Cover</a>
                                    </div>
                                    <h2
                                        class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                                        <a href="#" class="text-dark">The Rural Diaries: Love, Livestock, and Big
                                            Life Lessons Down</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#"
                                            class="text-gray-700">Hillary Burton</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount">2 x <span
                                                class="woocommerce-Price-currencySymbol">$</span>200</span>
                                    </div>
                                </div>
                                <div class="mt-3 ml-3">
                                    <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-5 px-md-6 border-bottom">
                            <div class="media">
                                <a href="#" class="d-block"><img src="./views/assets/img/120x180/img6.jpg"
                                        class="img-fluid" alt="image-description"></a>
                                <div class="media-body ml-4d875">
                                    <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a
                                            href="#">Paperback</a>
                                    </div>
                                    <h2
                                        class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                                        <a href="#" class="text-dark">Russians Among Us: Sleeper Cells, Ghost
                                            Stories, and the Hunt.</a>
                                    </h2>
                                    <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Gordon
                                            Corera</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount">6 x <span
                                                class="woocommerce-Price-currencySymbol">$</span>100</span>
                                    </div>
                                </div>
                                <div class="mt-3 ml-3">
                                    <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-5 px-md-6 d-flex justify-content-between align-items-center font-size-3">
                            <h4 class="mb-0 font-size-3">Subtotal:</h4>
                            <div class="font-weight-medium">$750.00</div>
                        </div>
                        <div class="px-4 mb-8 px-md-6">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/cart.html"
                                class="btn btn-block py-4 rounded-0 btn-outline-dark mb-4">View Cart</a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/checkout.html"
                                class="btn btn-block py-4 rounded-0 btn-dark">Checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside> -->


<aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                            <h2 class="font-size-3 mb-0">SHOP BY CATEGORY</h2>

                            <div class="d-flex align-items-center">
                                <button type="button" class="close ml-auto" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                    <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                </button>
                            </div>

                        </header>

                        <div class="border-bottom">
                            <div class="zeynep pt-4">
                                <ul>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="off-pages">Pages</a>
                                        <div id="off-pages" class="submenu">
                                            <div class="submenu-header" data-submenu-close="off-pages">
                                                <a href="#">Pages</a>
                                            </div>
                                            <ul>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-home">Home Pages</a>
                                                    <div id="off-home" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-home">
                                                            <a href="#">Home Pages</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="index.html">Home v1</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v2.html">Home v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v3.html">Home v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v3.html">Home v3</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v4.html">Home v4</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v5.html">Home v5</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v6.html">Home v6</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v7.html">Home v7</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v8.html">Home v8</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v9.html">Home v9</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v10.html">Home v10</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v11.html">Home v11</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v12.html">Home v12</a>
                                                            </li>
                                                            <li>
                                                                <a href="home-v13.html">Home v13</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-single-product">Single Product</a>
                                                    <div id="off-single-product" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-single-product">
                                                            <a href="#">Single Product</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Single
                                                                    Product v1</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v2.html">Single
                                                                    Product v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html">Single
                                                                    Product v3</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v4.html">Single
                                                                    Product v4</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v5.html">Single
                                                                    Product v5</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v6.html">Single
                                                                    Product v6</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v7.html">Single
                                                                    Product v7</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-shop-pages">Shop Pages</a>
                                                    <div id="off-shop-pages" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-shop-pages">
                                                            <a href="#">Shop Pages</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/cart.html">Shop
                                                                    cart</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/checkout.html">Shop
                                                                    checkout</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/my-account.html">Shop
                                                                    My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-received.html">Shop
                                                                    Order Received</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/order-tracking.html">Shop
                                                                    Order Tracking</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/store-location.html">Shop
                                                                    Store Location</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-shop-list">Shop List</a>
                                                    <div id="off-shop-list" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-shop-list">
                                                            <a href="#">Shop List</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html">Shop
                                                                    List v1</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v2.html">Shop
                                                                    List v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v3.html">Shop
                                                                    List v3</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v4.html">Shop
                                                                    List v4</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v5.html">Shop
                                                                    List v5</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v6.html">Shop
                                                                    List v6</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v7.html">Shop
                                                                    List v7</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v8.html">Shop
                                                                    List v8</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v9.html">Shop
                                                                    List v9</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-blog">Blog</a>
                                                    <div id="off-blog" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-blog">
                                                            <a href="#">Blog</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v1.html">Blog
                                                                    v1</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v2.html">Blog
                                                                    v2</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-v3.html">Blog
                                                                    v3</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/blog/blog-single.html">Blog
                                                                    Single</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="off-others">Others</a>
                                                    <div id="off-others" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="off-others">
                                                            <a href="#">Others</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/404.html">404</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/about.html">About
                                                                    Us</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-list.html">Authors
                                                                    List</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html">Authors
                                                                    Single</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/coming-soon.html">Coming
                                                                    Soon</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/contact.html">Contact
                                                                    Us</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/faq.html">FAQ</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/pricing-table.html">Pricing
                                                                    Table</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/terms-conditions.html">Terms
                                                                    Conditions</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="px-5">
                                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/documentation/index.html" class="btn btn-primary mb-3 mb-md-0 mb-xl-3 mt-4 font-size-2 btn-block">Documentation</a>
                                                </li>
                                                <li class="px-5 mb-4">
                                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/starter/index.html" class="btn btn-secondary font-size-2 btn-block mb-2">Starter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="art-photo">Arts & Photography</a>
                                        <div id="art-photo" class="submenu">
                                            <div class="submenu-header" data-submenu-close="art-photo">
                                                <a href="#">Arts & Photography</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Architecture</a>
                                                </li>
                                                <li>
                                                    <a href="#">Business of Art</a>
                                                </li>
                                                <li>
                                                    <a href="#">Collections, Catalogs & Exhibitions</a>
                                                </li>
                                                <li>
                                                    <a href="#">Decorative Arts & Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">Drawing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fashion</a>
                                                </li>
                                                <li>
                                                    <a href="#">Graphic Design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="biography">Biographies & Memoirs</a>
                                        <div id="biography" class="submenu">
                                            <div class="submenu-header" data-submenu-close="biography">
                                                <a href="#">Biographies & Memoirs</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="children">Children's Books</a>
                                        <div id="children" class="submenu">
                                            <div class="submenu-header" data-submenu-close="children">
                                                <a href="#">Children's Books</a>
                                            </div>
                                            <ul>
                                                <li class="has-submenu">
                                                    <a href="#" data-submenu="electronics">Electronics</a>
                                                    <div id="electronics" class="submenu js-scrollbar">
                                                        <div class="submenu-header" data-submenu-close="electronics">
                                                            <a href="#">Electronics</a>
                                                        </div>
                                                        <ul class>
                                                            <li>
                                                                <a href="#">Camera & Photo</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Home Audio</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Tv & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Computers & Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Car & Vehicle Electronics</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Portable Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Headphones</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Accessories & Supplies</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Video Projectors</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Office Electronics</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Wearable Technology</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Service Plans</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#">Books</a>
                                                </li>
                                                <li>
                                                    <a href="#">Video Games</a>
                                                </li>
                                                <li>
                                                    <a href="#">Computers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="computers">Computers & Technology</a>
                                        <div id="computers" class="submenu">
                                            <div class="submenu-header" data-submenu-close="computers">
                                                <a href="#">Computers & Technology</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="cookbook">Cookbooks, Food & Wine</a>
                                        <div id="cookbook" class="submenu">
                                            <div class="submenu-header" data-submenu-close="cookbook">
                                                <a href="#">Cookbooks, Food & Wine</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="sciencemath">Education & Teaching</a>
                                        <div id="sciencemath" class="submenu">
                                            <div class="submenu-header" data-submenu-close="sciencemath">
                                                <a href="#">Education & Teaching</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="health">Health, Fitness & Dieting</a>
                                        <div id="health" class="submenu">
                                            <div class="submenu-header" data-submenu-close="health">
                                                <a href="#">Health, Fitness & Dieting</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="history">History</a>
                                        <div id="history" class="submenu">
                                            <div class="submenu-header" data-submenu-close="history">
                                                <a href="#">History</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="romance">Romance</a>
                                        <div id="romance" class="submenu">
                                            <div class="submenu-header" data-submenu-close="romance">
                                                <a href="#">Romance</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="sports">Sports & Outdoors</a>
                                        <div id="sports" class="submenu">
                                            <div class="submenu-header" data-submenu-close="sports">
                                                <a href="#">Sports & Outdoors</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="travel">Travel</a>
                                        <div id="travel" class="submenu">
                                            <div class="submenu-header" data-submenu-close="travel">
                                                <a href="#">Travel</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">Istanbul</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mardin</a>
                                                </li>
                                                <li>
                                                    <a href="#">Amed</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="px-4 px-md-5 pt-5 pb-4 border-bottom">
                            <h2 class="font-size-3 mb-3">HELP & SETTINGS </h2>
                            <ul class="list-group list-group-flush list-group-borderless">
                                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Your
                                        Account</a></li>
                                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Help</a>
                                </li>
                                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Sign
                                        In</a></li>
                            </ul>
                        </div>
                        <div class="px-4 px-md-5 py-5">
                            <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                                <option selected>English (United States)</option>
                                <option value="1">English (UK)</option>
                                <option value="2">Arabic (Saudi Arabia)</option>
                                <option value="3">Deutsch</option>
                            </select>
                            <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                                <option selected>$ USD</option>
                                <option value="1">د.إ AED</option>
                                <option value="2">¥ CNY</option>
                                <option value="3">€ EUR</option>
                            </select>

                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-google btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="h-primary pr-2 font-size-2" href="#">
                                        <span class="fab fa-github btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<section class="space-bottom-3">
    <div class="bg-gray-200 space-2 space-lg-0 bg-img-hero" style="background-image: url(./views/assets/img/1920x588/img1.jpg);">
        <div class="container">
            <div class="js-slick-carousel u-slick" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0 mb-n8 mb-lg-4 bottom-0">
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm
                                    Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of
                                        the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./views/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm
                                    Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of
                                        the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./views/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm
                                    Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of
                                        the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./views/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm
                                    Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of
                                        the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">See More</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./views/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">Ngành nghề đặc trưng</h2>
            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="h-primary d-block">All Categories <i class="glyph-icon flaticon-next"></i></a>
        </header>
        <ul class="list-unstyled my-0 row row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-wd-5">
            <li class="product-category col mb-4 mb-xl-0">
                <div class="product-category__inner bg-indigo-light px-6 py-5">
                    <div class="product-category__icon font-size-12 text-primary-indigo"><i class="glyph-icon flaticon-gallery"></i></div>
                    <div class="product-category__body">
                        <h3 class="text-truncate font-size-3">Arts &amp; Photography</h3>
                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="stretched-link text-dark">Shop Now</a>
                    </div>
                </div>
            </li>
            <li class="product-category col mb-4 mb-xl-0">
                <div class="product-category__inner bg-tangerine-light px-6 py-5">
                    <div class="product-category__icon font-size-12 text-tangerine"><i class="glyph-icon flaticon-cook"></i>
                    </div>
                    <div class="product-category__body">
                        <h3 class="text-truncate font-size-3">Food &amp; Drink</h3>
                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="stretched-link text-dark">Shop Now</a>
                    </div>
                </div>
            </li>
            <li class="product-category col mb-4 mb-xl-0">
                <div class="product-category__inner bg-chili-light px-6 py-5">
                    <div class="product-category__icon font-size-12 text-chili"><i class="glyph-icon flaticon-like"></i>
                    </div>
                    <div class="product-category__body">
                        <h3 class="text-truncate font-size-3">Romance</h3>
                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="stretched-link text-dark">Shop Now</a>
                    </div>
                </div>
            </li>
            <li class="product-category col mb-4 mb-xl-0">
                <div class="product-category__inner bg-carolina-light px-6 py-5">
                    <div class="product-category__icon font-size-12 text-carolina"><i class="glyph-icon flaticon-doctor"></i>
                    </div>
                    <div class="product-category__body">
                        <h3 class="text-truncate font-size-3">Health</h3>
                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="stretched-link text-dark">Shop Now</a>
                    </div>
                </div>
            </li>
            <li class="product-category col mb-4 mb-xl-0 d-xl-none d-wd-block">
                <div class="product-category__inner bg-punch-light px-6 py-5">
                    <div class="product-category__icon font-size-12 text-punch"><i class="glyph-icon flaticon-resume"></i></div>
                    <div class="product-category__body">
                        <h3 class="text-truncate font-size-3">Biography</h3>
                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="stretched-link text-dark">Shop Now</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Sasch bán chạy nhất -->
<section class="space-bottom-3">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">Sách bán chạy nhất</h2>
            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
        </header>
        <div class="js-slick-carousel products no-gutters border-top border-left border-right" data-pagi-classes="d-xl-none text-center position-absolute right-0 left-0 u-slick__pagination mt-4 mb-0" data-arrows-classes="d-none d-xl-block u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive="[{
                   &quot;breakpoint&quot;: 1500,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 4
                   }
                },{
                   &quot;breakpoint&quot;: 1199,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 3
                   }
                },{
                   &quot;breakpoint&quot;: 992,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 2
                   }
                }, {
                   &quot;breakpoint&quot;: 768,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }, {
                   &quot;breakpoint&quot;: 554,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }]">

            <?php
            foreach ($list_sach_all_home as $key => $value) {
                extract($value);
                ?>
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block">
                                                <img src="public/upload/<?= $hinh ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description">
                                            </a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"><?= $ten_sach ?></a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?= number_format($gia, 0, ",", ".") ?></span>VNĐ</span>
                                            </div>
                                        </div>

                                        <div class="product__hover d-flex align-items-center">
                                            <a href="index.php?act=themgiohang&ma_sach=<?= $ma_sach ?>" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                                <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php } ?>
            <!-- <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img2.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                    Edition</a></div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                    Last Sister (Columbia River Book 1)</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Kelly Harms</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img3.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                            </div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                    You Can Ever Know: A Memoir</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Jay Shetty</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img4.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                    Edition</a></div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                    Overdue Life of Amy Byler</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Kelly Harms</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img5.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                    Edition</a></div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                    Last Sister (Columbia River Book 1)</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Kelly Harms</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img6.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                            </div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                    You Can Ever Know: A Memoir</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Jay Shetty</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                        <div class="woocommerce-loop-product__thumbnail">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="d-block"><img src="./views/assets/img/150x226/img7.jpg"
                                    class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                    alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                    Edition</a></div>
                            <h2
                                class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                <a
                                    href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                    Overdue Life of Amy Byler</a>
                            </h2>
                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html"
                                    class="text-gray-700">Kelly Harms</a></div>
                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>29</span>
                            </div>
                        </div>
                        <div class="product__hover d-flex align-items-center">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-switch"></i>
                            </a>
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html"
                                class="h-p-bg btn btn-outline-primary border-0">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <header class="mb-4 container">
        <h2 class="font-size-7 text-center">Featured Books</h2>
    </header>
    <div class="container">
        <ul class="nav justify-content-md-center nav-gray-700 mb-5 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" id="featuredBooks" role="tablist">
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0 active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
            </li>
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0" id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">On Sale</a>
            </li>
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0" id="mostviewed-tab" data-toggle="tab" href="#mostviewed" role="tab" aria-controls="mostviewed" aria-selected="false">Most Viewed</a>
            </li>
        </ul>
        <div class="tab-content" id="featuredBooksContent">
            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="mostviewed" role="tabpanel" aria-labelledby="mostviewed-tab">
                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img8.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img9.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                            Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                            Overdue Life of Amy Byler</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">All
                                            You Can Ever Know: A Memoir</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product col d-xl-none d-wd-block">
                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Broken
                                            Faith: Inside the Word of Faith...</a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Jay Shetty</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                    </div>
                                </div>
                                <div class="product__hover d-flex align-items-center">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                        <span class="product__add-to-cart">ADD TO CART</span>
                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <div class="space-top-3 space-bottom-4 bg-gray-200">
        <div class="container">
            <header class="mb-5 d-md-flex justify-content-between align-items-center">
                <h2 class="font-size-7 mb-3 mb-md-0">Deals of the Week</h2>
                <a href="#" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
            </header>
            <div class="js-slick-carousel u-slick products border bg-white no-gutters" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-pagi-classes="text-center u-slick__pagination u-slick__pagination mt-6 mb-0 position-absolute right-0 left-0" data-slides-show="2" data-responsive="[{
                       &quot;breakpoint&quot;: 1199,
                       &quot;settings&quot;: {
                         &quot;slidesToShow&quot;: 1
                       }
                    }, {
                       &quot;breakpoint&quot;: 768,
                       &quot;settings&quot;: {
                         &quot;slidesToShow&quot;: 1
                       }
                    }, {
                       &quot;breakpoint&quot;: 554,
                       &quot;settings&quot;: {
                         &quot;slidesToShow&quot;: 1
                       }
                    }]">
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/200x327/img1.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Dark
                                        in Death: An Eve Dallas Novel (In Death, Book 46)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/200x327/img2.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Under
                                        a Firefly Moon (Firefly Lake Book 1)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/200x327/img3.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Dark
                                        in Death: An Eve Dallas Novel (In Death, Book 46)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v4.html" class="d-block"><img src="./views/assets/img/200x327/img4.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Under
                                        a Firefly Moon (Firefly Lake Book 1)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/200x327/img5.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Dark
                                        in Death: An Eve Dallas Novel (In Death, Book 46)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product product__card border-right">
                    <div class="media p-md-6 p-4 d-block d-md-flex">
                        <div class="woocommerce-loop-product__thumbnail mb-4 mb-md-0">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/200x327/img6.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image d-block mx-auto" alt="image-description"></a>
                        </div>
                        <div class="woocommerce-loop-product__body media-body ml-md-5d25">
                            <div class="mb-3">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Kindle
                                        Edition</a></div>
                                <h2 class="woocommerce-loop-product__title font-size-3 text-lh-md mb-2 text-height-2 crop-text-2 h-dark">
                                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Under
                                        a Firefly Moon (Firefly Lake Book 1)</a>
                                </h2>
                                <div class="font-size-2 text-gray-700 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Nora Roberts</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <ins class="text-decoration-none mr-2"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>79</span></ins>
                                    <del class="font-size-1 font-weight-regular text-gray-700"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>99</span></del>
                                </div>
                            </div>
                            <div class="countdown-timer mb-5">
                                <h5 class="countdown-timer__title font-size-3 mb-3 font-weight-bold">Hurry Up! <span class="font-weight-regular">Offer ends in:</span></h5>
                                <div class="d-flex align-items-stretch justify-content-between">
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">114</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Days</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">03</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Hours</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">60</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Mins</span>
                                    </div>
                                    <div class="border-left pr-3 pr-md-0">&nbsp;</div>
                                    <div class="py-2d75">
                                        <span class="font-weight-medium font-size-3">25</span>
                                        <span class="font-size-2 ml-md-2 ml-xl-0 ml-wd-2 d-xl-block d-wd-inline">Secs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-progress">
                                <div class="d-flex justify-content-between font-size-2 mb-2d75">
                                    <span>Already Sold: 14</span>
                                    <span>Available: 3</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width:82%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="17"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-bottom-3 banner-with-product">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">New Releases</h2>
            <ul class="nav nav-gray-700 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" role="tablist">
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0 active" id="history-tab" data-toggle="tab" href="#history-1" role="tab" aria-controls="history-1" aria-selected="true">History</a>
                </li>
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="sciencemath-tab" data-toggle="tab" href="#sciencemath-1" role="tab" aria-controls="sciencemath-1" aria-selected="false">Science &amp; Math</a>
                </li>
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="romance-tab" data-toggle="tab" href="#romance-1" role="tab" aria-controls="romance-1" aria-selected="false">Romance</a>
                </li>
                <li class="nav-item ml-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="travel-tab" data-toggle="tab" href="#travel-1" role="tab" aria-controls="travel-1" aria-selected="false">Travel</a>
                </li>
            </ul>
        </header>
        <div class="tab-content u-slick__tab">
            <div class="tab-pane fade show active" id="history-1" role="tabpanel" aria-labelledby="history-tab">
                <div class="row no-gutters">
                    <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                        <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                            <div class="banner__body">
                                <div class="banner__image pb-1 mb-5">
                                    <img class="img-fluid" src="./views/assets/img/350x282/img1.png" alt="image-description">
                                </div>
                                <h3 class="banner_text m-0">
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On
                                        Order
                                        Over $100</span>
                                </h3>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                                    Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                                    Overdue Life of Amy Byler</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Call
                                                    Me By Your Name</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Camino
                                                    Winds</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sciencemath-1" role="tabpanel" aria-labelledby="sciencemath-tab">
                <div class="row no-gutters">
                    <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                        <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                            <div class="banner__body">
                                <div class="banner__image pb-1 mb-5">
                                    <img class="img-fluid" src="./views/assets/img/350x282/img1.png" alt="image-description">
                                </div>
                                <h3 class="banner_text m-0">
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On
                                        Order
                                        Over $100</span>
                                </h3>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                                    Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                                    Overdue Life of Amy Byler</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Call
                                                    Me By Your Name</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Camino
                                                    Winds</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="romance-1" role="tabpanel" aria-labelledby="romance-tab">
                <div class="row no-gutters">
                    <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                        <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                            <div class="banner__body">
                                <div class="banner__image pb-1 mb-5">
                                    <img class="img-fluid" src="./views/assets/img/350x282/img1.png" alt="image-description">
                                </div>
                                <h3 class="banner_text m-0">
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On
                                        Order
                                        Over $100</span>
                                </h3>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                                    Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                                    Overdue Life of Amy Byler</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Call
                                                    Me By Your Name</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Camino
                                                    Winds</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="travel-1" role="tabpanel" aria-labelledby="travel-tab">
                <div class="row no-gutters">
                    <div class="col-xl-4 border-right-0 border bg-gray-200 px-1">
                        <div class="banner px-lg-8 px-3 py-4 py-xl-0 d-flex h-100 align-items-center justify-content-center">
                            <div class="banner__body">
                                <div class="banner__image pb-1 mb-5">
                                    <img class="img-fluid" src="./views/assets/img/350x282/img1.png" alt="image-description">
                                </div>
                                <h3 class="banner_text m-0">
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">Get Extra</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">Sale
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">On
                                        Order
                                        Over $100</span>
                                </h3>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-primary btn-wide rounded-0">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img10.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Think
                                                    Like a Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                                    Overdue Life of Amy Byler</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Call
                                                    Me By Your Name</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Camino
                                                    Winds</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Man's
                                                    Search for Meaning</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product col d-xl-none d-wd-block">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Paperback</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Blindside
                                                    (Michael Bennett)</a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Jay Shetty</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>29</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <span class="product__add-to-cart">ADD TO CART</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">Biographies Books</h2>
            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
        </header>
        <div class="js-slick-carousel u-slick products border" data-pagi-classes="text-center u-slick__pagination mt-md-8 mt-4 position-absolute right-0 left-0" data-slides-show="3" data-responsive="[{
                   &quot;breakpoint&quot;: 992,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 2
                   }
                }, {
                   &quot;breakpoint&quot;: 768,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }, {
                   &quot;breakpoint&quot;: 554,
                   &quot;settings&quot;: {
                     &quot;slidesToShow&quot;: 1
                   }
                }]">
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img1.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img2.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                Ride of a Lifetime: Lessons Learned from 15 Years as CEO...</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img3.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Russians
                                Among Us: Sleeper Cells, Ghost Stories, and the Hunt...</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img4.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img5.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                Ride of a Lifetime: Lessons Learned from 15 Years as CEO...</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img6.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Russians
                                Among Us: Sleeper Cells, Ghost Stories, and the Hunt...</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product product__card border-right">
                <div class="media p-3 p-md-4d875">
                    <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html" class="d-block"><img src="./views/assets/img/120x180/img7.jpg" alt="image-description"></a>
                    <div class="media-body ml-4d875">
                        <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">Hard
                                Cover</a></div>
                        <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v1.html">The
                                Rural Diaries: Love, Livestock, and Big Life Lessons Down on Mischief Farm</a>
                        </h2>
                        <div class="font-size-2 mb-1 text-truncate"><a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-gray-700">Hillary Burton</a></div>
                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <div class="container">
        <header class="d-md-flex justify-content-between align-items-center mb-8">
            <h2 class="font-size-7 mb-3 mb-md-0">Favorite Authors</h2>
            <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-list.html" class="h-primary d-block">View All <i class="glyph-icon flaticon-next"></i></a>
        </header>
        <ul class="row rows-cols-5 no-gutters authors list-unstyled js-slick-carousel u-slick" data-slides-show="5" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-responsive="[{
                    &quot;breakpoint&quot;: 1025,
                    &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 3
                    }
                }, {
                    &quot;breakpoint&quot;: 992,
                    &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 2
                    }
                }, {
                    &quot;breakpoint&quot;: 768,
                    &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 1
                    }
                }, {
                    &quot;breakpoint&quot;: 554,
                    &quot;settings&quot;: {
                        &quot;slidesToShow&quot;: 1
                    }
                }]">
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img1.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img2.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Stephen King</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img3.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">David Walliams</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img4.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Joe Wicks</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img5.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Jessica Simpson</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img6.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">David Walliams</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img7.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Joe Wicks</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
            <li class="author col">
                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html" class="text-reset">
                    <img src="./views/assets/img/140x140/img8.jpg" class="mx-auto mb-5 d-block rounded-circle" alt="image-description">
                    <div class="author__body text-center">
                        <h2 class="author__name h6 mb-0">Barbara O'Neil</h2>
                        <div class="text-gray-700 font-size-2">25 Published Books</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>