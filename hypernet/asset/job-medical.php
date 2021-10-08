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

        <div class="page-header page-header-bordered shadow">



            <div class="media">
                <div class="media-left">
                    <img src="images/hospital-icon.png" class="img-bordered padding-15" style="height:70px">
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
                                        MA Jinah Hospital</a>
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


                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#Summary"> Job Summary</a></li>
                                <li class=""><a data-toggle="tab" href="#Utilization">Utilization </a></li>
                                <li class=""><a data-toggle="tab" href="#Assets">Sensors </a></li>
                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>
                                <li class=""><a data-toggle="tab" href="#Violations">Violations </a></li>



                            </ul>

                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Summary">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-md-4">

                                                            <div class="widget shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-orange-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">
                                                                                Useage Hours
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-online.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">250</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="widget shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-blue-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">
                                                                                Violation Alerts

                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-offline.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">120
                                                                                Ltr</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="widget shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-green-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">
                                                                                Maintenances
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-maintenances.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">17</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-lg-6">

                                                    <div class="">
                                                        <div class="row no-space">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="no-space  margin-bottom-30   bg-teal-800 shadow card  widget shadow card padding-5">


                                                                    <div class="">
                                                                        <div class="slikslider text-center  "
                                                                            id="slikslider-live2">
                                                                            <div>
                                                                                <div class="white">
                                                                                    State
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        Online</div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="white">
                                                                                    Bettery
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        90%</div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="white">
                                                                                    Temperature
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        30 ℃</div>
                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                        <script>
                                                                            $('#slikslider-live2').slick({
                                                                                infinite: false,
                                                                                slidesToShow: 3,
                                                                                slidesToScroll: 1,
                                                                                arrows: true,
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






                                                                    <div
                                                                        class="label white  bg-teal-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                                                        <div style="position:relative; top:0;">
                                                                            <img src="images/loader-live.gif" alt="img"
                                                                                height="20"
                                                                                style="position:relative; top:0;">
                                                                            Online | Updated on: 07:00pm, Feb 08,18
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>



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
                                                                    MA Jinah Hospital
                                                                </div>
                                                                <div class="font-size-12   "> Current Location</div>


                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-3">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <figure class="">
                                                                    <img src="images/user-img2.jpg" class="img-bordered"
                                                                        style="height: 50px">
                                                                </figure>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="font-size-16  ">
                                                                    Kagiso Rabada
                                                                </div>
                                                                <div class="font-size-12   "> Manager</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-3">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <figure class="">
                                                                        <img src="images/icon-job-detail.png" class="img-bordered"
                                                                            style="height: 50px">
                                                                    </figure>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="font-size-20  font-weight-6001 blue-800">
                                                                        JOB0119
                                                                    </div>
                                                                    <div class="font-size-12  ">Job </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-8">


                                                    <h4>Useage Statistics</h4>

                                                    <div class="chartbox">
                                                        <div id="chart-hours"></div>
                                                        <script>
                                                            $(document).ready(function ($) {
                                                                (function () {
                                                                    var simple_line_chart = c3.generate({
                                                                        bindto: '#chart-hours',
                                                                        size: {
                                                                            height: 300,
                                                                        },
                                                                        legend: {
                                                                            show: true,
                                                                            position: 'bottom',
                                                                        },
                                                                        data: {

                                                                            columns: [
                                                                                ['Idle', 120, 140, 150, 120, 80, 90, 120, 140, 150, 120, 80, 90],
                                                                                ['Use', 80, 100, 80, 60, 80, 60, 99, 120, 144, 100, 60, 80],

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
                                                                                categories: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00']
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



                                                <div class="col-lg-4">

                                                    <div class="panel panel-dark margin-bottom-0">
                                                        <div class="panel-heading margin-bottom-0 ">
                                                            <h3 class="panel-title">Location</h3>
                                                            <div class="panel-actions">
                                                                <span data-toggle="tooltip"
                                                                    data-original-title="Full Screen">
                                                                    <a class="panel-action icon wb-expand"
                                                                        data-target="#mapfull" data-toggle="modal"></a>
                                                                </span>

                                                            </div>
                                                        </div>

                                                        <div class="panel-body padding-0">
                                                            <div class="mapbox   margin-bottom-0  ">
                                                                <iframe
                                                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                                    width="100%" height="250" frameborder="0"
                                                                    style="border:0" class="pull-left map"></iframe>



                                                            </div>
                                                        </div>
                                                    </div>









                                                    <div class="full-map inline-block">
                                                        <div class="modal fade modal-fill-in" id="mapfull"
                                                            tabindex="-1">
                                                            <div class="modal-dialog">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">
                                                                    <span>×</span>
                                                                </button>
                                                                <div class="mapbox   margin-bottom-0  ">




                                                                    <div class="mapfilters">

                                                                        <div class="fancy-collapse-panel">
                                                                            <div class="panel-group margin-bottom-0"
                                                                                id="accordion">
                                                                                <div
                                                                                    class="panel panel-bordered panel-primary">
                                                                                    <div class="panel-heading padding-0 margin-bottom-0"
                                                                                        role="tab" id="headingOne">
                                                                                        <h4
                                                                                            class="panel-title padding-10">
                                                                                            <a data-toggle="collapse"
                                                                                                data-parent="#accordion"
                                                                                                href="#collapseOne">Filters
                                                                                            </a>
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div id="collapseOne"
                                                                                        class="panel-collapse collapse in"
                                                                                        role="tabpanel">
                                                                                        <div
                                                                                            class="panel-body padding-0">
                                                                                            <ul class="list-group">
                                                                                                <li
                                                                                                    class="list-group-item padding-0 ">
                                                                                                    <div
                                                                                                        class="inline-block margin-right-20 ">
                                                                                                        <div
                                                                                                            class="checkbox-custom checkbox-primary ">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                id="qqq"
                                                                                                                name="" />
                                                                                                            <label
                                                                                                                for="qqq">Violations</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item padding-0 ">
                                                                                                    <div
                                                                                                        class="inline-block margin-right-20 ">
                                                                                                        <div
                                                                                                            class="checkbox-custom checkbox-primary ">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                id="qqq"
                                                                                                                name="" />
                                                                                                            <label
                                                                                                                for="qqq">Fillups</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="list-group-item padding-0 ">
                                                                                                    <div
                                                                                                        class="inline-block margin-right-20 ">
                                                                                                        <div
                                                                                                            class="checkbox-custom checkbox-primary ">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                id="qqq"
                                                                                                                name="" />
                                                                                                            <label
                                                                                                                for="qqq">
                                                                                                                Maintenances</label>
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

                                                                    <iframe
                                                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                                        width="100%" height="100%" frameborder="0"
                                                                        style="border:0" class="pull-left map"></iframe>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>




                                            <hr />

                                            <h4>Description</h4>
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                                below for those interested</p>




                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane " id="Utilization">

                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">

                                            <div class="row">
                                                <div class="col-lg-12  ">


                                                    <div class="">
                                                        <!-- <div class="margin-bottom-10 clearfix text-center">
                                                                    <div class="form-group1">
                                                                        <div class="inline-block">
                                                                            <select class="form-control input-sm">
                                                                                <option>2019</option>
                                                                                <option>2018 </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> -->

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
                                                            <!-- <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div> -->
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <div class="chartbox">
                                                                    <div id="chart-hhh" class="c3"
                                                                        style="max-height: 200px; position: relative;">
                                                                        <svg width="1246.4000244140625" height="200"
                                                                            style="overflow: hidden;">
                                                                            <defs>
                                                                                <clipPath id="c3-1553794429312-clip">
                                                                                    <rect width="1184.4000244140625"
                                                                                        height="136"></rect>
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="c3-1553794429312-clip-xaxis">
                                                                                    <rect x="-61" y="-20"
                                                                                        width="1276.4000244140625"
                                                                                        height="80"></rect>
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="c3-1553794429312-clip-yaxis">
                                                                                    <rect x="-59" y="-4" width="80"
                                                                                        height="160"></rect>
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="c3-1553794429312-clip-grid">
                                                                                    <rect width="1184.4000244140625"
                                                                                        height="136"></rect>
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="c3-1553794429312-clip-subchart">
                                                                                    <rect width="1184.4000244140625">
                                                                                    </rect>
                                                                                </clipPath>
                                                                            </defs>
                                                                            <g transform="translate(60.5,4.5)"><text
                                                                                    class="c3-text c3-empty"
                                                                                    text-anchor="middle"
                                                                                    dominant-baseline="middle"
                                                                                    x="592.2000122070312" y="68"
                                                                                    style="opacity: 0;"></text>
                                                                                <rect class="c3-zoom-rect"
                                                                                    width="1184.4000244140625"
                                                                                    height="136" style="opacity: 0;">
                                                                                </rect>
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip)"
                                                                                    class="c3-regions"
                                                                                    style="visibility: visible;"></g>
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-grid)"
                                                                                    class="c3-grid"
                                                                                    style="visibility: visible;">
                                                                                    <g class="c3-xgrids">
                                                                                        <line class="c3-xgrid" x1="100"
                                                                                            x2="100" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="199"
                                                                                            x2="199" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="298"
                                                                                            x2="298" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="397"
                                                                                            x2="397" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="495"
                                                                                            x2="495" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="594"
                                                                                            x2="594" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="693"
                                                                                            x2="693" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="791"
                                                                                            x2="791" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="890"
                                                                                            x2="890" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="989"
                                                                                            x2="989" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="1088"
                                                                                            x2="1088" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="1186"
                                                                                            x2="1186" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                        <line class="c3-xgrid" x1="1285"
                                                                                            x2="1285" y1="0" y2="136"
                                                                                            style="opacity: 1;"></line>
                                                                                    </g>
                                                                                    <g class="c3-ygrids">
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="136" y2="136">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="124" y2="124">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="111" y2="111">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="99" y2="99">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="86" y2="86">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="74" y2="74">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="61" y2="61">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="49" y2="49">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="36" y2="36">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="24" y2="24">
                                                                                        </line>
                                                                                        <line class="c3-ygrid" x1="0"
                                                                                            x2="1185" y1="11" y2="11">
                                                                                        </line>
                                                                                    </g>
                                                                                    <g class="c3-xgrid-focus">
                                                                                        <line class="c3-xgrid-focus"
                                                                                            x1="149" x2="149" y1="0"
                                                                                            y2="136"
                                                                                            style="visibility: hidden;">
                                                                                        </line>
                                                                                    </g>
                                                                                </g>
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip)"
                                                                                    class="c3-chart">
                                                                                    <g class="c3-event-rects c3-event-rects-single"
                                                                                        style="fill-opacity: 0;">
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-0"
                                                                                            x="0" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-1"
                                                                                            x="99" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-2"
                                                                                            x="198" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-3"
                                                                                            x="297" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-4"
                                                                                            x="395" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-5"
                                                                                            x="494" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-6"
                                                                                            x="593" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-7"
                                                                                            x="691" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-8"
                                                                                            x="790" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-9"
                                                                                            x="889" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-10"
                                                                                            x="988" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                        <rect
                                                                                            class=" c3-event-rect c3-event-rect-11"
                                                                                            x="1086" y="0" width="100"
                                                                                            height="136"></rect>
                                                                                    </g>
                                                                                    <g class="c3-chart-bars">
                                                                                        <g class="c3-chart-bar c3-target c3-target-Working"
                                                                                            style="pointer-events: none;">
                                                                                            <g class=" c3-shapes c3-shapes-Working c3-bars c3-bars-Working"
                                                                                                style="cursor: pointer;">
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                                                                    d="M 40,108.44897959183675 L40,53.346938775510225 L60,53.346938775510225 L60,108.44897959183675 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                                                                    d="M 139,115.96289424860855 L139,68.37476808905382 L159,68.37476808905382 L159,115.96289424860855 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                                                                    d="M 238,88.41187384044525 L238,55.851576994434126 L258,55.851576994434126 L258,88.41187384044525 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                                                                    d="M 337,95.92578849721706 L337,70.87940630797772 L357,70.87940630797772 L357,95.92578849721706 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                                                                    d="M 435,125.98144712430428 L435,90.9165120593692 L455,90.9165120593692 L455,125.98144712430428 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                                                                    d="M 534,100.93506493506493 L534,68.3747680890538 L554,68.3747680890538 L554,100.93506493506493 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-6 c3-bar c3-bar-6"
                                                                                                    d="M 633,68.37476808905382 L633,13.272727272727295 L653,13.272727272727295 L653,68.37476808905382 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-7 c3-bar c3-bar-7"
                                                                                                    d="M 731,110.95361781076068 L731,63.36549165120594 L751,63.36549165120594 L751,110.95361781076068 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-8 c3-bar c3-bar-8"
                                                                                                    d="M 830,93.42115027829311 L830,60.860853432281985 L850,60.860853432281985 L850,93.42115027829311 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-9 c3-bar c3-bar-9"
                                                                                                    d="M 929,93.42115027829314 L929,43.328385899814464 L949,43.328385899814464 L949,93.42115027829314 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-10 c3-bar c3-bar-10"
                                                                                                    d="M 1028,123.47680890538035 L1028,88.41187384044527 L1048,88.41187384044527 L1048,123.47680890538035 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-11 c3-bar c3-bar-11"
                                                                                                    d="M 1126,118.46753246753246 L1126,68.37476808905379 L1146,68.37476808905379 L1146,118.46753246753246 z"
                                                                                                    style="stroke: rgb(31, 119, 180); fill: rgb(31, 119, 180); opacity: 1;">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-bar c3-target c3-target-Idle"
                                                                                            style="pointer-events: none;">
                                                                                            <g class=" c3-shapes c3-shapes-Idle c3-bars c3-bars-Idle"
                                                                                                style="cursor: pointer;">
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                                                                    d="M 40,115.96289424860854 L40,108.44897959183675 L60,108.44897959183675 L60,115.96289424860854 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                                                                    d="M 139,120.97217068645641 L139,115.96289424860855 L159,115.96289424860855 L159,120.97217068645641 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                                                                    d="M 238,105.94434137291279 L238,88.41187384044525 L258,88.41187384044525 L258,105.94434137291279 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                                                                    d="M 337,108.44897959183673 L337,95.92578849721706 L357,95.92578849721706 L357,108.44897959183673 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                                                                    d="M 435,128.4860853432282 L435,125.98144712430428 L455,125.98144712430428 L455,128.4860853432282 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                                                                    d="M 534,118.46753246753246 L534,100.93506493506493 L554,100.93506493506493 L554,118.46753246753246 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-6 c3-bar c3-bar-6"
                                                                                                    d="M 633,98.43042671614101 L633,68.37476808905382 L653,68.37476808905382 L653,98.43042671614101 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-7 c3-bar c3-bar-7"
                                                                                                    d="M 731,120.97217068645641 L731,110.95361781076068 L751,110.95361781076068 L751,120.97217068645641 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-8 c3-bar c3-bar-8"
                                                                                                    d="M 830,105.94434137291279 L830,93.42115027829311 L850,93.42115027829311 L850,105.94434137291279 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-9 c3-bar c3-bar-9"
                                                                                                    d="M 929,108.44897959183673 L929,93.42115027829314 L949,93.42115027829314 L949,108.44897959183673 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-10 c3-bar c3-bar-10"
                                                                                                    d="M 1028,128.4860853432282 L1028,123.47680890538035 L1048,123.47680890538035 L1048,128.4860853432282 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-11 c3-bar c3-bar-11"
                                                                                                    d="M 1126,118.46753246753246 L1126,118.46753246753246 L1146,118.46753246753246 L1146,118.46753246753246 z"
                                                                                                    style="stroke: rgb(255, 127, 14); fill: rgb(255, 127, 14); opacity: 1;">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-bar c3-target c3-target-Standby"
                                                                                            style="pointer-events: none;">
                                                                                            <g class=" c3-shapes c3-shapes-Standby c3-bars c3-bars-Standby"
                                                                                                style="cursor: pointer;">
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                                                                    d="M 40,136 L40,123.47680890538032 L60,123.47680890538032 L60,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                                                                    d="M 139,136 L139,125.98144712430427 L159,125.98144712430427 L159,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                                                                    d="M 238,136 L238,123.47680890538032 L258,123.47680890538032 L258,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                                                                    d="M 337,136 L337,120.97217068645641 L357,120.97217068645641 L357,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                                                                    d="M 435,136 L435,130.99072356215214 L455,130.99072356215214 L455,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                                                                    d="M 534,136 L534,136 L554,136 L554,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-6 c3-bar c3-bar-6"
                                                                                                    d="M 633,136 L633,128.4860853432282 L653,128.4860853432282 L653,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-7 c3-bar c3-bar-7"
                                                                                                    d="M 731,136 L731,130.99072356215214 L751,130.99072356215214 L751,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-8 c3-bar c3-bar-8"
                                                                                                    d="M 830,136 L830,118.46753246753246 L850,118.46753246753246 L850,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-9 c3-bar c3-bar-9"
                                                                                                    d="M 929,136 L929,123.47680890538032 L949,123.47680890538032 L949,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-10 c3-bar c3-bar-10"
                                                                                                    d="M 1028,136 L1028,133.49536178107607 L1048,133.49536178107607 L1048,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-11 c3-bar c3-bar-11"
                                                                                                    d="M 1126,136 L1126,118.46753246753246 L1146,118.46753246753246 L1146,136 z"
                                                                                                    style="stroke: rgb(44, 160, 44); fill: rgb(44, 160, 44); opacity: 1;">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-bar c3-target c3-target-Maintenance"
                                                                                            style="pointer-events: none;">
                                                                                            <g class=" c3-shapes c3-shapes-Maintenance c3-bars c3-bars-Maintenance"
                                                                                                style="cursor: pointer;">
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-0 c3-bar c3-bar-0"
                                                                                                    d="M 40,123.47680890538032 L40,115.96289424860854 L60,115.96289424860854 L60,123.47680890538032 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-1 c3-bar c3-bar-1"
                                                                                                    d="M 139,125.98144712430427 L139,120.97217068645641 L159,120.97217068645641 L159,125.98144712430427 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-2 c3-bar c3-bar-2"
                                                                                                    d="M 238,123.47680890538032 L238,105.94434137291279 L258,105.94434137291279 L258,123.47680890538032 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-3 c3-bar c3-bar-3"
                                                                                                    d="M 337,120.97217068645641 L337,108.44897959183673 L357,108.44897959183673 L357,120.97217068645641 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-4 c3-bar c3-bar-4"
                                                                                                    d="M 435,130.99072356215214 L435,128.4860853432282 L455,128.4860853432282 L455,130.99072356215214 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-5 c3-bar c3-bar-5"
                                                                                                    d="M 534,136 L534,118.46753246753246 L554,118.46753246753246 L554,136 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-6 c3-bar c3-bar-6"
                                                                                                    d="M 633,128.4860853432282 L633,98.43042671614101 L653,98.43042671614101 L653,128.4860853432282 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-7 c3-bar c3-bar-7"
                                                                                                    d="M 731,130.99072356215214 L731,120.97217068645641 L751,120.97217068645641 L751,130.99072356215214 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-8 c3-bar c3-bar-8"
                                                                                                    d="M 830,118.46753246753246 L830,105.94434137291279 L850,105.94434137291279 L850,118.46753246753246 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-9 c3-bar c3-bar-9"
                                                                                                    d="M 929,123.47680890538032 L929,108.44897959183673 L949,108.44897959183673 L949,123.47680890538032 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-10 c3-bar c3-bar-10"
                                                                                                    d="M 1028,133.49536178107607 L1028,128.4860853432282 L1048,128.4860853432282 L1048,133.49536178107607 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                                <path
                                                                                                    class="c3-shape c3-shape-11 c3-bar c3-bar-11"
                                                                                                    d="M 1126,118.46753246753246 L1126,118.46753246753246 L1146,118.46753246753246 L1146,118.46753246753246 z"
                                                                                                    style="stroke: rgb(214, 39, 40); fill: rgb(214, 39, 40); opacity: 1;">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                    <g class="c3-chart-lines">
                                                                                        <g class="c3-chart-line c3-target c3-target-Working"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Working c3-lines c3-lines-Working">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Working c3-areas c3-areas-Working">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-selected-circles c3-selected-circles-Working">
                                                                                            </g>
                                                                                            <g class=" c3-shapes c3-shapes-Working c3-circles c3-circles-Working"
                                                                                                style="cursor: pointer;">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-line c3-target c3-target-Idle"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Idle c3-lines c3-lines-Idle">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Idle c3-areas c3-areas-Idle">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-selected-circles c3-selected-circles-Idle">
                                                                                            </g>
                                                                                            <g class=" c3-shapes c3-shapes-Idle c3-circles c3-circles-Idle"
                                                                                                style="cursor: pointer;">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-line c3-target c3-target-Standby"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Standby c3-lines c3-lines-Standby">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Standby c3-areas c3-areas-Standby">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-selected-circles c3-selected-circles-Standby">
                                                                                            </g>
                                                                                            <g class=" c3-shapes c3-shapes-Standby c3-circles c3-circles-Standby"
                                                                                                style="cursor: pointer;">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-line c3-target c3-target-Maintenance"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Maintenance c3-lines c3-lines-Maintenance">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-shapes c3-shapes-Maintenance c3-areas c3-areas-Maintenance">
                                                                                            </g>
                                                                                            <g
                                                                                                class=" c3-selected-circles c3-selected-circles-Maintenance">
                                                                                            </g>
                                                                                            <g class=" c3-shapes c3-shapes-Maintenance c3-circles c3-circles-Maintenance"
                                                                                                style="cursor: pointer;">
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                    <g class="c3-chart-arcs"
                                                                                        transform="translate(592.2000122070312,63)">
                                                                                        <text
                                                                                            class="c3-chart-arcs-title"
                                                                                            style="text-anchor: middle; opacity: 0;"></text>
                                                                                    </g>
                                                                                    <g class="c3-chart-texts">
                                                                                        <g class="c3-chart-text c3-target c3-target-Working"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-texts c3-texts-Working">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-text c3-target c3-target-Idle"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-texts c3-texts-Idle">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-text c3-target c3-target-Standby"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-texts c3-texts-Standby">
                                                                                            </g>
                                                                                        </g>
                                                                                        <g class="c3-chart-text c3-target c3-target-Maintenance"
                                                                                            style="opacity: 1; pointer-events: none;">
                                                                                            <g
                                                                                                class=" c3-texts c3-texts-Maintenance">
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-grid)"
                                                                                    class="c3-grid c3-grid-lines">
                                                                                    <g class="c3-xgrid-lines"></g>
                                                                                    <g class="c3-ygrid-lines"></g>
                                                                                </g>
                                                                                <g class="c3-axis c3-axis-x"
                                                                                    clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-xaxis)"
                                                                                    transform="translate(0,136)"
                                                                                    style="visibility: visible; opacity: 1;">
                                                                                    <text class="c3-axis-x-label"
                                                                                        transform=""
                                                                                        x="592.2000122070312" dx="0"
                                                                                        dy="3em"
                                                                                        style="text-anchor: middle;"></text>
                                                                                    <g class="tick"
                                                                                        transform="translate(50, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Jan</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(149, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Feb</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(248, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Mar</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(347, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Apr</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(445, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">May</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(544, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Jun</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(643, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">July</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(741, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Aug</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(840, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Sep</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(939, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Oct</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(1038, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Nov</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(1136, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="0">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Dec</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <path class="domain"
                                                                                        d="M0,6V0H1184.4000244140625V6">
                                                                                    </path>
                                                                                </g>
                                                                                <g class="c3-axis c3-axis-y"
                                                                                    clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-yaxis)"
                                                                                    transform="translate(0,0)"
                                                                                    style="visibility: visible; opacity: 1;">
                                                                                    <text class="c3-axis-y-label"
                                                                                        transform="rotate(-90)" x="-68"
                                                                                        dx="0" dy="-31.15625"
                                                                                        style="text-anchor: middle;">Numbers
                                                                                        of Days </text>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,136)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">0
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,124)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">5
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,111)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">10
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,99)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">15
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,86)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">20
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,74)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">25
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,61)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">30
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,49)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">35
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,36)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">40
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,24)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">45
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,11)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="-6"></line><text
                                                                                            x="-9" y="0"
                                                                                            style="text-anchor: end;">
                                                                                            <tspan x="-9" dy="3">50
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <path class="domain"
                                                                                        d="M-6,1H0V136H-6"></path>
                                                                                </g>
                                                                                <g class="c3-axis c3-axis-y2"
                                                                                    transform="translate(1184.4000244140625,0)"
                                                                                    style="visibility: hidden; opacity: 1;">
                                                                                    <text class="c3-axis-y2-label"
                                                                                        transform="rotate(-90)" x="0"
                                                                                        dx="-0.5em" dy="-0.5em"
                                                                                        style="text-anchor: end;"></text>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,136)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,123)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.1
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,110)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.2
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,96)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.3
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,82)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.4
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,69)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.5
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,56)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.6
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,42)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.7
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,28)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.8
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,15)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">0.9
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(0,1)"
                                                                                        style="opacity: 1;">
                                                                                        <line x2="6" y2="0"></line><text
                                                                                            x="9" y="0"
                                                                                            style="text-anchor: start;">
                                                                                            <tspan x="9" dy="3">1
                                                                                            </tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <path class="domain"
                                                                                        d="M6,1H0V136H6"></path>
                                                                                </g>
                                                                            </g>
                                                                            <g transform="translate(40.5,200.5)"
                                                                                style="visibility: hidden;">
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-subchart)"
                                                                                    class="c3-chart">
                                                                                    <g class="c3-chart-bars"></g>
                                                                                    <g class="c3-chart-lines"></g>
                                                                                </g>
                                                                                <g clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip)"
                                                                                    class="c3-brush"
                                                                                    style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                                                    <rect class="background" x="0"
                                                                                        width="1164.4000244140625"
                                                                                        style="visibility: hidden; cursor: crosshair;">
                                                                                    </rect>
                                                                                    <rect class="extent" x="0" width="0"
                                                                                        style="cursor: move;"></rect>
                                                                                    <g class="resize e"
                                                                                        transform="translate(0,0)"
                                                                                        style="cursor: ew-resize; display: none;">
                                                                                        <rect x="-3" width="6"
                                                                                            height="6"
                                                                                            style="visibility: hidden;">
                                                                                        </rect>
                                                                                    </g>
                                                                                    <g class="resize w"
                                                                                        transform="translate(0,0)"
                                                                                        style="cursor: ew-resize; display: none;">
                                                                                        <rect x="-3" width="6"
                                                                                            height="6"
                                                                                            style="visibility: hidden;">
                                                                                        </rect>
                                                                                    </g>
                                                                                </g>
                                                                                <g class="c3-axis-x"
                                                                                    transform="translate(0,0)"
                                                                                    clip-path="url(http://localhost/hpv5/waste-management/fleet.php#c3-1553794429312-clip-xaxis)"
                                                                                    style="visibility: hidden; opacity: 1;">
                                                                                    <g class="tick"
                                                                                        transform="translate(50, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Jan</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(149, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Feb</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(248, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Mar</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(347, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Apr</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(445, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">May</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(544, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Jun</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(643, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">July</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(741, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Aug</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(840, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Sep</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(939, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Oct</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(1038, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="6">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Nov</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <g class="tick"
                                                                                        transform="translate(1136, 0)"
                                                                                        style="opacity: 1;">
                                                                                        <line x1="50" x2="50" y2="0">
                                                                                        </line><text x="0" y="9"
                                                                                            transform=""
                                                                                            style="text-anchor: middle; display: block;">
                                                                                            <tspan x="0" dy=".71em"
                                                                                                dx="0">Dec</tspan>
                                                                                        </text>
                                                                                    </g>
                                                                                    <path class="domain"
                                                                                        d="M0,6V0H1184.4000244140625V6">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                            <g transform="translate(0,180)">
                                                                                <g class="c3-legend-item c3-legend-item-Working"
                                                                                    style="visibility: visible; cursor: pointer;">
                                                                                    <text x="503.15313720703125" y="9"
                                                                                        style="pointer-events: none;">Working</text>
                                                                                    <rect class="c3-legend-item-event"
                                                                                        x="489.15313720703125" y="-5"
                                                                                        width="69.578125"
                                                                                        height="17.59375"
                                                                                        style="fill-opacity: 0;"></rect>
                                                                                    <line class="c3-legend-item-tile"
                                                                                        x1="487.15313720703125" y1="4"
                                                                                        x2="497.15313720703125" y2="4"
                                                                                        stroke-width="10"
                                                                                        style="stroke: rgb(31, 119, 180); pointer-events: none;">
                                                                                    </line>
                                                                                </g>
                                                                                <g class="c3-legend-item c3-legend-item-Idle"
                                                                                    style="visibility: visible; cursor: pointer;">
                                                                                    <text x="572.7312622070312" y="9"
                                                                                        style="pointer-events: none;">Idle</text>
                                                                                    <rect class="c3-legend-item-event"
                                                                                        x="558.7312622070312" y="-5"
                                                                                        width="44.859375"
                                                                                        height="17.59375"
                                                                                        style="fill-opacity: 0;"></rect>
                                                                                    <line class="c3-legend-item-tile"
                                                                                        x1="556.7312622070312" y1="4"
                                                                                        x2="566.7312622070312" y2="4"
                                                                                        stroke-width="10"
                                                                                        style="stroke: rgb(255, 127, 14); pointer-events: none;">
                                                                                    </line>
                                                                                </g>
                                                                                <g class="c3-legend-item c3-legend-item-Standby"
                                                                                    style="visibility: visible; cursor: pointer;">
                                                                                    <text x="617.5906372070312" y="9"
                                                                                        style="pointer-events: none;">Standby</text>
                                                                                    <rect class="c3-legend-item-event"
                                                                                        x="603.5906372070312" y="-5"
                                                                                        width="69.421875"
                                                                                        height="17.59375"
                                                                                        style="fill-opacity: 0;"></rect>
                                                                                    <line class="c3-legend-item-tile"
                                                                                        x1="601.5906372070312" y1="4"
                                                                                        x2="611.5906372070312" y2="4"
                                                                                        stroke-width="10"
                                                                                        style="stroke: rgb(44, 160, 44); pointer-events: none;">
                                                                                    </line>
                                                                                </g>
                                                                                <g class="c3-legend-item c3-legend-item-Maintenance"
                                                                                    style="visibility: visible; cursor: pointer;">
                                                                                    <text x="687.0125122070312" y="9"
                                                                                        style="pointer-events: none;">Maintenance</text>
                                                                                    <rect class="c3-legend-item-event"
                                                                                        x="673.0125122070312" y="-5"
                                                                                        width="84.234375"
                                                                                        height="17.59375"
                                                                                        style="fill-opacity: 0;"></rect>
                                                                                    <line class="c3-legend-item-tile"
                                                                                        x1="671.0125122070312" y1="4"
                                                                                        x2="681.0125122070312" y2="4"
                                                                                        stroke-width="10"
                                                                                        style="stroke: rgb(214, 39, 40); pointer-events: none;">
                                                                                    </line>
                                                                                </g>
                                                                            </g><text class="c3-title"
                                                                                x="623.2000122070312" y="0"></text>
                                                                        </svg>
                                                                        <div class="c3-tooltip-container"
                                                                            style="position: absolute; pointer-events: none; display: none; top: 0px; left: 229.5px;">
                                                                            <table class="c3-tooltip">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th colspan="2">Feb</th>
                                                                                    </tr>
                                                                                    <tr
                                                                                        class="c3-tooltip-name--Working">
                                                                                        <td class="name"><span
                                                                                                style="background-color:#1f77b4"></span>Working
                                                                                        </td>
                                                                                        <td class="value">19</td>
                                                                                    </tr>
                                                                                    <tr class="c3-tooltip-name--Idle">
                                                                                        <td class="name"><span
                                                                                                style="background-color:#ff7f0e"></span>Idle
                                                                                        </td>
                                                                                        <td class="value">2</td>
                                                                                    </tr>
                                                                                    <tr
                                                                                        class="c3-tooltip-name--Maintenance">
                                                                                        <td class="name"><span
                                                                                                style="background-color:#d62728"></span>Maintenance
                                                                                        </td>
                                                                                        <td class="value">2</td>
                                                                                    </tr>
                                                                                    <tr
                                                                                        class="c3-tooltip-name--Standby">
                                                                                        <td class="name"><span
                                                                                                style="background-color:#2ca02c"></span>Standby
                                                                                        </td>
                                                                                        <td class="value">4</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $(document).ready(function ($) {
                                                                            (function () {
                                                                                var simple_line_chart = c3.generate({
                                                                                    bindto: '#chart-hhh',
                                                                                    size: {
                                                                                        height: 200,
                                                                                    },
                                                                                    legend: {
                                                                                        show: true,
                                                                                        position: 'bottom',
                                                                                    },



                                                                                    data: {
                                                                                        columns: [
                                                                                            ['Working', 22, 19, 13, 10, 14, 13, 22, 19, 13, 20, 14, 20],
                                                                                            ['Idle', 3, 2, 7, 5, 1, 7, 12, 4, 5, 6, 2, 0],
                                                                                            ['Standby', 5, 4, 5, 6, 2, 0, 3, 2, 7, 5, 1, 7],
                                                                                            ['Maintenance', 3, 2, 7, 5, 1, 7, 12, 4, 5, 6, 2, 0],

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
                                                                                            ['Working', 'Idle', 'Standby', 'Maintenance']
                                                                                        ]
                                                                                    },
                                                                                    color: {
                                                                                        // pattern: ['#ec9940', '#4e97d9 ', '#e9595b ', '#269b8f ']
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
                                                                                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                                                                        },
                                                                                        y: {
                                                                                            label: {

                                                                                                text: 'Numbers of Days ',
                                                                                                position: 'outer-middle'
                                                                                            },
                                                                                        },
                                                                                    },
                                                                                    bar: {
                                                                                        width: {
                                                                                            ratio: 0.2
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

                                            <hr>

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- <h4>Activities</h4> -->
                                                    <div class="vscroll bg-white" style="max-height:280px;">
                                                        <table
                                                            class="table table-striped table-condensed  table-bordered   margin-bottom-0">
                                                            <thead>
                                                                <tr class="">
                                                                    <th class="text-left">Project </th>

                                                                    <th class="text-left">Status</th>
                                                                    <th class="text-left">Job</th>

                                                                    <th class="text-left">Start </th>
                                                                    <th class="text-left">End </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> LUSAIL
                                                                            PALACE</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-info ">
                                                                            Inprogress
                                                                        </div>
                                                                    </td>


                                                                    <td>
                                                                        <a href="job-medical.php">JOB189</a>
                                                                    </td>
                                                                    <td>
                                                                        Aug 03,2018 06:31:28 am
                                                                    </td>
                                                                    <td>
                                                                        -
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> Aggregate
                                                                            RAA
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB222</a>
                                                                    </td>

                                                                    <td>
                                                                        July 13,2018 02:21:41 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> Tekfen
                                                                            Khasab
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB981</a>
                                                                    </td>

                                                                    <td>
                                                                        Jan 11,2018 08:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Jan 18,2018 09:12:21 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> HALUL
                                                                            PROJECT -
                                                                            AR 3-6T </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB478</a>
                                                                    </td>

                                                                    <td>
                                                                        Feb 24,2018 11:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> LUSAIL
                                                                            PALACE -
                                                                            EASTERN VIEW</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <a href="job.php">JOB789</a>
                                                                    </td>
                                                                    <td>
                                                                        Aug 03,2018 06:31:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> Aggregate
                                                                            RAA
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB562</a>
                                                                    </td>

                                                                    <td>
                                                                        July 13,2018 02:21:41 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> Tekfen
                                                                            Khasab
                                                                        </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB111</a>
                                                                    </td>

                                                                    <td>
                                                                        Jan 11,2018 08:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Jan 18,2018 09:12:21 am
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>

                                                                        <a href=""> HALUL
                                                                            PROJECT -
                                                                            AR 3-6T </a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="job.php">JOB478</a>
                                                                    </td>

                                                                    <td>
                                                                        Feb 24,2018 11:37:28 am
                                                                    </td>
                                                                    <td>
                                                                        Aug 08,2018 01:21:53 am
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
                                                                        <i class="ion-checkmark"></i> </span> Enabled
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
                                                                        <i class="ion-checkmark"></i> </span> Enabled
                                                                </td>

                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>



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

                                                </div>
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
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
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
                                                        <th class="text-left">Location</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td width="150">
                                                            Volume
                                                        </td>
                                                        <td> 55.000 </td>
                                                        <td>78.268</td>
                                                        <td> 09:32 AM, 22 Jan,2018</td>
                                                        <td> Lancaster </td>
                                                    </tr>

                                                    <tr class="">
                                                        <td>
                                                            Geo
                                                        </td>

                                                        <td> 11 </td>
                                                        <td> 34 </td>
                                                        <td> 07:29 AM, 19 Jan,2018</td>
                                                        <td> Leicester </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>
                                                            Temperature
                                                        </td>

                                                        <td> 36 °C </td>
                                                        <td> 43 °C </td>
                                                        <td> 01:32 AM, 29 Jan,2018</td>
                                                        <td> Wales </td>
                                                    </tr>



                                                </tbody>
                                            </table>
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

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  margin-bottom-0  table-condensed table-bordered" id="">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Name</th>
                                                        <th class="text-left">Status </th>
                                                        <th class="text-left">Types </th>

                                                        <th class="text-left">Time/Date</th>
                                                        <th class="text-left">Competed Time/Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">

                                                        <td>Battery Changed</td>
                                                        <td>
                                                            <div class="label label-success "> Completed</div>
                                                        </td>
                                                        <td>Monthly</td>

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

    <?php include_once('_maptrail.php'); ?>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>