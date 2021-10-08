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
    <link rel="stylesheet" href="../plugins/styles/global.css">
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
                <li><a href="javascript:void(0)">Activities</a></li>
                <!--<li><a href="javascript:void(0)">HR-202</a></li>
                <li class="active">CW-120</li>-->
            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->


        <div class="page-content  container-fluid">
            <div class="row">


                <div class="col-lg-5 col-md-12">

                    <div class="row no-space">


                        <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-red-800 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon-alert-high.png" alt="img" height="30"> </i>
                                    </div>
                                    <div class="font-size-24 text-right pull-right1">
                                        <div class="">
                                            <span class="counter-number lineheight-normal">11</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">High Priority</b>
                                    </div>


                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                    <span class="">3%</span>
                                    <span class="">more than yesterday</span>
                                  </div>


                                </div>
                            </div>


                        </div>
                        <div class="col-md-4 ">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-blue-700 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon-alert-normal.png" alt="img" height="30"> </i>
                                    </div>
                                    <div class="font-size-24 text-right pull-right1">
                                        <div class="">
                                            <span class="counter-number">07</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Noraml Priority</b>
                                    </div>
                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                    <span class="">1%</span>
                                    <span class="">more than yesterday</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="widget">
                                <div class="widget-content padding-10   bg-green-700 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon-alert-low.png" alt="img" height="30"> </i>
                                    </div>
                                    <div class="font-size-24 text-right pull-right1">
                                        <div class="">
                                            <span class="counter-number">12 </span>
                                        </div>
                                        <div class="counter-label text-capitalize font-size-14">Low Priority  </div>
                                    </div>
                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span>
                                    <span class="">14%</span>
                                    <span class="">less than yesterday</span>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default shadow ">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Activities Statistics</h3>
                            <div class="panel-actions">
                                <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                                    <label class="btn btn-outline btn-success ">
                                        Today
                                    </label>
                                    <label class="btn btn-outline btn-success active">
                                        <input type="radio" name="multiples" checked=""> This Week
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body ">

                            <div class="">


                                <div class="nav-tabs-vertical">
                                    <ul class="nav nav-tabs nav-tabs-solid " data-plugin="nav-tabs" role="tablist">
                                        <li class="active"><a data-toggle="tab" href="#exampleTabsLineLeftOne"  role="tab" >Completed</a></li>
                                        <li><a data-toggle="tab" href="#exampleTabsLineLeftTwo" a role="tab" >Scheduled</a></li>
                                        <li class=""><a data-toggle="tab" href="#exampleTabsLineLeftThree"  role="tab" >Pending</a></li>
                                    </ul>
                                    <div class="tab-content ">
                                        <div class="tab-pane active" id="exampleTabsLineLeftOne" role="tabpanel">

                                            <div class="row">
                                                <div class="col-sm-6  ">
                                                    <div class="c100 p20  red margin-top-15 ">
                                                        <span class="pointer">101</span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6  ">
                                                    <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Milking
                                                                <span class="pull-right">20</span>
                                                            </h5>
                                                            <div class="progress  margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-blue-600" style="width: 20%" role="progressbar">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Feeding
                                                                <span class="pull-right">31</span>
                                                            </h5>
                                                            <div class="progress  margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info  bg-blue-600" style="width: 60%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Breeding
                                                                <span class="pull-right">50</span>
                                                            </h5>
                                                            <div class="progress  margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-blue-600" style="width: 10.3%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>



                                        </div>
                                        <div class="tab-pane " id="exampleTabsLineLeftTwo" role="tabpanel">
                                            <div class="row">

                                                <div class="col-sm-6  ">
                                                    <div class="c100 p50  green   margin-top-15">
                                                        <span class="pointer">40</span>
                                                        <div class="slice ">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-sm-6  ">
                                                    <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Milking
                                                                <span class="pull-right">25</span>
                                                            </h5>

                                                            <div class="progress  margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-green-600" style="width: 50%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Feeding
                                                                <span class="pull-right">05</span>
                                                            </h5>
                                                            <div class="progress margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info  bg-green-600" style="width: 80%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Breeding
                                                                <span class="pull-right">10</span>
                                                            </h5>

                                                            <div class="progress margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-green-600" style="width: 14%" role="progressbar">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="exampleTabsLineLeftThree" role="tabpanel">
                                            <div class="row">

                                                <div class="col-sm-6  ">

                                                    <div class="c100 p20  orange   margin-top-15">
                                                        <span class="pointer">101</span>
                                                        <div class="slice">
                                                            <div class="bar"></div>
                                                            <div class="fill"></div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-sm-6  ">
                                                    <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Milking
                                                                <span class="pull-right">25</span>
                                                            </h5>

                                                            <div class="progress  margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-orange-600" style="width: 50%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Feeding
                                                                <span class="pull-right">05</span>
                                                            </h5>
                                                            <div class="progress margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info  bg-orange-600" style="width: 80%" role="progressbar">

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>

                                                            <h5 class="font-size-12 margin-bottom-5">
                                                                Breeding
                                                                <span class="pull-right">10</span>
                                                            </h5>

                                                            <div class="progress margin-bottom-10">
                                                                <div class="progress-bar progress-bar-info bg-orange-600" style="width: 14%" role="progressbar">
                                                                </div>
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
                <div class="col-lg-3 col-md-12">
                    <div class="panel panel-default shadow">

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
                            <h3 class="panel-title "> <b> Total Activities </b></h3>
                        </div>
                        <div class="panel-body ">

                            <div class="text-right margin-bottom-10">
                                <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                                    <label class="btn btn-outline btn-success active ">
                                        This Week
                                    </label>
                                    <label class="btn btn-outline btn-success ">
                                        <input type="radio" name="multiples" checked=""> This Month
                                    </label>

                                </div>
                            </div>
                            <div class="chartbox">
                                <div id="chart-alerts1"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-alerts1',
                                                size: {
                                                    height: 280,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Completed ', 8, ],
                                                        ['Pending ', 12],
                                                        ['Scheduled', 12],

                                                    ],
                                                    type: 'donut',
                                                },
                                                color: {
                                                    pattern: ['#ec9940', '#4e97d9', '#36ab7a']
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">

                    <div class="panel panel-default  shadow    ">
                        <div class="panel-heading bg-orange-800 white s">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b>Recently Completed  </b></h3>
                        </div>
                        <div class="panel-body  ">
                            <div class=" ">
                                <div class="bg-white vscroll padding-10 " style="height:310px;">
                                    <div class="">
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-blue-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>


                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-211: Breeding </span>
                                                    <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-orange-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-211: Breeding </span>
                                                    <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-blue-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / 11 Oct </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-221: Milking </span>
                                                    <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-orange-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / 11 Oct </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                                                    <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
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






                    <div class="panel panel-default nav-tabs-horizontal shadow">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                              <li class="active"><a data-toggle="tab" href="#MilkStatistics" role="tab">Activities Pending</a></li>
                                <li class=""><a data-toggle="tab" href="#Cowlist" role="tab">Activities Completed</a></li>

                            </ul>
                            <div class="panel-actions">
                                <a class="panel-action icon " href="activities-all.php" data-toggle="tooltip" data-original-title="View All"> View All</a>
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>

                        <div class="panel-body  ">
                            <div class="tab-content">
                              <div class="tab-pane active" id="MilkStatistics" role="tabpanel">


                                <div class="vscroll padding-right-10" style="height:auto;">
                                  <div class="table-responsive">
                                    <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                      <thead>
                                        <tr class="">
                                          <th class="">Id</th>
                                          <th class="text-left">Staff Assigned</th>
                                          <th class="text-left">Activity Type </th>
                                          <th class="text-left">Start Time</th>
                                          <th class="text-left">End Time</th>
                                          <th class="text-left">Priority</th>
                                          <th class="text-left">Performed</th>
                                          <th class="text-left">Date</th>
                                          <th class="text-left">Routine Type </th>
                                          <th class="text-right"> Description</th>
                                        </tr>
                                      </thead>
                                      <tbody>


                                        <tr>
                                          <td><a href="">AC-855</a></td>
                                          <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span>Danish Kumar	</td>
                                          <td class="text-left"> Milking </td>
                                          <td class="text-left">12:00pm </td>
                                          <td class="text-left">04:00pm </td>
                                          <td class="text-left">  <span class="label label-danger">High </span> </td>
                                          <td class="text-left"> Grouped </td>
                                          <td class="text-left">06 Oct -  7 Oct  </td>
                                          <td class="text-left"> Daily </td>
                                          <td class="text-right">
                                            <span data-toggle="collapse" data-target="#aaa1" class="accordion-toggle">
                                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="10" class="bg-cyan-100 padding-0  ">
                                            <div class="collapse " id="aaa1">
                                              <div class="margin-10 clearfix row no-space ">
                                                <div class="col-lg-3   text-break">
                                                  <div class="padding-5 bg-cyan-200 white">
                                                    <table class="table  table-condensed  no-border  margin-bottom-0">
                                                      <tbody>
                                                        <tr>
                                                          <th width="80"> <b> Herd Id </b>  </th>
                                                          <td class="text-left">HR-252</td>
                                                        </tr>
                                                        <tr>
                                                          <th> <b> Cows </b>  </th>
                                                          <td class="text-left text-break">
                                                            <div class="inline-block"> CW-211 </div> ,
                                                            <div class="inline-block"> CW-09 </div>  ,
                                                            <div class="inline-block"> CW-288 </div> ,
                                                            <div class="inline-block"> CW-311 </div> ,
                                                            <div class="inline-block"> CW-091 </div>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                                <div class="col-lg-4 col-lg-offset-1 text-break">
                                                  <div class="margin-bottom-5"><b> Instructions</b></div>
                                                  <div class="small">
                                                    <div>
                                                      Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                      .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                      m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                    </div>
                                                  </div>
                                                </div>
                                                <!--<div class="col-lg-3  col-lg-offset-1  text-break">
                        <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Danish Kumar </span></b></div>
                        <p class="small">
                            Lorem Ipsum is simsimsus simsimsm is sustry simsum is sus.
                        </p>
                    </div>-->
                                              </div>
                                            </div>
                                          </td>
                                        </tr>


                                        <tr>
                                          <td><a href="">AC-855</a></td>
                                          <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24" /></span> Dammy Sam</td>
                                          <td class="text-left"> Breeding </td>
                                          <td class="text-left">01:00pm </td>
                                          <td class="text-left">02:00pm </td>
                                          <td class="text-left">  <span class="label label-success">Low </span> </td>
                                          <td class="text-left"> Individual </td>
                                          <td class="text-left">06 Oct -  7 Oct  </td>
                                          <td class="text-left"> Onec </td>
                                          <td class="text-right">
                                            <span data-toggle="collapse" data-target="#aaa2" class="accordion-toggle">
                                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                            </span>
                                          </td>
                                        </tr>


                                        <tr>
                                          <td><a href="">AC-855</a></td>
                                          <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Mickel Greg	</td>
                                          <td class="text-left"> Milking </td>
                                          <td class="text-left">06:00pm </td>
                                          <td class="text-left">07:00pm </td>
                                          <td class="text-left">  <span class="label label-info">Normal </span> </td>
                                          <td class="text-left">Individual  </td>
                                          <td class="text-left">06 Oct -  7 Oct  </td>
                                          <td class="text-left"> Daily </td>
                                          <td class="text-right">
                                            <span data-toggle="collapse" data-target="#xxx2" class="accordion-toggle">
                                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td><a href="">AC-855</a></td>
                                          <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Sunny Sam	</td>
                                          <td class="text-left"> Milking </td>
                                          <td class="text-left">11:00pm </td>
                                          <td class="text-left">11:00pm </td>
                                          <td class="text-left">  <span class="label label-success">Low </span> </td>
                                          <td class="text-left"> Individual </td>
                                          <td class="text-left">06 Oct -  7 Oct  </td>
                                          <td class="text-left"> Daily </td>
                                          <td class="text-right">
                                            <span data-toggle="collapse" data-target="#xxx2" class="accordion-toggle">
                                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                            </span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                                <div class="tab-pane " id="Cowlist" role="tabpanel">
                                    <div class="vscroll padding-right-10" style="height:auto;">
                                        <div class="table-responsive ">
                                            <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Id</th>
                                                        <th class="text-left">Staff Assigned</th>
                                                        <th class="text-left">Activity Type </th>
                                                        <th class="text-left">Performed Time</th>
                                                        <th class="text-left">Scheduled Time</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Performed</th>
                                                        <th class="text-left">Date Range</th>
                                                        <th class="text-left">Routine Type </th>
                                                        <th class="text-right"> Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <!-------->

                                                    <tr>
                                                        <td><a href="">AC-255</a></td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24" /></span> Danish Kumar</td>
                                                        <td class="text-left"> Breeding </td>
                                                        <td class="text-left">08:00am </td>
                                                        <td class="text-left">10:00pm </td>
                                                        <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                                                        <td class="text-left"> Grouped </td>
                                                        <td class="text-left">07 Oct -  7 Oct  </td>
                                                        <td class="text-left"> Weekly </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#row2" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="10" class="bg-cyan-100 padding-0  ">
                                                            <div class="collapse " id="row2">
                                                                <div class="margin-10 clearfix row no-space ">
                                                                    <div class="col-lg-3  ">
                                                                        <div class="padding-5 bg-cyan-200 white table-responsive">
                                                                            <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                                <tr>
                                                                                    <th width="80"> <b> Herd Id </b>  </th>
                                                                                    <td class="text-left">HR-252</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th> <b> Cows </b>  </th>
                                                                                    <td class="text-left text-break">
                                                                                        <div class="inline-block"> CW-211 </div> ,
                                                                                        <div class="inline-block"> CW-09 </div>  ,
                                                                                        <div class="inline-block"> CW-288 </div> ,
                                                                                        <div class="inline-block"> CW-311 </div> ,
                                                                                        <div class="inline-block"> CW-091 </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-lg-offset-1 text-break">
                                                                        <div class="margin-bottom-5"><b> Instructions</b></div>
                                                                        <div class="small">
                                                                            <div>
                                                                                Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                                                .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                                                m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3  col-lg-offset-1  text-break">
                                                                        <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Mickel Greg </span></b></div>
                                                                        <p class="small">
                                                                            No Comments
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Dammy Sam</td>
                                                        <td class="text-left"> Milking </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                        <td class="text-left"> Individual </td>
                                                        <td class="text-left">06 Oct -  7 Oct  </td>
                                                        <td class="text-left"> Daily </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="10" class="bg-cyan-100 padding-0  ">
                                                            <div class="collapse " id="row1">
                                                                <div class="margin-10 clearfix row no-space ">
                                                                    <div class="col-lg-3  ">
                                                                        <div class="padding-5 bg-cyan-200 white table-responsive">
                                                                            <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                                <tr>
                                                                                    <th width="80"> <b> Herd Id </b>  </th>
                                                                                    <td class="text-left">HR-712</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th> <b> Cows </b>  </th>
                                                                                    <td class="text-left text-break">
                                                                                        <div class="inline-block"> CW-211 </div>

                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-lg-offset-1 text-break">
                                                                        <div class="margin-bottom-5"><b> Instructions</b></div>
                                                                        <div class="small">
                                                                            <div>
                                                                                Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                                                .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                                                m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3  col-lg-offset-1  text-break">
                                                                        <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Danish Kumar </span></b></div>
                                                                        <p class="small">
                                                                            Lorem Ipsum is simsimsus simsimsm is sustry simsum is sus.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-------->

                                                    <tr>
                                                        <td><a href="">AC-105</a></td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Mickel Greg</td>
                                                        <td class="text-left"> Breeding </td>
                                                        <td class="text-left">08:00am </td>
                                                        <td class="text-left">10:00pm </td>
                                                        <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                                                        <td class="text-left"> Individual </td>
                                                        <td class="text-left">08 Oct -  9 Oct  </td>
                                                        <td class="text-left"> Once </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Sunny Sam</td>
                                                        <td class="text-left"> Feeding </td>
                                                        <td class="text-left">07:00pm </td>
                                                        <td class="text-left">08:00pm </td>
                                                        <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                        <td class="text-left"> Grouped </td>
                                                        <td class="text-left">06 Oct -  7 Oct  </td>
                                                        <td class="text-left"> Daily </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="">AC-525</a></td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Greg White</td>
                                                        <td class="text-left"> Feeding </td>
                                                        <td class="text-left">07:00pm </td>
                                                        <td class="text-left">08:00pm </td>
                                                        <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                        <td class="text-left"> Individual </td>
                                                        <td class="text-left">06 Oct -  7 Oct  </td>
                                                        <td class="text-left"> Daily </td>
                                                        <td class="text-right">
                                                            <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
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
