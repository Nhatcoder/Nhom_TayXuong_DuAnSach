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
                                    <td><?= $order['name']."<br> ĐC: ".$order['addr']."<br> SĐT: ".$order['phone']."" ?></td>
                                    <td><?= number_format($order['total'],0,',','.') ?></td>
                                    <td><?= date('d-m-Y H:i:s',strtotime($order['created_at'])) ?></td>
                                    <td>
                                        <select onchange="changeStatus(this,<?=$order['orderid']?>)"
                                                class="form-select-sm selected_status" name="status"
                                                <?=($order['status'] == 3 || $order['status'] == 4) ? 'disabled' : ''?>
                                        >
                                            <?php
                                            $status = 
                                                    [
                                                        0 => 'Đơn hàng mới',
                                                        1 => 'Chuẩn bị hàng', 
                                                        2 => 'Đã giao', 
                                                        3 => 'Hoàn thành',
                                                        4 => 'Đã hủy'
                                                    ];
                                            foreach ($status as $key => $value):?>
                                                <option <?= $key == $order['status'] ? 'selected' : '' ?>
                                                        style="font-size: 14px; padding: 5px" class="status"
                                                        value="<?= $key ?>"><?= $value ?>    
                                                </option>
                                            <?php endforeach; ?>
                                        </select>   
                                    </td>
                                    <td>
                                        <span>
                                            <?php
                                                if($order['thanhtoan'] == 0) {
                                                    echo "Chưa thanh toán";
                                                } else {
                                                    echo "Đã thanh toán";
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

<script>
    function changeStatus(select, order_id) {
        if (select.disabled === false) {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    if (parseInt(this.responseText) === 3 || parseInt(this.responseText) === 4) {
                        select.disabled = true;
                    }
                }
            }
            xmlHttp.open('GET', `./request/status.php?status=${select.value}&order_id=${order_id}`, true);
            xmlHttp.send();
        }
    }
</script>
