<?php 
	/**
	 * 
	 */
	class Model
	{

		private $conn;
		public function __construct()
		{
			$host = "localhost";
			$username = "root";
			$password = "";
			$database = "dienthoai";

			$this->conn= new mysqli($host, $username, $password, $database) or die('Loi ket noi');
			$this->conn->set_charset("UTF8");
			//$this->conn->close();
		}
		public function Signin($username, $password)
		{
			$sql = "SELECT * FROM users, location WHERE users.id_user = '$username' AND password = '$password' AND users.id_location = location.id_location";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Infor($id_user)
		{
			$sql = "SELECT * FROM users, location WHERE users.id_user = '$id_user' AND users.id_location = location.id_location";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Search($key)
		{
			$sql = "SELECT * FROM product WHERE name LIKE '%$key%' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function home($key,$form,$sotk1trang){
			$sql = "SELECT * FROM product WHERE name LIKE '%$key%' ORDER BY id_product LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hangmoi_home()
		{
			$sql = "SELECT * FROM product ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hangmoi_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thucpham_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '1' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thucpham_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '1' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hoamypham_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '2' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hoamypham_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '2' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Khangiay_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '3' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Khangiay_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '3' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Docanhan_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '4' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Docanhan_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '4' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thecao_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '5' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thecao_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '5' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Vanphongpham_home()
		{
			$sql = "SELECT * FROM product WHERE id_category = '6' ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Vanphongpham_homee($form,$sotk1trang)
		{
			$sql = "SELECT * FROM product WHERE id_category = '6' ORDER BY id_product DESC LIMIT $form,$sotk1trang";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hangmoi()
		{
			$sql = "SELECT * FROM product ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thucpham()
		{
			$sql = "SELECT * FROM product WHERE id_category = '1' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Hoamypham()
		{
			$sql = "SELECT * FROM product WHERE id_category = '2' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Giayvesinh()
		{
			$sql = "SELECT * FROM product WHERE id_category = '3' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Docanhan()
		{
			$sql = "SELECT * FROM product WHERE id_category = '4' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Thecao()
		{
			$sql = "SELECT * FROM product WHERE id_category = '5' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Vanphongpham()
		{
			$sql = "SELECT * FROM product WHERE id_category = '6' ORDER BY id_product DESC LIMIT 4";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Cart($id_user)
		{
			$sql = "SELECT * FROM cart, product, cart_detail, users WHERE (product.id_product = cart_detail.id_product) AND (cart_detail.id_cart = cart.id_cart) AND (users.id_user = cart.id_user) AND users.id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Add_id_cart($id_user)
		{
			$sql = "INSERT INTO cart VALUES('', '$id_user')";
			$this->conn->query($sql);
		}
		public function Qty($id_user)
		{
			$sql = "SELECT * FROM cart, product, cart_detail, users WHERE (product.id_product = cart_detail.id_product) AND (cart_detail.id_cart = cart.id_cart) AND (users.id_user = cart.id_user) AND users.id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Get_id_cart($id_user)
		{
			$sql = "SELECT * FROM cart WHERE id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Add_cart($id_cart, $id_product)
		{
			$sql = "INSERT INTO cart_detail VALUES('$id_cart', '$id_product', '1')";
			$this->conn->query($sql);
		}
		public function Add_carts($id_cart, $id_product, $qty_cart)
		{
			$sql = "INSERT INTO cart_detail VALUES('$id_cart', '$id_product', '$qty_cart')";
			$this->conn->query($sql);
		}
		public function Delete_cart($id_product)
		{
			$sql = "DELETE FROM cart_detail where id_product = '$id_product'";
			$this->conn->query($sql);
		}
		public function Order_ok($id_user, $address_order, $id_location, $id_methods, $price_order, $note, $phone)
		{
			$sql = "INSERT INTO order_product VALUES('', '$id_user', '$address_order', '$id_location', '$id_methods', '$note', '$phone', NOW(), '$price_order', '1')";
			$this->conn->query($sql);
		}
		public function Get_order($id_user)
		{
			$sql = "SELECT MAX(id_order) AS id_order FROM order_product WHERE id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Add_to_order_detail($id_order, $id_product, $qty)
		{
			$sql = "INSERT INTO order_detail VALUES('$id_order', '$id_product', '$qty')";
			$this->conn->query($sql);
		}
		public function Bill($id_order)
		{
			$sql = "SELECT * FROM order_product, payment_methods WHERE order_product.id_methods = payment_methods.id_methods AND order_product.id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Bill_detail($id_order)
		{
			$sql = "SELECT * FROM product, order_detail WHERE product.id_product = order_detail.id_product AND order_detail.id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Qty_order($id_order)
		{
			$sql = "SELECT * FROM product, order_detail WHERE product.id_product = order_detail.id_product AND order_detail.id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Get_debt($id_user)
		{
			$sql = "SELECT debt FROM users WHERE id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Update_debt($id_user, $debt_update)
		{
			$sql = "UPDATE users SET debt = '$debt_update' WHERE id_user = '$id_user'";
			$this->conn->query($sql);
		}
		public function Delete_cart_order($id_cart)
		{
			$sql = "DELETE FROM cart_detail WHERE id_cart = '$id_cart'";
			$this->conn->query($sql);
		}
		public function Cart_detail($id_cart)
		{
			$sql = "SELECT * FROM cart_detail WHERE id_cart = '$id_cart'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Update_carts($id_product, $qty_cart)
		{
			$sql = "UPDATE cart_detail SET qty_cart = '$qty_cart' WHERE id_product = '$id_product'";
			$this->conn->query($sql);
		}
		public function Infor_product($id)
		{
			$sql = "SELECT * FROM product WHERE id_product = '$id'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Products($id_category)
		{
			$sql = "SELECT * FROM product WHERE id_category = '$id_category' LIMIT 8";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Get_id_category($id)
		{
			$sql = "SELECT id_category FROM product WHERE id_product = '$id'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}
		public function Comment($id)
		{
			$sql = "SELECT * FROM comment, users WHERE id_product = '$id' AND comment.id_user = users.id_user";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Qty_comment($id)
		{
			$sql = "SELECT COUNT(*) AS qty_comment FROM comment WHERE id_product = '$id'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}
		public function Add_comment($id_user,$id_product,$comment,$star)
		{
			$sql = "INSERT INTO comment VALUES('','$id_user','$id_product',NOW(),'$comment','$star')";
			$this->conn->query($sql);
		}
		public function Location()
		{
			$sql = "SELECT * FROM location";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Detail_bill($id_user)
		{
			$sql = "SELECT *, order_product.note AS note_order FROM order_product, location, payment_methods, status_order WHERE order_product.id_location = location.id_location AND payment_methods.id_methods = order_product.id_methods AND status_order.status = order_product.status AND id_user = '$id_user' ORDER BY id_order DESC";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Confirm($id_order)
		{
			$sql = "UPDATE order_product SET status = '3' WHERE id_order = '$id_order'";
			$this->conn->query($sql);
		}
	}

 ?>