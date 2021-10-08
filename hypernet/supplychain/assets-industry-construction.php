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

    <div class="page1">
        <!-- <div class="breadcrumb-box">
        <ol class="breadcrumb breadcrumb-arrow ">
            <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
            <li><a href="javascript:void(0)">Page</a></li>
        </ol>
    </div>-->





        <div class="page-content  container-fluid">




            <div class="row no-space shadow card margin-bottom-30">

                <div class="">
                    <div class="slikslider margin-bottom-0 bg-green-800  padding-left-30 padding-right-30 "
                        id="slikslider-types">
                        <div>
                            <div>
                                <div class="padding-15  text-center relative  card  hover  white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase pointer "
                                        onclick="window.location.href='assets-industry-construction-cement.php'">
                                        Cement

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            3390
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">18%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr" class=""></div>
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


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div class="padding-15  text-center relative  card  hover     white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Concrete

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            1100
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">22%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr2" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr2',
                                                                    data: {
                                                                        columns: [
                                                                            ['sample', 130, 52, 30, -21, -150, 250, 20, 80, 0, 400, 500, 100, 100, 200]
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


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="padding-15  text-center relative  card  hover     white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Mudbrick

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            1342
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">33%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr3" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr3',
                                                                    data: {
                                                                        columns: [
                                                                            ['sample', 130, 252, 30, 21, 150, -250, 20, 80, 0, 400, 500, 100, 100, 200]
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


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="padding-15  text-center relative    card  hover   white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Glat glass

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            1231
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">71%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr4" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr4',
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


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="padding-15  text-center relative   card  hover    white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Hardwood plywood

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            2321
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">62%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr5" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr5',
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


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="padding-15  text-center relative   card  hover    white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Virgin steel

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            2290
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">32%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr6" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr6',
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


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="padding-15  text-center relative    card  hover   white">
                                    <div class="font-size-12 margin-bottom-10  text-uppercase ">
                                        Wood lumber

                                        <div class="font-size-18 font-weight-600 margin-top-10">
                                            1892
                                        </div>
                                    </div>
                                    <div class="row no-space bg-green-700">
                                        <div class="col-md-8">
                                            <div class="     font-size-10 padding-5  ">
                                                Demand Ratio
                                                <div class="">34%</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="font-size-10 padding-5  ">
                                                <div id="chart-rrr7" class=""></div>
                                                <div class="chartbox">

                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {

                                                                var chart = c3.generate({
                                                                    bindto: '#chart-rrr7',
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
                            slidesToShow: 6,
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




                <div class="col-lg-12  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Supply Chain Ratio</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-0 clearfix">

                                <div class="inline-block  pull-left  margin-bottom-20 margin-right-10">
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
                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                    <div class="">
                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-mmm"></div>
                                <script>
                                    $(document).ready(function ($) {
                                        (function () {

                                            var chart = c3.generate({
                                                bindto: '#chart-mmm',
                                                size: {
                                                    height: 300,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['Cement', 40, 20, 50, 20, 50, 15, 38, 25, 20, 10, 50, 20],
                                                        ['Concrete', 15, 30, 99, 20, 10, 15, 30, 25, 20, 10, 72, 60],
                                                        ['Mudbriks', 15, 80, 25, 20, 10, 15, 19, 51, 20, 70, 50, 70],
                                                        ['Glat Glass', 15, 30, 78, 20, 10, 75, 30, 55, 20, 66, 40, 20],
                                                        ['Hardwook', 15, 30, 25, 20, 10, 15, 30, 22, 20, 10, 22, 20],
                                                        ['Steel', 40, 20, 50, 20, 0, 15, 30, 13, 20, 50, 40, 20],
                                                    ],
                                                    axes: {
                                                        data1: 'y',
                                                        data2: 'y2'
                                                    },
                                                    type: 'area-spline',
                                                },
                                                color: {
                                                    pattern: ['#e98f2e', '#3583ca', '#279566', '#178d81']
                                                },
                                                axis: {
                                                    y: {
                                                        show: true
                                                    },
                                                    y2: {
                                                        show: true
                                                    },

                                                    x: {
                                                        label: {
                                                            text: ' ',
                                                            position: 'outer-center'
                                                        },
                                                        type: 'category',
                                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                                    },
                                                    y: {
                                                        label: {
                                                            text: 'Number ',
                                                            position: 'outer-middle'
                                                        },
                                                    },

                                                },
                                                grid: {
                                                    x: {
                                                        show: true
                                                    },
                                                    y: {
                                                        show: true
                                                    }
                                                },
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

    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>





</body>

</html>