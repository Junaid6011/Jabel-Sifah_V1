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


            <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                <div class="media-left">
                    <img src="images/user-img2.jpg" alt="img" style="height:170px;" class=" img-bordered ">
                </div>
                <div class="media-body">

                    <h2 class="margin-top-0 font-size-20 font-weight-500 margin-bottom-15 text-uppercase">
                        Joe Denly
                        <div class="pull-right">
                            <a href=" " onclick="window.history.go(-1); return false;"
                                class=" btn btn-sm   btn-default btn-round">
                                Back
                            </a>

                        </div>
                    </h2>

                    <hr class="margin-0 margin-bottom-15">

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="rating-block">
                                <h4 class="margin-bottom-10">Average rating</h4>
                                <h2 class="bold margin-top-0">4 <small>/ 5</small></h2>
                                <div>
                                    <button type="button" class="btn btn-warning btn-xs">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning btn-xs">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </button>
                                    <button type="button" class="btn btn-warning   btn-xs">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </button>
                                    <button type="button" class="btn btn-default   btn-xs">
                                        <span class="glyphicon glyphicon-star"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="table-responsive1">
                                <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        <tr>
                                            <th> <b> Status </b> </th>
                                            <td class="text-left text-break">
                                                Active
                                            </td>
                                        </tr>

                                        <tr>
                                            <th width=""> <b> Registration</b> </th>
                                            <td class="text-left">37405 5055556</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> Phone</b> </th>
                                            <td class="text-left">(+78)1397212</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> E-mail</b> </th>
                                            <td class="text-left">a.smith@gmail.com</td>
                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="table-responsive1">
                                <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        <tr>
                                            <th> <b> Joining Date </b> </th>
                                            <td class="text-left text-break">
                                                Jun 08, 2018
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> <b> Date of Birth </b> </th>
                                            <td class="text-left text-break">
                                                Jun 13, 1987
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> <b> Age </b> </th>
                                            <td class="text-left text-break">
                                                32y/o
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> <b> Maritial Status </b> </th>
                                            <td class="text-left text-break">
                                                Single
                                            </td>
                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <div class="table-responsive1">
                                    <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                        <tbody>
                                            <tr>
                                                <th> <b> Salary </b> </th>
                                                <td class="text-left text-break">
                                                    1500
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b> Height </b> </th>
                                                <td class="text-left text-break">
                                                    5.5
                                                </td>
                                            </tr>

                                            <tr>
                                                <th> <b>Weight </b> </th>
                                                <td class="text-left text-break">
                                                    75 kg
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b> Licence </b> </th>
                                                <td class="text-left text-break">
                                                    85999
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













            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <!-- <li class="active"><a data-toggle="tab" href="#Summary">Recent Job </a></li> -->
                                <li class=" active"><a data-toggle="tab" href="#Performance">Performance Analysis </a>
                                </li>
                                <li class=""><a data-toggle="tab" href="#Violations">Violations </a></li>
                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>

                                <li class=""><a data-toggle="tab" href="#Attendance">Attendance </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Performance">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">


                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="widget margin-bottom-0 shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-orange-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">

                                                                                Jobs Completed
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-online.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">200
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="widget  margin-bottom-0 shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-blue-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">
                                                                                Total Violations


                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-offline.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">120
                                                                            </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row no-space">
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="no-space  margin-bottom-0   bg-teal-800 shadow card  widget shadow card padding-5">


                                                                <div class="">
                                                                    <div class="slikslider text-center  "
                                                                        id="slikslider-live">
                                                                        <div>
                                                                            <div class="white">
                                                                                State
                                                                                <div
                                                                                    class="font-size-14 font-weight-600">
                                                                                    Moving</div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="white">
                                                                                Heart Rate
                                                                                <div
                                                                                    class="font-size-14 font-weight-600">
                                                                                    75 bpm</div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="white">
                                                                                Temperature
                                                                                <div
                                                                                    class="font-size-14 font-weight-600">
                                                                                    77 ℃</div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <script>
                                                                        $('#slikslider-live').slick({
                                                                            infinite: false,
                                                                            slidesToShow: 3,
                                                                            slidesToScroll: 1,
                                                                            arrows: true,
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






                                                                <div
                                                                    class="label white  bg-teal-700 font-size-10 margin-top-0 flat absolute  left right bottom">
                                                                    <div style="position:relative; top:0;">
                                                                        <img src="images/loader-live.gif" alt="img"
                                                                            height="16"
                                                                            style="position:relative; top:0;">
                                                                        Online | Updated on: 07:00pm, Feb 08,18
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <hr />
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="panel panel-default margin-bottom-0 ">
                                                        <div class="panel-heading  bg-blue-100 ">
                                                            <h3 class="panel-title text-center padding-5  ">
                                                                Performance Statitices

                                                            </h3>

                                                        </div>
                                                        <div class="panel-body">




                                                            <div class="margin-bottom-10 clearfix text-center">
                                                                <div class="form-group1">
                                                                    <div class="inline-block">
                                                                        <select class="form-control input-sm"
                                                                            id="mrq-dd-performance">
                                                                            <option>This Month </option>
                                                                            <option>This Year</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="chartbox">
                                                                <div id="chart-dd"></div>
                                                                <script>

                                                                    var simple_line_chart333;
                                                                    $(document).ready(function ($) {
                                                                        (function () {





                                                                            simple_line_chart333 = c3.generate({
                                                                                bindto: '#chart-dd',

                                                                                data: {
                                                                                    columns: [
                                                                                        ['Total', 8, 7, 8, 3, 6, 7],
                                                                                        ['Productive', 8, 6, 5, 3, 5, 7],
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
                                                                                    height: 300,
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


                                                            <script>

                                                                $("#mrq-dd-performance").on('change', function () {

                                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                                        simple_line_chart333.load({
                                                                            unload: true,
                                                                            columns: [
                                                                                ['Total', 8, 7, 8, 3, 6, 7],
                                                                                ['Productive', 8, 6, 5, 3, 5, 7],
                                                                            ],
                                                                        });
                                                                    }
                                                                    else {
                                                                        simple_line_chart333.load({
                                                                            unload: true,
                                                                            columns: [
                                                                                ['Total', 20, 17, 18, 13, 16, 17],
                                                                                ['Productive', 18, 16, 15, 13, 15, 27],
                                                                            ],
                                                                        });
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-5">

                                                    <div class="panel panel-default margin-bottom-0 ">
                                                        <div class="panel-heading  bg-blue-100 ">
                                                            <h3 class="panel-title text-center padding-5  ">
                                                                Overall Behaviour

                                                            </h3>

                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-sm-12  ">
                                                                        <br />
                                                                        <div
                                                                            class="text-center  margin-bottom-10 font-size-16 ">
                                                                        </div>
                                                                        <div class="c100 p20 big1  red ">
                                                                            <span class="pointer">70%</span>
                                                                            <div class="slice">
                                                                                <div class="bar"></div>
                                                                                <div class="fill"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <br />

                                                                </div>
                                                                <br />
                                                                <div class="counter-label">
                                                                    <div class="counter counter-sm ">
                                                                        <div class="counter-number-group">
                                                                            <span
                                                                                class="counter-icon blue-600 margin-right-5"><i
                                                                                    class="wb-graph-up"></i></span>
                                                                            <span class="counter-number">10%</span>
                                                                            <span class="counter-number-related">more
                                                                                than last month</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr />
                                                                <div class="row margin-bottom-30">
                                                                    <div class="col-sm-4 ">
                                                                        <div
                                                                            class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                            Attendance
                                                                        </div>
                                                                        <div class="c100 p30 small  orange ">
                                                                            <span class="pointer">59%</span>
                                                                            <div class="slice">
                                                                                <div class="bar"></div>
                                                                                <div class="fill"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-4">
                                                                        <div
                                                                            class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                            Violations
                                                                        </div>

                                                                        <div class="c100 p20 small  blue ">
                                                                            <span class="pointer">18%</span>
                                                                            <div class="slice">
                                                                                <div class="bar"></div>
                                                                                <div class="fill"></div>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <div class="col-sm-4">
                                                                        <div
                                                                            class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                            Task Completion
                                                                        </div>

                                                                        <div class="c100 p20 small  green ">
                                                                            <span class="pointer">90%</span>
                                                                            <div class="slice">
                                                                                <div class="bar"></div>
                                                                                <div class="fill"></div>
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
                                </div>




                                <div class="tab-pane" id="Violations">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="margin-bottom-20 p clearfix"
                                                style="border-bottom: 1px solid #eee">
                                                <div class="inline-block pull-left margin-right-10">
                                                    <div class="inline-block    ">
                                                        <div class="form-group  margin-bottom-0  ">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <div class="input-group-addon">
                                                                        <i class="icon ion-calendar"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Type</th>
                                                        <th class="text-left">Threshold</th>
                                                        <th class="text-left">Value</th>
                                                        <th class="text-left">Time/Date</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td width="150">
                                                            Fuel
                                                        </td>

                                                        <td> 55.000 </td>
                                                        <td>78.268</td>
                                                        <td> 09:32 AM, 22 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Speed

                                                        </td>


                                                        <td> 90.000  </td>
                                                        <td> 102.12  </td>
                                                        <td> 05:53 AM, 07 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Route
                                                        </td>


                                                        <td> 11 </td>
                                                        <td> 34 </td>
                                                        <td> 07:29 AM, 19 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Temperature
                                                        </td>


                                                        <td> 36 °C </td>
                                                        <td> 43 °C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Humidity
                                                        </td>

                                                        <td> 36 °C </td>
                                                        <td> 43 °C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Maintenances">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="margin-bottom-20 p clearfix"
                                                style="border-bottom: 1px solid #eee">
                                                <div class="inline-block pull-left margin-right-10">
                                                    <div class="inline-block    ">
                                                        <div class="form-group  margin-bottom-0  ">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <div class="input-group-addon">
                                                                        <i class="icon ion-calendar"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Name</th>
                                                        <th class="text-left">Types </th>
                                                        <th class="text-left">Status </th>


                                                        <th class="text-left">Time/Date</th>
                                                        <th class="text-left">Competed Time/Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">

                                                        <td>Engine</td>
                                                        <td>
                                                            Routine
                                                        </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Electrical</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-info "> Scheduled</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>-</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>Fuel System</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>HVAC </td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-warning "> Inprogress</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Steering and Control</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="Attendance">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="row">


                                                <div class="col-lg-12">
                                                    <div class="row text-center   margin-bottom-20   clearfix  ">

                                                        <div class="col-sm-3">
                                                            <div
                                                                class=" card padding-10 bg-blue-700 vertical-align  white  text-center relative ">
                                                                <div class="vertical-align-middle">
                                                                    <div class="font-size-12">Total Leaves</div>
                                                                    <b class="font-size-16">08</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div
                                                                class=" card padding-10 bg-green-700 vertical-align  white  text-center relative ">
                                                                <div class="vertical-align-middle">
                                                                    <div class="font-size-12">Sick Leaves</div>
                                                                    <b class="font-size-16">05</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div
                                                                class=" card padding-10 bg-orange-700 vertical-align  white  text-center relative ">
                                                                <div class="vertical-align-middle">
                                                                    <div class="font-size-12">Casual Leaves</div>
                                                                    <b class="font-size-16">03</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div
                                                                class=" card padding-10 bg-teal-700 vertical-align  white  text-center relative ">
                                                                <div class="vertical-align-middle">
                                                                    <div class="font-size-12">Short Leaves</div>
                                                                    <b class="font-size-16">03</b>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="margin-bottom-20 padding-top-10 clearfix "
                                                style="border-bottom: 1px solid #eee; border-top: 1px solid #eee">
                                                <div class="inline-block  pull-left  margin-bottom-10 margin-right-10">
                                                    <div class="form-group  margin-bottom-0  ">
                                                        <div class="input-daterange   ">
                                                            <div class="input-group  input-group-sm">
                                                                <div class="input-group-addon">
                                                                    <i class="icon ion-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control date"
                                                                    value="10/24/17">
                                                            </div>
                                                            <div class="input-group input-group-sm">
                                                                <div class="input-group-addon">to</div>
                                                                <input type="text" class="form-control date"
                                                                    value="10/25/17">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Type</th>
                                                        <th class="text-left">Date</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Description</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td width="150">
                                                            Sick Leaves
                                                        </td>
                                                        <td> 22 Jan,2018 </td>
                                                        <td>
                                                            <div class="label label-success "> Approved</div>
                                                        </td>
                                                        <td> The standardbelow for below for below for chunk of Lorem
                                                            Ipsum used since the 1500s is
                                                            reproduced below for those interested

                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td width="150">
                                                            Casual Leaves
                                                        </td>
                                                        <td> 20 March,2018 </td>
                                                        <td>
                                                            <div class="label label-success "> Approved</div>
                                                        </td>
                                                        <td> The word 'casual' is used to qualify an act or event which
                                                            is done or occurs by
                                                            chance or accident without any pre-planning
                                                            or anticipation in the normal course.
                                                        </td>
                                                    </tr>

                                                    <tr class="">
                                                        <td width="150">
                                                            Sick Leaves
                                                        </td>
                                                        <td> 22 July,2018 </td>
                                                        <td>
                                                            <div class="label label-success "> Approved</div>
                                                        </td>
                                                        <td> The standard chunk of Lorem Ipsum used since the 1500s is
                                                            reproduced below for those i

                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td width="150">
                                                            Casual Leaves
                                                        </td>
                                                        <td> 11 Feb,2018 </td>
                                                        <td>
                                                            <div class="label label-danger "> Not Approved</div>
                                                        </td>
                                                        <td>
                                                            The word 'casual' is used to qualify an act or event which
                                                            is done or occurs by
                                                            chance or accident without any pre-planning
                                                            or anticipation in the normal course.
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






            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Inprogress">Inprogress </a></li>
                                <li class=""><a data-toggle="tab" href="#Pending">Pending </a></li>
                                <li class=""><a data-toggle="tab" href="#Completed"> Completed</a></li>




                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Inprogress">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="margin-bottom-20 p clearfix"
                                                style="border-bottom: 1px solid #eee">
                                                <div class="inline-block pull-left margin-right-10">
                                                    <div class="inline-block    ">
                                                        <div class="form-group  margin-bottom-0  ">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <div class="input-group-addon">
                                                                        <i class="icon ion-calendar"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB188</a>
                                                            </td>

                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information r. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB131</a>
                                                            </td>

                                                            <td class="text-left"> 13-April-2019, 01:50am</td>
                                                            <td class="text-left">14-April-2019, 11:34am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information r. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB154</a>
                                                            </td>

                                                            <td class="text-left"> 11-Feb-2019, 11:05am</td>
                                                            <td class="text-left">12-Feb-2019, 01:40am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum gem Ipsum, giving
                                                                information on its originem Ipsum, giving
                                                                information on its originenerator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB213</a>
                                                            </td>

                                                            <td class="text-left"> 15-June-2019, 08:00am</td>
                                                            <td class="text-left">16-June-2019, 10:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB117</a>
                                                            </td>

                                                            <td class="text-left"> 22-July-2019, 08:00am</td>
                                                            <td class="text-left">23-July-2019, 10:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane" id="Pending">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="margin-bottom-20 p clearfix"
                                                style="border-bottom: 1px solid #eee">
                                                <div class="inline-block pull-left margin-right-10">
                                                    <div class="inline-block    ">
                                                        <div class="form-group  margin-bottom-0  ">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <div class="input-group-addon">
                                                                        <i class="icon ion-calendar"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">Expected End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB101</a>
                                                            </td>

                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB113</a>
                                                            </td>

                                                            <td class="text-left"> 22-Jan-2019, 06:00am</td>
                                                            <td class="text-left">23-Jan-2019, 01:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB144</a>
                                                            </td>

                                                            <td class="text-left"> 11-Jan-2019, 05:00am</td>
                                                            <td class="text-left">12-Jan-2019, 11:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>

                                                            <td class="text-left"> 28-Jan-2019, 11:10am</td>
                                                            <td class="text-left">29-Jan-2019, 12:30am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane " id="Completed">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">


                                            <div class="margin-bottom-20 p clearfix"
                                                style="border-bottom: 1px solid #eee">
                                                <div class="inline-block pull-left margin-right-10">
                                                    <div class="inline-block    ">
                                                        <div class="form-group  margin-bottom-0  ">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <div class="input-group-addon">
                                                                        <i class="icon ion-calendar"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>

                                                            <td class="text-left"> 07-Jan-2019, 12:19am</td>
                                                            <td class="text-left">08-Jan-2019, 09:49am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB0189</a> </td>

                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum gem Ipsum, giving
                                                                information on its originem Ipsum, giving
                                                                information on its originenerator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB133</a>
                                                            </td>

                                                            <td class="text-left"> 12-Jan-2019, 07:20am</td>
                                                            <td class="text-left">13-Jan-2019, 01:34am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB123</a>
                                                            </td>

                                                            <td class="text-left"> 03-Jan-2019, 09:00am</td>
                                                            <td class="text-left">04-Jan-2019, 05:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


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








    </div>







    <?php include_once('_maptrail.php'); ?>

    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>