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

    <body class="dashboard ">
        <?php include_once('_header.php'); ?>
        <?php include_once('_leftmenu.php'); ?>
        <div class="page">
            <!-- <div class="breadcrumb-box">
        <ol class="breadcrumb breadcrumb-arrow ">
            <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
            <li><a href="javascript:void(0)">Page</a></li>
        </ol>
    </div>-->

            <div class="page-header padding-0 margin-bottom-30">
                <div class="widget widget-article type-flex margin-bottom-0">
                    <div class="widget-header cover overlay">
                        <img class="cover-image height-200" src="images/header.jpg" alt="">
                        <div class="overlay-panel text-center vertical-align">
                            <div class="widget-metas vertical-align-middle blue-grey-800">
                                <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:30px;">Field Force Management </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" page-content container-fluid">

                <div class="row no-space1  ">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget">
                            <div class="widget-content bg-orange-700 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative">
                                <div class="counter counter-lg counter-inverse">
                                    <b class="counter-label font-size-18 text-uppercase margin-bottom-10">Total Emplyees</b>
                                    <div class="counter-number-group">
                                        <span class="counter-number">365</span>
                                        <span class="counter-icon margin-left-10"><img src="images/icon-employees.png" height="50" /></span>
                                    </div>
                                    <div class="row no-space bottom bg-orange-800 padding-top-10 padding-bottom-10 margin-top-20">
                                        <div class="col-xs-4" style="border-right:1px solid #bbb;">
                                            <div class="counter ">
                                                <div class="counter-label ">On Shift</div>
                                                <div class="font-size-18">
                                                    13
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4" style="border-right:1px solid #bbb;">
                                            <div class="counter ">
                                                <div class="counter-label ">On Activity</div>
                                                <div class="font-size-18">
                                                    07
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="counter">
                                                <div class="counter-label ">Available</div>
                                                <div class="font-size-18">
                                                    06
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">


                        <div class="widget">
                            <div class="widget-content padding-20 bg-blue-700 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative">
                                <div class="counter counter-lg counter-inverse">
                                    <b class="counter-label font-size-18 text-uppercase margin-bottom-10">Total Sites</b>
                                    <div class="counter-number-group">
                                        <span class="counter-number">15</span>
                                        <span class="counter-icon margin-left-10"><img src="images/icon-sites.png" height="50" /></span>
                                    </div>
                                    <div class="row no-space bottom bg-blue-800 padding-top-10 padding-bottom-10 margin-top-20">
                                        <div class="col-xs-12" style="border-right:1px solid #999;">
                                            <div class="counter ">
                                                <div class="counter-label ">Total Zones</div>
                                                <div class="font-size-18">
                                                    60
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--<div class="col-lg-3 col-md-6">


                    <div class="widget">
                        <div class="widget-content padding-20 bg-teal-600 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative">
                            <div class="counter counter-lg counter-inverse">
                                <b class="counter-label font-size-18 text-uppercase margin-bottom-10">Total Bins</b>
                                <div class="counter-number-group">
                                    <span class="counter-number">365</span>
                                    <span class="counter-icon margin-left-10"><img src="images/icon-bins.png" height="50" /></span>
                                </div>
                                <div class="row no-space bottom bg-teal-800 padding-top-10 padding-bottom-10 margin-top-20">
                                    <div class="col-xs-12"  style="border-right:0px solid #999;">
                                        <div class="counter ">
                                            <div class="counter-label ">Operational</div>
                                            <div class="font-size-18">
                                                13
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                    <!--<div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <div class="widget-content padding-20 bg-green-600 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative">
                            <div class="counter counter-lg counter-inverse">
                                <b class="counter-label font-size-18 text-uppercase margin-bottom-10">Schedule & Activities</b>
                                <div class="counter-number-group">
                                    <span class="counter-number">365</span>
                                    <span class="counter-icon margin-left-10"><img src="images/icon-schedule.png" height="50" /></span>
                                </div>
                                <div class="row no-space bottom bg-green-800 padding-top-10 padding-bottom-10 margin-top-20">
                                    <div class="col-xs-6"  style="border-right:1px solid #999;">
                                        <div class="counter ">
                                            <div class="counter-label ">Current Activities</div>
                                            <div class="font-size-18">
                                                10
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="counter ">
                                            <div class="counter-label ">Active Schedules</div>
                                            <div class="font-size-18">
                                                2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


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