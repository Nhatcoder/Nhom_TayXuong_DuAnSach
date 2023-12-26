<div class="page-header border-bottom mb-8">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">TỪ KHÓA TÌM KIẾM: <?= isset($_POST['keyword']) ? $_POST['keyword'] : "" ?></h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="../home/index.html" class="h-primary">Trang chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                <a href="../shop/v3.html" class="h-primary">Search</a>
            </nav>
        </div>
    </div>
</div>

<div class="site-content space-bottom-3" id="content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area order-2">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">

                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
                            <?php
                                if(!empty($listpro_search)) {
                                    foreach($listpro_search as $product) {
                                        ?>
                                            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                                <input type="hidden" name="id_sanpham" value="<?= $product['id_product'] ?>">
                                                <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                                <input type="hidden" name="images" value="<?= $product['images'] ?>">
                                                <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                                <input type="hidden" name="quantity" value="1">
                                                <li class="product col">
                                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                            <div class="woocommerce-loop-product__thumbnail">
                                                                <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>" class="d-block"><img src="./public/upload/<?= $product['images'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                            </div>
                                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>"><?= $product['ten_danhmuc'] ?></a></div>
                                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html"><?= $product['name'] ?></a></h2>
                                                                <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',','.') ?> VNĐ</span>
                                                                </div>
                                                            </div>
                                                            <div class="product__hover d-flex align-items-center">
                                                                <span class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                                    <button name="addCart" class="product__add-to-cart"><i class="flaticon-icon-126515"></i></button>
                                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                                </span>
                                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                                    <i class="flaticon-switch"></i>
                                                                </a>
                                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                                    <i class="flaticon-heart"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </form>
                                        <?php
                                    }
                                } else {
                                    foreach($listProduct as $product) {
                                        ?>
                                            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                                                <input type="hidden" name="id_sanpham" value="<?= $product['id_product'] ?>">
                                                <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                                <input type="hidden" name="images" value="<?= $product['images'] ?>">
                                                <input type="hidden" name="gia" value="<?= $product['gia'] ?>">
                                                <input type="hidden" name="quantity" value="1">
                                                <li class="product col">
                                                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                                            <div class="woocommerce-loop-product__thumbnail">
                                                                <a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>" class="d-block"><img src="./public/upload/<?= $product['images'] ?>" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                                            </div>
                                                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>"><?= $product['ten_danhmuc'] ?></a></div>
                                                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="../shop/single-product-v1.html"><?= $product['name'] ?></a></h2>
                                                                <div class="font-size-2  mb-1 text-truncate"><a href="index.php?act=chi-tiet-san-pham&giay=<?= $product['id_product'] ?>" class="text-gray-700">Cao cấp</a></div>
                                                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($product['gia'], 0, ',','.') ?> VNĐ</span>
                                                                </div>
                                                            </div>
                                                            <div class="product__hover d-flex align-items-center">
                                                                <span class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip" data-placement="right" title="" data-original-title="ADD TO CART">
                                                                    <button name="addCart" class="product__add-to-cart"><i class="flaticon-icon-126515"></i></button>
                                                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                                                </span>
                                                                <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                                                                    <i class="flaticon-switch"></i>
                                                                </a>
                                                                <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                                                                    <i class="flaticon-heart"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </form>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>

                    </div>
                </div>
            </div>
            <div id="secondary" class="sidebar widget-area order-1" role="complementary">
                <div id="widgetAccordion">
                    <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
                        <div id="widgetHeadingOne" class="widget-head">
                            <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Danh mục sản phẩm</h3>
                                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z"></path>
                                </svg>
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z"></path>
                                </svg>
                            </a>
                        </div>
                        <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                            <ul class="product-categories">
                                <?php
                                    foreach ($listDanhmuc as $danhmuc) {
                                        ?>
                                            <li class="cat-item cat-item-9 cat-parent">
                                                <a href="index.php?act=danhmuc&id_danhmuc=<?= $danhmuc['id'] ?>"><?= $danhmuc['ten_danhmuc'] ?></a>
                                            </li>
                                        <?php
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>