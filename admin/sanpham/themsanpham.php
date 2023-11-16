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
              <label for="exampleInputEmail1">Tên sách</label>
              <input type="text" name="ten_sach" class="form-control" placeholder="Nhập tên sách...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá sách</label>
              <input type="text" name="gia" class="form-control" placeholder="Nhập giá...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Số lượng sách</label>
              <input type="text" name="so_luong" class="form-control" placeholder="Nhập số lượng...">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh sách</label>
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
              <label for="exampleInputPassword1">Mô tả</label>
              <textarea name="mo_ta" class="form-control" placeholder="Nhập mô tả..." id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nhà xuất bản</label>
              <input type="text" class="form-control" name="nha_xuat_ban" id="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ngày xuất bản</label>
              <input type="date" class="form-control" name="ngay_xuat_ban" id="">
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