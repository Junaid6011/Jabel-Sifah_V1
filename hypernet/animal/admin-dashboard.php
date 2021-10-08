<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="../plugins/images/hypernet-favicon.png" rel="icon" type="image/png" />
    <title>Welcome</title>
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

<body class="layout-boxed admin-bg ">
    <?php include_once('_header-admin.php'); ?>




    <div class="page1 bg-white">


        <div class="page-header">
            <h1 class="page-title">Admin Dashboard</h1>
            <!-- <p>Please fill following form. * values are required</p>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm   btn-success" onclick="window.history.go(-1)">
                    Back to Main Dashboard
                </button>
            </div> -->
        </div>

        <div class="page-content  ">



            <div class="padding-0">


                <div class="row">
                <div class="col-md-3">
                        <a href="admin-herds.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_herd.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Herds</span>
                            </div>
                        </a>
                    </div> 
                    <div class="col-md-3">
                        <a href="admin-feed.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                                <div class="margin-bottom-10   primary-800">
                                    <img src="images/icon_feed_stat.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase">Feed</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-3">
                        <a href="admin-jobs.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                                <div class="margin-bottom-10   primary-800">
                                    <img src="images/icon_leftmenu_jobs.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase">Jobs</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="admin-employees.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_leftmenu_employees.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Employees</span>
                            </div>
                        </a>
                    </div>
                 
                    <!-- <div class="col-md-3">
                        <a href="admin-bins.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_leftmenu_bins.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Bin</span>
                            </div>
                        </a>
                    </div> -->
                    <div class="col-md-3">
                        <a href="admin-fleets.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_leftmenu_assets.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Fleet</span>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="col-md-3">
                        <a href="admin-customer.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_leftmenu_jobs.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Customers / Contracts</span>
                            </div>
                        </a>
                    </div> -->
                     
                    

                    <!-- <div class="col-md-3">
                        <a href="admin-maintenances.php" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                    <img src="images/icon_leftmenu_maintenances.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Maintenance</span>
                            </div>
                        </a>
                    </div> -->


                 


                 
                     <!-- <div class="col-md-3">
                        <a href="" class="grey-700">
                            <div class="padding-15 bg-primary-100 text-center card  margin-bottom-30">
                                <div class="margin-bottom-10    primary-800">
                                <img src="images/icon_leftmenu_territorirs.png" alt="img" width="20">
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Dumpsite</span>
                            </div>
                        </a>
                    </div>  -->
                </div>


                <hr />


                <img src="images/Dashboard-2.png" title="img" class="img-responsive">


            </div>

        </div>


    </div>

   
 <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>
