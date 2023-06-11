<?php include "header.php"; ?>
<?php include "sidebar.php";
$teamid = $_GET['id']; ?>

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
                        <h4 class="mb-sm-0">Add Team</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Team</a></li>
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
                                        <i class="fas fa-home"></i> New Team
                                    </a>
                                </li>


                            </ul>
                        </div>
                        <?php
                        $query = "SELECT * FROM benefit WHERE id='$teamid' ";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                        $benefit = $row['benefit'];
                        $percentage = $row['percentage'];
                        ?>

                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (ISSET($_POST['save'])) {
                            $benefit = mysqli_real_escape_string($con, $_POST['benefit']);
                            $percentage = mysqli_real_escape_string($con, $_POST['percentage']);

                            if (strlen($benefit) < 5) {
                                $msg = $msg . "Benefit Must Be More Than 2 Char Length.<BR>";
                                $status = "NOTOK";
                            }

                            if ($status == "OK") {
                                $sql = "UPDATE benefit SET benefit='$benefit', percentage='$percentage' WHERE id=$teamid";
                                $qb = mysqli_query($con, $sql);

                                if ($qb) {
                                    $errormsg = "
                                    <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                        Team has been updated successfully.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                                    echo "<meta http-equiv='refresh' content='2;url=honey'>";
                                }
                            } elseif ($status !== "OK") {
                                $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                        " . $msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                ";
                            } else {
                                $errormsg = "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                        Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                ";
                            }
                        }
                        ?>

                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="benefitInput" class="form-label">Benefit</label>
                                                    <input type="text" class="form-control" name="benefit" value="<?php echo $benefit; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="percentageInput" class="form-label">Percentage</label>
                                                    <input type="text" class="form-control" name="percentage" value="<?php echo $percentage; ?>">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Update Team</button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
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

    <?php include "footer.php"; ?>
