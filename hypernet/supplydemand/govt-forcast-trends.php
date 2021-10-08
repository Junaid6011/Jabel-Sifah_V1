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







               <div class="row">
                  <div class="col-lg-12">
                     <div class="panel panel-default  card light ">
                        <div class="panel-heading margin-bottom-0">
                           <h3 class="panel-title font-weight-600 ">Supply & Demand Forecast/Statistics by Categories</h3>
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
                                                ['Passenger Vehicles', 125, 222, 119, 313, 110, 214, 213, 221, 195, 103, 220, 120],
                                                ['Taps & Valves', 275, 212, 209, 113, 80, 214, 130, 222, 190, 313, 320, 280],
                                                ['Water Heaters', 125, 222, 119, 313, 110, 214, 213, 221, 195, 103, 220, 280],
                                                ['Vacuum Pumps', 275, 212, 209, 113, 80, 214, 130, 222, 190, 313, 320, 280],
                                                ['Tube & Pipe', 275, 212, 209, 113, 80, 214, 130, 222, 190, 313, 320, 200],
                                                [' Passenger Vehicles', 25, 222, 219, 13, 210, 140, 13, 22, 19, 13, 20, 280],
                                                ['Tools Equipment', 125, 222, 119, 313, 110, 214, 213, 221, 195, 103, 220, 280],
                                                ['Aircraft Parts', 225, 322, 219, 13, 310, 140, 13, 22, 19, 13, 120, 280],
                                                ['Air Conditioners', 125, 222, 119, 313, 110, 214, 213, 221, 195, 103, 220, 180],
                                                ['Cement', 165, 221, 119, 123, 100, 140, 139, 221, 197, 13, 20, 280],
                                                ['Chicken', 275, 212, 209, 113, 80, 214, 130, 222, 190, 313, 320, 280],


                                             ],
                                             type: 'spline',
                                             // groups: [
                                             //    ['Supply', 'Demand']
                                             // ]
                                          },

                                          grid: {
                                             x: {
                                                show: true
                                             },
                                             y: {
                                                show: true,
                                                lines: [{ value: 0 }]
                                             }
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
                                                categories: ['May 18', 'Jun 18', 'Jul 18', 'Aug 18', 'Sep 18', 'Oct 18', 'Nov 18', 'Dec 18', 'Jan 19', 'Feb 19', 'Mar 19', 'Apr 19']
                                             },
                                             y: {
                                                label: {
                                                   text: 'K ',
                                                   position: 'outer-middle'
                                                },
                                             },

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





               <div class="row">
                  <div class="col-lg-12">
                     <div class="panel panel-default  card light ">
                        <div class="panel-heading margin-bottom-0">
                           <h3 class="panel-title font-weight-600 ">Supply Vs Goal Trends</h3>
                        </div>
                        <div class="panel-body padding-20">
















                           <div class="chartbox">
                              <div id="chart-ffff"></div>
                              <script>
                                 $(document).ready(function ($) {
                                    (function () {

                                       var chart = c3.generate({
                                          bindto: '#chart-ffff',
                                          size: {
                                             height: 300,
                                          },
                                          legend: {
                                             show: true,
                                             position: 'bottom',
                                          },
                                          data: {
                                             columns: [
                                                ['Supply', 30, 200, 200, 400, 150, 250, 100, 200, 150, 50, 200, 400],
                                                ['Demand', 130, 100, 100, 200, 150, 50, 100, 200, 150, 50, 200, 400],
                                                ['Requirement', 230, 200, 200, 300, 250, 250, 100, 200, 150, 50, 200, 400]
                                             ],
                                             type: 'bar',
                                             groups: [
                                                //  ['Supply', 'Demand']
                                             ]
                                          },

                                          grid: {
                                             x: {
                                                show: true
                                             },
                                             y: {
                                                show: true,
                                                lines: [{ value: 0 }]
                                             }
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
                                                categories: ['May 18', 'Jun 18', 'Jul 18', 'Aug 18', 'Sep 18', 'Oct 18', 'Nov 18', 'Dec 18', 'Jan 19', 'Feb 19', 'Mar 19', 'Apr 19', 'May 19', 'Jun 19', 'Jul 19']
                                             },
                                             y: {
                                                label: {
                                                   text: 'K ',
                                                   position: 'outer-middle'
                                                },
                                             },

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

      <script src="../plugins/d3/d3.min.js"></script>
      <script src="../plugins/c3/c3.js"></script>
      <script src="../plugins/js/core.js"></script>
      <script src="js/scripts.js"></script>
   </body>

</html>