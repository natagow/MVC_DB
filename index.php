<?php
require "Controllers/UserController.php";
require "Controllers/ChatboxController.php";
require "Helpers/Validation.php";
require "Model/Db.php";

define('CONTROLLER', 'Controllers/');


if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_POST);
    extract($_GET);
    $controllerAndMethode = explode("@", $action);
    $controller = new $controllerAndMethode[0]();
    $methode = $controllerAndMethode[1];
} else {
    $action = "UserController@index";
}


switch ($action) {
    case 'UserController@login':
        require_once(CONTROLLER . 'UserController.php');
        if (isset($pseudo) && isset($pseudo)) {
            call_user_func_array([$controller, $methode], [$pseudo, $password]);
        } else {
            call_user_func_array([$controller, $methode], []);
        }
        break;
    case 'UserController@signup':
        require_once(CONTROLLER . 'UserController.php');
        call_user_func_array([$controller, $methode], [$pseudo, $password, $genre]);
        break;
    case 'ChatboxController@createMessage':
        require_once(CONTROLLER . 'ChatboxController.php');
        call_user_func_array([$controller, $methode], [$message]);
        break;
    case 'UserController@logout':
        call_user_func_array([$controller, $methode], []);
        break;
    case 'UserController@index':
        header("location:Views/login.php");
        break;
}
?>
