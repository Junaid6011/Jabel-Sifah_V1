<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link href="../plugins/images/hypernet-favicon.png" rel="icon" type="image/png" />
    <title>Welcome</title>
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



        <div class="page-content  container-fluid">

            <div class="row ">
                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                            <div class="white">
                                <div class="margin-bottom-10   ">
                                    <div class=" ">
                                        Total Customers
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" margin-right-15 inline">
                                        <i> <img src="images/icon-job-total - Copy.png" alt="img" height="40"> </i>
                                    </div>
                                    <b class="font-size-24" style="position:relative; top:5px;">46</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-teal-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Active </div>

                                </div>
                            </div>
                            <b class="font-size-24">38</b>
                        </div>

                        <div
                            class="label white  bg-teal-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                            All
                        </div>
                    </div>


                </div>



                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-green-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Inactive </div>

                                </div>
                            </div>
                            <b class="font-size-24">08</b>

                            <div
                                class="label white  bg-green-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                All
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">

                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-blue-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Deactivated </div>

                                </div>
                            </div>
                            <b class="font-size-24">11</b>
                            <div
                                class="label white  bg-blue-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                This month
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-red-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Expiring </div>

                                </div>
                            </div>
                            <b class="font-size-24">04</b>
                            <div
                                class="label white  bg-red-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                This month
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-green-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Renewed </div>

                                </div>
                                <b class="font-size-24">04</b>
                                <div
                                    class="label white  bg-green-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                    This month
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
                                <li class="active"><a data-toggle="tab" href="#Active">
                                        Active</a></li>
                                <li class=""><a data-toggle="tab" href="#Inactive">Inactive </a></li>
                                <li class=""><a data-toggle="tab" href="#Deactivated">Deactivated </a></li>
                                <li class=""><a data-toggle="tab" href="#Expiring">Expiring </a></li>
                                <li class=""><a data-toggle="tab" href="#Renewed">Renewed </a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Active">
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
                                                            
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>

                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Contract Number </th>
                                                            <th class="text-left">Contract Start </th>
                                                            <th class="text-left">Contract End </th>
                                                            <th class="text-left">Contract Expiry (Days)</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> GLOBAL EDUCATION SYSTEMS</a></td>
                                                            <td>MSO/CECC/24
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CARINA SHIPPING

                                                                </a></td>
                                                            <td>QAS/CECC/12
                                                            </td>
                                                            <td> 01-04-18
                                                            </td>
                                                            <td> 30-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 22-02-18
                                                            </td>
                                                            <td> 01-12-18
                                                            </td>
                                                            <td> 313 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>PXJ/CECC/09
                                                            </td>
                                                            <td> 01-03-18
                                                            </td>
                                                            <td> 02-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CECC

                                                                </a></td>
                                                            <td>PAS/CECC/11
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix</a></td>
                                                            <td>SPD/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-03-18
                                                            </td>
                                                            <td> 40 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING
                                                                </a></td>
                                                            <td>PAS/CECC/13
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 30 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-04-18
                                                            </td>
                                                            <td> 70 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC</a></td>
                                                            <td>PAS/CECC/15
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 08-06-18
                                                            </td>
                                                            <td> 110 </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Inactive">
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
                                                         
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Contract Number </th>
                                                            <th class="text-left">Contract Start </th>
                                                            <th class="text-left">Contract End </th>
                                                            <th class="text-left">Contract Expiry (Days)</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>MSO/CECC/24
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-11-18
                                                            </td>
                                                            <td> 335 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CECC

                                                                </a></td>
                                                            <td>QAS/CECC/12
                                                            </td>
                                                            <td> 01-04-18
                                                            </td>
                                                            <td> 30-10-18
                                                            </td>
                                                            <td> 180 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 22-02-18
                                                            </td>
                                                            <td> 01-12-18
                                                            </td>
                                                            <td> 313 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC
                                                                </a></td>
                                                            <td>PXJ/CECC/09
                                                            </td>
                                                            <td> 01-03-18
                                                            </td>
                                                            <td> 02-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Gabormix

                                                                </a></td>
                                                            <td>PAS/CECC/11
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>SPD/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-08-18
                                                            </td>
                                                            <td> 190 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>PAS/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 18-12-18
                                                            </td>
                                                            <td> 305 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>MRL/CECC/10
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-05-18
                                                            </td>
                                                            <td> 100 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC</a></td>
                                                            <td>PAS/CECC/15
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 08-08-18
                                                            </td>
                                                            <td> 170 </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Deactivated">
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
                                                           
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Contract Number </th>
                                                            <th class="text-left">Contract Start </th>
                                                            <th class="text-left">Contract End </th>
                                                            <th class="text-left">Contract Expiry (Days)</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>MSO/CECC/24
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-11-18
                                                            </td>
                                                            <td> 335 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CECC

                                                                </a></td>
                                                            <td>QAS/CECC/12
                                                            </td>
                                                            <td> 01-04-18
                                                            </td>
                                                            <td> 30-10-18
                                                            </td>
                                                            <td> 180 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 22-02-18
                                                            </td>
                                                            <td> 01-12-18
                                                            </td>
                                                            <td> 313 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC
                                                                </a></td>
                                                            <td>PXJ/CECC/09
                                                            </td>
                                                            <td> 01-03-18
                                                            </td>
                                                            <td> 02-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Gabormix

                                                                </a></td>
                                                            <td>PAS/CECC/11
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>SPD/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-08-18
                                                            </td>
                                                            <td> 190 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>PAS/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 18-12-18
                                                            </td>
                                                            <td> 305 </td>

                                                        </tr>

                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC</a></td>
                                                            <td>PAS/CECC/15
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 08-08-18
                                                            </td>
                                                            <td> 170 </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Expiring">
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
                                                           
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Contract Number </th>
                                                            <th class="text-left">Contract Start </th>
                                                            <th class="text-left">Contract End </th>
                                                            <th class="text-left">Contract Expiry (Days)</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>MSO/CECC/24
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-11-18
                                                            </td>
                                                            <td> 335 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CECC

                                                                </a></td>
                                                            <td>QAS/CECC/12
                                                            </td>
                                                            <td> 01-04-18
                                                            </td>
                                                            <td> 30-10-18
                                                            </td>
                                                            <td> 180 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 22-02-18
                                                            </td>
                                                            <td> 01-12-18
                                                            </td>
                                                            <td> 313 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC
                                                                </a></td>
                                                            <td>PXJ/CECC/09
                                                            </td>
                                                            <td> 01-03-18
                                                            </td>
                                                            <td> 02-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Gabormix

                                                                </a></td>
                                                            <td>PAS/CECC/11
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>SPD/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-08-18
                                                            </td>
                                                            <td> 190 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>PAS/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 18-12-18
                                                            </td>
                                                            <td> 305 </td>

                                                        </tr>

                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC</a></td>
                                                            <td>PAS/CECC/15
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 08-08-18
                                                            </td>
                                                            <td> 170 </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Renewed">
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
                                                           
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Customer </th>
                                                            <th class="text-left">Contract Number </th>
                                                            <th class="text-left">Contract Start </th>
                                                            <th class="text-left">Contract End </th>
                                                            <th class="text-left">Contract Expiry (Days)</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>MSO/CECC/24
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-11-18
                                                            </td>
                                                            <td> 335 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> CECC

                                                                </a></td>
                                                            <td>QAS/CECC/12
                                                            </td>
                                                            <td> 01-04-18
                                                            </td>
                                                            <td> 30-10-18
                                                            </td>
                                                            <td> 180 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING
                                                                </a></td>
                                                            <td>MRL/CECC/11
                                                            </td>
                                                            <td> 22-02-18
                                                            </td>
                                                            <td> 01-12-18
                                                            </td>
                                                            <td> 313 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC
                                                                </a></td>
                                                            <td>PXJ/CECC/09
                                                            </td>
                                                            <td> 01-03-18
                                                            </td>
                                                            <td> 02-05-18
                                                            </td>
                                                            <td> 60 </td>

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Gabormix

                                                                </a></td>
                                                            <td>PAS/CECC/11
                                                            </td>
                                                            <td> 01-01-18
                                                            </td>
                                                            <td> 31-12-18
                                                            </td>
                                                            <td> 365 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CARINA SHIPPING</a>
                                                            </td>
                                                            <td>SPD/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-08-18
                                                            </td>
                                                            <td> 190 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>PAS/CECC/12
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 18-12-18
                                                            </td>
                                                            <td> 305 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Gabormix
                                                                </a></td>
                                                            <td>MRL/CECC/10
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 28-05-18
                                                            </td>
                                                            <td> 100 </td>

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> CECC</a></td>
                                                            <td>PAS/CECC/15
                                                            </td>
                                                            <td> 18-02-18
                                                            </td>
                                                            <td> 08-08-18
                                                            </td>
                                                            <td> 170 </td>

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