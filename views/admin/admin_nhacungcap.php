<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/admin/icon/favicon.ico">
    <link rel="stylesheet" href="css/admin/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lt-themify-icons@1.1.0/themify-icons.css">
    <link rel="stylesheet" href="css/admin/metisMenu.css">
    <link rel="stylesheet" href="css/admin/owl.carousel.min.css">
    <link rel="stylesheet" href="css/admin/slicknav.min.css">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                            <h4 class="page-title pull-left"><a href="admin.php?action=ql_nhacungcap">Supplier</a></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><span>Supplier</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php include_once("res/account.php"); ?>
                </div>
            </div>
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->

                <!-- overview area end -->
                <!-- market value area start -->
                <div class="mt-5 mb-5">
                    <div class="col-lg-12 card card-body">
                        <div class="">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#danhsachnhacungcap" role="tab" aria-controls="home" aria-selected="true">Danh sách nhà cung cấp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#themnhacungcap" role="tab" aria-controls="profile" aria-selected="false">Thêm nhà cung cấp</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="danhsachnhacungcap" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body">
                                        <h4 class="header-title">Bảng Nhà Cung Cấp</h4>
                                        <div class="data-tables datatable-dark">
                                            <table id="dataTable3" class="text-center">
                                                <thead class="text-capitalize">
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Nhà Cung Cấp</th>
                                                        <th>Địa Chỉ</th>
                                                        <th>Số Điện Thoại NCC</th>
                                                        <th>Thao Tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; while ($row=$supplier->fetch_assoc()) { $i++ ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $row[ 'name_supplier'] ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $row[ 'adress'] ?>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <?php echo $row[ 'phone_number'] ?>
                                                        </td>
                                                        <td><a href="admin.php?action=edit_supplier&id_supplier=<?php echo $row['id_supplier'] ?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a> <a onclick="remove(event)" href="admin.php?action=delete_supplier&id_supplier=<?php echo $row['id_supplier'] ?>"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="themnhacungcap" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="admin.php?action=add_supplier" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-lg-6 col-ml-12">
                                            <div class="row">
                                                <!-- Textual inputs start -->
                                                <div class="card-body">
                                                    <h4 class="header-title">Thêm Nhà Cung Cấp Mới</h4>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Tên nhà cung cấp</label>
                                                        <input name="name_supplier" required="" class="form-control" placeholder="VD: Cong ty TNHH một thành viên" type="text" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Địa chỉ</label>
                                                        <input required="" name="adress" class="form-control" placeholder="VD: Thanh Giang, Thanh Miện, Hải Dương" type="text" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Số diện thoại</label>
                                                        <input required="" name="phone_number" class="form-control" placeholder="VD: 0987654321" type="number" id="example-text-input">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Thêm Mới</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area end -->
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
    <script src="js/admin/vendor/jquery-2.2.4.min.js"></script>
    <!-- sweetalert js -->
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/sweetalert/donhang.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/admin/popper.min.js"></script>
    <script src="js/admin/bootstrap.min.js"></script>
    <script src="js/admin/owl.carousel.min.js"></script>
    <script src="js/admin/metisMenu.min.js"></script>
    <script src="js/admin/jquery.slimscroll.min.js"></script>
    <script src="js/admin/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="js/admin/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="js/admin/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="js/admin/plugins.js"></script>
    <script src="js/admin/scripts.js"></script>
</body>

</html>