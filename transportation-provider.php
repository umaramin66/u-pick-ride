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
    <section class="common-section banner pt-5">
        <div class="container mt-5 mb-5 pb-2">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="mb-5">
                        <h2 class="font-weight-bold"><?=getSettings("transportation_provider_page_first_section_main_heading")?><br><span class="entre"><?=getSettings("transportation_provider_page_first_section_main_heading_two")?></span></h2>
                        <p><?=getSettings("transportation_provider_page_first_section_paragraph")?></p>
                        <div class="freeBanner-Btns1">
                            <div>
                                <a href="driver-panel/signup.php">
                                <button class="btn commonBtn btn-info btn-lg"><?=getSettings("transportation_provider_page_first_section_button")?>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <img srcset="<?=getSettings("transportation_provider_page_first_section_main_image")?>" src="<?=getSettings("transportation_provider_page_first_section_main_image")?>" height="100" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="common-section pt-5 about-finance-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 ml-auto">
                    <div class="text-center mb-5">
                        <h2 class="font-weight-bold">
                        <?=getSettings("transportation_provider_page_second_section_main_heading")?>
                        </h2>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard">
                                <h3 class="font-weight-bold">
                                    <?=getSettings("transportation_provider_page_second_section_sub_heading_part_one")?>
                                </h3>
                                <p>
                                <?=getSettings("transportation_provider_page_second_section_paragraph_part_one")?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard">
                                <h3 class="font-weight-bold">
                                <?=getSettings("transportation_provider_page_second_section_sub_heading_part_two")?>
                                </h3>
                                <p>
                                    <?=getSettings("transportation_provider_page_second_section_paragraph_part_two")?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard">
                                <h3 class="font-weight-bold">
                                <?=getSettings("transportation_provider_page_second_section_sub_heading_part_three")?>
                                </h3>
                                <p>
                                <?=getSettings("transportation_provider_page_second_section_paragraph_part_three")?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="peopleSection mb-0">
        <div class="jobSectionn" style="background: url('<?=getSettings('transportation_provider_page_second_section_main_image')?>') no-repeat center center;height: 400px;">    
         </div>
     </div>
    <section class="common-section icome-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 ml-auto">
                    <div class="text-center mb-5 mt-5">
                        <h2 class="font-weight-bold"><?=getSettings("transportation_provider_page_third_section_main_heading")?></h2>
                        <h5 class="text-muted mt-2">
                        <?=getSettings("transportation_provider_page_third_section_main_paragraph")?>
                        </h5>
                    </div>
                    <div class="row justify-content-center" >
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard text-center">
                                <h4 class="font-weight-bold text-info">
                                <?=getSettings("transportation_provider_page_third_section_sub_heading_part_one")?>
                                </h4>
                                <p class="text-dark">
                                <?=getSettings("transportation_provider_page_third_section_paragraph_part_one")?>
                                </p>
                            </div>
                        </div>
                        <div class="vr"></div>
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard text-center">
                                <h4 class="font-weight-bold text-info">
                                <?=getSettings("transportation_provider_page_third_section_sub_heading_part_two")?>
                                </h4>
                                <p>
                                <?=getSettings("transportation_provider_page_third_section_paragraph_part_two")?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="saveMoneyCard text-center">
                                <h4 class="font-weight-bold text-info">
                                <?=getSettings("transportation_provider_page_third_section_sub_heading_part_three")?>
                                </h4>
                                <p>
                                <?=getSettings("transportation_provider_page_third_section_paragraph_part_three")?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" justify-content-center text-center mt-5">
                        <button class="btn commonBtn btn-info btn-lg">
                            <?=getSettings("transportation_provider_page_third_section_button_text")?>
                        </button>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="common-section tool-section pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 ml-auto">
                    <div class="text-center pb-5 mt-5">
                        <h2 class="font-weight-bold">
                            <?=getSettings("transportation_provider_page_fourth_section_main_heading")?>
                        </h2>
                        <h5 class="text-muted mt-2">
                        <?=getSettings("transportation_provider_page_fourth_section_main_paragraph")?>
                        </h5>
                    </div>
                    <div class="row justify-content-center" >
                        <div class="col-md-6 col-lg-6">
                            <div class="saveMoneyCard">
                                <img srcset="<?=getSettings("transportation_provider_page_last_section_first_image")?>" src="<?=getSettings("transportation_provider_page_last_section_first_image")?>"
                                 class="img-fluid">
                                <h4 class="font-weight-bold">
                                <?=getSettings("transportation_provider_page_fourth_section_sub_heading_part_one")?>
                                </h4>
                                <p class="text-muted">
                                <?=getSettings("transportation_provider_page_fourth_section_paragraph_part_one")?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="saveMoneyCard">
                                <img srcset="<?=getSettings("transportation_provider_page_last_section_second_image")?>" src="<?=getSettings("transportation_provider_page_last_section_second_image")?>"
                                 class="img-fluid">
                                <h4 class="font-weight-bold">
                                <?=getSettings("transportation_provider_page_fourth_section_sub_heading_part_two")?>
                                </h4>
                                <p class="text-muted">
                                <?=getSettings("transportation_provider_page_fourth_section_paragraph_part_two")?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="pb-5" style="background: #0799af;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 ml-auto">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <h6 class="font-weight-bold mb-2">U pick ride</h6>
                            <p>About</p>
                            <p>Team</p>
                            <p>Policies</p>
                            <p>Careers</p>
                        </div>
                        <div class="col-md-3 col-lg-2">
                            <h6 class="font-weight-bold">Locations</h6>
                            <p>USA (EN)</p>
                            <p>Canada (En)</p>
                            <p>Canada (FR)</p>
                            <p>UK (EN)</p>
                        </div>
                        <div class="col-md-3 col-lg-2">
                            <h6 class="font-weight-bold">Explore</h6>
                            <p>Book a car</p>
                            <p>weddings</p>
                            <p>Trust & safety</p>
                            <p>Sustainability</p>
                            <p>FAQs</p>
                        </div>
                        <div class="col-md-3 col-lg-2">
                            <h6 class="font-weight-bold">Hosting</h6>
                            <p>List your car</p>
                            <p>Carculator</p>
                            <p>All-Star-Hosts</p>
                            <p>Host tools</p>
                            <p>Insurance</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/contact-us.js"></script>
</body>
</html>
