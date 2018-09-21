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
			include_once('View/Home/homepage.php');
		}

	}

 ?>