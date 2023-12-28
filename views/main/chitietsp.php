<div id="primary" class="content-area">
    <main id="main" class="site-main ">
        <div class="product">
            <form action="index.php?act=themgiohang" method="post">
                <input type="hidden" name="ma_sach" value="<?= $sp_chitiet['ma_sach'] ?>">
                <input type="hidden" name="ten_sach" value="<?= $sp_chitiet['ten_sach'] ?>">
                <input type="hidden" name="hinh" value="<?= $sp_chitiet['hinh'] ?>">
                <input type="hidden" name="gia" value="<?= $sp_chitiet['gia'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                            <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                                <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted" data-pagi-classes="text-center u-slick__pagination my-4">
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 1410px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="js-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 470px; height: auto;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                                <img src="./public/upload/<?= $sp_chitiet["hinh"] ?>" alt="Image Description" class="mx-auto img-fluid">
                                            </div>
                                            <div class="js-slide slick-slide" data-slick-index="1" aria-hidden="true" style="width: 470px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                                <img src="./public/upload/<?= $sp_chitiet["hinh"] ?>" alt="Image Description" class="mx-auto img-fluid">
                                            </div>
                                            <div class="js-slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 470px; height: auto;" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02">
                                                <img src="./public/upload/<?= $sp_chitiet["hinh"] ?>" alt="Image Description" class="mx-auto img-fluid">
                                            </div>
                                        </div>
                                    </div>


                                    <ul class="js-pagination text-center u-slick__pagination my-4" style="" role="tablist">
                                        <li class="slick-active slick-current" role="presentation"><span></span></li>
                                        <li role="presentation"><span></span></li>
                                        <li role="presentation"><span></span></li>
                                    </ul>
                                </div>
                            </figure>
                        </div>
                        <div class="col-md-7 pl-0 summary entry-summary border-left">
                            <div class="space-top-2 px-4 px-xl-7 border-bottom pb-5">
                                <h1 class="product_title entry-title font-size-7 mb-3"><?= $sp_chitiet['ten_sach'] ?></h1>
                                <div class="font-size-2 mb-4">
                                    <span class="text-yellow-darker">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                    </span>
                                    <span class="ml-3">(3,714)</span>
                                    <span class="ml-3 font-weight-medium">By (author)</span>
                                    <span class="ml-2 text-gray-600">Anna Banks</span>
                                </div>
                                <p class="price font-size-22 font-weight-medium mb-3">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">Giá: <?= number_format($sp_chitiet['gia'], 0, ',', '.') ?> VNĐ</span>
                                    </span>
                                </p>

                                <div style="margin-top: 50px" class="woocommerce-product-details__short-description font-size-2 mb-5">
                                    <p class=""><?= $sp_chitiet['mo_ta'] ?></p>
                                </div>
                                <div class="quantity mb-4 mb-md-0 d-flex align-items-center">
                                    <div class="border px-3 width-120">
                                        <div class="js-quantity">
                                            <div class="d-flex align-items-center">
                                                <label class="screen-reader-text sr-only">Quantity</label>
                                                <a class="js-minus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="1px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z"></path>
                                                    </svg>
                                                </a>
                                                <input type="number" class="input-text qty text js-result form-control text-center border-0" step="1" min="1" max="100" name="so_luong" value="1" title="Qty">
                                                <a class="js-plus text-dark" href="javascript:;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="10px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" name="addToCart" class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt">THÊM GIỎ HÀNG</button>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 px-xl-7 py-5 d-flex align-items-center">
                                <ul class="list-unstyled nav">
                                    <li class="mr-6 mb-4 mb-md-0">
                                        <a href="#" class="h-primary"><i class="flaticon-heart mr-2"></i> Thêm vào yêu thích</a>
                                    </li>
                                    <li class="mr-6">
                                        <a href="#" class="h-primary"><i class="flaticon-share mr-2"></i> Chia sẻ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="js-scroll-nav mb-10">
                <div class="woocommerce-tabs wc-tabs-wrapper  2 mx-lg-auto">
                    <div id="Description" class="">
                        <div class="border-top border-bottom">
                            <ul class="container tabs wc-tabs nav justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                                <li class="flex-shrink-0 flex-md-shrink-1 nav-item active">
                                    <a class="nav-link py-4 font-weight-medium active" href="#Description">
                                        Mô tả & Đánh giá
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
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                        <p class="mb-0">
                                            <?= $sp_chitiet['mo_ta'] ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="ProductReviews" class="">

                        <div class="tab-content font-size-2 container">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2">
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                                        <h4 class="font-size-3">Đánh giá sản phẩm</h4>
                                        <div class="row mb-8">
                                            <div class="col-md-6 mb-6 mb-md-0">
                                                <div class="d-flex  align-items-center mb-4">
                                                    <span class="font-size-15 font-weight-bold">4.6</span>
                                                    <div class="ml-3 h6 mb-0">
                                                        <span class="font-weight-normal">3,714 Đánh giá</span>
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
                                                    <button type="button" class="btn btn-outline-dark rounded-0 px-5 mb-3 mb-md-0">Xem tất cả đánh giá</button>
                                                    <button type="button" class="btn btn-dark ml-md-3 rounded-0 px-5">Chọn xếp hạng</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <ul class="list-unstyled pl-xl-4">
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">5 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">205</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">4 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">55</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">3 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">23</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">2 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <span class="text-secondary">0</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a class="row align-items-center mx-gutters-2 font-size-2" href="javascript:;">
                                                            <div class="col-auto">
                                                                <span class="text-dark">1 stars</span>
                                                            </div>
                                                            <div class="col px-0">
                                                                <div class="progress bg-white-100" style="height: 7px;">
                                                                    <div class="progress-bar bg-yellow-darker" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <ul class="list-unstyled mb-8" id="listbl">
                                            <?php
                                            foreach ($load_comment as $comment) {
                                            ?>
                                                <li class="mb-4 pb-5 border-bottom">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h6 class="mb-0"><?= $comment['ho_ten'] ?></h6>
                                                        <div class="text-yellow-darker ml-3">
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="fas fa-star"></small>
                                                            <small class="far fa-star"></small>
                                                        </div>
                                                    </div>
                                                    <p class="mb-4 text-lh-md"><?= $comment['noi_dung'] ?></p>
                                                    <div class="text-gray-600 mb-4"><?= date('d-m-Y', strtotime($comment['ngay_binh_luan'])) ?></div>
                                                    <ul class="nav">
                                                        <li class="mr-7">
                                                            <a href="#" class="text-gray-600 d-flex align-items-center">
                                                                <i class="text-dark font-size-5 flaticon-like-1"></i>
                                                                <span class="ml-2">90</span>
                                                            </a>
                                                        </li>
                                                        <li class="mr-7">
                                                            <a href="#" class="text-gray-600 d-flex align-items-center">
                                                                <i class="text-dark font-size-5 flaticon-dislike"></i>
                                                                <span class="ml-2">10</span>
                                                            </a>
                                                        </li>
                                                        <li class="mr-7">
                                                            <a href="#" class="text-gray-600 d-flex align-items-center">
                                                                <i class="text-dark font-size-5 flaticon-flag"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                            <style>
                                                #listbl{
                                                    height: 500px;
                                                    overflow-y: scroll;
                                                }
                                            </style>
                                        <?php
                                        if ($user) {
                                        ?>
                                            <h4 class="font-size-3 mb-4">Xem tất cả đánh giá</h4>
                                            <div class="d-flex align-items-center mb-6">
                                                <h6 class="mb-0">Chọn xếp hạng</h6>
                                                <div class="text-yellow-darker ml-3 font-size-4">
                                                    <small class="far fa-star"></small>
                                                    <small class="far fa-star"></small>
                                                    <small class="far fa-star"></small>
                                                    <small class="far fa-star"></small>
                                                    <small class="far fa-star"></small>
                                                </div>
                                            </div>
                                            <form action=" " method="post" id="insert_data_bl">
                                                <div class="js-form-message form-group mb-4">
                                                    <label for="descriptionTextarea" class="form-label text-dark h6 mb-3">Chi tiết xin vui lòng! Đánh giá của bạn giúp những người mua sắm khác.</label>
                                                    <textarea class="form-control rounded-0 p-4" rows="7" id="descriptionTextarea" placeholder="Nhập đánh giá & bình luận của bạn..." required="" data-msg="Please enter your message." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                                                </div>
                                                <input type="hidden" id="idsp" name="idsp" value="<?= $_GET['sach'] ?>">
                                                <div class="d-flex">
                                                    <button type="submit" name="binhluan" id="mut_data" class="btn btn-dark btn-wide rounded-0 transition-3d-hover">Gửi bình luận</button>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    function fetch_data() {
                                                        $.ajax({
                                                            url: "views/main/ajaxbinhluan.php",
                                                            method: "POST",
                                                            success: function(data) {
                                                                $('#listbl').html(data);
                                                            },

                                                            error: function(error) {
                                                                alert("Lỗi rồi");
                                                            }
                                                        });
                                                    }

                                                    $('#mut_data').on('click', function(e) {
                                                        e.preventDefault();
                                                        var bl = $('#descriptionTextarea').val();
                                                        var idsp = $('#idsp').val();
                                                        // alert(bl)                   
                                                        // alert(idsp)
                                                        if (bl == '') {
                                                            alert('Không được để trống!');
                                                        } else {
                                                            $.ajax({
                                                                url: "views/main/ajaxbinhluan.php",
                                                                method: "POST",
                                                                data: {
                                                                    bl: bl,
                                                                    idsp: idsp
                                                                },
                                                                success: function(data) {
                                                                    // alert(data);
                                                                    // alert('Binh luan thanh cong')
                                                                    $('#insert_data_bl')[0].reset()
                                                                    fetch_data()
                                                                },

                                                                error: function(error) {
                                                                    alert("Lỗi rồi");
                                                                }
                                                            });
                                                        }

                                                    });
                                                })
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <p style="color:red;"> Vui lòng đăng nhập để sử dụng tính năng bình luận!</p>
                                        <?php
                                        }
                                        ?>


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
                        <h2 class="font-size-7 mb-3 mb-md-0">SẢN PHẨM LIÊN QUAN</h2>
                    </header>
                    <div class="js-slick-carousel products no-gutters border-top border-left border-right slick-initialized slick-slider" data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y" data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10" data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10" data-slides-show="5" data-responsive="[{
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
                        <div class="js-prev u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10 slick-arrow slick-disabled" aria-disabled="true" style=""></div>

                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 2344px; transform: translate3d(0px, 0px, 0px);">
                                <?php
                                foreach ($sanpham_lienquan as $sp_lienquan) {
                                ?>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="id_sanpham" value="<?= $sp_lienquan['ma_sach'] ?>">
                                        <input type="hidden" name="name" value="<?= $sp_lienquan['ten_sach'] ?>">
                                        <input type="hidden" name="images" value="<?= $sp_lienquan['hinh'] ?>">
                                        <input type="hidden" name="gia" value="<?= $sp_lienquan['gia'] ?>">
                                        <input type="hidden" name="quantity" value="1">

                                        <div class="product slick-slide slick-current slick-active" style="width: 293px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                                            <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                    <div class="woocommerce-loop-product__thumbnail">
                                                        <a href="index.php?act=chi-tiet-san-pham&sach=<?= $sp_lienquan['ma_sach'] ?>" class="d-block" tabindex="0"><img style="height:249px; object-fit: cover;" src="./public/upload/<?= $sp_lienquan['hinh'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                    </div>
                                                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                        <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $sp_lienquan['ma_sach'] ?>" tabindex="0"><?= $sp_lienquan['ten_sach'] ?></a></h2>
                                                        <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html" class="text-gray-700" tabindex="0">Cao cấp</a></div>
                                                        <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"><?= number_format($sp_lienquan['gia'], 0, ',', '.') ?></span>VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover d-flex align-items-center">
                                                        <button name="addCart" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" tabindex="0">
                                                            <span class="product__add-to-cart">Thêm giỏ hàng</span>
                                                            <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                        </button>
                                                        <a href="" class="mr-1 h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-switch"></i>
                                                        </a>
                                                        <a href="" class="h-p-bg btn btn-outline-primary border-0" tabindex="0">
                                                            <i class="flaticon-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                        <div class="js-next u-slick__arrow u-slick__arrow-centered--y fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10 slick-arrow" style="" aria-disabled="false"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>