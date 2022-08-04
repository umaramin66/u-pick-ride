<?php
include 'header.php';
?>
      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashoboad</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vehicles</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description text-muted">Add New Vehicle</p>
                <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label">Name</label>
                          <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Brand</label>
                          <select class="form-control form-control-sm mb-3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label">Model</label>
                          <input type="text" class="form-control" placeholder="Enter first name">
                        </div>
                      </div><!-- Col -->
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Transmission</label>
                          <select class="form-control form-control-sm mb-3">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div><!-- Col -->
                    </div><!-- Row -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-md-12 stretch-card grid-margin grid-margin-md-0 justify-content-center">
                      <div class="card">
                        <div class="card-body">
                          <form action="/file-upload" class="dropzone" id="exampleDropzone"></form>
                          <div class="form-row justify-content-center text-center">
                            <div class="col-md-4">
                              <button type="button" class="btn btn-primary mt-3">Done</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      <div>
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