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
                <li><a href="javascript:void(0)">Activities</a></li>
                <!--<li class="active">HR-202</li>-->
            </ol>
        </div>
        <!--<div class="skewed-bg1">
            <div class="widget-header cover overlay ">
                <img src="images/main-bg.jpg" />
            </div>
        </div>-->

        <div class="page-header">

            <h1 class="page-title"> All Activities </h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm   btn-success">
                    Back
                </button>

            </div>
        </div>
        <div class="page-content  container-fluid">
        <div class="panel panel-default  shadow">
              <div class="panel-heading">
                <h3 class="panel-title font-weight-600">List</h3>
                <div class="panel-actions">
                  <!--<a class="panel-action icon " data-toggle="tooltip" data-original-title="View All"> View All</a>-->
                  <a class="panel-action icon ion-loop" data-toggle="tooltip" data-original-title="Refresh"></a>
                </div>
              </div>


              <div class="panel-body  ">
              <div class="table-responsive bg-white  ">
                <table class="table table-condensed  margin-bottom-0   " id="dt-cowlist1x">
                    <thead>
                        <tr class="">
                            <th class="">Id</th>
                            <th class="text-left">Staff Assigned</th>
                            <th class="text-left">Activity Type </th>
                            <th class="text-left">Performed Time</th>
                            <th class="text-left">Scheduled Time</th>
                            <th class="text-left">Status</th>
                            <th class="text-left">Performed</th>
                            <th class="text-left">Date Range</th>
                            <th class="text-left">Routine Type </th>
                            <th class="text-right"> Description</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-------->

                        <tr>
                            <td><a href="">AC-255</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img2.jpg" width="24" /></span> Danish Kumar</td>
                            <td class="text-left"> Breeding </td>
                            <td class="text-left">08:00am </td>
                            <td class="text-left">10:00pm </td>
                            <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                            <td class="text-left"> Grouped </td>
                            <td class="text-left">07 Oct -  7 Oct  </td>
                            <td class="text-left"> Weekly </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#row2" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10" class="bg-cyan-100 padding-0  ">
                                <div class="collapse in " id="row2">
                                    <div class="margin-10 clearfix row no-space ">
                                        <div class="col-lg-3  ">
                                            <div class="padding-5 bg-cyan-200 white table-responsive">
                                                <table class="table  table-condensed  no-border  margin-bottom-0">
                                                    <tr>
                                                        <th width="80"> <b> Herd Id </b>  </th>
                                                        <td class="text-left">HR-252</td>
                                                    </tr>
                                                    <tr>
                                                        <th> <b> Cows </b>  </th>
                                                        <td class="text-left text-break">
                                                            <div class="inline-block"> CW-211 </div> ,
                                                            <div class="inline-block"> CW-09 </div>  ,
                                                            <div class="inline-block"> CW-288 </div> ,
                                                            <div class="inline-block"> CW-311 </div> ,
                                                            <div class="inline-block"> CW-091 </div>
                                                        </td>
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
                        <tr>
                            <td><a href="">AC-855</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Dammy Sam</td>
                            <td class="text-left"> Milking </td>
                            <td class="text-left">11:00pm </td>
                            <td class="text-left">11:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#row1" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="10" class="bg-cyan-100 padding-0  ">
                                <div class="collapse " id="row1">
                                    <div class="margin-10 clearfix row no-space ">
                                        <div class="col-lg-3  ">
                                            <div class="padding-5 bg-cyan-200 white table-responsive">
                                                <table class="table  table-condensed  no-border  margin-bottom-0">
                                                    <tr>
                                                        <th width="80"> <b> Herd Id </b>  </th>
                                                        <td class="text-left">HR-712</td>
                                                    </tr>
                                                    <tr>
                                                        <th> <b> Cows </b>  </th>
                                                        <td class="text-left text-break">
                                                            <div class="inline-block"> CW-211 </div>

                                                        </td>
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
                                            <div class="margin-bottom-5"><b> Comments by : <span class="blue-600"> Danish Kumar </span></b></div>
                                            <p class="small">
                                                Lorem Ipsum is simsimsus simsimsm is sustry simsum is sus.
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
                            <td class="text-left"> Individual </td>
                            <td class="text-left">08 Oct -  9 Oct  </td>
                            <td class="text-left"> Once </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>




                        <tr>
                            <td><a href="">AC-855</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Sunny Sam</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Grouped </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="">AC-525</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Greg White</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="">AC-105</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Mickel Greg</td>
                            <td class="text-left"> Breeding </td>
                            <td class="text-left">08:00am </td>
                            <td class="text-left">10:00pm </td>
                            <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">08 Oct -  9 Oct  </td>
                            <td class="text-left"> Once </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>




                        <tr>
                            <td><a href="">AC-855</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Sunny Sam</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Grouped </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="">AC-525</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Greg White</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="">AC-105</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img3.jpg" width="24" /></span> Mickel Greg</td>
                            <td class="text-left"> Breeding </td>
                            <td class="text-left">08:00am </td>
                            <td class="text-left">10:00pm </td>
                            <td class="text-left">  <span class="label label-danger">Delay </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">08 Oct -  9 Oct  </td>
                            <td class="text-left"> Once </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#row3" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>




                        <tr>
                            <td><a href="">AC-855</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img4.jpg" width="24" /></span> Sunny Sam</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Grouped </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="">AC-525</a></td>
                            <td class="text-left"><span class="pull-left margin-right-10"> <img src="images/user-img1.jpg" width="24" /></span> Greg White</td>
                            <td class="text-left"> Feeding </td>
                            <td class="text-left">07:00pm </td>
                            <td class="text-left">08:00pm </td>
                            <td class="text-left">  <span class="label label-success">On Time </span> </td>
                            <td class="text-left"> Individual </td>
                            <td class="text-left">06 Oct -  7 Oct  </td>
                            <td class="text-left"> Daily </td>
                            <td class="text-right">
                                <span data-toggle="collapse" data-target="#xxx" class="accordion-toggle">
                                    <button type="button" class="btn btn-icon btn-outline btn-round btn-default btn-xs" data-toggle="tooltip" data-original-title="More Info"> <i class="icon ion-plus"></i>  </button>
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








    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>


















</body>
</html>
