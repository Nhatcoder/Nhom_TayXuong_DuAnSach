<?php 
session_start();
include("../../models/pdo.php"); 


if (isset($_POST['bl'])) {
    $bl = $_POST['bl'];

    $idsp = $_POST['idsp'];
    $sql="INSERT INTO binhluan(ma_sach,ma_nguoidung, noi_dung) VALUES (?,?,?)";
    $result= pdo_execute($sql,$idsp,$_SESSION['user_id'], $bl);
    
}

$listbl='';
$output='';
$sql2="SELECT nguoidung.ho_ten AS ten_nguoi_binh_luan, binhluan.noi_dung, binhluan.ngay_binh_luan
FROM binhluan
INNER JOIN nguoidung ON binhluan.ma_nguoidung = nguoidung.ma_nguoi_dung";
$bllist= pdo_query($sql2);
// echo '<pre>';
// print_r($bllist);
foreach ($bllist as $key => $value) {
    
    $listbl.='<li class="mb-4 pb-5 border-bottom">
    <div class="d-flex align-items-center mb-3">
        <h6 class="mb-0">'.$value['ten_nguoi_binh_luan'].'</h6>
        <div class="text-yellow-darker ml-3">
            <small class="fas fa-star"></small>
            <small class="fas fa-star"></small>
            <small class="fas fa-star"></small>
            <small class="fas fa-star"></small>
            <small class="far fa-star"></small>
        </div>
    </div>
    <p class="mb-4 text-lh-md">'.$value['noi_dung'].'</p>
    <div class="text-gray-600 mb-4">'.date('d-m-Y', strtotime($value['ngay_binh_luan'])).'</div>
    <ul class="nav">
        <li class="mr-7">
            <a href="#" class="text-gray-600 d-flex align-items-center">
                <i class="text-dark font-size-5 flaticon-like-1"></i>
                <span class="ml-2">90</span>
            </a>
        </li>
        <li class="mr-7">
            <a href="#" class="text-gray-600 d-flex align-items-center">
                <i class="text-dark font-size-5 flaticon-dislike"></i>
                <span class="ml-2">10</span>
            </a>
        </li>
        <li class="mr-7">
            <a href="#" class="text-gray-600 d-flex align-items-center">
                <i class="text-dark font-size-5 flaticon-flag"></i>
            </a>
        </li>
    </ul>
</li>';
}
$output='<ul class="list-unstyled mb-8" id="listbl">'.$listbl.'</ul>';
echo $output;



?>