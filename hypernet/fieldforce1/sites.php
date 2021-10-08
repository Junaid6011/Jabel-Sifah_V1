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
        </div> -->


        
        <div class="page-content  container-fluid">


          
        <div class="row ">
                    <div class="col-lg-5">
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-content padding-10 padding-right-15 padding-left-15   bg-orange-700 white shadow height-90  clearfix">
                                        <div class="pull-left white">
                                            <i> <img src="images/icon-sites.png" alt="img" height="40"> </i>
                                        </div>
                                        <div class="counter counter-md counter text-right pull-right">
                                            <div class="counter-number-group white">
                                                <span class="counter-number">04</span>
                                            </div>
                                            <div class="counter-label text-capitalize font-size-12">Total Sites</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget shadow">
                                    <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-90 white  text-center relative">
                                        <div class="vertical-align-middle">
                                            <div class="counter-label margin-bottom-0 clearfix">
                                                <span class="font-size-14 ">
                                                    Active
                                                </span>
                                            </div>
                                            <b class="font-size-16">
                                                230
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget shadow">
                                    <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-90 white  text-center relative">
                                        <div class="vertical-align-middle">
                                            <div class="counter-label margin-bottom-0 clearfix">
                                                <span class="font-size-14 ">
                                                    Inactive
                                                </span>
                                            </div>
                                            <b class="font-size-16">
                                                100
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget">
                            <div class="widget-content padding-10   bg-green-700 white shadow height-90  clearfix">
                                <div class="pull-left white">
                                    <i> <img src="images/icon-best-site.png" alt="img" height="40"> </i>
                                </div>
                                <div class="counter counter-md counter text-right pull-right">
                                    <div class="counter-number-group white">
                                        <span class="counter-number">S-101</span>
                                    </div>
                                    <div class="counter-label text-capitalize font-size-12">Best Site</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="widget">
                                    <div class="widget-content padding-10 padding-right-15 padding-left-15   bg-blue-700 white shadow height-90  clearfix">
                                        <div class="pull-left white">
                                            <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                                        </div>
                                        <div class="counter counter-md counter text-right pull-right">
                                            <div class="counter-number-group white">
                                                <span class="counter-number">230</span>
                                            </div>
                                            <div class="counter-label text-capitalize font-size-12">Total Employees</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget shadow">
                                    <div class="widget-content padding-top-0 pa bg-blue-600 vertical-align height-90 white  text-center relative">
                                        <div class="vertical-align-middle">
                                            <div class="counter-label margin-bottom-0 clearfix">
                                                <span class="font-size-14 ">
                                                    Present
                                                </span>
                                            </div>
                                            <b class="font-size-16">
                                                200
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget shadow">
                                    <div class="widget-content padding-top-0 pa bg-blue-600 vertical-align height-90 white  text-center relative">
                                        <div class="vertical-align-middle">
                                            <div class="counter-label margin-bottom-0 clearfix">
                                                <span class="font-size-14 ">
                                                    Absent
                                                </span>
                                            </div>
                                            <b class="font-size-16">
                                                30
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-lg-7">




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default shadow" >
                                    <div class="panel-heading   ">
                                        <div class="panel-actions ">
                                            <select class="">
                                                <option>Top 3</option>
                                                <option>Bottom 3</option>
                                            </select>
                                            <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                                        </div>
                                        <h3 class="panel-title "> <b>Sites Performance Stats</b>

                                        </h3>
                                    </div>
                                    <div class="panel-body ">
                                        <div class="margin-left-20 margin-right-20">
                                            <div class="slider margin-bottom-0 weekbox darkarrows " id="slikslider-milk">
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site-1</div>
                                                        <div class="c100 p90 small  orange">
                                                            <span class="pointer">92% </span>
                                                            <!--<span style="position:absolute; bottom:0; font-size:10px; left:0; right:0; width:100%; text-align:center;">ddd</span>-->
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>

                                                        <!--<div>
                                                        <div style="bottom:0; font-size:10px; left:0; right:0; width:100%; text-align:center;"> Task Completion Rate  </div>
                                                    </div>-->
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 1</span>
                                                        </div>
                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site-2</div>
                                                        <div class="c100 p82 small  red ">
                                                            <span class="pointer">82%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 2</span>
                                                        </div>

                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site-3</div>
                                                        <div class="c100 p70 small  green ">
                                                            <span class="pointer">70%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 3</span>
                                                        </div>

                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site-4</div>
                                                        <div class="c100 p20 small  red ">
                                                            <span class="pointer">82%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 4</span>
                                                        </div>
                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                            </div>
                                            <script>
                                                $('#slikslider-milk').slick({
                                                    infinite: false,
                                                    slidesToShow: 3,
                                                    slidesToScroll: 1,
                                                    dots: false,
                                                    responsive: [
                                                        {
                                                            breakpoint: 1160,
                                                            settings: {
                                                                slidesToShow: 3,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 1025,
                                                            settings: {
                                                                slidesToShow: 3,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 769,
                                                            settings: {
                                                                slidesToShow: 2,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 600,
                                                            settings: {
                                                                slidesToShow: 2,
                                                            }
                                                        },
                                                        {
                                                            breakpoint: 480,
                                                            settings: {
                                                                slidesToShow: 2,
                                                            }
                                                        }

                                                    ]
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>














                    </div>

                    <div class="col-lg-5">

                        <div class="mapbox  margin-bottom-30 shadow">



                            <div class="icon" style="left:50%; top:20%;">
                                <a data-toggle="popover" data-original-title="Site 1" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S1">
                                    <img src="images/icon-map-pin-end.png" alt="img">
                                </a>
                                <div id="popover-content-S1" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                        <tr>
                                            <th> Zones </th>
                                            <td class="text-left">9</td>
                                        </tr>
                                        <tr>
                                            <th>labors </th>
                                            <td class="text-left">102</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="icon" style="left:60%; top:30%;">
                                <a data-toggle="popover" data-original-title="Site 2" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S2">
                                    <img src="images/icon-map-pin-end.png" alt="img">
                                </a>
                                <div id="popover-content-S2" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                        <tr>
                                            <th> Zones </th>
                                            <td class="text-left">6</td>
                                        </tr>
                                        <tr>
                                            <th> labors </th>
                                            <td class="text-left">102</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="icon" style="left:40%; top:30%;">
                                <a data-toggle="popover" data-original-title="Site 3" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S2">
                                    <img src="images/icon-map-pin-end.png" alt="img">
                                </a>
                                <div id="popover-content-S2" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                        <tr>
                                            <th> Zones </th>
                                            <td class="text-left">10</td>
                                        </tr>
                                        <tr>
                                            <th> labors </th>
                                            <td class="text-left">102</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="icon" style="left:60%; top:60%;">
                                <a data-toggle="popover" data-original-title="Site 4" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S2">
                                    <img src="images/icon-map-pin-end.png" alt="img">
                                </a>
                                <div id="popover-content-S2" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                        <tr>
                                            <th> Zones </th>
                                            <td class="text-left">10</td>
                                        </tr>
                                        <tr>
                                            <th> labors </th>
                                            <td class="text-left">102</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>





                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402" width="100%" height="440" frameborder="0" style="border:0; " allowfullscreen=""
                                class="map pull-right"></iframe>
                        </div>



                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-7">

                        <div class="panel panel-default nav-tabs-horizontal shadow">
                            <div class="panel-heading font-weight-600">
                                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                    <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Active Employees</a></li>
                                    <li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Task Completion Rate</a></li>
                                </ul>
                                <div class="panel-actions ">
                                    <select class="">
                                        <option>Today</option>
                                        <option>Last 24 Hours</option>
                                    </select>
                                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                                </div>
                            </div>

                            <div class="panel-body ">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">

                                        <div class="margin-bottom-10 green-800  text-center" data-toggle="tooltip" data-original-title="Last Updated Time"> <b>Last Updated:</b> 04:40pm, 6, Jun 18 </div>


                                        <div class="chartbox">
                                            <div id="chart-home1"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {





                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-home1',

                                                            data: {
                                                                columns: [
                                                                    ['Active', 30, 200, 200, 400],
                                                                    ['Inactive', 130, 100, 100, 200],
                                                                ],
                                                                type: 'bar',
                                                                groups: [
                                                                    ['Active', 'Inactive']
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
                                                                        text: 'Sites',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['Site-1', 'Site-2 ', 'Site-3', 'Site-4',]
                                                                },
                                                                y: {
                                                                    label: {
                                                                        text: 'Active Employees',
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

                                        <div class="chartbox">
                                            <div id="chart-alerts3"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-alerts3',
                                                            size: {
                                                                height: 258,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'top',
                                                            },
                                                            data: {
                                                                columns: [
                                                                    ['Site-1', 5, 10, 26, 40, 25, 30, 31],
                                                                    ['Site-2', 13, 28, 10, 36, 23, 21, 13],
                                                                    ['Site-3', 26, 19, 35, 26, 29, 13, 29],
                                                                    ['Site-4', 31, 30, 15, 40, 10, 35, 41],

                                                                ],
                                                                type: 'line',
                                                            },
                                                            color: {
                                                                pattern: ['#f7902f', '#2a9e91', '#d83a46', '#1084b2', '#2bac48']
                                                            },
                                                            axis: {
                                                                rotated: false,
                                                                x: {
                                                                    label: {
                                                                        text: '05 Oct - 11 Oct ',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
                                                                },
                                                                y: {
                                                                    label: {
                                                                        text: 'No. of Hours ',
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
                        </div>






                    </div>

                    <div class="col-lg-5">
                        <div class="panel panel-default shadow ">
                            <div class="panel-heading  ">
                                <div class="panel-actions ">
                                    <select class="">
                                        <option>Today</option>
                                        <option>Last 24 Hours</option>
                                        <option>Last Week</option>
                                    </select>
                                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                                </div>
                                <h3 class="panel-title"> <b>Violations</b></h3>
                            </div>
                            <div class="panel-body ">
                                <div class="chartbox">
                                    <div id="chart-alerts1"></div>
                                    <script>
                                        $(document).ready(function ($) {
                                            (function () {
                                                var simple_line_chart = c3.generate({
                                                    bindto: '#chart-alerts1',
                                                    size: {
                                                        height: 257,
                                                    },
                                                    legend: {
                                                        show: true,
                                                        position: 'right',
                                                    },
                                                    data: {
                                                        columns: [
                                                            ['Site-1', 5, 10, 26, 40, 25, 30, 31],
                                                            ['Site-2', 13, 28, 10, 36, 23, 21, 13],
                                                            ['Site-3', 26, 19, 35, 26, 29, 13, 29],
                                                            ['Site-4', 31, 30, 15, 40, 10, 35, 41],

                                                        ],
                                                        type: 'donut',
                                                    },
                                                    donut: {
                                                        title: "Sites Violations"
                                                    },
                                                    color: {
                                                        pattern: ['#f7902f', '#2a9e91', '#d83a46', '#1084b2', '#2bac48']
                                                    },
                                                    axis: {
                                                        rotated: false,
                                                        x: {
                                                            label: {
                                                                text: '05 Oct - 11 Oct ',
                                                                position: 'outer-center'
                                                            },
                                                            type: 'category',
                                                            categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
                                                        },
                                                        y: {
                                                            label: {
                                                                text: 'No. of Hours ',
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
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">
                                <div class="panel-actions">
                                    <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                </div>
                                <h3 class="panel-title"> <b> Sites </b></h3>
                            </div>
                            <div class="panel-body">

                                <div class="padding-0  margin-bottom-15 clearfix" style="background-color:#fff">
                                    <div class="form-group1 margin-bottom-0">


                                        <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                            <input type="text" class="form-control input-sm " placeholder="Search" style="min-width:220px;">
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
                                        <!--<div class="inline-block pull-left margin-right-10 margin-bottom-10">
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
                                    </div>-->
                                    </div>
                                </div>



                                <div class="table-responsive1 vscroll" style="height:100%;">

                                    <table class="table table-hover table-condensed margin-bottom-0">
                                        <thead>
                                            <tr class="">
                                                <th class="nosort">ID</th>
                                                <th class="">Status</th>
                                                <th class="" width="200">Supervisor</th>
                                                <th class="text-center">Zones</th>
                                                <th class="text-center">Employees</th>
                                                <th class="">Productivity</th>
                                                <th class="text-center">Violations</th>
                                                <th class="text-center">Man Hours (Avg)</th>
                                                <th class="">Location</th>
                                                <th class="">Active Since</th>
                                                <th class="">Deadline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="site.php">Site-1</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            Philip Smith
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">18</td>

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%;">
                                                            <span class="progress-label">25%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">120</td>
                                                <td class="text-left">Al Warqa 3 , Dubai</td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site2.php">Site-2</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor2.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            John Doe
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">18</td>

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 5%;">
                                                            <span class="progress-label">5%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">7</td>
                                                <td class="text-center">110</td>
                                                <td class="text-left">Al Warqa 3 , Dubai</td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site3.php">Site-3</a></td>
                                                <td class="text-left"><span class="label label-danger"> In Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            Joseph
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">18</td>

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%;">
                                                            <span class="progress-label">25%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">120</td>
                                                <td class="text-left">Al Warqa 3 , Dubai</td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site.php">Site-4</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor3.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            John Doe
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">18</td>

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 75%;">
                                                            <span class="progress-label">75%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">120</td>
                                                <td class="text-left">Al Warqa 3 , Dubai</td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>