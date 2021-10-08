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

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 1280 </b>

                                 <div class="bg-orange-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">50</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">170</div>
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

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 2557 </b>

                                 <div class="bg-blue-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">280</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">100</div>
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

                                 <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 03 </b>

                                 <div class="bg-green-700 padding-5 white  margin-top-15">
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="font-size-10">Avg Daily </div>
                                          <div class="font-size-12">2</div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="font-size-10"> Today </div>
                                          <div class="font-size-12">1</div>
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
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">Total Demand</div>
                                          <div class="counter-number-group margin-bottom-10">

                                             <span class="counter-number">11,333</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">38%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div>
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">Forecast</div>
                                          <div class="counter-number-group margin-bottom-10">
                                             <span class="counter-number">12,657</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">24%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div>
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">Sales Order</div>
                                          <div class="counter-number-group margin-bottom-10">
                                             <span class="counter-number">2,320</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">11%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div>
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">On Hand</div>
                                          <div class="counter-number-group margin-bottom-10">
                                             <span class="counter-number">6,002</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">10%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">Scheduled</div>
                                          <div class="counter-number-group margin-bottom-10">
                                             <span class="counter-number">1200</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">8%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <div class="">
                                 <div class="widget margin-bottom-0">
                                    <div class="widget-content padding-30 bg-white widget-radius">
                                       <div class="counter counter-md text-left">
                                          <div class="counter-label text-uppercase margin-bottom-5">Planed Orders </div>
                                          <div class="counter-number-group margin-bottom-10">
                                             <span class="counter-number">657</span>
                                          </div>
                                          <div class="counter-label">
                                             <div class="progress progress-xs margin-bottom-10">
                                                <div class="progress-bar progress-bar-info bg-blue-600" aria-valuenow="70.3" aria-valuemin="0" aria-valuemax="100" style="width: 70.3%" role="progressbar">

                                                </div>
                                             </div>
                                             <div class="counter counter-sm text-left">
                                                <div class="counter-number-group">
                                                   <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                   <span class="counter-number">10%</span>
                                                   <span class="counter-number-related">more than last month</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                        </div>
                        <script>
                           $('#slikslider-types').slick({
                              infinite: false,
                              slidesToShow: 5,
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

                     <div class="col-lg-5">
                        <div class="panel panel-default  card shadow light">
                           <div class="panel-heading">
                              <h3 class="panel-title font-weight-600">Frequency of price change in Last 6 Months </h3>
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
                                                height: 290,
                                             },
                                             legend: {
                                                show: true,
                                                position: 'bottom',
                                             },
                                             data: {
                                                columns: [
                                                   ['Supply', 1, 7, 2, 5, 7, 9],
                                                   ['Demand', 3, 4, 5, 2, 1, 2]
                                                ],
                                                types: {
                                                   Supply: 'line',
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
                                                   categories: ['Soft Drinks', 'Buttermilk', 'Cheese & Curd', 'Meat of Sheep', 'Storage Batteries', 'Fruit Juice']
                                                },
                                                y: {
                                                   label: {
                                                      text: 'Price Change Weeks',
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
                     <div class="col-lg-7">
                        <div class="panel panel-default  card shadow light">
                           <div class="panel-heading ">
                              <h3 class="panel-title font-weight-600 ">Most Demanding Items</h3>
                           </div>
                           <div class="panel-body ">
                              <div class="table-responsive vscroll" style="max-height: 290px;">
                                 <div class="">
                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered" id="">

                                       <thead>
                                          <tr class="">

                                             <th class="text-left">Order # </th>
                                             <th class="text-left">Supplier</th>
                                             <th class="text-left"> Product </th>
                                             <th class="text-left">Order Date</th>
                                             <th class="text-right"></th>
                                          </tr>
                                       </thead>
                                       <tbody>

                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AA1854444</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Interchange Hand &amp; Machine Tools </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
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
            </div>

            <script src="../plugins/d3/d3.min.js"></script>
            <script src="../plugins/c3/c3.js"></script>
            <script src="../plugins/js/core.js"></script>
            <script src="js/scripts.js"></script>
   </body>

</html>