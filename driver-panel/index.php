<?php
include 'header.php';
?>


	<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Transportation Provider Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="text-small text-muted card-title mb-0">Total Cars</h6>
                      <a href="vehicles.php"><button style="border-radius: 15px; font-size: 9px; min-width:50px" type="button" class="btn btn-dark text-small">View all</button></a>
                    </div>
                    <div class="row">
                      <div class="col-md-9 mt-3">
                        <?php  
                        DB::query("select * from vehicles where driver_id = '".$_SESSION['driver_id']."'");
                        $carsCount = DB::count();
                        ?>
                        <h3 class="mt-3 text-info"><?=$carsCount?></h3>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="text-small text-muted card-title mb-0">Total Rides</h6>
                      <button style="border-radius: 15px; font-size: 9px; min-width: 50px" type="button" class="btn btn-dark">View all</button>
                    </div>
                    <div class="row">
                      <div class="col-md-9 mt-3">
                        <h3 class="mt-3 text-info">99</h3>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="text-small text-muted card-title mb-0">Total Email Unverified Users</h6>
                      <button style="border-radius: 15px; font-size: 9px; min-width:50px" type="button" class="btn btn-dark">View all</button>
                    </div>
                    <div class="row">
                      <div class="col-md-9 mt-3">
                        <h3 class="mt-3 text-info">99</h3>
                      </div>
                      <div class="col-md-3 mt-4">
                           <i data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->
        <div class="form-row">
        	<!-- <nav class="page-breadcrumb">
	          <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="#">Your live Vehicles</a></li>
	            <li class="breadcrumb-item active" aria-current="page">4</li>
	          </ol>
          </nav> -->
        </div>
        <hr>
        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">


            <?php  
              $vehicle_data = DB::query("select * from vehicles where driver_id = '".$_SESSION['driver_id']."'"); 
              foreach($vehicle_data as $data)
              { 
                $images = DB::queryFirstRow("select * from vehicle_images where vehicle_id = '".$data['id']."'");
                ?>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                	<img style="width:auto; height:179px;" srcset="<?=$images['image_url']?>" src="<?=$images['image_url']?>" class="card-img-top" alt="...">
							    <div class="card-body">
							      <div class="form-row justify-content-center">
							    		<div class="col-md-1 mt-1"><div class="status online"></div></div>
							    		<div class="col-md-10"><p class="card-text text-center"><?=$data['make']." ".$data['model']." ".$data['color_of_vehicle']?></p></div>
							    	</div>
							    </div>
							  </div>
              </div> 
            
              <?php 
              } 
              
            ?>

          </div>
        </div> <!-- row -->
			</div>
			<!-- partial:partials/_footer.html -->
			<!-- <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer> -->
			<!-- partial -->
		</div>
	</div>

<?php
include 'footer.php';
?>    