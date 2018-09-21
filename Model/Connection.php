<?php 

	class connection {
		
		public function __construct() {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "framgia_php";

			// Tạo ra kết nối đến CSDL connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);

			$this->conn->set_charset("utf8");

			//  Kiểm tra kết nối
			if ($this->conn->connect_error) {
				die("connect failed !" . $this->conn->connect_error);
			}

		}
	}
	
?>