<?php
session_start();
require_once '../inc/initDb.php';

$year              = $_POST['year'];
$make              = $_POST['make'];
$model             = $_POST['model'];
$passenger         = $_POST['passenger_capacity'];

$color_of_vehicle  = $_POST['color_of_vehicle'];



DB::insert('vehicles', [
    "driver_id"                        => $_SESSION['driver_id'],
    "year"                             =>  $year,
    "make"                             =>  $make,
    "vehicle_type_id"                  =>  $_POST['vehicle_type'],
    "location_id"                      =>  $_POST['location_id'],
    "model"                            =>  $model,
    "passenger_capacity"               =>  $passenger,
    "color_of_vehicle"                 =>  $color_of_vehicle,
    "rate_per_day"                     => $_POST['rate_per_day'],
    "description"                      => $_POST['mytextarea']
]);

echo json_encode("success");