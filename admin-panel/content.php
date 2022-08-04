<?php  
include 'header.php';
?>

      <!-- partial -->
      <div class="page-content">
        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
          </ol>
        </nav>
        <form  name="eform" class="eform" method="post" action="<?php $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
          <div class="row">
            <h2 class="text-info  px-4 py-5">First Page </h2>
            <div class="col-lg-12 grid-margin stretch-card">
              
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Content Update</h4>
                
                  
                    <fieldset>
                      <div class="form-group">
                        <label for="name">Landing (First Page) Main Heading</label>
                        <input id="first_page_main_heading" class="form-control" name="first_page_main_heading" value="<?=getSettings("first_page_main_heading")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Second Section Main Heading</label>
                        <input id="first_page_second_section_main_heading" class="form-control" name="first_page_second_section_main_heading" value="<?=getSettings("first_page_second_section_main_heading")?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (First Page) Second Section Button Text</label>
                        <input id="first_page_second_section_button_text" class="form-control" name="first_page_second_section_button_text" value="<?=getSettings("first_page_second_section_button_text") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Third Section Main Heading</label>
                        <input id="first_page_third_section_main_heading" class="form-control" name="first_page_third_section_main_heading" value="<?=getSettings("first_page_third_section_main_heading") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Third Section Button Text</label>
                        <input id="first_page_third_section_button_text" class="form-control" name="first_page_third_section_button_text" value="<?=getSettings("first_page_third_section_button_text") ?>" type="text">
                      </div>
                  







            


                      <div class="form-group">
                        <label for="name">Landing (First Page) Fourth Section Main Heading</label>
                        <input id="first_page_fourth_section_main_heading" class="form-control" name="first_page_fourth_section_main_heading" value="<?=getSettings("first_page_fourth_section_main_heading") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Fourth Section Sub Heading</label>
                        <input id="first_page_fourth_section_sub_heading" class="form-control" name="first_page_fourth_section_sub_heading" value="<?=getSettings("first_page_fourth_section_sub_heading") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Fourth Section Button Text</label>
                        <input id="first_page_fourth_section_button_text" class="form-control" name="first_page_fourth_section_button_text" value="<?=getSettings("first_page_fourth_section_button_text") ?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Main Heading</label>
                        <input id="first_page_fifth_section_main_heading" class="form-control" name="first_page_fifth_section_main_heading" value="<?=getSettings("first_page_fifth_section_main_heading") ?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Sub Heading part 1</label>
                        <input id="first_page_fifth_section_sub_heading_part_1" class="form-control" name="first_page_fifth_section_sub_heading_part_1" value="<?=getSettings("first_page_fifth_section_sub_heading_part_1") ?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Sub Heading part 2</label>
                        <input id="first_page_fifth_section_sub_heading_part_2" class="form-control" name="first_page_fifth_section_sub_heading_part_2" value="<?=getSettings("first_page_fifth_section_sub_heading_part_2") ?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Sub Heading part 3</label>
                        <input id="first_page_fifth_section_sub_heading_part_3" class="form-control" name="first_page_fifth_section_sub_heading_part_3" value="<?=getSettings("first_page_fifth_section_sub_heading_part_3") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Paragraph part 1</label>
                        <input id="first_page_fifth_section_paragraph_part_1" class="form-control" name="first_page_fifth_section_paragraph_part_1" value="<?=getSettings("first_page_fifth_section_paragraph_part_1") ?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Paragraph part 2</label>
                        <input id="first_page_fifth_section_paragraph_part_1" class="form-control" name="first_page_fifth_section_paragraph_part_2" value="<?=getSettings("first_page_fifth_section_paragraph_part_2") ?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (First Page) Fifth Section Paragraph part 3</label>
                        <input id="first_page_fifth_section_paragraph_part_2" class="form-control" name="first_page_fifth_section_paragraph_part_3" value="<?=getSettings("first_page_fifth_section_paragraph_part_3") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Main Heading</label>
                        <input id="first_page_sixth_section_main_heading" class="form-control" name="first_page_sixth_section_main_heading" value="<?=getSettings("first_page_sixth_section_main_heading") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Sub Heading part 1</label>
                        <input id="first_page_sixth_section_sub_heading_part_1" class="form-control" name="first_page_sixth_section_sub_heading_part_1" value="<?=getSettings("first_page_sixth_section_sub_heading_part_1") ?>" type="text">
                      </div>

                      
                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Sub Heading part 2</label>
                        <input id="first_page_sixth_section_sub_heading_part_2" class="form-control" name="first_page_sixth_section_sub_heading_part_2" value="<?=getSettings("first_page_sixth_section_sub_heading_part_2") ?>" type="text">
                      </div>

                      
                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Sub Heading part 1</label>
                        <input id="first_page_sixth_section_sub_heading_part_3" class="form-control" name="first_page_sixth_section_sub_heading_part_3" value="<?=getSettings("first_page_sixth_section_sub_heading_part_3") ?>" type="text">
                      </div>

                      
                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Sub Heading part 1</label>
                        <input id="first_page_sixth_section_sub_heading_part_4" class="form-control" name="first_page_sixth_section_sub_heading_part_4" value="<?=getSettings("first_page_sixth_section_sub_heading_part_4") ?>" type="text">
                      </div>

                      
                      <div class="form-group">
                        <label for="name">Landing (First Page) Sixth Section Search Button</label>
                        <input id="first_page_sixth_section_search_button" class="form-control" name="first_page_sixth_section_search_button" value="<?=getSettings("first_page_sixth_section_search_button") ?>" type="text">
                      </div>  
                </div>
              </div>
            </div>
                <h2 class="text-info px-4 py-5">Second Page </h2>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                      <div class="form-group">
                        <label for="name">Landing (Book Ride Page) First Section Sub Heading Part 1</label>
                        <input id="book_ride_page_first_section_sub_heading_part_part_1" class="form-control" name="book_ride_page_first_section_sub_heading_part_part_1" value="<?=getSettings("book_ride_page_first_section_sub_heading_part_part_1") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Book Ride Page) First Section Sub Heading Part 2</label>
                        <input id="book_ride_page_first_section_sub_heading_part_part_2" class="form-control" name="book_ride_page_first_section_sub_heading_part_part_2" value="<?=getSettings("book_ride_page_first_section_sub_heading_part_part_2") ?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Book Ride Page) First Section Button</label>
                        <input id="book_ride_page_first_section_button" class="form-control" name="book_ride_page_first_section_button" value="<?=getSettings("book_ride_page_first_section_button") ?>" type="text">
                      </div>

                </div>
              </div>
            </div>
                <h2 class="text-info px-4 py-5">Transportation Provider Page </h2>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) First Section Main Heading</label>
                        <input id="transportation_provider_page_first_section_main_heading") class="form-control" name="transportation_provider_page_first_section_main_heading" value="<?=getSettings("transportation_provider_page_first_section_main_heading")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) First Section Main Heading Two</label>
                        <input id="transportation_provider_page_first_section_main_heading_two" class="form-control" name="transportation_provider_page_first_section_main_heading_two" value="<?=getSettings("transportation_provider_page_first_section_main_heading_two")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) First Section Paragraph</label>
                        <input id="transportation_provider_page_first_section_paragraph" class="form-control" name="transportation_provider_page_first_section_paragraph" value="<?=getSettings("transportation_provider_page_first_section_paragraph")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) First Section Button</label>
                        <input id="transportation_provider_page_first_section_button" class="form-control" name="transportation_provider_page_first_section_button" value="<?=getSettings("transportation_provider_page_first_section_button")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) First Section Button</label>
                        <input id="transportation_provider_page_first_section_button" class="form-control" name="transportation_provider_page_first_section_button" value="<?=getSettings("transportation_provider_page_first_section_button")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Main Heading</label>
                        <input id="transportation_provider_page_second_section_main_heading" class="form-control" name="transportation_provider_page_second_section_main_heading" value="<?=getSettings("transportation_provider_page_second_section_main_heading")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Sub Heading Part One</label>
                        <input id="transportation_provider_page_second_section_sub_heading_part_one" class="form-control" name="transportation_provider_page_second_section_sub_heading_part_one" value="<?=getSettings("transportation_provider_page_second_section_sub_heading_part_one")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Sub Heading Part Two</label>
                        <input id="transportation_provider_page_second_section_sub_heading_part_two" class="form-control" name="transportation_provider_page_second_section_sub_heading_part_two" value="<?=getSettings("transportation_provider_page_second_section_sub_heading_part_two")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Sub Heading Part Three</label>
                        <input id="transportation_provider_page_second_section_sub_heading_part_three" class="form-control" name="transportation_provider_page_second_section_sub_heading_part_three" value="<?=getSettings("transportation_provider_page_second_section_sub_heading_part_three")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Paragraph Part One</label>
                        <input id="transportation_provider_page_second_section_paragraph_part_one" class="form-control" name="transportation_provider_page_second_section_paragraph_part_one" value="<?=getSettings("transportation_provider_page_second_section_paragraph_part_one")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Paragraph Part Two</label>
                        <input id="transportation_provider_page_second_section_paragraph_part_one" class="form-control" name="transportation_provider_page_second_section_paragraph_part_two" value="<?=getSettings("transportation_provider_page_second_section_paragraph_part_two")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Second Section Paragraph Part Three</label>
                        <input id="transportation_provider_page_second_section_paragraph_part_three" class="form-control" name="transportation_provider_page_second_section_paragraph_part_three" value="<?=getSettings("transportation_provider_page_second_section_paragraph_part_three")?>" type="text">
                      </div>



                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Main Heading</label>
                        <input id="transportation_provider_page_third_section_main_heading" class="form-control" name="transportation_provider_page_third_section_main_heading" value="<?=getSettings("transportation_provider_page_third_section_main_heading")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Main Paragraph</label>
                        <input id="transportation_provider_page_third_section_main_paragraph" class="form-control" name="transportation_provider_page_third_section_main_paragraph" value="<?=getSettings("transportation_provider_page_third_section_main_paragraph")?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Sub Heading Part One</label>
                        <input id="transportation_provider_page_third_section_sub_heading_part_one" class="form-control" name="transportation_provider_page_third_section_sub_heading_part_one" value="<?=getSettings("transportation_provider_page_third_section_sub_heading_part_one")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Sub Heading Part Two</label>
                        <input id="transportation_provider_page_third_section_sub_heading_part_two" class="form-control" name="transportation_provider_page_third_section_sub_heading_part_two" value="<?=getSettings("transportation_provider_page_third_section_sub_heading_part_two")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Sub Heading Part Three</label>
                        <input id="transportation_provider_page_third_section_sub_heading_part_three" class="form-control" name="transportation_provider_page_third_section_sub_heading_part_three" value="<?=getSettings("transportation_provider_page_third_section_sub_heading_part_three")?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Paragraph Part One</label>
                        <input id="transportation_provider_page_third_section_paragraph_part_one" class="form-control" name="transportation_provider_page_third_section_paragraph_part_one" value="<?=getSettings("transportation_provider_page_third_section_paragraph_part_one")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Paragraph Part Two</label>
                        <input id="transportation_provider_page_third_section_paragraph_part_two" class="form-control" name="transportation_provider_page_third_section_paragraph_part_two" value="<?=getSettings("transportation_provider_page_third_section_paragraph_part_two")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Paragraph Part Three</label>
                        <input id="transportation_provider_page_third_section_paragraph_part_three" class="form-control" name="transportation_provider_page_third_section_paragraph_part_three" value="<?=getSettings("transportation_provider_page_third_section_paragraph_part_three")?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Third Section Button Text</label>
                        <input id="transportation_provider_page_third_section_button_text" class="form-control" name="transportation_provider_page_third_section_button_text" value="<?=getSettings("transportation_provider_page_third_section_button_text")?>" type="text">
                      </div>



                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Main Heading</label>
                        <input id="transportation_provider_page_fourth_section_main_heading" class="form-control" name="transportation_provider_page_fourth_section_main_heading" value="<?=getSettings("transportation_provider_page_fourth_section_main_heading")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Main Paragraph</label>
                        <input id="transportation_provider_page_fourth_section_main_paragraph" class="form-control" name="transportation_provider_page_fourth_section_main_paragraph" value="<?=getSettings("transportation_provider_page_fourth_section_main_paragraph")?>" type="text">
                      </div>


                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Sub Heading Part One</label>
                        <input id="transportation_provider_page_fourth_section_sub_heading_part_one" class="form-control" name="transportation_provider_page_fourth_section_sub_heading_part_one" value="<?=getSettings("transportation_provider_page_fourth_section_sub_heading_part_one")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Sub Heading Part Two</label>
                        <input id="transportation_provider_page_fourth_section_sub_heading_part_two" class="form-control" name="transportation_provider_page_fourth_section_sub_heading_part_two" value="<?=getSettings("transportation_provider_page_fourth_section_sub_heading_part_two")?>" type="text">
                      </div>

                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Paragraph Part One</label>
                        <input id="transportation_provider_page_fourth_section_paragraph_part_one" class="form-control" name="transportation_provider_page_fourth_section_paragraph_part_one" value="<?=getSettings("transportation_provider_page_fourth_section_paragraph_part_one")?>" type="text">
                      </div>
                      <div class="form-group">
                        <label for="name">Landing (Transportation Provider Page) Fourth Section Paragraph Part Two</label>
                        <input id="transportation_provider_page_fourth_section_paragraph_part_two" class="form-control" name="transportation_provider_page_fourth_section_paragraph_part_two" value="<?=getSettings("transportation_provider_page_fourth_section_paragraph_part_two")?>" type="text">
                      </div>
                      
                      <!-- <input class="btn btn-primary" type="submit" name="Save" value="Save"> -->
                      
                      </fieldset>
                </div>
              </div>
              
            </div>
            
          </div>
          <button type="submit" name="Save1" value="Save" class="btn btn-primary">Save</button>
        </form>
      </div>

      <!-- partial:../../partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2022 <a href="https://www.upickride.com" target="_blank">UPick Ride</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
      </footer>
      <!-- partial -->
  
    </div>
  </div>



  <?php
include 'footer.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // echo "<script>alert(content saved)</script>";
    setSettings("first_page_main_heading", $_POST['first_page_main_heading']);




    setSettings("first_page_second_section_main_heading", $_POST['first_page_second_section_main_heading']);

    setSettings("first_page_second_section_button_text", $_POST['first_page_second_section_button_text']);





    setSettings("first_page_third_section_main_heading",$_POST['first_page_third_section_main_heading']);

    setSettings("first_page_third_section_button_text", $_POST['first_page_third_section_button_text']);




    setSettings("first_page_fourth_section_main_heading",$_POST['first_page_fourth_section_main_heading']);

    setSettings("first_page_fourth_section_sub_heading",$_POST['first_page_fourth_section_sub_heading']);

    setSettings("first_page_fourth_section_button_text", $_POST['first_page_fourth_section_button_text']);

    
    
    setSettings("first_page_fifth_section_main_heading", $_POST['first_page_fifth_section_main_heading']);

    setSettings("first_page_fifth_section_sub_heading_part_1",$_POST['first_page_fifth_section_sub_heading_part_1']);

    setSettings("first_page_fifth_section_sub_heading_part_2",$_POST['first_page_fifth_section_sub_heading_part_2']);

    setSettings("first_page_fifth_section_sub_heading_part_3",$_POST['first_page_fifth_section_sub_heading_part_3']);


    setSettings("first_page_fifth_section_paragraph_part_1",$_POST['first_page_fifth_section_paragraph_part_1']);

    setSettings("first_page_fifth_section_paragraph_part_2",$_POST['first_page_fifth_section_paragraph_part_2']);

    setSettings("first_page_fifth_section_paragraph_part_2",$_POST['first_page_fifth_section_paragraph_part_3']);




    setSettings("first_page_sixth_section_main_heading",$_POST['first_page_sixth_section_main_heading']);


    setSettings("first_page_sixth_section_sub_heading_part_1",$_POST['first_page_sixth_section_sub_heading_part_1']);

    setSettings("first_page_sixth_section_sub_heading_part_2",$_POST['first_page_sixth_section_sub_heading_part_2']);

    setSettings("first_page_sixth_section_sub_heading_part_3",$_POST['first_page_sixth_section_sub_heading_part_3']);

    setSettings("first_page_sixth_section_sub_heading_part_4",$_POST['first_page_sixth_section_sub_heading_part_4']);


    setSettings("first_page_sixth_section_search_button",$_POST['first_page_sixth_section_search_button']);



    setSettings("book_ride_page_first_section_sub_heading_part_part_1",$_POST['book_ride_page_first_section_sub_heading_part_part_1']);

    setSettings("book_ride_page_first_section_sub_heading_part_part_2",$_POST['book_ride_page_first_section_sub_heading_part_part_2']);

    setSettings("book_ride_page_first_section_button",$_POST['book_ride_page_first_section_button']);


    setSettings("transportation_provider_page_first_section_main_heading",$_POST['transportation_provider_page_first_section_main_heading']);

    setSettings("transportation_provider_page_first_section_main_heading_two",$_POST['transportation_provider_page_first_section_main_heading_two']);

    setSettings("transportation_provider_page_first_section_paragraph",$_POST['transportation_provider_page_first_section_paragraph']);
    
    setSettings("transportation_provider_page_first_section_button",$_POST['transportation_provider_page_first_section_button']);



    setSettings("transportation_provider_page_second_section_main_heading",$_POST['transportation_provider_page_second_section_main_heading']);

    setSettings("transportation_provider_page_second_section_sub_heading_part_one",$_POST['transportation_provider_page_second_section_sub_heading_part_one']);

    setSettings("transportation_provider_page_second_section_sub_heading_part_two",$_POST['transportation_provider_page_second_section_sub_heading_part_two']);

    setSettings("transportation_provider_page_second_section_sub_heading_part_three",$_POST['transportation_provider_page_second_section_sub_heading_part_three']);
    


    setSettings("transportation_provider_page_third_section_main_heading",$_POST['transportation_provider_page_third_section_main_heading']);
    
    setSettings("transportation_provider_page_third_section_main_paragraph",$_POST['transportation_provider_page_third_section_main_paragraph']);


    setSettings("transportation_provider_page_third_section_sub_heading_part_one",$_POST['transportation_provider_page_third_section_sub_heading_part_one']);

    setSettings("transportation_provider_page_third_section_sub_heading_part_two",$_POST['transportation_provider_page_third_section_sub_heading_part_two']);

    setSettings("transportation_provider_page_third_section_sub_heading_part_three",$_POST['transportation_provider_page_third_section_sub_heading_part_three']);


    setSettings("transportation_provider_page_third_section_paragraph_part_one",$_POST['transportation_provider_page_third_section_paragraph_part_one']);

    setSettings("transportation_provider_page_third_section_paragraph_part_two",$_POST['transportation_provider_page_third_section_paragraph_part_two']);

    setSettings("transportation_provider_page_third_section_paragraph_part_three",$_POST['transportation_provider_page_third_section_paragraph_part_three']);

    setSettings("transportation_provider_page_third_section_button_text",$_POST['transportation_provider_page_third_section_button_text']);



    setSettings("transportation_provider_page_fourth_section_main_heading",$_POST['transportation_provider_page_fourth_section_main_heading']);

    setSettings("transportation_provider_page_fourth_section_main_paragraph",$_POST['transportation_provider_page_fourth_section_main_paragraph']);


    setSettings("transportation_provider_page_fourth_section_sub_heading_part_one",$_POST['transportation_provider_page_fourth_section_sub_heading_part_one']);

    setSettings("transportation_provider_page_fourth_section_sub_heading_part_two",$_POST['transportation_provider_page_fourth_section_sub_heading_part_two']);


    setSettings("transportation_provider_page_fourth_section_paragraph_part_one",$_POST['transportation_provider_page_fourth_section_sub_heading_part_one']);

    setSettings("transportation_provider_page_fourth_section_paragraph_part_two",$_POST['transportation_provider_page_fourth_section_paragraph_part_two']);
}

?>
</body>
</html>