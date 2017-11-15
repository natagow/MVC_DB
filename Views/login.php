<?php include "header.php" ?>

<div class="main">
    <div class="form-style-6 loginForm">
        <h1>Login</h1>
        <form action="../index.php" method="post">
            <input type="text" id="pseudo" name="pseudo" placeholder="Your Name"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="hidden" name="action" value="UserController@login"/>
            <input type="submit" name="logIn" value="Send"/>
        </form>
    </div>
</div>
<script>
    var form = document.querySelector(".login");
    form.addEventListener('submit', function () {
        var input = document.querySelector("#pseudo");
        var pseudo = input.valueOf();


    })
</script>
</body>
</html>
