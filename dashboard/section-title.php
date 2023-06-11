<?php include"header.php";?>
<?php include"sidebar.php";?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
 <div class="page-content">
       <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Section Titles</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Section</a></li>
                                        <li class="breadcrumb-item active">Titles</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> Section Titles
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$about_title = mysqli_real_escape_string($con,$_POST['about_title']);
$about_text = mysqli_real_escape_string($con,$_POST['about_text']);
$product_title = mysqli_real_escape_string($con,$_POST['product_title']);
$product_text = mysqli_real_escape_string($con,$_POST['product_text']);
$honey_title = mysqli_real_escape_string($con,$_POST['honey_title']);
$honey_text = mysqli_real_escape_string($con,$_POST['honey_text']);
$service_title = mysqli_real_escape_string($con,$_POST['service_title']);
$service_text = mysqli_real_escape_string($con,$_POST['service_text']);
$contact_title = mysqli_real_escape_string($con,$_POST['contact_title']);
$contact_text = mysqli_real_escape_string($con,$_POST['contact_text']);
$enquiry_title = mysqli_real_escape_string($con,$_POST['enquiry_title']);
$enquiry_text = mysqli_real_escape_string($con,$_POST['enquiry_text']);
$nature_honey_title = mysqli_real_escape_string($con,$_POST['nature_honey_title']);
$nature_honey_text = mysqli_real_escape_string($con,$_POST['nature_honey_text']);

$faq_title = mysqli_real_escape_string($con,$_POST['faq_title']);
$faq_text = mysqli_real_escape_string($con,$_POST['faq_text']);

 if ( strlen($about_title) < 1 ){
$msg=$msg."About Title field can not be empty.<BR>";
$status= "NOTOK";}
 if ( strlen($about_text) < 1 ){
$msg=$msg."About Text Field Must contain a Character.<BR>";
$status= "NOTOK";}


 /*
$uploads_dir = 'uploads';

        $tmp_name = $_FILES["ufile"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["ufile"]["name"]);
        $random_digit=rand(0000,9999);
        $new_file_name=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");*/

if($status=="OK")
{
$qb=mysqli_query($con,"update section_title set about_title='$about_title', about_text='$about_text', product_title='$product_title',product_text='$product_text',honey_title='$honey_title',honey_text='$honey_text',service_title='$service_title',service_text='$service_text',faq_text='$faq_text',faq_title='$faq_title',nature_honey_title='$nature_honey_title',nature_honey_text='$nature_honey_text',contact_title='$contact_title',contact_text='$contact_text',enquiry_title='$enquiry_title',enquiry_text='$enquiry_text' where id=1");

		if($qb){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Section Titles Updated successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

		}
	}

        elseif ($status!=="OK") {
            $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


    }
    else{
			$errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //printing error if found in validation


		}
           }
           ?>



                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">

                                        <?php
					 $query="SELECT * FROM section_title where id=1 ";


 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	$about_title="$row[about_title]";
	$about_text="$row[about_text]";
  $product_title="$row[product_title]";
  $product_text="$row[product_text]";
    $honey_title="$row[honey_title]";
  $honey_text="$row[honey_text]";
  $service_title="$row[service_title]";
  $service_text="$row[service_text]";
  $port_title="$row[port_title]";
  $port_text="$row[port_text]";
    $faq_title="$row[faq_title]";
  $faq_text="$row[faq_text]";
  $contact_title="$row[contact_title]";
  $contact_text="$row[contact_text]";
  $enquiry_title="$row[enquiry_title]";
  $enquiry_text="$row[enquiry_text]";
    $nature_honey_title="$row[nature_honey_title]";
  $nature_honey_text="$row[nature_honey_text]";
}
  ?>




                                      <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   ?>
              <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">


   <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> About Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="about_title"  value="<?php print $about_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> About Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="about_text" rows="2"><?php print $about_text ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Our Product</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="product_title"  value="<?php print $product_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Product Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="product_text" rows="2"><?php print $product_text ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Honey Benefit Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="honey_title"  value="<?php print $honey_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Honey Benefit Title Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="honey_text" rows="2"><?php print $honey_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Service Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="service_title"  value="<?php print $service_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Service Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="service_text" rows="2"><?php print $service_text ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Faq Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="faq_title"  value="<?php print $faq_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Faq Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="faq_text" rows="2"><?php print $faq_text ?></textarea>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Nature Honey Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="nature_honey_title"  value="<?php print $nature_honey_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Nature Honey Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="nature_honey_text" rows="2"><?php print $nature_honey_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Contact Us Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="contact_title"  value="<?php print $contact_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Contact Us Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="contact_text" rows="2"><?php print $contact_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Enquiry Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="enquiry_title"  value="<?php print $enquiry_title ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Enquiry Text</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="enquiry_text" rows="2"><?php print $enquiry_text ?></textarea>
                                                        </div>
                                                    </div>

                                                    <!--end col-->

                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Update Titles</button>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                        <!--end tab-pane-->

                                        <!--end tab-pane-->

                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include"footer.php";?>
