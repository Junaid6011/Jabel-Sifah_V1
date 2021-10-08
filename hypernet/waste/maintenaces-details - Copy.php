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
        <link rel=" stylesheet" href="css/style.css">
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
    </div>-->


            <div class="page-header page-header-bordered ">
                <h1 class="page-title">#AB1238967</h1>

                <div class="page-header-actions">
                    <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                        Back
                    </a>
                </div>
            </div>

            <div class="page-content  container-fluid">



                <div class="pearls pearls-sm  row">
                    <div class="pearl done  col-xs-3">
                        <div class="pearl-icon bg-blue-800"><i class="ion-settings"></i></div>
                        <span class="pearl-title  ">Maintenace Date</span>
                        <b> 20 May, 2019</b>
                    </div>
                    <div class="pearl  done  col-xs-3">
                        <div class="pearl-icon bg-blue-800"><i class="ion-android-arrow-forward"></i></div>
                        <span class="pearl-title  ">Approved</span>
                        <b> 20 May, 2019</b>
                    </div>
                    <div class="pearl current error col-xs-3">
                        <div class="pearl-icon "><i class="ion-android-funnel"></i></div>
                        <span class="pearl-title  ">In Progress</span>
                        <b> 21 May, 2019</b>
                    </div>
                    <div class="pearl disabled col-xs-3">
                        <div class="pearl-icon "><i class="ion-checkmark"></i></div>
                        <span class="pearl-title ">Completed</span>
                        <b> -</b>
                    </div>
                </div>






                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-white padding-30">



                            <div class="margin-bottom-0 p clearfix" style="border-bottom: 0px solid #eee">

                                <div class="inline-block pull-left  margin-bottom-10 margin-right-10">

                                    <div class="orange-800 font-weight-600 font-size-18">
                                        <span class="font-weight-400"> Current Status</span> : In Progress
                                    </div>
                                    <!-- <div class="margin-bottom-15 grey-600 font-size-16">
                                        Expected Delivery: Monday 06 January 2019 by 08:00pm
                                    </div> -->
                                </div>
                                <div class="inline-block pull-right   margin-bottom-10 margin-right-10">

                                    <!-- <button type="button" class="btn btn-sm   btn-default btn-dark " data-target="#orderdetail-popup" data-toggle="modal">
                                        Details
                                    </button>
                                    <button type="button" class="btn btn-sm   btn-default btn-dark " data-target="#map-popup" data-toggle="modal">
                                        Live Track
                                    </button> -->
                                    <a href="" class="btn btn-sm   btn-default btn-dark">
                                        Refresh
                                    </a>
                                </div>
                            </div>



                            <div class="media ">

                                <div class="media-left">
                                    <img src="images/icon-truck-photo.png" alt="img" style="height:140px;" class="img-bordered ">
                                </div>
                                <div class="media-body">


                                    <hr class="margin-0 margin-bottom-15">



                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="table-responsive1">
                                                <table class="table  table-condensed no-border  table-striped  margin-bottom-0">
                                                    <tbody>
                                                        <tr>
                                                            <th> <b> Registration No. </b> </th>
                                                            <td class="text-left text-break">RRT-996
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b> Type </b> </th>
                                                            <td class="text-left text-break">
                                                                Hook Loader
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b> Make</b> </th>
                                                            <td class="text-left text-break">
                                                                Volvo
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th> <b>Model</b> </th>
                                                            <td class="text-left text-break">
                                                                1999
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
                                                            <th> <b>Type </b> </th>
                                                            <td class="text-left text-break">
                                                                Suspension Repair
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th width=""> <b>Issued Datetime</b> </th>
                                                            <td class="text-left">July 31, 2019</td>
                                                        </tr>

                                                        <tr>
                                                            <th> <b> Start Datetime </b> </th>
                                                            <td class="text-left text-break">
                                                                Aug 2, 2019
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th> <b> End Datetime </b> </th>
                                                            <td class="text-left text-break">
                                                                Aug 15,2019
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="col-md-4">


                                        <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30">
              <div class="font-size-14 margin-bottom-10  text-uppercase ">
                Total Fleets
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                400
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    Avilable
                    <div class="font-size-16">300</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    On Route
                    <div class="font-size-16">100</div>
                  </div>
                </div>
              </div>
            </div>
                                            <div class="text-center ">

                                                <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-0">Total Cost</div>
                                                <div class="bg-green-100  padding-15  ">

                                                    <div class="margin-bottom-0 text-center font-size-20"><b>150 AED </b></div>
                                                    <div class="margin-bottom-10 grey-600">
                                                        <label class="label label-info">Paid</label>
                                                    </div>
                                                    <!-- <div class="margin-bottom-5"><b>Invoice Date </b>: 20 May, 2019</div> -->


                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </div>


                            </div>

                            <hr />

                            <div class="table-responsive ">
                                <table class="table  margin-bottom-0 table-hover table-condensed table-striped bg-white table-bordered      " id="">

                                    <thead>
                                        <tr class="">
                                            <th class="text-left" width="200">Date & Time </th>
                                            <th class="text-left">Status</th>
                                            <th class="text-left">Location</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="text-left">03:50pm, July 01,2019</td>
                                            <td class="text-left">Out for delivery</td>
                                            <td class="text-left">Lahore </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">01:00pm, July 01,2019</td>
                                            <td class="text-left">Out for delivery </td>
                                            <td class="text-left">Lahore </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">08:00am, May 30,2019</td>
                                            <td class="text-left">Accepted at PST sort facility </td>
                                            <td class="text-left">Karachi </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">08:00am, May 30,2019</td>
                                            <td class="text-left">Arrived at courier facility </td>
                                            <td class="text-left">Lahore </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">07:30am, May 30,2019</td>
                                            <td class="text-left">Has left at courier facility </td>
                                            <td class="text-left">Lahore </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">06:00am, May 30,2019</td>
                                            <td class="text-left">Received by courier facility </td>
                                            <td class="text-left">Lahore </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>





                        </div>

                    </div>
                </div>





















            </div>




            <div class="modal fade example-modal-lg" id="orderdetail-popup">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="exampleOptionalLarge">Order Summary

                                <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                        </div>
                        <div class="modal-body padding-top-0">


                            <div class="">
                                <div class=" ">





                                    <div class="  margin-bottom-15">
                                        <div class="row">

                                            <div class="col-md-3">

                                                <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Shipment Status:</div>
                                                <div>

                                                    <div class="margin-bottom-5"><b>Current Status </b></div>
                                                    <div class="margin-bottom-15 grey-600">
                                                        <label class="label label-info">Pending</label>
                                                    </div>
                                                    <div class="margin-bottom-5"><b>Order Date / Time </b></div>
                                                    <div class="margin-bottom-15 grey-600">
                                                        20 May, 2019, 10:34pm
                                                    </div>



                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Shipment Details:</div>
                                                <div>

                                                    <div class="margin-bottom-15 grey-600">
                                                        SPTDigital <br>
                                                        Office Plot#5, New Broad KDA

                                                        <br>
                                                        info@sptdigial.com
                                                        <br>
                                                        +923145140022
                                                    </div>

                                                    <div class="margin-bottom-5"><b> Shipment Details </b></div>
                                                    <div class="grey-600">
                                                        Same as shipper details
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-3">

                                                <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Recipient Details:</div>
                                                <div>

                                                    <div class="margin-bottom-15 grey-600">
                                                        Adam Jee Co <br>
                                                        Ground Floor, Computer Plaza, Service Road Ghauri Town
                                                        <br> Sharjah, UAE, 47000
                                                        <br>
                                                        info@adamjeeco.pk
                                                        <br>
                                                        +923335178396, +923145140022
                                                    </div>



                                                </div>
                                            </div>

                                            <div class="col-md-3">

                                                <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Order Number</div>
                                                <div>

                                                    <div class=" text-center margin-bottom-0">
                                                        <img src="images/bar-code.png" width="80" heigt="80" />
                                                    </div>

                                                    <input type="url" readonly class="form-control input-sm text-center" value="AA1234567" />
                                                    <!-- <div class=" text-center font-weight-600">AA1234567 </div> -->



                                                </div>
                                            </div>




                                        </div>
                                    </div>



                                    <div class=" bg-teal-800 white padding-5 text-center font-size-12 margin-bottom-15"> Order Details</div>
                                    <table class=" table  table-bordered1  text-wrap1 table-hover1 table-condensed1  table-striped1 margin-bottom-15 grey-800 " cellspacing="0" cellpadding="0">

                                        <tbody>




                                            <tr>
                                                <td class="font-weight-600">Payment Type</td>
                                                <td>In Cash by the Shipper</td>

                                                <td class="font-weight-600">Total Weight</td>
                                                <td>12kg</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-600">Number of Pieces</td>
                                                <td>20</td>

                                                <td class="font-weight-600">Value of Shipment</td>
                                                <td>3800 PKR</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-600">Delivery Notes</td>
                                                <td> 5 Laptops, 10 Mouse</td>

                                                <td class="font-weight-600">Insurance Coverage</td>
                                                <td> Yes</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-600 green-800">Estimated Delivery Time/Date</td>
                                                <td>
                                                    <div class=" ">Monday, 17-June-2019</div>
                                                </td>
                                                <td class="font-weight-600 ">Notify Recipient </td>
                                                <td> Yes</td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td colspan="4"></td>
                                            </tr>
                                            <tr class="bg-blue-200 ">
                                                <td class="font-weight-600">Esimated Price</td>
                                                <td colspan="3">
                                                    <div class="text-right clearfix padding-10">
                                                        <div class="pull-right1">
                                                            <p>Sub - Total amount:
                                                                <span>3750 PKR </span>
                                                            </p>
                                                            <p>VAT:
                                                                <span>35 PKR</span>
                                                            </p>
                                                            <p class="page-invoice-amount font-size-18">Grand Total:
                                                                <span>4835 PKR</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Confirm & Print </button>
                            <button type="button" class="btn btn-primary">Confirm </button>
                        </div>
                    </div>
                </div>
            </div>






        </div>




        <div class="modal fade modal-info" id="map-popup">
            <div class="modal-dialog modal-sm1">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleOptionalLarge">Map

                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body ">


                        <div class="relative ">
                            <!-- <div class="absolute">

                                <div class="input-group input-group-sm padding-15">
                                    <input type="text" class="form-control input-sm" placeholder="Search Location">

                                    <span class="input-group-btn  ">

                                        <button class="btn btn-warning padding-left-15" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                                            </span> </button>
                                    </span>
                                </div>
                            </div> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%"
                                height="300" frameborder="0" style="border:0" class="pull-left1 map"></iframe>

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