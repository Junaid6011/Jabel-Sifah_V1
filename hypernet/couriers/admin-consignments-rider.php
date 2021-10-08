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

            <div class="page-header page-header-bordered ">
                <h1 class="page-title">Rider Consignments</h1>

                <div class="page-header-actions">
                    <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                        Back
                    </a>
                </div>
            </div>


            <div class="page-content  container-fluid">


                <div class="panel card light margin-bottom-15">
                    <div class="panel-heading  bg-green-800 ">
                        <div class="panel-title white font-size-14">
                            Search
                        </div>
                    </div>
                    <div class="panel-body">


                        <div class="row">
                            <div class="col-lg-9">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Enter name or emplyee number </label>
                                            <input type="text" class="form-control" placeholder="..." value="Abdul Hameed" />
                                        </div>
                                    </div>



                                </div>
                                <div class="row">

                                    <div class="col-sm-12">

                                        <div class="form-group1">
                                            <button type="button" class="btn btn-primary  btn-round1 ">
                                                Search
                                            </button>

                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-lg-12">
                                        <hr />
                                        <div class="font-size-18 text-center1 margin-bottom-10">My Consignments</div>

                                        <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>




                                            <div class="inline-block pull-left margin-right-10">
                                                <select class="form-control input-sm ">
                                                    <option>Filter By Type</option>
                                                </select>
                                            </div>

                                            <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                <div class="">
                                                    <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                </div>
                                            </div>


                                            <div class="inline-block pull-right   margin-bottom-10 margin-right-0">
                                                <a href="javascript:void(0)" class="btn btn-sm   btn-default btn-dark">
                                                    Print Tripsheet
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm   btn-default btn-dark">
                                                    Print Bar Code
                                                </a>


                                            </div>
                                        </div>


                                        <div class="table-responsive ">
                                            <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                                <thead>
                                                    <tr class="">
                                                        <th class="text-center " width="50"> <input type="checkbox"> </th>
                                                        <th class="text-left">Order # </th>
                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight</th>
                                                        <th class="text-left">Creation Time</th>

                                                        <th class="text-left">Package Type </th>
                                                        <th class="text-left">Destination </th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" checked /> </td>
                                                        <td class="text-left">AB1238967</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 kg </td>
                                                        <td class="text-left">10:34pm</td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Karachi</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" checked /> </td>
                                                        <td class="text-left">AB1238967</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 kg </td>
                                                        <td class="text-left">10:34pm</td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Karachi</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" checked /> </td>
                                                        <td class="text-left">AB1238967</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 kg </td>
                                                        <td class="text-left">10:34pm</td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Karachi</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>


                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" checked /> </td>
                                                        <td class="text-left">AC1854567</td>

                                                        <td class="text-left">Prime Delivery</td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">21 kg </td>
                                                        <td class="text-left">11:34pm </td>
                                                        <td class="text-left"> Document</td>
                                                        <td class="text-left">Lahore</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>


                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" checked /> </td>
                                                        <td class="text-left">AV1454567</td>

                                                        <td class="text-left">Prime Delivery</td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 kg</td>
                                                        <td class="text-left">10:34pm </td>
                                                        <td class="text-left"> Package</td>
                                                        <td class="text-left">Karachi</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>


                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="col-lg-3">

                                <div class="padding-15 padding-bottom-0 text-center">

                                    <div class="margin-bottom-10 ">
                                        <img src="images/user-img1.jpg " class=" img-bordered  " style="max-height: 200px;">


                                    </div>



                                </div>


                            </div>

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
                                                    <br> Karachi, Pakistan, 47000
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
                                        <tr class="bg-blue-100 ">
                                            <td class="font-weight-600">Esimated Price</td>
                                            <td colspan="3">
                                                <div class="text-right clearfix padding-10">
                                                    <div class="pull-right1">
                                                        <p>Sub - Total amount:
                                                            <span>4800 PKR </span>
                                                        </p>
                                                        <p>VAT:
                                                            <span>35 PKR (17% )</span>
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

                        <div class="ff">Click close to to edit/change order details</div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-dark">Confirm & Print </button>
                        <button type="button" class="btn btn-primary">Confirm </button>
                    </div>
                </div>
            </div>
        </div>




        <div class="modal fade " id="Insurance-popup">
            <div class="modal-dialog modal-sm1">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleOptionalLarge">Insurance Terms and Conditions

                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body padding-top-0">

                        <p>
                            Unless otherwise expressly agreed in writing, no insurance will be effected by US in respect of the Shipper/Client/Sender's goods/cargo.

                        </p>
                        <p>
                            Should the Shipper/Client/Sender require protection against loss or damage to a Shipment and if allowed by the terms of agreement, he must notify us before tendering the shipment, stating the nature and value of the goods and the destination of the shipment,
                            specifying
                            the
                            arrangements required. Any such additional cover will incur further charges to the Shipper/Client/Sender so that shipments will be subjected to an Insurance policy. The premium for such cover will be quoted as an Insurance premium and be specific to the individual
                            shipment tendered.
                            Any such insurance cover would be subject to such terms and conditions as the insurer would stipulate.

                        </p>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Confirm </button> -->
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade " id="assign-popup">
            <div class="modal-dialog modal-sm1">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleOptionalLarge">Schedule

                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body padding-top-0">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group1">
                                    <label class="control-label">Assign to </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                            <option data-subtext=""> Abdul Hameed </option>
                                            <option data-subtext=""> Faraz Ahmed </option>
                                            <option data-subtext=""> Amjad Ali </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Confirm </button>
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
                            <div class="absolute">

                                <div class="input-group input-group-sm padding-15">
                                    <input type="text" class="form-control input-sm" placeholder="Search Location">

                                    <span class="input-group-btn  ">

                                        <button class="btn btn-warning padding-left-15" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                                            </span> </button>
                                    </span>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%"
                                height="300" frameborder="0" style="border:0" class="pull-left1 map"></iframe>

                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Confirm </button>
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