<?php
session_start();
require_once '../assets/inc/initDb.php';
require_once '../assets/inc/functions.php';


// Main Image 

if($_POST['hidden_first_page_main_image'] == 1){

    $fileNameMainImage = $_FILES['first_page_main_image']['name'];
    $fileTmpNameMainImage  = $_FILES['first_page_main_image']['tmp_name'];
    $uploadDirectoryMainImage = "../images/first_page/";
    $uploadPathMainImage =  $uploadDirectoryMainImage . $fileNameMainImage;
    $didUploadMainImage = move_uploaded_file($fileTmpNameMainImage, $uploadPathMainImage);
    $imagePathMainImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameMainImage;

    // DB::update('drivers', [
    //     "driving_license"                 =>   $imagePathMainImage,
       

    // ], "id=%d", $_SESSION['driver_id']);


    setSettings("first_page_main_image", $imagePathMainImage);


    
}

// Third Section First Image
if($_POST['hidden_first_page_third_section_first_image'] == 1){

    $fileNameThirdSectionFirstImage = $_FILES['first_page_third_section_first_image']['name'];
    $fileTmpNameThirdSectionFirstImage  = $_FILES['first_page_third_section_first_image']['tmp_name'];
    $uploadDirectoryThirdSectionFirstImage = "../images/first_page/";
    $uploadPathThirdSectionFirstImage =  $uploadDirectoryThirdSectionFirstImage . $fileNameThirdSectionFirstImage;
    $didUploadThirdSectionFirstImage = move_uploaded_file($fileTmpNameThirdSectionFirstImage, $uploadPathThirdSectionFirstImage);
    $imagePathThirdSectionFirstImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameThirdSectionFirstImage;

  

    setSettings("first_page_third_section_first_image", $imagePathThirdSectionFirstImage);


    
}

// Third Section Second Image
if($_POST['hidden_first_page_third_section_second_image'] == 1){

    $fileNameThirdSectionSecondImage = $_FILES['first_page_third_section_second_image']['name'];
    $fileTmpNameThirdSectionSecondImage  = $_FILES['first_page_third_section_second_image']['tmp_name'];
    $uploadDirectoryThirdSectionSecondImage = "../images/first_page/";
    $uploadPathThirdSectionSecondImage =  $uploadDirectoryThirdSectionSecondImage . $fileNameThirdSectionSecondImage;
    $didUploadThirdSectionSecondImage = move_uploaded_file($fileTmpNameThirdSectionSecondImage, $uploadPathThirdSectionSecondImage);
    $imagePathThirdSectionSecondImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameThirdSectionSecondImage;

  

    setSettings("first_page_third_section_second_image", $imagePathThirdSectionSecondImage);


    
    
}

// Third Section Third Image

if($_POST['hidden_first_page_third_section_third_image'] == 1){

    $fileNameThirdSectionThirdImage = $_FILES['first_page_third_section_third_image']['name'];
    $fileTmpNameThirdSectionThirdImage  = $_FILES['first_page_third_section_third_image']['tmp_name'];
    $uploadDirectoryThirdSectionThirdImage = "../images/first_page/";
    $uploadPathThirdSectionThirdImage =  $uploadDirectoryThirdSectionThirdImage . $fileNameThirdSectionThirdImage;
    $didUploadThirdSectionThirdImage = move_uploaded_file($fileTmpNameThirdSectionThirdImage, $uploadPathThirdSectionThirdImage);
    $imagePathThirdSectionThirdImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameThirdSectionThirdImage;

  

    setSettings("first_page_third_section_third_image", $imagePathThirdSectionThirdImage);


    
    
}

// Third Section Fourth Image

if($_POST['hidden_first_page_third_section_fourth_image'] == 1){

    $fileNameThirdSectionFourthImage = $_FILES['first_page_third_section_fourth_image']['name'];
    $fileTmpNameThirdSectionFourthImage  = $_FILES['first_page_third_section_fourth_image']['tmp_name'];
    $uploadDirectoryThirdSectionFourthImage = "../images/first_page/";
    $uploadPathThirdSectionFourthImage =  $uploadDirectoryThirdSectionFourthImage . $fileNameThirdSectionFourthImage;
    $didUploadThirdSectionFourthImage = move_uploaded_file($fileTmpNameThirdSectionFourthImage, $uploadPathThirdSectionFourthImage);
    $imagePathThirdSectionFourthImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameThirdSectionFourthImage;

  

    setSettings("first_page_third_section_fourth_image", $imagePathThirdSectionFourthImage);


    
    
}
// Last Section Main Image

if($_POST['hidden_first_page_last_section_main_image'] == 1){

    $fileNameLastSectionMainImage = $_FILES['first_page_last_section_main_image']['name'];
    $fileTmpNameLastSectionMainImage  = $_FILES['first_page_last_section_main_image']['tmp_name'];
    $uploadDirectoryLastSectionMainImage = "../images/first_page/";
    $uploadPathLastSectionMainImage =  $uploadDirectoryLastSectionMainImage . $fileNameLastSectionMainImage;
    $didUploadLastSectionMainImage = move_uploaded_file($fileTmpNameLastSectionMainImage, $uploadPathLastSectionMainImage);
    $imagePathLastSectionMainImage  = "https://upickride.net/admin-panel/images/first_page/".$fileNameLastSectionMainImage;

  

    setSettings("first_page_last_section_main_image", $imagePathLastSectionMainImage);


    
    
}

// Transportation Provider First Section Main image

if($_POST['hidden_transportation_provider_page_first_section_main_image'] == 1){

    $fileNameTransportationProviderFirstSectionMainImage = $_FILES['transportation_provider_page_first_section_main_image']['name'];
    $fileTmpNameTransportationProviderFirstSectionMainImage  = $_FILES['transportation_provider_page_first_section_main_image']['tmp_name'];
    $uploadDirectoryTransportationProviderFirstSectionMainImage = "../images/transportation_provider/";
    $uploadPathTransportationProviderFirstSectionMainImage =  $uploadDirectoryTransportationProviderFirstSectionMainImage . $fileNameTransportationProviderFirstSectionMainImage;
    $didUploadTransportationProviderFirstSectionMainImage = move_uploaded_file($fileTmpNameTransportationProviderFirstSectionMainImage, $uploadPathTransportationProviderFirstSectionMainImage);
    $imagePathTransportationProviderFirstSectionMainImage  = "https://upickride.net/admin-panel/images/transportation_provider/".$fileNameTransportationProviderFirstSectionMainImage;

  

    setSettings("transportation_provider_page_first_section_main_image", $imagePathTransportationProviderFirstSectionMainImage);


    
    
}

// Transportation Provider Second Section Main image

if($_POST['hidden_transportation_provider_page_second_section_main_image'] == 1){

    $fileNameTransportationProviderSecondSectionMainImage = $_FILES['transportation_provider_page_second_section_main_image']['name'];
    $fileTmpNameTransportationProviderSecondSectionMainImage  = $_FILES['transportation_provider_page_second_section_main_image']['tmp_name'];
    $uploadDirectoryTransportationProviderSecondSectionMainImage = "../images/transportation_provider/";
    $uploadPathTransportationProviderSecondSectionMainImage =  $uploadDirectoryTransportationProviderSecondSectionMainImage . $fileNameTransportationProviderSecondSectionMainImage;
    $didUploadTransportationProviderSecondSectionMainImage = move_uploaded_file($fileTmpNameTransportationProviderSecondSectionMainImage, $uploadPathTransportationProviderSecondSectionMainImage);
    $imagePathTransportationProviderSecondSectionMainImage  = "https://upickride.net/admin-panel/images/transportation_provider/".$fileNameTransportationProviderSecondSectionMainImage;

  

    setSettings("transportation_provider_page_second_section_main_image", $imagePathTransportationProviderSecondSectionMainImage);


    
    
}

// Transportation Provider Last Section First image

if($_POST['hidden_transportation_provider_page_last_section_first_image'] == 1){

    $fileNameTransportationProviderLastSectionFirstImage = $_FILES['transportation_provider_page_last_section_first_image']['name'];
    $fileTmpNameTransportationProviderLastSectionFirstImage  = $_FILES['transportation_provider_page_last_section_first_image']['tmp_name'];
    $uploadDirectoryTransportationProviderLastSectionFirstImage = "../images/transportation_provider/";
    $uploadPathTransportationProviderLastSectionFirstImage =  $uploadDirectoryTransportationProviderLastSectionFirstImage . $fileNameTransportationProviderLastSectionFirstImage;
    $didUploadTransportationProviderLastSectionFirstImage = move_uploaded_file($fileTmpNameTransportationProviderLastSectionFirstImage, $uploadPathTransportationProviderLastSectionFirstImage);
    $imagePathTransportationProviderLastSectionFirstImage  = "https://upickride.net/admin-panel/images/transportation_provider/".$fileNameTransportationProviderLastSectionFirstImage;

  

    setSettings("transportation_provider_page_last_section_first_image", $imagePathTransportationProviderLastSectionFirstImage);

   
    
}


// Transportation Provider Last Section Second image

if($_POST['hidden_transportation_provider_page_last_section_second_image'] == 1){

    $fileNameTransportationProviderLastSectionSecondImage = $_FILES['transportation_provider_page_last_section_second_image']['name'];
    $fileTmpNameTransportationProviderLastSectionSecondImage  = $_FILES['transportation_provider_page_last_section_second_image']['tmp_name'];
    $uploadDirectoryTransportationProviderLastSectionSecondImage = "../images/transportation_provider/";
    $uploadPathTransportationProviderLastSectionSecondImage =  $uploadDirectoryTransportationProviderLastSectionsecondImage . $fileNameTransportationProviderLastSectionSecondImage;
    $didUploadTransportationProviderLastSectionSecondImage = move_uploaded_file($fileTmpNameTransportationProviderLastSectionSecondImage, $uploadPathTransportationProviderLastSectionSecondImage);
    $imagePathTransportationProviderLastSectionSecondImage  = "https://upickride.net/admin-panel/images/transportation_provider/".$fileNameTransportationProviderLastSectionSecondImage;

  

    setSettings("transportation_provider_page_last_section_second_image", $imagePathTransportationProviderLastSectionSecondImage);    
    
}