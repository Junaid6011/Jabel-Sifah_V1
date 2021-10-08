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
            <h1 class="page-title">Vessels Utilization Report</h1>
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
                            <label class="control-label">Select Vessel</label>
                            <select class="form-control selectpicker  mrq-dd" data-width="100%" title="Select Vessel"
                                multiple data-style="btn-select" data-live-search="true" data-mrq-col-no="1"
                                data-mrq-table-id="table">
                                <!-- <option data-subtext="" selected> All </option> -->

                                <option> POLARIS XX</option>
                                <option> PHOENIX XX</option>
                                <option> PEGASUS XX</option>
                                <option> POLLUX XX</option>
                                <option> SEA SERPENT</option>
                                <option> SEA THURAYYA</option>
                                <option> LEO X</option>
                                <option> VEGA X</option>
                                <option> RIGEL X</option>
                                <option> SIRIUS X</option>
                                <option> PLUTO B</option>
                                <option>PLUTO D</option>
                                <option> SEA CHALLENGER</option>
                                <option> SEA GALAXY </option>

                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="form-group margin-bottom-0">
                            <label class="control-label">Project</label>
                            <select class="form-control selectpicker " data-width="100%" title="Location"
                                data-style="btn-select" multiple data-live-search="true"
                                style="max-width:100px; min-width:inherit;">
                                <option data-subtext="" selected> All </option>
                                <option data-subtext="">
                                    LUSAIL PALACE - EASTERN VIEW </option>
                                <option data-subtext=""> HALUL PROJECT - AR 3-6T </option>
                                <option data-subtext=""> TEKFEN KHASAB </option>
                                <option data-subtext=""> FISHERY HARBOUR
                                </option>
                                <option data-subtext=""> LUSAIL Aggregate RAA </option>
                                <option data-subtext=""> 7 ISLAND
                                </option>
                            </select>
                        </div>
                    </div> -->
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ritz grid-container" dir="ltr">

                                    <table
                                        class="waffle table  table-bordered1 text-center table-hover table-condensed table-striped1 margin-bottom-15"
                                        cellspacing="0" cellpadding="0" id="">

                                        <tbody>
                                            <tr style='height:20px;'>



                                                <td class=" s2" dir="ltr">WORKING</td>
                                                <td class=" s2" dir="ltr">IDLE</td>
                                                <td class=" s2 softmerge" dir="ltr">STANDBY OTHERS </td>
                                                <td class=" s2" dir="ltr">FLAG/CLASS</td>
                                                <td class=" s2 softmerge" dir="ltr">

                                                    REPAIRS-ENGINE
                                                </td>
                                                <td class=" s2" dir="ltr">REPAIRS-DECK</td>
                                                <td class=" s2 softmerge" dir="ltr">
                                                    <div class="tx softmerge-inner">
                                                        REPAIRS-INCIDENT/DD</div>
                                                </td>
                                                <td class=" s2" dir="ltr">WEATHER</td>
                                            </tr>
                                            <tr style='height:20px;'>

                                                <td class=" s3" dir="ltr">SA</td>



                                                <td class=" s4" dir="ltr">ID</td>



                                                <td class=" s5" dir="ltr">SO</td>



                                                <td class=" s11" dir="ltr">FC</td>



                                                <td class=" s7" dir="ltr">RE</td>



                                                <td class=" s8" dir="ltr">RD</td>



                                                <td class=" s9" dir="ltr">RI</td>



                                                <td class=" s10" dir="ltr">WW</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>


                        <div class="table-responsive ">

                            <div class="ritz grid-container" dir="ltr">
                                <table
                                    class="waffle table  table-bordered table-hover table-condensed1 table-striped1 margin-bottom-0"
                                    id="table">

                                    <thead>
                                        <tr>
                                            <td id="0R0" class="row-headers-background">
                                                <div class="row-header-wrapper">1</div>
                                                </th>
                                            <th class=" s0" dir="ltr" rowspan="2">VESSEL NAME</th>
                                            <th class=" s0" dir="ltr" rowspan="2">VESSEL ID</th>
                                            <th class=" s1" dir="ltr" colspan="31">DATE</th>

                                        </tr>

                                        <tr>
                                            <td id="0R1" class="row-headers-background">
                                                <div class="row-header-wrapper">2</div>
                                                </th>
                                            <th dir="ltr">1</th>
                                            <th dir="ltr">2</th>
                                            <th dir="ltr">3</th>
                                            <th dir="ltr">4</th>
                                            <th dir="ltr">5</th>
                                            <th dir="ltr">6</th>
                                            <th dir="ltr">7</th>
                                            <th dir="ltr">8</th>
                                            <th dir="ltr">9</th>
                                            <th dir="ltr">10</th>
                                            <th dir="ltr">11</th>
                                            <th dir="ltr">12</th>
                                            <th dir="ltr">13</th>
                                            <th dir="ltr">14</th>
                                            <th dir="ltr">15</th>
                                            <th dir="ltr">16</th>
                                            <th dir="ltr">17</th>
                                            <th dir="ltr">18</th>
                                            <th dir="ltr">19</th>
                                            <th dir="ltr">20</th>
                                            <th dir="ltr">21</th>
                                            <th dir="ltr">22</th>
                                            <th dir="ltr">23</th>
                                            <th dir="ltr">24</th>
                                            <th dir="ltr">25</th>
                                            <th dir="ltr">26</th>
                                            <th dir="ltr">27</th>
                                            <th dir="ltr">28</th>
                                            <th dir="ltr">29</th>
                                            <th dir="ltr">30</th>
                                            <th dir="ltr">31</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <tr>
                                            <td id="0R3" class="row-headers-background">
                                                <div class="row-header-wrapper">4</div>
                                            </td>
                                            <td dir="ltr">POLARIS XX</td>
                                            <td dir="ltr">MTF-TUG-PO</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                        </tr>
                                        <tr>
                                            <td id="0R4" class="row-headers-background">
                                                <div class="row-header-wrapper">5</div>
                                            </td>
                                            <td dir="ltr">PHOENIX XX</td>
                                            <td dir="ltr">MTF-TUG-PH</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                        </tr>
                                        <tr>
                                            <td id="0R5" class="row-headers-background">
                                                <div class="row-header-wrapper">6</div>
                                            </td>
                                            <td dir="ltr">PEGASUS XX</td>
                                            <td dir="ltr">MTF-TUG-PE</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R6" class="row-headers-background">
                                                <div class="row-header-wrapper">7</div>
                                            </td>
                                            <td dir="ltr">POLLUX XX</td>
                                            <td dir="ltr">MTF-TUG-PL</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R7" class="row-headers-background">
                                                <div class="row-header-wrapper">8</div>
                                            </td>
                                            <td dir="ltr">SEA SERPENT</td>
                                            <td dir="ltr">MTF-TUG-SS</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                        </tr>
                                        <tr>
                                            <td id="0R8" class="row-headers-background">
                                                <div class="row-header-wrapper">9</div>
                                            </td>
                                            <td dir="ltr">SEA THURAYYA</td>
                                            <td dir="ltr">MTF-TUG-ST</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                        </tr>
                                        <tr>
                                            <td id="0R9" class="row-headers-background">
                                                <div class="row-header-wrapper">10</div>
                                            </td>
                                            <td dir="ltr">LEO X</td>
                                            <td dir="ltr">MTF-BRG-LE</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                        </tr>
                                        <tr>
                                            <td id="0R10" class="row-headers-background">
                                                <div class="row-header-wrapper">11</div>
                                            </td>
                                            <td dir="ltr">VEGA X</td>
                                            <td dir="ltr">MTF-BRG-VE</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                        </tr>
                                        <tr>
                                            <td id="0R11" class="row-headers-background">
                                                <div class="row-header-wrapper">12</div>
                                            </td>
                                            <td dir="ltr">RIGEL X</td>
                                            <td dir="ltr">MTF-BRG-RI</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R12" class="row-headers-background">
                                                <div class="row-header-wrapper">13</div>
                                            </td>
                                            <td dir="ltr">SIRIUS X</td>
                                            <td dir="ltr">MTF-BRG-SI</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                        </tr>
                                        <tr>
                                            <td id="0R13" class="row-headers-background">
                                                <div class="row-header-wrapper">14</div>
                                            </td>
                                            <td dir="ltr">PLUTO B</td>
                                            <td dir="ltr">MTF-BRG-PB</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R14" class="row-headers-background">
                                                <div class="row-header-wrapper">15</div>
                                            </td>
                                            <td dir="ltr">PLUTO D</td>
                                            <td dir="ltr">MTF-BRG-PD</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s5" dir="ltr">sa</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s8" dir="ltr">SO</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s9" dir="ltr">ID</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R15" class="row-headers-background">
                                                <div class="row-header-wrapper">16</div>
                                            </td>
                                            <td dir="ltr">SEA CHALLENGER</td>
                                            <td dir="ltr">CF-TUG-SC</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s7" dir="ltr">RI</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R16" class="row-headers-background">
                                                <div class="row-header-wrapper">17</div>
                                            </td>
                                            <td dir="ltr">SEA GALAXY</td>
                                            <td dir="ltr">CF-TUG-SG</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R17" class="row-headers-background">
                                                <div class="row-header-wrapper">18</div>
                                            </td>
                                            <td dir="ltr">VENUS</td>
                                            <td dir="ltr">CF-BRG-VE</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                            <td class="tx s11" dir="ltr">FC</td>
                                        </tr>
                                        <tr>
                                            <td id="0R18" class="row-headers-background">
                                                <div class="row-header-wrapper">19</div>
                                            </td>
                                            <td dir="ltr">MERCURY</td>
                                            <td dir="ltr">CF-BRG-ME</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                            <td class="tx s10" dir="ltr">WW</td>
                                        </tr>
                                        <tr>
                                            <td id="0R19" class="row-headers-background">
                                                <div class="row-header-wrapper">20</div>
                                            </td>
                                            <td dir="ltr">RESLAN</td>
                                            <td dir="ltr">CF-SBRG-RE</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                        </tr>
                                        <tr>
                                            <td id="0R20" class="row-headers-background">
                                                <div class="row-header-wrapper">21</div>
                                            </td>
                                            <td dir="ltr">OCTOPUS 194</td>
                                            <td dir="ltr">CF-SBRG-194</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                            <td class="tx s12" dir="ltr">RD</td>
                                        </tr>
                                        <tr>
                                            <td id="0R21" class="row-headers-background">
                                                <div class="row-header-wrapper">22</div>
                                            </td>
                                            <td dir="ltr">OCTOPUS 195</td>
                                            <td dir="ltr">CF-SBRG-195</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                        </tr>
                                        <tr>
                                            <td id="0R22" class="row-headers-background">
                                                <div class="row-header-wrapper">23</div>
                                            </td>
                                            <td dir="ltr">OCTOPUS 196</td>
                                            <td dir="ltr">CF-SBRG-196</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
                                            <td class="tx s5" dir="ltr">SA</td>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>