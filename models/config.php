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