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






        <ul class="row nav nav-pills nav-tabs-line">
          <li class="col-md-2 col-xs-6 active">
            <a data-toggle="tab" href="#addnew" class="nav-link padding-15 bg-primary-100  text-center card hover margin-bottom-30 ">
              <div class="">
                <div class="margin-bottom-0">
                  <i class="ion-android-add"></i>
                </div>
                <span class="font-weight-600 text-uppercase ">Add New</span>
              </div>
            </a>
          </li>
          <li class="col-md-2 col-xs-6">
            <a data-toggle="tab" href="#Bulk" class="nav-link padding-15 bg-primary-100  text-center card hover margin-bottom-30">
              <div class="">
                <div class="margin-bottom-0    primary-800">
                  <i class="ion-android-add"></i>
                </div>
                <span class=" font-weight-600 text-uppercase ">Bulk Upload (CSV/Excel)</span>
              </div>
            </a>
          </li>
          <li class="col-md-2 col-xs-6">
            <a data-toggle="tab" href="#listing" class="nav-link padding-15 bg-primary-100  text-center card hover margin-bottom-30">
              <div class="">
                <div class="margin-bottom-0    primary-800">
                  <i class="ion-ios-list-outline"></i>
                </div>
                <span class=" font-weight-600 text-uppercase ">Listing</span>
              </div>
            </a>
          </li>
        </ul>





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

                <!-- <div class="row">
                  <div class="col-sm-12">
                    <div class="bg-green-600 padding-15 margin-bottom-30">
                      <div class="form-group1">
                        <label class="control-label white">Customer Type</label>
                        <select class="form-control">
                          <option>Individual </option>
                          <option>Corporate </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div> -->



                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-dark  bg-grey-100 light ">

                      <div class="panel-heading font-weight-600 margin-bottom-0 ">
                        <h3 class="panel-title ">Genernal Information</h3>

                      </div>
                      <div class="panel-body padding-15 ">

                        <h4 class="green-800 ">Shipper Details</h4>

                        <div class="row">

                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">First Name</label>
                              <input type="text" class="form-control" value="Amjad">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Last Name</label>
                              <input type="text" class="form-control" value="Ali">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Phone Number</label>
                              <input type="text" class="form-control" value="923145140022">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Secondary Phone Number</label>
                              <input type="text" class="form-control" value="923143333373346">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="control-label">Name/Company</label>
                              <input type="text" class="form-control" value="SPTDigital">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label class="control-label">Email</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="info@sptdigial.com">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">City</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Karachi">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Country</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Pakistan">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label class="control-label">Address</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Office Plot#5, New Broad House Behind KDA">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-5">








                            <div class="form-group margin-bottom-30">

                              <div class="checkbox-custom checkbox-inline checkbox-success pull-left">
                                <input type="checkbox" id="chkPassport" name="checkbox" id="chkPassport">
                                <label for="chkPassport">Shipping address same as sender details</label>
                              </div>

                              <script>
                                $(function () {
                                  $("#chkPassport").click(function () {
                                    if ($(this).is(":checked")) {
                                      $("#AddPassport").hide();
                                    } else {
                                      $("#AddPassport").show();
                                    }
                                  });
                                });
                              </script>
                            </div>

                          </div>

                        </div>




                        <div class="" id="AddPassport">
                          <hr />
                          <h4 class="green-800 "><b>From:</b> Shipment Details</h4>

                          <div class="row">

                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" value="Amjad">
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control" value="Ali">
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Phone Number</label>
                                <input type="text" class="form-control" value="923145140022">
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Secondary Phone Number</label>
                                <input type="text" class="form-control" value="923143333373346">
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label class="control-label">Name/Company</label>
                                <input type="text" class="form-control" value="SPTDigital">
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="input-icon">
                                  <input type="text" class="form-control" value="info@sptdigial.com">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">City</label>
                                <div class="input-icon">
                                  <input type="text" class="form-control" value="Karachi">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-group">
                                <label class="control-label">Country</label>
                                <div class="input-icon">
                                  <input type="text" class="form-control" value="Pakistan">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-group">
                                <label class="control-label">Address</label>
                                <div class="input-icon">
                                  <input type="text" class="form-control" value="Office Plot#5, New Broad House Behind KDA">
                                </div>
                              </div>
                            </div>



                          </div>
                        </div>


                        <hr />
                        <h4 class="green-800 "><b>To:</b> Recipient Details</h4>
                        <div class="row">

                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">First Name</label>
                              <input type="text" class="form-control" value="Amjad">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Last Name</label>
                              <input type="text" class="form-control" value="Ali">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Phone Number</label>
                              <input type="text" class="form-control" value="923145140022">
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Secondary Phone Number</label>
                              <input type="text" class="form-control" value="923143333373346">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label class="control-label">Name/Company</label>
                              <input type="text" class="form-control" value="SPTDigital">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label class="control-label">Email</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="info@sptdigial.com">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">City</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Karachi">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-2">
                            <div class="form-group">
                              <label class="control-label">Country</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Pakistan">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label class="control-label">Address</label>
                              <div class="input-icon">
                                <input type="text" class="form-control" value="Office Plot#5, New Broad House Behind KDA">
                              </div>
                            </div>
                          </div>





                          <div class="col-sm-12">
                            <div class="form-group">

                              <label class="control-label">Recipient verification by</label>
                              <div class="radio-custom  inline-block  checkbox-success margin-bottom-10 margin-right-20 ">
                                <input type="radio" id="CNIC" name="checkbox" checked>
                                <label for="CNIC" class="font-weight-400">CNIC Number</label>
                              </div>
                              <div class="radio-custom  inline-block  checkbox-success margin-bottom-10 margin-right-20 ">
                                <input type="radio" id="In" name="checkbox" checked>
                                <label for="In" class="font-weight-400">In Person</label>
                              </div>
                              <div class="radio-custom  inline-block  checkbox-success margin-bottom-10 margin-right-20 ">
                                <input type="radio" id="Other" name="checkbox" checked>
                                <label for="Other" class="font-weight-400">Other</label>
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
                    <div class="panel panel-dark  bg-grey-100 light ">

                      <div class="panel-heading font-weight-600  ">
                        <h3 class="panel-title ">Package Details</h3>

                      </div>
                      <div class="panel-body padding-15 ">






                        <div class="row">

                          <div class="col-lg-7">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label class="control-label">Type</label>
                                  <select class="form-control selectpicker" data-width="100%" title="" data-style="btn-select" data-live-search="true" id="colorselector">
                                    <option value="option1">Document</option>
                                    <option value="option2">Package</option>



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

                              <div class="col-lg-12">
                                <div id="option1" class="colors" style="display: none;">

                                </div>
                                <div id="option2" class="colors" style="display: none;">
                                  <div class="form-group">
                                    <!-- <label class="control-label">&nbsp;</label> -->
                                    <select class="form-control">
                                      <option>Electornics</option>

                                      <option>Jewelery</option>
                                      <option>Others</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                            </div>


                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label class="control-label">Service Type</label>
                                  <select class="form-control">
                                    <option>Prime Delivery</option>
                                    <option>Normal Delivery</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label class="control-label">Estimated Weight</label>
                                  <input type="text" class="form-control" value="10kg">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label class="control-label">Value of Shipment</label>
                                  <input type="text" class="form-control" value="">
                                </div>
                              </div>



                            </div>

                            <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <!-- <label class="control-label">Shipment Type</label> -->

                                  <textarea rows="2" class="form-control" placeholder=""> 5 Laptops, 10 Mouse
                                </textarea>
                                </div>

                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <div class="checkbox-custom checkbox-inline checkbox-success pull-left1">
                                    <input type="checkbox" id="inputCheckbox" name="checkbox" checked>
                                    <label for="inputCheckbox">Notify Recipient</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group margin-bottom-30">
                                  <div class="checkbox-custom checkbox-inline checkbox-success pull-left">
                                    <input type="checkbox" id="chkInsurance" name="checkbox" id="chkInsurance">
                                    <label for="chkInsurance">Insurance Coverage </label>
                                  </div>
                                  <div class="inline-block margin-left-10"> <a href="" data-target="#Insurance-popup" data-toggle="modal">View Terms</a></div>
                                  <script>
                                    $(function () {
                                      $("#AddInsurance").hide();
                                      $("#chkInsurance").click(function () {

                                        if ($(this).is(":checked")) {
                                          $("#AddInsurance").show();
                                        } else {
                                          $("#AddInsurance").hide();
                                        }
                                      });
                                    });
                                  </script>
                                </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="" id="AddInsurance">
                                  <div class="form-group" style="position: relative; top: -5px;">
                                    <!-- <label class="control-label">Value of Shipment</label> -->
                                    <input type="text" class="form-control input-sm" placeholder="Enter Insurance Number" value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="col-lg-4 col-sm-offset-1">
                            <div class="col-sm-0  ">

                              <div class="bg-green-600 white padding-15">
                                <!-- <h4 class="white">Prohibited Goods</h4> -->
                                <p>Following items are prohibited for shipping.</p>
                                <ol>
                                  <li>
                                    Animal skin / Fur / Animal organs and parts / Ivory and ivory products Goods with a particularly high value (e.g. artworks, antiques, precious stones, gold and silver)
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

                        <hr />
                        <div class="row">
                          <div class="col-sm-12">


                            <div class="table-responsive">

                              <div class="margin-bottom-0 p clearfix">
                                <div class="inline-block pull-left margin-right-10 font-size-16">
                                  Add Items

                                </div>



                                <div class="inline-block pull-right   margin-bottom-10">
                                  <a href="" class="btn btn-sm   btn-primary">
                                    Add New
                                  </a>
                                </div>
                              </div>
                              <table class="table  margin-bottom-0 table-hover1 table-condensed1 bg-white table-bordered      " id="">

                                <thead>
                                  <tr class="">
                                    <th class="text-left" width="300">Name </th>
                                    <th class="text-left">Quantity </th>
                                    <th class="text-left">Weight</th>
                                    <th class="text-left">Length</th>
                                    <th class="text-left">Width</th>
                                    <th class="text-left">Height</th>



                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-left"><input type="text" class="form-control" value="Dell Laptops">
                                    </td>
                                    <td class="text-left"><input type="text" class="form-control" value="5"> </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>





                                  </tr>
                                  <tr>
                                    <td class="text-left"><input type="text" class="form-control" value="A4Tech Mouse">
                                    </td>

                                    <td class="text-left"><input type="text" class="form-control" value="10"> </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>
                                    <td class="text-left">
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
                                    </td>





                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                          </td>
                          </tr>





                          </tbody>
                          </table>




















                        </div>
                      </div>


                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-dark  bg-grey-100 light ">

                      <div class="panel-heading font-weight-600 margin-bottom-0 ">
                        <h3 class="panel-title ">Payment Details</h3>

                      </div>
                      <div class="panel-body padding-15 ">


                        <div class="row">

                          <div class="col-lg-12">

                            <div class="row">
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <label class="control-label">Payment Type</label>
                                  <select class="form-control">
                                    <option>Advance Payment</option>
                                    <option>Payment on Delivery</option>
                                  </select>
                                </div>
                              </div>
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
                                  <label class="control-label">Total Weight</label>
                                  <input type="text" class="form-control" value="12kg">
                                </div>


                              </div>

                              <div class="col-sm-2 pull-right">
                                <div class="form-group text-center">
                                  <label class="control-label">Esimated Price</label>
                                  <div class="font-size-20 teal-800 ">3750 PKR</div>

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
                        <span class="glyphicon glyphicon-folder-open margin-right-5"> </span>
                        Browse
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

                <!-- <h3 class="margin-top-0 font-size-18 font-weight-6001">Listing</h3>
                <hr /> -->



                <div class="row">
                  <div class="col-lg-12">

                    <div class="panel panel-default padding-10  bg-blue-100  " style="min-height: 200px;">
                      <div class="panel-heading font-weight-600 margin-bottom-0">
                        <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                          <li class="active"><a data-toggle="tab" href="#Pickup" aria-expanded="true">Pickup Orders </a></li>
                          <li class=""><a data-toggle="tab" href="#Dispatch" aria-expanded="false">Dispatch Orders </a></li>
                          <li class=""><a data-toggle="tab" href="#Prime"> Prime Orders</a></li>
                        </ul>
                      </div>
                      <div class="panel-body padding-0">
                        <div class="tab-content">
                          <div class="tab-pane active" id="Pickup">
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


                                    <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
                                      View All
                                    </a>

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
                                        <th class="text-left">Periority</th>
                                        <th class="text-left">Service type</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Weight (kg)</th>
                                        <th class="text-left">Time & Date</th>

                                        <th class="text-left">Package Type </th>
                                        <th class="text-left">Zone </th>
                                        <th class="text-left">Order City</th>

                                        <th class="text-right"></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-left">AB1238967</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AA1234227</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AV1454567</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane " id="Dispatch">
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
                                    <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
                                      View All
                                    </a>

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
                                        <th class="text-left">Periority</th>
                                        <th class="text-left">Service type</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Weight (kg)</th>
                                        <th class="text-left">Time & Date</th>

                                        <th class="text-left">Package Type </th>
                                        <th class="text-left">Zone </th>
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
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AA1234227</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AB1238967</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AA1234227</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AA1234227</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AV1454567</td>
                                        <td class="text-left">
                                          <div class="label label-warning"> Normal </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>





                              </div>
                            </div>
                          </div>

                          <div class="tab-pane" id="Prime">
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
                                    <a href="order-history.php" class="btn btn-sm   btn-default btn-dark">
                                      View All
                                    </a>




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
                                        <th class="text-left">Periority</th>
                                        <th class="text-left">Service type</th>
                                        <th class="text-left">Status</th>
                                        <th class="text-left">Weight (kg)</th>
                                        <th class="text-left">Time & Date</th>

                                        <th class="text-left">Package Type </th>
                                        <th class="text-left">Zone </th>
                                        <th class="text-left">Order City</th>

                                        <th class="text-right"></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-left">AB1238967</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AA1234227</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AC1854567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">2 </td>
                                        <td class="text-left">11:34pm, May 17,2019 </td>
                                        <td class="text-left"> Document</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Lahore</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-left">AV1454567</td>
                                        <td class="text-left">
                                          <div class="label label-danger"> High </div>
                                        </td>
                                        <td class="text-left">Same Day </td>
                                        <td class="text-left">
                                          <div class="label label-success"> Pending </div>
                                        </td>
                                        <td class="text-left">24 </td>
                                        <td class="text-left">10:34pm, May 14,2019 </td>
                                        <td class="text-left"> Package</td>
                                        <td class="text-left"> Z-G5</td>
                                        <td class="text-left">Karachi</td>
                                        <td class="text-center">
                                          <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#Track" data-toggle="modal">
                                            Details
                                          </button>
                                          <!-- <button type="button" class="btn btn-icon  btn-info btn-xs " data-target="#assign-popup" data-toggle="modal">Sechdual</button> -->
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
            <h4 class="modal-title" id="exampleOptionalLarge">Summary

              <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
          </div>
          <div class="modal-body padding-top-0">


            <div class="table-responsive ritz2 ">
              <div class=" ">
                <div class="bg-green-100 padding-15 font-size-14 margin-bottom-15">
                  <div class="row">
                    <div class="col-md-4">

                      <address>
                        Shipment Details:
                        <br>
                        <!-- <img class="margin-right-10" src="images/metis-logo.png" height="40px" alt="..."><br> -->
                        <h4 class="font-weight-600">SPTDigital</h4>
                        Office Plot#5, New Broad House Behind KDA
                        <br> Karachi, Pakistan, 47000
                        <br> <br>
                        <b title="Mail">E-mail:</b> info@sptdigial.com
                        <br>
                        <b title="Phone">Phone:</b> +923145140022

                      </address>
                    </div>

                    <div class="col-md-4 col-md-offset-1 text-right1">

                      <address>
                        Recipient Details:
                        <br>
                        <!-- <img class="margin-right-10" src="images/adamjee.png" height="40px" alt="..."><br> -->
                        <h4 class="font-weight-600">Adam Jee Co</h4>
                        Ground Floor, Computer Plaza, Service Road Ghauri Town.
                        <br> Karachi, Pakistan
                        <br> <br>
                        <b title="Mail">E-mail:</b> info@adamjeeco.pk
                        <br>
                        <b title="Phone">Phone:</b> +923335178396

                      </address>
                    </div>

                    <div class="col-lg-3">
                      <br /> <br />
                      <div class=" text-center margin-bottom-10">
                        <img src="images/bar-code.png" width="100" heigt="100" />
                      </div>

                      <div class=" text-center font-weight-600">AA1234567 </div>

                    </div>



                    <!-- <div class="col-md-2 text-right">


                    <h4>Order Number</h4>
                    <p>
                      <a class="font-size-20" href="javascript:void(0)">#5669626</a>

                    </p>

                  </div> -->
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
                      <td class="bg-yellow-100">Package</td>
                      <td colspan="4"> 5 Laptops, 10 Mouse</td>
                    </tr>
                    <tr>

                      <td class="font-weight-600">Value of Shipment</td>
                      <td>-</td>
                      <td colspan="4">-</td>
                    </tr>
                    <tr>

                      <td class="font-weight-600">Estimated Weight</td>
                      <td>10kg</td>
                      <td colspan="4">-</td>
                    </tr>
                    <tr>
                      <td colspan="6" class="text-center"> <b class="blue-800"> Item #1 </b> </td>
                    </tr>
                    <tr class="font-weight-600">
                      <td>Name</td>
                      <td>Quantity</td>
                      <td>Weight</td>
                      <td>Length</td>
                      <td>Width</td>
                      <td>Height</td>
                    </tr>
                    <tr>
                      <td>Dell Laptops</td>
                      <td>5</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>

                    <tr>
                      <td colspan=" 6" class="text-center"> <b class="blue-800"> Item #2 </b> </td>
                    </tr>
                    <tr class="font-weight-600">
                      <td>Name</td>
                      <td>Quantity</td>
                      <td>Weight</td>
                      <td>Length</td>
                      <td>Width</td>
                      <td>Height</td>
                    </tr>
                    <tr>
                      <td>A4Tech Mouse</td>
                      <td>10</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>


                    <tr>
                      <td colspan="6" class="bg-green-600 white text-center">Payment Details</td>
                    </tr>

                    <tr>
                      <td colspan="2" class="font-weight-600">Payment Type</td>
                      <td colspan="4">Advance Payment</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Packing</td>
                      <td colspan="4">Box A - 25kg (33.7 * 32.2 * 10.0)</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Total Weight</td>
                      <td colspan="4">12kg</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Order Date/Time</td>
                      <td colspan="4">16-June-2019 02:07pm</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Estimated Delivery Time/Date</td>
                      <td colspan="4">17-June-2019</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-600">Esimated Price</td>
                      <td colspan="4">3750 PKR</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>




          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-info">Confirm & Print </button>
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
              <div class="col-sm-12">
                <div class="form-group1">
                  <label class="control-label">Assign to </label>
                  <div class="input-icon">
                    <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select" title="Select Rider" data-live-search="true">
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


    <div class="modal fade " id="Insurance-popup">
      <div class="modal-dialog modal-sm1">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="exampleOptionalLarge">Insurance Terms and Conditions

              <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
          </div>
          <div class="modal-body padding-top-0">

            <p>
              Unless otherwise expressly agreed in writing, no insurance will be effected by US in respect of the Shipper/Client/Sender's goods/cargo.

            </p>
            <p>
              Should the Shipper/Client/Sender require protection against loss or damage to a Shipment and if allowed by the terms of agreement, he must notify us before tendering the shipment, stating the nature and value of the goods and the destination of the shipment, specifying the
              arrangements required. Any such additional cover will incur further charges to the Shipper/Client/Sender so that shipments will be subjected to an Insurance policy. The premium for such cover will be quoted as an Insurance premium and be specific to the individual shipment tendered.
              Any such insurance cover would be subject to such terms and conditions as the insurer would stipulate.

            </p>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Confirm </button> -->
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