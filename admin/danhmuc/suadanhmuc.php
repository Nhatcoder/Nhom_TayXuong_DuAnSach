<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Sửa danh mục sách</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST">
          <input type="hidden" name="ma_danhmuc" value="<?= $ma_danhmuc ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên danh mục</label>
              <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $ten_danhmuc ?>" name="ten_danh_muc" placeholder="Nhập tên danh mục...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Trạng thái</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="trang_thai" id="exampleCheck1" value="1" <?= $trang_thai ? "checked" : "" ?>>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
          </div>
        </form>
      </div>


    </div>
  </div>
</div>