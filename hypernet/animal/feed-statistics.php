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
<body class="dashboard">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>





  <div class="page">
<!--
    <div class="breadcrumb-box">
      <ol class="breadcrumb breadcrumb-arrow ">
        <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
        <li><a href="javascript:void(0)">Feed Statistics</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </div>
-->


    <div class="page-content  container-fluid">
      <div class="row">

        <div class="col-md-8">
        <div class="row">

        
            <div class="col-md-5">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-teal-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                               Feed In Stock
                                            </div>
                                        </div>
                                        <div class="" style="    margin-top: -12px;">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-zones.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">4570 kg</b>
                                        </div>
                                         <div class="font-size-10" style="position:relative; top:5px;">Avg Consumption: 150kg daily</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-md-7">
              <div class="row no-space shadow card margin-bottom-30">

                                <div class="">
                                    <div class="slikslider margin-bottom-0 bg-green-700 white card"  style="padding-bottom:10px;" id="slikslider-types">
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10 bg-green-700 height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0" style="padding-top:14px">
                                                            <div class="font-size-14 ">
                                                              Grains
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">200 kg</b>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white" >
                                                        <div class="margin-bottom-0 " style="padding-top:14px">
                                                            <div class="font-size-14 ">
                                                              Hay
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">240 kg</b>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 " style="padding-top:14px">
                                                            <div class="font-size-14 ">
                                                              Maize
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18">180 kg</b>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!--
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Trucks
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 0 </b>
                                                        </div>
                                                        <div class="label white  bg-teal-600  absolute1  left right bottom">
                                                            0 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
-->

                                    </div>
                                    <script>
                                        $('#slikslider-types').slick({
                                            infinite: false,
                                            slidesToShow: 3,
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
            </div>
        </div>
            </div>
        <div class="col-md-2">
          <div class="widget shadow">
            <div class="widget-content padding-10 bg-orange-700 white card height-100 text-center relative">
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
            <div class="widget-content padding-10 bg-orange-700 white card height-100 text-center relative">
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
                <div class="widget-content padding-10 bg-green-700 white card " style="height:278px">
                                <div class="counter counter-md counter-inverse text-center padding-top-0">
                                    <div class="counter-number-group">
                                        <div class="" >
                                            <div class="text-uppercase font-size-14 margin-bottom-0"><b>Feed Consumed</b></div>
                                            <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                <select type="button"
                                                    class="btn bg-green-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-cowchange">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                            <div class="margin-top-0">
                                            <i> <img src="images/icon-herds3.png" alt="img" height="60" class=""> </i>
                                            </div>
                                            <span class="font-size-30" id="cow1" >64 kg</span>
                                            <div class="font-size-14"id="cow2" style="padding-bottom: 5px; padding-top: 5px;">HR-205 </div>


                                            
                                            <div class="font-size-10 margin-top-5" >
                                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                            <span class="" id="cow3" >20%</span>
                                            <span class="" id="cow4">more than last week</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-cowchange").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('week')) {
                                                        $("#cow1").text('64 kg')
                                                        $("#cow2").text('HR-205')
                                                        $("#cow3").text('20%')
                                                        $("#cow4").text('more than last week')
                                                    }
                                                    else {
                                                        $("#cow1").text('182 kg')
                                                        $("#cow2").text('HR-328')
                                                        $("#cow3").text('14%')
                                                        $("#cow4").text('more than last month')
                                                    }
                                                })
                                            </script>
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

                <a class="panel-action icon ion-loop" ></a>
              </div>
              <h3 class="panel-title "> <b>Feed Consumed Statistics  </b></h3>
                
            </div>
              
            <div class="panel-body " >
                <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-class1">
                                                    <option>This Week </option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
              <div class="chartbox">

                <div id="chart-vvv"></div>
                <script>
                    var simple_line_chart; 
                  $(document).ready(function ($) {
                    (function () {
                      simple_line_chart = c3.generate({
                        bindto: '#chart-vvv',
                        size: {
                          height: 157,
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
                  <script>
                                $("#mrq-dd-class1").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('week')) {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns:  [
                               ['Title 1', 40, 60, 80, 84, 60, 44, 40],
                          ],
                                        });
                                    }
                                    else {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns: [
                               ['Title 2', 140, 160, 180, 184, 160, 144, 140],
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





      <div class="row">


        <div class="col-lg-12">


          <div class="panel panel-default shadow">
            <div class="panel-heading ">
              <div class="panel-actions ">

                <a class="panel-action icon ion-loop" ></a>
              </div>
              <h3 class="panel-title "> <b> Feed Stock Statistics  </b></h3>
            </div>
            <div class="panel-body ">
              <div class="vscroll padding-right-10" style="height:auto;">
                <div class="table-responsive ">
                  <table class="table  margin-bottom-0 table-hover table-condensed table-bordered">
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
