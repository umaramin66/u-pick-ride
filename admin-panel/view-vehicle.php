<?php
$d_id = $_GET['driver-id'];
include 'header.php';

?>
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
                </div>
                <!--<p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>-->
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th class="text-info">#</th>
                        <th class="text-info">Driver Name</th>
                        <th class="text-info">Vehicle Tpye</th>
                        <th class="text-info">Year</th>
                        <th class="text-info">Make</th>
                        <th class="text-info">Model</th> 
                        <th class="text-info">Passenger Capacity</th> 
                        <th class="text-info">Color Of Vehicle</th> 
                        <th class="text-info">Rate Per Day</th> 
                        <th class="text-info">View Images</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                             driversdetails($d_id);
                        ?>
                      </tr>
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
        <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->
  
    </div>
  </div>

 
</body>
</html>
<?php 
include 'footer.php';
function driversdetails($d_id)
{

    $contact  = DB::query("select * from vehicles where driver_id = $d_id ");
    
    if(DB::count() > 0)
    {
        foreach($contact as $contacts)
        {
            $id = $contacts['id'];
            $driver_id = $contacts['driver_id'];
            $vehicle_type_id= $contacts['vehicle_type_id'];
            $year= $contacts['year'];
            $make = $contacts['make'];
            $model = $contacts['model'];
            $passenger_capacity = $contacts['passenger_capacity'];
            $color_of_vehicle = $contacts['color_of_vehicle'];
            $rate_per_day = $contacts['rate_per_day'];

            $driver_name1 = DB::queryFirstRow("select * from drivers where id = '$driver_id'");
            $driver_name = $driver_name1['name'];

            $data = DB::queryFirstRow("select name from vehicle_type where id = '$vehicle_type_id'");
            $name = $data['name'];
            echo"<tr><th scope='row'>$id</th>
                <td>$driver_name</td>
                <td>$name</td>
                <td>$year</td>
                <td>$make</td>
                <td>$model</td>
                <td>$passenger_capacity</td> 
                <td>$color_of_vehicle</td>  
                <td>$rate_per_day</td>  
                <td>
                <a href='view-vehicle-image.php?vehicle_id=$id'><button class='btn btn-warning' type='button'>View Images</button></a>
                </td> 
                </tr>";
        }
    }
    else
    {
        echo "0 results";
    }
}
function validation($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}


?>
