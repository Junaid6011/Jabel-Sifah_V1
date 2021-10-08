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
        <div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>


        <div class="page-content  container-fluid">

            <div class="row">
                <div class="col-lg-4">

                    <div class="panel  shadow bg-green-700 ">
                       

                        <div class="panel-heading   margin-bottom-0  bg-green-800 white card ">
                            <div class="panel-actions">
<!--                                <a class=""> View All</a>-->
                                <!--<a class="panel-action icon white " data-toggle="tooltip" data-original-title="View All"> View All</a>-->
                                
                                <a class="panel-action icon ion-loop white" ></a>
                                
                                <!--data-toggle="tooltip" data-original-title="Refresh"-->
                            </div>
                            <h3 class="panel-title white"> <b>Cow Statistics </b></h3>
                        </div>


                        <div class="panel-body padding-10 ">

                            <div class="">


                                <div class="nav-tabs-vertical sm  ">
                                    <ul class="nav nav-tabs nav-tabs-line   vscroll" data-plugin="nav-tabs" role="tablist"  style="max-height:200px; overflow-x:hidden;">
                                        <li class="active"><a data-toggle="tab" href="#statstab1" role="tab" class="white">In Lactation</a></li>
                                        <li><a data-toggle="tab" href="#statstab2"  role="tab" class="white">Dry</a></li>
                                        <li><a data-toggle="tab" href="#statstab3" role="tab" class="white">Pregnant</a></li>
                                        <li><a data-toggle="tab" href="#statstab4" role="tab" class="white">Estrus</a></li>
                                        <li><a data-toggle="tab" href="#statstab5" role="tab" class="white">Temperature</a></li>
                                        <li><a data-toggle="tab" href="#statstab6" role="tab" class="white">Rumination</a></li>
                                        <li><a data-toggle="tab" href="#statstab7" role="tab" class="white">Others</a></li>

                                    </ul>
                                    <div class="tab-content  ">
                                        <div class="tab-pane active" id="statstab1" role="tabpanel">
                                            <div class="">
                                                <div class="col-xs-6  ">
                                                    <div class="text-center">
                                                        <div class="margin-top-50 margin-bottom-10">
                                                            <i> <img src="images/icon_stat_lactation.png" alt="img" height="50" class=""> </i>
                                                        </div>
                                                        <span class="font-size-30 white">22</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  ">
                                                    <div class="padding-0 bg-blue-grey-200   margin-top-20">

                                                        <div class="vscroll" style="height:160px;">
                                                            <ul class="list-group list-group-dividered list-group-full margin-bottom-0 font-size-10  ">
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-854
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-587
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-221
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-331
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-112
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane " id="statstab2" role="tabpanel">
                                            <div class="">

                                                <div class="">
                                                    <div class="col-xs-6  ">
                                                        <div class="text-center">
                                                            <div class="margin-top-50 margin-bottom-10">
                                                                <i> <img src="images/icon_stat_dry.png" alt="img" height="50" class=""> </i>
                                                            </div>
                                                            <span class="font-size-30 white">07</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 ">
                                                        <div class="padding-0 bg-blue-grey-200   margin-top-20">

                                                            <div class="vscroll" style="height:160px;">
                                                                <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10 ">
                                                                    <li class="list-group-item padding-10 ">
                                                                        CW-485
                                                                    </li>
                                                                    <li class="list-group-item padding-10 ">
                                                                        CW-569
                                                                    </li>
                                                                    <li class="list-group-item padding-10 ">
                                                                        CW-123
                                                                    </li>
                                                                    <li class="list-group-item padding-10 ">
                                                                        CW-555
                                                                    </li>
                                                                    <li class="list-group-item padding-10 ">
                                                                        CW-884
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="statstab3" role="tabpanel">
                                            <div class="">
                                                <div class="col-xs-6  ">
                                                    <div class="text-center">
                                                        <div class="margin-top-50 margin-bottom-10">
                                                            <i> <img src="images/icon_stat_pregnant.png" alt="img" height="50" class=""> </i>
                                                        </div>
                                                        <span class="font-size-30 white">13</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  ">
                                                    <div class="padding-0 bg-blue-grey-200   margin-top-20">

                                                        <div class="vscroll" style="height:160px;">
                                                            <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-778
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-529
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-475
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-895
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-111
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="statstab4" role="tabpanel">
                                            <div class="">
                                                <div class="col-xs-6  ">
                                                    <div class="text-center">
                                                        <div class="margin-top-50 margin-bottom-10">
                                                            <i> <img src="images/icon_stat_estrus.png" alt="img" height="50" class=""> </i>
                                                        </div>
                                                        <span class="font-size-30 white">24</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  ">
                                                    <div class="padding-0 bg-blue-grey-200  margin-top-20">

                                                        <div class="vscroll" style="height:160px;">
                                                            <ul class="list-group list-group-dividered list-group-full margin-bottom-0 font-size-10 ">
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-778
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-529
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-475
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-895
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-111
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="statstab5" role="tabpanel">
                                            <div class="">
                                                <div class="col-xs-6  ">
                                                    <div class="text-center">
                                                        <div class="margin-top-50 margin-bottom-10">
                                                            <i> <img src="images/icon_stat_temperature.png" alt="img" height="50" class=""> </i>
                                                        </div>
                                                        <span class="font-size-30 white">17</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  ">
                                                    <div class="padding-0 bg-blue-grey-200  margin-top-20">

                                                        <div class="vscroll" style="height:160px;">
                                                            <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-778
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-529
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-475
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-895
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-111
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane" id="statstab6" role="tabpanel">
                                            <div class="">
                                                <div class="col-xs-6  ">
                                                    <div class="text-center">
                                                        <div class="margin-top-50 margin-bottom-10">
                                                            <i> <img src="images/icon_stat_ruminating.png" alt="img" height="50" class=""> </i>
                                                        </div>
                                                        <span class="font-size-30 white">19</span>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6  ">
                                                    <div class="padding-0 bg-blue-grey-200  margin-top-20">

                                                        <div class="vscroll" style="height:160px;">
                                                            <ul class="list-group list-group-dividered list-group-full margin-bottom-0  font-size-10">
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-778
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-529
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-475
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-895
                                                                </li>
                                                                <li class="list-group-item padding-10 ">
                                                                    CW-111
                                                                </li>
                                                            </ul>
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
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-md-6">

                        <div class="widget-content padding-10 bg-blue-700 white card height-150 text-center relative">
                                <div class="padding-15 bg-blue-700 " style="height:150px;">
                                    <div class="text-center padding-top-0">
                                        <div class="" >
                                            <div class="font-size-14" style="margin-top: -13px;">Max Milk Yield:<span class="font-size-16"id="cow1"> CW-34</span></div>
                                            <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                <select type="button"
                                                    class="btn bg-blue-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-cowchange">
                                                    <span class="caret"></span>

                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                            <div class="counter-number font-size-20" style="margin-top: -9px;"><img src="images/icon_milk.png" alt="img" height="50"><span id="cow2">1800 ltr</span>
                                             </div>

                                            
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="cow3">13%</span>
                                                <span class="" id="cow4">more than last week</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-cowchange").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('week')) {
                                                        $("#cow1").text(' CW-72')
                                                        $("#cow2").text('1800 ltr')
                                                        $("#cow3").text('11%')
                                                        $("#cow4").text('more than last week')
                                                    }
                                                    else {
                                                        $("#cow1").text(' CW-34')
                                                        $("#cow2").text('3200 ltr')
                                                        $("#cow3").text('17%')
                                                        $("#cow4").text('more than last month')
                                                    }
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                             </div>     
                          </div>
                    <div class="col-md-6">

                 <div class="widget shadow">
                         <div class="widget-content padding-10 bg-blue-600 white card height-150 text-center relative">
                                <div class="padding-15 bg-blue-600 " style="height:150px;">
                                    <div class="text-center padding-top-0">
                                        <div class="" >
                                            <div class="font-size-16" style="margin-top: -13px;"> Feed Consumed</div>
                                            <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                <select type="button"
                                                    class="btn bg-blue-700 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-cowchange1">
                                                   
                                                    <span class="caret"></span>

                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                            <div class="counter-number font-size-20" style="margin-top: -10px;"><img src="images/icon_feed.png" alt="img" height="50"><span id="cow11"> 180 kg</span>
                                            </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="cow12">11%</span>
                                                <span class="" id="cow13">more than last week</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-cowchange1").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('week')) {
                                                        $("#cow11").text(' 180 kg')
                                                        $("#cow12").text('11%')
                                                        $("#cow13").text('more than last week')
                                                    }
                                                    else {
                                                        $("#cow11").text(' 550 kg')
                                                        $("#cow12").text('17%')
                                                        $("#cow13").text('more than last month')
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
                    <div class="row no-space">

                        <div class="col-lg-4">
                            <div class="widget shadow  margin-bottom-0">
                                <div class="widget-content padding-10 bg-green-800 white card height-90">
                                    <div class="counter counter-md white ">
                                        <div class="counter-label ">Total Cows</div>
                                        <div class="">
                                            <span class="counter-icon margin-right-5 ">
                                                <i> <img src="images/icon_cow.png" alt="img" height="40" /> </i>
                                            </span>
                                            <span class="counter-number font-size-20">155</span>
                                            <span class="counter-number-related font-size-12"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row no-space  margin-bottom-30 pointer">
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-700 white card vertical-align height-90  shadow">
                                        <div class="vertical-align-middle">
                                            <div>Lactation</div>
                                            <span class="counter-number font-size-20">25</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-600 white card vertical-align height-90 shadow">
                                        <div class="vertical-align-middle">
                                            <div>Heifers</div>
                                            <span class="counter-number font-size-20">30</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-500 white card vertical-align height-90 shadow ">
                                        <div class="vertical-align-middle">
                                            <div>Calves</div>
                                            <span class="counter-number font-size-20">100</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>

                
           <!--           <div class="widget  margin-bottom-30 shadow">
                        
                        
                        
                        

                      <div class="widget-content   bg-red-700 white card " style="height:270px;">

                            <div class="counter counter-md counter-inverse text-center padding-top-0">
                                <div class="bg-red-800 padding-15 margin-bottom-10 height-210" >
                                    <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase">Milk Yield </b> <br />  <div class="label bg-red-700">This Month</div></div>


                                    <span class="font-size-30">
                                        1,200 <span class="font-size-12">ltr</span>
                                    </span>
                                    <div class="margin-top-0">
                                        <i> <img src="images/icon_milk.png" alt="img" height="70" class=""> </i>
                                    </div>
                                </div>
                                <div class="font-size-10">Expected </div>
                                <div class="font-size-18">1,600 </div>

                            </div>





                        </div>
-->
                           <div class="col-lg-2">
                        <div class="widget  margin-bottom-30 shadow">
                                <div class="widget-content   bg-red-600 white card " style="height:270px;">
                                    <div class="counter counter-md counter-inverse text-center padding-top-0">
                                        <div class="bg-red-700 padding-15 margin-bottom-10 height-210">


                                            <div class=" font-size-14 margin-bottom-5 text-uppercase "><b>Milk Yield</b> </div>

                                            <div class="dropdown margin-bottom-20 " style="padding-top: 5px;">
                                                <select type="button"
                                                    class="btn bg-red-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-cmy">
                                                    <span class="caret"></span>

                                                    <option>This Week</option>
                                                    <option>This Month</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20"  id="mrq-m1">
                                                1,200 ltr
                                          
                                                </div>

                                            <div class="margin-top-0">
                                        <i> <img src="images/icon_milk.png" alt="img" height="70" class=""> </i>
                                    </div>
                                           
                                        </div>
                                           
                                   
                             <div><div class="font-size-10" >Expected </div>
                                                <div class="font-size-18" id="mrq-m2">1,600 ltr</div>
                                                 </div> 
                                  
                                        <script>
                                            $("#mrq-dd-cmy").on('change', function () {
                                                debugger
                                                if (this.value.trim().toLowerCase().includes('week')) {
                                                    $("#mrq-m1").text('1,200 ltr')
                                                    $("#mrq-m2").text('1,600 ltr')
                                                    
                                                }
                                                else {
                                                     $("#mrq-m1").text('5,700 ltr')
                                                    $("#mrq-m2").text('5,800 ltr')
                                                }
                                            })

                                        </script>
                                    </div>
                                </div>
                            </div>
                        
                        
                        
                        
                    
                </div>
            </div>


     
            <div>
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel panel-default  card light">
                            <div class="panel-heading margin-bottom-0">
                                <h3 class="panel-title font-weight-600">Alerts Statistics</h3>
                                <div class="panel-actions">
<!--                                    <a class=""> View All</a>-->
                                    <a class="panel-action icon ion-loop" ></a>
                                </div>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="margin-bottom-15 clearfix text-center" style="padding-top:10px;">
                                <div class="form-group1">

                                    <div class="inline-block">
                                       <select class="form-control input-sm" id="mrq-dd-w2">
                                            <option>This Week</option>
                                            <option>This Month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                                                        ['Estrus ', 25,],
                                                        ['Lameness ', 75],
                                                        ['Rumination ', 75],
                                                        [' Temperature', 25,],
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

                                    $("#mrq-dd-w2").on('change', function () {

                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            simple_line_Class.load({
                                                unload: true,
                                                columns:  [
                                                        ['Estrus ', 25,],
                                                        ['Lameness ', 75],
                                                        ['Rumination ', 75],
                                                        [' Temperature', 25,],
                                                    ],
                                            });
                                        }
                                        else {
                                            simple_line_Class.load({
                                                unload: true,
                                                columns:  [
                                                        ['Estrus ', 45,],
                                                        ['Lameness ', 75],
                                                        ['Rumination ', 75],
                                                        [' Temperature', 25,],
                                                    ],
                                            });
                                        }
                                    });
                                </script>
                            </div>
                                    </div>
                                    <div class="col-lg-8">



                                        <div class="padding-10">
                                            <div class="vscroll padding-right-10" style="height:300px;">
                                                <table class="table  nowrap" id="datatable11">
                                                    <tbody>
                                                        <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media ">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_estrus_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-danger label-outline"> Estrus   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>

                                                            <td width="150" class="text-right"> <span class="small">10:30pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_lameness_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-warning label-outline"> Lameness   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_temperature_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-success label-outline"> Tmperature   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_ruminating_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-info label-outline"> Ruminating   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>

                                                        <tr class="alert alert-alt alert-danger alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media ">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_estrus_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-danger label-outline"> Estrus   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td width="150" class="text-right"> <span class="small">10:30pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_lameness_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-warning label-outline"> Lameness   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">10:00pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_temperature_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-success label-outline"> Tmperature   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">11:37pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                                                            <td width="100">
                                                                <div class="media">
                                                                    <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon_ruminating_alert.png" alt="img" height="20" width="20" class="inline" /></a></div>
                                                                    <div class="media-body margin-0"><span class="label label-info label-outline"> Ruminating   </span> </div>
                                                                </div>
                                                            </td>
                                                            <td width="80">
                                                                <a href="">CW-255</a>
                                                            </td>
                                                            <td> <div class="small"> Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry. </div></td>
                                                            <td class="text-right"> <span class="small">12:30pm</span> / <span class="small">Today</span> </td>
                                                            <td width="80" class="text-right">
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-toggle="tooltip" data-original-title="Schedule"><i class="icon ion-calendar"></i></button>
                                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs inline" data-dismiss="alert" data-toggle="tooltip" data-original-title="Dismiss"><i class="icon ion-android-close"></i></button>
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





            <div class="row">

                <div class="col-lg-6  ">
                    <div class="panel panel-default nav-tabs-horizontal card light">
                        <div class="panel-heading font-weight-600">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Milk Yield Statistics</a></li>
                                <li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Feed  Statistics</a></li>
                                <!--<li class=""><a data-toggle="tab" href="#HerdIndex" role="tab">Herd Index </a></li>-->

                            </ul>
                            <div class="panel-actions">

                                <a class="panel-action icon ion-loop"></a>
                            </div>
                        </div>

                        <div class="panel-body ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                                    <div class="margin-bottom-15 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                       <select class="form-control input-sm" id="ww1">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>




                                    <div class="chartbox">
                                        <div id="chart-home1"></div>
                                        <script>
                                            var simple_line_chart;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart= c3.generate({
                                                        bindto: '#chart-home1',
                                                        size: {
                                                            height: 275,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Milk (Liters)', 30, 160, 100, 100, 150, 250, 31],
                                                            ],
                                                            type: 'line',
                                                        },
                                                        color: {
                                                            pattern: ['#2b9646']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Months',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'Liters ',
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
                                $("#ww1").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns:[
                                                                ['Milk (Liters)', 30, 160, 100, 100, 150, 250, 31],
                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart.load({
                                            unload: true,
                                            columns:[
                                                                ['Milk (Liters)', 130, 260, 200, 300, 250, 350, 131],
                                                            ],
                                        });
                                    }
                                });
                            </script>
                                    </div>
                                </div>
                                <div class="tab-pane" id="FeedStatistics" role="tabpanel">

                                     <div class="margin-bottom-15 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                       <select class="form-control input-sm" id="mrq-dd-ww2">
                                            <option>This Month</option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                    <div class="chartbox">

                                        <div id="chart-home3"></div>
                                        <script>
                                            var simple_line_chart1;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart1= c3.generate({
                                                        bindto: '#chart-home3',
                                                        size: {
                                                            height: 240,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                 ['Title 1', 30, 160, 100, 100, 150, 250, 31],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#3583ca']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Months',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July']
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
                                $("#mrq-dd-ww2").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                         simple_line_chart1.load({
                                            unload: true,
                                            columns:[
                                                                 ['Title 1', 30, 160, 100, 100, 150, 250, 31],
                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart1.load({
                                            unload: true,
                                            columns:[
                                                                 ['Title 2', 130, 260, 200, 200, 250, 300, 131],
                                                            ],
                                        });
                                    }
                                });
                            </script>



                                    </div>
                                </div>

                                <div class="tab-pane" id="HerdIndex" role="tabpanel">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="counter counter-md ">

                                                <div class="vertical-align-middle margin-top-30 margin-bottom-40">
                                                    <span class="counter-icon green-800 margin-right-10"><i class="ion-stats-bars"></i></span>
                                                    <span class="counter-number font-size-40 ">9</span>
                                                    <span class="counter-number-related"> / 10</span>
                                                    <div class="font-size-20 margin-top-3 pointer">HR-777</div>
                                                </div>

                                                <table class="table table-striped table-bordered table-condensed  margin-bottom-0 bg-white">

                                                    <tbody>
                                                        <tr>
                                                            <th>No. of Cows</th>
                                                            <td class="text-left">25</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Feed Consumed</th>
                                                            <td class="text-left">32 kg</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Milk Yield</th>
                                                            <td class="text-left">152 Ltr</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 ">
                                            <p class="clearfix font-size-18 margin-bottom-10">
                                                <span class="">Other Herd Index</span>
<!--                                                <span class="pull-right "><a class=""> View All</a></span>-->
                                            </p>
                                            <div class="bg-green-700 padding-10">


                                                <div id="infoscroll" class="white vscroll " style="height:205px;">


                                                    <ul class="list-group margin-bottom-0">
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-123 - Cowbays <span class="badge">9.0</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-85  - Cowmax <span class="badge">8.9</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-33  - Cowbays <span class="badge">8.5</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-120  - Cherd <span class="badge">8.4</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-008  - Cowsmay <span class="badge">8.3</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-99  - Brood <span class="badge">7.9</span>
                                                        </li>
                                                        <li class="list-group-item bg-green-700 pointer">
                                                            HR-585  - Cowbays <span class="badge">7.6</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default  card light">
                                <div class="panel-heading">
                                    <h3 class="panel-title font-weight-600">Activities Statistics</h3>
                                    <div class="panel-actions">

                                        <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                    </div>
                                </div>
                                <div class="panel-body">

                            <div class="margin-bottom-20 clearfix text-center">
                                <div class="form-group1">
                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class4">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                          <script>
                                                $("#mrq-dd-class4").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                         $("#w1").text('120')
                                                         $("#w2").text('60')
                                                         $("#w3").text('60')
                                                         $("#w7").text('20')
                                                         $("#w4").addClass('p20')
                                                         $("#w5").addClass('p50')
                                                         $("#w6").addClass('p75')
                                                    }
                                                    else {
                                                        $("#w1").text('600')
                                                        $("#w2").text('852')
                                                        $("#w3").text('719')
                                                        $("#w7").text('50')
                                                        $("#w4").toggleClass('p40')
                                                        $("#w5").toggleClass('p60')
                                                        $("#w6").toggleClass('p95')
                                                    }
                                                })
                                          </script>
                            
                                 <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Completed</div>

                                    <div class="c100 p20  red" id="w4">
                                        <span class="pointer" id="w1">120</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>
                                    
                                   <div class="text-center margin-top-10"></div>

                                            <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Milking
                                                        <span class="pull-right" id="w7">30</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-orange-600" style="width: 60%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Feeding
                                                        <span class="pull-right" id="w7">40</span>
                                                    </h5>
                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info  bg-orange-600" style="width: 70%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>

                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Breeding
                                                        <span class="pull-right" id="w7">50</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-orange-600" style="width: 11%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                </div>
                                <div class="col-sm-4 padding-horizontal-20">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18">Scheduled</div>

                                    <div class="c100 p50  green " id="w5">
                                        <span class="pointer" id="w2">60</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>


                               <div class="text-center margin-top-10"></div>

                                            <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Milking
                                                        <span class="pull-right">30</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-red-600" style="width: 70%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Feeding
                                                        <span class="pull-right">30</span>
                                                    </h5>
                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info  bg-red-600" style="width: 40%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>

                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Breeding
                                                        <span class="pull-right">50</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-red-600" style="width: 11%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                </div>
                                <div class="col-sm-4 padding-horizontal-20">
                                    <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Pending</div>


                                    <div class="c100 p75  orange" id="w6">
                                        <span class="pointer" id="w3">60</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>
                                    <div class="text-center margin-top-10"></div>
                                    
                                        <div class="text-center margin-top-10"></div>

                                            <ul class="list-unstyled margin-top-10 text-left margin-bottom-0">
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Milking
                                                        <span class="pull-right">20</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-green-600" style="width: 34%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Feeding
                                                        <span class="pull-right">60</span>
                                                    </h5>
                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info  bg-green-600" style="width: 720%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>

                                                    <h5 class="font-size-12 margin-bottom-5">
                                                        Breeding
                                                        <span class="pull-right">20</span>
                                                    </h5>

                                                    <div class="progress progress-xs margin-bottom-10">
                                                        <div class="progress-bar progress-bar-info bg-green-600" style="width: 21%" role="progressbar">

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
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
