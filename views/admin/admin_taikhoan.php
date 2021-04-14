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
                            <h4 class="page-title pull-left"><a href="admin.php?action=ql_taikhoan">Account</a></h4>
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
                        <div class="">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#danhsachtaikhoan" role="tab" aria-controls="home" aria-selected="true">Danh sách tài khoản</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#themtaikhoan" role="tab" aria-controls="profile" aria-selected="false">Thêm tài khoản</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="danhsachtaikhoan" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="card-body">
                                        <h4 class="header-title">Bảng Danh Sách Tài Khoản</h4>
                                        <div class="data-tables datatable-dark">
                                            <table id="dataTable3" class="text-center">
                                                <thead class="text-capitalize">
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Avata</th>
                                                        <th>Mã Nhân Viên</th>
                                                        <th>Tên Nhân Viên</th>
                                                        <th>Ngày Sinh</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Số Phòng</th>
                                                        <th>Địa Chỉ Công Ty</th>
                                                        <th>Tiền thiếu</th>
                                                        <th>Thao Tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=0; while ($row=$users->fetch_assoc()) { $i++ ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $i ?>
                                                        </td>
                                                        <a href="?action=detail_user&id_user=<?php echo $row['id_user'] ?>">
                                                            <td style="width: 10%">
                                                                <img style="border-radius: 50%;" src="img/avata/<?php echo $row[ 'avata'] ?>" alt="">
                                                            </td>
                                                            <td>
                                                                <?php echo $row[ 'id_user'] ?>
                                                            </td>
                                                            <td style="text-align: left;">
                                                                <?php echo $row[ 'fullname'] ?>
                                                            </td>
                                                        </a>
                                                        <td>
                                                            <?php echo date_format(date_create($row[ 'dateofbirth']), "d/m/Y") ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $row[ 'phone'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row[ 'room'] ?>
                                                        </td>
                                                        <td style="text-align: left;">
                                                            <?php echo $row[ 'location'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo number_format($row['debt']) ?> ₫
                                                        </td>
                                                        <td><a title="Chi tiết" href="?action=detail_user&id_user=<?php echo $row['id_user'] ?>"><button class="btn btn-info"><i class="fa fa-reorder"></i></button></a> <a title="Sửa" href="admin.php?action=edit_users&id_user=<?php echo $row['id_user'] ?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a> <?php if($row['permission']==2){ ?><a title="Xóa" onclick="remove(event)" href="admin.php?action=delete_users&id_user=<?php echo $row['id_user'] ?>"> <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                        <?php } ?>
                                                        <a title="Reset password" onclick="reset(event)" href="admin.php?action=reset_pass&id_user=<?php echo $row['id_user'] ?>"><button class="btn btn-success"><span class="ti-loop"></span></button></a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="themtaikhoan" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="admin.php?action=add_users" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-lg-6 col-ml-12">
                                            <div class="row">
                                                <!-- Textual inputs start -->
                                                <div class="card-body">
                                                    <h4 class="header-title">Thêm Tài Khoản Mới</h4>
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="col-form-label">Mã nhân viên</label>
                                                            <div class="input-group">
                                                                <input name="id_user" id="id_user" required="" class="form-control" placeholder="VD: V0977996" type="text" id="example-text-input">
                                                                <div class="input-group-append">
                                                                    <a href="#" class="btn btn-outline-secondary">Tìm kiếm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Mật khẩu</label>
                                                        <input required="" name="password" class="form-control" placeholder="" type="password" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Avata</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input required="" name="photo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Chọn file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Họ và tên</label>
                                                        <input required="" name="fullname" class="form-control" placeholder="VD: Nguyễn Văn A" type="text" id="fullname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Ngày sinh</label>
                                                        <input required="" name="dateofbirth" class="form-control" placeholder="VD: 20/09/1997" type="date" id="dateofbirth">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Địa chỉ</label>
                                                        <input required="" name="adress" class="form-control" placeholder="VD: Thanh Giang, Thanh Miện, Hải Dương" type="text" id="example-text-input">
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
                                                            <option value="2">User</option>
                                                            <option value="1">Admin</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Mail</label>
                                                        <input required="" name="mail" class="form-control" placeholder="VD: email@email.com" type="email" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Số điện thoại</label>
                                                        <input required="" name="phone" class="form-control" placeholder="VD: 0987654321" type="number" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Số phòng</label>
                                                        <input required="" name="room" class="form-control" placeholder="VD: 511-B09" type="text" id="example-text-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label">Địa chỉ nơi làm việc</label>
                                                        <select required="" name="id_location" style="height: calc(2.75rem + 2px)" class="custom-select">
                                                            <option disabled="" selected="selected">Địa chỉ nơi làm việc</option>
                                                            <?php while ($row = $location->fetch_assoc()) { ?>
                                                                <option value="<?php echo $row['id_location'] ?>"><?php echo $row['location']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Thêm Mới</button>
                                                    <a href="#"><button class="btn btn-success mt-4 pr-4 pl-4">Hoặc Thêm Bằng File Excel</button></a>
                                                    </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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