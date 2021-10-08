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
    </div>-->

        <div class="page-header padding-0 margin-bottom-30">

        </div>

        <div class=" page-content container-fluid">

            <div class="row no-space1  ">


                <div class="col-lg-4">

                    <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Employees
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            700
                        </div>
                        <div class="row no-space">
                            <div class="col-md-4">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    On Shift
                                    <div class="font-size-16">300</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    On Activity
                                    <div class="font-size-16">300</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Available
                                    <div class="font-size-16">300</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">

                    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Sites
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            250
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">150</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Jobs
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-clients.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            250
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    Inprogress
                                    <div class="font-size-16">150</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    Pending
                                    <div class="font-size-16">100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-8  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Task Completion Rate</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class4">
                                            <option>Today </option>
                                            <option>This Week</option>
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
                                                        ['SITE 101', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SITE 102', 15, 30, 25, 20, 10, 40, 70],
                                                        ['SITE 103', 5, 10, 30, 10, 50, 30, 20],
                                                        ['SITE 104', 15, 30, 45, 20, 10, 40, 70],
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
                                                columns: [
                                                    ['Site 101', 40, 20, 50, 20, 50, 60, 70],
                                                    ['Site 102', 15, 30, 25, 20, 10, 40, 70],
                                                    ['Site 103', 5, 10, 30, 10, 50, 30, 20],
                                                    ['Site 104', 15, 30, 45, 20, 10, 40, 70],
                                                ],
                                            });
                                        }
                                        else {
                                            chart1.load({
                                                unload: true,
                                                columns: [
                                                    ['Site 101', 140, 120, 150, 120, 150, 160, 170],
                                                    ['Site 102', 115, 130, 125, 120, 110, 140, 170],
                                                    ['Site 103', 15, 110, 130, 110, 150, 130, 120],
                                                    ['Site 104', 115, 130, 145, 20, 110, 140, 170],
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
                            <h3 class="panel-title font-weight-600 text-center">Sites Efficency
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
                                                    height: 156,
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
                                                            height: 40,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['SITE 101', 75.1],

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
                                                            height: 40,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['SITE 102', 88],

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
                                                            height: 40,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['SITE 103', 50],

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
                                                            height: 40,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['SITE 104', 80],

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

                <div class="col-lg-4  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Overall Employee Partition
                            </h3>

                        </div>
                        <div class="panel-body ">

                            <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class2">
                                            <option>This Week </option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-Partition"></div>
                                <script>
                                    var chart;
                                    $(document).ready(function ($) {
                                        (function () {

                                            chart = c3.generate({
                                                bindto: '#chart-Partition',
                                                size: {
                                                    height: 240,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['SITE 101', 20, 20, 50, 20, 50, 60, 70],
                                                        ['SITE 102', 15, 30, 25, 50, 10, 40, 70],
                                                        ['SITE 103', 5, 10, 30, 10, 50, 30, 20],
                                                        ['SITE 104', 15, 30, 45, 70, 10, 40, 70],
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
                                                    title: "Employees"
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
                                                    ['SITE 101', 40, 20, 50, 20, 50, 60, 70],
                                                    ['SITE 102', 15, 30, 25, 20, 10, 40, 70],
                                                    ['SITE 103', 5, 10, 30, 10, 50, 30, 20],
                                                    ['SITE 104', 15, 30, 45, 20, 10, 40, 70],
                                                ],
                                            });
                                        }
                                        else {
                                            chart.load({
                                                unload: true,
                                                columns: [
                                                    ['SITE 101', 240, 320, 250, 120, 350, 260, 170],
                                                    ['SITE 102', 15, 130, 225, 20, 10, 40, 70],
                                                    ['SITE 103', 35, 10, 30, 310, 50, 30, 20],
                                                    ['SITE 104', 115, 30, 45, 220, 10, 240, 70],
                                                ],
                                            });
                                        }
                                    });
                                </script>
                            </div>

                        </div>

                    </div>



                </div>
                <div class="col-md-8">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Active Employees Status
                            </h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-Utilization">
                                            <option>This Week </option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-home1"></div>
                                <script>
                                        var simple_line_chart;
                                    $(document).ready(function ($) {
                                    
                                        (function () {





                                             simple_line_chart = c3.generate({
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
                                                        categories: ['SITE 101', 'SITE 102', 'SITE 103', 'SITE 104',]
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
                                <script>
                                    $("#mrq-dd-Utilization").on('change', function () {

                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            simple_line_chart.load({
                                                unload: true,
                                                columns: [
                                                   ['Active', 30, 200, 200, 400],
                                                        ['Inactive', 130, 100, 100, 200],

                                                ],
                                            });
                                        }
                                        else {
                                            simple_line_chart.load({
                                                unload: true,
                                                columns: [
                                                    ['Active', 50, 150, 100, 300],
                                                    ['Inactive', 100, 150, 200, 100],

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