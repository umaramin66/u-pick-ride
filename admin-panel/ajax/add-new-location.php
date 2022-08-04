<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

DB::insert('location', array(
    "name"                         =>  $_POST['name'],
   
));

echo "success";

