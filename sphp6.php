<?php
include_once ('bot.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>sql insert</title>
</head>
<body>

<form action="phpcode.php" method="GET">
    <h2>Login</h2>
    <div class="txtb">
    <label>NAME	<input class="login-input"  type="text" name="name">
    </div>
    <br>
    <div class="txtb">
    <label>PASSWORD	<input class="login-input" type="password" name="password">
    </div>
    <br>
    <input class="login-submit" type="submit" name="login" value="login">
</form>
</body>
</html>
