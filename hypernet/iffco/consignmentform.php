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
    </div>-->

    <!-- <div class="page-header padding-0 margin-bottom-30">
            <div class="widget widget-article type-flex margin-bottom-0">
                <div class="widget-header cover overlay">
                    <img class="cover-image height-160" src="images/header.jpg" alt="">
                    <div class="overlay-panel text-center vertical-align">
                        <div class="widget-metas vertical-align-middle blue-grey-800">
                            <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white" style="font-size:30px;">Internet
                                of Logistics </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="page-content  container-fluid bg-white1">




      <div class="row">
        <div class="col-md-2 col-xs-6">
          <a data-toggle="tab" href="#addnew" class="grey-700 active bg-white">
            <div class="padding-15 bg-white light text-center card hover margin-bottom-30">
              <div class="margin-bottom-0    primary-800">
                <i class="ion-android-add"></i>
              </div>
              <span class=" font-weight-600 text-uppercase ">Add New</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-xs-6">
          <a data-toggle="tab" href="#Bulk" class="grey-700 active">
            <div class="padding-15 bg-white light text-center card hover margin-bottom-30">
              <div class="margin-bottom-0    primary-800">
                <i class="ion-android-add"></i>
              </div>
              <span class=" font-weight-600 text-uppercase ">Bulk Upload  (CSV/Excel)</span>
            </div>
          </a>
        </div>
        <div class="col-md-2 col-xs-6">
          <a data-toggle="tab" href="#listing" class="grey-700">
            <div class="padding-15 bg-white light text-center card hover margin-bottom-30">
              <div class="margin-bottom-0    primary-800">
                <i class="ion-ios-list-outline"></i>
              </div>
              <span class=" font-weight-600 text-uppercase ">Listing</span>
            </div>
          </a>
        </div>


      </div>



      <div class="tab-content ">
        <div class="tab-pane active" id="addnew">

          <!-- <h3 class="margin-top-0 font-size-18">Please fill out the following form</h3>
          <hr />
          <div class=" alert alert-danger white  bg-red-800">
            <p> 1- Invalid email address </p>
            <p> 2- Invalid phone number </p>
          </div> -->
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6">
                  <div class="panel panel-dark card light">
                    <div class="panel-heading ">
                      <h3 class="panel-title">Sender Details</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Company</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Phone</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Country</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">City</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Postal Code</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">State</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Address 2</label>
                            <div class="input-icon">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>




                </div>

                <div class="col-lg-6">
                  <div class="panel panel-dark card light">
                    <div class="panel-heading ">
                      <h3 class="panel-title">Receiver Details</h3>
                    </div>
                    <div class="panel-body">

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Company</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Postal Code</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">State</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Address 2</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>

                      </div>

                    </div>
                  </div>




                </div>
              </div>
              <div class="row">

                <div class="col-lg-12">
                  <div class="panel panel-dark card light ">
                    <div class="panel-heading ">
                      <h3 class="panel-title">Shipment Details</h3>
                    </div>
                    <div class="panel-body">

                      <div class="row">

                        <div class="col-lg-6">

                          <div class="row">
                            <div class="col-sm-8">
                              <div class="form-group">
                                <label class="control-label">Shipment Type</label>
                                <select class="form-control">
                                  <option>Fragile</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Package Details</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">Package Details (Summary of your shimpment)</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">

                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="control-label">What is the value of your shipment</label>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <div class="">
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="">
                                      <select class="form-control">
                                        <option>USD</option>
                                        <option>PKR</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-sm-offset-2">
                          <div class="col-sm-0  ">

                            <div class="bg-white padding-15">
                              <h4 class="example-title">Prohibited Goods</h4>
                              <p>Following items are prohibited for shipping.</p>
                              <ol>
                                <li>
                                  Animal skin / Fur / Animal organs and parts / Ivory and ivory products Goods with a
                                  particularly high value (e.g. artworks, antiques, precious stones, gold and silver)
                                </li>
                                <li>
                                  Dangerous Goods / Hazardous Goods / Fireworks.
                                </li>
                                <li>Fluids - Adhesives / Paint.</li>
                                <li>Firearms / Swords / Knives / Weapons.</li>
                                <li>Live animals.</li>
                              </ol>
                            </div>

                          </div>
                        </div>



                      </div>


                      <div class="row">

                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="">
                                  <input type="text" class="form-control" value="5">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Weight">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">kg</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">kg</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Length">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Width">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Height">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-1">

                                <div class="input-group">
                                  <button type="submit" class="btn btn-info btn-round btn-outline"> <i
                                      class="icon ion-plus"></i></button>
                                </div>

                              </div>


                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <div class="row">
                              <div class="col-sm-3">
                                <div class="">
                                  <input type="text" class="form-control" value="5">
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Weight">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">kg</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">kg</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Length">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Width">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Height">
                                  <div class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-outline">cm</button>
                                    <button type="button" class="btn btn-default btn-outline dropdown-toggle"
                                      data-toggle="dropdown">
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                      <li><a href="">cm</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-1">
                                <div class="input-group">
                                  <button type="submit" class="btn btn-info btn-round btn-outline"> <i
                                      class="icon ion-plus"></i></button>
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



              <div class="row">

                <div class="col-lg-12">
                  <div class="panel panel-dark card light ">
                    <div class="panel-heading ">
                      <h3 class="panel-title">Packaging Details</h3>
                    </div>
                    <div class="panel-body">

                      <div class="row">

                        <div class="col-lg-12">

                          <div class="row">
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label class="control-label">Select Packing</label>
                                <select class="form-control">
                                  <option>Box A - 25kg (33.7 * 32.2 * 10.0)</option>
                                  <option>Box B - 50kg (43.7 * 36.2 * 20.0)</option>
                                  <option>Box C - 70kg (63.7 * 42.2 * 30.0)</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input type="text" class="form-control" value="2">
                              </div>
                            </div>

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Max. Weight (kg)</label>
                                <input type="text" class="form-control" value="25">
                              </div>
                            </div>
                          </div>


                          <div class="bg-white  padding-10 margin-bottom-30">


                            <div class="row">
                              <div class="col-sm-3">
                                <div class="font-size-14 font-weight-600 ">
                                  Box A (33.7 * 32.2 * 10.0)
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="font-size-14 font-weight-600 ">
                                  2
                                </div>
                              </div>

                              <div class="col-sm-2">
                                <div class="font-size-14 font-weight-600 ">
                                  50kg
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="font-size-14 font-weight-600 text-center green-800 ">
                                  Esimated Price: 35 (USD)
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
          </div>


          <div class="row">

            <div class="col-sm-12">
              <!-- <hr /> -->
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


          <div class="panel panel-dark card light">
            <div class="panel-heading ">
              <h3 class="panel-title">Bulk Upload</h3>
            </div>
            <div class="panel-body">
              <div class="" style="max-width: 2000px; margin: auto;">
                <div class="input-group form-group ">
                  <input placeholder="" type="text" class="form-control ">
                  <div class="input-group-btn">
                    <div class="btn btn-info  ">
                      <span class="glyphicon glyphicon-folder-open"> </span> <span class="image-preview-input-title">
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










          </div>


        </div>
        <div class="tab-pane" id="listing">
          <div class="panel panel-dark card light">
            <div class="panel-heading ">
              <h3 class="panel-title">Listing</h3>
            </div>
            <div class="panel-body">
              <div class="table-responsive ">
                <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      " id="">

                  <thead>
                    <tr class="">
                      <th class="text-left">ID </th>


                      <th class="text-left">Generated Time</th>
                      <th class="text-left">Generated Date</th>

                      <th class="text-left">Consignment Detail</th>
                      <th class="text-left">Net Weight</th>
                      <th class="text-left">Pickup City</th>
                      <th class="text-left">Drop-off City</th>

                      <th class="text-right"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-left">150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left">12 Laptops </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>
                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>


                    </tr>

                    <tr>
                      <td class="text-left"> 150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left"> Self </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>




                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>
                    </tr>


                    <tr>
                      <td class="text-left">150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left">12 Laptops </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>
                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>


                    </tr>

                    <tr>
                      <td class="text-left"> 150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left"> Self </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>




                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>
                    </tr>
                    <tr>
                      <td class="text-left">150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left">12 Laptops </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>
                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>


                    </tr>

                    <tr>
                      <td class="text-left"> 150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left"> Self </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>




                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>
                    </tr>

                    <tr>
                      <td class="text-left">150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left">12 Laptops </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>
                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>


                    </tr>

                    <tr>
                      <td class="text-left"> 150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left"> Self </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>




                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>
                    </tr>
                    <tr>
                      <td class="text-left">150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left">12 Laptops </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>
                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>


                    </tr>

                    <tr>
                      <td class="text-left"> 150 </td>


                      <td class="text-left"> 6:32:11 am </td>
                      <td class="text-left">Feb 26,2018 </td>
                      <td class="text-left"> Self </td>
                      <td class="text-left"> 1.2 Kg</td>
                      <td class="text-left"> Islamabad</td>
                      <td class="text-left">Lahore</td>




                      <td class="text-right">
                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                            data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                          </button>
                        </span>
                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                          data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                            class="icon ion-edit"></i> </button>

                      </td>
                    </tr>





                  </tbody>
                </table>

              </div>
            </div>










          </div>




        </div>




      </div>




















      <div class="modal fade  modal-success text-left" id="editpop1" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-center  modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-teal-800">
              <button type="button" class="close" data-dismiss="modal">
                <span>x</span>
              </button>
              <h4 class="modal-title">Consignment Summary</h4>
            </div>
            <div class="modal-body">
              <div class="row">

                <div class="col-xs-12">
                  <div class="grid invoice">
                    <div class="grid-body">
                      <div class="invoice-title">


                        <div class="row">
                          <div class="col-xs-8">
                            <h2 class="margin-top-0">

                              <span class="small">#1082</span>
                            </h2>
                          </div>

                          <div class="col-xs-4 text-right">
                            <img src="images/sample-logo.png" alt="" height="35">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="panel panel-default  font-size-16">
                            <div class="panel-heading">
                              <h3 class="panel-title">From:</h3>
                            </div>
                            <div class="panel-body">
                              <h5></h5>
                              John Smith<br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="panel panel-default  font-size-16">
                            <div class="panel-heading">
                              <h3 class="panel-title">Shipped To:</h3>
                            </div>
                            <div class="panel-body">
                              Elizibeth Crown<br>
                              365 Jordan Ave, House 207<br>
                              Manchester, CA 8597111<br>
                              <abbr title="Phone">P:</abbr> (321) 996-8200
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="panel panel-default  font-size-16">
                            <div class="panel-heading">
                              <h3 class="panel-title">Shipment Details</h3>
                            </div>
                            <div class="panel-body">
                              <b> Order Date:</b> 17/06/18
                              <br />

                              Box A (33.7 * 32.2 * 10.0)
                              <br />
                              20 Laptops
                              <br />
                              <b> Esimated Price:</b>: 35 (USD)

                            </div>
                          </div>
                        </div>

                      </div>



                    </div>
                  </div>
                </div>
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-blue-800 white" href="" data-target="#editpop3" data-toggle="modal"
                data-dismiss="modal">Print QR Code</button>
              <a href="consignmentform.php">

                <button type="button" class="btn btn-success white ">Continue</button>

              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade  modal-success text-left" id="editpop3" role="dialog" tabindex="-3">
        <div class="modal-dialog modal-center  modal-sm">
          <div class="modal-content">
            <div class="modal-header bg-teal-800">
              <button type="button" class="close" data-dismiss="modal">
                <span>x</span>
              </button>
              <h4 class="modal-title">QR Code</h4>
            </div>
            <div class="modal-body">
              <div class="text-center ">


                <img src="images/dn.png" alt="img" style="width:90%">
              </div>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>
      <div class="modal fade  modal-success text-left" id="editpop2" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-center  modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-teal-800">
              <button type="button" class="close" data-dismiss="modal">
                <span>x</span>
              </button>
              <h4 class="modal-title">Consignments Summary</h4>
            </div>
            <div class="modal-body">

              <div class="row">

                <div class="col-lg-12">



                  <div class="vscroll padding-right-10" style="height:270px;">
                    <table class="table   margin-bottom-0">
                      <thead>
                        <tr class="">
                          <th class="text-left">ID </th>


                          <th class="text-left">Generated Time</th>
                          <th class="text-left">Generated Date</th>

                          <th class="text-left">Consignment Detail</th>
                          <th class="text-left">Net Weight</th>
                          <th class="text-left">Pickup City</th>
                          <th class="text-left">Drop-off City</th>

                          <th class="text-right"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-left"> <a href="">150</a> </td>


                          <td class="text-left"> 6:32:11 am </td>
                          <td class="text-left">Feb 26,2018 </td>
                          <td class="text-left">12 Laptops </td>
                          <td class="text-left"> 1.2 Kg</td>
                          <td class="text-left"> Islamabad</td>
                          <td class="text-left">Lahore</td>
                          <td class="text-right">
                            <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                              </button>
                            </span>
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                              data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                                class="icon ion-edit"></i> </button>

                          </td>


                        </tr>

                        <tr>
                          <td class="text-left"> <a href="">150</a> </td>


                          <td class="text-left"> 6:32:11 am </td>
                          <td class="text-left">Feb 26,2018 </td>
                          <td class="text-left"> Self </td>
                          <td class="text-left"> 1.2 Kg</td>
                          <td class="text-left"> Islamabad</td>
                          <td class="text-left">Lahore</td>




                          <td class="text-right">
                            <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                              <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                                data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                              </button>
                            </span>
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs"
                              data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i
                                class="icon ion-edit"></i> </button>

                          </td>
                        </tr>










                      </tbody>
                    </table>
                  </div>

                </div>

              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-blue-800 white" href="" data-target="#editpop3" data-toggle="modal"
                data-dismiss="modal">Print QR Codes</button>
              <a href="consignmentform.php">

                <button type="button" class="btn btn-success white ">Continue</button>

              </a>
            </div>
          </div>
        </div>
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