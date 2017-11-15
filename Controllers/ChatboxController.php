<?php

class ChatboxController
{

    public function __construct()
    {
        $this->db = new Db();
        $this->validation = new Validation();
    }

    public function createMessage($message)
    {
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION["logged"])) {
            if ($this->validation->messageSize($message)) {
                $this->db->newMessage(htmlentities($message));
                header("location:Views/Chatbox.php");
            }
            header("location:Views/Chatbox.php");
        } else {
            header("location:Views/inscription.php");
        }
    }

}

?>
