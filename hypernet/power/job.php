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

<body class="dashboard ">


    <?php include_once('_header.php'); ?>
    <?php include_once('_leftmenu.php'); ?>


    <div class="page">
        <!-- <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->

        <div class="page-header page-header-bordered shadow">



            <div class="media">
                <div class="media-left">
                    <img src="images/customer1.png" class="img-bordered padding-15" style="height:70px">
                </div>
                <div class="media-body">


                    <table class="table  margin-bottom-0  no-border table-condensed grey-800"
                        style="line-height: normal;">
                        <tbody>
                            <tr>
                                <th width="80"> <span class="font-size-16">Job:
                                    </span> </th>
                                <td class="text-left text-break">
                                    <span class="font-size-16">
                                        JOB189

                                    </span>

                                </td>
                            </tr>
                            <tr>
                                <th> <span class="font-size-16"> Customer:</span>
                                </th>
                                <td class="text-left text-break">
                                    <a href="" class="font-size-16">
                                        Volvo Private Limited</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="page-header-actions">

                <a href=" " onclick="window.history.go(-1); return false;" class=" btn btn-sm   btn-default btn-round">
                    Back
                </a>

            </div>
        </div>
        <div class="page-content  container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light " style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Summary"> Summary</a></li>
                                <li class=""><a data-toggle="tab" href="#Assets">Assets & Sensors </a></li>

                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>
                                <li class=""><a data-toggle="tab" href="#Violations">Violations </a></li>
                                <li class=""><a data-toggle="tab" href="#Fillups">Fillups </a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#Crews">Crew Listing </a></li> -->

                            </ul>
                        </div>
                        <div class="panel-body padding-10">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Summary">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">

                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-orange-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Distance Travelled
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">200 km</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">
                                                    <div class="widget shadow card ">
                                                        <div class=" padding-10 bg-blue-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fuel Comsumed
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">120 Ltr</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-teal-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Fillups
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">03</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="col-md-3">
                                                    <div class="widget shadow card">
                                                        <div class=" padding-10 bg-green-800  text-center relative ">
                                                            <div class="white">
                                                                <div class="margin-bottom-10   ">
                                                                    <div class="font-size-12 ">
                                                                        Violations
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class=" margin-right-15 inline">
                                                                        <i> <img src="images/icon-distance-travelled.png"
                                                                                alt="img" height="30">
                                                                        </i>
                                                                    </div>
                                                                    <b class="font-size-14"
                                                                        style="position:relative; top:5px;">04</b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="c">







                                                <div class="margin-top-0 margin-bottom-20 padding-20 bg-blue-00 shadow1 card1"
                                                    style="border: 1px solid #eee; background-color: #f9f9f9;">
                                                    <div class="row">

                                                        <div class="col-md-3">

                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        25-Jan-2019,
                                                                        08:21am
                                                                    </div>
                                                                    <div class="font-size-12   "> Start Time/Date</div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-datetime.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        26-Jan-2019,
                                                                        12:28am
                                                                    </div>
                                                                    <div class="font-size-12   "> End Time/Date</div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-truck-photo.png"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        FF152
                                                                    </div>
                                                                    <div class="font-size-12  "> Assigned Fleet</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/user-img2.jpg"
                                                                            class="img-bordered" style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-16  ">
                                                                        John Smith
                                                                    </div>
                                                                    <div class="font-size-12   "> Assigned to</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>


                                                <hr />
                                                <div class="row">


                                                    <div class="col-lg-4">




                                                        <div class="font-size-141">


                                                            <h4>Type</h4>

                                                            <p>Collection
                                                            </p>
                                                            <h4>Description</h4>
                                                            <p>Reference sem Ipsum, giving information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well as a random Lipsum
                                                                generator.
                                                            </p>

                                                            <p>Reference sem Ipsum, giving information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well as a random Lipsum
                                                                generator.
                                                            </p>

                                                            <p>Reference sem Ipsum, giving information on its originite
                                                                about Lorem Ipsum, giving
                                                                information on its origins, as well as a random Lipsum
                                                                generator.
                                                            </p>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4">

                                                        <div class="row margin-bottom-30">
                                                            <div class="col-sm-4 ">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Idle
                                                                    Time
                                                                </div>
                                                                <div class="c100 p30 small  orange ">
                                                                    <span class="pointer">1h 3m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Moving
                                                                    Time
                                                                </div>

                                                                <div class="c100 p20 small  blue ">
                                                                    <span class="pointer">7h 30m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div
                                                                    class="text-center margin-top-0 margin-bottom-5 font-size-14 ">
                                                                    Stop
                                                                    Time
                                                                </div>

                                                                <div class="c100 p20 small  green ">
                                                                    <span class="pointer">1h 30m</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12  ">
                                                                <div
                                                                    class="text-center  margin-bottom-10 font-size-16 ">
                                                                    Overall Completion Rate</div>
                                                                <div class="c100 p20 small1  red ">
                                                                    <span class="pointer">70%</span>
                                                                    <div class="slice">
                                                                        <div class="bar"></div>
                                                                        <div class="fill"></div>
                                                                    </div>
                                                                </div>

                                                            </div>



                                                        </div>



                                                    </div>

                                                    <div class="col-lg-4">

                                                        <h4 class="text-center">Speed Statistics</h4>

                                                        <div class="chartbox">
                                                            <div id="chart-hours"></div>
                                                            <script>
                                                                $(document).ready(function ($) {
                                                                    (function () {
                                                                        var simple_line_chart = c3.generate({
                                                                            bindto: '#chart-hours',
                                                                            size: {
                                                                                height: 260,
                                                                            },
                                                                            legend: {
                                                                                show: true,
                                                                                position: 'bottom',
                                                                            },
                                                                            data: {

                                                                                columns: [
                                                                                    ['Max-Speed', 120, 140, 150, 120, 80, 90],
                                                                                    ['Min-Speed', 80, 100, 80, 60, 80, 60],

                                                                                ],
                                                                                types: {
                                                                                    data3: 'line',
                                                                                    data4: 'line',
                                                                                },

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
                                                                                    categories: ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00']
                                                                                },
                                                                                y: {
                                                                                    label: {

                                                                                        text: 'Speed [km/h] ',
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
                                                <hr />
												  <div class="row">


                    <div class="col-lg-6">
                      <div class="shadow">
                          <div class="widget-content  bg-blue-700  white relative  margin-bottom-30 padding-0 " style="overflow:hidden;">


                              <div class="padding-left-30 padding-right-30 padding-top-30">
                                  <div class="row x">
                                      <div class="col-xs-6">
                                          <div>Total Cost of Trip</div>
                                          <div class="font-size-30 text-nowrap"> 8000 $</div>
                                          <div class="font-size-10"> To : 25 Oct 2018 [8:00]</br>  From :25 Oct [9:00 pm]</div>

                                      </div>
                                      <div class="col-xs-6 text-right">
                                          <div>Total Revenue of Trip</div>
                                          <div class="font-size-26 text-nowrap"> 5000 $</div>
                                          <div class="font-size-10"><i class="ion-arrow-graph-up-right"></i> 10% higher than estimated</div>

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
                                                      height: 130,
                                                  },
                                                  legend: {
                                                      show: false,
                                                      position: 'bottom',
                                                  },
                                                  data: {
                                                      columns: [
                                                          ['Distance (Km)', 130, 140, 170, 180, 180, 180, 150, 160, 100, 100, 150, 250, 31, 250, 31, 160, 100, 100, 150, 250, 31],
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
					 
					<div class="col-lg-6">

                      <div class="panel panel-default nav-tabs-horizontal padding-0">
                          <div class="panel-heading font-weight-600">
                            

                                <h3 class="panel-title "> <b>Trip Details </b></h3>

                          </div>

                          <div class="panel-body padding-0">
                              <div class="tab-content">
                                  <div class="tab-pane active" id="jobinfo" role="tabpanel">
                                      <div class="vscroll padding-right-10" style="height:200px;">


                                          <div class="bg-green-00 padding-0">
                                              <div class="table-responsive vscroll   " style="height:auto;">
                                                  <table class="table  table-condensed  no-border  margin-bottom-0">
                                                      <tbody>
                                                        <tr>
                                                            <th width=""> <b> Vehicle ID</b>  </th>
                                                            <td class="text-left">
                                                                LZR 8990

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width=""> <b> Vehicle Type</b>  </th>
                                                            <td class="text-left">
                                                                Truck

                                                            </td>
                                                        </tr>

                                                          <tr>


                                                              <th width="150">
                                                                  <b>Start Date Time</b>
                                                              </th>
                                                              <td class="text-left">
                                                                  25 Oct 2018 - 08:00am


                                                              </td>

                                                          </tr>

                                                          <tr>


                                                              <th width="150">
                                                                  <b>End Date Time</b>
                                                              </th>
                                                              <td class="text-left">
                                                                  25 Oct 2018 - 06:00pm


                                                              </td>


                                                          </tr>
                                                          <tr>
                                                              <th width=""> <b> Distance Travelled</b>  </th>
                                                              <td class="text-left">
                                                                  20.2 Km

                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th width=""> <b>Fuel Consumed</b>  </th>
                                                              <td class="text-left">
                                                                 78 Ltr

                                                              </td>
                                                          </tr>
                                                          

                                                          <tr>
                                                              <th width=""> <b> Description </b>  </th>
                                                              <td class="text-left">
                                                                  Trip completed quite well.</span>

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


                                                    <div class="col-lg-12">

                                                        <div class="mapbox   margin-bottom-0  ">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                                width="100%" height="300" frameborder="0"
                                                                style="border:0" class="pull-left map"></iframe>


                                                        </div>


                                                    </div>



                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4> Notifications & Logs
                                                        </h4>
                                                        <div class="vscroll bg-white" style="max-height:280px;">
                                                            <table
                                                                class="table table-striped table-condensed  table-bordered   margin-bottom-0">

                                                                <tbody>
                                                                    <tr>
                                                                        <td width="80">
                                                                            Delivery
                                                                        </td>


                                                                        <td>
                                                                            Feb 22,2018 10:07:08 pm
                                                                        </td>

                                                                        <td>
                                                                            The standard chunk of Lorem Ipsum
                                                                            used since
                                                                            the 1500s is reproduced below for
                                                                            those
                                                                            interested
                                                                        </td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td width="80">
                                                                           Delivery
                                                                        </td>


                                                                        <td>
                                                                            Dec 12,2018 12:23:08 pm
                                                                        </td>

                                                                        <td>
                                                                            Volume Violation
                                                                        </td>


                                                                    </tr>

                                                                    <tr>
                                                                        <td width="80">
                                                                           Delivery
                                                                        </td>


                                                                        <td>
                                                                            Jan 08,2018 07:07:08 pm
                                                                        </td>

                                                                        <td>
                                                                            Fuel fill up form Blue Road, Malburg
                                                                            Filling Statation
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


                                <div class="tab-pane" id="Assets">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h4>Sensors</h4>
                                                    <table class="table    table-bordered margin-bottom-0 ">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left" width="200">Type</th>
                                                                <th class="text-left">Conunt </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-location.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Location </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10 ">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-temperature.png"
                                                                        alt="..." width="20" class="margin-right-10">
                                                                    <b> Temperature </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-diplevel.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Fuel Level </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Disabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b>Wind Pressure </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-density.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Fuel Density </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td width="">
                                                                    <img src="images/icon-sensor-pressure.png" alt="..."
                                                                        width="20" class="margin-right-10">
                                                                    <b> Weight </b>
                                                                </td>
                                                                <td class=""><span
                                                                        class="label label-warning  margin-right-10 font-size-10">
                                                                        <i class="ion-checkmark"></i> </span>
                                                                    Enabled
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="Maintenances">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                        <div class="margin-bottom-20 p clearfix"
                                                            style="border-bottom: 1px solid #eee">
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <div class="inline-block    ">
                                                                    <div class="form-group  margin-bottom-0  ">
                                                                        <div class="input-daterange   ">
                                                                            <div class="input-group  input-group-sm">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon ion-calendar"></i>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Name</th>
                                                        <th class="text-left">Types </th>
                                                        <th class="text-left">Status </th>


                                                        <th class="text-left">Time/Date</th>
                                                        <th class="text-left">Competed Time/Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">

                                                        <td>Engine</td>
                                                        <td>
                                                            Routine
                                                        </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Electrical</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-info "> Scheduled</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>-</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>Fuel System</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>HVAC </td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-warning "> Inprogress</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Steering and Control</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Violations">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                        <div class="margin-bottom-20 p clearfix"
                                                            style="border-bottom: 1px solid #eee">
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <div class="inline-block    ">
                                                                    <div class="form-group  margin-bottom-0  ">
                                                                        <div class="input-daterange   ">
                                                                            <div class="input-group  input-group-sm">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon ion-calendar"></i>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="">Type</th>
                                                        <th class="text-left">Threshold</th>
                                                        <th class="text-left">Value</th>
                                                        <th class="text-left">Time/Date</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td width="150">
                                                            Fuel
                                                        </td>

                                                        <td> 55.000 </td>
                                                        <td>78.268</td>
                                                        <td> 09:32 AM, 22 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Speed

                                                        </td>


                                                        <td> 90.000 (knot) </td>
                                                        <td> 102.12 (knot) </td>
                                                        <td> 05:53 AM, 07 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Route
                                                        </td>


                                                        <td> 11 </td>
                                                        <td> 34 </td>
                                                        <td> 07:29 AM, 19 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Temperature
                                                        </td>


                                                        <td> 36 °C </td>
                                                        <td> 43 °C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Humidity
                                                        </td>

                                                        <td> 36 °C </td>
                                                        <td> 43 °C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane" id="Fillups">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                        <div class="margin-bottom-20 p clearfix"
                                                            style="border-bottom: 1px solid #eee">
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <div class="inline-block    ">
                                                                    <div class="form-group  margin-bottom-0  ">
                                                                        <div class="input-daterange   ">
                                                                            <div class="input-group  input-group-sm">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon ion-calendar"></i>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Time/Date </th>

                                                        <th class="text-left">Fuel</th>
                                                        <th class="text-left">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>25-Jan-2019, 08:00am</td>


                                                        <td>25 L</td>
                                                        <td class="text-left">Charlist Road</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>26-Jan-2019, 09:00am</td>


                                                        <td>21 L</td>
                                                        <td class="text-left">Park Lane Road</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>28-Jan-2019, 10:00am</td>



                                                        <td>28 L</td>
                                                        <td class="text-left">Down Town Road</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Crews">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                            <div class="">

                                                <div class="sidebox ">

                                                    <div class="page-aside left-filters margin-top-15">
                                                        <div class="page-aside-switch">
                                                            <i class="icon wb-chevron-left"></i>
                                                            <i class="icon wb-chevron-right"></i>
                                                        </div>
                                                        <div class="page-aside-inner">
                                                            <section class="page-aside-section">
                                                                <div class=" padding-left-20 padding-right-20">


                                                                    <div class="panel-group left-filters"
                                                                        id="AccordionFilters1">

                                                                        <div class="panel">
                                                                            <div class="panel-heading" role="tab">
                                                                                <a class="panel-title"
                                                                                    data-toggle="collapse"
                                                                                    href="#Status"
                                                                                    data-parent="#AccordionFilters">
                                                                                    Status
                                                                                </a>
                                                                            </div>
                                                                            <div class="panel-collapse collapse in"
                                                                                id="Status" role="tabpanel">
                                                                                <div class="panel-body padding-0">
                                                                                    <ul
                                                                                        class="list-group list-group-bordered ">
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">75</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Online1"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Online1">Online</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">11</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Online2"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Online2">Offline</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">10</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Leave"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Leave">Idle</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>




                                                                        <div class="panel">
                                                                            <div class="panel-heading" role="tab">
                                                                                <a class="panel-title"
                                                                                    data-toggle="collapse" href="#Types"
                                                                                    data-parent="#AccordionFilters">
                                                                                    Types
                                                                                </a>
                                                                            </div>
                                                                            <div class="panel-collapse collapse in"
                                                                                id="Types" role="tabpanel">
                                                                                <div class="panel-body padding-0">
                                                                                    <ul
                                                                                        class="list-group list-group-bordered ">
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">100</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Hook"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Hook">Technical
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">50</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Compactor"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Compactor">Service</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">100</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Chain"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Chain">Operational</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="panel" style="display: none;">
                                                                            <div class="panel-heading" role="tab">
                                                                                <a class="panel-title collapsed"
                                                                                    data-toggle="collapse"
                                                                                    href="#Pickup"
                                                                                    data-parent="#AccordionFilters">
                                                                                    Pickup
                                                                                </a>
                                                                            </div>
                                                                            <div class="panel-collapse collapse"
                                                                                id="Pickup" role="tabpanel">
                                                                                <div class="panel-body padding-0">
                                                                                    <ul
                                                                                        class="list-group list-group-bordered ">
                                                                                        <li class="list-group-item">
                                                                                            <span
                                                                                                class="badge badge-default">22</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Primary"
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Primary">Primary
                                                                                                        Pickup</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li
                                                                                            class="list-group-item list-group-item blue-grey-500">
                                                                                            <span
                                                                                                class="badge badge-default">14</span>
                                                                                            <div class="inline-block ">
                                                                                                <div
                                                                                                    class="checkbox-custom checkbox-info margin-0 ">
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        id="Secondry "
                                                                                                        name="">
                                                                                                    <label
                                                                                                        for="Secondry ">Secondry
                                                                                                        Pickup</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>











                                                                </div>
                                                            </section>

                                                        </div>
                                                    </div>
                                                    <div class="page-main">


                                                        <div class="margin-bottom-0 clearfix">
                                                            <div
                                                                class="inline-block pull-left  margin-bottom-15 margin-right-10">
                                                                <input type="text" class="form-control input-sm"
                                                                    placeholder="Search">
                                                            </div>
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-15 margin-right-10">
                                                                <select class="form-control input-sm">
                                                                    <option>Sort by</option>
                                                                    <option>Max Rating</option>
                                                                    <option>Min Rating</option>
                                                                    <option>Status: Online</option>
                                                                    <option>Max Voilations</option>
                                                                    <option>Min Voilations</option>
                                                                </select>
                                                            </div>
                                                            <div
                                                                class="inline-block  pull-left  margin-bottom-15 margin-right-10">
                                                                <div class="form-group  margin-bottom-0  ">
                                                                    <div class="input-daterange   ">
                                                                        <div class="input-group  input-group-sm">
                                                                            <div class="input-group-addon">
                                                                                <i class="icon ion-calendar"></i>
                                                                            </div>
                                                                            <input type="text" class="form-control date"
                                                                                value="10/24/17">
                                                                        </div>
                                                                        <div class="input-group input-group-sm">
                                                                            <div class="input-group-addon">to</div>
                                                                            <input type="text" class="form-control date"
                                                                                value="10/25/17">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-15 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="vscroll padding-right-0"
                                                                    style="height:auto;">
                                                                    <table
                                                                        class="table  table-bordered table-condensed1 table-striped1 margin-bottom-0">
                                                                        <thead>
                                                                            <tr class="">
                                                                                <th class="text-left">Name</th>
                                                                                <th class="text-left">Status</th>
                                                                                <th class="text-left">Current State
                                                                                </th>
                                                                                <th class="text-left">Rating</th>
                                                                                <th class="text-left">Violations
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img2.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Joe
                                                                                                Denly
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">02</td>

                                                                            </tr>

                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Ivar
                                                                                                Banega
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Operational</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">03</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img2.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Philippe
                                                                                                Coutinho
                                                                                            </a>
                                                                                            <br>
                                                                                            <i class="small">Service</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            3.5</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">06</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Luis
                                                                                                Suarez
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-danger ">
                                                                                        Offline</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="red-700 inline-block">
                                                                                        Idle </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">07</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Aurthr
                                                                                                Vidal
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Operational</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-wgreyarning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-grey btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">05</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">John
                                                                                                Dynamo
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            2 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">07</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left">
                                                                                    <div class="media"
                                                                                        style="max-width: 200px;">
                                                                                        <div
                                                                                            class="media-left padding-right-10">
                                                                                            <img src="images/user-img3.jpg"
                                                                                                class="img-bordered"
                                                                                                style="height:36px">
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <a href="employee.php"
                                                                                                class="font-weight-600">Neymar
                                                                                                Jr.
                                                                                            </a>
                                                                                            <br>
                                                                                            <i
                                                                                                class="small">Technical</i>
                                                                                        </div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="text-left">
                                                                                    <div class="label label-success ">
                                                                                        Online</div>
                                                                                </td>
                                                                                <td class="text-left"><i
                                                                                        class="green-700 inline-block">
                                                                                        On Field </i> </td>
                                                                                <td class="text-left">
                                                                                    <div
                                                                                        class="margin-bottom-0  stars small">
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-warning btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>
                                                                                        <button type="button"
                                                                                            class="btn btn-default btn-grey btn-xs">
                                                                                            <span
                                                                                                class="glyphicon glyphicon-star"></span>
                                                                                        </button>

                                                                                        <span class="margin-left-10">
                                                                                            4 </span>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="text-left">04</td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                                <nav>
                                                                    <ul class="pagination pagination-sm ">
                                                                        <li class="pagination-prev disabled"><a
                                                                                href="javascript:void(0)"><span
                                                                                    class="icon ion-android-arrow-back"></span></a>
                                                                        </li>
                                                                        <li class="pagination-items active"
                                                                            data-value="1">
                                                                            <a href="javascript:void(0)">1</a></li>
                                                                        <li class="pagination-items" data-value="2">
                                                                            <a href="javascript:void(0)">2</a></li>
                                                                        <li class="pagination-items" data-value="3">
                                                                            <a href="javascript:void(0)">3</a></li>
                                                                        <li class="pagination-items" data-value="4">
                                                                            <a href="javascript:void(0)">4</a></li>
                                                                        <li class="pagination-items" data-value="5">
                                                                            <a href="javascript:void(0)">5</a></li>
                                                                        <li class="pagination-next"><a
                                                                                href="javascript:void(0)"><span
                                                                                    class="icon ion-android-arrow-forward"></span></a>
                                                                        </li>
                                                                    </ul>
                                                                </nav>

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
    </div>

    <?php include_once('_maptrail.php'); ?>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>