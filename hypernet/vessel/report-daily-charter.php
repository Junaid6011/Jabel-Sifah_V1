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
      <h1 class="page-title">Daily Charter Report</h1>
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
              <select class="form-control selectpicker  mrq-dd" data-width="100%" title="" multiple
                data-style="btn-select" data-live-search="true" data-mrq-col-no="0" data-mrq-table-id="table">
                <option data-subtext="" selected> All </option>
                <option>EASTERN VIEW </option>
                <option> Eastern View</option>
                <option> Bulk Carrier (1)</option>
                <option> Tugs & barges 10k Tons</option>
                <option> Pollux XX (ex Sea Cosmos)</option>
                <option> Vega X (ex Mars)</option>
                <option> Pegasus XX (ex Sea Corona)</option>
                <option> Sirius X (ex Uranus)</option>
                <option> Polaris XX (ex Sea Canis)</option>
                <option> Rigel X (ex Neptune)</option>
                <option> Phoenix XX (ex Sea Centaurus)</option>
                <option> Leo X (ex Jupiter)</option>
                <option> Tugs & barges 10k Tons (4 Comb.)</option>
                <option> Tugs & barges 7k Tons+ 5k tons</option>
                <option> Sea Serpent </option>

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


            <div class="table-responsive  shadow1 padding-0 bg-green-3001">
              <div class=" padding-0 bg-white">

                <div class="ritz3 grid-container" dir="ltr">
                  <table
                    class="waffle table  table-bordered  text-wrap table-hover table-condensed table-striped margin-bottom-15"
                    cellspacing="0" cellpadding="0" id="table">
                    <thead>
                      <tr>
                        <th id="0R0" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">1</div>
                        </th>
                        <th class="s0" dir="ltr">Name of Vessel</td>
                        <th class="s1" dir="ltr">01-Mar-19</th>
                        <th class="s1" dir="ltr">02-Mar-19</th>
                        <th class="s1" dir="ltr">03-Mar-19</th>
                        <th class="s1" dir="ltr">04-Mar-19</th>
                        <th class="s1" dir="ltr">05-Mar-19</th>
                        <th class="s1" dir="ltr">06-Mar-19</th>
                        <th class="s1" dir="ltr">07-Mar-19</th>
                        <th class="s1" dir="ltr">08-Mar-19</th>
                        <th class="s1" dir="ltr">09-Mar-19</th>
                        <th class="s1" dir="ltr">10-Mar-19</th>
                        <th class="s1" dir="ltr">11-Mar-19</th>
                        <th class="s1" dir="ltr">12-Mar-19</th>
                        <th class="s1" dir="ltr">13-Mar-19</th>
                        <th class="s1" dir="ltr">14-Mar-19</th>
                        <th class="s1" dir="ltr">15-Mar-19</th>
                        <th class="s1" dir="ltr">16-Mar-19</th>
                        <th class="s1" dir="ltr">17-Mar-19</th>
                        <th class="s1" dir="ltr">18-Mar-19</th>
                        <th class="s1" dir="ltr">19-Mar-19</th>
                        <th class="s1" dir="ltr">20-Mar-19</th>
                        <th class="s1" dir="ltr">21-Mar-19</th>
                        <th class="s1" dir="ltr">22-Mar-19</th>
                        <th class="s1" dir="ltr">23-Mar-19</th>
                        <th class="s1" dir="ltr">24-Mar-19</th>
                        <th class="s1" dir="ltr">25-Mar-19</th>
                        <th class="s1" dir="ltr">26-Mar-19</th>
                        <th class="s1" dir="ltr">27-Mar-19</th>
                        <th class="s1" dir="ltr">28-Mar-19</th>
                        <th class="s1" dir="ltr">29-Mar-19</th>
                        <th class="s1" dir="ltr">30-Mar-19</th>
                        <th class="s1" dir="ltr">31-Mar-19</th>
                        <th class="s1" dir="ltr"></th>

                    </thead>
                    <tbody>

                      <tr>
                        <th id="0R1" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">2</div>
                        </th>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                      </tr>
                      <tr>
                        <th id="0R2" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">3</div>
                        </th>
                        <td class="s0" dir="ltr">Bulk Carrier</td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                      </tr>
                      <tr>
                        <th id="0R3" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">4</div>
                        </th>
                        <td class="s5" dir="ltr">Eastern View</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R4" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">5</div>
                        </th>
                        <td class="s8" dir="ltr">Bulk Carrier (1)</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R5" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">6</div>
                        </th>
                        <td class="s0" dir="ltr">Tugs &amp; barges 10k Tons</td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                      </tr>
                      <tr>
                        <th id="0R6" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">7</div>
                        </th>
                        <td class="s5" dir="ltr">Pollux XX (ex Sea Cosmos)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">12</td>
                      </tr>
                      <tr>
                        <th id="0R7" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">8</div>
                        </th>
                        <td class="s5" dir="ltr">Vega X (ex Mars)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">4</td>
                      </tr>
                      <tr>
                        <th id="0R8" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">9</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Pegasus XX (ex Sea Corona)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">10</td>
                      </tr>
                      <tr>
                        <th id="0R9" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">10</div>
                        </th>
                        <td class="s5" dir="ltr">Sirius X (ex Uranus)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R10" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">11</div>
                        </th>
                        <td class="s5" dir="ltr">Polaris XX (ex Sea Canis)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">15</td>
                      </tr>
                      <tr>
                        <th id="0R11" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">12</div>
                        </th>
                        <td class="s5" dir="ltr">Rigel X (ex Neptune)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">13</td>
                      </tr>
                      <tr>
                        <th id="0R12" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">13</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Phoenix XX (ex Sea Centaurus)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R13" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">14</div>
                        </th>
                        <td class="s7" dir="ltr">Leo X (ex Jupiter)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">15</td>
                      </tr>
                      <tr>
                        <th id="0R14" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">15</div>
                        </th>
                        <td class="s10 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Tugs &amp; barges 10k Tons (4
                            Comb.)</div>
                        </td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">7</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">2</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">6</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">105</td>
                      </tr>
                      <tr>
                        <th id="0R15" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">16</div>
                        </th>
                        <td class="s11 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 272px; left: -1px;">Tugs &amp; barges 7k Tons+ 5k
                            tons</div>
                        </td>
                        <td class="s12"></td>
                        <td class="s12"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                      </tr>
                      <tr>
                        <th id="0R16" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">17</div>
                        </th>
                        <td class="s5" dir="ltr">Sea Serpent</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R17" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">18</div>
                        </th>
                        <td class="s5" dir="ltr">Pluto B (ex UCO B)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R18" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">19</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Sea Thurayya (ex UCC TGB 27)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R19" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">20</div>
                        </th>
                        <td class="s7" dir="ltr">Pluto D (ex UCO D)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R20" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">21</div>
                        </th>
                        <td class="s10 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Tugs &amp; barges 7k Tons (2
                            comb.)</div>
                        </td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">72</td>
                      </tr>
                      <tr>
                        <th id="0R21" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">22</div>
                        </th>
                        <td class="s0" dir="ltr">Construction Vessels</td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                      </tr>
                      <tr>
                        <th id="0R22" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">23</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Sea Galaxy (ex UCC TGB 23)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R23" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">24</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Sea Challenger (ex UCC TGB 22)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R24" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">25</div>
                        </th>
                        <td class="s5" dir="ltr">Venus (ex UCC BRG 22)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">11</td>
                      </tr>
                      <tr>
                        <th id="0R25" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">26</div>
                        </th>
                        <td class="s5" dir="ltr">Mercury (ex UCC BRG 21)</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">18</td>
                      </tr>
                      <tr>
                        <th id="0R26" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">27</div>
                        </th>
                        <td class="s5" dir="ltr">Archer V (ex Saturn)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R27" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">28</div>
                        </th>
                        <td class="s5" dir="ltr">Octopus 194 (ex GTO 194)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R28" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">29</div>
                        </th>
                        <td class="s5" dir="ltr">Octopus 195 (ex GTO 195)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R29" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">30</div>
                        </th>
                        <td class="s5" dir="ltr">Octopus 196 (ex GTO 196)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R30" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">31</div>
                        </th>
                        <td class="s5" dir="ltr">Reslan</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R31" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">32</div>
                        </th>
                        <td class="s5" dir="ltr">Orion XV (ex Andromeda)</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R32" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">33</div>
                        </th>
                        <td class="s8 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Construction Vessels (10)</div>
                        </td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">4</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">3</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">65</td>
                      </tr>
                      <tr>
                        <th id="0R33" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">34</div>
                        </th>
                        <td class="s0" dir="ltr">Speed boats</td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                        <td class="s4"></td>
                      </tr>
                      <tr>
                        <th id="0R34" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">35</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 2 (ex UCC 2)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">8</td>
                      </tr>
                      <tr>
                        <th id="0R35" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">36</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 3 (ex UCC 3)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R36" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">37</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 4 (ex UCC 4)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R37" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">38</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 5 (ex UCC 5)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R38" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">39</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 11 (ex UCC 11)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R39" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">40</div>
                        </th>
                        <td class="s5 softmerge" dir="ltr">
                          <div class="softmerge-inner" style="width: 202px; left: -1px;">Marine Master 13 (ex UCC 13)
                          </div>
                        </td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R40" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">41</div>
                        </th>
                        <td class="s5" dir="ltr">Express Evia 1</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s6" dir="ltr">0</td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s7"></td>
                        <td class="s6" dir="ltr">0</td>
                      </tr>
                      <tr>
                        <th id="0R41" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">42</div>
                        </th>
                        <td class="s8" dir="ltr">Speed boats (7)</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">1</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">0</td>
                        <td class="s9" dir="ltr">8</td>
                      </tr>
                      <tr>
                        <th id="0R42" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">43</div>
                        </th>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                        <td class="s3"></td>
                      </tr>
                      <tr>
                        <th id="0R43" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">44</div>
                        </th>
                        <td class="s3" dir="ltr">Total Fleet</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">16</td>
                        <td class="s1" dir="ltr">14</td>
                        <td class="s1" dir="ltr">13</td>
                        <td class="s1" dir="ltr">11</td>
                        <td class="s1" dir="ltr">14</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">15</td>
                        <td class="s1" dir="ltr">14</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">268</td>
                      </tr>
                      <tr>
                        <th id="0R44" class="row-headers-background">
                          <div class="row-header-wrapper" style="line-height: 20px;">45</div>
                        </th>
                        <td class="s3" dir="ltr">Useful fleet</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">8</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">5</td>
                        <td class="s1" dir="ltr">4</td>
                        <td class="s1" dir="ltr">3</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">7</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">0</td>
                        <td class="s1" dir="ltr">123</td>
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