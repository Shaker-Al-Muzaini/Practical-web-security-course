<?php
include_once('bot.php');
$cone=mysqli_connect('localhost', 'root', '', 'sphp');
if (!$cone) {
    echo "no connected";
    die("no connected" .mysqli_connect_error());


} else
    echo '<div class="row"><div class="col-12"><div class="alert alert-success">connected</div></div></div>';

