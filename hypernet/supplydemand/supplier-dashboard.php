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



            <div class=" page-content container-fluid">



               <div style="max-width: 12200px; margin: auto;">

                  <div class="row no-space1  ">





                     <div class="col-lg-7 ">
                        <div class="row ">
                           <div class="col-md-4">


                              <div class=" padding-10 bg-orange-800 text-center relative card white  margin-bottom-30  ">
                                 <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                                    Total Orders
                                 </div>
                                 <div class="margin-bottom-0 margin-right-10 inline-block"><img src="images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 280 </b>

                                 <div class="bg-orange-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">70</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">17</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <div class="col-md-4">

                              <div class=" padding-10 bg-blue-800 text-center relative card white  margin-bottom-30  ">
                                 <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                                    Pending Shipments
                                 </div>
                                 <div class="margin-bottom-0 margin-right-10 inline-block" "=""><img src=" images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 217 </b>

                                 <div class="bg-blue-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">190</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">10</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>


                           <div class="col-md-4">

                              <div class=" padding-10 bg-green-800 text-center relative card white  margin-bottom-30  ">
                                 <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                                    Overdue Shipments
                                 </div>
                                 <div class="margin-bottom-0 margin-right-10 inline-block" "=""><img src=" images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 17 </b>

                                 <div class="bg-green-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">5</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">0</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>




                        </div>


                        <div class="row">
                           <div class="col-lg-3">
                              <div class="padding-10 bg-green-800 text-center relative shadow card white margin-bottom-30 ">
                                 <div class="font-size-12 margin-bottom-0">
                                    Overall Stock
                                 </div>
                                 <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                    80%
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="padding-10 bg-green-800 text-center relative shadow card white margin-bottom-30 ">
                                 <div class="font-size-12 margin-bottom-0">
                                    Predicted Inflation

                                 </div>
                                 <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                    9.41 %
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="padding-10 bg-green-800 text-center relative shadow card white margin-bottom-30 ">
                                 <div class="font-size-12 margin-bottom-0">
                                    Total Suppliers
                                 </div>
                                 <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                    317
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="padding-10 bg-green-800 text-center relative shadow card white margin-bottom-30 ">
                                 <div class="font-size-12 margin-bottom-0">
                                    Shortage </div>
                                 <div class="font-size-18 font-weight-600 margin-bottom-0 inf1">
                                    15%
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="widget  white margin-bottom-30 shadow card">
                                 <div class="padding-15 bg-cyan-700 " style="height:235px;">
                                    <div class="text-center padding-top-0">
                                       <div class="">
                                          <div class=" font-size-16 margin-bottom-20">Most Supplied Product</div>
                                          <div class="dropdown margin-bottom-20 ">
                                             <select type="button" class="btn bg-cyan-800 btn-block1 white dropdown-toggle btn-xs" data-toggle="dropdown" id="mrq-dd-maintenance">
                                                <option>This Month</option>
                                                <option>This Year</option>
                                             </select>
                                          </div>
                                          <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1">
                                             Water Heaters
                                          </div>
                                          <div class="font-size-14 margin-bottom-10" id="mrq-m2">
                                             Electronic
                                          </div>
                                          <div class="font-size-10">
                                             <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                             <span class="" id="mrq-m3">18%</span>
                                             <span class="" id="mrq-m4">more than last month</span>
                                          </div>
                                       </div>

                                       <script>
                                          $("#mrq-dd-maintenance").on('change', function () {
                                             debugger
                                             if (this.value.trim().toLowerCase().includes('month')) {
                                                $("#mrq-m1").text('Water Heaters')
                                                $("#mrq-m2").text('Electronic')
                                                $("#mrq-m3").text('18%')
                                                $("#mrq-m4").text('more than last month')
                                             }
                                             else {
                                                $("#mrq-m1").text('Motor Vehicle Parts')
                                                $("#mrq-m2").text('Vehicles')
                                                $("#mrq-m3").text('19%')
                                                $("#mrq-m4").text('more than last year')
                                             }
                                          })

                                       </script>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <div class="col-lg-6">
                              <div class="widget  white margin-bottom-30 shadow card">
                                 <div class="padding-15 bg-cyan-800 " style="height:235px;">
                                    <div class="text-center padding-top-0">
                                       <div class="">
                                          <div class=" font-size-16 margin-bottom-20">Least Supplied Product</div>
                                          <div class="dropdown margin-bottom-20 ">
                                             <select type="button" class="btn bg-cyan-700 btn-block1 white dropdown-toggle btn-xs" data-toggle="dropdown" id="mrq-dd-maintenance2">
                                                <option>This Month</option>
                                                <option>This Year</option>
                                             </select>
                                          </div>
                                          <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-m1a">
                                             Fresh Birds Eggs
                                          </div>
                                          <div class="font-size-14 margin-bottom-10" id="mrq-m2a">
                                             Food
                                          </div>
                                          <div class="font-size-10">
                                             <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                             <span class="" id="mrq-m3a">18%</span>
                                             <span class="" id="mrq-m4a">more than last month</span>
                                          </div>
                                       </div>

                                       <script>
                                          $("#mrq-dd-maintenance2").on('change', function () {
                                             debugger
                                             if (this.value.trim().toLowerCase().includes('month')) {
                                                $("#mrq-m1a").text(' Fresh Birds Eggs')
                                                $("#mrq-m2a").text('Food')
                                                $("#mrq-m3a").text('18%')
                                                $("#mrq-m4a").text('more than last month')
                                             }
                                             else {
                                                $("#mrq-m1a").text('Motor Vehicle Parts')
                                                $("#mrq-m2a").text('Vehicles')
                                                $("#mrq-m3a").text('19%')
                                                $("#mrq-m4a").text('more than last year')
                                             }
                                          })

                                       </script>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>



                     </div>
                  </div>

                  <div class="row no-space shadow card margin-bottom-30">

                     <div class="">
                        <div class="slikslider margin-bottom-0 bg-white  " id="slikslider-types">
                           <div>
                              <div class="padding-15">
                                 <div class="padding-5 bg-green-100 text-center margin-bottom-10"> Order Over Time (k)</div>
                                 <div class="chartbox">
                                    <div id="chart-vvvvv"></div>
                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {
                                             var simple_line_chart = c3.generate({
                                                bindto: '#chart-vvvvv',
                                                size: {
                                                   height: 200,
                                                },
                                                legend: {
                                                   show: false,
                                                   position: 'bottom',
                                                },
                                                data: {
                                                   columns: [
                                                      ['Orders', 100, 120, 200, 170, 117, 220],

                                                   ],
                                                   type: 'area',
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
                                                      categories: ['Jan 19', 'Feb 19', 'Mar 19', 'Apr 19', 'May 19', 'Jun 19']
                                                   },
                                                   y: {
                                                      label: {

                                                         text: 'Orders ',
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
                                                      show: false
                                                   },
                                                   y: {
                                                      show: false
                                                   }
                                                }
                                             });
                                          })();
                                       });
                                    </script>
                                 </div>
                              </div>
                           </div>

                           <div>
                              <div class="padding-15">
                                 <div class="padding-5 bg-green-100 text-center margin-bottom-10"> Purchase Price Variation</div>
                                 <div class="chartbox">
                                    <div id="chart-rrr"></div>
                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {
                                             var simple_line_chart = c3.generate({
                                                bindto: '#chart-rrr',
                                                size: {
                                                   height: 200,
                                                },
                                                legend: {
                                                   show: false,
                                                   position: 'bottom',
                                                },
                                                subchart: {
                                                   show: true,
                                                   size: {
                                                      height: 25
                                                   },
                                                },
                                                data: {
                                                   columns: [
                                                      ['Products', 1200, 1120, 7200, 3170],

                                                   ],
                                                   type: 'step',
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
                                                      categories: ['Mar 19', 'Apr 19', 'May 19', 'Jun 19']
                                                   },
                                                   y: {
                                                      label: {

                                                         text: 'Orders ',
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
                                                      show: false
                                                   },
                                                   y: {
                                                      show: false
                                                   }
                                                }
                                             });
                                          })();
                                       });
                                    </script>
                                 </div>
                              </div>
                           </div>


                           <div>
                              <div class="padding-15">
                                 <div class="padding-5 bg-green-100 text-center margin-bottom-10"> On Time Deliveries</div>
                                 <div class="chartbox">
                                    <div id="chart-ccc"></div>
                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {
                                             var simple_line_chart = c3.generate({
                                                bindto: '#chart-ccc',
                                                size: {
                                                   height: 200,
                                                },
                                                legend: {
                                                   show: false,
                                                   position: 'bottom',
                                                },
                                                data: {
                                                   columns: [
                                                      ['Orders', 2100, 4120, 3200, 2170, 1117, 8220],

                                                   ],
                                                   type: 'bar',
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
                                                      categories: ['Jan 19', 'Feb 19', 'Mar 19', 'Apr 19', 'May 19', 'Jun 19']
                                                   },
                                                   y: {
                                                      label: {

                                                         text: 'Deliveries ',
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
                                                      show: false
                                                   },
                                                   y: {
                                                      show: false
                                                   }
                                                }
                                             });
                                          })();
                                       });
                                    </script>
                                 </div>
                              </div>
                           </div>



                           <div>
                              <div class="padding-15">
                                 <div class="padding-5 bg-green-100 text-center margin-bottom-10"> Quantity Received</div>
                                 <div class="chartbox">
                                    <div id="chart-ttt"></div>
                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {
                                             var simple_line_chart = c3.generate({
                                                bindto: '#chart-ttt',
                                                size: {
                                                   height: 200,
                                                },
                                                legend: {
                                                   show: false,
                                                   position: 'bottom',
                                                },
                                                data: {
                                                   columns: [
                                                      ['Orders', 21100, 12220, 17200, 25170, 19117, 33220],

                                                   ],
                                                   type: 'area-spline',
                                                },
                                                color: {
                                                   pattern: ['#ec9940']
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
                                                      categories: ['Jan 19', 'Feb 19', 'Mar 19', 'Apr 19', 'May 19', 'Jun 19']
                                                   },
                                                   y: {
                                                      label: {

                                                         text: 'Orders ',
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
                                                      show: false
                                                   },
                                                   y: {
                                                      show: false
                                                   }
                                                }
                                             });
                                          })();
                                       });
                                    </script>
                                 </div>
                              </div>
                           </div>

                           <div>
                              <div class="padding-15">
                                 <div class="padding-5 bg-green-100 text-center margin-bottom-10"> Late Deliveries</div>
                                 <div class="chartbox">
                                    <div id="chart-nnn"></div>
                                    <script>
                                       $(document).ready(function ($) {
                                          (function () {
                                             var simple_line_chart = c3.generate({
                                                bindto: '#chart-nnn',
                                                size: {
                                                   height: 200,
                                                },
                                                legend: {
                                                   show: false,
                                                   position: 'bottom',
                                                },
                                                data: {
                                                   columns: [
                                                      ['Orders', 100, 120, 200, 170, 117, 220],

                                                   ],
                                                   type: 'line',
                                                },

                                                color: {
                                                   pattern: ['#ec9940']
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
                                                      categories: ['Jan 19', 'Feb 19', 'Mar 19', 'Apr 19', 'May 19', 'Jun 19']
                                                   },
                                                   y: {
                                                      label: {

                                                         text: 'Orders ',
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
                                                      show: false
                                                   },
                                                   y: {
                                                      show: false
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
                        <script>
                           $('#slikslider-types').slick({
                              infinite: false,
                              slidesToShow: 4,
                              slidesToScroll: 1,
                              arrows: true,
                              dots: true,
                              responsive: [
                                 {
                                    breakpoint: 1160,
                                    settings: {
                                       slidesToShow: 3,
                                    }
                                 },
                                 {
                                    breakpoint: 1025,
                                    settings: {
                                       slidesToShow: 3,
                                    }
                                 },
                                 {
                                    breakpoint: 769,
                                    settings: {
                                       slidesToShow: 2,
                                    }
                                 },
                                 {
                                    breakpoint: 600,
                                    settings: {
                                       slidesToShow: 2,
                                    }
                                 },
                                 {
                                    breakpoint: 480,
                                    settings: {
                                       slidesToShow: 2,
                                    }
                                 }

                              ]
                           });
                        </script>
                     </div>





                  </div>



                  <div class="row">
                     <div class="col-lg-6">
                        <div class="panel panel-default  card shadow light">
                           <div class="panel-heading ">
                              <h3 class="panel-title font-weight-600 ">Most Demanding Customers</h3>
                           </div>
                           <div class="panel-body ">
                              <div class="table-responsive vscroll" style="max-height: 290px;">
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

                     <div class="col-lg-6">
                        <div class="panel panel-default  card shadow light bg-red-7001 ">
                           <div class="panel-heading bg-red-8001 ">
                              <h3 class="panel-title font-weight-600 white1">Stock Availabilty
                                 <div class="pull-right">
                                    <a href="add-stock.php" class="btn btn-xs   btn-default btn-success ">Add/Update</a>
                                 </div>
                              </h3>

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
            </div>

            <script src="../plugins/d3/d3.min.js"></script>
            <script src="../plugins/c3/c3.js"></script>
            <script src="../plugins/js/core.js"></script>
            <script src="js/scripts.js"></script>
   </body>

</html>