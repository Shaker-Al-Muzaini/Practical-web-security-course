<?php
//الاسم :shaker
//كلمه السر :1
session_start();
include_once('bot.php');
include_once('cone.php');

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $hash=password_hash($password,PASSWORD_BCRYPT);
    if(password_verify($password,$hash)){
         $query = "select * from csrf where username ='$username' AND pas='$password' ";
    $result = mysqli_query($cone, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($ros=mysqli_fetch_assoc($result)){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['id'] = $ros['id'];
        $_SESSION['token'] = md5(uniqid(mt_rand(),true));


        echo "<script> location.replace('shaker2.php')</script>";

    }
        }
    else
        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل الدخوال</div></div></div>';
    mysqli_close($cone);
}

    }


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
<form method="post" action="">
    <div class="mb-3">
        <label for="username" class="form-label">username
        <input type="text" class="form-control" aria-describedby="emailHelp" name="username" required>
        </label>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password
        <input type="password" class="form-control" name="password" required>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
