<div class="main">
    <div class="form-style-6">
        <h1>Login</h1>
        <form action="../index.php" method="post">
            <input type="text" name="pseudo" placeholder="Your Name"
                   value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : "" ?>"/>
            <input type="password" name="password" placeholder="Password"
                   value="<?= isset($_POST['password']) ? $_POST['password'] : "" ?>"/>
            <input type="hidden" name="action" value="UserController@login"/>
            <input type="submit" name="logIn" value="Send"/>
        </form>
    </div>
</div>
</body>
</html>
