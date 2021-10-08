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


    <!--<div class="site-menubar">
        <div class="site-menubar-body">

            <ul class="site-menu">
                <li class="site-menu-category">Navigation</li>
                <li class="site-menu-item active  ">
                    <a href="index.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_dashboard.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="site-menu-item   ">
                    <a href="trucks.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_trucks.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Trucks</span>
                    </a>
                </li>
                <li class="site-menu-item   ">
                    <a href="bins.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_bins.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Bins</span>
                    </a>
                </li>

                <li class="site-menu-item   ">
                    <a href="jobs.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_jobs.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Jobs</span>
                    </a>
                </li>

                <li class="site-menu-item">
                    <a href="drivers.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_drivers.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Drivers</span>
                    </a>
                </li>






                <li class="site-menu-item">
                    <a href="territories.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_territory.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Territory</span>
                    </a>
                </li>

                <li class="site-menu-item">
                    <a href="maintenances.html">
                        <i class="site-menu-icon icon "> <img src="images/icon_maintenances.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Maintenances</span>
                    </a>
                </li>


                <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                        <i class="site-menu-icon icon "> <img src="images/icon_admin.png" alt="img" width="30" /> </i>
                        <span class="site-menu-title">Admin</span>
                        <span class="site-menu-arrow"></span>
                    </a>


                    <ul class="site-menu-sub">
                        <li class="site-menu-item">
                            <a class="" href="admin-job.html">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">Job Form</span>
                            </a>
                        </li>
                        <li class="site-menu-item">
                            <a class="" href="">
                                <i class="site-menu-icon " aria-hidden="true"></i>
                                <span class="site-menu-title">Truck Form</span>
                            </a>
                        </li>

                    </ul>
                </li>



            </ul>
        </div>
        <div class="site-menubar-footer">
            <a href=""> <img src="../assets/images/logo-hypernym.png" alt="img" height="50" /></a>
        </div>

    </div>-->



    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
                <li><a href="javascript:void(0)">Sites</a></li>
            </ol>
        </div>



        <div class="page-content  container-fluid">


            <div class="row">
                <div class="col-lg-3">
                    <div class="widget  margin-bottom-30 shadow ">
                        <div class="padding-15 bg-green-100 " style="height:auto">
                            <div class="text-center ">
                                <div class="-group">

                                    <div class="margin-bottom-15 margin-top-20 ">
                                        <i> <img src="images/img-supervisor3.jpg" alt="img img-circle" style="height:140px; border-radius:50%;"
                                                class=""> </i>
                                    </div>
                                    <div class="padding-0 bg-cyan-000 text-left  margin-bottom-0  ">
                                        <div class="font-size-20 text-center margin-bottom-15  ">John Doe </div>
                                        <!--<div class="font-size-20  margin-bottom-15 text-center"><span class="badge badge-success">Online</span></div>-->



                                        <div class="bg-green-100 padding-0">

                                            <div class="padding-10  bg-white  margin-bottom-0 ">
                                                <div class="table-responsive vscroll" style="height:245px;">
                                                    <table class="table  table-condensed  no-border  margin-bottom-0">
                                                        <tbody>
                                                            <tr>
                                                                <th width=""> <b> CNIC #</b> </th>
                                                                <td class="text-left">37405 5055556 </td>
                                                            </tr>
                                                            <tr>
                                                                <th> <b> Licence # </b> </th>
                                                                <td class="text-left text-break">
                                                                    A5-55855
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> <b> Date of Birth </b> </th>
                                                                <td class="text-left text-break">
                                                                    14-Jul-1986
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> <b> Joining Date</b> </th>
                                                                <td class="text-left text-break">
                                                                    25-Dec-2017
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th> <b> Marital Status </b> </th>
                                                                <td class="text-left text-break">
                                                                    Single
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th> <b> Mobile </b> </th>
                                                                <td class="text-left text-break">
                                                                    055 9552625
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> <b> Age </b> </th>
                                                                <td class="text-left text-break">
                                                                    32
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th> <b> Salary </b> </th>
                                                                <td class="text-left text-break">
                                                                    -----
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>




                                        </div>




                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ">


                    <div class="row">


                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-0 pa bg-cyan-700 vertical-align height-80 white  text-center relative">
                                            <div class="vertical-align-middle">
                                                <div class="counter-label margin-bottom-0 clearfix">
                                                    <span class="font-size-14 ">
                                                        Activity Status
                                                    </span>
                                                </div>
                                                <b class="font-size-16">
                                                    On Activity
                                                </b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-80 white  text-center relative">
                                            <div class="vertical-align-middle">
                                                <div class="counter-label margin-bottom-0 clearfix">
                                                    <span class="font-size-14 ">
                                                        Shift Status
                                                    </span>
                                                </div>
                                                <b class="font-size-16">
                                                    On Shift
                                                </b>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-0 pa bg-green-700 vertical-align height-80 white  text-center relative">
                                            <div class="vertical-align-middle">
                                                <div class="counter-label margin-bottom-0 clearfix">
                                                    <span class="font-size-14 ">
                                                        Working Hours
                                                    </span>
                                                </div>
                                                <b class="font-size-16">
                                                    5H 3M
                                                </b>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="col-md-4">
                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-10 bg-blue-700 height-80 text-center relative">
                                            <div class="white">
                                                <div class="counter-label margin-bottom-5   clearfix">
                                                    <span class="font-size-12 ">
                                                        Heart Rate

                                                    </span>
                                                </div>
                                                <div class="">
                                                   
                                                    <b class="font-size-16">75 bpm</b>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-10 bg-green-700 height-80 text-center relative">
                                            <div class="white">
                                                <div class="counter-label margin-bottom-5 clearfix">
                                                    <span class="font-size-12 ">
                                                        Ambient Temperature
                                                    </span>
                                                </div>
                                                <div class="">
                                                   
                                                    <b class="font-size-16">104 °F</b>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="widget shadow">
                                        <div class="widget-content padding-top-10 bg-teal-700 height-80 text-center relative">
                                            <div class="white">
                                                <div class="counter-label margin-bottom-0 clearfix">
                                                    <span class="font-size-12 ">
                                                        Montly Attendance
                                                    </span>
                                                </div>
                                                <div class="">
                                                  
                                                    <b class="font-size-16"> 92 %</b>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>






                            </div>
                        </div>
                        <div class="col-md-4">


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget  margin-bottom-30 shadow bg-blue-600 text-center white" style="height:190px;">
                                        <div class="widget-content">
                                            <div class="padding-15 ">
                                                <div class="font-size-16 margin-bottom-20"> <b class="text-uppercase">
                                                        Success Index </b> <br> </div>


                                                <div class="text-center">
                                                    <a data-toggle="popover" data-original-title="Attendance"
                                                        data-trigger="hover" data-container="body" data-placement="top"
                                                        data-html="true" href="#" id="R3">
                                                        <div class="c100 p90 small green1  ">
                                                            <span class="pointer">9.5</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div id="popover-content-R3" class="hide">
                                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <th> Total </th>
                                                                    <td class="text-left">360</td>
                                                                </tr>
                                                                <tr>
                                                                    <th> Present </th>
                                                                    <td class="text-left">250</td>
                                                                </tr>
                                                                <tr>
                                                                    <th> Absent </th>
                                                                    <td class="text-left">75</td>
                                                                </tr>
                                                                <tr>
                                                                    <th> On Leave </th>
                                                                    <td class="text-left">10</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="col-md-6">


                                    <div class="widget  margin-bottom-30 shadow bg-orange-700 text-center white" style="height:190px;">
                                        <div class="widget-content">
                                            <div class="padding-15 ">
                                                <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase">
                                                        Rank </b> <br>
                                                    <div class="label bg-orange-700">Overall</div>
                                                </div>
                                                <span class="font-size-30">
                                                    7
                                                </span>
                                                <div class="margin-top-10">
                                                    <i> <img src="images/icon-top-star.png" alt="img" height="50" class="">
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>















                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mapbox   margin-bottom-0 shadow ">

                                <div class="icon" style="left:50%; top:20%;">
                                    <a data-toggle="popover" data-original-title="Site 1" data-trigger="hover"
                                        data-container="body" data-placement="top" data-html="true" href="#" id="S1">
                                        <img src="images/icon-map-pin-end.png" alt="img">
                                    </a>
                                    <div id="popover-content-S1" class="hide">
                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                            <tr>
                                                <th> Zones </th>
                                                <td class="text-left">10</td>
                                            </tr>
                                            <tr>
                                                <th> Works </th>
                                                <td class="text-left">102</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>


                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402"
                                    width="100%" height="295" frameborder="0" style="border:0; " allowfullscreen=""
                                    class="map pull-right1"></iframe>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default nav-tabs-horizontal  shadow">
                                <div class="panel-heading white1 margin-bottom-01 ">
                                    <div class="panel-actions ">

                                        <a class="panel-action icon ion-loop white" data-toggle="tooltip"
                                            data-original-title="Refresh"></a>
                                    </div>
                                    <h3 class="panel-title white1"> <b>Today's Data </b></h3>
                                </div>


                                <div class="panel-body   ">
                                    <div class="padding-10 bg-white">
                                        <div class="tab-content vscroll " style="height:200px;">


                                            <div class="modal fade  modal-success text-left" id="changezone" role="dialog"
                                                tabindex="-1">
                                                <div class="modal-dialog modal-center  modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span>x</span>
                                                            </button>
                                                            <h4 class="modal-title">Change</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Select
                                                                            Zone</label>
                                                                        <select class="form-control selectpicker show-tick show-menu-arrow "
                                                                            data-width="100%" data-size="5" title="Select"
                                                                            data-style="btn-select" data-live-search="true">
                                                                            <option selected>Zone-1</option>
                                                                            <option>Zone-2</option>
                                                                            <option>Zone-3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="modal fade  modal-success text-left" id="changesite" role="dialog"
                                                tabindex="-1">
                                                <div class="modal-dialog modal-center  modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span>x</span>
                                                            </button>
                                                            <h4 class="modal-title">Change</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Select
                                                                            Site</label>
                                                                        <select class="form-control selectpicker show-tick show-menu-arrow "
                                                                            data-width="100%" data-size="5" title="Select"
                                                                            data-style="btn-select" data-live-search="true">
                                                                            <option selected>Site-1</option>
                                                                            <option>Site-2</option>
                                                                            <option>Site-3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="tab-pane active" id="Jobs" role="tabpanel">
                                                <div class="panel-body  padding-0">
                                                    <div class="bg-green-00 padding-0">
                                                        <div class="table-responsive vscroll   " style="height:auto;">
                                                            <div class="table-responsive vscroll1   " style="height:auto;">
                                                                <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width=""> <b>Site</b> </th>
                                                                            <td class="text-left">
                                                                                Site 1


                                                                                <a class="btn btn-default btn-xs pull-right"
                                                                                    href="" data-target="#changesite"
                                                                                    data-toggle="modal">
                                                                                    Change</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width=""> <b>Zone</b> </th>
                                                                            <td class="text-left">
                                                                                Zone 1

                                                                                <a class="btn btn-default btn-xs pull-right"
                                                                                    href="" data-target="#changezone"
                                                                                    data-toggle="modal">
                                                                                    Change</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width=""> <b>Clock In</b> </th>
                                                                            <td class="text-left">
                                                                                08:05 am
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width=""> <b> Clock Out</b> </th>
                                                                            <td class="text-left text-break">
                                                                                07:23 pm
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width=""> <b>Operations Zone </b> </th>
                                                                            <td class="text-left">
                                                                                3

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width=""> <b> Hours in Zone</b> </th>
                                                                            <td class="text-left">
                                                                                09

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width=""> <b> Active Hours</b> </th>
                                                                            <td class="text-left">
                                                                                06

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="120"> <b> Supervisor</b> </th>
                                                                            <td class="text-left">
                                                                                <div class="media">
                                                                                    <div class="media-left padding-right-10">
                                                                                        <div class="">
                                                                                            <img src="images/img-supervisor.jpg"
                                                                                                alt="..." width="30"
                                                                                                class="img-rounded img-bordered img-bordered-warning">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="media-body" style="vertical-align:middle;">
                                                                                        John Doe
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>



                                                        </div>
                                                    </div>







                                                </div>
                                            </div>






                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>














                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">

                            <div class="modal fade  modal-success text-left" id="viewmap" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-center  modal-lg1">
                                    <div class="modal-content">
                                        <div class="modal-body padding-0">
                                            <div class="padding-10 clearfix">
                                                <div class="mapbox  margin-bottom-0 ">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402"
                                                        width="100%" height="500" frameborder="0" style="border:0; "
                                                        allowfullscreen="" class="map pull-right"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>



                </div>

            </div>






            <div class="row">
                <div class="col-lg-6">



                    <div class="panel panel-default shadow ">
                        <div class="panel-heading  ">
                            <div class="panel-actions ">
                                <select class="">
                                    <option>Today</option>
                                    <option>Last 24 Hours</option>
                                    <option selected>This Week</option>
                                </select>
                                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                            </div>

                            <h3 class="panel-title  "> <b>Productive Hours</b></h3>
                        </div>
                        <div class="panel-body   ">

                            <div class="margin-bottom-10 green-800  text-center" data-toggle="tooltip"
                                data-original-title="Last Updated Time"> <b>Last Updated:</b> 04:40pm, 6, Jun 18 </div>


                            <div class="chartbox">
                                <div id="chart-dd"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {





                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-dd',

                                                data: {
                                                    columns: [
                                                        ['Total', 450, 200, 200, 350, 150, 180],
                                                        ['Productive', 430, 150, 180, 300, 150, 380],
                                                    ],
                                                    type: 'bar',
                                                    groups: [
                                                        ['Total', 'Productive']
                                                    ]
                                                },
                                                grid: {
                                                    y: {
                                                        lines: [{ value: 0 }]
                                                    }
                                                },
                                                size: {
                                                    height: 200,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },


                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: 'Zones',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Sat', 'Sun ', 'Mon', 'Tue', 'Wed', 'Thu']
                                                    },
                                                    y: {
                                                        label: {
                                                            text: 'Hours',
                                                            position: 'outer-middle'
                                                        },
                                                    },
                                                },
                                                bar: {
                                                    width: {
                                                        ratio: 0.5
                                                    }
                                                }
                                            });
                                        })();
                                    });
                                </script>
                            </div>

                        </div>
                    </div>




                </div>

                <div class="col-lg-6">



                    <div class="panel panel-default shadow">
                        <div class="panel-heading  ">
                            <div class="panel-actions ">
                                <select class="">
                                    <option>Today</option>
                                    <option>Last 24 Hours</option>
                                </select>
                                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                            </div>

                            <h3 class="panel-title  "> <b>Violations</b></h3>
                        </div>
                        <div class="panel-body   ">

                            <div class="vscroll padding-right-10" style="height:220px;">
                                <table class="table  nowrap margin-bottom-0" id="datatable11">
                                    <tbody>

                                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                            <td width="80">
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-warning ">
                                                            Late Coming </span> </div>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="">ID-255</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>
                                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                            <td>
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-success ">Zone
                                                            Switch </span> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">ID-985</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>
                                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                            <td>
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-info ">
                                                            Out of Zone </span> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">ID-265</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>
                                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                            <td>
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-info ">
                                                            Out of Zone </span> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">ID-165</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>

                                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                            <td>
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-warning ">
                                                            Late Coming </span> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">ID-255</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>
                                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                            <td>
                                                <div class="media">
                                                    <div class="media-body margin-0"><span class="label label-success ">Zone
                                                            Switch </span> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="">ID-985</a>
                                            </td>
                                            <td>
                                                <a href="">S101 - Z2</a>
                                            </td>

                                            <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span>
                                            </td>

                                        </tr>





                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>




                </div>
            </div>




            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default nav-tabs-horizontal padding-0 margin-bottom-0 shadow">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#aaa" role="tab">Performance Analysis</a></li>
                                <li class=""><a data-toggle="tab" href="#bbb" role="tab">Subordinate</a></li>

                            </ul>
                            <div class="panel-actions ">
                                <select class="">
                                    <option>Today</option>
                                    <option>Last 24 Hours</option>
                                    <option selected>This Week</option>
                                </select>
                                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                            </div>
                        </div>

                        <div class="panel-body  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="aaa" role="tabpanel">
                                    <div class="padding-0  margin-bottom-15 clearfix" style="background-color:#fff">
                                        <div class="form-group1 margin-bottom-0">


                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <input type="text" class="form-control input-sm " placeholder="Search"
                                                    style="min-width:220px;">
                                            </div>


                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <select class="form-control input-sm ">
                                                    <option>Filter by Status</option>
                                                </select>
                                            </div>
                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <select class="form-control input-sm ">
                                                    <option>Filter by Location</option>
                                                    <option>-</option>
                                                    <option>-</option>
                                                </select>
                                            </div>
                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <div class="input-daterange    ">
                                                    <div class="input-group  input-group-sm">
                                                        <span class="input-group-addon hidden-xs1">
                                                            <i class="icon wb-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control date" value="10/24/17">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon hidden-xs1">to</span>
                                                        <input type="text" class="form-control date" value="10/25/17">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="table-responsive1 vscroll" style="height:100%;">

                                        <table class="table table-hover table-condensed margin-bottom-0">
                                            <thead>
                                                <tr class="">
                                                    <th class="nosort">Date</th>
                                                    <th class="text-left">Clock In</th>
                                                    <th class="text-center">Clock Out</th>
                                                    <th class="text-center">Operation Zone </th>
                                                    <th class="nosort text-center">Supervisor</th>

                                                    <th class="nosort text-center">Hours in Zone</th>
                                                    <th class="nosort text-center">Active Hours</th>
                                                    <th class="nosort text-center">Poductivty<span class="panel-action icon ion-information-circled grey-500 font-size-10"
                                                            data-toggle="tooltip" data-original-title="Active/Total (Hrs)"></span></th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>20-May-2018</td>
                                                    <td class="text-left">08:00 am </td>
                                                    <td class="text-center">10: 30 pm</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Ram Parsad</td>

                                                    <td class="text-center">12</td>
                                                    <td class="text-center">8</td>
                                                    <td class="text-left">
                                                        <div class="progress margin-bottom-0" data-labeltype="percentage"
                                                            data-plugin="progress">
                                                            <div class="progress-bar " role="progressbar" style="width: 45%;">
                                                                <span class="progress-label">45%</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>21-May-2018</td>
                                                    <td class="text-left">08:00 am </td>
                                                    <td class="text-center">08: 30 pm</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Ram Parsad</td>

                                                    <td class="text-center">8</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-left">
                                                        <div class="progress margin-bottom-0" data-labeltype="percentage"
                                                            data-plugin="progress">
                                                            <div class="progress-bar " role="progressbar" style="width: 35%;">
                                                                <span class="progress-label">35%</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>22-May-2018</td>
                                                    <td class="text-left">08:00 am </td>
                                                    <td class="text-center">08: 00 pm</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Ram Parsad</td>

                                                    <td class="text-center">12</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-left">
                                                        <div class="progress margin-bottom-0" data-labeltype="percentage"
                                                            data-plugin="progress">
                                                            <div class="progress-bar " role="progressbar" style="width: 75%;">
                                                                <span class="progress-label">75%</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>23-May-2018</td>
                                                    <td class="text-left">08:00 am </td>
                                                    <td class="text-center">08: 30 pm</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Ram Parsad</td>

                                                    <td class="text-center">8</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-left">
                                                        <div class="progress margin-bottom-0" data-labeltype="percentage"
                                                            data-plugin="progress">
                                                            <div class="progress-bar " role="progressbar" style="width: 65%;">
                                                                <span class="progress-label">65%</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>24-May-2018</td>
                                                    <td class="text-left">08:00 am </td>
                                                    <td class="text-center">08: 30 pm</td>
                                                    <td class="text-center">03</td>
                                                    <td class="text-center">Ram Parsad</td>

                                                    <td class="text-center">8</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-left">
                                                        <div class="progress margin-bottom-0" data-labeltype="percentage"
                                                            data-plugin="progress">
                                                            <div class="progress-bar " role="progressbar" style="width: 45%;">
                                                                <span class="progress-label">45%</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>






                                    </div>
                                </div>
                                <div class="tab-pane" id="bbb" role="tabpanel">
                                    <div class="padding-0  margin-bottom-15 clearfix" style="background-color:#fff">
                                        <div class="form-group1 margin-bottom-0">


                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <input type="text" class="form-control input-sm " placeholder="Search"
                                                    style="min-width:220px;">
                                            </div>


                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <select class="form-control input-sm ">
                                                    <option>Filter by Status</option>
                                                </select>
                                            </div>

                                            <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                                <div class="input-daterange    ">
                                                    <div class="input-group  input-group-sm">
                                                        <span class="input-group-addon hidden-xs1">
                                                            <i class="icon wb-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control date" value="10/24/17">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-addon hidden-xs1">to</span>
                                                        <input type="text" class="form-control date" value="10/25/17">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive1 vscroll" style="height:100%;">

                                        <table class="table table-hover table-condensed margin-bottom-0">
                                            <thead>
                                                <tr class="">
                                                    <th class="nosort">ID</th>
                                                    <th class="nosort ">Staff Name</th>
                                                    <th class="text-center">Clock In</th>
                                                    <th class="text-center">Clock Out</th>
                                                    <th class="nosort text-center">Operation Zone</th>
                                                    <th class="nosort text-center">Hours in Zone</th>
                                                    <th class="nosort text-center">Active Hours</th>
                                                    <th class="nosort text-center">Presence</th>

                                                    <th width="80" class="nosort text-right"> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="employee.php">AB-560</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10">
                                                            <img src="images/user-img1.jpg" width="24"></span> Irfan
                                                        Khan</td>
                                                    <td class="text-center">08: 30 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">S1-Z1</td>
                                                    <td class="text-center">11</td>
                                                    <td class="text-center">09</td>
                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                            data-toggle="tooltip" data-original-title="Details"><i
                                                                class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="employee.php">AB-561</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10">
                                                            <img src="images/user-img2.jpg" width="24"></span> Aqib
                                                        Sameul</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">S1-Z1</td>

                                                    <td class="text-center">12</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center"><span class="label label-outline label-danger">Out
                                                            of Zone</span></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                            data-toggle="tooltip" data-original-title="Details"><i
                                                                class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="employee.php">AB-562</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10">
                                                            <img src="images/user-img1.jpg" width="24"></span> Suresh
                                                        Kumar</td>
                                                    <td class="text-center">08: 35 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">S1-Z2</td>

                                                    <td class="text-center">08</td>
                                                    <td class="text-center">08</td>
                                                    <td class="text-center"><span class="label label-outline label-danger">Out
                                                            of Zone</span></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                            data-toggle="tooltip" data-original-title="Details"><i
                                                                class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="employee.php">AB-563</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10">
                                                            <img src="images/user-img2.jpg" width="24"></span> John Gul</td>
                                                    <td class="text-center">07: 20 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">S1-Z1</td>
                                                    <td class="text-center">03</td>

                                                    <td class="text-center">06</td>
                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                            data-toggle="tooltip" data-original-title="Details"><i
                                                                class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="employee.php">AB-564</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10">
                                                            <img src="images/user-img1.jpg" width="24"></span> Irfan
                                                        Khan</td>
                                                    <td class="text-center">07: 33 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">S1-Z1</td>
                                                    <td class="text-center">05</td>
                                                    <td class="text-center">12</td>

                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                            data-toggle="tooltip" data-original-title="Details"><i
                                                                class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>




                                            </tbody>
                                        </table>






                                    </div>





                                </div>


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
