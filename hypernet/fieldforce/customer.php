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

<body class="dashboard ">
    <?php include_once('_header.php'); ?>
    <?php include_once('_leftmenu.php'); ?>



    <div class="page">
        <!-- <div class="breadcrumb-box">
            <ol class="breadcrumb breadcrumb-arrow ">
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a>  </li>
                <li><a href="javascript:void(0)">Page</a></li>
            </ol>
        </div> -->


        <div class="page-header page-header-bordered shadow">
            <h1 class="page-title">MRL/CECC/11
            </h1>

            <div class="page-header-actions">


                <a href=" " onclick="window.history.go(-1); return false;" class="btn btn-sm   btn-default btn-round">
                    Back
                </a>
            </div>
        </div>
        <div class="page-content  container-fluid">


            <div class="media margin-bottom-30 bg-white padding-30 margin-top-0  card shadow light">
                <div class="media-left">
                    <img src="images/school-logo-icon.jpg" alt="img" style="width: 200px;" class=" img-bordered ">
                </div>
                <div class="media-body">
                    <h3 class="font-weight-600 margin-top-0"> GLOBAL EDUCATION SYSTEMS
                        <div class="pull-right">
                            <a href="../contract.pdf" target="_blank" class="btn btn-sm   bg-success btn-round">
                                Contract Document
                            </a></div>

                    </h3>

                    <div class="font-size-14">Active</div>

                    <hr />


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="table-responsive1">
                                <table class="table  table-condensed1 no-border  table-striped  margin-bottom-0">
                                    <tbody>
                                        <tr>
                                            <th> <b> CONTRACT START </b> </th>
                                            <td class="text-left text-break"> 18-02-18 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> CONTRACT END </b> </th>
                                            <td class="text-left">18-06-19 </td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b> CONTRACT EXPIRY (DAYS) </b> </th>
                                            <td class="text-left"> 121 </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="table-responsive1">
                                <table class="table  table-condensed1 no-border  table-striped  margin-bottom-0">
                                    <tbody>

                                        <tr>
                                            <th width=""> <b> FLEETS </b> </th>
                                            <td class="text-left">7</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>ROUTES </b> </th>
                                            <td class="text-left">4</td>
                                        </tr>
                                        <tr>
                                            <th width=""> <b>CHARGES </b> </th>
                                            <td class="text-left">$775.00</td>
                                        </tr>

                                        <tr>
                                            <th width=""> <b>SHIFT </b> </th>
                                            <td class="text-left">Morning <br /> Evening</td>
                                        </tr>

                                        <tr>
                                            <th width=""> <b>Branches </b> </th>
                                            <td class="text-left">2</td>
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>