<?php

define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');

require_once(VIEW . 'header.html');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action){
	case 'page1':
		require_once(VIEW . 'inscription.html');
		break;
	case 'page2':
		require_once(VIEW . 'login.html');
		break;
  case 'router':
    require_once(CONTROLLER , 'router.php');
    break;
  default:
  		require_once(CONTROLLER . '');
  		$controller = ;
  		break;
}

$controller->run();

?>
