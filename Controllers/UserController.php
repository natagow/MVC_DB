<?php

class UserController
{

    public $db;
    public $validation;

    public function __construct()
    {
        $this->db = new Db();
        $this->validation = new Validation();
    }

    public function index()
    {
        header("location:Views/login.php");
    }

    public function login($pseudo, $password)
    {
        echo  "1";
        if ($this->db->login($pseudo, $password)) {
            echo "2";
            header("location:Views/chatbox.php");
            return;
        }
        include "Views/login.php";
    }

    public function signup($pseudo, $password, $sexe)
    {
        if ($this->validation->ids($pseudo, $password) > 0) {
            header("location:Views/inscription.php");
            return;
        } else if ($this->db->signUp($pseudo, $password, $sexe)) {
            header("location:Views/login.php");
        } else {
            header("location:Views/inscription.php");
        }
    }


    public function logout()
    {

    }

}

?>
