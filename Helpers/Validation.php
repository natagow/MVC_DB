<?php

class Validation
{

    public $errors = [];

    public function ids($pseudo, $password)
    {
        if (!preg_match("/^[0-9a-zA-Z_]{5,250}$/", $pseudo)) {
            $this->errors['pseudo'] = "Votre pseudo doit contenir au minimum 5 caractères";
        }
        if (!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
            $this->errors['password'] = "votre mot de passe doit contenir au moins 8 caractères avec au minimum une majuscule,une minuscule et 1 nombre ";
        }

        session_start();
        $_SESSION["errors"] = $this->errors;
        return;
    }

    /**
     * @return mixed
     */
    public function displayErrors()
    {
        return $_SESSION["errors"];
    }

    /**
     * @return mixed
     */
    public function clearErrors()
    {
        $_SESSION["errors"] = [];
        return;
    }
}

$validation = new Validation();
$validation->ids("g", "");
print_r($validation->displayErrors());
$validation->clearErrors();
print_r($validation->displayErrors());
