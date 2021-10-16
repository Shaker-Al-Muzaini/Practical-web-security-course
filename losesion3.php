<?php
include_once('cone.php');
include_once('bot.php');
session_start();
session_regenerate_id();
    if ($_SESSION['name']) {
        echo "<p style='background-color: #295be7'> welcome ya andin :" .
            '<p style=color:#17cb0a>' . $_SESSION['name'].'<br>';
        echo "<a href='sphp5.php'>viw dat</a>" . '<br>';
        echo "<a href='losesion4.php'>Exit</a>" . '<br>';
    }
    else {
        echo "<script> location.replace('losesion1.php')</script>";
    }
