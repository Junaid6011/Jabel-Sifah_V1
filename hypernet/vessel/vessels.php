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



            <div class="row ">
                <div class="col-md-7">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Vessels
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-vessels (2).png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">50</b>
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
                                                <b class="font-size-18">43</b>
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
                                                <b class="font-size-20">07</b>
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
                                                            <div class=" ">
                                                                Bulk Carrier
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">12</b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            09 Online
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
                                                            <div class="">
                                                                Tugs & barges 10k
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 13 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            11 Online
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
                                                            <div class=" ">
                                                                Tugs & barges 7k
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 10 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            08 Online
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
                                                            <div class=" ">
                                                                Construction
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 08 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            06 Online
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
                                                            <div class=" ">
                                                                Speed boats
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 07 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            05 Online
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
                                                VEGA X </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> 02 Violations </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">17%</span>
                                                <span class="" id="mrq-v4">more than yesterday</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-violations").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                        $("#mrq-v1").text('	VEGA X ')
                                                        $("#mrq-v2").text('02 Violations')
                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-v4").text('more than yesterday')
                                                    }
                                                    else {
                                                        $("#mrq-v1").text('	SEA SERPENT ')
                                                        $("#mrq-v2").text('39 Violations')
                                                        $("#mrq-v3").text('11%')
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
                                                EASTERN VIEW </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-m2"> 05 Maintenances
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-m3">10%</span>
                                                <span class="" id="mrq-m4">more than yesterday</span>
                                            </div>
                                        </div>

                                        <script>
                                            $("#mrq-dd-maintenance").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    $("#mrq-m1").text('EASTERN VIEW')
                                                    $("#mrq-m2").text('05 Maintenances')
                                                    $("#mrq-m3").text('10%')
                                                    $("#mrq-m4").text('more than yesterday')
                                                }
                                                else {
                                                    $("#mrq-m1").text('	MARINE MASTER')
                                                    $("#mrq-m2").text('68 Maintenances')
                                                    $("#mrq-m3").text('27%')
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
                                                <select class="form-control input-sm" id="mrq-dd-stats">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart11;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart11 = c3.generate({
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
                                                                ['download', 24, 7, 12, 3],
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
                                                                categories: ['Online', 'Offline', 'Idle', 'On Maintenances']
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
                                        $("#mrq-dd-stats").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart11.load({
                                                    unload: true,
                                                    columns: [

                                                        ['download', 24, 17, 12, 3],
                                                    ],
                                                });
                                            }
                                            else {
                                                simple_line_chart11.load({
                                                    unload: true,
                                                    columns: [

                                                        ['download', 30, 7, 25, 13],
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
                                                            <div class="font-size-24  font-weight-600 red-800"> 03
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
                                                            <div class="font-size-24 red-800 font-weight-600 "> 11
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
                                                    <!-- <tr>
                                                        <td class="text-center">
                                                            <div class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
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
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
                                                                <i class="ion-arrow-graph-up-right"></i>

                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="font-size-16 text-center margin-bottom-10"> Fuel Violations</div>
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
                                                            height: 250,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Density ', 12,],
                                                                ['Temperature ', 8],
                                                                ['Volume ', 8],

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
                    <div class="panel panel-default  card shadow light mrq-container">
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

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse"
                                                                href="#Customer" data-parent="#AccordionFilters">
                                                                Customer
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Customer"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">

                                                                <div class="form-inline">
                                                                    <div class="input-icon">
                                                                        <select
                                                                            class="form-control selectpicker show-tick show-menu-arrow mrq-dd "
                                                                            multiple data-width="100%" data-size="5"
                                                                            title="All" data-style="btn-select"
                                                                            data-live-search="true" data-mrq-col-no="3"
                                                                            data-mrq-table-id="table">
                                                                            <option data-subtext=""> GEMCO
                                                                            </option>
                                                                            <option data-subtext=""> PROMAR
                                                                            </option>
                                                                            <option data-subtext=""> CARINA SHIPPING
                                                                            </option>
                                                                            <option data-subtext=""> UCC </option>
                                                                            <option data-subtext=""> CECC </option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse"
                                                                href="#Location" data-parent="#AccordionFilters">
                                                                Project
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Location"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">

                                                                <div class="form-inline">
                                                                    <div class="input-icon">
                                                                        <select
                                                                            class="form-control selectpicker show-tick show-menu-arrow mrq-dd "
                                                                            multiple data-width="100%" data-size="5"
                                                                            title="All" data-style="btn-select"
                                                                            data-live-search="true" data-mrq-col-no="2"
                                                                            data-mrq-table-id="table">
                                                                            <option data-subtext=""> HALUL PROJECT
                                                                            </option>

                                                                            <option data-subtext=""> TEKFEN KHASAB
                                                                            </option>
                                                                            <option data-subtext=""> HALUL PROJECT - AR
                                                                                3-6T </option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


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
                                                                        <span class="badge badge-default">08</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="idle"
                                                                                    id="Online2" name="" />
                                                                                <label for="Online2">Idle</label>
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
                                                                    data-mrq-col-no="6" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">12</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Hook" name=""
                                                                                    value="Bulk Carrier" />
                                                                                <label for="Hook"> Bulk Carrier
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">13</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Compactor"
                                                                                    name="" value="Tugs & barges 10k" />
                                                                                <label for="Compactor">Tugs & barges
                                                                                    10k</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- <li class="list-group-item">
                                                                        <span class="badge badge-default">10</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Chain"
                                                                                    name="" />
                                                                                <label for="Chain">Tugs & barges
                                                                                    7k</label>
                                                                            </div>
                                                                        </div>
                                                                    </li> -->
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">08</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Chain1"
                                                                                    value="Construction" />
                                                                                <label for="Chain1">Construction</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">07</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Chain"
                                                                                    name="" value="Speed boats" />
                                                                                <label for="Chain">Speed boats</label>
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
                                                <input type="text" id="mrq-search" class="form-control input-sm"
                                                    placeholder="Search">
                                            </div>
                                            <!-- <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                <select class="form-control input-sm" id="mrq-sort">
                                                    <option>Sort by</option>
                                                    <option value="0">Name</option>
                                                    <option value="2">Project</option>
                                                    <option value="5">Maintenances</option>
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
                                                    <table id="table"
                                                        class="table  table-bordered table-hover table-condensed1 table-striped1 margin-bottom-0 tablesorter dtable">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left">Name</th>
                                                                <th class="text-left">Status</th>
                                                                <th class="text-left" width="200">Project</th>
                                                                <th class="text-left">Customer</th>
                                                                <th class="text-left"> Consumption </th>
                                                                <th class="text-left">Maintenances</th>
                                                                <th class="text-center"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">


                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-upercase">EASTERN
                                                                                VIEW

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Bulk Carrier </i>

                                                                        </div>

                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>



                                                                </td>

                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">
                                                                        <a href="project.php">TEKFEN KHASAB
                                                                        </a>

                                                                    </div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <a href="customer.php"> GEMCO
                                                                    </a>
                                                                </td>

                                                                <td class="text-left"> 180 gal/h</td>
                                                                <td class="text-left"> 0</td>

                                                                <td class="text-left hidden">
                                                                    Bulk Carrier
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info1"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td colspan="8" class="padding-0  ">
                                                                    <div class="collapse bg-cyan-100 padding-0"
                                                                        id="info1">
                                                                        <table
                                                                            class="table  table-inner  text-center table-condensed table-bordered1 margin-bottom-0 ">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>WORKING</th>
                                                                                    <th>IDLE</th>
                                                                                    <th>STANDBY </th>
                                                                                    <th>FLAG/CLASS</th>
                                                                                    <th>REPAIRS-ENGINE</th>
                                                                                    <th>REPAIRS-DECK</th>
                                                                                    <th>REPAIRS-INCIDENT/DD</th>
                                                                                    <th>WEATHER</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr class="white">
                                                                                    <td style="background:#92d050;">
                                                                                        HALUL PROJECT
                                                                                    </td>
                                                                                    <td style="background:#ff0000;">0%
                                                                                    </td>
                                                                                    <td style="background:#ffbf60;">10%
                                                                                    </td>
                                                                                    <td style="background:#8abbd5;">0%
                                                                                    </td>
                                                                                    <td style="background:#ec987b;">0%
                                                                                    </td>
                                                                                    <td style="background:#996633;">0%
                                                                                    </td>
                                                                                    <td style="background:#7030a0;">5%
                                                                                    </td>
                                                                                    <td style="background:#808080;">0%
                                                                                    </td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr> -->

                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">POLARIS
                                                                                XX

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Bulk Carrier </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-danger "> Maintenance
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">

                                                                        <a href="project.php">TEKFEN KHASAB
                                                                        </a>


                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> <a href="customer.php">
                                                                        PROMAR </a>

                                                                </td>

                                                                <td class="text-left"> 270 gal/h</td>
                                                                <td class="text-left"> 01</td>
                                                                <td class="text-left hidden">
                                                                    Bulk Carrier
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Sea
                                                                                Serpent

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Tugs & barges 10k
                                                                            </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-warning "> Offline</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">

                                                                        <a href="project.php"> HALUL PROJECT
                                                                        </a>


                                                                    </div>
                                                                </td>
                                                                <td class="text-left"><a href="customer.php">
                                                                        CARINA SHIPPING </a>

                                                                </td>

                                                                <td class="text-left"> 220 gal/h</td>
                                                                <td class="text-left"> 02</td>
                                                                <td class="text-left hidden">
                                                                    Tugs & barges 10k
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Marine
                                                                                Master 2
                                                                                (ex UCC 2)

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Speed boats</i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">
                                                                        <a href="project.php">
                                                                            HALUL PROJECT
                                                                        </a>

                                                                    </div>
                                                                </td>
                                                                <td class="text-left"><a href="customer.php">
                                                                        UCC </a>

                                                                </td>

                                                                <td class="text-left"> 197 gal/h</td>
                                                                <td class="text-left"> 0</td>
                                                                <td class="text-left hidden">
                                                                    Speed boats
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Archer
                                                                                V (ex
                                                                                Saturn)

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Construction </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">

                                                                        <a href="project.php">
                                                                            TEKFEN KHASAB
                                                                        </a>


                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> <a href="customer.php">
                                                                        CECC </a>

                                                                </td>

                                                                <td class="text-left"> 150 gal/h</td>
                                                                <td class="text-left"> 04</td>
                                                                <td class="text-left hidden">
                                                                    Construction
                                                                </td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Vega
                                                                                X (ex Mars)

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Bulk Carrier </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">
                                                                        <a href="project.php">
                                                                            HALUL PROJECT - AR 3-6T
                                                                        </a>


                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> <a href="customer.php">
                                                                        CARINA SHIPPING </a>

                                                                </td>

                                                                <td class="text-left"> 200 gal/h</td>
                                                                <td class="text-left"> 04</td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Archer
                                                                                V (ex
                                                                                Saturn)

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Construction </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <a href="project.php">
                                                                        TEKFEN KHASAB
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"> <a href="customer.php">
                                                                        CECC </a>

                                                                </td>

                                                                <td class="text-left"> 150 gal/h</td>
                                                                <td class="text-left"> 04</td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    <div class="media relative">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-vessel-photo.png"
                                                                                class="img-bordered"
                                                                                style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="vessel.php"
                                                                                class="font-weight-600 text-uppercase">Vega
                                                                                X (ex Mars)

                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Bulk Carrier </i>
                                                                        </div>
                                                                        <div class="label  absolute top right"
                                                                            data-target="#Track" data-toggle="modal"
                                                                            type="button">
                                                                            <i class="icon-location"><img
                                                                                    src="images/icon-location.png"
                                                                                    alt="img" height="20"></i></div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">
                                                                    <div class="label label-success "> Online</div>
                                                                </td>
                                                                <td class="text-left">

                                                                    <div class="small1">

                                                                        <a href="project.php">
                                                                            HALUL PROJECT - AR 3-6T
                                                                        </a>


                                                                    </div>
                                                                </td>
                                                                <td class="text-left"> <a href="customer.php">
                                                                        CARINA SHIPPING </a>

                                                                </td>

                                                                <td class="text-left"> 200 gal/h</td>
                                                                <td class="text-left"> 04</td>
                                                                <td class="text-center">
                                                                    <button type="button"
                                                                        class="btn btn-icon  btn-default btn-xs collapsed"
                                                                        data-toggle="collapse" data-target="#info2"><i
                                                                            class="icon ion-plus"></i> Utilization
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
                                                                    class="icon wb-chevron-left-mini"></span></a></li>
                                                        <li class="pagination-items active" data-value="1"><a
                                                                href="javascript:void(0)">1</a></li>
                                                        <li class="pagination-next"><a href="javascript:void(0)"><span
                                                                    class="icon wb-chevron-right-mini"></span></a></li>
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



    <script type="text/javascript">

// tr = $("#table tbody tr").clone()

    // $('.selectpicker').change(function () {

    //   //reset table
    //   $("#table tbody tr").remove()
    //   $("#table tbody").append(tr)

    //   //apply filtering on table
    //   $(".mrq-dd").each( function() {
    //     if (this.tagName === "SELECT") {
    //       // Get Selected Items from Drop Down
    //       var options = $(this).find('option:selected');
    //       let selected = [];
    //       $(options).each( function() {
    //         selected.push( $(this).text().trim().toLowerCase() ); 
    //         // or $(this).val() for 'id'
    //       });
    //       // selected
    //       console.log(selected)
    //       if (selected.length !== 0) {
    //         debugger
    //         let tableId = this.getAttribute('data-mrq-table-id')
    //         let colNo = this.getAttribute('data-mrq-col-no')
    //         console.log(`#${tableId}`);
    //         $(`#${tableId}`).find('tr').each(function(){
    //           let j = 0
    //           $(this).find('td').each(function(){
    //             if (j == colNo){

    //               if ( !selected.includes($(this).text().trim().toLowerCase()) ){
    //                 $(this).parent().remove()
    //               }
    //             }
    //             j++
    //           })
    //         })
    //       }
    //     }
    //   })
    // })



    // $('ul.mrq-cb').find('input[type=checkbox]').change(function () {

    //   //reset table
    //   $("#table tbody tr").remove()
    //   $("#table tbody").append(tr)

    //   //apply filtering on table
    //   $("ul.mrq-cb").each( function() {
    //     if (this.tagName === "UL") {
    //       // Get Selected Items from Drop Down
    //       var options = $(this).find('input:checked');
    //       let selected = [];
    //       $(options).each( function() {
    //         debugger
    //         selected.push( $(this).val().trim().toLowerCase() ); 
    //         // or $(this).val() for 'id'
    //       });
    //       // selected
    //       console.log(selected)
    //       if (selected.length !== 0) {
    //         debugger
    //         let tableId = this.getAttribute('data-mrq-table-id')
    //         let colNo = this.getAttribute('data-mrq-col-no')
    //         console.log(`#${tableId}`);
    //         $(`#${tableId}`).find('tr').each(function(){
    //           let j = 0
    //           $(this).find('td').each(function(){
    //             if (j == colNo){

    //               if ( !selected.includes($(this).text().trim().toLowerCase()) ){
    //                 $(this).parent().remove()
    //               }
    //             }
    //             j++
    //           })
    //         })
    //       }
    //     }
    //   })
    // })

    </script>

    <?php include_once('_maptrail-sea.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>
    <script src="http://mottie.github.io/tablesorter/js/jquery.tablesorter.widgets.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>