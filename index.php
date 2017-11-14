<?php
require "Controllers/UserController.php";
require "Controllers/ChatboxController.php";
require "Helpers/Validation.php";
require "Model/Db.php";
define('CONTROLLER', 'Controllers/');

print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "ok";
    extract($_POST);
    $controllerAndMethode = explode("@", $action);
    echo $action;
    $controller = new $controllerAndMethode[0]();
    $methode = $controllerAndMethode[1];
} else {
    $action = "UserController@index";
}


switch ($action) {
    case 'UserController@login':
        require_once(CONTROLLER . 'UserController.php');
        call_user_func_array([$controller, $methode], [$pseudo, $password]);
        break;
    case 'UserController@signup':
        require_once(CONTROLLER . 'UserController.php');
        call_user_func_array([$controller, $methode], [$pseudo, $password, $genre]);
        break;
    case 'ChatboxController@createMessage':
        echo "message";
        require_once(CONTROLLER . 'ChatboxController.php');
        call_user_func_array([$controller, $methode], [$message]);
        break;
    case 'UserController@index':
        require_once("Views/login.php");
        break;
}
?>
