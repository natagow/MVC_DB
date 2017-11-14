<?php
require "Controllers/UserController.php";
require "Controllers/ChatboxController.php";
require "Helpers/Validation.php";
require "Model/Db.php";

define('CONTROLLER', 'Controllers/');


//if ($_SERVER['REQUEST_METHOD'] == "GET") {
//    $controllerAndMethode = explode("@", $action);
//    $controller = new $controllerAndMethode[0]();
//    $methode = $controllerAndMethode[1];
//} else {
//    $action = "UserController@index";
//}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
    $controllerAndMethode = explode("@", $action);
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
        require_once(CONTROLLER . 'ChatboxController.php');
        call_user_func_array([$controller, $methode], [$message]);
        break;
    case 'UserController@index':
        header("location:Views/login.php");
        break;
}
?>
