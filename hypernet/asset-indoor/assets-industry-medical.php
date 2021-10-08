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


            <div class="page-header page-header-bordered shadow">
                <!-- <div class="row">
                <div class="col-lg-8">

                    <div class="media">
                        <div class="media-left">
                            <img src="images/excel-middle-east-logo.jpg" class="img-bordered" style="height:55px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Excel Middle East</h3>
                            <div> <b>Code: E1071</b> | Contarct Expiray: 25 Mar 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-right">


                        <button type="button" class="btn btn-sm btn-info  ">
                            <span class="text">Details</span>

                        </button>
                    </div>
                </div>
            </div>


            <hr class="margin-bottom-10 margin-top-10" /> -->
                <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Location</label>
                        <select class="form-control selectpicker " data-width="100%" title="Location"
                            data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                            <option data-subtext="" selected> All </option>
                            <option data-subtext="">Blue Road, Malburg </option>
                            <option data-subtext=""> Hanna Road, East </option>
                        </select>
                    </div>
                </div>

            

                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Hospital</label>
                        <select class="form-control selectpicker " data-width="100%" title="Location"
                            data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                            <option data-subtext="" selected> All </option>
                            <option data-subtext="">HOP01 </option>
                            <option data-subtext=""> HOP02 </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Type</label>
                        <select class="form-control selectpicker " data-width="100%" title="Location"
                            data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                            <option data-subtext="" selected> All </option>
                            <option data-subtext="">Movealbe </option>
                            <option data-subtext=""> Fixed </option>
                        </select>
                    </div>
                </div>
            </div> -->





                <!-- <div class="page-header-actions">



                <button type="button" class="btn btn-sm btn-info  ">
                    <span class="text">View Details</span>

                </button>
            </div> -->
            </div>


            <div class="page-content  container-fluid">



                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default  card shadow light">
                            <div class="panel-heading bg-green-600 margin-bottom-0">
                                <h3 class=" panel-title font-weight-600 white text-center"> Real time asset tracking
                                </h3>

                            </div>
                            <div class=" panel-body bg-blue-5001">


                                <div class="text-center margin-bottom-10 margin-top-15 font-size-18">

                                    <span class="label" style="background: #e98f2e;">Wheel Chair</span>
                                    <span class="label" style="background: #279566 ;">Stretcher</span>
                                    <span class="label" style="background: #d6494b;">X-Ray Machine</span>


                                </div>


                                <div class="floorbox padding-15">
                                    <div class="photo" style="background-image: url(images/floor-plan2.png); height: 550px"></div>

                                    <span class="icon" style="left:80%; top:25%;">
                                        <a data-toggle="popover" data-original-title="Wheel Chair" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                            <img src="images/micon (1).png" alt="img" height="40">
                                        </a>
                                    </span>
                                    <span class="icon" style="left:68%; top:26%;">
                                        <a data-toggle="popover" data-original-title="Wheel Chair" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                            <img src="images/micon (1).png" alt="img" height="40">
                                        </a>
                                    </span>
                                    <span class="icon" style="left:81%; top:36%;">
                                        <a data-toggle="popover" data-original-title="Wheel Chair" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                            <img src="images/micon (1).png" alt="img" height="40">
                                        </a>
                                    </span>

                                    <span class="icon" style="left:24%; top:26%;">
                                        <a data-toggle="popover" data-original-title="Wheel Chair" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                            <img src="images/micon (1).png" alt="img" height="40">
                                        </a>
                                    </span>


                                    <span class="icon" style="left:50%; top:77%;">
                                        <a data-toggle="popover" data-original-title="Stretcher" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                            <img src="images/micon (2).png" alt="img" height="40">
                                        </a>
                                    </span>

                                    <span class="icon" style="left:54%; top:77%;">
                                        <a data-toggle="popover" data-original-title="Stretcher" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                            <img src="images/micon (2).png" alt="img" height="40">
                                        </a>
                                    </span>

                                    <span class="icon" style="left:20%; top:37%;">
                                        <a data-toggle="popover" data-original-title="X-Ray Machine" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                                            <img src="images/micon (3).png" alt="img" height="40">
                                        </a>
                                    </span>
                                    <div id="popover-content-start1" class="hide">
                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                            <tr>
                                                <th> Id </th>
                                                <td class="">2156</td>
                                            </tr>

                                        </table>
                                    </div>

                                    <div id="popover-content-start2" class="hide">
                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                            <tr>
                                                <th> Id </th>
                                                <td class="">2156</td>
                                            </tr>

                                        </table>
                                    </div>

                                    <div id="popover-content-start3" class="hide">
                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                            <tr>
                                                <th> Id </th>
                                                <td class="">2156</td>
                                            </tr>

                                        </table>
                                    </div>



                                </div>

                            </div>

                        </div>



                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default  card shadow light">

                        <div class="panel-heading bg-green-600 ">
                                <h3 class=" panel-title font-weight-600 white text-center"> Business Insights
                                </h3>

                            </div>
                          
                            <div class=" panel-body bg-blue-5001">

                                <div class="row no-space shadow card margin-bottom-30">

                                    <div class="">
                                        <div class="slikslider margin-bottom-0 bg-green-800  padding-left-30 padding-right-30 " id="slikslider-types">
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative  card  hover     white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase pointer " onclick="window.location.href='assets-industry-medical-machinery.php'">
                                                            Machinery

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1900
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1700</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">200</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative   card  hover    white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Lab Equipment

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1342
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1200</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">142</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative  card  hover     white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Oxygen Cylinder

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1300
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1250</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative  card  hover     white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Safty Kits

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1300
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1250</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">50</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative   card  hover    white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Tools & Equipments

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1439
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1300</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">139</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative   card  hover    white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Stretchers

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1130
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1050</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">80</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative    card  hover   white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Wheelchair

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1200
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1100</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">100</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div>
                                                    <div class="padding-15  text-center relative   card  hover    white">
                                                        <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                                            Beds

                                                            <div class="font-size-18 font-weight-600 margin-top-10">
                                                                1750
                                                            </div>
                                                        </div>
                                                        <div class="row no-space bg-green-700">
                                                            <div class="col-md-6">
                                                                <div class="     font-size-10 padding-5  ">
                                                                    In Use
                                                                    <div class="">1725</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="    font-size-10 padding-5  ">
                                                                    Idle
                                                                    <div class="">25</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <script>
                                            $('#slikslider-types').slick({
                                                infinite: false,
                                                slidesToShow: 6,
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




                                <div class="row">

                                    <div class="col-lg-4  ">


                                        <div class="panel panel-default  card shadow light">
                                            <div class="panel-heading">
                                                <h3 class="panel-title font-weight-600">Count By Class</h3>

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
                                                    <div id="chart-alerts1"></div>
                                                    <script>
                                                        var simple_line_class11;
                                                        $(document).ready(function ($) {
                                                            (function () {
                                                                simple_line_class11 = c3.generate({
                                                                    bindto: '#chart-alerts1',
                                                                    size: {
                                                                        height: 300,
                                                                    },
                                                                    legend: {
                                                                        show: true,
                                                                        position: 'bottom',
                                                                    },
                                                                    data: {
                                                                        columns: [
                                                                            ['Machines ', 25,],
                                                                            ['Lab Equipment ', 75],
                                                                            ['Oxygen Concentrator ', 25,],
                                                                            ['Safty Kits ', 25,],
                                                                            ['Tools ', 75],
                                                                            ['Stretcher ', 75],
                                                                            ['Wheelchair ', 25,],

                                                                            ['Ventilator ', 75],

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
                                                                            ratio: 0.1
                                                                        }
                                                                    }
                                                                });
                                                            })();
                                                        });
                                                    </script>
                                                    <script>

                                                        $("#mrq-dd-class1").on('change', function () {

                                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                                simple_line_class11.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['Machines ', 25,],
                                                                        ['Lab Equipment ', 75],
                                                                        ['Oxygen Concentrator ', 25,],
                                                                        ['Safty Kits ', 25,],
                                                                        ['Tools ', 75],
                                                                        ['Stretcher ', 75],
                                                                        ['Wheelchair ', 25,],

                                                                        ['Ventilator ', 75],
                                                                    ],
                                                                });
                                                            }
                                                            else {
                                                                simple_line_class11.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['Machines ', 125,],
                                                                        ['Lab Equipment ', 175],
                                                                        ['Oxygen Concentrator ', 125,],
                                                                        ['Safty Kits ', 125,],
                                                                        ['Tools ', 175],
                                                                        ['Stretcher ', 175],
                                                                        ['Wheelchair ', 125,],

                                                                        ['Ventilator ', 175],
                                                                    ],
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                        </div>



                                    </div>


                                    <div class="col-lg-4  ">


                                        <div class="panel panel-default  card shadow light">
                                            <div class="panel-heading">
                                                <h3 class="panel-title font-weight-600">Top 5 Most Used Assets</h3>

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
                                                    <div id="chart-hours"></div>
                                                    <script>
                                                        var simple_line_class21;
                                                        $(document).ready(function ($) {
                                                            (function () {
                                                                simple_line_class21 = c3.generate({
                                                                    bindto: '#chart-hours',
                                                                    size: {
                                                                        height: 300,
                                                                    },
                                                                    legend: {
                                                                        show: false,
                                                                        position: 'bottom',
                                                                    },
                                                                    data: {
                                                                        columns: [
                                                                            ['Numbers', 200, 100, 100, 158, 355],
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
                                                                            categories: ['Machines', 'Lab Equipment', 'Oxygen Concentrator', 'Safty Kits', 'Tools']

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

                                                        $("#mrq-dd-class2").on('change', function () {

                                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                                simple_line_class21.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['Numbers', 200, 100, 100, 158, 355],
                                                                    ],
                                                                });
                                                            }
                                                            else {
                                                                simple_line_class21.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['Numbers', 100, 200, 100, 358, 255],
                                                                    ],
                                                                });
                                                            }
                                                        });
                                                    </script>
                                                </div>

                                            </div>

                                        </div>



                                    </div>
                                    <div class="col-lg-4  ">


                                        <div class="panel panel-default  card shadow light">
                                            <div class="panel-heading">
                                                <h3 class="panel-title font-weight-600">Count By Stauts</h3>

                                            </div>
                                            <div class="panel-body ">
                                                <div class="margin-bottom-10 clearfix text-center">
                                                    <div class="form-group1">
                                                        <div class="inline-block">
                                                            <select class="form-control input-sm" id="mrq-dd-class3">
                                                                <option>This Month </option>
                                                                <option>This Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row no-space text-center bg-green-100 padding-10 margin-bottom-20">
                                                    <div class="col-xs-4">
                                                        <div class="">
                                                            <div class="font-size-14">
                                                                <div class="margin-bottom-5"> In Use
                                                                </div>

                                                                <div class="" id="v1">
                                                                    200
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="">
                                                            <div class="font-size-14">
                                                                <div class="margin-bottom-5">Idle</div>
                                                                <div class="" id="v2">252

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <div class="">
                                                            <div class="font-size-14">
                                                                <div class="margin-bottom-5"> Maintenances</div>
                                                                <div class="" id="v3"> 119

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="chartbox">
                                                    <div id="chart-rrr"></div>
                                                    <script>
                                                        var simple_line_class31;
                                                        $(document).ready(function ($) {
                                                            (function () {
                                                                simple_line_class31 = c3.generate({
                                                                    bindto: '#chart-rrr',
                                                                    size: {
                                                                        height: 210,
                                                                    },
                                                                    legend: {
                                                                        show: true,
                                                                        position: 'bottom',
                                                                    },
                                                                    data: {
                                                                        columns: [
                                                                            ['In USe ', 25,],
                                                                            ['Idle ', 75],
                                                                            ['Maintenances ', 75],

                                                                        ],
                                                                        type: 'donut',
                                                                    },
                                                                    color: {
                                                                        pattern: ['#054158', '#1f6aa3', '#6494b1']
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
                                                    <script>

                                                        $("#mrq-dd-class3").on('change', function () {

                                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                                simple_line_class31.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['In USe ', 25,],
                                                                        ['Idle ', 75],
                                                                        ['Maintenances ', 75],

                                                                    ],
                                                                });
                                                            }
                                                            else {
                                                                simple_line_class31.load({
                                                                    unload: true,
                                                                    columns: [
                                                                        ['In USe ', 125,],
                                                                        ['Idle ', 175],
                                                                        ['Maintenances ', 175],

                                                                    ],
                                                                });
                                                            }

                                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                                $("#v1").text('200')
                                                                $("#v2").text('252')
                                                                $("#v3").text('119')
                                                            }
                                                            else {
                                                                $("#v1").text('600')
                                                                $("#v2").text('852')
                                                                $("#v3").text('719')
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