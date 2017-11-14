<?php

class Db
{

    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=chatbox', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function signUp($pseudo, $password, $sexe)
    {
        $req = $this->db->prepare("SELECT * FROM Users where pseudo = (?)");
        $req->execute([$pseudo]);
        if ($req->rowCount() == 1) {
            return false;
        }

        $req = $this->db->prepare("INSERT INTO Users (pseudo,password,sexe)VALUES  (?,?,?)");
        $req->execute([$pseudo, $password, $sexe]);
        return true;

    }

    public function login($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM Users where pseudo = (?)");
        $req->execute([$pseudo]);
        if ($req->rowCount() == 1) {
            $user = $req->fetchObject();

            if ($user->password == $password) {
                session_start();
                $_SESSION["user"] = $user;
                $_SESSION["logged"] = true;
                return true;
            } else {
                echo "nooooooooooooooo";
            }
        } else {
            return false;
        }
    }

    public function logout()
    {
        $_SESSION["logged"] = false;
        session_start();
        session_unset();
        session_destroy();
        header("location:../index.php");
    }

    public function newMessage($text)
    {
        session_start();
        $req = $this->db->prepare("INSERT INTO Messages (text,id_user)VALUES  (?,?)");
        $req->execute([$text, $_SESSION[id]]);
    }

    public function getMessages()
    {
        $messages = $this->db->query("SELECT * FROM Users,Messages Where Users.id = Messages.id_user ORDER BY TIME DESC ");
        $messageArray = [];
        while ($message = $messages->fetchObject()) {
            $messageArray[] = $message;
        }

        return $messageArray;
    }
}

?>

