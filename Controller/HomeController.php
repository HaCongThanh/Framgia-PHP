<?php

	include_once('Model/Home.php');

	/**
	* 
	*/
	class homeController {

		private $model;
		
		public function __construct() {
			$this->model = new home();
		}

		public function index() {
			if (isset($_SESSION['login'])) {
				include_once('View/Home/index.php');
			} else {
				header('Location: /index.php');
			}
			
		}

	}

 ?>