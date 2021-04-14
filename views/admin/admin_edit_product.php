<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
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
    <script src="assets/ckeditor/ckeditor.js"></script>
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
                            <h4 class="page-title pull-left">Product</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><span>Product</span>
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
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <?php while ($show = $edit_product->fetch_assoc()) { ?>
                            <form action="admin.php?action=update_product" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-ml-12">
                                        <div class="row">
                                            <!-- Textual inputs start -->
                                            <div class="card-body">
                                                <h4 class="header-title">Thêm Sản Phẩm Mới</h4>
                                                <input name="id_product" type="hidden" value="<?php echo $show['id_product'] ?>">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Tên sản phẩm</label>
                                                    <input name="name" required="" value="<?php echo $show['name'] ?>" class="form-control" placeholder="VD: bánh mì" type="text" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Ảnh sản phẩm</label>
                                                    <img style="width: 121px; margin-left: 20px;" src="img/product/<?php echo $show['image'] ?>" alt="">
                                                    <div class="input-group mb-3">
                                                        <div class="custom-file">
                                                            <input name="photo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Chọn file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Số lượng nhập</label>
                                                    <input required="" name="qty" value="<?php echo $show['qty'] ?>" class="form-control" placeholder="VD: 100" type="number" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Mô tả</label>
                                                    <textarea required="" name="note" class="form-control" aria-label="With textarea"><?php echo $show['note'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-ml-12">
                                        <div class="row">
                                            <!-- Textual inputs start -->
                                            <div class="card-body">
                                                <h4 class="header-title">&nbsp;</h4>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label">Đơn giá</label>
                                                    <input required="" value="<?php echo $show['price'] ?>" name="price" class="form-control" placeholder="VD: 10,000" type="number" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Loại sản phẩm</label>
                                                    <select required="" name="id_category" style="height: calc(2.75rem + 2px)" class="custom-select">
                                                        <option disabled="disabled" selected="selected">Danh sách loại sản phẩm</option>
                                                        <?php while ($row = $category->fetch_assoc()) { ?>
                                                            <option <?php if($show['id_category'] == $row['id_category']){ echo 'selected="selected"';} ?> value="<?php echo $row['id_category'] ?>"><?php echo $row['name_category']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Nhà cung cấp</label>
                                                    <select required="" name="id_supplier" style="height: calc(2.75rem + 2px)" class="custom-select">
                                                        <option disabled="disabled" selected="selected">Danh sách nhà cung cấp</option>
                                                        <?php while ($row = $supplier->fetch_assoc()) { ?>
                                                            <option <?php if($show['id_supplier'] == $row['id_supplier']){ echo 'selected="selected"';} ?> value="<?php echo $row['id_supplier'] ?>"><?php echo $row['name_supplier']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Chỉnh Sửa</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Biểu Đồ Tỉ Lệ Nhập Xuất Hàng Trong 30 Ngày Gần Nhất</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
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
    <script>
        CKEDITOR.replace('note');
    </script>
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