<?php
include 'header.php';

//$id = $_SESSION['driver_id']; 

$data = DB::queryFirstRow("select * from drivers where id = '$id' ");

?>
      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Drivers</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Send Message to Drivers</p>
                <form id="send-message-driver" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Drivers</label>
                          <select id="driver_id" name="driver_id" class="form-control">
                            <?php   
                            $data = DB::query("select * from drivers");
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
                          <label class="control-label">Meesage</label>
                            <textarea name="mytextarea" id="mytextarea">Write Message</textarea>
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
        <p class="text-muted text-center text-md-left">Copyright © 2022 <a href="https://www.upickride.com" target="_blank">UPick Ride</a>. All rights reserved</p>
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
<script src="js/send-message-driver.js"></script>