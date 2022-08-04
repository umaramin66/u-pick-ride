<?php
require 'inc/initDb.php';

$id = $_GET['image_id'];
$vehicle_id = $_GET['vehicle_id'];
DB::delete('vehicle_images', 'id=%d', $id);
echo "<script>window.location.href = 'add-vehicle-image.php?vehicle_id=$vehicle_id'</script>";


