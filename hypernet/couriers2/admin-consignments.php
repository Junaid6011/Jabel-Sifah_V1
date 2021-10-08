<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="nos before-run" lang="en">

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
        <h1 class="page-title">Consignment</h1>

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
                <div class="margin-bottom-0    primary-800">
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
                <span class=" font-weight-600 text-uppercase ">Bulk Upload (CSV/Excel)</span>
              </div>
            </a>
          </div>
          <div class="col-md-2 col-xs-6">
            <a data-toggle="tab" href="#listing" class="grey-700">
              <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
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

            <div class="bg-green-600 padding-15 margin-bottom-30">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group1">
                    <label class="control-label white">Customer Type</label>
                    <select class="form-control">
                      <option>Individual </option>
                      <option>Corporate </option>

                    </select>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">

              <div class="col-lg-12">
                <h3 class="margin-top-0 font-size-18 font-weight-600">Shipment Details</h3>
                <hr />
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Search Customer</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                        <span class="input-group-addon pointer btn btn-info" data-toggle="collapse" data-target="#info1">
                          Search </span>
                      </div>
                    </div>


                  </div>
                  <div class="clearfix"></div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Full Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Company</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Country</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">City</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Postal Code</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">State</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label class="control-label">Address 1</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <hr />
              <div class="col-lg-12">
                <h3 class="margin-top-0 font-size-18 font-weight-600">Receiver Details</h3>
                <hr />

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Search Customer</label>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                        <span class="input-group-addon pointer btn btn-info" data-toggle="collapse" data-target="#info1">
                          Search </span>
                      </div>
                    </div>


                  </div>
                  <div class="clearfix"></div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Full Name</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Company</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Email</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Country</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">City</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">Postal Code</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="control-label">State</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label class="control-label">Address 1</label>
                      <div class="input-icon">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              <div class="col-lg-12">








                <h3 class="margin-top-0 font-size-18 font-weight-600">Package Details</h3>
                <hr />
                <div class="row">

                  <div class="col-lg-6">

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">Shipment Type</label>
                          <select class="form-control">
                            <option>Laptops</option>
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

                      <div class="bg-green-600 white padding-15">
                        <h4 class="white">Prohibited Goods</h4>
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                            <button type="submit" class="btn btn-info btn-round btn-outline"> <i class="icon ion-plus"></i></button>
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                              <button type="button" class="btn btn-default btn-outline dropdown-toggle" data-toggle="dropdown">
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
                            <button type="submit" class="btn btn-info btn-round btn-outline"> <i class="icon ion-plus"></i></button>
                          </div>
                        </div>


                      </div>

                    </div>
                  </div>
                </div>


                <div class="row">

                  <div class="col-lg-12">
                    <div class="panel panel-dark  bg-primary-100 ">

                      <div class="panel-body padding-15">

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

                              <div class="col-sm-1">
                                <div class="form-group">
                                  <label class="control-label">Quantity</label>
                                  <input type="text" class="form-control" value="2">
                                </div>
                              </div>

                              <div class="col-sm-1">
                                <div class="form-group">
                                  <label class="control-label">Max. Weight (kg)</label>
                                  <input type="text" class="form-control" value="25">
                                </div>
                              </div>
                            </div>


                            <div class="bg-white  padding-10 margin-bottom-0">


                              <div class="row">
                                <div class="col-sm-3">
                                  <div class="font-size-14 font-weight-600 ">
                                    Box A (33.7 * 32.2 * 10.0)
                                  </div>
                                </div>

                                <div class="col-sm-1">
                                  <div class="font-size-14 font-weight-600 ">
                                    2
                                  </div>
                                </div>

                                <div class="col-sm-1">
                                  <div class="font-size-14 font-weight-600 ">
                                    50kg
                                  </div>
                                </div>

                                <div class="col-sm-2 pull-right">
                                  <div class="font-size-14 font-weight-600 text-center green-800 bg-green-800 white ">
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
                  <button type="button" class="btn btn-dark  btn-round" data-target="#Track" data-toggle="modal">
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


            <div class="">

              <div class="panel-body1">


                <h3 class="margin-top-0 font-size-18 font-weight-6001">Bulk Upload</h3>
                <hr />

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
            <div class="  ">

              <div class="panel-body1">

                <h3 class="margin-top-0 font-size-18 font-weight-6001">Listing</h3>
                <hr />

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
                        <td class="text-left">Laptops </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left">Karachi</td>
                        <td class="text-left">Lahore</td>
                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>


                      </tr>

                      <tr>
                        <td class="text-left"> 150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left"> Self </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>




                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>
                      </tr>


                      <tr>
                        <td class="text-left">150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left">Laptops </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>
                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>


                      </tr>

                      <tr>
                        <td class="text-left"> 150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left"> Self </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>




                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>
                      </tr>
                      <tr>
                        <td class="text-left">150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left">Laptops </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>
                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>


                      </tr>

                      <tr>
                        <td class="text-left"> 150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left"> Self </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>




                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>
                      </tr>

                      <tr>
                        <td class="text-left">150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left">Laptops </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>
                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>


                      </tr>

                      <tr>
                        <td class="text-left"> 150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left"> Self </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>




                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>
                      </tr>
                      <tr>
                        <td class="text-left">150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left">Laptops </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>
                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

                        </td>


                      </tr>

                      <tr>
                        <td class="text-left"> 150 </td>


                        <td class="text-left"> 6:32:11 am </td>
                        <td class="text-left">Feb 26,2018 </td>
                        <td class="text-left"> Self </td>
                        <td class="text-left"> 7.2 Kg</td>
                        <td class="text-left"> Karachi</td>
                        <td class="text-left">Lahore</td>




                        <td class="text-right">
                          <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-trash-a"></i>
                            </button>
                          </span>
                          <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i> </button>

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




    <div class="modal fade example-modal-lg" id="Track">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleOptionalLarge">Summary <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4>
          </div>
          <div class="modal-body padding-top-0">


            <div class="table-responsive ritz2 ">
              <div class=" ">
                <div class="bg-green-100 padding-15 font-size-14 margin-bottom-15">
                  <div class="row">
                    <div class="col-md-4">

                      <address>
                        From:
                        <br> <br>
                        <img class="margin-right-10" src="images/metis-logo.png" height="40px" alt="..."><br>
                        <h4 class="font-weight-600">Metis International</h4>
                        Office Plot # ST 1 & 2. New Broad House Behind KDA
                        <br> Karachi, Pakistan, 47000
                        <br> <br>
                        <b title="Mail">E-mail:</b> info@metispvt.com
                        <br>
                        <b title="Phone">Phone:</b> (+92) 333 515 7890

                      </address>
                    </div>

                    <div class="col-md-4 col-md-offset-2 text-right1">

                      <address>
                        To:
                        <br> <br>
                        <img class="margin-right-10" src="images/adamjee.png" height="40px" alt="..."><br>
                        <h4 class="font-weight-600">Adam Jee Co</h4>
                        Translation.pk Translation Services,
                        Ground Floor, Computer Plaza,
                        Service Road Ghauri VIP,
                        <br> Karachi, Pakistan, 47000
                        <br> <br>
                        <b title="Mail">E-mail:</b> info@metispvt.com
                        <br>
                        <b title="Phone">Phone:</b> (+92) 333 515 7890

                      </address>
                    </div>



                    <div class="col-md-2 text-right">


                      <h4>Order Number</h4>
                      <p>
                        <a class="font-size-20" href="javascript:void(0)">#5669626</a>

                      </p>

                    </div>
                  </div>
                </div>
                <table class="waffle table  table-bordered  text-wrap1 table-hover table-condensed1 grey-800 table-striped margin-bottom-15 " cellspacing="0" cellpadding="0">
                  <thead>

                  </thead>
                  <tbody>

                    <tr>

                      <td colspan="6" class="bg-green-600 white text-center">Package Details</td>
                    </tr>
                    <tr>

                      <th class="font-weight-600">Shipment Type</th>
                      <td class="bg-yellow-100">Laptops</td>
                      <td colspan="4"> Lorem Ipsum, giving information on its origins, as
                        well</td>
                    </tr>
                    <tr>

                      <td class="font-weight-600">Value of Shipment</td>
                      <td>350</td>
                      <td colspan="4">PKR</td>
                    </tr>
                    <tr>
                      <td colspan="5" class="text-center"> <b class="blue-800"> Item #1 </b> </td>
                    </tr>
                    <tr class="font-weight-600">
                      <td>Quantity</td>
                      <td>width</td>
                      <td>Height</td>
                      <td>Length</td>
                      <td>Weight</td>
                    </tr>
                    <tr>

                      <td>5</td>
                      <td>200cm</td>
                      <td>10.5cm</td>
                      <td>12.5</td>
                      <td>20kg</td>
                    </tr>

                    <tr>
                      <td colspan=" 5" class="text-center"> <b class="blue-800"> Item #2 </b> </td>
                    </tr>
                    <tr class="font-weight-600">
                      <td>Quantity</td>
                      <td>Width</td>
                      <td>Height</td>
                      <td>Length</td>
                      <td>Weight</td>
                    </tr>
                    <tr>

                      <td>5</td>
                      <td>200cm</td>
                      <td>10.5cm</td>
                      <td>12.5</td>
                      <td>20kg</td>
                    </tr>


                    <tr>
                      <td colspan=" 5" class="text-center"> </td>
                    </tr>

                    <tr>
                      <td colspan="2" class="font-weight-600">Packing</td>
                      <td colspan="4">Box A - 25kg (33.7 * 32.2 * 10.0)</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Quantity</td>
                      <td colspan="4">7kg</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Esimated Price</td>
                      <td colspan="4">260 PKR</td>
                    </tr>
                  </tbody>
                </table>
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




    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















  </body>

</html>