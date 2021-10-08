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
            <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
            <li><a href="javascript:void(0)">Page</a></li>
        </ol>
    </div>-->

      <!-- <div class="page-header padding-0 margin-bottom-30">
            <div class="widget widget-article type-flex margin-bottom-0">
                <div class="widget-header cover overlay">
                    <img class="cover-image height-160" src="images/header.jpg" alt="">
                    <div class="overlay-panel text-center vertical-align">
                        <div class="widget-metas vertical-align-middle blue-grey-800">
                            <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:30px;">Internet
                                of Logistics </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
      <div class="page-content  container-fluid">

        <div class="row no-space1  ">





          <div class="col-lg-2">

            <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Total Fleets
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                400
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    Avilable
                    <div class="font-size-16">300</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    On Route
                    <div class="font-size-16">100</div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-2">

            <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase " style="font">
                Orders
              </div>
              <div class=" margin-bottom-5 ">
                <i> <img src="images/dashboard_warehouse.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                7600
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    Pending
                    <div class="font-size-16">3600</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    In Transit
                    <div class="font-size-16">4000</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2">

            <div class="padding-15 bg-red-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Returns
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/dashboard_warehouse.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                40
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-red-600   font-size-10 padding-5  ">
                    Returns
                    <div class="font-size-16">36</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-red-600   font-size-10 padding-5  ">
                    Scheduled
                    <div class="font-size-16">04</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--
        <div class="col-lg-2">

          <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
            <div class="font-size-14 margin-bottom-10  text-uppercase ">
              Total Returns
            </div>
            <div class=" margin-bottom-5 ">
              <i> <img src="images/icon-jobs-unassinged.png" alt="img" height="40"> </i>
            </div>
            <div class="font-size-18 font-weight-600 margin-bottom-10">
              329
            </div>
            <div class="row no-space">
              <div class="col-md-6">
                <div class="  bg-blue-600   font-size-10 padding-5  ">
                  In Warehouse
                  <div class="font-size-16">300</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="  bg-blue-600   font-size-10 padding-5  ">
                  Scheduled
                  <div class="font-size-16">29</div>
                </div>
              </div>
            </div>
          </div>
        </div>
-->
          <div class="col-lg-2">

            <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Franchises
              </div>
              <div class=" margin-bottom-5 ">
                <i> <img src="images/dashboard_warehouse.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                40
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    Active
                    <div class="font-size-16">36</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    Offline
                    <div class="font-size-16">04</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2">

            <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Employees
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                329
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-blue-600   font-size-10 padding-5  ">
                    Active
                    <div class="font-size-16">300</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-blue-600   font-size-10 padding-5  ">
                    Offline
                    <div class="font-size-16">29</div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-2">
            <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Jobs
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/icon-clients.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                289
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-green-600   font-size-10 padding-5  ">
                    Inprogress
                    <div class="font-size-16">180</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-green-600   font-size-10 padding-5  ">
                    Pending
                    <div class="font-size-16">109</div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- <div class="col-lg-3">
          <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30">
            <div class="font-size-14 margin-bottom-10  text-uppercase ">
              Jobs
            </div>
            <div class=" margin-bottom-5 ">
              <i> <img src="images/icon-clients.png" alt="img" height="40"> </i>
            </div>
            <div class="font-size-18 font-weight-600 margin-bottom-10">
              289
            </div>
            <div class="row no-space">
              <div class="col-md-6">
                <div class="  bg-green-600   font-size-10 padding-5  ">
                  Inprogress
                  <div class="font-size-16">180</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="  bg-green-600   font-size-10 padding-5  ">
                  Pending
                  <div class="font-size-16">109</div>
                </div>
              </div>
            </div>
          </div>
        </div>
 -->




        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="shadow">
              <div class="widget-content  bg-red-700 height-200  white relative  margin-bottom-30 padding-0 " style="overflow:hidden;">


                <div class="padding-left-20 padding-right-20 padding-top-20">
                  <div class="row x">
                    <div class="col-xs-6">
                      <div class="margin-bottom-10">Orders Delivered</div>

                      <select type="button" class="btn bg-red-800 white btn-xs text-center margin-bottom-5" id="mrq-dd-Delivered">
                        <option>This Week</option>
                        <option>This Month</option>
                      </select>
                      <div class="font-size-30 text-nowrap " id="mrq-va"> <span class="statistic-counter">1452 </span> </div>

                      <div class="" id="mrq-vb">12% more than last week</div>
                    </div>
                    <div class="col-xs-6 text-right">
                      <div>Value of Orders Delivered</div>
                      <div class="font-size-26 text-nowrap" id="mrq-vc"> 1800 </div>
                      <div class="font-size-10"><i class="ion-arrow-graph-up-right"></i> <span id="mrq-vd"> 07% lower than estimated </span></div>

                    </div>




                    <script>
                      $("#mrq-dd-Delivered").on('change', function () {
                        if (this.value.trim().toLowerCase().includes('week')) {
                          $("#mrq-va").text('1452 ')
                          $("#mrq-vb").text('12% more than last week')
                          $("#mrq-vc").text('1800')
                          $("#mrq-vd").text('07% lower than estimated')
                        }
                        else {
                          $("#mrq-va").text('12452 ')
                          $("#mrq-vb").text('19% more than last week')
                          $("#mrq-vc").text('3800')
                          $("#mrq-vd").text('41% lower than estimated')
                        }
                      })
                    </script>

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
                            height: 80,
                          },
                          legend: {
                            show: false,
                            position: 'bottom',
                          },
                          data: {
                            columns: [
                              ['Reviews (Points)', 180, 140, 170, 160, 180, 150, 180],
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
          <div class="col-lg-2">
            <div class="">



              <div class="widget-content padding-15 bg-cyan-700 height-200 text-center relative shadow">
                <div class="white margin-top-0">
                  <div class="counter-number-group">
                    <div class=" font-size-14 margin-bottom-10"> Orders <br /> Recieved</div>
                    <select type="button" class="btn bg-cyan-800 white btn-xs text-center margin-bottom-10" id="mrq-dd-Recieved">
                      <option>This Week</option>
                      <option>This Month</option>
                    </select>
                    <div class="">
                      <i> <img src="images/icon-parcel-delievered.png" alt="img" height="30" class=""> </i>
                    </div>
                    <span class="font-size-24" id="mrq-va1">650</span>

                  </div>

                  <div class="font-size-10">
                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                    <span class="" id="mrq-va2">10% more than yesterday</span>
                  </div>
                </div>


                <script>
                  $("#mrq-dd-Recieved").on('change', function () {
                    if (this.value.trim().toLowerCase().includes('week')) {
                      $("#mrq-va1").text('650 ')
                      $("#mrq-va2").text('10% more than yesterday')

                    }
                    else {
                      $("#mrq-va1").text('1750 ')
                      $("#mrq-va2").text('18% more than yesterday')
                    }
                  })
                </script>
              </div>

            </div>


          </div>

          <div class="col-lg-5 ">


            <div class="panel panel-default  card  light">
              <div class="panel-heading  margin-bottom-0">
                <h3 class="panel-title font-weight-600  ">Statistics</h3>
              </div>
              <div class="nav-tabs-vertical bg-grey-100   shadow">
                <ul class="nav nav-tabs nav-tabs-solid " data-plugin="nav-tabs" role="tablist">
                  <li class="active"><a data-toggle="tab" href="#exampleTabsLineLeftOne" role="tab" aria-expanded="true">Orders Returned</a></li>
                  <li class=""><a data-toggle="tab" href="#exampleTabsLineLeftTwo" a="" role="tab" aria-expanded="false">Orders Delivered</a></li>



                </ul>

                <div class="tab-content " style="height:150px;">
                  <div class="tab-pane active " id="exampleTabsLineLeftOne" role="tabpanel">
                    <div class="row">

                      <div class="col-sm-6  ">
                        <div class="c100 p60 purple small ">
                          <span class="pointer">70</span>
                          <div class="slice ">
                            <div class="bar"></div>
                            <div class="fill"></div>
                          </div>
                        </div>
                      </div>



                      <div class="col-sm-6   ">
                        <ul class="list-unstyled margin-top-10 text-left margin-bottom-0 ">
                          <li>
                            <h5 class="font-size-12 margin-bottom-5">
                              Reschedule
                              <span class="pull-right">50</span>
                            </h5>

                            <div class="progress  margin-bottom-10">
                              <div class="progress-bar progress-bar-info bg-orange-300" style="width: 80%" role="progressbar">

                              </div>
                            </div>
                          </li>
                          <li>
                            <h5 class="font-size-12 margin-bottom-5">
                              Recall
                              <span class="pull-right">20</span>
                            </h5>
                            <div class="progress margin-bottom-10">
                              <div class="progress-bar progress-bar-info  bg-red-400" style="width: 50%" role="progressbar">

                              </div>
                            </div>
                          </li>

                        </ul>
                      </div>

                    </div>
                  </div>
                  <div class="tab-pane" id="exampleTabsLineLeftTwo" role="tabpanel">
                    <div class="row">

                      <div class="col-sm-6  ">
                        <div class="c100 p80 green small ">
                          <span class="pointer">450</span>
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
                              On time
                              <span class="pull-right">390</span>
                            </h5>

                            <div class="progress  margin-bottom-10">
                              <div class="progress-bar progress-bar-info bg-green-300" style="width: 80%" role="progressbar">

                              </div>
                            </div>
                          </li>
                          <li>
                            <h5 class="font-size-12 margin-bottom-5">
                              Delayed
                              <span class="pull-right">60</span>
                            </h5>
                            <div class="progress margin-bottom-10">
                              <div class="progress-bar progress-bar-info  bg-red-400" style="width: 10%" role="progressbar">

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
        <div class="row">
          <div class="col-lg-6 ">


            <div class="panel panel-default  card  light">
              <div class="panel-heading  margin-bottom-0">
                <h3 class="panel-title font-weight-600  ">Work Load</h3>
              </div>
              <div class="panel-body padding-15">
                <div class="margin-bottom-15 clearfix text-center">
                  <div class="form-group1">

                    <div class="inline-block">
                      <select class="form-control input-sm" id="waq-class1">
                        <option>This Month</option>
                        <option>This Year</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="chartbox">
                  <div id="chart-www"></div>
                  <script>
                    var simple_line_chart;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_chart = c3.generate({
                          bindto: '#chart-www',
                          size: {
                            height: 180,
                          },
                          legend: {
                            show: true,
                            position: 'bottom',
                          },
                          data: {
                            columns: [
                              ['Orders Recieved', 95, 90, 50, 70, 85, 65, 92],
                              ['Orders Dispatched', 75, 90, 55, 80, 63, 72, 39],
                              ['Orders Pending', 33, 12, 40, 65, 56, 87, 43],
                            ],
                            type: 'area',
                          },
                          // subchart: {
                          //     show: true
                          // },

                          color: {
                            pattern: ['#e98f2e', '#555', '#14f8f8']
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
                              categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
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
                  <script>
                    $("#waq-class1").on('change', function () {
                      if (this.value.trim().toLowerCase().includes('month')) {
                        simple_line_chart.load({
                          unload: true,
                          columns: [
                            ['Orders Recieved', 95, 90, 50, 70, 85, 65, 92],
                            ['Orders Dispatched', 75, 90, 55, 80, 63, 72, 39],
                            ['Orders Pending', 33, 12, 40, 65, 56, 87, 43],
                          ],
                        });
                      }
                      else {
                        simple_line_chart.load({
                          unload: true,
                          columns: [
                            ['Orders Recieved', 195, 190, 150, 170, 185, 165, 192],
                            ['Orders Dispatched', 175, 190, 155, 180, 163, 172, 139],
                            ['Orders Pending', 133, 112, 140, 165, 156, 187, 143],
                          ],
                        });
                      }
                    });

                  </script>
                </div>


              </div>


            </div>




          </div>

          <div class="col-lg-6">
            <div class="panel panel-default card light  margin-bottom-10">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Maintenances</h3>

              </div>
              <div class="panel-body">

                <div class="margin-bottom-10 clearfix text-center">
                  <div class="form-group1">
                    <div class="inline-block">
                      <select class="form-control input-sm" id="waq-class2">
                        <option>This Month</option>
                        <option>This Year</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="chartbox">
                  <div id="chart-hours1"></div>
                  <script>
                    var simple_line_chart1;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_chart1 = c3.generate({
                          bindto: '#chart-hours1',
                          size: {
                            height: 185,
                          },
                          legend: {
                            show: false,
                            position: 'bottom',
                          },
                          data: {
                            columns: [
                              ['Numbers', 250, 85, 55],
                            ],
                            type: 'bar',
                          },
                          color: {
                            pattern: ['#465bd4', '#178d81', '#ec9940']
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
                              categories: ['Pending', 'Inprogress', 'Completed']
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
                  <script>
                    $("#waq-class2").on('change', function () {
                      if (this.value.trim().toLowerCase().includes('month')) {
                        simple_line_chart1.load({
                          unload: true,
                          columns: [
                            ['Numbers', 250, 85, 55],
                          ],
                        });
                      }
                      else {
                        simple_line_chart1.load({
                          unload: true,
                          columns: [
                            ['Numbers', 285, 550, 155],
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
        <div class="row ">


          <div class="col-md-5">

            <div class="panel panel-default  card shadow light">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Fleets Utilization
                </h3>

              </div>
              <div class="panel-body ">
                <div class="margin-bottom-10 clearfix text-center">
                  <div class="form-group1">
                    <div class="inline-block">
                      <select class="form-control input-sm" id="mrq-dd-Utilization">
                        <option>Current Status</option>
                        <option>This Month </option>
                        <!-- <option>This Year</option> -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="chartbox">
                  <div id="chart-Utilization"></div>
                  <script>
                    var simple_line_Utilization;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_Utilization = c3.generate({
                          bindto: '#chart-Utilization',
                          size: {
                            height: 250,
                          },
                          legend: {
                            show: true,
                            position: 'bottom',
                          },

                          data: {
                            columns: [
                              ['On Route', 12, 18, 25, 14, 20, 19],
                              ['Available', 75, 65, 70, 55, 118, 55],

                            ],
                            type: 'bar',
                            types: {
                              Current_Vistors: 'bar',
                              Avg_Time_Spent: 'bar',
                              Total_Visitors: 'bar',
                              Data: 'spline',
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
                              categories: ['Marshall Goods', 'SILK Logistics', 'Balance Relocation', 'SILK Packers', 'Goods Transport', 'Adam Motors']
                            },
                            y: {
                              label: {
                                show: false,
                                text: '',
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
                        simple_line_Utilization.load({
                          unload: true,
                          columns: [
                            ['On Route', 12, 18, 25, 14, 20, 19],
                            ['Available', 75, 65, 70, 55, 118, 55],
                          ],
                        });
                      }
                      else {
                        simple_line_Utilization.load({
                          unload: true,
                          columns: [
                            ['On Route', 112, 118, 125, 114],
                            ['Available', 175, 165, 700, 155],
                          ],
                        });
                      }
                    });
                  </script>
                </div>





              </div>

            </div>



          </div>


          <div class="col-md-4">

            <div class="panel panel-default  card shadow light">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Returns Statistics</h3>

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
                              ['Return', 24, 31, 11, 15, 17, 31],
                            ],
                            type: 'bar',
                          },
                          color: {
                            pattern: ['#2b9646']
                          },
                          axis: {
                            rotated: true,
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

                          ['Return', 24, 31, 11, 15, 17, 31],
                        ],


                      });
                    }
                    else {
                      simple_line_chart_Returns.load({
                        unload: true,
                        columns: [

                          ['Return', 124, 131, 111, 115, 117, 131],
                        ],

                      });
                    }
                  });
                </script>
              </div>

            </div>



          </div>

          <div class="col-md-3">

            <div class="panel panel-default  card shadow light">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Overall Fleets Usage</h3>

              </div>
              <div class="panel-body ">
                <div class="margin-bottom-10 clearfix text-center">
                  <div class="form-group1">
                    <div class="inline-block">
                      <select class="form-control input-sm" id="mrq-dd-Class">
                        <option>This Month </option>
                        <option>This Year</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="chartbox">
                  <div id="chart-alerts1"></div>
                  <script>
                    var simple_line_Class;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_Class = c3.generate({
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
                              ['On Route ', 35,],
                              ['Waiting ', 50],
                              ['Avilable ', 25,],
                            ],
                            type: 'pie',
                          },
                          color: {
                            // pattern: ['#ef6666', '#36ab7a']
                          },
                          axis: {
                            rotated: false,
                            x: {
                              label: {
                                text: 'Jobs',
                                position: 'outer-center'
                              },
                              type: 'category',
                              categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                            },
                            y: {
                              label: {
                                text: 'No of Jobs ',
                                position: 'outer-middle'
                              },
                            },
                          },
                          bar: {
                            width: {
                              ratio: 0.1
                            }
                          }
                        });
                      })();
                    });
                  </script>




                  <script>

                    $("#mrq-dd-Class").on('change', function () {

                      if (this.value.trim().toLowerCase().includes('month')) {
                        simple_line_Class.load({
                          unload: true,
                          columns: [
                            ['On Route ', 35,],
                            ['Waiting ', 50],
                            ['Avilable ', 25,],
                          ],
                        });
                      }
                      else {
                        simple_line_Class.load({
                          unload: true,
                          columns: [
                            ['On Route ', 135,],
                            ['Waiting ', 150],
                            ['Avilable ', 125,],
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











    </div>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>





  </body>

</html>