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

<body class="layout-boxed admin-bg ">
    <?php include_once('_header-admin.php'); ?>




    <div class="page1 bg-white">
        <div class="page-header">
            <h1 class="page-title">Activity/Tasks</h1>

            <div class="page-header-actions">
                <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                    Back
                </a>
            </div>
        </div>



        <div class="page-content  ">



            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <a data-toggle="tab" href="#addnew" class="grey-700 active">
                        <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                            <div class="margin-bottom-0   primary-800">
                                <i class="ion-android-add"></i>
                            </div>
                            <span class="font-weight-600 text-uppercase ">Add New</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-xs-6">
                    <a data-toggle="tab" href="#Bulk" class="grey-700 active">
                        <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                            <div class="margin-bottom-0    primary-800">
                                <i class="ion-android-add"></i>
                            </div>
                            <span class="font-weight-600 text-uppercase ">Bulk Upload  (CSV/Excel)</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-xs-6">
                    <a data-toggle="tab" href="#listing" class="grey-700">
                        <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                            <div class="margin-bottom-0    primary-800">
                                <i class="ion-ios-list-outline"></i>
                            </div>
                            <span class="font-weight-600 text-uppercase ">Listing</span>
                        </div>
                    </a>
                </div>


            </div>



            <div class="tab-content ">
                <div class="tab-pane active" id="addnew">

                    <h3 class="margin-top-0 font-size-18">Please fill out the following form</h3>
                    <hr />
                    <!-- <div class=" alert alert-danger white  bg-red-800">
                        <p> 1- Invalid email address </p>
                        <p> 2- Invalid phone number </p>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Customer</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext="" selected> GEMCO </option>
                                                <option data-subtext=""> PROMAR
                                                </option>
                                                <option data-subtext="">ANANTARA
                                                </option>
                                                <option data-subtext="">UCC SAMISMA
                                                </option>
                                                <option data-subtext=""> MR. RAMEZ
                                                </option>
                                                <option data-subtext=""> QATAR SUADI CO
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Material</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> Aggregates 10-20 mm
                                                </option>
                                                <option data-subtext=""> Armour Rock 3-6 T
                                                </option>
                                                <option data-subtext=""> Quarry Run 200-500 KG

                                                </option>
                                                <option data-subtext=""> Underlayer Rocks 45-75 MM

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">freight USD </label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> $15.73 </option>
                                                <option data-subtext=""> $8.25 </option>
                                                <option data-subtext=""> $7.25</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Demurrage rate per hr
                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Demurrage Chargable
                                        </label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> Yes
                                                </option>
                                                <option data-subtext=""> No
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Project Quantity </label>
                                        <input type="text" class="form-control" value=" 704,000" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Monthly project Quantity
                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Free loading time
                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Free discharging time

                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Laytime terms

                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Bad weather

                                        </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Project start date

                                        </label>
                                        <input type="date" class="form-control" placeholder="..." />
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Project end date

                                        </label>
                                        <input type="date" class="form-control" placeholder="..." />
                                    </div>
                                </div>


                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Loading port
                                        </label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext="">Sohar
                                                </option>
                                                <option data-subtext="">Musandam
                                                </option>
                                                <option data-subtext="">Asolyah
                                                </option>
                                                <option data-subtext="">Ras abuoud

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Discharging port
                                        </label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext="">Mesaieed
                                                </option>
                                                <option data-subtext="">Simaismah
                                                </option>
                                                <option data-subtext="">Halul
                                                </option>
                                                <option data-subtext="">Asolyah
                                                </option>
                                                <option data-subtext="">Ras abuoud

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Budgeted DA & other exp. Per voyage
                                        </label>
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">Fuel rate
                                        </label>
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                </div>








                            </div>



                        </div>


                    </div>


                    <div class="row">

                        <div class="col-sm-12">
                            <hr />
                            <div class="form-group1">
                                <button type="button" class="btn btn-dark  btn-round">
                                    Submit Details
                                </button>
                                <button type="button" class="btn btn-default btn-round ">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane " id="Bulk">

                    <h3 class="margin-top-0 font-size-18">Bulk Upload</h3>
                    <hr />

                    <div class="" style="max-width: 2000px; margin: auto;">
                        <div class="input-group form-group ">
                            <input placeholder="" type="text" class="form-control ">
                            <div class="input-group-btn">
                                <div class="btn btn-info  ">
                                    <span class="glyphicon glyphicon-folder-open"> </span> <span
                                        class="image-preview-input-title">
                                        Browse </span>
                                </div>
                            </div>
                        </div>




                        <div class="bg-white padding-15 text-center margin-bottom-30" style="border:2px dashed #eee;">
                            <img src="images/icon-file-upload.png" alt="" height="80"> <br> <br> Drag
                            and drop
                            your CSV/Excel file here </div>



                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <hr>
                            <div class="form-group1">
                                <button type="button" class="btn btn-dark  btn-round">
                                    Submit Details
                                </button>
                                <button type="button" class="btn btn-default btn-round ">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="listing">

                    <h3 class="margin-top-0 font-size-18">Listing</h3>
                    <hr />


                    <div class="table-responsive">
                        <table class="table  margin-bottom-0  table-condensed1 table-bordered text-wrap">
                            <thead>
                                <tr class="">
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Customer </th>
                                    <th class="text-left">Material </th>
                                    <th class="text-left">Firght (USD) </th>
                                    <th>Demurrage (per hour) </th>
                                    <th>Demurrage Chargable </th>
                                    <th>Quantity</th>
                                    <th>Monthly Quantity</th>
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
                                <tr class="">
                                    <td> TEKFEN KHASAB
                                    </td>
                                    <td>Gabormix
                                    </td>
                                    <td>Aggregates 10-20 mm</td>
                                    <td> $15.73 </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 704,000</td>
                                    <td> 64,000.00</td>
                                    <td> 6.00 </td>
                                    <td> 6.00 </td>
                                    <td>4 WWWW</td>
                                    <td> 1.00 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Sohar</td>
                                    <td>Mesaieed</td>
                                    <td> 10,000.00</td>
                                    <td> $775.00 </td>
                                </tr>
                                <tr class="">
                                    <td> HALUL PROJECT - QR 200-500 KG
                                    </td>
                                    <td>CARINA SHIPPING

                                    </td>
                                    <td>Quarry Run 200-500 KG
                                    </td>
                                    <td> $8.25
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 604,000</td>
                                    <td> 75,000.00</td>
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
                                <tr class="">
                                    <td> HALUL PROJECT - AR 3-6T
                                    </td>
                                    <td>GEMCO

                                    </td>
                                    <td>Armour Rock 3-6 T
                                    </td>
                                    <td> $15.73 </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 323,000</td>
                                    <td> 78,000.00</td>
                                    <td> 7.45 </td>
                                    <td> 4.54 </td>
                                    <td>4 WWWW</td>
                                    <td> 4.50 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Sohar</td>
                                    <td>Mesaieed</td>
                                    <td> 13,320.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>

                                <tr class="">
                                    <td> HALUL PROJECT - QR 200-500 KG

                                    </td>
                                    <td>ANANTARA

                                    </td>
                                    <td>Quarry Run 200-500 KG</td>
                                    <td> $6.00
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 467,000</td>
                                    <td> 65,560.00</td>
                                    <td> 5.65 </td>
                                    <td> 7.34 </td>
                                    <td>4 WWWW</td>
                                    <td> 5.60 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Asolyah
                                    </td>
                                    <td>Halul
                                    </td>
                                    <td> 16,750.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>
                                <tr class="">
                                    <td> HALUL PROJECT - AR 3-6T </td>
                                    <td>CARINA SHIPPING
                                    </td>
                                    <td>Aggregates 10-20 mm</td>
                                    <td> $6.00
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 282,000</td>
                                    <td> 62,820.00</td>
                                    <td> 5.53 </td>
                                    <td> 4.43 </td>
                                    <td>4 WWWW</td>
                                    <td> 3.34 </td>
                                    <td>01-Jan-18</td>
                                    <td>30-April-18 </td>
                                    <td> 120.00 </td>
                                    <td>Musandam
                                    </td>
                                    <td>Simaismah
                                    </td>
                                    <td> 10,000.00</td>
                                    <td> $775.00 </td>
                                </tr>
                                <tr class="">
                                    <td> HALUL PROJECT - UR 45-75 MM
                                    </td>
                                    <td>CECC
                                    </td>
                                    <td>Underlayer Rocks 45-75 MM
                                    </td>
                                    <td> $8.25
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 839,330</td>
                                    <td> 83,393.00</td>
                                    <td> 5.39 </td>
                                    <td> 7.33 </td>
                                    <td>4 WWWW</td>
                                    <td> 4.00 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Sohar</td>
                                    <td>Mesaieed</td>
                                    <td> 13,434.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>

                                <tr class="">
                                    <td> TEKFEN KHASAB
                                    </td>
                                    <td>PROMAR

                                    </td>
                                    <td>Armour Rock 3-6 T
                                    </td>
                                    <td> $7.25
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 723,230</td>
                                    <td> 61,320.00</td>
                                    <td> 3.00 </td>
                                    <td> 6.40 </td>
                                    <td>4 WWWW</td>
                                    <td> 4.00 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Musandam

                                    </td>
                                    <td>Pearl</td>
                                    <td> 12,233.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>
                                <tr class="">
                                    <td> HALUL PROJECT - QR 200-500 KG
                                    </td>
                                    <td>UCC SAMISMA
                                    </td>
                                    <td>Aggregates 10-20 mm</td>
                                    <td> $150.00 </td>
                                    <td> $180.00 </td>
                                    <td> No </td>
                                    <td> 947,000</td>
                                    <td> 54,550.00</td>
                                    <td> 7.23 </td>
                                    <td> 4.83 </td>
                                    <td>4 WWWW</td>
                                    <td> 2.83 </td>
                                    <td>01-Feb-18</td>
                                    <td>31-Aug-18 </td>
                                    <td> 211.00 </td>
                                    <td>Asolyah
                                    </td>
                                    <td>Mesaieed</td>
                                    <td> 15,343.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>
                                <tr class="">
                                    <td> IRAN - QATAR
                                    </td>
                                    <td>UCC
                                    </td>
                                    <td>Quarry Run 500-1000 KG
                                    </td>
                                    <td> $8.25
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 328,450</td>
                                    <td> 23,230.00</td>
                                    <td> 6.50 </td>
                                    <td> 5.92 </td>
                                    <td>4 WWWW</td>
                                    <td> 5.34 </td>
                                    <td>01-Jan-18</td>
                                    <td>31-Dec-18 </td>
                                    <td> 365.00 </td>
                                    <td>Sohar</td>
                                    <td>Doha
                                    </td>
                                    <td> 21,120.00</td>
                                    <td> $775.00
                                    </td>
                                </tr>

                                <tr class="">
                                    <td> Doha port
                                    </td>
                                    <td>GEMCO</td>
                                    <td>Underlayer Rocks 45-75 MM
                                    </td>
                                    <td> $7.25
                                    </td>
                                    <td> $150.00 </td>
                                    <td> No </td>
                                    <td> 545,450</td>
                                    <td> 74,494.00</td>
                                    <td> 5.60 </td>
                                    <td> 4.39 </td>
                                    <td>4 WWWW</td>
                                    <td> 3.00 </td>
                                    <td>01-Jan-18</td>
                                    <td>30-Nov-18 </td>
                                    <td> 334.00 </td>
                                    <td>Musandam
                                    </td>
                                    <td>Simaismah
                                    </td>
                                    <td> 13,430.00</td>
                                    <td> $775.00
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









    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>