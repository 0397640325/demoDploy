<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Tài khoản</title>
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
                            <h4 class="page-title pull-left">Account</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="admin.php">Home</a>
                                </li>
                                <li><span>Account</span>
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
                <!-- market value area start -->
                <div class="mt-5 mb-5">
                    <div class="col-lg-12 card card-body">
                        <div class="row">
                            <?php while ($row = $detail_user->fetch_assoc()) { ?>
                                <div class="col-lg-6 col-ml-12">
                                    <div class="row">
                                        <div class="card-body">
                                            <img style="max-width: 32.5%;" src="img/avata/<?php echo $row[ 'avata'] ?>" alt="">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Họ và tên</label>
                                                <input readonly="" value="<?php echo $row['fullname'] ?>" class="form-control" type="text" id="fullname">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Ngày sinh</label>
                                                <input readonly="" value="<?php echo date_format(date_create($row[ 'dateofbirth']), "d/m/Y") ?>" class="form-control" type="text" id="dateofbirth">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Địa chỉ</label>
                                                <input readonly="" value="<?php echo $row[ 'adress'] ?>" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Mail</label>
                                                <input readonly="" value="<?php echo $row[ 'mail'] ?>" class="form-control" type="email" id="example-text-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-ml-12">
                                    <div class="row">
                                        <div class="card-body">
                                            <h4 class="header-title">Thông Tin Tài Khoản: <b><?php echo $row['id_user'] ?></b></h4>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Mã nhân viên</label>
                                                <input readonly="" value="<?php echo $row['id_user'] ?>" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Tiền thiếu</label>
                                                <input readonly="" value="<?php echo number_format($row['debt']) ?> ₫" class="form-control" type="text" id="fullname">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Quyền tài khoản</label>
                                                <input readonly="" value="<?php if($row[ 'permission']==1){ echo "Admin";} else{ echo "User";} ?>" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Số điện thoại</label>
                                                <input readonly="" value="<?php echo $row[ 'phone'] ?>" class="form-control" type="number" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Số phòng</label>
                                                <input readonly="" value="<?php echo $row[ 'room'] ?>" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Địa chỉ nơi làm việc</label>
                                                <input readonly="" value="<?php echo $row[ 'location'] ?>" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="invoice-buttons text-right">
                                                <a href="#" class="invoice-btn">Lịch sử mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
<script>  
 $(document).ready(function(){  
  $('#id_user').change(function(){ 

   var brand_id = $(this).val();  
   $.ajax({  
    url:"views/load_data.php", 
    contentType: "application/json; charset=utf-8", 
    method:"POST",  
    data:{brand_id:brand_id},  
    success:function(data){  
     $('#fullname').val(data.json('a'));  
 }  
});  
});  
});  
</script>  
</body>

</html>