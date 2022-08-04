<?php
session_start();
require_once 'inc/initDb.php';

session_destroy();
echo "<script>window.open('login.php','_self')</script>";