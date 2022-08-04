<?php
include 'header.php';

$id = $_GET['vehicle_id']; 

//$data = DB::queryFirstRow("select * from drivers where id = '$id' ");

?>
<style>
    .dropzone {
    min-height: 252px;
    min-width: 353px;
}
</style>
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
            
                <!-- <h4>PHP - Multiple Image upload using dropzone.js</h4><br><br> -->
                <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
                    <br><div>
                     
                    </div>
                    <input type="hidden" name="vehicle_id" id="vehicle_id" value="<?=$id?>">
                </form>
            </div>
        </div>
      </div>


      <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="text-center text-between">
                 
              
                
                </div>
                <br><br>
                <!--<p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>-->
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr+>
                       
                        <th class="text-info">Image</th>
                        <th class="text-info">Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
              
                      <?php  
                      $data = DB::query("select * from vehicle_images where vehicle_id = '".$id."'");
                      foreach($data as $more)
                      { 
                        
                        
                        ?>
                          <tr>
                          
                            <td><img src="<?=$more['image_url']?>"  style="width:200px; height:200px;" /></td>
                       
                            
                            <td><a href="delete-vehicle-image.php?image_id=<?=$more['id']?>&vehicle_id=<?=$id?>"><button class="btn btn-danger mr-2" ><i class="fa fa-fw fa-edit"></i>Delete </button></a></td>



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
<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:10,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    };
</script>