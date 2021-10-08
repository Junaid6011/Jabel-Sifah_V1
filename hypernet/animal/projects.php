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
    <link rel="stylesheet" href="../plugins/styles/global.css">
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



        <div class="page-content  container-fluid">
            <div class="row ">
                <div class="col-md-7">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Projects
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-vessels (2).png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">35</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-space1">
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-blue-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Completed</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-online.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-18">25</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget shadow card">
                                        <div
                                            class=" padding-top-0 pa bg-red-700 vertical-align height-100 white  text-center relative ">
                                            <div class="vertical-align-middle">
                                                <div class="margin-bottom-0 ">

                                                    <div class="font-size-14 margin-bottom-5 ">Inprogress</div>
                                                    <div class="margin-bottom-5"> <img src="images/icon-offline.png"
                                                            alt="img" height="24"> </div>
                                                </div>
                                                <b class="font-size-20">10</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class=" ">
                                <div class="row no-space1">
                                    <div class="col-md-6">
                                        <div class="widget shadow card margin-0">
                                            <div
                                                class="  bg-green-700 vertical-align padding-15 white  text-center relative ">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-0 ">

                                                        <div class="font-size-14 margin-bottom-5 ">Profitable Projects
                                                        </div>

                                                    </div>
                                                    <b class="font-size-18">13</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="widget shadow card margin-0">
                                            <div
                                                class="  bg-green-700 vertical-align padding-15 white  text-center relative ">
                                                <div class="vertical-align-middle">
                                                    <div class="margin-bottom-0 ">

                                                        <div class="font-size-14 margin-bottom-5 "> Least Profitable
                                                            Projects
                                                        </div>

                                                    </div>
                                                    <b class="font-size-20">3</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-teal-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">
                                            <div class=" font-size-18 margin-bottom-20">Most Demurrage</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-teal-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-Demurrage">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                                $4,537.50 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> ANANTARA </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">17%</span>
                                                <span class="" id="mrq-v4">more than yesterday</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>

                                    $("#mrq-dd-Demurrage").on('change', function () {
                                        debugger
                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            $("#mrq-v1").text('GEMCO')
                                            $("#mrq-v2").text('PROMAR')
                                            $("#mrq-v3").text('17%')
                                            $("#mrq-v4").text('more than yesterday')
                                        }
                                        else {
                                            $("#mrq-v1").text('  $7,222.50')
                                            $("#mrq-v2").text('CARINA SHIPPING')
                                            $("#mrq-v3").text('11%')
                                            $("#mrq-v4").text('more than last year')
                                        }
                                    })
                                </script>
                            </div>



                        </div>
                        <div class="col-lg-6">

                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-teal-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">
                                            <div class=" font-size-18 margin-bottom-20">Most Profitable</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-teal-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-Profitable">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq1-v1">
                                                $50,537.50 </div>

                                            <div class="font-size-14 margin-bottom-10" id="mrq1-v2"> GEMCO </div>
                                            <div class="font-size-10">
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq1-v3">17%</span>
                                                <span class="" id="mrq1-v4">more than yesterday</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>

                                    $("#mrq-dd-Profitable").on('change', function () {
                                        debugger
                                        if (this.value.trim().toLowerCase().includes('month')) {
                                            $("#mrq1-v1").text(' $10,537.50')
                                            $("#mrq1-v2").text('PROMAR')
                                            $("#mrq1-v3").text('17%')
                                            $("#mrq1-v4").text('more than yesterday')
                                        }
                                        else {
                                            $("#mrq1-v1").text(' $57,837.50')
                                            $("#mrq1-v2").text('SHIPPING CARINA ')
                                            $("#mrq1-v3").text('11%')
                                            $("#mrq1-v4").text('more than last year')
                                        }
                                    })
                                </script>
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
                                <li class="active"><a data-toggle="tab" href="#Completed" aria-expanded="true">
                                        Inprogress</a></li>
                                <li class=""><a data-toggle="tab" href="#Recent" aria-expanded="false">Completed
                                    </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Completed">
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
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Job</th>
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Material </th>
                                                            <th class="text-left">Current Profit (USD K) </th>
                                                            <th>Demurrage (per hour) </th>
                                                            <th>Demurrage Chargable </th>
                                                            <th>Quantity</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> LUSAIL PALACE - EASTERN VIEW</a>
                                                            </td>
                                                            <td> <a href="customer.php"> GEMCO </a></td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> $15.73 </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($1150.00) </td>
                                                            <td> 704,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#info1"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="9" class="padding-0  ">
                                                                <div class="collapse bg-cyan-100 padding-0" id="info1">
                                                                    <table
                                                                        class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                        <thead>
                                                                            <tr class="">
                                                                                <th>Free loading time </th>
                                                                                <th>Free discharging time </th>
                                                                                <th>Laytime terms </th>
                                                                                <th>Bad weather </th>
                                                                                <th>Start date </th>
                                                                                <th>End date </th>
                                                                                <th>Period </th>
                                                                                <th>Loading port</th>
                                                                                <th>Discharging port </th>
                                                                                <th>Budgeted DA </th>
                                                                                <th>Fuel Rate </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> 5.00 </td>
                                                                                <td> 7.00 </td>
                                                                                <td>4 WWWW</td>
                                                                                <td> 3.00 </td>
                                                                                <td>01-June-18</td>
                                                                                <td>31-Dec-18 </td>
                                                                                <td> 183.00 </td>
                                                                                <td>Musandam
                                                                                </td>
                                                                                <td>Mesaieed</td>
                                                                                <td> 12,000.00</td>
                                                                                <td> $775.00
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - QR
                                                                    200-500 KG
                                                                </a></td>
                                                            <td><a href="customer.php"> CARINA SHIPPING </a>

                                                            </td>
                                                            <td>Quarry Run 200-500 KG
                                                            </td>
                                                            <td> $8.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($2250.00) </td>
                                                            <td> 604,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>


                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR 3-6T
                                                                </a></td>
                                                            <td> <a href="customer.php"> GEMCO </a>

                                                            </td>
                                                            <td>Armour Rock 3-6 T
                                                            </td>
                                                            <td> $15.73 </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($1750.00) </td>
                                                            <td> 323,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - QR
                                                                    200-500 KG

                                                                </a></td>
                                                            <td><a href="customer.php"> ANANTARA</a>

                                                            </td>
                                                            <td>Quarry Run 200-500 KG</td>
                                                            <td> $6.00
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 467,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR
                                                                    3-6T</a></td>
                                                            <td><a href="customer.php"> CARINA SHIPPING </a>
                                                            </td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> $6.00
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 282,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - UR 45-75
                                                                    MM
                                                                </a></td>
                                                            <td><a href="customer.php"> CECC </a>
                                                            </td>
                                                            <td>Underlayer Rocks 45-75 MM
                                                            </td>
                                                            <td> $8.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 839,330</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php">TEKFEN KHASAB
                                                                </a></td>
                                                            <td> <a href="customer.php"> PROMAR </a>

                                                            </td>
                                                            <td>Armour Rock 3-6 T
                                                            </td>
                                                            <td> $7.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($1150.00) </td>
                                                            <td> 839,330</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php">HALUL PROJECT - QR
                                                                    200-500 KG
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC SAMISMA </a>
                                                            </td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> $10.00 </td>
                                                            <td> $180.00 </td>
                                                            <td> Yes ($1150.00) </td>
                                                            <td> 947,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> IRAN - QATAR
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC </a>
                                                            </td>
                                                            <td>Quarry Run 500-1000 KG
                                                            </td>
                                                            <td> $8.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 328,450</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> Doha port
                                                                </a></td>
                                                            <td><a href="customer.php"> GEMCO </a></td>
                                                            <td>Underlayer Rocks 45-75 MM
                                                            </td>
                                                            <td> $7.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 545,450</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Recent">
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
                                                                    <input type="text" class="form-control date"
                                                                        value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <div class="input-group-addon">to</div>
                                                                    <input type="text" class="form-control date"
                                                                        value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="inline-block pull-left margin-right-10">
                                                    <select class="form-control input-sm ">
                                                        <option>All Jobs</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                        <option>JOB119 </option>
                                                        <option>JOB221</option>
                                                        <option>JOB123</option>
                                                    </select>
                                                </div> -->
                                                <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                    <div class="">
                                                        <input type="submit" class="btn btn-sm btn-info" value="Go">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Job</th>
                                                            <th class="text-left">Name</th>
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Material </th>
                                                            <th class="text-left">PROFIT/Loss (USD K) </th>
                                                            <th>Demurrage (per hour) </th>
                                                            <th>Demurrage Chargable </th>
                                                            <th>Quantity</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php">
                                                                    LUSAIL PALACE - EASTERN VIEW</a></td>
                                                            <td> <a href="customer.php"> GEMCO </a></td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> $15.73 </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 704,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#info1t"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="9" class="padding-0  ">
                                                                <div class="collapse bg-cyan-100 padding-0" id="info1t">
                                                                    <table
                                                                        class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                                        <thead>
                                                                            <tr class="">
                                                                                <th>Free loading time </th>
                                                                                <th>Free discharging time </th>
                                                                                <th>Laytime terms </th>
                                                                                <th>Bad weather </th>
                                                                                <th>Start date </th>
                                                                                <th>End date </th>
                                                                                <th>Period </th>
                                                                                <th>Loading port</th>
                                                                                <th>Discharging port </th>
                                                                                <th>Budgeted DA </th>
                                                                                <th>Fuel Rate </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> 5.00 </td>
                                                                                <td> 7.00 </td>
                                                                                <td>4 WWWW</td>
                                                                                <td> 3.00 </td>
                                                                                <td>01-June-18</td>
                                                                                <td>31-Dec-18 </td>
                                                                                <td> 183.00 </td>
                                                                                <td>Musandam
                                                                                </td>
                                                                                <td>Mesaieed</td>
                                                                                <td> 12,000.00</td>
                                                                                <td> $775.00
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>




                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR 3-6T
                                                                </a></td>
                                                            <td> <a href="customer.php"> GEMCO </a>

                                                            </td>
                                                            <td>Armour Rock 3-6 T
                                                            </td>
                                                            <td> $15.73 </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 323,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - QR
                                                                    200-500 KG

                                                                </a></td>
                                                            <td><a href="customer.php"> ANANTARA</a>

                                                            </td>
                                                            <td>Quarry Run 200-500 KG</td>
                                                            <td> $6.00
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($1890.00) </td>
                                                            <td> 467,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - AR
                                                                    3-6T</a></td>
                                                            <td><a href="customer.php"> CARINA SHIPPING </a>
                                                            </td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> <span class="red-800">($8.25)</span>
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 282,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> HALUL PROJECT - UR 45-75
                                                                    MM
                                                                </a></td>
                                                            <td><a href="customer.php"> CECC </a>
                                                            </td>
                                                            <td>Underlayer Rocks 45-75 MM
                                                            </td>
                                                            <td> $8.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> Yes ($1890.00) </td>
                                                            <td> 839,330</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>

                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php">TEKFEN KHASAB
                                                                </a></td>
                                                            <td> <a href="customer.php"> PROMAR </a>

                                                            </td>
                                                            <td>Armour Rock 3-6 T
                                                            </td>
                                                            <td> $7.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 839,330</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php">HALUL PROJECT - QR
                                                                    200-500 KG
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC SAMISMA </a>
                                                            </td>
                                                            <td>Aggregates 10-20 mm</td>
                                                            <td> $150.00 </td>
                                                            <td> $180.00 </td>
                                                            <td> No </td>
                                                            <td> 947,000</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <tr class="">
                                                            <td class="text-left"> <a href="job.php">JOB189</a>
                                                            </td>
                                                            <td> <a href="project.php"> IRAN - QATAR
                                                                </a></td>
                                                            <td><a href="customer.php"> UCC </a>
                                                            </td>
                                                            <td>Quarry Run 500-1000 KG
                                                            </td>
                                                            <td> $8.25
                                                            </td>
                                                            <td> $150.00 </td>
                                                            <td> No </td>
                                                            <td> 328,450</td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-icon  btn-default btn-xs collapsed"
                                                                    data-toggle="collapse" data-target="#cc"><i
                                                                        class="icon ion-plus"></i>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>