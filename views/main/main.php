<!-- Cái menu giỏ hàng -->
<aside id="sidebarContent1" class="u-sidebar u-sidebar__xl" aria-labelledby="sidebarNavToggler1">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Thoát <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-6 py-4">
                            <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-icon-126515 mr-3 font-size-5"></i>Giỏ hàng của bạn <?= count($_SESSION['mycart']) ?></h2>
                        </header>

                        <?php
                        if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {

                            $i = 0;
                            $thanhtien = 0;
                            foreach ($_SESSION['mycart'] as $productCart) {
                                $tongtien = $productCart['gia'] * $productCart['so_luong'];
                                $thanhtien += $tongtien;
                        ?>
                                <div class="px-4 py-5 px-md-6 border-bottom">
                                    <div class="media">
                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $productCart['ma_sach'] ?>" class="d-block"><img style="width:140px; height:180px; object-fit: cover;" src="./public/upload/<?= $productCart['hinh'] ?>" class="img-fluid" alt="image-description"></a>
                                        <div class="media-body ml-4d875">
                                            <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a href="#">Cao cấp</a>
                                            </div>
                                            <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                                                <a href="index.php?act=chi-tiet-san-pham&giay=<?= $productCart['ma_sach'] ?>" class="text-dark"><?= $productCart['ten_sach'] ?></a>
                                            </h2>
                                            <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Giá</a></div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><?= $productCart['so_luong'] ?> x <span class="woocommerce-Price-currencySymbol"></span><?= number_format($tongtien, 0, ',', '.') ?></span>
                                            </div>
                                        </div>
                                        <div class="mt-3 ml-3">
                                            <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="index.php?act=delete_cart&idcart=<?= $i ?>" class="text-dark"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $i++;
                            }
                            ?>
                            <div class="px-4 py-5 px-md-6 d-flex justify-content-between align-items-center font-size-3">
                                <h4 class="mb-0 font-size-3">Thành tiền:</h4>
                                <div class="font-weight-medium"><?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</div>
                            </div>

                        <?php
                        } else {
                        ?>
                            <div class="px-4 py-5 px-md-6 border-bottom">
                                Giỏ hàng đang trống
                            </div>
                        <?php
                        }
                        ?>
                        <div class="px-4 mb-8 px-md-6">
                            <a href="index.php?act=giohang" class="btn btn-block py-4 rounded-0 btn-outline-dark mb-4">Xem giỏ hàng</a>
                            <a href="index.php?act=thanhtoan" class="btn btn-block py-4 rounded-0 btn-dark">Thanh toán</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


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
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THẾ GIỚI SÁCH</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">SÁCH</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">HAY</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">XEM NGAY</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./template/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THẾ GIỚI SÁCH</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">SÁCH</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">HAY</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">XEM NGAY</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./template/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THẾ GIỚI SÁCH</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">SÁCH</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">HAY</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">XEM NGAY</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./template/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THẾ GIỚI SÁCH</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">SÁCH</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">HAY</span>
                                </h2>
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/v1.html" class="btn btn-dark btn-wide rounded-0 hero__btn" data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400">XEM NGAY</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="./template/assets/img/800x420/img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sasch bán chạy nhất -->
<section class="space-bottom-3">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">GỢI Ý SẢN PHẨM</h2>
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
            foreach ($listProduct as $product) {
            ?>
                <div class="product">
                    <form action="index.php" method="post">
                        <input type="hidden" name="ma_sach" value="<?= $product['ma_sach'] ?>">
                        <input type="hidden" name="ten_sach" value="<?= $product['ten_sach'] ?>">
                        <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                        <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                        <input type="hidden" name="so_luong" value="1">

                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                <div class="woocommerce-loop-product__thumbnail">
                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block">
                                        <img style="height:249px; object-fit: cover;" src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description">
                                    </a>
                                </div>
                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                    <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                    </div>
                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_sach'] ?></a>
                                    </h2>
                                    <div class="font-size-2  mb-1 text-truncate">
                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="text-gray-700">Cao cấp</a>
                                    </div>
                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"><?= number_format($product['gia'], 0, ',', '.') ?></span> VNĐ
                                        </span>
                                    </div>
                                </div>

                                <div class="product__hover d-flex align-items-center">
                                    <a href="index.php" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                        <button name="addCart" class="product__add-to-cart">Thêm giỏ hàng</button>
                                        <button name="addCart" class="ic__addcart product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></button>
                                    </a>
                                    <a href="" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-switch"></i>
                                    </a>
                                    <a href="" class="h-p-bg btn btn-outline-primary border-0">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="space-bottom-3">
    <header class="mb-4 container">
        <h2 class="font-size-7 text-center">SẢN PHẨM CỦA SHOP</h2>
    </header>
    <div class="container">
        <ul class="nav justify-content-md-center nav-gray-700 mb-5 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" id="featuredBooks" role="tablist">
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0 active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">MỚI NHẤT</a>
            </li>
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0" id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">SẢN PHẨM SALE</a>
            </li>
            <li class="nav-item mx-5 mb-1 flex-shrink-0 flex-md-shrink-1">
                <a class="nav-link px-0" id="mostviewed-tab" data-toggle="tab" href="#mostviewed" role="tab" aria-controls="mostviewed" aria-selected="false">PHỔ BIẾN</a>
            </li>
        </ul>
        <div class="tab-content" id="featuredBooksContent">
            <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-wd-6 border-top border-left my-0">
                    <?php
                    foreach ($listProduct as $product) {
                    ?>
                        <li class="product col">
                            <form action="index.php" method="POST">
                                <input type="hidden" name="ma_sach" value="<?= $product['ma_sach'] ?>">
                                <input type="hidden" name="ten_sach" value="<?= $product['ten_sach'] ?>">
                                <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                                <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                <input type="hidden" name="so_luong" value="1">

                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block"><img src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                            </div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_sach'] ?></a>
                                            </h2>
                                            <div class="font-size-2  mb-1 text-truncate"><a href="others/authors-single.html" class="text-gray-700">Cao cấp</a>
                                            </div>
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',', '.') ?> VNĐ</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="index.php" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                <button name="addCart" class="product__add-to-cart">Thêm giỏ hàng</button>
                                                <button name="addCart" class="ic__addcart product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></button>
                                            </a>
                                            <a href="index.php" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-switch"></i>
                                            </a>
                                            <a href="index.php" class="h-p-bg btn btn-outline-primary border-0">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
                    <?php
                    }
                    ?>

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
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="space-bottom-3 banner-with-product">
    <div class="container">
        <header class="mb-5 d-md-flex justify-content-between align-items-center">
            <h2 class="font-size-7 mb-3 mb-md-0">SẢN PHẨM MỚI NHẤT</h2>
            <ul class="nav nav-gray-700 flex-nowrap flex-md-wrap overflow-auto overflow-md-visible" role="tablist">
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0 active" id="history-tab" data-toggle="tab" href="#history-1" role="tab" aria-controls="history-1" aria-selected="true">Mới nhất</a>
                </li>
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="sciencemath-tab" data-toggle="tab" href="#sciencemath-1" role="tab" aria-controls="sciencemath-1" aria-selected="false">Phổ biến</a>
                </li>
                <li class="nav-item mx-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="romance-tab" data-toggle="tab" href="#romance-1" role="tab" aria-controls="romance-1" aria-selected="false">Giảm giá</a>
                </li>
                <li class="nav-item ml-4 flex-shrink-0 flex-md-shrink-1">
                    <a class="nav-link pb-1 px-0" id="travel-tab" data-toggle="tab" href="#travel-1" role="tab" aria-controls="travel-1" aria-selected="false">Ưu đãi</a>
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
                                    <img class="img-fluid" src="./template/assets/img/800x420/img1.png" alt="image-description">
                                </div>
                                <h3 class="banner_text m-0">
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">GIẢM GIÁ</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">ĐẾN
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">ĐƠN
                                        GIÁ
                                        TỪ 500.000 VNĐ</span>
                                </h3>
                                <a href="index.php?act=sanpham" class="btn btn-primary btn-wide rounded-0">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <?php
                            foreach ($listProduct as $product) {
                            ?>
                                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                    <input type="hidden" name="id_sanpham" value="<?= $product['ma_sach'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['ten_sach'] ?>">
                                    <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                                    <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <li class="product col">
                                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block"><img src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                                    </div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_sach'] ?></a>
                                                    </h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',', '.') ?> VNĐ</span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <button name="addCart" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                        <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </button>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            <?php
                            }
                            ?>
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
                                    <span class="d-block mb-1 font-size-10 font-weight-regular">GIẢM GIÁ</span>
                                    <span class="d-block mb-3 font-size-12 text-primary font-weight-medium">ĐẾN
                                        -25%</span>
                                    <span class="d-block mb-5 text-uppercase font-size-7 font-weight-regular text-gray-400">ĐƠN
                                        GIÁ
                                        TỪ 500.000 VNĐ</span>
                                </h3>
                                <a href="index.php?act=sanpham" class="btn btn-primary btn-wide rounded-0">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <?php
                            foreach ($listProduct as $product) {
                            ?>
                                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                    <input type="hidden" name="id_sanpham" value="<?= $product['ma_sach'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                    <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                                    <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <li class="product col">
                                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block"><img src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_danhmuc'] ?></a>
                                                    </div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['name'] ?></a>
                                                    </h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',', '.') ?></span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <button name="addCart" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                        <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </button>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            <?php
                            }
                            ?>
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
                                <a href="index.php?act=sanpham" class="btn btn-primary btn-wide rounded-0">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <?php
                            foreach ($listProduct as $product) {
                            ?>
                                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                    <input type="hidden" name="id_sanpham" value="<?= $product['ma_sach'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                    <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                                    <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <li class="product col">
                                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block"><img src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_danhmuc'] ?></a>
                                                    </div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['name'] ?></a>
                                                    </h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',', '.') ?></span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <button name="addCart" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                        <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </button>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            <?php
                            }
                            ?>
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
                                <a href="index.php?act=sanpham" class="btn btn-primary btn-wide rounded-0">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
                            <?php
                            foreach ($listProduct as $product) {
                            ?>
                                <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                    <input type="hidden" name="id_sanpham" value="<?= $product['ma_sach'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                    <input type="hidden" name="hinh" value="<?= $product['hinh'] ?>">
                                    <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <li class="product col">
                                        <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                            <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                <div class="woocommerce-loop-product__thumbnail">
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="d-block"><img src="./public/upload/<?= $product['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                </div>
                                                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                    <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['ten_danhmuc'] ?></a>
                                                    </div>
                                                    <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                        <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>"><?= $product['name'] ?></a>
                                                    </h2>
                                                    <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',', '.') ?></span>
                                                    </div>
                                                </div>
                                                <div class="product__hover d-flex align-items-center">
                                                    <button name="addCart" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="ADD TO CART">
                                                        <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                        <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                    </button>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-switch"></i>
                                                    </a>
                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['ma_sach'] ?>" class="h-p-bg btn btn-outline-primary border-0">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>