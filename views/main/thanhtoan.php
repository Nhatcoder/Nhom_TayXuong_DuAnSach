<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">THANH TOÁN</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="#" class="h-primary">Trang chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
                <a href="#" class="h-primary">Giỏ hàng</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Thanh toán
            </nav>
        </div>
    </div>
</div>

<div id="content" class="site-content bg-punch-light space-bottom-3">
    <div class="col-full container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-6" class="post-6 page type-page status-publish hentry">
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h4 class="entry-title font-size-7 text-center">THANH TOÁN</h4>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-info p-4 bg-white border">Có phiếu giảm giá?
                                <a class="showcoupon" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9">
                                    Bấm vào đây để nhập mã của bạn
                                </a>
                            </div>
                            <form name="checkout" method="post" class="checkout woocommerce-checkout row mt-8" action="index.php?act=thanhtoan" enctype="multipart/form-data" novalidate="novalidate">

                                
                                <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                    <div class="px-4 pt-5 bg-white border">
                                        <div class="woocommerce-billing-fields">
                                            <h3 class="mb-4 font-size-3">Thông tin địa chỉ</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper row">
                                                <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                    <label for="billing_first_name" class="form-label">Họ và tên <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" value="<?= $user['ho_ten'] ?? "" ?>" class="input-text form-control" name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" autofocus="autofocus">
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-wide" id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">Địa chỉ <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control" name="billing_address" id="billing_company" value="<?= $user['dia_chi'] ?? "" ?>">
                                                </p>
                                                <p class="col-12 mb-3 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="form-label">Số điện thoại
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control" name="billing_phone" id="billing_address_1" value="<?= $user['so_dien_thoai'] ?? "" ?>" autocomplete="address-line1">
                                                </p>
                                                <p class="col-12 mb-3 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="form-label">Ghi chú
                                                        <abbr class="required" title="required">*</abbr><br><br></label>
                                                    
                                                    <textarea name="ghichu" id="" cols="30" rows="10"></textarea>
                                                </p>
                                                <p class="col-12 mb-3 form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="form-label">Phương thức thanh toán
                                                        <abbr class="required" title="required">*</abbr></label><br>
                                                    <div style="display: flex; align-items: center; margin: 0 0 20px 0; margin-left: 15px; border: 1px solid #ccc; padding: 20px;">
                                                        <div style="margin-right: 10px;">
                                                            Thanh toán khi nhận hàng <input style="margin-left: 5px;" type="radio" name="payment" value="tienmat">
                                                        </div>
                                                        Thanh toán VNPAY <input style="margin-left: 5px;" type="radio" name="payment" value="vnpay">
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 id="order_review_heading" class="d-none">Hóa đơn thanh toán</h3>
                                <div id="order_review" class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order">
                                    <div id="checkoutAccordion" class="border border-gray-900 bg-white mb-5">
                                        <div class="p-4d875 border">
                                            <div id="checkoutHeadingOnee" class="checkout-head">
                                                <a href="#" class="text-dark d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#checkoutCollapseOnee" aria-expanded="true" aria-controls="checkoutCollapseOnee">
                                                    <h3 class="checkout-title mb-0 font-weight-medium font-size-3">Tổng hóa đơn</h3>
                                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z">
                                                        </path>
                                                    </svg>
                                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div id="checkoutCollapseOnee" class="mt-4 checkout-content collapse show" aria-labelledby="checkoutHeadingOnee" data-parent="#checkoutAccordion">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead class="d-none">
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $thanhtien = 0;
                                                            foreach($_SESSION['mycart'] as $key => $productBill) {
                                                                $tongtien = $productBill['gia'] * $productBill['so_luong'];
                                                                $thanhtien += $tongtien;
                                                                ?>
                                                                    <tr class="cart_item">
                                                                        <img width="60px" src="./public/upload/<?= $productBill['hinh'] ?>" alt="">
                                                                        <td class="product-name">
                                                                            
                                                                            <?= $productBill['ten_sach'] ?>&nbsp; <strong class="product-quantity">× <?= $productBill['so_luong'] ?></strong>
                                                                        </td>
                                                                        <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($tongtien, 0, ',', '.') ?> VNĐ</span>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="p-4d875 border">
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="order-total">
                                                        <th>Tổng đơn</th>
                                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($thanhtien, 0, ',', '.') ?> VNĐ</span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-row place-order">
                                        <button name="xacnhan" class="button alt btn btn-dark btn-block rounded-0 py-4">Xác nhận thanh toán</button>
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="926470d564"><input type="hidden" name="_wp_http_referer" value="/storefront/?wc-ajax=update_order_review">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </article>

            </main>

        </div>

    </div>

</div>