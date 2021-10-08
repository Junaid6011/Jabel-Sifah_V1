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
<body class="dashboard ">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>



  <div class="page">
    <div class="breadcrumb-box">
      <ol class="breadcrumb breadcrumb-arrow ">
        <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
        <li><a href="javascript:void(0)">Water Heater</a></li>
      </ol>
    </div>



    <div class="page-content  container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="widget  margin-bottom-30 shadow ">
            <div class="padding-15 bg-green-100 " style="height:auto">
              <div class="text-center ">
                <div class="">

                  <div class="margin-bottom-10 " style="padding: 10px;">
                    <i> <img src="images/icon-leftmenu-water-heater.png" alt="img" height="170" class=""> </i>
                  </div>
                  <div class="padding-0 bg-cyan-000 text-left  margin-bottom-0 ">
                    <div class="font-size-20 text-center   ">Water Heater </div>
                    <div class="font-size-20  margin-bottom-15 text-center"><span class="badge badge-success">Active</span></div>



                    <div class="bg-green-100 padding-0">

                      <div class="padding-15  bg-white  margin-bottom-0 ">
                        <div class="table-responsive vscroll" style="height:268px;">
                          <table class="table  table-condensed  no-border  margin-bottom-0">
                            <tbody>

                              <tr>
                                <th> <b>       Device ID </b>  </th>
                                <td class="text-left text-break">
                                  WD-102
                                </td>
                              </tr>
                              <tr>
                                <th> <b>     Capacity </b>  </th>
                                <td class="text-left text-break">
                                  65 Liters
                                </td>
                              </tr>

                              <tr>
                                <th> <b>   Make  </b>  </th>
                                <td class="text-left text-break">
                                  PEL
                                </td>
                              </tr>
                              <tr>
                                <th> <b>    Model  </b>  </th>
                                <td class="text-left text-break">
                                  EWH-S55CSE
                                </td>
                              </tr>
                              <tr>
                                <th> <b>   Frequency </b>  </th>
                                <td class="text-left text-break">
                                  50 Hz
                              </tr>
                              <tr>
                                <th> <b>   Energy </b>  </th>
                                <td class="text-left text-break">
                                  1800 Watt
                              </tr>
                              <tr>
                                <th> <b>    Type  </b>  </th>
                                <td class="text-left text-break">
                                  Vertical Tank
                                </td>
                              </tr>
                              <tr>
                                <th> <b>     Classification </b>  </th>
                                <td class="text-left text-break">
                                  Class 1 - IPX 1
                                </td>
                              </tr>

                              <tr>
                                <th> <b>     Operating Pressure </b>  </th>
                                <td class="text-left text-break">
                                  up to 0.6 MPA
                                </td>
                              </tr>

                              <tr>
                                <th> <b>     Weight </b>  </th>
                                <td class="text-left text-break">
                                  11.8 Kg
                                </td>
                              </tr>

                              <tr>
                                <th> <b>   Dimensions </b>  </th>
                                <td class="text-left text-break">
                                  746mm x 420mm
                              </tr>
                              <tr>
                                <th> <b>Heated up Temperature </b>  </th>
                                <td class="text-left text-break">
                                  75°C ~ 35°C

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
        </div>
        <div class="col-lg-9 ">

          <div class="row no-space">
            <div class="col-lg-12">
              <div class="no-space  margin-bottom-30   bg-teal-700 shadow card  widget shadow card">

                <div class="col-sm-2">
                  <div class="white vertical-align height-80 text-center  margin-bottom-0">
                    <div class="vertical-align-middle">

                      <!--<div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                        <label class="onoffswitch-label" for="myonoffswitch">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>-->

                      <b>ON</b>

                      <div class="font-size-12">Device State</div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="white vertical-align height-80 text-center  margin-bottom-0">
                    <div class="vertical-align-middle">
                      <b class=" font-size-16">25°C</b>
                      <div class="font-size-12">Current Temperature</div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="white vertical-align height-80 text-center  margin-bottom-0">
                    <div class="vertical-align-middle">
                      <b class="font-size-16">45°C</b>
                      <div class="font-size-12">User Set Temperature</div>

                    </div>
                  </div>
                </div>

                <div class="col-sm-2">

                  <table class="table white  table-condensed  no-border  margin-bottom-0 font-size-16">
                    <tbody>
                      <tr>

                        <td width="120">
                          <div class="white vertical-align height-80 text-center  margin-bottom-0">
                            <div class="vertical-align-middle">
                              <b class="font-size-16"> 1.8 kWh</b>
                              <br />
                              <div class="font-size-12" title="Consumption">Energy</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div id="chart-rrr" class="margin-top-25"></div>
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

                        </td>
                      </tr>
                    </tbody>
                  </table>



                </div>


                <div class="col-sm-2">
                  <div class="white vertical-align height-80 text-center  margin-bottom-0">
                    <div class="vertical-align-middle">
                      <b class="font-size-16">A188</b>
                      <div class="font-size-12">Recent Error</div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-2">


                  <div class="white vertical-align height-90 text-center ">
                    <div class="vertical-align-middle">
                      <div class="">
                        <b class="font-size-14">  07:00pm,  <span class="">  Feb 08,18</span>  </b>

                      </div>
                      <div class="font-size-12">Last Updated </div>

                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>

                <div class="margin-bottom-15"></div>

                <div class="label white  bg-teal-800 font-size-12 margin-top-10 flat absolute  left right bottom">
                  <span style="position:relative; top:0;">   <img src="images/loader-live.gif" alt="img" height="20" style="position:relative; top:0;">  </span>   Live Device Status
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="widget shadow card">
                <div class="widget-content padding-10 bg-green-700 height-100 text-center relative">
                  <div class="white">
                    <div class="counter-label margin-bottom-5   clearfix">
                      <span class="font-size-14 ">
                        Energy Consumed
                      </span>

                    </div>
                    <div class="">
                      <span class="counter-icon margin-right-5 ">
                        <i> <img src="images/icon-unit.png" alt="img" height="30"> </i>
                      </span>
                      <b class="font-size-24">120</b>
                      <span class="-related font-size-12">kWh</span>
                    </div>
                    <span class="label white  bg-green-800  flat absolute  left right bottom">
                      Last 24 Hours
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="widget shadow card">
                <div class="widget-content padding-10 bg-orange-700 height-100 text-center relative">
                  <div class="white">
                    <div class="counter-label margin-bottom-5 clearfix">
                      <span class="font-size-14 ">
                        Usage Hours
                      </span>
                    </div>
                    <div class="">
                      <span class="counter-icon margin-right-5 ">
                        <i> <img src="images/icon-hours.png" alt="img" height="30"> </i>
                      </span>
                      <b class="font-size-20">  18 </b>
                      <span class="-related font-size-12">hrs</span>
                    </div>
                    <span class="label white  bg-orange-800  flat absolute  left right bottom">
                      Last 24 Hours
                    </span>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4">

              <div class="widget shadow card">
                <div class="widget-content padding-10 bg-red-700 height-100 text-center relative">
                  <div class="white">
                    <div class="counter-label margin-bottom-5 clearfix">
                      <span class="font-size-14 ">
                        Errors
                      </span>
                    </div>
                    <div class="">
                      <span class="counter-icon margin-right-5 ">
                        <i> <img src="images/icon-errors.png" alt="img" height="30"> </i>
                      </span>
                      <b class=" font-size-20"> 03 </b>

                    </div>
                    <span class="label white  bg-red-800  flat absolute  left right bottom">
                      Last 24 Hours
                    </span>
                  </div>
                </div>
              </div>

            </div>



          </div>











          <div class="row">
            <div class="col-lg-7">
              <div class="panel panel-default nav-tabs-horizontal shadow">
                <div class="panel-heading font-weight-600">
                  <ul class="nav nav-tabs nav-tabs-line  " data-plugin="nav-tabs" role="tablist">
                    <li class="active"><a data-toggle="tab" href="#Error" role="tab" class=" ">Avg Usage Stats</a></li>
                    <li class=""><a data-toggle="tab" href="#cccc" role="tab" class=" ">Error Logs</a></li>

                  </ul>

                </div>

                <div class="panel-body" >
                  <div class="tab-content">

                    <div class="tab-pane active" id="Error" role="tabpanel">
                      <div class="panel-body padding-0" >
                        <div class=" ">
                          <div class="  ">
                            <div class="table-responsive vscroll1">
                              <table class="table  table-condensed  no-border  margin-bottom-0 font-size-16">
                                <tbody>
                                  <tr>
                                    <td width="">
                                      <div class="font-size-24  font-weight-600 red-800"> 1452.5 kWh </div>
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
                                      <div class="font-size-24 orange-800 font-weight-600 "> 1975.2 kWh </div>
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
                                      <div class="font-size-24 orange-800 font-weight-600 "> 1789.0 kWh </div>
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
                    <div class="tab-pane " id="cccc" role="tabpanel">
                      <div class=" ">

                        <div class="">
                          <div class="vscroll bg-white" style="max-height:260px;">
                            <table class="table table-striped margin-bottom-0  ">
                              <tbody>
                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td width="120" class="text-left"> <b class="small"> 12:30am - Today</b>   </td>
                                  <td> <div class=""> Defective fl oat switch or short circuit </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Broken wires in, short circuit of, or disconnection </div></td>
                                </tr>

                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Defective electronic expansion valve coil </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A8556   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>

                                </tr>
                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Defective fl oat switch or short circuit connector </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Broken wires in, short circuit of, or disconnection of connectors from the fan motor harness </div></td>
                                </tr>

                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Defective electronic expansion valve coil </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A8556   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>
                                </tr>
                            </table>
                          </div>
                        </div>

                      </div>
                    </div>


                  </div>
                </div>
              </div>



            </div>
            <div class="col-lg-5">



              <div class="panel panel-default nav-tabs-horizontal shadow">
                <div class="panel-heading font-weight-600">
                  <ul class="nav nav-tabs nav-tabs-line  " data-plugin="nav-tabs" role="tablist">

                    <li class=""><a data-toggle="tab" href="#Sensors" role="tab" class=" ">Sensors</a></li>
                  </ul>
                </div>

                <div class="panel-body">
                  <div class="tab-content">

                    <div class="tab-pane active" id="Sensors" role="tabpanel">
                      <div class=" ">
                        <div class="">
                          <div class="">
                            <div class="table-responsive vscroll" style="height:260px;">
                              <table class="table  table-condensed  no-border  margin-bottom-0 font-size-16">
                                <tbody>
                                  <tr>
                                    <td width="">
                                      <img src="images/icon-sensor-current.png" alt="..." width="20" class="margin-right-10">
                                      <b>      Current </b>
                                    </td>
                                    <td class=""><span class="label label-default  margin-right-10  ">  <i class="ion-close"></i>     </span> Disabled</td>

                                  </tr>
                                  <tr>
                                    <td width="">
                                      <img src="images/icon-sensor-voltage.png" alt="..." width="20" class="margin-right-10">
                                      <b>      Voltage </b>
                                    </td>
                                    <td class=""><span class="label label-default  margin-right-10">  <i class="ion-close"></i>     </span> Disabled</td>

                                  </tr>
                                  <tr>
                                    <td width="">
                                      <img src="images/icon-sensor-temperature.png" alt="..." width="20" class="margin-right-10">
                                      <b>      Temperature </b>
                                    </td>
                                    <td class=""><span class="label label-warning  margin-right-10">  <i class="ion-checkmark"></i>     </span> Enabled</td>

                                  </tr>
                                  <tr>
                                    <td width="">
                                      <img src="images/icon-sensor-diplevel.png" alt="..." width="20" class="margin-right-10">
                                      <b>       Water Level </b>
                                    </td>
                                    <td class=""><span class="label label-default  margin-right-10">  <i class="ion-close"></i>     </span> Disabled</td>

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





            </div>



          </div>



        </div>

      </div>

      <div class="row">

        <div class="col-lg-12 ">


          <div class="panel panel-default shadow ">
            <div class="panel-heading">
              <h3 class="panel-title font-weight-600">Statistics</h3>

            </div>
            <div class="panel-body ">

              <div class="">
                <div class="nav-tabs-vertical sm">
                  <ul class="nav nav-tabs nav-tabs-solid1  margin-right-25 " data-plugin="nav-tabs" role="tablist" style="min-height: 290px;background: #fcfcfc;">
                    <li class="active"><a data-toggle="tab" href="#Energy" role="tab">Energy</a></li>
                    <li class=""><a data-toggle="tab" href="#cooling" role="tab">Temperature</a></li>
                    <li class=""><a data-toggle="tab" href="#Hours" role="tab">Usage Hours</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="Energy" role="tabpanel">
                      <div class="margin-bottom-10  row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <div class="input-daterange   ">
                              <div class="input-group  input-group-sm">
                                <span class="input-group-addon hidden-xs">
                                  <i class="icon wb-calendar"></i>
                                </span>
                                <input type="text" class="form-control date" value="10/24/18" />
                              </div>
                              <div class="input-group input-group-sm">
                                <span class="input-group-addon hidden-xs">to</span>
                                <input type="text" class="form-control date" value="10/25/18" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 text-right">
                          <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                            <label class="btn btn-outline btn-default ">
                              <input type="radio" name="multiples" checked=""> Today
                            </label>
                            <label class="btn btn-outline btn-default ">
                              Yesterday
                            </label>
                            <label class="btn btn-outline btn-success active ">
                              This Week
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                        </div>
                      </div>
                      <div class="col-lg-12">



                        <div class="chartbox">
                          <div id="chart-home1"></div>
                          <script>
                            $(document).ready(function ($) {
                              (function () {
                                var simple_line_chart = c3.generate({
                                  bindto: '#chart-home1',
                                  size: {
                                    height: 250,
                                  },
                                  legend: {
                                    show: true,
                                    position: 'bottom',
                                  },
                                  data: {
                                    columns: [
                                        ['kWh', 52, 10, 26, 40, 25, 38, 31],
                                    ],
                                    type: 'bar',
                                  },
                                  color: {
                                    //pattern: ['#555555']
                                  },
                                  axis: {
                                    rotated: false,
                                    x: {
                                      label: {
                                        show: false,
                                        text: 'Days',
                                        position: 'outer-center'
                                      },
                                      type: 'category',
                                      categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
                                    },
                                    y: {
                                      label: {
                                        text: 'kWh ',
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
                    <div class="tab-pane " id="cooling" role="tabpanel">


                      <div class="margin-bottom-10  row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <div class="input-daterange   ">
                              <div class="input-group  input-group-sm">
                                <span class="input-group-addon hidden-xs">
                                  <i class="icon wb-calendar"></i>
                                </span>
                                <input type="text" class="form-control date" value="10/24/18" />
                              </div>
                              <div class="input-group input-group-sm">
                                <span class="input-group-addon hidden-xs">to</span>
                                <input type="text" class="form-control date" value="10/25/18" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 text-right">
                          <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                            <label class="btn btn-outline btn-default ">
                              <input type="radio" name="multiples" checked=""> Today
                            </label>
                            <label class="btn btn-outline btn-success active  ">
                              Yesterday
                            </label>
                            <label class="btn btn-outline btn-default  ">
                              This Week
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                        </div>
                      </div>
                      <div class="col-lg-12">


                        <div class="chartbox">
                          <div id="chart-temp1"></div>
                          <script>
                            $(document).ready(function ($) {
                              (function () {
                                var simple_line_chart = c3.generate({
                                  bindto: '#chart-temp1',
                                  size: {
                                    height: 250,
                                  },
                                  legend: {
                                    show: true,
                                    position: 'bottom',
                                  },
                                  data: {
                                    columns: [
                                        ['Celsius', 52, 10, 26, 40, 25, 38, 31, 52, 10, 26, 40, 25, 38, 31, 38, 31, 52, 10, 26, 40, 25, 38, 31, 22],
                                    ],
                                    type: 'area',
                                  },
                                  color: {
                                    pattern: ['#36ab7a']
                                  },
                                  axis: {
                                    rotated: false,
                                    x: {
                                      label: {
                                        show: false,
                                        text: 'Hours',
                                        position: 'outer-center'
                                      },
                                      type: 'category',
                                      categories: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                                    },
                                    y: {
                                      label: {
                                        text: '°C ',
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
                    <div class="tab-pane " id="Hours" role="tabpanel">


                      <div class="margin-bottom-10  row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <div class="input-daterange   ">
                              <div class="input-group  input-group-sm">
                                <span class="input-group-addon hidden-xs">
                                  <i class="icon wb-calendar"></i>
                                </span>
                                <input type="text" class="form-control date" value="10/24/18" />
                              </div>
                              <div class="input-group input-group-sm">
                                <span class="input-group-addon hidden-xs">to</span>
                                <input type="text" class="form-control date" value="10/25/18" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 text-right">
                          <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                            <label class="btn btn-outline btn-default ">
                              <input type="radio" name="multiples" checked=""> Today
                            </label>
                            <label class="btn btn-outline btn-default ">
                              Yesterday
                            </label>
                            <label class="btn btn-outline btn-success active  ">
                              This Week
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                        </div>
                      </div>
                      <div class="col-lg-12">


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
                                  },
                                  data: {
                                    columns: [
                                        ['Hours', 52, 10, 26, 40, 25, 38, 31],
                                    ],
                                    type: 'bar',
                                  },
                                  color: {
                                    pattern: ['#ec9940']
                                  },
                                  axis: {
                                    rotated: false,
                                    x: {
                                      label: {
                                        show: false,
                                        text: 'Days',
                                        position: 'outer-center'
                                      },
                                      type: 'category',
                                      categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
                                    },
                                    y: {
                                      label: {
                                        text: 'No. of Hours ',
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
