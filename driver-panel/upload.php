<?php


$uploadDir = 'uploads';
session_start();
require_once 'inc/initDb.php';

if (!empty($_FILES)) {



$total = count($_FILES['file']['name']);
echo "total : ".$total;
for($i=0; $i < $total; $i++){
    $filename = $_FILES['file']['name'];
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $valid_extensions = array("png","jpg","jpeg");

   // if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
        $new_name = rand() . "-". $_FILES['file']['name'];
        $path = "uploads/" . $new_name;

        move_uploaded_file($_FILES['file']['tmp_name'], $path);

        $imagePath  = "https://upickride.net/driver-panel/uploads/".$new_name;

        DB::insert('vehicle_images', [
           "vehicle_id"                 =>   $_POST['vehicle_id'],
           "image_url"                  =>    $imagePath 
          ]);

        $file_names .= $new_name . " , ";
   // }else{
      //  echo 'false';
   // }
}
    
//  $tmpFile = $_FILES['file']['tmp_name'];

//  $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];

//  move_uploaded_file($tmpFile,$filename);

//  $imagePath  = "https://upickride.net/driver-panel/uploads/".$fileName;

//  DB::insert('vehicle_images', [
//     "vehicle_id"                 =>   $_POST['vehicle_id'],
//     "image_url"                  =>    $imagePath 
//    ]);

}







// if($_FILES['file']['name'] != ''){

//     $file_names = '';

//     $total = count($_FILES['file']['name']);

//     for($i=0; $i<$total; $i++){
//         $filename = $_FILES['file']['name'][$i]; // Get the Uploaded file Name.
//         $extension = pathinfo($filename,PATHINFO_EXTENSION); //Get the Extension of uploded file

//         $valid_extensions = array("png","jpg","jpeg");

        // if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
        //     $new_name = rand() . ".". $extension;
        //     $path = "images/" . $new_name;

        //     move_uploaded_file($_FILES['file']['tmp_name'][$i], $path);

        //     $file_names .= $new_name . " , ";
        // }else{
        //     echo 'false';
        // }
//     }
  
//   // Save uploaded images name on database
//     $sql = "INSERT INTO uploads(file_name) VALUES('{$file_names}')";
//     if(mysqli_query($conn,$sql)){
//         echo 'true';
//     }else{
//         echo 'false';
//     }
// }

?>