
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



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.0/css/bootstrap-slider.css"
        media="screen">
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


        <div class="page-header page-header-bordered shadow">



            <div class="media">
                <div class="media-left">
                    <img src="images/excel-middle-east-logo.jpg" class="img-bordered" style="height:55px">
                </div>
                <div class="media-body">
                    <h3 class="media-heading">Excel Middle East</h4>
                        <div> <b>Code: E1071</b> | Contarct Expiray: 25 Mar 2019</div>
                </div>
            </div>


            <div class="page-header-actions">


                <button type="button" class="btn btn-sm btn-info  ">
                    <span class="text">View Details</span>

                </button>
            </div>
        </div>


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
                                                Total Bins
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

                                            <div class="font-size-14 margin-bottom-5 "> Ready to Collect </div>
                                            <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                                    height="24"> </div>
                                        </div>
                                        <b class="font-size-18">150</b>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2">

                            <div class="widget shadow card">
                                <div class=" padding-top-0 pa bg-teal-700 vertical-align height-100 white  text-center relative ">
                                    <div class="vertical-align-middle">
                                        <div class="margin-bottom-0 ">

                                            <div class="font-size-14 margin-bottom-5 ">Overfilled </div>
                                            <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                                    height="24"> </div>
                                        </div>
                                        <b class="font-size-18">100</b>
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


                                                <div class="panel">
                                                    <div class="panel-heading" role="tab">
                                                        <div class="panel-title">
                                                            Fill Level (0%-100%)
                                                        </div>


                                                    </div>
                                                    <div class="panel-body padding-0">

                                                        <div class="rangeslider">






                                                            <input id="ex14" type="text" data-slider-value="[10, 32]"
                                                                data-slider-ticks="[0, 100, 200, 300, 400]"
                                                                data-slider-ticks-snap-bounds="30"
                                                                data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'
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
                                                            <a class="panel-title" data-toggle="collapse" href="#Status"
                                                                data-parent="#AccordionFilters">
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
                                                                                <input type="checkbox" id="Online1"
                                                                                    name="Online" data-trigger="hidden_fields_one" checked class="trigger" />
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
                                                                                <input type="checkbox" id="Offline"
                                                                                    name="Offline" data-trigger="hidden_fields_two" class="trigger" />
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
                                                            <a class="panel-title" data-toggle="collapse" href="#Types"
                                                                data-parent="#AccordionFilters">
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
                                                                                <input type="checkbox" id="Online3"
                                                                                    name="Online" data-trigger="W1" class="trigger" />
                                                                                <label for="Online3">Small</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">150</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online4"
                                                                                    name="Online" data-trigger="W2" class="trigger" />
                                                                                <label for="Online4">Large</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                             <script>
                                                            $('.trigger').change(function() {  
                                                                    var hiddenId = $(this).attr("data-trigger");
    
                                                            if ($(this).is(':checked')) {
                                                                $("." + hiddenId).removeClass('hide')
                                                             }
                                                                else{
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

                                        <div class="col-md-8">




                                            <div class="mapbox   margin-bottom-0 ">

                                                <div id="popover-content-start1" class="hide">
                                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                        <tr>
                                                            <th> Volume </th>
                                                            <td class="">90 %</td>
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
                                                            <th> Volume </th>
                                                            <td class="">40 %</td>
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
                                                            <th> Volume </th>
                                                            <td class="">63 %</td>
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
                                                            <th> Volume </th>
                                                            <td class="">70 %</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Last Updated </th>
                                                            <td class="">Feb 26,2018 10:05:11 am</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                  

                                                <div class="hidden_fields_one" >
                                                <span class="icon" style="left:60%; top:25%;">
                                                    <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start1">
                                                        <img src="images/icon-map-bin-overflow.png" alt="img" height="50">
                                                    </a>
                                                </span>





                                                <span class="icon" style="left:50%; top:77%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-bin-moderate.png" alt="img" height="50">
                                                    </a>
                                                </span>



                                                <span class="icon" style="left:50%; top:37%;">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>

                                                <span class="icon" style="left:60%; top:67%;">
                                                    <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start4">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                            </div>
                                                
                                                <div class="hidden_fields_two hide">
                                                <span class="icon" style="left:70%; top:25%;">
                                                    <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start1">
                                                        <img src="images/icon-map-bin-overflow.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:45%; top:25%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-bin-moderate.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:53%; top:67%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:19%; top:23%;">
                                                    <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start4">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                               </div> 
                                                <div class="W1 hide">
                                                <span class="icon" style="left:78%; top:15%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-bin-moderate.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:64%; top:49%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                </div>
                                                <div class="W2 hide">
                                                <span class="icon" style="left:19%; top:65%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-bin-moderate.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:63%; top:29%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-bin-normal.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                </div>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                    width="100%" height="580" frameborder="0" style="border:0" class="pull-left map"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="panel panel-dark margin-bottom-0">
                                                <!-- <div class="panel-heading margin-bottom-0">
                                                    <h3 class="panel-title">Bins</h3>
                                                </div> -->

                                                <div class="vscroll" style="height: 580px;">
                                                    <div class="table-responsive hight:100px">
                                                     
                                                        <table class="table  margin-bottom-0 table-striped table-hover table-condensed1 table-bordered1 " >
                                                            <tbody>
                                                                <tr class="hidden_fields_two hide">
                                                                    <td class=""> <a href="bin.php">BIN02515</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 83%;">
                                                                                <span class="progress-label">83%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 73%;">
                                                                                <span class="progress-label">73%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr class="hidden_fields_two hide">
                                                                    <td class=""> <a href="bin.php">BIN06635</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 23%;">
                                                                                <span class="progress-label">23%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN06215</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 23%;">
                                                                                <span class="progress-label">23%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr class="hidden_fields_two hide">
                                                                    <td class=""> <a href="bin.php">BIN07715</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 53%;">
                                                                                <span class="progress-label">53%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 43%;">
                                                                                <span class="progress-label">43%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr class="hidden_fields_two hide">
                                                                    <td class=""> <a href="bin.php">BIN023415</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 33%;">
                                                                                <span class="progress-label">33%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 13%;">
                                                                                <span class="progress-label">13%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 73%;">
                                                                                <span class="progress-label">73%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 53%;">
                                                                                <span class="progress-label">53%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 23%;">
                                                                                <span class="progress-label">23%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 93%;">
                                                                                <span class="progress-label">93%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class=""> <a href="bin.php">BIN0815</a> </td>
                                                                    <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 63%;">
                                                                                <span class="progress-label">63%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class=""> 1.1 cbm </td>
                                                                    <td class="text-right"><i class="icon-location"><img
                                                                                src="images/icon-location.png" alt="img"
                                                                                height="20"></i></td>
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
                                                <select class="form-control input-sm" id="mrq-dd-class3">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart2; 
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart2 = c3.generate({
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
                                                                ['Numbers', 250, 85, 55, 17],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#465bd4', '#178d81', '#ec9940']
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
                                                                categories: ['Near to Fill', 'Over Filled', 'Empty', 'Full']
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
                                $("#mrq-dd-class3").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns: [
                                                                ['Numbers', 250, 85, 55, 17],
                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns: [
                                                                ['Numbers', 550, 685, 455, 817],
                                                            ],
                                        });
                                    }
                                });
                            </script>
                                    </div>

                                </div>
                                <div class="col-lg-4">


                                    <div class="padding-15 bg-cyan-100 margin-bottom-0">
                                        <div class="vscroll" style="height: 250px;">
                                            <table class="table  table-condensed  table-hovered    no-border   font-size-16 margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <figure class="fillimg">
                                                                <img src="images/icon-bin-fill-1.png" class="" style="height: 70px">
                                                                <div class="count">20%</div>
                                                            </figure>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 50 Kg
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 "> Average daily
                                                                waste
                                                                produced</div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last month</span>
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
                                                        <td class="text-center" width="80">
                                                            <figure class="fillimg">
                                                                <img src="images/icon-bin-fill-2.png" class="" style="height: 70px">
                                                                <div class="count">50%</div>
                                                            </figure>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 452 Kg
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 ">
                                                                Collection Effeciency</div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">50%</span>
                                                                <span class="">less than last month</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
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



                                    <div class="padding-15 bg-cyan-1001 margin-bottom-0">

                                        <div class="font-size-16 text-center margin-bottom-10"> Bins/Waste Collection</div>


                                        <div class="chartbox">
                                            <div id="chart-alerts1"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-alerts1',
                                                            size: {
                                                                height: 200,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },
                                                            data: {
                                                                columns: [
                                                                    ['Collected ', 25,],
                                                                    ['Pending ', 75],


                                                                ],
                                                                type: 'donut',
                                                            },
                                                            color: {
                                                                // pattern: ['#ef6666', '#36ab7a']
                                                            },
                                                            axis: {
                                                                rotated: false,
                                                                x: {
                                                                    label: {
                                                                        text: 'Jobs',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                                                                },
                                                                y: {
                                                                    label: {
                                                                        text: 'No of Jobs ',
                                                                        position: 'outer-middle'
                                                                    },
                                                                },
                                                            },
                                                            bar: {
                                                                width: {
                                                                    ratio: 0.1
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

                            <hr />
                            <div class="row">
                                <div class="col-lg-4">


                                    <div class="widget">
                                        <div class="padding-0 margin-top-20 bg-white  text-center">
                                            <div class=" ">
                                                <div class="text-uppercase font-size-14 margin-bottom-5">Average
                                                    Time
                                                    Between Collections</div>
                                                <div class="margin-bottom-10">
                                                    <span class="font-size-30 green-800">2h 30min</span>
                                                </div>
                                                <div class="counter-label">

                                                    <div class="counter counter-sm ">
                                                        <div class="counter-number-group">
                                                            <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                            <span class="counter-number">38%</span>
                                                            <span class="counter-number-related">more than last month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="widget bg-cyan-100 margin-20">
                                        <div class="padding-15  text-center">
                                            <div class=" ">
                                                <div class="text-uppercase font-size-12 margin-bottom-5">Average
                                                    Collection
                                                    per day</div>
                                                <div class="margin-bottom-0">
                                                    <span class="font-size-18 blue-800">23.45 Kg</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-lg-8">

                                    <div class=" font-size-24 margin-bottom-10 margin-top-0 text-center">Avg Monthly
                                        Collection
                                        Effeciency </div>
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
                                <li class="active"><a data-toggle="tab" href="#History">History</a></li>
                                <li class=""><a data-toggle="tab" href="#Upcoming">Upcoming Collection </a></li>
                                <li class=""><a data-toggle="tab" href="#Open">Open Collections </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="History">
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


                                            <div class="table-responsive">
                                                <table class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Bin</th>
                                                            <th class="text-left">Date/Time</th>
                                                            <th class="text-left">Collection (kg)</th>
                                                            <th class="text-left"> Fleet </th>
                                                            <th class="text-left"> Employee </th>
                                                            <th class="text-left">Location </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN815 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>
                                                            <td class="text-left">75</td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">GAQ234
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Hook Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Neymar Jr.
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Staff</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Blue Road, Malburg </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN324 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">29-July-2019, 11:34am </td>
                                                            <td class="text-left">39</td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">PDM246
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Chain Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Philipe Coutinho
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Khanna Road, East </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN453 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">12-June-2019, 02:23am </td>
                                                            <td class="text-left">89</td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo1.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">IKQ239
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Compactor</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Adam Gilchrist
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Driver</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">College Road, West </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img1.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN892 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">01-Feb-2019, 01:23am </td>
                                                            <td class="text-left">57</td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">OOH234
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Tipper</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Brendon Taylor
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Canal Road, Malburg </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Upcoming">
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
                                            <div class="table-responsive">
                                                <table class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Bin</th>
                                                            <th class="text-left">Date/Time</th>

                                                            <th class="text-left"> Fleet </th>
                                                            <th class="text-left"> Employee </th>
                                                            <th class="text-left">Location </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN815 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">01-July-2019, 11:39am </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">GAQ234
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Hook Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
																 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Neymar Jr.
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>




                                                            <td class="text-left">Civic Center Road </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN343 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">12-April-2019, 12:33am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo1.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">DFT231
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Chain Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Dybala
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Staff</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Hotspot Road, Malburg </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img3.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN623 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">30-Feb-2019, 12:48am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">PAM859
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Compactor</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Corry Anderson
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Driver</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">College Road, North </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN815 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">12-July-2019, 04:40am </td>

                                                            <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">KFE832
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Tipper</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Adam Smith
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Mountain View Road, Malburg </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN473 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">22-June-2019, 02:00am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">JSV162
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Hook Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Michel Johnson
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Kurral Road, West </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img1.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN126 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">DNK524
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Compactor</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                           <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">David
                                                                            <br />
                                                                            <i class="small">Staff</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Blue Road, Malburg </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Open">
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
                                            <div class="table-responsive">
                                                <table class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Bin</th>
                                                            <th class="text-left">Date/Time</th>
                                                            <th class="text-left"> Fleet </th>
                                                            <th class="text-left"> Employee </th>
                                                            <th class="text-left">Location </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN815 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">26-April-2019, 03:10am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">JHRT321
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Hook Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Neymar Jr.
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Canal View Road, West </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN564 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">12-Feb-2019, 09:31am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo2.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">FDT522
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Tipper</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Marshalo
                                                                            <br />
                                                                            <i class="small">Driver</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">NFK Road, East West </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN8854 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">13-July-2019, 11:32am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo1.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">RWG653
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Compactor</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Ivar Banega
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Staff</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Khanna East Road </td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img4.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN864 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">11-June-2019, 12:23am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">QRE532
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Chain Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Andrew Symonds
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Park Lane Road, North</td>

                                                        </tr>
                                                        <tr>


                                                             <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img5.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN544 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left">26-Jan-2019, 10:00am </td>

                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/icon-truck-photo3.png"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="fleet.php" class="font-weight-600">GAQ234
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Hook Loader</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                             <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Michel White
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Staff</i>
                                                                        </div>
                                                                    </div>

                                                                </td>

                                                            <td class="text-left">Blue Road, Malburg </td>

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
