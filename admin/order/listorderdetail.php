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
                    <a href="index.php?act=listOrder_detail" class="btn btn-success">Quay lại</a>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá không?')">Xóa</button>
                </div>
                <!-- Table start -->
                <table class="table table-primary">
                    <tr>                   
                        <th></th>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                    <?php
                        foreach($listOrderdetail as $key => $orderdetail) {
                            ?>
                                <tr>
                                    <th><input type="checkbox" name="id_checkbox[]" value="<?= $orderdetail['id'] ?>" id=""></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><img width="120px" src="../public/upload/<?= $orderdetail['images'] ?>" alt=""></td>
                                    <td><?= $orderdetail['name'] ?></td>
                                    <td><?= $orderdetail['quantity'] ?></td>
                                    <td><?= number_format($orderdetail['price'],0,',','.') ?></td>
                                    <td><?= number_format($orderdetail['total'],0,',','.') ?></td>  
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

