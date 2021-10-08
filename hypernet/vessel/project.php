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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Page</a></li>
            </ol>
        </div> -->


        <div class="page-header page-header-bordered shadow">
            <h1 class="page-title">GEMCO
            </h1>

            <div class="page-header-actions">


                <a href=" " onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                    Back
                </a>
            </div>
        </div>
        <div class="page-content  container-fluid">


            <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                <div class="media-left">
                    <img src="images/vessel-customer1.png" alt="img" style="height:80px;" class=" img-bordered ">
                </div>
                <div class="media-body">
                    <h3 class="font-weight-600 margin-top-0">LUSAIL PALACE - EASTERN VIEW </h3>
                    <div class="font-size-14">Active</div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="progress  margin-top-10">
                                <div class="progress-bar  bg-orange-600" style="width: 50%" role="progressbar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="margin-top-0 margin-bottom-20 padding-20 bg-blue-00 shadow1 card1"
                                style="border: 1px solid #eee; background-color: #f9f9f9;">
                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 blue-800">
                                                    01-Jan-2018,
                                                    08:21am
                                                </div>
                                                <div class="font-size-12   "> Start Time/Date</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 blue-800">
                                                    31-Dec-2018,
                                                    12:28am
                                                </div>
                                                <div class="font-size-12   "> End Time/Date</div>


                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 blue-800">
                                                    Simaismah

                                                </div>
                                                <div class="font-size-12   "> Destination</div>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">

                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 blue-800">
                                                    12:15am 28 Dec,
                                                    2018
                                                </div>
                                                <div class="font-size-12   "> ETA to Destination
                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 blue-800">
                                                    Musandam

                                                </div>
                                                <div class="font-size-12   "> Next Port</div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="media margin-bottom-10">
                                            <div class="media-left">
                                                <figure class="">
                                                    <img src="images/icon-datetime.png" class="img-bordered"
                                                        style="height: 30px">
                                                </figure>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-size-14  font-weight-6001 green-800">
                                                    Musandam - Simaismah


                                                </div>
                                                <div class="font-size-12   "> Voyage Sector
                                                </div>


                                            </div>
                                        </div>
                                    </div>







                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="table-responsive1">
                                <table class="table  table-condensed1 no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        <tr>
                                            <th> <b> MATERIAL </b> </th>
                                            <td class="text-left text-break"> Aggregates 10-20 mm </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> FIRGHT (USD) </b> </th>
                                            <td class="text-left">$15.73 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> DEMURRAGE (PER HOUR) </b> </th>
                                            <td class="text-left">$150.00 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>DEMURRAGE CHARGABLE </b> </th>
                                            <td class="text-left">No</td>
                                        </tr>
                                        <tr>
                                            <th> <b> QUANTITY </b> </th>
                                            <td class="text-left text-break"> 704,000 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>MONTHLY QUANTITY </b> </th>
                                            <td class="text-left"> 64,000.00 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> FREE LOADING TIME </b> </th>
                                            <td class="text-left"> 6.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="table-responsive1">
                                <table class="table  table-condensed1 no-border  table-striped  margin-bottom-0">
                                    <tbody>

                                        <tr>
                                            <th width=""> <b>FREE DISCHARGING TIME </b> </th>
                                            <td class="text-left">6.00</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>LAYTIME TERMS </b> </th>
                                            <td class="text-left">4 WWWW </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>BAD WEATHER </b> </th>
                                            <td class="text-left">1.00</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>PERIOD</b> </th>
                                            <td class="text-left">365.00 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>LOADING PORT </b> </th>
                                            <td class="text-left">Sohar</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>DISCHARGING PORT </b> </th>
                                            <td class="text-left">Mesaieed</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>BUDGETED DA </b> </th>
                                            <td class="text-left">10,000.00</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>FUEL RATE
                                                </b> </th>
                                            <td class="text-left">$775.00
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>