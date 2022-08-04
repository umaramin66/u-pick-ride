<?php
include 'header.php';
?>

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin Dasboard</a></li>
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
                        <th class="text-info">User</th>
                        <th class="text-info">Email</th>
                        <th class="text-info">address</th>
                        <th class="text-info">Phone No</th>
                        <th class="text-info">More Detail</th>
                        <th class="text-info">View Vehicles</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                             drivers();
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
function drivers()
{

    $contact  = DB::query("select * from drivers");
    if(DB::count() > 0)
    {
        foreach($contact as $contacts)
        {
            $id = $contacts['id'];
            $name= $contacts['name'];
            $email= $contacts['email'];
            $address= $contacts['address'];
            $phone_number = $contacts['phone_number'];
            
            echo"<tr><th scope='row'>$id</th>
                <td>$name</td>
                <td>$email</td>
                <td>$address</td>
                <td>$phone_number</td>
                <td>
                <a href='driver-detail.php?driver-id=$id'><button class='btn btn-dark' type='button'>More Detail</button></a>
                </td>
                <td>
                <a href='view-vehicle.php?driver-id=$id'><button class='btn btn-warning' type='button'>View Vehicles</button></a>
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
?>