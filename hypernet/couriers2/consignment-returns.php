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

            <div class="row ">

                <div class="col-lg-4">
                    <div class="widget  white margin-bottom-30 shadow card">
                        <div class="padding-15 bg-orange-700 " style="height:220px;">
                            <div class="text-center padding-top-0">
                                <div class="">
                                    <div class=" font-size-18 margin-bottom-20">Total Returns</div>
                                    <div class="dropdown margin-bottom-20 ">
                                        <select type="button" class="btn bg-orange-800 white btn-xs text-center "
                                            id="mrq-dd-violations">
                                            <option>This Week</option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                    <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                        150 </div>

                                    <div class="font-size-14 margin-bottom-10" id="mrq-v21"> Returns </div>
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
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget  white margin-bottom-30 shadow card">
                        <div class="padding-15 bg-green-700 " style="height:220px;">
                            <div class="text-center padding-top-0">
                                <div class="">


                                    <div class=" font-size-18 margin-bottom-20">Most Return City/Warehouse</div>

                                    <div class="dropdown margin-bottom-20 ">
                                        <select type="button" class="btn bg-green-800 white btn-xs"
                                            id="mrq-dd-maintenance">
                                            <option>This Week</option>
                                            <option>This Month</option>
                                        </select>

                                    </div>
                                    <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1">
                                        Lahore </div>

                                    <div class="font-size-14 margin-bottom-10" id="mrq-m2"> 160 Returns
                                    </div>
                                    <div class="font-size-10">
                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                        <span class="" id="mrq-m3">18%</span>
                                        <span class="" id="mrq-m4">less than last week</span>
                                    </div>
                                </div>

                                <script>
                                    $("#mrq-dd-maintenance").on('change', function () {
                                        debugger
                                        if (this.value.trim().toLowerCase().includes('week')) {
                                            $("#mrq-m1").text(' Lahore')
                                            $("#mrq-m2").text('160 Returns')
                                            $("#mrq-m3").text('18%')
                                            $("#mrq-m4").text('less than last week')
                                        }
                                        else {
                                            $("#mrq-m1").text('Karachi')
                                            $("#mrq-m2").text('190 Returns')
                                            $("#mrq-m3").text('19%')
                                            $("#mrq-m4").text('more than last month')
                                        }
                                    })

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget  white margin-bottom-30 shadow card">
                        <div class="padding-15 bg-teal-700 " style="height:220px;">
                            <div class="text-center padding-top-0">
                                <div class="">
                                    <div class=" font-size-18 margin-bottom-20">Most Return Fleet</div>
                                    <div class="dropdown margin-bottom-20 ">
                                        <select type="button" class="btn bg-teal-800 white btn-xs text-center "
                                            id="mrqs-dd-violations">
                                            <option>This Week</option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                    <div class="font-size-18  margin-bottom-10 font-weight-600" id="mrqs-v1">
                                        LZR 5478 (Marshal Goods) </div>

                                    <div class="font-size-14 margin-bottom-10" id="mrqs-v2"> 55 Returns </div>
                                    <div class="font-size-10">
                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                        <span class="" id="mrqs-v3">17%</span>
                                        <span class="" id="mrqs-v4">more than last week</span>
                                    </div>
                                    <script>
                                        $("#mrqs-dd-violations").on('change', function () {
                                            if (this.value.trim().toLowerCase().includes('week')) {
                                                $("#mrqs-v1").text('   LZR 5478 (Marshal Goods) ')
                                                $("#mrqs-v2").text('55 Returns')
                                                $("#mrqs-v3").text('17%')
                                                $("#mrq-v4").text('more than last week')
                                            }
                                            else {
                                                $("#mrqs-v1").text('   LZR 186  (Marshal Goods) ')
                                                $("#mrqs-v2").text('150 Returns')
                                                $("#mrqs-v3").text('13%')
                                                $("#mrqs-v4").text('more than last month')
                                            }
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>




            <div class="row ">
                <div class="col-md-6">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="panel panel-default  card light ">
                                <div class="panel-heading margin-bottom-0 ">
                                    <h3 class="panel-title font-weight-600 ">Returns & Scheduled Statistics
                                    </h3>
                                </div>
                                <div class="panel-body padding-15 bg-green-1001 ">



                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-fff">

                                                    <option>This Year</option>
                                                    <option>This Month </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-vvvvv"></div>
                                        <script>
                                            var simple_line_chartfff;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chartfff = c3.generate({
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
                                                                ['Returns', 10, 50, 70, 50, 90, 120, 90, 170, 185, 200, 250],
                                                                ['Scheduled', 3, 112, 55, 25, 15, 150, 25, 119, 115, 111, 310],

                                                            ],
                                                            type: 'area-spline',
                                                            types: {
                                                                Current_Vistors: 'spline-area',
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
                                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: 'Returns ',
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
                                            $("#mrq-dd-fff").on('change', function () {
                                                if (this.value.trim().toLowerCase().includes('month')) {
                                                    simple_line_chartfff.load({
                                                        unload: true,
                                                        columns: [

                                                            ['Returns', 10, 50, 70, 50, 90, 120, 90, 170, 185, 200, 250],
                                                            ['Scheduled', 3, 112, 55, 25, 15, 150, 25, 119, 115, 111, 310],
                                                        ],
                                                    });
                                                }
                                                else {
                                                    simple_line_chartfff.load({
                                                        unload: true,
                                                        columns: [

                                                            ['Returns', 110, 150, 170, 50, 190, 120, 90, 170, 1185, 1200, 250],
                                                            ['Scheduled', 13, 112, 155, 25, 115, 150, 25, 119, 1115, 111, 310],
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

                <div class="col-md-6">

                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Reason Statistics</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-10 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-Returns">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-Returns"></div>
                                <script>
                                    var simple_line_chart_Returns
                                    $(document).ready(function ($) {
                                        (function () {
                                            simple_line_chart_Returns = c3.generate({
                                                bindto: '#chart-Returns',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'center',
                                                },
                                                data: {
                                                    columns: [

                                                        ['Return', 124, 131, 199, 115, 117, 170],
                                                    ],
                                                    type: 'bar',
                                                },
                                                color: {
                                                    //  pattern: ['#2b9646']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: '',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Unsuccessful', 'Recipient refused ', 'Forbidden items', 'Incorrectly packed', 'Damaged', 'Incorrect address']
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
                                $("#mrq-dd-Returns").on('change', function () {
                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart_Returns.load({
                                            unload: true,
                                            columns: [

                                                ['Return', 124, 131, 199, 115, 117, 170],
                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart_Returns.load({
                                            unload: true,
                                            columns: [

                                                ['Return', 2124, 2131, 3111, 2115, 2117, 2131],
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
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Unsuccessful"> Unsuccessful</a></li>
                                <li class=""><a data-toggle="tab" href="#Recipient">Recipient refused</a></li>
                                <li class=""><a data-toggle="tab" href="#Forbidden"> Forbidden items</a></li>
                                <li class=""><a data-toggle="tab" href="#Incorrectly">Incorrectly packed </a></li>
                                <li class=""><a data-toggle="tab" href="#Damaged">Damaged </a></li>
                                <li class=""><a data-toggle="tab" href="#Incorrect">Incorrect address </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Unsuccessful">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="vscroll padding-right-10" style="">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered  margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>
                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-left"></th>
                                                            <th class="text-left"></th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 7.2 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowg"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowg">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">
                                                                                                Sender's Address: Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RASD150</a> </td>


                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>

                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowh"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowh">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowi">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowj"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowj">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowk"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowk">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1.7 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>





                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="Recipient">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">




                                            <div class="vscroll padding-right-10" style="">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered  margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>
                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-left"></th>
                                                            <th class="text-left"></th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 7.2 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowg"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowg">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">
                                                                                                Sender's Address: Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RASD150</a> </td>


                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>

                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowh"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowh">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowi">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowj"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowj">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowk"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowk">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1.7 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>





                                                    </tbody>
                                                </table>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Forbidden">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="vscroll padding-right-10" style="">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered  margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>
                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-left"></th>
                                                            <th class="text-left"></th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 7.2 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowg"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowg">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">
                                                                                                Sender's Address: Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RASD150</a> </td>


                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>

                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowh"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowh">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowi">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowj"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowj">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowk"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowk">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1.7 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>





                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Incorrectly">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="vscroll padding-right-10" style="">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered  margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>
                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-left"></th>
                                                            <th class="text-left"></th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 7.2 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowg"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowg">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">
                                                                                                Sender's Address: Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RASD150</a> </td>


                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>

                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowh"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowh">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowi"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowi">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowj"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowj">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="Carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Karachi</td>
                                                            <td class="text-left">Lahore</td>
                                                            <td class="text-center"> <button
                                                                    class="btn btn-success btn-xs"
                                                                    data-target="#editpop1" data-toggle="modal">
                                                                    Schedule </button> </td>




                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowk"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowk">
                                                                    <div class="margin-10 clearfix row no-space ">
                                                                        <div class="col-lg-12  ">
                                                                            <div class="padding-0   ">
                                                                                <table
                                                                                    class="table  table-condensed margin-bottom-0 ">

                                                                                    <tbody>
                                                                                        <tr>

                                                                                            <td class="text-left">Marco
                                                                                                Angelo : House 390,
                                                                                                Street 21. 0301-9087637
                                                                                            </td>
                                                                                            <td class="text-left">Gross
                                                                                                Weight: 1.7 Kg</td>
                                                                                            <td class="text-left">
                                                                                                Dimensions:12*30 Kg</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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














    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>