<?php  
require_once 'assets/inc/initDb.php';
require_once 'assets/inc/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U Pick Ride</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<div class="wrapper">
    <header  class="text-white bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg mainNavbar ">
                <a class="navbar-brand" href="index.html">
                    <img srcset="assets/images/Logo.svg" src="assets/images/Logo.png" width="120" height="100" class="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavBar"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapseNavBar">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Share Your Car</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html"> Login</a>
                        </li>
                        <li class="nav-item">
                           <a href="signup.html"> <button class="btn commonBtn btn-info">Sign Up</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section style="overflow: hidden;" class="common-section banner mb-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-5 ml-auto">
                <div class="container">
                    <div class="mb-5 mt-2">
                        <h3 class="font-weight-bold"><?=getSettings("first_page_main_heading")?></h3>
                    </div>
                </div>
                
            </div>
            <div class="col-md-12 col-lg-6">
                <div  style="background: url('<?=getSettings('first_page_main_image')?>')' no-repeat; ">
                    <img srcset="<?=getSettings("first_page_main_image")?>" src="<?=getSettings("first_page_main_image")?>" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
   <div class="peopleSection">
       <!-- <div class="jobSectionn" style="background: url('assets/images/people.jpg') no-repeat center center;height: 400px;">
            <div class="container">
            <div class="form-row">
                <div class="col-md-8 mt-5">-->
                    <!-- <h3 class="font-weight-bold mt-5">Book you Transportation needs<br>with Independent Drivers<br>and Companies</h3> -->
                  
                  <!-- <h3 class="font-weight-bold mt-5"> <?=getSettings("first_page_main_heading")?></h3>

                </div>
            </div> 
            </div>
            
        </div>-->
           
       <!-- <h2 class="text">Book you Transportation needs<br>
            with Independent Drives<br>
             and Companines</h2>-->
        <div class="container">
            <div class="jobSection" style="background: url('assets/images/jobBg.png') no-repeat center center; background-size: cover;">
                
            </div>
             <div class="row justify-content-center">
                <div class="col-lg-11 drop">
                <h6 class="font-weight-normal text-center"> <?=getSettings("first_page_second_section_main_heading") ?> </h6>
                    <form class="mt-3">
                        <div class="row ml-1 mr-1">
                            <div class="col-md-3">
                                <lable class="text-center">Select City</lable>
                                <div class="form-group box">
                                <select id="location_id" name="location_id" class="form-control">
                                    <?php   
                                    $data = DB::query("select * from location");
                                    foreach($data as $types1)
                                    { ?>
                                      <option value = <?=$types1['id']?>><?=$types1['name']?></option>
                                   <?php }
                                    ?>
                          </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <lable class="text-center">Start Date</lable>
                                <div class="form-group box">
                                <input type="date" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <lable class="text-center">End Date</lable>
                                <div class="form-group box">
                                <input type="date" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <lable class="text-center">Select Vehicles</lable>
                                <div class="form-group box">
                                    <select  id="vehicle_type_id" name="vehicle_type_id" class="form-control" name="">
                                       <?php   
                                            $data = DB::query("select * from vehicle_type");
                                            foreach($data as $types)
                                            { ?>
                                              <option value = <?=$types['id']?>><?=$types['name']?></option>
                                           <?php }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 ml-auto mt-1 justify-content-center text-center">
                                <label></label>
                                <div class="form-group">
                                     <button class="btn commonBtn btn-warning"><?=getSettings("first_page_second_section_button_text")?> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>     
        </div>
    </div>
    <main>
        <section class="common-section chooseUSSection">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                         <div class="text-center mb-5">
                            <h4><?=getSettings("first_page_third_section_main_heading")?><hr class="border"></h4>
                        </div>
                    </div>
                </div>
               
                <div class="form-row justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/luxury-car.jpg" src="assets/img/luxury-car.jpg" 
                                 class="img-fluid">
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-0">Luxury Bus</h5>
                                        <span class="text-small">starting From</span>
                                        <p class="car-price">$20/Day</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img srcset="assets/images/star.png" src="assets/images/star.png" height="20"
                                        width="50px" 
                                            class="img-fluid">
                                            <div class="mt-4 mb-2">
                                             <button class="btn commonBtn btn-dark">About us</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/family-car.jpg" src="assets/img/family-car.jpg"
                                 class="img-fluid">
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-0">Family Car</h5>
                                        <span class="text-small">starting From</span>
                                        <p class="car-price">$20/Day</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img srcset="assets/images/star.png" src="assets/images/star.png" height="20"
                                        width="50px" 
                                            class="img-fluid">
                                            <div class="mt-4 mb-2">
                                             <button class="btn commonBtn btn-dark">About us</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/luxury-car.jpg" src="assets/img/luxury-car.jpg"
                                 class="img-fluid">
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-0">Luxury Car</h5>
                                        <span class="text-small">starting From</span>
                                        <p class="car-price">$20/Day</p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <img srcset="assets/images/star.png" src="assets/images/star.png" height="20"
                                        width="50px" 
                                            class="img-fluid">
                                        <div class="mt-4 mb-2">
                                         <button class="btn commonBtn btn-dark">About us</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4 mb-5">
                        <button class="btn commonBtn btn-light"><?=getSettings("first_page_third_section_button_text") ?> </button>
                </div>
            </div>
        </section>
        <section class="common-section chooseUSSection country">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                         <div class="text-center mt-5">
                            <h4><?=getSettings("first_page_fourth_section_main_heading")?><hr class="border"> </h4>
                        </div>   
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                             <p><?=getSettings("first_page_fourth_section_sub_heading")?></p>
                        </div>
                    </div>    
                </div>
                <div class="form-row justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card chooseUSSection">
                            <img srcset="<?=getSettings("first_page_third_section_first_image")?>" src="<?=getSettings("first_page_third_section_first_image")?>" 
                                 class="img-fluid">
                                 <p class="carousel-caption name-country">New York </p>
                        </div>
                    </div>
                    <div class=" col-md-6 col-lg-3">
                        <div class="card chooseUSSection">
                            <img srcset="<?=getSettings("first_page_third_section_second_image")?>" src="<?=getSettings("first_page_third_section_second_image")?>"
                                 class="img-fluid">
                                 <p class="carousel-caption name-country">Chicago </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card chooseUSSection">
                            <img srcset="<?=getSettings("first_page_third_section_third_image")?>" src="<?=getSettings("first_page_third_section_third_image")?>"
                                 class="img-fluid"><p class="carousel-caption name-country">Boston </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card chooseUSSection">
                            <img srcset="<?=getSettings("first_page_third_section_fourth_image")?>" src="<?=getSettings("first_page_third_section_fourth_image")?>" 
                                 class="img-fluid">
                                 <p class="carousel-caption name-country">San Diego </p>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 text-center mt-5 mb-5 pb-5">
                        <button class="btn commonBtn btn-light"><?=getSettings("first_page_fourth_section_button_text")?> </button>
                    </div>
            </div>
        </section>
        <section class="common-section chooseUSSection work mb-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                         <div class="text-center mt-5 mb-5">
                            <h4><?=getSettings("first_page_fifth_section_main_heading")?><hr class="border"> </h4>
                        </div>  
                    </div>
                </div>
                <div class="form-row justify-content-center align-items-left">
                    <div class="col-md-6 col-lg-2">
                        <div class="card chooseUSSection mb-0 pb-0">
                            <img srcset="assets/images/ride.png" src="assets/images/ride.png" height="150" width="150"
                                 class="img-fluid">      
                        </div>
                        <p><?=getSettings("first_page_fifth_section_sub_heading_part_1")?></p>
                        <span class="text-muted"><?=getSettings("first_page_fifth_section_paragraph_part_1")?></span>
                    </div>
                    <div class="col-md-6 col-lg-1 mt-5">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/greater.svg" src="assets/images/greater.png" height="40" width="40"
                                 class="img-fluid">      
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="card chooseUSSection mb-0 pb-0">
                            <img srcset="assets/images/car-2.png" src="assets/images/car-2.png" height="150" width="150"
                                 class="img-fluid">      
                        </div>
                        <p><?=getSettings("first_page_fifth_section_sub_heading_part_2")?></p>
                        <span class="text-muted"><?=getSettings("first_page_fifth_section_paragraph_part_2")?></span>
                    </div>
                    <div class="col-md-6 col-lg-1 mt-5">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/greater.svg" src="assets/images/greater.png" height="40" width="40"
                                 class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 mb-0 pb-0">
                        <div class="card chooseUSSection">
                            <img srcset="assets/images/tick.png" src="assets/images/tick.png" height="150" width="150" 
                                 class="img-fluid">
                        </div>
                        <p><?=getSettings("first_page_fifth_section_sub_heading_part_3")?></p>
                        <span class="text-muted" ><?=getSettings("first_page_fifth_section_paragraph_part_3")?></span>
                        <!--<span class="text-muted">Book any car for just an hour or full 7 days, with no limitation.</span>-->
                    </div>
                </div>
            </div>
        </section>
        <section style="background: #eee url('assets/images/why-choose-us-1.png') no-repeat;" class="why-choose-us mb-5">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-8 mb-3 justify-content-center align-items-center">
                            <p class="content mb-5">
                                <img srcset="<?=getSettings("first_page_last_section_main_image")?>" src="<?=getSettings("first_page_last_section_main_image")?>" height="270" width="500" 
                                class="img-fluid">
                            </p>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <h3 class="heading"><?=getSettings("first_page_sixth_section_main_heading")?></h3>
                            <h5 class="text-muted mb-5"><img class="mr-2" srcset="assets/images/done.svg" src="assets/images/done.svg" height="15" width="15" 
                                class="img-fluid">
                                <?=getSettings("first_page_sixth_section_sub_heading_part_1")?></h5>
                            <h5 class="text-muted mb-5"><img class="mr-2" srcset="assets/images/done.svg" src="assets/images/done.svg" height="15" width="15" 
                                class="img-fluid">
                                <?=getSettings("first_page_sixth_section_sub_heading_part_2")?></h5>
                            <h5 class="text-muted mb-5"><img class="mr-2" srcset="assets/images/done.svg" src="assets/images/done.svg" height="15" width="15" 
                                class="img-fluid">
                                <?=getSettings("first_page_sixth_section_sub_heading_part_3")?></h5>
                            <h5 class="text-muted mb-5"><img class="mr-2" srcset="assets/images/done.svg" src="assets/images/done.svg" height="15" width="15" 
                                class="img-fluid">
                                <?=getSettings("first_page_sixth_section_sub_heading_part_4")?></h5>
                            <button class="btn commonBtn btn-dark ml-5"><?=getSettings("first_page_sixth_section_search_button")?></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    </div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/contact-us.js"></script>
</body>
</html>
