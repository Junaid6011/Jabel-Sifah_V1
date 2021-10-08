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
    <link rel="stylesheet" href="../plugins/styles/global.css">
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
<body class="layout-boxed1 site-menubar-unfold">


  <?php include_once('_header_staff.php'); ?>
    <!--<div w3-include-html="_leftmenu.html"></div>-->



    <div class="page-inner bg-white">
        <!--<div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Member</a></li>
            </ol>
        </div>-->
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->
        <div class="padding-10 bg-green-200">



            <ul class="nav nav-tabs nav-quick center nav-tabs-solid margin-bottom-0 padding-top-10 padding-bottom-5" data-plugin="nav-tabs"  style="border-radius:0;">
                <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsOne"  role="tab" aria-expanded="true"><i class="icon ion-person" aria-hidden="true"></i> Users (Create/Update)</a></li>
                <li role="presentation" class=""></li>
            </ul>
        </div>

        <div class="">

            <div class="tab-content padding-0">
                <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">

                    <div class="page-header">

                        <h1 class="page-title">Create New User</h1>
                        <div class="page-header-actions">
                            <button type="button" class="btn btn-sm   btn-success" onclick="window.history.go(-1)">
                                Back
                            </button>

                        </div>
                    </div>
                    <div class="page-content  container-fluid">
                        <div class="row">
                            <div class="col-lg-9">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Caretakers  </option>
                                                    <option data-subtext=""> Veterinarian  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">CNIC Number</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Language</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> French  </option>
                                                    <option data-subtext=""> English  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <div class="inline-block margin-right-20">
                                                <div class="radio-custom radio-primary ">
                                                    <input type="radio" id="inputRadiosUnchecked" name="inputRadios" />
                                                    <label for="inputRadiosUnchecked">Male</label>
                                                </div>
                                            </div>
                                            <div class="inline-block">
                                                <div class="radio-custom radio-primary ">
                                                    <input type="radio" id="inputRadiosChecked" name="inputRadios" checked />
                                                    <label for="inputRadiosChecked">Female</label>
                                                </div>
                                            </div>

                                            <div class="inline-block margin-right-20">
                                                <div class="checkbox-custom checkbox-primary ">
                                                    <input type="checkbox" id="checkbox1" name="inputRadios" />
                                                    <label for="checkbox1">Male</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Contact Number</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Date of Birth</label>
                                            <div class=" ">
                                                <div class="input-group ">
                                                    <span class="input-group-addon ">
                                                        <i class="icon wb-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control " value="10/24/17" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Date of Joining</label>
                                            <div class=" ">
                                                <div class="input-group ">
                                                    <span class="input-group-addon ">
                                                        <i class="icon wb-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control " value="10/24/17" />
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                </div>



                            </div>
                            <div class="col-lg-3">

                                <div class="padding-20 padding-bottom-0">

                                    <div class="margin-bottom-10">
                                        <img src="images/thumbnail.jpg " class="img-rounded img-bordered img-bordered-green" width="100%">
                                    </div>
                                    <button type="button" class="btn btn-default btn-block"><i class="icon ion-ios-cloud-upload pull-left" aria-hidden="true"></i>Upload Photo</button>


                                </div>


                            </div>

                        </div>


                        <div class="row">

                            <div class="col-sm-12">
                                <hr />
                                <div class="form-group1">
                                    <button type="button" class="btn btn-success ">
                                        Submit Details
                                    </button>
                                    <button type="button" class="btn btn-default ">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="margin-top-50">









                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="panel panel-info ">
                                        <div class="panel-heading bg-ioa-800 white ">
                                            <div class="panel-actions ">

                                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                                            </div>
                                            <h3 class="panel-title white"> <b>Staff List</b></h3>
                                        </div>
                                        <div class="panel-body padding-0">

                                            <div class="vscroll padding-right-10" style="height:auto;">
                                                <div class="table-responsive ">
                                                    <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="">Id</th>
                                                                <th class="text-left">Name</th>
                                                                <th class="text-left">Email</th>
                                                                <th class="text-left">Type </th>
                                                                <th class="text-left">CNIC</th>
                                                                <th class="text-left">Language</th>
                                                                <th class="text-left">Gender</th>
                                                                <th class="text-left">Contact No.</th>
                                                                <th class="text-left">Date of Birth</th>
                                                                <th class="text-left">Joining Date</th>
                                                                <th class="text-left">  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <!-------->

                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">ST-255</a></td>
                                                                <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24"></span> Danish Kumar</td>
                                                                <td class="text-left"> danish007@gmail.com </td>
                                                                <td class="text-left"> Caretaker </td>
                                                                <td class="text-left"> 0454585502 </td>
                                                                <td class="text-left">French</td>
                                                                <td class="text-left">  Male </td>
                                                                <td class="text-left"> (012) 1552 55 </td>
                                                                <td class="text-left">07 Oct  1980  </td>
                                                                <td class="text-left">01 Nov  2016  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

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

                <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                    <div class="page-header">

                        <h1 class="page-title">Cows (Create/Update)</h1>
                        <div class="page-header-actions">


                        </div>
                    </div>
                    <div class="page-content  container-fluid">

                        <div class="row">

                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Name </label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Group </label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Value  </option>
                                                    <option data-subtext=""> Value  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Lactation Status</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Value  </option>
                                                    <option data-subtext=""> Value  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Value  </option>
                                                    <option data-subtext=""> Value  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Herd</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Value  </option>
                                                    <option data-subtext=""> Value  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Latation Days </label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Breed</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                                    <option data-subtext=""> Value  </option>
                                                    <option data-subtext=""> Value  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Last Breeding</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Age</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Weight</label>
                                            <input type="text" class="form-control" placeholder="..." />
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="padding-20 padding-bottom-0">

                                    <div class="margin-bottom-10">
                                        <img src="images/thumbnail-cow.png " class="img-rounded img-bordered img-bordered-green" width="100%">
                                    </div>
                                    <!--<button type="button" class="btn btn-default btn-block"><i class="icon ion-ios-cloud-upload pull-left" aria-hidden="true"></i>Upload Photo</button>-->


                                </div>
                            </div>
                        </div>




                        <div class="row">

                            <div class="col-sm-12">
                                <hr />
                                <div class="form-group1">
                                    <button type="button" class="btn btn-success ">
                                        Submit Details
                                    </button>
                                    <button type="button" class="btn btn-default ">
                                        Clear
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="margin-top-50">









                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="panel panel-info ">
                                        <div class="panel-heading bg-ioa-800 white ">
                                            <div class="panel-actions ">

                                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                                            </div>
                                            <h3 class="panel-title white"> <b>Staff List</b></h3>
                                        </div>
                                        <div class="panel-body padding-0">

                                            <div class="vscroll padding-right-10" style="height:auto;">
                                                <div class="table-responsive ">
                                                    <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                                        <thead>
                                                            <tr class="">
                                                                <th class="">Id</th>
                                                                <th class="text-left">Name</th>
                                                                <th class="text-left">Group</th>
                                                                <th class="text-left">Lactation Status </th>
                                                                <th class="text-left">Stauts</th>
                                                                <th class="text-left">Herd Name</th>
                                                                <th class="text-left">Lactation Days</th>
                                                                <th class="text-left">Breed</th>
                                                                <th class="text-left">Last Breeding Time</th>
                                                                <th class="text-left">Age </th>
                                                                <th class="text-left">Weight (kg)</th>
                                                                <th class="text-left">  </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <!-------->

                                                            <tr>
                                                                <td><a href="">CW-255</a></td>
                                                                <td class="text-left">Cow1</td>
                                                                <td class="text-left">Heifer</td>
                                                                <td class="text-left"> <span class="label label-default">Bred </span>  </td>
                                                                <td class="text-left"> - </td>
                                                                <td class="text-left"> HR-122 </td>
                                                                <td class="text-left">07</td>
                                                                <td class="text-left">  Breed </td>
                                                                <td class="text-left"> 08:30pm - 07 Sep 17 </td>
                                                                <td class="text-left">15  </td>
                                                                <td class="text-left">95  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td><a href="">CW-255</a></td>
                                                                <td class="text-left">Cow1</td>
                                                                <td class="text-left">Heifer</td>
                                                                <td class="text-left"> <span class="label label-default">Bred </span>  </td>
                                                                <td class="text-left"> - </td>
                                                                <td class="text-left"> HR-122 </td>
                                                                <td class="text-left">07</td>
                                                                <td class="text-left">  Breed </td>
                                                                <td class="text-left"> 08:30pm - 07 Sep 17 </td>
                                                                <td class="text-left">15  </td>
                                                                <td class="text-left">95  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">CW-255</a></td>
                                                                <td class="text-left">Cow1</td>
                                                                <td class="text-left">Heifer</td>
                                                                <td class="text-left"> <span class="label label-default">Bred </span>  </td>
                                                                <td class="text-left"> - </td>
                                                                <td class="text-left"> HR-122 </td>
                                                                <td class="text-left">07</td>
                                                                <td class="text-left">  Breed </td>
                                                                <td class="text-left"> 08:30pm - 07 Sep 17 </td>
                                                                <td class="text-left">15  </td>
                                                                <td class="text-left">95  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">CW-255</a></td>
                                                                <td class="text-left">Cow1</td>
                                                                <td class="text-left">Heifer</td>
                                                                <td class="text-left"> <span class="label label-default">Bred </span>  </td>
                                                                <td class="text-left"> - </td>
                                                                <td class="text-left"> HR-122 </td>
                                                                <td class="text-left">07</td>
                                                                <td class="text-left">  Breed </td>
                                                                <td class="text-left"> 08:30pm - 07 Sep 17 </td>
                                                                <td class="text-left">15  </td>
                                                                <td class="text-left">95  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><a href="">CW-255</a></td>
                                                                <td class="text-left">Cow1</td>
                                                                <td class="text-left">Heifer</td>
                                                                <td class="text-left"> <span class="label label-default">Bred </span>  </td>
                                                                <td class="text-left"> - </td>
                                                                <td class="text-left"> HR-122 </td>
                                                                <td class="text-left">07</td>
                                                                <td class="text-left">  Breed </td>
                                                                <td class="text-left"> 08:30pm - 07 Sep 17 </td>
                                                                <td class="text-left">15  </td>
                                                                <td class="text-left">95  </td>

                                                                <td class="text-right">
                                                                    <span>
                                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>
                                                                    </span>

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








 
                    
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
