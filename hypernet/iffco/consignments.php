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
                <div class="col-md-6">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-orange-800 white shadow height-90  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon-parcel-delievered.png" alt="img" height="50"> </i>
                                    </div>
                                    <div class="font-size-24 text-right pull-right1">
                                        <div class="">
                                            <span class="counter-number lineheight-normal">650</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Consignments Recieved</b>
                                    </div>


                                    <div class="font-size-10 text-right">
                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                        <span class="">25%</span>
                                        <span class="">more than yesterday</span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div
                                            class="widget-content padding-10   bg-blue-800 white shadow height-90  clearfix">

                                            <div class="font-size-24 text-center pull-right1">
                                                <div class="">
                                                    <span class="counter-number lineheight-normal">250</span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-14">In warehouse
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div
                                            class="widget-content padding-10   bg-green-800 white shadow height-90  clearfix">

                                            <div class="font-size-24 text-center pull-right1">
                                                <div class="">
                                                    <span class="counter-number lineheight-normal">400</span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-14">In Transit
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-red-800 white shadow height-90  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/trucks-online.png" alt="img" height="50"> </i>
                                    </div>
                                    <div class="font-size-24 text-right pull-right1">
                                        <div class="">
                                            <span class="counter-number lineheight-normal">450</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Deliveries</b>
                                    </div>


                                    <div class="font-size-10 text-right">
                                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                        <span class="">18%</span>
                                        <span class="">more than yesterday</span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div
                                            class="widget-content padding-10   bg-teal-700 white shadow height-90  clearfix">

                                            <div class="font-size-24 text-center pull-right1">
                                                <div class="">
                                                    <span class="counter-number lineheight-normal">350</span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-14">Delivered </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div
                                            class="widget-content padding-10   bg-orange-800 white shadow height-90  clearfix">

                                            <div class="font-size-24 text-center pull-right1">
                                                <div class="">
                                                    <span class="counter-number lineheight-normal">100</span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-14">Scheduled</div>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="widget shadow">

                                <div
                                    class="widget-content bg-blue-600 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative height-210 ">
                                    <div class="counter counter-lg counter-inverse">
                                        <div class="counter-label text-capitalize font-size-14">Self Drop</div>
                                        <div class="label bg-blue-500">Today</div>
                                        <div class="counter-number-group padding-bottom-10">
                                            <span class="counter-number lineheight-normal font-size-24">120</span>
                                            <span class="counter-icon margin-left-10"><img src="images/self-drop.png"
                                                    height="40" /></span>
                                        </div>
                                        <div class="font-size-10 text-center padding-bottom-5">
                                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                            <span class="">16%</span>
                                            <span class="">more than yesterday</span>
                                        </div>
                                        <div class="row no-space bottom bg-blue-800 padding-top-10 padding-bottom-10">
                                            <div class="col-xs-6" style="border-right:1px solid #999;">
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

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget shadow">

                                <div
                                    class="widget-content bg-teal-600 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative height-210 ">
                                    <div class="counter counter-lg counter-inverse">
                                        <div class="counter-label text-capitalize font-size-14">Courier Pickup</div>
                                        <div class="label bg-teal-500">Today</div>
                                        <div class="counter-number-group padding-bottom-10">
                                            <span class="counter-number lineheight-normal font-size-24">450</span>
                                            <span class="counter-icon margin-left-10"><img src="images/dhl-delivery.png"
                                                    height="40" /></span>
                                        </div>
                                        <div class="font-size-10 text-center padding-bottom-5">
                                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                            <span class="">15%</span>
                                            <span class="">more than yesterday</span>
                                        </div>
                                        <div class="row no-space bottom bg-teal-800 padding-top-10 padding-bottom-10">
                                            <div class="col-xs-6" style="border-right:1px solid #999;">
                                                <div class="counter ">
                                                    <div class="counter-label ">On Time</div>
                                                    <div class="font-size-18">
                                                        390
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="counter ">
                                                    <div class="counter-label ">Delayed</div>
                                                    <div class="font-size-18">
                                                        60
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="widget shadow">

                                <div
                                    class="widget-content bg-blue-600 white shadow padding-left-0 padding-right-0 padding-top-15 padding-bottom-0  relative height-210">
                                    <div class="counter counter-lg counter-inverse">
                                        <div class="counter-label text-capitalize font-size-14">Third Party Pickup</div>
                                        <div class="label bg-blue-500">Today</div>
                                        <div class="counter-number-group padding-bottom-10">
                                            <span class="counter-number lineheight-normal font-size-24">80</span>
                                            <span class="counter-icon margin-left-10"><img src="images/third-party.png"
                                                    height="40" /></span>
                                        </div>
                                        <div class="font-size-10 text-center padding-bottom-5">
                                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                            <span class="">30%</span>
                                            <span class="">more than yesterday</span>
                                        </div>
                                        <div class="row no-space bottom bg-blue-800 padding-top-10 padding-bottom-10">
                                            <div class="col-xs-6" style="border-right:1px solid #999;">
                                                <div class="counter ">
                                                    <div class="counter-label ">Picked</div>
                                                    <div class="font-size-18">
                                                        50
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="counter ">
                                                    <div class="counter-label ">On Schedule</div>
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



                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default shadow ">

                        <div class="panel-heading  ">
                            <!--<div class="panel-actions">
              <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                  <label class="btn btn-outline btn-success active ">
                      This Week
                  </label>
                  <label class="btn btn-outline btn-success ">
                      <input type="radio" name="multiples" checked=""> This Month
                  </label>

              </div>
          </div>-->
                            <h3 class="panel-title "> <b> Consignments Statistics</b></h3>
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
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Technology', 650,],
                                                        ['Spare Parts ', 450],
                                                        ['FMCG', 212],

                                                    ],
                                                    type: 'donut',
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
                                                    ['Technology', 650,],
                                                    ['Spare Parts ', 450],
                                                    ['FMCG', 212],

                                                ],
                                            });
                                        }
                                        else {
                                            chartuu.load({
                                                unload: true,
                                                columns: [

                                                    ['Technology', 1650,],
                                                    ['Spare Parts ', 1450],
                                                    ['FMCG', 1212],

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
                    <div class="panel panel-default shadow ">

                        <div class="panel-heading  ">
                            <!--<div class="panel-actions">
              <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                  <label class="btn btn-outline btn-success active ">
                      This Week
                  </label>
                  <label class="btn btn-outline btn-success ">
                      <input type="radio" name="multiples" checked=""> This Month
                  </label>

              </div>
          </div>-->
                            <h3 class="panel-title "> <b> Consignments Delivery Statistics </b></h3>
                        </div>
                        <div class="panel-body padding-15">

                            <div class="dropdown margin-bottom-20  text-center"">
                                        <select type=" button" class=" btn-xs text-center " id="mrq-dd-Delivery">
                                <option>This Week</option>
                                <option>This Month</option>
                                </select>

                            </div>
                            <div class="chartbox">

                                <div id="chart-ccccqqq"></div>
                                <script>
                                    var chartuue;
                                    $(document).ready(function ($) {
                                        (function () {
                                            chartuue = c3.generate({
                                                bindto: '#chart-ccccqqq',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Expected', 120, 130, 50, 142, 110, 142, 110],
                                                        ['Deliver', 90, 50, 40, 100, 80, 120, 70],
                                                        ['Returned', 30, 90, 20, 40, 30, 30, 50],
                                                    ],
                                                    types: {
                                                        Expected: 'bar',
                                                        Deliver: 'bar',
                                                        Returned: 'bar',
                                                    },
                                                },
                                                color: {
                                                    // pattern: ['#f2a654', '#7cba7a', '#e56c6c']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: 'Days',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
                                                    },
                                                    y: {
                                                        label: {
                                                            text: 'Consignments Delivered ',
                                                            position: 'outer-middle'
                                                        },
                                                    },
                                                },
                                                bar: {
                                                    width: {
                                                        ratio: 0.3
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
                                    $("#mrq-dd-Delivery").on('change', function () {

                                        if (this.value.trim().toLowerCase().includes('week')) {
                                            chartuue.load({
                                                unload: true,
                                                columns: [
                                                    ['Expected', 120, 130, 50, 142, 110, 142, 110],
                                                    ['Deliver', 90, 50, 40, 100, 80, 120, 70],
                                                    ['Returned', 30, 90, 20, 40, 30, 30, 50],

                                                ],
                                            });
                                        }
                                        else {
                                            chartuue.load({
                                                unload: true,
                                                columns: [

                                                    ['Expected', 720, 630, 50, 142, 1110, 142, 110],
                                                    ['Deliver', 90, 350, 440, 100, 80, 120, 70],
                                                    ['Returned', 30, 90, 320, 40, 30, 30, 50],

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





            <div class="row">
                <div class="col-lg-12">
                    <div class="panel shadow panel-default nav-tabs-horizontal padding-0 margin-bottom-10 ">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#All" role="tab">All</a></li>
                                <li class=""><a data-toggle="tab" href="#Delivered" role="tab">Delivered</a></li>
                                <li class=""><a data-toggle="tab" href="#InTransit" role="tab">In Transit</a></li>
                                <li class=""><a data-toggle="tab" href="#InWarehouse" role="tab">In Warehouse</a></li>
                                <li class=""><a data-toggle="tab" href="#Returned" role="tab">Returned</a></li>
                            </ul>

                        </div>
                        <div class="panel-body padding-12">
                            <div class="tab-content">
                                <div class="tab-pane active" id="All" role="tabpanel">

                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
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

                                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <div class="">
                                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-lg-12">



                                            <div class="vscroll padding-right-10">
                                                <table
                                                    class="table   margin-bottom-0 table-hover table-condensed table-bordered   margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>

                                                            <th class="text-left">State</th>
                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>



                                                            <th class="text-right"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> <span class="label label-info"> In
                                                                    Transit </span> </td>
                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.2 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RASD150</a> </td>

                                                            <td class="text-left"> <span
                                                                    class="label label-success">Delievered </span> </td>
                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row2"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row2">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> <span class="label label-danger">
                                                                    Returned </span> </td>
                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row3"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> <span class="label label-warning"> In
                                                                    warehouse </span> </td>
                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row4"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> <span class="label label-info"> In
                                                                    Transit </span> </td>
                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row5"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>






                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="Delivered" role="tabpanel">

                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
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

                                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <div class="">
                                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-lg-12">



                                            <div class="vscroll padding-right-10">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>

                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-right"></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row7"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row7">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row6"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.2 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row8"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row8">
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
                                                                    href="carton-track.php">RASD150</a> </td>

                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row9"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row9">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowa"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowa">
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






                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="InTransit" role="tabpanel">

                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
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

                                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <div class="">
                                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-lg-12">



                                            <div class="vscroll padding-right-10">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>


                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-right"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.2 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowe"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowe">
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
                                                                    href="carton-track.php">RASD150</a> </td>

                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#rowf"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="rowf">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                <div class="tab-pane" id="InWarehouse" role="tabpanel">

                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
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

                                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <div class="">
                                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-lg-12">



                                            <div class="vscroll padding-right-10">
                                                <table
                                                    class="table  margin-bottom-0 table-hover table-condensed table-bordered   margin-bottom-0">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">ID </th>

                                                            <th class="text-left">Generated Time</th>
                                                            <th class="text-left">Generated Date</th>

                                                            <th class="text-left">Pickup type</th>
                                                            <th class="text-left">Net Weight</th>
                                                            <th class="text-left">Pickup City</th>
                                                            <th class="text-left">Drop-off City</th>

                                                            <th class="text-right"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>



                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                        <tr>
                                                            <td class="text-left"> <a
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.2 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RASD150</a> </td>

                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
                                                            <td class="text-left">Lahore</td>


                                                            <td class="text-right">
                                                                <button type="button"
                                                                    class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                                                    data-toggle="collapse" data-target="#row1"> <i
                                                                        class="icon ion-information"></i> </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="bg-cyan-100 padding-0  ">
                                                                <div class="collapse " id="row1">
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






                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="Returned" role="tabpanel">

                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
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

                                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <div class="">
                                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12">



                                            <div class="vscroll padding-right-10">
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>
                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.2 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
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
                                                                    href="carton-track.php">RASD150</a> </td>


                                                            <td class="text-left"> 5:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Third Party </td>
                                                            <td class="text-left"> 1.3 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.24 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.5 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
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
                                                                    href="carton-track.php">RAAR150</a> </td>

                                                            <td class="text-left"> 6:32:11 am </td>
                                                            <td class="text-left">Feb 26,2018 </td>

                                                            <td class="text-left"> Self </td>
                                                            <td class="text-left"> 1.9 Kg</td>
                                                            <td class="text-left"> Islamabad</td>
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










    <?php include_once('_maptrail.php'); ?>

    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>