<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/Assets/CSS/style.css">
    <title>Chatbox</title>
</head>

<body>
<div class="container">

    <form action="../index.php" method="post">
        <input type="hidden" name="action" value="ChatboxController@createMessage"/>
        <div class="send-wrap ">
            <textarea name="message" class="form-control send-message" rows="3" placeholder="Write a reply..."></textarea>
        </div>

        <div class="btn-panel">
            <a href="" class=" col-lg-3 btn   send-message-btn " role="button"><i class="fa fa-cloud-upload"></i> Add
                Files</a>
            <input type="submit" value="Send Message">
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>
