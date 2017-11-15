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

    public function login($pseudo = null, $password = null)
    {

        if ($this->db->login($pseudo, $password)) {
            header("location:Views/chatbox.php");
            exit();
        }
        header("location:Views/login.php");
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
        $this->db->logout();
        header("location:Views/login.php");
    }
}
?>
