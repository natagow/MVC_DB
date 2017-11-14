<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
    include "index.php";
}


?>