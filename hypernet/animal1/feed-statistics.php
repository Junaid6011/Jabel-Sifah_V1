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
        <li><a href="javascript:void(0)">Feed Statistics</a></li>
        <!--<li class="active">Dashboard</li>-->
      </ol>
    </div>


    <div class="page-content  container-fluid">
      <div class="row">

        <div class="col-md-8">

          <div class="row no-space">
            <div class="col-md-4">
              <div class="widget shadow">
                <div class="widget-content padding-10 bg-teal-700 height-100 text-center relative">
                  <div class="white">
                    <div class="counter-label margin-bottom-5   clearfix">
                      <span class="font-size-14 ">
                        Feed In Stock
                      </span>
                    </div>
                    <div class="">
                      <span class="counter-icon margin-right-5 ">
                        <i> <img src="images/icon-zones.png" alt="img" height="24"> </i>
                      </span>
                      <b class="font-size-24">4570 kg</b>
                    </div>
                    <span class="label white  bg-teal-700  flat right bottom">
                      Avg Consumption: 150kg daily
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-100 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">Corn</span>
                    </div>
                    <b class="font-size-16">310 Kg</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-100 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">Grains</span>
                    </div>
                    <b class="font-size-16">200 Kg</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-100 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">Hay</span>
                    </div>
                    <b class="font-size-16">240 Kg</b>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-teal-600 vertical-align height-100 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">Maize</span>
                    </div>
                    <b class="font-size-16">180 Kg</b>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>



        <div class="col-md-2">
          <div class="widget shadow">
            <div class="widget-content padding-10 bg-orange-700 height-100 text-center relative">
              <div class="white">
                <div class="counter-label margin-bottom-5 clearfix">
                  <span class="font-size-14 ">
                    Expected Restock
                  </span>
                </div>
                <div class="">

                  <b class="font-size-20">01/12/2018  </b>

                </div>

                <span class="label white  bg-orange-700  flat right bottom">
                  Based on daily consumption
                </span>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-2">
          <div class="widget shadow">
            <div class="widget-content padding-10 bg-orange-700 height-100 text-center relative">
              <div class="white">
                <div class="counter-label margin-bottom-5 clearfix">
                  <span class="font-size-14 ">
                    Last  Restock
                  </span>
                </div>
                <div class="">

                  <b class="font-size-20">01/10/2018  </b>

                </div>

                <span class="label white  bg-orange-700  flat right bottom">
                  60 days ago
                </span>
              </div>
            </div>
          </div>

        </div>


      </div>

      <div class="row">
        <div class="col-lg-6">

          <div class="shadow">
            <div class="widget-content  bg-red-700  white relative  margin-bottom-30 padding-0 " style="overflow:hidden;">


              <div class="padding-left-30 padding-right-30 padding-top-30">
                <div class="row x">
                  <div class="col-xs-8">
                    <div>Total Feed Consumed This Month</div>
                    <div class="font-size-40 text-nowrap"> 1400 Kg</div>
                    <div class="">12% less than last month</div>
                  </div>
                  <div class="col-xs-4 text-right">
                    <div style="margin-top:0px; margin-bottom:-30px;">
                      <div class="c100 p75  orange red-600">
                        <span class="pointer">75%</span>
                        <div class="slice ">
                          <div class="bar "></div>
                          <div class="fill "></div>
                        </div>
                      </div>
                    </div>
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
                          height: 150,
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

        <div class="col-lg-2">
          <div class="widget  margin-bottom-30 shadow">
            <div class="widget-content  padding-15 bg-green-700 " style="height:278px;">
              <div class="counter counter-md counter-inverse text-center padding-top-0">
                <div class="counter-number-group">
                  <div class="text-uppercase font-size-14 margin-bottom-0"> <b> Maximum Feed Consumed  </b></div>
                  <span class="label white  bg-green-800  flat right bottom font-size-10 ">
                    Last 24 Hours
                  </span>
                  <div class="margin-top-0">
                    <i> <img src="images/icon-herds3.png" alt="img" height="60" class=""> </i>
                  </div>
                  <span class="font-size-30">64 kg</span>
                  <div class="font-size-14">HR-205 </div>


                  <div class="font-size-10 margin-top-5">
                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                    <span class="">20%</span>
                    <span class="">more than last week</span>
                  </div>
                </div>
              </div>





            </div>
          </div>
        </div>
        <div class="col-lg-4">

          <div class="panel panel-default shadow">
            <div class="panel-heading ">
              <div class="panel-actions ">

                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
              </div>
              <h3 class="panel-title "> <b>Today Feed Consumed Statistics  </b></h3>
            </div>
            <div class="panel-body ">
              <div class="chartbox">

                <div id="chart-vvv"></div>
                <script>
                  $(document).ready(function ($) {
                    (function () {
                      var simple_line_chart = c3.generate({
                        bindto: '#chart-vvv',
                        size: {
                          height: 195,
                        },
                        legend: {
                          show: false,
                          position: 'bottom',
                        },
                        data: {
                          columns: [
                               ['Title 1', 40, 60, 80, 84, 60, 44, 40],
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
                              text: 'Herds',
                              position: 'outer-center'
                            },
                            type: 'category',
                            categories: ['HR-501', 'HR-201', 'HR-222', 'HR-305', 'HR-478', 'HR-850', 'HR-120']
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





      <div class="row">


        <div class="col-lg-12">


          <div class="panel panel-default shadow">
            <div class="panel-heading ">
              <div class="panel-actions ">

                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
              </div>
              <h3 class="panel-title "> <b> Feed Stock Statistics  </b></h3>
            </div>
            <div class="panel-body ">
              <div class="vscroll padding-right-10" style="height:auto;">
                <div class="table-responsive ">
                  <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                    <thead>
                      <tr class="">
                        <th class=""> Name/Type</th>
                        <th class="text-center"> Quantity In Stock (Kg)</th>
                        <th class="text-center">Status</th>
                        <th class="text-center"> Avg Daily Consumtion (Kg)</th>
                        <th class="text-center"> Expected Restock</th>
                        <th class="text-center"> Schedules </th>
                        <th class="text-center"> Consumed Rate</th>
                      </tr>
                    </thead>
                    <tbody>

                      <!-------->



                      <tr>
                        <td>Corn</td>
                        <td class="text-center"> 300 </td>
                        <td class="text-center" width="150">
                          <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                            <div class="progress-bar " role="progressbar" style="width: 35%;">
                              <span class="progress-label">25%</span>
                            </div>
                          </div>
                        </td>
                        <td class="text-center"> 25</td>
                        <td class="text-center"> 01/12/2018</td>
                        <td class="text-center">
                          <div class="days">
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs ">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">M</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">W</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">F</button>

                          </div>
                        </td>
                        <td class="text-center"> <i class="icon ion-arrow-graph-up-right"></i> 10% increased    </td>
                      </tr>
                      <tr>
                        <td>Maize</td>
                        <td class="text-center"> 170 </td>
                        <td class="text-center" width="150">
                          <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                            <div class="progress-bar " role="progressbar" style="width: 19%;">
                              <span class="progress-label">19%</span>
                            </div>
                          </div>
                        </td>
                        <td class="text-center"> 20</td>
                        <td class="text-center"> 01/12/2018</td>
                        <td class="text-center">
                          <div class="days">
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs ">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">M</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">W</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">F</button>

                          </div>
                        </td>
                        <td class="text-center"> <i class="icon ion-arrow-graph-up-right"></i> 10% increased    </td>
                      </tr>

                      <tr>
                        <td>Hay</td>
                        <td class="text-center"> 300 </td>
                        <td class="text-center" width="150">
                          <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                            <div class="progress-bar " role="progressbar" style="width: 35%;">
                              <span class="progress-label">25%</span>
                            </div>
                          </div>
                        </td>
                        <td class="text-center"> 18</td>
                        <td class="text-center"> 01/12/2018</td>
                        <td class="text-center">
                          <div class="days">
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs ">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">M</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">W</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">F</button>

                          </div>
                        </td>
                        <td class="text-center"> <i class="icon ion-arrow-graph-up-right"></i> 10% increased    </td>
                      </tr>
                      <tr>
                        <td>Grain</td>
                        <td class="text-center"> 190 </td>
                        <td class="text-center" width="150">
                          <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                            <div class="progress-bar " role="progressbar" style="width: 50%;">
                              <span class="progress-label">50%</span>
                            </div>
                          </div>
                        </td>
                        <td class="text-center"> 20</td>
                        <td class="text-center"> 01/12/2018</td>
                        <td class="text-center">
                          <div class="days">
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs ">S</button>
                            <button type="button" class="btn btn-icon btn-default btn-warning btn-round btn-xs">M</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">W</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">T</button>
                            <button type="button" class="btn btn-icon btn-default btn-outline btn-round btn-xs">F</button>

                          </div>
                        </td>
                        <td class="text-center"> <i class="icon ion-arrow-graph-up-right"></i> 12% increased    </td>
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
