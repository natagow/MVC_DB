<?php

define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');

require_once(VIEW . 'header.html');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action){
	case 'login':
		require_once(CONTROLLER . 'LoginController.php');
		$controller = new LoginController();
		break;
	case 'inscription':
		require_once(CONTROLLER . 'InscriptionController.php');
		$controller = new InscriptionController();
		break;
  case 'chatbox':
    require_once(CONTROLLER . 'ChatboxController.php');
		$controller = new ChatboxController();
    break;
  default:
  		require_once(CONTROLLER . 'LoginController.php');
			$controller = new LoginController();
  		break;
}

$controller->run();

?>
