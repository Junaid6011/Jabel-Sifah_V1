<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link href="../plugins/images/hypernet-favicon.png" rel="icon" type="image/png" />
        <title>Welcome</title>
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

    <body class=" ">
        <?php include_once('_header.php'); ?>
        <?php include_once('_leftmenu.php'); ?>



        <div class="page ">
            <div class="page-header  page-header-bordered">
                <h1 class="page-title">Vendor</h1>

                <div class="page-header-actions">
                    <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
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
                    <!-- <li class="col-md-2 col-xs-6">
                        <a data-toggle="tab" href="#listing1" class="nav-link padding-15 bg-white   text-center   card margin-bottom-30">
                            <div class="">
                                <div class="margin-bottom-0  font-size-20  primary-800">
                                    <i class="ion-ios-list-outline"></i>
                                </div>
                                <span class=" font-weight-600 text-uppercase ">Listing </span>
                            </div>
                        </a>
                    </li> -->
                </ul>



                <div class="tab-content ">
                    <div class="tab-pane active" id="addnew">


                        <div class="panel card light margin-bottom-15">
                            <div class="panel-heading  bg-green-800 ">
                                <div class="panel-title white font-size-14">
                                    Please fill out the following form
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Code</label>
                                                    <input type="text" class="form-control" placeholder="..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" class="form-control" placeholder="..." />
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Contact</label>
                                                    <input type="text" class="form-control" placeholder="..." />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Country</label>
                                                    <div class="input-icon">
                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                            <option data-subtext=""> -</option>
                                                            <option data-subtext=""> -</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">City</label>
                                                    <div class="input-icon">
                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                            <option data-subtext=""> -</option>
                                                            <option data-subtext=""> -</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Address
                                                    </label>
                                                    <div class="input-icon">
                                                        <textarea rows="2" class="form-control" value=""> </textarea>
                                                    </div>
                                                </div>
                                            </div>















                                        </div>



                                    </div>

                                    <div class="col-lg-6">

                                        <div class="padding-15 padding-bottom-0 text-center">

                                            <div class="margin-bottom-10 ">
                                                <div class="mapbox margin-bottom-0 ">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                        width="100%" height="350" frameborder="0" style="border:0" class="pull-left map"></iframe>



                                                </div>



                                            </div>

                                            <button type="button" class="btn btn-info  btn-round btn-xs"><i class="icon ion-ios-cloud-upload pull-left" aria-hidden="true"></i>Select On Map
                                            </button>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>




                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group1">
                                    <button type="button" class="btn btn-primary    btn-lg">
                                        Submit Details
                                    </button>
                                    <button type="button" class="btn btn-default    btn-lg">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane " id="Bulk">
                        <div class="panel card light margin-bottom-15">
                            <div class="panel-heading  bg-green-800 ">
                                <div class="panel-title white font-size-14">
                                    Bulk Upload
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="" style="max-width: 600px; margin: auto;">
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


                                    <div class="row">

                                        <div class="col-sm-12 text-center">

                                            <div class="form-group1">
                                                <button type="button" class="btn btn-primary  btn-round1  " data-target="#orderdetail-popup" data-toggle="modal">
                                                    Submit Details
                                                </button>
                                                <button type="button" class="btn btn-default btn-round1  ">
                                                    Clear
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>





                    </div>
                    <div class="tab-pane" id="listing">

                        <div class="panel card light margin-bottom-15">
                            <div class="panel-heading  bg-green-800 ">
                                <div class="panel-title white font-size-14">
                                    Listing
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="margin-bottom-0 clearfix">
                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                        <input type="text" class="form-control input-sm" placeholder="Search">
                                    </div>


                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                        <div class="">
                                            <input type="submit" class="btn btn-sm btn-info" value="Go">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                        <thead>
                                            <tr class="">
                                                <th class="text-left">Name </th>
                                                <th class="text-left">Type </th>
                                                <th class="text-left">Location </th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">


                                                <td> Musandam

                                                </td>
                                                <td>Parking
                                                </td>
                                                <td> Mulburge
                                                </td>
                                                <td class="text-right">

                                                    <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                    </button>

                                                </td>

                                            </tr>
                                            <tr class="">


                                                <td>Ras abuoud

                                                </td>
                                                <td>Pickup
                                                </td>
                                                <td> Mulburge
                                                </td>
                                                <td class="text-right">

                                                    <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                    </button>

                                                </td>

                                            </tr>
                                            <tr class="">


                                                <td> Asolyah

                                                </td>
                                                <td>Parking
                                                </td>
                                                <td> Mulburge
                                                </td>
                                                <td class="text-right">

                                                    <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
                                                    </button>

                                                </td>

                                            </tr>
                                            <tr class="">


                                                <td> Sohar
                                                </td>
                                                <td>Parking
                                                </td>
                                                <td> Mulburge
                                                </td>
                                                <td class="text-right">

                                                    <button type="button" class="btn btn-icon  btn-info btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-edit"></i> Edit </button>
                                                    <button type="button" class="btn btn-icon  btn-danger btn-xs collapsed" data-target="#editpop1"> <i class="icon ion-android-delete"></i> Delete
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
























        </div>








        </div>









        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















    </body>

</html>