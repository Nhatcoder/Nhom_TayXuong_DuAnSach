<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div style="margin: 10px 0;">
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá không?')">Xóa</button>
                </div>
                <!-- Table start -->
                <table class="table table-primary">
                    <tr>                   
                        <th></th>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Người đặt hàng</th>
                        <th>Thông tin nhận</th>
                        <th>Tổng cộng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Trạng thái</th>
                        <th>Thanh toán</th>
                        <th>Chi tiết</th>
                    </tr>
                    <?php
                        foreach($listorder as $key => $order) {
                            ?>
                                <tr>
                                    <th><input type="checkbox" name="id_checkbox[]" value="<?= $order['orderid'] ?>" id=""></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $order['ma_donhang'] ?></td>
                                    <td><?= $order['fullName'] ?></td>
                                    <td><?= $order['fullName']."<br> ĐC: ".$order['addr']."<br> SĐT: ".$order['phone']."" ?></td>
                                    <td><?= number_format($order['total'],0,',','.') ?> VNĐ</td>
                                    <td><?= date('d-m-Y H:i:s',strtotime($order['create_at'])) ?></td>
                                    <td>
                                        <?php
                                            if($order['trang_thai'] == 'pending') {
                                                echo 'Chờ xác nhận';
                                            } else if($order['trang_thai'] == 'confirmed') {
                                                echo 'Đã xác nhận';
                                            } else if($order['trang_thai'] == 'shipping') {
                                                echo 'Đang vận chuyển';
                                            } else if($order['trang_thai'] == 'completed') {
                                                echo 'Hoàn thành';
                                            } else {
                                                echo 'Đã hủy';
                                            }
                                        ?>
                                         
                                    </td>
                                    <td>
                                        <span>
                                            <?php
                                                if($order['payment_method'] == 'tienmat' && $order['trang_thai'] == 'completed') {
                                                    echo "Đã thanh toán";
                                                } else {
                                                    echo "Chưa thanh toán";
                                                }
                                            ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="index.php?act=listOrder_detail&order_id=<?= $order['orderid'] ?>" class="btn btn-success">Chi tiết</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </form>
  </div>
</div>