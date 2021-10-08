﻿<!DOCTYPE html>
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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->

        <div class="page-header page-header-bordered shadow">



            <div class="media">
                <div class="media-left">
                    <img src="images/school-logo-icon.jpg" class="img-bordered padding-15" style="height:70px">
                </div>
                <div class="media-body">


                    <table class="table  margin-bottom-0  no-border table-condensed grey-800"
                        style="line-height: normal;">
                        <tbody>
                            <tr>
                                <th width="80"> <span class="font-size-16">Job:
                                    </span> </th>
                                <td class="text-left text-break">
                                    <span class="font-size-16">
                                        JOB189

                                    </span>

                                </td>
                            </tr>
                            <tr>
                                <th> <span class="font-size-16"> Customer:</span>
                                </th>
                                <td class="text-left text-break">
                                    <a href="" class="font-size-16">
                                       GLOBAL EDUCATION SYSTEMS</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="page-header-actions">

                <a href=" " onclick="window.history.go(-1); return false;" class=" btn btn-sm   btn-default btn-round">
                    Back
                </a>

            </div>
        </div>
        <div class="page-content  container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light " style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Summary"> Job Summary</a></li>
                                <li class=""><a data-toggle="tab" href="#Assets">Assets & Sensors </a></li>

                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>
                                <li class=""><a data-toggle="tab" href="#Violations">Violations </a></li>
                                <li class=""><a data-toggle="tab" href="#Fillups">Fillups </a></li>
                                <li class=""><a data-toggle="tab" href="#Passengers">Passengers </a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#Crews">Crew Listing </a></li> -->

                            </ul>
                        </div>
                        <div class="panel-body padding-10">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Summary">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">

                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-orange-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Distance Travelled
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">200 km</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">
                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-blue-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fuel Comsumed
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">120 Ltr</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-teal-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fillups
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">03</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-green-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Violations
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">04</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="c">







                                                <div class="margin-top-0 margin-bottom-20 padding-20 bg-blue-00 shadow1 card1"
                                                    style="border: 1px solid #eee; background-color: #f9f9f9;">
                                                    <div class="row">

                                                        <div class="col-md-3">

                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        25-Jan-2019,
                                                                        08:21am
                                                                    </div>
                                                                    <div class="font-size-12   "> Start Time/Date</div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        26-Jan-2019,
                                                                        12:28am
                                                                    </div>
                                                                    <div class="font-size-12   "> End Time/Date</div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        FF152
                                                                    </div>
                                                                    <div class="font-size-12  "> Assigned Fleet</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/user-img2.jpg"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        John Smith
                                                                    </div>
                                                                    <div class="font-size-12   "> Assigned to</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0">
                                                            <div class="panel-heading bg-blue-100  ">
                                                                <h3 class="panel-title text-center  padding-5 ">Seat
                                                                    Status</h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body padding-0">
                                                                <div class="col-lg-5"> <br>
                                                                    <div
                                                                        class="text-center  margin-bottom-15 font-size-16 ">
                                                                    </div>
                                                                    <div class="c100 p20 small   ">
                                                                        <span class="pointer">80%</span>
                                                                        <div class="slice">
                                                                            <div class="bar"></div>
                                                                            <div class="fill"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Seating
                                                                                Capacity
                                                                            </div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                72
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Seats Status:
                                                                            </div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                <div class="label label-success ">
                                                                                    Normal
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Available
                                                                                Seats:
                                                                            </div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                17
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-blue-100 ">
                                                                <h3 class="panel-title text-center padding-5 ">
                                                                    Passengers
                                                                    Stats

                                                                </h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="widget">
                                                                    <div
                                                                        class="padding-0 margin-top-20 bg-white  text-center">
                                                                        <div class=" ">
                                                                            <div
                                                                                class="text-uppercase1 font-size-16 margin-bottom-15">
                                                                                Average
                                                                                Time for Pick/Drop</div>
                                                                            <div class="margin-bottom-15">
                                                                                <span class="font-size-30 green-800">
                                                                                    15 Per/Hr
                                                                                </span>
                                                                            </div>
                                                                            <div class="counter-label">
                                                                                <div class="counter counter-sm ">
                                                                                    <div class="counter-number-group">
                                                                                        <span
                                                                                            class="counter-icon blue-600 margin-right-5"><i
                                                                                                class="wb-graph-up"></i></span>
                                                                                        <span
                                                                                            class="counter-number">10%</span>
                                                                                        <span
                                                                                            class="counter-number-related">more
                                                                                            than last hour</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>










                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-blue-100 ">
                                                                <h3 class="panel-title text-center padding-5 ">Fuel
                                                                    Storage</h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body padding-0">
                                                                <div class="chartbox">
                                                                    <div id="chart-bbbbb"></div>
                                                                    <script>
                                                                        $(document).ready(function ($) {

                                                                            (function () {
                                                                                var chart = c3.generate({
                                                                                    bindto: '#chart-bbbbb',
                                                                                    data: {

                                                                                        columns: [
                                                                                            ['Water Level'],
                                                                                            ['Capacity', 2000,],
                                                                                            ['Available', 1200,],
                                                                                        ],
                                                                                        groups: [
                                                                                            ['Capacity', 'Available']
                                                                                        ],
                                                                                        type: 'bar'
                                                                                    },
                                                                                    size: {
                                                                                        height: 180,
                                                                                    },
                                                                                    legend: {
                                                                                        show: true,
                                                                                        position: 'bottom',
                                                                                    },
                                                                                });
                                                                            })();
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">


                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-red-100 ">
                                                                <h3 class="panel-title text-center padding-5  ">
                                                                    Live Camera

                                                                </h3>

                                                            </div>
                                                            <div class="panel-body padding-0">



                                                                <div class="row no-space">
                                                                    <div class="col-lg-12">
                                                                        <div class="">


                                                                            <div class="">
                                                                                <div class="slikslider text-center"
                                                                                    id="slikslider-camera">
                                                                                    <div>
                                                                                        <div class="text-center">
                                                                                            <img src="images/bus-camera1.jpg"
                                                                                                height="170"
                                                                                                class="inline"
                                                                                                width="100%" /> </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="text-center">
                                                                                            <img src="images/bus-camera1.jpg"
                                                                                                height="170"
                                                                                                class="inline"
                                                                                                width="100%" /> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <script>
                                                                                    $('#slikslider-camera').slick({
                                                                                        infinite: false,
                                                                                        slidesToShow: 1,
                                                                                        slidesToScroll: 1,
                                                                                        arrows: true,
                                                                                        dots: false,
                                                                                        responsive: [
                                                                                            {
                                                                                                breakpoint: 1160,
                                                                                                settings: {
                                                                                                    slidesToShow: 1,
                                                                                                }
                                                                                            },
                                                                                            {
                                                                                                breakpoint: 1025,
                                                                                                settings: {
                                                                                                    slidesToShow: 1,
                                                                                                }
                                                                                            },
                                                                                            {
                                                                                                breakpoint: 769,
                                                                                                settings: {
                                                                                                    slidesToShow: 1,
                                                                                                }
                                                                                            },
                                                                                            {
                                                                                                breakpoint: 600,
                                                                                                settings: {
                                                                                                    slidesToShow: 1,
                                                                                                }
                                                                                            },
                                                                                            {
                                                                                                breakpoint: 480,
                                                                                                settings: {
                                                                                                    slidesToShow: 1,
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

                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">

                                                    <div class="col-lg-4">

                                                        <div class="panel panel-dark margin-bottom-0">
                                                            <div class="panel-heading margin-bottom-0">
                                                                <h3 class="panel-title">Details</h3>
                                                            </div>

                                                            <div class="vscroll" style="height: 250px;">
                                                                <table
                                                                    class="table table-hover table-striped margin-bottom-0">
                                                                    <tbody>



                                                                        <tr>
                                                                            <th> <b> Location</b> </th>
                                                                            <td class="text-left">15/A Blue
                                                                                Road, Malburg
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Distance</b> </th>
                                                                            <td class="text-left">76 Km/h
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Fuel Consumed</b> </th>
                                                                            <td class="text-left">17 L</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Speed </b> </th>
                                                                            <td class="text-left text-break">
                                                                                <div> Avg: 31 km/h </div>
                                                                                <div> Max: 102 km/h </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Violations </b> </th>
                                                                            <td class="text-left text-break">
                                                                                2 Overspeed, 1 Harsh Break
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Maintenances </b> </th>
                                                                            <td class="text-left text-break">
                                                                                1 Break Oil
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> <b> Fillups </b> </th>
                                                                            <td class="text-left text-break">
                                                                                3
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-4">


                                                        <div class="row">
                                                            <div class="col-sm-6  ">
                                                                <div
                                                                    class="text-center  margin-bottom-10 font-size-16 ">
                                                                    Completed
                                                                    Trips</div>

                                                                <div class="c100 p20 small1  red ">
                                                                    <span class="pointer">06</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>




                                                            </div>

                                                            <div class="col-sm-6 ">
                                                                <div
                                                                    class="text-center  margin-bottom-10 font-size-16 ">
                                                                    Failed
                                                                    Trips</div>


                                                                <div class="c100 p75 small1  red">
                                                                    <span class="pointer">01</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>




                                                            </div>

                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-sm-4 ">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Idle
                                                                    Time
                                                                </div>
                                                                <div class="c100 p30 small  orange ">
                                                                    <span class="pointer">0h 35m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Moving
                                                                    Time
                                                                </div>

                                                                <div class="c100 p20 small  blue ">
                                                                    <span class="pointer">6h 45m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Stop
                                                                    Time
                                                                </div>

                                                                <div class="c100 p20 small  green ">
                                                                    <span class="pointer">1h 30m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">

                                                        <div class="panel panel-dark margin-bottom-0">
                                                            <div class="panel-heading margin-bottom-0 ">
                                                                <h3 class="panel-title">Map Trail</h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>

                                                                </div>
                                                            </div>

                                                            <div class="panel-body padding-0">
                                                                <div class="mapbox   margin-bottom-0  ">
                                                                    <iframe
                                                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                                        width="100%" height="250" frameborder="0"
                                                                        style="border:0" class="pull-left map"></iframe>



                                                                </div>
                                                            </div>
                                                        </div>









                                                        <div class="full-map inline-block">
                                                            <div class="modal fade modal-fill-in" id="mapfull"
                                                                tabindex="-1">
                                                                <div class="modal-dialog">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">
                                                                        <span>×</span>
                                                                    </button>
                                                                    <div class="mapbox   margin-bottom-0  ">




                                                                        <div class="mapfilters">

                                                                            <div class="fancy-collapse-panel">
                                                                                <div class="panel-group margin-bottom-0"
                                                                                    id="accordion">
                                                                                    <div
                                                                                        class="panel panel-bordered panel-primary">
                                                                                        <div class="panel-heading padding-0 margin-bottom-0"
                                                                                            role="tab" id="headingOne">
                                                                                            <h4
                                                                                                class="panel-title padding-10">
                                                                                                <a data-toggle="collapse"
                                                                                                    data-parent="#accordion"
                                                                                                    href="#collapseOne">Filters
                                                                                                </a>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div id="collapseOne"
                                                                                            class="panel-collapse collapse in"
                                                                                            role="tabpanel">
                                                                                            <div
                                                                                                class="panel-body padding-0">
                                                                                                <ul class="list-group">
                                                                                                    <li
                                                                                                        class="list-group-item padding-0 ">
                                                                                                        <div
                                                                                                            class="inline-block margin-right-20 ">
                                                                                                            <div
                                                                                                                class="checkbox-custom checkbox-primary ">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    id="qqq"
                                                                                                                    name="" />
                                                                                                                <label
                                                                                                                    for="qqq">Violations</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item padding-0 ">
                                                                                                        <div
                                                                                                            class="inline-block margin-right-20 ">
                                                                                                            <div
                                                                                                                class="checkbox-custom checkbox-primary ">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    id="qqq"
                                                                                                                    name="" />
                                                                                                                <label
                                                                                                                    for="qqq">Fillups</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="list-group-item padding-0 ">
                                                                                                        <div
                                                                                                            class="inline-block margin-right-20 ">
                                                                                                            <div
                                                                                                                class="checkbox-custom checkbox-primary ">
                                                                                                                <input
                                                                                                                    type="checkbox"
                                                                                                                    id="qqq"
                                                                                                                    name="" />
                                                                                                                <label
                                                                                                                    for="qqq">
                                                                                                                    Maintenances</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </li>



                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>




                                                                        </div>

                                                                        <iframe
                                                                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                                            width="100%" height="100%" frameborder="0"
                                                                            style="border:0"
                                                                            class="pull-left map"></iframe>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>




                                                <hr />

                                                <h4>Description</h4>
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is
                                                    reproduced
                                                    below for those interested</p>

                                                <hr />
                                                <h4>Speed Statistics</h4>
                                                <div class="row">

                                                    <div class="col-lg-12">




                                                        <div class="chartbox">
                                                            <div id="chart-hours"></div>
                                                            <script>
                                                                $(document).ready(function ($) {
                                                                    (function () {
                                                                        var simple_line_chart = c3.generate({
                                                                            bindto: '#chart-hours',
                                                                            size: {
                                                                                height: 260,
                                                                            },
                                                                            legend: {
                                                                                show: true,
                                                                                position: 'bottom',
                                                                            },
                                                                            data: {

                                                                                columns: [
                                                                                    ['Max-Speed', 120, 140, 150, 120, 80, 90, 120, 140, 150, 120, 80, 90],
                                                                                    ['Min-Speed', 80, 100, 80, 60, 80, 60, 99, 120, 144, 100, 60, 80],

                                                                                ],
                                                                                types: {
                                                                                    data3: 'line',
                                                                                    data4: 'line',
                                                                                },

                                                                            },
                                                                            axis: {
                                                                                rotated: false,

                                                                                x: {
                                                                                    label: {
                                                                                        show: false,
                                                                                        text: '',
                                                                                        position: 'outer-center'
                                                                                    },
                                                                                    type: 'category',
                                                                                    categories: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00']
                                                                                },
                                                                                y: {
                                                                                    label: {

                                                                                        text: 'Speed [km/h] ',
                                                                                        position: 'outer-middle'
                                                                                    },
                                                                                },
                                                                            },
                                                                            bar: {
                                                                                width: {
                                                                                    ratio: 0.5
                                                                                }
                                                                            },
                                                                            grid: {
                                                                                x: {
                                                                                    show: true
                                                                                },
                                                                                y: {
                                                                                    show: true
                                                                                }
                                                                            }
                                                                        });
                                                                    })();
                                                                });
                                                            </script>
                                                        </div>





                                                    </div>
                                                </div>


                                                <hr />
                                                <div class="row">
                                                    <div class="col-lg-12">

                                                        <h4>Logs</h4>
                                                        <div class="vscroll bg-white" style="max-height:280px;">
                                                            <table
                                                                class="table table-striped table-condensed  table-bordered   margin-bottom-0">
                                                                <thead>
                                                                    <tr class="">
                                                                        <th class="text-left">Type</th>
                                                                        <th class="text-left">Status </th>
                                                                        <th class="text-left">Trips</th>
                                                                        <th class="text-left">Start </th>
                                                                        <th class="text-left">End </th>
                                                                        <th class="text-left">Description
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="80">
                                                                            Pickup
                                                                        </td>
                                                                        <td>
                                                                            <div class="label label-success ">
                                                                                Completed
                                                                            </div>
                                                                        </td>
                                                                        <td> Trip1</td>
                                                                        <td>
                                                                            Feb 22,2018 06:21:13 pm
                                                                        </td>
                                                                        <td>
                                                                            Feb 24,2018 11:37:28 am
                                                                        </td>
                                                                        <td>
                                                                            The standard chunk of Lorem
                                                                            Ipsum
                                                                            used since
                                                                            the 1500s is reproduced below
                                                                            for
                                                                            those
                                                                            interested
                                                                        </td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80">
                                                                            Drop
                                                                        </td>
                                                                        <td>
                                                                            <div class="label label-success ">
                                                                                Completed
                                                                            </div>
                                                                        </td>
                                                                        <td>Trip2</td>
                                                                        <td>
                                                                            Feb 22,2018 06:21:13 pm
                                                                        </td>
                                                                        <td>
                                                                            Feb 22,2018 06:21:13 pm
                                                                        </td>
                                                                        <td>
                                                                            They cover the whole spectrum of
                                                                            logistical
                                                                            disposal tasks
                                                                            used since the last reproduced
                                                                            below
                                                                            for those
                                                                            interested
                                                                        </td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80">
                                                                            Idle
                                                                        </td>
                                                                        <td>
                                                                            <div class="label label-danger ">
                                                                                Idle
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            Feb 22,2018 06:21:13 pm
                                                                        </td>
                                                                        <td>
                                                                            Feb 22,2018 06:50:13 pm
                                                                        </td>
                                                                        <td>
                                                                            Logistical
                                                                            disposal tasks
                                                                            used since the last reproduced
                                                                            below
                                                                            for those
                                                                            interested
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
                                <div class="tab-pane" id="Assets">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="row">


                                                <div class="col-lg-8">
                                                    <h4>Assets & Sensors </h4>
                                                    <table class="table    table-bordered margin-bottom-0 ">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left" width="200">Type</th>
                                                                <th class="text-left">Conunt </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-location.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Location </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10 ">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-gyroscope.png"
                                                                        alt="..." width="20" class="margin-right-10">
                                                                    <b> Shock Sensor </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-temperature.png"
                                                                        alt="..." width="20" class="margin-right-10">
                                                                    <b> Temperature </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-diplevel.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Proximity Sensor </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-default  margin-right-10 font-size-10">
                                                                        <i class="ion-close"></i> </span>
                                                                    Disabled</td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Pressure </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-density.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Video Recorder </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> On-board CCTV Camera
                                                                    </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span> Enabled
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="col-log-4">
                                                    <h4>&nbsp;</h4>
                                                    <div class="padding-0 padding-bottom-0 text-center">

                                                        <div class="margin-bottom-10 ">
                                                            <img src="images/bar-code.png " class=" img-bordered  "
                                                                style="max-height: 150px; max-width:100%;">


                                                        </div>



                                                    </div>



                                                </div>
                                            </div>



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
<!--
                                                <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div>
-->
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
<!--
                                                <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div>
-->
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


                                                        <td> 90.000 () </td>
                                                        <td> 102.12 () </td>
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

                                <div class="tab-pane" id="Fillups">
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
<!--
                                                <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div>
-->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Time/Date </th>

                                                        <th class="text-left">Fuel</th>
                                                        <th class="text-left">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>25-Jan-2019, 08:00am</td>


                                                        <td>25 L</td>
                                                        <td class="text-left">Charlist Road</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>26-Jan-2019, 09:00am</td>


                                                        <td>21 L</td>
                                                        <td class="text-left">Park Lane Road</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>28-Jan-2019, 10:00am</td>



                                                        <td>28 L</td>
                                                        <td class="text-left">Down Town Road</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Passengers">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="vscroll padding-right-0" style="height:auto;">
                                                <table
                                                    class="table  table-bordered table-condensed1 table-striped1 margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Status</th>
                                                            <th class="text-left">Time In </th>
                                                            <th class="text-left">Time Out</th>
                                                            <th class="text-left">Charges</th>
                                                            <th class="text-center"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo1.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Adam Smith
                                                                    
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"></td>
                                                            <td class="text-left">0.5 $</td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo2.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                       Ivar
                                                                            Banega
                                                                   
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"> </td>
                                                            <td class="text-left">0.5 $</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo3.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                         
                                                                            Philippe
                                                                            Coutinho
                                                                      
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"></td>
                                                            <td class="text-left">1.5 $</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user.jpg" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                         Luis
                                                                            Suarez
                                                                    
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-danger "> Offline
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left">07-Jan-2019, 01:19pm</td>
                                                            <td class="text-left">0.5 $</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo1.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                         Joe
                                                                            Denly
                                                                    
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"></td>
                                                            <td class="text-left">0.5 $</td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo2.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Ivar
                                                                            Banega
                                                                        
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"> </td>
                                                            <td class="text-left">0.5 $</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo3.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        Philippe
                                                                            Coutinho
                                                                   
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success "> Online
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left"></td>
                                                            <td class="text-left">1.5 $</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/passenger-photo1.jpg" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                         Luis
                                                                            Suarez
                                                                      
                                                                        <br>
                                                                        <i class="small">Student</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-danger "> Offline
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07-Jan-2019, 12:19pm </td>
                                                            <td class="text-left">07-Jan-2019, 01:19pm</td>
                                                            <td class="text-left">0.5 $</td>
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