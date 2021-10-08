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
                <li class="active">HR-202</li>
            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->


        <div class="page-content  container-fluid">
            <div class="row">







                <div class="col-lg-8">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row margin-bottom-0">
                                <div class="col-lg-6">
                                    <h1 class="page-title lineheight-18 margin-bottom-30">
                                        <span class="font-weight-400">Cowtahs  </span>
                                        <br />
                                        <span class="small">Id: HR-202</span>
                                    </h1>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-inline text-right">
                                        <div class="input-icon">
                                            <select class="form-control selectpicker show-tick show-menu-arrow " data-width="100%"  data-size="5"  title="Other Herds" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                                                <option data-subtext="[HR-485]" > Brood  </option>
                                                <option data-subtext="[HR-202]" disabled> Cowtahs  </option>
                                                <option data-subtext="[HR-991]"> Cowsmay  </option>
                                                <option data-subtext="[HR-951]"> Cowaax  </option>
                                                <option data-subtext="[HR-561]"> Mooday  </option>
                                                <option data-subtext="[HR-811]"> Herdy  </option>
                                            </select>
                                            <span class="icon ion-information-circled select" data-toggle="tooltip" title="Other Herds"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-blue-700 white shadow height-90  clearfix">
                                            <div class="pull-left white">
                                                <i> <img src="images/icon_cow.png" alt="img" height="40"> </i>
                                            </div>
                                            <div class="counter counter-md counter text-right pull-right">
                                                <div class="counter-number-group white">
                                                    <span class="counter-number">22</span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-12">Total Cows</div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">

                                    <div class="widget">
                                        <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-red-700 white shadow height-90  clearfix">
                                            <div class="pull-left white">
                                                <i> <img src="images/icon_milk.png" alt="img" height="40"> </i>
                                            </div>
                                            <div class="counter counter-md counter text-right pull-right">
                                                <div class="counter-number-group white">
                                                    <span class="counter-number">360  <span class="font-size-12 gray">Ltr</span></span>
                                                </div>
                                                <div class="counter-label text-capitalize font-size-12">Avg Milk  <span class="panel-action icon ion-information-circled green-500 font-size-10" data-toggle="tooltip" data-original-title="Milk Yield Per Cow"></span> </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row  no-space">

                                <!--<div class="col-lg-4">
                                    <div class="widget shadow  margin-bottom-0">
                                        <div class="widget-content padding-10 bg-green-800 height-90">
                                            <div class="counter counter-md white ">
                                                <div class="counter-label text-uppercase">Total Cows</div>
                                                <div class="">
                                                    <span class="counter-icon margin-right-5 ">
                                                        <i> <img src="images/icon_cow.png" alt="img" height="40"> </i>
                                                    </span>
                                                    <span class="counter-number font-size-20">155</span>
                                                    <span class="counter-number-related font-size-12"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-lg-12">
                                    <div class="row  no-space  margin-bottom-30 pointer">
                                        <div class="col-sm-4">
                                            <div class="counter counter-lg white bg-green-700 vertical-align height-70  shadow">
                                                <div class="vertical-align-middle">
                                                    <div>In Lactation</div>
                                                    <span class="counter-number font-size-20">25</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter counter-lg white bg-green-600 vertical-align height-70  shadow">
                                                <div class="vertical-align-middle">
                                                    <div>Heifers</div>
                                                    <span class="counter-number font-size-20">30</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="counter counter-lg white bg-green-500 vertical-align height-70 shadow ">
                                                <div class="vertical-align-middle">
                                                    <div>Calves</div>
                                                    <span class="counter-number font-size-20">100</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>







                        </div>


                        <div class="col-lg-6">

                            <div class="panel  shadow bg-green-700 ">

                                <div class="panel-heading   bg-green-800  margin-bottom-0 ">
                                    <div class="panel-actions">
                                        <a class="panel-action icon white " data-toggle="tooltip" data-original-title="View All"> View All</a>
                                        <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                                    </div>
                                    <h3 class="panel-title white"> <b>Cow Statistics </b></h3>
                                </div>

                                <div class="panel-body padding-10 ">

                                    <div class="">


                                        <div class="nav-tabs-vertical sm  ">
                                            <ul class="nav nav-tabs nav-tabs-line   vscroll" data-plugin="nav-tabs" role="tablist"  style="max-height:190px; overflow-x:hidden;">
                                                <li class="active"><a data-toggle="tab" href="#statstab1" role="tab" class="white">In Lactation</a></li>
                                                <li><a data-toggle="tab" href="#statstab2"  role="tab" class="white">Dry</a></li>
                                                <li><a data-toggle="tab" href="#statstab3" role="tab" class="white">Pregnant</a></li>
                                                <li><a data-toggle="tab" href="#statstab4" role="tab" class="white">Estrus</a></li>
                                                <li><a data-toggle="tab" href="#statstab5" role="tab" class="white">Tempmetature</a></li>
                                                <li><a data-toggle="tab" href="#statstab6" role="tab" class="white">Rumination</a></li>
                                                <li><a data-toggle="tab" href="#statstab7" role="tab" class="white">Others</a></li>

                                            </ul>
                                            <div class="tab-content  ">
                                                <div class="tab-pane active" id="statstab1" role="tabpanel">
                                                    <div class="">
                                                        <div class="col-xs-6  ">
                                                            <div class="text-center">
                                                                <div class="margin-top-50 margin-bottom-10">
                                                                    <i> <img src="images/icon_stat_lactation.png" alt="img" height="50" class=""> </i>
                                                                </div>
                                                                <span class="font-size-30 white">22</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6  ">
                                                            <div class=" bg-blue-grey-200  margin-top-20">

                                                                <div class="vscroll" style="height:150px;">
                                                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0 font-size-10  ">
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-854
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-587
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-221
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-331
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-112
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane " id="statstab2" role="tabpanel">
                                                    <div class="">

                                                        <div class="">
                                                            <div class="col-xs-6  ">
                                                                <div class="text-center">
                                                                    <div class="margin-top-50 margin-bottom-10">
                                                                        <i> <img src="images/icon_stat_dry.png" alt="img" height="50" class=""> </i>
                                                                    </div>
                                                                    <span class="font-size-30 white">07</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 ">
                                                                <div class=" bg-blue-grey-200  margin-top-20">

                                                                    <div class="vscroll" style="height:150px;">
                                                                        <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10 ">
                                                                            <li class="list-group-item padding-10 ">
                                                                                CW-485
                                                                            </li>
                                                                            <li class="list-group-item padding-10 ">
                                                                                CW-569
                                                                            </li>
                                                                            <li class="list-group-item padding-10 ">
                                                                                CW-123
                                                                            </li>
                                                                            <li class="list-group-item padding-10 ">
                                                                                CW-555
                                                                            </li>
                                                                            <li class="list-group-item padding-10 ">
                                                                                CW-884
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="statstab3" role="tabpanel">
                                                    <div class="">
                                                        <div class="col-xs-6  ">
                                                            <div class="text-center">
                                                                <div class="margin-top-50 margin-bottom-10">
                                                                    <i> <img src="images/icon_stat_pregnant.png" alt="img" height="50" class=""> </i>
                                                                </div>
                                                                <span class="font-size-30 white">13</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6  ">
                                                            <div class=" bg-blue-grey-200  margin-top-20">

                                                                <div class="vscroll" style="height:150px;">
                                                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-778
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-529
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-475
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-895
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-111
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="statstab4" role="tabpanel">
                                                    <div class="">
                                                        <div class="col-xs-6  ">
                                                            <div class="text-center">
                                                                <div class="margin-top-50 margin-bottom-10">
                                                                    <i> <img src="images/icon_stat_estrus.png" alt="img" height="50" class=""> </i>
                                                                </div>
                                                                <span class="font-size-30 white">24</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6  ">
                                                            <div class=" bg-blue-grey-200  margin-top-20">

                                                                <div class="vscroll" style="height:150px;">
                                                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0 font-size-10 ">
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-778
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-529
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-475
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-895
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-111
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="statstab5" role="tabpanel">
                                                    <div class="">
                                                        <div class="col-xs-6  ">
                                                            <div class="text-center">
                                                                <div class="margin-top-50 margin-bottom-10">
                                                                    <i> <img src="images/icon_stat_temperature.png" alt="img" height="50" class=""> </i>
                                                                </div>
                                                                <span class="font-size-30 white">17</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6  ">
                                                            <div class=" bg-blue-grey-200  margin-top-20">

                                                                <div class="vscroll" style="height:150px;">
                                                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-778
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-529
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-475
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-895
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-111
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="statstab6" role="tabpanel">
                                                    <div class="">
                                                        <div class="col-xs-6  ">
                                                            <div class="text-center">
                                                                <div class="margin-top-50 margin-bottom-10">
                                                                    <i> <img src="images/icon_stat_ruminating.png" alt="img" height="50" class=""> </i>
                                                                </div>
                                                                <span class="font-size-30 white">19</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6  ">
                                                            <div class=" bg-blue-grey-200  margin-top-20">

                                                                <div class="vscroll" style="height:150px;">
                                                                    <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-778
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-529
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-475
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-895
                                                                        </li>
                                                                        <li class="list-group-item padding-10 ">
                                                                            CW-111
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
                            </div>








                        </div>
                    </div>



                    <div class="panel panel-default card">
                        <div class="panel-heading bg-orange-800 white">
                            <div class="panel-actions white ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b> Recent Alerts </b></h3>
                        </div>
                        <div class="panel-body ">
                            <div class="">
                                <div class="vscroll padding-right-10" style="height:210px;">
                                    <table class="table  nowrap" >
                                        <tbody>
                                        <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                            <td width="100">
                                                <div class="media ">
                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_estrus_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                    <div class="media-body margin-0"><span class="label label-danger label-outline"> Estrus   </span> </div>
                                                </div>
                                            </td>
                                            <td width="80">
                                                <a href="">CW-255</a>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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
                                            <td width="80">
                                                <a href="">CW-255</a>
                                            </td>
                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
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


                <div class="col-lg-4">

                    <div class="mapbox  margin-bottom-30 card light">
                        <span class="icon" style="left:50%; top:40%;"> <img src="images/icon-herds-map.png" alt="img" /> </span>

                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52973.30513779624!2d55.2771398797838!3d25.18678969542997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1539858886335" width="100%" height="580" frameborder="0" style="border:0; float:left; " allowfullscreen class="map pull-right "></iframe>




                    </div>


                </div>

            </div>
            <div class="row">

                <div class="col-lg-12  ">
                    <div class="panel panel-default nav-tabs-horizontal  card light">
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

                        <div class="panel-body ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Cowlist" role="tabpanel">
                                    <div class="table-responsive dt-table">
                                        <table class="table table-hover table-condensed   margin-bottom-0   " id="dt-cowlist1">
                                            <thead>
                                                <tr class="">
                                                    <th class="">Id</th>
                                                    <th class="text-left ">Group</th>
                                                    <th class="text-left">Lactation Status</th>
                                                    <th class="text-left">Last Breeding Time</th>
                                                    <th class="text-left">Last Week Alerts   <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="Total" data-placement="top"></span></th>
                                                    <th class="text-left"> Avg Milk  <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="Yield per Day" data-placement="top"></span></th>
                                                    <th class="text-right"> Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="cow.php">CW-212</a></td>
                                                    <td class="text-left">Heifers</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">09:00pm - 07 Oct 17</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">0</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-902</a></td>
                                                    <td class="text-left">Lactation</td>
                                                    <td class="text-left"><span class="label  label-success">Non-Bred </span></td>
                                                    <td class="text-left">04:30pm  - 06 Oct 17</td>
                                                    <td class="text-left">8</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-272</a></td>
                                                    <td class="text-left">Heifers</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">05:30pm  - 06 Oct 17</td>
                                                    <td class="text-left">8</td>
                                                    <td class="text-left">9</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-912</a></td>
                                                    <td class="text-left">Lactation</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">12:35am  - 04 Oct 17</td>
                                                    <td class="text-left">8</td>
                                                    <td class="text-left">6</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-252</a></td>
                                                    <td class="text-left">Heifers</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">08:40pm  - 04 Oct 17</td>
                                                    <td class="text-left">0</td>
                                                    <td class="text-left">3</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-442</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">06:30pm  - 07 Oct 17</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">11</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-202</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">06:35pm  - 03 Oct 17</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-452</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label  label-success">Non-Bred </span></td>
                                                    <td class="text-left">07:50pm  - 02 Oct 17</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">8</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-535</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label  label-success">Non-Bred </span></td>
                                                    <td class="text-left">06:55pm  - 01 Oct 17</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-left">8</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-155</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label  label-success">Non-Bred </span></td>
                                                    <td class="text-left">08:30pm  - 07 Sep 17</td>
                                                    <td class="text-left">2</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-102</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">08:50pm - 07 Sep 17</td>
                                                    <td class="text-left">1</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-302</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">08:30pm -  07 Sep 17</td>
                                                    <td class="text-left">7</td>
                                                    <td class="text-left">52</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-592</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">02:30pm - 08 Sep 17</td>
                                                    <td class="text-left">2</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="cow.php">CW-559</a></td>
                                                    <td class="text-left">Calves</td>
                                                    <td class="text-left"><span class="label label-default">Bred </span></td>
                                                    <td class="text-left">03:30pm - 07 Sep 17</td>
                                                    <td class="text-left">4</td>
                                                    <td class="text-left">5</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="MilkStatistics" role="tabpanel">

                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success ">
                                                <input type="radio" name="multiples" value="banana" checked=""> Top 5
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                <input type="radio" name="multiples">  Top 10
                                            </label>
                                            <label class="btn btn-outline btn-success active">
                                                <input type="radio" name="multiples" checked=""> Top 20
                                            </label>
                                        </div>
                                    </div>
                                    <div class="chartbox">

                                        <div id="chart-cccc"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-cccc',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title 1', 120, 130, 140, 142, 150, 152, 160, 150, 152, 160, 120, 130, 140, 142, 150, 152, 160, 150, 152, 160],
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
                                                                    text: 'Top 20 Cows',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['CW-102', 'CW-105', 'CW-192', 'CW-202', 'CW-402', 'CW-111', 'CW-182', 'CW-552', 'CW-141', 'CW-182']
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
                                                                ratio: 0.3
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
                                                            type: 'line',
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
