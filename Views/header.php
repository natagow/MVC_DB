<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet DB</title>
    <link rel="stylesheet" href="Assets/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<header>
    <nav>
        <div class="principal">
            <div class="navBas">
                <div class="navLeftDown">
                    <h2>Projet<br/>DB</h2>
                </div>
            </div>
            <div class="navUp">
                <a href="https://github.com/natagow/MVC_DB"><img
                            src="http://icons.iconarchive.com/icons/limav/flat-gradient-social/64/Github-icon.png"
                            alt="Github logo" style="float: right;
margin-right: 215px; margin-top: -6px;"></a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img
                            src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/64/social-facebook-box-blue-icon.png"
                            alt="Github logo" style="float: right;
 margin-top: -6px;"></a>
                <div class="bouton">
                    <ul>
                        <?php
                        session_start();
                        if (!isset($_SESSION['logged'])) {
                            echo "<li ><a href='../Views/login.php'> Login</a ></li>
                            <li><a href='../Views/inscription.php'>Inscription</a></li>";

                        } else {
                            echo "<li><a href = '../index.php?action=UserController@logout'>Logout</a></li>";
                        }
                        ?>
                        <li><a href="../Views/chatbox.php">Tchat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
