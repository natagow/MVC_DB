<?php include "./header.php" ?>
<div class="chatbox">

    <?php
    include "../Model/Db.php";
    $db = new Db();
    $messages = $db->getMessages();
    ?>

    <?php
    foreach ($messages as $message) {
        $time = substr($message->time, 11);
        echo "<p class='messages'>[$time] {$message->pseudo} : {$message->text}</p>";
    }
    ?>
    <form action="../index.php" method="post" class="chatForm">
        <input type="hidden" name="action" value="ChatboxController@createMessage"/>
        <input class="textarea" name="message" type="text" placeholder="Type here!"/>
        <div class="emojis"></div>
    </form>
</div>
<script>
    document.onkeydown = function (e) {
        var keyCode = e.keyCode;
        if (keyCode == 13) {
            $form = document.querySelector(".chatForm");
            $form.submit();
        }
    }
</script>
</body>
</html>
