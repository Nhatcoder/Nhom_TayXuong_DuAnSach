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
        <input type="hidden" name="sneaker_id" value="<?= $id_product ?>">  
        <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input type="text" name="ten_sp" class="form-control" value="<?= $name ?>" placeholder="Nhập tên sản phẩm...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá sản phẩm</label>
              <input type="text" name="gia" class="form-control" value="<?= $gia ?>" placeholder="Nhập giá...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Số lượng</label>
              <input type="text" name="so_luong" value="<?= $so_luong ?>" class="form-control" placeholder="Nhập số lượng...">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Hình ảnh</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="hinh" class="custom-file-input">
                  <input type="hidden" name="oldhinh" value="<?= $images ?>" class="custom-file-input">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div style="margin: 20px 0;">
                <img width="300px" src="../public/upload/<?= $images ?>" alt="">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mô tả</label>
              <textarea name="mo_ta" class="form-control" placeholder="Nhập mô tả..." id="" cols="30" rows="10"><?= $mo_ta ?></textarea>
            </div>
            <label for="exampleInputPassword1">Danh mục</label>
            <div class="form-group">
              <select class="custom-select" name="ma_danh_muc" id="">
                <option value="0">Chọn danh mục</option>
                <?php foreach ($listDanhmuc as $dm) : ?>
                  <option value="<?= $dm['id'] ?>" <?= $category_id == $dm['id']  ? 'selected' : '' ?> ><?= $dm['ten_danhmuc'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            <a href="?act=listsanpham" class="btn btn-success">Danh sách</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>