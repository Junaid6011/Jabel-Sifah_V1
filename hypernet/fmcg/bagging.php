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
                                            Total Bags
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class=" margin-right-15 inline">
                                            <i> <img src="images/icon-maintenances-total.png" alt="img" height="40"> </i>
                                        </div>
                                        <b class="font-size-24" style="position:relative; top:5px;">120</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">

                        <div class="widget shadow card">
                            <div class=" padding-top-0 pa bg-teal-800 vertical-align height-100 white  text-center relative ">
                                <div class="vertical-align-middle">
                                    <div class="margin-bottom-0 ">

                                        <div class="font-size-14 margin-bottom-5 ">Peinding Consignmetns </div>
                                        <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                        </div>
                                    </div>
                                    <b class="font-size-18">1225</b>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="widget shadow card">
                            <div class=" padding-top-0 pa bg-brown-800 vertical-align height-100 white  text-center relative ">
                                <div class="vertical-align-middle">
                                    <div class="margin-bottom-0 ">

                                        <div class="font-size-14 margin-bottom-5 ">Inprogress Baging</div>
                                        <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                        </div>
                                    </div>
                                    <b class="font-size-18">13</b>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="col-lg-12">

                        <div class="panel panel-default shadow ">
                            <div class="panel-heading font-weight-600 margin-bottom-0">
                                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                    <li class="active"><a data-toggle="tab" href="#Pending">Pending </a></li>
                                    <li class=""><a data-toggle="tab" href="#Scheduled">Scheduled </a></li>
                                    <li class=""><a data-toggle="tab" href="#Inprogress">Last Mile Delivery </a></li>
                                    <li class=""><a data-toggle="tab" href="#Completed"> Completed</a></li>
                                </ul>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Pending">
                                        <div class="panel panel-default margin-bottom-0 ">
                                            <div class="panel-body padding-15  ">
                                                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                        <input type="text" class="form-control input-sm" placeholder="Search">
                                                    </div>


                                                    <div class="inline-block pull-left margin-right-10">
                                                        <select class="form-control input-sm ">
                                                            <option>Filter By Desitination</option>
                                                        </select>
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


                                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">

                                                        <a href="" class="btn btn-sm   btn-default btn-dark" data-target="#createbag-popup" data-toggle="modal">
                                                            Create Bag
                                                        </a>

                                                        <button type="button" class="btn btn-sm   btn-default btn-dark " data-target="#assign-popup" data-toggle="modal">Schedule</button>

                                                        <!-- <a href="" target="_blank" class="btn btn-sm   btn-default btn-dark">
                                                            View All
                                                        </a> -->

                                                    </div>
                                                </div>


                                                <div class="table-responsive ">
                                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                                        <thead>
                                                            <tr class="">
                                                                <th class="text-center " width="50"> <input type="checkbox" /> </th>
                                                                <th class="text-left">Bag # </th>
                                                                <th class="text-left">Type</th>
                                                                <th class="text-left">Category</th>
                                                                <th class="text-left">Transport Mode</th>
                                                                <th class="text-left">Weight (kg)</th>
                                                                <th class="text-left">Current Location</th>
                                                                <th class="text-left">Destination</th>
                                                                <th class="text-left">Total Consignments</th>
                                                                <th class="text-right"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">AB589944</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">100 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">120</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center "> <input type="checkbox" /> </td>
                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">142</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
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
                                    <div class="tab-pane " id="Scheduled">
                                        <div class="panel panel-default margin-bottom-0 ">
                                            <div class="panel-body padding-15 ">

                                                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                        <input type="text" class="form-control input-sm" placeholder="Search">
                                                    </div>



                                                    <div class="inline-block pull-left margin-right-10">
                                                        <select class="form-control input-sm ">
                                                            <option>Filter By Desitination</option>
                                                        </select>
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


                                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                                        <a href="" class="btn btn-sm   btn-default btn-dark" data-target="#createbag-popup" data-toggle="modal">
                                                            Create Bag
                                                        </a>
                                                        <!-- <a href="" target="_blank" class="btn btn-sm   btn-default btn-dark">
                                                            Bagging
                                                        </a>
                                                        <a href="" target="_blank" class="btn btn-sm   btn-default btn-dark">
                                                            View All
                                                        </a> -->

                                                        <!-- <a href="" onclick="window.history.go(-1); return false;" class="  margin-left-5 btn btn-sm   btn-default ">
                                          Back
                                        </a> -->
                                                    </div>
                                                </div>

                                                <div class="table-responsive ">
                                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                                        <thead>
                                                            <tr class="">

                                                                <th class="text-left">Bag # </th>
                                                                <th class="text-left">Type</th>
                                                                <th class="text-left">Category</th>
                                                                <th class="text-left">Transport Mode</th>
                                                                <th class="text-left">Weight (kg)</th>
                                                                <th class="text-left">Current Location</th>
                                                                <th class="text-left">Destination</th>
                                                                <th class="text-left">Total Consignments</th>
                                                                <th class="text-right"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB589944</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">100 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">120</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">142</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
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

                                    <div class="tab-pane" id="Inprogress">
                                        <div class="panel panel-default margin-bottom-0 ">
                                            <div class="panel-body padding-15  ">
                                                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                        <input type="text" class="form-control input-sm" placeholder="Search">
                                                    </div>



                                                    <div class="inline-block pull-left margin-right-10">
                                                        <select class="form-control input-sm ">
                                                            <option>Filter By Desitination</option>
                                                        </select>
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


                                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                                        <a href="" class="btn btn-sm   btn-default btn-dark" data-target="#createbag-popup" data-toggle="modal">
                                                            Create Bag
                                                        </a>

                                                        <!-- <a href="" target="_blank" class="btn btn-sm   btn-default btn-dark">
                                                            View All
                                                        </a> -->




                                                        <!-- <a href="" onclick="window.history.go(-1); return false;" class="  margin-left-5 btn btn-sm   btn-default ">
                                          Back
                                        </a> -->
                                                    </div>
                                                </div>
                                                <div class="table-responsive ">
                                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                                        <thead>
                                                            <tr class="">

                                                                <th class="text-left">Bag # </th>
                                                                <th class="text-left">Type</th>
                                                                <th class="text-left">Category</th>
                                                                <th class="text-left">Transport Mode</th>
                                                                <th class="text-left">Weight (kg)</th>
                                                                <th class="text-left">Current Location</th>
                                                                <th class="text-left">Destination</th>
                                                                <th class="text-left">Total Consignments</th>
                                                                <th class="text-right"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB589944</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">100 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">120</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">142</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
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

                                    <div class="tab-pane" id="Completed">
                                        <div class="panel panel-default margin-bottom-0 ">
                                            <div class="panel-body padding-15  ">
                                                <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                        <input type="text" class="form-control input-sm" placeholder="Search">
                                                    </div>



                                                    <div class="inline-block pull-left margin-right-10">
                                                        <select class="form-control input-sm ">
                                                            <option>Filter By Desitination</option>
                                                        </select>
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


                                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                                        <a href="" class="btn btn-sm   btn-default btn-dark" data-target="#createbag-popup" data-toggle="modal">
                                                            Create Bag
                                                        </a>

                                                        <!-- <a href="" target="_blank" class="btn btn-sm   btn-default btn-dark">
                                                                View All
                                                            </a> -->




                                                        <!-- <a href="" onclick="window.history.go(-1); return false;" class="  margin-left-5 btn btn-sm   btn-default ">
                                              Back
                                            </a> -->
                                                    </div>
                                                </div>
                                                <div class="table-responsive ">
                                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                                        <thead>
                                                            <tr class="">

                                                                <th class="text-left">Bag # </th>
                                                                <th class="text-left">Type</th>
                                                                <th class="text-left">Category</th>
                                                                <th class="text-left">Transport Mode</th>
                                                                <th class="text-left">Weight (kg)</th>
                                                                <th class="text-left">Current Location</th>
                                                                <th class="text-left">Destination</th>
                                                                <th class="text-left">Total Consignments</th>
                                                                <th class="text-right"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Document </td>
                                                                <td class="text-left">International </td>
                                                                <td class="text-left">By Air </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Dubai, UAE</td>
                                                                <td class="text-left">Sharja, UAE</td>
                                                                <td class="text-left">12</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB589944</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">100 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">120</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB1238967</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">119 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">100</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <td class="text-left">TR1238222</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">210 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">115</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
                                                                        Details
                                                                    </button>
                                                                </td>
                                                            </tr>

                                                            <tr>

                                                                <td class="text-left">AB156767</td>
                                                                <td class="text-left">Fragile </td>
                                                                <td class="text-left">Domestic </td>
                                                                <td class="text-left">By Road </td>
                                                                <td class="text-left">117 </td>
                                                                <td class="text-left">Karachi, Pakistan</td>
                                                                <td class="text-left">Lahore</td>
                                                                <td class="text-left">142</td>
                                                                <td class="text-center">
                                                                    <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Bag-details" data-toggle="modal">
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




                                </div>
                            </div>
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
                        <h4 class="modal-title" id="exampleOptionalLarge">Summary

                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body padding-top-0">


                        <div class="table-responsive ritz2 ">
                            <div class=" ">
                                <div class="bg-green-100 padding-15 font-size-14 margin-bottom-15">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <address>
                                                Shipment Details:
                                                <br>
                                                <!-- <img class="margin-right-10" src="images/metis-logo.png" height="40px" alt="..."><br> -->
                                                <h4 class="font-weight-600">SPTDigital</h4>
                                                Office Plot#5, New Broad House Behind KDA
                                                <br> Karachi, Pakistan, Pakistan, 47000
                                                <br> <br>
                                                <b title="Mail">E-mail:</b> info@sptdigial.com
                                                <br>
                                                <b title="Phone">Phone:</b> +923145140022

                                            </address>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 text-right1">

                                            <address>
                                                Recipient Details:
                                                <br>
                                                <!-- <img class="margin-right-10" src="images/adamjee.png" height="40px" alt="..."><br> -->
                                                <h4 class="font-weight-600">Adam Jee Co</h4>
                                                Ground Floor, Computer Plaza, Service Road Ghauri Town.
                                                <br> Karachi, Pakistan, Pakistan
                                                <br> <br>
                                                <b title="Mail">E-mail:</b> info@adamjeeco.pk
                                                <br>
                                                <b title="Phone">Phone:</b> +923335178396

                                            </address>
                                        </div>

                                        <div class="col-lg-3">
                                            <br /> <br />
                                            <div class=" text-center margin-bottom-10">
                                                <img src="images/bar-code.png" width="100" heigt="100" />
                                            </div>

                                            <div class=" text-center font-weight-600">AA1234567 </div>

                                        </div>



                                        <!-- <div class="col-md-2 text-right">
                      
                      
                                          <h4>Order Number</h4>
                                          <p>
                                            <a class="font-size-20" href="javascript:void(0)">#5669626</a>
                      
                                          </p>
                      
                                        </div> -->
                                    </div>
                                </div>
                                <table class="waffle table  table-bordered  text-wrap1 table-hover table-condensed1 grey-800 table-striped margin-bottom-15 " cellspacing="0" cellpadding="0">
                                    <thead>

                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td colspan="6" class="bg-green-600 white text-center">Package Details</td>
                                        </tr>
                                        <tr>

                                            <th class="font-weight-600">Shipment Type</th>
                                            <td class="bg-yellow-100">Package</td>
                                            <td colspan="4"> 5 Laptops, 10 Mouse</td>
                                        </tr>
                                        <tr>

                                            <td class="font-weight-600">Value of Shipment</td>
                                            <td>-</td>
                                            <td colspan="4">-</td>
                                        </tr>
                                        <tr>

                                            <td class="font-weight-600">Estimated Weight</td>
                                            <td>10kg</td>
                                            <td colspan="4">-</td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-center"> <b class="blue-800"> Item #1 </b> </td>
                                        </tr>
                                        <tr class="font-weight-600">
                                            <td>Name</td>
                                            <td>Quantity</td>
                                            <td>Weight</td>
                                            <td>Length</td>
                                            <td>Width</td>
                                            <td>Height</td>
                                        </tr>
                                        <tr>
                                            <td>Dell Laptops</td>
                                            <td>5</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>

                                        <tr>
                                            <td colspan=" 6" class="text-center"> <b class="blue-800"> Item #2 </b> </td>
                                        </tr>
                                        <tr class="font-weight-600">
                                            <td>Name</td>
                                            <td>Quantity</td>
                                            <td>Weight</td>
                                            <td>Length</td>
                                            <td>Width</td>
                                            <td>Height</td>
                                        </tr>
                                        <tr>
                                            <td>A4Tech Mouse</td>
                                            <td>10</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>


                                        <tr>
                                            <td colspan="6" class="bg-green-600 white text-center">Payment Details</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" class="font-weight-600">Payment Type</td>
                                            <td colspan="4">Advance Payment</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-600">Packing</td>
                                            <td colspan="4">Box A - 25kg (33.7 * 32.2 * 10.0)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-600">Total Weight</td>
                                            <td colspan="4">12kg</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-600">Order Date/Time</td>
                                            <td colspan="4">16-June-2019 02:07pm</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-600">Estimated Delivery Time/Date</td>
                                            <td colspan="4">17-June-2019</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="font-weight-600">Esimated Price</td>
                                            <td colspan="4">3750 PKR</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info">Confirm & Print </button>
                        <button type="button" class="btn btn-primary">Confirm </button>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade example-modal-lg" id="Bag-details">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleOptionalLarge">Details
                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body padding-top-0">

                        <div class="  margin-bottom-15">
                            <div class="row">

                                <div class="col-md-3">

                                    <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Shipment Status:</div>
                                    <div>

                                        <div class="margin-bottom-5"><b>Current Status </b></div>
                                        <div class="margin-bottom-15 grey-600">
                                            <label class="label label-info">Pending</label>
                                        </div>
                                        <div class="margin-bottom-5"><b>Creted Date / Time </b></div>
                                        <div class="margin-bottom-15 grey-600">
                                            20 May, 2019, 10:34pm
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> From:</div>
                                    <div>

                                        <div class="margin-bottom-15 grey-600">
                                            Main Frunchise <br>
                                            Islamabad, Pakistan<br>
                                            info@gmail.com
                                            <br>
                                            +923145140022
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Destination:</div>
                                    <div>

                                        <div class="margin-bottom-15 grey-600">


                                            Karachi, Pakistan, Pakistan, 47000
                                            <br>
                                            info@gmail.com
                                            <br>
                                            +923145140022
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Bag Number</div>
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



                        <div class=" bg-teal-800 white padding-5 text-center font-size-12 margin-bottom-15"> Consignments Details</div>



                        <div class="row margin-bottom-15">
                            <div class="col-lg-4">
                                <div class="padding-5  bg-white text-center card">
                                    <div class="text-uppercase font-size-12 margin-bottom-0">Total Consignments</div>
                                    <div class="margin-bottom-0 font-size-16 blue-800">
                                        17
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="padding-5  bg-white text-center card">
                                    <div class="text-uppercase font-size-12 margin-bottom-0">Total WEIGHT</div>
                                    <div class="margin-bottom-0 font-size-16 blue-800">
                                        125 Kg
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="padding-5  bg-white text-center card">
                                    <div class="text-uppercase font-size-12 margin-bottom-0">Type</div>
                                    <div class="margin-bottom-0 font-size-16 blue-800">
                                        Fragile
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class=" table  table-bordered1  text-wrap1 table-hover1 table-condensed1  table-striped1 margin-bottom-15 grey-800 " cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>

                                    <th class="font-weight-600">Consignment #</th>
                                    <th class="font-weight-600">Weight</th>
                                    <th class="font-weight-600">Type</th>
                                </tr>
                            </thead>
                            <tbody>




                                <tr>
                                    <td>AC1866</td>
                                    <td>2</td>
                                    <td>Fragile</td>
                                </tr>
                                <tr>
                                    <td>AT1786</td>
                                    <td>12</td>
                                    <td>Fragile</td>
                                </tr>
                                <tr>
                                    <td>AC1866</td>
                                    <td>2</td>
                                    <td>Fragile</td>
                                </tr>
                                <tr>
                                    <td>AT1786</td>
                                    <td>12</td>
                                    <td>Fragile</td>
                                </tr>
                                <tr>
                                    <td>AC1866</td>
                                    <td>2</td>
                                    <td>Fragile</td>
                                </tr>
                                <tr>




                            </tbody>
                        </table>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-info">Confirm & Print </button>
                        <button type="button" class="btn btn-primary">Confirm </button> -->
                    </div>
                </div>
            </div>
        </div>


       

 


        <div class="modal fade " id="createbag-popup">
            <div class="modal-dialog modal-sm1">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="exampleOptionalLarge"> Create Bag

                            <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
                    </div>
                    <div class="modal-body padding-top-0">


                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Type </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Fragile </option>
                                            <option data-subtext=""> Liqued </option>
                                            <option data-subtext=""> Food </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Bag Size </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Size 1 </option>
                                            <option data-subtext=""> Size 2 </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Category </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Domestic </option>
                                            <option data-subtext=""> International </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Destination </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Pakistan</option>
                                            <option data-subtext=""> UAE </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"> &nbsp; </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Dubai, UAE </option>
                                            <option data-subtext=""> Sharja, UAE </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Mode of Transport </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> By Road </option>
                                            <option data-subtext=""> By Air </option>
                                            <option data-subtext=""> By Ship </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Transit Franchise </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                            <option data-subtext=""> Lahore Airport </option>
                                            <option data-subtext=""> Saddar Rawalpindi </option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <!-- <label class="control-label">Bag Size </label> -->
                                    <div class="input-icon">
                                        <div class="" style="max-width: 2000px; margin: auto;">


                                            <div class="bg-white padding-10 text-center margin-bottom-0" style="border:2px dashed #eee;">
                                                <img src="images/qr-code.png" alt="" height="50"> <br> Scan Consignments Code</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="row text-center   margin-bottom-20   clearfix  ">
                                    <div class="col-sm-6">
                                        <div class="vertical-align height-501 padding-10  border-double bg-green-5001 white1">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-10">Consignments </div>
                                                <b class="font-size-14"> 25 </b>
                                            </div>

                                            <div class="progress  margin-bottom-0">
                                                <div class="progress-bar progress-bar-info bg-green-800" style="width: 25%" role="progressbar">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vertical-align height-501 padding-10  border-double bg-blue-5001 white1">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-10">Weight Status (kg)</div>
                                                <b class="font-size-14">78 / 180</b>
                                            </div>
                                            <div class="progress  margin-bottom-0">
                                                <div class="progress-bar progress-bar-info bg-blue-800" style="width: 50%" role="progressbar">

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="vscroll" style="max-height: 150px;">

                                    <table class=" table  table-bordered1  text-wrap1 table-hover1 table-condensed  table-striped margin-bottom-15 grey-800 " cellspacing="0" cellpadding="0">
                                        <thead>
                                            <tr>

                                                <th class="font-weight-600">Consignment #</th>
                                                <th class="font-weight-600">Weight</th>
                                                <th class="font-weight-600">Type</th>
                                            </tr>
                                        </thead>
                                        <tbody>




                                            <tr>
                                                <td>AC1866</td>
                                                <td>2</td>
                                                <td>Fragile</td>
                                            </tr>
                                            <tr>
                                                <td>AT1786</td>
                                                <td>12</td>
                                                <td>Fragile</td>
                                            </tr>
                                            <tr>
                                                <td>AC1866</td>
                                                <td>2</td>
                                                <td>Fragile</td>
                                            </tr>
                                            <tr>
                                                <td>AT1786</td>
                                                <td>12</td>
                                                <td>Fragile</td>
                                            </tr>
                                            <tr>
                                                <td>AC1866</td>
                                                <td>2</td>
                                                <td>Fragile</td>
                                            </tr>
                                            <tr>




                                            </tr>
                                        </tbody>
                                    </table>
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

        <?php include_once('_assign-popup.php'); ?>
        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>
    </body>

</html>