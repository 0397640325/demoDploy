<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Đơn hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <header>
                <?php include( "res/header.php") ?>
            </header>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Order</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><span>Order</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php include_once("res/account.php"); ?>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <?php while ($show = $bill->fetch_assoc()) { ?>
                                    <div class="invoice-area">
                                        
                                        <div class="invoice-head">
                                            <div class="row">
                                                <div class="iv-left col-6">
                                                    <span>Đơn hàng</span>
                                                </div>
                                                <div class="iv-right col-6 text-md-right">
                                                    <span>#<?php echo $show['id_order'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="invoice-address">
                                                    <h3><a href="admin.php?action=detail_user&id_user=<?php echo $show['id_user'] ?>"><?php echo $show['fullname'] ?></a></h3>
                                                    <h5><?php echo $show['phone'] ?></h5>
                                                    <p><?php echo $show['address_order'] ?> công ty: <?php echo $show['location'] ?></p>
                                                    <p><?php echo $show['methods'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                <ul class="invoice-date">
                                                    <li>Ngày đặt hàng : <?php echo date_format(date_create($show['order_date']), "d/m/Y") ?></li>
                                                    <li>Tình trạng đơn : <?php echo $show['note_status'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="invoice-table table-responsive mt-5">
                                            <table class="table table-bordered table-hover text-right">
                                                <thead>
                                                    <tr class="text-capitalize">
                                                        <th class="text-center" style="width: 5%;">STT</th>
                                                        <th class="text-left" style="width: 45%; min-width: 130px;">Tên Sán Phẩm</th>
                                                        <th style="min-width: 100px">Đơn Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; while ($row = $detail_order->fetch_assoc()) { $i++; ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $i ?></td>
                                                            <td class="text-left"><a href="index.php?action=infor_product&id=<?php echo $row['id_product'] ?>"><?php echo $row['name'] ?></a></td>
                                                            <td><?php echo number_format($row['price']) ?></td>
                                                            <td><?php echo $row['qty_order'] ?></td>
                                                            <td><?php echo number_format($row['price'] * $row['qty_order']) ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4">Tổng cộng :</td>
                                                        <td><?php echo number_format($show['price_order']) ?> ₫</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="invoice-buttons text-right">
                                        <a href="?action=chapnhan&id_order=<?php echo $show['id_order'] ?>" class="invoice-btn">Chấp Nhận</a>
                                        <a onclick="return confirm('Bạn có chắc muốn hủy đơn hàng này?')" href="?action=huydon&id_order=<?php echo $show['id_order'] ?>" class="invoice-btn">Hủy Đơn</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <?php include("res/footer.php") ?>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
