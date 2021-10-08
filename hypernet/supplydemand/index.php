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

   <body class="layout-boxed1 admin-bg1 site-menubar-unfold ">
      <?php include_once('_header.php'); ?>

      <?php include_once('_leftmenu.php'); ?>
      <div class="page">
         <div>

            <div class="page-header page-header-bordered shadow">

               <div class="row">
                  <!-- <div class="col-lg-3">
                     <div class="form-group margin-bottom-0">
                        <label class="control-label">Category</label>
                        <select class="form-control selectpicker " id="filter-Location" data-width="100%" title="All" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                           <option value="all">All </option>
                           <option value="loc1">Commodities </option>
                           <option value="loc2" name="name">Primary Material </option>
                           <option value="loc2" name="name">Construction Material </option>
                        </select>
                     </div>
                  </div> -->
                  <div class="col-lg-6">
                     <div class="form-group margin-bottom-0">
                        <label class="control-label">Location</label>
                        <select class="form-control selectpicker " id="filter-Warehouse" data-width="100%" title="All" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                           <option value="all"> All </option>
                           <option value="loc1">Abu az Zuluf </option>
                           <option value="loc2"> Umm Şalāl Muḩammad </option>
                           <option value="loc2"> Dukhān </option>
                           <option value="loc2"> Madīnat ash Shamāl </option>
                        </select>
                     </div>
                  </div>

                  <div class="col-lg-2">
                     <div class="form-group margin-bottom-0">
                        <label class="control-label">End Date</label>
                        <div class=" ">
                           <div class="input-group ">
                              <span class="input-group-addon ">
                                 <i class="icon ion-calendar"></i>
                              </span>
                              <input type="text" class="form-control date" value="01/01/2019">
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="form-group margin-bottom-0">
                        <label class="control-label">Start Date</label>
                        <div class=" ">


                           <div class="input-group ">
                              <span class="input-group-addon ">
                                 <i class="icon ion-calendar"></i>
                              </span>
                              <input type="text" class="form-control date" value="30/07/2019">
                           </div>

                        </div>
                     </div>
                  </div>

                  <div class="col-lg-2">
                     <div class="form-group margin-bottom-0">
                        <label class="control-label">&nbsp;</label>
                        <div class=" ">
                           <input type="submit" class="btn btn-sm1 btn-primary btn-block" value="Submit">

                        </div>
                     </div>
                  </div>

               </div>

               <script>
                  $('#filter-Location').change(function () {
                     var value = $(this).children("option:selected").val();
                     if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5000');
                        $(".med2").text('1600');
                        $(".med3").text('300');


                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');

                     }
                     else if (value == 'loc1') {
                        $(".inf1").text('1200');
                        $(".inf2").text('700');
                        $(".inf3").text('500');

                        $(".con1").text('3400');
                        $(".con2").text('1500');
                        $(".con3").text('531');

                        $(".med1").text('1240');
                        $(".med2").text('180');
                        $(".med3").text('20');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('1400');
                        $(".rel2").text('800');
                        $(".rel3").text('831');

                        $(".avi1").text('140');
                        $(".avi2").text('10');
                        $(".avi3").text('280');


                        $(".edu1").text('3390');
                        $(".edu2").text('3896');
                        $(".edu3").text('284');

                        $(".hum1").text('2500');
                        $(".hum2").text('1800');
                        $(".hum3").text('300');

                     }
                     else if (value == 'loc2') {
                        $(".inf1").text('1240');
                        $(".inf2").text('190');
                        $(".inf3").text('250');

                        $(".con1").text('3890');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('3600');
                        $(".med2").text('1400');
                        $(".med3").text('551');


                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                     }

                  });



                  $('#filter-Warehouse').change(function () {
                     var value = $(this).children("option:selected").val();
                     if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3190');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5000');
                        $(".med2").text('1600');
                        $(".med3").text('300');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');

                     }
                     else if (value == 'loc1') {
                        $(".inf1").text('1720');
                        $(".inf2").text('770');
                        $(".inf3").text('770');

                        $(".con1").text('3470');
                        $(".con2").text('1780');
                        $(".con3").text('891');

                        $(".med1").text('1240');
                        $(".med2").text('180');
                        $(".med3").text('220');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                     }
                     else if (value == 'loc2') {
                        $(".inf1").text('1290');
                        $(".inf2").text('180');
                        $(".inf3").text('201');

                        $(".con1").text('4390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('3800');
                        $(".med2").text('1250');
                        $(".med3").text('51');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                     }

                  });

                  $('#filter-Project').change(function () {
                     var value = $(this).children("option:selected").val();
                     if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5700');
                        $(".med2").text('1600');
                        $(".med3").text('300');

                     }
                     else if (value == 'loc1') {
                        $(".inf1").text('1800');
                        $(".inf2").text('790');
                        $(".inf3").text('590');

                        $(".con1").text('3400');
                        $(".con2").text('1500');
                        $(".con3").text('531');

                        $(".med1").text('1340');
                        $(".med2").text('189');
                        $(".med3").text('20');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                     }
                     else if (value == 'loc2') {
                        $(".inf1").text('1240');
                        $(".inf2").text('180');
                        $(".inf3").text('20');

                        $(".con1").text('3890');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('2400');
                        $(".med2").text('1700');
                        $(".med3").text('581');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                     }

                  });





               </script>



               <!-- <div class="page-header-actions">



             <button type="button" class="btn btn-sm btn-info  ">
                 <span class="text">View Details</span>

             </button>
         </div> -->
            </div>

            <div class=" page-content container-fluid">



               <div style="max-width: 12200px; margin: auto;">

                  <div class="row1 no-space1  ">




                     <div class="row">
                        <div class="col-lg-7">

                           <div class="row">
                              <div class="col-lg-4 ">


                                 <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                       Total Suppliers
                                    </div>
                                    <div class=" margin-bottom-5 ">
                                       <i> <img src="images/icon-supply.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                       317
                                    </div>

                                 </div>



                              </div>

                              <div class="col-lg-4 ">
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                       Total Customers
                                    </div>
                                    <div class=" margin-bottom-5 ">
                                       <i> <img src="images/icon-customers.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                       2180
                                    </div>

                                 </div>
                              </div>
                              <div class="col-lg-4 ">
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                       Custom Duty
                                    </div>
                                    <div class=" margin-bottom-5 ">
                                       <i> <img src="images/icon-job-total.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                       15 Million QAR
                                    </div>

                                 </div>
                              </div>
                           </div>

                        </div>
                        <div class="col-lg-5">

                           <div class="row">
                              <div class="col-lg-6 ">

                                 <div onclick="window.location.href=''">

                                    <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30 hover">
                                       <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                          Total Demand
                                       </div>


                                       <div class="font-size-18 font-weight-600 margin-bottom-5 inf1">
                                          7,52,220
                                       </div>
                                       <div class="row no-space bg-teal-700">
                                          <div class="col-md-4">
                                             <div class="font-size-14     padding-0  ">
                                                -19% <i class="ion-arrow-graph-down-right  font-size-24 " style="position: relative;top: 3px;"></i>
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="     font-size-10 padding-5  ">
                                                Ratio
                                                <div>81%</div>
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr3"></div>
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
                              <div class="col-lg-6 ">
                                 <div class="padding-15 bg-indigo-800 text-center relative shadow card white margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                       Total Supply
                                    </div>
                                    <div class="font-size-18 font-weight-600 margin-bottom-5 inf1">
                                       1,52,180
                                    </div>

                                    <div class="row no-space bg-indigo-700">
                                       <div class="col-md-4">
                                          <div class="font-size-14     padding-0  ">
                                             +10% <i class="ion-arrow-graph-up-right  font-size-24 " style="position: relative;top: 3px;"></i>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="     font-size-10 padding-5  ">
                                             Ratio
                                             <div>22%</div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="font-size-10 padding-5  ">
                                             <div id="chart-rrr8"></div>
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

                        </div>
                     </div>









                  </div>



                  <div class="row">
                     <div class="col-lg-4">
                        <div class="panel panel-default  card shadow light">
                           <div class="panel-heading">
                              <h3 class="panel-title font-weight-600">Supply & Demand Ratio </h3>

                           </div>
                           <div class="panel-body ">

                              <!-- <div class="btn-group-xs btn-group btn-group-justified margin-bottom-20">
                                 <a href="#" class="btn btn-outline btn-success active" data-toggle="tab" data-target="#nav-tab-111">Commodities</a>
                                 <a href="#" class="btn btn-outline btn-success" data-toggle="tab" data-target="#nav-tab-222">Primary Material</a>
                                 <a href="#" class="btn btn-outline btn-success" data-toggle="tab" data-target="#nav-tab-333">Construction</a>
                              </div> -->


                              <div class="tab-content">

                                 <div class="tab-pane fade active in " id="nav-tab-111">
                                    <div class="chartbox ">
                                       <div id="chart-111"></div>
                                       <script>
                                          $(document).ready(function ($) {
                                             (function () {
                                                var simple_line_chart = c3.generate({
                                                   bindto: '#chart-111',
                                                   size: {
                                                      height: 290,
                                                   },
                                                   legend: {
                                                      show: true,
                                                      position: 'bottom',
                                                   },



                                                   data: {
                                                      columns: [
                                                         ['Demand', 22, 19, 13, 10, 14, 13, 22, 19, 13, 20],
                                                         ['Supply', 30, 29, 23, 17, 37, 13, 22, 19, 13, 20],

                                                      ],
                                                      type: 'bar',
                                                      types: {
                                                         Working: 'bar',
                                                         Idle: 'bar',
                                                         Standby: 'bar',
                                                         FlagClass: 'bar',
                                                         RepairsEngine: 'bar',
                                                         RepairsDeck: 'bar',
                                                         RepairIncident: 'bar',
                                                         Weather: 'bar',
                                                      },
                                                      groups: [
                                                         ['Demand', 'Supply']
                                                      ]
                                                   },
                                                   color: {
                                                      pattern: ['#ec9940', '#e84a60 ', '#e9595b ', '#269b8f ']
                                                   },
                                                   axis: {
                                                      rotated: true,
                                                      x: {
                                                         label: {
                                                            show: false,
                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                         type: 'category',
                                                         categories: ['Passenger Vehicles', 'Taps & Valves', 'Water Heaters', 'Vacuum Pumps', 'Tube & Pipe', 'Tools Equipment', 'Aircraft Parts', 'Air Conditioners', 'Cement', 'Chicken']
                                                      },
                                                      y: {
                                                         label: {

                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                      },
                                                   },
                                                   bar: {
                                                      width: {
                                                         ratio: 0.4
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
                                 <div class="tab-pane " id="nav-tab-222">
                                    <div class="chartbox ">
                                       <div id="chart-222"></div>
                                       <script>
                                          $(document).ready(function ($) {
                                             (function () {
                                                var simple_line_chart = c3.generate({
                                                   bindto: '#chart-222',
                                                   size: {
                                                      height: 250,
                                                   },
                                                   legend: {
                                                      show: true,
                                                      position: 'bottom',
                                                   },



                                                   data: {
                                                      columns: [
                                                         ['Demand', 17, 23, 13, 17, 14, 13, 22, 24, 13, 30],
                                                         ['Supply', 20, 29, 23, 17, 37, 13, 22, 19, 13, 20],

                                                      ],
                                                      type: 'bar',
                                                      types: {
                                                         Working: 'bar',
                                                         Idle: 'bar',
                                                         Standby: 'bar',
                                                         FlagClass: 'bar',
                                                         RepairsEngine: 'bar',
                                                         RepairsDeck: 'bar',
                                                         RepairIncident: 'bar',
                                                         Weather: 'bar',
                                                      },
                                                      groups: [
                                                         ['Demand', 'Supply']
                                                      ]
                                                   },
                                                   color: {
                                                      //pattern: ['#ec9940', '#e84a60 ', '#e9595b ', '#269b8f ']
                                                   },
                                                   axis: {
                                                      rotated: true,
                                                      x: {
                                                         label: {
                                                            show: false,
                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                         type: 'category',
                                                         categories: ['Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1']
                                                      },
                                                      y: {
                                                         label: {

                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                      },
                                                   },
                                                   bar: {
                                                      width: {
                                                         ratio: 0.4
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
                                 <div class="tab-pane " id="nav-tab-333">
                                    <div class="chartbox ">
                                       <div id="chart-333"></div>
                                       <script>
                                          $(document).ready(function ($) {
                                             (function () {
                                                var simple_line_chart = c3.generate({
                                                   bindto: '#chart-333',
                                                   size: {
                                                      height: 250,
                                                   },
                                                   legend: {
                                                      show: true,
                                                      position: 'bottom',
                                                   },



                                                   data: {
                                                      columns: [
                                                         ['Demand', 17, 23, 13, 17, 14, 13, 22, 24, 13, 30],
                                                         ['Supply', 20, 29, 23, 17, 37, 13, 22, 19, 13, 20],

                                                      ],
                                                      type: 'bar',
                                                      types: {
                                                         Working: 'bar',
                                                         Idle: 'bar',
                                                         Standby: 'bar',
                                                         FlagClass: 'bar',
                                                         RepairsEngine: 'bar',
                                                         RepairsDeck: 'bar',
                                                         RepairIncident: 'bar',
                                                         Weather: 'bar',
                                                      },
                                                      groups: [
                                                         ['Demand', 'Supply']
                                                      ]
                                                   },
                                                   color: {
                                                      pattern: ['#269b8f', '#e84a60 ', '#e9595b ', '#269b8f ']
                                                   },
                                                   axis: {
                                                      rotated: true,
                                                      x: {
                                                         label: {
                                                            show: false,
                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                         type: 'category',
                                                         categories: ['Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1']
                                                      },
                                                      y: {
                                                         label: {

                                                            text: '',
                                                            position: 'outer-center'
                                                         },
                                                      },
                                                   },
                                                   bar: {
                                                      width: {
                                                         ratio: 0.4
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

                     <div class="col-lg-3">
                        <div class="panel panel-default  card shadow light">
                           <div class="panel-heading">
                              <h3 class="panel-title font-weight-600">City Wise Supply & Demand</h3>

                           </div>
                           <div class="panel-body ">

                              <div class="chartbox">
                                 <div id="chart-alerts1"></div>
                                 <script>
                                    var simple_line_Class;
                                    $(document).ready(function ($) {
                                       (function () {
                                          simple_line_Class = c3.generate({
                                             bindto: '#chart-alerts1',
                                             size: {
                                                height: 290,
                                             },
                                             legend: {
                                                show: true,
                                                position: 'bottom',
                                             },
                                             data: {
                                                columns: [
                                                   ['Abu az Zuluf', 25,],
                                                   ['Umm Şalāl Muḩammad', 75],
                                                   ['Dukhān', 25,],
                                                   ['Madīnat ash Shamāl', 75],
                                                   ['Umm Şalāl', 65],
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
                                                ['Keyboards ', 25,],
                                                ['Motherboards ', 75],
                                                ['Servers ', 25,],
                                                ['Computers ', 75],
                                                ['Hard disks ', 25,],
                                                ['Ghrapic Cards ', 75],
                                                ['Mouses ', 25,],
                                                ['Laptops', 75],
                                             ],
                                          });
                                       }
                                       else {
                                          simple_line_Class.load({
                                             unload: true,
                                             columns: [
                                                ['Keyboards ', 125,],
                                                ['Motherboards ', 175],
                                                ['Servers ', 125,],
                                                ['Computers ', 175],
                                                ['Hard disks ', 125,],
                                                ['Ghrapic Cards ', 175],
                                                ['Mouses ', 125,],
                                                ['Laptops', 175],
                                             ],
                                          });
                                       }
                                    });
                                 </script>
                              </div>


                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="panel panel-default  card shadow light bg-red-7001 ">
                           <div class="panel-heading bg-red-8001 ">
                              <h3 class="panel-title font-weight-600 white1">Most Demanding Products</h3>

                           </div>
                           <div class="panel-body ">

                              <div class="nav-tabs-vertical sm  ">
                                 <ul class="nav nav-tabs nav-tabs-solid   vscroll padding-right-0" data-plugin="nav-tabs" role="tablist" style="max-height:290px; overflow-x:hidden;">
                                    <li class="active"><a data-toggle="tab" href="#statstab1" role="tab" class="">Paper products</a></li>
                                    <li><a data-toggle="tab" href="#statstab2" role="tab" class="">Household</a></li>
                                    <li><a data-toggle="tab" href="#statstab3" role="tab" class="">Chemical</a></li>
                                    <li><a data-toggle="tab" href="#statstab4" role="tab" class="">Healthcare</a></li>
                                    <li><a data-toggle="tab" href="#statstab5" role="tab" class="">Technology</a></li>
                                    <li><a data-toggle="tab" href="#statstab6" role="tab" class="">Vagitables</a></li>
                                 </ul>
                                 <div class="tab-content  " style="min-height:290px; overflow-x:hidden;">
                                    <div class="tab-pane active" id="statstab1" role="tabpanel">
                                       <div class="padding-left-0 ">


                                          <div class="padding-0 margin-bottom-20">
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Available Stock
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            78,037 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Requirements
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">

                                                            178,010 K

                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Scheduled</div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            22,280 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6"> <br>

                                                   <div class="c100 p50 small1 green  ">
                                                      <span class="pointer">50%</span>
                                                      <div class="slice">
                                                         <div class="bar"></div>
                                                         <div class="fill"></div>
                                                      </div>
                                                   </div>

                                                   <div class="text-center  margin-top-10 font-size-10 text-uppercase ">
                                                      Product Utilization
                                                   </div>
                                                </div>

                                             </div>
                                          </div>


                                          <div class="row no-space text-center bg-teal-800 margin-top-0 font-size-12 white">
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-700 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Planed <br /> Orders
                                                      </div>

                                                      <div class="font-weight-600 font-size-14" id="v1">250</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-600 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Pending <br /> Orders</div>
                                                      <div class="font-weight-600 font-size-14" id="v2">180</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-"> Demand <br /> Difference</div>
                                                      <div class="font-weight-600 font-size-14" id="v3"> -79%</div>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>


                                       </div>
                                    </div>

                                    <div class="tab-pane " id="statstab2" role="tabpanel">
                                       <div class="padding-left-0 ">


                                          <div class="padding-0 margin-bottom-20">
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Available Stock
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            62,037 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Requirements
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">

                                                            78,010 K

                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Scheduled</div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            18,220 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6"> <br>

                                                   <div class="c100 p80 small1   ">
                                                      <span class="pointer">80%</span>
                                                      <div class="slice">
                                                         <div class="bar"></div>
                                                         <div class="fill"></div>
                                                      </div>
                                                   </div>

                                                   <div class="text-center  margin-top-10 font-size-10 text-uppercase ">
                                                      Product Utilization
                                                   </div>
                                                </div>

                                             </div>
                                          </div>


                                          <div class="row no-space text-center bg-teal-800 margin-top-0 font-size-12 white">
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-700 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Planed <br /> Orders
                                                      </div>

                                                      <div class="font-weight-600 font-size-14" id="v1">200</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-600 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Pending <br /> Orders</div>
                                                      <div class="font-weight-600 font-size-14" id="v2">252</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-"> Demand <br /> Difference</div>
                                                      <div class="font-weight-600 font-size-14" id="v3"> -19%</div>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>


                                       </div>
                                    </div>
                                    <div class="tab-pane" id="statstab3" role="tabpanel">
                                       <div class="padding-left-0 ">


                                          <div class="padding-0 margin-bottom-20">
                                             <div class="row">
                                                <div class="col-lg-6">
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Available Stock
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            78,037 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Requirements
                                                         </div>
                                                         <div class="font-size-18  font-weight-6001 ">

                                                            178,010 K

                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="media">
                                                      <div class="media-left">
                                                      </div>
                                                      <div class="media-body">
                                                         <div class="font-size-12   "> Scheduled</div>
                                                         <div class="font-size-18  font-weight-6001 ">
                                                            22,280 K
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6"> <br>

                                                   <div class="c100 p50 small1 green  ">
                                                      <span class="pointer">50%</span>
                                                      <div class="slice">
                                                         <div class="bar"></div>
                                                         <div class="fill"></div>
                                                      </div>
                                                   </div>

                                                   <div class="text-center  margin-top-10 font-size-10 text-uppercase ">
                                                      Product Utilization
                                                   </div>
                                                </div>

                                             </div>
                                          </div>


                                          <div class="row no-space text-center bg-teal-800 margin-top-0 font-size-12 white">
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-700 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Planed <br /> Orders
                                                      </div>

                                                      <div class="font-weight-600 font-size-14" id="v1">250</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 bg-teal-600 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-">Pending <br /> Orders</div>
                                                      <div class="font-weight-600 font-size-14" id="v2">180</div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xs-4">
                                                <div class="padding-5 shadow">
                                                   <div class="font-size-10">
                                                      <div class="margin-bottom-"> Demand <br /> Difference</div>
                                                      <div class="font-weight-600 font-size-14" id="v3"> -79%</div>
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

               </div>


               <div class="row">

                  <div class="col-lg-6">
                     <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                           <h3 class="panel-title font-weight-600">Supply & Demand Trends Across Plans </h3>
                        </div>
                        <div class="panel-body ">
                           <div class="chartbox">
                              <div id="chart-alerts11"></div>
                              <script>
                                 var simple_line_Class;
                                 $(document).ready(function ($) {
                                    (function () {
                                       simple_line_Class = c3.generate({
                                          bindto: '#chart-alerts11',
                                          size: {
                                             height: 250,
                                          },
                                          legend: {
                                             show: true,
                                             position: 'bottom',
                                          },
                                          data: {
                                             columns: [
                                                ['Supply', 2300, 7350, 8300, 5500, 3000, 1770],
                                                ['Demand', 1380, 5100, 1940, 4200, 3150, 7550]
                                             ],
                                             types: {
                                                Supply: 'step',
                                                Demand: 'area-step'
                                             }
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
                                                categories: ['January 19', 'Feburary 19', 'March 19', 'April 19', 'May 19', 'June 19']
                                             },
                                             y: {
                                                label: {
                                                   text: 'Stock',
                                                   position: 'outer-middle'
                                                },
                                             },
                                          },
                                          bar: {
                                             width: {
                                                ratio: 0.1
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

                                 $("#mrq-dd-Class").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                       simple_line_Class.load({
                                          unload: true,
                                          columns: [
                                             ['Keyboards ', 25,],
                                             ['Motherboards ', 75],
                                             ['Servers ', 25,],
                                             ['Computers ', 75],
                                             ['Hard disks ', 25,],
                                             ['Ghrapic Cards ', 75],
                                             ['Mouses ', 25,],
                                             ['Laptops', 75],
                                          ],
                                       });
                                    }
                                    else {
                                       simple_line_Class.load({
                                          unload: true,
                                          columns: [
                                             ['Keyboards ', 125,],
                                             ['Motherboards ', 175],
                                             ['Servers ', 125,],
                                             ['Computers ', 175],
                                             ['Hard disks ', 125,],
                                             ['Ghrapic Cards ', 175],
                                             ['Mouses ', 125,],
                                             ['Laptops', 175],
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
                     <div class="panel panel-default  card shadow light">
                        <div class="panel-heading bg-green-800">
                           <h3 class="panel-title font-weight-600 white">Most Demanding Customers</h3>
                        </div>
                        <div class="panel-body ">
                           <div class="table-responsive vscroll" style="max-height: 250px;">
                              <table class="table  margin-bottom-0  table-condensed table-striped table-bordered1 text-wrap dtable">
                                 <thead>
                                    <tr>
                                       <th class="text-left">Customer </th>
                                       <th class="text-left">Order Status </th>
                                       <th class="text-left">Order Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 26, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td>
                                          <div class="label label-success "> Pending</div>
                                       </td>
                                       <td> May 12, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td>
                                          <div class="label label-primary "> Backordered</div>
                                       </td>
                                       <td> May 13, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 26, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 12, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 13, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 26, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 12, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 13, 2019 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td>
                                          <div class="label label-info "> Completed</div>
                                       </td>
                                       <td> May 12, 2019 </td>
                                    </tr>
                                 </tbody>

                              </table>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="panel panel-default  card shadow light">
                        <div class="panel-heading bg-green-800">
                           <h3 class="panel-title font-weight-600 white">Top Suppliers </h3>

                        </div>
                        <div class="panel-body ">
                           <div class="table-responsive vscroll" style="max-height: 250px;">
                              <table class="table  margin-bottom-0  table-condensed table-striped table-bordered1 text-wrap dtable">
                                 <thead>
                                    <tr>
                                       <th class="text-left">Suppliers </th>
                                       <th class="text-left">Order Received </th>
                                       <th class="text-left">Order Inprogress </th>
                                       <th class="text-left">Order Completed </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td> 25,250 </td>
                                       <td> 1700 </td>
                                       <td> 24,250 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>

                                       <td> 19,250 </td>
                                       <td> 1200 </td>
                                       <td> 16,001 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td> 11,250 </td>
                                       <td> 700 </td>
                                       <td> 10,91 </td>
                                    </tr>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td> 25,250 </td>
                                       <td> 1700 </td>
                                       <td> 24,250 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td> 19,250 </td>
                                       <td> 1200 </td>
                                       <td> 16,001 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td> 11,250 </td>
                                       <td> 700 </td>
                                       <td> 10,91 </td>
                                    </tr>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td> 25,250 </td>
                                       <td> 1700 </td>
                                       <td> 24,250 </td>
                                    </tr>
                                    <tr>
                                       <td> GEMCO </td>
                                       <td> 25,250 </td>
                                       <td> 1700 </td>
                                       <td> 24,250 </td>
                                    </tr>
                                    <tr>
                                       <td>CARINA SHIPPING</td>
                                       <td> 19,250 </td>
                                       <td> 1200 </td>
                                       <td> 16,001 </td>
                                    </tr>
                                    <tr>
                                       <td> CECC</td>
                                       <td> 11,250 </td>
                                       <td> 700 </td>
                                       <td> 10,91 </td>
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

      <script src="../plugins/d3/d3.min.js"></script>
      <script src="../plugins/c3/c3.js"></script>
      <script src="../plugins/js/core.js"></script>
      <script src="js/scripts.js"></script>
   </body>

</html>