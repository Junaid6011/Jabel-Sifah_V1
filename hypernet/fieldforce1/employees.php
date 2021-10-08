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

<body class="dashboard " style="background-image: url(images/bg-login.jpg);  background-size:100%; ">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>






    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
                <li><a href="javascript:void(0)">Sites</a></li>
            </ol>
        </div>



        <div class="page-content  container-fluid">


            <div class="row">

                <div class="col-lg-12 ">
                    <div class="row">

                        <div class="col-lg-8">

                            <div class="row">

                                <div class="col-lg-7">
                                    <div class="row no-space">
                                        <div class="col-md-6">
                                            <div class="widget">
                                                <div class="widget-content padding-10 padding-right-15 padding-left-15   bg-orange-700 white shadow height-90  clearfix">
                                                    <div class="pull-left white">
                                                        <i> <img src="images/icon-employees.png" alt="img" height="40">
                                                        </i>
                                                    </div>
                                                    <div class="counter counter-md counter text-right pull-right">
                                                        <div class="counter-number-group white">
                                                            <span class="counter-number">230</span>
                                                        </div>
                                                        <div class="counter-label text-capitalize font-size-12">Total
                                                            Employees</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                Present
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            200
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                Absent
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            30
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-5">
                                    <div class="row no-space">
                                        <div class="col-md-3">
                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-cyan-700 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                In Zone
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            230
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-cyan-600 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                Out Zone
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            200
                                                        </b>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-green-700 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                Active
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            30
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                        <div class="col-md-3">

                                            <div class="widget shadow">
                                                <div class="widget-content padding-top-0 pa bg-green-600 vertical-align height-90 white  text-center relative">
                                                    <div class="vertical-align-middle">
                                                        <div class="counter-label margin-bottom-0 clearfix">
                                                            <span class="font-size-14 ">
                                                                Inactive
                                                            </span>
                                                        </div>
                                                        <b class="font-size-16">
                                                            3
                                                        </b>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>








                                    </div>




                                </div>
                            </div>
                            <div class="row no-space  margin-bottom-30 pointer">
                                <div class="col-sm-3">
                                    <div class="counter counter-lg white bg-green-700 vertical-align height-70  shadow">
                                        <div class="vertical-align-middle">
                                            <div>Site Supervisors</div>
                                            <span class="counter-number font-size-20">25</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="counter counter-lg white bg-green-600 vertical-align height-70 shadow">
                                        <div class="vertical-align-middle">
                                            <div>Zone Supervisors</div>
                                            <span class="counter-number font-size-20">30</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="counter counter-lg white bg-green-500 vertical-align height-70 shadow ">
                                        <div class="vertical-align-middle">
                                            <div>Team Leads</div>
                                            <span class="counter-number font-size-20">60</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="counter counter-lg white bg-green-400 vertical-align height-70 shadow ">
                                        <div class="vertical-align-middle">
                                            <div>Labors</div>
                                            <span class="counter-number font-size-20">100</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="row no-space1  margin-bottom-30">
                                <div class="col-md-6">
                                    <div class="widget  margin-bottom-0  shadow bg-blue-800 text-center  white" style="height:190px;">
                                        <div class="widget-content">
                                            <div class="padding-15 ">

                                                <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase">
                                                        Best Employee </b> <br> </div>
                                                <div class="text-center">
                                                    <div class="margin-bottom-10 margin-top-0 ">
                                                        <i> <img src="images/img-supervisor3.jpg" alt="img img-circle"
                                                                style="height:65px; border-radius:50%;" class=""> </i>

                                                    </div>
                                                </div>
                                                <div class="font-size-14">John Smith</div>
                                                <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase">
                                                        Rank: 7 </b> </div>


                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6">


                                    <div class="widget  margin-bottom-0  shadow bg-red-800 text-center  white" style="height:190px;">
                                        <div class="widget-content">
                                            <div class="padding-15 ">

                                                <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase">Inefficient
                                                        Employee </b> <br> </div>
                                                <div class="text-center">
                                                    <div class="margin-bottom-10 margin-top-0 ">
                                                        <i> <img src="images/img-driver.jpg" alt="img img-circle" style="height:65px; border-radius:50%;"
                                                                class=""> </i>

                                                    </div>
                                                </div>
                                                <div class="font-size-14">Lala Singh</div>
                                                <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase">
                                                        Rank: 2 </b> </div>


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

                <div class="col-lg-8">




                    <div class="row">
                        <div class="col-lg-12">

                            <div class="panel panel-default nav-tabs-horizontal padding-0   shadow">
                                <div class="panel-heading font-weight-600">
                                    <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                        <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Productive
                                                Hours</a></li>
                                        <li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Violations</a></li>
                                        <!--<li class=""><a data-toggle="tab" href="#Productive" role="tab">Employee Statistics</a></li>-->

                                    </ul>
                                    <div class="panel-actions ">
                                        <select class="">
                                            <option>Today</option>
                                            <option>Last 24 Hours</option>
                                            <option selected>This Week</option>
                                        </select>
                                        <a class="panel-action icon ion-loop " data-toggle="tooltip"
                                            data-original-title="Refresh"></a>



                                    </div>
                                </div>

                                <div class="panel-body ">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                                            <div class="chartbox">
                                                <div id="chart-dd"></div>
                                                <script>
                                                    $(document).ready(function ($) {
                                                        (function () {





                                                            var simple_line_chart = c3.generate({
                                                                bindto: '#chart-dd',

                                                                data: {
                                                                    columns: [
                                                                        ['Total', 450, 200, 200, 350, 150, 180],
                                                                        ['Productive', 430, 150, 180, 300, 150, 380],
                                                                    ],
                                                                    type: 'bar',
                                                                    groups: [
                                                                        ['Total', 'Productive']
                                                                    ]
                                                                },
                                                                grid: {
                                                                    y: {
                                                                        lines: [{ value: 0 }]
                                                                    }
                                                                },
                                                                size: {
                                                                    height: 270,
                                                                },
                                                                legend: {
                                                                    show: true,
                                                                    position: 'bottom',
                                                                },


                                                                axis: {
                                                                    rotated: false,
                                                                    x: {
                                                                        label: {
                                                                            text: 'Zones',
                                                                            position: 'outer-center'
                                                                        },
                                                                        type: 'category',
                                                                        categories: ['Sat', 'Sun ', 'Mon', 'Tue', 'Wed', 'Thu']
                                                                    },
                                                                    y: {
                                                                        label: {
                                                                            text: 'Hours',
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
                                        <div class="tab-pane" id="FeedStatistics" role="tabpanel">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="chartbox">
                                                        <div id="chart-alerts1e"></div>
                                                        <script>
                                                            $(document).ready(function ($) {
                                                                (function () {
                                                                    var simple_line_chart = c3.generate({
                                                                        bindto: '#chart-alerts1e',
                                                                        size: {
                                                                            height: 250,
                                                                        },
                                                                        legend: {
                                                                            show: true,
                                                                            position: 'right',
                                                                        },
                                                                        data: {
                                                                            columns: [
                                                                                ['Zone-1', 5, 10, 26, 40, 25, 30, 31],
                                                                                ['Zone-2', 13, 28, 10, 36, 23, 21, 13],
                                                                                ['Zone-3', 26, 19, 35, 26, 29, 13, 29],
                                                                                ['Zone-4', 31, 30, 15, 40, 10, 35, 41],

                                                                            ],
                                                                            type: 'donut',
                                                                        },
                                                                        donut: {
                                                                            title: "Zone Violations"
                                                                        },
                                                                        color: {
                                                                            pattern: ['#f7902f', '#2a9e91', '#d83a46', '#1084b2', '#2bac48']
                                                                        },
                                                                        axis: {
                                                                            rotated: false,
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
                                                                                    text: 'No. of Hours ',
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
                                                <div class="col-lg-6">
                                                    <div class="vscroll padding-right-10" style="height:240px;">
                                                        <table class="table  nowrap margin-bottom-0" id="datatable11">
                                                            <tbody>

                                                                <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                                    <td width="80">
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-warning "> Late
                                                                                    Coming </span> </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <a href="">ID-255</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">08:10pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>
                                                                <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-success ">Zone
                                                                                    Switch </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-985</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">11:40pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>
                                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-info "> Out of
                                                                                    Zone </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-265</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">03:30pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>
                                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-info "> Out of
                                                                                    Zone </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-265</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">03:30pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>
                                                                <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-info "> Out of
                                                                                    Zone </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-165</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">03:30pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>

                                                                <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-warning "> Late
                                                                                    Coming </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-255</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">08:10pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>
                                                                <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                                    <td>
                                                                        <div class="media">
                                                                            <div class="media-body margin-0"><span
                                                                                    class="label label-success ">Zone
                                                                                    Switch </span> </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">ID-985</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="">S101 - Z2</a>
                                                                    </td>

                                                                    <td class=""> <span class="small">11:40pm</span>
                                                                        / <span class="small">Today</span> </td>

                                                                </tr>





                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                            </div>





                                        </div>

                                        <div class="tab-pane" id="Productive" role="tabpanel">

                                            <div class="margin-bottom-10 green-800  text-center" data-toggle="tooltip"
                                                data-original-title="Last Updated Time"> <b>Last Updated:</b> 04:40pm,
                                                6, Jun 18 </div>


                                            <div class="chartbox">
                                                <div id="chart-gg"></div>
                                                <script>
                                                    $(document).ready(function ($) {
                                                        (function () {





                                                            var simple_line_chart = c3.generate({
                                                                bindto: '#chart-gg',

                                                                data: {
                                                                    columns: [
                                                                        ['Total', 450, 200, 200, 350],
                                                                        ['Productive', 430, 150, 180, 300],
                                                                    ],
                                                                    type: 'bar',
                                                                    groups: [
                                                                        ['Total', 'Productive']
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
                                                                            text: 'Zones',
                                                                            position: 'outer-center'
                                                                        },
                                                                        type: 'category',
                                                                        categories: ['Zone-1', 'Zone-2 ', 'Zone-3', 'Zone-4',]
                                                                    },
                                                                    y: {
                                                                        label: {
                                                                            text: 'Hours',
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
                <div class="col-lg-4">

                    <div class="mapbox  margin-bottom-30 shadow">



                        <!--<div class="icon" style="left:50%; top:20%;">
                            <a data-toggle="popover" data-original-title="Site 1" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="S1">
                                <img src="images/icon-map-pin-end.png" alt="img">
                            </a>
                            <div id="popover-content-S1" class="hide">
                                <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                    <tr>
                                        <th> Zones   </th>
                                        <td class="text-left">10</td>
                                    </tr>
                                    <tr>
                                        <th> Works   </th>
                                        <td class="text-left">102</td>
                                    </tr>
                                </table>
                            </div>
                        </div>-->








                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402"
                            width="100%" height="350" frameborder="0" style="border:0; " allowfullscreen="" class="map pull-right"></iframe>
                    </div>
                </div>










            </div>








            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default shadow">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <!-- <a class="btn btn-sm white no-border  btn-success " href="add-employee.php"> <i class="ion-plus"></i>
                                    Add Employee</a> -->
                            </div>
                            <h3 class="panel-title"> <b> Employees List </b></h3>
                        </div>
                        <div class="panel-body ">

                            <div class="padding-0  margin-bottom-15 clearfix" style="background-color:#fff">
                                <div class="form-group1 margin-bottom-0">


                                    <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                        <input type="text" class="form-control input-sm " placeholder="Search" style="min-width:220px;">
                                    </div>


                                    <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                        <select class="form-control input-sm ">
                                            <option>Filter by Status</option>
                                        </select>
                                    </div>
                                    <div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                        <select class="form-control input-sm ">
                                            <option>Filter by Location</option>
                                            <option>-</option>
                                            <option>-</option>
                                        </select>
                                    </div>
                                    <!--<div class="inline-block pull-left margin-right-10 margin-bottom-10">
                                        <div class="input-daterange    ">
                                            <div class="input-group  input-group-sm">
                                                <span class="input-group-addon hidden-xs1">
                                                    <i class="icon wb-calendar"></i>
                                                </span>
                                                <input type="text" class="form-control date" value="10/24/17">
                                            </div>
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-addon hidden-xs1">to</span>
                                                <input type="text" class="form-control date" value="10/25/17">
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                            <div class="modal fade  modal-success text-left" id="editpop1" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-center  modal-lg1">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>x</span>
                                            </button>
                                            <h4 class="modal-title">Assign Job</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Select Job</label>
                                                                    <select class="form-control selectpicker show-tick show-menu-arrow "
                                                                        data-width="100%" data-size="5" title="Select"
                                                                        data-style="btn-select" data-live-search="true">
                                                                        <option selected>JOB415</option>
                                                                        <option>JOB895</option>
                                                                        <option>JOB145</option>
                                                                        <option>JOB552</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="control-label">Start Time</label>
                                                                <div class="form-group   ">
                                                                    <input type="time" class="form-control " value="00:00" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="control-label">End Time</label>
                                                                <div class="form-group   ">
                                                                    <input type="time" class="form-control " value="00:00" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Select Site</label>
                                                                    <select class="form-control selectpicker show-tick show-menu-arrow "
                                                                        data-width="100%" data-size="5" title="Select"
                                                                        data-style="btn-select" data-live-search="true">
                                                                        <option>Site-1</option>
                                                                        <option>Site-2</option>
                                                                        <option>Site-3</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Select Zone</label>
                                                                    <select class="form-control selectpicker show-tick show-menu-arrow "
                                                                        data-width="100%" data-size="5" title="Select"
                                                                        data-style="btn-select" data-live-search="true">
                                                                        <option>Zone-1</option>
                                                                        <option>Zone-2</option>
                                                                        <option>Zone-3</option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Description</label>
                                                                    <div class="input-icon">
                                                                        <textarea rows="2" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Assign </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive1 vscroll" style="height:100%;">

                                <table class="table table-hover table-condensed margin-bottom-0">
                                    <thead>
                                        <tr class="">
                                            <th class="nosort">ID</th>
                                            <th class="nosort ">Staff Name</th>
                                            <th class="">Clock In</th>
                                            <th class="">Clock Out</th>
                                            <th class="nosort ">Supervisor</th>
                                            <th class="nosort ">Operation Zone</th>
                                            <th class="nosort ">Hours in Zone</th>
                                            <th class="nosort ">Active Hours</th>
                                            <th class="nosort ">Presence</th>

                                            <th width="80" class="nosort "> Assigned Job </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="employee.php">AB-560</a></td>
                                            <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg"
                                                        width="24"></span> Irfan Khan</td>
                                            <td class="">08: 30 am</td>
                                            <td class="">--</td>
                                            <td class="">Ram Parsad</td>
                                            <td class="">S1-Z1</td>
                                            <td class="">11</td>
                                            <td class="">09</td>
                                            <td class=""><span class="label label-outline label-success">In
                                                    Zone</span></td>
                                            <td class="" width="150">



                                                <a class="btn   btn-round btn-info btn-xs" href="" data-target="#editpop1"
                                                    data-toggle="modal"> <i class="ion-plus"></i>
                                                    Assign Job</a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="employee.php">AB-561</a></td>
                                            <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg"
                                                        width="24"></span> Aqib Sameul</td>
                                            <td class="">--</td>
                                            <td class="">--</td>
                                            <td class="">Ram Parsad</td>
                                            <td class="">S1-Z1</td>

                                            <td class="">12</td>
                                            <td class="">10</td>
                                            <td class=""><span class="label label-outline label-danger">Out
                                                    of Zone</span></td>
                                            <td class="">

                                                <a class="btn   btn-round btn-info btn-xs" href="" data-target="#editpop1"
                                                    data-toggle="modal"> <i class="ion-plus"></i>
                                                    Assign Job</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee.php">AB-562</a></td>
                                            <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg"
                                                        width="24"></span> Suresh Kumar</td>
                                            <td class="">08: 35 am</td>
                                            <td class="">--</td>
                                            <td class="">Zohaib Ali</td>
                                            <td class="">S1-Z2</td>

                                            <td class="">08</td>
                                            <td class="">08</td>
                                            <td class=""><span class="label label-outline label-danger">Out
                                                    of Zone</span></td>
                                            <td class="">

                                                <a class="btn   btn-round btn-info btn-xs" href="" data-target="#editpop1"
                                                    data-toggle="modal"> <i class="ion-plus"></i>
                                                    Assign Job</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="employee.php">AB-563</a></td>
                                            <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg"
                                                        width="24"></span> John Gul</td>
                                            <td class="">07: 20 am</td>
                                            <td class="">--</td>
                                            <td class="">Ram Parsad</td>
                                            <td class="">S1-Z1</td>
                                            <td class="">03</td>

                                            <td class="">06</td>
                                            <td class=""><span class="label label-outline label-success">In
                                                    Zone</span></td>
                                            <td class="">

                                                <a class="btn   btn-round btn-info btn-xs" href="" data-target="#editpop1"
                                                    data-toggle="modal"> <i class="ion-plus"></i>
                                                    Assign Job</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="employee.php">AB-564</a></td>
                                            <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg"
                                                        width="24"></span> Irfan Khan</td>
                                            <td class="">07: 33 am</td>
                                            <td class="">--</td>
                                            <td class="">Zohaib Ali</td>
                                            <td class="">S1-Z1</td>
                                            <td class="">05</td>
                                            <td class="">12</td>

                                            <td class=""><span class="label label-outline label-success">In
                                                    Zone</span></td>
                                            <td class="">

                                                <a class="btn   btn-round btn-info btn-xs" href="" data-target="#editpop1"
                                                    data-toggle="modal"> <i class="ion-plus"></i>
                                                    Assign Job</a>
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
















    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>












</body>

</html>
