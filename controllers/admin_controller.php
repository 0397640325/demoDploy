<?php 

	/**
	 * 
	 */
	require("models/admin_model.php");
	class Admin_controller
	{
		
		public function __construct()
		{
			$this->model = new Admin_model();
		}

		public function Home_admin()
		{
			$count_user = $this->model->Count_user()['count'];
			$count_order = $this->model->Count_order()['count'];
			$count_order_x = $this->model->Count_order_x()['count'];
			$count_product = $this->model->Count_product()['count'];
			$count_comment = $this->model->Count_comment()['count'];
			$topproduct = $this->model->Topproduct();
			include("views/admin/admin_home.php");
		}

		public function Ql_sanpham_admin()
		{
			$product = $this->model->Product();
			$category = $this->model->Category();
			$supplier = $this->model->Supplier();
			include("views/admin/admin_sanpham.php");
		}
		
		public function Ql_loaihang_admin()
		{
			$category = $this->model->Category();
			include("views/admin/admin_loaihang.php");
		}
		
		public function Ql_nhacungcap_admin()
		{
			$supplier = $this->model->Supplier();
			include("views/admin/admin_nhacungcap.php");
		}
		
		public function QL_taikhoan()
		{
			$location = $this->model->Location();
			$users = $this->model->Users();
			include("views/admin/admin_taikhoan.php");
		}

		public function Reset_pass()
		{
			$id_user = $_GET['id_user'];
			$get_dateofbirth = $this->model->Get_dateofbirth($id_user)['dateofbirth'];
			$get_dateofbirth = date_format(date_create($get_dateofbirth), "d/m/Y");
			$get_dateofbirth = md5($get_dateofbirth);
			$this->model->Reset_pass($id_user, $get_dateofbirth);
			header("location:admin.php?action=ql_taikhoan");
		}

		public function Changepasss()
		{
			$id_user = $_SESSION['id_user'];
			include_once("views/admin/admin_changepass.php");
		}

		public function Detail_user()
		{
			$id_user = $_GET['id_user'];
			$detail_user = $this->model->Detail_user($id_user);
			include_once("views/admin/admin_detail_user.php");
		}
		
		public function Ql_diachicongty()
		{
			$location = $this->model->Location();
			include("views/admin/admin_diachicongty.php");
		}

		public function Ql_donhang()
		{
			$bill = $this->model->Bill();
			include_once("views/admin/admin_donhang.php");
		}

		public function Huydon()
		{
			$id_order = $_GET['id_order'];
			$this->model->Huydon($id_order);
			header("location: ?action=ql_donhang");
		}

		public function Detail_order()
		{
			$id_order = $_GET['id_order'];
			$bill = $this->model->Bill_detail($id_order);
			$detail_order = $this->model->Detail_order($id_order);
			include_once("views/admin/admin_detail_order.php");
		}

		public function Chapnhan()
		{
			$id_order = $_GET['id_order'];
			$id_methods = $this->model->Get_id_methods($id_order)['id_methods'];
			if($id_methods == 2){
				$price_order = $this->model->Get_price_order($id_order)['price_order'];
				$id_user = $this->model->Get_price_order($id_order)['id_user'];
				$debt = $this->model->Get_debt_user($id_user)['debt'];
				$debt = ($price_order + $debt);
				$this->model->Debt($debt, $id_user);
			}
			$this->model->Chapnhan($id_order);
			header("location: ?action=ql_donhang");
		}

		public function Add_users()
		{
			$id_user = $_POST['id_user'];
			$id_user = strip_tags($id_user);
			$id_user = addslashes($id_user);
			move_uploaded_file($_FILES["photo"]["tmp_name"], "img/avata/" . $_FILES["photo"]["name"]);
			$filename = $_FILES["photo"]["name"];
			$password = $_POST['password'];
			$password = strip_tags($password);
			$password = addslashes($password);
			$fullname = $_POST['fullname'];
			$fullname = strip_tags($fullname);
			$fullname = addslashes($fullname);
			$dateofbirth = $_POST['dateofbirth'];
			$dateofbirth = strip_tags($dateofbirth);
			$dateofbirth = addslashes($dateofbirth);
			$adress = $_POST['adress'];
			$adress = strip_tags($adress);
			$adress = addslashes($adress);
			$permission = $_POST['permission'];
			$permission = strip_tags($permission);
			$permission = addslashes($permission);
			$mail = $_POST['mail'];
			$mail = strip_tags($mail);
			$mail = addslashes($mail);
			$phone = $_POST['phone'];
			$phone = strip_tags($phone);
			$phone = addslashes($phone);
			$room = $_POST['room'];
			$room = strip_tags($room);
			$room = addslashes($room);
			$id_location = $_POST['id_location'];
			$id_location = strip_tags($id_location);
			$id_location = addslashes($id_location);
			if ($id_user != null && $password != null && $filename != null && $fullname != null && $dateofbirth != null && $adress != null && $permission != null && $mail != null && $phone != null && $room != null && $id_location != null) {
				$password = md5($password);
				$this->model->Add_users($id_user, $password, $filename, $fullname, $dateofbirth, $adress, $permission, $mail, $phone, $room, $id_location);
				header("location: ?action=ql_taikhoan");
			}
			else{
				echo "Không được bỏ trống";
			}
		}

		public function Update_users()
		{
			$id_user = $_POST['id_user'];
			$id_user = strip_tags($id_user);
			$id_user = addslashes($id_user);
			move_uploaded_file($_FILES["photo"]["tmp_name"], "img/avata/" . $_FILES["photo"]["name"]);
			$filename = $_FILES["photo"]["name"];
			$fullname = $_POST['fullname'];
			$fullname = strip_tags($fullname);
			$fullname = addslashes($fullname);
			$dateofbirth = $_POST['dateofbirth'];
			$dateofbirth = strip_tags($dateofbirth);
			$dateofbirth = addslashes($dateofbirth);
			$adress = $_POST['adress'];
			$adress = strip_tags($adress);
			$adress = addslashes($adress);
			$permission = $_POST['permission'];
			$permission = strip_tags($permission);
			$permission = addslashes($permission);
			$mail = $_POST['mail'];
			$mail = strip_tags($mail);
			$mail = addslashes($mail);
			$phone = $_POST['phone'];
			$phone = strip_tags($phone);
			$phone = addslashes($phone);
			$room = $_POST['room'];
			$room = strip_tags($room);
			$room = addslashes($room);
			$debt = $_POST['debt'];
			$debt = strip_tags($debt);
			$debt = addslashes($debt);
			$id_location = $_POST['id_location'];
			$id_location = strip_tags($id_location);
			$id_location = addslashes($id_location);
			if ($id_user != null && $fullname != null && $dateofbirth != null && $adress != null && $permission != null && $mail != null && $phone != null && $room != null && $id_location != null) {
				$this->model->Update_users($id_user, $filename, $fullname, $dateofbirth, $adress, $permission, $mail, $phone, $room, $debt, $id_location);
				header("location: ?action=ql_taikhoan");
			}
			else{
				echo "Không được bỏ trống";
			}
		}

		public function Add_product()
		{
        	/** if($_SERVER["REQUEST_METHOD"] == "POST"){
		    	// Kiểm tra quá trình upload file có bị lỗi gì không ?
		    	if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
		    		// Mảng chưa định dạng file cho phép
		        	$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
		        	// Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
		        	$filename = $_FILES["photo"]["name"];
		        	$filetype = $_FILES["photo"]["type"];
		        	$filesize = $_FILES["photo"]["size"];
		    
		        	// Kiểm tra định dạng file .jpg, png,...
		        	echo $ext = pathinfo($filename, PATHINFO_EXTENSION);die();
		        	// Nếu không đúng định dạng file thì báo lỗi
		        	if(!array_key_exists($ext, $allowed)){
		        		die("Lỗi : Vui lòng chọn đúng định dang file.");
		    	    }
		    
		    	    // Cho phép kích thước tối đa của file là 5MB
		    	    $maxsize = 5 * 1024 * 1024;
		    	    // Nếu kích thước lớn hơn 5MB thì báo lỗi
		    	    if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
		    
		    	    // Kiểm tra file ok hết chưa
		    	    if(in_array($filetype, $allowed)){
		    	        // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
		    	        if(file_exists("img/product/" . $_FILES["photo"]["name"])){
		    	            echo $_FILES["photo"]["name"] . " đã tồn tại";
		    	        } else{
		    	        	// Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
		    	            move_uploaded_file($_FILES["photo"]["tmp_name"], "img/product/" . $_FILES["photo"]["name"]);
		        	        // Thông báo thành công
		        	        echo "Upload file thành công";
		        	    } 
		        	} else{
		        	    echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
		        	}
		    	} else{
		    	    echo "Lỗi up load ảnh!";
		    	}
			} **/
			$name = $_POST['name'];
			$name = strip_tags($name);
			$name = addslashes($name);
    		$qty = $_POST['qty'];
    		$qty = strip_tags($qty);
			$qty = addslashes($qty);
    		move_uploaded_file($_FILES["photo"]["tmp_name"], "img/product/" . $_FILES["photo"]["name"]);
    		$filename = $_FILES["photo"]["name"];
    		$note = $_POST['note'];
    		$note = strip_tags($note);
			$note = addslashes($note);
    		$price = $_POST['price'];
    		$price = strip_tags($price);
			$price = addslashes($price);
    		$id_category = $_POST['id_category'];
    		$id_category = strip_tags($id_category);
			$id_category = addslashes($id_category);
    		$id_supplier = $_POST['id_supplier'];
    		$id_supplier = strip_tags($id_supplier);
			$id_supplier = addslashes($id_supplier);
			if ($name != null && $qty != null && $filename != null && $note != null && $price != null && $id_category != null && $id_supplier != null) {
				$this->model->Add_product($name, $qty, $filename, $note, $price, $id_category, $id_supplier);
				header("location: ?action=ql_sanpham");
			}
			else{
				echo "Không được bỏ trống";
			}
		}

		public function Add_category()
		{
			$name_category = $_POST['name_category'];
			$name_category = strip_tags($name_category);
			$name_category = addslashes($name_category);
			$note_category = $_POST['note_category'];
			$note_category = strip_tags($note_category);
			$note_category = addslashes($note_category);
			if($name_category != null && $note_category != null){
				$this->model->Add_category($name_category, $note_category);
				header("location: ?action=ql_loaihang");
			}
		}
		
		public function Add_supplier()
		{
			$name_supplier = $_POST['name_supplier'];
			$name_supplier = strip_tags($name_supplier);
			$name_supplier = addslashes($name_supplier);
			$adress = $_POST['adress'];
			$adress = strip_tags($adress);
			$adress = addslashes($adress);
			$phone_number = $_POST['phone_number'];
			$phone_number = strip_tags($phone_number);
			$phone_number = addslashes($phone_number);
			if($name_supplier != null && $adress != null && $phone_number != null){
				$this->model->Add_supplier($name_supplier, $adress, $phone_number);
				header("location: ?action=ql_nhacungcap");
			}
		}
		
		public function Add_location()
		{
			$location = $_POST['location'];
			$location = strip_tags($location);
			$location = addslashes($location);
			$note_location = $_POST['note_location'];
			$note_location = strip_tags($note_location);
			$note_location = addslashes($note_location);
			if($location != null && $note_location !=null){
				$this->model->Add_location($location, $note_location);
				header("location: ?action=ql_diachicongty");
			}
		}
		public function Edit_product()
		{
			$id_product = $_GET['id_product'];
			$edit_product = $this->model->Edit_product($id_product);
			$category = $this->model->Category();
			$supplier = $this->model->Supplier();
			include_once("views/admin/admin_edit_product.php");
		}
		public function Update_product()
		{
			$id_product = $_POST['id_product'];
			$name = $_POST['name'];
			$name = strip_tags($name);
			$name = addslashes($name);
    		$qty = $_POST['qty'];
    		$qty = strip_tags($qty);
			$qty = addslashes($qty);
    		move_uploaded_file($_FILES["photo"]["tmp_name"], "img/product/" . $_FILES["photo"]["name"]);
    		$filename = $_FILES["photo"]["name"];
    		$note = $_POST['note'];
    		$note = strip_tags($note);
			$note = addslashes($note);
    		$price = $_POST['price'];
    		$price = strip_tags($price);
			$price = addslashes($price);
    		$id_category = $_POST['id_category'];
    		$id_category = strip_tags($id_category);
			$id_category = addslashes($id_category);
    		$id_supplier = $_POST['id_supplier'];
    		$id_supplier = strip_tags($id_supplier);
			$id_supplier = addslashes($id_supplier);
			if ($name != null && $qty != null && $note != null && $price != null && $id_category != null && $id_supplier != null) {
				$this->model->Update_product($id_product, $name, $qty, $filename, $note, $price, $id_category, $id_supplier);
				header("location: ?action=ql_sanpham");
			}
			else{
				echo "string";
			}
		}
		public function Edit_category()
		{
			$id_category = $_GET['id_category'];
			$category = $this->model->Edit_category($id_category);
			include_once("views/admin/admin_edit_category.php");
		}
		public function Update_category()
		{
			$id_category = $_POST['id_category'];
			$name_category = $_POST['name_category'];
			$name_category = strip_tags($name_category);
			$name_category = addslashes($name_category);
			$note_category = $_POST['note_category'];
			$note_category = strip_tags($note_category);
			$note_category = addslashes($note_category);
			if($name_category != null && $note_category != null){
				$this->model->Update_category($id_category, $name_category, $note_category);
				header("location: ?action=ql_loaihang");
			}else{
				echo "Không được để trống!";
			}
		}

		public function Edit_supplier()
		{
			$id_supplier = $_GET['id_supplier'];
			$supplier = $this->model->Edit_supplier($id_supplier);
			include_once("views/admin/admin_edit_supplier.php");
		}
		public function Update_supplier()
		{
			$id_supplier = $_POST['id_supplier'];
			$name_supplier = $_POST['name_supplier'];
			$name_supplier = strip_tags($name_supplier);
			$name_supplier = addslashes($name_supplier);
			$adress = $_POST['adress'];
			$adress = strip_tags($adress);
			$adress = addslashes($adress);
			$phone_number = $_POST['phone_number'];
			$phone_number = strip_tags($phone_number);
			$phone_number = addslashes($phone_number);
			if($name_supplier != null && $adress != null && $phone_number != null){
				$this->model->Update_supplier($id_supplier, $name_supplier, $adress, $phone_number);
				header("location: ?action=ql_nhacungcap");
			}
			else{
				echo "Không được bỏ trống";
			}
		}

		public function Edit_users()
		{
			$id_user = $_GET['id_user'];
			$location = $this->model->Location();
			$users = $this->model->Edit_users($id_user);
			include_once("views/admin/admin_edit_user.php");
		}

		public function Delete_product()
		{
			$id_product = $_GET['id_product'];
			$this->model->Delete_product($id_product);
			header("location: ?action=ql_sanpham");
		}

		public function Delete_category()
		{
			$id_category = $_GET['id_category'];
			$this->model->Delete_category($id_category);
			header("location: ?action=ql_loaihang");
		}
		
		public function Delete_supplier()
		{
			$id_supplier = $_GET['id_supplier'];
			$this->model->Delete_supplier($id_supplier);
			header("location: ?action=ql_nhacungcap");
		}
		
		public function Delete_users()
		{
			$id_user = $_GET['id_user'];
			if($id_user != 1){
				$this->model->Delete_users($id_user);
				header("location: ?action=ql_taikhoan");
			}
			else{
				echo "Không thể xóa tài khoản Admin";
			}
		}

		public function Delete_location()
		{
			$id_location = $_GET['id_location'];
			$this->model->Delete_location($id_location);
			header("location: ?action=ql_diachicongty");
		}

		public function Delete_order()
		{
			$id_order = $_GET['id_order'];
			$this->model->Delete_order_detail($id_order);
			$this->model->Delete_order($id_order);
			header("location: admin.php?action=ql_donhang");
		}

		public function Edit_location()
		{
			$id_location = $_GET['id_location'];
			$location = $this->model->Edit_location($id_location);
			include_once("views/admin/admin_edit_location.php");
		}

		public function update_location()
		{
			$id_location = $_POST['id_location'];
			$location = $_POST['location'];
			$note_location = $_POST['note_location'];
			if($location != null && $note_location != null){
				$this->model->Update_location($id_location, $location, $note_location);
				header("location: ?action=ql_diachicongty");
			}
			else{
				echo "Không được để trống";
			}
		}

		public function Search_iduser()
		{
			$id_user = $_POST['id_user'];

		}
		public function Logout()
		{
			session_destroy();
			header("location: index.php?action=login");
		}
	}

 ?>