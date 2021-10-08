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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->


        <div class="page-content  container-fluid">

            <div class="row">

                <div class="col-lg-4  ">
                    <div class="widget  white margin-bottom-30 shadow card light ">
                        <div class="padding-15 bg-white ">
                            <div class="text-center padding-top-0">
                                <div class="">
                                    <div class=" font-size-20 margin-bottom-0 margin-top-0">Overall Jobs
                                        Statistics
                                    </div>

                                    <div class="font-size-10">
                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                        <span class="">10%</span>
                                        <span class="">more than yesterday</span>
                                    </div>

                                    <div class="bg-blue-1001 padding-0 relative" style="z-index: 1;">
                                        <div class="chartbox">
                                            <div id="chart-jobs"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-jobs',
                                                            size: {
                                                                height: 295,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },
                                                            data: {
                                                                columns: [
                                                                    ['Completed ', 120,],
                                                                    ['Pending ', 70],
                                                                    ['Inprogess ', 25],


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

                                    <ul
                                        class="list-unstyled margin-top-10 text-left margin-bottom-0 padding-left-301 padding-right-301">
                                        <li>
                                            <h5 class="font-size-12 margin-bottom-10">
                                                Completed
                                                <span class="pull-right">523</span>
                                            </h5>

                                            <div class="progress progress-sm margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600"
                                                    style="width: 50%" role="progressbar">

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h5 class="font-size-12 margin-bottom-10">
                                                Pending
                                                <span class="pull-right">122</span>
                                            </h5>
                                            <div class="progress progress-sm margin-bottom-10">
                                                <div class="progress-bar progress-bar-info  bg-blue-600"
                                                    style="width: 80%" role="progressbar">

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h5 class="font-size-12 margin-bottom-10">
                                                Inprogess
                                                <span class="pull-right">72</span>
                                            </h5>
                                            <div class="progress progress-sm margin-bottom-10">
                                                <div class="progress-bar progress-bar-info  bg-blue-600"
                                                    style="width: 60%" role="progressbar">

                                                </div>
                                            </div>
                                        </li>

                                    </ul>




                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <div class="col-lg-8  ">


                    <div class="panel panel-default shadow card  light padding-0 ">
                        <!-- <div class="panel-heading">
<h3 class="panel-title font-weight-600">Task Completion Statistics</h3>

</div> -->
                        <div class="panel-body padding-15">

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class=" font-size-20 margin-bottom-10 margin-top-0 text-center">Job Completion
                                        Statistics</div>
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

                                    <div class="chartbox" class="">
                                        <div id="chart-fff"></div>
                                        <script>
                                            var simple_line_chart1;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart1 = c3.generate({
                                                        bindto: '#chart-fff',
                                                        size: {
                                                            height: 285,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },



                                                        data: {
                                                            columns: [
                                                                ['Tasks', 330, 220, 450, 240, 160],
                                                                ['Completed', 200, 300, 560, 200, 450],
                                                                ['Pending', 500, 150, 230, 120, 240],
                                                                ['Inprogess', 230, 620, 250, 440, 110],

                                                            ],
                                                            type: 'bar',
                                                            types: {
                                                                Tasks: 'line',
                                                                Completed: 'bar',
                                                                Pending: 'bar',
                                                                Inprogess: 'bar',

                                                            },
                                                            groups: [
                                                                ['Completed', 'Pending', 'Inprogess']
                                                            ]
                                                        },
                                                        color: {
                                                            // pattern: ['#ec9940','#4e97d9 ','#e9595b ','#269b8f ']
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
                                                                categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
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
                                $("#mrq-dd-class1").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart1.load({
                                            unload: true,
                                            columns:  [
                                                                ['Tasks', 330, 220, 450, 240, 160],
                                                                ['Completed', 200, 300, 560, 200, 450],
                                                                ['Pending', 500, 150, 230, 120, 240],
                                                                ['Inprogess', 230, 620, 250, 440, 110],

                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart1.load({
                                            unload: true,
                                            columns: [
                                                                ['Tasks', 1330, 1220, 1450, 1240, 1160],
                                                                ['Completed', 1200, 1300, 1560, 1200, 1450],
                                                                ['Pending', 1500, 1150, 1230, 1120, 1240],
                                                                ['Inprogess', 1230, 1620, 1250, 1440, 1110],

                                                            ],
                                        });
                                    }
                                     if (this.value.trim().toLowerCase().includes('month')) {
                                                    $("#v1").text('99')
                                                    $("#v2").text('50')
                                                    $("#v3").text('22')
                                                    $("#v4").text('100')
                                                }
                                                else {
                                                    $("#v1").text('600')
                                                    $("#v2").text('852')
                                                    $("#v3").text('719')
                                                    $("#v4").text('200')
                                                } 


                                });
                            </script>
                                    </div>


                                    <div class="padding-20 margin-bottom-0">
                                        <div class="row no-space1">
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div
                                                        class="  bg-blue-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Overdue</div>

                                                            </div>
                                                            <b class="font-size-18" id="v1">99</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div
                                                        class="  bg-red-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Avg Completed
                                                                </div>

                                                            </div>
                                                            <b class="font-size-20"id="v2">50</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div
                                                        class="  bg-green-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Un Assigned
                                                                </div>

                                                            </div>
                                                            <b class="font-size-18"id="v3">22</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div
                                                        class="  bg-teal-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Expected
                                                                </div>

                                                            </div>
                                                            <b class="font-size-20"id="v4">100</b>
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



            </div>






            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Inprogress">Inprogress </a></li>
                                <li class=""><a data-toggle="tab" href="#Pending">Pending </a></li>
                                <li class=""><a data-toggle="tab" href="#Completed"> Completed</a></li>

                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Inprogress">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
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
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
<!--
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div>
-->
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="120">Fleet </th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">DUFUF352
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information r. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB121</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">PNS342
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Tipper</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 12-June-2019, 11:02am</td>
                                                            <td class="text-left">13-June-2019, 08:20am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB124</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">YEI223
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 22-July-2019, 12:33am</td>
                                                            <td class="text-left">23-July-2019, 01:45am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB127</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">YEU342
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 11-Jan-2019, 12:23am</td>
                                                            <td class="text-left">12-Jan-2019, 06:13am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB141</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">VSF453
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 23-Feb-2019, 02:02am</td>
                                                            <td class="text-left">24-Feb-2019, 03:20am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB151</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">YUO543
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Tipper</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 29-July-2019, 11:02am</td>
                                                            <td class="text-left">30-July-2019, 02:50am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB161</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">JSY243
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 12-April-2019, 11:02am</td>
                                                            <td class="text-left">13-April-2019, 08:20am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB138</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">YDU222
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 01-Jan-2019, 12:02am</td>
                                                            <td class="text-left">02-Jan-2019, 09:20am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB109</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">PPD263
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 17-August-2019, 11:02am</td>
                                                            <td class="text-left">18-August-2019, 08:20am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
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
                                <div class="tab-pane " id="Completed">
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
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
<!--
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div>
-->
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>


                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="120">Fleet </th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">POX233
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Tipper</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB239</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">SDF222
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 21-June-2019, 07:30am</td>
                                                            <td class="text-left">22-June-2019, 09:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum gem Ipsum, giving
                                                                information on its originem Ipsum, giving
                                                                information on its originenerator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB112</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">LSM261
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 23-July-2019, 11:02am</td>
                                                            <td class="text-left">26-July-2019, 09:21am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB118</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">UDF542
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 12-Jan-2019, 01:50am</td>
                                                            <td class="text-left">26-Jan-2019, 03:30am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB289</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">EVE236
                                                                        </a>
                                                                        <br />
                                                                        <i class="small" Tipper</i> </div> </div> </td>
                                                                            <td class="text-left"> 28-May-2019, 11:20am
                                                            </td>
                                                            <td class="text-left">29-May-2019, 12:29am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB132</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">ODD321
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 10-July-2019, 10:02am</td>
                                                            <td class="text-left">11-July-2019, 08:20am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum gem Ipsum, giving
                                                                information on its originem Ipsum, giving
                                                                information on its originenerator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB153</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">DUF352
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 14-Feb-2019, 03:13am</td>
                                                            <td class="text-left">15-Feb-2019, 10:20am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">HCE238
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 25-June-2019, 08:40am</td>
                                                            <td class="text-left">26-June-2019, 10:58am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator.its origins, as well
                                                                as a random Lipsum generator. </td>
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

                                <div class="tab-pane" id="Pending">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
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
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
<!--
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div>
-->
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left" width="100">Job</th>
                                                            <th class="text-left" width="120">Fleet </th>
                                                            <th class="text-left" width="150">Start Time</th>
                                                            <th class="text-left" width="150">Expected End Time</th>
                                                            <th class="text-left">Description</th>
                                                            <th class="text-left" width="100"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-------->
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB189</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">HCE238
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Tipper</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 25-Jan-2019, 08:00am</td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB389</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">PDN352
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 01-June-2019, 11:03am</td>
                                                            <td class="text-left">02-June-2019, 10:30am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB130</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">HYD638
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 27-July-2019, 12:03am</td>
                                                            <td class="text-left">28-July-2019, 10:02am </td>
                                                            <td class="text-left">Reference sem Ipsum, giving
                                                                information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB110</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">GFD232
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 25-Feb-2019, 01:20am</td>
                                                            <td class="text-left">26-Feb-2019, 10:54am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum gem Ipsum, giving
                                                                information on its originem Ipsum, giving
                                                                information on its originenerator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB124</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo3.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">SFC232
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Tipper</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 03-July-2019, 02:30am</td>
                                                            <td class="text-left">04-July-2019, 11:20am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB212</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo2.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">NVM362
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Hook Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 13-Feb-2019, 01:59am</td>
                                                            <td class="text-left">14-Feb-2019, 12:30am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB238</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo1.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">WUN233
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Chain Loader</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 06-July-2019, 02:30am</td>
                                                            <td class="text-left">07-July-2019, 11:20am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
                                                            <td class="text-center ">
                                                                <div class="" data-target="#Track" data-toggle="modal"
                                                                    type="button">
                                                                    <i class="icon-location"><img
                                                                            src="images/icon-location.png" alt="img"
                                                                            height="20"></i></div>


                                                            </td>

                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a href="job.php">JOB235</a> </td>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="fleet.php"
                                                                            class="font-weight-600">HCE238
                                                                        </a>
                                                                        <br />
                                                                        <i class="small">Compactor</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left"> 03-June-2019, 02:30am</td>
                                                            <td class="text-left">04-June-2019, 11:20am </td>
                                                            <td class="text-left">Reference site
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well
                                                                as a random Lipsum generator. </td>
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

    <?php include_once('_maptrail.php'); ?>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>