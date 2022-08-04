<?php
session_start();
require_once '../inc/initDb.php';

$name = $_POST['name'];
$company_name = $_POST['company_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


// Driving License 

if($_POST['driving_license_image'] == 1){

    $fileNameDrivingLicense = $_FILES['driving_license']['name'];
    $fileTmpNameDrivingLicense  = $_FILES['driving_license']['tmp_name'];
    $uploadDirectoryDrivingLicense = "../images/driving_license/";
    $uploadPathDrivingLicense =  $uploadDirectoryDrivingLicense . $fileNameDrivingLicense;
    $didUploadDrivingLicense = move_uploaded_file($fileTmpNameDrivingLicense, $uploadPathDrivingLicense);
    $imagePathDrivingLicense  = "https://upickride.net/driver-panel/images/driving_license/".$fileNameDrivingLicense;

    DB::update('drivers', [
        "driving_license"                 =>   $imagePathDrivingLicense,
       

    ], "id=%d", $_SESSION['driver_id']);
    
}



// Business License
if($_POST['business_license_image'] == 1){

    $fileNameBusinessLicense = $_FILES['business_license']['name'];
    $fileTmpNameBusinessLicense  = $_FILES['business_license']['tmp_name'];
    $uploadDirectoryBusinessLicense = "../images/business_license/";
    $uploadPathBusinessLicense =  $uploadDirectoryBusinessLicense . $fileNameBusinessLicense;
    $didUploadBusinessLicense = move_uploaded_file($fileTmpNameBusinessLicense, $uploadPathBusinessLicense);
    $imagePathBusinessLicense  = "https://upickride.net/driver-panel/images/business_license/".$fileNameBusinessLicense;

    DB::update('drivers', [
        "business_license"                 =>   $imagePathBusinessLicense,
    

    ], "id=%d", $_SESSION['driver_id']);

}
// Auto Insurance

if($_POST['auto_insurance_image'] == 1){

    $fileNameAutoInsurance = $_FILES['auto_insurance']['name'];
    $fileTmpNameAutoInsurance  = $_FILES['auto_insurance']['tmp_name'];
    $uploadDirectoryAutoInsurance = "../images/auto_insurance/";
    $uploadPathAutoInsurance =  $uploadDirectoryAutoInsurance . $fileNameAutoInsurance;
    $didUploadAutoInsurance = move_uploaded_file($fileTmpNameAutoInsurance, $uploadPathAutoInsurance);
    $imagePathAutoInsurance  = "https://upickride.net/driver-panel/images/auto_insurance/".$fileNameAutoInsurance;

    DB::update('drivers', [
        "auto_insurance"                 =>   $imagePathAutoInsurance,
    

    ], "id=%d", $_SESSION['driver_id']);


}
// Profile Picture
if($_POST['profile_picture_image'] == 1){

    $fileNameProfilePicture = $_FILES['profile_picture']['name'];
    $fileTmpNameProfilePicture  = $_FILES['profile_picture']['tmp_name'];
    $uploadDirectoryProfilePicture = "../images/profile_picture/";
    $uploadPathProfilePicture =  $uploadDirectoryProfilePicture . $fileNameProfilePicture;
    $didUploadProfilePicture = move_uploaded_file($fileTmpNameProfilePicture, $uploadPathProfilePicture);
    $imagePathProfilePicture  = "https://upickride.net/driver-panel/images/profile_picture/".$fileNameProfilePicture;
   
    DB::update('drivers', [
        "profile_picture"                 =>   $imagePathProfilePicture,
    

    ], "id=%d", $_SESSION['driver_id']);

}

// Uber Rating Pic
if($_POST['uber_rating_pic_image'] == 1){

    $fileNameUberRatingPic = $_FILES['uber_rating_pic']['name'];
    $fileTmpNameUberRatingPic  = $_FILES['uber_rating_pic']['tmp_name'];
    $uploadDirectoryUberRatingPic = "../images/uber_rating_pic/";
    $uploadPathUberRatingPic =  $uploadDirectoryUberRatingPic . $fileNameUberRatingPic;
    $didUploadUberRatingPic = move_uploaded_file($fileTmpNameUberRatingPic, $uploadPathUberRatingPic);
    $imagePathUberRatingPic  = "https://upickride.net/driver-panel/images/uber_rating_pic/".$fileNameUberRatingPic;
    
    DB::update('drivers', [
        "uber_rating_pic"                 =>   $imagePathUberRatingPic,
    

    ], "id=%d", $_SESSION['driver_id']);


}

















DB::update('drivers', [
    "name"                            =>  $name,
    "company_name"                    =>  $company_name,
    "address"                         =>  $address,
    "phone_number"                    =>  $phone_number

], "id=%d", $_SESSION['driver_id']);

echo json_encode("success");