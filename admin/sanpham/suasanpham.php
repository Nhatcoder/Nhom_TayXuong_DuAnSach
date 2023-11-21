<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Sửa sản phẩm</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data" method="POST">
          <input type="hidden" name="ma_sach" value="<?= $ma_sach ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sách</label>
              <input type="text" name="ten_sach" class="form-control" value="<?= $ten_sach ?>" placeholder="Nhập tên sách...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá sách</label>
              <input type="text" name="gia" class="form-control" value="<?= $gia ?>" placeholder="Nhập giá...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Số lượng sách</label>
              <input type="text" name="so_luong" class="form-control" value="<?= $so_luong ?>" placeholder="Nhập số lượng...">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh sách</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="hinh" class="custom-file-input">
                  <input type="hidden" value="<?= $hinh ?>" name="oldhinh" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
              <div style="margin: 20px 0;">
                <img width="300px" src="../public/upload/<?= $hinh ?>" alt="">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mô tả</label>
              <textarea name="mo_ta" class="form-control" placeholder="Nhập mô tả..." id="" cols="30" rows="10"><?= $mo_ta ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nhà xuất bản</label>
              <input type="text" class="form-control" value="<?= $nha_xuat_ban ?>" name="nha_xuat_ban" id="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ngày xuất bản</label>
              <input type="date" class="form-control" value="<?= $ngay_xuat_ban ?>" name="ngay_xuat_ban" id="">
            </div>
            <label for="exampleInputPassword1">Danh mục</label>
                  <div class="form-group">
                    <select class="custom-select" name="ma_danh_muc" id="">
                      <option value="0">Chọn danh mục</option>
                      <?php foreach ($listDanhmuc as $dm) : ?>
                          <option value="<?= $dm['ma_danhmuc'] ?>" <?= $dm['ma_danhmuc'] == $ma_danh_muc ? "selected" : "" ?>><?= $dm['ten_danhmuc'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
                  <a href="index.php?act=listsanpham" class="btn btn-success">Danh sách</a>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>