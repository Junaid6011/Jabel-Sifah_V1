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

        <!-- <div class="page-header padding-0 margin-bottom-30">
            <div class="widget widget-article type-flex margin-bottom-0">
                <div class="widget-header cover overlay">
                    <img class="cover-image height-160" src="images/header.jpg" alt="">
                    <div class="overlay-panel text-center vertical-align">
                        <div class="widget-metas vertical-align-middle blue-grey-800">
                            <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:30px;">Internet
                                of Logistics </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="page-content  container-fluid">

            <div class="row no-space1  ">





                <div class="col-lg-4">

                    <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Fleets
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            700
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">300</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">300</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4">

                    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Employees
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



                <!-- <div class="col-lg-3">

                    <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Total Bins
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-bins.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            250
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-teal-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">100</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-teal-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">250</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>



            <div class="row">

                <div class="col-lg-9  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Job Completion Rate</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option>2018</option>
                                            <option>2019 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-home1"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-home1',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['%', 68, 95, 78, 100, 88, 65, 76],
                                                    ],
                                                    type: 'line',
                                                },
                                                color: {
                                                    pattern: ['#2b9646']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: 'Months',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July']
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
                            </div>
                        </div>

                    </div>



                </div>

                <div class="col-lg-3  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Employees Statistics</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option>2018</option>
                                            <option>2019 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-alerts1"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-alerts1',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['On Job ', 75],
                                                        ['Ile ', 25,],
                                                    ],
                                                    type: 'donut',
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
                                                        ratio: 0.1
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
                <div class="col-lg-6">
                    <div class="panel panel-default card light  margin-bottom-10">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Jobs Statistics</h3>

                        </div>
                        <div class="panel-body">

                            <div class="margin-bottom-20 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option>2018</option>
                                            <option>2019 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Completed</div>

                                    <div class="c100 p20  red">
                                        <span class="pointer">120</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>





                                </div>
                                <div class="col-sm-4 padding-horizontal-20">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18">Scheduled</div>

                                    <div class="c100 p50  green ">
                                        <span class="pointer">60</span>
                                        <div class="slice ">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-sm-4 padding-horizontal-20">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Pending</div>


                                    <div class="c100 p75  orange">
                                        <span class="pointer">60</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>
                                    <div class="text-center margin-top-10"></div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-default card light  margin-bottom-10">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Maintenances</h3>

                        </div>
                        <div class="panel-body">

                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option>2018</option>
                                            <option>2019 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-hours1"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-hours1',
                                                size: {
                                                    height: 180,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Numbers', 250, 85, 55],
                                                    ],
                                                    type: 'bar',
                                                },
                                                color: {
                                                    pattern: ['#465bd4', '#178d81', '#ec9940']
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
                                                        categories: ['Pending', 'Inprogress', 'Completed']
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