<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/admin/icon/favicon.ico">
    <link rel="stylesheet" href="css/admin/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lt-themify-icons@1.1.0/themify-icons.css">
    <link rel="stylesheet" href="css/admin/metisMenu.css">
    <link rel="stylesheet" href="css/admin/owl.carousel.min.css">
    <link rel="stylesheet" href="css/admin/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="css/admin/typography.css">
    <link rel="stylesheet" href="css/admin/default-css.css">
    <link rel="stylesheet" href="css/admin/styles.css">
    <link rel="stylesheet" href="css/admin/responsive.css">
    <!-- modernizr css -->
    <script src="js/admin/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include("res/menu-left.php") ?>
        <!-- main content area start -->
        <div class="main-content">
            <header>
                <?php include( "res/header.php") ?>
            </header>
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><a href="admin.php">Dashboard</a></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><span>Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php include_once("res/account.php"); ?>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="sales-report-area mb-5">
                </div>
                <!-- row area start -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <a href="admin.php?action=ql_taikhoan"><div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-user"></i> Tài khoản</div>
                                            <h2><?php echo $count_user ?></h2>
                                        </div></a>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <a href="admin.php?action=ql_sanpham"><div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-shopping-cart"></i> Sản phẩm</div>
                                            <h2><?php echo $count_product ?></h2>
                                        </div></a>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <a href="admin.php?action=ql_donhang"><div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-shopping-cart"></i> Đơn hàng chưa xác nhận</div>
                                            <h2><?php echo $count_order_x ?></h2>
                                        </div></a>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <a href="admin.php?action=ql_donhang"><div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-shopping-cart"></i> Đơn hàng</div>
                                            <h2><?php echo $count_order ?></h2>
                                        </div></a>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Live Crypto Price area start -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Top 5 sản phẩm bán chạy nhất tháng</h4>
                                <div class="cripto-live mt-5">
                                    <ul>
                                        <?php $i = 0; while ($row = $topproduct->fetch_assoc()) { $i++; ?>
                                            <li>
                                                <div class="icon b"><?php echo $i ?></div> <a href="index.php?action=infor_product&id=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Live Crypto Price area end -->
                </div>
                <!-- row area end -->
                <div class="row mt-5">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Thống kê nhập/xuất hàng</h4>
                                <div id="salesanalytic"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Biểu đồ tỉ lệ nhập xuất hàng trong 30 ngày gần nhất</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xl-9 col-ml-8 col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Thống kê nhập/xuất hàng</h4>
                                <div id="salesanalytic"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
        <footer>
            <?php include("res/footer.php") ?>
        </footer>
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="js/admin/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/admin/popper.min.js"></script>
    <script src="js/admin/bootstrap.min.js"></script>
    <script src="js/admin/owl.carousel.min.js"></script>
    <script src="js/admin/metisMenu.min.js"></script>
    <script src="js/admin/jquery.slimscroll.min.js"></script>
    <script src="js/admin/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="js/admin/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="js/admin/highcharts.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="js/admin/serial.js"></script>
    <script src="js/admin/export.min.js"></script>
    <script src="js/admin/light.js"></script>
    <!-- start zingchart js -->
    <script src="js/admin/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="js/admin/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="js/admin/pie-chart.js"></script>
    <!-- others plugins -->
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <script src="js/admin/plugins.js"></script>
    <script src="js/admin/scripts.js"></script>
</body>

</html>