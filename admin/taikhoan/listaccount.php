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
                        <th>Mật khẩu</th>
                        <th>Phân quyền</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($listaccount as $key => $account) {
                            extract($account);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="id_user[]" value="<?= $id ?>" class="checkbox"></td>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $name ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $address ?></td>
                                    <td>
                                        <?= $phone ?>
                                    </td>
                                    <td><?= $password ?></td>
                                    <td><?= $role_as == 1 ? "Admin" : "Người dùng" ?></td>

                                    <td>
                                        <a onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?act=deleteAccount&account_id=<?= $id ?>"><input type="button" value="Xóa"></a>

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