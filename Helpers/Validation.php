<?php

class Validation
{

    public $errors = [];

    public function ids($pseudo, $password)
    {
        if (!preg_match("/^[0-9a-zA-Z_]{5,250}$/", $pseudo)) {
            $this->errors['pseudo'] = "Votre pseudo doit contenir au minimum 5 caractères";
        }
        if (!preg_match("/^[a-z0-9_-]{5,}$/", $password)) {
            $this->errors['password'] = "votre mot de passe doit contenir au moins 8 caractères avec au minimum une majuscule,une minuscule et 1 nombre ";
        }
        session_start();
        $_SESSION["errors"] = $this->errors;
        return count($this->errors);
    }

    public function messageSize($message)
    {
        $message = trim($message);
        return strlen($message) > 0 ? true : false;
    }

    public function displayErrors()
    {
        return $_SESSION["errors"];
    }

    public function clearErrors()
    {
        $_SESSION["errors"] = [];
        return;
    }
}
