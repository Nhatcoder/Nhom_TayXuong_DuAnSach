<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">GIỎ HÀNG</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="index.php" class="h-primary">Trang chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Giỏ hàng
            </nav>
        </div>
    </div>
</div>

<div class="site-content bg-punch-light overflow-hidden" id="content">
    <!-- <form class="woocommerce-cart-form table-responsive" action="index.php?act=thanhtoan" method="post"> -->
    <div class="container">
        <?php
        if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
        ?>

            <header class="entry-header space-top-2 space-bottom-1 mb-2">
                <h1 class="entry-title font-size-7">Có <?= count($_SESSION['mycart']) ?> sản phẩm</h1>
            </header>
            <div class="row pb-8" style="display: grid;grid-template-columns: repeat(2,1fr);gap: 20px;">
                <div id="primary" style="width: 1100px;" class="content-area">
                    <main id="main" class="site-main ">
                        <div class="page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form action="index.php?act=capnhatgiohang" method="post">
                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                            <thead>
                                                <tr>
                                                    <th class="product-name" style="width: 453px">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tổng giá</th>
                                                    <th class="product-remove">Xóa</th>g
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                $thanhtien = 0;
                                                foreach ($_SESSION['mycart'] as $key => $value) {
                                                    $tongtien = $value['gia'] * $value['so_luong'];
                                                    $thanhtien += $tongtien;
                                                ?>
                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                        <input type="hidden" name="ma_sach[]" value="<?= $value["ma_sach"] ?>">

                                                        <td class="product-name" data-title="Product">
                                                            <div class="d-flex align-items-center">
                                                                <a href="index.php?act=chi-tiet-san-pham&sach=<?= $value['ma_sach'] ?>">
                                                                    <img width="170px" src="./public/upload/<?= $value['hinh'] ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                                </a>
                                                                <div class="ml-3 m-w-200-lg-down">
                                                                    <a href="index.php?act=chi-tiet-san-pham&sach=<?= $value['ma_sach'] ?>"><?= $value['ten_sach'] ?></a>
                                                                    <a href="#" class="text-gray-700 font-size-2 d-block" tabindex="0">Cao cấp</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="product-price" data-title="Price">
                                                            <span class="woocommerce-Price-amount amount gia"><?= number_format($value['gia'], 0, '', '.') ?> VNĐ</span>
                                                        </td>
                                                        <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity d-flex align-items-center">
                                                                <div class="border px-3 width-120">
                                                                    <div class="js-quantity">
                                                                        <div class="d-flex align-items-center">
                                                                            <label class="screen-reader-text sr-only">Số lượng</label>
                                                                            <a class="js-minus giamsl text-dark" href="javascript:;">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="1px">
                                                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </a>
                                                                            <input type="text" style="background-color: #fff;" class="amount_check soluong input-text qty text js-result form-control text-center border-0" name="so_luong[]" step="1" min="1" max="100" value="<?= $value['so_luong'] ?>" title="Qty">
                                                                            <a class="js-plus tangsl text-dark" href="javascript:;">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="10px">
                                                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal" data-title="Total">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($tongtien, 0, ',', '.') ?> VNĐ</span>
                                                        </td>
                                                        <td class="product-remove">
                                                            <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="index.php?act=delete_cart&idcart=<?= $i ?>" class="remove" aria-label="Remove this item">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.011,13.899 L13.899,15.012 L7.500,8.613 L1.101,15.012 L-0.012,13.899 L6.387,7.500 L-0.012,1.101 L1.101,-0.012 L7.500,6.387 L13.899,-0.012 L15.011,1.101 L8.613,7.500 L15.011,13.899 Z">
                                                                    </path>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $i += 1;
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="5" class="actions">
                                                        <input type="submit" class="button" name="update_cart" value="Cập nhật giỏ hàng">
                                                        <!-- <input type="hidden" id="_wpnonce" name="_wpnonce" value="db025d7a70"><input type="hidden" name="_wp_http_referer" value="/storefront/cart/"> -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </main>
                </div>
                <div id="secondary" class="sidebar cart-collaterals order-1" role="complementary">
                    <div id="cartAccordion" class="border border-gray-900 bg-white mb-5">
                        <div class="p-4d875 border">
                            <div id="cartHeadingOne" class="cart-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#cartCollapseOne" aria-expanded="true" aria-controls="cartCollapseOne">
                                    <h3 class="cart-title mb-0 font-weight-medium font-size-3">Tổng thanh toán</h3>

                                </a>
                            </div>
                        </div>
                        <div class="p-4d875 border">
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                    <tr class="order-total">
                                        <th>Tổng giá:</th>
                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"> </span> <?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="wc-proceed-to-checkout">
                        <button name="thanhtoan" class="checkout-button button alt wc-forward btn btn-dark btn-block rounded-0 py-4">Thanh toán</button>
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="box_noProduct" style="width: 100%;">
                <div class="no__product">
                    <h2>Giỏ hàng của bạn đang trống</h2>
                    <a href="index.php">Mua Ngay</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>