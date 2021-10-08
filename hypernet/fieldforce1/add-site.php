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

<body class="dashboard " style="background-image: url(images/bg-login.jpg);  background-size:100%; ">


  <?php include_once('_header.php'); ?>
  <?php include_once('_leftmenu.php'); ?>





    <div class="page">
        <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
                <li><a href="javascript:void(0)">Add Site</a></li>
            </ol>
        </div>



        <div class="page-content  container-fluid">
            <div class="margin-top-0 font-size-18">Please fill out the following form</div>
            <hr />
            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Site Name</label>
                        <input type="text" class="form-control" placeholder="..." />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Superviser</label>
                        <div class="input-icon">
                            <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select">
                                <option data-subtext=""> John Smith </option>
                                <option data-subtext=""> Mark Greg </option>

                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control" placeholder="..." />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Select Zones</label>
                        <div class="input-icon">
                            <select class="form-control selectpicker " data-width="100%" data-size="5" data-style="btn-select"
                                multiple>
                                <option data-subtext=""> Zone-1 </option>
                                <option data-subtext=""> Zone-2 </option>
                                <option data-subtext=""> Zone-3 </option>
                                <option data-subtext=""> Zone-4 </option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label">Shift Time</label>
                        <input type="text" class="form-control" placeholder="Hours" />
                    </div>
                </div>




                <div class="col-sm-12">

                    <div class="form-group ">
                        <label class="control-label">Description</label>
                        <textarea class="form-control" rows="3" placeholder="..."></textarea>
                    </div>
                </div>




            </div>


            <div class="row">

                <div class="col-sm-12">
                    <hr>
                    <div class="form-group1">
                        <button type="button" class="btn btn-dark  ">
                            Submit Details
                        </button>
                        <button type="button" class="btn btn-default   ">
                            Clear
                        </button>
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
