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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->


        <div class="page-content  container-fluid">



            <div class="row ">
                <div class="col-md-7">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Employees
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-employees.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">250</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-blue-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Online</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-online.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-18">150</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-red-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Offline</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-offline.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-20">100</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="row no-space shadow card margin-bottom-30">

                                <div class="">
                                    <div class="slikslider margin-bottom-0 bg-teal-500  " id="slikslider-types">
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10 bg-teal-500 height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0   ">
                                                            <div class="font-size-14 ">
                                                                Managers
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">100</b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            60 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Technical
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 50 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            40 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Staff
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 100 </b>
                                                        </div>
                                                        <div
                                                            class="label white  bg-teal-600 absolute1  left right bottom">
                                                            50 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <script>
                                        $('#slikslider-types').slick({
                                            infinite: false,
                                            slidesToShow: 3,
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-cyan-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">



                                            <div class="dropdown margin-bottom-5 ">
                                                <select class="btn bg-cyan-800  white" id="mrq-dd-eee">
                                                    <option>This Month Best Employee</option>
                                                    <option>This Year Best Employee</option>
                                                </select>
                                            </div>
                                            <img src="images/user.jpg" id="mrq-m3" alt="img" style="height:80px;"
                                                class="img-circle1 img-bordered img-bordered-primary">



                                            <div>
                                                <a href="" data-toggle="popover" data-original-title=""
                                                    data-trigger="hover" data-container="body" data-placement="bottom"
                                                    data-html="true" id="name1" class="white">
                                                    <div class="font-size-16  margin-bottom-5 font-weight-600"
                                                        id="mrq-m1">
                                                        Michel Smith</div>
                                                </a>
                                                <div id="popover-content-name1" class="hide">
                                                    <table
                                                        class="table table-condensed  table-striped1 margin-bottom-0  font-size-12  ">
                                                        <tbody>

                                                            <tr>
                                                                <th><b> Total Jobs Completed</b></th>
                                                                <td>750 </td>
                                                            </tr>
                                                            <tr>
                                                                <th><b> Total Violations</b></th>
                                                                <td>70 </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>

                                            <div class="margin-bottom-5 stars  ">
                                                <button id="rating1" type="button" class="btn btn-warning btn-xs">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </button>
                                                <button id="rating2" type="button" class="btn btn-warning btn-xs">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </button>
                                                <button id="rating3" type="button" class="btn btn-warning btn-xs">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </button>
                                                <button id="rating4" type="button"
                                                    class="btn btn-warning btn-grey btn-xs">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </button>
                                                <button id="rating5" type="button"
                                                    class="btn btn-default btn-grey btn-xs">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                </button>
                                            </div>

                                            <div class="font-size-12 margin-bottom-10" id="mrq-m2"> 4.0 </div>

                                            <script>
                                                $("#mrq-dd-eee").on('change', function () {
                                                    debugger
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                        $("#mrq-m1").text('Michel Smith')
                                                        $("#mrq-m2").text('3.0')
                                                        $("#mrq-m3").attr('src', 'images/user.jpg')
                                                        $("#rating4").toggleClass('btn btn-warning btn-grey btn-xs btn btn-default btn-grey btn-xs');

                                                    }
                                                    else {
                                                        $("#mrq-m1").text('Aurthr Vidal ')
                                                        $("#mrq-m2").text('4.0')
                                                        $("#mrq-m3").attr('src', 'images/user-img1.jpg')
                                                        $("#rating4").toggleClass('btn btn-default btn-grey btn-xs btn btn-warning btn-grey btn-xs');
                                                        $("#rating5").toggleClass('btn btn-default btn-grey btn-xs btn btn-default btn-grey btn-xs');
                                                    }
                                                })

                                            </script>

                                            <!-- <script>
                                                $("#mrq-dd-emoloyee1").on('change', function () {
                                                    debugger
                                                    console.log(this.value.trim().toLowerCase().includes('Violations'))
                                                    if (this.value.trim().toLowerCase().includes('Violations')) {
                                                        $("#employee-v1").text('Michel Smith')
                                                        $("#employee-v2").text('3.0')
                                                        $("#test").attr('src', 'https://helpx.adobe.com/in/stock/how-to/visual-reverse-image-search/_jcr_content/main-pars/image.img.jpg/visual-reverse-image-search-v2_1000x560.jpg')
                                                    }
                                                    else {
                                                        $("#employee-v1").text('John Dynamo ')
                                                        $("#employee-v2").text('5.0')
                                                        $("#test").attr('src', 'images/user.jpg')
                                                    }
                                                })
                                            </script> -->


                                        </div>
                                    </div>
                                </div>
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

                                <div class="col-lg-8">

                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-Completion22">
                                                    <option>This Month </option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart66;
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart66 = c3.generate({
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
                                                                ['Numbers', 120, 85, 55, 25, 61],
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
                                                                categories: ['On Job', 'Available', 'Present', 'Leave', 'Assigned']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: 'Numbers ',
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


                                    <script>

                                        $("#mrq-dd-Completion22").on('change', function () {

                                            if (this.value.trim().toLowerCase().includes('month')) {
                                                simple_line_chart66.load({
                                                    unload: true,
                                                    columns: [
                                                        ['Numbers', 120, 85, 55, 25, 61],
                                                    ],
                                                });
                                            }
                                            else {
                                                simple_line_chart66.load({
                                                    unload: true,
                                                    columns: [
                                                        ['Numbers', 20, 100, 155, 251, 61],
                                                    ],
                                                });
                                            }
                                        });
                                    </script>

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
                                            <table
                                                class="table  table-condensed  table-hovered    no-border   font-size-16 margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 green-800">
                                                                <img src="images/icon-taskrate.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 green-800"> 85%
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 "> Job Completion
                                                                Rate
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">10%</span>
                                                                <span class="">more than last week</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 green-800">
                                                                <i class="ion-arrow-graph-up-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-hire.png" alt="img" height="40"
                                                                    class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 red-800 font-weight-600 "> 14
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">New Hiring
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">15%</span>
                                                                <span class="">less than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-turnover.png" alt="img"
                                                                    height="40" class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 orange-800 font-weight-600 "> 07
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">
                                                                Employee Turnove
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">17%</span>
                                                                <span class="">more than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
                                                                <i class="ion-arrow-graph-up-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-right-20 bg-green-100 padding-0 font-size-30 orange-800">
                                                                <img src="images/icon-leave.png" alt="img" height="40"
                                                                    class="inline">
                                                            </div>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24 orange-800 font-weight-600 "> 07
                                                            </div>
                                                            <div class="font-size-12 font-weight-600">
                                                                Employee on Leave
                                                            </div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">17%</span>
                                                                <span class="">more than last week</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div
                                                                class="margin-top-0 bg-white padding-5 font-size-30 orange-800">
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

                    </div>



                </div>



            </div>


            <div class="row">



                <div class="col-lg-12">
                    <div class="panel panel-default  card shadow light">
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
                                                                        <span class="badge badge-default">30</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="online"
                                                                                    id="Online1" name="online" />
                                                                                <label for="Online1">Online</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">07</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="offline"
                                                                                    id="Online1r" name="" />
                                                                                <label for="Online1r">Offline</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">0</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" value="idle"
                                                                                    id="Online2" name="" />
                                                                                <label for="Online2">Idle</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- <li class="list-group-item">
                                                                        <span class="badge badge-default">12</span>
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
                                                                    </li> -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#Types"
                                                                data-parent="#AccordionFilters">
                                                                Types
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Types"
                                                            role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered mrq-cb"
                                                                    data-mrq-col-no="5" data-mrq-table-id="table">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">100</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Hook"
                                                                                    value="Technical">
                                                                                <label for="Hook">Technical
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">50</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Compactor"
                                                                                    value="Service">
                                                                                <label for="Compactor">Service</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">100</span>
                                                                        <div class="inline-block ">
                                                                            <div
                                                                                class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Chain"
                                                                                    value="Operational">
                                                                                <label for="Chain">Operational</label>
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
                                        <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                        </div>
                                        <!-- <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                            <select class="form-control input-sm">
                                                <option>Sort by</option>
                                                <option>Max Rating</option>
                                                <option>Min Rating</option>
                                                <option>Status: Online</option>
                                                <option>Max Voilations</option>
                                                <option>Min Voilations</option>
                                            </select>
                                        </div> -->
                                        <div class="inline-block  pull-left  margin-bottom-10 margin-right-10">
                                            <div class="form-group  margin-bottom-0  ">
                                                <div class="input-daterange   ">
                                                    <div class="input-group  input-group-sm">
                                                        <div class="input-group-addon">
                                                            <i class="icon ion-calendar"></i>
                                                        </div>
                                                        <input type="text" class="form-control date" value="10/24/17" />
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <div class="input-group-addon">to</div>
                                                        <input type="text" class="form-control date" value="10/25/17" />
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

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="vscroll padding-right-0" style="height:auto;">
                                                <table
                                                    class="table  table-bordered table-condensed1 table-striped1 margin-bottom-0"
                                                    id="table">
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
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user-img2.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">Joe
                                                                            Denly
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Technical</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success ">
                                                                    Online</div>
                                                            </td>
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        4</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">02</td>
                                                            <td class="text-left hidden">Technical
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user-img3.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">Ivar
                                                                            Banega
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Operational</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success ">
                                                                    Online</div>
                                                            </td>
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        4 </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">03</td>
                                                            <td class="text-left hidden">Operational
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user-img2.jpg"
                                                                            class="img-bordered" style="height:36px">
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
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-grey btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        3.5</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">06</td>
                                                            <td class="text-left hidden">Service
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user.jpg" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">Luis
                                                                            Suarez
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Technical</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-danger ">
                                                                    Offline</div>
                                                            </td>
                                                            <td class="text-left"><i class="red-700 inline-block">
                                                                    Idle </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        4 </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07</td>
                                                            <td class="text-left hidden">Technical
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user-img3.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">Aurthr
                                                                            Vidal
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Operational</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success ">
                                                                    Online</div>
                                                            </td>
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-wgreyarning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-grey btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        4 </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">05</td>
                                                            <td class="text-left hidden">Operational
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user.jpg" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">John
                                                                            Dynamo
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Technical</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success ">
                                                                    Online</div>
                                                            </td>
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        2 </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">07</td>
                                                            <td class="text-left hidden">Technical
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 200px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/user-img3.jpg"
                                                                            class="img-bordered" style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="employee.php"
                                                                            class="font-weight-600">Neymar
                                                                            Jr.
                                                                        </a>
                                                                        <br>
                                                                        <i class="small">Technical</i>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                            <td class="text-left">
                                                                <div class="label label-success ">
                                                                    Online</div>
                                                            </td>
                                                            <td class="text-left"><i class="green-700 inline-block">
                                                                    On Field </i> </td>
                                                            <td class="text-left">
                                                                <div class="margin-bottom-0  stars small">
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-warning btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-default btn-grey btn-xs">
                                                                        <span class="glyphicon glyphicon-star"></span>
                                                                    </button>

                                                                    <span class="margin-left-10">
                                                                        4 </span>
                                                                </div>
                                                            </td>
                                                            <td class="text-left">04</td>
                                                            <td class="text-left hidden">Technical
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                            <nav>
                                                <ul class="pagination pagination-sm ">
                                                    <li class="pagination-prev disabled"><a
                                                            href="javascript:void(0)"><span
                                                                class="icon ion-android-arrow-back"></span></a></li>
                                                    <li class="pagination-items active" data-value="1"><a
                                                            href="javascript:void(0)">1</a></li>
                                                    <li class="pagination-items" data-value="2"><a
                                                            href="javascript:void(0)">2</a></li>
                                                    <li class="pagination-items" data-value="3"><a
                                                            href="javascript:void(0)">3</a></li>
                                                    <li class="pagination-items" data-value="4"><a
                                                            href="javascript:void(0)">4</a></li>
                                                    <li class="pagination-items" data-value="5"><a
                                                            href="javascript:void(0)">5</a></li>
                                                    <li class="pagination-next"><a href="javascript:void(0)"><span
                                                                class="icon ion-android-arrow-forward"></span></a></li>
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
    <?php include_once('_maptrail.php'); ?>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>