<?php  
include 'header.php';
?>

      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Image Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
          </ol>
        </nav>
        <form id="image-content-form" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
          <div class="row">
          <h2 class="text-info  px-4 py-5">First Page </h2>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Image Content Update</h4>
              
                  
                    <fieldset>
                      <div class="form-group">
                        <img style="display:block" id="new_first_page_main_image" src="<?=getSettings("first_page_main_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Main Image</label>
                          <input id="first_page_main_image"  onchange="previewFileMainImage();" class="form-control" name="first_page_main_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>
                      <input class="form-control" type="hidden" name="hidden_first_page_main_image" id="hidden_first_page_main_image" value="">
                      
                      
                      <div class="form-group">
                        <img style="display:block" id="new_first_page_third_section_first_image" src="<?=getSettings("first_page_third_section_first_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Third Section First Image</label>
                          <input id="first_page_third_section_first_image"  onchange="previewFileThirdSectionFirstImage();" class="form-control" name="first_page_third_section_first_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_first_page_third_section_first_image" id="hidden_first_page_third_section_first_image" value="">


                      <div class="form-group">
                        <img style="display:block" id="new_first_page_third_section_second_image" src="<?=getSettings("first_page_third_section_second_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Third Section Second Image</label>
                          <input id="first_page_third_section_second_image"  onchange="previewFileThirdSectionSecondImage();" class="form-control" name="first_page_third_section_second_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_first_page_third_section_second_image" id="hidden_first_page_third_section_second_image" value="">


                      <div class="form-group">
                        <img style="display:block" id="new_first_page_third_section_third_image" src="<?=getSettings("first_page_third_section_third_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Third Section Third Image</label>
                          <input id="first_page_third_section_third_image"  onchange="previewFileThirdSectionThirdImage();" class="form-control" name="first_page_third_section_third_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_first_page_third_section_third_image" id="hidden_first_page_third_section_third_image" value="">


                      <div class="form-group">
                        <img style="display:block" id="new_first_page_third_section_fourth_image" src="<?=getSettings("first_page_third_section_fourth_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Third Section First Image</label>
                          <input id="first_page_third_section_fourth_image"  onchange="previewFileThirdSectionFourthImage();" class="form-control" name="first_page_third_section_fourth_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_first_page_third_section_fourth_image" id="hidden_first_page_third_section_fourth_image" value="">

                      <div class="form-group">
                        <img style="display:block" id="new_first_page_last_section_main_image" src="<?=getSettings("first_page_last_section_main_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (First Page) Last Section Main Image</label>
                          <input id="first_page_last_section_main_image"  onchange="previewFileLastSectionMainImage();" class="form-control" name="first_page_last_section_main_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_first_page_last_section_main_image" id="hidden_first_page_last_section_main_image" value="">
                </div>
              </div>
            </div>
              <h2 class="text-info px-4 py-5">Transportation Provider Page </h2>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <h4 class="card-title">Image Content Update</h4>

                      
                      <div class="form-group">
                        <img style="display:block" id="new_transportation_provider_page_first_section_main_image" src="<?=getSettings("transportation_provider_page_first_section_main_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (Transportation Provider Page) First Section Main Image</label>
                          <input id="transportation_provider_page_first_section_main_image"  onchange="previewFileTransportationProviderFirstSectionMainImage();" class="form-control" name="transportation_provider_page_first_section_main_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_transportation_provider_page_first_section_main_image" id="hidden_transportation_provider_page_first_section_main_image" value="">


                      <div class="form-group">
                        <img style="display:block" id="new_transportation_provider_page_second_section_main_image" src="<?=getSettings("transportation_provider_page_second_section_main_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (Transportation Provider Page) Second Section Main Image</label>
                          <input id="transportation_provider_page_second_section_main_image"  onchange="previewFileTransportationProviderSecondSectionMainImage();" class="form-control" name="transportation_provider_page_second_section_main_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_transportation_provider_page_second_section_main_image" id="hidden_transportation_provider_page_second_section_main_image" value="">



                      <div class="form-group">
                        <img style="display:block" id="new_transportation_provider_page_last_section_first_image" src="<?=getSettings("transportation_provider_page_last_section_first_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (Transportation Provider Page) Last Section First Image</label>
                          <input id="transportation_provider_page_last_section_first_image"  onchange="previewFileTransportationProviderLastSectionFirstImage();" class="form-control" name="transportation_provider_page_last_section_first_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_transportation_provider_page_last_section_first_image" id="hidden_transportation_provider_page_last_section_first_image" value="">


                      <div class="form-group">
                        <img style="display:block" id="new_transportation_provider_page_last_section_second_image" src="<?=getSettings("transportation_provider_page_last_section_second_image")?>" alt="" width="125" height="125" /><br>
                          <label for="name">Landing (Transportation Provider Page) Last Section Second Image</label>
                          <input id="transportation_provider_page_last_section_second_image"  onchange="previewFileTransportationProviderLastSectionSecondImage();" class="form-control" name="transportation_provider_page_last_section_second_image" type="file">
                          <small>*Recomded Dimension (400 x 400)</small><br><br><br>
                      </div>

                      <input class="form-control" type="hidden" name="hidden_transportation_provider_page_last_section_second_image" id="hidden_transportation_provider_page_last_section_second_image" value="">


                      

                      <!-- <input class="btn btn-primary" type="submit" name="Save" value="Save"> -->
                    
                      </fieldset>
                  
                </div>
              </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3 mb-3 ml-3"  data-toggle="tooltip">Submit</button>
        </form>
        
      </div>

      <!-- partial:../../partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="#" target="_blank">UPick Ride</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->
  
    </div>
  </div>

<?php  
include 'footer.php';
?>

  <script src="js/image-content.js"></script>

  <script type="text/javascript">


//First Section
document.getElementById('hidden_first_page_main_image').value = 0;




  function previewFileMainImage() {

    var file1 = document.getElementById("first_page_main_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_first_page_main_image').attr('src', e.target.result);
    document.getElementById('hidden_first_page_main_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

//Third Section First Image

document.getElementById('hidden_first_page_third_section_first_image').value = 0;




  function previewFileThirdSectionFirstImage() {

    var file1 = document.getElementById("first_page_third_section_first_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_first_page_third_section_first_image').attr('src', e.target.result);
    document.getElementById('hidden_first_page_third_section_first_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

//Third Section Second Image

document.getElementById('hidden_first_page_third_section_second_image').value = 0;




  function previewFileThirdSectionSecondImage() {

    var file1 = document.getElementById("first_page_third_section_second_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_first_page_third_section_second_image').attr('src', e.target.result);
    document.getElementById('hidden_first_page_third_section_second_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

   }, false);

   if (file) {
    reader.readAsDataURL(file);
    }
}


//Third Section Third Image

document.getElementById('hidden_first_page_third_section_second_image').value = 0;




  function previewFileThirdSectionThirdImage() {

    var file1 = document.getElementById("first_page_third_section_third_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_first_page_third_section_third_image').attr('src', e.target.result);
    document.getElementById('hidden_first_page_third_section_third_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

   }, false);

   if (file) {
    reader.readAsDataURL(file);
    }
}

//Third Section Fourth Image

document.getElementById('hidden_first_page_third_section_fourth_image').value = 0;




  function previewFileThirdSectionFourthImage() {

    var file1 = document.getElementById("first_page_third_section_fourth_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_first_page_third_section_fourth_image').attr('src', e.target.result);
    document.getElementById('hidden_first_page_third_section_fourth_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

   }, false);

   if (file) {
    reader.readAsDataURL(file);
    }
}

//Last Section Main Image

document.getElementById('hidden_first_page_last_section_main_image').value = 0;


//Transportation Provider First Section Main Image

  function previewFileTransportationProviderFirstSectionMainImage() {

    var file1 = document.getElementById("transportation_provider_page_first_section_main_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_transportation_provider_page_first_section_main_image').attr('src', e.target.result);
    document.getElementById('hidden_transportation_provider_page_first_section_main_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

   }, false);

   if (file) {
    reader.readAsDataURL(file);
    }
}

//Transportation Provider Second Section Main Image

  function previewFileTransportationProviderSectionMainImage() {

    var file1 = document.getElementById("transportation_provider_page_second_section_main_image");
    var file =   file1.files[0];



      var reader  = new FileReader(); 
      reader.onload = function (e) {

    $('#new_transportation_provider_page_second_section_main_image').attr('src', e.target.result);
    document.getElementById('hidden_transportation_provider_page_second_section_main_image').value = 1;
        }

     reader.addEventListener("load", function () {

    globalImg = reader.result;

   }, false);

   if (file) {
    reader.readAsDataURL(file);
    }
}

//Transportation Provider Second Section Main Image

function previewFileTransportationProviderLastSectionFirstImage() {

  var file1 = document.getElementById("transportation_provider_page_last_section_first_image");
  var file =   file1.files[0];



    var reader  = new FileReader(); 
    reader.onload = function (e) {

  $('#new_transportation_provider_page_last_section_first_image').attr('src', e.target.result);
  document.getElementById('hidden_transportation_provider_page_last_section_first_image').value = 1;
      }

  reader.addEventListener("load", function () {

  globalImg = reader.result;

  }, false);

  if (file) {
  reader.readAsDataURL(file);
  }
}

//Transportation Provider Second Section Main Image

function previewFileTransportationProviderLastSectionSecondImage() {

  var file1 = document.getElementById("transportation_provider_page_last_section_second_image");
  var file =   file1.files[0];



    var reader  = new FileReader(); 
    reader.onload = function (e) {

  $('#new_transportation_provider_page_last_section_second_image').attr('src', e.target.result);
  document.getElementById('hidden_transportation_provider_page_last_section_second_image').value = 1;
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