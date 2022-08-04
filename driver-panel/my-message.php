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
                <!--<div class="text-center text-between">
                  <a href="add-vehicles.php">
                  <button type="button" class="btn btn-primary mr-2">Add Vehicles</button>
                  </a>
                </div>
                <br><br>-->
                <!--<p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>-->
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr+>
                        <th class="text-info">#</th>
                        <th class="text-info">Message</th> 
                      </tr>
                    </thead>
                    <tbody>
              
                      <?php  
                      $data = DB::query("select * from messages where driver_id   = '".$_SESSION['driver_id']."' order by id DESC");
                        $i = 1;
                      foreach($data as $more)
    
                      { 
                        ?>
                          <tr>
                            <td class="font-weight-bold"><?=$i?></td>
                            <td><?=$more['message']?></td>
                          </tr>
                      <?php 
                     $i++;
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