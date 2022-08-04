<?php
session_start();
require_once '../inc/initDb.php';

$email = $_POST['email'];
$password = $_POST['password'];


$admin = DB::queryFirstRow("select * from drivers where email = '$email' and password = '$password'");


    if ($email == $admin['email'] and $password == $admin['password']) {

        //IF CUSTOMER LOGINS, WE NEED TO REDIRECT TO APPLICATION FORMS
        $_SESSION['driver_email'] = $email;
        $_SESSION['driver_id'] = $admin['id'];
       echo json_encode("success");

}
    else{
        echo json_encode("false");
    }
