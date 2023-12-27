<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input type="text" name="ten_sp" class="form-control" placeholder="Nhập tên sản phẩm...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá sản phẩm</label>
              <input type="text" name="gia" class="form-control" placeholder="Nhập giá...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Số lượng</label>
              <input type="text" name="so_luong" class="form-control" placeholder="Nhập số lượng...">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="hinh" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nhà xuất bản</label>
              <input type="text" name="nha_xb" class="form-control" placeholder="Nhập nhà xuất bản...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ngày xuất bản</label>
              <input type="date" name="ngay_xb" class="form-control" placeholder="Nhập ngày xuất bản...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mô tả</label>
              <textarea name="mo_ta" class="form-control" placeholder="Nhập mô tả..." id="" cols="30" rows="10"></textarea>
            </div>
            <label for="exampleInputPassword1">Danh mục</label>
                  <div class="form-group">
                    <select class="custom-select" name="ma_danh_muc" id="">
                      <option value="0">Chọn danh mục</option>
                      <?php foreach ($listDanhmuc as $dm) : ?>
                          <option value="<?= $dm['ma_danhmuc'] ?>">
                              <?= $dm['ten_danhmuc'] ?>
                          </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                  <a href="?act=listsanpham" class="btn btn-success">Danh sách</a>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>