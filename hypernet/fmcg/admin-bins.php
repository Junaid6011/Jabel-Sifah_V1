
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
            <h1 class="page-title">Bins</h1>

            <div class="page-header-actions">
            <a href=""  onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                    Back 
                </a>
            </div>
        </div>



        <div class="page-content  ">



        <ul class="row nav nav-pills nav-tabs-line">
                        <li class="col-md-2 col-xs-6 active">
                            <a data-toggle="tab" href="#addnew" class="nav-link padding-15 bg-primary-700  text-center card   margin-bottom-30 ">
                                <div class="white">
                                    <div class="margin-bottom-0 font-size-20">
                                        <i class="ion-android-add"></i>
                                    </div>
                                    <span class="font-weight-600 text-uppercase  ">Add New</span>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-2 col-xs-6">
                            <a data-toggle="tab" href="#Bulk" class="nav-link padding-15 bg-white  text-center card   margin-bottom-30">
                                <div class="">
                                    <div class="margin-bottom-0  font-size-20   primary-800">
                                        <i class="ion-android-add"></i>
                                    </div>
                                    <span class=" font-weight-600 text-uppercase ">Bulk Upload</span>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-2 col-xs-6">
                            <a data-toggle="tab" href="#listing" class="nav-link padding-15 bg-white   text-center   card margin-bottom-30">
                                <div class="">
                                    <div class="margin-bottom-0  font-size-20  primary-800">
                                        <i class="ion-ios-list-outline"></i>
                                    </div>
                                    <span class=" font-weight-600 text-uppercase ">Listing</span>
                                </div>
                            </a>
                        </li>
                    </ul>



            <div class="tab-content ">
                <div class="tab-pane active" id="addnew">

                    <h3 class="margin-top-0 font-size-18">Please fill out the following form</h3>
                    <hr />
                    <div class=" alert alert-danger white  bg-red-800">
                        <p> 1- Please select material </p>
                        <p> 2- Input field is missing </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Type</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> Recyclable </option>
                                                <option data-subtext="">Fixed </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Material</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> Plastic </option>
                                                <option data-subtext=""> Aluminium </option>
                                                 <option data-subtext=""> Galvanized Metal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Make</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> Weber </option>
                                                <option data-subtext=""> Helesi</option>
                                                <option data-subtext=""> PandaSteel</option>
												<option data-subtext=""> Iplast </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Capacity</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>
								<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> White </option>
                                                <option data-subtext=""> Black </option>
                                                <option data-subtext=""> Green</option>
												<option data-subtext=""> Grey</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Unladen Weight</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>

                               <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label"> Skip Size (m³) </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>

								 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label"> Skip Rate </label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>



                            </div>



                        </div>
                        <div class="col-lg-3">

                            <div class="padding-15 padding-bottom-0 text-center">

                                <div class="margin-bottom-10 ">
                                    <img src="images/bin-img.png" class=" img-bordered  " style="max-height: 200px;">


                                </div>

                                <button type="button" class="btn btn-info  btn-round btn-xs"><i class="icon ion-ios-cloud-upload pull-left"
                                        aria-hidden="true"></i>Upload Photo</button>

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

                <div class="tab-pane" id="listing">

                    <h3 class="margin-top-0 font-size-18">Listing</h3>
                    <hr />


                    <div class="table-responsive ">
                        <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      "
                            id="">
                            <thead>
                                <tr class="">
                                    <th class="">BIN</th>



									<th class="text-left">Material</th>
                                    <th class="text-left">Make</th>
									<th class="text-left">Capacity</th>
                                       <th class="text-left">Unladen Weight</th>
                                    <th class="text-left">Skip Size (m³)</th>
                                    <th class="text-left">Skip Rate</th>

                                    <th class="text-left"</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>

                                   <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN815 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>

                                    <td class="text-left"> Plastic </td>
                                    <td class="text-left"> Weber </td>
                                    <td class="text-left"> 3 (m³)</td>
                                    <td class="text-left"> 201 Kg</td>
                                    <td class="text-left"> 1.2 cmb</td>
                                    <td class="text-left">86</td>



                                    <td class="text-right">

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                               <tr>

                                    <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img1.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN124 </a>
                                                                        <br />
                                                                        <i class="small">Fixed </i>
                                                                    </div>
                                                                </div>



                                                            </td>

                                    <td class="text-left"> Aluminium </td>
                                    <td class="text-left"> Iplast </td>
                                    <td class="text-left"> 2 (m³)</td>
                                    <td class="text-left"> 200 Kg</td>
                                    <td class="text-left"> 2.2 cmb</td>
                                    <td class="text-left">84</td>


                                    <td class="text-right">

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                              <tr>

                                    <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN321 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>

                                    <td class="text-left"> Iron </td>
                                    <td class="text-left">Helesi </td>
                                    <td class="text-left"> 4 (m³)</td>
                                    <td class="text-left"> 190 Kg</td>
                                    <td class="text-left"> 1.7 cmb</td>
                                    <td class="text-left">26</td>


                                    <td class="text-right">

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                               <tr>

                                   <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN156 </a>
                                                                        <br />
                                                                        <i class="small">Fixed</i>
                                                                    </div>
                                                                </div>



                                                            </td>

                                    <td class="text-left"> Plastic</td>
                                    <td class="text-left"> Iplast </td>
                                    <td class="text-left"> 2 (m³)</td>
                                    <td class="text-left"> 201 Kg</td>
                                    <td class="text-left"> 1.5 cmb</td>
                                    <td class="text-left">78</td>


                                    <td class="text-right">

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                               <tr>

                                   <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/bin-img.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="bin.php" class="font-weight-600">
                                                                            BIN242 </a>
                                                                        <br />
                                                                        <i class="small">Recyclable </i>
                                                                    </div>
                                                                </div>



                                                            </td>

                                    <td class="text-left">Aluminium </td>
                                    <td class="text-left"> Weber </td>
                                    <td class="text-left"> 3 (m³)</td>
                                    <td class="text-left"> 210 Kg</td>
                                    <td class="text-left"> 2.5 cmb</td>
                                    <td class="text-left">46</td>


                                    <td class="text-right">

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
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









    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>
