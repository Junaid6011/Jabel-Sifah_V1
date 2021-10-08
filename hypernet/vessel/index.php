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


    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">   
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
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

            <div class="row no-space1  ">





                <div class="col-lg-3">

                    <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Vessels
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-vessels (2).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            50
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Online
                                    <div class="font-size-16">43</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-orange-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">07</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">

                    <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Projects
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (1).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            35
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-teal-600   font-size-10 padding-5  ">
                                    Completed
                                    <div class="font-size-16">29</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-teal-600   font-size-10 padding-5  ">
                                    Inprogress
                                    <div class="font-size-16">06</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Employees
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            980
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">813</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Offline
                                    <div class="font-size-16">167</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Customers
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/icon-clients.png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10">
                            46
                        </div>
                        <div class="row no-space">
                            <div class="col-md-12">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    Active
                                    <div class="font-size-16">38</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>





            </div>
            <div class="row ">
                <div class="col-md-4">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Vessels Utilization</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
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
                                <div id="chart-home1"></div>
                                <script>
                                    var simple_line_chart_Utilization
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart_Utilization = c3.generate({
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
                                                        ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                                    ],
                                                    type: 'bar',
                                                },
                                                color: {
                                                    pattern: ['#2b9646']
                                                },
                                                axis: {
                                                    rotated: true,
                                                    x: {
                                                        label: {
                                                            text: '',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Working', 'Idle', 'Standby', 'Flag/Class', 'Repairs-Engine', 'Repairs-Deck', 'Repair-Incident', 'Weather']
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

                            <script>
                                $("#mrq-dd-Utilization").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart_Utilization.load({
                                            unload: true,
                                            columns: [

                                                ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart_Utilization.load({
                                            unload: true,
                                            columns: [

                                                ['%', 10, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                });
                            </script>
                        </div>

                    </div>



                </div>

                <div class="col-md-4">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Bulk Carrier Summary
                            </h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-Summary">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-homer1"></div>
                                <script>
                                    var simple_line_chart_Summary
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart_Summary = c3.generate({
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
                                                        ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                                    ],
                                                    type: 'bar',
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
                                                        categories: ['WO', 'ID', 'SO', 'FC', 'RE', 'RD', 'RI', 'WW']
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


                            <script>
                                $("#mrq-dd-Summary").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart_Summary.load({
                                            unload: true,
                                            columns: [
                                                ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart_Summary.load({
                                            unload: true,
                                            columns: [
                                                ['%', 10, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                });
                            </script>
                        </div>

                    </div>



                </div>

                <div class="col-md-4">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">MTF Summary

                            </h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-MTF">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-rrrr"></div>
                                <script>
                                    var simple_line_chart_MTF
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart_MTF = c3.generate({
                                                bindto: '#chart-rrrr',
                                                size: {
                                                    height: 200,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'center',
                                                },
                                                data: {
                                                    columns: [
                                                        ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                                    ],
                                                    type: 'line',
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
                                                        categories: ['WO', 'ID', 'SO', 'FC', 'RE', 'RD', 'RI', 'WW']
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


                            <script>

                                $("#mrq-dd-MTF").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart_MTF.load({
                                            unload: true,
                                            columns: [

                                                ['%', 24, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart_MTF.load({
                                            unload: true,
                                            columns: [

                                                ['%', 10, 3, 11, 5, 7, 3, 5, 4],
                                            ],
                                        });
                                    }
                                });
                            </script>
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

                                <div class="col-lg-5">
                                    <div class="font-size-16 text-center margin-bottom-10">
                                        Vessel Category wise Utilization
                                    </div>
                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-Vessel">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart_Vessel
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart_Vessel = c3.generate({
                                                        bindto: '#chart-hours',
                                                        size: {
                                                            height: 200,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Numbers', 200, 100, 100, 200, 100],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            //   pattern: ['#ec9940']
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
                                                                categories: ['Bulk Carrier', 'Tugs & barges 10k Tons', 'Tugs & barges 7k Tons', 'Construction Vessels', 'Speed boats']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: 'Numbers ',
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
                                    <script>
                                        $("#mrq-dd-Vessel").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart_Vessel.load({
                                                    unload: true,
                                                    columns: [

                                                        ['Numbers', 200, 100, 100, 200, 100],
                                                    ],
                                                });
                                            }
                                            else {
                                                simple_line_chart_Vessel.load({
                                                    unload: true,
                                                    columns: [

                                                        ['Numbers', 300, 400, 100, 500, 100],
                                                    ],
                                                });
                                            }
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-4">

                                    <!-- <div class="margin-bottom-10 clearfix text-center">
                                            <div class="form-group1">
                                                <div class="inline-block">
                                                    <select class="form-control input-sm">
                                                        <option>Today </option>
                                                        <option>This Week</option>
                                                        <option>This Month </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> -->


                                    <div class="padding-15 bg-cyan-100 margin-bottom-0">
                                        <div class="vscroll" style="height: 250px;">
                                            <table
                                                class="table  table-condensed  table-hovered    no-border   font-size-16 margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 red-800">
                                                                <img src="images/icon-staus-maintenances.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 20
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 "> Requring
                                                                Maintenances </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last week</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-staus-operations.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 red-800 font-weight-600 "> 14
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">In Operations
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-staus-available.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 orange-800 font-weight-600 "> 07
                                                            </div>
                                                            <div class="font-size-12 font-weight-600"> Available for
                                                                Jobs
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">more than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
                                                                <i class="ion-arrow-graph-up-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">

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


                                    <div class="font-size-16 text-center margin-bottom-10"> Maintenances</div>
                                    <div class="chartbox">
                                        <div id="chart-ggg"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-ggg',
                                                        size: {
                                                            height: 250,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Completed ', 25,],
                                                                ['Pending ', 75],
                                                            ],
                                                            type: 'donut',
                                                        },
                                                        color: {
                                                            // pattern: ['#ef6666', '#36ab7a']
                                                        },

                                                        axis: {
                                                            rotated: true,
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



                </div>



            </div>



            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Completed" aria-expanded="true">
                                        Demurrage Statistics</a></li>
                                <li class=""><a data-toggle="tab" href="#Recent" aria-expanded="false">Completed
                                        Projects
                                        Demurrage
                                    </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Completed">
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

                                            <div class="chartbox">
                                                <div id="chart-dff"></div>
                                                <script>
                                                    $(document).ready(function ($) {
                                                        (function () {
                                                            var simple_line_chart = c3.generate({
                                                                bindto: '#chart-dff',
                                                                size: {
                                                                    height: 200,
                                                                },
                                                                legend: {
                                                                    show: false,
                                                                    position: 'center',
                                                                },
                                                                data: {
                                                                    columns: [
                                                                        ['$ K', 24, 3, 11, 51, 17, 33, 15, 24, 17, 13, 15, 24],
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
                                                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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

                                <div class="tab-pane" id="Recent">
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
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap dtable">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Job</th>
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Customer </th>

                                                            <th>Demurrage (per hour) </th>
                                                            <th>Demurrage Chargable </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> LUSAIL PALACE - EASTERN VIEW
                                                                </a></td>
                                                            <td> <a href="customer.php"> GEMCO </a>
                                                            </td>

                                                            <td> $150.00 </td>
                                                            <td> $4,000.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB222</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - QR
                                                                    200-500 KG
                                                                </a></td>
                                                            <td><a href="customer.php"> CARINA SHIPPING </a>

                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $4,000.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB351</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR 3-6T
                                                                </a></td>
                                                            <td> <a href="customer.php"> GEMCO </a>

                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> No </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB120</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - QR
                                                                    200-500 KG

                                                                </a></td>
                                                            <td><a href="customer.php"> ANANTARA</a>

                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $2,120.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB122</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR
                                                                    3-6T</a></td>
                                                            <td><a href="customer.php"> CARINA SHIPPING </a>
                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $4,000.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB555</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - UR 45-75
                                                                    MM
                                                                </a></td>
                                                            <td><a href="customer.php"> CECC </a>
                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $2,120.50 </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB156</a>
                                                            </td>
                                                            <td> <a href="project.php">TEKFEN KHASAB
                                                                </a></td>
                                                            <td> <a href="customer.php"> PROMAR </a>

                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $2,120.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB587</a>
                                                            </td>
                                                            <td> <a href="project.php">HALUL PROJECT - QR
                                                                    200-500 KG
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC SAMISMA </a>
                                                            </td>


                                                            <td> $180.00 </td>
                                                            <td> $1,537.50 </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB666</a>
                                                            </td>
                                                            <td> <a href="project.php"> IRAN - QATAR
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC </a>
                                                            </td>


                                                            <td> $150.00 </td>
                                                            <td> $7,537.50 </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB941</a>
                                                            </td>
                                                            <td> <a href="project.php"> DOHA PORT
                                                                </a></td>
                                                            <td><a href="customer.php"> GEMCO </a></td>


                                                            <td> $150.00 </td>
                                                            <td> $4,537.50 </td>

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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>