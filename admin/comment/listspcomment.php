<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">

    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách những sản phẩm có bình luận</h3>
                </div>
                <!-- /.card-header -->
               
                <!-- Table start -->
                <table class="table table-primary">
                    <tr>                   
                        
                        <th>STT</th>
                        <th>Tên sách</th>
                        <th>Ảnh sách</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach($loadComment as $key => $comment) {
                            ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $comment['ten_sach'] ?></td>
                                    <td><img width="100px" src="../public/upload/<?= $comment['hinh'] ?>" alt=""></td>
                                    <td>
                                        <a href="index.php?act=listspcomment&ma_sach=<?= $comment['ma_sach'] ?>" class="btn btn-danger">Xem</a>
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