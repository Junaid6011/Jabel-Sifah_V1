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


        <div class="page-content  container-fluid bg-white1">
            <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-10 pearls row margin-top-30 ">


                    <div class="pearl done col-xs-3 ">
                        <div class="pearl-icon"><i class="icon wb-user" aria-hidden="true"></i></div>
                        <span class="pearl-title">Pickup</span>
                    </div>
                    <div class="pearl current error col-xs-3">
                        <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                        <span class="pearl-title">In Warehouse</span>
                    </div>

                    <div class="pearl disabled col-xs-3">
                        <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                        <span class="pearl-title">In Transit</span>
                    </div>
                    <div class="pearl disabled col-xs-3">
                        <div class="pearl-icon"><i class="icon wb-check" aria-hidden="true"></i></div>
                        <span class="pearl-title">Destination</span>
                    </div>


                </div>
            </div>
            <div class="row margin-top-10">
                <div class="col-lg-4">
                    <div class="panel panel-dark nav-tabs-horizontal padding-0 margin-bottom-0">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <div class="panel-title"> Consignment Details
                            </div>
                        </div>

                        <div class="panel-body padding-15">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Current" role="tabpanel">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-0  ">

                                            <div class=" text-left">
                                                <table
                                                    class="table  table-condensed1  no-border1 table-striped  margin-bottom-0">
                                                    <tbody>
                                                        <tr>
                                                        </tr>

                                                        <tr>
                                                            <th width=""> <b>Tracking ID # </b> </th>
                                                            <td class="text-left">
                                                                <b> <span class=""><span
                                                                            class="label   label-info">122569999</span></span>
                                                                </b>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width=""> <b> Sender's Name : </b> </th>
                                                            <td class="text-left">
                                                                Imran Rauf

                                                            </td>
                                                        </tr>

                                                        <tr>


                                                            <th width="150">
                                                                <b>Sender's Contact #</b>
                                                            </th>
                                                            <td class="text-left">
                                                                0319 000000


                                                            </td>





                                                        </tr>

                                                        <tr>
                                                            <th width="150">
                                                                <b>Reciever's Name : </b>
                                                            </th>
                                                            <td class="text-left">
                                                                John Doe


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="150">
                                                                <b>Reciever's Contact # </b>
                                                            </th>
                                                            <td class="text-left">
                                                                0321 000000


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="150">
                                                                <b>Pick up Address </b>
                                                            </th>
                                                            <td class="text-left">
                                                                ABC,G8 Markaz


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th width="150">
                                                                <b>Destination Address </b>
                                                            </th>
                                                            <td class="text-left">
                                                                XYZ,F8 Karachi


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
                <div class="col-lg-4">
                    <div class="panel panel-dark nav-tabs-horizontal padding-0 margin-bottom-0">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <div class="panel-title"> Consignment Status
                            </div>
                        </div>

                        <div class="panel-body padding-15">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Current" role="tabpanel">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-0  ">
                                            <div class="bg-white vscroll padding-10 " style="height:250px;">
                                                <div class="">
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-blue-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">07:30:00 /
                                                                13-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header"> Pickup: Courier</span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                Shipment Pickup up by Courier Services.
                                                            </div>



                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-orange-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">10:00:00 /
                                                                13-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header">In Regional Warehouse</span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                Shipment transferred to Regional warehouse i.e: Karachi
                                                                Main Warehouse
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-cyan-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">13:00:00 /
                                                                13-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header"> In Transit </span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                In route to Intra City transfer i.e: Karachi to
                                                                Karachi
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-orange-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">18:30:00 /
                                                                13-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header">In City Warehouse</span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                Shipment transferred to City warehouse i.e: Karachi
                                                                Main Warehouse
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-cyan-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">08:00:00 /
                                                                14-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header"> In Transit </span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                In route to Destination
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="col-xs-4 icon">
                                                            <i class="ion-clock  bg-green-600 white"></i>
                                                            <div class="font-size-12 margin-bottom-5 ">10:00:00 /
                                                                14-10-2018 </div>
                                                        </div>
                                                        <div class="col-xs-8 content no-top-border">
                                                            <div class="margin-bottom-10">
                                                                <span
                                                                    class="label label-outline label-default margin-right-5"
                                                                    title="Header"> Delivered </span>

                                                            </div>
                                                            <div class="font-size-10">
                                                                Shipment delivered to the destination address.
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

                <div class="col-lg-4">
                    <div class="panel panel-dark nav-tabs-horizontal padding-0 margin-bottom-0">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <div class="panel-title"> Current Location
                            </div>
                        </div>

                        <div class="panel-body padding-15">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Current" role="tabpanel">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-0  ">

                                            <div class="mapbox   margin-bottom-0 ">


                                                <span class="icon" style="left:50%; top:37%;">
                                                    <a data-toggle="popover" data-original-title="B 8765"
                                                        data-trigger="hover" data-container="body" data-placement="top"
                                                        data-html="true" href="#" id="truck2">
                                                        <img src="images/icon-map-parcel.png" alt="img" height="50">
                                                    </a>
                                                </span>




                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402"
                                                    width="100%" height="243" frameborder="0" style="border:0; "
                                                    allowfullscreen class="map pull-right1"></iframe>
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