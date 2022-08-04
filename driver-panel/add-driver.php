<?php
include 'header.php';

$id = $_SESSION['driver_id']; 

$data = DB::queryFirstRow("select * from drivers where id = '$id' ");


$company  = DB::queryFirstRow("select * from company where id = '".$data['company_id']."' ");

?>


      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Driver</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Transportation Provider Info</p>
                <form id="add-driver" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text"  name="name" id="name" class="form-control" value="<?=$data['name']?>" placeholder="Enter name">
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Company Name</label>
                         <input type="text"  name="company_name" id="company_name" class="form-control" value="<?=$company['name']?>" readonly> 

                         
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <input type="text"  name="address" id="address" class="form-control"value="<?=$data['address']?>"placeholder="Enter Address">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Phone No</label>
                          <input type="text"  name="phone_number" id="phone_number" class="form-control"value="<?=$data['phone_number']?>" placeholder="Enter Phone ">
                        </div>
                    </div>




                      <div class="col-sm-12">
                        <div class="form-group">
                        <img style="display:block" id="new_image_driving_license" src="<?=$data['driving_license']?>" alt="" width="105" height="105" />

                            <label class="form-label" for="driving_license1">Driving License</label>
                            <!-- <img src="<?=$data['driving_license']?>"> -->
							           <input class="form-control" name="driving_license" onchange="previewFileDrivingLicense();" type="file" value="<?=$data['driving_license']?>" id="driving_license1">


                        

                        </div>
                      </div>
                      <input class="form-control" type="hidden" name="driving_license_image" id="driving_license_image" value="">








                      <div class="col-sm-12">
                        <div class="form-group">
                        <img style="display:block" id="new_image_business_license" src="<?=$data['business_license']?>" alt="" width="105" height="105" />
                            <label class="form-label" for="business_license1">Business License</label>
                            <!-- <img src="<?=$data['business_license']?>"> -->
							    <input class="form-control" name="business_license"onchange="previewFileBusinessLicense();" type="file"value="<?=$data['business_license']?>" id="business_license1">
                        
                        </div>
                      </div>
                      <input class="form-control" type="hidden" name="business_license_image" id="business_license_image" value="">



                      <div class="col-sm-12">
                        <div class="form-group">
                        <img style="display:block" id="new_image_auto_insurance" src="<?=$data['auto_insurance']?>" alt="" width="105" height="105" />
                            <label class="form-label" for="auto_insurance1">Auto Insurance</label>
                            <!-- <img src="<?=$data['auto_insurance']?>"> -->
							        <input class="form-control" name="auto_insurance"  onchange="previewFileAutoInsurance();" type="file" value="<?=$data['auto_insurance']?>" id="auto_insurance1">
                        </div>
                      </div>

                      <input class="form-control" type="hidden" name="auto_insurance_image" id="auto_insurance_image" value="">




                      <div class="col-sm-12">
                        <div class="form-group">
                        <img style="display:block" id="new_image_profile_picture" src="<?=$data['profile_picture']?>" alt="" width="105" height="105" />
                            <label class="form-label" for="profile_picture1">Profile Picture</label>
                            <!-- <img src="<?=$data['auto_insurance']?>"> -->
							        <input class="form-control" name="profile_picture"  onchange="previewFileProfilePicture();" type="file" value="<?=$data['profile_picture']?>" id="profile_picture1">
                        </div>
                      </div>

                      <input class="form-control" type="hidden" name="profile_picture_image" id="profile_picture_image" value="">


                      <div class="col-sm-12">
                        <div class="form-group">
                        <img style="display:block" id="new_image_uber_rating_pic" src="<?=$data['uber_rating_pic']?>" alt="" width="105" height="105" />
                            <label class="form-label" for="uber_rating_pic1">Uber Rating Pic</label>
                            <!-- <img src="<?=$data['uber_rating_pic']?>"> -->
							        <input class="form-control" name="uber_rating_pic"  onchange="previewFileUberRatingPic();" type="file" value="<?=$data['uber_rating_pic']?>" id="uber_rating_pic1">
                        </div>
                      </div>

                      <input class="form-control" type="hidden" name="uber_rating_pic_image" id="uber_rating_pic_image" value="">


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
<?php
include 'footer.php';
?>

  <script src="js/add-driver.js"></script>


<script type="text/javascript">

document.getElementById('driving_license_image').value = 0;




  function previewFileDrivingLicense() {

    var file1 = document.getElementById("driving_license1");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_image_driving_license').attr('src', e.target.result);
    document.getElementById('driving_license_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
//Bussiness License

document.getElementById('business_license_image').value = 0;




  function previewFileBusinessLicense() {

    var file1 = document.getElementById("business_license1");
    var file =   file1.files[0];
    
      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_image_business_license').attr('src', e.target.result);
    document.getElementById('business_license_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

// Auto Insurance
document.getElementById('auto_insurance_image').value = 0;




  function previewFileAutoInsurance() {

    var file1 = document.getElementById("auto_insurance1");
    var file =   file1.files[0];


      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_image_auto_insurance').attr('src', e.target.result);
    document.getElementById('auto_insurance_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

// Profile Picture

document.getElementById('profile_picture_image').value = 0;




  function previewFileProfilePicture() {

    var file1 = document.getElementById("profile_picture1");
    var file =   file1.files[0];

      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_image_profile_picture').attr('src', e.target.result);
    document.getElementById('profile_picture_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

// Uber Rating Pic
document.getElementById('uber_rating_pic_image').value = 0;




  function previewFileUberRatingPic() {

    var file1 = document.getElementById("uber_rating_pic1");
    var file =   file1.files[0];

      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_image_uber_rating_pic').attr('src', e.target.result);
    document.getElementById('uber_rating_pic_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

</script>
</body>
</html>