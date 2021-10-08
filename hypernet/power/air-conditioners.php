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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->


        <div class="page-content  container-fluid">



            <div class="row ">
                <div class="col-md-6">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Air Conditioner
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-conditioner-photo-white.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">150</b>
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

                                                    <div class="font-size-14 margin-bottom-5 ">In Use</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-online.png"
                                                            alt="img" height="24"></div>
                                                </div>
                                                <b class="font-size-18">85</b>
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

                                                    <div class="font-size-14 margin-bottom-5 ">Idle</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-offline.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-20">65</b>
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
                                                               Wall Air Conditioner
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">70</b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            48 In Use
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
                                                                Window Air Conditioner
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 80 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            31 In Use
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        



                                        <!-- <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Electric Water Heater
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 38 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            32 In Use
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                        
                                        



                                    </div>
                                    <script>
                                        $('#slikslider-types').slick({
                                            infinite: false,
                                            slidesToShow: 2,
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
                <div class="col-lg-3">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-cyan-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">


                                            <div class=" font-size-18 margin-bottom-20">Most Errors Occurs</div>

                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-cyan-800 btn-block1 white dropdown-toggle btn-xs"
                                                    data-toggle="dropdown" id="mrq-dd-Errors">
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
                                               WH-562 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-m2"> 11 Errors Occurs
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-m3">18%</span>
                                                <span class="" id="mrq-m4">more than last month</span>
                                            </div>
                                        </div>

                                        <script>
                                            $("#mrq-dd-Errors").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    $("#mrq-m1").text('WH-562')
                                                    $("#mrq-m2").text('11 Errors Occurs')
                                                    $("#mrq-m3").text('18%')
                                                    $("#mrq-m4").text('more than last month')
                                                }
                                                else {
                                                    $("#mrq-m1").text('	WH-822')
                                                    $("#mrq-m2").text('07 Errors Occurs')
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
                <div class="col-lg-3">

                    <div class="row">

                        <div class="col-lg-12">
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
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-w1">
                                               WH-342 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-w2"> 11 Maintenances
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-w3">18%</span>
                                                <span class="" id="mrq-w4">more than last month</span>
                                            </div>
                                        </div>

                                        <script>
                                            $("#mrq-dd-maintenance").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    $("#mrq-w1").text('WH-342')
                                                    $("#mrq-w2").text('11 Maintenances')
                                                    $("#mrq-w3").text('18%')
                                                    $("#mrq-w4").text('more than last month')
                                                }
                                                else {
                                                    $("#mrq-w1").text('	WH-482')
                                                    $("#mrq-w2").text('07 Maintenances')
                                                    $("#mrq-w3").text('19%')
                                                    $("#mrq-w4").text('more than last year')
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
                                                                ['Numbers', 189, 93, 39],
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
                                                                categories: ['In Use', 'Idle', 'On Maintenances']
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
                                                            ['Numbers', 189, 93, 39],
                                                        ],
                                                    });
                                                }
                                                else {
                                                    simple_line_Maintenances.load({
                                                        unload: true,
                                                        columns: [
                                                            ['Numbers', 1189, 193, 139],
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
                                                            <div class="font-size-24  font-weight-600 red-800"> 23
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
                                                            <div class="font-size-24 red-800 font-weight-600 "> 15
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">In Operations
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">19%</span>
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
                                                            <div class="font-size-24 orange-800 font-weight-600 "> 05
                                                            </div>
                                                            <div class="font-size-12 font-weight-600"> Available for
                                                                Use
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">21%</span>
                                                                <span class="">more than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
                                                                <i class="ion-arrow-graph-up-right"></i>
                                                                <!--<img src="image1s/arrow-down.png" alt="img" height="30" class="inline">-->
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
                                                                ['In Use ', 12,],
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
                        <div class="panel-heading font-weight-600 margin-bottom-0 ">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li ><a data-toggle="tab" href="#Assets" aria-expanded="true">In Use
                                        Assets Heatmap</a></li>
                                

                            </ul>
                        </div>
                        <div class="panel-body padding-15">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Assets">


                                    <div class="row margin-bottom-20">
                                        <div class="col-lg-3">

                                            <div class="form-group margin-bottom-0">

                                                <select class="form-control selectpicker " id="location"
                                                    data-width="100%" title="Location" data-style="btn-select"
                                                    data-live-search="true" style="max-width:100px; min-width:inherit;">
                                                    <option value="loc1">Blue Road, Malburg </option>
                                                    <option value="loc2">Hanna Road, East </option>
                                                </select>

                                            </div>
                                        </div>



                                        <div class="col-lg-3">
                                            <!-- <div class="form-group margin-bottom-0">

                                                <select class="form-control selectpicker " data-width="100%"
                                                    title="Project" data-style="btn-select" data-live-search="true"
                                                    style="max-width:100px; min-width:inherit;" id="project">
                                                    <option value="pro1">PRO01 </option>
                                                    <option value="pro2"> PRO02 </option>
                                                </select>
                                            </div> -->
                                        </div>

                                        <div class="col-lg-6 text-right">
                                            <input type="submit" class="btn btn-sm btn-info" value="Reload">
                                        </div>

                                    </div>



                                    <div class="heatmapbox mapbox">

                                        <div class="mapfilters">

                                            <div class="fancy-collapse-panel">
                                                <div class="panel-group margin-bottom-0" id="accordiont">
                                                    <div class="panel panel-bordered panel-primary">
                                                        <div class="panel-heading padding-0 margin-bottom-0" role="tab"
                                                            id="headingOne">
                                                            <h4 class="panel-title padding-10">
                                                                <a data-toggle="collapse" data-parent="#accordiont"
                                                                    href="#collapseOner">Filters
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOner" class="panel-collapse collapse in"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqy"
                                                                                    name="" />
                                                                                <label for="qqqy">Wall Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqu"
                                                                                    name="" />
                                                                                <label for="qqqu">Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqi"
                                                                                    name="" />
                                                                                <label for="qqqi">
                                                                                    Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="111n"
                                                                                    name="" />
                                                                                <label for="111n">Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="222n"
                                                                                    name="" />
                                                                                <label for="222n">Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="333n"
                                                                                    name="" />
                                                                                <label for="333n">
                                                                                    Window Air Conditioner</label>
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

                                        <div id="heat1" style="height: 400px;"></div>
                                        <script>
                                            var locations = [
                                                { lat: 45.7685449, lng: 4.8467982 },
                                                { lat: 45.769867, lng: 4.861662 },
                                                { lat: 45.769867, lng: 4.861662 },
                                                { lat: 45.769867, lng: 4.861662 },
                                                { lat: 45.769867, lng: 4.861662 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.7801088, lng: 4.7688404 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.788312, lng: 4.958020 },
                                                { lat: 45.788212, lng: 4.950020 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.788312, lng: 4.958020 },
                                                { lat: 45.788212, lng: 4.950020 },
                                                { lat: 45.768512, lng: 4.865559 },
                                            ]

                                        </script>











                                    </div>

                                </div>

                                <div class="tab-pane" id="Stock">

                                    <div class="row margin-bottom-20">
                                        <div class="col-lg-3">
                                            <div class="form-group margin-bottom-0">
                                                <select class="form-control selectpicker " id="location2"
                                                    data-width="100%" title="Location" data-style="btn-select"
                                                    data-live-search="true" style="max-width:100px; min-width:inherit;">
                                                    <option value="loc11">Blue Road, Malburg </option>
                                                    <option value="loc21">Hanna Road, East </option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-lg-3">
                                            <!-- <div class="form-group margin-bottom-0">

                                                <select class="form-control selectpicker " data-width="100%"
                                                    title="Location" data-style="btn-select" data-live-search="true"
                                                    style="max-width:100px; min-width:inherit;">
                                                    <option data-subtext="" selected> Project </option>
                                                    <option data-subtext="">PRO01 </option>
                                                    <option data-subtext=""> PRO02 </option>
                                                </select>
                                            </div> -->
                                        </div>

                                        <div class="col-lg-6 text-right">
                                            <input type="submit" class="btn btn-sm btn-info" value="Reload">
                                        </div>

                                    </div>
                                    <div class="heatmapbox mapbox">



                                        <div class="mapfilters">

                                            <div class="fancy-collapse-panel">
                                                <div class="panel-group margin-bottom-0" id="accordion2">
                                                    <div class="panel panel-bordered panel-primary">
                                                        <div class="panel-heading padding-0 margin-bottom-0" role="tab"
                                                            id="headingOne">
                                                            <h4 class="panel-title padding-10">
                                                                <a data-toggle="collapse" data-parent="#accordion2"
                                                                    href="#collapseOn2e">Filters
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOn2e" class="panel-collapse collapse in"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group">
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqt" name=""
                                                                                    checked />
                                                                                <label for="qqqt">ARM- based
                                                                                    server</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqw"
                                                                                    checked />
                                                                                <label for="qqqw">Wall Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="qqqe"
                                                                                    checked />
                                                                                <label for="qqqe">
                                                                                    Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="111e"
                                                                                    checked />
                                                                                <label for="111e">Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="222e"
                                                                                    checked />
                                                                                <label for="222e"> Wall Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item padding-0 ">
                                                                        <div class="inline-block margin-right-20 ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-primary ">
                                                                                <input type="checkbox" id="333e"
                                                                                    checked />
                                                                                <label for="333e">
                                                                                    Window Air Conditioner</label>
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


                                        <div id="heat2" style="height: 400px;"></div>


                                        <script>
                                            var locations2 = [
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.788312, lng: 4.958020 },
                                                { lat: 45.788212, lng: 4.950020 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.865559 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.847306 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.769028, lng: 4.848306 },
                                                { lat: 45.768512, lng: 4.858020 },
                                                { lat: 45.768512, lng: 4.850020 },
                                                { lat: 45.789228, lng: 4.948306 },
                                                { lat: 45.788312, lng: 4.958020 },
                                                { lat: 45.788212, lng: 4.950020 },
                                                { lat: 45.768512, lng: 4.865559 },
                                            ]
                                        </script>


                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>





                </div>

            </div>


            <style>
                .loc1>div {
                    margin-top: 0px;
                    margin-left: -50px;
                }

                .loc2>div {
                    margin-top: -50px;
                    margin-left: 0px;
                }

                .loc11>div {
                    margin-top: 0px;
                    margin-left: -50px;
                }

                .loc21>div {
                    margin-top: -50px;
                    margin-left: 0px;
                }

                .pro1>div {
                    margin-top: 0px;
                    margin-left: 0px;
                }

                .pro2>div {
                    margin-top: 50px;
                    margin-left: -20px;
                }
            </style>
            <script>
                $('#location').change(function () {
                    $("#heat1").attr("class", $(this).val())
                });

                $('#location2').change(function () {
                    $("#heat2").attr("class", $(this).val())
                });
            </script>


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

                                                    <!-- <div class="panel">
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

                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">12</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox"
                                                                                    value="maintenance" id="Online3"
                                                                                    name="" />
                                                                                <label for="Online3">
                                                                                    Maintenance</label>
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
                                                                    data-mrq-col-no="5" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">100</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Hook"
                                                                                    value="Wall Air Conditioner">
                                                                                <label for="Hook">Wall Air Conditioner
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">50</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Compactor"
                                                                                    value="Window Air Conditioner">
                                                                                <label for="Compactor">Window Air Conditioner</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    
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
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered ">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">22</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Primary"
                                                                                    name="" />
                                                                                <label for="Primary">Primary
                                                                                    Pickup</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item list-group-item blue-grey-500">
                                                                        <span class="badge badge-default">14</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Secondry "
                                                                                    name="" />
                                                                                <label for="Secondry ">Secondry
                                                                                    Pickup</label>
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
                                                    <option>Date</option>
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
                                                                <th class="text-left">Current Location</th>

                                                                <th class="text-left">Company</th>
                                                                <th class="text-left">Date/Time</th>
                                                                <th class="text-center"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-33
                                                                            </a>
                                                                            <br />
                                                                            <i class="small"> Wall Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Dawlance
                                                                            </div>


                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> Feb
                                                                    22,2018
                                                                    10:07:08
                                                                    pm</td>

                                                                <td class="text-center hidden">Wall Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info1"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info1">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> A server
                                                                                        architecture that houses
                                                                                        multiple server modules
                                                                                        ("blades") in a single chassis.
                                                                                        It is widely used in datacenters
                                                                                        to save space
                                                                                        and improve system management.
                                                                                    </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-933
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Wall Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>

                                                                <td class="text-center hidden">Window Air Conditioner </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Canal Road, East
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">LG</div>


                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> Jan
                                                                    01,2018
                                                                    01:07:08
                                                                    pm</td>

                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info10"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info10">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/window-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-121
                                                                            </a>
                                                                            <br />
                                                                            <i class="small"> Window Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger "> Offline</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Lake View Road, West
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600"> Phlips
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> July
                                                                    01,2018
                                                                    01:07:08
                                                                    pm</td>

                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info10"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info100">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-121
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Wall Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger "> Maintenance</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Phlips

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> April
                                                                    01,2018
                                                                    09:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Wall Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info11"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info11">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-33
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Wall Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Clinic Road, Westhum
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Dawlance

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> Feb
                                                                    22,2018
                                                                    10:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Wall Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info12"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info12">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-933
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Window Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger"> Maintenance</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        College Road, North East
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600"> LG

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> July
                                                                    12,2018
                                                                    11:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Window Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info13"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info13">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/wall-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-121
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Wall Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Phlips
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> June
                                                                    15,2018
                                                                    12:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Wall Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info14"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info14">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/window-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600"> HC-742
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Window Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger "> Maintenance</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Blue Mall Road, North
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Waves
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> Feb
                                                                    22,2018
                                                                    10:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Window Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info15"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info15">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/window-ac.png"
                                                                                class="img-bordered"
                                                                                style="height:36px; width:36px;">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="air-conditioner.php"
                                                                                class="font-weight-600">HC-121
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Window Air Conditioner</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></div>
                                                                    <div class="">
                                                                        Mountain View Station
                                                                    </div>





                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">

                                                                        <div class="media-body">
                                                                            <div class=" font-weight-600">Phlips
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="text-center"> Jan
                                                                    17,2018
                                                                    11:07:08
                                                                    pm</td>
                                                                <td class="text-center hidden">Window Air Conditioner </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info16"><i
                                                                            class="icon ion-plus"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info16">
                                                                        <table
                                                                            class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr class="">
                                                                                    <th class="">Description</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center"> An advanced
                                                                                        RISC machine (ARM) server is an
                                                                                        enterprise-class computer server
                                                                                        that employs a large array of
                                                                                        ARM processors rather than a
                                                                                        complement of x86-class
                                                                                        processors </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
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












    <?php include_once('_maptrail-it.php'); ?>

    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>



    <?php include_once('_heatmap-script.php'); ?>




</body>

</html>