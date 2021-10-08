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
        </div> -->



        <div class="page-content  container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                        <div class="media-left">
                            <img src="images/icon-vessel-photo.png" alt="img" style="height:170px;"
                                class="img-bordered ">
                        </div>
                        <div class="media-body">


                            <h2 class="margin-top-0 font-size-20 font-weight-500 margin-bottom-15 text-uppercase">
                                Eastern View
                                <div class="pull-right">
                                    <a href=" " onclick="window.history.go(-1); return false;"
                                        class=" btn btn-sm   btn-default btn-round">
                                        Back
                                    </a>

                                </div>
                            </h2>
                            <hr class="margin-0 margin-bottom-15" />




                            <div class="row">

                                <div class="col-sm-4">


                                    <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                        <tbody>
                                            <tr>
                                                <th> <b> VOY No. </b> </th>
                                                <td class="text-left text-break">
                                                    V.001-01


                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b>Current Status</b> </th>
                                                <td class="text-left text-break">
                                                    <span class="label label-success"> Online
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b> Vessel ID </b> </th>
                                                <td class="text-left text-break">
                                                    BC-PAN-EV
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b>Type </b> </th>
                                                <td class="text-left">Bulk Carrier </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-sm-4">
                                    <div class="table-responsive1">
                                        <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                            <tbody>
                                                <tr>
                                                    <th> <b> Record Status </b> </th>
                                                    <td class="text-left text-break">
                                                        Active
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th> <b>DWT Capacity </b> </th>
                                                    <td class="text-left">11,000 </td>
                                                </tr>

                                                <tr>
                                                    <th> <b>Fuel Capacity </b> </th>
                                                    <td class="text-left text-break">
                                                        12,000 (gal)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> <b>Human Capacity </b> </th>
                                                    <td class="text-left">300</td>
                                                </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="table-responsive1">
                                        <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                            <tbody>
                                                <tr>
                                                    <th> <b> Tracking ID</b> </th>
                                                    <td class="text-left text-break">
                                                        V.001-01
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width=""> <b> Model</b> </th>
                                                    <td class="text-left"> Go 0417</td>
                                                </tr>

                                                <tr>
                                                    <th> <b> Nature </b> </th>
                                                    <td class="text-left text-break">
                                                        General Cargo Vessel
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="150"> <b>Ownership </b> </th>
                                                    <td class="text-left text-break">
                                                        Balovio
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










            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light " style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Summary"> Job Summary</a></li>
                                <li class=""><a data-toggle="tab" href="#Utilization">Utilization </a></li>
                                <li class=""><a data-toggle="tab" href="#Assets">Sensors </a></li>
                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>
                                <li class=""><a data-toggle="tab" href="#Violations">Violations </a></li>

                                <li class=""><a data-toggle="tab" href="#Crews">Crew Listing </a></li>

                            </ul>
                        </div>
                        <div class="panel-body padding-10">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Summary">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">
                                            <div class=" margin-bottom-15">



                                                <div class="media">
                                                    <div class="media-left">
                                                        <img src="images/vessel-customer1.png"
                                                            class="img-bordered padding-15" style="height:70px">
                                                    </div>
                                                    <div class="media-body">


                                                        <table
                                                            class="table  margin-bottom-0  no-border table-condensed grey-800"
                                                            style="line-height: normal;">
                                                            <tbody>
                                                                <tr>
                                                                    <th width="80"> <span class="font-size-16">Project:
                                                                        </span> </th>
                                                                    <td class="text-left text-break">
                                                                        <a href="project.php" class="font-size-16">
                                                                            LUSAIL PALACE - EASTERN VIEW - V.001-01 -
                                                                            MMOS

                                                                        </a>

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th> <span class="font-size-16"> Customer:</span>
                                                                    </th>
                                                                    <td class="text-left text-break">
                                                                        <a href="customer.php" class="font-size-16">
                                                                            GEMCO</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <hr />

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-orange-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Distance Travelled
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">200 km</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">
                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-blue-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fuel Comsumed
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">120 Gal</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-teal-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fillups
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">03</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-green-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Violations
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">04</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="c">







                                                <div class="margin-top-0 margin-bottom-20 padding-20 bg-blue-00 shadow1 card1"
                                                    style="border: 1px solid #eee; background-color: #f9f9f9;">
                                                    <div class="row">

                                                        <div class="col-md-3">

                                                            <div class="media margin-bottom-10">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        25-Jan-2019,
                                                                        08:21am
                                                                    </div>
                                                                    <div class="font-size-12   "> Start Time/Date</div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-10">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        28-Jan-2019,
                                                                        12:28am
                                                                    </div>
                                                                    <div class="font-size-12   "> End Time/Date</div>


                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-10">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        Simaismah

                                                                    </div>
                                                                    <div class="font-size-12   "> Destination</div>


                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-3">

                                                            <div class="media margin-bottom-10">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        12:15am 28 Jan,
                                                                        2019
                                                                    </div>
                                                                    <div class="font-size-12   "> ETA to Destination
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-0">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        Musandam

                                                                    </div>
                                                                    <div class="font-size-12   "> Next Port</div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-0">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div
                                                                        class="font-size-14  font-weight-6001 green-800">
                                                                        Musandam - Simaismah


                                                                    </div>
                                                                    <div class="font-size-12   "> Voyage Sector
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-0">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-vessel1.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        Eastern View
                                                                    </div>
                                                                    <div class="font-size-12  "> Vessel</div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-3">
                                                            <div class="media margin-bottom-0">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/vessel-captain.png"
                                                                            class="img-bordered" style="height: 30px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-14  font-weight-6001 ">
                                                                        Kagiso Rabada
                                                                    </div>
                                                                    <div class="font-size-12   "> Captain</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>






                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0">
                                                            <div class="panel-heading bg-blue-100  ">
                                                                <h3 class="panel-title text-center  padding-5 ">Weight
                                                                    Status</h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body padding-0">
                                                                <div class="col-lg-5"> <br />
                                                                    <div
                                                                        class="text-center  margin-bottom-15 font-size-16 ">
                                                                    </div>
                                                                    <div class="c100 p20 small   ">
                                                                        <span class="pointer">80%</span>
                                                                        <div class="slice">
                                                                            <div class="bar"></div>
                                                                            <div class="fill"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Available
                                                                            </div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                252 ton
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Load Status:
                                                                            </div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                <div class="label label-success ">
                                                                                    Normal
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="font-size-12   "> Current
                                                                                Weight:</div>
                                                                            <div
                                                                                class="font-size-18  font-weight-6001 ">
                                                                                6200
                                                                                ton
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-blue-100 ">
                                                                <h3 class="panel-title text-center padding-5 ">Fuel
                                                                    Combustion
                                                                </h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="widget">
                                                                    <div
                                                                        class="padding-0 margin-top-20 bg-white  text-center">
                                                                        <div class=" ">
                                                                            <div
                                                                                class="text-uppercase1 font-size-16 margin-bottom-15">
                                                                                Average
                                                                                Combustion Rate</div>
                                                                            <div class="margin-bottom-15">
                                                                                <span class="font-size-30 green-800">
                                                                                    150
                                                                                    gal/h</span>
                                                                            </div>
                                                                            <div class="counter-label">
                                                                                <div class="counter counter-sm ">
                                                                                    <div class="counter-number-group">
                                                                                        <span
                                                                                            class="counter-icon blue-600 margin-right-5"><i
                                                                                                class="wb-graph-up"></i></span>
                                                                                        <span
                                                                                            class="counter-number">10%</span>
                                                                                        <span
                                                                                            class="counter-number-related">more
                                                                                            than 24 hours</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>










                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-blue-100 ">
                                                                <h3 class="panel-title text-center padding-5 ">Fuel
                                                                    Storage</h3>
                                                                <div class="panel-actions">
                                                                    <span data-toggle="tooltip"
                                                                        data-original-title="Full Screen">
                                                                        <a class="panel-action icon wb-expand"
                                                                            data-target="#mapfull"
                                                                            data-toggle="modal"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="panel-body padding-0">
                                                                <div class="chartbox">
                                                                    <div id="chart-bbbbb"></div>
                                                                    <script>
                                                                        $(document).ready(function ($) {

                                                                            (function () {
                                                                                var chart = c3.generate({
                                                                                    bindto: '#chart-bbbbb',
                                                                                    data: {

                                                                                        columns: [
                                                                                            ['Water Level'],
                                                                                            ['Capacity', 2000,],
                                                                                            ['Available', 1200,],
                                                                                        ],
                                                                                        groups: [
                                                                                            ['Capacity', 'Available']
                                                                                        ],
                                                                                        type: 'bar'
                                                                                    },
                                                                                    size: {
                                                                                        height: 180,
                                                                                    },
                                                                                    legend: {
                                                                                        show: true,
                                                                                        position: 'bottom',
                                                                                    },
                                                                                });
                                                                            })();
                                                                        });
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">


                                                        <div class="panel panel-default margin-bottom-0 ">
                                                            <div class="panel-heading  bg-red-800 ">
                                                                <h3 class="panel-title text-center padding-5  white">
                                                                    Demurrages (Current Trip)

                                                                </h3>

                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="widget">
                                                                    <div
                                                                        class="padding-0 margin-top-0 bg-white  text-center">


                                                                        <div class=" ">

                                                                            <!-- <div
                                                                                class="text-uppercase1 font-size-12 margin-bottom-15">
                                                                                Rate per hour: $150.00
                                                                            </div> -->

                                                                            <div class="margin-bottom-15">
                                                                                <span class="font-size-20 red-800">
                                                                                    $4,537.50
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="text-uppercase1 font-size-14 margin-bottom-15">
                                                                                Demurrage chargable hours: (48.82)
                                                                            </div>


                                                                        </div>

                                                                        <table
                                                                            class="table table-striped table-condensed bg-white margin-bottom-0">
                                                                            <tbody>


                                                                                <tr>
                                                                                    <th>Actual time Loading</th>
                                                                                    <td>68.00 hrs</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Actual time Discharging :

                                                                                    </th>
                                                                                    <td>87.92 hrs
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Demurrage (Add if reversible) :
                                                                                    </th>
                                                                                    <td>35.92 hrs
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
                                                <hr />




                                                <div class="row text-center   margin-bottom-0   clearfix  ">

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Voyage status
                                                                </div>
                                                                <b class="font-size-12">Completed </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Total loading lay time
                                                                </div>
                                                                <b class="font-size-12">3.05 </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Total discharging lay time
                                                                </div>
                                                                <b class="font-size-12 red-800">3.4</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Total loading & discharging
                                                                    time</div>
                                                                <b class="font-size-12">6.4</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Total voyage time</div>
                                                                <b class="font-size-12">23.22</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Extra time adj. on owner
                                                                    account</div>
                                                                <b class="font-size-12"> 49.00 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Arrival to NOR tendered at LP
                                                                </div>
                                                                <b class="font-size-12"> 6:36:00 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">All Fast to commence cargo at
                                                                    LP </div>
                                                                <b class="font-size-12">4:30:00 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Completion of Cargo to Left
                                                                    Berth at LP- 6 hours </div>
                                                                <b class="font-size-12">24:50:00 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">NOR tendered to All Fast at DP
                                                                    - 24 hour </div>
                                                                <b class="font-size-12">59:00:00 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Arrival Draft</div>
                                                                <b class="font-size-12">FWD 5.345 AFT 5.400</b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <div
                                                            class="vertical-align height-70 padding-10 bg-grey-100  card margin-bottom-20">
                                                            <div class="vertical-align-middle">
                                                                <div class="font-size-10">Sailing Draft</div>
                                                                <b class="font-size-12">FWD 1.100 AFT 1.200 </b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <hr class="margin-top-0" />
                                                <h4 class="margin-bottom-30"> Statement of Facts</h4>

                                                <div class="row">

                                                    <div class="col-lg-12">


                                                        <div class="panel panel-default">
                                                            <!-- <div class="panel-heading  bg-blue-600  ">
                                                                <h3 class="panel-title panel-title white     ">
                                                                    Statement of Facts
                                                                </h3>

                                                            </div> -->
                                                            <div class="panel-body padding-0">

                                                                <div class="nav-tabs-vertical1 ">
                                                                    <ul class="nav nav-tabs nav-tabs-solid margin-right-0 margin-bottom-0 "
                                                                        data-plugin="nav-tabs">
                                                                        <li class="active"><a data-toggle="tab"
                                                                                href="#exampleTabsLineLeftOne">Time
                                                                                Sheets</a>
                                                                        </li>
                                                                        <li><a data-toggle="tab"
                                                                                href="#exampleTabsLineLeftTwo"
                                                                                a="">Bunkers</a></li>

                                                                    </ul>
                                                                    <div class="tab-content ">
                                                                        <div class="tab-pane active"
                                                                            id="exampleTabsLineLeftOne" role="tabpanel">




                                                                            <div class="row">
                                                                                <div class="col-lg-6">



                                                                                    <table
                                                                                        class="table table-striped table-condensed bg-white margin-bottom-0">
                                                                                        <tbody>

                                                                                            <tr>
                                                                                                <th colspan="3"
                                                                                                    class="bg-blue-600 white">
                                                                                                    <div
                                                                                                        class="font-size-12 font-weight-600">
                                                                                                        LOADING TIME
                                                                                                    </div>

                                                                                                </th>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Arrived

                                                                                                </th>
                                                                                                <td>Mar 03 - 2019 5:00

                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Anchored
                                                                                                </th>
                                                                                                <td>Sep 25 - 2018 18:50
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Left Anchorage
                                                                                                </th>
                                                                                                <td>Sep 26 - 2018 18:30
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Pilot Aboard
                                                                                                </th>
                                                                                                <td>N/A
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>First Line Ashore
                                                                                                </th>
                                                                                                <td>Sep 27 - 2018 6:00
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Berthed
                                                                                                </th>
                                                                                                <td>Sep 27 - 2018 6:45
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Cleared by
                                                                                                    Authorities
                                                                                                </th>
                                                                                                <td>Sep 27 - 2018 6:45
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>


                                                                                    <table
                                                                                        class="table table-striped1 table-condensed bg-white margin-bottom-0">
                                                                                        <thead>
                                                                                            <tr
                                                                                                class="bg-blue-400 white">
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    From
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    To
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    Time
                                                                                                    Used
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    Exceptions
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    In
                                                                                                    Days
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Mar 03 - 2019 5:00
                                                                                                </td>
                                                                                                <td>
                                                                                                    Mar 06 - 2019 1:00
                                                                                                </td>
                                                                                                <td> 68.00 hrs
                                                                                                </td>
                                                                                                <td>
                                                                                                    0.00 hrs </td>
                                                                                                <td>
                                                                                                    02 20:00
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Total lay time
                                                                                                        used</b>
                                                                                                </td>
                                                                                                <td>68.00 hrs</td>
                                                                                                <td>0.00 hrs</td>
                                                                                                <td>02 20:00</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Time Allowed
                                                                                                    </b>
                                                                                                </td>
                                                                                                <td>68.00 hrs</td>
                                                                                                <td>0.00 hrs</td>
                                                                                                <td>02 12:00
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Under (+ve) /
                                                                                                        Over (-ve)

                                                                                                    </b>
                                                                                                </td>
                                                                                                <td class="red-800">
                                                                                                    -8.00 hrs
                                                                                                </td>
                                                                                                <td>-</td>

                                                                                                <td>02 20:00</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <div class="col-lg-6">


                                                                                    <table
                                                                                        class="table table-striped table-condensed bg-white margin-bottom-0">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <th colspan="3"
                                                                                                    class="bg-green-600 white">
                                                                                                    <div
                                                                                                        class="font-size-12 font-weight-600">
                                                                                                        DISCHARGING TIME
                                                                                                    </div>

                                                                                                </th>

                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>NOR Tendered
                                                                                                </th>
                                                                                                <td>Sep 25 - 2018 17:35
                                                                                                </td>
                                                                                                <td>arrived ta
                                                                                                    discharging
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>NOR Received
                                                                                                </th>
                                                                                                <td>Sep 25 - 2018 17:35
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Commenced Discharge
                                                                                                </th>
                                                                                                <td>Sep 27 - 2018 7:30
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Completed Discharge
                                                                                                </th>
                                                                                                <td>Sep 27 - 2018 18:30
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Cleared by
                                                                                                    Authorities
                                                                                                </th>
                                                                                                <td>Sep 28 - 2018 11:00
                                                                                                </td>
                                                                                                <td></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>Left Berth
                                                                                                </th>
                                                                                                <td>Sep 28 - 2018 11:30
                                                                                                </td>
                                                                                                <td>sailed out
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <th>COSP

                                                                                                </th>
                                                                                                <td>Sep 28 - 2018 11:40

                                                                                                </td>
                                                                                                <td>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>



                                                                                    <table
                                                                                        class="table table-striped1 table-condensed bg-white margin-bottom-0">
                                                                                        <thead>
                                                                                            <tr
                                                                                                class="bg-green-400 white">
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    From
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    To
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    Time
                                                                                                    Used
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    Exceptions
                                                                                                </th>
                                                                                                <th
                                                                                                    class="text-left white">
                                                                                                    In
                                                                                                    Days
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    Mar 03 - 2019 5:00
                                                                                                </td>
                                                                                                <td>
                                                                                                    Mar 06 - 2019 1:00
                                                                                                </td>
                                                                                                <td> 68.00 hrs
                                                                                                </td>
                                                                                                <td>
                                                                                                    0.00 hrs </td>
                                                                                                <td>
                                                                                                    02 20:00
                                                                                                </td>
                                                                                            </tr>



                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Total lay time
                                                                                                        used</b>
                                                                                                </td>
                                                                                                <td>68.00 hrs</td>
                                                                                                <td>0.00 hrs</td>
                                                                                                <td>02 20:00</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Time Allowed
                                                                                                    </b>
                                                                                                </td>
                                                                                                <td>68.00 hrs</td>
                                                                                                <td>0.00 hrs</td>
                                                                                                <td>02 12:00
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td></td>
                                                                                                <td><b> Under (+ve) /
                                                                                                        Over (-ve)

                                                                                                    </b>
                                                                                                </td>
                                                                                                <td class="red-800">
                                                                                                    -8.00 hrs
                                                                                                </td>
                                                                                                <td>-</td>

                                                                                                <td>02 20:00</td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>


                                                                                </div>
                                                                            </div>



                                                                        </div>
                                                                        <div class="tab-pane "
                                                                            id="exampleTabsLineLeftTwo" role="tabpanel">
                                                                            <table
                                                                                class="table   table-condensed table-striped1 table-bordered1 bg-white margin-bottom-0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td> Bunkers ROB
                                                                                            Arrival:</td>
                                                                                        <td><b> Fuel Oil </b></td>
                                                                                        <td>36,936.00 MT</td>
                                                                                        <td><b>Diesel Oil</b></td>
                                                                                        <td>0.00 MT</td>
                                                                                        <td class="text-center">Gas Oil
                                                                                        </td>
                                                                                        <td>0.00 MT</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> Bunkers ROB Sailing:
                                                                                        </td>
                                                                                        <td><b> Fuel Oil </b></td>
                                                                                        <td>36,936.00 MT</td>
                                                                                        <td><b>Diesel Oil</b></td>
                                                                                        <td>0.00 MT</td>
                                                                                        <td class="text-center">Gas Oil
                                                                                        </td>
                                                                                        <td>0.00 MT</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> Bunkers Shipped:

                                                                                        </td>
                                                                                        <td><b> Fuel Oil </b></td>
                                                                                        <td>36,936.00 MT</td>
                                                                                        <td><b>Diesel Oil</b></td>
                                                                                        <td>0.00 MT</td>
                                                                                        <td class="text-center">Gas Oil
                                                                                        </td>
                                                                                        <td>0.00 MT</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> Fresh Water:ROB Arrival


                                                                                        </td>
                                                                                        <td><b> </b></td>
                                                                                        <td>26.00
                                                                                            MT</td>
                                                                                        <td><b>ROB Sailing
                                                                                            </b></td>
                                                                                        <td>0.00 MT</td>
                                                                                        <td class="text-center">

                                                                                        </td>
                                                                                        <td>0.00 MT</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="tab-pane"
                                                                            id="exampleTabsLineLeftThree"
                                                                            role="tabpanel">
                                                                            <table class="table table-striped bg-white">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th>End of Sea Passage
                                                                                        </th>
                                                                                        <td>Sep 25 - 2018 17:35
                                                                                        </td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>End of Sea Passage
                                                                                        </th>
                                                                                        <td>Sep 25 - 2018 17:35
                                                                                        </td>
                                                                                        <td></td>
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






                                                <div class="row">

                                                    <div class="col-lg-4">


                                                        <div
                                                            class="panel panel-dark  bg-grey-100 light margin-bottom-0">

                                                            <div class="panel-heading font-weight-600 margin-bottom-0 ">
                                                                <h3 class="panel-title "><b>Weather Forcast </b>
                                                                </h3>

                                                            </div>
                                                            <div class="panel-body padding-15 ">
                                                                <div class="margin-bottom-20 clearfix text-center">
                                                                    <div class="form-group1" style="opacity:;">
                                                                        <label
                                                                            class="margin-right-10 font-weight-600">Distance
                                                                            ahead to planned
                                                                            route</label>
                                                                        <div class="inline-block">
                                                                            <select class="form-control input-sm"
                                                                                id="mrq-dd-knot">
                                                                                <option>100 knot </option>
                                                                                <option>200 knot</option>
                                                                            </select>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="">
                                                                    <div class=" text-center">
                                                                        <h4 id="v1">40.785091, -73.968285</h4>
                                                                        <div id="v2">MONDAY 28 Feb, 2019</div>

                                                                        <img src="images/cloudy.png" height="70" />
                                                                        <span class="font-size-30  font-weight-600"
                                                                            id="v3">
                                                                            9.9 c</span>

                                                                        <div class="font-size-14 margin-top-10" id="v4">
                                                                            Mostly Cloudy / Rain: 12.07 mm

                                                                        </div>

                                                                    </div>
                                                                    <hr class="margin-bottom-0 margin-top-15" />
                                                                    <div class="weather-times padding-10">
                                                                        <div class="row no-space text-center">
                                                                            <div class="col-xs-4">
                                                                                <div class="weather-day vertical-align">
                                                                                    <div class="vertical-align-middle">
                                                                                        <div class="margin-bottom-5">
                                                                                            High
                                                                                        </div>

                                                                                        <div class="red-600" id="v5">
                                                                                            2.9 c
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-4">
                                                                                <div class="weather-day vertical-align">
                                                                                    <div class="vertical-align-middle">
                                                                                        <div class="margin-bottom-5">
                                                                                            Low
                                                                                        </div>
                                                                                        <div class="red-600" id="v6">
                                                                                            11.9 c</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-4">
                                                                                <div class="weather-day vertical-align">
                                                                                    <div class="vertical-align-middle">
                                                                                        <div class="margin-bottom-5">
                                                                                            Average</div>
                                                                                        <div class="red-600" id="v7">6.2
                                                                                            c</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script>

                                                                    $("#mrq-dd-knot").on('change', function () {


                                                                        if (this.value.trim().toLowerCase().includes('100')) {
                                                                            $("#v1").text('40.785091, -73.968285')
                                                                            $("#v2").text('MONDAY 21 Feb, 2019')
                                                                            $("#v3").text('9.9 c')
                                                                            $("#v4").text('Mostly Cloudy / Rain: 12.07 mm')
                                                                            $("#v5").text('2.9 c')
                                                                            $("#v6").text('11.9 c')
                                                                            $("#v7").text('6.2 c')
                                                                        }
                                                                        else {
                                                                            $("#v1").text('42.78091, -77.955285')
                                                                            $("#v2").text('Friday 27 Feb, 2019')
                                                                            $("#v3").text('7.8 c')
                                                                            $("#v4").text('Mostly Cloudy / Rain: 11.07 mm')
                                                                            $("#v5").text('1.91 c')
                                                                            $("#v6").text('10.9 c')
                                                                            $("#v7").text('6.7 c')
                                                                        }



                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>

                                                    </div>






                                                    <div class="col-lg-4">
                                                        <div
                                                            class="panel panel-dark bg-grey-100   light margin-bottom-0">

                                                            <div class="panel-heading font-weight-600 margin-bottom-0 ">
                                                                <h3 class="panel-title "><b>Sea Breeze & Wind
                                                                        Statistics
                                                                    </b></h3>

                                                            </div>
                                                            <div class="panel-body padding-20">

                                                                <div class="row">
                                                                    <div class="col-xs-9">
                                                                        <div class="font-size-16">Speed <span
                                                                                class="font-size-10">
                                                                                <img src="images/icon-wind-direction.png"
                                                                                    height="16"
                                                                                    class="margin-left-15" />
                                                                                From
                                                                                Northeast</span></div>
                                                                        <div class="font-size-30 ">
                                                                            11 knot <br>


                                                                        </div>

                                                                    </div>
                                                                    <div class="col-xs-3 text-right">
                                                                        <img src="images/icon-wind.png" height="40" />
                                                                    </div>
                                                                </div>

                                                                <hr class="margin-bottom-20 margin-top-20" />
                                                                <div class="row">
                                                                    <div class="col-xs-9">
                                                                        <div class="font-size-16">Precipitation
                                                                            Chance:
                                                                        </div>
                                                                        <div class="font-size-30 ">
                                                                            55%
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-3 text-right">
                                                                        <img src="images/icon-precipitation.png"
                                                                            height="40" />
                                                                    </div>
                                                                </div>
                                                                <hr class="margin-bottom-20 margin-top-15" />

                                                                <div class="row">
                                                                    <div class="col-xs-9">
                                                                        <div class="font-size-16">Humidity:
                                                                        </div>
                                                                        <div class="font-size-30 ">
                                                                            79%

                                                                            <span class="font-size-10">
                                                                                (Dew Point: 5 C)</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-3 text-right">
                                                                        <img src="images/icon-humidity.png"
                                                                            height="40" />
                                                                    </div>
                                                                </div>
                                                                <!-- <hr class="margin-bottom-15 margin-top-15" />
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="font-size-12">Water Pressure: </div>
                                <div class="font-size-20 ">
                                    22 Pa
                                </div>
                            </div>
                            <div class="col-xs-4 text-right">
                                <img src="images/icon-precipitation.png" height="40" />
                            </div>
                        </div> -->
                                                            </div>


                                                        </div>
                                                    </div>




                                                    <div class="col-lg-4">
                                                        <div
                                                            class="panel panel-dark  bg-grey-100  light margin-bottom-0">

                                                            <div
                                                                class="panel-heading font-weight-600 margin-bottom-15 ">
                                                                <h3 class="panel-title "><b>Current Location
                                                                    </b></h3>

                                                            </div>
                                                            <div class="panel-body ">
                                                                <div class="mapbox  small  margin-bottom-0  "
                                                                    style="height: 300px;">
                                                                    <div class="icon" style="left:30%; top:25%;">
                                                                        <a data-toggle="popover"
                                                                            data-original-title="RRT156"
                                                                            data-trigger="hover" data-container="body"
                                                                            data-placement="top" data-html="true"
                                                                            href="#" id="start1">
                                                                            <img src="images/icon-ship1.png" alt="img">
                                                                        </a>


                                                                        <div id="popover-content-start1" class="hide">
                                                                            <table
                                                                                class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                                                <tbody>

                                                                                    <tr>
                                                                                        <th> Last Updated </th>
                                                                                        <td class="text-left">
                                                                                            Feb
                                                                                            26,2018 10:05:11 am
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <script type="text/javascript">
                                                                        // Map appearance
                                                                        var width = "100%";         // width in pixels or percentage
                                                                        var height = "100px";         // height in pixels
                                                                        var latitude = "36.00";     // center latitude (decimal degrees)
                                                                        var longitude = "-5.40";    // center longitude (decimal degrees)
                                                                        var names = false;           // always show ship names (defaults to false)
                                                                        // Fleet tracking
                                                                        var fleet = "e48ab3d80a0e2a9bf28930f2dd08800c"; // your personal Fleet key (displayed in your Profile)
                                                                        var fleet_name = "Carnival"; // display particular fleet from your fleet list
                                                                        var fleet_timespan = "1440"; // maximum age in minutes of the displayed ship positions
                                                                    </script>
                                                                    <script type="text/javascript"
                                                                        src="https://www.vesselfinder.com/aismap.js"></script>


                                                                </div>
                                                                <!-- <div class="mapbox   margin-bottom-0  ">
                            <div class="icon" style="left:60%; top:25%;">
                                <a data-toggle="popover" data-original-title="RRT156" data-trigger="hover"
                                    data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                    <img src="images/icon-ship1.png" alt="img">
                                </a>


                                <div id="popover-content-start1" class="hide">
                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                        <tbody>

                                            <tr>
                                                <th> Last Updated </th>
                                                <td class="text-left">Feb 26,2018 10:05:11 am</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15342.956147813995!2d66.85384748521041!3d24.848279465452546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDUwJzI0LjIiTiA2NsKwNTEnMTYuMSJF!5e0!3m2!1sen!2s!4v1551262903277"
                                height="300" frameborder="0" style="border:0; width: 100%;" class="pull-left map"></iframe>

                        </div> -->
                                                            </div>


                                                        </div>
                                                    </div>




                                                </div>







                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Utilization">

                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="row">
                                                <div class="col-lg-12  ">


                                                    <div class="">
                                                        <!-- <div class="margin-bottom-10 clearfix text-center">
                                                            <div class="form-group1">
                                                                <div class="inline-block">
                                                                    <select class="form-control input-sm">
                                                                        <option>2019</option>
                                                                        <option>2018 </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> -->

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
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <div class="chartbox" class="">
                                                                    <div id="chart-hhh"></div>
                                                                    <script>
                                                                        $(document).ready(function ($) {
                                                                            (function () {
                                                                                var simple_line_chart = c3.generate({
                                                                                    bindto: '#chart-hhh',
                                                                                    size: {
                                                                                        height: 200,
                                                                                    },
                                                                                    legend: {
                                                                                        show: true,
                                                                                        position: 'bottom',
                                                                                    },



                                                                                    data: {
                                                                                        columns: [
                                                                                            ['Working', 22, 19, 13, 10, 14, 13, 22, 19, 13, 20, 14, 20],
                                                                                            ['Idle', 3, 2, 7, 5, 1, 7, 12, 4, 5, 6, 2, 0],
                                                                                            ['Standby', 5, 4, 5, 6, 2, 0, 3, 2, 7, 5, 1, 7],
                                                                                            ['FlagClass', 3, 2, 7, 5, 1, 7, 12, 4, 5, 6, 2, 0],
                                                                                            ['RepairsEngine', 5, 4, 5, 6, 2, 0, 3, 2, 7, 5, 1, 7],
                                                                                            ['RepairsDeck', 3, 2, 7, 5, 1, 7, 12, 4, 5, 6, 2, 0],
                                                                                            ['RepairIncident', 5, 4, 5, 6, 2, 0, 3, 2, 7, 5, 1, 7],
                                                                                            ['Weather', 5, 4, 5, 6, 2, 0, 3, 2, 7, 5, 1, 7],
                                                                                        ],
                                                                                        type: 'bar',
                                                                                        types: {
                                                                                            Working: 'bar',
                                                                                            Idle: 'bar',
                                                                                            Standby: 'bar',
                                                                                            FlagClass: 'bar',
                                                                                            RepairsEngine: 'bar',
                                                                                            RepairsDeck: 'bar',
                                                                                            RepairIncident: 'bar',
                                                                                            Weather: 'bar',
                                                                                        },
                                                                                        groups: [
                                                                                            ['Working', 'Idle', 'Idle', 'Standby', 'FlagClass', 'RepairsEngine', 'RepairsDeck', 'RepairIncident', 'Weather']
                                                                                        ]
                                                                                    },
                                                                                    color: {
                                                                                        // pattern: ['#ec9940', '#4e97d9 ', '#e9595b ', '#269b8f ']
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
                                                                                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                                                                        },
                                                                                        y: {
                                                                                            label: {

                                                                                                text: 'Numbers of Days ',
                                                                                                position: 'outer-middle'
                                                                                            },
                                                                                        },
                                                                                    },
                                                                                    bar: {
                                                                                        width: {
                                                                                            ratio: 0.2
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

                                            <hr />

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- <h4>Activities</h4> -->
                                                    <div class="vscroll bg-white" style="max-height:280px;">
                                                        <table
                                                            class="table table-striped table-condensed  table-bordered   margin-bottom-0">
                                                            <thead>
                                                                <tr class="">
                                                                    <th class="text-left">Project </th>

                                                                    <th class="text-left">Status</th>
                                                                    <th class="text-left">Job</th>

                                                                    <th class="text-left">Start </th>
                                                                    <th class="text-left">End </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> LUSAIL
                                                                            PALACE -
                                                                            EASTERN VIEW</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-info ">
                                                                            Inprogress
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <a href="job.php">JOB189</a>
                                                                    </td>
                                                                    <td>
                                                                        Aug 03,2018 06:31:28 am
                                                                    </td>
                                                                    <td>
                                                                        -
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> Aggregate
                                                                            RAA
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB222</a>
                                                                    </td>

                                                                    <td>
                                                                        July 13,2018 02:21:41 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> Tekfen
                                                                            Khasab
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB981</a>
                                                                    </td>

                                                                    <td>
                                                                        Jan 11,2018 08:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Jan 18,2018 09:12:21 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> HALUL
                                                                            PROJECT -
                                                                            AR 3-6T </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB478</a>
                                                                    </td>

                                                                    <td>
                                                                        Feb 24,2018 11:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> LUSAIL
                                                                            PALACE -
                                                                            EASTERN VIEW</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <a href="job.php">JOB789</a>
                                                                    </td>
                                                                    <td>
                                                                        Aug 03,2018 06:31:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> Aggregate
                                                                            RAA
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB562</a>
                                                                    </td>

                                                                    <td>
                                                                        July 13,2018 02:21:41 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> Tekfen
                                                                            Khasab
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB111</a>
                                                                    </td>

                                                                    <td>
                                                                        Jan 11,2018 08:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Jan 18,2018 09:12:21 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href="project.php"> HALUL
                                                                            PROJECT -
                                                                            AR 3-6T </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB478</a>
                                                                    </td>

                                                                    <td>
                                                                        Feb 24,2018 11:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
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
                                <div class="tab-pane" id="Assets">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h4>Sensors</h4>
                                                    <table class="table    table-bordered margin-bottom-0 ">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left" width="200">Type</th>
                                                                <th class="text-left">Conunt </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-location.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Location </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10 ">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-temperature.png"
                                                                        alt="..." width="20" class="margin-right-10">
                                                                    <b> Temperature </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-diplevel.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Fuel Level </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Disabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b>Wind Pressure </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-density.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Fuel Density </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Weight </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i>
                                                                    </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="Maintenances">
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
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Name</th>
                                                        <th class="text-left">Types </th>
                                                        <th class="text-left">Status </th>


                                                        <th class="text-left">Time/Date</th>
                                                        <th class="text-left">Competed Time/Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">

                                                        <td>Engine</td>
                                                        <td>
                                                            Routine
                                                        </td>
                                                        <td>
                                                            <div class="label label-success "> Completed
                                                            </div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Electrical</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-info "> Scheduled</div>
                                                        </td>

                                                        <td>13-Feb-2019, 11:21am</td>
                                                        <td>-</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>Fuel System</td>
                                                        <td>Weekly </td>
                                                        <td>
                                                            <div class="label label-success "> Completed
                                                            </div>
                                                        </td>

                                                        <td>25-Mar-2019, 01:20am</td>
                                                        <td>26-Mar-2019, 04:12am</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>HVAC </td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-warning "> Inprogress
                                                            </div>
                                                        </td>

                                                        <td>12-July-2019, 08:00am</td>
                                                        <td>13-July-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Steering and Control</td>
                                                        <td>Monthly </td>
                                                        <td>
                                                            <div class="label label-success "> Completed
                                                            </div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Violations">
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
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Type</th>
                                                        <th class="text-left">Threshold</th>
                                                        <th class="text-left">Value</th>
                                                        <th class="text-left">Time/Date</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td width="150">
                                                            Fuel
                                                        </td>

                                                        <td> 55.000 </td>
                                                        <td>78.268</td>
                                                        <td> 09:32 AM, 22 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Speed

                                                        </td>


                                                        <td> 90.000 (knot) </td>
                                                        <td> 102.12 (knot) </td>
                                                        <td> 05:53 AM, 07 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Route
                                                        </td>


                                                        <td> 11 </td>
                                                        <td> 34 </td>
                                                        <td> 07:29 AM, 19 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Temperature
                                                        </td>


                                                        <td> 36 C </td>
                                                        <td> 43 C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Humidity
                                                        </td>

                                                        <td> 36 C </td>
                                                        <td> 43 C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane" id="Crews">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="">

                                                <div class="sidebox ">

                                                    <div class="page-aside left-filters margin-top-15">
                                                        <div class="page-aside-switch">
                                                            <i class="icon wb-chevron-left"></i>
                                                            <i class="icon wb-chevron-right"></i>
                                                        </div>
                                                        <div class="page-aside-inner">
                                                            <section class="page-aside-section">
                                                                <div class=" padding-left-20 padding-right-20">


                                                                    <div class="panel-group left-filters"
                                                                        id="AccordionFilters1">

                                                                        <div class="panel">
                                                                            <div class="panel-heading" role="tab">
                                                                                <a class="panel-title"
                                                                                    data-toggle="collapse"
                                                                                    href="#Status"
                                                                                    data-parent="#AccordionFilters">
                                                                                    Status
                                                                                </a>
                                                                            </div>
                                                                            <div class="panel-collapse collapse in"
                                                                                id="Status" role="tabpanel">
                                                                                <div class="panel-body padding-0">
                                                                                    <ul class="list-group list-group-bordered mrq-cb"
                                                                                        data-mrq-col-no="1"
                                                                                        data-mrq-table-id="table">
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">30</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        value="online"
                                                                                                        id="Online1"
                                                                                                        name="online" />
                                                                                                    <label
                                                                                                        for="Online1">Online</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">07</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        value="offline"
                                                                                                        id="Online1r"
                                                                                                        name="" />
                                                                                                    <label
                                                                                                        for="Online1r">Offline</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">08</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        value="idle"
                                                                                                        id="Online2"
                                                                                                        name="" />
                                                                                                    <label
                                                                                                        for="Online2">Idle</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- <li class="list-group-item">
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
                                                                            </li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>




                                                                        <div class="panel">
                                                                            <div class="panel-heading" role="tab">
                                                                                <a class="panel-title"
                                                                                    data-toggle="collapse" href="#Types"
                                                                                    data-parent="#AccordionFilters">
                                                                                    Types
                                                                                </a>
                                                                            </div>
                                                                            <div class="panel-collapse collapse in"
                                                                                id="Types" role="tabpanel">
                                                                                <div class="panel-body padding-0">
                                                                                    <ul class="list-group list-group-bordered mrq-cb"
                                                                                        data-mrq-col-no="5"
                                                                                        data-mrq-table-id="table">
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">100</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Hook"
                                                                                                        value="Technical">
                                                                                                    <label
                                                                                                        for="Hook">Technical
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">50</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Compactor"
                                                                                                        value="Service">
                                                                                                    <label
                                                                                                        for="Compactor">Service</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">100</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Chain"
                                                                                                        value="Operational">
                                                                                                    <label
                                                                                                        for="Chain">Operational</label>
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


                                                        <div class="margin-bottom-0 clearfix">
                                                            <div
                                                                class="inline-block pull-left  margin-bottom-15 margin-right-10">
                                                                <input type="text" class="form-control input-sm"
                                                                    placeholder="Search">
                                                            </div>
                                                            <!-- <div
                                                                class="inline-block pull-left   margin-bottom-15 margin-right-10">
                                                                <select class="form-control input-sm">
                                                                    <option>Sort by</option>
                                                                    <option>Max Rating</option>
                                                                    <option>Min Rating</option>
                                                                    <option>Status: Online</option>
                                                                    <option>Max Voilations</option>
                                                                    <option>Min Voilations</option>
                                                                </select>
                                                            </div> -->
                                                            <div
                                                                class="inline-block  pull-left  margin-bottom-15 margin-right-10">
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
                                                                            <div class="input-group-addon">
                                                                                to</div>
                                                                            <input type="text" class="form-control date"
                                                                                value="10/25/17">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-15 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="vscroll padding-right-0"
                                                                    style="height:auto;">
                                                                    <table
                                                                        class="table  table-bordered table-condensed1 table-striped1 margin-bottom-0"
                                                                        id="table">
                                                                        <thead>
                                                                            <tr class="">
                                                                                <th class="text-left">Name</th>
                                                                                <th class="text-left">Status</th>
                                                                                <th class="text-left">Current State
                                                                                </th>
                                                                                <th class="text-left">Rating</th>
                                                                                <th class="text-left">Violations
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img2.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Joe
                                                                                                Denly
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">02</td>
                                                                                <td class="text-left hidden">Technical
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Ivar
                                                                                                Banega
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Operational</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">03</td>
                                                                                <td class="text-left hidden">Operational
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img2.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Philippe
                                                                                                Coutinho
                                                                                            </a>
                                                                                            <br>
                                                                                            <i class="small">Service</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            3.5</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">06</td>
                                                                                <td class="text-left hidden">Service
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Luis
                                                                                                Suarez
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-danger ">
                                                                                        Offline</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="red-700 inline-block">
                                                                                        Idle </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">07</td>
                                                                                <td class="text-left hidden">Technical
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Aurthr
                                                                                                Vidal
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Operational</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-wgreyarning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">05</td>
                                                                                <td class="text-left hidden">Operational
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">John
                                                                                                Dynamo
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            2 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">07</td>
                                                                                <td class="text-left hidden">Technical
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Neymar
                                                                                                Jr.
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">04</td>
                                                                                <td class="text-left hidden">Technical
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                                <nav>
                                                                    <ul class="pagination pagination-sm ">
                                                                        <li class="pagination-prev disabled">
                                                                            <a href="javascript:void(0)"><span
                                                                                    class="icon ion-android-arrow-back"></span></a>
                                                                        </li>
                                                                        <li class="pagination-items active"
                                                                            data-value="1">
                                                                            <a href="javascript:void(0)">1</a>
                                                                        </li>
                                                                        <li class="pagination-items" data-value="2">
                                                                            <a href="javascript:void(0)">2</a>
                                                                        </li>
                                                                        <li class="pagination-items" data-value="3">
                                                                            <a href="javascript:void(0)">3</a>
                                                                        </li>
                                                                        <li class="pagination-items" data-value="4">
                                                                            <a href="javascript:void(0)">4</a>
                                                                        </li>
                                                                        <li class="pagination-items" data-value="5">
                                                                            <a href="javascript:void(0)">5</a>
                                                                        </li>
                                                                        <li class="pagination-next"><a
                                                                                href="javascript:void(0)"><span
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