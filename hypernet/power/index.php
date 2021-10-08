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

  <body class="dashboard ">


    <?php include_once('_header.php'); ?>
    <?php include_once('_leftmenu.php'); ?>






    <div class="page">
      <!-- <div class="breadcrumb-box">
        <ol class="breadcrumb breadcrumb-arrow ">
          <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
          <li><a href="javascript:void(0)">Page</a></li>
        </ol>
      </div> -->

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


<div class="col-lg-2 ">

    <div onclick="window.location.href='water-heaters.php'" id="box-Information">
        <div
            class="padding-15 bg-red-800 text-center relative shadow card white margin-bottom-30 hover">
            <div class="font-size-12 margin-bottom-10  text-uppercase ">
            Water Heater
            </div>
            <div class=" margin-bottom-5 ">
                <i> <img src="images/icon-water-heater.png" alt="img" height="40"> </i>
            </div>
            <div class="font-size-18 font-weight-600 margin-bottom-10 inf1">
                423
            </div>
            <div class="row no-space">
                <div class="col-md-6">
                    <div class="  bg-red-600   font-size-10 padding-5  ">
                        In Use
                        <div class="inf2">104</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="  bg-red-600   font-size-10 padding-5  ">
                        Idle
                        <div class="inf3">233</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-2 ">
    <!-- onclick="window.location.href='assets-industry-construction.php'" -->
    <div onclick="window.location.href='refrigerators.php'" id="box-Construction">
        <div
            class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30 hover">
            <div class="font-size-12 margin-bottom-10  text-uppercase ">
            Refrigerator
            </div>
            <div class=" margin-bottom-5 ">
                <i> <img src="images/icon-fridge.png" alt="img" height="40"> </i>
            </div>
            <div class="font-size-18 font-weight-600 margin-bottom-10 con1" class="">
                690
            </div>
            <div class="row no-space">
                <div class="col-md-6">
                    <div class="  bg-orange-600   font-size-10 padding-5  ">
                        In Use
                        <div class="con2">396</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="  bg-orange-600   font-size-10 padding-5  ">
                        Idle
                        <div class="con3">194</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-2 ">
    
    <div onclick="window.location.href='water-dispensers.php'">

        <div
            class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30 hover">
            <div class="font-size-12 margin-bottom-10  text-uppercase ">
            Water Dispenser
            </div>
            <div class=" margin-bottom-5 ">
                <i> <img src="images/icon-water-dispenser.png" alt="img" height="40"> </i>
            </div>
            <div class="font-size-18 font-weight-600 margin-bottom-10 med1">
                500
            </div>
            <div class="row no-space">
                <div class="col-md-6">
                    <div class="  bg-teal-600   font-size-10  padding-5  ">
                        In Use
                        <div class="med2">160</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="  bg-teal-600   font-size-10  padding-5  ">
                        Idle
                        <div class="med3">340</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-2 ">
 <div onclick="window.location.href='air-conditioners.php'">
    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 hover">
        <div class="font-size-12 margin-bottom-10  text-uppercase ">
        Air Conditioner
        </div>
        <div class=" margin-bottom-5 ">
            <i> <img src="images/icon-air-conditioner.png" alt="img" height="40"> </i>
        </div>
        <div class="font-size-18 font-weight-600 margin-bottom-10 mar1">
            890
        </div>
        <div class="row no-space">
            <div class="col-md-6">
                <div class="  bg-blue-600   font-size-10 padding-5  ">
                    In Use
                    <div class="mar2">600</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="  bg-blue-600   font-size-10 padding-5  ">
                    Idle
                    <div class="mar3">290</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


<div class="col-lg-2 ">
<div onclick="window.location.href='washing-machines.php'">
    <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30 hover">
        <div class="font-size-12 margin-bottom-10  text-uppercase ">
        Washing Machine
        </div>
        <div class=" margin-bottom-5 ">
            <i> <img src="images/icon-washing-machine.png" alt="img" height="40"> </i>
        </div>
        <div class="font-size-18 font-weight-600 margin-bottom-10 rel1">
            800
        </div>
        <div class="row no-space">
            <div class="col-md-6">
                <div class="  bg-green-600   font-size-10 padding-5  ">
                    In Use
                    <div class="rel2">690</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="  bg-green-600   font-size-10 padding-5  ">
                    Idle
                    <div class="rel3">110</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


<div class="col-lg-2 ">
<div onclick="window.location.href='deep-freezers.php'">
    <div class="padding-15 bg-grey-800 text-center relative shadow card white margin-bottom-30 hover">
        <div class="font-size-12 margin-bottom-10  text-uppercase ">
        Deep Freezer
        </div>
        <div class=" margin-bottom-5 ">
            <i> <img src="images/icon-freezer.png" alt="img" height="40"> </i>
        </div>
        <div class="font-size-18 font-weight-600 margin-bottom-10 avi1">
            310
        </div>
        <div class="row no-space">
            <div class="col-md-6">
                <div class="  bg-grey-600   font-size-10 padding-5  ">
                    In Use
                    <div class="avi2">300</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="  bg-grey-600   font-size-10 padding-5  ">
                    Idle
                    <div class="avi3">10</div>
                </div>
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
              <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">
<!--
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option selected>Fleets</option>
                                            <option>Employees </option>
                                        </select>
                                    </div>
-->
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="wa1">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                <div class="chartbox">
                  <div id="chart-ttt"></div>
                  <script>
                    var chart; 
                    $(document).ready(function ($) {
                      (function () {

                         chart = c3.generate({
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
                  <script>
                                $("#wa1").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        chart.load({
                                            unload: true,
                                            columns:[
                              ['Water Heater', 1, 11, 1, 2, 5, 8, 5, 5, 2, 9],
                              ['Refrigerator', 10, 17, 1, 5, 6, 8, 9, 15, 1, 5],
                              ['Water Dispenser', 3, 1, 1, 2, 5, 8, 9, 5, 5, 3],
                              ['Air Conditioner', 10, 11, 10, 2, 5, 8, 5, 5, 2, 9],
                              ['Washing Machine', 10, 11, 10, 2, 5, 8, 5, 5, 2, 9],
                              ['Deep Freezer', 10, 17, 1, 5, 6, 8, 9, 15, 1, 5],
                            ],
                                        });
                                    }
                                    else {
                                        chart.load({
                                            unload: true,
                                            columns:[
                              ['Water Heater', 11, 21, 11, 12, 15, 18, 15, 15, 22, 19],
                              ['Refrigerator', 20, 27, 11, 25, 16, 28, 19, 35, 21, 15],
                              ['Water Dispenser', 23, 11, 11, 12, 15, 18, 19, 15, 15, 13],
                              ['Air Conditioner', 19, 31, 20, 12, 15, 18, 15, 15, 12, 19],
                              ['Washing Machine', 19, 21, 20, 21, 12, 32, 35, 25, 12, 29],
                              ['Deep Freezer', 30, 27, 12, 15, 26, 28, 29, 35, 11, 15],
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
            <div class="panel panel-default  shadow">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Sale Trends</h3>
                <div class="panel-actions">
                  <!--<a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>-->
                  <a class="panel-action icon ion-loop" data-toggle="tooltip"></a>
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
              <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">
<!--
                                    <div class="inline-block">
                                        <select class="form-control input-sm">
                                            <option selected>Fleets</option>
                                            <option>Employees </option>
                                        </select>
                                    </div>
-->
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="wa2">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                <div class="chartbox">
                  <div id="chart-ccccqqq"></div>
                  <script>
                    var simple_line_chart;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_chart = c3.generate({
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
                  <script>
                      $("#wa2").on('change', function () {

                          if (this.value.trim().toLowerCase().includes('month')) {
                            simple_line_chart.load({
                                  unload: true,
                                  columns:[
                              ['Devices', 4, 7, 3, 8, 2, 3],
                              //['Sold', 2, 2, 2, 7, 1, 3],
                            ],
                              });
                          }
                          else {
                            simple_line_chart.load({
                                  unload: true,
                                  columns:[
                              ['Devices', 14, 17, 13, 18, 12, 13],
                              //['Sold', 2, 2, 2, 7, 1, 3],
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