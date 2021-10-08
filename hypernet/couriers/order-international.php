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
                    <div class="col-md-3">
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
                                        <b class="font-size-24" style="position:relative; top:5px;">120</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3">

                        <div class="widget shadow card">
                            <div class=" padding-top-0 pa bg-teal-800 vertical-align height-100 white  text-center relative ">
                                <div class="vertical-align-middle">
                                    <div class="margin-bottom-0 ">

                                        <div class="font-size-14 margin-bottom-5 ">Prime Delivery </div>
                                        <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                        </div>
                                    </div>
                                    <b class="font-size-18">25</b>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="widget shadow card">
                            <div class=" padding-top-0 pa bg-green-800 vertical-align height-100 white  text-center relative ">
                                <div class="vertical-align-middle">
                                    <div class="margin-bottom-0 ">

                                        <div class="font-size-14 margin-bottom-5 ">Normal Delivery </div>
                                        <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                        </div>
                                    </div>
                                    <b class="font-size-18">07</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget shadow card">
                            <div class=" padding-top-0 pa bg-brown-800 vertical-align height-100 white  text-center relative ">
                                <div class="vertical-align-middle">
                                    <div class="margin-bottom-0 ">

                                        <div class="font-size-14 margin-bottom-5 ">Inprogress </div>
                                        <div class="margin-bottom-5"> <img src="images/icon-online.png" alt="img" height="24">
                                        </div>
                                    </div>
                                    <b class="font-size-18">13</b>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="panel panel-default shadow" style="min-height: 200px;">
                    <div class="panel-heading font-weight-600 margin-bottom-0">
                    <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                            <li class="active"><a data-toggle="tab" href="#Pending">Pending </a></li>
                            <li class=""><a data-toggle="tab" href="#Scheduled">Scheduled </a></li>
                            <li class=""><a data-toggle="tab" href="#Inprogress">Last Mile Delivery </a></li>
                            <li class=""><a data-toggle="tab" href="#Completed"> Completed</a></li>
                            <li class=""><a data-toggle="tab" href="#Returned"> Returned</a></li>
                        </ul>
                    </div>
                    <div class="panel-body padding-0">
                        <div class="tab-content">
                            <div class="tab-pane active " id="Pending">
                                <div class="panel panel-default margin-bottom-0 ">
                                    <div class="panel-body padding-15 ">

                                        <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>

                                            <!-- <div class="inline-block pull-left margin-right-10">
    
    
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
    
                                      </div> -->

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

                                                <a href="bagging.php" class="btn btn-sm   btn-default btn-dark">
                                                    Bagging
                                                </a>

                                                <!-- <button type="button" class="btn btn-sm   btn-default btn-dark " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->

                                                <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
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
                                                        <th class="text-center " width="50"> <input type="checkbox" /> </th>
                                                        <th class="text-left">Order # </th>
                                                        <th class="text-left">Priority</th>

                                                        <th class="text-left"> Pending Since </th>
                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight </th>
                                                        <th class="text-left">Time &amp; Date</th>

                                                        <th class="text-left">Package Type </th>

                                                        <th class="text-left">Desitination</th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AB1238967</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>
                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>
                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>
                                                        <td class="text-left"> 2 Hours </td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center "> <input type="checkbox" /> </td>
                                                        <td class="text-left">AV1454567</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>

                                                        <td class="text-left"> 2 Hours </td>
                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Pending </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
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

                                            <!-- <div class="inline-block pull-left margin-right-10">
    
    
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
    
                                      </div> -->

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

                                                <a href="bagging.php" class="btn btn-sm   btn-default btn-dark">
                                                    Bagging
                                                </a>
                                                <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
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
                                                        <th class="text-left">Order # </th>
                                                        <th class="text-left">Priority</th>

                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight </th>
                                                        <th class="text-left">Time &amp; Date</th>

                                                        <th class="text-left">Package Type </th>

                                                        <th class="text-left">Order City</th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AB1238967</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AV1454567</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Scheduled </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>





                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane " id="Inprogress">
                                <div class="panel panel-default margin-bottom-0 ">
                                    <div class="panel-body padding-15 ">

                                        <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>

                                            <!-- <div class="inline-block pull-left margin-right-10">
    
    
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
    
                                      </div> -->

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

                                                <a href="bagging.php" class="btn btn-sm   btn-default btn-dark">
                                                    Bagging
                                                </a>
                                                <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
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
                                                        <th class="text-left">Order # </th>
                                                        <th class="text-left">Priority</th>

                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight </th>
                                                        <th class="text-left">Time &amp; Date</th>

                                                        <th class="text-left">Package Type </th>

                                                        <th class="text-left">Order City</th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AB1238967</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AA1234227</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AC1854567</td>
                                                        <td class="text-left">
                                                            <div class="label label-danger"> High </div>
                                                        </td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">AV1454567</td>
                                                        <td class="text-left">
                                                            <div class="label label-warning"> Normal </div>
                                                        </td>


                                                        <td class="text-left">Normal Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Dispatched </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
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

                                            <!-- <div class="inline-block pull-left margin-right-10">
    
    
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
    
                                      </div> -->

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

                                                <a href="bagging.php" class="btn btn-sm   btn-default btn-dark">
                                                    Bagging
                                                </a>
                                                <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
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
                                                        <th class="text-left">Order # </th>

                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight </th>
                                                        <th class="text-left">Time &amp; Date</th>

                                                        <th class="text-left">Package Type </th>
                                                        <th class="text-left">Order City</th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">AT1568967</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TC586777</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TC589632</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TR8928931</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TY78926321</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Dubai, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">FR89263</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Completed </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Sharjah, UAE</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="Returned">
                                <div class="panel panel-default margin-bottom-0 ">
                                    <div class="panel-body padding-15  ">
                                        <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                            <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                            </div>

                                            <!-- <div class="inline-block pull-left margin-right-10">
    
    
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
    
                                      </div> -->

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

                                                <!-- <a href="bagging.php" class="btn btn-sm   btn-default btn-dark">
                                                    Bagging
                                                </a> -->
                                                <!-- <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
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
                                                        <th class="text-left">Order # </th>

                                                        <th class="text-left">Service type</th>
                                                        <th class="text-left">Status</th>
                                                        <th class="text-left">Weight </th>
                                                        <th class="text-left">Time &amp; Date</th>

                                                        <th class="text-left">Package Type </th>
                                                        <th class="text-left">Reason</th>

                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left">AT1568967</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left"> Untraceable address</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TC586777</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Restricted area</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TC589632</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Incomplete address</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TR8928931</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Consignee shifted</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">TY78926321</td>

                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">2 </td>
                                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                                        <td class="text-left"> Document</td>

                                                        <td class="text-left">Restricted area</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">FR89263</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Hold for consignee request </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">FR89263</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Hold for consignee request </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>     <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">FR89263</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Hold for consignee request </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">FR89263</td>


                                                        <td class="text-left">Prime Delivery </td>
                                                        <td class="text-left">
                                                            <div class="label label-success"> Return </div>
                                                        </td>
                                                        <td class="text-left">24 </td>
                                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                                        <td class="text-left"> Package</td>

                                                        <td class="text-left">Hold for consignee request </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                                Details
                                                            </button>
                                                            <button type="button" class="btn btn-icon  btn-info btn-xs " >
                                                                Schedule
                                                            </button>
                                                            <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Schedule</button> -->
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

                            <!-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Mode of Transport</label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="Select" data-live-search="true">
                                            <option data-subtext=""> By Road </option>
                                            <option data-subtext=""> By Air</option>
                                            <option data-subtext=""> By Ship </option>
                                            <option data-subtext=""> Others </option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Assign to </label>
                                    <div class="input-icon">
                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="Select " data-live-search="true">
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

        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>
    </body>

</html>