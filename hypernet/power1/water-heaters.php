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
    <div class="breadcrumb-box">
      <ol class="breadcrumb breadcrumb-arrow ">
        <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
        <li><a href="javascript:void(0)">Water Heater</a></li>
      </ol>
    </div>



    <div class="page-content  container-fluid">


      <div class="row">
        <div class="col-lg-12">

          <div class="row">
            <div class="col-lg-4">

              <div class="row no-space1">
                <div class="col-md-12">
                  <div class="widget shadow card">
                    <div class="widget-content padding-10 bg-orange-800 height-100 text-center relative ">
                      <div class="white">
                        <div class="counter-label margin-bottom-10   clearfix">
                          <span class="font-size-14 ">
                            Total Water Heaters
                          </span>
                        </div>
                        <div class="">
                          <span class="counter-icon margin-right-15 ">
                            <i> <img src="images/icon-water-heater.png" alt="img" height="40"> </i>
                          </span>
                          <b class="font-size-24" style="position:relative; top:5px;">04</b>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget shadow card">
                    <div class="widget-content padding-top-0 pa bg-green-700 vertical-align height-90 white  text-center relative ">
                      <div class="vertical-align-middle">
                        <div class="counter-label margin-bottom-0 clearfix">
                          <span class="font-size-14 ">Active</span>
                        </div>
                        <b class="font-size-16">03</b>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="widget shadow card">
                    <div class="widget-content padding-top-0 pa bg-grey-600 vertical-align height-90 white  text-center relative ">
                      <div class="vertical-align-middle">
                        <div class="counter-label margin-bottom-0 clearfix">
                          <span class="font-size-14 ">Inactive</span>
                        </div>
                        <b class="font-size-16">01</b>
                      </div>
                    </div>
                  </div>
                </div>






              </div>












            </div>

            <div class="col-lg-2">
              <div class="widget  margin-bottom-30 shadow card">
                <div class="widget-content  padding-15 bg-red-700 " style="height:220px;">
                  <div class="counter counter-md counter-inverse text-center padding-top-0">
                    <div class="">
                      <div class="text-uppercase  font-size-14 margin-bottom-10"> <b> Most Error   <br /> Occurring </b></div>


                      <div class="dropdown ">
                        <button type="button" class="btn bg-red-800 btn-block white dropdown-toggle btn-xs" data-toggle="dropdown">
                          Till Today
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;" >
                          <li role="presentation"><a href="javascript:void(0)">Till Today</a></li>
                          <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                          <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                        </ul>
                      </div>


                      <div>
                        <a href="" data-toggle="popover" data-original-title="Devices" data-trigger="hover" data-container="body" data-placement="right" data-html="true" id="name1" class="white"> <div class="font-size-20 margin-top-10 margin-bottom-5 font-weight-600"> EWH-S55CSE</div> </a>
                        <div id="popover-content-name1" class="hide">
                          <table class="table table-condensed  table-striped1 margin-bottom-0  font-size-12  ">
                            <tbody>

                              <tr>
                                <th><b> WD-102</b></th>
                                <td>A385 </td>
                                <td>11:25am - 07/12/18</td>
                              </tr>
                              <tr>
                                <th><b> WD-122</b></th>
                                <td>A385 </td>
                                <td>11:25am - 07/12/18</td>
                              </tr>
                            </tbody>
                          </table>

                        </div>
                      </div>
                      <div class="font-size-14 margin-bottom-30 margin-top-5">35 Errors  </div>




                      <!--<div> <div class="label label-outline label-default  white "> </div> </div>-->
                      <div class="font-size-10 margin-top-10">
                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                        <span class="">20%</span>
                        <span class="">more than yesterday</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-2">
              <div class="widget  margin-bottom-30 shadow card">
                <div class="widget-content  padding-15 bg-teal-700 " style="height:220px;">
                  <div class="counter counter-md counter-inverse text-center padding-top-0">
                    <div class="counter-number-group">
                      <div class="text-uppercase  font-size-14 margin-bottom-10"> <b> Most Sold    <br />  Model  </b></div>
                      <div class="dropdown ">
                        <button type="button" class="btn bg-teal-800 btn-block white dropdown-toggle btn-xs" data-toggle="dropdown">
                          Till Today
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">
                          <li role="presentation"><a href="javascript:void(0)">Till Today</a></li>
                          <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                          <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                        </ul>
                      </div>
                      <div class="font-size-20 margin-top-10 margin-bottom-5 font-weight-600"> WH-018</div>

                      <div class="font-size-14"> 03 Units </div>
                      <div class="font-size-10 margin-top-30">
                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                        <span class="">10%</span>
                        <span class="">more than yesterday</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-lg-2">



              <div class="widget  margin-bottom-30 shadow card">
                <div class="widget-content padding-15   bg-green-700 " style="height:220px;">

                  <div class="counter counter-md counter-inverse text-center padding-top-0">
                    <div class=" ">
                      <div class=" ">
                        <div class="text-uppercase  font-size-14 margin-bottom-10 font-weight-600"> Average Usage <br />  All Devices  </div>
                        <!--<div class="label bg-red-700">This Month</div>-->
                        <div class="dropdown ">
                          <button type="button" class="btn bg-green-800 btn-block white dropdown-toggle btn-xs" data-toggle="dropdown">
                            Till Today
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">
                            <li role="presentation"><a href="javascript:void(0)">Till Today</a></li>
                            <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                            <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                          </ul>
                        </div>
                      </div>


                      <div class="font-size-30 margin-top-30 margin-bottom-0">
                        <i> <img src="images/icon-hours.png" alt="img" height="40" class=""> </i>  7.5 <span class="font-size-12">Hours</span>
                      </div>
                      <div class="font-size-10 margin-top-20">
                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                        <span class="">10%</span>
                        <span class="">more than yesterday</span>
                      </div>
                    </div>


                  </div>





                </div>
              </div>
            </div>
            <div class="col-lg-2">



              <div class="widget  margin-bottom-30 shadow card">
                <div class="widget-content   bg-blue-700  padding-15  " style="height:220px;">

                  <div class="counter counter-md counter-inverse text-center padding-top-0">
                    <div class=" ">
                      <div class=" ">
                        <div class="text-uppercase  font-size-14 margin-bottom-10 font-weight-600"> Average Errors <br />  All Devices  </div>
                        <!--<div class="label bg-red-700">This Month</div>-->
                        <div class="dropdown ">
                          <button type="button" class="btn bg-blue-800 btn-block white dropdown-toggle btn-xs" data-toggle="dropdown">
                            Till Today
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">
                            <li role="presentation"><a href="javascript:void(0)">Till Today</a></li>
                            <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                            <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                          </ul>
                        </div>
                      </div>


                      <div class="font-size-30 margin-top-30 margin-bottom-0">
                        <i> <img src="images/icon-errors.png" alt="img" height="40" class=""> </i>  15 <span class="font-size-12">Errors</span>
                      </div>
                      <div class="font-size-10 margin-top-20">
                        <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                        <span class="">10%</span>
                        <span class="">more than yesterday</span>
                      </div>
                    </div>


                  </div>





                </div>
              </div>
            </div>

          </div>


          <div class="row">
            <div class="col-lg-7  ">
              <div class="panel panel-default nav-tabs-horizontal shadow">
                <div class="panel-heading font-weight-600">
                  <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#listing" aria-expanded="true">Listing </a></li>
                    <li class=""><a data-toggle="tab" href="#Unit">Statistics</a></li>
                  </ul>
                  <div class="panel-actions">
                    <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                  </div>
                </div>
                <div class="panel-body ">
                  <div class="tab-content">
                    <div class="tab-pane active" id="listing" role="tabpanel">


                      <div class="margin-bottom-20  row">
                        <div class="col-sm-6">
                          <div class="form-group1 margin-bottom-0">
                            <div class="inline-block pull-left margin-right-10">
                              <input type="text" class="form-control input-sm " placeholder="Search">
                            </div>
                            <div class="inline-block pull-left margin-right-10">
                              <select class="form-control input-sm ">
                                <option>All</option>
                                <option>Active</option>
                                <option>Inactive</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 text-right">
                          <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                            <label class="btn btn-outline btn-default ">
                              <input type="radio" name="multiples" > Today
                            </label>
                            <label class="btn btn-outline btn-success active ">
                              Yesterday
                            </label>
                            <label class="btn btn-outline btn-default ">
                              This Week
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                        </div>
                      </div>


                      <div class="table-responsive vscroll " style="max-height:180px;">
                        <table class="table table-condensed  margin-bottom-0   " id="dt-cowlist1x">
                          <thead>
                            <tr class="">
                              <th class=""> ID</th>
                              <th class="text-left">Make</th>
                              <th class="text-left">Model</th>
                              <th class="text-left">Type</th>
                              <th class="text-center">Status</th>
                              <th class="text-center"> Energy Consumed </th>
                              <th class="text-center"> Usage Hours</th>
                              <th class="text-center">Errors </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>  <a href="water-heater.php"> WD-102 </a></td>
                              <td>CATA</td>
                              <td>EWH-S55CSE</td>
                              <td>Vertical </td>
                              <td class="text-center"><span class="label label-info">Active</span></td>
                              <td class="text-center">23 kWh</td>
                              <td class="text-center">12</td>
                              <td class="text-center">03</td>
                            </tr>
                            <tr>
                              <td>  <a href="water-heater.php"> WD-107 </a></td>
                              <td>CANON</td>
                              <td>  EWH-15LCM</td>
                              <td>Horizontal</td>
                              <td class="text-center"><span class="label label-default">Inactive</span></td>
                              <td class="text-center">31 kWh</td>
                              <td class="text-center">18</td>
                              <td class="text-center">13</td>
                            </tr>
                            <tr>
                              <td>  <a href="water-heater.php"> WD-109 </a></td>
                              <td> CATA</td>
                              <td>EWH-S45CSE</td>
                              <td>Vertical </td>
                              <td class="text-center"><span class="label label-info">Active</span></td>
                              <td class="text-center">23 kWh</td>
                              <td class="text-center">12</td>
                              <td class="text-center">03</td>
                            </tr>
                            <tr>
                              <td>  <a href="water-heater.php"> WD-202 </a></td>
                              <td>ELBA</td>
                              <td>EWH-E3883C</td>
                              <td>Vertical</td>
                              <td class="text-center"><span class="label label-info">Active</span></td>
                              <td class="text-center">28 kWh</td>
                              <td class="text-center">10</td>
                              <td class="text-center">0</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </div>
                    <div class="tab-pane" id="Unit" role="tabpanel">
                      <div class="text-center margin-bottom-10">
                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                          <label class="btn btn-outline btn-success active">
                            <input type="radio" name="multiples" checked=""> Today
                          </label>
                          <label class="btn btn-outline btn-default ">
                            Yesterday
                          </label>
                          <label class="btn btn-outline btn-default ">
                            This Week
                          </label>
                        </div>
                      </div>
                      <div class="chartbox">
                        <div id="chart-cccc" class="c3" style="max-height: 230px; position: relative;"><svg width="1216.4000244140625" height="230" style="overflow: hidden;"><defs><clipPath id="c3-1541409242160-clip"><rect width="1154.4000244140625" height="186"></rect></clipPath><clipPath id="c3-1541409242160-clip-xaxis"><rect x="-61" y="-20" width="1246.4000244140625" height="60"></rect></clipPath><clipPath id="c3-1541409242160-clip-yaxis"><rect x="-59" y="-4" width="80" height="210"></rect></clipPath><clipPath id="c3-1541409242160-clip-grid"><rect width="1154.4000244140625" height="186"></rect></clipPath><clipPath id="c3-1541409242160-clip-subchart"><rect width="1154.4000244140625"></rect></clipPath></defs><g transform="translate(60.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="577.2000122070312" y="93" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="1154.4000244140625" height="186" style="opacity: 0;"></rect><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="186" style="visibility: hidden;"></line></g></g><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="0" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-1" x="58" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-2" x="116" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-3" x="174" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-4" x="231" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-5" x="289" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-6" x="347" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-7" x="405" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-8" x="462" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-9" x="520" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-10" x="578" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-11" x="635" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-12" x="693" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-13" x="751" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-14" x="809" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-15" x="866" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-16" x="924" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-17" x="982" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-18" x="1039" y="0" width="58" height="186"></rect><rect class=" c3-event-rect c3-event-rect-19" x="1097" y="0" width="58" height="186"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Title-1" style="pointer-events: none;"><g class=" c3-shapes c3-shapes-Title-1 c3-bars c3-bars-Title-1" style="cursor: pointer;"><path class=" c3-shape c3-shape-0 c3-bar c3-bar-0" d="M 20.3,186 L20.3,59.863636363636374 L37.7,59.863636363636374 L37.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-1 c3-bar c3-bar-1" d="M 78.3,186 L78.3,49.35227272727273 L95.69999999999999,49.35227272727273 L95.69999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-2 c3-bar c3-bar-2" d="M 136.3,186 L136.3,38.8409090909091 L153.70000000000002,38.8409090909091 L153.70000000000002,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-3 c3-bar c3-bar-3" d="M 194.3,186 L194.3,36.738636363636374 L211.70000000000002,36.738636363636374 L211.70000000000002,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-4 c3-bar c3-bar-4" d="M 251.3,186 L251.3,28.32954545454545 L268.7,28.32954545454545 L268.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-5 c3-bar c3-bar-5" d="M 309.3,186 L309.3,26.227272727272727 L326.7,26.227272727272727 L326.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-6 c3-bar c3-bar-6" d="M 367.3,186 L367.3,17.818181818181824 L384.7,17.818181818181824 L384.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-7 c3-bar c3-bar-7" d="M 425.3,186 L425.3,28.32954545454545 L442.7,28.32954545454545 L442.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-8 c3-bar c3-bar-8" d="M 482.3,186 L482.3,26.227272727272727 L499.7,26.227272727272727 L499.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-9 c3-bar c3-bar-9" d="M 540.3,186 L540.3,17.818181818181824 L557.6999999999999,17.818181818181824 L557.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-10 c3-bar c3-bar-10" d="M 598.3,186 L598.3,59.863636363636374 L615.6999999999999,59.863636363636374 L615.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-11 c3-bar c3-bar-11" d="M 655.3,186 L655.3,49.35227272727273 L672.6999999999999,49.35227272727273 L672.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-12 c3-bar c3-bar-12" d="M 713.3,186 L713.3,38.8409090909091 L730.6999999999999,38.8409090909091 L730.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-13 c3-bar c3-bar-13" d="M 771.3,186 L771.3,36.738636363636374 L788.6999999999999,36.738636363636374 L788.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-14 c3-bar c3-bar-14" d="M 829.3,186 L829.3,28.32954545454545 L846.6999999999999,28.32954545454545 L846.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-15 c3-bar c3-bar-15" d="M 886.3,186 L886.3,26.227272727272727 L903.6999999999999,26.227272727272727 L903.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-16 c3-bar c3-bar-16" d="M 944.3,186 L944.3,17.818181818181824 L961.6999999999999,17.818181818181824 L961.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-17 c3-bar c3-bar-17" d="M 1002.3,186 L1002.3,28.32954545454545 L1019.6999999999999,28.32954545454545 L1019.6999999999999,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-18 c3-bar c3-bar-18" d="M 1059.3,186 L1059.3,26.227272727272727 L1076.7,26.227272727272727 L1076.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path><path class=" c3-shape c3-shape-19 c3-bar c3-bar-19" d="M 1117.3,186 L1117.3,17.818181818181824 L1134.7,17.818181818181824 L1134.7,186 z" style="stroke: rgb(242, 166, 84); fill: rgb(242, 166, 84); opacity: 1;"></path></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Title-1" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Title-1 c3-lines c3-lines-Title-1"></g><g class=" c3-shapes c3-shapes-Title-1 c3-areas c3-areas-Title-1"></g><g class=" c3-selected-circles c3-selected-circles-Title-1"></g><g class=" c3-shapes c3-shapes-Title-1 c3-circles c3-circles-Title-1" style="cursor: pointer;"></g></g></g><g class="c3-chart-arcs" transform="translate(577.2000122070312,88)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Title-1" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Title-1"></g></g></g></g><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-xaxis)" transform="translate(0,186)" style="visibility: visible; opacity: 1;"><text class="c3-axis-x-label" transform="" style="text-anchor: middle;" x="577.2000122070312" dx="0" dy="3em">Top 20 Cows</text><g class="tick" transform="translate(29, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-102</tspan></text></g><g class="tick" transform="translate(87, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-105</tspan></text></g><g class="tick" transform="translate(145, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-192</tspan></text></g><g class="tick" transform="translate(203, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-202</tspan></text></g><g class="tick" transform="translate(260, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-402</tspan></text></g><g class="tick" transform="translate(318, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-111</tspan></text></g><g class="tick" transform="translate(376, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-182</tspan></text></g><g class="tick" transform="translate(434, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-552</tspan></text></g><g class="tick" transform="translate(491, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-141</tspan></text></g><g class="tick" transform="translate(549, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-182</tspan></text></g><g class="tick" transform="translate(607, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(664, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(722, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(780, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(838, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(895, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(953, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(1011, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(1068, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(1126, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H1154.4000244140625V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: middle;" x="-93" dx="0" dy="-36.71875">Ltr </text><g class="tick" transform="translate(0,186)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,165)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,144)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,123)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><g class="tick" transform="translate(0,102)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">80</tspan></text></g><g class="tick" transform="translate(0,81)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">100</tspan></text></g><g class="tick" transform="translate(0,60)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">120</tspan></text></g><g class="tick" transform="translate(0,39)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">140</tspan></text></g><g class="tick" transform="translate(0,18)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">160</tspan></text></g><path class="domain" d="M-6,1H0V186H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(1154.4000244140625,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text><g class="tick" transform="translate(0,186)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,168)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,149)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,131)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,112)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,94)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,75)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,57)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,38)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V186H6"></path></g></g><g transform="translate(40.5,230.5)" style="visibility: hidden;"><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="1164.4000244140625" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://design.HyperNymbiz.com/html/ioa/herd.html#c3-1541409242160-clip-xaxis)" style="visibility: hidden; opacity: 1;"><g class="tick" transform="translate(29, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-102</tspan></text></g><g class="tick" transform="translate(87, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-105</tspan></text></g><g class="tick" transform="translate(145, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-192</tspan></text></g><g class="tick" transform="translate(203, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-202</tspan></text></g><g class="tick" transform="translate(260, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-402</tspan></text></g><g class="tick" transform="translate(318, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-111</tspan></text></g><g class="tick" transform="translate(376, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-182</tspan></text></g><g class="tick" transform="translate(434, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-552</tspan></text></g><g class="tick" transform="translate(491, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-141</tspan></text></g><g class="tick" transform="translate(549, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">CW-182</tspan></text></g><g class="tick" transform="translate(607, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(664, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(722, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(780, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(838, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(895, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(953, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(1011, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(1068, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="6"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(1126, 0)" style="opacity: 1;"><line x1="29" x2="29" y2="0"></line><text x="0" y="9" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H1154.4000244140625V6"></path></g></g><g transform="translate(0,230)" style="visibility: hidden;"></g><text class="c3-title" x="608.2000122070312" y="0"></text></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div>
                        <script>
                          $(document).ready(function ($) {
                            (function () {
                              var simple_line_chart = c3.generate({
                                bindto: '#chart-cccc',
                                size: {
                                  height: 165,
                                },
                                legend: {
                                  show: true,
                                  position: 'bottom',
                                },

                                data: {
                                  columns: [
                                       ['Unit Consumed', 27, 17, 37, 33],
                                       ['Usage Hours', 08, 11, 16, 12],
                                       ['Errors', 2, 7, 5, 9],
                                  ],
                                  type: 'bar',

                                },

                                axis: {

                                  rotated: false,
                                  x: {
                                    label: {
                                      text: 'Devices',
                                      position: 'outer-center'
                                    },
                                    type: 'category',
                                    categories: ['WD-102', 'WD-107', 'WD-109', 'WD-202']
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



                      </div>
                    </div>





                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="panel panel-default shadow     ">
                <div class="panel-heading ">
                  <div class="panel-actions ">

                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                  </div>
                  <h3 class="panel-title "> <b> Errors Log</b></h3>
                </div>
                <div class="panel-body ">
                  <div class="">
                    <div class="vscroll " style="max-height:195px;">
                      <table class="table table-striped margin-bottom-0  ">
                        <tbody>
                          <tr>
                            <td width="80">
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                              </div>
                            </td>
                            <td width="110" class="text-left"> <b class="small"> 12:30am - Today</b>   </td>
                            <td width="60"  > <b class="">AC-189</b>   </td>
                            <td> <div class=""> Defective fl oat switch or short circuit </div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-112</b>   </td>
                            <td> <div class=""> Broken wires in, short circuit of, or disconnection </div></td>
                          </tr>

                          <tr>
                            <td >
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 01:11am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-145</b>   </td>
                            <td> <div class=""> Defective electronic expansion valve coil </div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A856   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 04:05am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-585</b>   </td>
                            <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>
                          </tr>
                          <tr>
                            <td  >
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 03:30am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-695</b>   </td>
                            <td> <div class=""> Defective fl oat switch or short circuit connector </div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 11:17am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-123</b>   </td>
                            <td> <div class=""> Broken wires in, short circuit of, or disconnection of connectors from the fan motor harness </div></td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 08:25am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-178</b>   </td>
                            <td> <div class=""> Defective electronic expansion valve coil </div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media ">
                                <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                <div class="media-body margin-0"><span class="label label-danger "> A856   </span> </div>
                              </div>
                            </td>
                            <td class="text-left"> <b class="small"> 01:25am - 07/12/18</b>   </td>
                            <td class=""> <b class="">AC-585</b>   </td>
                            <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>
                          </tr>
                      </table>
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
          <div class="panel panel-default   shadow  ">
            <div class="panel-heading ">
              <div class="panel-actions ">
                <select class="">
                  <option>All</option>
                  <option>Active</option>
                  <option>Inactivs</option>
                </select>
                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
              </div>
              <h3 class="panel-title "> <b> Location</b></h3>
            </div>
            <div class="panel-body">
              <div class="mapbox   margin-bottom-0 ">

                <div class="icon" style="left:35%; top:25%;">
                  <a data-toggle="popover" data-original-title="WD-102" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                    <img src="images/icon-map-water-heater.png" alt="img" height="50">
                  </a>

                  <div id="popover-content-start" class="hide">
                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                      <tr>
                        <th> Last Updated    </th>
                        <td class="text-left">Feb, 08, 2018, 7:00:57 PM</td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="icon" style="left:45%; top:45%;">
                  <a data-toggle="popover" data-original-title="WD-107" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                    <img src="images/icon-map-water-heater.png" alt="img" height="50">
                  </a>

                  <div id="popover-content-start2" class="hide">
                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                      <tr>
                        <th> Last Updated    </th>
                        <td class="text-left">Feb, 02, 2018,2:00:57 PM</td>
                      </tr>
                    </table>
                  </div>
                </div>


                <div class="icon" style="left:75%; top:15%;">
                  <a data-toggle="popover" data-original-title="WD-109" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                    <img src="images/icon-map-water-heater.png" alt="img" height="50">
                  </a>

                  <div id="popover-content-start3" class="hide">
                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                      <tr>
                        <th> Last Updated    </th>
                        <td class="text-left">Feb, 03, 2018, 3:00:57 PM</td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="icon" style="left:22%; top:29%;">
                  <a data-toggle="popover" data-original-title="WD-202" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start4">
                    <img src="images/icon-map-water-heater.png" alt="img" height="50">
                  </a>

                  <div id="popover-content-start4" class="hide">
                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                      <tr>
                        <th> Last Updated    </th>
                        <td class="text-left">Feb, 04, 2018, 4:00:57 PM</td>
                      </tr>
                    </table>
                  </div>
                </div>



                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d369.6785950985442!2d73.04687817802179!3d33.69338255818435!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1535443495143" width="100%"
                        height="300" frameborder="0" style="border:0; " allowfullscreen class="map pull-right1"></iframe>



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
