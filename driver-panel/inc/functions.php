<?php
require_once 'meekrodb.2.3.class.php';

//}
DB::$user = 'upickrid_user';
DB::$password = 'david1234567890!';
DB::$dbName = 'upickrid_david';
//CHECK WHETHER ADMIN LOGGED IN OR NOT


function checkAdminSession() {

//    if(empty($_SESSION['admin']))
//    {
//        @header("location:auth-signin.php");
//    }

}

function getSettings($var)
{

    return DB::queryFirstField("select value from settings where var=%s", $var);
}

function setSettings($var, $value)
{

    DB::update('settings', array("value" => $value), "var=%s", $var);
}



