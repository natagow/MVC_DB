<?php

define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');

require_once(VIEW . 'header.html');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action){
	case 'page1':
		require_once(VIEW . 'page1.php');
		break;
	case 'page2':
		require_once(VIEW . 'page2.php');
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
