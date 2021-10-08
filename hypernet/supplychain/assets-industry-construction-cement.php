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



    <div class="page1">
        <!-- <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->


        <div class="page-content  container-fluid">



            <div class="row ">
                <div class="col-md-12">

                    <div class="row ">
                        <div class="col-md-3">
                            <div class="widget shadow card">
                                <div class="white padding-10 bg-orange-700  text-center relative "
                                    style="height:150px;">
                                    <div class=" margin-bottom-10">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total In Stock
                                            </div>
                                        </div>

                                        <div class="dropdown margin-bottom-0 ">
                                            <button type="button"
                                                class="btn bg-orange-800  btn-block white dropdown-toggle btn-xs"
                                                data-toggle="dropdown">
                                                This Week
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">

                                                <li role="presentation"><a href="javascript:void(0)">This Week</a>
                                                </li>
                                                <li role="presentation"><a href="javascript:void(0)">This Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="">
                                            <!-- <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
                                            </div> -->
                                            <b class="font-size-18" style="position:relative; top:5px;">2497</b>
                                        </div>


                                    </div>

                                    <div class="row no-space bg-orange-600 ">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">12%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr',
                                                                    data: {
                                                                        columns: [
                                                                            ['sample', 130, 52, 30, 21, 150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
                                                                        ],
                                                                        type: 'bar',
                                                                    },
                                                                    color: {
                                                                        pattern: ['#fff', '#e9595b', '#f96868', '#fa7a7a']
                                                                    },

                                                                    legend: {
                                                                        show: false
                                                                    }, tooltip: { show: false },
                                                                    axis: {
                                                                        x: { show: false },
                                                                        y: { show: false }
                                                                    }, size: { height: 30, width: 40 }, point: {
                                                                        show: false
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
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div class=" padding-top-0 pa bg-blue-700 vertical-align height-100 white  text-center relative "
                                            style="height:150px;">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Predicted Inflation Rate
                                                    </div>
                                                    <div class="margin-bottom-15"> <img src="images/icon-online.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-18">9.41%</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div class=" padding-top-0 pa bg-red-700 vertical-align height-100 white  text-center relative "
                                            style="height:150px;">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Total Providers</div>
                                                    <div class="margin-bottom-15"> <img src="images/icon-offline.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-20">58</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="widget  white margin-bottom-30 shadow card">
                                        <div class="padding-15 bg-cyan-700 " style="height:150px;">
                                            <div class="text-center padding-top-0">
                                                <div class="">


                                                    <div class=" font-size-14 margin-bottom-10">Major Provider</div>

                                                    <div class="dropdown margin-bottom-10 ">
                                                        <button type="button"
                                                            class="btn bg-cyan-800 btn-block white dropdown-toggle btn-xs"
                                                            data-toggle="dropdown">
                                                            This Week
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu font-size-10 text-center"
                                                            style="min-width:100%;">

                                                            <li role="presentation"><a href="javascript:void(0)">This
                                                                    Week</a>
                                                            </li>
                                                            <li role="presentation"><a href="javascript:void(0)">This
                                                                    Year</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="font-size-18  margin-bottom-10 font-weight-600"> Al
                                                        Khalij Cement
                                                    </div>

                                                    <!-- <div class="font-size-14 margin-bottom-10"> 24 Maintenances </div> -->
                                                    <div class="font-size-10">
                                                        <span class="margin-right-5"><i
                                                                class="ion-arrow-graph-up-right"></i></span>
                                                        <span class="">57%</span>
                                                        <span class="">Contribution</span>
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

                <div class="col-lg-12  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Statistics</h3>

                        </div>
                        <div class="panel-body ">

                            <div class="row">

                                <div class="col-lg-9">

                                    <div class="margin-bottom-0 clearfix">

                                        <div class="inline-block  pull-left  margin-bottom-20 margin-right-10">
                                            <div class="form-group  margin-bottom-0  ">
                                                <div class="input-daterange   ">
                                                    <div class="input-group  input-group-sm">
                                                        <div class="input-group-addon">
                                                            <i class="icon ion-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control date" value="10/24/17">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-addon">to</div>
                                                        <input type="text" class="form-control date" value="10/25/17">
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


                                    <div class="chartbox">
                                        <div id="chart-mmm"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {

                                                    var chart = c3.generate({
                                                        bindto: '#chart-mmm',
                                                        size: {
                                                            height: 300,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [

                                                                ['Supply', 40, 20, 50, 20, 50, 15, 38, 25, 20, 10, 50, 20],
                                                                ['Demand', 15, 30, 99, 20, 10, 15, 30, 25, 20, 10, 72, 60],

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
                                                                    text: 'Week ',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
                                    </div>


                                </div>


                                <div class="col-lg-3">
                                    <h3 class="text-center font-size-18">Provider Ratio</h3>
                                    <!-- <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm">

                                                    <option>This Week</option>
                                                    <option>This Month </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="chartbox">
                                        <div id="chart-alerts1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-alerts1',
                                                        size: {
                                                            height: 290,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Al Khalij', 78,],
                                                                ['National Cement', 8],
                                                                ['United Gulf', 12,],
                                                                ['SMEET Ready', 18],
                                                                ['Simsima Tile', 8],
                                                                ['Aamal Readymix', 12,],
                                                                ['Al Sraiya', 8],
                                                                ['QPMC ', 7],
                                                            ],
                                                            type: 'pie',
                                                        },
                                                        color: {
                                                            // pattern: ['#ef6666', '#36ab7a']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Jobs',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'No of Jobs ',
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



            </div>






        </div>
    </div>















    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>








</body>

</html>