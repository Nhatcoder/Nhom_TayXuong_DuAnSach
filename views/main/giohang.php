<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Giỏ hàng</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="#" class="h-primary">Trang chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                <a href="#" class="h-primary">Giỏ hàng</a>
        </div>
    </div>
</div>

<div class="site-content bg-punch-light overflow-hidden" id="content">
    <div class="container">
        <?php
            if(!empty($_SESSION["cart"])) {
                ?>
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h1 class="entry-title font-size-7">Giỏ hàng của bạn:
                            <?php if (isset($_SESSION["cart"])) {
                                echo (count($_SESSION["cart"]));
                            } ?> sản phẩm
                        </h1>
                    </header>
                    <div class="row pb-8" style="display: grid; grid-template-columns: 75% 25%; gap: 20px;">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main ">
                                <div class="page type-page status-publish hentry">

                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <form class="woocommerce-cart-form table-responsive" action="index.php?act=thanhtoan" method="post">
                                                <table
                                                    class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-price">Giá</th>
                                                            <th class="product-quantity">Số lượng</th>
                                                            <th class="product-subtotal">Tổng giá</th>
                                                            <th class="product-remove">Xóa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($_SESSION["cart"] as $key => $value) {
                                                            extract($value);
                                                            ?>
                                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                <td class="product-name" data-title="Product">
                                                                    <div class="d-flex align-items-center">
                                                                        <a href="#">
                                                                            <img width="130px" src="public/upload/<?= $hinh ?>"
                                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                                alt="">
                                                                        </a>
                                                                        <div class="ml-3 m-w-200-lg-down">
                                                                            <a href="#">
                                                                                <?= $ten_sach ?>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price" data-title="Price">
                                                                    <span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">
                                                                            <?= number_format($gia, 0, ",", ".") ?>
                                                                        </span>VNĐ</span>
                                                                </td>
                                                                <td class="product-quantity" data-title="Quantity">
                                                                    <div class="quantity d-flex align-items-center">

                                                                        <div class="border px-3 width-120">
                                                                            <div class="js-quantity">
                                                                                <div class="d-flex align-items-center">
                                                                                    <label class="screen-reader-text sr-only">Số
                                                                                        lượng</label>
                                                                                    <a class="js-minus text-dark"
                                                                                        href="index.php?act=giamsoluong&ma_sach=<?= $ma_sach ?>">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="10px" height="1px">
                                                                                            <path fill-rule="evenodd"
                                                                                                fill="rgb(22, 22, 25)"
                                                                                                d="M-0.000,-0.000 L10.000,-0.000 L10.000,1.000 L-0.000,1.000 L-0.000,-0.000 Z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </a>
                                                                                    <input type="number"
                                                                                        class="input-text qty text js-result form-control text-center border-0"
                                                                                        step="1" min="1" max="100" name="quantity"
                                                                                        value="<?= $soluongmua ?>" title="Qty">
                                                                                    <a class="js-plus text-dark"
                                                                                        href="index.php?act=tangsoluong&ma_sach=<?= $ma_sach ?>">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="10px" height="10px">
                                                                                            <path fill-rule="evenodd"
                                                                                                fill="rgb(22, 22, 25)"
                                                                                                d="M10.000,5.000 L6.000,5.000 L6.000,10.000 L5.000,10.000 L5.000,5.000 L-0.000,5.000 L-0.000,4.000 L5.000,4.000 L5.000,-0.000 L6.000,-0.000 L6.000,4.000 L10.000,4.000 L10.000,5.000 Z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal" data-title="Total">
                                                                    <span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol"></span><?= number_format($gia, 0,',','.') ?> VNĐ</span>
                                                                </td>
                                                                <td class="product-remove">
                                                                    <a href="index.php?act=xoasach&ma_sach=<?= $ma_sach ?>"
                                                                        class="remove" aria-label="Remove this item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                                            height="15px">
                                                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                                d="M15.011,13.899 L13.899,15.012 L7.500,8.613 L1.101,15.012 L-0.012,13.899 L6.387,7.500 L-0.012,1.101 L1.101,-0.012 L7.500,6.387 L13.899,-0.012 L15.011,1.101 L8.613,7.500 L15.011,13.899 Z">
                                                                            </path>
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </main>
                        </div>
                        <div id="secondary" width="424px" class="sidebar cart-collaterals order-1" role="complementary">
                            <div id="cartAccordion" class="border border-gray-900 bg-white mb-5">
                                <div class="p-4d875 border">
                                    <div id="cartHeadingOne" class="cart-head">
                                        <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                            data-toggle="collapse" data-target="#cartCollapseOne" aria-expanded="true"
                                            aria-controls="cartCollapseOne">
                                            <h3 class="cart-title mb-0 font-weight-medium font-size-3">Tổng số giỏ hàng</h3>
                                            <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                </path>
                                            </svg>
                                            <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div id="cartCollapseOne" class="mt-4 cart-content collapse show"
                                        aria-labelledby="cartHeadingOne" data-parent="#cartAccordion">
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng phụ</th>
                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>79.99</span>VNĐ</td>
                                                </tr>
                                                <tr class="order-shipping">
                                                    <th>Vận chuyển</th>
                                                    <td data-title="Shipping">Miễn phí vận chuyển</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="p-4d875 border">
                                    <table class="shop_table shop_table_responsive">
                                        <tbody>
                                            <tr class="order-total">
                                                <th>Tổng giá:</th>
                                                <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">£</span>97.99</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <a href="index.php?act=thanhtoan"
                                    class="checkout-button button alt wc-forward btn btn-dark btn-block rounded-0 py-4">Thanh
                                    toán</a>
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