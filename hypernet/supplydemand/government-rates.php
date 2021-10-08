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

    <body class="dashboard ">
        <?php include_once('_header.php'); ?>
        <?php include_once('_leftmenu.php'); ?>



        <div class="page">



            <div class="page-content  ">


            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default  card shadow light">
                            <div class="panel-heading">
                                <h3 class="panel-title font-weight-600">Market Rate vs Govt Rate </h3>

                            </div>
                            <div class="panel-body ">

                                <!-- <div class="btn-group-xs btn-group btn-group-justified margin-bottom-20">
                                 <a href="#" class="btn btn-outline btn-success active" data-toggle="tab" data-target="#nav-tab-111">Commodities</a>
                                 <a href="#" class="btn btn-outline btn-success" data-toggle="tab" data-target="#nav-tab-222">Primary Material</a>
                                 <a href="#" class="btn btn-outline btn-success" data-toggle="tab" data-target="#nav-tab-333">Construction</a>
                              </div> -->


                                <div class="tab-content">

                                    <div class="tab-pane fade active in " id="nav-tab-111">
                                        <div class="chartbox ">
                                            <div id="chart-111"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-111',
                                                            size: {
                                                                height: 290,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },



                                                            data: {
                                                                columns: [
                                                                    ['Govt Rate'           , 150, 250, 151, 190, 190, 300, 470, 230, 119, 270, 240, 315],
                                                                    ['Market Selling Price', 152, 250, 152, 190, 190, 320, 470, 230, 119, 280, 240, 315],

                                                                ],
                                                                type: 'bar',
                                                                types: {
                                                                    Working: 'bar',
                                                                    Idle: 'bar',
                                                                    Standby: 'bar',
                                                                    FlagClass: 'bar',
                                                                    RepairsEngine: 'bar',
                                                                    RepairsDeck: 'bar',
                                                                    RepairIncident: 'bar',
                                                                    Weather: 'bar',
                                                                },
                                                                groups: [
                                                                  //  ['Demand', 'Supply']
                                                                ]
                                                            },
                                                            color: {
                                                                pattern: ['#ec9940', '#e84a60 ', '#e9595b ', '#269b8f ']
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
                                                                    categories: ['Passenger Vehicles','Vehicles Spare Parts', 'Taps & Valves', 'Water Heaters', 'Vacuum Pumps', 'Tube & Pipe', 'Tools Equipment', 'Aircraft Parts', 'Air Conditioners', 'Cement', 'Chicken']
                                                                },
                                                                y: {
                                                                    label: {

                                                                        text: 'K (QAR)',
                                                                        position: 'center'
                                                                    },
                                                                },
                                                            },
                                                            bar: {
                                                                width: {
                                                                    ratio: 0.4
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
                                    <div class="tab-pane " id="nav-tab-222">
                                        <div class="chartbox ">
                                            <div id="chart-222"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-222',
                                                            size: {
                                                                height: 250,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },



                                                            data: {
                                                                columns: [
                                                                    ['Demand', 17, 23, 13, 17, 14, 13, 22, 24, 13, 30],
                                                                    ['Supply', 20, 29, 23, 17, 37, 13, 22, 19, 13, 20],

                                                                ],
                                                                type: 'bar',
                                                                types: {
                                                                    Working: 'bar',
                                                                    Idle: 'bar',
                                                                    Standby: 'bar',
                                                                    FlagClass: 'bar',
                                                                    RepairsEngine: 'bar',
                                                                    RepairsDeck: 'bar',
                                                                    RepairIncident: 'bar',
                                                                    Weather: 'bar',
                                                                },
                                                                groups: [
                                                                   // ['Demand', 'Supply']
                                                                ]
                                                            },
                                                            color: {
                                                                //pattern: ['#ec9940', '#e84a60 ', '#e9595b ', '#269b8f ']
                                                            },
                                                            axis: {
                                                                rotated: true,
                                                                x: {
                                                                    label: {
                                                                        show: false,
                                                                        text: '',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1']
                                                                },
                                                                y: {
                                                                    label: {

                                                                        text: '',
                                                                        position: 'outer-center'
                                                                    },
                                                                },
                                                            },
                                                            bar: {
                                                                width: {
                                                                    ratio: 0.4
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
                                    <div class="tab-pane " id="nav-tab-333">
                                        <div class="chartbox ">
                                            <div id="chart-333"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-333',
                                                            size: {
                                                                height: 250,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },



                                                            data: {
                                                                columns: [
                                                                    ['Demand', 17, 23, 13, 17, 14, 13, 22, 24, 13, 30],
                                                                    ['Supply', 20, 29, 23, 17, 37, 13, 22, 19, 13, 20],

                                                                ],
                                                                type: 'bar',
                                                                types: {
                                                                    Working: 'bar',
                                                                    Idle: 'bar',
                                                                    Standby: 'bar',
                                                                    FlagClass: 'bar',
                                                                    RepairsEngine: 'bar',
                                                                    RepairsDeck: 'bar',
                                                                    RepairIncident: 'bar',
                                                                    Weather: 'bar',
                                                                },
                                                                groups: [
                                                                    ['Demand', 'Supply']
                                                                ]
                                                            },
                                                            color: {
                                                                pattern: ['#269b8f', '#e84a60 ', '#e9595b ', '#269b8f ']
                                                            },
                                                            axis: {
                                                                rotated: true,
                                                                x: {
                                                                    label: {
                                                                        show: false,
                                                                        text: '',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1', 'Product 1']
                                                                },
                                                                y: {
                                                                    label: {

                                                                        text: '',
                                                                        position: 'outer-center'
                                                                    },
                                                                },
                                                            },
                                                            bar: {
                                                                width: {
                                                                    ratio: 0.4
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


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default  card light ">
                            <div class="panel-heading margin-bottom-0">
                                <h3 class="panel-title font-weight-600 ">Government Rates </h3>
                            </div>
                            <div class="panel-body padding-20">

                                <div class="table-responsive">
                                    <table class="table table-lg table-striped table-bordered1 table-hover style11 font-size-14">
                                        <thead class="">
                                            <tr>
                                                <th scope="col" colspan="1" class=" text-center bg-white"></th>
                                                <th scope="col" colspan="1" class=" text-center bg-white" width="200"> </th>
                                                <th scope=" col" colspan="9" class=" text-center  bg-blue-100 padding-20"> Suppliers Rates (QAR) </th>
                                            </tr>
                                            <tr class="">
                                                <th scope=" col" class="bg-green-600 white" width="400">Categories</th>
                                                <th scope="col" width="180" class=" text-center bg-blue-600 white">
                                                    Govt. Rate
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    GEMCO
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    CARINA
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    CECC
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    GEMCO
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    CECC
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    GEMCO
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    CARINA
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    CECC
                                                </th>
                                                <th scope="col" width="180" class=" text-center bg-blue-500 white">
                                                    GEMCO
                                                </th>
                                            </tr>
                                        </thead>




                                        <tbody>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Passenger Vehicles</th>
                                                <td class="text-center">150</td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">155</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">149</td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">155</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">155</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Vehicles Spare Parts</th>
                                                <td class="text-center">250</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">258</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">290</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                                <td class="text-center">250</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white"> Water Heaters</th>
                                                <td class="text-center">151</td>
                                                <td class="text-center">201</td>
                                                <td class="text-center">82</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">131</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">212</td>
                                                <td class="text-center">150</td>
                                                <td class="text-center">200</td>
                                                <td class="text-center">80</td>
                                                <td class="text-center">130</td>
                                                <td class="text-center">212</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white"> Vacuum Pumps</th>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">250</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                                <td class="text-center">190</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white"> Tube & Pipe </th>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">380</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">350</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                                <td class="text-center">300</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Tools Equipment</th>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">470</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">490</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white"> Aircraft Parts </th>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">250</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">250</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                                <td class="text-center">230</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Air Conditioners </th>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">150</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">155</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                                <td class="text-center">119</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Cement </th>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">300</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                                <td class="text-center">270</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-green-500 white">Chicken</th>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">
                                                    <a data-toggle="popover" data-original-title="Over Price" data-trigger="click" data-container="body" data-placement="top" data-html="true" href="#" id="supplier1">
                                                        <span class="label label-round label-danger ">271</span>
                                                    </a>
                                                </td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
                                                <td class="text-center">240</td>
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











        <div id="popover-content-supplier1" class="hide">
            <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                <tr>

                    <td class=""><a href="supplier-stock.php"> View Details</a></td>
                </tr>
            </table>
        </div>








        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















    </body>

</html>