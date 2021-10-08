
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
            <div class="row ">
                <div class="col-md-4">
                    <div class="widget shadow card">
                        <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                            <div class="white">
                                <div class="margin-bottom-10   ">
                                    <div class="font-size-14 ">
                                        Total Maintenances
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" margin-right-15 inline">
                                        <i> <img src="images/icon-maintenances-total.png" alt="img" height="40"> </i>
                                    </div>
                                    <b class="font-size-24" style="position:relative; top:5px;">99</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div class=" padding-top-0 pa bg-red-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 "> Over Due </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">41</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div class=" padding-top-0 pa bg-teal-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Due Soon </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">25</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-top-0 pa bg-green-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Pending </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">07</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-top-0 pa bg-brown-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Inprogress </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">13</b>
                            </div>
                        </div>
                    </div>
                </div>


            </div>





            <div class="row">

                <div class="col-lg-12  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Statistics</h3>

                        </div>
                        <div class="panel-body ">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-class1">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart = c3.generate({
                                                        bindto: '#chart-hours',
                                                        size: {
                                                            height: 260,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Numbers', 152, 50, 95, 15,],
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
                                                                categories: ['In Workshop', 'Active', 'Inactive', 'Waiting For Parts']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: ' ',
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

                                        $("#mrq-dd-class1").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart.load({
                                                    unload: true,
                                                    columns:[
                                                                ['Numbers', 152, 50, 95, 15,],
                                                            ],
                                                   
                                                });
                                            }
                                            else {
                                                simple_line_chart.load({
                                                    unload: true,
                                                    columns: [
                                                                ['Numbers', 1052, 450, 915, 865,],
                                                            ],
                                                   
                                                });
                                            }
                                        });
                                    </script>
                                    </div>

                                </div>

                                <div class="col-lg-4">

                                    <!-- <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm">
                                                    <option>Today </option>
                                                    <option>This Week</option>
                                                    <option>This Month </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="padding-15 bg-cyan-100 margin-bottom-0">
                                        <div class="vscroll" style="height: 250px;">
                                            <table class="table  table-condensed  table-hovered    no-border   font-size-16 margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <div class="margin-right-20 bg-green-100 padding-0 font-size-30 red-800">
                                                                <img src="images/icon-staus-maintenances.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 20
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 "> Maintenances
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last week</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-staus-operations.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 red-800 font-weight-600 "> 14
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">In Operations
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-staus-available.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 orange-800 font-weight-600 "> 07
                                                            </div>
                                                            <div class="font-size-12 font-weight-600"> Completed
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">more than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
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


                                <div class="col-lg-3">

                                    <!-- <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm">

                                                    <option>This Week</option>
                                                    <option>This Month </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="chartbox">
                                        <div id="chart-alerts1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-alerts1',
                                                        size: {
                                                            height: 280,
                                                        },
                                                        legend: {
                                                            show: true,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Engine	 ', 8,],
                                                                ['Electrical	 ', 12],
                                                                ['HVAC	', 12],
                                                                ['Fuel System		', 1],
                                                                ['Steering and Control	', 3],
                                                            ],
                                                            type: 'pie',
                                                        },
                                                        color: {
                                                            //pattern: ['#ec9940', '#4e97d9', '#36ab7a']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Activities',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: 'No of Activities ',
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

                            <hr />
                            <div class="row">





                                <div class="col-lg-12">

                                    <div class=" font-size-24 margin-bottom-10 margin-top-0 text-center">Avg Monthly
                                        Maintenances Completed </div>
                                    <div class="chartbox">
                                        <div id="chart-home1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-home1',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['%', 68, 95, 78, 100, 88, 65, 76],
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
                                                                    text: ' ',
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

                            <div class="row">

                                <div class="col-lg-6">


                                    <div class="chartbox">
                                        <div id="chart-home1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-home1',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['%', 68, 95, 78, 100, 88, 65, 76],
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
                                                                    text: ' ',
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



            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class=""><a data-toggle="tab" href="#Completed" aria-expanded="true">
                                        Listing</a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#Recent" aria-expanded="false">Recently Added
                                    </a></li> -->
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Completed">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">


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
                                                            <div class="label label-success "> Completed
                                                            </div>
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

                                                        <td>13-Feb-2019, 11:21am</td>
                                                        <td>-</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>Fuel System</td>
                                                        <td>Weekly </td>
                                                        <td>
                                                            <div class="label label-success "> Completed
                                                            </div>
                                                        </td>

                                                        <td>25-Mar-2019, 01:20am</td>
                                                        <td>26-Mar-2019, 04:12am</td>


                                                    </tr>
                                                    <tr class="">

                                                        <td>HVAC </td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-warning "> Inprogress
                                                            </div>
                                                        </td>

                                                        <td>12-July-2019, 08:00am</td>
                                                        <td>13-July-2019, 11:19am</td>


                                                    </tr>

                                                    <tr class="">

                                                        <td>Steering and Control</td>
                                                        <td>Monthly </td>
                                                        <td>
                                                            <div class="label label-success "> Completed
                                                            </div>
                                                        </td>

                                                        <td>25-Jan-2019, 08:00am</td>
                                                        <td>26-Jan-2019, 11:19am</td>


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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>
