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
    <link rel=" stylesheet" href="css/style.css">
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
                        <div class="row">
                            <div class="col-md-6">

                                <div class="widget-content padding-10 bg-blue-700 white card height-150 text-center relative">
                                    <div class="padding-15 bg-blue-700 " style="height:150px;">
                                        <div class="text-center padding-top-0">
                                            <div class="">
                                                <div class="font-size-14" style="margin-top: -13px;">Total Consignments </div>
                                                <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                    <select type="button" class="btn bg-blue-800 btn-block1 white dropdown-toggle btn-xs text-center " data-toggle="dropdown" id="mrq-dd-cowchange">


                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                    </select>
                                                </div>
                                                <div class="counter-number font-size-20  margin-bottom-10" style="margin-top: -9px;"><img src="images/icon-parcel-delievered.png" alt="img" height="40"> <span id="cow2">1800</span>
                                                </div>


                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="" id="cow3">13%</span>
                                                    <span class="" id="cow4">more than last week</span>
                                                </div>
                                                <script>
                                                    $("#mrq-dd-cowchange").on('change', function () {
                                                        if (this.value.trim().toLowerCase().includes('week')) {
                                                            $("#cow1").text(' CW-72')
                                                            $("#cow2").text('1800')
                                                            $("#cow3").text('11%')
                                                            $("#cow4").text('more than last week')
                                                        }
                                                        else {
                                                            $("#cow1").text(' CW-34')
                                                            $("#cow2").text('3200')
                                                            $("#cow3").text('17%')
                                                            $("#cow4").text('more than last month')
                                                        }
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-teal-600 white card height-150 text-center relative">
                                        <div class="padding-15" style="height:150px;">
                                            <div class="text-center padding-top-0">
                                                <div class="">
                                                    <div class="font-size-16" style="margin-top: -13px;">Consignment Delivered
                                                    </div>
                                                    <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                        <select type="button" class="btn bg-teal-700 btn-block1 white dropdown-toggle btn-xs text-center " data-toggle="dropdown" id="mrq-dd-cowchange1">



                                                            <option>This Week</option>
                                                            <option>This Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="counter-number font-size-20 margin-bottom-10" style="margin-top: -10px;"><img src="images/trucks-online.png" alt="img" height="40"><span id="cow11"> 180</span>
                                                    </div>
                                                    <div class="font-size-10">
                                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                        <span class="" id="cow12">11%</span>
                                                        <span class="" id="cow13">more than last week</span>
                                                    </div>
                                                    <script>
                                                        $("#mrq-dd-cowchange1").on('change', function () {
                                                            if (this.value.trim().toLowerCase().includes('week')) {
                                                                $("#cow11").text(' 180 kg')
                                                                $("#cow12").text('11%')
                                                                $("#cow13").text('more than last week')
                                                            }
                                                            else {
                                                                $("#cow11").text(' 550')
                                                                $("#cow12").text('17%')
                                                                $("#cow13").text('more than last month')
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


                            <div class="col-md-12">

                                <div class="">
                                    <div class="slikslider margin-bottom-0 bg-teal-500 card  " id="slikslider-types">
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10 bg-teal-500 height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0   ">
                                                            <div class="font-size-14 ">
                                                                In Warehouse
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">100</b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            60 Online
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
                                                                In Transit

                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 50 </b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            40 Online
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
                                                                Delivered
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 100 </b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            50 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10   height-90 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0 ">
                                                        <div class="font-size-14 ">
                                                            Scheduled
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class=" font-size-18"> 100 </b>
                                                    </div>
                                                    <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                        50 Online
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <script>
                                    $('#slikslider-types').slick({
                                        infinite: false,
                                        slidesToShow: 3,
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

                    <div class="col-lg-6">

                        <div class="row ">

                            <div class="col-lg-4">





                                <div class="widget  white margin-bottom-30 shadow card" style="height:270px;">
                                    <div class="padding-15 bg-orange-700 ">
                                        <div class="text-center padding-top-0">
                                            <div class="">
                                                <div class=" font-size-18 margin-bottom-10">Home Pickups</div>
                                                <div class="dropdown margin-bottom-10 ">
                                                    <select type="button" class="btn bg-orange-800 white btn-xs text-center " id="mrq-dd-violations">
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                    </select>
                                                </div>
                                                <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                                    150 </div>

                                                <div class="margin-top-0  margin-bottom-20 ">
                                                    <i> <img src="images/self-drop.png" alt="img" height="30" class=""> </i>
                                                </div>

                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="" id="mrq-v3">17%</span>
                                                    <span class="" id="mrq-v4">more than last week</span>
                                                </div>


                                                <script>
                                                    $("#mrq-dd-violations").on('change', function () {
                                                        if (this.value.trim().toLowerCase().includes('week')) {
                                                            $("#mrq-v1").text('150 ')
                                                            $("#mrq-v2").text('55 Fleets')
                                                            $("#mrq-v3").text('17%')
                                                            $("#mrq-v4").text('more than last week')
                                                        }
                                                        else {
                                                            $("#mrq-v1").text('	250 ')
                                                            $("#mrq-v2").text('750')
                                                            $("#mrq-v3").text('13%')
                                                            $("#mrq-v4").text('more than last month')
                                                        }
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row no-space bottom bg-orange-800 padding-top-10 padding-bottom-10">
                                        <div class="col-xs-6" style="border-right:0px solid #999;">
                                            <div class="counter ">
                                                <div class="counter-label ">Processed</div>
                                                <div class="font-size-18">
                                                    90
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter ">
                                                <div class="counter-label ">Unprocessed</div>
                                                <div class="font-size-18">
                                                    30
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget  white margin-bottom-30 shadow card" style="height:270px;">
                                    <div class="padding-15 bg-green-700 ">
                                        <div class="text-center padding-top-0">
                                            <div class="">


                                                <div class=" font-size-18 margin-bottom-10">Self Drop</div>

                                                <div class="dropdown margin-bottom-10 ">
                                                    <select type="button" class="btn bg-green-800 white btn-xs" id="mrq-dd-maintenance">
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                    </select>

                                                </div>
                                                <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1">250</div>
                                                <div class="margin-top-0  margin-bottom-20">
                                                    <i> <img src="images/dhl-delivery.png" alt="img" height="30" class=""> </i>
                                                </div>
                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="" id="mrq-m3">19%</span>
                                                    <span class="" id="mrq-m4">more than last month</span>
                                                </div>
                                            </div>

                                            <script>
                                                $("#mrq-dd-maintenance").on('change', function () {
                                                    debugger
                                                    if (this.value.trim().toLowerCase().includes('week')) {
                                                        $("#mrq-m1").text('160')
                                                        $("#mrq-m2").text('Consignments')
                                                        $("#mrq-m3").text('18%')
                                                        $("#mrq-m4").text('less than last week')
                                                    }
                                                    else {
                                                        $("#mrq-m1").text('250')
                                                        $("#mrq-m2").text('Consignments')
                                                        $("#mrq-m3").text('19%')
                                                        $("#mrq-m4").text('more than last month')
                                                    }
                                                })

                                            </script>
                                        </div>
                                    </div>
                                    <div class="row no-space bottom bg-green-800 padding-top-10 padding-bottom-10">
                                        <div class="col-xs-6" style="border-right:0px solid #999;">
                                            <div class="counter ">
                                                <div class="counter-label ">Processed</div>
                                                <div class="font-size-18">
                                                    90
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter ">
                                                <div class="counter-label ">Unprocessed</div>
                                                <div class="font-size-18">
                                                    30
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget  white margin-bottom-30 bg-teal-700 shadow card" style="height:270px;">
                                    <div class="padding-15  ">
                                        <div class="text-center padding-top-0">
                                            <div class="">
                                                <div class=" font-size-18 margin-bottom-10">Third Party</div>
                                                <div class="dropdown margin-bottom-10 ">
                                                    <select type="button" class="btn bg-teal-800 white btn-xs text-center " id="mrqs-dd-violations">
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                    </select>
                                                </div>
                                                <div class="font-size-18  margin-bottom-10 font-weight-600" id="mrqs-v1">
                                                    55 </div>
                                                <div class="margin-top-0  margin-bottom-20">
                                                    <i> <img src="images/third-party.png" alt="img" height="30" class=""> </i>
                                                </div>
                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="" id="mrqs-v3">17%</span>
                                                    <span class="" id="mrqs-v4">more than last week</span>
                                                </div>
                                                <script>
                                                    $("#mrqs-dd-violations").on('change', function () {
                                                        if (this.value.trim().toLowerCase().includes('week')) {
                                                            $("#mrqs-v1").text('55')
                                                            $("#mrqs-v2").text('Consignments')
                                                            $("#mrqs-v3").text('17%')
                                                            $("#mrq-v4").text('more than last week')
                                                        }
                                                        else {
                                                            $("#mrqs-v1").text('150')
                                                            $("#mrqs-v2").text('Consignments')
                                                            $("#mrqs-v3").text('13%')
                                                            $("#mrqs-v4").text('more than last month')
                                                        }
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-space bottom bg-teal-800 padding-top-10 padding-bottom-10">
                                        <div class="col-xs-6" style="border-right:0px solid #999;">
                                            <div class="counter ">
                                                <div class="counter-label ">Picked</div>
                                                <div class="font-size-18">
                                                    90
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="counter ">
                                                <div class="counter-label ">Scheduleed</div>
                                                <div class="font-size-18">
                                                    30
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
                    <div class="col-lg-4">
                        <div class="panel panel-default shadow ">

                            <div class="panel-heading  margin-bottom-0 ">

                                <h3 class="panel-title "> <b> Returns Statistics</b></h3>
                            </div>

                            <div class="panel-body padding-15">
                                <div class="dropdown margin-bottom-20  text-center"">
                               <select type=" button" class=" btn-xs text-center " id="mrq-dd-Consignments">
                                    <option>This Week</option>
                                    <option>This Month</option>
                                    </select>

                                </div>
                                <div class="chartbox">
                                    <div id="chart-alerts1"></div>
                                    <script>
                                        var chartuu;
                                        $(document).ready(function ($) {
                                            (function () {
                                                chartuu = c3.generate({
                                                    bindto: '#chart-alerts1',
                                                    size: {
                                                        height: 330,
                                                    },
                                                    legend: {
                                                        show: true,
                                                        position: 'bottom',
                                                    },
                                                    data: {
                                                        columns: [
                                                            ['Home Pickups', 650,],
                                                            ['Self Drop ', 450],
                                                            ['Third Party', 212],

                                                        ],
                                                        type: 'pie',
                                                    },
                                                    color: {
                                                        // pattern: ['#8a5e8f', '#11847e', '#c4bea9']
                                                    },
                                                    axis: {
                                                        rotated: false,
                                                        x: {
                                                            label: {
                                                                text: 'Activities',
                                                                position: 'outer-center'
                                                            },
                                                            type: 'category',
                                                            categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                                                        },
                                                        y: {
                                                            label: {
                                                                text: 'No of Activities ',
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
                                        $("#mrq-dd-Consignments").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('week')) {
                                                chartuu.load({
                                                    unload: true,
                                                    columns: [
                                                        ['Home Pickups', 650,],
                                                        ['Self Drop ', 450],
                                                        ['Third Party', 212],

                                                    ],
                                                });
                                            }
                                            else {
                                                chartuu.load({
                                                    unload: true,
                                                    columns: [
                                                        ['Home Pickups', 1650,],
                                                        ['Self Drop ', 1450],
                                                        ['Third Party', 1212],
                                                    ],
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="panel panel-default shadow card  light padding-0 ">
                            <div class="panel-heading margin-bottom-0 ">

                                <h3 class="panel-title "> <b> Delivery Statistics</b></h3>
                            </div>
                            <div class="panel-body padding-15">

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="margin-bottom-10 clearfix text-center">

                                            <select type=" button" class=" btn-xs text-center " id="mrq-dd-Utilization">
                                                <option>This Week</option>
                                                <option>This Month</option>
                                            </select>

                                        </div>

                                    </div>

                                    <div class="chartbox" class="">
                                        <div id="chart-fff"></div>
                                        <script>
                                            var simple_line_chart;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart = c3.generate({
                                                        bindto: '#chart-fff',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },



                                                        data: {
                                                            columns: [
                                                                ['InWarehouse', 830, 420, 550, 540, 660],
                                                                ['InTransit', 300, 200, 160, 400, 250],
                                                                ['Delivered', 200, 130, 90, 240, 130],
                                                                ['Scheduled', 130, 120, 150, 140, 160],

                                                            ],
                                                            type: 'bar',
                                                            types: {
                                                                InWarehouse: 'line',
                                                                InTransit: 'line',
                                                                Delivered: 'line',
                                                                Scheduled: 'line',

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
                                            $("#mrq-dd-Utilization").on('change', function () {

                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    simple_line_chart.load({
                                                        unload: true,
                                                        columns: [
                                                            ['InWarehouse', 830, 420, 550, 540, 660],
                                                            ['InTransit', 300, 200, 160, 400, 250],
                                                            ['Delivered', 200, 130, 90, 240, 130],
                                                            ['Scheduled', 130, 120, 150, 140, 160],

                                                        ],
                                                    });
                                                }
                                                else {
                                                    simple_line_chart.load({
                                                        unload: true,
                                                        columns: [
                                                            ['InWarehouse', 1830, 1420, 1550, 1540, 1660],
                                                            ['InTransit', 1300, 1200, 160, 400, 250],
                                                            ['Delivered', 200, 1130, 190, 1240, 130],
                                                            ['Scheduled', 130, 1120, 1150, 140, 1160],

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


                                    <div class="padding-20 margin-top-20">
                                        <div class="row no-space1">
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div class="  bg-blue-700 vertical-align padding-10 white  text-center relative ">
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
                                                    <div class="  bg-red-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Avg Completed
                                                                </div>

                                                            </div>
                                                            <b class="font-size-20" id="v2">50</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div class="  bg-green-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Un Assigned
                                                                </div>

                                                            </div>
                                                            <b class="font-size-18" id="v3">22</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="widget shadow card margin-0">
                                                    <div class="  bg-teal-700 vertical-align padding-10 white  text-center relative ">
                                                        <div class="vertical-align-middle">
                                                            <div class="margin-bottom-0 ">

                                                                <div class="font-size-14 margin-bottom-5 ">Expected
                                                                </div>

                                                            </div>
                                                            <b class="font-size-20" id="v4">100</b>
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