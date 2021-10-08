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
<body class="dashboard">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>





    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Milk Yield</a></li>
                <!--<li class="active">Dashboard</li>-->
            </ol>
        </div>


        <div class="page-content  container-fluid">


            <div class="row">
                <div class="col-lg-6">

                    <div class="shadow">
                        <div class="widget-content  bg-blue-700  white relative  margin-bottom-30 padding-0 " style="overflow:hidden;">


                            <div class="padding-left-30 padding-right-30 padding-top-30">
                                <div class="row x">
                                    <div class="col-xs-6">
                                        <div>Total Expected Milk Yield</div>
                                        <div class="font-size-40 text-nowrap"> 14,500 Ltr</div>
                                        <div class="">2% higher than last month</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div>Current Milk Yield</div>
                                        <div class="font-size-30 text-nowrap"> 12,500 Ltr</div>
                                        <div class="font-size-10">4 more days pending this month</div>

                                    </div>
                                </div>
                            </div>
                            <div class="chartbox  " style="margin-bottom:0px;">
                                <div id="chart-home1"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-home1',
                                                size: {
                                                    height: 185,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Milk (Liters)', 130, 140, 170, 180, 180, 180, 150, 160, 100, 100, 150, 250, 31, 250, 31, 160, 100, 100, 150, 250, 31],
                                                    ],
                                                    type: 'line',
                                                },
                                                color: {
                                                    pattern: ['#fff']
                                                },
                                                axis: {

                                                    x: { show: false },
                                                    y: { show: false },

                                                },
                                                bar: {
                                                    width: {
                                                        ratio: 0.4
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
                <div class="col-lg-6">
                    <div class="panel panel-default nav-tabs-horizontal shadow">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Highest Herd Milk Yielding   </a></li>
                                <li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Highest Cow Milk Yielding  </a></li>

                            </ul>
                            <div class="panel-actions">

                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success active ">
                                                <input type="radio" name="multiples" value="banana" checked=""> Top 5
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                <input type="radio" name="multiples">  Top 10
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                <input type="radio" name="multiples" checked=""> Top 20
                                            </label>
                                        </div>
                                    </div>
                                    <div class="chartbox">

                                        <div id="chart-ccccqqq"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-ccccqqq',
                                                        size: {
                                                            height: 200,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title 1', 120, 130, 140, 142, 150, 152, 160, 150, 152, 160],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#f2a654']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Top 10 Herds',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['HR-102', 'HR-105', 'HR-192', 'HR-202', 'HR-402', 'HR-111', 'HR-182', 'HR-552', 'HR-141', 'HR-182']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'Ltr ',
                                                                    position: 'outer-middle'
                                                                },
                                                            },
                                                        },
                                                        bar: {
                                                            width: {
                                                                ratio: 0.5
                                                            }
                                                        },

                                                    });
                                                })();
                                            });
                                        </script>



                                    </div>
                                </div>
                                <div class="tab-pane" id="FeedStatistics" role="tabpanel">


                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success active">
                                                <input type="radio" name="multiples" checked=""> Top 5
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                Top 10
                                            </label>

                                        </div>
                                    </div>
                                    <div class="chartbox">

                                        <div id="chart-eeee"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-eeee',
                                                        size: {
                                                            height: 200,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title1', 180, 170, 165, 172, 174, 170, 173, 142, 160, 155],
                                                                 ['Title2', 120, 115, 110, 105, 112, 110, 113, 112, 110, 143],

                                                            ],
                                                            //  type: 'bar',
                                                            types: {
                                                                Title1: 'bar',
                                                                Title2: 'bar',
                                                            }

                                                        },
                                                        color: {
                                                            pattern: ['#4e97d9', '#f2a654']
                                                        },
                                                        axis: {
                                                            rotated: true,
                                                            x: {
                                                                label: {
                                                                    text: 'This Week',
                                                                    position: 'outer-middle'
                                                                },
                                                                type: 'category',
                                                                categories: ['CW-102', 'CW-105', 'CW-192', 'CW-202', 'CW-402', 'CW-111', 'CW-182', 'CW-552', 'CW-141', 'CW-182']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'Ltr ',
                                                                    position: 'outer-center'
                                                                },
                                                            },
                                                        },
                                                        bar: {
                                                            width: {
                                                                ratio: 0.2
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
                    <div class="">

                    </div>



                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default shadow">
                        <div class="panel-heading bg-green-800 white ">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b>Expected Milk Yield </b></h3>
                        </div>
                        <div class="panel-body ">

                            <div class="margin-left-20 margin-right-20">
                                <div class="slider margin-bottom-0 weekbox darkarrows " id="slikslider-milk">
                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  01/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 66%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">285</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">Current</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  02/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 80%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">300</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">Current</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  03/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">302</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  04/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">250</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">170</span>
                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  05/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">185</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">100</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  06/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">199</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">172</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  07/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">290</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  08/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">304</span>
                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  09/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">210</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="box bg-white font-size-16   text-center  ">
                                            <div class="">
                                                <div class="font-size-14 gray margin-bottom-15  padding-top-15 ">  10/Oct/17</div>
                                                <i> <img src="images/icon_milk_yield.png" alt="img" height="30" class="inline" /> </i>
                                                <div class="progress progress-square progress-xs margin-10 margin-bottom-0 ">
                                                    <div class="progress-bar progress-bar-info" style="width: 0%" role="progressbar"></div>
                                                </div>
                                                <div class="row  margin-0">
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">285</span>
                                                                <div class="font-size-10">Expected</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="padding-10 ">
                                                            <div class="vertical-align-middle">
                                                                <span class="counter-number font-size-16">189</span>

                                                                <div class="font-size-10">n/a</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <script>
                                    $('#slikslider-milk').slick({
                                        infinite: false,
                                        slidesToShow: 7,
                                        slidesToScroll: 1,
                                        dots: false,
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

            <div class="row">


                <div class="col-lg-12">






                    <div class="panel panel-default nav-tabs-horizontal shadow">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Cowlist" role="tab">Cows Milk Yield Statistics </a></li>
                                <li class=""><a data-toggle="tab" href="#MilkStatistics" role="tab">Herds Milk Yield Statistics</a></li>
                            </ul>
                            <!--<div class="panel-actions">
                                <a class="panel-action icon " href="activities-all.html" data-toggle="tooltip" data-original-title="View All"> View All</a>
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>-->
                        </div>

                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Cowlist" role="tabpanel">
                                    <div class="vscroll padding-right-10" style="height:auto;">
                                        <div class="table-responsive ">
                                            <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Cow Id</th>
                                                        <th class="">Herd Id/Name</th>

                                                        <th class="text-center">Lactation Status</th>
                                                        <th class="text-center">Milk Yield <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="ltr" data-placement="top"></span> </th>
                                                        <th class="text-center">Month</th>
                                                        <th class="text-right"> Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <!-------->

                                                    <tr>
                                                        <td><a href="">CW-255</a></td>
                                                        <td>Cowbays  [HR-102]</td>

                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-center"> 25 </td>
                                                        <td class="text-center"> January </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#row2" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="padding-0  ">
                                                            <div class="collapse " id="row2">
                                                                <div class="margin-10 clearfix row no-space ">
                                                                    <div class="col-lg-6  ">
                                                                        <div class="padding-10 bg-cyan-200 white table-responsive ">

                                                                            <div class="vscroll" style="height:200px;">
                                                                                <table class="table  table-condensed  no-border  margin-bottom-0 ">
                                                                                    <thead>
                                                                                        <tr class="">
                                                                                            <th class="" width="200">Date</th>
                                                                                            <th class="" width="200">Day</th>
                                                                                            <th class="text-left">Milk Yield <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="ltr" data-placement="top"></span> </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Sunday</td>
                                                                                            <td>20</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>02/Nov/17</td>
                                                                                            <td>Monday</td>

                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>03/Nov/17</td>
                                                                                            <td>Tuesday</td>

                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>04/Nov/17</td>
                                                                                            <td>Wednessday</td>

                                                                                            <td>19</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>05/Nov/17</td>
                                                                                            <td>Thursday</td>

                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>06/Nov/17</td>
                                                                                            <td>Friday</td>

                                                                                            <td>21</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Saturday</td>

                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>07/Nov/17</td>
                                                                                            <td>Sunday</td>

                                                                                            <td>30</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Monday</td>

                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>08/Nov/17</td>
                                                                                            <td>Tuesday</td>

                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="">CW-355</a></td>
                                                        <td>Cowbays  [HR-182]</td>

                                                        <td class="text-center"><span class="label label-success">Non-Bred	 </span></td>
                                                        <td class="text-center"> 40 </td>
                                                        <td class="text-center"> Feburary </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">CW-235</a></td>
                                                        <td>Cowbays  [HR-202]</td>

                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-center"> 25 </td>
                                                        <td class="text-center"> March </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6" class="padding-0  ">
                                                            <div class="collapse " id="row2">
                                                                <div class="margin-10 clearfix row no-space ">
                                                                    <div class="col-lg-12  ">
                                                                        <div class="padding-10 bg-cyan-200 white table-responsive ">

                                                                            <div class="vscroll" style="height:200px;">
                                                                                <table class="table  table-condensed  no-border  margin-bottom-0 ">
                                                                                    <thead>
                                                                                        <tr class="">
                                                                                            <th class="" width="200">Date</th>
                                                                                            <th class="text-left">Milk Yield <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="ltr" data-placement="top"></span> </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>20</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>02/Nov/17</td>
                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>03/Nov/17</td>
                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>04/Nov/17</td>
                                                                                            <td>19</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>05/Nov/17</td>
                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>06/Nov/17</td>
                                                                                            <td>21</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>07/Nov/17</td>
                                                                                            <td>30</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>08/Nov/17</td>
                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="">CW-355</a></td>
                                                        <td>Cowbays  [HR-182]</td>

                                                        <td class="text-center"><span class="label label-success">Non-Bred	 </span></td>
                                                        <td class="text-center"> 40 </td>
                                                        <td class="text-center"> Feburary </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">CW-235</a></td>
                                                        <td>Cowbays  [HR-202]</td>

                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-center"> 25 </td>
                                                        <td class="text-center"> March </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>




                                    </div>
                                </div>
                                <div class="tab-pane" id="MilkStatistics" role="tabpanel">


                                    <div class="vscroll padding-right-10" style="height:auto;">
                                        <div class="table-responsive ">
                                            <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Herd Id</th>
                                                        <th class=""> Herd Name</th>
                                                        <th class="text-center"> No of Cows</th>
                                                        <th class="text-center">Cows in Lactation</th>
                                                        <th class="text-center">Milk Yield <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="ltr" data-placement="top"></span> </th>
                                                        <th class="text-center">Month</th>
                                                        <th class="text-right"> Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <!-------->

                                                    <tr>
                                                        <td><a href="">HR-255</a></td>
                                                        <td>Cowbays </td>
                                                        <td class="text-center">12</td>
                                                        <td class="text-center">04</td>
                                                        <td class="text-center"> 225 </td>
                                                        <td class="text-center"> January </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#row21" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="padding-0  ">
                                                            <div class="collapse " id="row21">
                                                                <div class="margin-10 clearfix row no-space ">
                                                                    <div class="col-lg-6  ">
                                                                        <div class="padding-10 bg-cyan-200 white table-responsive ">

                                                                            <div class="vscroll" style="height:200px;">
                                                                                <table class="table  table-condensed  no-border  margin-bottom-0 ">
                                                                                    <thead>
                                                                                        <tr class="">
                                                                                            <th class="" width="200">Date</th>
                                                                                            <th class="" width="200">Day</th>
                                                                                            <th class="text-left">Milk Yield <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="ltr" data-placement="top"></span> </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Sunday</td>
                                                                                            <td>20</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>02/Nov/17</td>
                                                                                            <td>Monday</td>

                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>03/Nov/17</td>
                                                                                            <td>Tuesday</td>

                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>04/Nov/17</td>
                                                                                            <td>Wednessday</td>

                                                                                            <td>19</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>05/Nov/17</td>
                                                                                            <td>Thursday</td>

                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>06/Nov/17</td>
                                                                                            <td>Friday</td>

                                                                                            <td>21</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Saturday</td>

                                                                                            <td>22</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>07/Nov/17</td>
                                                                                            <td>Sunday</td>

                                                                                            <td>30</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>01/Nov/17</td>
                                                                                            <td>Monday</td>

                                                                                            <td>18</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>08/Nov/17</td>
                                                                                            <td>Tuesday</td>

                                                                                            <td>25</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="">HR-225</a></td>
                                                        <td>Cowthas </td>
                                                        <td class="text-center">22</td>
                                                        <td class="text-center">04</td>
                                                        <td class="text-center"> 311 </td>
                                                        <td class="text-center"> Feburary </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">HR-302</a></td>
                                                        <td>Cowbays </td>
                                                        <td class="text-center">32</td>
                                                        <td class="text-center">01</td>
                                                        <td class="text-center"> 225 </td>
                                                        <td class="text-center"> March </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">HR-111</a></td>
                                                        <td>Cowbays </td>
                                                        <td class="text-center">17</td>
                                                        <td class="text-center">02</td>
                                                        <td class="text-center"> 302 </td>
                                                        <td class="text-center"> April </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="">HR-895</a></td>
                                                        <td>Cowbays </td>
                                                        <td class="text-center">11</td>
                                                        <td class="text-center">00</td>
                                                        <td class="text-center"> 180 </td>
                                                        <td class="text-center"> May </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">HR-255</a></td>
                                                        <td>Cowbays </td>
                                                        <td class="text-center">12</td>
                                                        <td class="text-center">03</td>
                                                        <td class="text-center"> 225 </td>
                                                        <td class="text-center"> Jun </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#rowxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
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








    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>












</body>
</html>
