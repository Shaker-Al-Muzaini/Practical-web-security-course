<?php
session_start();
include_once('bot.php');
include_once('cone.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['Verify_password'])) {
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $Verify_password = $_POST['Verify_password'];

    if (empty($old_password)) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Please check the old password</div></div></div>';

        } else if (empty($new_password)) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Please type the new password</div></div></div>';

        } else if ($new_password !== $Verify_password) {

            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">The password is different, please make sure that both words are applied</div></div></div>';

        }
        else
             {
                    $id = $_SESSION['id'];
                    $t= $_SESSION['token'];
                    $t2=$_POST['token2'];

                    $sql = "SELECT id,pas FROM csrf where id = $id AND pas='$old_password'";
                    $result = mysqli_query($cone, $sql);

                    if (mysqli_num_rows($result) > 0) {

                        if ( $_POST['token2']== $_SESSION['token']) {
                            $query = "update csrf set pas ='$new_password'where id= $id";
                            $result = mysqli_query($cone, $query);

                            if ($result) {
                                echo '<div class="row"><div class="col-12"><div class="alert alert-success">Password successfully changed</div></div></div>';
                                echo "<a href='shaker5.php'>view data</a><br>";

                            }
                            else
                            {
                                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to change password</div></div></div>';
                            }

                        }
                        else
                            echo 'to is filed token';

                    }else
                        echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Some fields entered are missing</div></div></div>';
                }
            }

        }

        $_POST['token2']=md5(uniqid());
//shaker almazini
