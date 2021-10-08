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


  <?php include_once('_header_staff.php'); ?>
  <?php include_once('_leftmenu.php'); ?>


  <div class="page ">
    <div class="breadcrumb-box">
      <ol class="breadcrumb breadcrumb-arrow ">
        <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
        <li><a href="javascript:void(0)">Staff</a></li>
        <!--<li class="active">HR-202</li>-->
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
          <div class="row  ">
            <div class="col-lg-7">
              <div class="no-space row  margin-bottom-0 ">

                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-green-800 white shadow height-90  clearfix">
                      <div class="pull-left white">
                        <i> <img src="images/icon-zones.png" alt="img" height="30"> </i>
                      </div>
                      <div class="counter counter-md counter text-right pull-right">
                        <div class="counter-number-group white">
                          <span class="counter-number">85%</span>
                        </div>
                        <div class="counter-label text-capitalize font-size-12">Today Attendance</div>




                      </div>
                    </div>
                  </div>


                </div>
                <div class="col-sm-2">
                  <div class="counter counter-lg white bg-green-700 vertical-align height-90  shadow">
                    <div class="vertical-align-middle">
                      <div>Avialable</div>
                      <span class="counter-number font-size-20">25</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="counter counter-lg white bg-green-600 vertical-align height-90  shadow">
                    <div class="vertical-align-middle">
                      <div>
                        Scheduled
                      </div>
                      <span class="counter-number font-size-20">30</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="counter counter-lg white bg-green-500 vertical-align height-90 shadow ">
                    <div class="vertical-align-middle">
                      <div>On Duty</div>
                      <span class="counter-number font-size-20">100</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-5">
              <div class="row  ">


                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-red-800 white shadow height-90  clearfix">
                      <div class="pull-left white absolute">
                        <i> <img src="images/icon_caretaker5.png" alt="img" height="36"> </i>
                      </div>
                      <div class="counter counter-md counter text-right pull-right">
                        <div class="counter-number-group white">
                          <span class="counter-number">11</span>
                        </div>
                        <div class="counter-label text-capitalize font-size-12">Caretakers</div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-content padding-10 padding-right-15 padding-left-15  bg-blue-700 white shadow height-90  clearfix">
                      <div class="pull-left white absolute">
                        <i> <img src="images/icon_veterinarian.png" alt="img" height="36"> </i>
                      </div>
                      <div class="counter counter-md counter text-right pull-right">
                        <div class="counter-number-group white">
                          <span class="counter-number">07</span>
                        </div>
                        <div class="counter-label text-capitalize font-size-12">Veterinarian</div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>



          </div>

          <div class="row no-space">
            <div class="col-md-4">
              <div class="widget">
                <div class="widget-content padding-10 padding-right-15 padding-left-15   bg-orange-700 white shadow height-70  clearfix">
                  <div class="pull-left white">
                    <i> <img src="images/icon-employees.png" alt="img" height="30"> </i>
                  </div>
                  <div class="counter  counter text-right pull-right">
                    <div class="counter-number-group white">
                      <b class="font-size-20">95%</b>
                    </div>
                    <div class="counter-label text-capitalize font-size-12">Activity Completion Rate </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-70 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">
                        Completed
                      </span>
                    </div>
                    <b class="font-size-16">
                      200
                    </b>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-70 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">
                        Pending
                      </span>
                    </div>
                    <b class="font-size-16">
                      30
                    </b>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-70 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">
                        Inprogress
                      </span>
                    </div>
                    <b class="font-size-16">
                      110
                    </b>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="widget shadow">
                <div class="widget-content padding-top-0 pa bg-orange-600 vertical-align height-70 white  text-center relative">
                  <div class="vertical-align-middle">
                    <div class="counter-label margin-bottom-0 clearfix">
                      <span class="font-size-14 ">
                        Failed
                      </span>
                    </div>
                    <b class="font-size-16">
                      30
                    </b>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="panel panel-default shadow">
            <div class="panel-heading  white">
              <div class="panel-actions ">

                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
              </div>
              <h3 class="panel-title "> <b>Staff Listing</b></h3>
            </div>
            <div class="panel-body ">


              <div class="page-content-actions padding-0">
                <div class="pull-right filter">
                  <button class="btn btn-outline btn-default " data-toggle="dropdown" type="button">View All </button>

                  <!--<div class="dropdown">
                      <button class="btn btn-outline btn-default  dropdown-toggle" data-toggle="dropdown" type="button"><i class="icon ion-funnel"></i> Filter </button>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                          <li><a href="javascript:void(0)">All</a></li>
                          <li><a href="javascript:void(0)">Staff</a></li>
                          <li><a href="javascript:void(0)">Available</a></li>
                      </ul>
                  </div>-->
                </div>
                <div class="actions-main ">

                  <div class="btn-group">
                    <div class="dropdown">
                      <form class="page-search-form margin-bottom-15 " role="search">
                        <div class="input-search ">
                          <i class="input-search-icon wb-search"></i>
                          <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Users">
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
              </div>





              <div class="panel-group panel-group-continuous vscroll" id="AccordionContinuous" style="height:350px;">


                <div class="panel bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#staff2">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img2.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Dammy Sam
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Vetenarian</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-default  margin-right-40"> Not Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-collapse collapse " id="staff2">
                    <div class="panel-body bg-white padding-15">

                      <div class="row   ">

                        <div class="col-lg-7">
                          <div class="row no-space">
                            <div class="col-sm-4  ">
                              <div class="text-center margin-top-0 margin-bottom-5 font-size-12 ">Completed</div>
                              <div class="c100 p20  red small">
                                <span class="">101</span>
                                <div class="slice">
                                  <div class="bar"></div>
                                  <div class="fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 ">
                              <div class="text-center margin-top-0 margin-bottom-5 font-size-12">Scheduled</div>
                              <div class="c100 p50  green small">
                                <span class="">40</span>
                                <div class="slice ">
                                  <div class="bar"></div>
                                  <div class="fill"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4 ">
                              <div class="text-center margin-top-0 margin-bottom-5 font-size-12 ">Pending</div>                                                            <div class="c100 p75  orange small">
                                <span class="">120</span>
                                <div class="slice">
                                  <div class="bar"></div>
                                  <div class="fill"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-5  ">
                          <div class="text-center">
                            <div class="font-size-20  margin-top-10 margin-bottom-15"><i class="icon ion-android-phone-portrait margin-right-10"></i> (004) 588 669</div>
                            <div class="font-size-16">
                              <a href="staff-member.php" class="btn btn-success btn-sm ">
                                View Details
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel  bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#staff3">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img3.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Mickel Greg
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Caretaker</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-warning  margin-right-40"> Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="panel  bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#eee">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img2.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Dammy Sam
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Vetenarian</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-default  margin-right-40"> Not Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="panel  bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#rrr">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img3.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Mickel Greg
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Caretaker</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-warning  margin-right-40"> Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="panel  bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#rrr">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img3.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Mickel Greg
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Caretaker</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-warning  margin-right-40"> Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="panel  bg-green-100">
                  <div class="panel-heading margin-0" id="">
                    <div class="panel-title " data-parent="#AccordionContinuous" contenteditable="" data-toggle="collapse" href="#rrr">
                      <div class="media">
                        <div class="media-left">
                          <div class="">
                            <img src="images/user-img3.jpg" alt="..." width="40" class="img-rounded img-bordered img-bordered-warning">
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="margin-bottom-0 font-size-16 font-weight-600">
                                Mickel Greg
                              </div>
                              <div class="small">
                                Id: ST-855
                              </div>
                            </div>
                            <div class="col-lg-4 ">Caretaker</div>

                          </div>
                        </div>
                        <div class="media-right margin-top-0">
                          <!--<span class="label label-warning  margin-right-40"> Available   </span>-->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>



            </div>
          </div>







        </div>



        <div class="col-lg-4">
          <div class="row no-space1  margin-bottom-30">
            <div class="col-md-6">
              <div class="widget  margin-bottom-0  shadow bg-blue-800 text-center  white" style="height:190px;">
                <div class="widget-content">
                  <div class="padding-15 ">

                    <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase"> Best Employee </b> <br>  </div>
                    <div class="text-center">
                      <div class="margin-bottom-10 margin-top-0 ">
                        <i> <img src="images/user-img2.jpg" alt="img img-circle" style="height:65px; border-radius:50%;" class=""> </i>

                      </div>
                    </div>
                    <div class="font-size-14">Dammy Sam</div>
                    <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase"> Rank: 1 </b> </div>


                  </div>
                </div>
              </div>


            </div>

            <div class="col-md-6">


              <div class="widget  margin-bottom-0  shadow bg-red-800 text-center  white" style="height:190px;">
                <div class="widget-content">
                  <div class="padding-15 ">

                    <div class="font-size-14 margin-bottom-10"> <b class="text-uppercase">Inefficient Employee </b> <br>  </div>
                    <div class="text-center">
                      <div class="margin-bottom-10 margin-top-0 ">
                        <i> <img src="images/user-img1.jpg" alt="img img-circle" style="height:65px; border-radius:50%;" class=""> </i>

                      </div>
                    </div>
                    <div class="font-size-14"> Mickel Greg</div>
                    <div class="font-size-14 margin-bottom-5"> <b class="text-uppercase"> Rank: 12 </b> </div>


                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="panel panel-default shadow    ">
            <div class="panel-heading bg-orange-8001  ">
              <div class="panel-actions ">
                <a class="panel-action icon " href="activities-all.php" data-toggle="tooltip" data-original-title="View All"> View All</a>

                <a class="panel-action icon ion-loop white1" data-toggle="tooltip" data-original-title="Refresh"></a>

              </div>
              <h3 class="panel-title white1"> <b>Recent Activities </b></h3>
            </div>
            <div class="panel-body">
              <div class="">
                <div class="bg-white vscroll padding-10 " style="height:400px;">
                  <div class="">
                    <div class="timeline-item">
                      <div class="col-xs-4 icon">
                        <i class="ion-clock  bg-blue-600 white"></i>
                        <div class="font-size-12 margin-bottom-5 ">07:30am / Today </div>

                      </div>
                      <div class="col-xs-8 content no-top-border">
                        <div class="margin-bottom-10">
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-300: Milking </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-211: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-221: Milking </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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
                          <span class="label label-outline label-default margin-right-5" title="Header"> CW-101: Breeding </span>
                          <span class="label label-outline label-default margin-right-5 pull-right"> By: John </span>
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

          <div class="panel panel-default nav-tabs-horizontal shadow">
            <div class="panel-heading font-weight-600">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class=""><a data-toggle="tab" href="#MilkYieldStatistics" role="tab">Task Completion Rate</a></li>
                <!--<li class=""><a data-toggle="tab" href="#FeedStatistics" role="tab">Violations</a></li>-->
              </ul>
              <div class="panel-actions ">
                <select class="">
                  <option>This Week</option>
                  <option>This Week</option>
                </select>
                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>



              </div>
            </div>

            <div class="panel-body ">
              <div class="tab-content">
                <div class="tab-pane active" id="MilkYieldStatistics" role="tabpanel">
                  <div class="chartbox">
                    <div id="chart-alerts1"></div>
                    <script>
                      $(document).ready(function ($) {
                        (function () {
                          var simple_line_chart = c3.generate({
                            bindto: '#chart-alerts1',
                            size: {
                              height: 250,
                            },
                            legend: {
                              show: true,
                              position: 'top',
                            },
                            data: {
                              columns: [
                        ['HR-120', 5, 10, 26, 40, 25, 30, 31],
                        ['HR-112', 13, 28, 10, 36, 23, 21, 13],
                        ['HR-311', 26, 19, 35, 26, 29, 13, 29],
                        ['HR-401', 31, 30, 15, 40, 10, 35, 41],
                        ['HR-115', 31, 4, 40, 10, 15, 10, 19],

                              ],
                              type: 'bar',
                            },
                            color: {
                              pattern: [ '#f7902f', '#2a9e91', '#d83a46' ,'#1084b2', '#2bac48']
                            },
                            axis: {
                              rotated: false,
                              x: {
                                label: {
                                  text: '05 Oct - 11 Oct ',
                                  position: 'outer-center'
                                },
                                type: 'category',
                                categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S']
                              },
                              y: {
                                label: {
                                  text: 'No. of Hours ',
                                  position: 'outer-middle'
                                },
                              },
                            },
                            bar: {
                              width: {
                                ratio: 0.5
                              }
                            }
                          });
                        })();
                      });
                    </script>
                  </div>
                </div>
                <div class="tab-pane" id="FeedStatistics" role="tabpanel">

                  <div class="vscroll padding-right-10" style="height:240px;">
                    <table class="table  nowrap margin-bottom-0" id="datatable11">
                      <tbody>

                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                          <td width="80">
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-warning "> Late Coming  </span> </div>
                            </div>
                          </td>

                          <td>
                            <a href="">ID-255</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>

                        </tr>
                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-success ">Zone Switch   </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-985</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>

                        </tr>
                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-info "> Out of Zone   </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-265</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

                        </tr>
                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-info "> Out of Zone   </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-265</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

                        </tr>
                        <tr class="alert alert-alt alert-info alert-dismissible bg-white">
                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-info "> Out of Zone  </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-165</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">03:30pm</span> / <span class="small">Today</span> </td>

                        </tr>

                        <tr class="alert alert-alt alert-warning alert-dismissible bg-white">

                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-warning "> Late Coming  </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-255</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">08:10pm</span> / <span class="small">Today</span> </td>

                        </tr>
                        <tr class="alert alert-alt alert-success alert-dismissible bg-white">
                          <td>
                            <div class="media">
                              <div class="media-body margin-0"><span class="label label-success ">Zone Switch   </span> </div>
                            </div>
                          </td>
                          <td>
                            <a href="">ID-985</a>
                          </td>
                          <td>
                            <a href="">S101 - Z2</a>
                          </td>

                          <td class="text-right"> <span class="small">11:40pm</span> / <span class="small">Today</span> </td>

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
