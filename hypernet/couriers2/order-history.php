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
                <div class="col-md-4">
                    <div class="widget shadow card">
                        <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                            <div class="white">
                                <div class="margin-bottom-10   ">
                                    <div class="font-size-14 ">
                                        Total Orders
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" margin-right-15 inline">
                                        <i> <img src="images/icon-maintenances-total.png" alt="img" height="40"> </i>
                                    </div>
                                    <b class="font-size-24" style="position:relative; top:5px;">925</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div
                            class=" padding-top-0 pa bg-red-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 "> Today Orders </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                            height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">41</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div
                            class=" padding-top-0 pa bg-teal-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Due Soon </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                            height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">25</b>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div
                            class=" padding-top-0 pa bg-green-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Over Due </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                            height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">07</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div
                            class=" padding-top-0 pa bg-brown-800 vertical-align height-100 white  text-center relative ">
                            <div class="vertical-align-middle">
                                <div class="margin-bottom-0 ">

                                    <div class="font-size-14 margin-bottom-5 ">Inprogress </div>
                                    <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img"
                                            height="24">
                                    </div>
                                </div>
                                <b class="font-size-18">13</b>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="panel panel-default  card shadow light">
                <div class="panel-heading">
                    <h3 class="panel-title font-weight-600">Order History</h3>

                </div>
                <div class="panel-body ">
                    <div class="table-responsive ">
                        <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      "
                            id="">

                            <thead>
                                <tr class="">
                                    <th class="text-left">ID </th>
                                    <th class="text-left">Generated Time/Date</th>
                                    <th class="text-left">Generated Date</th>
                                    <th class="text-left">Consignment Detail</th>
                                    <th class="text-left">Net Weight</th>
                                    <th class="text-left">Pickup City</th>
                                    <th class="text-left">Drop-off City</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">158623 </td>
                                    <td class="text-left"> 6:32:11 am </td>
                                    <td class="text-left">Feb 26,2018 </td>
                                    <td class="text-left">Laptops </td>
                                    <td class="text-left"> 7.2 Kg</td>
                                    <td class="text-left"> Karachi</td>
                                    <td class="text-left">Lahore</td>
                                    <td class="text-center">
                                        <!-- <button type="button" class="btn btn-icon  btn-default btn-xs collapsed"
                                            data-toggle="collapse" data-target="#info1" aria-expanded="false"><i
                                                class="icon ion-plus"></i>
                                        </button> -->

                                        <button type="button" class="btn btn-icon  btn-default btn-xs "
                                            data-target="#Track" data-toggle="modal">
                                            Details
                                        </button>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="8" class="padding-0  ">
                                        <div class="bg-cyan-100 padding-0 collapse" id="info1" aria-expanded="false"
                                            style="height: 0px;">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr class="">
                                                        <th class="text-left">Speed</th>
                                                        <th class="text-left">Temperature
                                                        </th>

                                                        <th class="text-center">Jobs
                                                            Completed</th>
                                                        <th class="text-center">Last 24
                                                            Distance</th>

                                                        <th class="text-center">Last
                                                            Updated</th>
                                                        <th class="text-center">Last
                                                            Fillup</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"> 30.2 (Km/h)
                                                        </td>
                                                        <td class="text-left">26.00 (℃)</td>

                                                        <td class="text-center">4</td>
                                                        <td class="text-center">380 km</td>


                                                        <td class="text-center"> Feb
                                                            22,2018
                                                            10:07:08
                                                            pm</td>
                                                        <td class="text-center">Feb
                                                            21,2018
                                                            09:30:08 am</td>
                                                    </tr>
                                                </tbody>
                                            </table>
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








    <div class="modal fade example-modal-lg" id="Track">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="exampleOptionalLarge">Summary </h4>
                </div>
                <div class="modal-body padding-top-0">


                    <div class="table-responsive ritz2 ">
                        <div class=" ">
                            <div class="bg-green-100 padding-15 font-size-14 margin-bottom-15">
                                <div class="row">
                                    <div class="col-md-4">

                                        <address>
                                            From:
                                            <br> <br>
                                            <img class="margin-right-10" src="images/metis-logo.png" height="40px"
                                                alt="..."><br>
                                            <h4 class="font-weight-600">Metis International</h4>
                                            Office Plot # ST 1 & 2. New Broad House Behind KDA
                                            <br> Karachi, Pakistan, 47000
                                            <br> <br>
                                            <b title="Mail">E-mail:</b> info@metispvt.com
                                            <br>
                                            <b title="Phone">Phone:</b> (+92) 333 515 7890

                                        </address>
                                    </div>

                                    <div class="col-md-4 col-md-offset-2 text-right1">

                                        <address>
                                            To:
                                            <br> <br>
                                            <img class="margin-right-10" src="images/adamjee.png" height="40px"
                                                alt="..."><br>
                                            <h4 class="font-weight-600">Adam Jee Co</h4>
                                            Translation.pk Translation Services,
                                            Ground Floor, Computer Plaza,
                                            Service Road Ghauri VIP,
                                            <br> Karachi, Pakistan, 47000
                                            <br> <br>
                                            <b title="Mail">E-mail:</b> info@metispvt.com
                                            <br>
                                            <b title="Phone">Phone:</b> (+92) 333 515 7890

                                        </address>
                                    </div>



                                    <div class="col-md-2 text-right">
                                        <h4>Order Number</h4>
                                        <p>
                                            <a class="font-size-20" href="javascript:void(0)">#5669626</a>

                                        </p>

                                    </div>
                                </div>
                            </div>
                            <table
                                class="waffle table  table-bordered  text-wrap1 table-hover table-condensed1 grey-800 table-striped margin-bottom-15 "
                                cellspacing="0" cellpadding="0">
                                <thead>

                                </thead>
                                <tbody>

                                    <tr>

                                        <td colspan="6" class="bg-green-600 white text-center">Package Details</td>
                                    </tr>
                                    <tr>

                                        <th class="font-weight-600">Shipment Type</th>
                                        <td class="bg-yellow-100">Laptops</td>
                                        <td colspan="4"> Lorem Ipsum, giving information on its origins, as
                                            well</td>
                                    </tr>
                                    <tr>

                                        <td class="font-weight-600">Value of Shipment</td>
                                        <td>350</td>
                                        <td colspan="4">PKR</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-center"> <b class="blue-800"> Item #1 </b> </td>
                                    </tr>
                                    <tr class="font-weight-600">
                                        <td>Quantity</td>
                                        <td>width</td>
                                        <td>Height</td>
                                        <td>Length</td>
                                        <td>Weight</td>
                                    </tr>
                                    <tr>

                                        <td>5</td>
                                        <td>200cm</td>
                                        <td>10.5cm</td>
                                        <td>12.5</td>
                                        <td>20kg</td>
                                    </tr>

                                    <tr>
                                        <td colspan=" 5" class="text-center"> <b class="blue-800"> Item #2 </b> </td>
                                    </tr>
                                    <tr class="font-weight-600">
                                        <td>Quantity</td>
                                        <td>Width</td>
                                        <td>Height</td>
                                        <td>Length</td>
                                        <td>Weight</td>
                                    </tr>
                                    <tr>

                                        <td>5</td>
                                        <td>200cm</td>
                                        <td>10.5cm</td>
                                        <td>12.5</td>
                                        <td>20kg</td>
                                    </tr>


                                    <tr>
                                        <td colspan=" 5" class="text-center"> </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="font-weight-600">Packing</td>
                                        <td colspan="4">Box A - 25kg (33.7 * 32.2 * 10.0)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="font-weight-600">Quantity</td>
                                        <td colspan="4">7kg</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="font-weight-600">Esimated Price</td>
                                        <td colspan="4">260 PKR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Confirm </button> -->
                </div>
            </div>
        </div>
    </div>





    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>