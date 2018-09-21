<?php
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	include_once('Model/Connection.php');

	/**
	* 
	*/
	class Model {

		public $conn = null;
		public $table = "";
		public $primaryKey = "id";
		
		function __construct() {
			$connection = new connection();
			$this->conn = $connection->conn;
		}







	}

 ?>