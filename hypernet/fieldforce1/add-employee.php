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

<body class="dashboard " style="background-image: url(images/bg-login.jpg);  background-size:100%; ">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>




    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
                <li><a href="javascript:void(0)">Add Employee</a></li>
            </ol>
        </div>



        <div class="page-content  container-fluid">


            <div class="">



                <div class="nav  text-center">
                    <span class="active"><a data-toggle="tab" href="#new" class="btn bg-blue-800 padding-30 font-size-20 margin-bottom-20 white"
                            style="min-width:200px;"> Add Employee </a></span>
                    <span class=""><a data-toggle="tab" href="#csv" class="btn bg-orange-800 padding-30 font-size-20 margin-bottom-20 white"
                            style="min-width:200px;"> CSV Upload</a></span>
                </div>
            </div>
            <hr />

            <div class="tab-content ">
                <div class="tab-pane active" id="new">
                    <div class="padding-301  bg-blue-1001">

                        <div class="margin-top-0 font-size-18">Please fill out the following form</div>
                        <hr />

                        <div class="row">
                            <div class="col-lg-9">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                    data-style="btn-select">
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
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                    data-style="btn-select">
                                                    <option data-subtext=""> Male </option>
                                                    <option data-subtext=""> Female </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Contact Number</label>
                                            <input type="text" class="form-control" placeholder="..." />
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
                                                    <input type="text" class="form-control " value="10/24/17" />
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
                                                    <input type="text" class="form-control " value="10/24/17" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="form-group ">
                                            <label class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" placeholder="..."></textarea>
                                        </div>
                                    </div>




                                </div>





                            </div>

                            <div class="col-lg-3">

                                <div class="padding-20 padding-bottom-0 text-center">

                                    <div class="margin-bottom-10 ">
                                        <img src="images/thumbnail.png " class=" img-bordered  " style="max-height: 200px;">


                                    </div>

                                    <button type="button" class="btn btn-info  btn-round btn-xs"><i class="icon ion-ios-cloud-upload pull-left"
                                            aria-hidden="true"></i> Upload Photo</button>

                                </div>


                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <hr>
                                <div class="form-group1">
                                    <button type="button" class="btn btn-dark  ">
                                        Submit Details
                                    </button>
                                    <button type="button" class="btn btn-default   ">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="csv">

                    <div class="padding-20 bg-blue-100" style="max-width:600px; margin:auto;">

                        <div class="panel-body">
                            <div class="input-group form-group ">
                                <input placeholder="" type="text" class="form-control ">
                                <div class="input-group-btn">
                                    <div class="btn btn-info  ">
                                        <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">
                                            Browse</span>
                                    </div>
                                </div>
                            </div>




                            <div class="bg-teal-100 padding-20 text-center margin-bottom-30" style="border:2px dashed #eee;">
                                <img src="images/icon-file-upload.png" alt="" height="80"> <br /> <br /> Drag
                                and drop
                                your CSV/Excel file here </div>

                            <div class="text-center">
                                <b class="font-size-12">
                                    You can order the columns any way you like.
                                </b>

                            </div>

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
