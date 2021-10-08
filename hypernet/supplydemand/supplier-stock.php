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



               <div class="row ">





                  <div class="col-md-9">

                     <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                           <h3 class="panel-title font-weight-600">Overall Statistics</h3>

                        </div>
                        <div class="panel-body ">

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
                                                ['Supply', 2312, 8118, 6825, 2214, 8820, 7519],
                                                ['Demand', 1175, 1265, 1370, 4055, 1118, 5555],

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
                                                categories: ['Non Crude Oil', 'Aluminum Bars', 'Plastic Tubes', 'Soft Drinks', 'Polymers of Ethylene', 'Fork-Lift Trucks']
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

                  <div class="col-md-3">

                     <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                           <h3 class="panel-title font-weight-600">Low in Stock</h3>

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
                                             height: 250,
                                          },
                                          legend: {
                                             show: true,
                                             position: 'bottom',
                                          },
                                          data: {
                                             columns: [
                                                ['Buttermilk ', 35,],
                                                ['	Cheese & Curd ', 50],
                                                ['Machinery Parts ', 25,],
                                             ],
                                             type: 'donut',
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



               <div>
                  <div class="panel panel-dark  light margin-bottom-0 shadow">

                     <div class="panel-heading font-weight-600  ">
                        <h3 class="panel-title "><b>Stock Status </b>
                        </h3>

                     </div>
                     <div class="panel-body ">
                        <div class="margin-bottom-10 clearfix">
                           <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                              <input type="text" class="form-control input-sm" placeholder="Search">
                           </div>


                           <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                              <div class="">
                                 <input type="submit" class="btn btn-sm btn-info" value="Go">
                              </div>
                           </div>
                        </div>
                        <div class="table-responsive vscroll">
                           <table class="table  margin-bottom-0  table-condensed1 table-striped table-bordered text-wrap dtable">
                              <thead>
                                 <tr>
                                    <th class="text-left">Item ID </th>
                                    <th class="text-left">Name </th>
                                    <th class="text-left">Stock Available</th>
                                    <th class="text-left" width="200">Status</th>
                                    <th class="text-left">Demand Ratio </th>
                                    <th class="text-left">Last Stock Date</th>
                                    <th class="text-left"> Expected Restock</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>#156963 </td>
                                    <td> Passenger Vehicles </td>
                                    <td>52,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 45%;">
                                             <span class="progress-label">45%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>

                                 </tr>
                                 <tr>
                                    <td>#785623 </td>
                                    <td> Water Heaters </td>
                                    <td>17,300 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 55%;">
                                             <span class="progress-label">55%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>55% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#558966 </td>
                                    <td> Air & Vacuum Pumps </td>
                                    <td>21,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 15%;">
                                             <span class="progress-label">15%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>41% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#21599 </td>
                                    <td> Construction Equipment </td>
                                    <td>14,111</td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 22%;">
                                             <span class="progress-label">22%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#156963 </td>
                                    <td> Electrical Switching Boards </td>
                                    <td>52,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 85%;">
                                             <span class="progress-label">85%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#156963 </td>
                                    <td> Passenger Vehicles </td>
                                    <td>52,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 17%;">
                                             <span class="progress-label">17%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#785623 </td>
                                    <td> Water Heaters </td>
                                    <td>17,300 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 35%;">
                                             <span class="progress-label">25%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>55% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#558966 </td>
                                    <td> Air & Vacuum Pumps </td>
                                    <td>21,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 5%;">
                                             <span class="progress-label">5%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>41% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#21599 </td>
                                    <td> Construction Equipment </td>
                                    <td>14,111</td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 75%;">
                                             <span class="progress-label">75%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>
                                 <tr>
                                    <td>#156963 </td>
                                    <td> Electrical Switching Boards </td>
                                    <td>52,220 </td>
                                    <td>
                                       <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                          <div class="progress-bar " role="progressbar" style="width: 35%;">
                                             <span class="progress-label">55%</span>
                                          </div>
                                       </div>
                                    </td>
                                    <td>81% </td>
                                    <td> May 12, 2019 </td>
                                    <td> Jan 12, 2020 </td>
                                 </tr>

                              </tbody>

                           </table>
                        </div>




                        <!-- <div class="row">
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Passenger Vehicles </div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">52,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>81%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Water Heaters</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">17,300</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>10%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Air & Vacuum Pumps</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">21,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 ">Construction Equipment</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">14,111</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Electrical Switching Boards</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">30,171</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 ">Vans & Buses</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">152,444</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 ">Medicines in Doses</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">52,123</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Motor Vehicle Parts</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">12,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Passenger Vehicles </div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">52,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>81%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Water Heaters</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">17,300</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>10%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Air & Vacuum Pumps</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">21,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 ">Construction Equipment</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">14,111</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Electrical Switching Boards</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">30,171</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div>
                                 <div class="padding-15 bg-blue-800 text-center relative shadow card white  margin-bottom-30 hover">
                                    <div class="font-size-14 margin-bottom-10 "> Seats & Parts</div>
                                    <div class="font-size-18 margin-bottom-20 font-weight-600">11,220</div>
                                    <div class="row no-space bg-blue-700">
                                       <div class="col-md-12">
                                          <div class=" font-size-10 padding-5 ">
                                             Demand Ratio <div>21%</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>




                        </div> -->
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