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


            <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                <div class="media-left">
                    <img src="images/water-dispensor1.png" alt="img" style="height:170px;" class="img-bordered ">
                </div>
                <div class="media-body">

                    <h2 class="margin-top-0 font-size-20 font-weight-500 margin-bottom-15 text-uppercase">
                       HC-33
                        <div class="pull-right">
                            <a href=" " onclick="window.history.go(-1); return false;"
                                class=" btn btn-sm   btn-default btn-round">
                                Back
                            </a>

                        </div>
                    </h2>

                    <hr class="margin-0 margin-bottom-15" />

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="table-responsive1">
                                <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        <tr>
                                            <th width="100"> <b>  Status </b> </th>
                                            <td class="text-left text-break">
                                                Active
                                            </td>
                                        </tr>

                                        <tr>
                                            <th width=""> <b>Device ID#</b> </th>
                                            <td class="text-left">WD-102</td>
                                        </tr>

                                        <tr>
                                            <th> <b> Make </b> </th>
                                            <td class="text-left text-break">
                                                Dawlance
                                            </td>
                                        </tr>
                                        <tr>
                                            <th> <b> Model</b> </th>
                                            <td class="text-left text-break">
                                                HC-33
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="table-responsive1">
                                <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        
                                        
                                       

                                        <tr>
                                            <th> <b>Energy </b> </th>
                                            <td class="text-left text-break">
                                                1800 Watt
                                            </td>
                                        </tr>
                                        <tr>
                                                <th> <b> Weight </b> </th>
                                                <td class="text-left text-break">
                                                     11.8 KG
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b> Heated Up Temperature </b> </th>
                                                <td class="text-left text-break">
                                                     75C - 35C
                                                </td>
                                            </tr>
                                            <tr>
                                                <th> <b> Gallons </b> </th>
                                                <td class="text-left text-break">
                                                     1
                                                </td>
                                            </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>






                </div>


            </div>












            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light " style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Summary"> Job Summary</a></li>
                                <li class=""><a data-toggle="tab" href="#Utilization">Utilization </a></li>
                                <li class=""><a data-toggle="tab" href="#Assets">Sensors </a></li>
                                <li class=""><a data-toggle="tab" href="#Maintenances">Maintenances </a></li>
                                <li class=""><a data-toggle="tab" href="#Errors">Errors </a></li>
                                
                               

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
                                                        <div class="col-md-6">

                                                            <div class="widget shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-orange-800  text-center relative ">
                                                                    <div class="white">
                                                                        <div class="margin-bottom-10   ">
                                                                            <div class="font-size-12 ">
                                                                                Usage Hours
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div class=" margin-right-15 inline">
                                                                                <i> <img src="images/icon-online.png"
                                                                                        alt="img" height="30">
                                                                                </i>
                                                                            </div>
                                                                            <b class="font-size-14"
                                                                                style="position:relative; top:5px;">200
                                                                                </b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="widget shadow card ">
                                                                <div
                                                                    class=" padding-10 bg-blue-800  text-center relative ">
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
                                                                                style="position:relative; top:5px;">12</b>
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
                                                                                    Current Temperature
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        10℃</div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="white">
                                                                                    User Set Temperature
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        2℃</div>
                                                                                </div>
                                                                            </div>
																			<div>
                                                                                <div class="white">
                                                                                     Energy
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        o.2 KWH</div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="white">
                                                                                    Recent Error
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        A188</div>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <div class="white">
                                                                                    Last Update
                                                                                    <div
                                                                                        class="font-size-14 font-weight-600">
                                                                                        07:01pm, Feb 08,2018</div>
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
                                                                    <img src="images/icon-location.png"
                                                                        class="img-bordered" style="height: 50px">
                                                                </figure>
                                                            </div>
															<div class="media-body">
                                                                <div class="font-size-16  ">
                                                                     Grand  Park Lane
                                                                </div>
                                                                <div class="font-size-12  "> Current Location</div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-3">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <figure class="">
                                                                    <img src="images/water-dispensor1.png"
                                                                        class="img-bordered" style="height: 50px">
                                                                </figure>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="font-size-16  ">
                                                                    HC-33
                                                                </div>
                                                                <div class="font-size-12  "> Assigned Water Dispenser</div>
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
                                                                    John Smith
                                                                </div>
                                                                <div class="font-size-12   "> Assigned to</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>



                                            <div class="row">

                                                <div class="col-lg-4">

                                                    <div class="panel panel-dark margin-bottom-0">
                                                        <div class="panel-heading margin-bottom-0">
                                                            <h3 class="panel-title">Details</h3>
                                                        </div>

                                                        <div class="vscroll" style="height: 250px;">
                                                            <table
                                                                class="table table-hover table-striped margin-bottom-0">
                                                                <tbody>



                                                                   
                                                                    <tr>
                                                                        <th> <b> Water Level </b> </th>
                                                                        <td class="text-left text-break">
                                                                            <div> 8 Liters </div>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
																	
                                                                    <tr>
                                                                        <th> <b> Energy Consume </b> </th>
                                                                        <td class="text-left text-break">
                                                                            19 Watt
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th> <b> Water Temprature </b> </th>
                                                                        <td class="text-left text-break">
                                                                            4℃
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th> <b> Active Hours </b> </th>
                                                                        <td class="text-left text-break">
                                                                           3 hours
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                               

                                                <div class="col-lg-8">

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
                                                                                                                Blade servers</label>
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
                                            <p>Scalable servers for flexible growth
                                               Hardware that can flex to support your operations</p>

                                            <hr />
                                            <h4>Utilization </h4>
                                            <div class="row">

                                                <div class="col-lg-12">




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
                                                                                ['Max-Utilization', 67, 24, 47, 30, 86, 78, 66, 79, 45, 26, 46, 65],
                                                                                ['Min-Utilization', 56, 24, 40, 27, 80, 65, 55, 79, 40, 21, 39, 59],

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

                                                                                    text: 'Usage [%] ',
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


                                            
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Utilization">

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
                                                                    <option>All Project</option>
                                                                    <option>PRO-101 </option>
                                                                    <option>PRO-532</option>
                                                                    <option>PRO-322</option>
                                                                    <option>PRO-233 </option>
                                                                    <option>PRO-224</option>
                                                                    <option>PRO-178</option>
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

                                                                <div class="chartbox" class="">
                                                                    <div id="chart-hhh"></div>
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

                                            <hr />

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- <h4>Activities</h4> -->
                                                    <div class="vscroll bg-white" style="max-height:280px;">
                                                        <table
                                                            class="table table-striped table-condensed  table-bordered   margin-bottom-0">
                                                            <thead>
                                                                <tr class="">
																<th class="text-left">Project</th>
                                                                    <th class="text-left">Status</th>
                                                                    <th class="text-left">Start </th>
                                                                    <th class="text-left">End </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="">PRO-101</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-info ">
                                                                            Inprogress
                                                                        </div>
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
                                                                        <a href="">PRO-232</a>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-241</a>
                                                                    </td>
                                                                    
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-152</a>
                                                                    </td> 
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-231</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-212</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-251</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                        <a href="">PRO-125</a>
                                                                    </td> 
                                                                    <td>
                                                                        <div class="label label-success ">
                                                                            Completed
                                                                        </div>
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
                                                                    <option>All Project</option>
                                                                    <option>PRO-101 </option>
                                                                    <option>PRO-532</option>
                                                                    <option>PRO-322</option>
                                                                    <option>PRO-233 </option>
                                                                    <option>PRO-224</option>
                                                                    <option>PRO-178</option>
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
                                                        <th class="text-left">Types </th>
                                                        <th class="text-left">Status </th>


                                                        <th class="text-left">Time/Date</th>
                                                        <th class="text-left">Competed Time/Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">

                                                        <td>Fuse change</td>
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

                                                        <td>Wire</td>
                                                        <td>Haphazard </td>
                                                        <td>
                                                            <div class="label label-info "> Scheduled</div>
                                                        </td>

                                                        <td>13-Feb-2019, 11:21am</td>
                                                        <td>-</td>


                                                    </tr>
                                                   
                                                    

                                                    

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Errors">
                                <div class="panel panel-default nav-tabs-horizontal shadow">
                <div class="panel-heading font-weight-600">
                  <ul class="nav nav-tabs nav-tabs-line  " data-plugin="nav-tabs" role="tablist">
                    
                    <li class=""><a data-toggle="tab" href="#cccc" role="tab" class=" ">Error Logs</a></li>

                  </ul>

                </div>

                <div class="panel-body" >
                  
                    <div class="tab-pane " id="cccc" role="tabpanel">
                      <div class=" ">

                        <div class="">
                          <div class="vscroll bg-white" style="max-height:260px;">
                            <table class="table table-striped margin-bottom-0  ">
                              <tbody>
                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td width="120" class="text-left"> <b class="small"> 12:30am - Today</b>   </td>
                                  <td> <div class=""> Defective fl oat switch or short circuit </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Broken wires in, short circuit of, or disconnection </div></td>
                                </tr>

                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Defective electronic expansion valve coil </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A8556   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>

                                </tr>
                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Defective fl oat switch or short circuit connector </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A995   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>

                                  <td> <div class=""> Broken wires in, short circuit of, or disconnection of connectors from the fan motor harness </div></td>
                                </tr>

                                <tr>
                                  <td width="80">
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A385   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Defective electronic expansion valve coil </div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="media ">
                                      <div class="media-left padding-right-10"><a class="" href="javascript:void(0)"><img src="images/icon-error.png" alt="img" height="20" width="20" class="inline"></a></div>
                                      <div class="media-body margin-0"><span class="label label-danger "> A8556   </span> </div>
                                    </div>
                                  </td>
                                  <td class="text-left"> <b class="small"> 11:25am - 07/12/18</b>   </td>
                                  <td> <div class=""> Humidifi er unit (optional accessory) leaking </div></td>
                                </tr>
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





                </div>




            </div>
























        </div>




</div>









        <?php include_once('_maptrail-it.php'); ?>


        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















</body>

</html>