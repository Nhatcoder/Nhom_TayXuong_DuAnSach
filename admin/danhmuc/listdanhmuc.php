<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách danh mục</h3>
                </div>
                <!-- /.card-header -->
                <div style="margin: 10px 0;">
                    <a href="?act=themdanhmuc" class="btn btn-success">Thêm danh mục</a>
                    <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá không?')">Xóa</button>
                </div>
                <!-- Table start -->
                <table class="table table-primary">
                    <tr>                   
                        <th></th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($listDanhmuc as $key => $danhmuc) {
                            ?>
                                <tr>
                                    <th><input type="checkbox" name="id_checkbox[]" value="<?= $danhmuc['ma_danhmuc'] ?>" id=""></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $danhmuc['ten_danhmuc'] ?></td>
                                    <td><?= $danhmuc['trang_thai'] ? "Hiển thị" : "Ẩn" ?></td>
                                    <td>
                                        <a href="?act=suadanhmuc&id_danhmuc=<?= $danhmuc['ma_danhmuc'] ?>" class="btn btn-success">Sửa</a>
                                        <a href="?act=xoadanhmuc&id_danhmuc=<?= $danhmuc['ma_danhmuc'] ?>" class="btn btn-danger">Sửa</a>
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