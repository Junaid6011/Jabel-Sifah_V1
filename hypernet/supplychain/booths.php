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

<body class="layout-boxed1 admin-bg site-menubar-unfold ">

    <?php include_once('_header-conferences.php'); ?>

    <div class="page1 bg-white">
        <div class="">

            <div class="page-header page-header-bordered shadow padding-10">
                <div class="margin-top-0 ">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="">
                                        <img src="images/confrence-logo.png" class="img-bordered" style="height: 40px">
                                    </figure>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-14 font-weight-600  ">
                                        Microsoft AI Summit
                                    </div>
                                    <div class="font-size-12"> Conference </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="">
                                        <img src="images/confrence-date.png" class="img-bordered" style="height: 40px">
                                    </figure>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-14 font-weight-600  ">
                                        JUNE 11-13, 2019
                                    </div>
                                    <div class="font-size-12   "> Date </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="">
                                        <img src="images/confrence-location.png" class="img-bordered"
                                            style="height: 40px">
                                    </figure>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-14 font-weight-600 ">
                                        Doha, Qatar
                                    </div>
                                    <div class="font-size-12  "> Location</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="">
                                        <img src="images/confrence-logo2.png" class="img-bordered" style="height: 40px">
                                    </figure>
                                </div>
                                <div class="media-body">
                                    <div class="font-size-14 font-weight-600 ">
                                        Microsoft
                                    </div>
                                    <div class="font-size-12  "> Hosted by</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=" page-content container-fluid">

                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
                    <div class="inline-block pull-left margin-right-10">
                        <div class="inline-block    ">
                            <div class="form-group  margin-bottom-0  ">
                                <div class="input-daterange   ">
                                    <div class="input-group  input-group-sm">
                                        <div class="input-group-addon">
                                            <i class="icon ion-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control date" value="04/11/19">
                                    </div>
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-addon">to
                                        </div>
                                        <input type="text" class="form-control date" value="04/13/19">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                        <div class="">
                            <input type="submit" class="btn btn-sm btn-info" value="Go">
                        </div>
                    </div>


                    <div class="pull-right">
                        <a href=" " onclick="window.history.go(-1); return false;"
                            class=" btn btn-sm   btn-default btn-round">
                            Back
                        </a>

                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-3">


                        <div class=" padding-10 bg-orange-800 text-center relative card white  margin-bottom-30  ">
                            <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                Most Active Booth
                            </div>
                            <div class="margin-bottom-0 margin-right-20 inline-block"><img
                                    src="images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                            <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;"> Booth #3 </b>

                            <div class="bg-orange-700 padding-5 white  margin-top-15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="font-size-10">Total Visits</div>
                                        <div class="font-size-12">70</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="font-size-10"> Current Vistors</div>
                                        <div class="font-size-12">7</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class=" padding-10 bg-blue-800 text-center relative card white  margin-bottom-30  ">
                            <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                Least Active Booth
                            </div>
                            <div class="margin-bottom-0 margin-right-20 inline-block""><img src="
                                images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                            <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;"> Booth #7 </b>

                            <div class="bg-blue-700 padding-5 white  margin-top-15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="font-size-10">Total Visits</div>
                                        <div class="font-size-12">11</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="font-size-10"> Current Vistors</div>
                                        <div class="font-size-12">1</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class=" padding-10 bg-green-800 text-center relative card white  margin-bottom-30  ">
                            <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                Most Active Vistor
                            </div>
                            <div class="margin-bottom-0 margin-right-20 inline-block""><img src="
                                images/confrence-vistor.png" style="height:24px;" class="img-bordered1"></div>

                            <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;"> Visitor #17
                            </b>

                            <div class="bg-green-700 padding-5 white  margin-top-15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="font-size-10">Total Visits</div>
                                        <div class="font-size-12">11</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="font-size-10"> Current Booth</div>
                                        <div class="font-size-12">Booth #12</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class=" padding-10 vertical-align bg-teal-800 text-center relative card white  margin-bottom-30 "
                            style="height:134px;">
                            <div class="vertical-align-middle">
                                <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                    Average Time Spent <br> Per Booth
                                </div>
                                <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">15m
                                    10s</b>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="padding-0" style="max-width:2000px; margin: auto;">





                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-dark  card light ">
                                <div class="panel-heading margin-bottom-0">
                                    <h3 class="panel-title font-weight-600 text-center">Booths Overview
                                    </h3>
                                </div>
                                <div class="panel-body padding-15 bg-blue-00">
                                    <div class="nav-tabs-vertical sm  ">
                                        <ul class="nav nav-tabs nav-tabs-line1 vscroll" data-plugin="nav-tabs"
                                            style="max-height:205px; overflow-x:hidden;">
                                            <li class="active"><a data-toggle="tab" href="#statstab1"
                                                    role="tab">HyperNym</a></li>
                                            <li><a data-toggle="tab" href="#statstab2" role="tab">QDS</a>
                                            </li>
                                            <li><a data-toggle="tab" href="#statstab3" role="tab">Microsoft</a></li>
                                            <li><a data-toggle="tab" href="#statstab4" role="tab">Intel</a></li>
                                            <li><a data-toggle="tab" href="#statstab5" role="tab">Ingram</a></li>
                                            <li><a data-toggle="tab" href="#statstab6" role="tab">Dell </a></li>


                                        </ul>
                                        <div class="tab-content  ">
                                            <div class="tab-pane active" id="statstab1" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <a href="booth.php" style="text-decoration:none !important;">
                                                            <div class="text-center">
                                                                <div class="margin-top-30 margin-bottom-10">
                                                                    <i> <img src="images/logo-1.png" alt="img"
                                                                            height="70" class=""> </i>
                                                                </div>
                                                                <div class="font-size-16 bg-white padding-5 ">Booth#1
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full1 margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">12</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">15m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">1h 20m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">75</b>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane " id="statstab2" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-30 margin-bottom-10">
                                                                <i> <img src="images/logo-2.png" alt="img" height="70"
                                                                        class=""> </i>
                                                            </div>
                                                            <div class="font-size-16 bg-white padding-5 ">Booth#2</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">18</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">17m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">2h 30m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">65</b>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="statstab3" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-30 margin-bottom-10">
                                                                <i> <img src="images/logo-3.png" alt="img" height="70"
                                                                        class=""> </i>
                                                            </div>
                                                            <div class="font-size-16 bg-white padding-5 ">Booth#3</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full1 margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">12</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">15m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">1h 20m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">75</b>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="statstab4" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-30 margin-bottom-10">
                                                                <i> <img src="images/logo-4.png" alt="img" height="70"
                                                                        class=""> </i>
                                                            </div>
                                                            <div class="font-size-16 bg-white padding-5 ">Booth#4</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">18</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">17m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">2h 30m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">65</b>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="statstab5" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-30 margin-bottom-10">
                                                                <i> <img src="images/logo-5.png" alt="img" height="70"
                                                                        class=""> </i>
                                                            </div>
                                                            <div class="font-size-16 bg-white padding-5 ">Booth#5</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full1 margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">12</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">15m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">1h 20m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">75</b>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="statstab6" role="tabpanel">
                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-30 margin-bottom-10">
                                                                <i> <img src="images/logo-6.png" alt="img" height="70"
                                                                        class=""> </i>
                                                            </div>
                                                            <div class="font-size-16 bg-white padding-5 ">Booth#6</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6  ">
                                                        <div class="padding-10 font-size-14 bg-blue-100 margin-top-20">

                                                            <ul
                                                                class="list-unstyled list-group list-group-dividered list-group-full margin-top-0    text-left margin-bottom-0">
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Current Vistors
                                                                        <b class="pull-right">18</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Avg Time Spent
                                                                        <b class="pull-right">17m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div>
                                                                        Max Time Spent
                                                                        <b class="pull-right">2h 30m</b>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item padding-5">
                                                                    <div class="">
                                                                        Total Visits
                                                                        <b class="pull-right">65</b>
                                                                    </div>
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-dark  card light ">
                                <div class="panel-heading margin-bottom-0">
                                    <h3 class="panel-title font-weight-600 text-center">Visitor Statistics
                                    </h3>
                                </div>
                                <div class="panel-body padding-15 bg-green-1001 ">






                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-hours',
                                                        size: {
                                                            height: 193,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                            // chart.legend.show(['Total_Visitors'])
                                                            hide: ['Data', 'MOE_Owner']
                                                        },

                                                        data: {
                                                            columns: [
                                                                ['Current Vistors', 12, 18, 25, 14, 20, 19],
                                                            //    ['Avg Time Spent', 15, 17, 25, 19, 25, 19],
                                                              ['Total Visitors', 75, 65, 112, 55, 118, 55],
                                                              //  ['Data', 90, 70, 135, 60, 55, 72],
                                                            ],
                                                            type: 'bar',
                                                            types: {
                                                                Current_Vistors: 'bar',
                                                                Avg_Time_Spent: 'bar',
                                                                Total_Visitors: 'bar',
                                                                Data: 'spline',
                                                            },
                                                            groups: [
                                                                //  ['Current_Vistors', 'Avg_Time_Spent']
                                                            ]
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
                                                                categories: ['HyperNym', 'QDS', 'Microsoft', 'Intel', 'Ingram', 'Dell']
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
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="panel panel-dark  card light ">
                                <div class="panel-heading margin-bottom-0 ">
                                    <h3 class="panel-title font-weight-600 text-center">Booths Statistics
                                    </h3>
                                </div>
                                <div class="panel-body padding-15 bg-green-1001 ">






                                    <div class="chartbox">
                                        <div id="chart-vvvvv"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-vvvvv',
                                                        size: {
                                                            height: 250,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                            // chart.legend.show(['Total_Visitors'])
                                                            hide: ['Data', 'MOE_Owner']
                                                        },

                                                        data: {
                                                            columns: [
                                                                ['HyperNym', 10, 50, 70, 50, 90, 120, 90, 170, 185, 200, 250],
                                                                ['QDS', 3, 112, 55, 25, 15, 150, 25, 119, 115, 111, 310],
                                                                ['Microsoft', 10, 50, 70, 150, 90, 180, 90, 170, 185, 200, 250],
                                                                ['Intel', 3, 121, 55, 125, 15, 170, 25, 19, 15, 11, 30],
                                                                ['Ingram', 3, 12, 55, 25, 15, 150, 225, 19, 125, 111, 30],
                                                                ['Dell', 3, 12, 55, 25, 125, 250, 25, 19, 15, 11, 320],
                                                            ],
                                                            type: 'line',
                                                            types: {
                                                                Current_Vistors: 'spline',
                                                                Avg_Time_Spent: 'spline',
                                                                Total_Visitors: 'spline',
                                                                // Data: 'spline',
                                                            },
                                                            groups: [
                                                                //  ['Current_Vistors', 'Avg_Time_Spent']
                                                            ]
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
                                                                categories: ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: 'Visitors ',
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
        </div>
    </div>

    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>





</body>

</html>