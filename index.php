<?php
	
	include_once('Controller/LoginController.php');
	include_once('Controller/HomeController.php');

	$login = new loginController();
	$home = new homeController();

	if (isset($_SESSION['login'])) {
		if (isset($_GET['module'])) {
			$module = $_GET['module'];
		} else {
			$module = "home";
		}
	} else {
		$module = "login";
	}
	
	switch ($module) {
		case 'home':
			if (isset($_GET['act'])) {
				$act = $_GET['act'];
			} else {
				$act = 'homepage';
			}
			
			switch ($act) {
				case 'homepage':
					$home->index();
					break;
				
				default:
					# code...
					break;
			}
			break;

		case 'login':
			if (isset($_GET['act'])) {
				$act = $_GET['act'];
			} else {
				$act = 'login';
			}
			
			switch ($act) {
				case 'login':
					$login->getUser();
					break;
				case 'logout':
					$login->logout();
					break;
				case 'change':
					$login->change();
					break;
				
				default:
					# code...
					break;
			}
			break;

		default:
			# code...
			break;
	}

?>