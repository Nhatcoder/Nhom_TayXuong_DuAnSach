<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop Single</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="../home/index.html" class="h-primary">Trang Chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                <a href="../shop/v1.html" class="h-primary">Sản Phẩm</a>

            </nav>
        </div>
    </div>
</div>
<div id="primary" class="content-area">
    <main id="main" class="site-main ">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                        <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                            <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted"
                                data-pagi-classes="text-center u-slick__pagination my-4">
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 1698px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="js-slide slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 566px; height: auto;"
                                            tabindex="0" role="tabpanel" id="slick-slide00"
                                            aria-describedby="slick-slide-control00">
                                            <img src="public/upload/<?=$hinh?>" alt="Image Description"
                                                class="mx-auto img-fluid">
                                        </div>
                                        <div class="js-slide slick-slide" data-slick-index="1" aria-hidden="true"
                                            style="width: 566px; height: auto;" tabindex="-1" role="tabpanel"
                                            id="slick-slide01" aria-describedby="slick-slide-control01">
                                            <img src="public/upload/<?=$hinh?>" alt="Image Description"
                                                class="mx-auto img-fluid">
                                        </div>
                                        <div class="js-slide slick-slide" data-slick-index="2" aria-hidden="true"
                                            style="width: 566px; height: auto;" tabindex="-1" role="tabpanel"
                                            id="slick-slide02" aria-describedby="slick-slide-control02">
                                            <img src="public/upload/<?=$hinh?>" alt="Image Description"
                                                class="mx-auto img-fluid">
                                        </div>
                                    </div>
                                </div>


                                <!-- <ul class="js-pagination text-center u-slick__pagination my-4" style="" role="tablist">
                                    <li class="slick-active slick-current" role="presentation"><span></span></li>
                                    <li role="presentation"><span></span></li>
                                    <li role="presentation"><span></span></li>
                                </ul> -->
                            </div>
                        </figure>
                    </div>
                    <div class="col-md-7 pl-0 summary entry-summary border-left">
                        <div class="space-top-2 px-4 px-xl-7 border-bottom pb-5">
                            <h1 class="product_title entry-title font-size-7 mb-3"><?=$ten_sach?></h1>
                            <div class="font-size-2 mb-4">
                                <span class="text-yellow-darker">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </span>
                                <span class="ml-3">(3,714)</span>
                            </div>
                            <p class="price font-size-22 font-weight-medium mb-3">
                                <span class="woocommerce-Price-amount amount">
                                    <span
                                        class="woocommerce-Price-currencySymbol"></span><?=number_format($gia, 0, ',', '.')?>
                                </span>đ
                            </p>
                            <div class="mb-2 font-size-2">
                                <span class="font-weight-medium">Thể Loại:</span>
                                <span class="ml-2 text-gray-600"><?=$ten_danhmuc?></span>
                            </div>
                            <!--  -->

                            <div class="woocommerce-product-details__short-description font-size-2 mb-5">
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Excepteur sint occaecat.</p>
                            </div>
                            <form class="cart d-md-flex align-items-center" method="post" enctype="multipart/form-data">
                                <div class="quantity mb-4 mb-md-0 d-flex align-items-center">

                                    <div class="border px-3 width-120">
                                        <div class="js-quantity">
                                            <div class="d-flex align-items-center">
                                                <label class="screen-reader-text sr-only">Quantity</label>
                                                <a class="js-minus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="10px"
                                                        height="1px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <input type="number"
                                                    class="input-text qty text js-result form-control text-center border-0"
                                                    step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                                <a class="js-plus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="10px"
                                                        height="10px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" name="add-to-cart" value="7145"
                                    class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">Thêm
                                    giỏ hàng
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="js-scroll-nav mb-10">
                <div class="woocommerce-tabs wc-tabs-wrapper  2 mx-lg-auto">
                    <div id="Description" class="">
                        <div class="border-top border-bottom">
                            <ul
                                class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                    <a class="nav-link py-4 font-weight-medium active" href="#Description">
                                        Mô Tả
                                    </a>
                                </li>


                                <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                    <a class="nav-link py-4 font-weight-medium" href="#ProductReviews">
                                        Reviews (0)
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content font-size-2 container">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2">
                                    <div
                                        class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                        <p> <?=$mo_ta?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="ProductReviews" class="">
                        <div class="border-top border-bottom">
                            <ul
                                class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                    <a class="nav-link py-4 font-weight-medium" href="#Description">
                                        Mô Tả
                                    </a>
                                </li>

                                <li class="flex-shrink-0 flex-md-shrink-1 nav-item">
                                    <a class="nav-link py-4 font-weight-medium active" href="#ProductReviews">
                                        Reviews (0)
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content font-size-2 container">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2">
                                    <div
                                        class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                        <h4 class="font-size-3">Customer Reviews </h4>
                                        <div class="row mb-8">
                                            <div class="col-md-6 mb-6 mb-md-0">
                                                <div class="d-flex  align-items-center mb-4">
                                                    <span class="font-size-15 font-weight-bold">4.6</span>
                                                    <div class="ml-3 h6 mb-0">
                                                        <span class="font-weight-normal">3,714 reviews</span>
                                                        <div class="text-yellow-darker">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-md-flex">
                                                    <button type="button"
                                                        class="btn btn-outline-dark rounded-0 px-5 mb-3 mb-md-0">See all
                                                        reviews</button>
                                                    <button type="button"
                                                        class="btn btn-dark ml-md-3 rounded-0 px-5">Write a
                                                        review</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <ul class="list-unstyled pl-xl-4">
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2"
                                                            href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">5 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker"
                                                                        role="progressbar" style="width: 100%;"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">205</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2"
                                                            href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">4 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker"
                                                                        role="progressbar" style="width: 53%;"
                                                                        aria-valuenow="53" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">55</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2"
                                                            href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">3 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker"
                                                                        role="progressbar" style="width: 20%;"
                                                                        aria-valuenow="20" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">23</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2"
                                                            href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">2 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker"
                                                                        role="progressbar" style="width: 0%;"
                                                                        aria-valuenow="0" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">0</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2"
                                                            href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">1 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker"
                                                                        role="progressbar" style="width: 1%;"
                                                                        aria-valuenow="1" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">4</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <h4 class="font-size-3 mb-8">1-5 of 44 reviews</h4>
                                        <ul class="list-unstyled mb-8">
                                            <li class="mb-4 pb-5 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h6 class="mb-0">Amazing Story! You will LOVE it</h6>
                                                    <div class="text-yellow-darker ml-3">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                </div>
                                                <p class="mb-4 text-lh-md">Such an incredibly complex story! I had to
                                                    buy it because there was a waiting list of 30+ at the local library
                                                    for this book. Thrilled that I made the purchase</p>
                                                <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>

                                            </li>
                                            <li class="mb-4 pb-5 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h6 class="mb-0">Get the best seller at a great price.</h6>
                                                    <div class="text-yellow-darker ml-3">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                </div>
                                                <p class="mb-4 text-lh-md">Awesome book, great price, fast delivery.
                                                    Thanks so much.</p>
                                                <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>

                                            </li>
                                            <li class="mb-4 pb-5 border-bottom">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h6 class="mb-0">I read this book short...</h6>
                                                    <div class="text-yellow-darker ml-3">
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="fas fa-star"></small>
                                                        <small class="far fa-star"></small>
                                                    </div>
                                                </div>
                                                <p class="mb-4 text-lh-md">I read this book shortly after I got it and
                                                    didn't just put it on my TBR shelf mainly because I saw it on Reese
                                                    Witherspoon's bookclub September read. It was one of the best books
                                                    I've read this year, and reminded me some of Kristen Hannah's The
                                                    Great Alone. </p>
                                                <div class="text-gray-600 mb-4">Staci, February 22, 2020 </div>

                                            </li>
                                        </ul>
                                        <h4 class="font-size-3 mb-4">Write a Review</h4>
                                        <div class="d-flex align-items-center mb-6">
                                            <h6 class="mb-0">Select a rating(required)</h6>
                                            <div class="text-yellow-darker ml-3 font-size-4">
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star"></small>
                                                <small class="far fa-star"></small>
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-4">
                                            <label for="descriptionTextarea"
                                                class="form-label text-dark h6 mb-3">Details please! Your review helps
                                                other shoppers.</label>
                                            <textarea class="form-control rounded-0 p-4" rows="7"
                                                id="descriptionTextarea"
                                                placeholder="What did you like or dislike? What should other shoppers know before buying?"
                                                required="" data-msg="Please enter your message."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success"></textarea>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit"
                                                class="btn btn-dark btn-wide rounded-0 transition-3d-hover">Đăng</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="space-bottom-3">
                <div class="container">
                    <header class="mb-5 d-md-flex justify-content-between align-items-center">
                        <h2 class="font-size-7 mb-3 mb-md-0">Customers Also Considered</h2>
                    </header>
                    <div class="js-slick-carousel products no-gutters border-top border-left border-right slick-initialized slick-slider"
                        data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y"
                        data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                        data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                        data-slides-show="5" data-responsive="[{
                               &quot;breakpoint&quot;: 1500,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 4
                               }
                            },{
                               &quot;breakpoint&quot;: 1199,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 3
                               }
                            }, {
                               &quot;breakpoint&quot;: 992,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }, {
                               &quot;breakpoint&quot;: 554,
                               &quot;settings&quot;: {
                                 &quot;slidesToShow&quot;: 2
                               }
                            }]">
                        <div class="js-prev u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 2240px; transform: translate3d(0px, 0px, 0px);">
                                <div class="product slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 280px; height: auto;" tabindex="0">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="0"><img src="../../assets/img/120x180/img1.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="0">
                                                    <span class="product__add-to-cart">Thêm Giỏ Hàng</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <?php 
                                    $i=0;
                                    foreach ($load_all_sp as $value){
                                        extract($value);
                                ?>
<!-- 
                                <div class="product slick-slide <?=$i==0?'slick-current':''?> slick-active" data-slick-index="<?=$i?>"
                                    aria-hidden="<?=$i>4?'true':'false'?>" style="width: 280px; height: auto;" tabindex="<?=$i<5?0:-1?>">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="<?=$i<5?0:-1?>"><img src="../../assets/img/120x180/img1.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="<?=$i<5?0:-1?>">Paperback</a>
                                                </div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="<?=$i<5?0:-1?>">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="<?=$i<5?0:-1?>">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="<?=$i<5?0:-1?>">
                                                    <span class="product__add-to-cart">Thêm Giỏ Hàng</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="<?=$i<5?0:-1?>">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="<?=$i<5?0:-1?>">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <?php 

                                        $i++;
                                    }
                                ?>
                                <div class="product slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="0"><img src="../../assets/img/120x180/img2.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="0">The Overdue
                                                        Life of Amy Byler</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="0"><img src="../../assets/img/120x180/img3.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="0">All You Can
                                                        Ever Know: A Memoir</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="0"><img src="../../assets/img/120x180/img4.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="0">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="0">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                    style="width: 280px; height: auto;" tabindex="0">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="0"><img src="../../assets/img/120x180/img5.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="0">Paperback</a>
                                                </div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="0">Think Like a
                                                        Monk: Train Your Mind for Peace and Purpose Everyday</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="0">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="0">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img6.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Overdue
                                                        Life of Amy Byler</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="6" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img7.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html"
                                                        tabindex="-1">Paperback</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">All You Can
                                                        Ever Know: A Memoir</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Jay Shetty</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img8.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img8.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img8.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img8.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product slick-slide" data-slick-index="7" aria-hidden="true"
                                    style="width: 280px; height: auto;" tabindex="-1">
                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                        <div
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                            <div class="woocommerce-loop-product__thumbnail">
                                                <a href="../shop/single-product-v3.html" class="d-block"
                                                    tabindex="-1"><img src="../../assets/img/120x180/img8.jpg"
                                                        class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                                        alt="image-description"></a>
                                            </div>
                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                                        href="../shop/single-product-v3.html" tabindex="-1">Kindle
                                                        Edition</a></div>
                                                <h2
                                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                                    <a href="../shop/single-product-v3.html" tabindex="-1">The Last
                                                        Sister (Columbia River Book 1)</a>
                                                </h2>
                                                <div class="font-size-2  mb-1 text-truncate"><a
                                                        href="../others/authors-single.html" class="text-gray-700"
                                                        tabindex="-1">Kelly Harms</a></div>
                                                <div
                                                    class="price d-flex align-items-center font-weight-medium font-size-3">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                                                </div>
                                            </div>
                                            <div class="product__hover d-flex align-items-center">
                                                <a href="../shop/single-product-v3.html"
                                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
                                                    tabindex="-1">
                                                    <span class="product__add-to-cart">ADD TO CART</span>
                                                    <span class="product__add-to-cart-icon font-size-4"><i
                                                            class="flaticon-icon-126515"></i></span>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-switch"></i>
                                                </a>
                                                <a href="../shop/single-product-v3.html"
                                                    class="h-p-bg btn btn-outline-primary border-0" tabindex="-1">
                                                    <i class="flaticon-heart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-next u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow"
                            style="" aria-disabled="false"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>