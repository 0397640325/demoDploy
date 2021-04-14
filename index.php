<?php 
	include('controllers/controller.php');
	include('controllers/admin_controller.php');
	$controller = new Controller();
	$admin_controller = new Admin_controller();

	session_start();
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != null){
		switch ($action) {
			case 'logout':
				$controller->Logout();
				break;
			case 'login':
				$controller->Infor();
				break;
			case 'infor_product':
				$controller->Infor_product();
				break;
			case 'comment':
				$controller->Comment();
				break;
			case 'cart':
				$controller->Cart();
				break;
			case 'add_to_cart':
				$controller->Add_to_cart();
				break;
			case 'add_to_carts':
				$controller->Add_to_carts();
				break;
			case 'update_carts':
				$controller->Update_carts();
				break;
			case 'delete_cart':
				$controller->Delete_cart();
				break;
			case 'order':
				$controller->Order();
				break;
			case 'order_ok':
				$controller->Order_ok();
				break;
			case 'search':
				$controller->Search();
				break;
			case 'bill':
				$controller->Bill();
				break;
			case 'changepass':
				$controller->Changepass();
				break;
			case 'hangmoi':
				$controller->Hangmoi_home();
				break;
			case 'thucpham':
				$controller->Thucpham_home();
				break;
			case 'hoamypham':
				$controller->Hoamypham_home();
				break;
			case 'khangiay':
				$controller->Khangiay_home();
				break;
			case 'docanhan':
				$controller->Docanhan_home();
				break;
			case 'thecao':
				$controller->Thecao_home();
				break;
			case 'vanphongpham':
				$controller->Vanphongpham_home();
				break;
			case 'confirm':
				$controller->Confirm();
				break;
			case 'gioithieu':
				$controller->Gioithieu();
				break;
			default:
				$controller->Homepage();
				break;
		}
	}
	else{
		switch ($action) {
			case 'login':
				$controller->Login();
				break;
			case 'search':
				$controller->Search();
				break;
			case 'signin':
				$controller->Signin();
				break;
			case 'infor_product':
				$controller->Infor_product();
				break;
			case 'cart':
				$controller->Login();
				break;
			case 'add_to_cart':
				$controller->Login();
				break;
			case 'add_to_carts':
				$controller->Login();
				break;
			case 'hangmoi':
				$controller->Hangmoi_home();
				break;
			case 'thucpham':
				$controller->Thucpham_home();
				break;
			case 'hoamypham':
				$controller->Hoamypham_home();
				break;
			case 'khangiay':
				$controller->Khangiay_home();
				break;
			case 'docanhan':
				$controller->Docanhan_home();
				break;
			case 'thecao':
				$controller->Thecao_home();
				break;
			case 'vanphongpham':
				$controller->Vanphongpham_home();
				break;
			case 'gioithieu':
				$controller->Gioithieu();
				break;
			default:
				$controller->Homepage();
				break;
		}
	}


 ?>