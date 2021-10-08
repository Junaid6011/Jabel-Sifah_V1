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
   <body class="layout-boxed1 admin-bg site-menubar-unfold ">
      <?php include_once('_header-conferences.php'); ?>
      <div class="page1 bg-white">
         <div class="">
            <div class="cover overlay">
               <img class="cover-image " src="images/header.jpg" alt="" height="150">
               <div class="overlay-panel text-center vertical-align">
                  <div class="widget-metas vertical-align-middle blue-grey-800">
                     <div class="font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:40px;">
                        Hypernet Footfall Analytics
                     </div>
                  </div>
               </div>
            </div>
            <div class="page-header page-header-bordered shadow padding-10">
               <div class="margin-top-0 ">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="media">
                           <div class="media-left">
                              <figure class="">
                                 <img src="images/confrence-logo.png" class="img-bordered" style="height: 40px">
                              </figure>
                           </div>
                           <div class="media-body">
                              <div class="font-size-14 font-weight-600  ">
                                 Microsoft AI Summit
                              </div>
                              <div class="font-size-12"> Conference </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="media">
                           <div class="media-left">
                              <figure class="">
                                 <img src="images/confrence-date.png" class="img-bordered" style="height: 40px">
                              </figure>
                           </div>
                           <div class="media-body">
                              <div class="font-size-14 font-weight-600  ">
                                 Apr 11-13, 2019
                              </div>
                              <div class="font-size-12   "> Date </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="media">
                           <div class="media-left">
                              <figure class="">
                                 <img src="images/confrence-location.png" class="img-bordered"
                                    style="height: 40px">
                              </figure>
                           </div>
                           <div class="media-body">
                              <div class="font-size-14 font-weight-600 ">
                                 Doha, Qatar
                              </div>
                              <div class="font-size-12  "> Location</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="media">
                           <div class="media-left">
                              <figure class="">
                                 <img src="images/confrence-logo2.png" class="img-bordered" style="height: 40px">
                              </figure>
                           </div>
                           <div class="media-body">
                              <div class="font-size-14 font-weight-600 ">
                                 Microsoft
                              </div>
                              <div class="font-size-12  "> Hosted by</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" page-content container-fluid">
               <div class="padding-0" style="max-width:2000px; margin: auto;">
                  <!-- <div class="text-center   margin-bottom-30">
                     <div class="btn-group btn-group-sm1 btn-group-xs1" data-toggle="buttons">
                     
                         <label class="btn btn-outline1 btn-info ">
                             <input type="radio" name="multiples" value="banana" checked=""> Apr 11
                         </label>
                         <label class="btn btn-outline1 btn-info active">
                             <input type="radio" name="multiples">Apr 12
                         </label>
                         <label class="btn btn-outline1 btn-info">
                             <input type="radio" name="multiples" checked=""> Apr 13
                         </label>
                     </div>
                     </div> -->
                  <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
                     <div class="inline-block pull-left margin-right-10">
                        <div class="inline-block    ">
                           <div class="form-group  margin-bottom-0  ">
                              <div class="input-daterange   ">
                                 <div class="input-group  input-group-sm">
                                    <div class="input-group-addon">
                                       <i class="icon ion-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control date" value="04/11/19">
                                 </div>
                                 <div class="input-group input-group-sm">
                                    <div class="input-group-addon">to
                                    </div>
                                    <input type="text" class="form-control date" value="04/13/19">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="inline-block pull-left margin-right-10">
                        <select class="form-control input-sm ">
                            <option>All Jobs</option>
                            <option>JOB119 </option>
                            <option>JOB221</option>
                            <option>JOB123</option>
                            <option>JOB119 </option>
                            <option>JOB221</option>
                            <option>JOB123</option>
                        </select>
                        </div> -->
                     <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                        <div class="">
                           <input type="submit" class="btn btn-sm btn-info" value="Go">
                        </div>
                     </div>
                  </div>
                  <div class="row ">
                     <div class="col-md-3">
                        <a href="booths.php" style="text-decoration: none !important;">
                           <div
                              class=" padding-10 bg-orange-800 text-center relative card white  margin-bottom-30  hover">
                              <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                 Total Booths
                              </div>
                              <div class=" margin-right-15 inline ">
                                 <i> <img src="images/confrence-booth.png" alt="img" height="24"> </i>
                              </div>
                              <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">25</b>
                              <div class="bg-orange-700 padding-5 white  margin-top-15">
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <div class="font-size-10">Active</div>
                                       <div class="font-size-12">20</div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="font-size-10">Inactive</div>
                                       <div class="font-size-12">5</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <div class=" padding-10 bg-blue-800 text-center relative card white  margin-bottom-30 ">
                           <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                              Current Visitors
                           </div>
                           <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">120</b>
                           <div class="bg-blue-700 padding-5 white  margin-top-15">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="font-size-10">Average Visitors</div>
                                    <div class="font-size-12">20</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class=" padding-10 vertical-align bg-green-800 text-center relative card white  margin-bottom-30 "
                           style="height:134px;">
                           <div class="vertical-align-middle">
                              <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                 Total <br />Checked-in
                              </div>
                              <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">163</b>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class=" padding-10 vertical-align bg-green-800 text-center relative card white  margin-bottom-30 "
                           style="height:134px;">
                           <div class="vertical-align-middle">
                              <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                 Total <br /> Checked-out
                              </div>
                              <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">63</b>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class=" padding-10 vertical-align bg-teal-800 text-center relative card white  margin-bottom-30 "
                           style="height:134px;">
                           <div class="vertical-align-middle">
                              <div class="font-size-14  margin-top-0 margin-bottom-5 ">
                                 Average Time Spent <br /> Per Visitor
                              </div>
                              <b class="font-size-18 margin-bottom-10" style="position:relative; top:5px;">15m
                              10s</b>
                           </div>
                        </div>
                     </div>
                  </div>
            
                  <div class="row">
                     <div class="col-lg-5">
                        <div class="panel panel-dark  card light ">
                           <div class="panel-heading margin-bottom-0 bg-green-800">
                              <h3 class="panel-title font-weight-600 text-center">Visitor Count
                                 (Checked-in/Checked-out)
                              </h3>
                           </div>
                           <div class="panel-body padding-15">
                              <div class="chartbox">
                                 <div id="chart-hours"></div>
                                 <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-hours',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                    // chart.legend.show(['Total_Visitors'])
                                                    hide: ['Data', 'MOE_Owner']
                                                },
                                    
                                                data: {
                                                    columns: [
                                                        ['Checked-in', 10, 50, 70, 50, 90, 120, 90, 170, 185, 200, 250],
                                                        ['Checked-out', 3, 12, 55, 25, 15, 150, 25, 19, 15, 11, 30],
                                                        //['Booth#3', 25, 15, 22, 15, 21, 19, 17, 27],
                                                        //['Data', 90, 70, 135, 60],
                                                    ],
                                                    type: 'area-spline',
                                                    types: {
                                                        Current_Vistors: 'spline',
                                                        Avg_Time_Spent: 'spline',
                                                        Total_Visitors: 'spline',
                                                        // Data: 'spline',
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
                                                        categories: ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00']
                                                    },
                                                    y: {
                                                        label: {
                                    
                                                            text: 'Visitors ',
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
                     <div class="col-lg-5">
                        <div class="panel panel-dark  card light ">
                           <div class="panel-heading margin-bottom-0">
                              <h3 class="panel-title font-weight-600 text-center">Visitor Duration
                              </h3>
                           </div>
                           <div class="panel-body padding-15">
                              <div class="chartbox">
                                 <div id="chart-vvv"></div>
                                 <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-vvv',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: false,
                                                    position: 'bottom',
                                                    // chart.legend.show(['Total_Visitors'])
                                                    hide: ['Data', 'MOE_Owner']
                                                },
                                    
                                                data: {
                                                    columns: [
                                                        ['Visitor', 110, 170, 200, 127, 130, 157, 130, 185],
                                    
                                    
                                                    ],
                                                    type: 'bar',
                                                    types: {
                                                        Current_Vistors: 'spline',
                                                        Avg_Time_Spent: 'spline',
                                                        Total_Visitors: 'spline',
                                                        // Data: 'spline',
                                                    },
                                                    groups: [
                                                        //  ['Current_Vistors', 'Avg_Time_Spent']
                                                    ]
                                                },
                                    
                                                color: {
                                                    pattern: ['#56bfb5']
                                                },
                                                axis: {
                                                    rotated: false,
                                                    x: {
                                                        label: {
                                                            show: false,
                                                            text: 'Time Spent',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['1-5min', '5-10min', '10-20min', '20-40m', '40-60m', '1-2h', '2-4h', '> 5h ']
                                                    },
                                                    y: {
                                                        label: {
                                    
                                                            text: 'Visitors ',
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
                     <div class="col-lg-2">
                        <div class="panel panel-dark  card light ">
                           <div class="panel-heading margin-bottom-0">
                              <h3 class="panel-title font-weight-600 text-center">Returning Visitors
                              </h3>
                           </div>
                           <div class="panel-body padding-15">
                              <div class="chartbox">
                                 <div id="chart-rrr"></div>
                                 <script>
                                    $(document).ready(function ($) {
                                        (function () {
                                            var simple_line_chart = c3.generate({
                                                bindto: '#chart-rrr',
                                                size: {
                                                    height: 250,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                    // chart.legend.show(['Total_Visitors'])
                                                    hide: ['Data', 'MOE_Owner']
                                                },
                                    
                                                data: {
                                                    columns: [
                                                        ['New Visitors', 80],
                                                        ['Returning Visitors', 23],
                                    
                                                    ],
                                                    type: 'pie',
                                                    types: {
                                                        Current_Vistors: 'spline',
                                                        Avg_Time_Spent: 'spline',
                                                        Total_Visitors: 'spline',
                                                        // Data: 'spline',
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
                                                            text: 'Time Spent',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['1-5min', '5-10min', '10-20min', '20-40m', '40-60m', '1-2h', '2-4h', '> 5h ']
                                                    },
                                                    y: {
                                                        label: {
                                    
                                                            text: 'Visitors ',
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
         </div>
      </div>

      <script src="../plugins/d3/d3.min.js"></script>
      <script src="../plugins/c3/c3.js"></script>
      <script src="../plugins/js/core.js"></script>
      <script src="js/scripts.js"></script>
   </body>
</html>