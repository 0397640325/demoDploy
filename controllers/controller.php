<?php 
	/**
	 * 
	 */
	require('models/model.php');
	class Controller
	{
		
		private $model;
		public function __construct()
		{
			$this->model = new Model();
		}
		public function Login()
		{
			include_once("views/login.php");
		}
		public function Signin()
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$username = addslashes($username);
			$username = strip_tags($username);
			$password = addslashes($password);
			$password = strip_tags($password);

			if($username != "" && $password != ""){
				$password = md5($password);
				$signin = $this->model->Signin($username, $password);
				$num_rows = $signin->num_rows;
				if($num_rows > 0){
					while ($data = $signin->fetch_array()) {
						$_SESSION["id_user"] = $data['id_user'];
						$_SESSION["permission"] = $data['permission'];
						$_SESSION["fullname"] = $data['fullname'];
						$_SESSION["dateofbirth"] = $data['dateofbirth'];
						$_SESSION["mail"] = $data['mail'];
						$_SESSION["phone"] = $data['phone'];
						$_SESSION["adress"] = $data['adress'];
						$_SESSION["room"] = $data['room'];
						$_SESSION["location"] = $data['location'];
						$_SESSION["avata"] = $data['avata'];
						$_SESSION["debt"] = $data['debt'];
					}
					header("location:index.php");
				}
				else{
					$_SESSION['error'] = "(Tên đăng nhập hoặc mật khẩu không đúng!)";
					header("location:index.php?action=login");
				}
			}
		}
		public function Logout()
		{
			session_destroy();
			header("location:?action=login");
		}
		public function Homepage()
		{
			$hangmoi = $this->model->Hangmoi();
			$thucpham = $this->model->Thucpham();
			$hoamypham = $this->model->Hoamypham();
			$giayvesinh = $this->model->Giayvesinh();
			$docanhan = $this->model->Docanhan();
			$thecao = $this->model->Thecao();
			$vanphongpham = $this->model->Vanphongpham();
			// $id_user = $_SESSION['id_user'];
			// $qty = $this->model->Qty($id_user);
			// $tong = 0;
			// while ($qty_cart = $qty->fetch_array()) {
			// 	$tong =$tong + $qty_cart['price'] * $qty_cart['qty'];
			// }
			include_once("views/homepage.php");
		}
		public function Gioithieu()
		{
			include_once("views/gioithieu.php");
		}
		public function Search()
		{
			if(isset($_POST['search'])){
				$key = $_POST['key'];
			} else{
				$key = $_GET["key"];
			}
			$key = strip_tags($key);
			$key = addslashes($key);

			// $key = $_POST['key'];
			// $key = addslashes($key);
			// $key = strip_tags($key);
			$search = $this->model->Search($key);
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->home($key,$form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Hangmoi_home()
		{
			$key = "hàng mới";
			$search = $this->model->Hangmoi_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Hangmoi_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Thucpham_home()
		{
			$key = "mặt hàng thực phẩm";
			$search = $this->model->Thucpham_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Thucpham_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Hoamypham_home()
		{
			$key = "mặt hàng hóa mỹ phẩm";
			$search = $this->model->Hoamypham_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Hoamypham_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Khangiay_home()
		{
			$key = "mặt hàng khăn giấy";
			$search = $this->model->Khangiay_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Khangiay_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Docanhan_home()
		{
			$key = "mặt hàng đồ cá nhân";
			$search = $this->model->Docanhan_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Docanhan_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Thecao_home()
		{
			$key = "mặt hàng thẻ cào";
			$search = $this->model->Thecao_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Thecao_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Vanphongpham_home()
		{
			$key = "mặt hàng văn phòng phẩm";
			$search = $this->model->Vanphongpham_home();
			$tongso = $search->num_rows;
			$sotk1trang = 18;
			$sotrang = ceil($tongso/$sotk1trang);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}
			else{
				$page = 1;
			}
			$form = ($page-1)*$sotk1trang;
			$home = $this->model->Vanphongpham_homee($form,$sotk1trang);
			include_once("views/timkiem.php");
		}
		public function Infor()
		{
			$id_user = $_SESSION["id_user"];
			$infor = $this->model->Infor($id_user);
			include_once("views/infor.php");
		}
		public function Infor_product()
		{
			$id = $_GET['id'];
			$product = $this->model->Infor_product($id);
			$id_category = $this->model->Get_id_category($id)['id_category'];
			$products = $this->model->Products($id_category);
			$qty_comment = $this->model->Qty_comment($id)['qty_comment'];
			$comment = $this->model->Comment($id);
			// $id_user = $_SESSION['id_user'];
			// $qty = $this->model->Qty($id_user);
			// $tong = 0;
			// while ($qty_cart = $qty->fetch_array()) {
			// 	$tong =$tong + $qty_cart['price'] * $qty_cart['qty'];
			// }
			include_once("views/product.php");
		}
		public function Comment()
		{
			if(isset($_SESSION['id_user'])){
				$id_user = $_SESSION['id_user'];
				$star = $_POST['star'];
				$id_product = $_POST['id_product'];
				$comment = $_POST['comment'];
				$comment = addslashes($comment);
				$comment = strip_tags($comment);
				if($star != null && $comment != null){
					$this->model->Add_comment($id_user,$id_product,$comment,$star);
					header("location:?action=infor_product&id=$id_product");
				}
				else{
					echo "string";
				}
			}
		}
		public function Cart()
		{
			$id_user = $_SESSION['id_user'];
			$cart = $this->model->Cart($id_user);
			$qty = $this->model->Qty($id_user);
			$tong = 0;
			while ($qty_cart = $qty->fetch_array()) {
				$tong =$tong + $qty_cart['price'] * $qty_cart['qty'];
			}
			include_once("views/cart.php");
		}
		public function Add_to_cart()
		{
			$id_user = $_SESSION['id_user'];
			$id_product = $_GET['id'];
			$get_id_cart = $this->model->Get_id_cart($id_user);
			$get_id = $get_id_cart->num_rows;

			if($get_id == 0){
				$this->model->Add_id_cart($id_user);
				$get_id_cart = $this->model->Get_id_cart($id_user);
			}
			$id_cart = $get_id_cart->fetch_array()['id_cart'];
			$this->model->Add_cart($id_cart, $id_product);
			
			header("location:?action=cart");
		}
		public function Add_to_carts()
		{
			$id_user = $_SESSION['id_user'];
			$id_product = $_GET['id'];
			$get_id_cart = $this->model->Get_id_cart($id_user);
			$get_id = $get_id_cart->num_rows;

			if($get_id == 0){
				$this->model->Add_id_cart($id_user);
				$get_id_cart = $this->model->Get_id_cart($id_user);
			}
			$id_cart = $get_id_cart->fetch_array()['id_cart'];
			$qty_cart = $_POST['qty_cart'];
			$this->model->Add_carts($id_cart, $id_product, $qty_cart);
			header("location:?action=cart");
		}
		public function Update_carts()
		{
			$id_product = $_POST['id_product'];
			$qty_cart = $_POST['qty_cart'];
			$this->model->Update_carts($id_product, $qty_cart);
			header("location:?action=cart");
		}
		public function Delete_cart()
		{
			$id_product = $_GET['id'];
			$this->model->Delete_cart($id_product);
			header("location:?action=cart");
		}

		public function Order()
		{
			$id_user = $_SESSION['id_user'];
			$cart = $this->model->Cart($id_user);
			$qty = $this->model->Qty($id_user);
			$tong = 0;
			while ($qty_cart = $qty->fetch_array()) {
				$tong =$tong + $qty_cart['price'] * $qty_cart['qty'];
			}
			$location = $this->model->Location();
			include_once("views/order.php");
		}
		public function Order_ok()
		{
			$id_user = $_SESSION['id_user'];
			$address_order = $_POST['address_order'];
			$id_location = $_POST['id_location'];
			$id_methods = $_POST['id_methods'];
			$price_order = $_POST['price_order'];
			$note = $_POST['note'];
			$phone = $_POST['phone'];
			$this->model->Order_ok($id_user, $address_order, $id_location, $id_methods, $price_order, $note, $phone);
			$get_order = $this->model->Get_order($id_user);
			$id_order = $get_order->fetch_array()['id_order'];
			$get_id_cart = $this->model->get_id_cart($id_user);
			$id_cart = $get_id_cart->fetch_array()['id_cart'];
			$cart_detail = $this->model->Cart_detail($id_cart);
			foreach ($cart_detail as $key => $value) {
				$id_product = $value['id_product'];
				$qty = $value['qty'];
				$this->model->Add_to_order_detail($id_order, $id_product, $qty);
			}
			$this->model->Delete_cart_order($id_cart);

			$bill = $this->model->Bill($id_order);

			$bill_detail = $this->model->Bill_detail($id_order);

			$qty = $this->model->Qty_order($id_order);
			$tong = 0;
			while ($qty_order = $qty->fetch_array()) {
				$tong =$tong + $qty_order['price'] * $qty_order['qty'];
			}

			include_once("views/bill.php");
		}
		public function Bill()
		{
			$id_user = $_SESSION['id_user'];
			$bill = $this->model->Detail_bill($id_user);
			include_once("views/history.php");
		}
		public function Changepass()
		{
			include_once("views/changepass.php");
		}
		public function Confirm()
		{
			$id_order = $_GET['id_order'];
			$this->model->Confirm($id_order);
			header("location:?action=bill");
		}
	}

 ?>