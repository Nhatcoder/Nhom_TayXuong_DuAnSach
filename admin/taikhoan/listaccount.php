<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
    
    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách tài khoản</h3>
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
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Phân quyền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($listaccount as $key => $account) {
                            extract($account);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="id_user[]" value="<?= $ma_nguoi_dung ?>" class="checkbox"></td>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $ho_ten ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $dia_chi ?></td>
                                    <td>
                                        <?= $so_dien_thoai ?>
                                    </td>
                                    <td><?= $cap_bac == 1 ? "Admin" : "Người dùng" ?></td>

                                    <td>
                                        <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deleteAccount&account_id=<?= $ma_nguoi_dung ?>"><input type="button" value="Xóa"></a>

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