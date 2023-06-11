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
                                <h4 class="mb-sm-0">Create Member</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Member</a></li>
                                        <li class="breadcrumb-item active">Add</li>
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
                                                <i class="fas fa-home"></i> New Member
                                            </a>
                                        </li>


                                    </ul>
                                </div>



                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);
$cooperative = mysqli_real_escape_string($con,$_POST['cooperative']);
$province = mysqli_real_escape_string($con,$_POST['province']);
$district = mysqli_real_escape_string($con,$_POST['district']);
$telephone = mysqli_real_escape_string($con,$_POST['telephone']);




if($status=="OK")
{
$qf=mysqli_query($con,"INSERT INTO members (lastname, firstname, gender, cooperative, province, district, telephone) VALUES ('$lastname', '$firstname', '$gender', '$cooperative', '$province', '$district', '$telephone')");




		if($qf){
		    	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Blog has been added successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

		}
        else{
            $errormsg= "
            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                       Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                       </div>"; //printing error if found in validation

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



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 




                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   ?>


<?php
//index.php
$country = '';
$query = "SELECT * FROM country_state_city GROUP BY country ORDER BY country ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $country .= '<option value="'.$row["country"].'">'.$row["country"].'</option>';
}
?>
              <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                              <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First Name</label>
                                                            <input type="text" class="form-control"  name="firstname" placeholder="Enter First Name">
                                                        </div>
                                                    </div>

                                                      <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control"  name="lastname" placeholder="Enter Last Name">
                                                        </div>
                                                    </div>

                                                      <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Gender</label>
                                                            <select class="form-control" name="gender">
                                                                <option>Male</option>
                                                                <option>Female</option>

                                                            </select>
                                                        </div>
                                                    </div>


  <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Coperative</label>
                                                         
 <input type="text" class="form-control"  name="cooperative" placeholder="Enter Coperative Name">

                                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Province</label>
                                                             <select name="province" id="country" class="form-control action">
    <option value="">Select Province</option>
    <?php echo $country; ?>
   </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                         <label for="firstnameInput" class="form-label">District</label>

  <select id="state" name="district" class="form-control action">
    <option value="">Select District</option>
   </select>

                                                        </div>
                                                    </div>

   <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Telephone</label>
                                                         
 <input type="text" class="form-control"  name="telephone" placeholder="Enter Coperative Name">

                                                          
                                                        </div>

                                                  
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit" name="save" class="btn btn-primary">Create Member</button>

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
<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "country")
   {
    result = 'state';
   }
   else
   {
    result = 'city';
   }
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>
            <?php include"footer.php";?>
