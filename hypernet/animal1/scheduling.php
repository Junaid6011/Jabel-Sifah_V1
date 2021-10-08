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
<body class="dashboard">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>



    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Scheduling</a></li>
                <!--<li><a href="javascript:void(0)">HR-202</a></li>
                <li class="active">CW-120</li>-->
            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->


        <div class="page-content  container-fluid">


            <div class="row">

                <div class="col-lg-8">
                    <div class="panel panel-default shadow ">


                        <div class="panel-heading bg-green-800 white ">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b>Schedule New Activity </b></h3>
                        </div>
                        <div class="panel-body ">

                            <div class="bg-white padding-0">
                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Herd</label>
                                            <div class="input-icon">
                                                <select class="form-control selectpicker show-tick show-menu-arrow " data-width="100%" data-size="5" title="Select Herd" data-style="btn-select" data-live-search="true"  multiple>
                                                    <option data-subtext="[HR-485]"> Brood  </option>
                                                    <option data-subtext="[HR-202]"> Cowtahs  </option>
                                                    <option data-subtext="[HR-991]"> Cowsmay  </option>
                                                    <option data-subtext="[HR-951]"> Cowaax  </option>
                                                    <option data-subtext="[HR-561]"> Mooday  </option>
                                                    <option data-subtext="[HR-811]"> Herdy  </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Select Cows</label>

                                            <div class="input-icon">
                                                <select class="form-control selectpicker show-tick show-menu-arrow " data-size="5" data-width="100%" title="Other Cows" data-style="btn-select" data-live-search="true" multiple data-selected-text-format="count > 3">
                                                    <option>  CW-588   </option>
                                                    <option>  CW-471   </option>
                                                    <option>  CW-855   </option>
                                                    <option>  CW-103   </option>
                                                    <option>  CW-230   </option>
                                                    <option>  CW-455   </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Assign Staff </label>
                                            <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Member " data-style="btn-select" data-live-search="true">
                                                <option data-content="<img src='images/user-img1.jpg' width='20' /> Danish Kumar "></option>
                                                <option data-content="<img src='images/user-img2.jpg' width='20' /> Michel Sam "></option>
                                                <option data-content="<img src='images/user-img3.jpg' width='20' /> Greg White "></option>
                                                <option data-content="<img src='images/user-img4.jpg' width='20' /> Sunny Luke"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Activity Type" data-style="btn-select" data-live-search="false">
                                                <option>Feeding</option>
                                                <option>Milking</option>
                                                <option>Breeding</option>
                                                <option selected>Inspection</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Routine Type</label>
                                            <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Routine Type" data-style="btn-select" data-live-search="false">
                                                <option>Daily </option>
                                                <option>Weekly</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Priority</label>
                                            <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Priority" data-style="btn-select" data-live-search="false">

                                                <option data-content="<span class='label label-danger'> High </span> "></option>
                                                <option data-content="<span class='label label-info'>Normal </span>"></option>
                                                <option data-content="<span class='label label-success'>Low </span>"></option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Time Range</label>
                                            <div class="input-daterange  ">
                                                <div class="input-group ">
                                                    <span class="input-group-addon  hidden-xs">
                                                        <i class="icon  ion-android-alarm-clock"></i>
                                                    </span>
                                                    <input type="time" class="form-control " value="00:00" />
                                                </div>
                                                <div class="input-group ">
                                                    <span class="input-group-addon hidden-xs">to</span>
                                                    <input type="time" class="form-control " value="00:00" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Date Range</label>
                                            <div class="input-daterange   ">
                                                <div class="input-group ">
                                                    <span class="input-group-addon hidden-xs">
                                                        <i class="icon wb-calendar"></i>
                                                    </span>
                                                    <input type="text" class="form-control date" value="10/24/17" />
                                                </div>
                                                <div class="input-group ">
                                                    <span class="input-group-addon hidden-xs">to</span>
                                                    <input type="text" class="form-control date" value="10/25/17" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="form-group ">
                                            <label class="control-label">Additional Notes</label>
                                            <textarea class="form-control" rows="3" placeholder="..."></textarea>
                                        </div>
                                    </div>


                                    <!--<div class="col-sm-4">
                                        <div class="checkbox-custom checkbox-success ">
                                            <input type="checkbox" id="333">
                                            <label for="333">Volume</label>
                                        </div>
                                    </div>-->





                                </div>



                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-0 ">

                    <div class="panel panel-default  shadow   ">
                        <div class="panel-heading bg-orange-800 white ">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop white" data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title white"> <b>Recently Added </b></h3>
                        </div>
                        <div class="panel-body  ">
                            <div class="">
                                <div class="bg-white vscroll  " style="height:395px;">
                                    <div class="">
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-blue-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-921: Milking </span>
                                                    <div class="pull-right">
                                                        <button type="button" class="btn  btn-default btn-xs inline"><i class="ion-edit"></i></button>
                                                        <button type="button" class="btn  btn-default btn-xs"><i class="ion-trash-a"></i></button>
                                                    </div>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>



                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-orange-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-181: Breeding </span>
                                                    <div class="pull-right">
                                                        <button type="button" class="btn  btn-default btn-xs inline"><i class="ion-edit"></i></button>
                                                        <button type="button" class="btn  btn-default btn-xs"><i class="ion-trash-a"></i></button>
                                                    </div>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-blue-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / 11 Oct </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-122: Milking </span>
                                                    <div class="pull-right">
                                                        <button type="button" class="btn  btn-default btn-xs inline"><i class="ion-edit"></i></button>
                                                        <button type="button" class="btn  btn-default btn-xs"><i class="ion-trash-a"></i></button>
                                                    </div>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-orange-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / 11 Oct </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-151: Breeding </span>
                                                    <div class="pull-right">
                                                        <button type="button" class="btn  btn-default btn-xs inline"><i class="ion-edit"></i></button>
                                                        <button type="button" class="btn  btn-default btn-xs"><i class="ion-trash-a"></i></button>
                                                    </div>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="col-xs-4 icon">
                                                <i class="ion-clock  bg-orange-600 white"></i>
                                                <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>
                                            </div>
                                            <div class="col-xs-8 content no-top-border">
                                                <div class="margin-bottom-10">
                                                    <span class="label label-outline label-default margin-right-5" title="Header"> CW-185: Breeding </span>
                                                    <div class="pull-right">
                                                        <button type="button" class="btn  btn-default btn-xs inline"><i class="ion-edit"></i></button>
                                                        <button type="button" class="btn  btn-default btn-xs"><i class="ion-trash-a"></i></button>
                                                    </div>
                                                </div>
                                                <div class="font-size-10">
                                                    Lorem Ipsum is simsimsum is sustry simsum is sustry.sum is sustry.
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

                    <div class="panel panel-default  shadow   ">
                        <div class="panel-heading  ">
                            <div class="panel-actions ">

                                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                            <h3 class="panel-title "> <b>Scheduled Activities </b></h3>
                        </div>
                        <div class="panel-body ">
                            <div class="">
                                <div class="vscroll padding-right-10" style="height:auto;">
                                    <div class="table-responsive ">
                                        <table class="table table-condensed   margin-bottom-0   " id="dt-cowlist1x">
                                            <thead>
                                                <tr class="">
                                                    <th class="">Id</th>
                                                    <th class="text-left">Staff Assigned</th>
                                                    <th class="text-left">Activity Type </th>
                                                    <th class="text-left">Performed Time</th>
                                                    <th class="text-left">Scheduled Time</th>
                                                    <th class="text-left">Status</th>
                                                    <th class="text-left">Date Range</th>
                                                    <th class="text-left">Routine Type </th>
                                                    <th class="text-right"> Description</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">AC-855</a></td>
                                                    <td class="text-left"> <span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Dammy Sam</td>
                                                    <td class="text-left"> Milking </td>
                                                    <td class="text-left">11:00pm </td>
                                                    <td class="text-left">11:00pm </td>
                                                    <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                    <td class="text-left">06 Oct -  7 Oct  </td>
                                                    <td class="text-left"> Daily </td>
                                                    <td class="text-right">
                                                        <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                        </span>
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>

                                                        <div class="modal fade  modal-success text-left" id="editpop1"
                                                             role="dialog" tabindex="-1">
                                                            <div class="modal-dialog modal-center  modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" >
                                                                            <span >×</span>
                                                                        </button>
                                                                        <h4 class="modal-title">Modal Title</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="">
                                                                            <div class="row">

                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Herd</label>
                                                                                        <div class="input-icon">
                                                                                            <select class="form-control selectpicker show-tick show-menu-arrow " data-width="100%" data-size="5" title="Select Herd" data-style="btn-select" data-live-search="true" multiple>
                                                                                                <option data-subtext="[HR-485]"> Brood  </option>
                                                                                                <option data-subtext="[HR-202]"> Cowtahs  </option>
                                                                                                <option data-subtext="[HR-991]"> Cowsmay  </option>
                                                                                                <option data-subtext="[HR-951]"> Cowaax  </option>
                                                                                                <option data-subtext="[HR-561]"> Mooday  </option>
                                                                                                <option data-subtext="[HR-811]"> Herdy  </option>
                                                                                            </select>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Select Cows</label>

                                                                                        <div class="input-icon">
                                                                                            <select class="form-control selectpicker show-tick show-menu-arrow " data-size="5" data-width="100%" title="Other Cows" data-style="btn-select" data-live-search="true" multiple data-selected-text-format="count > 3">
                                                                                                <option>  CW-588   </option>
                                                                                                <option>  CW-471   </option>
                                                                                                <option>  CW-855   </option>
                                                                                                <option>  CW-103   </option>
                                                                                                <option>  CW-230   </option>
                                                                                                <option>  CW-455   </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Assign Staff </label>
                                                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Member " data-style="btn-select" data-live-search="true">
                                                                                            <option data-content="<img src='images/user-img1.jpg' width='20' /> Danish Kumar "></option>
                                                                                            <option data-content="<img src='images/user-img2.jpg' width='20' /> Michel Sam "></option>
                                                                                            <option data-content="<img src='images/user-img3.jpg' width='20' /> Greg White "></option>
                                                                                            <option data-content="<img src='images/user-img4.jpg' width='20' /> Sunny Luke"></option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Type</label>
                                                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Activity Type" data-style="btn-select" data-live-search="false">
                                                                                            <option>Feeding</option>
                                                                                            <option>Milking</option>
                                                                                            <option>Breeding</option>
                                                                                            <option selected>Inspection</option>

                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Routine Type</label>
                                                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Routine Type" data-style="btn-select" data-live-search="false">
                                                                                            <option>Daily </option>
                                                                                            <option>Weekly</option>

                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Priority</label>
                                                                                        <select class="form-control selectpicker " data-width="100%" data-size="5" title="Select Priority" data-style="btn-select" data-live-search="false">

                                                                                            <option data-content="<span class='label label-danger'> High </span> "></option>
                                                                                            <option data-content="<span class='label label-info'>Normal </span>"></option>
                                                                                            <option data-content="<span class='label label-success'>Low </span>"></option>


                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Time Range</label>
                                                                                        <div class="input-daterange  ">
                                                                                            <div class="input-group ">
                                                                                                <span class="input-group-addon  hidden-xs">
                                                                                                    <i class="icon  ion-android-alarm-clock"></i>
                                                                                                </span>
                                                                                                <input type="time" class="form-control " value="00:00" />
                                                                                            </div>
                                                                                            <div class="input-group ">
                                                                                                <span class="input-group-addon hidden-xs">to</span>
                                                                                                <input type="time" class="form-control " value="00:00" />

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Date Range</label>
                                                                                        <div class="input-daterange   ">
                                                                                            <div class="input-group ">
                                                                                                <span class="input-group-addon hidden-xs">
                                                                                                    <i class="icon wb-calendar"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control date" value="10/24/17" />
                                                                                            </div>
                                                                                            <div class="input-group ">
                                                                                                <span class="input-group-addon hidden-xs">to</span>
                                                                                                <input type="text" class="form-control date" value="10/25/17" />

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">

                                                                                    <div class="form-group ">
                                                                                        <label class="control-label">Additional Notes</label>
                                                                                        <textarea class="form-control" rows="3" placeholder="..."></textarea>
                                                                                    </div>
                                                                                </div>


                                                                                <!--<div class="col-sm-4">
                <div class="checkbox-custom checkbox-success ">
                    <input type="checkbox" id="333">
                    <label for="333">Volume</label>
                </div>
            </div>-->





                                                                            </div>




                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                        <div class="collapse " id="row1">
                                                            <div class="margin-10 clearfix row no-space ">
                                                                <div class="col-lg-3   text-break">
                                                                    <div class="padding-5 bg-cyan-200 white">
                                                                        <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                            <tr>
                                                                                <th>Cow ID</th>
                                                                                <td class="text-left">CW-225</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Id</th>
                                                                                <td class="text-left">HR-252</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Name</th>
                                                                                <td class="text-left">Cowbays</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-lg-offset-1 text-break">
                                                                    <div class="margin-bottom-5"><b> Instructions</b></div>
                                                                    <div class="small">
                                                                        <div>
                                                                            Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                                            .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="col-lg-3  col-lg-offset-1  text-break">
                                                                    <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Danish Kumar </span></b></div>
                                                                    <p class="small">
                                                                        Lorem Ipsum is simsimsus simsimsm is sustry simsum is sus.
                                                                    </p>
                                                                </div>-->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-------->

                                                <tr>
                                                    <td><a href="">AC-255</a></td>
                                                    <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24" /></span> Danish Kumar</td>
                                                    <td class="text-left"> Breeding </td>
                                                    <td class="text-left">08:00am </td>
                                                    <td class="text-left">10:00pm </td>
                                                    <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                                                    <td class="text-left">07 Oct -  7 Oct  </td>
                                                    <td class="text-left"> Weekly </td>
                                                    <td class="text-right">
                                                        <span data-toggle="collapse" data-target="#row2" class="accordion-toggle">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                        </span>
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                        <div class="collapse " id="row2">
                                                            <div class="margin-10 clearfix row no-space ">
                                                                <div class="col-lg-3   text-break">
                                                                    <div class="padding-5 bg-cyan-200 white">
                                                                        <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                            <tr>
                                                                                <th>Cow ID</th>
                                                                                <td class="text-left">CW-125</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Id</th>
                                                                                <td class="text-left">HR-258</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Name</th>
                                                                                <td class="text-left">Cowbays</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-lg-offset-1 text-break">
                                                                    <div class="margin-bottom-5"><b> Instructions</b></div>
                                                                    <div class="small">
                                                                        <div>
                                                                            Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                                            .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3  col-lg-offset-1  text-break">
                                                                    <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Mickel Greg </span></b></div>
                                                                    <p class="small">
                                                                        No Comments
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-------->

                                                <tr>
                                                    <td><a href="">AC-105</a></td>
                                                    <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Mickel Greg</td>
                                                    <td class="text-left"> Breeding </td>
                                                    <td class="text-left">08:00am </td>
                                                    <td class="text-left">10:00pm </td>
                                                    <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                                                    <td class="text-left">08 Oct -  9 Oct  </td>
                                                    <td class="text-left"> Daily </td>
                                                    <td class="text-right">
                                                        <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                        </span>
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9" class="bg-cyan-100 padding-0  ">
                                                        <div class="collapse " id="row3">
                                                            <div class="margin-10 clearfix row no-space ">
                                                                <div class="col-lg-3   text-break">
                                                                    <div class="padding-5 bg-cyan-200 white">
                                                                        <table class="table  table-condensed  no-border  margin-bottom-0">
                                                                            <tr>
                                                                                <th>Cow ID</th>
                                                                                <td class="text-left">CW-105</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Id</th>
                                                                                <td class="text-left">HR-352</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Herd Name</th>
                                                                                <td class="text-left">Cowbays</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-lg-offset-1 text-break">
                                                                    <div class="margin-bottom-5"><b> Instructions</b></div>
                                                                    <div class="small">
                                                                        <div>
                                                                            Lorem Ipsum is simsm isis sustry.  Loremis sustry
                                                                            .  Loremis susry.  Loremis sustry.  Loremis sustry.  Lorem sustry.  Lorem Ipsu
                                                                            m is simsimsum is sustrymis sustry.sum is sustry.strymis sustry.sum is sustry.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3  col-lg-offset-1  text-break">
                                                                    <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Dammy Sam </span></b></div>
                                                                    <p class="small">
                                                                        Lorem Ipsum is simsimsus simsimsm is sustry simsum is sus.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td><a href="">AC-855</a></td>
                                                    <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Sunny Sam</td>
                                                    <td class="text-left"> Feeding </td>
                                                    <td class="text-left">07:00pm </td>
                                                    <td class="text-left">08:00pm </td>
                                                    <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                    <td class="text-left">06 Oct -  7 Oct  </td>
                                                    <td class="text-left"> Daily </td>
                                                    <td class="text-right">
                                                        <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                        </span>
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="">AC-525</a></td>
                                                    <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Greg White</td>
                                                    <td class="text-left"> Feeding </td>
                                                    <td class="text-left">07:00pm </td>
                                                    <td class="text-left">08:00pm </td>
                                                    <td class="text-left">  <span class="label label-success">On Time </span> </td>
                                                    <td class="text-left">06 Oct -  7 Oct  </td>
                                                    <td class="text-left"> Daily </td>
                                                    <td class="text-right">
                                                        <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                                            <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                                        </span>
                                                        <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-target="#editpop1" data-toggle="modal" data-original-title="Edit"> <i class="icon ion-edit"></i>  </button>

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








 

    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
