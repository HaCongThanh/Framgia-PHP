<?php 

	include_once('Model.php');

	/**
	* Người dùng
	*/
	class user extends Model {
		public $table = "users";
		
		public function __construct(){
			parent::__construct();
		}

		public function index() {
			
		}
	}

?>