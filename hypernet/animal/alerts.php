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
                <li><a href="javascript:void(0)">Alerts</a></li>
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
                <div class="col-lg-7">
                    <div class="row">


                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-content padding-10 bg-red-800 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon_estrus_alert1.png" alt="img" height="36"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right1">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">11</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Estrus </b>
                                    </div>

                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span>
                                    <span class="">09%</span>
                                    <span class="">less than yesterday</span>
                                  </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-3">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-orange-700 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon_lameness_alert1.png" alt="img" height="36"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right1">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">07</span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Lameness</b>
                                    </div>
                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                    <span class="">14%</span>
                                    <span class="">more than yesterday</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="widget">
                                <div class="widget-content padding-10   bg-green-700 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon_temperature_alert1.png" alt="img" height="36"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right1">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">12 </span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Temperature     </b>
                                    </div>

                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span>
                                    <span class="">04%</span>
                                    <span class="">less than yesterday</span>
                                  </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="widget">
                                <div class="widget-content padding-10   bg-blue-700 white shadow height-100  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon_ruminating_alert1.png" alt="img" height="36"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right1">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">12 </span>
                                        </div>
                                        <b class="counter-label text-capitalize font-size-14">Ruminating  </b>
                                    </div>
                                  <div class="font-size-10 text-right">
                                    <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span>
                                    <span class="">02%</span>
                                    <span class="">less than yesterday</span>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="panel panel-default  shadow">
                                <div class="panel-heading ">
                                    <h3 class="panel-title font-weight-600">Current Week Alerts Statistics</h3>
                                    <div class="panel-actions">
                                        <a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>
                                        <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                    </div>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="chartbox">
                                                <div id="chart-rrr"></div>
                                                <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-rrr',
                                                        size: {
                                                            height: 200,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'top',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Estrus ', 30, 60, 55, 80, 70, 16, 31],
                                                                ['Lameness ', 14, 50, 10, 77, 50, 44, 23],
                                                                ['Ruminating', 35, 02, 15, 10, 15, 88, 37],
                                                                ['Temperature', 40, 22, 5, 20, 17, 28, 17],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#2b9646', '#ec9940', '#4e97d9', '#36ab7a']
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
                                                                    text: 'No of Alerts ',
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


                <div class="col-lg-5">

                    <div class="panel panel-default shadow     ">
                        <div class="panel-heading bg-orange-800 white ">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b>Recent Alerts </b></h3>
                        </div>
                        <div class="panel-body ">
                            <div class="">
                                <div class="bg-white vscroll " style="height:315px;">
                                    <table class="table  nowrap" id="datatable11">
                                        <tbody>
                                            <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media ">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_estrus_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-danger label-outline"> Estrus   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                <td  class="text-right"> <span class="small">10:30pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_lameness_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-warning label-outline"> Lameness   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small">Lorem Ipsum nd tsimsum is sustry.ypesetting. </div></td>
                                                <td class="text-right"> <span class="small">08:10pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_temperature_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-success label-outline"> Tmperature   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small">Lorem Ipsisimsum is sustry.nting and  industry. </div></td>
                                                <td class="text-right"> <span class="small">11:40pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_ruminating_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-info label-outline"> Ruminating   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small"> Ipsum is  ansimsum is sustry.d typesetting industry. </div></td>
                                                <td class="text-right"> <span class="small">03:30pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media ">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_estrus_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-danger label-outline"> Estrus   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small"> Lorem Isimsum is sustry.of   is   text of the  and  industry. </div></td>
                                                <td  class="text-right"> <span class="small">10:30pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_lameness_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-warning label-outline"> Lameness   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small">Lorem mysimsum is sustry.simsum is sustry. text  the printing and  industry. </div></td>
                                                <td class="text-right"> <span class="small">10:00pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_temperature_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-success label-outline"> Tmperature   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small">Lorem Ipsimsum is sustry.smmy texand typesetting industry. </div></td>
                                                <td class="text-right"> <span class="small">11:37pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                <td width="100">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_ruminating_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                        <div class="media-body margin-0"><span class="label label-info label-outline"> Ruminating   </span> </div>
                                                    </div>
                                                </td>
                                                <td> <div class="small">Lorem Ie printing and typesetting industry. </div></td>
                                                <td class="text-right"> <span class="small">12:30pm</span>  <span class="small">Today</span> </td>
                                                <td width="80" class="text-right">
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
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


            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  shadow">
                        <div class="panel-heading ">
                            <h3 class="panel-title font-weight-600">Alerts History</h3>
                            <div class="panel-actions">
                                <a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="vscroll padding-right-10" style="height:auto;">
                                <div class="table-responsive dt-table">
                                    <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                        <thead>
                                            <tr class="">
                                                <th class="">Id</th>
                                                <th class="">Cow Id</th>
                                                <th class="text-left">Type </th>
                                                <th class="text-left">Alert Time</th>
                                                <th class="text-left">Date</th>
                                                <th class="text-left">Activity Status</th>
                                                <th class="text-left">Scheduled Time</th>
                                                <th class="text-right"> Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="">AL-755</a></td>
                                                <td><a href="">CW-105</a></td>
                                                <td class="text-left"><span class="label label-danger label-outline"> Estrus   </span> </td>
                                                <td class="text-left">11:00pm </td>
                                                <td class="text-left">06 Oct  </td>
                                                <td class="text-left">  <span class="label label-default">Scheduled </span> </td>
                                                <td class="text-left">11:30pm </td>
                                                <td class="text-right">
                                                    <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                    <div class="collapse " id="row1">
                                                        <div class="margin-10 clearfix row no-space ">
                                                            <div class="col-lg-3   text-break">
                                                                <div class="padding-5 bg-cyan-200 white">
                                                                    <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                        <tr>
                                                                            <th>Cow ID</th>
                                                                            <td class="text-left">CW-225</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Herd Id</th>
                                                                            <td class="text-left">HR-252</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Herd Name</th>
                                                                            <td class="text-left">Cowbays</td>
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

                                            <!-------->

                                            <tr>
                                                <td><a href="">AL-155</a></td>
                                                <td><a href="">CW-225</a></td>
                                                <td class="text-left"><span class="label label-info label-outline"> Ruminating   </span> </td>
                                                <td class="text-left">11:00pm </td>
                                                <td class="text-left">06 Oct  </td>
                                                <td class="text-left">  <span class="label label-default">Scheduled </span> </td>
                                                <td class="text-left">11:30pm </td>
                                                <td class="text-right">
                                                    <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="">AL-055</a></td>
                                                <td><a href="">CW-185</a></td>
                                                <td class="text-left"><span class="label label-danger label-outline"> Estrus   </span> </td>
                                                <td class="text-left">11:00pm </td>
                                                <td class="text-left">06 Oct  </td>
                                                <td class="text-left">  <span class="label label-default">Scheduled </span> </td>
                                                <td class="text-left">11:30pm </td>
                                                <td class="text-right">
                                                    <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="">AL-555</a></td>
                                                <td><a href="">CW-155</a></td>
                                                <td class="text-left"><span class="label label-danger label-outline"> Estrus   </span> </td>
                                                <td class="text-left">11:00pm </td>
                                                <td class="text-left">06 Oct  </td>
                                                <td class="text-left">  <span class="label label-default">Scheduled </span> </td>
                                                <td class="text-left">11:30pm </td>
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









    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
