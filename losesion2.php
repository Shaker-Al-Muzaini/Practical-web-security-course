<?php
//shaker almazini by code
session_start();
include_once('bot.php');
//code Contact the seat data

$cone=mysqli_connect('localhost', 'root', '', 'sphp');
if (!$cone) {
    echo "no connected";
    die("no connected" .mysqli_connect_error());


} else
    echo '<div class="row"><div class="col-12"><div class="alert alert-success">connected</div></div></div>';



//validation code

if($_SERVER['REQUEST_METHOD']==='POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_NUMBER_INT);

    //has password

   // $newpassword = password_hash($password, PASSWORD_DEFAULT);
   $newpassword = password_hash($password, PASSWORD_BCRYPT ,array('cots'=>11));
  // echo $newpassword;
    //$newpassword = password_hash($password, PASSWORD_BCRYPT_DEFAULT_COST);
    if (password_verify($password, $newpassword)) {

            //sql git to data;

            $sql = "SELECT * FROM admins WHERE name='$name' and '$password'";
            $result = mysqli_query($cone,$sql);
            if (mysqli_num_rows($result)>0) {
                    $_POST['name'] = $name;
                    $_POST['password'] = $password;
                echo "<p style='background-color: aqua'> welcome ya " . '<p style=color:royalblue>' . $_POST['name'].'<br>';
                echo "<a href='losesion4.php'>Exit</a>" . '<br>';
            } else

                    echo '<div class="row"><div class="col-12"><div class="alert alert-danger">فشل الدخوال</div></div></div>';

        //chance to ip session

                session_regenerate_id();
    }
    //switch to pag 1

}
    else
         echo "<script> location.replace('losesion1.php')</script>";



