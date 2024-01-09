<!-- menu -->
<?php include("menu.php") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thống kê</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thống kê</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>1<?= count($countOrder) ?></h3>

                            <p>Đơn hàng mới</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="index.php?act=listorder" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= number_format($doanhthu['total_sell'], 0, ',', '.') ?><sup style="font-size: 20px"> VNĐ</sup></h3>

                            <p>Tổng doanh thu</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="index.php?act=listorder" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= count($countAccount) ?></h3>

                            <p>Tài khoản</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="index.php?act=account" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= count($countProduct) ?></h3>

                            <p>Sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="index.php?act=listsanpham" class="small-box-footer">Xem <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <!-- TO DO List -->
    </section>
    <div>
        <div>
            <h3 class="caption-subject text-uppercase">
                Thống Kê Doanh Thu:
                <b id="text-date">365 Ngày qua</b>
            </h3>
            <select id="select-date" name="id_trangthai" class="select2_demo_3 form-control">
                <option value="7ngay"> 7 Ngày qua </option>
                <option value="28ngay"> 28 Ngày qua </option>
                <option value="60ngay"> 60 Ngày qua </option>
                <option value="90ngay"> 90 Ngày qua </option>
                <option value="180ngay"> 180 Ngày qua </option>
                <option selected value="365ngay"> 365 Ngày qua </option>
            </select>
            <div id="myfirstchart">
            </div>
        </div>
        <div style="    display: grid;
    grid-template-columns: 70% 30%;
    gap: 70px;">
            <div id="line-adwords">

            </div>
            <div>
                <h5>Thống kê sản phẩm bán chạy</h5>
                <div class="text-center">
                    <!-- Thống kê số lượng sản phẩm trong danh mục -->
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var myChart; // Khai báo biến biểu đồ ở mức toàn cục
        $(document).ready(function() {
            myChart = new Morris.Area({
                element: 'myfirstchart',

                xkey: 'date',

                ykeys: ['order', "sales", "quantity"],

                labels: ['Đơn hàng', 'Doanh Thu', 'Số lượng bán ra'],
                lineColors: ['#3498db', '#3fb394', '#01f'],
                // fillOpacity: 0,
                animate: 'bounce',
            });

            $('#select-date').change(function() {
                var thoigian = $(this).val();
                if (thoigian == '7ngay') {
                    var text = "7 ngày qua";
                } else if (thoigian == '28ngay') {
                    var text = "28 ngày qua";
                } else if (thoigian == '60ngay') {
                    var text = "60 ngày qua";
                } else if (thoigian == '90ngay') {
                    var text = "90 ngày qua";
                } else if (thoigian == '180ngay') {
                    var text = "180 ngày qua";
                } else if (thoigian == '365ngay') {
                    var text = "365 ngày qua";
                }
                $('#text-date').text(text);
                $.ajax({
                    url: "./ajaxthongke.php",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        thoigian: thoigian
                    },
                    success: function(data) {
                        console.log(data);
                        myChart.setData(data[0]); // Sử dụng biến biểu đồ đã khai báo ở trên
                        $('#text-date').text(text);
                        var options = {
                            series: <?= $soluong ?>,
                            chart: {
                                width: 350,
                                type: 'pie',
                            },
                            labels: <?= $tensp ?>,
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                        width: 200
                                    },
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }]
                        };
                        $('#chart').empty
                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                        chart.render();
                    }
                });

            })


            // Mặc định chạy 365 ngày
            function thongke() {
                var text = "365 ngày qua";
                $('#text-date').text(text);

                $.ajax({
                    url: "./ajaxthongke.php",
                    method: "POST",
                    dataType: "JSON",

                    success: function(data) {
                        console.log(typeof data)
                        console.log(data[0])

                        myChart.setData(data[0]); // Sử dụng biến biểu đồ đã khai báo ở trên
                        $('#text-date').text(text);
                        var options = {
                            series: <?= $soluong ?>,
                            chart: {
                                width: 350,
                                type: 'pie',
                            },
                            labels: <?= $tensp ?>,
                            responsive: [{
                                breakpoint: 480,
                                options: {
                                    chart: {
                                        width: 200
                                    },
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }]
                        };

                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                        chart.render();
                    }
                });
            }

            // Gọi hàm thongke để tạo biểu đồ ban đầu
            thongke();
        });

        var optionsLine = {
            chart: {
                height: 328,
                type: 'line',
                zoom: {
                    enabled: false
                },
                dropShadow: {
                    enabled: true,
                    top: 3,
                    left: 2,
                    blur: 4,
                    opacity: 1,
                }
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            //colors: ["#3F51B5", '#2196F3'],

            series: [
                <?= $maxprice ?>,
                <?= $minprice ?>,
                <?= $trungbinh ?>
            ],


            title: {
                text: 'Thống kê giá cả theo danh mục',
                align: 'left',
                offsetY: 25,
                offsetX: 5,
            },
            subtitle: {
                text: 'Tổng tiền',
                offsetY: 55,
                offsetX: 5
            },
            markers: {
                size: 8,
                strokeWidth: 0,
                hover: {
                    size: 9
                }
            },
            grid: {
                show: true,
                padding: {
                    bottom: 0
                }
            },

            labels: <?= $label; ?>,

            xaxis: {
                tooltip: {
                    enabled: false
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                offsetY: -20
            }
        }

        var chartLine = new ApexCharts(document.querySelector('#line-adwords'), optionsLine);
        chartLine.render();
    </script>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>