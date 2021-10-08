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
            <!-- <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Page</a></li>
            </ol>
        </div> -->



            <div class="page-content  container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                            <div class="media-left">
                                <img src="images/icon_warehouse.png" alt="img" style="height:170px;" class="img-bordered ">
                            </div>
                            <div class="media-body">


                                <h2 class="margin-top-0 font-size-20 font-weight-500 margin-bottom-15 text-uppercase">
                                    Warehouse 1
                                    <div class="pull-right">
                                        <a href=" " onclick="window.history.go(-1); return false;" class=" btn btn-sm   btn-default btn-round">
                                            Back
                                        </a>

                                    </div>
                                </h2>
                                <hr class="margin-0 margin-bottom-15" />




                                <div class="row">

                                    <div class="col-sm-6">


                                        <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                            <tbody>
                                                <tr>
                                                    <th> <b> ID</b> </th>
                                                    <td class="text-left text-break">
                                                        VXR34


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> <b>Record Status</b> </th>
                                                    <td class="text-left text-break">
                                                        <span class="label label-success"> Online
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th> <b>Type </b> </th>
                                                    <td class="text-left"> FMCG</td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="table-responsive1">
                                            <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <th> <b> Capacity</b> </th>
                                                        <td class="text-left text-break">
                                                            9887 Yards
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <th> <b>Owner Ship </b> </th>
                                                        <td class="text-left">Clarke Ltd. </td>
                                                    </tr>


                                                    <tr>
                                                        <th> <b>Manager</b> </th>
                                                        <td class="text-left">Sam Bills</td>
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

                <div class="row ">

                    <div class="col-md-6">
                        <div class="row no-space1">
                            <div class="col-md-4">
                                <div class="widget shadow">
                                    <div class="widget-content padding-15 bg-teal-700 height-100 text-center relative">
                                        <div class="white">
                                            <div class="counter-label  clearfix margin-bottom-10">
                                                <span class="font-size-14 ">
                                                    Total Products
                                                </span>

                                            </div>
                                            <div class="">
                                                <b class=" font-size-24"> 4521</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget shadow">
                                    <div class="widget-content padding-15 bg-red-700 height-100 text-center relative">
                                        <div class="white">
                                            <div class="counter-label clearfix margin-bottom-0">
                                                <span class="font-size-14 ">
                                                    Violations
                                                </span>

                                            </div>
                                            <div class="">
                                                <b class=" font-size-20"> 18 </b>
                                            </div>

                                            <div class="label white  bg-red-600 absolute1  left right bottom">
                                                24 hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget shadow">
                                    <div class="widget-content padding-15 bg-orange-700 height-100 text-center relative">
                                        <div class="white">
                                            <div class="counter-label clearfix margin-bottom-0">
                                                <span class="font-size-14 ">
                                                    Delivery Orders
                                                </span>

                                            </div>
                                            <div class="">
                                                <b class=" font-size-20"> 389 </b>
                                            </div>

                                            <div class="label white  bg-orange-600 absolute1  left right bottom">
                                                Pending
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row no-space">
                            <div class="col-lg-12">
                                <div class="no-space  margin-bottom-30   bg-teal-800 shadow card  widget shadow card padding-15">


                                    <div class="">
                                        <div class="slikslider text-center  " id="slikslider-live">
                                            <div>
                                                <div class="white">
                                                    State
                                                    <div class="font-size-14 font-weight-600">Active</div>
                                                </div>
                                            </div>


                                            <div>
                                                <div class="white">
                                                    Temperature
                                                    <div class="font-size-14 font-weight-600"> 25 °C</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="white">
                                                    Humidity
                                                    <div class="font-size-14 font-weight-600">65% </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="white">
                                                    Space Used
                                                    <div class="font-size-14 font-weight-600">78 %</div>
                                                </div>
                                            </div>


                                        </div>
                                        <script>
                                            $('#slikslider-live').slick({
                                                infinite: false,
                                                slidesToShow: 4,
                                                slidesToScroll: 1,
                                                arrows: true,
                                                dots: false,
                                                responsive: [{
                                                        breakpoint: 1160,
                                                        settings: {
                                                            slidesToShow: 5,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 1025,
                                                        settings: {
                                                            slidesToShow: 5,
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






                                    <div class="label white  bg-teal-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                        <div style="position:relative; top:0;">
                                            <img src="images/loader-live.gif" alt="img" height="20" style="position:relative; top:0;">
                                            Online | Updated on: 07:00pm, 16-Sep-19
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-8  ">


                        <div class="panel panel-default  card  light">
                            <div class="panel-heading">
                                <h3 class="panel-title font-weight-600 ">Temperature & Humidity Stats </h3>

                            </div>
                            <div class="panel-body ">


                                <div class="chartbox">
                                    <div id="chart-mmm"></div>
                                    <script>
                                        $(document).ready(function ($) {
                                            (function () {

                                                var chart = c3.generate({
                                                    bindto: '#chart-mmm',
                                                    size: {
                                                        height: 250,
                                                    },
                                                    legend: {
                                                        show: true,
                                                        position: 'bottom',
                                                    },


                                                    data: {
                                                        columns: [
                                                            ['Temperature', -8, 27, 35, -9, 27, 40, 22, 31, 24, 22, 33, 39],
                                                            ['Humidity', 60, 55, 10, 75, 80, 71, 45, 55, 66, 45, 30, 100],
                                                        ],
                                                        axes: {
                                                            Temperature: 'y',
                                                            Humidity: 'y2'
                                                        }
                                                    },
                                                    axis: {

                                                        x: {
                                                            label: {
                                                                text: ' ',
                                                                position: 'outer-center'
                                                            },
                                                            type: 'category',
                                                            categories: ['12:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00']
                                                        },
                                                        y: {
                                                            show: true,
                                                            label: {
                                                                text: 'C',
                                                                position: 'outer-middle'
                                                            },
                                                        },
                                                        y2: {
                                                            show: true,
                                                            label: {
                                                                text: '&',
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
                    <div class="col-lg-4">

                        <div class="panel panel-dark margin-bottom-0 shadow">
                            <div class="panel-heading margin-bottom-0 ">
                                <h3 class="panel-title">Location</h3>
                                <div class="panel-actions">
                                    <span data-toggle="tooltip" data-original-title="Full Screen">
                                        <a class="panel-action icon wb-expand" data-target="#mapfull" data-toggle="modal"></a>
                                    </span>

                                </div>
                            </div>

                            <div class="panel-body padding-0">
                                <div class="mapbox   margin-bottom-0  ">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                        width="100%" height="280" frameborder="0" style="border:0" class="pull-left map"></iframe>

                                    <span class="icon" style="left:20%; top:57%;">
                                        <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                            <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                        </a>
                                    </span>

                                    <div id="popover-content-start2" class="hide">
                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                           <tr>
                                                                                <th> Temperature </th>
                                                                                <td class="">20C </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th> Humidity </th>
                                                                                <td class=""> 60% </td>
                                                                            </tr>
                                            <tr>
                                                <th> Last Updated </th>
                                                <td class="">Updated on: 07:00pm, 16-Sep-19</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>























                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                            <div class="panel-heading font-weight-600 margin-bottom-0">
                                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                    <li class="active"><a data-toggle="tab" href="#History">Products</a></li>
                                </ul>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="History">
                                        <div class="panel panel-default margin-bottom-0 ">
                                            <div class="panel-body padding-15 ">


                                                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">
                                                    <div class="inline-block pull-left margin-right-10">
                                                        <div class="inline-block    ">
                                                            <div class="form-group  margin-bottom-0  ">
                                                                <div class="input-daterange   ">
                                                                    <div class="input-group  input-group-sm">
                                                                        <div class="input-group-addon">
                                                                            <i class="icon ion-calendar"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control date" value="10/24/17">
                                                                    </div>
                                                                    <div class="input-group input-group-sm">
                                                                        <div class="input-group-addon">to</div>
                                                                        <input type="text" class="form-control date" value="10/25/17">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div>
-->
                                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                        <div class="">
                                                            <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="table-responsive">
                                                    <table class="table  margin-bottom-0 table-hover table-condensed table-bordered   " id=" ">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-left">ID</th>

                                                                <th class="text-left"> Name</th>
                                                                <th class="text-left"> Type</th>
                                                                <th class="text-left"> Items </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">2453</td>
                                                                <td class="text-left">Milk Power </td>
                                                                <td class="text-left"> Milk</td>
                                                                <td class="text-left">8500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">19563</td>
                                                                <td class="text-left">Botteled Juice </td>
                                                                <td class="text-left"> Juice</td>
                                                                <td class="text-left">2500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">2453</td>
                                                                <td class="text-left">Milk Power </td>
                                                                <td class="text-left"> Milk</td>
                                                                <td class="text-left">8500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">19563</td>
                                                                <td class="text-left">Botteled Juice </td>
                                                                <td class="text-left"> Juice</td>
                                                                <td class="text-left">2500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">2453</td>
                                                                <td class="text-left">Milk Power </td>
                                                                <td class="text-left"> Milk</td>
                                                                <td class="text-left">8500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">19563</td>
                                                                <td class="text-left">Botteled Juice </td>
                                                                <td class="text-left"> Juice</td>
                                                                <td class="text-left">2500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">2453</td>
                                                                <td class="text-left">Milk Power </td>
                                                                <td class="text-left"> Milk</td>
                                                                <td class="text-left">8500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">19563</td>
                                                                <td class="text-left">Botteled Juice </td>
                                                                <td class="text-left"> Juice</td>
                                                                <td class="text-left">2500</td>
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





            <?php include_once('_maptrail-loc.php'); ?>


            <?php include_once('_footer.php'); ?>
            <script src="../plugins/d3/d3.min.js"></script>
            <script src="../plugins/c3/c3.js"></script>
            <script src="../plugins/js/core.js"></script>
            <script src="js/scripts.js"></script>

















    </body>

</html>