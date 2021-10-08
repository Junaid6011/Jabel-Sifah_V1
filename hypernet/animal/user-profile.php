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
    <link rel="stylesheet" href="../plugins/styles/global.css">
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
<body class="layout-boxed1 site-menubar-unfold">


  <?php include_once('_header_staff.php'); ?>
    <!--<div w3-include-html="_leftmenu.html"></div>-->



    <div class="page-inner bg-white">
        <!--<div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Member</a></li>
            </ol>
        </div>-->
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->

        <div class="page-header">

            <h1 class="page-title">My Profile Details</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm   btn-success">
                    Edit
                </button>

                <button type="button" class="btn btn-sm   btn-success" onclick="window.history.go(-1)">
                    Back
                </button>

            </div>
        </div>
        <div class="page-content  container-fluid">


            <div class="">


                <div class="row">
                    <div class="col-lg-9">

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" value="Danish" disabled />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" value="Kumar" disabled />
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" value="danish.kumar@gmail.com" disabled />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Type</label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" disabled>
                                            <option data selected> Caretakers  </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">CNIC Number</label>
                                    <input type="text" class="form-control" value="35448-25565-115" disabled/>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Language</label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" disabled>
                                            <option data-subtext=""> French  </option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Gender</label>
                                    <input type="text" class="form-control" value="Male" disabled/>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Contact Number</label>
                                    <input type="text" class="form-control" value="(028) 225655" />
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <div class=" ">
                                        <div class="input-group ">
                                                    <span class="input-group-addon ">
                                                        <i class="icon wb-calendar"></i>
                                                    </span>
                                            <input type="text" class="form-control " value="10/24/85" disabled />
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Date of Joining</label>
                                    <input type="text" class="form-control" value="10/14/16" disabled />
                                </div>
                            </div>




                        </div>



                    </div>
                    <div class="col-lg-3">

                        <div class="padding-20 padding-bottom-0">

                            <div class="margin-bottom-10">
                                <img src="images/thumbnail.jpg " class="img-rounded img-bordered img-bordered-green" width="100%">
                            </div>
                            <button type="button" class="btn btn-default btn-block"><i class="icon ion-ios-cloud-upload pull-left" aria-hidden="true"></i>Upload Photo</button>


                        </div>


                    </div>

                </div>


                <div class="row">

                    <div class="col-sm-12">
                        <hr />
                        <div class="form-group1">
                            <button type="button" class="btn btn-success ">
                                Update Details
                            </button>
                            <button type="button" class="btn btn-default ">
                                Clear
                            </button>
                        </div>
                    </div>
                </div>


            </div>







        </div>








    </div>









    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>
</html>
