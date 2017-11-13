<?php

define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');

require_once(VIEW . 'header.html');

$action= isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action){
	case 'login':
		require_once(VIEW . 'login.html');
		break;
	case 'inscription':
		require_once(VIEW . 'inscription.html');
		break;
  case 'chatbox':
    require_once(CONTROLLER , 'chatbox.html');
    break;
  default:
  		require_once(CONTROLLER . 'login.html');
  		$controller = ;
  		break;
}

$controller->run();

?>
