<?php 
	include('controllers/admin_controller.php');
	$admin_controller = new Admin_controller();

	session_start();
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action = '';
	}
	if(isset($_SESSION['id_user']) && $_SESSION['permission'] == 1){
		switch ($action) {
			case 'logout':
				$admin_controller->Logout();
				break;
			case 'search_iduser':
				$admin_controller->Search_iduser();
				break;
			case 'delete_product':
				$admin_controller->Delete_product();
				break;
			case 'delete_category':
				$admin_controller->Delete_category();
				break;
			case 'delete_supplier':
				$admin_controller->Delete_supplier();
				break;
			case 'delete_users':
				$admin_controller->Delete_users();
				break;
			case 'delete_location':
				$admin_controller->Delete_location();
				break;
			case 'delete_order':
				$admin_controller->Delete_order();
				break;
			case 'edit_product':
				$admin_controller->Edit_product();
				break;
			case 'update_product':
				$admin_controller->Update_product();
				break;
			case 'edit_category':
				$admin_controller->Edit_category();
				break;
			case 'edit_supplier':
				$admin_controller->Edit_supplier();
				break;
			case 'update_supplier':
				$admin_controller->Update_supplier();
				break;
			case 'ql_donhang':
				$admin_controller->Ql_donhang();
				break;
			case 'huydon':
				$admin_controller->Huydon();
				break;
			case 'detail_order':
				$admin_controller->Detail_order();
				break;
			case 'chapnhan':
				$admin_controller->Chapnhan();
				break;
			case 'add_category':
				$admin_controller->Add_category();
				break;
			case 'add_product':
				$admin_controller->Add_product();
				break;
			case 'add_supplier':
				$admin_controller->Add_supplier();
				break;
			case 'add_location':
				$admin_controller->Add_location();
				break;
			case 'ql_loaihang':
				$admin_controller->Ql_loaihang_admin();
				break;
			case 'ql_sanpham':
				$admin_controller->Ql_sanpham_admin();
				break;
			case 'ql_nhacungcap':
				$admin_controller->Ql_nhacungcap_admin();
				break;
			case 'ql_taikhoan':
				$admin_controller->QL_taikhoan();
				break;
			case 'reset_pass':
				$admin_controller->Reset_pass();
				break;
			case 'changepasss':
				$admin_controller->Changepasss();
				break;
			case 'edit_users':
				$admin_controller->Edit_users();
				break;
			case 'update_users':
				$admin_controller->Update_users();
				break;
			case 'add_users':
				$admin_controller->Add_users();
				break;
			case 'ql_diachicongty':
				$admin_controller->Ql_diachicongty();
				break;
			case 'edit_location':
				$admin_controller->Edit_location();
				break;
			case 'detail_user':
				$admin_controller->Detail_user();
				break;
			case 'update_location':
				$admin_controller->Update_location();
				break;
			
		default:
			$admin_controller->Home_admin();
			break;
			}
	}
	else{
		include_once("views/403.php");
	}


 ?>