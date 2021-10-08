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
      <div class="page-content  container-fluid">

        <div class="row no-space1  ">



          <div class="col-lg-4">

            <div class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30 hover" onclick="window.location.href='warehouses.php'">
              <div class="font-size-20 margin-bottom-30  text-uppercase ">
                Warehouses
              </div>
              <div class=" margin-bottom-5 ">
                <i> <img src="images/dashboard_warehouse.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                600
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    Active
                    <div class="font-size-16">500</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-teal-600   font-size-10 padding-5  ">
                    In Active
                    <div class="font-size-16">100</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">

            <div class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30 hover" onclick="window.location.href='fleets.php'">
              <div class="font-size-20 margin-bottom-30  text-uppercase ">
                On-Road Vehicles
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/icon-vehicles.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                400
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    Avilable
                    <div class="font-size-16">300</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-orange-600   font-size-10 padding-5  ">
                    On Route
                    <div class="font-size-16">100</div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="col-lg-4">

            <div class="padding-15 bg-red-800 text-center relative shadow card white margin-bottom-30 hover" onclick="window.location.href='stores.php'">
              <div class="font-size-20 margin-bottom-30  text-uppercase ">
                Retail Stores
              </div>
              <div class=" margin-bottom-5">
                <i> <img src="images/dashboard_warehouse.png" alt="img" height="40"> </i>
              </div>
              <div class="font-size-18 font-weight-600 margin-bottom-10">
                400
              </div>
              <div class="row no-space">
                <div class="col-md-6">
                  <div class="  bg-red-600   font-size-10 padding-5  ">
                    Active
                    <div class="font-size-16">360</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="  bg-red-600   font-size-10 padding-5  ">
                    In Active
                    <div class="font-size-16">40</div>
                  </div>
                </div>
              </div>
            </div>
          </div>









        </div>



        <!-- 
        <div class="bg-white1 text-center" style="opacity: 0.3;"> <img src="images/home-img.png" class="img-reponsive" height="300" style="margin: auto;"> </div>


 -->










      </div>











    </div>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>





  </body>

</html>