<?php 

	session_start();

	include_once('Model/Login.php');
	include_once('Model/User.php');

	/**
	* 
	*/
	class loginController {

		private $model;
		
		public function __construct() {
			$this->model = new login();
			$this->modelUser = new user();
		}

		public function getUser() {
			// if (empty($_SESSION['login'])) {
			// 	$remember = $_COOKIE['remember']; 

			//     if ($remember != null) {
			//     	$row = $this->model->rememberCheck($remember);

			//     	if ($row != null) {
			//     		$email = $row['email'];
			//     		$password = $row['password'];
			//     	} else {
			//     		$email = "";
			//     		$password = "";
			//     	}
			//     } else {
			//     	$email = "";
			//     	$password = "";
			//     }


			// }

			include_once('View/Login/Login.php');

			if (isset($_POST['submit'])) {
				$email = $_POST['email'];
				$password = md5($_POST['password']);

				$count = $this->model->login($email, $password);

				if ($count == 1) {
					$_SESSION['login'] = $email;

					// if (!empty($_POST['remember'])) {
					// 	$cookiehash = md5(sha1($email));

					// 	setcookie('remember', $cookiehash, time() + 3600*24*15, '/', '.dev.framgia.php');

					// 	$this->model->remember($cookiehash, $email);
					// } else {
					// 	setcookie('remember', "");
					// }

					$obj = 'email';
					$user = $this->modelUser->findUser($obj, $email);

					setcookie('msg', '<a href="#" class="logo" style="margin-left: 5%; color: black;"><font>Chào mừng ' . "<b>" . $user['name'] . "</b>" . ' quay trở lại Framgia - Education. Chúc bạn một ngày tốt lành!</font></a>', time() + 15);

	                header('Location: /index.php');
				} else {
					setcookie('error', '<center><font style="color: red;"><b><br>Đăng nhập không thành công!<br>Sai địa chỉ Email hoặc Password.</b></font></center>', time() + 5);

					header('Location: /index.php');
				}
			}				
		}

		public function logout() {
			session_destroy();

			header('Location: /index.php');
		}

		// public function change() {
		// 	if (!isset($_SESSION['login_blog'])) {
		// 		header('Location: index.php');
		// 	} else {
		// 		$email = $_SESSION['login_blog'];

		// 		$row = $this->model->find_email($email);

		// 		include_once('view/logIn_logOut/change_password.php');

		// 		if (isset($_POST['submit'])) {
		// 			$email = $_POST['email'];
		// 			$current = md5($_POST['current']);
		// 			$new = md5($_POST['new']);
		// 			$confirm = md5($_POST['confirm']);

		// 			$count = $this->model->login($email, $current);

		// 			if ($count == 1) {
		// 				if ($new == $confirm) {
		// 					$dataUser = array(
		// 						'id'			=> $row['id'],
		// 						'password'		=> $confirm
		// 					);

		// 					setcookie('msg', 'Thay đổi mật khẩu thành công!' , time() + 15);

		// 					include_once('view/general/mail/mailer.php');
		// 					$content = "Bạn vừa đổi mật khẩu của tài khoản trên Blog của Zent Group. Nếu là bạn, hãy bỏ qua email này. Nếu không phải bạn, hãy liên hệ với người quản trị!";
		// 					$title_mail = "Thông báo đổi mật khẩu";
		// 					// send_email($email, $title_mail, $content, "Zent Group");

		// 					$data = $this->model->update($dataUser);

		// 					header('Location: index.php');
		// 				} else {
		// 					echo "<p style='text-align: center;'>Xác nhận mật khẩu không chính xác!<br>Vui lòng nhập lại.</p>";
		// 				}
		// 			} else {
		// 				echo "<p style='text-align: center;'>Mật khẩu hiện tại không đúng!<br>Vui lòng nhập lại.</p>";
		// 			}
		// 		}				
		// 	}
		// }


	}

?>