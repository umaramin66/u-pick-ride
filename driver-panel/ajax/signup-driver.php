<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

DB::insert('drivers', array(
    "name"                         =>  $_POST['name'],
    "email"                        =>  $_POST['email'],
    "password"                     =>  $_POST['password'],

));

echo "success";


// $message = "Hello '. $_POST['name'].', Welcome to UPICKRIDE Transportation Provider Panel
// .'<br/>Please login with these credentials : <br/>
// Email : .'$_POST['email']". "<br/>".
// Password : .$_POST['password']."<br/>".
// URL : "https://upickride.net/driver-panel/login.php"
// ;
$message="Hello";

ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "info@upickride.com";
$to = $_POST['email'];
$subject = "Welcome to UpickRide Transportation Provider Panel";
//$message = "PHP mail works just fine";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$s = mail($to, $subject, $message, $headers);
