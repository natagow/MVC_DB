<?php include "header.php" ?>

<div class="main">
    <div class="form-style-6">
        <h1>Inscription</h1>
        <form action="../index.php" method="POST">
            <input type="hidden" name="action" value="UserController@signup"/>
            <input type="text" name="pseudo" placeholder="Your Name"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="radio" id="msexe" name="genre" value="M" checked>
            <label for="msexe">Male</label>
            <input type="radio" id="fsexe" name="genre" value="F">
            <label for="fsexe">Female</label>
            <input type="submit" name="signUp" value="Send"/>

        </form>
    </div>
</div>
</body>
</html>
