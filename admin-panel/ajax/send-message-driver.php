<?php
session_start();
require_once '../inc/initDb.php';

DB::insert('messages', [
    "driver_id"                        => $_POST['driver_id'],
    "message"                          => $_POST['mytextarea']
]);

echo json_encode("success");