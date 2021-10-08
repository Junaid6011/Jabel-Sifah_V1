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



        <div class=" page-content container-fluid">

            <div class="row">

                <div class="col-lg-4">
                    <div class="panel panel-default card   light  ">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center">Fleets Availability</h3>
                        </div>
                        <div class="panel-body padding-20" style="padding-bottom: 18px !important; ">

                            <div class="row">
                                <div class="col-sm-6 ">
                                    <div class=" text-center margin-bottom-20" data-toggle="popover"
                                        data-trigger="hover" data-placement="top" id="Public">
                                        <div class=" c100 p80 orange small1" style="background-color:#fff;">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-public1.png" height="30" />
                                                <div>650</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>
                                        <div class="font-weight-600 text-uppercase margin-top-10">Public
                                        </div>
                                        <div id="popover-content-Public" class="hide padding-0">
                                            <div class="padding-5 bg-orange-800 white">80%</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 ">
                                    <div class=" text-center margin-bottom-20" data-toggle="popover"
                                        data-trigger="hover" data-placement="top" id="School">
                                        <div class=" c100 p70 blue small1" style="background-color:#fff;">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-school1.png" height="30" />
                                                <div>400</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>
                                        <div class="font-weight-600 text-uppercase margin-top-10">School
                                        </div>
                                        <div id="popover-content-School" class="hide">
                                            <div class="padding-5 bg-blue-800 white">70%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 ">
                                    <div class=" text-center margin-bottom-0" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" id="Rent">
                                        <div class=" c100 p55 green small1" style="background-color:#fff;">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-rent1.png" height="30" />

                                                <div>380</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>
                                        <div class="font-weight-600 text-uppercase margin-top-10">Rental
                                        </div>
                                        <div id="popover-content-Rent" class="hide">
                                            <div class="padding-5 bg-green-800 white">55%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-sm-6 ">
                                    <div class=" text-center margin-bottom-0" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" id="Taxi">
                                        <div class=" c100 p69 teal small1" style="background-color:#fff;">
                                            <span class="pointer"
                                                style="line-height: normal !important; padding-top: 30px;"> <img
                                                    src="images/icon-transport-taxi1.png" height="30" />
                                                <div>420</div>
                                            </span>
                                            <div class="slice">
                                                <div class="bar"></div>
                                                <div class="fill"></div>
                                            </div>
                                        </div>
                                        <div class="font-weight-600 text-uppercase margin-top-10">Taxi
                                        </div>
                                        <div id="popover-content-Taxi" class="hide">
                                            <div class="padding-5 bg-teal-800 white">69%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-4">
                    <div class="panel panel-default  card light ">
                        <div class="panel-heading margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center">Employees
                                Statistics</h3>
                        </div>
                        <div class="panel-body padding-20">
                            <div class="row">


                                <div class="col-md-12 ">
                                    <div class="padding-10 margin-bottom-15  bg-orange-800 white card ">
                                        <div class="media">
                                            <div class="media-left padding-right-20">
                                                <img src="images/icon-transport-public.png" height="40" />
                                            </div>
                                            <div class="media-body">
                                                <div class=" font-size-18">120</div>
                                                <div class="text-uppercase">Public
                                                    Fleets</div>
                                            </div>
                                            <div class="media-right ">
                                                <div class=" font-size-18 text-center bg-orange-600  padding-5">
                                                    <div class="font-size-12 font-weight-600">
                                                        20%</div>
                                                    <div class="font-size-12">Available
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="padding-10 margin-bottom-15  bg-blue-800 white card ">
                                        <div class="media">
                                            <div class="media-left padding-right-20">
                                                <img src="images/icon-transport-school.png" height="40" />
                                            </div>
                                            <div class="media-body">
                                                <div class=" font-size-18">70</div>
                                                <div class="text-uppercase">School
                                                    Fleets</div>
                                            </div>
                                            <div class="media-right ">
                                                <div class=" font-size-18 text-center bg-blue-600  padding-5">
                                                    <div class="font-size-12 font-weight-600">
                                                        30%</div>
                                                    <div class="font-size-12">Available
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="padding-10 margin-bottom-15  bg-green-800 white card ">
                                        <div class="media">
                                            <div class="media-left padding-right-20">
                                                <img src="images/icon-transport-rent.png" height="40" />
                                            </div>
                                            <div class="media-body">
                                                <div class=" font-size-18">170</div>
                                                <div class="text-uppercase">Rent
                                                    Fleets</div>
                                            </div>
                                            <div class="media-right ">
                                                <div class=" font-size-18 text-center bg-green-600  padding-5">
                                                    <div class="font-size-12 font-weight-600">
                                                        70%</div>
                                                    <div class="font-size-12">Available
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="padding-10 margin-bottom-0  bg-teal-800 white card ">
                                        <div class="media">
                                            <div class="media-left padding-right-20">
                                                <img src="images/icon-transport-taxi.png" height="40" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-18">300</div>
                                                <div class="text-uppercase">Taxi
                                                    Fleets</div>
                                            </div>
                                            <div class="media-right ">
                                                <div class=" font-size-18 text-center bg-teal-600  padding-5">
                                                    <div class="font-size-12 font-weight-600">
                                                        10%</div>
                                                    <div class="font-size-12">Available
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

                <div class="col-lg-4  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Fleets Efficency
                            </h3>

                        </div>
                        <div class="panel-body ">


                            <div class="chartbox">
                                <div id="chart-jjj"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var chart = c3.generate({
                                                bindto: '#chart-jjj',
                                                size: {
                                                    height: 176,
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
                                <label class=""> <i class="ion-arrow-graph-up-right"></i></label> 23% More
                                than
                                last week
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="chartbox">
                                        <div id="chart-PUBLIC"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var chart = c3.generate({
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
                                                                ['PUBLIC', 75.1],

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
                                <div class="col-lg-3">
                                    <div class="chartbox">
                                        <div id="chart-SCHOOL"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var chart = c3.generate({
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
                                                                ['SCHOOL', 88],

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
                                <div class="col-lg-3">
                                    <div class="chartbox">
                                        <div id="chart-RENT"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var chart = c3.generate({
                                                        bindto: '#chart-RENT',
                                                        size: {
                                                            height: 60,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['RENT', 50],

                                                            ],
                                                            type: 'gauge',
                                                        },
                                                        color: {
                                                            pattern: ['#279566', '#178d81']
                                                        },
                                                    });
                                                })();
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="chartbox">
                                        <div id="chart-TAXI"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var chart = c3.generate({
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
                                                                ['TAXI', 80],

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

                    </div>



                </div>

            </div>

            <div class="row">

                <div class="col-lg-8  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Utilization of Fleets &
                                Employees</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">
<!--
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option selected>Fleets</option>
                                            <option>Employees </option>
                                        </select>
                                    </div>
-->
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class4">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-mmm"></div>
                                <script>
                                    var chart1;
                                    $(document).ready(function ($) {
                                        (function () {

                                             chart1 = c3.generate({
                                                bindto: '#chart-mmm',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['PUBLIC', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SCHOOL', 15, 30, 25, 20, 10, 40, 70],
                                                        ['RENTAL ', 5, 10, 30, 10, 50, 30, 20],
                                                        ['TAXI', 15, 30, 45, 20, 10, 40, 70],
                                                    ],
                                                    axes: {
                                                        data1: 'y',
                                                        data2: 'y2'
                                                    },
                                                    type: 'area-spline',
                                                },
                                                color: {
                                                    pattern: ['#e98f2e', '#3583ca', '#279566', '#178d81']
                                                },
                                                axis: {
                                                    y: {
                                                        show: true
                                                    },
                                                    y2: {
                                                        show: false
                                                    },

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
                                                            text: 'Number ',
                                                            position: 'outer-middle'
                                                        },
                                                    },

                                                },
                                                grid: {
                                                    x: {
                                                        show: true
                                                    },
                                                    y: {
                                                        show: true
                                                    }
                                                },
                                            });

                                        })();
                                    });
                                </script>
                                 <script>
                                $("#mrq-dd-class4").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        chart1.load({
                                            unload: true,
                                            columns:[
                                                        ['PUBLIC', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SCHOOL', 15, 30, 25, 20, 10, 40, 70],
                                                        ['RENTAL ', 5, 10, 30, 10, 50, 30, 20],
                                                        ['TAXI', 15, 30, 45, 20, 10, 40, 70],
                                                    ],
                                        });
                                    }
                                    else {
                                        chart1.load({
                                            unload: true,
                                            columns:[
                                                        ['PUBLIC', 140, 120, 150, 120, 150, 160, 170],
                                                        ['SCHOOL', 115, 130, 125, 120, 110, 140, 170],
                                                        ['RENTAL ', 15, 110, 130, 110, 150, 130, 120],
                                                        ['TAXI', 115, 130, 145, 20, 110, 140, 170],
                                                    ],
                                        });
                                    }
                                });
                            </script>
                            </div>




                        </div>

                    </div>



                </div>

                <div class="col-lg-4  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Passenger Served Statistics
                            </h3>

                        </div>
                        <div class="panel-body ">

                            <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class2">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-ppp"></div>
                                <script>
                                    var chart;
                                    $(document).ready(function ($) {
                                        (function () {

                                            chart = c3.generate({
                                                bindto: '#chart-ppp',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['PUBLIC', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SCHOOL', 15, 30, 25, 20, 10, 40, 70],
                                                        ['RENTAL ', 5, 10, 30, 10, 50, 30, 20],
                                                        ['TAXI', 15, 30, 45, 20, 10, 40, 70],
                                                    ],
                                                    axes: {
                                                        data1: 'y',
                                                        data2: 'y2'
                                                    },
                                                    type: 'donut',
                                                },
                                                donut: {
                                                    label: {
                                                        format: function (value, ratio, id) {
                                                            return value;
                                                        }
                                                    },
                                                    title: "Passengers"
                                                },
                                                color: {
                                                    pattern: ['#e98f2e', '#3583ca', '#279566', '#178d81']
                                                },
                                                axis: {
                                                    y: {
                                                        show: true
                                                    },
                                                    y2: {
                                                        show: false
                                                    },

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
                                                            text: 'Number ',
                                                            position: 'outer-middle'
                                                        },
                                                    },

                                                },
                                                grid: {
                                                    x: {
                                                        show: true
                                                    },
                                                    y: {
                                                        show: true
                                                    }
                                                },
                                            });

                                        })();
                                    });
                                </script>
                                 <script>
                                $("#mrq-dd-class2").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        chart.load({
                                            unload: true,
                                            columns: [
                                                        ['PUBLIC', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SCHOOL', 15, 30, 25, 20, 10, 40, 70],
                                                        ['RENTAL ', 5, 10, 30, 10, 50, 30, 20],
                                                        ['TAXI', 15, 30, 45, 20, 10, 40, 70],
                                                    ],
                                        });
                                    }
                                    else {
                                        chart.load({
                                            unload: true,
                                            columns: [
                                                        ['PUBLIC', 240, 320, 250, 120, 350, 260, 170],
                                                        ['SCHOOL', 15, 130, 225, 20, 10, 40, 70],
                                                        ['RENTAL ', 35, 10, 30, 310, 50, 30, 20],
                                                        ['TAXI', 115, 30, 45, 220, 10, 240, 70],
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

                <div class="col-lg-4  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Maintenances Overview</h3>

                        </div>
                        <div class="panel-body padding-bottom-10">
                            <div class="margin-bottom-15 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                       <select class="form-control input-sm" id="mrq-dd-Utilization">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-hours"></div>
                                <script>
                                    var simple_line_chart;
                                    $(document).ready(function ($) {
                                        (function () {
                                             simple_line_chart = c3.generate({
                                                bindto: '#chart-hours',
                                                size: {
                                                    height: 196,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Numbers', 152, 50, 95, 15, 28],
                                                    ],
                                                    type: 'bar',
                                                },
                                                // subchart: {
                                                //     show: true
                                                // },

                                                color: {
                                                    // pattern: ['#888']
                                                },
                                                axis: {
                                                    rotated: true,
                                                    x: {
                                                        label: {
                                                            show: false,
                                                            text: '',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Completed', 'In Workshop', 'Active', 'Scheduled', 'Waiting For Parts']
                                                    },
                                                    y: {
                                                        label: {

                                                            text: ' ',
                                                            position: 'outer-middle'
                                                        },
                                                    },
                                                },
                                                bar: {
                                                    width: {
                                                        ratio: 0.2
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
                                $("#mrq-dd-Utilization").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns: [
                                                        ['Numbers', 152, 50, 95, 15, 28],
                                                    ],
                                        });
                                    }
                                    else {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns: [
                                                        ['Numbers', 552, 50, 835, 615, 490],
                                                    ],
                                        });
                                    }
                                });
                            </script>
                                
                            </div>





                        </div>

                    </div>



                </div>

                <div class="col-lg-3  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading  margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center ">Booking Overview</h3>
                        </div>
                        <div class="panel-body padding-15">

                            <div class="text-center margin-bottom-15  ">
                                <div class="font-size-12 ">Event Booking</div>
                                <div class="font-size-30 green-800">75</div>

                                <div class="bg-green-800 padding-5 white">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="font-size-10">On Route</div>
                                            <div class="font-size-14">30</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="font-size-10">Scheduled</div>
                                            <div class="font-size-14">15</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="font-size-10">Pending</div>
                                            <div class="font-size-14">30</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center  ">

                                <div class="font-size-12">Rent Booking</div>
                                <div class="font-size-30 blue-800">30</div>

                                <div class="bg-blue-800 padding-5 white">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="font-size-10">On Route</div>
                                            <div class="font-size-14">10</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="font-size-10">Scheduled</div>
                                            <div class="font-size-14">15</div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="font-size-10">Pending</div>
                                            <div class="font-size-14">5</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>




                </div>
                <div class="col-lg-5 ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading  margin-bottom-0">
                            <h3 class="panel-title font-weight-600 text-center ">Workload</h3>
                        </div>
                        <div class="panel-body padding-15">
                            <div class="margin-bottom-15 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                       <select class="form-control input-sm" id="mrq-dd-class3">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-www"></div>
                                <script>
                                     var simple_line_chart2;
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart2 = c3.generate({
                                                bindto: '#chart-www',
                                                size: {
                                                    height: 190,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Fleets', 95, 90, 50, 70],
                                                        ['Employees', 75, 90, 40, 80],
                                                    ],
                                                    type: 'area',
                                                },
                                                // subchart: {
                                                //     show: true
                                                // },

                                                color: {
                                                    pattern: ['#e98f2e', '#555']
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
                                                        categories: ['PUBLIC', 'SCHOOL', 'RENTAL', 'TAXI']
                                                    },
                                                    y: {
                                                        label: {

                                                            text: ' ',
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
                                $("#mrq-dd-class3").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns:[
                                                        ['Fleets', 95, 90, 50, 70],
                                                        ['Employees', 75, 90, 40, 80],
                                                    ],
                                        });
                                    }
                                    else {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns:[
                                                        ['Fleets', 295, 190, 250, 170],
                                                        ['Employees', 275, 190, 240, 180],
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