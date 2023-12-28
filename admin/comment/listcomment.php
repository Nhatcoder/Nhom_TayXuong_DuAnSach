<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách bình luận</h3>
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
                        <th>Người dùng</th>
                        <th>Nội dung</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($loadComment as $key => $comment) {
                            ?>
                                <tr>
                                    <th><input type="checkbox" name="id_checkbox[]" value="<?= $comment['ma_binhluan'] ?>" id=""></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $comment['ho_ten'] ?></td>
                                    <td><?= $comment['noi_dung'] ?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có chắc muốn xoá không?')" href="index.php?act=xoacomment&id_comment=<?= $comment['ma_binhluan'] ?>" class="btn btn-danger">Xóa</a>
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