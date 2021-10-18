<?php
//include
include_once ('bot.php');
//code hash
$inpot="shaker";
echo'<br>'. "<p style='color: #17cb0a'>كلمه السر قبل التشفير  :$inpot </p>";
$hash=password_hash($inpot,PASSWORD_BCRYPT);
echo'<br>'. "<p style='color: #0a57cb'>كلمه السر بعد  التشفير  :$hash </p>";
$option=array('cost'=>11);

if(password_verify($inpot,$hash)){

    echo'<br>'. "كلمه السر صحيحه";

    }else
            echo'<br>'. "كلمه السر غير صحيح";
                        if(password_verify($inpot,$hash)) {

                         if (password_needs_rehash($hash, PASSWORD_DEFAULT, $option)) {
                            $newhash = password_hash($inpot, PASSWORD_DEFAULT, $option);

                               echo'<br>'. "<p style='color: #a80505'>كلمه السر بعد  التشفير التاني : $newhash</p>";

                            }
                        }
