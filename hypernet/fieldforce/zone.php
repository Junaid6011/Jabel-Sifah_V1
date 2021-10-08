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

    <body class="dashboard ">
        <?php include_once('_header.php'); ?>
        <?php include_once('_leftmenu.php'); ?>



        <div class="page">
            <!-- <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Page</a></li>
            </ol>
        </div> -->



            <div class="page-content  container-fluid">



            <div class="row">
                    <div class="">
                        <div class="col-lg-8">
                            <h1 class="page-title lineheight-18 margin-bottom-30">
                                <span class="font-weight-400">Zone 1 </span>
                                <br />
                                <span class="small">Site: <b> Site-2 </b></span>, <span class="small">Supervisor: <b>
                                        Phillip Doe </b></span>
                            </h1>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-inline text-right">
                                <div class="input-icon">
                                    <select class="form-control selectpicker show-tick show-menu-arrow " data-width="100%" data-size="5" title="Select Zone" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                                        <option value="zone.php"> Zone 1 </option>
                                        <option value="zone2.php"> Zone 2 </option>
                                        <option value="zone3.php"> Zone 3 </option>

                                    </select>
                                    <span class="icon ion-information-circled select" data-toggle="tooltip" title="Other"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-8">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="widget">
                                    <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-orange-700 white shadow height-90  clearfix">
                                        <div class="pull-left white">
                                            <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                                        </div>
                                        <div class="counter counter-md counter text-right pull-right">
                                            <div class="counter-number-group white">
                                                <span class="counter-number">240 </span>
                                            </div>
                                            <div class="counter-label text-capitalize font-size-12">Total Employees </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="row">


                                    <div class="col-lg-8">
                                        <div class="row no-space">
                                            <div class="col-md-6">
                                                <div class="widget">
                                                    <div class="widget-content padding-10 padding-right-15 padding-left-15   bg-teal-700 white shadow height-90  clearfix">
                                                        <div class="pull-left white">
                                                            <i class="absolute"> <img src="images/icon-hours.png" alt="img" height="40"> </i>
                                                        </div>
                                                        <div class="counter counter-md counter text-right pull-right">
                                                            <div class="counter-number-group white">
                                                                <span class="counter-number">10</span>
                                                            </div>
                                                            <div class="counter-label text-capitalize font-size-12">Total
                                                                Man Hours</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow">
                                                    <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-90 white  text-center relative">
                                                        <div class="vertical-align-middle">
                                                            <div class="counter-label margin-bottom-0 clearfix">
                                                                <span class="font-size-14 ">
                                                                    Allocated
                                                                </span>
                                                            </div>
                                                            <b class="font-size-16">
                                                                08
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow">
                                                    <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-90 white  text-center relative">
                                                        <div class="vertical-align-middle">
                                                            <div class="counter-label margin-bottom-0 clearfix">
                                                                <span class="font-size-14 ">
                                                                    Consumed
                                                                </span>
                                                            </div>
                                                            <b class="font-size-16">
                                                                02
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-4">
                                        <div class="widget">
                                            <div class="widget-content padding-10   bg-green-700 white shadow height-90  clearfix">
                                                <div class="pull-left white">
                                                    <i class="absolute"> <img src="images/icon-best-site.png" alt="img" height="40"> </i>
                                                </div>
                                                <div class="counter counter-md counter text-right pull-right">
                                                    <div class="counter-number-group white">
                                                        <span class="counter-number">90%</span>
                                                    </div>
                                                    <div class="counter-label text-capitalize font-size-12">Work Progress</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>



                        <div class="row no-space1  margin-bottom-0">



                            <div class="col-sm-6">
                                <div class="row no-space">
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-content padding-10 padding-right-15 text-center padding-left-15   bg-cyan-700 white shadow height-70  clearfix">
                                                <div class="text-capitalize font-size-14 text-center margin-top-0">Inactive
                                                    Employees</div>

                                                <div class="font-size-20">40</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="widget shadow">
                                            <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-70 white  text-center relative">
                                                <div class="vertical-align-middle">
                                                    <div class="counter-label margin-bottom-0 clearfix">
                                                        <span class="font-size-14 ">
                                                            In Zone
                                                        </span>
                                                    </div>
                                                    <b class="font-size-16">
                                                        30
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="widget shadow">
                                            <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-70 white  text-center relative">
                                                <div class="vertical-align-middle">
                                                    <div class="counter-label margin-bottom-0 clearfix">
                                                        <span class="font-size-14 ">
                                                            Out Zone
                                                        </span>
                                                    </div>
                                                    <b class="font-size-16">
                                                        10
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row no-space">
                                    <div class="col-md-6">
                                        <div class="widget">
                                            <div class="widget-content padding-10 padding-right-15 text-center padding-left-15   bg-cyan-700 white shadow height-70  clearfix">
                                                <div class="text-capitalize font-size-14 text-center margin-top-0">Active
                                                    Employees</div>

                                                <div class="font-size-20">200</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="widget shadow">
                                            <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-70 white  text-center relative">
                                                <div class="vertical-align-middle">
                                                    <div class="counter-label margin-bottom-0 clearfix">
                                                        <span class="font-size-14 ">
                                                            In Zone
                                                        </span>
                                                    </div>
                                                    <b class="font-size-16">
                                                        150
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="widget shadow">
                                            <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-70 white  text-center relative">
                                                <div class="vertical-align-middle">
                                                    <div class="counter-label margin-bottom-0 clearfix">
                                                        <span class="font-size-14 ">
                                                            Out Zone
                                                        </span>
                                                    </div>
                                                    <b class="font-size-16">
                                                        50
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row no-space1  margin-bottom-30">
                            <div class="col-md-6">
                                <div class="widget  margin-bottom-0  shadow bg-blue-800 text-center  white" style="height:190px;">
                                    <div class="widget-content">
                                        <div class="padding-15 ">

                                            <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase"> Best
                                                    Employee </b> <br> </div>
                                            <div class="text-center">
                                                <div class="margin-bottom-10 margin-top-0 ">
                                                    <i> <img src="images/img-supervisor3.jpg" alt="img img-circle" style="height:65px; border-radius:50%;" class=""> </i>

                                                </div>
                                            </div>
                                            <div class="font-size-14">John Smith</div>
                                            <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase"> Rank: 7
                                                </b> </div>


                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6">


                                <div class="widget  margin-bottom-0  shadow bg-red-800 text-center  white" style="height:190px;">
                                    <div class="widget-content">
                                        <div class="padding-15 ">

                                            <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase">Inefficient
                                                    Employee </b> <br> </div>
                                            <div class="text-center">
                                                <div class="margin-bottom-10 margin-top-0 ">
                                                    <i> <img src="images/img-driver.jpg" alt="img img-circle" style="height:60px; border-radius:50%;" class=""> </i>

                                                </div>
                                            </div>
                                            <div class="font-size-14">Lala Singh</div>
                                            <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase"> Rank: 2
                                                </b> </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">





                    <div class="col-lg-8">

                        <div class="panel panel-default nav-tabs-horizontal shadow">
                            <div class="panel-heading font-weight-600">
                                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                    <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Productive
                                            Hours</a></li>
                                    <li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Violations</a></li>
                                </ul>
                                <div class="panel-actions ">
                                    <select class="">
                                        <option>Today</option>
                                        <option>Last 24 Hours</option>
                                    </select>
                                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                                        <div class="margin-bottom-10 green-800  text-center" data-toggle="tooltip" data-original-title="Last Updated Time"> <b>Last Updated:</b> 04:40pm, 6, Jun
                                            18 </div>


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
                                                                height: 230,
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
                                    <div class="tab-pane" id="FeedStatistics" role="tabpanel">

                                        <div class="vscroll padding-right-10" style="height:240px;">
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

                                                        <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>

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

                                                        <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>

                                                    </tr>





                                                </tbody>
                                            </table>
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-lg-4">

                        <div class="mapbox  margin-bottom-30 shadow">



                            <div class="icon" style="left:50%; top:20%;">
                                <a data-toggle="popover" data-original-title="Zone 1" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S1">
                                    <img src="images/icon-map-pin-end.png" alt="img">
                                </a>
                                <div id="popover-content-S1" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">

                                        <tr>
                                            <th> Workers </th>
                                            <td class="text-left">102</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>








                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402" width="100%" height="310" frameborder="0" style="border:0; " allowfullscreen=""
                                class="map pull-right"></iframe>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">
                                <div class="panel-actions">
                                    <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                </div>
                                <h3 class="panel-title font-weight-600">Employees </h3>
                            </div>
                            <div class="panel-body ">



                                <div class="">


                                    <div class="table-responsive1 vscroll" style="">

                                        <table class="table table-hover table-condensed margin-bottom-0">
                                            <thead>
                                                <tr class="">
                                                    <th class="nosort">ID</th>
                                                    <th class="nosort">Staff Name</th>
                                                    <th class="text-center">Clock In</th>
                                                    <th class="text-center">Clock Out</th>
                                                    <th class="nosort text-center">Supervisor</th>

                                                    <th class="nosort text-center">Hours in Zone</th>
                                                    <th class="nosort text-center">Active Hours</th>
                                                    <th class="nosort text-center">Presence</th>
                                                    <th class="nosort text-center">Active Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="employee.php">AB-560</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24"></span> Irfan Khan</td>
                                                    <td class="text-center">08: 30 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">Shahid khan</td>

                                                    <td class="text-center">11</td>
                                                    <td class="text-center">09</td>
                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span> </td>
                                                    <td class="text-center"> <span class="label label-outline label-success">Active</span></td>

                                                </tr>

                                                <tr>
                                                    <td><a href="employee.php">AB-561</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Aqib Sultan</td>
                                                    <td class="text-center">08: 20 am</td>
                                                    <td class="text-center">3:30 pm</td>
                                                    <td class="text-center">Shahid khan</td>

                                                    <td class="text-center">9</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center"><span class="label label-outline label-danger">Out
                                                            of Site</span></td>

                                                    <td class="text-center"> <span class="label label-outline label-danger">Inctive</span></td>

                                                </tr>
                                                <tr>
                                                    <td><a href="employee.php">AB-562</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24"></span> Suresh Kumar</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">Ahmad ali</td>

                                                    <td class="text-center">08</td>
                                                    <td class="text-center">08</td>
                                                    <td class="text-center"><span class="label label-outline label-danger">Absent</span></td>

                                                    <td class="text-center"> <span class="label label-outline label-danger">Inactive</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="employee.php">AB-563</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Junaid Gul</td>
                                                    <td class="text-center">07: 20 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">Shahid khan</td>
                                                    <td class="text-center">07</td>

                                                    <td class="text-center">04</td>
                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-center"> <span class="label label-outline label-success">Active</span></td>

                                                </tr>

                                                <tr>
                                                    <td><a href="employee.php">AB-564</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24"></span> Shahid Khan</td>
                                                    <td class="text-center">07: 33 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">Ahmad ali</td>
                                                    <td class="text-center">05</td>
                                                    <td class="text-center">12</td>

                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-center"><span class="label label-outline label-warning">Inactive</span></td>

                                                </tr>
                                                <tr>
                                                    <td><a href="employee.php">AB-565</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Irfan Khan</td>
                                                    <td class="text-center">07: 30 am</td>
                                                    <td class="text-center">--</td>
                                                    <td class="text-center">Shahid khan</td>
                                                    <td class="text-center">03</td>

                                                    <td class="text-center">09</td>
                                                    <td class="text-center"><span class="label label-outline label-success">In
                                                            Zone</span></td>
                                                    <td class="text-center"><span class="label label-outline label-success">Active</span></td>

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





        <?php include_once('_maptrail.php'); ?>


        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















    </body>

</html>