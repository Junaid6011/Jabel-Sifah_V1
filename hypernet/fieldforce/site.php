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
                    <div class="">
                        <div class="col-lg-8">
                            <h1 class="page-title lineheight-18 margin-bottom-30">
                                <span class="font-weight-400">Site 1 </span>
                                <br />
                                <span class="small">Supervisor: <b> John Doe </b></span>
                            </h1>

                        </div>
                        <div class="col-lg-4">
                            <div class="form-inline text-right">
                                <div class="input-icon">
                                    <select id="dd" class="form-control selectpicker show-tick show-menu-arrow " data-width="100%" data-size="5" title="Select Site" data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                                        <option value="site.php"> Site 1</option>
                                        <option value="site2.php"> Site 2</option>
                                        <option value="site3.php"> Site 3</option>

                                    </select>
                                    <span class="icon ion-information-circled select" data-toggle="tooltip" title="Other"></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
<div class="col-lg-2">

    <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
    <div class="font-size-14 margin-bottom-10  text-uppercase ">
        Zones
    </div>
    <div class=" margin-bottom-5 ">
        <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
    </div>
    <div class="font-size-18 font-weight-600 margin-bottom-10">
        07
    </div>
    <div class="row no-space">
        <div class="col-md-6">
            <div class="  bg-orange-600   font-size-10 padding-5  ">
                Active
                <div class="font-size-16">05</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="  bg-orange-600   font-size-10 padding-5  ">
                Inactive
                <div class="font-size-16">02</div>
            </div>
        </div>
    </div>
</div>

</div>




<div class="col-lg-6">

    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30">
    <div class="font-size-14 margin-bottom-10  text-uppercase ">
        Employees
    </div>
    <div class=" margin-bottom-5 ">
        <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
    </div>
    <div class="font-size-18 font-weight-600 margin-bottom-10">
        200
    </div>
    <div class="row no-space">
        <div class="col-md-3">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Present
                <div class="font-size-16">130</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Absent
                <div class="font-size-16">70</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Active
                <div class="font-size-16">100</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="  bg-blue-600   font-size-10 padding-5  ">
                Inactive
                <div class="font-size-16">30</div>
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
                        <div class=" font-size-14 margin-bottom-10">Top Performing Zone</div>
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
                        <div class="font-size-20  margin-bottom-10 font-weight-600"> Zone 4</div>

                        <div class="font-size-14 margin-bottom-10"> 63% productivity </div>
                      
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


                        <div class=" font-size-14 margin-bottom-10">Least Performing Zone</div>

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
                        <div class="font-size-20  margin-bottom-10 font-weight-600"> Zone 1</div>

                        <div class="font-size-14 margin-bottom-10"> 10% productivity  </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

</div>

                <div class="row">

                    <div class="col-lg-8">




                        <div class="row">
                            <div class="col-lg-12">

                                <div class="panel panel-default nav-tabs-horizontal shadow">
                                    <div class="panel-heading font-weight-600">
                                        <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                            <li class="active"><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Task
                                                    Completion Rate</a></li>
                                            
                                            <li class=""><a data-toggle="tab" href="#Productive" role="tab">Productive
                                                    Hours</a></li>

                                        </ul>
                                        <div class="panel-actions ">
                                            <select class="">
                                                <option>Today</option>
                                                <option>Last 24 Hours</option>
                                            </select>
                                            <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                                                <div class="chartbox">
                                                    <div id="chart-alerts1"></div>
                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {
                                                                var simple_line_chart = c3.generate({
                                                                    bindto: '#chart-alerts1',
                                                                    size: {
                                                                        height: 250,
                                                                    },
                                                                    legend: {
                                                                        show: true,
                                                                        position: 'top',
                                                                    },
                                                                    data: {
                                                                        columns: [
                                                                            ['Zone 1', 5, 10, 26, 40, 25, 30, 31],
                                                                            ['Zone 2', 13, 28, 10, 36, 23, 21, 13],
                                                                            ['Zone 3', 26, 19, 35, 26, 29, 13, 29],
                                                                            ['Zone 4', 31, 30, 15, 40, 10, 35, 41],
                                                                            ['Zone 5', 31, 4, 40, 10, 15, 10, 19],

                                                                        ],
                                                                        type: 'line',
                                                                    },
                                                                    color: {
                                                                        // pattern: [ '#f7902f', '#2a9e91', '#d83a46' ,'#1084b2', '#2bac48']
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
                                           

                                            <div class="tab-pane" id="Productive" role="tabpanel">

                                                <div class="margin-bottom-10 green-800  text-center" data-toggle="tooltip" data-original-title="Last Updated Time"> <b>Last Updated:</b> 04:40pm,
                                                    6, Jun 18 </div>


                                                <div class="chartbox">
                                                    <div id="chart-dd"></div>
                                                    <script>
                                                        $(document).ready(function ($) {
                                                            (function () {





                                                                var simple_line_chart = c3.generate({
                                                                    bindto: '#chart-dd',

                                                                    data: {
                                                                        columns: [
                                                                            ['Total', 450, 200, 200, 350],
                                                                            ['Productive', 430, 150, 180, 300],
                                                                        ],
                                                                        type: 'bar',
                                                                        groups: [
                                                                            ['Total', 'Productive']
                                                                        ]
                                                                    },
                                                                    grid: {
                                                                        y: {
                                                                            lines: [{ value: 0 }]
                                                                        }
                                                                    },
                                                                    size: {
                                                                        height: 230,
                                                                    },
                                                                    legend: {
                                                                        show: true,
                                                                        position: 'bottom',
                                                                    },


                                                                    axis: {
                                                                        rotated: false,
                                                                        x: {
                                                                            label: {
                                                                                text: 'Zones',
                                                                                position: 'outer-center'
                                                                            },
                                                                            type: 'category',
                                                                            categories: ['Zone 1', 'Zone 2 ', 'Zone 3', 'Zone 4',]
                                                                        },
                                                                        y: {
                                                                            label: {
                                                                                text: 'Hours',
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

                    </div>
                    <div class="col-lg-4">

                    




                        <div class="row">
                            <div class="col-lg-12">

                                <div class="panel panel-default nav-tabs-horizontal shadow">
                                    <div class="panel-heading font-weight-600">
                                        <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                            
                                            <li class="active"><a data-toggle="tab" href="#FeedStatistics" role="tab">Violations</a></li>
                                     

                                        </ul>
                                        <div class="panel-actions ">
                                            <select class="">
                                                <option>Today</option>
                                                <option>Last 24 Hours</option>
                                            </select>
                                            <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                           
                                            <div class="tab-pane active" id="FeedStatistics" role="tabpanel">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="chartbox">
                                                            <div id="chart-alerts1e"></div>
                                                            <script>
                                                                $(document).ready(function ($) {
                                                                    (function () {
                                                                        var simple_line_chart = c3.generate({
                                                                            bindto: '#chart-alerts1e',
                                                                            size: {
                                                                                height: 250,
                                                                            },
                                                                            legend: {
                                                                                show: true,
                                                                                position: 'right',
                                                                            },
                                                                            data: {
                                                                                columns: [
                                                                                    ['Zone-1', 5, 10, 26, 40, 25, 30, 31],
                                                                                    ['Zone-2', 13, 28, 10, 36, 23, 21, 13],
                                                                                    ['Zone-3', 26, 19, 35, 26, 29, 13, 29],
                                                                                    ['Zone-4', 31, 30, 15, 40, 10, 35, 41],

                                                                                ],
                                                                                type: 'donut',
                                                                            },
                                                                            donut: {
                                                                                title: "Zone Violations"
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

                                        </div>
                                    </div>
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
<div class="page-main"  style="min-height:auto !important; ">
<div class="table-responsive1 vscroll" style="height:100%;">

                <table class="table table-hover table-condensed margin-bottom-0">
                    <thead>
                        <tr class="">
                            <th class="nosort">ID</th>
                            <th class="">Status</th>
                            <th class="" width="150">Supervisor</th>
                            <th class="text-center">Employees</th>
                            
                            <th class="">Productivity</th>
                           
                            
                            <th class="">Location</th>
                            <th class="">Active Since</th>
                            <th class="">Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="site.php">Zone 1</a></td>
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
                            
                           
                            <td class="text-left"> Dubai 
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
                            <td><a href="site2.php">Zone 2</a></td>
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
                            
                            <td class="text-left"> Dubai
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
                            <td><a href="site3.php">Zone 3</a></td>
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
                           
                            <td class="text-left">Dubai
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
                            <td><a href="site.php">Zone 4</a></td>
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
                            
                            <td class="text-left"> Dubai
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
                            <td><a href="site.php">Zone 5</a></td>
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
                            
                            <td class="text-left">Dubai
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





        <?php include_once('_maptrail.php'); ?>


        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















    </body>

</html>