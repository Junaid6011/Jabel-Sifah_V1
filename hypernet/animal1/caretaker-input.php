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
<body class="layout-boxed1 site-menubar-unfold">


<?php include_once('_header_staff.php'); ?>



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

            <h1 class="page-title">Activities Details</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm   btn-success" onclick="window.history.go(-1)">
                    Back
                </button>

            </div>
        </div>
        <div class="page-content  container-fluid">


            <div class="">


                <div class="">
                    <div class="row ">

                        <div class="col-lg-4">
                            <div class="row ">

                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">Milking</b>
                                                    <div class="font-size-12">Activity Type</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">Daily</b>
                                                    <div class="font-size-12">Routine Type </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">03:00 PM</b>
                                                    <div class="font-size-12">
                                                        Start Time
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center white">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">04:00 PM</b>
                                                    <div class="font-size-12">End Time</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">12/Nov/2017</b>
                                                    <div class="font-size-12">From Date </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="widget margin-bottom-10">
                                        <div class="widget-content  padding-10 bg-blue-700    clearfix padding-top-5 ">
                                            <div class="counter counter text-center">
                                                <div class="counter-number-group white">
                                                    <b class="counter-number font-size-14">12/Nov/2017</b>
                                                    <div class="font-size-12">To Date </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-2 ">
                            <div class="padding-10 bg-blue-grey-100 ">

                                <div class="font-size-14 font-weight-600 margin-bottom-10">Cows List</div>
                                <div class="vscroll" style="height:165px;">
                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0  ">
                                        <li class="list-group-item padding-10 ">
                                            <i class="margin-right-10"> <img src="images/icon_cow1.png" alt="img" height="20"> </i> CW-102
                                        </li>
                                        <li class="list-group-item padding-10 ">
                                            <i class="margin-right-10"> <img src="images/icon_cow1.png" alt="img" height="20"> </i> CW-911
                                        </li>
                                        <li class="list-group-item padding-10 ">
                                            <i class="margin-right-10"> <img src="images/icon_cow1.png" alt="img" height="20"> </i> CW-300
                                        </li>
                                        <li class="list-group-item padding-10 ">
                                            <i class="margin-right-10"> <img src="images/icon_cow1.png" alt="img" height="20"> </i> CW-210
                                        </li>
                                        <li class="list-group-item padding-10 ">
                                            <i class="margin-right-10"> <img src="images/icon_cow1.png" alt="img" height="20"> </i> CW-111
                                        </li>
                                    </ul>
                                </div>

                            </div>







                        </div>
                        <div class="col-lg-6">
                            <div class="padding-10 bg-blue-grey-100 ">

                                <div class="font-size-14 font-weight-600 margin-bottom-10">Activity Notes</div>
                                <div class="">

                                    <div class="padding-20  bg-white vscroll" style="height:165px; border:0px solid #eee;">

                                        Lorem ipsum dolor sit amet, co  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra ultrices odio. Cras in nisl eleifend, elementum eros quis, elementum mauris.
                                        nsectetur adipiscing elsum dolor sit amet, co  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra ultrices odio. Cras in nisl eleifend, elementum eros quis, elementum mauris.
                                        nsectetur <br /> <br /> adipiscing elit. Nunc phsum dolor sit amet, co  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra ultrices odio. Cras in nisl eleifend, elementum eros quis, elementum mauris.
                                        nsectetur adipiscing elit. Nunc phit. Nunc pharetra ultrices odio. Cras in nisl eleifend, elementum eros quis, elementum mauris.
                                        <br /> <br />
                                        adipiscing elit. Nunc pharetra ulharetra uit. Nunc pharetrait. Nunc pharetraltrices c pharetra ultricesc pharetra ultricesc pharetra ultrices

                                    </div>

                                </div>

                            </div>





                        </div>


                    </div>

                    <hr />

                    <div class="row margin-top-30">
                        <div class="col-lg-12">


                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Performed Start Time</label>

                                        <input type="text" class="form-control" value="12:00pm" readonly />

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group ">
                                        <label class="control-label">Performed End Time</label>
                                        <input type="text" class="form-control" value="12:00pm" readonly />

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--<div class="form-group ">
                                        <label class="control-label">Action Result</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>-->

                                    <div class="form-group " >
                                        <label class="control-label">Action Result</label>
                                        <div class="vscroll" style="max-height:200px;">

                                            <div class="input-group margin-bottom-15 ">
                                                <span class="input-group-addon ">CW-150</span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="input-group margin-bottom-15 ">
                                                <span class="input-group-addon ">CW-256</span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="input-group margin-bottom-15 ">
                                                <span class="input-group-addon ">CW-990</span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="input-group margin-bottom-15 ">
                                                <span class="input-group-addon ">CW-452</span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="input-group margin-bottom-15 ">
                                                <span class="input-group-addon ">CW-150</span>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>




                        </div>


                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-lg-12">
                            <!--<button type="button" class="btn btn-success btn-lg  " disabled>  Start Activity</button>-->

                            <button type="button" class="btn btn-warning btn-lg pull-right ">  End Activity</button>

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
