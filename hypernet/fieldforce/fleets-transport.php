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
    <link rel="stylesheet" href="../plugins/slick-Busousel/slick.css">
    <link rel="stylesheet" href="../plugins/styles/global.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="../plugins/jquery/jquery.js"></script>
    <script src="../plugins/bootstrap/bootstrap.js"></script>
    <script src="../plugins/asscroll/jquery-asScroll.js"></script>
    <script src="../plugins/mousewheel/jquery.mousewheel.js"></script>
    <script src="../plugins/asscrollable/jquery.asScrollable.all.js"></script>
    <script src="../plugins/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="../plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../plugins/slick-Busousel/slick.js"></script>
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
                                <div class=" padding-10 bg-blue-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-transport-school.png" alt="img" height="40">
                                                </i>
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
                                            class=" padding-top-0 pa bg-cyan-700 vertical-align height-100 white  text-center relative ">
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
                                    <div class="widget shadow Busd">
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
                            <div class="row   ">
                                <div class="col-lg-3">
                                    <div class="padding-20 padding-left-0 padding-right-0 margin-bottom-15 text-center bg-teal-500 white card ">
                                        <div class="font-size-14">Moving</div>
                                        <b class=" font-size-18">190</b>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padding-20 padding-left-0 padding-right-0 margin-bottom-15 text-center  bg-teal-500 white card ">
                                        <div class="font-size-14">Idle</div>
                                        <b class=" font-size-18">63</b>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="padding-20 padding-left-0 padding-right-0  margin-bottom-15 text-center  bg-teal-500 white card ">
                                        <div class="font-size-14">Stop</div>
                                        <b class=" font-size-18">120</b>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="padding-20  padding-left-0 padding-right-0  margin-bottom-15 text-center  bg-teal-500 white card ">
                                        <div class="font-size-14">No GPS</div>
                                        <b class=" font-size-18">119</b>
                                    </div>
                                </div>
<!-- 
                                <div class="col-lg-4">
                                    <div class="padding-20 padding-left-0 padding-right-0 margin-bottom-15 text-center  bg-teal-500 white card ">
                                        <div class="font-size-14">Maintenances</div>
                                        <b class=" font-size-18">19</b>
                                    </div>
                                </div> -->

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
                                            <div class=" font-size-18 margin-bottom-20">Most Violations</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-teal-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-violations">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                                 TRA 312 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> 12 Violations </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">17%</span>
                                                <span class="" id="mrq-v4">more than yesterday</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-violations").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                        $("#mrq-v1").text('	TRA 312 ')
                                                        $("#mrq-v2").text('12 Violations')
                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-v4").text('more than yesterday')
                                                    }
                                                    else {
                                                        $("#mrq-v1").text('	GAQ 234 ')
                                                        $("#mrq-v2").text('21 Violations')
                                                        $("#mrq-v3").text('13%')
                                                        $("#mrq-v4").text('more than last year')
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


                                            <div class=" font-size-18 margin-bottom-20">Most Maintenances</div>

                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-cyan-800 btn-block1 white dropdown-toggle btn-xs"
                                                    data-toggle="dropdown" id="mrq-dd-maintenance">
                                                    This Month
                                                    <span class="caret"></span>
                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                                <!-- <ul class="dropdown-menu font-size-10 text-center"
                                                    style="min-width:100%;">

                                                    <li role="presentation"><a href="javascript:void(0)">This Month</a>
                                                    </li>
                                                    <li role="presentation"><a href="javascript:void(0)">This Year</a>
                                                    </li>
                                                </ul> -->
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1">
                                                MRY 380 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-m2"> 11 Maintenances
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-m3">18%</span>
                                                <span class="" id="mrq-m4">more than yesterday</span>
                                            </div>
                                        </div>

                                        <script>
                                            $("#mrq-dd-maintenance").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    $("#mrq-m1").text('MRY 380')
                                                    $("#mrq-m2").text('11 Maintenances')
                                                    $("#mrq-m3").text('18%')
                                                    $("#mrq-m4").text('more than yesterday')
                                                }
                                                else {
                                                    $("#mrq-m1").text('TMR 980')
                                                    $("#mrq-m2").text('07 Maintenances')
                                                    $("#mrq-m3").text('19%')
                                                    $("#mrq-m4").text('more than last year')
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

                <div class="col-lg-12  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Statistics</h3>

                        </div>
                        <div class="panel-body ">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-Maintenances">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_Maintenances;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_Maintenances = c3.generate({
                                                        bindto: '#chart-hours',
                                                        size: {
                                                            height: 260,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Numbers', 19, 9, 39],
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
                                                                categories: ['On Job', 'Idle', 'On Maintenances']
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



                                        <script>

                                            $("#mrq-dd-Maintenances").on('change', function () {

                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    simple_line_Maintenances.load({
                                                        unload: true,
                                                        columns: [
                                                            ['Numbers', 19, 9, 39],
                                                        ],
                                                    });
                                                }
                                                else {
                                                    simple_line_Maintenances.load({
                                                        unload: true,
                                                        columns: [
                                                            ['Numbers', 289, 193, 139],
                                                        ],
                                                    });
                                                }
                                            });
                                        </script>
                                        
                                    </div>

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
                                        <div id="chart-alerts1"></div>
                                        <script>
                                            var simple_line_chart;
                                            $(document).ready(function ($) {
                                                (function () {
                                                simple_line_chart = c3.generate({
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
                                                                ['En-route ', 12,],
                                                                ['Idle ', 8],


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
                                         <script>
                                $("#mrq-dd-Utilization").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns: [
                                                                ['En-route ', 12,],
                                                                ['Idle ', 8],


                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns: [
                                                                ['En-route ', 22,],
                                                                ['Idle ', 38],


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

<!--
                                                    <div class="panel">

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
                                                                            <option data-subtext=""> Eelry </option>
                                                                            <option data-subtext="" disabled> Stanmore
                                                                            </option>
                                                                            <option data-subtext=""> Lancaster </option>
                                                                            <option data-subtext=""> Crullfeld </option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
-->

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
                                                                        <span class="badge badge-default">30</span>
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
                                                                        <span class="badge badge-default">07</span>
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
                                                                    data-mrq-col-no="7" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">6</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Bus"
                                                                                    value="Bus">
                                                                                <label for="Bus">Bus
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">1</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Van"
                                                                                    value="Van">
                                                                                <label for="Van">Van
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                  <!--  <li class="list-group-item">
                                                                        <span class="badge badge-default">1</span>

                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Compactor"
                                                                                    value="Anesthesia machine">
                                                                                <label for="Compactor"></label>
                                                                            </div>
                                                                        </div>

                                                                    </li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel" style="display: none;">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title collapsed" data-toggle="collapse"
                                                                href="#Pickup" data-parent="#AccordionFilters">
                                                                Pickup
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse" id="Pickup"
                                                            role="tabpanel">
                                                            <div class="panel-collapse collapse" id="Pickup" role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered ">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">22</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Primary"
                                                                                    name="" />
                                                                                <label for="Primary">Primary Pickup</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item list-group-item blue-grey-500">
                                                                        <span class="badge badge-default">14</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Secondry "
                                                                                    name="" />
                                                                                <label for="Secondry ">Secondry Pickup</label>
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
                                        </section>

                                    </div>
                                </div>
                                <div class="page-main">

                                    <div class="">

                                        <div class="margin-bottom-0 clearfix">
                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>
<!--
                                            <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                <select class="form-control input-sm">
                                                    <option>Sort by</option>
                                                    <option>Low Speed</option>
                                                    <option>High Speed</option>
                                                    <option>Low Temperature</option>
                                                    <option>High Temperature</option>
                                                </select>
                                            </div>
-->
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
                                                        class="table  table-bordered table-hover table-condensed1 table-striped1 margin-bottom-0" id="table">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left">Name</th>
                                                                <th class="text-left">Status</th>
                                                                <th class="text-left">Current State</th>
                                                                <th class="text-left">Trip</th>
                                                                <th class="text-left">Driver </th>
                                                                <th class="text-left">No. of Students </th>
                                                                <th class="text-left">Available Seats</th>

                                                                <th class="text-center"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           
                                                
                                                
                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 150px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-van-photo.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">TRA312
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-success "> Online</div>
                                                    </td>
                                                    <td class="text-left"><i class="green-700"> Moving
                                                        </i>
                                                        <div class="pull-right" data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img src="images/icon-location.png"
                                                                    alt="img" height="20"></i></div>
                                                        <div class="small">
                                                            Abbey Road, North West
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img1.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600"> Philippe
                                                                    Coutinho
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 45 </td>
                                                    <td class="text-left"> 11 </td>
                                                    <td class="text-center hidden">bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info2"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-bus-photo.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">GAQ234
                                                                </a>
                                                                <br />
                                                                <i class="small">Van</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-success "> Online</div>
                                                    </td>
                                                    <td class="text-left"><i class="green-700"> Moving
                                                        </i>

                                                        <div class="pull-right" data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img src="images/icon-location.png"
                                                                    alt="img" height="20"></i></div>
                                                        <div class="small">
                                                            Park Road, 1289 North Station
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img3.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600"> Luis Suarez
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 40 </td>
                                                    <td class="text-left"> 17 </td>
                                                    
                                                    <td class="text-center hidden">Van</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info3"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-truck-photo1.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">MRY380
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-danger "> Offline</div>
                                                    </td>
                                                    <td class="text-left"><i class="red-700"> Idle </i></td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img1.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600"> TMR980
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 45 </td>
                                                    <td class="text-left"> 15 </td>
                                                    <td class="text-center hidden">Bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info4"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-bus-photo.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">TMR980
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-success "> Online</div>
                                                    </td>
                                                    <td class="text-left"><i class="green-700"> Moving
                                                        </i>
                                                        <div class="pull-right" data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img src="images/icon-location.png"
                                                                    alt="img" height="20"></i></div>
                                                        <div class="small">
                                                            Queen's Road, 1885 Avenue
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img2.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600">Joe Denly
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 45 </td>
                                                    <td class="text-left"> 5 </td>
                                                    <td class="text-center hidden">Bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info5"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-bus-photo.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">GAQ234
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-success "> Online</div>
                                                    </td>
                                                    <td class="text-left"><i class="green-700"> Moving
                                                        </i>

                                                        <div class="pull-right" data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img src="images/icon-location.png"
                                                                    alt="img" height="20"></i></div>
                                                        <div class="small">
                                                            Park Road, 1289 North Station
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img3.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600"> Luis Suarez
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 40 </td>
                                                    <td class="text-left"> 17 </td>
                                                    <td class="text-center hidden">Bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info3"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-truck-photo1.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">MRY380
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-danger "> Offline</div>
                                                    </td>
                                                    <td class="text-left"><i class="red-700"> Idle </i></td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img1.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600"> TMR980
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 45 </td>
                                                    <td class="text-left"> 15 </td>
                                                    
                                                        <td class="text-center hidden">Bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info4"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-bus-photo.png"
                                                                    class="img-bordered" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="fleet-transport.php"
                                                                    class="font-weight-600">TMR980
                                                                </a>
                                                                <br />
                                                                <i class="small">Bus</i>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="text-left">
                                                        <div class="label label-success "> Online</div>
                                                    </td>
                                                    <td class="text-left"><i class="green-700"> Moving
                                                        </i>
                                                        <div class="pull-right" data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img src="images/icon-location.png"
                                                                    alt="img" height="20"></i></div>
                                                        <div class="small">
                                                            Queen's Road, 1885 Avenue
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> School </td>
                                                    <td class="text-left">
                                                        <div class="media" style="max-width: 200px;">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/user-img2.jpg" class="img-bordered"
                                                                    style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="employee-transport.php"
                                                                    class="font-weight-600">Joe Denly
                                                                </a>
                                                                <br>
                                                                <i class="small">Driver</i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-left"> 45 </td>
                                                    <td class="text-left"> 5 </td>
                                                    <td class="text-center hidden">Bus</td>
                                                    <td class="text-center">
                                                        <button type="button"
                                                            class="btn btn-icon  btn-default btn-xs collapsed"
                                                            data-toggle="collapse" data-target="#info5"><i
                                                                class="icon ion-plus"></i>
                                                        </button>
                                                    </td>
                                                </tr>



                                                </tbody>
                                                </table>
                                            </div>

                                            <nav>
                                                <ul class="pagination pagination-sm ">
                                                    <li class="pagination-prev disabled"><a
                                                            href="javascript:void(0)"><span
                                                                class="icon ion-android-arrow-back"></span></a></li>
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
                                                                class="icon ion-android-arrow-forward"></span></a></li>
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