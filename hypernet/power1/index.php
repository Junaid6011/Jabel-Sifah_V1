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
    <link rel="stylesheet" href="../plugins/styles/global.css?<?php echo date('l jS \of F Y h:i:s A'); ?>"?<?php echo date('l jS \of F Y h:i:s A'); ?>">
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
          <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
          <li><a href="javascript:void(0)">Page</a></li>
        </ol>
      </div>

      <div class="page-header padding-0 margin-bottom-30">
        <div class="widget widget-article type-flex margin-bottom-0">
          <div class="widget-header cover overlay">
            <img class="cover-image height-200" src="images/header.jpg" alt="" style="height:150px;">
            <div class="overlay-panel text-center vertical-align">
              <div class="widget-metas vertical-align-middle blue-grey-800">
                <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:30px; text-transform:none;">Internet of Power </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="page-content  container-fluid">


        <div class="row no-space1  ">

          <div class="col-lg-2 col-md-4">


            <a href="water-heaters.php" style="text-decoration:none;">
              <div class="widget">
                <div class="widget-content padding-top-20 bg-teal-700 white shadow padding-left-0 padding-right-0  relative card hover">
                  <div class="counter counter-lg counter-inverse">
                    <b class="counter-label font-size-16 text-uppercase margin-bottom-10  ">Water Heater</b>
                    <div class="counter-number-group">
                      <span class="counter-icon margin-right-10"><img src="images/icon-water-heater.png" height="40" /></span>
                      <span class="counter-number font-size-30">04</span>
                    </div>
                    <div class="white  bg-teal-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                      Active Units
                      <br />
                      <b class="font-size-20">2</b>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="widget">
              <div class="widget-content padding-top-20 bg-orange-700 white shadow padding-left-0 padding-right-0  relative card hover">
                <div class="counter counter-lg counter-inverse">
                  <b class="counter-label font-size-16 text-uppercase margin-bottom-10 ">Refrigerator</b>
                  <div class="counter-number-group">
                    <span class="counter-icon margin-right-10"><img src="images/icon-fridge.png" height="40" /></span>
                    <span class="counter-number font-size-30">07</span>
                  </div>
                  <div class="white  bg-orange-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                    Active Units
                    <br />
                    <b class="font-size-20">2</b>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="widget">
              <div class="widget-content padding-top-20 bg-blue-700 white shadow padding-left-0 padding-right-0  relative card hover">
                <div class="counter counter-lg counter-inverse">
                  <b class="counter-label font-size-16 text-uppercase margin-bottom-10 ">Water Dispenser</b>
                  <div class="counter-number-group">
                    <span class="counter-icon margin-right-10"><img src="images/icon-water-dispenser.png" height="40" /></span>
                    <span class="counter-number font-size-30">03</span>
                  </div>
                  <div class="white  bg-blue-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                    Active Units
                    <br />
                    <b class="font-size-20">02</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="widget">
              <div class="widget-content padding-top-20 bg-grey-700 white shadow padding-left-0 padding-right-0  relative card hover">
                <div class="counter counter-lg counter-inverse">
                  <b class="counter-label font-size-16 text-uppercase margin-bottom-10 ">Air Conditioner</b>
                  <div class="counter-number-group">
                    <span class="counter-icon margin-right-10"><img src="images/icon-air-conditioner.png" height="40" /></span>
                    <span class="counter-number font-size-30">08</span>
                  </div>
                  <div class="white  bg-grey-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                    Active Units
                    <br />
                    <b class="font-size-20">07</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="widget">
              <div class="widget-content padding-top-20 bg-green-700 white shadow padding-left-0 padding-right-0  relative card hover">
                <div class="counter counter-lg counter-inverse">
                  <b class="counter-label font-size-16 text-uppercase margin-bottom-10 ">Washing Machine</b>
                  <div class="counter-number-group">
                    <span class="counter-icon margin-right-10"><img src="images/icon-washing-machine.png" height="40" /></span>
                    <span class="counter-number font-size-30">02</span>
                  </div>
                  <div class="white  bg-green-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                    Active Units
                    <br />
                    <b class="font-size-20">01</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="widget">
              <div class="widget-content padding-top-20 bg-cyan-600 white shadow padding-left-0 padding-right-0  relative card hover">
                <div class="counter counter-lg counter-inverse">
                  <b class="counter-label font-size-16 text-uppercase margin-bottom-10 ">Deep Freezer</b>
                  <div class="counter-number-group">
                    <span class="counter-icon margin-right-10"><img src="images/icon-freezer.png" height="40" /></span>
                    <span class="counter-number font-size-30">03</span>
                  </div>
                  <div class="white  bg-cyan-800  flat right bottom font-size-10 padding-15 margin-top-20 ">
                    Active Units
                    <br />
                    <b class="font-size-20">03</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <div class="panel panel-default  shadow">
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
                <h3 class="panel-title "> <b> Device Classifications </b></h3>
              </div>
              <div class="panel-body ">
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
                  <div id="chart-ttt"></div>
                  <script>
                    $(document).ready(function ($) {
                      (function () {

                        var chart = c3.generate({
                          bindto: '#chart-ttt',
                          size: {
                            height: 230,

                          },
                          legend: {
                            position: 'bottom',
                            show: true,
                          },
                          donut: {
                            title: "Devices"
                          },
                          data: {

                            columns: [
                              ['Water Heater', 1, 11, 1, 2, 5, 8, 5, 5, 2, 9],
                              ['Refrigerator', 10, 17, 1, 5, 6, 8, 9, 15, 1, 5],
                              ['Water Dispenser', 3, 1, 1, 2, 5, 8, 9, 5, 5, 3],
                              ['Air Conditioner', 10, 11, 10, 2, 5, 8, 5, 5, 2, 9],
                              ['Washing Machine', 10, 11, 10, 2, 5, 8, 5, 5, 2, 9],
                              ['Deep Freezer', 10, 17, 1, 5, 6, 8, 9, 15, 1, 5],
                            ],
                            type: 'donut',
                          },
                          color: {
                            // pattern: ['#d6494b', '#e9595b', '#f96868', '#fa7a7a']
                          },

                        });
                      })();
                    });
                  </script>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-default  shadow">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Sale Trends</h3>
                <div class="panel-actions">
                  <!--<a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>-->
                  <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                </div>
              </div>


              <div class="panel-body ">
                <div class="">
                  <div class="">
                    <div class="table-responsive vscroll1">
                      <table class="table  table-condensed  no-border  margin-bottom-0 font-size-16">
                        <tbody>
                          <tr>
                            <td width="">
                              <div class="font-size-24  font-weight-600 red-800"> 02 Units </div>
                              <div class="font-size-12 font-weight-600"> Week </div>
                              <div class="font-size-14 margin-top-0">
                                <span class="">20%</span>
                                <span class="">less than last week</span>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="margin-top-10 bg-green-100 padding-5 font-size-30 red-800">
                                <i class="ion-arrow-graph-down-right"></i>
                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="">
                              <div class="font-size-24 orange-800 font-weight-600 "> 07 Units </div>
                              <div class="font-size-12 font-weight-600">Month </div>
                              <div class="font-size-14 margin-top-0">
                                <span class="">54%</span>
                                <span class="">more than last month</span>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="margin-top-10 bg-green-100 padding-5 font-size-30 orange-800">
                                <i class="ion-arrow-graph-up-right"></i>
                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td width="">
                              <div class="font-size-24 orange-800 font-weight-600 "> 18 Units </div>
                              <div class="font-size-12 font-weight-600"> Year</div>
                              <div class="font-size-14 margin-top-0">
                                <span class="">25%</span>
                                <span class="">more than last Year</span>
                              </div>
                            </td>
                            <td class="text-center">
                              <div class="margin-top-10 bg-green-100 padding-5 font-size-30 orange-800">
                                <i class="ion-arrow-graph-up-right"></i>
                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
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


        <div class="row">
          <div class="col-lg-12">
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
                <h3 class="panel-title "> <b> Sold & Activated Devices </b></h3>
              </div>
              <div class="panel-body ">
                <div class="text-center margin-bottom-10">
                  <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">
                    <label class="btn btn-outline btn-default ">
                      <input type="radio"> Today
                    </label>
                    <label class="btn btn-outline btn-default ">
                      Yesterday
                    </label>
                    <label class="btn btn-outline btn-success active ">
                      This Week
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
                            height: 300,
                          },
                          legend: {
                            show: true,
                            position: 'bottom',
                          },
                          data: {
                            columns: [
                              ['Devices', 4, 7, 3, 8, 2, 3],
                              //['Sold', 2, 2, 2, 7, 1, 3],
                            ],
                            types: {
                              Devices: 'bar',
                              //Sold: 'bar',
                            },

                          },
                          axis: {
                            rotated: false,
                            x: {
                              label: {
                                text: '',
                                position: 'outer-center'
                              },
                              type: 'category',
                              categories: ['Water Heater', 'Refrigerator', 'Water Dispenser', 'Air Conditioner', 'Washing Machine', 'Deep Freezer']
                            },
                            y: {
                              label: {
                                text: 'Units ',
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