<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    
    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
                </div>
                <!-- /.card-header -->
                <div style="margin: 10px 0;">
                    <a href="?act=themdanhmuc" class="btn btn-success">Thêm sản phẩm</a>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá không?')">Xóa</button>
                </div>
                <!-- Table start -->
                <table class="table table-primary">
                    <tr>       
                        <th></th>            
                        <th>Mã sách</th>
                        <th>Tên sách</th>
                        <th>Giá sách</th>
                        <th>Số lượng sách</th>
                        <th>Hình ảnh</th>
                        <th>Tên danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($listsanpham as $key => $sanpham) {
                            extract($sanpham);
                            ?>
                                <td><input type="checkbox" name="ma_sach[]" value="<?php echo $ma_sach ?>" class="checkbox"></td>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $ten_sach ?></td>
                                <td><?php echo $gia ?></td>
                                <td><?php echo $so_luong ?></td>
                                <td>
                                    <img src="../public/upload/<?= $hinh ?>" width="90" alt="">
                                </td>
                                <td><?php echo $ten_danhmuc ?></td>

                                <td>
                                    <a href="?act=suasanpham&id_sach=<?= $ma_sach ?>">
                                        <input type="button" value="Sửa"></a>
                                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoasanpham&id_sach=<?= $ma_sach ?>"><input type="button" value="Xóa"></a>

                                </td>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </form>
  </div>
</div>