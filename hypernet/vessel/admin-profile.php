<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="../plugins/images/hypernet-favicon.png" rel="icon" type="image/png" />
    <title>Welcome .::. Hypernet .::. </title>
    <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../plugins/bootstrap/bootstrap-extend.css">
    <link rel="stylesheet" href="../plugins/datatables-bootstrap/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../plugins/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="../plugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../plugins/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="../plugins/c3/c3.css">
    <link rel="stylesheet" href="../plugins/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="../plugins/circle/circle.css">
    <link rel="stylesheet" href="../plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="../plugins/styles/global.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="css/style.css">
    <script src="../plugins/jquery/jquery.js"></script>
    <script src="../plugins/bootstrap/bootstrap.js"></script>
    <script src="../plugins/asscroll/jquery-asScroll.js"></script>
    <script src="../plugins/mousewheel/jquery.mousewheel.js"></script>
    <script src="../plugins/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="../plugins/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="../plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../plugins/slick-carousel/slick.js"></script>
    <script src="../plugins/slimscroll/jquery.slimscroll.js"></script>
    <script src="../plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <!--[if lt IE 9]>
    <script src="../plugins/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="../plugins/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="../plugins/modernizr/modernizr.js"></script>
    <script src="../plugins/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="layout-boxed admin-bg ">
    <?php include_once('_header-admin.php'); ?>




    <div class="page1 bg-white">
        <div class="page-header">
            <h1 class="page-title">Profile</h1>

            <div class="page-header-actions">

                <a href="" class="btn btn-sm   btn-info btn-round">
                    Edit Profile
                </a>
                <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                    Back 
                </a>
            </div>
        </div>



        <div class="page-content  ">






            <div>

                <!-- <h3 class="margin-top-0 font-size-18">Please fill out the following form</h3>
                    <hr />
                    <div class=" alert alert-danger white  bg-red-800">
                        <p> 1- Invalid email address </p>
                        <p> 2- Invalid phone number </p>
                    </div> -->
                <div class="row">
                    <div class="col-lg-9">

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" value="Michel" disabled />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" value="Smith" disabled />
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Type</label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            disabled data-style="btn-select">
                                            <option data-subtext=""> Manager </option>
                                            <option data-subtext=""> Staff </option>
                                            <option data-subtext=""> Driver </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">CNIC Number</label>
                                    <input type="text" class="form-control" value="374055055556" disabled />
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Gender</label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            disabled data-style="btn-select">
                                            <option data-subtext=""> Male </option>
                                            <option data-subtext=""> Female </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Contact Number</label>
                                    <input type="text" class="form-control" value="(445) 1866990" disabled />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <div class=" ">
                                        <div class="input-group ">
                                            <span class="input-group-addon ">
                                                <i class="icon ion-calendar"></i>
                                            </span>
                                            <input type="text" class="form-control " value="10/24/17" disabled />
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Date of Joining</label>
                                    <div class=" ">
                                        <div class="input-group ">
                                            <span class="input-group-addon ">
                                                <i class="icon ion-calendar"></i>
                                            </span>
                                            <input type="text" class="form-control " value="10/24/17" disabled />
                                        </div>

                                    </div>
                                </div>
                            </div>





                        </div>


                    </div>
                    <div class="col-lg-3">

                        <div class="padding-20 padding-bottom-0 text-center">

                            <div class="margin-bottom-10 ">
                                <img src="images/user-img1.jpg " class=" img-bordered  " style="height: 200px;">


                            </div>

                            <!-- <button type="button" class="btn btn-info  btn-round btn-xs"><i class="icon ion-ios-cloud-upload pull-left"
                                    aria-hidden="true"></i>Upload Photo</button> -->

                        </div>


                    </div>

                </div>

                <hr />
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Email </label>
                            <input type="text" class="form-control" value="johny@gmail.com" disabled />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" value="Johon" disabled />
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12">
                        <hr />
                        <div class="form-group1">
                            <button type="button" class="btn btn-dark  btn-round">
                                Submit Details
                            </button>
                            <button type="button" class="btn btn-default btn-round ">
                                Clear
                            </button>
                        </div>
                    </div>
                </div>


            </div>





















        </div>
























    </div>








    </div>









    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>
