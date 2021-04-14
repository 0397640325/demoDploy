<?php 
	/**
	 * 
	 */
	class Admin_model
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
		public function Home_admin()
		{
			# code...
		}
		public function Topproduct()
		{
			$sql = "SELECT order_detail.id_product, SUM(order_detail.qty) AS qty, product.name FROM order_detail, product, order_product WHERE order_product.id_order = order_detail.id_order AND (NOW()-30) < order_product.order_date < NOW() AND status IN(2,3) AND product.id_product = order_detail.id_product GROUP BY order_detail.id_product ORDER BY SUM(order_detail.qty) DESC LIMIT 5";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Count_user()
		{
			$sql = "SELECT count(id_user) AS count FROM users";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Count_order()
		{
			$sql = "SELECT count(id_order) AS count FROM order_product";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Count_product()
		{
			$sql = "SELECT count(id_product) AS count FROM product";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Count_comment()
		{
			$sql = "SELECT count(id_comment) AS count FROM comment";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Count_order_x()
		{
			$sql = "SELECT count(id_order) AS count FROM order_product WHERE status = '1'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Product()
		{
			$sql = "SELECT * FROM product, category, supplier WHERE product.id_category = category.id_category AND product.id_supplier = supplier.id_supplier ORDER BY id_product DESC";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Category()
		{
			$sql = "SELECT * FROM category";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Supplier()
		{
			$sql = "SELECT * FROM supplier";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Users()
		{
			$sql = "SELECT * FROM users, location WHERE users.id_location = location.id_location ORDER BY permission";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Detail_user($id_user)
		{
			$sql = "SELECT * FROM users, location WHERE users.id_location = location.id_location AND id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Get_dateofbirth($id_user)
		{
			$sql = "SELECT dateofbirth FROM users WHERE id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Reset_pass($id_user, $get_dateofbirth)
		{
			$sql = "UPDATE users SET password = '$get_dateofbirth' WHERE id_user = '$id_user'";
			$this->conn->query($sql);
		}

		public function Location()
		{
			$sql = "SELECT * FROM location";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Bill()
		{
			$sql = "SELECT order_product.*, users.fullname, status_order.*, payment_methods.methods FROM order_product, users, status_order, payment_methods WHERE payment_methods.id_methods = order_product.id_methods AND order_product.id_user = users.id_user AND status_order.status = order_product.status ORDER BY order_product.id_order DESC";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Detail_order($id_order)
		{
			$sql = "SELECT *,order_detail.qty AS qty_order FROM order_detail, product WHERE order_detail.id_product = product.id_product AND id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Bill_detail($id_order)
		{
			$sql = "SELECT order_product.*, users.fullname, status_order.*, payment_methods.methods, location.location FROM order_product, users, status_order, payment_methods, location WHERE payment_methods.id_methods = order_product.id_methods AND order_product.id_user = users.id_user AND location.id_location = order_product.id_location AND status_order.status = order_product.status AND id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Huydon($id_order)
		{
			$sql = "UPDATE order_product SET status = '4' WHERE id_order = '$id_order'";
			$this->conn->query($sql);
		}

		public function Chapnhan($id_order)
		{
			$sql = "UPDATE order_product SET status = '2' WHERE id_order = '$id_order'";
			$this->conn->query($sql);
		}

		public function Get_id_methods($id_order)
		{
			$sql = "SELECT id_methods FROM order_product WHERE  id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Get_price_order($id_order)
		{
			$sql = "SELECT price_order, id_user FROM order_product WHERE  id_order = '$id_order'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Get_debt_user($id_user)
		{
			$sql = "SELECT debt FROM users WHERE  id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query->fetch_assoc();
		}

		public function Debt($debt, $id_user)
		{
			$sql = "UPDATE users SET debt = '$debt' WHERE id_user = '$id_user'";
			$this->conn->query($sql);
		}

		public function Add_users($id_user, $password, $filename, $fullname, $dateofbirth, $adress, $permission, $mail, $phone, $room, $id_location)
		{
			$sql = "INSERT INTO users VALUES('$id_user', '$password', '$permission', '$fullname', '$dateofbirth', '$mail', '$phone', '$adress
			', '$room', '$id_location', '$filename', '0')";
			$this->conn->query($sql);
		}

		public function Update_users($id_user, $filename, $fullname, $dateofbirth, $adress, $permission, $mail, $phone, $room, $debt, $id_location)
		{
			if($filename == null){
				$sql = "UPDATE users SET permission = '$permission', fullname = '$fullname', dateofbirth = '$dateofbirth', mail = '$mail', phone = '$mail', phone = '$phone', adress = '$adress', room = '$room', id_location = '$id_location', debt = '$debt' WHERE id_user = '$id_user'";
			}
			else{
				$sql = "UPDATE users SET permission = '$permission', fullname = '$fullname', dateofbirth = '$dateofbirth', mail = '$mail', phone = '$mail', phone = '$phone', adress = '$adress', room = '$room', id_location = '$id_location', avata = '$filename', debt = '$debt' WHERE id_user = '$id_user'";
			}
			$this->conn->query($sql);
		}

		public function Add_product($name, $qty, $filename, $note, $price, $id_category, $id_supplier)
		{
			$sql = "INSERT INTO product VALUES('', '$name', '$qty', '$id_category', '$price', '$filename', '$id_supplier', '$note')";
			$this->conn->query($sql);
		}
		
		public function Add_category($name_category, $note_category)
		{
			$sql = "INSERT INTO category VALUES('', '$name_category', '$note_category')";
			$this->conn->query($sql);
		}
		
		public function Add_supplier($name_supplier, $adress, $phone_number)
		{
			$sql = "INSERT INTO supplier VALUES('', '$name_supplier', '$adress', '$phone_number')";
			$this->conn->query($sql);
		}
		
		public function Add_location($location, $note_location)
		{
			$sql = "INSERT INTO location VALUES('', '$location', '$note_location')";
			$this->conn->query($sql);
		}

		public function Edit_product($id_product)
		{
			$sql = "SELECT * FROM product WHERE id_product = '$id_product'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Update_product($id_product, $name, $qty, $filename, $note, $price, $id_category, $id_supplier)
		{
			if($filename == null){
				$sql = "UPDATE product SET name = '$name', qty = '$qty', note = '$note', price = '$price', id_category = '$id_category', id_supplier = '$id_supplier' WHERE id_product = '$id_product'";
			}else{
				$sql = "UPDATE product SET name = '$name', qty = '$qty', image = '$filename', note = '$note', price = '$price', id_category = '$id_category', id_supplier = '$id_supplier' WHERE id_product = '$id_product'";
			}
			$this->conn->query($sql);
		}

		public function Edit_category($id_category)
		{
			$sql = "SELECT * FROM category WHERE id_category = '$id_category'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Update_category($id_category, $name_category, $note_category)
		{
			$sql = "UPDATE category SET name_category = '$name_category', note_category = '$note_category' WHERE id_category = '$id_category'";
			$this->conn->query($sql);
		}

		public function Edit_supplier($id_supplier)
		{
			$sql = "SELECT * FROM supplier WHERE id_supplier = '$id_supplier'";
			$query = $this->conn->query($sql);
			return $query;
		}
		public function Update_supplier($id_supplier, $name_supplier, $adress, $phone_number)
		{
			$sql = "UPDATE supplier SET name_supplier = '$name_supplier', adress = '$adress', phone_number = '$phone_number' WHERE id_supplier = '$id_supplier'";
			$this->conn->query($sql);
		}

		public function Edit_users($id_user)
		{
			$sql = "SELECT * FROM users WHERE id_user = '$id_user'";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Delete_product($id_product)
		{
			$sql = "DELETE FROM product WHERE id_product = '$id_product'";
			$this->conn->query($sql);
		}
		
		public function Delete_category($id_category)
		{
			$sql = "DELETE FROM category WHERE id_category = '$id_category'";
			$this->conn->query($sql);
		}
		
		public function Delete_supplier($id_supplier)
		{
			$sql = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";
			$this->conn->query($sql);
		}
		
		public function Delete_users($id_user)
		{
			$sql = "DELETE FROM users WHERE id_user = '$id_user' AND permission != '1'";
			$this->conn->query($sql);
		}
		
		public function Delete_location($id_location)
		{
			$sql = "DELETE FROM location WHERE id_location = '$id_location'";
			$this->conn->query($sql);
		}

		public function Delete_order_detail($id_order)
		{
			$sql = "DELETE FROM order_detail WHERE id_order = '$id_order'";
			$this->conn->query($sql);
		}

		public function Delete_order($id_order)
		{
			$sql = "DELETE FROM order_product WHERE id_order = '$id_order'";
			$this->conn->query($sql);
		}

		public function Edit_location($id_location)
		{
			$sql = "SELECT * FROM location WHERE id_location = '$id_location'";
			$query = $this->conn->query($sql);
			return $query;
		}

		public function Update_location($id_location, $location, $note_location)
		{
			$sql = "UPDATE location SET location = '$location', note_location = '$note_location' WHERE id_location = '$id_location'";
			$this->conn->query($sql);
		}
	}


 ?>