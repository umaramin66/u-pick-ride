<?php
include 'header.php';

$id = $_SESSION['driver_id']; 

$data = DB::queryFirstRow("select * from drivers where id = '$id' ");

?>
      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vehicle</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Transportation Provider Info</p>
                <form id="add-vehicle" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Year</label>
                          <input type="date"  name="year" id="year" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Make</label>
                          <input type="text"  name="make" id="make" class="form-control" placeholder="">
                        </div>
                      </div>



                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Vehicle Type</label>
                          <select id="vehicle_type" name="vehicle_type" class="form-control">
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

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Location</label>
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

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Model</label>
                          <input type="text"  name="model" id="model" class="form-control"placeholder="Enter Model">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Passenger Capacity</label>
                          <input type="text"  name="passenger_capacity" id="passenger_capacity" class="form-control" placeholder="Enter Passenger">
                        </div>
                      </div>
                    
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Color Of Vehicle</label>
                          <input type="text"  name="color_of_vehicle" id="color_of_vehicle" class="form-control" placeholder="Enter Color">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Rate (Charges) Per Day</label>
                          <input type="text"  name="rate_per_day" id="rate_per_day" class="form-control" placeholder="Enter Rate Per Day">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Description</label>
                            <textarea name="mytextarea" id="mytextarea">Write Vehicle Description</textarea>
                        </div>
                      </div>



                     <div class="col-sm-12">
                        <div class="form-group">
                          <!-- <a id="add-driver"><button class="btn btn-primary mt-3">
                                Sumbit
                                </button></a> -->
                                <button type="submit" class="btn btn-primary mt-3"  data-toggle="tooltip">Submit</button>
                          </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com" target="_blank">UPick Ride</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->
  
    </div>
  </div>
  
  </body>
</html>
<?php
include 'footer.php';
?>
<script src="js/add-vehicle.js"></script>