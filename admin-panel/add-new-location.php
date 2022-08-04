<?php
include 'header.php';
?>
      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Location</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Add New Location</p>
                <form id="add-new-location" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Location</label>
                          <select id="name" name="name" class="form-control">
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
<script src="js/add-new-location.js"></script>