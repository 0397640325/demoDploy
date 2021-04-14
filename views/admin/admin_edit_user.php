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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
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
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="col-lg-12 card card-body">
                    <form action="admin.php?action=update_users" method="post" enctype="multipart/form-data">
                        <?php while ($show = $users->fetch_assoc()) { ?>
                        <div class="row">
                            <div class="col-lg-6 col-ml-12">
                                <div class="row">
                                    <!-- Textual inputs start -->
                                    <div class="card-body">
                                        <h4 class="header-title">Chỉnh Sửa Tài Khoản Mới</h4>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã nhân viên</label>
                                            <div class="input-group">
                                                <input name="id_user" value="<?php echo $show['id_user'] ?>" id="id_user" required="" class="form-control" placeholder="VD: V0977996" type="text" id="example-text-input">
                                                <div class="input-group-append">
                                                    <a href="#" class="btn btn-outline-secondary">Tìm kiếm</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Avata</label>
                                            <img style="width: 209px; margin-bottom: 20px; margin-left: 20px;" src="img/avata/<?php echo $show['avata'] ?>" alt="">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input name="photo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Chọn file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Họ và tên</label>
                                            <input required="" value="<?php echo $show['fullname'] ?>" name="fullname" class="form-control" placeholder="VD: Nguyễn Văn A" type="text" id="fullname">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Ngày sinh</label>
                                            <input required="" value="<?php echo $show['dateofbirth'] ?>" name="dateofbirth" class="form-control" placeholder="VD: 20/09/1997" type="date" id="dateofbirth">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Địa chỉ</label>
                                            <input required="" value="<?php echo $show['adress'] ?>" name="adress" class="form-control" placeholder="VD: Thanh Giang, Thanh Miện, Hải Dương" type="text" id="example-text-input">
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
                                            <label class="col-form-label">Quyền tài khoản</label>
                                            <select required="" name="permission" style="height: calc(2.75rem + 2px)" class="custom-select">
                                                <option disabled="" selected="selected">Chọn quyền cho tài khoản</option>
                                                <option <?php if($show['permission'] == 2){ echo 'selected="selected"';} ?> value="2">User</option>
                                                <option <?php if($show['permission'] == 1){ echo 'selected="selected"';} ?> value="1">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mail</label>
                                            <input required="" value="<?php echo $show['mail'] ?>" name="mail" class="form-control" placeholder="VD: email@email.com" type="email" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số điện thoại</label>
                                            <input required="" value="<?php echo $show['phone'] ?>" name="phone" class="form-control" placeholder="VD: 0987654321" type="number" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số phòng</label>
                                            <input required="" value="<?php echo $show['room'] ?>" name="room" class="form-control" placeholder="VD: 511-B09" type="text" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Số tiền thiếu</label>
                                            <input required="" value="<?php echo $show['debt'] ?>" name="debt" class="form-control" placeholder="VD: 511-B09" type="number" min="0" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Địa chỉ nơi làm việc</label>
                                            <select required="" name="id_location" style="height: calc(2.75rem + 2px)" class="custom-select">
                                                <option disabled="" selected="selected">Địa chỉ nơi làm việc</option>
                                                <?php while ($row = $location->fetch_assoc()) { ?>
                                                    <option <?php if($show['id_location'] == $row['id_location']){ echo 'selected="selected"';} ?> value="<?php echo $row['id_location'] ?>"><?php echo $row['location']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Chỉnh Sửa</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php } ?>
                    </form>
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