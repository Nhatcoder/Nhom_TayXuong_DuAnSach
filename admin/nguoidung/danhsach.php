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
                    <a href="index.php?act=themnguoidung" class="btn btn-success">Thêm sản phẩm</a>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá không?')">Xóa</button>
                </div>
                <!-- Table start -->
                <table class="table table-primary">

                    <tr>       
                        <th></th>            
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Hình ảnh</th>
                        <th>Giới tính</th>
                        <th>Cấp bậc</th>
                        <th>Trạng thái</th>
                    </tr>
                    <?php
                        foreach($listnguoidung as $key => $user) {
                            extract($user);
                            ?><tr>
                                <td><input type="checkbox" name="ma_nguoi_dung[]" value="<?php echo $ma_nguoi_dung ?>" class="checkbox"></td>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $ho_ten ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $mat_khau ?></td>
                                <td><?php echo $so_dien_thoai ?></td>
                                <td><?php echo $dia_chi ?></td>
                                <td><img src="../public/upload/<?php echo $hinh ?>" width="90px" alt=""></td>
                                <td><?php echo $gioitinh ?></td>
                                <td><?php echo $cap_bac ?></td>
                                <td><?php echo $trangthai ?></td>
                                <td>
                                    <a href="?act=suanguoidung&id_nguoi_dung=<?= $ma_nguoi_dung ?>">
                                        <input type="button" value="Sửa"></a>
                                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=xoanguoidung&id_nguoi_dung=<?= $ma_nguoi_dung ?>"><input type="button" value="Xóa"></a>

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