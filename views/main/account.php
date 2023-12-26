<div id="content" class="site-content bg-punch-light space-bottom-3">
    <div class="col-full container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-6" class="post-6 page type-page status-publish hentry">
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h4 class="entry-title font-size-7 text-center">THÔNG TIN NGƯỜI DÙNG</h4>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-info p-4 bg-white border">
                                Cập nhật thông tin tài khoản
                            </div>
                            <form id="collapseExample9" class="collapse checkout_coupon mt-4 p-4 bg-white border"
                                method="post">
                                <div class="row d-flex">
                                    <p class="col-md-4 d-inline form-row form-row-first mb-3 mb-md-0">
                                        <input type="text" name="coupon_code1" class="input-text form-control"
                                            placeholder="Coupon code" id="coupon_code1" value="">
                                    </p>
                                    <p class="col-md-3 d-inline form-row form-row-last">
                                        <input type="submit"
                                            class="button form-control border-0 height-4 btn btn-dark rounded-0"
                                            name="apply_coupon" value="Apply coupon">
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </form>
                            <form method="post" style="width: 153.5%;" class="checkout woocommerce-checkout row mt-8"
                                action="index.php?act=account"
                                enctype="multipart/form-data" novalidate="novalidate">
                                <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                    <div class="px-4 pt-5 bg-white border">
                                        <div class="woocommerce-billing-fields">
                                            <h3 class="mb-4 font-size-3">Thông tin</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper row">
                                                <p class="col-lg-6 mb-4d75 form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                    id="billing_first_name_field" data-priority="10">
                                                    <label for="billing_first_name" class="form-label">Họ và tên <abbr
                                                            class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control"
                                                        name="name" id="billing_first_name" placeholder=""
                                                        value="<?= $user['name'] ?>" autocomplete="given-name" autofocus="autofocus">
                                                </p>
                                                <p class="col-lg-6 mb-4d75 form-row form-row-last validate-required"
                                                    id="billing_last_name_field" data-priority="20">
                                                    <label for="billing_last_name" class="form-label">Email <abbr
                                                            class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control"
                                                        name="email" id="billing_last_name" placeholder=""
                                                        value="<?= $user['email'] ?>" autocomplete="family-name">
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-wide"
                                                    id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="input-text form-control"
                                                        name="phone" id="billing_company" placeholder=""
                                                        value="<?= $user['phone'] ?>" autocomplete="organization">
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-wide"
                                                    id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">Địa chỉ</label>
                                                    <input type="text" class="input-text form-control"
                                                        name="address" id="billing_company" placeholder=""
                                                        value="<?= $user['address'] ?>" autocomplete="organization">
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-wide"
                                                    id="billing_company_field" data-priority="30">
                                                    <label for="billing_company" class="form-label">Mật khẩu</label>
                                                    <input type="password" class="input-text form-control"
                                                        name="password" id="billing_company" placeholder=""
                                                        value="<?= $user['password'] ?>" autocomplete="organization">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row place-order" style="width: 250px; margin-top: 20px;">
                                        <button name="capnhat"
                                            class="button alt btn btn-dark btn-block rounded-0 py-4">Cập nhật</button>
                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="926470d564"><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/storefront/?wc-ajax=update_order_review">
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