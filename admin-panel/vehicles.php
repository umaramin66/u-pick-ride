<?php
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
                  <a href="add-vehicles.php">
                  <button type="button" class="btn btn-primary mr-2">Add Vehicles</button>
                  </a>
               <a href= "add-vehicl-image.php">
               <button type="button" class="btn btn-primary">Add Vehicle Image</button>
               </a>
                
                </div>
                <!--<p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>-->
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr+>
                        <th class="text-info">#</th>
                        <th class="text-info">User</th>
                        <th class="text-info">Vehicle</th>
                        <th class="text-info">Pick-Drop-Time</th>
                        <th class="text-info">Price</th>
                        <th class="text-info">Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="font-weight-bold">1</td>
                        <td>Cedric Kelly</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">1</td>
                        <td>Cedric Kelly</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">2</td>
                        <td>Dai Rios</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">3</td>
                        <td>Colleen Hurst</td>
                        <td class="text-muted">Comery Clasic</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">4</td>
                        <td>Gloria Little</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>

                      <tr>
                        <td class="font-weight-bold">5</td>
                        <td>Ashton Cox</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">6</td>
                        <td>Cedric Kelly</td>
                        <td class="text-muted">Mercedese</td>
                        <td class="text-muted">2022-06-08 05:17 PM<br>2022-06-08 05:17 PM</td>
                        <td class="font-weight-bold"> 199.00 USD</td>
                        <td class="text-success">COMPLETED</td>
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
?>