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


        <div class="page-content  container-fluid">



            <div class="row ">
                <div class="col-md-7">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Fleets
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">400</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-blue-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Online</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-online.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-18">300</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-red-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Offline</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-offline.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-20">100</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="row no-space shadow card margin-bottom-30">

                                <div class="">
                                    <div class="slikslider margin-bottom-0 bg-teal-500  " id="slikslider-types">
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10 bg-teal-500 height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0   ">
                                                            <div class="font-size-14 ">
                                                                Marshall Goods
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">200</b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            190 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                SILK Logistics
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 100 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            90 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Balance Relocation
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 70 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            10 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Goods Transport
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 30 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600  absolute1  left right bottom">
                                                            10 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Adam Motors
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 0 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600  absolute1  left right bottom">
                                                            0 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <script>
                                        $('#slikslider-types').slick({
                                            infinite: false,
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                            arrows: true,
                                            dots: true,
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


                <div class="col-lg-5">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-teal-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">
                                            <div class=" font-size-18 margin-bottom-20">Most Utilized Fleets</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button" class="btn bg-teal-800 white btn-xs text-center "
                                                    id="mrq-dd-violations">
                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                                Marshal Goods </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> 55 Fleets </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">17%</span>
                                                <span class="" id="mrq-v4">more than last week</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-violations").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('week')) {
                                                        $("#mrq-v1").text('	    Marshal Goods ')
                                                        $("#mrq-v2").text('55 Fleets')
                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-v4").text('more than last week')
                                                    }
                                                    else {
                                                        $("#mrq-v1").text('	Slik Logistics ')
                                                        $("#mrq-v2").text('150 Fleets')
                                                        $("#mrq-v3").text('13%')
                                                        $("#mrq-v4").text('more than last month')
                                                    }
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-cyan-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">


                                            <div class=" font-size-18 margin-bottom-20">Least Utilized Fleets</div>

                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button" class="btn bg-cyan-800 white btn-xs"
                                                    id="mrq-dd-maintenance">
                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>

                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1">
                                                Adam Motors </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-m2"> 02 Fleets
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-m3">18%</span>
                                                <span class="" id="mrq-m4">less than last week</span>
                                            </div>
                                        </div>

                                        <script>
                                            $("#mrq-dd-maintenance").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('week')) {
                                                    $("#mrq-m1").text('  Adam Motors')
                                                    $("#mrq-m2").text('02 Fleets')
                                                    $("#mrq-m3").text('18%')
                                                    $("#mrq-m4").text('less than last week')
                                                }
                                                else {
                                                    $("#mrq-m1").text('	Goods Motors')
                                                    $("#mrq-m2").text('10 Fleets')
                                                    $("#mrq-m3").text('19%')
                                                    $("#mrq-m4").text('more than last month')
                                                }
                                            })

                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>




            <div class="row">
                <div class="col-lg-4  ">


                    <div class="panel panel-dark  card  light">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center"> Overall Utilization Status
                            </h3>

                        </div>
                        <div class="panel-body text-center padding-15 ">


                            <div class="dropdown margin-bottom-20  text-center"">
                                <select type=" button" class=" btn-xs text-center " id="mrq-dd-uu">
                                <option>This Week</option>
                                <option>This Month</option>
                                </select>

                            </div>


                            <div class="chartbox">
                                <div id="chart-jjj"></div>
                                <script>

                                    var chartuu;
                                    $(document).ready(function ($) {
                                        (function () {
                                            chartuu = c3.generate({
                                                bindto: '#chart-jjj',
                                                size: {
                                                    height: 153,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['OVERALL', 88.1],

                                                    ],
                                                    type: 'gauge',
                                                },

                                            });

                                        })();
                                    });
                                </script>
                            </div>
                            <div class="font-size-14 text-center  margin-top-15">
                                <label class=""> <i class="ion-arrow-graph-up-right"></i></label> 23% more than last
                                month
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="chartbox">
                                        <div class="font-size-10">On Route </div>
                                        <div id="chart-PUBLIC"></div>
                                        <script>
                                            var chartuu1;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    chartuu1 = c3.generate({
                                                        bindto: '#chart-PUBLIC',
                                                        size: {
                                                            height: 60,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['', 75.1],

                                                            ],
                                                            type: 'gauge',
                                                        },
                                                        color: {
                                                            pattern: ['#e98f2e', '#3583ca', '#279566', '#178d81']
                                                        },
                                                    });
                                                })();
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="chartbox">
                                        <div class="font-size-10">Waiting </div>
                                        <div id="chart-SCHOOL"></div>
                                        <script>

                                            var chartuu2;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    chartuu2 = c3.generate({
                                                        bindto: '#chart-SCHOOL',
                                                        size: {
                                                            height: 60,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['', 50],

                                                            ],
                                                            type: 'gauge',
                                                        },
                                                        color: {
                                                            pattern: ['#3583ca', '#279566', '#178d81']
                                                        },
                                                    });
                                                })();
                                            });
                                        </script>


                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="chartbox">
                                        <div class="font-size-10">Available </div>
                                        <div id="chart-TAXI"></div>
                                        <script>
                                            var chartuu3;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    chartuu3 = c3.generate({
                                                        bindto: '#chart-TAXI',
                                                        size: {
                                                            height: 60,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['', 80],

                                                            ],
                                                            type: 'gauge',
                                                        },
                                                        color: {
                                                            pattern: ['#178d81']
                                                        },
                                                    });
                                                })();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <script>
                            $("#mrq-dd-uu").on('change', function () {

                                if (this.value.trim().toLowerCase().includes('week')) {
                                    chartuu.load({
                                        unload: true,
                                        columns: [
                                            ['', 88.1],
                                        ],
                                    });
                                }
                                else {
                                    chartuu.load({
                                        unload: true,
                                        columns: [

                                            ['', 58.3],
                                        ],
                                    });
                                }


                                //////////////////////////


                                if (this.value.trim().toLowerCase().includes('week')) {
                                    chartuu1.load({
                                        unload: true,
                                        columns: [
                                            ['', 75.1],
                                        ],
                                    });
                                }
                                else {
                                    chartuu1.load({
                                        unload: true,
                                        columns: [

                                            ['', 34.3],
                                        ],
                                    });
                                }


                                //////////////////////////

                                if (this.value.trim().toLowerCase().includes('week')) {
                                    chartuu2.load({
                                        unload: true,
                                        columns: [
                                            ['', 50.1],
                                        ],
                                    });
                                }
                                else {
                                    chartuu2.load({
                                        unload: true,
                                        columns: [

                                            ['', 33.3],
                                        ],
                                    });
                                }

                                //////////////////////////

                                if (this.value.trim().toLowerCase().includes('week')) {
                                    chartuu3.load({
                                        unload: true,
                                        columns: [
                                            ['', 80],
                                        ],
                                    });
                                }
                                else {
                                    chartuu3.load({
                                        unload: true,
                                        columns: [

                                            ['', 64.3],
                                        ],
                                    });
                                }


                            });
                        </script>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="panel panel-dark card   light  ">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center">Warehouse Parking Status</h3>
                        </div>
                        <div class="panel-body padding-15" style="padding-bottom: 18px !important; ">

                            <div class="dropdown margin-bottom-20  text-center"">
                                <select type=" button" class=" btn-xs text-center " id="mrq-dd-parking">
                                <option>Customer warehouse (current) </option>
                                <option>Own warehouses </option>
                                </select>

                            </div>


                            <div class="row">
                                <div class="col-sm-6 ">

                                    <div class="font-weight-600 text-uppercase margin-bottom-20 text-center">Inside
                                        Warehouse
                                    </div>
                                    <div class=" text-center margin-bottom-20" data-toggle="popover"
                                        data-trigger="hover" data-placement="top" id="Public" data-original-title=""
                                        title="">
                                        <div class=" c100 p80 orange small1" style="background-color:#fff;" id="cc1">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-public1.png" height="30">
                                                <div id="pp1">650</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>

                                        <div id="popover-content-Public" class="hide padding-0">
                                            <div class="padding-5 bg-orange-800 white" id="bb1">80%</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 ">

                                    <div class="font-weight-600 text-uppercase margin-bottom-20 text-center">Outside
                                        Warehouse
                                    </div>
                                    <div class=" text-center margin-bottom-20" data-toggle="popover"
                                        data-trigger="hover" data-placement="top" id="School" data-original-title=""
                                        title="">
                                        <div class=" c100 p70 blue small1" style="background-color:#fff;" id="cc2">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-public1.png" height="30">
                                                <div id="pp2">400</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>

                                        <div id="popover-content-School" class="hide">
                                            <div class="padding-5 bg-blue-800 white" id="bb2">70%</div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div>

                                <div class="bg-blue-100 padding-15 text-center ">
                                    <div class="font-size-14 margin-bottom-15">
                                        Average Time Outside Parking</div>
                                    <div class="margin-bottom-10">
                                        <span class="font-size-24 green-800" id="hr1">
                                            1.5 hours
                                        </span>
                                    </div>
                                    <div class="font-size-12 text-center  margin-top-10" id="mr1">
                                        23% more than last 24 hours
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script>
                        $("#mrq-dd-parking").on('change', function () {
                            debugger
                            if (this.value.trim().toLowerCase().includes('current')) {
                                $("#pp1").text('650')
                                $("#pp2").text('400')
                                $("#bb1").text('80')
                                $("#bb2").text('70')
                                $("#cc1").addClass('p80').removeClass('p90')
                                $("#cc2").addClass('p70').removeClass('p90')


                                $("#hr1").text('1.5 hours')
                                $("#mr1").text(' 23% more than last 24 hours')
                            }
                            else {
                                $("#pp1").text('750')
                                $("#pp2").text('440')
                                $("#bb1").text('70')
                                $("#bb2").text('50')
                                $("#cc1").addClass('p70').removeClass('p80')
                                $("#cc2").addClass('p90').removeClass('p70')

                                $("#hr1").text('2.2 hours')
                                $("#mr1").text(' 27% more than last 24 hours')
                            }
                        })

                    </script>


                </div>
                <div class="col-lg-4">
                    <div class="panel panel-dark  card light ">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center">Parking Duration
                            </h3>
                        </div>
                        <div class="panel-body padding-15">

                            <div class="dropdown margin-bottom-20  text-center" "="">
                                        <select type=" button" class=" btn-xs text-center " id="mrq-dd-555">
                                <option>This Week</option>
                                <option>This Month</option>
                                </select>

                            </div>
                            <div class="chartbox">
                                <div id="chart-vvv1"></div>
                                <script>

                                    var simple_line_chart555;
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart555 = c3.generate({
                                                bindto: '#chart-vvv1',
                                                size: {
                                                    height: 315,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                    // chart.legend.show(['Total_Visitors'])
                                                    hide: ['Data', 'MOE_Owner']
                                                },

                                                data: {
                                                    columns: [
                                                        ['Fleets', 110, 170, 200, 127],


                                                    ],
                                                    type: 'bar',

                                                },

                                                color: {
                                                    pattern: ['#56bfb5']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            show: false,
                                                            text: 'Parking Time',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['10m-30m', '30m-1h', '1h-2h', '> 5h ']
                                                    },
                                                    y: {
                                                        label: {

                                                            text: 'Fleets ',
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


                                <script>
                                    $("#mrq-dd-555").on('change', function () {

                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            simple_line_chart555.load({
                                                unload: true,
                                                columns: [

                                                    ['Fleets', 110, 170, 200, 127],
                                                ],
                                            });
                                        }
                                        else {
                                            simple_line_chart555.load({
                                                unload: true,
                                                columns: [

                                                    ['Fleets', 1110, 1170, 1200, 1127],
                                                ],
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>


            </div>











            <div class="row">



                <div class="col-lg-12">
                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading font-weight-600 ">
                            <h3 class="panel-title "><b>Listing </b></h3>
                            <div class="panel-actions ">
                                <a class="panel-action icon ion-loop " data-toggle="tooltip"
                                    data-original-title="Refresh"></a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="sidebox">
                                <div class="page-aside left-filters">
                                    <div class="page-aside-switch">
                                        <i class="icon wb-chevron-left"></i>
                                        <i class="icon wb-chevron-right"></i>
                                    </div>
                                    <div class="page-aside-inner">
                                        <section class="page-aside-section">
                                            <div class=" padding-left-20 padding-right-20">

                                                <div class="panel-group left-filters" id="AccordionFilters1">

                                                    <!--      <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse"
                                                                href="#Location" data-parent="#AccordionFilters">
                                                                Location
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Location"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">

                                                                <div class="form-inline">
                                                                    <div class="input-icon">
                                                                        <select
                                                                            class="form-control selectpicker show-tick show-menu-arrow  "
                                                                            multiple data-width="100%" data-size="5"
                                                                            title="All" data-style="btn-select"
                                                                            data-live-search="true">
                                                                            <option data-subtext=""> Eelry
                                                                            </option>
                                                                            <option data-subtext="" disabled>
                                                                                Stanmore
                                                                            </option>
                                                                            <option data-subtext=""> Lancaster
                                                                            </option>
                                                                            <option data-subtext=""> Crullfeld
                                                                            </option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#Status"
                                                                data-parent="#AccordionFilters">
                                                                Status
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Status"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered mrq-cb"
                                                                    data-mrq-col-no="1" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">600</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="online"
                                                                                    id="Online1" name="online" />
                                                                                <label for="Online1">Online</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">100</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="offline"
                                                                                    id="Online1r" name="" />
                                                                                <label for="Online1r">Offline</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#Types"
                                                                data-parent="#AccordionFilters">
                                                                Types
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Types"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered mrq-cb"
                                                                    data-mrq-col-no="8" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">200</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Truck"
                                                                                    name="" value="Truck" />
                                                                                <label for="Truck">Truck
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">200</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Van" name=""
                                                                                    value="Van" />
                                                                                <label for="Van">Van</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse"
                                                                href="#Company" data-parent="#AccordionFilters">
                                                                Company
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Company"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered mrq-cb"
                                                                    data-mrq-col-no="9" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">120</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox"
                                                                                    id="Marshall Goods" name=""
                                                                                    value="Marshall Goods" />
                                                                                <label for="Marshall Goods">Marshall
                                                                                    Goods
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">200</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox"
                                                                                    id="SILK Logistics" name=""
                                                                                    value="SILK Logistics" />
                                                                                <label for="SILK Logistics">SILK
                                                                                    Logistics</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">112</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox"
                                                                                    id="Balance Relocation" name=""
                                                                                    value="Balance Relocation" />
                                                                                <label for="Balance Relocation">Balance
                                                                                    Relocation</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">180</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Adam Motors"
                                                                                    name="" value="Adam Motors" />
                                                                                <label for="Adam Motors">Adam
                                                                                    Motors</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>











                                            </div>
                                        </section>

                                    </div>
                                </div>
                                <div class="page-main">

                                    <div class="">

                                        <div class="margin-bottom-0 clearfix">
                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>
                                            <!-- <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                <select class="form-control input-sm">
                                                    <option>Sort by</option>
                                                    <option>Low Speed</option>
                                                    <option>High Speed</option>
                                                    <option>Low Temperature</option>
                                                    <option>High Temperature</option>
                                                </select>
                                            </div> -->
                                            <div class="inline-block  pull-left  margin-bottom-10 margin-right-10">
                                                <div class="form-group  margin-bottom-0  ">
                                                    <div class="input-daterange   ">
                                                        <div class="input-group  input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="icon ion-calendar"></i>
                                                            </div>
                                                            <input type="text" class="form-control date"
                                                                value="10/24/17" />
                                                        </div>
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">to</div>
                                                            <input type="text" class="form-control date"
                                                                value="10/25/17" />
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

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="vscroll padding-right-0" style="height:auto;">
                                                    <table
                                                        class="table  table-bordered table-hover table-condensed1 table-striped1 margin-bottom-0"
                                                        id="table">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left">Name</th>
                                                                <th class="text-left">Status</th>
                                                                <th class="text-left">Company</th>
                                                                <th class="text-left">Jobs Completed</th>
                                                                <th class="text-left"> CURRENT STATE</th>
                                                                <th class="text-left">Speed</th>

                                                                <th class="text-left">Temperature</th>
                                                                <th class="text-left">Volume</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">
                                                                                LZR 5478
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    350
                                                                </td>
                                                                <td class="text-left"><i class="green-700 inline-block">
                                                                        Moving </i>

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>
                                                                <td class="text-left"> 30.2 (Km/h)</td>
                                                                <td class="text-left">26.00 (℃)</td>
                                                                <td class="text-left"> 1,890.00 (L)</td>
                                                                <td class="text-left hidden"> truck
                                                                </td>

                                                                <td class="text-left hidden">Marshall Goods </td>
                                                                <!--  <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info1"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->

                                                            </tr>
                                                            <!--  <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info1">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">4
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        380 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,890.00
                                                                                        L</td>
                                                                                    <td class="text-center"> Feb
                                                                                        22,2018
                                                                                        10:07:08
                                                                                        pm</td>
                                                                                    <td class="text-center">Feb
                                                                                        21,2018
                                                                                        09:30:08 am</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">TRA312
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    SILK Logistics
                                                                </td>
                                                                <td class="text-left">
                                                                    150
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Abbey Road, North West
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 33.2 (Km/h)</td>
                                                                <td class="text-left">28.00 (℃)</td>
                                                                <td class="text-left"> 1,929.00 (L)</td>
                                                                <td class="text-left hidden"> Truck
                                                                </td>

                                                                <td class="text-left hidden"> SILK Logistics </td>
                                                                <!--  <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--   <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info2">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">6
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        400 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,929.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        March
                                                                                        15,2018
                                                                                        12:16:56
                                                                                        am</td>
                                                                                    <td class="text-center">
                                                                                        March
                                                                                        12,2018
                                                                                        11:19:13 am</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
 -->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">GAQ234
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Balance Relocation
                                                                </td>
                                                                <td class="text-left">
                                                                    170
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Park Road, 1289 North Station
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 28.2 (Km/h)</td>
                                                                <td class="text-left">24.00 (℃)</td>
                                                                <td class="text-left"> 1,710.00 (L)</td>
                                                                <td class="text-left hidden"> Truck
                                                                </td>
                                                                <td class="text-left hidden"> Balance Relocation </td>
                                                                <!-- <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info3"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--  <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info3">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">5
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        330 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,710.00
                                                                                        L</td>
                                                                                    <td class="text-center"> May
                                                                                        06,2018
                                                                                        08:30:23
                                                                                        pm</td>
                                                                                    <td class="text-center">May
                                                                                        03,2018
                                                                                        02:45:11 pm</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo1.png"
                                                                                class="img-bordered"
                                                                                style="height:36px ;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">MRY380
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Van</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger "> Offline
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Adam Motors
                                                                </td>
                                                                <td class="text-left">
                                                                    350
                                                                </td>
                                                                <td class="text-left"><i class="red-700"> Idle
                                                                    </i>
                                                                </td>
                                                                <td class="text-left"> 00.0 (Km/h)</td>
                                                                <td class="text-left">21.00 (℃)</td>
                                                                <td class="text-left"> 1,231.00 (L)</td>
                                                                <td class="text-left hidden"> Van
                                                                </td>
                                                                <td class="text-left hidden"> Adam Motors </td>
                                                                <!--  <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info4"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--     <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info4">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">3
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        390 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,820.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        August
                                                                                        16,2018
                                                                                        04:54:22
                                                                                        pm</td>
                                                                                    <td class="text-center">
                                                                                        August
                                                                                        12,2018
                                                                                        06:29:38 pm</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>

-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px ;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">TMR980
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    180
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Queen's Road, 1885 Avenue
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 28.6 (Km/h)</td>
                                                                <td class="text-left">23.00 (℃)</td>
                                                                <td class="text-left"> 1,1650.00 (L)</td>
                                                                <td class="text-left hidden"> truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--   <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info5"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--      <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info5">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">2
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        290 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,1650.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        June
                                                                                        13,2018
                                                                                        07:36:51
                                                                                        am</td>
                                                                                    <td class="text-center">June
                                                                                        11,2018
                                                                                        03:49:18 am</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
-->

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">AWM876
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    450
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Booger Hollow, West Road
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 25.5 (Km/h)</td>
                                                                <td class="text-left">26.00 (℃)</td>
                                                                <td class="text-left"> 1,550.00 (L)</td>
                                                                <td class="text-left hidden"> truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--      <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info6"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--     <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info6">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">2
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        331 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,550.00
                                                                                        L</td>
                                                                                    <td class="text-center"> Jan
                                                                                        28,2018
                                                                                        06:13:51
                                                                                        am</td>
                                                                                    <td class="text-center">Jan
                                                                                        25,2018
                                                                                        12:39:48 pm</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">YSI261
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    370
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Savannah Road, East
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 23.9 (Km/h)</td>
                                                                <td class="text-left">27.00 (℃)</td>
                                                                <td class="text-left"> 1,6690.00 (L)</td>
                                                                <td class="text-left hidden"> Truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--     <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info7"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--      <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info7">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">4
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        370 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,6690.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        April
                                                                                        22,2018
                                                                                        03:47:08
                                                                                        am</td>
                                                                                    <td class="text-center">
                                                                                        April
                                                                                        20,2018
                                                                                        11:07:08 pm</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo1.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">CEF534
                                                                            </a>
                                                                            <br />
                                                                            <i class="small"> Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    119
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Seldom Seen Road, South
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 35.4 (Km/h)</td>
                                                                <td class="text-left">28.00 (℃)</td>
                                                                <td class="text-left"> 1,985.00 (L)</td>
                                                                <td class="text-left hidden"> Truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--      <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info8"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--    <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info8">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">7
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        250 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,985.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        July
                                                                                        17,2018
                                                                                        09:58:51
                                                                                        am</td>
                                                                                    <td class="text-center">July
                                                                                        14,2018
                                                                                        01:49:18 am</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">POE985
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    180
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Church Road, East
                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> 33.2 (Km/h)</td>
                                                                <td class="text-left">30.00 (℃)</td>
                                                                <td class="text-left"> 1,932.00 (L)</td>
                                                                <td class="text-left hidden"> Truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--   <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info9"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>
                                                            <!--    <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info9">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">9
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        490 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,932.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        September
                                                                                        23,2018
                                                                                        12:06:01
                                                                                        am</td>
                                                                                    <td class="text-center">
                                                                                        September
                                                                                        11,2018
                                                                                        01:39:48 am</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>-->
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered"
                                                                                style="height:36px;width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php"
                                                                                class="font-weight-600">HCE238
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Truck</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    Marshall Goods
                                                                </td>
                                                                <td class="text-left">
                                                                    110
                                                                </td>
                                                                <td class="text-left"><i class="green-700">
                                                                        Moving
                                                                    </i>
                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="small">
                                                                        Pig's Eye Lake, Avenue
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">29.6 (Km/h)</td>
                                                                <td class="text-left">29.00 (℃)</td>
                                                                <td class="text-left"> 1,789.00 (L)</td>
                                                                <td class="text-left hidden">Truck
                                                                </td>
                                                                <td class="text-left hidden"> Marshall Goods </td>
                                                                <!--   <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info10"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td> -->
                                                            </tr>

                                                            <!--    <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info10">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="text-center">Jobs
                                                                                        Completed</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Distance</th>
                                                                                    <th class="text-center">Last
                                                                                        24
                                                                                        Volume</th>
                                                                                    <th class="text-center">Last
                                                                                        Updated</th>
                                                                                    <th class="text-center">Last
                                                                                        Fillup</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">5
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        520 km
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        1,789.00
                                                                                        L</td>
                                                                                    <td class="text-center">
                                                                                        December
                                                                                        05,2018
                                                                                        10:02:57
                                                                                        am</td>
                                                                                    <td class="text-center">
                                                                                        December
                                                                                        01,2018
                                                                                        07:50:48 am</td>
                                                                                </tr> 
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>-->
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <nav>
                                                    <ul class="pagination pagination-sm ">
                                                        <li class="pagination-prev disabled"><a
                                                                href="javascript:void(0)"><span
                                                                    class="icon ion-android-arrow-back"></span></a>
                                                        </li>
                                                        <li class="pagination-items active" data-value="1"><a
                                                                href="javascript:void(0)">1</a></li>
                                                        <li class="pagination-items" data-value="2"><a
                                                                href="javascript:void(0)">2</a></li>
                                                        <li class="pagination-items" data-value="3"><a
                                                                href="javascript:void(0)">3</a></li>
                                                        <li class="pagination-items" data-value="4"><a
                                                                href="javascript:void(0)">4</a></li>
                                                        <li class="pagination-items" data-value="5"><a
                                                                href="javascript:void(0)">5</a></li>
                                                        <li class="pagination-next"><a href="javascript:void(0)"><span
                                                                    class="icon ion-android-arrow-forward"></span></a>
                                                        </li>
                                                    </ul>
                                                </nav>

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