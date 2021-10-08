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
            <h1 class="page-title">Statement of Facts</h1>
            <!-- <div class="page-header-actions">



                <button type="button" class="btn btn-sm btn-info  ">
                    <span class="text">View Details</span>

                </button>
            </div> -->
        </div>


        <div class="page-content  container-fluid">


            <div class="margin-bottom-20">
                <div class="row ">



                    <div class="col-lg-4">
                        <div class="form-group margin-bottom-0">
                            <label class="control-label">Select Vessel</label>
                            <select class="form-control selectpicker" data-width="100%" title="" data-style="btn-select"
                                data-live-search="true" id="colorselector">
                                <option value="option1">Pollux XX (ex Sea Cosmos)</option>
                                <option value="option2">Vega X (ex Mars)</option>
                                <option value="option3">Pegasus XX (ex Sea Corona)</option>
                                <option value="option4">Sirius X (ex Uranus)</option>


                                <option value="option1">Sea Serpent</option>
                                <option value="option2">Pluto B (ex UCO B)</option>
                                <option value="option3">Sea Thurayya (ex UCC TGB 27)</option>
                                <option value="option4">Pluto D (ex UCO D)</option>
                            </select>

                            <script>


                                $(function () {
                                    $('#colorselector').change(function () {
                                        $('.colors').hide();
                                        $('#' + $(this).val()).show();
                                    });
                                });

                            </script>
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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



                        <div id="option1" class="colors red ">

                            <div class="table-responsive ritz2 shadow padding-10 bg-green-300">
                                <div class=" padding-10 bg-white">

                                    <table
                                        class="waffle table  table-bordered  text-wrap1 table-hover table-condensed table-striped margin-bottom-15 "
                                        cellspacing="0" cellpadding="0">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            <tr style='height:20px;'>
                                                <th id="0R0" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">1</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel :</td>
                                                <td class="s1" dir="ltr">Pollux XX (ex Sea Cosmos)
                                                </td>
                                                <td class="s0" dir="ltr">Customer:</td>
                                                <td class="s2" dir="ltr">CARINA SHIPPING</td>
                                                <td class="s0" dir="ltr">Voyage Number:</td>
                                                <td class="s3" dir="ltr">V.0157-017</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R1" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">2</div>
                                                </th>
                                                <td class="s0" dir="ltr">Load Port :</td>
                                                <td class="s3" dir="ltr">Quarry </td>
                                                <td class="s0" dir="ltr">Discharge Port:</td>
                                                <td class="s2" dir="ltr">Simaismah</td>
                                                <td class="s4 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 247px; left: -1px;">
                                                        Departed
                                                        for
                                                        Voyage</div>
                                                </td>
                                                <td class="s5" dir="ltr"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R2" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">3</div>
                                                </th>
                                                <td class="s0" dir="ltr">Demurrage :</td>
                                                <td class="s3" dir="ltr">170 pd/pr</td>
                                                <td class="s0" dir="ltr">Cargo /Grade :</td>
                                                <td class="s3 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 133px; left: -1px;">
                                                        Aggregates
                                                        10-20 mm</div>
                                                </td>
                                                <td class="s0" dir="ltr">Freight Rate</td>
                                                <td class="s3" dir="ltr">USD 27.25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R3" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s7"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R4" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">5</div>
                                                </th>
                                                <td class="s0" dir="ltr">Cargo Qty :</td>
                                                <td class="s8" dir="ltr">17,000.00</td>
                                                <td class="s9" dir="ltr" colspan="2">Laytime terms</td>
                                                <td class="s8" dir="ltr">4 WWWW</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R5" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">6</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">18 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">67.00 hrs</td>
                                                <td class="s8" dir="ltr">02 11:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R6" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">190 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R7" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">8</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Reversible as
                                                        per C/p (Yes/No)</div>
                                                </td>
                                                <td class="s8" dir="ltr">Yes</td>
                                                <td class="s9" dir="ltr" colspan="2">Cumulative (if reversible)</td>
                                                <td class="s8" dir="ltr">120.00 hrs</td>
                                                <td class="s8" dir="ltr">05 00:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R8" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">9</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">LOADING TIME SHEET</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R9" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">10</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R10" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">11</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R11" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">12</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 11:15</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R12" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">13</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 14:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R13" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">14</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 20:55</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R14" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">15</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 05 - 2019 23:50</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R15" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">16</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R16" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">17</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s15"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R17" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">18</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R18" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">19</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s8" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R19" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">20</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R20" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">21</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R21" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">22</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R22" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">23</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-8.00 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">00 08:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R23" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">24</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R24" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">25</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed out</td>
                                                <td class="s18" dir="ltr" colspan="5">Mar 06 - 2019 2:35</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R25" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">26</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R26" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">27</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">Discharging Time sheet</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R27" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">28</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 18:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R28" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">29</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R29" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">30</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 11 - 2019 10:20</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R30" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">31</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 10:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R31" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">32</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 11:26</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R32" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">33</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:39</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R33" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">34</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 19 - 2019 02:55</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R34" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">35</div>
                                                </th>
                                                <td class="s19" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R35" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">36</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R36" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">37</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s8" dir="ltr">Mar 19 - 2019 02:55</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R37" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">38</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R38" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">39</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R39" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">40</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R40" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">41</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-27.92 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">01 03:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R41" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">42</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R42" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">43</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R43" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">44</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Berthing dealy due to jetty
                                                    occupied
                                                    with
                                                    other barges</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R44" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">45</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Loading :</td>
                                                <td class="s8" dir="ltr">68.00 hrs</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Demurrage to be Paid
                                                    up :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">72,387.50 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R45" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">46</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Discharging :</td>
                                                <td class="s8" dir="ltr">87.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R46" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">47</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Demurrage
                                                        (Add if reversible) :</div>
                                                </td>
                                                <td class="s22" dir="ltr">35.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R47" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">48</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R48" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">49</div>
                                                </th>
                                                <td class="s0" dir="ltr">DWT of Barge</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">DeadFreight to be Paid
                                                    up
                                                    :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R49" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">50</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual QTY Loaded</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R50" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">51</div>
                                                </th>
                                                <td class="s0" dir="ltr">Shortfall</td>
                                                <td class="s22" dir="ltr">0.00 MT</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R51" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">52</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R52" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">53</div>
                                                </th>
                                                <td class="s0" dir="ltr">Start Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Tug Assistance Charges
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R53" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">54</div>
                                                </th>
                                                <td class="s0" dir="ltr">End Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R54" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">55</div>
                                                </th>
                                                <td class="s0" dir="ltr">Total Hours</td>
                                                <td class="s22" dir="ltr">0.00 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R55" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">56</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R56" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">57</div>
                                                </th>
                                                <td class="s0" dir="ltr">From</td>
                                                <td class="s3" dir="ltr">Feb 26 - 2019 22:30</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="2">Voyage Days [ dd mm:ss
                                                    ]
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="2">14 12:25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R57" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">58</div>
                                                </th>
                                                <td class="s0" dir="ltr">To</td>
                                                <td class="s3" dir="ltr">Mar 13 - 2019 10:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R58" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">59</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Freight Charges</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,620.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R59" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">60</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Others</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 5,387.50</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R60" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">61</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="2">TOTAL</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,137.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div id="option2" class="colors yellow " style="display: none;">

                            <div class="table-responsive ritz2 shadow padding-10 bg-green-300">
                                <div class=" padding-10 bg-white">

                                    <table
                                        class="waffle table  table-bordered  text-wrap1 table-hover table-condensed table-striped margin-bottom-15 "
                                        cellspacing="0" cellpadding="0">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            <tr style='height:20px;'>
                                                <th id="0R0" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">1</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel :</td>
                                                <td class="s1" dir="ltr">Vega X (ex Mars)
                                                </td>
                                                <td class="s0" dir="ltr">Customer:</td>
                                                <td class="s2" dir="ltr">Gabormix</td>
                                                <td class="s0" dir="ltr">Voyage Number:</td>
                                                <td class="s3" dir="ltr">V.0157-017</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R1" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">2</div>
                                                </th>
                                                <td class="s0" dir="ltr">Load Port :</td>
                                                <td class="s3" dir="ltr">Musandam</td>
                                                <td class="s0" dir="ltr">Discharge Port:</td>
                                                <td class="s2" dir="ltr">Simaismah</td>
                                                <td class="s4 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 247px; left: -1px;">
                                                        Departed
                                                        for
                                                        Voyage</div>
                                                </td>
                                                <td class="s5" dir="ltr"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R2" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">3</div>
                                                </th>
                                                <td class="s0" dir="ltr">Demurrage :</td>
                                                <td class="s3" dir="ltr">150 pd/pr</td>
                                                <td class="s0" dir="ltr">Cargo /Grade :</td>
                                                <td class="s3 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 133px; left: -1px;">
                                                        Aggregates
                                                        10-20 mm</div>
                                                </td>
                                                <td class="s0" dir="ltr">Freight Rate</td>
                                                <td class="s3" dir="ltr">USD 7.25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R3" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">4</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s7"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R4" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">5</div>
                                                </th>
                                                <td class="s0" dir="ltr">Cargo Qty :</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                                <td class="s9" dir="ltr" colspan="2">Laytime terms</td>
                                                <td class="s8" dir="ltr">4 WWWW</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R5" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">6</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R6" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R7" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">8</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Reversible as
                                                        per C/p (Yes/No)</div>
                                                </td>
                                                <td class="s8" dir="ltr">Yes</td>
                                                <td class="s9" dir="ltr" colspan="2">Cumulative (if reversible)</td>
                                                <td class="s8" dir="ltr">120.00 hrs</td>
                                                <td class="s8" dir="ltr">05 00:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R8" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">9</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">LOADING TIME SHEET</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R9" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">10</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R10" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">11</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R11" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">12</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 11:15</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R12" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">13</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 14:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R13" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">14</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 20:55</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R14" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">15</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 05 - 2019 23:50</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R15" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">16</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R16" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">17</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s15"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R17" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">18</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R18" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">19</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s8" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R19" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">20</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R20" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">21</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R21" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">22</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R22" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">23</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-8.00 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">00 08:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R23" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">24</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R24" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">25</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed out</td>
                                                <td class="s18" dir="ltr" colspan="5">Mar 06 - 2019 2:35</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R25" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">26</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R26" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">27</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">Discharging Time sheet</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R27" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">28</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 18:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R28" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">29</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R29" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">30</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 11 - 2019 10:20</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R30" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">31</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 10:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R31" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">32</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 11:26</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R32" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">33</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:39</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R33" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">34</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R34" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">35</div>
                                                </th>
                                                <td class="s19" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R35" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">36</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R36" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">37</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s8" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R37" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">38</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R38" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">39</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R39" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">40</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R40" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">41</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-27.92 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">01 03:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R41" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">42</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R42" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">43</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R43" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">44</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Berthing dealy due to jetty
                                                    occupied
                                                    with
                                                    other barges</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R44" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">45</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Loading :</td>
                                                <td class="s8" dir="ltr">68.00 hrs</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Demurrage to be Paid
                                                    up :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">72,387.50 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R45" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">46</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Discharging :</td>
                                                <td class="s8" dir="ltr">87.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R46" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">47</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Demurrage
                                                        (Add if reversible) :</div>
                                                </td>
                                                <td class="s22" dir="ltr">35.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R47" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">48</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R48" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">49</div>
                                                </th>
                                                <td class="s0" dir="ltr">DWT of Barge</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">DeadFreight to be Paid
                                                    up
                                                    :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R49" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">50</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual QTY Loaded</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R50" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">51</div>
                                                </th>
                                                <td class="s0" dir="ltr">Shortfall</td>
                                                <td class="s22" dir="ltr">0.00 MT</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R51" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">52</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R52" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">53</div>
                                                </th>
                                                <td class="s0" dir="ltr">Start Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Tug Assistance Charges
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R53" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">54</div>
                                                </th>
                                                <td class="s0" dir="ltr">End Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R54" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">55</div>
                                                </th>
                                                <td class="s0" dir="ltr">Total Hours</td>
                                                <td class="s22" dir="ltr">0.00 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R55" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">56</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R56" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">57</div>
                                                </th>
                                                <td class="s0" dir="ltr">From</td>
                                                <td class="s3" dir="ltr">Feb 26 - 2019 22:30</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="2">Voyage Days [ dd mm:ss
                                                    ]
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="2">14 12:25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R57" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">58</div>
                                                </th>
                                                <td class="s0" dir="ltr">To</td>
                                                <td class="s3" dir="ltr">Mar 13 - 2019 10:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R58" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">59</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Freight Charges</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,620.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R59" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">60</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Others</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 5,387.50</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R60" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">61</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="2">TOTAL</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,137.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div id="option3" class="colors yellow " style="display: none;">

                            <div class="table-responsive ritz2 shadow padding-10 bg-green-300">
                                <div class=" padding-10 bg-white">

                                    <table
                                        class="waffle table  table-bordered  text-wrap1 table-hover table-condensed table-striped margin-bottom-15 "
                                        cellspacing="0" cellpadding="0">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            <tr style='height:20px;'>
                                                <th id="0R0" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">1</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel :</td>
                                                <td class="s1" dir="ltr">Pegasus XX (ex Sea Corona)
                                                </td>
                                                <td class="s0" dir="ltr">Customer:</td>
                                                <td class="s2" dir="ltr">Gabormix</td>
                                                <td class="s0" dir="ltr">Voyage Number:</td>
                                                <td class="s3" dir="ltr">V.0157-017</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R1" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">2</div>
                                                </th>
                                                <td class="s0" dir="ltr">Load Port :</td>
                                                <td class="s3" dir="ltr">Musandam</td>
                                                <td class="s0" dir="ltr">Discharge Port:</td>
                                                <td class="s2" dir="ltr">Simaismah</td>
                                                <td class="s4 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 247px; left: -1px;">
                                                        Departed
                                                        for
                                                        Voyage</div>
                                                </td>
                                                <td class="s5" dir="ltr"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R2" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">3</div>
                                                </th>
                                                <td class="s0" dir="ltr">Demurrage :</td>
                                                <td class="s3" dir="ltr">150 pd/pr</td>
                                                <td class="s0" dir="ltr">Cargo /Grade :</td>
                                                <td class="s3 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 133px; left: -1px;">
                                                        Aggregates
                                                        10-20 mm</div>
                                                </td>
                                                <td class="s0" dir="ltr">Freight Rate</td>
                                                <td class="s3" dir="ltr">USD 7.25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R3" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">4</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s7"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R4" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">5</div>
                                                </th>
                                                <td class="s0" dir="ltr">Cargo Qty :</td>
                                                <td class="s8" dir="ltr">171,000.00</td>
                                                <td class="s9" dir="ltr" colspan="2">Laytime terms</td>
                                                <td class="s8" dir="ltr">4 WWWW</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R5" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">6</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R6" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R7" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">8</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Reversible as
                                                        per C/p (Yes/No)</div>
                                                </td>
                                                <td class="s8" dir="ltr">Yes</td>
                                                <td class="s9" dir="ltr" colspan="2">Cumulative (if reversible)</td>
                                                <td class="s8" dir="ltr">120.00 hrs</td>
                                                <td class="s8" dir="ltr">05 00:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R8" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">9</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">LOADING TIME SHEET</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R9" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">10</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R10" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">11</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R11" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">12</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 11:15</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R12" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">13</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 14:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R13" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">14</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 20:55</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R14" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">15</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 05 - 2019 23:50</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R15" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">16</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R16" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">17</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s15"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R17" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">18</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R18" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">19</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s8" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R19" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">20</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R20" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">21</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R21" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">22</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R22" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">23</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-8.00 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">00 08:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R23" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">24</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R24" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">25</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed out</td>
                                                <td class="s18" dir="ltr" colspan="5">Mar 06 - 2019 2:35</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R25" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">26</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R26" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">27</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">Discharging Time sheet</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R27" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">28</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 18:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R28" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">29</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R29" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">30</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 11 - 2019 10:20</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R30" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">31</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 10:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R31" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">32</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 11:26</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R32" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">33</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:39</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R33" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">34</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R34" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">35</div>
                                                </th>
                                                <td class="s19" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R35" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">36</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R36" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">37</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s8" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R37" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">38</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R38" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">39</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R39" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">40</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R40" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">41</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-27.92 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">01 03:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R41" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">42</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R42" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">43</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R43" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">44</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Berthing dealy due to jetty
                                                    occupied
                                                    with
                                                    other barges</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R44" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">45</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Loading :</td>
                                                <td class="s8" dir="ltr">68.00 hrs</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Demurrage to be Paid
                                                    up :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">5,387.50 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R45" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">46</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Discharging :</td>
                                                <td class="s8" dir="ltr">87.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R46" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">47</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Demurrage
                                                        (Add if reversible) :</div>
                                                </td>
                                                <td class="s22" dir="ltr">35.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R47" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">48</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R48" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">49</div>
                                                </th>
                                                <td class="s0" dir="ltr">DWT of Barge</td>
                                                <td class="s8" dir="ltr">171,000.00</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">DeadFreight to be Paid
                                                    up
                                                    :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R49" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">50</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual QTY Loaded</td>
                                                <td class="s8" dir="ltr">171,000.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R50" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">51</div>
                                                </th>
                                                <td class="s0" dir="ltr">Shortfall</td>
                                                <td class="s22" dir="ltr">0.00 MT</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R51" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">52</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R52" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">53</div>
                                                </th>
                                                <td class="s0" dir="ltr">Start Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Tug Assistance Charges
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R53" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">54</div>
                                                </th>
                                                <td class="s0" dir="ltr">End Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R54" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">55</div>
                                                </th>
                                                <td class="s0" dir="ltr">Total Hours</td>
                                                <td class="s22" dir="ltr">0.00 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R55" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">56</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R56" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">57</div>
                                                </th>
                                                <td class="s0" dir="ltr">From</td>
                                                <td class="s3" dir="ltr">Feb 26 - 2019 22:30</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="2">Voyage Days [ dd mm:ss
                                                    ]
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="2">14 12:25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R57" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">58</div>
                                                </th>
                                                <td class="s0" dir="ltr">To</td>
                                                <td class="s3" dir="ltr">Mar 13 - 2019 10:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R58" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">59</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Freight Charges</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 79,750.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R59" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">60</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Others</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 5,387.50</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R60" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">61</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="2">TOTAL</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,137.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div id="option4" class="colors yellow " style="display: none;">

                            <div class="table-responsive ritz2 shadow padding-10 bg-green-300">
                                <div class=" padding-10 bg-white">

                                    <table
                                        class="waffle table  table-bordered  text-wrap1 table-hover table-condensed table-striped margin-bottom-15 "
                                        cellspacing="0" cellpadding="0">
                                        <thead>

                                        </thead>
                                        <tbody>
                                            <tr style='height:20px;'>
                                                <th id="0R0" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">1</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel :</td>
                                                <td class="s1" dir="ltr">Sirius X (ex Uranus)
                                                </td>
                                                <td class="s0" dir="ltr">Customer:</td>
                                                <td class="s2" dir="ltr">Gabormix</td>
                                                <td class="s0" dir="ltr">Voyage Number:</td>
                                                <td class="s3" dir="ltr">V.0157-017</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R1" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">2</div>
                                                </th>
                                                <td class="s0" dir="ltr">Load Port :</td>
                                                <td class="s3" dir="ltr">Musandam</td>
                                                <td class="s0" dir="ltr">Discharge Port:</td>
                                                <td class="s2" dir="ltr">Simaismah</td>
                                                <td class="s4 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 247px; left: -1px;">
                                                        Departed
                                                        for
                                                        Voyage</div>
                                                </td>
                                                <td class="s5" dir="ltr"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R2" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">3</div>
                                                </th>
                                                <td class="s0" dir="ltr">Demurrage :</td>
                                                <td class="s3" dir="ltr">150 pd/pr</td>
                                                <td class="s0" dir="ltr">Cargo /Grade :</td>
                                                <td class="s3 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 133px; left: -1px;">
                                                        Aggregates
                                                        10-20 mm</div>
                                                </td>
                                                <td class="s0" dir="ltr">Freight Rate</td>
                                                <td class="s3" dir="ltr">USD 7.25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R3" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">4</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s7"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R4" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">5</div>
                                                </th>
                                                <td class="s0" dir="ltr">Cargo Qty :</td>
                                                <td class="s8" dir="ltr">171,000.00</td>
                                                <td class="s9" dir="ltr" colspan="2">Laytime terms</td>
                                                <td class="s8" dir="ltr">4 WWWW</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R5" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">6</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Loading)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R6" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                                                </th>
                                                <td class="s0" dir="ltr">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">183 MTPH</td>
                                                <td class="s9" dir="ltr" colspan="2">Time Allowed (Discharging)</td>
                                                <td class="s8" dir="ltr">60.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R7" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">8</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Reversible as
                                                        per C/p (Yes/No)</div>
                                                </td>
                                                <td class="s8" dir="ltr">Yes</td>
                                                <td class="s9" dir="ltr" colspan="2">Cumulative (if reversible)</td>
                                                <td class="s8" dir="ltr">120.00 hrs</td>
                                                <td class="s8" dir="ltr">05 00:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R8" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">9</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">LOADING TIME SHEET</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R9" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">10</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R10" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">11</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R11" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">12</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 11:15</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R12" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">13</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 14:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R13" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">14</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 04 - 2019 20:55</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R14" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">15</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 05 - 2019 23:50</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R15" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">16</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R16" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">17</div>
                                                </th>
                                                <td class="s6"></td>
                                                <td class="s15"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                                <td class="s6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R17" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">18</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R18" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">19</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 03 - 2019 5:00</td>
                                                <td class="s8" dir="ltr">Mar 06 - 2019 1:00</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R19" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">20</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R20" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">21</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">68.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 20:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R21" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">22</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R22" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">23</div>
                                                </th>
                                                <td class="s16" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-8.00 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">00 08:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R23" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">24</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R24" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">25</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed out</td>
                                                <td class="s18" dir="ltr" colspan="5">Mar 06 - 2019 2:35</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R25" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">26</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R26" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">27</div>
                                                </th>
                                                <td class="s11" dir="ltr" colspan="6">Discharging Time sheet</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R27" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">28</div>
                                                </th>
                                                <td class="s12" dir="ltr">Arrived</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 18:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R28" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">29</div>
                                                </th>
                                                <td class="s12" dir="ltr">N.O.R. Tendered</td>
                                                <td class="s13" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s14" dir="ltr" colspan="4">*Start of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R29" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">30</div>
                                                </th>
                                                <td class="s12" dir="ltr">Berthed</td>
                                                <td class="s13" dir="ltr">Mar 11 - 2019 10:20</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R30" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">31</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp On</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 10:00</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R31" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">32</div>
                                                </th>
                                                <td class="s12" dir="ltr">Commenced Cargo</td>
                                                <td class="s13" dir="ltr">Mar 12 - 2019 11:26</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R32" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">33</div>
                                                </th>
                                                <td class="s12" dir="ltr">Completed Cargo</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:39</td>
                                                <td class="s0" colspan="4"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R33" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">34</div>
                                                </th>
                                                <td class="s12" dir="ltr">Ramp Off</td>
                                                <td class="s13" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s14" dir="ltr" colspan="4">*End of Lay period</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R34" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">35</div>
                                                </th>
                                                <td class="s19" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R35" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">36</div>
                                                </th>
                                                <td class="s10" dir="ltr">From</td>
                                                <td class="s10" dir="ltr">To</td>
                                                <td class="s10" dir="ltr" colspan="2">Time Used</td>
                                                <td class="s10" dir="ltr">Exceptions</td>
                                                <td class="s10" dir="ltr">In Days</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R36" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">37</div>
                                                </th>
                                                <td class="s8" dir="ltr">Mar 09 - 2019 19:00</td>
                                                <td class="s8" dir="ltr">Mar 13 - 2019 10:55</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R37" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">38</div>
                                                </th>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                                <td class="s0" colspan="2"></td>
                                                <td class="s8"></td>
                                                <td class="s8"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R38" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">39</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Total lay time used :</td>
                                                <td class="s8" dir="ltr" colspan="2">87.92 hrs</td>
                                                <td class="s8" dir="ltr">0.00 hrs</td>
                                                <td class="s8" dir="ltr">03 15:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R39" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">40</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Time Allowed :</td>
                                                <td class="s8" dir="ltr" colspan="2">60.00 hrs</td>
                                                <td class="s8" dir="ltr">0</td>
                                                <td class="s8" dir="ltr">02 12:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R40" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">41</div>
                                                </th>
                                                <td class="s8" dir="ltr" colspan="2">Under (+ve) / Over (-ve)</td>
                                                <td class="s8" dir="ltr" colspan="2">-27.92 hrs</td>
                                                <td class="s8"></td>
                                                <td class="s8" dir="ltr">01 03:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R41" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">42</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="6">Comments :</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R42" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">43</div>
                                                </th>
                                                <td class="s0" dir="ltr">Vessel Sailed</td>
                                                <td class="s18" dir="ltr" colspan="5">Jan 00 - 1900 0:00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R43" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">44</div>
                                                </th>
                                                <td class="s0" dir="ltr">Reasons</td>
                                                <td class="s18" dir="ltr" colspan="5">Berthing dealy due to jetty
                                                    occupied
                                                    with
                                                    other barges</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R44" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">45</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Loading :</td>
                                                <td class="s8" dir="ltr">68.00 hrs</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Demurrage to be Paid
                                                    up :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">5,387.50 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R45" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">46</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual time Discharging :</td>
                                                <td class="s8" dir="ltr">87.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R46" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">47</div>
                                                </th>
                                                <td class="s0 softmerge" dir="ltr">
                                                    <div class="softmerge-inner" style="width: 183px; left: -1px;">
                                                        Demurrage
                                                        (Add if reversible) :</div>
                                                </td>
                                                <td class="s22" dir="ltr">35.92 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R47" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">48</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R48" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">49</div>
                                                </th>
                                                <td class="s0" dir="ltr">DWT of Barge</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">DeadFreight to be Paid
                                                    up
                                                    :
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R49" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">50</div>
                                                </th>
                                                <td class="s0" dir="ltr">Actual QTY Loaded</td>
                                                <td class="s8" dir="ltr">11,000.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R50" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">51</div>
                                                </th>
                                                <td class="s0" dir="ltr">Shortfall</td>
                                                <td class="s22" dir="ltr">0.00 MT</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R51" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">52</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R52" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">53</div>
                                                </th>
                                                <td class="s0" dir="ltr">Start Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="3">Tug Assistance Charges
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="3">0.00 USD</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R53" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">54</div>
                                                </th>
                                                <td class="s0" dir="ltr">End Time</td>
                                                <td class="s8" dir="ltr">N/A</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R54" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">55</div>
                                                </th>
                                                <td class="s0" dir="ltr">Total Hours</td>
                                                <td class="s22" dir="ltr">0.00 hrs</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R55" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">56</div>
                                                </th>
                                                <td class="s0" colspan="6"></td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R56" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">57</div>
                                                </th>
                                                <td class="s0" dir="ltr">From</td>
                                                <td class="s3" dir="ltr">Feb 26 - 2019 22:30</td>
                                                <td class="s20" dir="ltr" colspan="2" rowspan="2">Voyage Days [ dd mm:ss
                                                    ]
                                                </td>
                                                <td class="s21" dir="ltr" colspan="2" rowspan="2">14 12:25</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R57" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">58</div>
                                                </th>
                                                <td class="s0" dir="ltr">To</td>
                                                <td class="s3" dir="ltr">Mar 13 - 2019 10:55</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R58" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">59</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Freight Charges</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 79,750.00</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R59" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">60</div>
                                                </th>
                                                <td class="s0" dir="ltr" colspan="2">Others</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 5,387.50</td>
                                            </tr>
                                            <tr style='height:20px;'>
                                                <th id="0R60" style="height: 20px;" class="row-headers-background">
                                                    <div class="row-header-wrapper" style="line-height: 20px;">61</div>
                                                </th>
                                                <td class="s17" dir="ltr" colspan="2">TOTAL</td>
                                                <td class="s14" dir="ltr" colspan="4">USD 85,137.50</td>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>