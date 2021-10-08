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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Page</a></li>
            </ol>
        </div> -->


        
        <div class="page-content  container-fluid">

<div class="row">
<div class="col-lg-4">

    <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30">
    <div class="font-size-14 margin-bottom-10  text-uppercase ">
        Sites
    </div>
    <div class=" margin-bottom-5 ">
        <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
    </div>
    <div class="font-size-18 font-weight-600 margin-bottom-10">
        230
    </div>
    <div class="row no-space">
        <div class="col-md-6">
            <div class="  bg-teal-600   font-size-10 padding-5  ">
                Active
                <div class="font-size-16">300</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="  bg-teal-600   font-size-10 padding-5  ">
                Inactive
                <div class="font-size-16">300</div>
            </div>
        </div>
    </div>
</div>

</div>




<div class="col-lg-4">

    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
    <div class="font-size-14 margin-bottom-10  text-uppercase ">
        Employees
    </div>
    <div class=" margin-bottom-5 ">
        <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
    </div>
    <div class="font-size-18 font-weight-600 margin-bottom-10">
        250
    </div>
    <div class="row no-space">
        <div class="col-md-6">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Active
                <div class="font-size-16">150</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Inactive
                <div class="font-size-16">100</div>
            </div>
        </div>
    </div>
</div>



</div>
<div class="col-lg-4">

<div class="row">
    <div class="col-lg-6">
        <div class="widget  white margin-bottom-30 shadow card">
            <div class="padding-15 bg-green-700 " style="height:197px;">
                <div class="text-center padding-top-0">
                    <div class="">
                        <div class=" font-size-18 margin-bottom-10">Best Site</div>
                        <div class="dropdown margin-bottom-10 ">
                            <button type="button" class="btn bg-green-800 btn-block white dropdown-toggle btn-xs"
                                data-toggle="dropdown">
                                This Week
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">

                                <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                                <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                        <div class="font-size-20  margin-bottom-10 font-weight-600"> Site 101</div>

                        <div class="font-size-14 margin-bottom-10"> 63% productivity </div>
                        <div class="font-size-10">
                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                            <span class="">10%</span>
                            <span class="">Higher than yesterday</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="widget  white margin-bottom-30 shadow card">
            <div class="padding-15 bg-red-700 " style="height:197px;">
                <div class="text-center padding-top-0">
                    <div class="">


                        <div class=" font-size-18 margin-bottom-10">Worst Site</div>

                        <div class="dropdown margin-bottom-10 ">
                            <button type="button" class="btn bg-red-800 btn-block white dropdown-toggle btn-xs"
                                data-toggle="dropdown">
                                This Week
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu font-size-10 text-center" style="min-width:100%;">

                                <li role="presentation"><a href="javascript:void(0)">This Week</a></li>
                                <li role="presentation"><a href="javascript:void(0)">This Year</a></li>
                            </ul>
                        </div>
                        <div class="font-size-20  margin-bottom-10 font-weight-600"> Site 108</div>

                        <div class="font-size-14 margin-bottom-10"> 10% productivity  </div>
                        <div class="font-size-10">
                            <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                            <span class="">5%</span>
                            <span class="">less than yesterday</span>
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
                    <div class="col-lg-7">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default shadow" >
                                    <div class="panel-heading   ">
                                        <div class="panel-actions ">
                                            <select class="">
                                                <option>Top 3</option>
                                                <option>Bottom 3</option>
                                            </select>
                                            <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                                        </div>
                                        <h3 class="panel-title "> <b>Sites Performance Stats</b>

                                        </h3>
                                    </div>
                                    <div class="panel-body ">
                                        <div class="margin-left-20 margin-right-20">
                                            <div class="slider margin-bottom-0 weekbox darkarrows " id="slikslider-milk">
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site 101</div>
                                                        <div class="c100 p90 small  orange">
                                                            <span class="pointer">92% </span>
                                                            <!--<span style="position:absolute; bottom:0; font-size:10px; left:0; right:0; width:100%; text-align:center;">ddd</span>-->
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>

                                                        <!--<div>
                                                        <div style="bottom:0; font-size:10px; left:0; right:0; width:100%; text-align:center;"> Task Completion Rate  </div>
                                                    </div>-->
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 1</span>
                                                        </div>
                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site 102</div>
                                                        <div class="c100 p82 small  red ">
                                                            <span class="pointer">82%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 2</span>
                                                        </div>

                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site 103</div>
                                                        <div class="c100 p70 small  green ">
                                                            <span class="pointer">70%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 3</span>
                                                        </div>

                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                                <div>
                                                    <div class="col-sm-12 padding-horizontal-20 ">
                                                        <div class="text-center margin-top-0 margin-bottom-10 font-size-18 ">Site 104</div>
                                                        <div class="c100 p20 small  red ">
                                                            <span class="pointer">82%</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center margin-top-10 margin-bottom-10">
                                                            <span class="badge badge-success">Rank: 4</span>
                                                        </div>
                                                        <ul class="list-unstyled list-group list-group-dividered list-group-full margin-top-10  font-size-12  text-left margin-bottom-0">
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Productive Hours
                                                                    <b class="pull-right">12</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div>
                                                                    Supervisor
                                                                    <b class="pull-right">John Smith</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man Hours
                                                                    <b class="pull-right">15</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Zones
                                                                    <b class="pull-right">31</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Man hours
                                                                    <b class="pull-right">120</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Labours
                                                                    <b class="pull-right">27</b>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item padding-5">
                                                                <div class="">
                                                                    Violations
                                                                    <b class="pull-right">09</b>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                </div>
                                            </div>
                                            <script>
                                                $('#slikslider-milk').slick({
                                                    infinite: false,
                                                    slidesToShow: 3,
                                                    slidesToScroll: 1,
                                                    dots: false,
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





                    </div>
                 
                    <div class="col-md-5">

            <div class="panel panel-default  card shadow light">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">Productivity Stats
                </h3>

              </div>
              <div class="panel-body ">
                <div class="margin-bottom-10 clearfix text-center">
                  <div class="form-group1">
                    <div class="inline-block">
                      <select class="form-control input-sm" id="mrq-dd-Utilization">
                        <option>Current Status</option>
                        <option>This Month </option>
                        <!-- <option>This Year</option> -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="chartbox">
                  <div id="chart-Utilization"></div>
                  <script>
                    var simple_line_Utilization;
                    $(document).ready(function ($) {
                      (function () {
                        simple_line_Utilization = c3.generate({
                          bindto: '#chart-Utilization',
                          size: {
                            height: 320,
                          },
                          legend: {
                            show: true,
                            position: 'bottom',
                          },

                          data: {
                            columns: [
                              ['Active', 32, 58, 35, 24, 90, 39],
                              ['Expected', 75, 65, 70, 55, 118, 55],

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
                              categories: ['Site 101', 'Site 102', 'Site 103', 'Site 104', 'Site 107', 'Site 109']
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
                            ['Active', 12, 18, 25, 14, 20, 19],
                            ['Expected', 75, 65, 70, 55, 118, 55],
                          ],
                        });
                      }
                      else {
                        simple_line_Utilization.load({
                          unload: true,
                          columns: [
                            ['Active', 112, 118, 125, 114],
                            ['Expected', 175, 165, 700, 155],
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
                <div class="col-lg-4">
                        <div class="panel panel-default shadow ">
                            <div class="panel-heading  ">
                                <div class="panel-actions ">
                                    <select class="">
                                        <option>Today</option>
                                        <option>Last 24 Hours</option>
                                        <option>Last Week</option>
                                    </select>
                                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                                </div>
                                <h3 class="panel-title"> <b>Violations</b></h3>
                            </div>
                            <div class="panel-body ">
                                <div class="chartbox">
                                    <div id="chart-alerts1"></div>
                                    <script>
                                        $(document).ready(function ($) {
                                            (function () {
                                                var simple_line_chart = c3.generate({
                                                    bindto: '#chart-alerts1',
                                                    size: {
                                                        height: 257,
                                                    },
                                                    legend: {
                                                        show: true,
                                                        position: 'right',
                                                    },
                                                    data: {
                                                        columns: [
                                                            ['Site 101', 5, 10, 26, 40, 25, 30, 31],
                                                            ['Site 102', 13, 28, 10, 36, 23, 21, 13],
                                                            ['Site 103', 26, 19, 35, 26, 29, 13, 29],
                                                            ['Site 104', 31, 30, 15, 40, 10, 35, 41],

                                                        ],
                                                        type: 'donut',
                                                    },
                                                    donut: {
                                                        title: "Sites Violations"
                                                    },
                                                    color: {
                                                        pattern: ['#f7902f', '#2a9e91', '#d83a46', '#1084b2', '#2bac48']
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
                                                                text: 'No. of Hours ',
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
                    <div class="col-lg-8  ">


                    <div class="panel panel-default  card  light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600 text-center">Task Completion Rate</h3>

                        </div>
                        <div class="panel-body ">
                            <div class="margin-bottom-0 clearfix text-center">
                                <div class="form-group1">

                                    <div class="inline-block">
                                        <select class="form-control input-sm" id="mrq-dd-class4">
                                            <option>Today </option>
                                            <option>This Week</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="chartbox">
                                <div id="chart-mmm"></div>
                                <script>
                                    var chart1;
                                    $(document).ready(function ($) {
                                        (function () {

                                            chart1 = c3.generate({
                                                bindto: '#chart-mmm',
                                                size: {
                                                    height: 225,
                                                },
                                                legend: {
                                                    show: true,
                                                    position: 'bottom',
                                                },
                                                data: {
                                                    columns: [
                                                        ['SITE 101', 40, 20, 50, 20, 50, 60, 70],
                                                        ['SITE 102', 15, 30, 25, 20, 10, 40, 70],
                                                        ['SITE 103', 5, 10, 30, 10, 50, 30, 20],
                                                        ['SITE 104', 15, 30, 45, 20, 10, 40, 70],
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
                                                        show: false
                                                    },

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
                                <script>
                                    $("#mrq-dd-class4").on('change', function () {

                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            chart1.load({
                                                unload: true,
                                                columns: [
                                                    ['Site 101', 40, 20, 50, 20, 50, 60, 70],
                                                    ['Site 102', 15, 30, 25, 20, 10, 40, 70],
                                                    ['Site 103', 5, 10, 30, 10, 50, 30, 20],
                                                    ['Site 104', 15, 30, 45, 20, 10, 40, 70],
                                                ],
                                            });
                                        }
                                        else {
                                            chart1.load({
                                                unload: true,
                                                columns: [
                                                    ['Site 101', 140, 120, 150, 120, 150, 160, 170],
                                                    ['Site 102', 115, 130, 125, 120, 110, 140, 170],
                                                    ['Site 103', 15, 110, 130, 110, 150, 130, 120],
                                                    ['Site 104', 115, 130, 145, 20, 110, 140, 170],
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
                         <div class="panel panel-default  card shadow light mrq-container">
        <div class="panel-heading font-weight-600 ">
            <h3 class="panel-title "><b>Listing </b></h3>
            <div class="panel-actions ">
                <a class="panel-action icon ion-loop " data-toggle="tooltip"
                    data-original-title="Refresh"></a>
            </div>
        </div>
        <div class="panel-body">

            <div class="sidebox">
                <div class="page-aside left-filters">
                    <div class="page-aside-switch">
                        <i class="icon wb-chevron-left"></i>
                        <i class="icon wb-chevron-right"></i>
                    </div>
                    <div class="page-aside-inner">
                        <section class="page-aside-section">
                            <div class=" padding-left-20 padding-right-20">

                                <div class="panel-group left-filters" id="AccordionFilters1">

                                    <div class="panel">
                                        <div class="panel-heading" role="tab">
                                            <a class="panel-title" data-toggle="collapse"
                                                href="#Customer" data-parent="#AccordionFilters">
                                                Location
                                            </a>
                                        </div>
                                        <div class="panel-collapse collapse in" id="Customer"
                                            role="tabpanel">
                                            <div class="panel-body padding-0">

                                                <div class="form-inline">
                                                    <div class="input-icon">
                                                        <select
                                                            class="form-control selectpicker show-tick show-menu-arrow mrq-dd "
                                                            multiple data-width="100%" data-size="5"
                                                            title="All" data-style="btn-select"
                                                            data-live-search="true" data-mrq-col-no="3"
                                                            data-mrq-table-id="table">
                                                            <option data-subtext=""> Dubai,UAE
                                                            </option>
                                                            <option data-subtext=""> Karachi,Pakistan
                                                            </option>
                                                            <option data-subtext=""> Sharjah,UAE
                                                            </option>
                                                            <option data-subtext=""> Islamabad,Pakistan </option>
                                                            
                                                        </select>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                            

                                    <div class="panel">
                                        <div class="panel-heading" role="tab">
                                            <a class="panel-title" data-toggle="collapse" href="#Status"
                                                data-parent="#AccordionFilters">
                                                Status
                                            </a>
                                        </div>
                                        <div class="panel-collapse collapse in" id="Status"
                                            role="tabpanel">
                                            <div class="panel-body padding-0">
                                                <ul class="list-group list-group-bordered mrq-cb"
                                                    data-mrq-col-no="1" data-mrq-table-id="table">
                                                    <li class="list-group-item">
                                                        <span class="badge badge-default">03</span>
                                                        <div class="inline-block ">
                                                            <div
                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                <input type="checkbox" value="online"
                                                                    id="Online1" name="online" />
                                                                <label for="Online1">Active</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="badge badge-default">01</span>
                                                        <div class="inline-block ">
                                                            <div
                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                <input type="checkbox" value="offline"
                                                                    id="Online1r" name="" />
                                                                <label for="Online1r">Inactive</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="list-group-item">
                                                        <span class="badge badge-default">01</span>
                                                        <div class="inline-block ">
                                                            <div
                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                <input type="checkbox"
                                                                    value="maintenance" id="Online3"
                                                                    name="" />
                                                                <label for="Online3">
                                                                    Maintenance</label>
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
                <div class="page-main" style="min-height:auto !important; ">
                <div class="table-responsive1 vscroll" style="height:100%;">

                                    <table class="table table-hover table-condensed margin-bottom-0">
                                        <thead>
                                            <tr class="">
                                                <th class="nosort">ID</th>
                                                <th class="">Status</th>
                                                <th class="" width="150">Supervisor</th>
                                                <th class="text-center">Zones</th>
                                                
                                                <th class="">Productivity</th>
                                               
                                                
                                                <th class="">Location</th>
                                                <th class="">Active Since</th>
                                                <th class="">Deadline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="site.php">Site 101</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            Philip Smith
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">4</td>
                                               

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%;">
                                                            <span class="progress-label">25%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                               
                                                <td class="text-left">Al Warqa 3 , Dubai 
                                                <div class="label  right"
                                                            data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img
                                                                    src="images/icon-location.png"
                                                                    alt="img" height="20">4</i>
                                                        </div></td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site.php">Site 102</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor2.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            John Doe
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 5%;">
                                                            <span class="progress-label">5%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="text-left">Al Warqa 3 , Dubai
                                                <div class="label  right"
                                                            data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img
                                                                    src="images/icon-location.png"
                                                                    alt="img" height="20">4</i>
                                                        </div></td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site.php">Site 103</a></td>
                                                <td class="text-left"><span class="label label-danger"> In Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            Joseph
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 35%;">
                                                            <span class="progress-label">25%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                               
                                                <td class="text-left">Al Warqa 3 , Dubai
                                                <div class="label  right"
                                                            data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img
                                                                    src="images/icon-location.png"
                                                                    alt="img" height="20">4</i>
                                                        </div></td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site.php">Site 104</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor3.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            John Doe
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 75%;">
                                                            <span class="progress-label">75%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="text-left">Al Warqa 3 , Dubai
                                                <div class="label  right"
                                                            data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img
                                                                    src="images/icon-location.png"
                                                                    alt="img" height="20">4</i>
                                                        </div></td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td><a href="site.php">Site 105</a></td>
                                                <td class="text-left"><span class="label label-info"> Active </span></td>
                                                <td class="text-left">
                                                    <div class="media">
                                                        <div class="media-left padding-right-10">
                                                            <div class="">
                                                                <img src="images/img-supervisor3.jpg" alt="..." width="30" class="img-rounded img-bordered img-bordered-warning">
                                                            </div>
                                                        </div>
                                                        <div class="media-body" style="vertical-align:middle;">
                                                            John Doe
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">8</td>
                                                

                                                <td class="text-left">
                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                        <div class="progress-bar " role="progressbar" style="width: 75%;">
                                                            <span class="progress-label">0%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="text-left">Al Warqa 3 , Dubai
                                                <div class="label  right"
                                                            data-target="#Track" data-toggle="modal"
                                                            type="button">
                                                            <i class="icon-location"><img
                                                                    src="images/icon-location.png"
                                                                    alt="img" height="20">4</i>
                                                        </div></td>
                                                <td class="text-left">02-05-2019</td>
                                                <td class="text-left">02-05-2018</td>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>