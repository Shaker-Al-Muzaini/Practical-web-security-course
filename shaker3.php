<?php
session_start();
include_once('bot.php');
include_once('cone.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

<form action="shaker4.php" method="post">
    <label>
        <div  class="alert alert-primary  fade show" role="alert">
            Change Password:
            <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
               Current Password:
        <input type="text" name="old_password" required><br>
        <br>
        New Password:
        <input type="text" name="new_password" required><br>
        <br>
        Confirm Password:
        <input type="text" name="Verify_password" required><br>
         <button type="submit" class="btn btn-primary" value="Change">Submit</button>
             </label>
    <input type="hidden" name="token2" value='<?php echo $_SESSION['token']?>'>
</form>
</body>
</html>

