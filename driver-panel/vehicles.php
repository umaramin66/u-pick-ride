<?php
@session_start();
require 'inc/initDb.php';
if(!isset($_SESSION['driver_id']))
{
  echo "<script>window.open('logout.php','_self')</script>";
}
include 'header.php';


?>

      <!-- partial -->

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Transportation Provider Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vehicles</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="text-center text-between">
                  <a href="add-vehicles.php">
                  <button type="button" class="btn btn-primary mr-2">Add Vehicles</button>
                  </a>
              
                
                </div>
                <br><br>
                <!--<p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>-->
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr+>
                        <th class="text-info">#</th>
                        <th class="text-info">Make</th>
                        <th class="text-info">Model</th>
                        <th class="text-info">Vehicle Type</th>
                        <th class="text-info">Passenger Capacity</th>
                        <th class="text-info">Color</th> 
                        <th class="text-info">Image</th> 
                      </tr>
                    </thead>
                    <tbody>
              
                      <?php  
                      $data = DB::query("select * from vehicles where driver_id = '".$_SESSION['driver_id']."'");
                      foreach($data as $more)
                      { 
                          $vehicle_type = DB::queryFirstRow("select name from vehicle_type where id = '".$more['vehicle_type_id']."'");
                        
                        ?>
                          <tr>
                            <td class="font-weight-bold"><?=$more['id']?></td>
                            <td><?=$more['make']?></td>
                            <td class="text-muted"><?=$more['model']?></td>
                       
                            <td class="text-muted"><?=$vehicle_type['name']?></td>
                            <td class="text-muted"><?=$more['passenger_capacity']?></td>
                            <td class="text-muted"><?=$more['color_of_vehicle']?></td>
                            
                            <td><a href="add-vehicle-image.php?vehicle_id=<?=$more['id']?>"><button class="btn btn-primary mr-2" ><i class="fa fa-fw fa-edit"></i>Add or View Images </button></a></td>



                          </tr>
                      <?php 
                     
                    }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- partial:../../partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.upickride.com" target="_blank">U Pick Ride</a>. All rights reserved</p>
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