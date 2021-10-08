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

<body class="layout-boxed1 admin-bg1 site-menubar-unfold ">
   <?php include_once('_header.php'); ?>
   <div class="page1 bg-white1">
      <div class="">


         <div class=" page-content container-fluid">


            <div style="max-width: 12200px; margin: auto;">

               <div class="row no-space1  ">





                  <div class="col-lg-3 ">
                     <div onclick="window.location.href='assets-industry-construction.php'">
                        <div
                           class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30 hover">
                           <div class="font-size-14 margin-bottom-10  text-uppercase ">
                              Construction
                           </div>


                           <div class="row no-space bg-orange-700 ">
                              <div class="col-md-8">
                                 <div class="     font-size-10 padding-5  ">
                                    Demand Ratio
                                    <div class="">33%</div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="font-size-10 padding-5  ">
                                    <div id="chart-rrr" class=""></div>
                                    <div class="chartbox">

                                       <script>
                                          $(document).ready(function ($) {
                                             (function () {

                                                var chart = c3.generate({
                                                   bindto: '#chart-rrr',
                                                   data: {
                                                      columns: [
                                                         ['sample', 130, 52, 30, 21, 150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
                                                      ],
                                                      type: 'bar',
                                                   },
                                                   color: {
                                                      pattern: ['#fff', '#e9595b', '#f96868', '#fa7a7a']
                                                   },

                                                   legend: {
                                                      show: false
                                                   }, tooltip: { show: false },
                                                   axis: {
                                                      x: { show: false },
                                                      y: { show: false }
                                                   }, size: { height: 30, width: 40 }, point: {
                                                      show: false
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

                  <div class="col-lg-3 ">
                     <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 hover">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                           Commodities
                        </div>


                        <div class="row no-space bg-blue-700">
                           <div class="col-md-8">
                              <div class="     font-size-10 padding-5  ">
                                 Demand Ratio
                                 <div class="">72%</div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="font-size-10 padding-5  ">
                                 <div id="chart-rrr2" class=""></div>
                                 <div class="chartbox">

                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {

                                             var chart = c3.generate({
                                                bindto: '#chart-rrr2',
                                                data: {
                                                   columns: [
                                                      ['sample', 130, 52, 30, 21, 150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
                                                   ],
                                                   type: 'bar',
                                                },
                                                color: {
                                                   pattern: ['#fff', '#e9595b', '#f96868', '#fa7a7a']
                                                },

                                                legend: {
                                                   show: false
                                                }, tooltip: { show: false },
                                                axis: {
                                                   x: { show: false },
                                                   y: { show: false }
                                                }, size: { height: 30, width: 40 }, point: {
                                                   show: false
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
                  <div class="col-lg-3 ">

                     <div onclick="window.location.href=''">

                        <div
                           class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30 hover">
                           <div class="font-size-14 margin-bottom-10  text-uppercase ">
                              Medical/Health
                           </div>


                           <div class="row no-space bg-teal-700">
                              <div class="col-md-8">
                                 <div class="     font-size-10 padding-5  ">
                                    Demand Ratio
                                    <div class="">81%</div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="font-size-10 padding-5  ">
                                    <div id="chart-rrr3" class=""></div>
                                    <div class="chartbox">

                                       <script>
                                          $(document).ready(function ($) {
                                             (function () {

                                                var chart = c3.generate({
                                                   bindto: '#chart-rrr3',
                                                   data: {
                                                      columns: [
                                                         ['sample', 130, 52, 30, 21, 150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
                                                      ],
                                                      type: 'bar',
                                                   },
                                                   color: {
                                                      pattern: ['#fff', '#e9595b', '#f96868', '#fa7a7a']
                                                   },

                                                   legend: {
                                                      show: false
                                                   }, tooltip: { show: false },
                                                   axis: {
                                                      x: { show: false },
                                                      y: { show: false }
                                                   }, size: { height: 30, width: 40 }, point: {
                                                      show: false
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














                  <div class="col-lg-3 ">
                     <div
                        class="padding-15 bg-indigo-800 text-center relative shadow card white margin-bottom-30 hover">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                           Machinary
                        </div>


                        <div class="row no-space bg-indigo-700">
                           <div class="col-md-8">
                              <div class="     font-size-10 padding-5  ">
                                 Demand Ratio
                                 <div class="">22%</div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="font-size-10 padding-5  ">
                                 <div id="chart-rrr8" class=""></div>
                                 <div class="chartbox">

                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {

                                             var chart = c3.generate({
                                                bindto: '#chart-rrr8',
                                                data: {
                                                   columns: [
                                                      ['sample', 130, 52, 30, 21, 150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
                                                   ],
                                                   type: 'bar',
                                                },
                                                color: {
                                                   pattern: ['#fff', '#e9595b', '#f96868', '#fa7a7a']
                                                },

                                                legend: {
                                                   show: false
                                                }, tooltip: { show: false },
                                                axis: {
                                                   x: { show: false },
                                                   y: { show: false }
                                                }, size: { height: 30, width: 40 }, point: {
                                                   show: false
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
                  <div class="col-lg-12">
                     <div class="panel panel-default  card light ">
                        <div class="panel-heading margin-bottom-0">
                           <h3 class="panel-title font-weight-600 text-center">Utilization and Demand
                              Statistics</h3>
                        </div>
                        <div class="panel-body padding-20">
                           <div class="chartbox">
                              <div id="chart-mmm4"></div>
                              <script>
                                 $(document).ready(function ($) {
                                    (function () {

                                       var chart = c3.generate({
                                          bindto: '#chart-mmm4',
                                          size: {
                                             height: 300,
                                          },
                                          legend: {
                                             show: true,
                                             position: 'bottom',
                                          },
                                          data: {
                                             columns: [
                                                ['Construction', 40, 20, 30, 50, 30, 45, 20, 40, 20, 10, 50, 20],
                                                ['Commodities', 40, 40, 10, 77, 18, 82, 29, 49, 22, 77, 60, 40],
                                                ['Medical', 47, 81, 35, 13, 77, 80, 55, 47, 20, 10, 50, 20],
                                                ['Machinary', 47, 25, 10, 81, 37, 45, 18, 47, 80, 17, 20, 20],

                                             ],
                                             axes: {
                                                data1: 'y',
                                                data2: 'y2'
                                             },
                                             type: 'line',
                                             types: {
                                                Construction: 'bar',
                                                Commodities: 'bar',
                                                Medical: 'bar',
                                                Machinary: 'bar',

                                             },
                                             groups: [
                                                //  ['Construction', 'Commodities', 'Medical', 'Machinary']
                                             ]

                                          },
                                          color: {
                                             pattern: ['#e98f2e', '#3583ca', '#279566', '#178d81']
                                          },
                                          axis: {
                                             y: {
                                                show: true
                                             },
                                             y2: {
                                                show: false
                                             },

                                             x: {
                                                label: {
                                                   text: ' ',
                                                   position: 'outer-center'
                                                },
                                                type: 'category',
                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                             },
                                             y: {
                                                label: {
                                                   text: '% ',
                                                   position: 'outer-middle'
                                                },
                                             },

                                          },
                                          grid: {
                                             x: {
                                                show: true
                                             },
                                             y: {
                                                show: true
                                             }
                                          },
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

   <script src="../plugins/d3/d3.min.js"></script>
   <script src="../plugins/c3/c3.js"></script>
   <script src="../plugins/js/core.js"></script>
   <script src="js/scripts.js"></script>
</body>

</html>