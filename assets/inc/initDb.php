<?php
//session_set_cookie_params(0, '/', '.itpvt.net');


require_once 'meekrodb.2.3.class.php';

//if($_SERVER['HTTP_HOST'] == "orderapp.com" || $_SERVER['HTTP_HOST'] == "app.orderapp.com" || $_SERVER['HTTP_HOST'] == "eluna.orderapp.com"
//    || $_SERVER['HTTP_HOST'] == "staging.orderapp.com" || $_SERVER['HTTP_HOST'] == "backup.orderapp.com" || $_SERVER['HTTP_HOST'] == "kosher.orderapp.com") {
//
//    DB::$host = 'orderappdb.crv4lzhgi1gx.eu-central-1.rds.amazonaws.com';
//    DB::$port = '3306';
//    DB::$user = 'orderappnew';
//    DB::$password = 'orderapp';
//}
DB::$user = 'upickrid_user';
DB::$password = 'david1234567890!';
////}
//
//
//
DB::$dbName = 'upickrid_david';

?>
