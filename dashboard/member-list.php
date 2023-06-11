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
                                <h4 class="mb-sm-0">Members</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                        <li class="breadcrumb-item active">Members</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Member List</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th data-ordering="false">Full Name</th>
                                            <th data-ordering="false">Gender</th>
                                            <th data-ordering="false">Cooperative</th>
                                            <th data-ordering="false">province</th>
                                            <th data-ordering="false">District</th>
                                            <th data-ordering="false">Telephone</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php
				   $q="SELECT * FROM `members` ORDER BY `members`.`province` ASC";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$id="$ro[id]";
	$lastname="$ro[lastname]";
    $firstname="$ro[firstname]";
    $gender="$ro[gender]";
    $cooperative="$ro[cooperative]";
    $province="$ro[province]";
    $district="$ro[district]";
	$telephone="$ro[telephone]";


  print "<tr>


<td>
				  $lastname $firstname
				  </td>
                  <td>$gender</td>
                  <td>$cooperative</td>
                  <td>$province</td>
                  <td>$district</td>
                  <td>$telephone</td>
          <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                        <li>
                                                                <a href='edit-honey.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                    <i class='ri-pencil-fill align-bottom me-2 text-muted'></i> Edit
                                                                </a>
                                                            </li>
 <li>
                                                                <a href='deletehoney.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>


				  </tr>";

  }
  ?>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->




                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include"footer.php";?>
