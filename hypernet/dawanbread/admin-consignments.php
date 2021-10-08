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
                <h1 class="page-title">Consignments</h1>

                <div class="page-header-actions">
                    <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                        Back
                    </a>
                </div>
            </div>


            <div class="page-content  container-fluid">


                <div class="  ">



                    <!-- <div class="btn-group  btn-group-justified1  nav nav-pills nav-tabs-line" data-toggle="buttons" style="background-color: #fff;">

                        <label class="padding-20 btn btn-outline  btn-primary   text-center card active " data-toggle="tab" data-target="#addnew" style="min-width: 200px;">
                            <input type="radio" name="multiples">
                            <div>
                                <div class="margin-bottom-0 ">
                                    <i class="ion-android-add"></i>
                                </div>
                                <span class="font-weight-600 text-uppercase  ">Add New</span>
                            </div>
                        </label>
                        <label class="padding-20 btn btn-outline  btn-primary   text-center card" data-toggle="tab" data-target="#Bulk" style="min-width: 200px;">
                            <input type="radio" name="multiples">
                            <div class="">
                                <div class="margin-bottom-0     ">
                                    <i class="ion-android-add"></i>
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Bulk Upload</span>
                            </div>
                        </label>
                        <label class="padding-20 btn btn-outline  btn-primary   text-center card  " data-toggle="tab" data-target="#listing" style="min-width: 200px;">
                            <input type="radio" name="multiples" checked="">
                            <div class="">
                                <div class="margin-bottom-0   ">
                                    <i class="ion-ios-list-outline"></i>
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Today Orders </span>
                            </div>
                        </label>
                    </div>

                    <hr /> -->

                    <ul class="row nav nav-pills nav-tabs-line">
                        <li class="col-md-2 col-xs-6 active">
                            <a data-toggle="tab" href="#addnew" class="nav-link padding-15 bg-primary-700  text-center card   margin-bottom-30 ">
                                <div class="white">
                                    <div class="margin-bottom-0 font-size-20">
                                        <i class="ion-android-add"></i>
                                    </div>
                                    <span class="font-weight-600 text-uppercase  ">Add New</span>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-2 col-xs-6">
                            <a data-toggle="tab" href="#Bulk" class="nav-link padding-15 bg-white  text-center card   margin-bottom-30">
                                <div class="">
                                    <div class="margin-bottom-0  font-size-20   primary-800">
                                        <i class="ion-android-add"></i>
                                    </div>
                                    <span class=" font-weight-600 text-uppercase ">Bulk Upload</span>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-2 col-xs-6">
                            <a data-toggle="tab" href="#listing" class="nav-link padding-15 bg-white   text-center   card margin-bottom-30">
                                <div class="">
                                    <div class="margin-bottom-0  font-size-20  primary-800">
                                        <i class="ion-ios-list-outline"></i>
                                    </div>
                                    <span class=" font-weight-600 text-uppercase ">Today Orders </span>
                                </div>
                            </a>
                        </li>
                    </ul>




                    <div class="tab-content ">
                        <div class="tab-pane active" id="addnew">

                            <div class="row">
                                <div class="col-lg-12">


                                    <div class="">
                                        <!-- <h4 class="margin-top-0 font-size-18 font-weight-6001"> Order Details</h4> -->
                                        <div class="">
                                            <div class="panel-group panel-group-continuous margin-bottom-0" id="exampleAccordionContinuous" role="tablist">
                                                <div class="panel card light margin-bottom-15">
                                                    <div class="panel-heading margin-bottom-0 bg-green-800 " id="exampleHeadingContinuousOne" role="tab">
                                                        <a class="panel-title white font-size-14" data-toggle="collapse" data-parent="#exampleAccordionContinuous" href="#exampleCollapseContinuousOne">
                                                            <span class="margin-right-10"> <img src="images/icon-jobs.png" height="24" /></span> Shipper Details


                                                        </a>


                                                        <div class="input-group form-group margin-bottom-0 pull-right input-group-sm absolute" style="max-width: 250px;top: 11px;right: 47px; ">
                                                            <input type="text" class="form-control " placeholder="Search via mobile number" style="border:1px solid #fff !important; ">
                                                            <div class="input-group-btn  ">
                                                                <div class="btn btn-default  ">
                                                                    <span class="glyphicon glyphicon-search margin-right-0"> </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="panel-collapse collapse in" id="exampleCollapseContinuousOne" data-parent="#exampleAccordionContinuous" role="tabpanel">
                                                        <div class="panel-body">
                                                            <div class="row">




                                                                <div class="col-sm-12">

                                                                    <div class="form-group">
                                                                        <label class="control-label">Customer Type</label>
                                                                        <div class="btn-group btn-group-sm" aria-label="Basic example" role="group">
                                                                            <button type="button" class="btn btn-outline btn-success active">Normal Customer</button>

                                                                            <button type="button" class="btn btn-outline btn-success">Corporate Customer</button>
                                                                        </div>
                                                                    </div>






                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">First Name</label>
                                                                        <input type="text" class="form-control input-sm" value="Amjad">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Last Name</label>
                                                                        <input type="text" class="form-control input-sm" value="Ali">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Phone Number</label>
                                                                        <input type="text" class="form-control input-sm" value="923145140022">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Alternative Phone Number</label>
                                                                        <input type="text" class="form-control input-sm" value="923143333373346">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Name/Company</label>
                                                                        <input type="text" class="form-control input-sm" value="SPTDigital">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <div class="input-icon">
                                                                            <input type="text" class="form-control input-sm" value="info@sptdigial.com">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Country</label>
                                                                        <div class="input-icon">
                                                                            <select class="form-control input-sm " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                <option data-subtext=""> Pakistan </option>
                                                                                <option data-subtext=""> UAE </option>
                                                                                <option data-subtext=""> Qatar </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">City</label>
                                                                        <div class="input-icon">
                                                                            <select class="form-control input-sm " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                <option data-subtext=""> Lahore </option>
                                                                                <option data-subtext=""> Islamabad </option>
                                                                                <option data-subtext=""> Karachi </option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Address</label>
                                                                        <div class="input-group input-group-sm">
                                                                            <input type="text" class="form-control input-sm" value="Office Plot#5, New Broad House Behind KDA">

                                                                            <span class="input-group-btn padding-left-10 pointer">
                                                                                <img src="images/icon-map-pin-end.png" height="24" data-target="#map-popup" data-toggle="modal" />
                                                                                <!-- <button class="btn btn-warning padding-left-15" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                                                                                    </span> </button> -->
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group margin-bottom-30">
                                                                        <div class="checkbox-custom checkbox-inline checkbox-warning pull-left">
                                                                            <input type="checkbox" id="chkPassport" name="checkbox">
                                                                            <label for="chkPassport">Different shipment details? </label>
                                                                        </div>



                                                                        <script>
                                                                            $(function () {
                                                                                $("#chkPassport").hide();
                                                                                $("#chkPassport").click(function () {

                                                                                    if ($(this).is(":checked")) {
                                                                                        $("#AddPassport").show();
                                                                                    } else {
                                                                                        $("#AddPassport").hide();
                                                                                    }
                                                                                });
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                    <div class="" id="AddPassport" style="display: none;">
                                                                        <div class="padding-15 bg-blue-100">
                                                                            <div class="row">

                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">First Name</label>
                                                                                        <input type="text" class="form-control input-sm" value="Amjad">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Last Name</label>
                                                                                        <input type="text" class="form-control input-sm" value="Ali">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Phone Number</label>
                                                                                        <input type="text" class="form-control input-sm" value="923145140022">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Alternative Phone Number</label>
                                                                                        <input type="text" class="form-control input-sm" value="923143333373346">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Name/Company</label>
                                                                                        <input type="text" class="form-control input-sm" value="SPTDigital">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Email</label>
                                                                                        <div class="input-icon">
                                                                                            <input type="text" class="form-control input-sm" value="info@sptdigial.com">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Country</label>
                                                                                        <div class="input-icon">
                                                                                            <select class="form-control input-sm " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                                <option data-subtext=""> Pakistan </option>
                                                                                                <option data-subtext=""> UAE </option>
                                                                                                <option data-subtext=""> Qatar </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">City</label>
                                                                                        <div class="input-icon">
                                                                                            <select class="form-control input-sm " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                                <option data-subtext=""> Lahore </option>
                                                                                                <option data-subtext=""> Islamabad </option>
                                                                                                <option data-subtext=""> Karachi </option>
                                                                                            </select>
                                                                                        </div>


                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group margin-bottom-0">
                                                                                        <label class="control-label">Address</label>
                                                                                        <div class="input-group input-group-sm">
                                                                                            <input type="text" class="form-control input-sm" value="Office Plot#5, New Broad House Behind KDA">

                                                                                            <span class="input-group-btn padding-left-10 pointer">
                                                                                                <img src="images/icon-map-pin-end.png" height="24" data-target="#map-popup" data-toggle="modal" />
                                                                                                <!-- <button class="btn btn-warning padding-left-15" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                                                                                                        </span> </button> -->
                                                                                            </span>
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
                                                <div class="panel card light margin-bottom-15">
                                                    <div class="panel-heading margin-bottom-0 bg-green-800" id="exampleHeadingContinuousTwo" role="tab">
                                                        <a class="panel-title collapsed white font-size-14" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousTwo" aria-controls="exampleCollapseContinuousTwo" aria-expanded="false">
                                                            <span class="margin-right-10"> <img src="images/icon-jobs-inprogress.png" height="24" /></span> Recipient Details
                                                        </a>

                                                        <div class="input-group form-group margin-bottom-0 pull-right input-group-sm absolute" style="max-width: 250px;top: 11px;right: 47px; ">
                                                            <input type="text" class="form-control " placeholder="Search via mobile number" style="border:1px solid #fff !important; ">
                                                            <div class="input-group-btn  ">
                                                                <div class="btn btn-default  ">
                                                                    <span class="glyphicon glyphicon-search margin-right-0"> </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="exampleCollapseContinuousTwo" role="tabpanel">
                                                        <div class="panel-body">
                                                            <div class="row">

                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">First Name</label>
                                                                        <input type="text" class="form-control  input-sm" value="Amjad">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Last Name</label>
                                                                        <input type="text" class="form-control  input-sm" value="Ali">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Phone Number</label>
                                                                        <input type="text" class="form-control  input-sm" value="923145140022">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Alternative Phone Number</label>
                                                                        <input type="text" class="form-control  input-sm" value="923143333373346">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Name/Company</label>
                                                                        <input type="text" class="form-control" value="SPTDigital">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <div class="input-icon">
                                                                            <input type="text" class="form-control  input-sm" value="info@sptdigial.com">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">City</label>
                                                                        <div class="input-icon">
                                                                            <input type="text" class="form-control  input-sm" value="Karachi">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Country</label>
                                                                        <div class="input-icon">
                                                                            <input type="text" class="form-control  input-sm" value="Pakistan">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Address</label>
                                                                        <div class="input-group input-group-sm">
                                                                            <input type="text" class="form-control input-sm" value="Office Plot#5, New Broad House Behind KDA">

                                                                            <span class="input-group-btn padding-left-10 pointer">
                                                                                <img src="images/icon-map-pin-end.png" height="24" data-target="#map-popup" data-toggle="modal" />
                                                                                <!-- <button class="btn btn-warning padding-left-15" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                                                                                        </span> </button> -->
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel card light margin-bottom-15">
                                                    <div class="panel-heading margin-bottom-0 bg-green-800" id="exampleHeadingContinuousThree" role="tab">
                                                        <a class="panel-title collapsed white font-size-14" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousThree" aria-controls="exampleCollapseContinuousThree" aria-expanded="false">
                                                            <span class="margin-right-10"> <img src="images/icon-job-completed.png" height="24" /></span> Package Details
                                                        </a>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="exampleCollapseContinuousThree" aria-labelledby="exampleHeadingContinuousThree" role="tabpanel">
                                                        <div class="panel-body">
                                                            <div class="row">

                                                                <div class="col-lg-10 col-sm-offset-1">

                                                                    <div class="font-size-18 text-center margin-bottom-10"> Shipment Type</div>





                                                                    <div class="row margin-bottom-30">
                                                                        <div class="col-lg-12 col-sm-offset-31">
                                                                            <div class="btn-group  btn-group-justified" data-toggle="buttons" style="background-color: #fbfbfb;">
                                                                                <label class="padding-10 btn btn-outline  btn-warning    text-center card " data-toggle="tab" data-target="#nav-tab-package">
                                                                                    <input type="radio" name="multiples">
                                                                                    <img src="images/icon-package.png" alt="" height="60">
                                                                                    <div class=" ">Package</div>
                                                                                </label>
                                                                                <label class="padding-10 btn btn-outline  btn-warning   text-center card " data-toggle="tab" data-target="#nav-tab-doc">
                                                                                    <input type="radio" name="multiples" checked="">
                                                                                    <img src="images/icon-doc.png" alt="" height="60">
                                                                                    <div class="mar">Docuement</div>
                                                                                </label>
                                                                                <!-- <label class="padding-10 btn btn-outline  btn-warning   text-center card " data-toggle="tab" data-target="#nav-tab-envelope">
                                                                                    <input type="radio" name="multiples">
                                                                                    <img src="images/icon-envelope.png" alt="" height="60">
                                                                                    <div class=" ">Envelop</div>
                                                                                </label> -->

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane fade active in " id="nav-tab-package">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
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
                                                                            </div>








                                                                        </div>
                                                                        <div class="tab-pane fade " id="nav-tab-doc">
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Type </label>
                                                                                        <div class="input-icon">
                                                                                            <select class="form-control  input-sm selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                                <option data-subtext=""> Confidential </option>
                                                                                                <option data-subtext=""> Normal </option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Envelop Size </label>
                                                                                        <div class="input-icon">
                                                                                            <select class="form-control input-sm selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="" data-live-search="true">
                                                                                                <option data-subtext=""> Standard (2 7/8 x 6 1/2) </option>
                                                                                                <option data-subtext=""> A1 (3 5/8 x 5 1/8) </option>
                                                                                                <option data-subtext=""> A4 (4 1/4 x 6 1/4) </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">


                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Service Type</label>
                                                                                        <div class="btn-group btn-group-sm" aria-label="Basic example" role="group">
                                                                                            <button type="button" class="btn btn-outline btn-success active">Normal Delivery (4-9 days)</button>
                                                                                            <button type="button" class="btn btn-outline btn-success ">Prime Delivery (24 hours)</button>


                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- <div class="btn-group  btn-group-justified">
                                                                                        <div class="btn btn-outline  btn-default btn-xs text-center form-control  font-weight-300  ">
                                                                                            <div class="radio-custom  radio-warning">
                                                                                                <input type="radio" id="Prime1" name="checkbox">
                                                                                                <label for="Prime1" class="font-weight-300 text-left">Prime Delivery (24 hours) </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="btn btn-outline  btn-default btn-xs text-center form-control  font-weight-300  ">
                                                                                            <div class="radio-custom  radio-warning">
                                                                                                <input type="radio" id="Normal" name="checkbox">
                                                                                                <label for="Normal" class="font-weight-300 text-left">Normal Delivery (4-9 days) </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->



                                                                                </div>
                                                                            </div>




                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Number of Pieces</label>
                                                                                    <input type="text" class="form-control input-sm" value="">
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Value of Shipment</label>
                                                                                    <input type="text" class="form-control input-sm" value="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Estimated Weight</label>

                                                                                    <div class="input-group  input-group-sm">
                                                                                        <span class="input-group-btn">
                                                                                            <button type="button" class="quantity-left-minus btn btn-default btn-sm" data-type="minus" data-field="">
                                                                                                <span class="glyphicon glyphicon-minus"></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text" id="quantity" name="quantity" class="form-control input-sm  text-center" value="10" min="1" max="100">
                                                                                        <span class="input-group-btn">
                                                                                            <button type="button" class="quantity-right-plus btn btn-default btn-sm" data-type="plus" data-field="">
                                                                                                <span class="glyphicon glyphicon-plus"></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <div class="input-group-btn">

                                                                                            <button type="button" class="btn btn-default btn-outline  btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                                                kg <span class="caret"></span>
                                                                                            </button>
                                                                                            <ul class="dropdown-menu pull-right">
                                                                                                <li><a href="javascript:void(0);">kg</a></li>
                                                                                                <li><a href="javascript:void(0);">Lb</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Delivery Notes</label>

                                                                                    <textarea rows="2" class="form-control input-sm" placeholder=""> </textarea>
                                                                                </div>

                                                                            </div>

                                                                            <div class="col-sm-12">
                                                                                <div class="form-group margin-bottom-5" style="border: 1px solid #eee;  padding: 5px;">
                                                                                    <div class="checkbox-custom checkbox-inline checkbox-warning pull-left1">
                                                                                        <input type="checkbox" id="chkInsurance1" name="checkbox" id="chkInsurance1">
                                                                                        <label for="chkInsurance1">Add dimensions of shipment </label>
                                                                                    </div>
                                                                                    <script>
                                                                                        $(function () {
                                                                                            $("#AddInsurance1").hide();
                                                                                            $("#chkInsurance1").click(function () {

                                                                                                if ($(this).is(":checked")) {
                                                                                                    $("#AddInsurance1").show();
                                                                                                } else {
                                                                                                    $("#AddInsurance1").hide();
                                                                                                }
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                </div>


                                                                            </div>


                                                                            <div class="col-lg-12">
                                                                                <div class="" id="AddInsurance1">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">


                                                                                            <div class="table-responsive1 margin-bottom-20 margin-top-0 padding-10 bg-blue-100 ">

                                                                                                <div class="margin-bottom-0 p clearfix">
                                                                                                    <div class="inline-block pull-left margin-right-10 font-size-16">
                                                                                                        Items Dimensions
                                                                                                    </div>



                                                                                                    <div class="inline-block pull-right   margin-bottom-10">
                                                                                                        <a href="javascript:void(0);" class="btn btn-sm   btn-warning">
                                                                                                            Add More
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="bg-blue-100">
                                                                                                    <table class="table bg-white  margin-bottom-0 table-hover1 table-condensed1  table-bordered1 text-center      " id="">


                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td>
                                                                                                                    <label>Title</label>
                                                                                                                    <div class="">
                                                                                                                        <input type="text" class="form-control input-sm">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <label>Quantity</label>
                                                                                                                    <div class="input-group  input-group-sm">
                                                                                                                        <span class="input-group-btn">
                                                                                                                            <button type="button" class="quantity-left-minus btn btn-default btn-sm" data-type="minus" data-field="">
                                                                                                                                <span class="glyphicon glyphicon-minus"></span>
                                                                                                                            </button>
                                                                                                                        </span>
                                                                                                                        <input type="text" id="quantity" name="quantity" class="form-control input-sm  text-center" value="10" min="1" max="100">
                                                                                                                        <span class="input-group-btn">
                                                                                                                            <button type="button" class="quantity-right-plus btn btn-default btn-sm" data-type="plus" data-field="">
                                                                                                                                <span class="glyphicon glyphicon-plus"></span>
                                                                                                                            </button>
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <label>Weight</label>
                                                                                                                    <div class="input-group  input-group-sm">
                                                                                                                        <input type="text" class="form-control input-sm">
                                                                                                                        <div class="input-group-btn">
                                                                                                                            <button type="button" class="btn btn-default   btn-outline1 btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                                                                                kg <span class="caret"></span>
                                                                                                                            </button>
                                                                                                                            <ul class="dropdown-menu pull-right">
                                                                                                                                <li><a href="javascript:void(0);">kg</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <label>Length</label>
                                                                                                                    <div class="input-group  input-group-sm">
                                                                                                                        <input type="text" class="form-control input-sm">
                                                                                                                        <div class="input-group-btn">
                                                                                                                            <button type="button" class="btn btn-default btn-outline1 btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                                                                                cm <span class="caret"></span>
                                                                                                                            </button>
                                                                                                                            <ul class="dropdown-menu pull-right">
                                                                                                                                <li><a href="javascript:void(0);">cm</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <label>Width</label>
                                                                                                                    <div class="input-group  input-group-sm">
                                                                                                                        <input type="text" class="form-control input-sm">
                                                                                                                        <div class="input-group-btn">

                                                                                                                            <button type="button" class="btn btn-default btn-outline1 btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                                                                                cm <span class="caret"></span>
                                                                                                                            </button>
                                                                                                                            <ul class="dropdown-menu pull-right">
                                                                                                                                <li><a href="javascript:void(0);">cm</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <label>Height</label>
                                                                                                                    <div class="input-group  input-group-sm">
                                                                                                                        <input type="text" class="form-control input-sm">
                                                                                                                        <div class="input-group-btn">
                                                                                                                            <button type="button" class="btn btn-default btn-outline1 btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                                                                                cm <span class="caret"></span>
                                                                                                                            </button>
                                                                                                                            <ul class="dropdown-menu pull-right">
                                                                                                                                <li><a href="javascript:void(0);">cm</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>

                                                                                                                <td width="80">
                                                                                                                    <label>&nbsp;</label>
                                                                                                                    <br />
                                                                                                                    <div class="btn-group input-group-sm" role="group">
                                                                                                                        <button type="button" class="btn btn-icon btn-default btn-sm btn-outline" title="duplicate"> <i class="ion-ios-copy"></i></button>
                                                                                                                        <button type="button" class="btn btn-icon btn-default btn-sm   btn-outline" title="remove"> <i class="ion-android-close"></i></button>

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


                                                                            <div class="col-sm-12">
                                                                                <div class="form-group margin-bottom-5" style="border: 1px solid #eee;  padding: 5px;">
                                                                                    <div class="checkbox-custom checkbox-inline checkbox-warning pull-left1">
                                                                                        <input type="checkbox" id="inputCheckbox" name="checkbox" checked>
                                                                                        <label for="inputCheckbox">Notify Recipient <span class="font-weight-300"> (Recipient will receive a notification message with order number) </span> </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group margin-bottom-5" style="border: 1px solid #eee;  padding: 5px;">
                                                                                    <div class="checkbox-custom checkbox-inline checkbox-warning pull-left">
                                                                                        <input type="checkbox" id="chkInsurance" name="checkbox" id="chkInsurance">
                                                                                        <label for="chkInsurance">Insurance Coverage <span class="font-weight-300"> (Recipient will receive a notification message with order number) </span> </label>
                                                                                    </div>
                                                                                    <div class="inline-block margin-left-10"> <a href="" data-target="#Insurance-popup" data-toggle="modal">Check it here to read more</a></div>
                                                                                    <script>
                                                                                        $(function () {
                                                                                            $("#AddInsurance").hide();
                                                                                            $("#chkInsurance").click(function () {

                                                                                                if ($(this).is(":checked")) {
                                                                                                    $("#AddInsurance").show();
                                                                                                } else {
                                                                                                    $("#AddInsurance").hide();
                                                                                                }
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">


                                                                                <div class="" id="AddInsurance">

                                                                                    <div class="table-responsive1 margin-bottom-0 margin-top-0 padding-10 bg-blue-100 ">
                                                                                        <div class="form-group1">
                                                                                            <!-- <label class="control-label">Value of Shipment</label> -->
                                                                                            <input type="text" class="form-control input-sm" placeholder="Insurance Handler Name " value="">
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

                                                <div class="panel card light margin-bottom-15">
                                                    <div class="panel-heading margin-bottom-0 bg-green-800" id="exampleHeadingContinuousFour" role="tab">
                                                        <a class="panel-title collapsed white font-size-14" data-parent="#exampleAccordionContinuous" data-toggle="collapse" href="#exampleCollapseContinuousFour" aria-controls="exampleCollapseContinuousThree" aria-expanded="false">
                                                            <span class="margin-right-10"> <img src="images/self-drop.png" height="24" /></span> Payment Details
                                                        </a>
                                                    </div>
                                                    <div class="panel-collapse collapse" id="exampleCollapseContinuousFour" aria-labelledby="exampleHeadingContinuousThree" role="tabpanel">
                                                        <div class="panel-body">


                                                            <div class="row margin-bottom-30">
                                                                <div class="col-lg-6 col-sm-offset-3">
                                                                    <div class="font-size-18 text-center margin-bottom-10"> How will you be paying for this shipment?</div>
                                                                    <div class="btn-group  btn-group-justified" data-toggle="buttons" style="background-color: #fbfbfb;">

                                                                        <label class="padding-10 btn btn-outline  btn-warning   text-center card " data-toggle="tab" data-target="#nav-tab-paypal">
                                                                            <input type="radio" name="multiples">
                                                                            <img src="images/icon-advance.png" alt="" height="60">
                                                                            <div class=" ">In Cash by the Shipper</div>
                                                                        </label>
                                                                        <label class="padding-10 btn btn-outline  btn-warning   text-center card " data-toggle="tab" data-target="#nav-tab-bank">
                                                                            <input type="radio" name="multiples">
                                                                            <img src="images/icon-shipperpayment.png" alt="" height="60">
                                                                            <div class=" ">Cash on Delivery</div>
                                                                        </label>
                                                                        <label class="padding-10 btn btn-outline  btn-warning   text-center card " data-toggle="tab" data-target="#nav-tab-card">
                                                                            <input type="radio" name="multiples" checked="">
                                                                            <img src="images/icon-creditcard.png" alt="" height="60">
                                                                            <div class="mar">Credit Card</div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane fade active in" id="nav-tab-paypal">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <form role="form">
                                                                                            <div class="form-group1">
                                                                                                <!-- <label for="username">Enter Amount</label>
                                                                                                <input type="text" class="form-control" name="username" placeholder="" required=""> -->

                                                                                                <div class="padding-20  text-center ">
                                                                                                    <div class="text-uppercase1 font-size-12 margin-bottom-0">Esitmated Cost including 17% VAT: </div>
                                                                                                    <div class="margin-bottom-0 font-size-20 font-weight-600 grey-800">
                                                                                                        4835 PKR
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button class="subscribe btn btn-primary btn-block" type="button"> Received </button> <br />
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane fade " id="nav-tab-card">

                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <form role="form">
                                                                                        <div class="form-group">
                                                                                            <label for="username">Full name (on the card)</label>
                                                                                            <input type="text" class="form-control" name="username" placeholder="" required="">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label for="cardNumber">Card number</label>

                                                                                            <div class="input-group">
                                                                                                <input type="tel" class="form-control input-sm" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="">
                                                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i> <i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i></span>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <div class="form-group">
                                                                                                    <label><span class="hidden-xs">Expiration</span> </label>
                                                                                                    <div class="input-group">
                                                                                                        <input type="number" class="form-control input-sm" placeholder="MM" name="">

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <div class="form-group">
                                                                                                    <label data-toggle="tooltip" title="">&nbsp;</label>
                                                                                                    <input type="number" class="form-control input-sm" placeholder="YY" name="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-4">
                                                                                                <div class="form-group">
                                                                                                    <label data-toggle="tooltip" title="">CVV <i class="fa fa-question-circle"></i></label>
                                                                                                    <input type="number" class="form-control input-sm" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <button class="subscribe btn btn-info btn-block" type="button"> Confirm </button>
                                                                                        <br />
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="tab-pane fade" id="nav-tab-bank">
                                                                            <div>

                                                                                <div class="padding-20  text-center ">
                                                                                    <div class="text-uppercase1 font-size-12 margin-bottom-0">Recipient will pay including 17% VAT: </div>
                                                                                    <div class="margin-bottom-0 font-size-20 font-weight-600 grey-800">
                                                                                        4835 PKR
                                                                                    </div>
                                                                                </div>


                                                                                <button class="subscribe btn btn-primary btn-block" type="button"> Confirm </button> <br />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>






                                                <div class="row no-space bg-white margin-top-30 margin-bottom-30 ">

                                                    <div class="col-lg-3">


                                                        <div class="media padding-20 text-right ">
                                                            <div class="media-body">
                                                                <div class="small text-uppercase grey-400 font-weight-600">From</div>
                                                                <div class="font-weight-600 font-size-16">Karachi, Pakistan </div>
                                                            </div>
                                                            <div class="media-right padding-left-10">
                                                                <img src="images/icon-map-pin-start.png" class="img-bordered1" style="height:36px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div style="position: absolute;
                                                        top: 8px;
                                                        font-size: 34px;
                                                        text-align: center;
                                                        left: 0;
                                                        right: 0;">....................</div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="media padding-20">
                                                            <div class="media-left padding-right-10">
                                                                <img src="images/icon-map-pin-start.png" class="img-bordered1" style="height:36px">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="small text-uppercase grey-400 font-weight-600">To</div>
                                                                <div class="font-weight-600 font-size-16">Karachi, Pakistan </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="padding-20  text-right ">
                                                            <div class="text-uppercase1 font-size-12 margin-bottom-0">Esitmated Cost including 17% VAT: </div>
                                                            <div class="margin-bottom-0 font-size-20 font-weight-600 grey-800">
                                                                4835 PKR
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

                                <div class="col-sm-12">
                                    <br />
                                    <div class="form-group1">
                                        <button type="button" class="btn btn-primary  btn-round1 btn-lg" data-target="#orderdetail-popup" data-toggle="modal">
                                            Submit Details
                                        </button>
                                        <button type="button" class="btn btn-default btn-round1  btn-lg">
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="tab-pane " id="Bulk">
                            <div class="panel card light margin-bottom-15">
                                <div class="panel-heading  bg-green-800 ">
                                    <div class="panel-title white font-size-14">
                                        Bulk Upload



                                        <button type="button" class="btn btn-default btn-xs  btn-round1 pull-right  ">
                                            Download Template
                                        </button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="" style="max-width: 600px; margin: auto;">
                                        <div class="input-group form-group ">
                                            <input placeholder="" type="text" class="form-control ">
                                            <div class="input-group-btn">
                                                <div class="btn btn-info  ">
                                                    <span class="glyphicon glyphicon-folder-open margin-right-5"> </span>
                                                    Browse
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-white padding-15 text-center margin-bottom-30" style="border:2px dashed #eee;">
                                            <img src="images/icon-file-upload.png" alt="" height="80"> <br> <br> Drag
                                            and drop
                                            your CSV/Excel file here </div>


                                        <div class="row">

                                            <div class="col-sm-12 text-center">

                                                <div class="form-group1">
                                                    <button type="button" class="btn btn-primary  btn-round1  ">
                                                        Submit Details
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-round1  ">
                                                        Clear
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>





                        </div>
                        <div class="tab-pane" id="listing">

                            <div class="panel card light margin-bottom-15">
                                <div class="panel-heading  bg-green-800 ">
                                    <div class="panel-title white font-size-14">
                                        Today Orders
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                        <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                        </div>



                                        <div class="inline-block pull-left margin-right-10">
                                            <select class="form-control input-sm ">
                                                <option>Filter By City</option>
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


                                            <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
                                                View All
                                            </a> -->


                                        </div>
                                    </div>


                                    <div class="table-responsive ">
                                        <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                                            <thead>
                                                <tr class="">
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
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
                                                    <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">AC1854567</td>

                                                    <td class="text-left">Normal Delivery</td>
                                                    <td class="text-left">
                                                        <div class="label label-success"> Pending </div>
                                                    </td>
                                                    <td class="text-left">2 kg </td>
                                                    <td class="text-left">11:34pm </td>
                                                    <td class="text-left"> Document</td>
                                                    <td class="text-left">Lahore</td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                            Details
                                                        </button>
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">AA1234227</td>

                                                    <td class="text-left">Normal Delivery</td>
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
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
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
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">AC1854567</td>

                                                    <td class="text-left">Prime Delivery</td>
                                                    <td class="text-left">
                                                        <div class="label label-success"> Pending </div>
                                                    </td>
                                                    <td class="text-left">22 kg </td>
                                                    <td class="text-left">11:34pm </td>
                                                    <td class="text-left"> Document</td>
                                                    <td class="text-left">Lahore</td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                            Details
                                                        </button>
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
                                                    </td>
                                                </tr>
                                                <tr>
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
                                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                        </button>

                                                    </td>
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

                        <div class="ff">Click edit to to change order details</div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
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