<?php

	include_once('Model/Model.php');

	/**
	* Login
	*/
	class login extends Model {
		public $table = "users";
		
		public function __construct(){
			parent::__construct();
		}

		public function login($email, $password) {
	        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

	        $result = $this->conn->query($query);

	        return mysqli_num_rows($result);
		}

		public function remember($cookiehash, $email) {
	        $query = "UPDATE users SET remember_token = '$cookiehash' WHERE email = '$email'";

	        return $result = $this->conn->query($query);
		}

		public function rememberCheck($remember) {
	        $query = "SELECT * FROM users WHERE remember_token = '$remember'";

	        $result = $this->conn->query($query);

	        return $result->fetch_assoc();
		}
	}

?>