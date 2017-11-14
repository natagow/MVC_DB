<?php

class ChatboxController
{

    public function __construct()
    {
        $this->db = new Db();
    }

    public function createMessage($message)
    {
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION["logged"])) {
            $this->db->newMessage($message);
            header("location:Views/Chatbox.php");
        } else {
            header("location:Views/inscription.php");
        }
    }

    public function getMessages()
    {
        $messages = $this->db->getMessages();
        header("location:location:Chatbox.php");
    }
}

?>
