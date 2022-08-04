<?php  
require_once 'assets/inc/initDb.php';
require_once 'assets/inc/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Ride</title>
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
    <section class="bookride">
        <div class="container">
            <h4 class="mt-5">2013 Hyundai Sonata</h4>
            <img srcset="assets/images/star.png" src="assets/images/star.jpg" width="85" height="30" class="img-fluid">
            <div class="row mt-2">
                <div class="col-md-6">
                    <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg" height="30" class="img-fluid">
                    <div class="form-row">
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg"height="30" class="img-fluid">
                        </div>
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg"height="30" class="img-fluid">
                        </div>
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg"height="30" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg" height="30" class="img-fluid">
                        </div>
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg"height="30" class="img-fluid">
                        </div>
                        <div class="col-md-4 mt-2">
                             <img srcset="assets/images/luxury-car.jpg" src="assets/images/luxury-car.jpg" width="" height="30" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                     <p class="text-muted font-weight-bold"><?=getSettings("book_ride_page_first_section_sub_heading_part_part_1") ?>
                      <span class="">DIVID HASSEY</span>
                    </p>
                    <p class="text-muted font-weight-bold"><?=getSettings("book_ride_page_first_section_sub_heading_part_part_2") ?>
                       <span class="font-weight-bold">Dallas, Texas, United States</span>
                    </p>
                    <div class="card chooseUSSection mt-5 pt-2">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mt-3 mb-5">Duration</h5>
                                    <form>
                                        <div class="form-row justify-content-center">
                                            <div class="col-md-6 mt-1">
                                                <label class="text-muted">START</label>
                                              <input type="date" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-md-6 mt-1">
                                                <label class="text-muted">END</label>
                                              <input type="date" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </form>
                                    <h5 class="text-muted text-center mt-5">Your Trip</h5>
                                    <form>
                                        <div class="form-row justify-content-center mb-5">
                                            <div class="col-md-12">
                                              <input type="text" class="form-control" placeholder="5 Days">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-12 text-center mt-4 mb-5">
                                        <button class="btn commonBtn btn-info"><?=getSettings("book_ride_page_first_section_button") ?></button>
                                    </div>

                                </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <h5>Description</h5>
                <p class="text-muted">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <h5>Features</h5>
                <p class="text-muted p">
                    Automatic<br>
                    Automatic transmission<br>
                    Getaround Connect enabled<br>
                    CD Player<br>
                    Air Conditioninf<br>
                    Dual air bogs<br>
                    Side air bodgs<br>ABS brakes<br>Power windows<br>
                </p>
                <h5>Etiquette</h5>
                <p class="text-muted p">No Pets-leave your furry friend at home.<br>smoking fine is $300. Claning fee is $100(spill,sand,pet hair etc.).</p>
            </div>
        </div>
    </section>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/contact-us.js"></script>
</body>
</html>