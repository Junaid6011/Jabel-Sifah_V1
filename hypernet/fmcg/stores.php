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



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.0/css/bootstrap-slider.css" media="screen">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.0/bootstrap-slider.js"></script>




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
                    <div class="col-md-12">

                        <div class="row ">
                            <div class="col-md-4">
                                <div class="widget shadow card">
                                    <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                        <div class="white">
                                            <div class="margin-bottom-10   ">
                                                <div class="font-size-14 ">
                                                    Total Stores
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class=" margin-right-15 inline">
                                                    <i> <img src="images/icon-bins.png" alt="img" height="40"> </i>
                                                </div>
                                                <b class="font-size-24" style="position:relative; top:5px;">250</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">

                                <div class="widget shadow card">
                                    <div class=" padding-top-0 pa bg-blue-700 vertical-align height-100 white  text-center relative ">
                                        <div class="vertical-align-middle">
                                            <div class="margin-bottom-0 ">

                                                <div class="font-size-14 margin-bottom-5 "> Active </div>
                                                <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24"> </div>
                                            </div>
                                            <b class="font-size-18">150</b>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-2">

                                <div class="widget shadow card">
                                    <div class=" padding-top-0 pa bg-red-700 vertical-align height-100 white  text-center relative ">
                                        <div class="vertical-align-middle">
                                            <div class="margin-bottom-0 ">

                                                <div class="font-size-14 margin-bottom-5 ">Total Violations </div>
                                                <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24"> </div>
                                            </div>
                                            <b class="font-size-18">23</b>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="widget shadow card">
                                    <div class=" padding-10 bg-green-800 height-100 text-center relative ">
                                        <div class="white">
                                            <div class="margin-bottom-10   ">
                                                <div class="font-size-14 ">
                                                    Total Locations
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class=" margin-right-15 inline">
                                                    <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                                                </div>
                                                <b class="font-size-24" style="position:relative; top:5px;">50</b>
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
                                    <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
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
                                                <div class=" padding-left-20 padding-right-20 left-filters">


                                                    <div class="panel hidden">
                                                        <div class="panel-heading" role="tab">
                                                            <div class="panel-title">
                                                                Fill Level (0%-100%)
                                                            </div>


                                                        </div>
                                                        <div class="panel-body padding-0">

                                                            <div class="rangeslider">






                                                                <input id="ex14" type="text" data-slider-value="[10, 32]" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'
                                                                    data-slider-ticks-positions="[0, 30, 70, 90, 100]" />

                                                                <script>
                                                                    $("#ex14").slider({
                                                                        ticks: [0, 50, 100],
                                                                        ticks_positions: [0, 50, 100],
                                                                        ticks_labels: ['0%', '50%', '100%'],
                                                                        ticks_snap_bounds: 1
                                                                    });
                                                                </script>

                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="panel-group " id="AccordionFilters1">

                                                        <div class="panel">
                                                            <div class="panel-heading" role="tab">
                                                                <a class="panel-title" data-toggle="collapse" href="#Status" data-parent="#AccordionFilters">
                                                                    Status
                                                                </a>
                                                            </div>
                                                            <div class="panel-collapse collapse in" id="Status" role="tabpanel">
                                                                <div class="panel-body padding-0">
                                                                    <ul class="list-group list-group-bordered ">
                                                                        <li class="list-group-item">
                                                                            <span class="badge badge-default">78</span>
                                                                            <div class="inline-block ">
                                                                                <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                    <input type="checkbox" id="Online1" name="Online" data-trigger="hidden_fields_one" checked class="trigger" />
                                                                                    <label for="Online1">Online</label>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        <!--
                                                                     <li class="list-group-item">
                                                                        <span class="badge badge-default">78</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online16"
                                                                                    name="Online" data-trigger="hidden_fields_nine" checked class="trigger" />
                                                                                <label for="Online16">Online</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
-->
                                                                        <li class="list-group-item">
                                                                            <span class="badge badge-default">80</span>
                                                                            <div class="inline-block ">
                                                                                <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                    <input type="checkbox" id="Offline" name="Offline" data-trigger="hidden_fields_two" class="trigger" />
                                                                                    <label for="Offline">Offline</label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="panel">
                                                            <div class="panel-heading" role="tab">
                                                                <a class="panel-title" data-toggle="collapse" href="#Types" data-parent="#AccordionFilters">
                                                                    Types
                                                                </a>
                                                            </div>
                                                            <div class="panel-collapse collapse in" id="Types" role="tabpanel">
                                                                <div class="panel-body padding-0">
                                                                    <ul class="list-group list-group-bordered ">
                                                                        <li class="list-group-item">
                                                                            <span class="badge badge-default">100</span>
                                                                            <div class="inline-block ">
                                                                                <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                    <input type="checkbox" id="Online3" name="Online" data-trigger="W1" class="trigger" />
                                                                                    <label for="Online3">Small</label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <span class="badge badge-default">150</span>
                                                                            <div class="inline-block ">
                                                                                <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                    <input type="checkbox" id="Online4" name="Online" data-trigger="W2" class="trigger" />
                                                                                    <label for="Online4">Large</label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <script>
                                                                    $('.trigger').change(function () {
                                                                        var hiddenId = $(this).attr("data-trigger");

                                                                        if ($(this).is(':checked')) {
                                                                            $("." + hiddenId).removeClass('hide')
                                                                        } else {
                                                                            $("." + hiddenId).addClass('hide')
                                                                        }
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>



                                                    </div>


                                                </div>
                                            </section>

                                        </div>
                                    </div>
                                    <div class="page-main">


                                        <div class="row">

                                            <div class="col-md-12">




                                                <div class="mapbox   margin-bottom-0 ">

                                                    <div id="popover-content-start1" class="hide">
                                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                            <tr>
                                                                <th> Temperature </th>
                                                                <td class="">35 C</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Humidity </th>
                                                                <td class="">36%</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Last Updated </th>
                                                                <td class="">Feb 26,2018 10:07:08 am</td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <div id="popover-content-start2" class="hide">
                                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                            <tr>
                                                                <th> Temperature </th>
                                                                <td class="">35 C</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Humidity </th>
                                                                <td class="">36%</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Last Updated </th>
                                                                <td class="">Feb 23,2018 9:11:12 am</td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <div id="popover-content-start3" class="hide">
                                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                            <tr>
                                                                <th> Temperature </th>
                                                                <td class="">35 C</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Humidity </th>
                                                                <td class="">36%</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Last Updated </th>
                                                                <td class="">Feb 26,2018 10:08:03 am</td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <div id="popover-content-start4" class="hide">
                                                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                            <tr>
                                                                <th> Temperature </th>
                                                                <td class="">35 C</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Humidity </th>
                                                                <td class="">36%</td>
                                                            </tr>
                                                            <tr>
                                                                <th> Last Updated </th>
                                                                <td class="">Feb 26,2018 10:05:11 am</td>
                                                            </tr>
                                                        </table>
                                                    </div>


                                                    <div class="hidden_fields_one">
                                                        <span class="icon" style="left:60%; top:25%;">
                                                            <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>





                                                        <span class="icon" style="left:50%; top:77%;">
                                                            <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>



                                                        <span class="icon" style="left:50%; top:37%;">
                                                            <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>

                                                        <span class="icon" style="left:60%; top:67%;">
                                                            <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start4">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                    </div>

                                                    <div class="hidden_fields_two hide">
                                                        <span class="icon" style="left:70%; top:25%;">
                                                            <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start1">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                        <span class="icon" style="left:45%; top:25%;">
                                                            <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                        <span class="icon" style="left:53%; top:67%; ">
                                                            <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                        <span class="icon" style="left:19%; top:23%;">
                                                            <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start4">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="W1 hide">
                                                        <span class="icon" style="left:78%; top:15%;">
                                                            <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                        <span class="icon" style="left:64%; top:49%; ">
                                                            <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="W2 hide">
                                                        <span class="icon" style="left:19%; top:65%;">
                                                            <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start2">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                        <span class="icon" style="left:63%; top:29%; ">
                                                            <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start3">
                                                                <img src="images/icon-stores2.png" alt="img" height="50">
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                        width="100%" height="580" frameborder="0" style="border:0" class="pull-left map"></iframe>
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

                        <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                            <div class="panel-heading font-weight-600 margin-bottom-0">
                                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                    <li class="active"><a data-toggle="tab" href="#History">Listing</a></li>
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
                                                                <th class="text-left">Store</th>
                                                                <th class="text-left">Status</th>
                                                                <th class="text-left">Temperature </th>
                                                                <th class="text-left">Humidity </th>
                                                                <th class="text-left">Violations (24Hrs) </th>
                                                                <th class="text-left">Last Updated </th>
                                                                <th class="text-left" width="150">Manager</th>
                                                                <th class="text-left">Fill %</th>
                                                                <th class="text-left">Products</th>
                                                                <th class="text-left">Location </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px; width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 1 </a>
                                                                            <br />
                                                                            <i class="small">Technology </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Joe Denly
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 45%;">
                                                                            <span class="progress-label">45%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">895</td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px; width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 2 </a>
                                                                            <br />
                                                                            <i class="small">FMCG </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Sam Bill
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 76%;">
                                                                            <span class="progress-label">76%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="text-left">989</td>

                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">College Road,West
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 3 </a>
                                                                            <br />
                                                                            <i class="small">Blood Bank </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-danger">Offline</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Karim Benzema
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 64%;">
                                                                            <span class="progress-label">64%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">954 </td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Khanna Road, East
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px; width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 53 </a>
                                                                            <br />
                                                                            <i class="small">Technology </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Adma Smith
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 96%;">
                                                                            <span class="progress-label">96%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">895</td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 4 </a>
                                                                            <br />
                                                                            <i class="small">Technology </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Paulo Dybala
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 23%;">
                                                                            <span class="progress-label">23%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">466</td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 34 </a>
                                                                            <br />
                                                                            <i class="small">Spare Parts </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-danger">Offline</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Joe Denly
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 34%;">
                                                                            <span class="progress-label">34%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">954 </td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Khanna Road, East
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px; width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 32 </a>
                                                                            <br />
                                                                            <i class="small">Technology </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Neymar Jr.
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 56%;">
                                                                            <span class="progress-label">56%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left">895</td>



                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                            </tr>
                                                            <tr>


                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 150px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-stores.png" class="img-bordered" style="height:36px; width:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="store.php" class="font-weight-600">
                                                                                Store 23 </a>
                                                                            <br />
                                                                            <i class="small">FMCG </i>
                                                                        </div>
                                                                    </div>



                                                                </td>
                                                                <td class="text-left"><span class="label label-success">Active</span> </td>
                                                                <td class="text-left">25 °C</td>
                                                                <td class="text-left">65% </td>
                                                                <td class="text-left">18</td>
                                                                <td class="text-left">16-Sep-2019, 08:00am</td>
                                                                <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg" class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="" class="font-weight-600">Harshal Martin
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                                <td class="" width="100">
                                                                    <div class="progress margin-bottom-0" data-labeltype="percentage" data-plugin="progress">
                                                                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 23%;">
                                                                            <span class="progress-label">23%</span>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="text-left">989</td>

                                                                <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track" data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png" alt="img" height="20"></i></div>
                                                                    <div class="">College Road,West
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