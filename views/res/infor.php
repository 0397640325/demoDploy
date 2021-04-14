<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content='Học trực tuyến cùng với những Giảng viên hàng đầu. Học online 24/7 - Tự tin làm chủ tương lai. Siêu thị bài giảng trực tuyến lớn nhất Việt Nam' name='description'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<title>Trang quản lý tài khoản</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/account.css">
</head>
<body>
	<header>
		<?php include("res/header.php") ?>
	</header>
	<main>
		<br>
		<section class="profile">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#info">Thông tin cá nhân</a></li>
				<li><a data-toggle="tab" href="#security">Bảo mật</a></li>
				<li><a data-toggle="tab" href="#mycourse">Khóa học của tôi</a></li>
			</ul>
			<?php 
				foreach ($data as $row) {
			?>
			<div class="tab-content container">
				<div id="info" class="tab-pane fade in active">
					<div class="row">
						<div class="col-md-4 avatar" align="center">
							<img src="<?php echo base_url('res/uploads/').$row['avatar_user']; ?>" alt="Avatar">
							<br>
							<form action="" method="POST" role="form" enctype="multipart/form-data">
								<input type="file" accept=".png, .jpg, .jpeg" name="image" class="form-control" style="width: 80%;"><br>
								<button type="submit" class="btn btn-default" name="change_image" value="submit" style="width: 80%;">Thay đổi ảnh đại diện</button><br><br>
							Status: <b>Administrator</b>
							<br><a href="auth/money" class="btn btn-default">Nạp thêm tiền</a>
							
							</form>
						</div>
						<form action="" method="POST" role="form" enctype="multipart/form-data">
							<div class="col-md-8">
								<div class="alert alert-success" role="alert">'.$_SESSION['error'].'</div>
								<legend>Thông tin cơ bản</legend>
								<div class="form-group">
									<label for="">Họ tên đầy đủ:</label>
									<input type="text" class="form-control" name="name_user" id="" value="Phạm Công Danh">
									<br>
									<label for="">Nghề nghiệp:</label>
									<input type="text" class="form-control" name="job_user" id="" value="IT">
									<br>
									<label for="">Giới thiệu bản thân:</label>
									<textarea name="about_user" id="" class="form-control" rows="3">Đẹp trai</textarea>
								</div>
								<button type="submit" name="changeinfo" value="changeinfo" class="btn btn-info" style="float: right;">Lưu thay đổi</button>
								<a href="auth/logout"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn thực sự muốn đăng xuất?')">ĐĂNG XUẤT</button></a>
								<a href="base_url('admin_panel')"><button type='button' class='btn btn-success'>Admin Panel</button></a>
							</div>
						</form>
					</div>
				</div>
				<div id="security" class="tab-pane fade">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<div class="alert alert-success" role="alert">Lỗi</div>
							<form action="" method="POST" role="form">
								<legend>Đổi mật khẩu</legend>
								<div class="form-group">
									<label for="">Email: </label>
									<input type="text" class="form-control" id="" value="hau@gmail.com" disabled>
									<br>
									<label for="">Mật khẩu hiện tại: </label>
									<input type="password" class="form-control" name="oldpass" id="" placeholder="●●●●●●●●●●">
									<br>
									<label for="">Mật khẩu mới: </label>
									<input type="password" class="form-control" name="newpass" id="" placeholder="●●●●●●●●●●">
								</div>
								<button type="submit" name="changepass" value="changepass" class="btn btn-primary" style="float: right;">Lưu thay đổi</button>
							</form>
						</div>
					</div>
				</div>
				<?php } ?>
				<div id="mycourse" class="tab-pane fade">
					
				</div>
			</div>
		</section>
	</main>
	<footer>
		
	</footer>
	<script src="js/myjs.js" type="text/javascript"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>