<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="../plugins/images/hypernet-favicon.png" rel="icon" type="image/png" />
    <title>Welcome</title>
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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->


        <div class="page-content  container-fluid">


            <div class="row no-space1  ">





                <div class="col-lg-3">

                    <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">

                            Parking Locations

                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            17
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Capacity
                                    <div class="font-size-16">50</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Available Space
                                    <div class="font-size-16">07</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">

                    <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">

                            Pickup Locations
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            35
                        </div>
                        <div class="row no-space">
                            <div class="col-md-12">
                                <div class="  bg-teal-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">35</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Dropof Locations
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            980
                        </div>
                        <div class="row no-space">
                            <div class="row no-space">
                                <div class="col-md-12">
                                    <div class="  bg-blue-600   font-size-10 padding-5  ">
                                        Active
                                        <div class="font-size-16">35</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Prohibited Zones
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            07
                        </div>
                        <div class="row no-space">
                            <div class="col-md-12">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">07</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>



            <div class="row ">
                <div class="col-md-6">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Parking Violation Statistics</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class1">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
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
                                                size: {
                                                    height: 200,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'center',
                                                },
                                                data: {
                                                    columns: [
                                                        ['', 24, 3, 11, 5, 7, 3, 0],
                                                    ],
                                                    type: 'bar',
                                                },
                                                color: {
                                                    pattern: ['#2b9646']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: '',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
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

                                        $("#mrq-dd-class1").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart.load({
                                                    unload: true,
                                                    columns:[
                                                        ['', 24, 3, 11, 5, 7, 3, 0],
                                                    ],
                                                   
                                                });
                                            }
                                            else {
                                                simple_line_chart.load({
                                                    unload: true,
                                                    columns:[
                                                        ['', 124, 23, 311, 25, 17, 23, 30],
                                                    ],
                                                   
                                                });
                                            }
                                        });
                                    </script>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="col-md-6">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600"> Prohibited Zone Violations
                            </h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
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
                                <div id="chart-homer1"></div>
                                <script>
                                    var simple_line_chart1;
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart1 = c3.generate({
                                                bindto: '#chart-homer1',
                                                size: {
                                                    height: 200,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'center',
                                                },
                                                data: {
                                                    columns: [
                                                        ['', 3, 3, 11, 5, 7, 3, 0],
                                                    ],
                                                    type: 'area',
                                                },
                                                color: {
                                                    // pattern: ['#2b9646']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: '',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
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

                                        $("#mrq-dd-class2").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart1.load({
                                                    unload: true,
                                                    columns: [
                                                        ['', 3, 3, 11, 5, 7, 3, 0],
                                                    ],
                                                   
                                                });
                                            }
                                            else {
                                                simple_line_chart1.load({
                                                    unload: true,
                                                    columns: [
                                                        ['', 13,23, 32,25, 17, 23, 30],
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

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Parking"> Parking Locations</a></li>
                                <li class=""><a data-toggle="tab" href="#Pickup">Pickup Locations</a></li>
                                <li class=""><a data-toggle="tab" href="#Dropof"> Dropof Locations</a></li>
                                <li class=""><a data-toggle="tab" href="#Prohibited"> Prohibited Zones </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Parking">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Location </th>
                                                            <th class="text-left">Capacity</th>
                                                            <th class="text-left">Current Space</th>
                                                            <th class="text-left">Status</th>
                                                            <th class="text-left">Violations</th>
                                                            <th class="text-left"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>
                                                            <td class="text-left"> 50</td>
                                                            <td class="text-left">11 </td>

                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 23%;">
                                                                        <span class="progress-label">23%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">4</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Massachusetts</td>
                                                            <td class="text-left">Aggregate RAA</td>
                                                            <td class="text-left"> 90</td>
                                                            <td class="text-left">45 </td>

                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 50%;">
                                                                        <span class="progress-label">50%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">14</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>
                                                            <td class="text-left"> 50</td>
                                                            <td class="text-left">11 </td>


                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 83%;">
                                                                        <span class="progress-label">83%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">5</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>
                                                            <td class="text-left"> 90</td>
                                                            <td class="text-left">20 </td>

                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 11%;">
                                                                        <span class="progress-label">11%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">0</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>
                                                            <td class="text-left"> 50</td>
                                                            <td class="text-left">11 </td>

                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 11%;">
                                                                        <span class="progress-label">11%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">7</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>
                                                            <td class="text-left"> 90</td>
                                                            <td class="text-left">20 </td>

                                                            <td class="" width="100">
                                                                <div class="progress margin-bottom-0"
                                                                    data-labeltype="percentage" data-plugin="progress">
                                                                    <div class="progress-bar progress-bar-warning"
                                                                        role="progressbar" style="width: 17%;">
                                                                        <span class="progress-label">17%</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">4</td>
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
                                <div class="tab-pane " id="Pickup">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">




                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Location </th>
                                                            <th class="text-left"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Dropof">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Location </th>
                                                            <th class="text-left"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td class="text-left">Arlington </td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Massachusetts</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Massachusetts</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Prohibited">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Location </th>
                                                            <th class="text-left">Violations</th>
                                                            <th class="text-left"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-left">4</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Massachusetts</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-left">14</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-left">5</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-left">0</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> Blue Road, Malburg</td>
                                                            <td class="text-left">LUSAIL Aggregate RAA</td>

                                                            <td class="text-left">7</td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Reference sem Ipsum,</td>
                                                            <td class="text-left">Aggregate RAA</td>

                                                            <td class="text-left">4</td>
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












    <?php include_once('_maptrail-territory.php'); ?>

    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>