<?php
//code destroy session
session_start();
session_unset();
session_destroy();
include_once('bot.php');
echo "<a href='losesion1.php'> <h1>login</h1></a> ";
