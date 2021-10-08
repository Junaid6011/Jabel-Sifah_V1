﻿<!DOCTYPE html>
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
<body class="dashboard">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>



    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Herds</a></li>

            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->


        <div class="page-content  container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">


                        <div class="col-md-4">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-blue-700 white shadow height-90  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon_cow.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">221</span>
                                        </div>
                                        <div class="counter-label text-capitalize font-size-12">Total Cows</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4 ">
                            <div class="widget">
                                <div class="widget-content padding-10   bg-orange-700 white shadow height-90  clearfix">
                                    <div class="pull-left white">
                                        <i> <img src="images/icon-herds.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right">
                                        <div class="counter-number-group white">
                                            <span class="counter-number">07</span>
                                        </div>
                                        <div class="counter-label text-capitalize font-size-12">Total Herds</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="widget">
                                <div class="widget-content padding-10   bg-red-700 white shadow height-90  clearfix">
                                    <div class="pull-left white absolute">
                                        <i> <img src="images/icon_milk.png" alt="img" height="40"> </i>
                                    </div>
                                    <div class="counter counter-md counter text-right pull-right">
                                        <div class="counter-number-group white">
                                            <span class="counter-number font-size-24">HR-202</span>
                                        </div>
                                        <div class="counter-label text-capitalize font-size-12">Highest Milk Yield <span class="panel-action icon ion-information-circled  font-size-10" data-toggle="tooltip" data-original-title="Yesterday"></span> </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row ">


                        <div class="col-lg-12">
                            <div class="row no-space  margin-bottom-30 pointer">
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-700 vertical-align height-70 shadow ">
                                        <div class="vertical-align-middle">
                                            <div>Lactation</div>
                                            <span class="counter-number font-size-20">285</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-600 vertical-align height-70 shadow ">
                                        <div class="vertical-align-middle">
                                            <div>Heifers</div>
                                            <span class="counter-number font-size-20">130</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="counter counter-lg white bg-green-500 vertical-align height-70  shadow">
                                        <div class="vertical-align-middle">
                                            <div>Calves</div>
                                            <span class="counter-number font-size-20">189</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">


                            <div class="panel panel-default card light">
                                <div class="panel-heading">
                                    <div class="panel-actions">

                                        <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                                    </div>
                                    <h3 class="panel-title"> <b> Alerts </b></h3>
                                </div>
                                <div class="panel-body ">

                                    <div class="text-right   margin-bottom-10">
                                        <div class="btn-group btn-group-sm btn-group-xs" data-toggle="buttons">

                                            <label class="btn btn-outline btn-success ">
                                                Today
                                            </label>
                                            <label class="btn btn-outline btn-success active ">
                                                <input type="radio" name="multiples">  This week
                                            </label>
                                            <label class="btn btn-outline btn-success ">
                                                <input type="radio" name="multiples"> This Month
                                            </label>
                                        </div>
                                    </div>




                                    <div class="chartbox">
                                        <div id="chart-alerts1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-alerts1',
                                                        size: {
                                                            height: 213,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'top',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Estrus ', 30, 60, 55, 80, 70, 16, 31],
                                                                ['Lameness ', 14, 50, 10, 77, 50, 44, 23],
                                                                ['Ruminating', 35, 02, 15, 10, 15, 88, 37],
                                                                ['Temperature', 40, 22, 5, 20, 17, 28, 17],
                                                            ],
                                                            type: 'line',
                                                        },
                                                        color: {
                                                            pattern: ['#2b9646', '#ec9940', '#4e97d9', '#36ab7a']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: '05 Oct - 11 Oct ',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'No of Alerts ',
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
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>




                </div>

                <div class="col-lg-6">

                    <div class="mapbox  margin-bottom-30 card light">
                        <span class="icon" style="left:50%; top:20%;"> <img src="images/icon-herds-map.png" alt="img" /> </span>
                        <span class="icon" style="left:60%; top:30%;"> <img src="images/icon-herds-map.png" alt="img" /> </span>

                        <span class="icon" style="left:47%; top:47%;"> <img src="images/icon-herds-map.png" alt="img" /> </span>
                        <span class="icon" style="left:80%; top:47%;"> <img src="images/icon-herds-map.png" alt="img" /> </span>

                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52973.30513779624!2d55.2771398797838!3d25.18678969542997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1539858886335" width="100%"
                                height="545" frameborder="0" style="border:0; " allowfullscreen class="map pull-right"></iframe>

                    </div>



                </div>

            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default card light">
                        <div class="panel-heading">
                            <div class="panel-actions">

                                <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title"> <b> Herd Listing </b></h3>
                        </div>
                        <div class="panel-body ">

                            <div class="table-responsive1 vscroll" style="height:210px;">

                                <table class="table table-hover table-condensed margin-bottom-0">
                                    <thead>
                                        <tr class="">
                                            <th class="nosort">Id</th>
                                            <th class="text-left">Name</th>
                                            <th class="text-center">Cows</th>
                                            <th class="text-center">Milk Yield  <span class="panel-action icon ion-information-circled grey-500 font-size-10" data-toggle="tooltip" data-original-title="Average/Ltr"></span></th>
                                            <th class="nosort text-center">Heifers</th>
                                            <th class="nosort text-center">Calves</th>
                                            <th class="nosort text-center">In Lactation</th>

                                            <th width="80" class="nosort text-right"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="herd.php">HR-202</a></td>
                                            <td class="text-left">Cowtahs </td>
                                            <td class="text-center">25</td>
                                            <td class="text-center"><span class="label label-outline label-success">259 </span></td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">9</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="herd.php">HR-116</a></td>
                                            <td class="text-left">Cowmax </td>
                                            <td class="text-center">55</td>
                                            <td class="text-center"><span class="label label-outline label-success">321 </span></td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="herd.php">HR-177</a></td>
                                            <td class="text-left"> Cherd   </td>
                                            <td class="text-center">51</td>
                                            <td class="text-center"><span class="label label-outline label-success">152 </span></td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">8</td>
                                            <td class="text-center">9</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="">HR-726</a></td>
                                            <td class="text-left"> Cowsmay   </td>
                                            <td class="text-center">77</td>
                                            <td class="text-center"><span class="label label-outline label-success">422 </span></td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><a href="herd.php">HR-202</a></td>
                                            <td class="text-left"> Brood   </td>
                                            <td class="text-center">25</td>
                                            <td class="text-center"><span class="label label-outline label-success">259 </span></td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">2</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Details"><i class="icon ion-arrow-right-c"></i></button>
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









    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>















</body>
</html>
