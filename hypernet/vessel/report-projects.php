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
            <h1 class="page-title">Projects Report</h1>
            <!-- <div class="page-header-actions">



                <button type="button" class="btn btn-sm btn-info  ">
                    <span class="text">View Details</span>

                </button>
            </div> -->
        </div>


        <div class="page-content  container-fluid">


            <div class="margin-bottom-20">
                <div class="row ">

                    <div class="col-lg-3">
                        <div class="form-group margin-bottom-0">
                            <label class="control-label">Project</label>
                            <select class="form-control selectpicker  mrq-dd" data-width="100%" title="Select Project"
                                data-style="btn-select" multiple data-live-search="true"
                                style="max-width:100px; min-width:inherit;" data-mrq-col-no="0"
                                data-mrq-table-id="table">

                                <option data-subtext="">EASTERN VIEW </option>
                                <option data-subtext="">LUSAIL PALACE - SOHAR - SAMISMA </option>
                                <option data-subtext=""> LUSAIL PALACE - MUSANDUM - SAMISMA </option>
                                <option data-subtext=""> HALUL PROJECT - AR 3-6T </option>
                                <option data-subtext=""> FISHERY HARBOUR
                                </option>
                                <option data-subtext=""> LUSAIL Aggregate RAA </option>
                                <option data-subtext=""> QATARYANA</option>
                                <option data-subtext=""> IRAN - QATAR</option>
                                <option data-subtext=""> Doha port</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-group margin-bottom-0">
                            <label class="control-label">Customer</label>
                            <select class="form-control selectpicker  mrq-dd" data-width="100%" title="Select Customer"
                                multiple data-style="btn-select" data-live-search="true" data-mrq-col-no="1"
                                data-mrq-table-id="table">

                                <option>GEMCO </option>
                                <option>CECC</option>
                                <option> PROMAR</option>
                                <option>ANANTARA</option>
                                <option>UCC</option>
                                <option>UCC SAMISMA </option>
                                <option> MR. RAMEZ</option>
                                <option> QATAR SUADI CO </option>
                                <option> Gabormix</option>



                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label">End Date</label>
                            <div class=" ">
                                <div class="input-group ">
                                    <span class="input-group-addon ">
                                        <i class="icon ion-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control date" value="01/01/2019">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Start Date</label>
                            <div class=" ">
                                <div class="input-group ">
                                    <span class="input-group-addon ">
                                        <i class="icon ion-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control date" value="02/01/2019">
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">

                    <div class="col-sm-12">

                        <div class="form-group1 margin-top-0">

                            <button type="button" class="btn btn-dark  ">
                                Submit
                            </button>
                            <button type="button" class="btn btn-info ">
                                Clear
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel panel-default margin-bottom-0  shadow  " style="max-width: 10000px; margin: auto;">
                <div class="panel-heading margin-bottom-0">
                    <h3 class="panel-title ">Search Results </h3>
                    <div class="panel-actions">

                        <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                    </div>
                </div>

                <div class="panel-body padding-15">
                    <div class="margin-bottom-0 clearfix">
                        <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                            <input type="text" class="form-control input-sm" placeholder="Search">
                        </div>


                        <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                            <div class="">
                                <input type="submit" class="btn btn-sm btn-info" value="Go">
                            </div>
                        </div>

                        <div class="inline-block pull-right   margin-bottom-10 margin-right-0">

                            <div class="btn-group btn-group-sm " data-toggle="buttons">

                                <label class="btn btn-outline btn-success ">
                                    <input type="radio" name="multiples" checked=""> Export CSV
                                </label>
                                <label class="btn btn-outline btn-success ">
                                    <input type="radio" name="multiples"> Export PDF
                                </label>

                            </div>


                        </div>

                    </div>
                    <div class=" " id="">



                        <div class="table-responsive ritz111">

                            <table
                                class="waffle table  table-bordered  text-wrap table-hover table-condensed1 table-striped margin-bottom-15"
                                id="table" cellspacing="0" cellpadding="0">
                                <thead>

                                    <tr style='height:20px;'>

                                        <th class="s0 softmerge" dir="ltr">
                                            <div class="softmerge-inner">OTHER PROJECT
                                                NAME</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">customer name
                                            </div>
                                        </th>
                                        <th class="s1" dir="ltr">material</th>
                                        <th class="s1" dir="ltr">freight USD</th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Demurrage rate
                                                per hr</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Demurrage
                                                Chargable</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">PROJECT
                                                QUANTITY</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">monthly
                                                project Quantity</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Free loading
                                                time</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Free
                                                discharging time</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Laytime terms
                                            </div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">bad weather
                                            </div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Project start
                                                date</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Project end
                                                date</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Project period
                                            </div>
                                        </th>
                                        <th class="s1" dir="ltr">loading port</th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">discharging
                                                port</div>
                                        </th>
                                        <th class="s1 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Budgeted DA
                                                &amp; other exp. Per voyage</div>
                                        </th>
                                        <th class="s2" dir="ltr">fuel rate</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    <tr style='height:20px;'>

                                        <td class="s3 softmerge" dir="ltr">
                                            EASTERN VIEW
                                        </td>
                                        <td class="s3" dir="ltr">GEMCO</td>
                                        <td class="s4 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s5"></td>
                                        <td class="s5" dir="ltr">$ -</td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">704,000</td>
                                        <td class="s6" dir="ltr">64,000.00</td>
                                        <td class="s6" dir="ltr">6</td>
                                        <td class="s6" dir="ltr">6</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">01-Jan-18</td>
                                        <td class="s6" dir="ltr">31-Dec-18</td>
                                        <td class="s6" dir="ltr">365</td>
                                        <td class="s3" dir="ltr">Sohar</td>
                                        <td class="s3" dir="ltr">Mesaieed</td>
                                        <td class="s6" dir="ltr">10,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R2" class="row-headers-background">
                                            <div class="row-header-wrapper">3</div>
                                        </th>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">LUSAIL PALACE - SOHAR - SAMISMA</div>
                                        </td>
                                        <td class="s8" dir="ltr">GEMCO</td>
                                        <td class="s9 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s10"></td>
                                        <td class="s10"></td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s11" dir="ltr">900,000</td>
                                        <td class="s11" dir="ltr">22,500.00</td>
                                        <td class="s11" dir="ltr">2</td>
                                        <td class="s11" dir="ltr">2</td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">01-Jan-18</td>
                                        <td class="s11" dir="ltr">31-Dec-18</td>
                                        <td class="s11" dir="ltr">365</td>
                                        <td class="s8" dir="ltr">Sohar</td>
                                        <td class="s8" dir="ltr">Simaismah</td>
                                        <td class="s11" dir="ltr">11,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R3" class="row-headers-background">
                                            <div class="row-header-wrapper">4</div>
                                        </th>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">LUSAIL PALACE - MUSANDUM - SAMISMA</div>
                                        </td>
                                        <td class="s3" dir="ltr">GEMCO</td>
                                        <td class="s4 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s5"></td>
                                        <td class="s5"></td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">81,600</td>
                                        <td class="s6" dir="ltr">20,400.00</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">01-Jan-18</td>
                                        <td class="s6" dir="ltr">31-Dec-18</td>
                                        <td class="s6" dir="ltr">365</td>
                                        <td class="s3" dir="ltr">Musandam</td>
                                        <td class="s3" dir="ltr">Simaismah</td>
                                        <td class="s6" dir="ltr">12,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R4" class="row-headers-background">
                                            <div class="row-header-wrapper">5</div>
                                        </th>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">HALUL PROJECT - AR 3-6T</div>
                                        </td>
                                        <td class="s8" dir="ltr">CECC</td>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Armour Rock
                                                3-6 T</div>
                                        </td>
                                        <td class="s11" dir="ltr">$15.73</td>
                                        <td class="s11" dir="ltr">$150.00</td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s11" dir="ltr">300,000</td>
                                        <td class="s11" dir="ltr">25,000.00</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">01-Jan-18</td>
                                        <td class="s11" dir="ltr">31-Dec-18</td>
                                        <td class="s11" dir="ltr">365</td>
                                        <td class="s8" dir="ltr">Musandam</td>
                                        <td class="s8" dir="ltr">Halul</td>
                                        <td class="s11" dir="ltr">10,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R5" class="row-headers-background">
                                            <div class="row-header-wrapper">6</div>
                                        </th>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">FISHERY HARBOUR</div>
                                        </td>
                                        <td class="s3" dir="ltr">CECC</td>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Quarry Run
                                                200-500 KG</div>
                                        </td>
                                        <td class="s6" dir="ltr">$15.73</td>
                                        <td class="s6" dir="ltr">$150.00</td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">300,000</td>
                                        <td class="s6" dir="ltr">25,000.00</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">01-Jan-18</td>
                                        <td class="s6" dir="ltr">31-Dec-18</td>
                                        <td class="s6" dir="ltr">365</td>
                                        <td class="s3" dir="ltr">Musandam</td>
                                        <td class="s3" dir="ltr">Halul</td>
                                        <td class="s6" dir="ltr">10,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R6" class="row-headers-background">
                                            <div class="row-header-wrapper">7</div>
                                        </th>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner"> LUSAIL Aggregate RAA</div>
                                        </td>
                                        <td class="s8" dir="ltr">CECC</td>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Underlayer
                                                Rocks 45-75 MM</div>
                                        </td>
                                        <td class="s11" dir="ltr">$15.73</td>
                                        <td class="s11" dir="ltr">$150.00</td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s11" dir="ltr">300,000</td>
                                        <td class="s11" dir="ltr">25,000.00</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">01-Jan-18</td>
                                        <td class="s11" dir="ltr">31-Dec-18</td>
                                        <td class="s11" dir="ltr">365</td>
                                        <td class="s8" dir="ltr">Musandam</td>
                                        <td class="s8" dir="ltr">Halul</td>
                                        <td class="s11" dir="ltr">10,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R7" class="row-headers-background">
                                            <div class="row-header-wrapper">8</div>
                                        </th>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">7 ISLAND
                                            </div>
                                        </td>
                                        <td class="s3" dir="ltr">PROMAR</td>
                                        <td class="s4 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s5"></td>
                                        <td class="s5"></td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">40,800</td>
                                        <td class="s6" dir="ltr">20,400.00</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">01-Jan-18</td>
                                        <td class="s6" dir="ltr">28-Feb-18</td>
                                        <td class="s6" dir="ltr">59</td>
                                        <td class="s3" dir="ltr">Musandam</td>
                                        <td class="s3" dir="ltr">Pearl</td>
                                        <td class="s6" dir="ltr">11,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R8" class="row-headers-background">
                                            <div class="row-header-wrapper">9</div>
                                        </th>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">BANANA ISLAND
                                            </div>
                                        </td>
                                        <td class="s8" dir="ltr">ANANTARA</td>
                                        <td class="s9 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Armour Rock
                                                1-3 T</div>
                                        </td>
                                        <td class="s10"></td>
                                        <td class="s10"></td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s8" dir="ltr">-</td>
                                        <td class="s8" dir="ltr">-</td>
                                        <td class="s8"></td>
                                        <td class="s8"></td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s8"></td>
                                        <td class="s11" dir="ltr">01-Feb-18</td>
                                        <td class="s11" dir="ltr">31-Mar-18</td>
                                        <td class="s11" dir="ltr">59</td>
                                        <td class="s8"></td>
                                        <td class="s8"></td>
                                        <td class="s11" dir="ltr">12,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R9" class="row-headers-background">
                                            <div class="row-header-wrapper">10</div>
                                        </th>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">FISHERY
                                                HARBOUR</div>
                                        </td>
                                        <td class="s3" dir="ltr">UCC</td>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Quarry Run
                                                500-1000 KG</div>
                                        </td>
                                        <td class="s6" dir="ltr">$8.25</td>
                                        <td class="s3"></td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">157,000</td>
                                        <td class="s6" dir="ltr">19,625.00</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">01-Apr-18</td>
                                        <td class="s6" dir="ltr">31-Dec-18</td>
                                        <td class="s6" dir="ltr">275</td>
                                        <td class="s3" dir="ltr">Musandam</td>
                                        <td class="s3" dir="ltr">Simaismah</td>
                                        <td class="s6" dir="ltr">10,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R10" class="row-headers-background">
                                            <div class="row-header-wrapper">11</div>
                                        </th>
                                        <td class="s8" dir="ltr">7 ISLAND</td>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">UCC SAMISMA
                                            </div>
                                        </td>
                                        <td class="s9 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Quarry Run
                                                500-1000 KG</div>
                                        </td>
                                        <td class="s10"></td>
                                        <td class="s10"></td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s8" dir="ltr">-</td>
                                        <td class="s8" dir="ltr">-</td>
                                        <td class="s8"></td>
                                        <td class="s8"></td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s8"></td>
                                        <td class="s11" dir="ltr">01-Jan-18</td>
                                        <td class="s11" dir="ltr">30-Apr-18</td>
                                        <td class="s11" dir="ltr">120</td>
                                        <td class="s8"></td>
                                        <td class="s8"></td>
                                        <td class="s11" dir="ltr">11,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R11" class="row-headers-background">
                                            <div class="row-header-wrapper">12</div>
                                        </th>
                                        <td class="s3" dir="ltr">QATARYANA</td>
                                        <td class="s3" dir="ltr">MR. RAMEZ</td>
                                        <td class="s4 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Quarry Run
                                                500-1000 KG</div>
                                        </td>
                                        <td class="s5"></td>
                                        <td class="s5"></td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s3" dir="ltr">-</td>
                                        <td class="s3" dir="ltr">-</td>
                                        <td class="s3"></td>
                                        <td class="s3"></td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s3"></td>
                                        <td class="s6" dir="ltr">01-Jan-18</td>
                                        <td class="s6" dir="ltr">31-Dec-18</td>
                                        <td class="s6" dir="ltr">365</td>
                                        <td class="s3"></td>
                                        <td class="s3"></td>
                                        <td class="s6" dir="ltr">12,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R12" class="row-headers-background">
                                            <div class="row-header-wrapper">13</div>
                                        </th>
                                        <td class="s8" dir="ltr">IRAN - QATAR</td>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">QATAR SUADI CO
                                            </div>
                                        </td>
                                        <td class="s9 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s10"></td>
                                        <td class="s10"></td>
                                        <td class="s8" dir="ltr">No</td>
                                        <td class="s11" dir="ltr">30,600</td>
                                        <td class="s11" dir="ltr">30,600.00</td>
                                        <td class="s11" dir="ltr">1.5</td>
                                        <td class="s11" dir="ltr">1.5</td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">01-Mar-18</td>
                                        <td class="s11" dir="ltr">31-Mar-18</td>
                                        <td class="s11" dir="ltr">31</td>
                                        <td class="s8" dir="ltr">Asolyah</td>
                                        <td class="s8" dir="ltr">Mesaieed</td>
                                        <td class="s11" dir="ltr">10,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R13" class="row-headers-background">
                                            <div class="row-header-wrapper">14</div>
                                        </th>
                                        <td class="s3" dir="ltr">Doha port</td>
                                        <td class="s3" dir="ltr">UCC</td>
                                        <td class="s4 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Aggregates
                                                0-5 mm</div>
                                        </td>
                                        <td class="s5"></td>
                                        <td class="s5"></td>
                                        <td class="s3" dir="ltr">No</td>
                                        <td class="s6" dir="ltr">30,000</td>
                                        <td class="s6" dir="ltr">30,000</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s3" dir="ltr">-</td>
                                        <td class="s6" dir="ltr">01-May-18</td>
                                        <td class="s6" dir="ltr">31-May-18</td>
                                        <td class="s6" dir="ltr">31</td>
                                        <td class="s3" dir="ltr">Ras abuoud</td>
                                        <td class="s3" dir="ltr">Doha</td>
                                        <td class="s6" dir="ltr">11,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R14" class="row-headers-background">
                                            <div class="row-header-wrapper">15</div>
                                        </th>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Tekfen Khasab
                                            </div>
                                        </td>
                                        <td class="s8" dir="ltr">Gabormix</td>
                                        <td class="s8 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s11" dir="ltr">$7.25</td>
                                        <td class="s11" dir="ltr">$150.00</td>
                                        <td class="s8" dir="ltr">Yes</td>
                                        <td class="s11" dir="ltr">500,000</td>
                                        <td class="s11" dir="ltr">40,000</td>
                                        <td class="s11" dir="ltr">2.5</td>
                                        <td class="s11" dir="ltr">2.5</td>
                                        <td class="s8" dir="ltr">4 WWWW</td>
                                        <td class="s11" dir="ltr">1</td>
                                        <td class="s11" dir="ltr">18-Sep-18</td>
                                        <td class="s11" dir="ltr">18-Sep-19</td>
                                        <td class="s11" dir="ltr">366</td>
                                        <td class="s8" dir="ltr">Musandam</td>
                                        <td class="s8" dir="ltr">Simaismah</td>
                                        <td class="s11" dir="ltr">16,000.00</td>
                                        <td class="s12" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R15" class="row-headers-background">
                                            <div class="row-header-wrapper">16</div>
                                        </th>
                                        <td class="s13 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Aggregate RAA
                                            </div>
                                        </td>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">CARINA
                                                SHIPPING</div>
                                        </td>
                                        <td class="s3 softmerge" dir="ltr">
                                            <div class="softmerge-inner">Aggregates
                                                10-20 mm</div>
                                        </td>
                                        <td class="s6" dir="ltr">$6.00</td>
                                        <td class="s6" dir="ltr">$150.00</td>
                                        <td class="s3" dir="ltr">Yes</td>
                                        <td class="s6" dir="ltr">10,500</td>
                                        <td class="s6" dir="ltr">10,500</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s6" dir="ltr">2</td>
                                        <td class="s3" dir="ltr">4 WWWW</td>
                                        <td class="s6" dir="ltr">1</td>
                                        <td class="s6" dir="ltr">15-Sep-18</td>
                                        <td class="s6" dir="ltr">30-Sep-18</td>
                                        <td class="s6" dir="ltr">16</td>
                                        <td class="s3" dir="ltr">Musandam</td>
                                        <td class="s3" dir="ltr">Simaismah</td>
                                        <td class="s6" dir="ltr">12,000.00</td>
                                        <td class="s7" dir="ltr">$775.00</td>
                                    </tr>
                                    <tr style='height:20px;'>
                                        <th id="0R16" class="row-headers-background">
                                            <div class="row-header-wrapper">17</div>
                                        </th>
                                        <td class="s14 softmerge" dir="ltr">
                                            <div class="softmerge-inner">OTHER PROJECTS
                                            </div>
                                        </td>
                                        <td class="s15 softmerge" dir="ltr">
                                            <div class="softmerge-inner">OTHER
                                                CUSTOMERS</div>
                                        </td>
                                        <td class="s9 softmerge" dir="ltr">
                                            <div class="softmerge-inner" style="width: 198px; left: -1px;">Armour Rock
                                                1-3 T</div>
                                        </td>
                                        <td class="s10"></td>
                                        <td class="s10"></td>
                                        <td class="s15" dir="ltr">No</td>
                                        <td class="s15" dir="ltr">-</td>
                                        <td class="s15" dir="ltr">-</td>
                                        <td class="s15"></td>
                                        <td class="s15"></td>
                                        <td class="s15"></td>
                                        <td class="s15"></td>
                                        <td class="s16" dir="ltr">01-Jan-18</td>
                                        <td class="s16" dir="ltr">31-Dec-18</td>
                                        <td class="s16" dir="ltr">365</td>
                                        <td class="s15"></td>
                                        <td class="s15"></td>
                                        <td class="s16" dir="ltr">12,000.00</td>
                                        <td class="s17" dir="ltr">$775.00</td>
                                    </tr>
                                </tbody>
                            </table>

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