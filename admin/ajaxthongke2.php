<?php
include("../models/carbon_date/autoload.php");
include("../models/pdo.php");
include("../models/adminModel/product.php");

use Carbon\Carbon;

if (isset($_POST['thoigian'])) {
    $thoigian = $_POST['thoigian'];
} else {
    $thoigian = "";
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(365)->toDateString();
}

if ($thoigian == "7ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(7)->toDateString();
} else if ($thoigian == "28ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(28)->toDateString();
} else if ($thoigian == "60ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(60)->toDateString();
} else if ($thoigian == "90ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(90)->toDateString();
} else if ($thoigian == "180ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(180)->toDateString();
} else if ($thoigian == "365ngay") {
    $subdays = Carbon::now("Asia/Ho_Chi_Minh")->subdays(365)->toDateString();
} else {
    // Xử lý trường hợp $thoigian không hợp lệ ở đây nếu cần thiết
}

$now = Carbon::now("Asia/Ho_Chi_Minh")->toDateString();
$thoigian = $thoigian . ' ' . '00:00:00';
$now = $now . ' ' . '23:59:59';
// $sql = "SELECT * FROM tbl_thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY ngaydat ASC";
$sql = "SELECT
DATE(donhang.create_at) AS ngay,
COUNT(DISTINCT donhang.ma_don) AS tong_don_hang,
SUM(donhang.tong_gia) AS tong_tien_ngay,
SUM(chitiet_donhang.so_luong) AS tong_so_luong
FROM
donhang
INNER JOIN
chitiet_donhang ON donhang.ma_don = chitiet_donhang.ma_don
WHERE donhang.create_at BETWEEN '$thoigian' AND '$now'
AND donhang.trang_thai = 'completed'
GROUP BY
ngay
ORDER BY
ngay
";
$result = pdo_query($sql);

$chart_data = array();


foreach ($result as $row) {
    $chart_data[] = array(
        'date' => $row['ngay'],
        'order' => $row['tong_don_hang'],
        'sales' => $row['tong_tien_ngay'],
        'quantity' => $row['tong_so_luong'],
    );
}

$thong_ke_sp_ban_chay = tk_sp_bc($thoigian, $now);
$rr = [];
foreach ($thong_ke_sp_ban_chay as $value) {
    $rr = [$value['TenSanPham'], $value['TongSoLuong']];
}
// print_r($rr);


$ee = [$chart_data, $rr];
$ep = json_encode($ee);
echo $ep;