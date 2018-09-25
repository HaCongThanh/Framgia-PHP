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
                $act = 'index';
            }
            
            switch ($act) {
                case 'index':
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
                $act = 'index';
            }
            
            switch ($act) {
                case 'index':
                    $login->index();
                    break;
                case 'login':
                    if (isset($_POST['submit'])) {
                        $arr_data = array(
                            'email'     => $_POST['email'],
                            'password'  => md5($_POST['password'])
                        );

                        $login->login($arr_data);
                    }
                    break;
                case 'logout':
                    $login->logout();
                    break;
                case 'create':
                    $login->create();
                    break;
                case 'store':
                    if (isset($_POST['submit'])) {
                        $arr_data = array(
                            'name'              => $_POST['name'],
                            'email'             => $_POST['email'],
                            'password'          => md5($_POST['password']),
                            'password_confirm'  => md5($_POST['password-confirm'])
                        );

                        $login->store($arr_data);
                    }
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