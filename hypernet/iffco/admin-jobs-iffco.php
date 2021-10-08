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
            <h1 class="page-title">Jobs</h1>

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
                            <span class=" font-weight-600 text-uppercase ">Add New</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-xs-6">
                    <a data-toggle="tab" href="#Bulk" class="grey-700 active">
                        <div class="padding-15 bg-primary-100 text-center card hover margin-bottom-30">
                            <div class="margin-bottom-0    primary-800">
                                <i class="ion-android-add"></i>
                            </div>
                            <span class=" font-weight-600 text-uppercase ">Bulk Upload  (CSV/Excel)</span>
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

                    <h3 class="margin-top-0 font-size-18">Please fill out the following form</h3>
                    <hr />
                    <!-- <div class=" alert alert-danger white  bg-red-800">
                        <p> 1- Invalid email address </p>
                        <p> 2- Invalid phone number </p>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Job Title</label>
                                        <input type="text" class="form-control" value="-" placeholder="..." />
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Start Date</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">End Date</label>
                                        <input type="text" class="form-control" placeholder="..." />
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Priority</label>
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            title="Select" data-style="btn-select" data-live-search="false">

                                            <option data-content="<span class='label label-danger'> High </span> ">
                                            </option>
                                            <option data-content="<span class='label label-info'>Normal </span>">
                                            </option>
                                            <option data-content="<span class='label label-success'>Low </span>">
                                            </option>


                                        </select>
                                    </div>
                                </div>



                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Type</label>
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            title="Select  " data-style="btn-select" data-live-search="false">
                                            <option>-</option>
                                            <option>Courier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Fleet</label>

                                        <div class="input-group">

                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext="">ABJ189 </option>
                                                <option data-subtext="">TTR1856 </option>
                                                <option data-subtext="">ABJ189 </option>
                                                <option data-subtext="">TTR1856 </option>
                                            </select>

                                            <span class="input-group-addon pointer" data-toggle="collapse"
                                                data-target="#info1"> View Suggestion </span>
                                        </div>








                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">From (Warehouse)</label>
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            title="Select" data-style="btn-select" data-live-search="false">
                                            <option>Warehouse1 </option>
                                            <option>Warehouse2</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">To (Warehouse)</label>
                                        <select class="form-control selectpicker " data-width="100%" data-size="5"
                                            title="Select" data-style="btn-select" data-live-search="false">
                                            <option>Warehouse1 </option>
                                            <option>Warehouse2</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Assignt to</label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> John Smith </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Consignment </label>
                                        <div class="input-icon">
                                            <select class="form-control selectpicker " data-width="100%" data-size="5"
                                                data-style="btn-select">
                                                <option data-subtext=""> CON1456 </option>
                                                <option data-subtext=""> CON1785 </option>
                                                <option data-subtext=""> CON589 </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <div class="row1">
                                    <div class="col-lg-12">
                                        <div class="bg-cyan-100 padding-0 collapse" id="info1">
                                            <div class="panel panel-default ">
                                                <div class="panel-heading margin-bottom-0">
                                                    <h3 class="panel-title font-weight-600 ">Top 10 Recommended
                                                        Fleets
                                                    </h3>
                                                </div>
                                                <div class="panel-body padding-15 bg-blue-00">

                                                    <div class="vscroll padding-right-0" style="height:auto;">
                                                        <table
                                                            class="table  table-bordered table-hover table-condensed1 table-striped1 margin-bottom-0"
                                                            id="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-left"></th>
                                                                    <th class="text-left">Name</th>

                                                                    <th class="text-left">Company</th>
                                                                    <th class="text-center">Jobs This Month Completed
                                                                    </th>
                                                                    <th class="text-center"> Avg time Per trip</th>
                                                                    <th class="text-center">Performance Rating</th>



                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    LZR 5478
                                                                                </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        190
                                                                    </td>
                                                                    <td class="text-center">
                                                                        19.5 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        8</td>


                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo1.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    YUT586
                                                                                </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        241
                                                                    </td>
                                                                    <td class="text-center">
                                                                        17.5 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        8</td>


                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    TTR256 </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        190
                                                                    </td>
                                                                    <td class="text-center">
                                                                        24.2 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        9</td>


                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    LZR 5478
                                                                                </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        190
                                                                    </td>
                                                                    <td class="text-center">
                                                                        19.5 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        8</td>


                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo1.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    YUT586
                                                                                </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        241
                                                                    </td>
                                                                    <td class="text-center">
                                                                        17.5 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        8</td>


                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div
                                                                            class="radio-custom checkbox-info margin-0 ">
                                                                            <input type="radio" value="online"
                                                                                id="Online1" name="online" />
                                                                            <label for="Online1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <div class="media" style="max-width: 200px;">
                                                                            <div class="media-left padding-right-10">
                                                                                <img src="images/icon-truck-photo.png"
                                                                                    class="img-bordered"
                                                                                    style="height:36px;width:36px">
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <a href="" class="font-weight-600">
                                                                                    TTR256 </a>
                                                                                <br>
                                                                                <i class="small">Truck</i>
                                                                            </div>
                                                                        </div>

                                                                    </td>

                                                                    <td class="text-left">
                                                                        Marshall Goods
                                                                    </td>
                                                                    <td class="text-center">
                                                                        190
                                                                    </td>
                                                                    <td class="text-center">
                                                                        24.2 Hours
                                                                    </td>

                                                                    <td class="text-center">
                                                                        9</td>


                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>





                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-sm-12">

                                    <div class="form-group ">
                                        <label class="control-label">Additional Notes</label>
                                        <textarea class="form-control" rows="3" placeholder="..."></textarea>
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
                <div class="tab-pane  " id="Bulk">

                    <h3 class="margin-top-0 font-size-18">Bulk Upload</h3>
                    <hr>

                    <div style="max-width: 2000px; margin: auto;">
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


                    <div class="table-responsive ">


                        <table
                            class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered      ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="text-left">Assigned To</th>
                                    <th class="text-left">Type </th>
                                    <th class="text-left">Performed Time</th>
                                    <th class="text-left">Scheduled Time</th>
                                    <th class="text-left">Priority</th>
                                    <th class="text-left">Date Range</th>
                                    <th class="text-left">Routine </th>
                                    <th class="text-right"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>B1591 </td>
                                    <td class="text-left">
                                        <div class="media" style="max-width: 200px;">
                                            <div class="media-left padding-right-10">
                                                <img src="images/user.jpg" class="img-bordered" style="height:36px">
                                            </div>
                                            <div class="media-body">
                                                Luis Suarez

                                                <br />
                                                <i class="small">Manager</i>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-left"> Inspection </td>
                                    <td class="text-left">11:00pm </td>
                                    <td class="text-left">01:00am </td>
                                    <td class="text-left"> <span class="label label-danger">High</span> </td>
                                    <td class="text-left">01 Aug - 02 Aug </td>
                                    <td class="text-left"> Daily </td>
                                    <td class="text-right">
                                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">

                                            <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"> <i
                                                    class="icon ion-plus"></i>
                                                View Details
                                            </button>
                                        </span>

                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="bg-cyan-100 padding-0  ">


                                        <div class="bg-cyan-100 padding-0 collapse" id="row1" aria-expanded="true">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Description
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            Lorem Ipsum is simsm isis sustry. Loremis sustry
                                                            . Loremis susry. Loremis sustry. Loremis sustry. Lorem
                                                            sustry. Lorem Ipsu
                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis
                                                            sustry.sum is sustry.
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>B14586 </td>
                                    <td class="text-left">
                                        <div class="media" style="max-width: 200px;">
                                            <div class="media-left padding-right-10">
                                                <img src="images/user-img1.jpg" class="img-bordered"
                                                    style="height:36px">
                                            </div>
                                            <div class="media-body">
                                                Neymar Jr.

                                                <br />
                                                <i class="small">Driver</i>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-left"> - </td>
                                    <td class="text-left">11:00pm </td>
                                    <td class="text-left">11:00pm </td>
                                    <td class="text-left"> <span class="label label-info">Normal </span> </td>
                                    <td class="text-left">06 Oct - 07 Oct </td>
                                    <td class="text-left"> Daily </td>
                                    <td class="text-right">
                                        <span data-toggle="collapse" data-target="#row" class="accordion-toggle">
                                            <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"> <i
                                                    class="icon ion-plus"></i>
                                                View Details
                                            </button>
                                        </span>
                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="bg-cyan-100 padding-0  ">


                                        <div class="bg-cyan-100 padding-0 collapse" id="row" aria-expanded="true">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Description
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            Lorem Ipsum is simsm isis sustry. Loremis sustry
                                                            . Loremis susry. Loremis sustry. Loremis sustry. Lorem
                                                            sustry. Lorem Ipsu
                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis
                                                            sustry.sum is sustry.
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>B1325 </td>
                                    <td class="text-left">
                                        <div class="media" style="max-width: 200px;">
                                            <div class="media-left padding-right-10">
                                                <img src="images/user-img2.jpg" class="img-bordered"
                                                    style="height:36px">
                                            </div>
                                            <div class="media-body">
                                                David

                                                <br />
                                                <i class="small">Staff</i>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-left"> Inspection</td>
                                    <td class="text-left">11:20pm </td>
                                    <td class="text-left">12:05am</td>
                                    <td class="text-left"> <span class="label label-success">Low</span> </td>
                                    <td class="text-left">04 Jan - 04 Jan </td>
                                    <td class="text-left"> Weekly </td>
                                    <td class="text-right">
                                        <span data-toggle="collapse" data-target="#row2" class="accordion-toggle">
                                            <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"> <i
                                                    class="icon ion-plus"></i>
                                                View Details
                                            </button>
                                        </span>
                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="bg-cyan-100 padding-0  ">


                                        <div class="bg-cyan-100 padding-0 collapse" id="row2" aria-expanded="true">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Description
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            Lorem Ipsum is simsm isis sustry. Loremis sustry
                                                            . Loremis susry. Loremis sustry. Loremis sustry. Lorem
                                                            sustry. Lorem Ipsu
                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis
                                                            sustry.sum is sustry.
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>B2154 </td>
                                    <td class="text-left">
                                        <div class="media" style="max-width: 200px;">
                                            <div class="media-left padding-right-10">
                                                <img src="images/user-img3.jpg" class="img-bordered"
                                                    style="height:36px">
                                            </div>
                                            <div class="media-body">
                                                Mark Nicholas

                                                <br />
                                                <i class="small">Manager</i>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-left"> - </td>
                                    <td class="text-left">08:13am </td>
                                    <td class="text-left">01:30am </td>
                                    <td class="text-left"> <span class="label label-info">Normal </span> </td>
                                    <td class="text-left">06 Feb - 07 Feb </td>
                                    <td class="text-left"> Daily </td>
                                    <td class="text-right">
                                        <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                            <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"> <i
                                                    class="icon ion-plus"></i>
                                                View Details
                                            </button>
                                        </span>
                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="bg-cyan-100 padding-0  ">


                                        <div class="bg-cyan-100 padding-0 collapse" id="row3" aria-expanded="true">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Description
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            Lorem Ipsum is simsm isis sustry. Loremis sustry
                                                            . Loremis susry. Loremis sustry. Loremis sustry. Lorem
                                                            sustry. Lorem Ipsu
                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis
                                                            sustry.sum is sustry.
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>B1223 </td>
                                    <td class="text-left">
                                        <div class="media" style="max-width: 200px;">
                                            <div class="media-left padding-right-10">
                                                <img src="images/user.jpg" class="img-bordered" style="height:36px">
                                            </div>
                                            <div class="media-body">
                                                Johnny

                                                <br />
                                                <i class="small">Manager</i>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="text-left"> Inspection </td>
                                    <td class="text-left">09:14am </td>
                                    <td class="text-left">02:39pm </td>
                                    <td class="text-left"> <span class="label label-danger">High </span> </td>
                                    <td class="text-left">23 Oct - 24 Oct </td>
                                    <td class="text-left"> Daily </td>
                                    <td class="text-right">
                                        <span data-toggle="collapse" data-target="#row4" class="accordion-toggle">
                                            <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"> <i
                                                    class="icon ion-plus"></i>
                                                View Details
                                            </button>
                                        </span>
                                        <button type="button" class="btn btn-icon  btn-info btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                        <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed"
                                            data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                        </button>

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="9" class="bg-cyan-100 padding-0  ">


                                        <div class="bg-cyan-100 padding-0 collapse" id="row4" aria-expanded="true">
                                            <table
                                                class="table  table-inner table-condensed table-bordered1 margin-bottom-0 ">
                                                <thead>
                                                    <tr>
                                                        <th>Description
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            Lorem Ipsum is simsm isis sustry. Loremis sustry
                                                            . Loremis susry. Loremis sustry. Loremis sustry. Lorem
                                                            sustry. Lorem Ipsu
                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis
                                                            sustry.sum is sustry.
                                                        </td>

                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
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