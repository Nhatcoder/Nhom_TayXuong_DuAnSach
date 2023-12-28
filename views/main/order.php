<div class="page-header border-bottom">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">THÔNG TIN ĐƠN HÀNG</h1>
            <nav class="woocommerce-breadcrumb font-size-2">
                <a href="index.php" class="h-primary">Trang chủ</a>
                <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Đơn hàng của bạn
            </nav>
        </div>
    </div>
</div>

<div class="site-content bg-punch-light overflow-hidden" id="content">
    <div class="container">
        <?php
            // echo "<pre>";
            // print_r($listorder_detail);
            if(!empty($listorder_detail)) {
                ?>            
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h1 class="entry-title font-size-7">Có <?= count($listorder_detail) ?> sản phẩm</h1>
                    </header>
                    <div class="row pb-8">
                        <div id="primary" style="width: 100%;" class="content-area">
                            <main id="main" class="site-main ">
                                <div class="page type-page status-publish hentry">

                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <form class="woocommerce-cart-form table-responsive" action="#" method="post">
                                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                                    <thead style="text-align: center !important;">
                                                        <tr>
                                                            <th class="product-name" style="width: 170px">Mã đơn hàng</th>
                                                            <th class="product-name" style="width: 321px">Sản phẩm</th>
                                                            <th class="product-price">Giá</th>
                                                            <th class="product-quantity" style="width: 149px;">Số lượng</th>
                                                            <th class="product-subtotal">Tổng giá</th>
                                                            <th class="product-remove">Trạng thái</th>
                                                            <th class="product-remove">Thanh toán</th>
                                                            <th class="product-remove">Yêu cầu</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center !important;">
                                                        <?php
                                                            $thanhtien = 0;
                                                            foreach ($listorder_detail as $key => $value) {
                                                                $tongtien = $value['price'] * $value['quantity'];
                                                                $thanhtien += $tongtien;
                                                                ?>
                                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                                        <td>
                                                                            <div><?= $value['ma_donhang'] ?></div>
                                                                        </td>
                                                                        <td class="product-name" data-title="Product">
                                                                            <div class="d-flex align-items-center">
                                                                                <a href="index.php?act=chi-tiet-san-pham&giay=<?= $value['ma_sach'] ?>">
                                                                                    <img width="100px" src="./public/upload/<?= $value['images'] ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                                                </a>
                                                                                <div class="ml-3 m-w-200-lg-down">
                                                                                    <a href="index.php?act=chi-tiet-san-pham&giay=<?= $value['ma_sach'] ?>"><?= $value['namepro'] ?></a>
                                                                                    <a href="#" class="text-gray-700 font-size-2 d-block" tabindex="0">Cao cấp</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="product-price" data-title="Price">
                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($value['price'], 0, '', '.') ?> VNĐ</span>
                                                                        </td>
                                                                        <td>
                                                                            <input type="number" class="input-text qty text js-result form-control text-center border-0" name="quantity" value="<?= $value['quantity'] ?>" disabled title="Qty">
                                                                        </td>
                                                                        <td class="product-subtotal" data-title="Total">
                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= number_format($tongtien, 0, ',', '.') ?> VNĐ</span>
                                                                        </td>
                                                                        <td class="product-remove">
                                                                            <span>
                                                                                <?php
                                                                                    if($value['status'] == 0) {
                                                                                        echo "Đơn hàng mới";
                                                                                    } else if($value['status'] == 1) {
                                                                                        echo "Chuẩn bị hàng";
                                                                                    } else if($value['status'] == 2) {
                                                                                        echo "Đã giao";
                                                                                    } else if($value['status'] == 3) {
                                                                                        echo "Hoàn thành";
                                                                                    } else {
                                                                                        echo "Đã hủy";
                                                                                    }
                                                                                ?>
                                                                            </span>
                                                                        </td>
                                                                        <td class="product-remove">
                                                                            <span>
                                                                                <?php
                                                                                    if($value['thanhtoan'] == 1) {
                                                                                        echo "Đã thanh toán";
                                                                                    } else {
                                                                                        echo "Chưa thanh toán";
                                                                                    }
                                                                                ?>
                                                                                
                                                                            </span>        
                                                                        </td>
                                                                        <td class="product-remove">
                                                                            <?php
                                                                                if($value['status'] == 0 || $value['status'] == 1) {
                                                                                    ?>
                                                                                        <a onclick="return confirm('Bạn có muôn hủy đơn hàng này không')" class="btn btn-danger" href="index.php?act=huydon&id_donhang=<?= $value['order_id'] ?>">Hủy</a>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                        <span>Không thể hủy đơn</span>
                                                                                    <?php
                                                                                }
                                                                            ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </main>
                        </div>
                    </div>
                <?php
            } else {
                ?>
                    <div class="box_noProduct" style="width: 100%;">
                        <div class="no__product">
                            <h2>Chưa có đơn hàng nào</h2>
                            <a href="index.php">Mua Ngay</a>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
</div>