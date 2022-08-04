<?php
include 'header.php';
?>


      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Driver</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Create Driver</p>
                <form id="create-driver" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text"  name="name" id="name" class="form-control"  placeholder="Enter name">
                          <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="name_error"></span>
                        </div>
                      </div>
        
                    
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input type="email"  name="email" id="email" class="form-control" placeholder="Email">
                          <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="email_error"></span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Password</label>
                          <input type="password"  name="password" id="password" class="form-control" placeholder="Password">
                          <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="password_error"></span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Save</button>
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
  <script src="js/create-driver.js"></script>
</script>
</body>
</html>