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
                <li><a href="javascript:void(0)">Herds</a></li>
                <li><a href="javascript:void(0)">HR-202</a></li>
                <li class="active">CW-120</li>
            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->


        <div class="page-content  container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row margin-bottom-0">
                        <div class="col-lg-9">
                            <h1 class="page-title lineheight-36 margin-bottom-30">
                                Cow: <span class="font-weight-400">CW-102  </span>
                                <!--<br />
                                <span class="small">Herd: Cowtahs</span>-->
                            </h1>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-inline text-right">
                                <div class="input-icon">
                                    <select class="form-control selectpicker show-tick show-menu-arrow " data-size="5" data-width="100%" title="Other Cows" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                                        <option data-subtext="[Cowtahs]"> CW-103  </option>
                                        <option data-subtext="[Brood]"> CW-104   </option>
                                        <option data-subtext="[Cowsmay]"> CW-105 </option>
                                        <option data-subtext="[Cowaax]]"> CW-522  </option>
                                        <option data-subtext="[Cowtahs]"> CW-103  </option>
                                        <option data-subtext="[Brood]"> CW-104   </option>
                                        <option data-subtext="[Cowsmay]"> CW-105 </option>
                                        <option data-subtext="[Cowaax]]"> CW-522  </option>
                                    </select>
                                    <span class="icon ion-information-circled select" data-toggle="tooltip" title="Other Cows"></span>
                                </div>
                            </div>
                        </div>
                    </div>

               

                    <div class="row">
                        <div class="col-lg-3">

                            <div class="panel panel-default   card light">
                                <div class="panel-heading bg-green-800 white">
                                    <h3 class="panel-title font-weight-600 white">Cow Information</h3>

                                </div>
                                <div class="panel-body padding-0 ">
                                    <div class="margin-bottom-15">


                                        <div id="infoscroll" class="white vscroll " style="height:140px;">


                                            <ul class="list-group margin-bottom-0">
                                                <li class="list-group-item bg-white pointer">
                                                    Herd Name <span class="badge">Cowtahs</span>
                                                </li>
                                                <li class="list-group-item bg-white pointer">
                                                    Lactation Status <span class="badge">Breding</span>
                                                </li>
                                                <li class="list-group-item bg-white pointer">
                                                    Weight<span class="badge">80 kg</span>
                                                </li>
                                                <li class="list-group-item bg-white pointer">
                                                    Last Breding <span class="badge">2 hours ago</span>
                                                </li>
                                                <li class="list-group-item bg-white pointer">
                                                    Age <span class="badge">2.5 Years</span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="widget shadow">

                                        <div class="widget-content padding-10 bg-blue-700 height-120 text-center relative">
                                            <div class="white">
                                                <div class="counter-label margin-bottom-5 clearfix">
                                                    <span class="font-size-16">
                                                        Today Milk Yield
                                                    </span>
                                                </div>
                                                <div class="">
                                                    <span class="counter-icon margin-right-5 ">
                                                        <i> <img src="images/icon_milk.png" alt="img" height="50"> </i>
                                                    </span>
                                                    <span class="counter-number font-size-20">28</span>
                                                    <span class="counter-number-related font-size-12">ltr</span>
                                                </div>

                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="">10%</span>
                                                    <span class="">more than yesterday</span>
                                                </div>
                                                <!--<span class="label white absolute bg-blue-600  flat right bottom">
                                                    Today
                                                </span>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget shadow">

                                        <div class="widget-content padding-10 bg-red-700 height-120 text-center relative">
                                            <div class="white">
                                                <div class="counter-label margin-bottom-5 clearfix">
                                                    <span class="font-size-16">
                                                        Today Feed Consumed
                                                    </span>

                                                </div>
                                                <div class="">
                                                    <span class="counter-icon margin-right-5 ">
                                                        <i> <img src="images/icon_feed.png" alt="img" height="50"> </i>
                                                    </span>
                                                    <span class="counter-number font-size-20">12</span>
                                                    <span class="counter-number-related font-size-12">kg</span>
                                                </div>
                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span> <span class="">14%</span><span class=""> less than yesterday</span>
                                                </div>
                                                <!--<span class="label white absolute bg-red-600  flat right bottom">
                                                    Today
                                                </span>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row no-space">
                                <div class="col-lg-3">
                                    <div class="widget shadow  margin-bottom-0">
                                        <div class="counter counter-lg white bg-green-800 vertical-align height-70 shadow ">
                                            <div class="vertical-align-middle">
                                                <span class="counter-number font-size-16"> States</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="row no-space  margin-bottom-30 pointer">
                                        <div class="col-sm-3">
                                            <div class="counter counter-lg white bg-green-700 vertical-align height-70  shadow">
                                                <div class="vertical-align-middle">
                                                    <div class="font-size-12">Sitting</div>
                                                    <span class="counter-number font-size-16">1h 3m</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="counter counter-lg white bg-green-600 vertical-align height-70 shadow">
                                                <div class="vertical-align-middle">
                                                    <div class="font-size-12">Standing</div>
                                                    <span class="counter-number font-size-16">2h 13m </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="counter counter-lg white bg-green-500 vertical-align height-70 shadow ">
                                                <div class="vertical-align-middle">
                                                    <div class="font-size-12">Rumination </div>
                                                    <span class="counter-number font-size-16">0h 33m </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="counter counter-lg white bg-green-400 vertical-align height-70 shadow ">
                                                <div class="vertical-align-middle">
                                                    <div class="font-size-12">Feeding  </div>
                                                    <span class="counter-number font-size-16">3h 30m</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="panel panel-default  card light">
                                <div class="panel-heading bg-green-800 white">
                                    <div class="panel-actions ">

                                        <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                                    </div>
                                    <h3 class="panel-title white"> <b>Todays Activities </b></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="chartbox">
                                        <div id="chart-alerts1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-alerts1',
                                                        size: {
                                                            height: 140,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'right',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Milking ', 8, ],
                                                                ['Feeding ', 2],
                                                                ['Breding', 3],

                                                            ],
                                                            type: 'pie',
                                                        },
                                                        color: {
                                                            pattern: ['#2b9646', '#ec9940', '#4e97d9', '#36ab7a']
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
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8">
                    <div class="">
                        <div class="panel panel-default card light">
                            <div class="panel-heading ">
                                <h3 class="panel-title font-weight-600">Recent Alerts</h3>
                                <div class="panel-actions">
                                    <a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>
                                    <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                </div>
                            </div>
                            <div class="panel-body  ">
                                <div class=" ">
                                    <div class="vscroll padding-right-10" style="height:200px;">
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
                                                    <td width="150" class="text-right"> <span class="small">10:30pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>
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
                                                    <td width="150" class="text-right"> <span class="small">10:30pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">10:00pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">11:37pm</span> / <span class="small">Today</span> </td>
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
                                                    <td class="text-right"> <span class="small">12:30pm</span> / <span class="small">Today</span> </td>
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

                <div class="col-lg-4">

                    <div class="panel panel-default  card light">
                        <div class="panel-heading ">
                            <h3 class="panel-title font-weight-600">Todays Alerts</h3>
                            <div class="panel-actions">
                                <a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>
                        <div class="panel-body ">
                            <div class="chartbox">
                                <div id="chart-ddddddd"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-ddddddd',
                                                size: {
                                                    height: 200,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                             ['Estrus', 2],
                                                                ['Lameness', 5],
                                                                ['Rumination', 3],
                                                                ['Temperature', 8],
                                                    ],
                                                    type: 'bar',
                                                },
                                                color: {
                                                    pattern: ['#4e97d9', '#e9595b', '#ec9940', '#555']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            text: 'This Week',
                                                            position: 'outer-center'
                                                        },
                                                        // type: 'category',
                                                        // categories: ['Mo', 'Tu', 'We', 'Fr', 'Sa', 'Su', 'Mo']
                                                    },
                                                    y: {
                                                        label: {
                                                            text: 'No. of Alerts ',
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

            <div class="row">

                <div class="col-lg-12  ">
                    <div class="panel panel-default nav-tabs-horizontal card light">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Cowlist" role="tab">List of Activities</a></li>
                                <li class=""><a data-toggle="tab" href="#MilkStatistics" role="tab">Milk Yield Statistics</a></li>
                                <li class=""><a data-toggle="tab" href="#feedStatistics" role="tab">Feed Statistics</a></li>
                            </ul>
                            <div class="panel-actions">
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>

                        <div class="panel-body  ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Cowlist" role="tabpanel">
                                    <div class="vscroll padding-right-10" style="height:210px;">
                                        <div class="table-responsive ">
                                            <table class="table table-hover table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Id</th>
                                                        <th class="text-left ">Cow Id</th>
                                                        <th class="text-left">Staff Assigned</th>
                                                        <th class="text-center">Lactation Status</th>
                                                        <th class="text-left">Start Time</th>
                                                        <th class="text-left">End Time</th>
                                                        <th class="text-left">Start Date</th>
                                                        <th class="text-left">End Date</th>
                                                        <th class="text-right"> Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="activities.php">AC-185</a></td>
                                                        <td class="text-left">CW-902</td>
                                                        <td class="text-left">  <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span>   Michel Gerg</td>
                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-left">09:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">06 Oct 17 </td>
                                                        <td class="text-left">07 Oct 17 </td>

                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="activities.php">AC-157</a></td>
                                                        <td class="text-left">CW-702</td>
                                                        <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24" /></span> Greg White</td>
                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-left">09:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">06 Oct 17 </td>
                                                        <td class="text-left">07 Oct 17 </td>

                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="activities.php">AC-185</a></td>
                                                        <td class="text-left">CW-102</td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Ian Colite</td>
                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-left">09:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">06 Oct 17 </td>
                                                        <td class="text-left">07 Oct 17 </td>

                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="activities.php">AC-855</a></td>
                                                        <td class="text-left">CW-902</td>
                                                        <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Dammy Sam</td>
                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-left">09:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">06 Oct 17 </td>
                                                        <td class="text-left">07 Oct 17 </td>

                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="activities.php">AC-255</a></td>
                                                        <td class="text-left">CW-852</td>
                                                        <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Sunny Ali</td>
                                                        <td class="text-center"><span class="label label-default">Bred </span></td>
                                                        <td class="text-left">09:00pm </td>
                                                        <td class="text-left">11:00pm </td>
                                                        <td class="text-left">06 Oct 17 </td>
                                                        <td class="text-left">07 Oct 17 </td>
                                                        <td class="text-right">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>




                                    </div>
                                </div>
                                <div class="tab-pane" id="MilkStatistics" role="tabpanel">

                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success active">
                                                <input type="radio" name="multiples" checked=""> This Week
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                This Month
                                            </label>

                                        </div>
                                    </div>
                                    <div class="chartbox">

                                        <div id="chart-ffff"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-ffff',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title 1', 32, 25, 30, 28, 27, 34, 28],
                                                            ],
                                                            type: 'line',
                                                        },
                                                        color: {
                                                            pattern: ['#f2a654']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'This Week',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Mo', 'Tu', 'We', 'Fr', 'Sa', 'Su', 'Mo']
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
                                                        }
                                                    });
                                                })();
                                            });
                                        </script>



                                    </div>
                                </div>

                                <div class="tab-pane" id="feedStatistics" role="tabpanel">

                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success active">
                                                <input type="radio" name="multiples" checked=""> This Week
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                This Month
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
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title 1', 7, 10, 13, 14, 12, 10, 13],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#4e97d9']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'This Week',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Mo', 'Tu', 'We', 'Fr', 'Sa', 'Su', 'Mo']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'Kg ',
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








    </div>










    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
