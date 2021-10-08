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
<body class="layout-boxed1 site-menubar-unfold">


  <?php include_once('_header_staff.php'); ?>
    <!--<div w3-include-html="_leftmenu.html"></div>-->



    <div class="page-inner ">
        <!--<div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Member</a></li>
            </ol>
        </div>-->
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->

        <div class="page-header">

            <h1 class="page-title">Activities Details</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm   btn-success" onclick="window.history.go(-1)">
                    Back
                </button>

            </div>
        </div>
        <div class="page-content  container-fluid">


            <div class="row">
                <div class="col-lg-3 ">




                    <div class="widget bg-white shadow ">
                        <div class="widget-header text-center  clearfix ">
                            <div class="">
                                <div class="padding-20 padding-bottom-0">

                                    <img src="images/user-img2.jpg " width="100%">

                                </div>

                            </div>

                            <div class="padding-15 bg-cyan-000 text-left  margin-bottom-0 ">
                                <div class="font-size-20 margin-15  text-center white1">Danish Kumar</div>

                                <ul class="list-group list-group-bordered vscroll margin-bottom-0"  style="height: auto;">
                                    <li class="list-group-item">
                                        CNIC #
                                        <b class="badge badge-info">55-569-999</b>
                                    </li>
                                    <li class="list-group-item">
                                        Licence
                                        <b class="badge badge-info">122569999</b>
                                    </li>
                                    <li class="list-group-item">
                                        Date of Birth
                                        <b class="badge badge-info">14-June-1980</b>
                                    </li>
                                    <li class="list-group-item">
                                        Date of Joining
                                        <b class="badge badge-info">14-June-2007</b>
                                    </li>
                                    <li class="list-group-item">
                                        Marital Status
                                        <b class="badge badge-info">Single</b>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-9 ">


                  <div class="row no-space1">


                    <div class="col-md-3">
                      <div class="widget">
                        <div class="widget-content padding-15   bg-red-800 white shadow height  clearfix">
                          <div class="pull-left white">
                            <i> <img src="images/icon-alert-high.png" alt="img" height="50"> </i>
                          </div>
                          <div class="font-size-24 text-right pull-right1 margin-bottom-5">
                            <div class="">
                              <b class="counter-number lineheight-normal">11</b>
                            </div>
                            <b class="counter-label text-capitalize font-size-14">High Priority</b>
                          </div>


                          <div class="font-size-10 text-right">
                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                            <span class="">10%</span>
                            <span class="">more than last week</span>
                          </div>


                        </div>
                      </div>


                    </div>
                    <div class="col-md-3">
                      <div class="widget">
                        <div class="widget-content padding-15   bg-blue-700 white shadow height  clearfix">
                          <div class="pull-left white">
                            <i> <img src="images/icon-alert-normal.png" alt="img" height="50"> </i>
                          </div>
                          <div class="font-size-24 text-right pull-right1 margin-bottom-5">
                            <div class="">
                              <b class="counter-number">07</b>
                            </div>
                            <b class="counter-label text-capitalize font-size-14">Noraml Priority</b>
                          </div>
                          <div class="font-size-10 text-right">
                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                            <span class="">15%</span>
                            <span class="">more than last week</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">

                      <div class="widget">
                        <div class="widget-content padding-15   bg-green-700 white shadow height  clearfix">
                          <div class="pull-left white">
                            <i> <img src="images/icon-alert-low.png" alt="img" height="50"> </i>
                          </div>
                          <div class="font-size-24 text-right pull-right1 margin-bottom-5">
                            <div class="">
                              <b class="counter-number">12 </b>
                            </div>
                            <div class="counter-label text-capitalize font-size-14">Low Priority  </div>
                          </div>
                          <div class="font-size-10 text-right">
                            <span class="margin-right-5"><i class="ion-arrow-graph-down-right"></i></span>
                            <span class="">14%</span>
                            <span class="">less than last week</span>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="col-md-3">

                      <div class="widget">
                        <div class="widget-content padding-15   bg-orange-700 white shadow height  clearfix">
                          <div class="pull-left white">
                            <i> <img src="images/icon-top-star.png" alt="img" height="50"> </i>
                          </div>
                          <div class="font-size-24 text-right pull-right1 margin-bottom-5">
                            <div class="">
                              <b class="counter-number">9.5 </b>
                            </div>
                            <div class="counter-label text-capitalize font-size-14">Rating  </div>
                          </div>
                          <div class="font-size-10 text-right">
                            <!--<span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>-->

                            <span class="">Overall Rank:</span>
                            <b class="">08</b>
                          </div>
                        </div>
                      </div>

                    </div>


                  </div>



                    <div class="panel panel-default nav-tabs-horizontal shadow">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Cowlist" role="tab">Activities Completed</a></li>
                                <li class=""><a data-toggle="tab" href="#MilkStatistics" role="tab">Activities Pending</a></li>
                            </ul>
                            <div class="panel-actions">
                                <a class="panel-action icon " href="activities-all.php" data-toggle="tooltip" data-original-title="View All"> View All</a>
                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Cowlist" role="tabpanel">
                                    <div class="vscroll padding-right-10 " style="height:auto;">
                                        <div class="table-responsive ">
                                            <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Id</th>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                <div class="tab-pane" id="MilkStatistics" role="tabpanel">


                                    <div class="vscroll padding-right-10 " style="height:auto;">
                                        <div class="table-responsive">
                                            <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Id</th>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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
                                                    <tr>
                                                        <td><a href="">AC-855</a></td>
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

                            </div>
                        </div>
                    </div>

                </div>
            </div>







        </div>








    </div>









    <!-- <?php include_once('_footer.php'); ?> -->
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
