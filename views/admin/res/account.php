<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="img/avata/<?php echo $_SESSION['avata'] ?>" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['fullname'] ?> <i class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
            <a class="dropdown-item" href="admin.php?action=changepasss"><i class="fa fa-pencil"></i> Đổi mật khẩu</a>
            <a class="dropdown-item" href="?action=logout"><i class="fa fa-sign-out"></i> Đăng xuất</a>
        </div>
    </div>
</div>