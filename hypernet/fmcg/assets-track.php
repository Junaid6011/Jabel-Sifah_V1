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

        <div class="page-header padding-0 page-header-bordered shadow">
            <div class="widget widget-article type-flex margin-bottom-0">
                <div class="widget-header cover overlay">
                    <img class="cover-image height-160" src="images/header.jpg" alt="">
                    <div class="overlay-panel text-center vertical-align">
                        <div class="widget-metas vertical-align-middle blue-grey-800">
                            <div class="widget-title font-size-48 margin-bottom-0 blue-grey-800 white"
                                style="font-size:30px;">
                                Track Consignment
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="page-content  container-fluid">







            <div class="margin-bottom-30 margin-top30">

                <div class="text-center font-size-18 margin-bottom-30">
                    Enter Tracking Number
                </div>
                <div class="text-center" style="width:700px; margin:auto;">
                    <div class="input-group">

                        <div class="
                                input-group-btn search-panel ">
                            <button type=" button"
                                class="btn btn-info padding-left-20 padding-right-10 dropdown-toggle "
                                data-toggle="dropdown">
                                <span id="search_concept">Tracking Number</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href=""> Tracking Number</a></li>
                                <li><a href="">Name</a></li>

                            </ul>
                        </div>

                        <input type="text" id="query" class="form-control btn-round " style="height:36px;"
                            placeholder="Enter Tracking Number..." name="query" required="" value="478">
                        <span class="input-group-btn">
                            <button type="submit" onclick="window.location.href='"
                                class="btn btn-warning  padding-left-20 padding-right-20 " id=""><span
                                    class="glyphicon glyphicon-search"></span> Track</button>
                        </span>


                    </div>


                </div>




            </div>




            <div class="panel panel-dark margin-bottom-0 shadow card light" style="max-width: 10000px; margin: auto;">
                <div class="panel-heading margin-bottom-0">
                    <h3 class="panel-title ">Search Results For "<b>478</b>"</h3>
                </div>

                <div class="panel-body padding-15">

                    <div class=" " id="">



                        <div class="table-responsive ">
                            <table
                                class="table   margin-bottom-0 table-hover table-condensed table-bordered   margin-bottom-0">
                                <thead>
                                    <tr class="">
                                        <th class="text-left">ID </th>

                                        <th class="text-left">State</th>
                                        <th class="text-left">Generated Time</th>
                                        <th class="text-left">Generated Date</th>


                                        <th class="text-left">Net Weight</th>
                                        <th class="text-left">Pickup City</th>
                                        <th class="text-left">Drop-off </th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left"> <a href="">RA458</a> </td>

                                        <td class="text-left"> <span class="label label-info"> In Transit </span> </td>
                                        <td class="text-left"> 6:32:11 am </td>
                                        <td class="text-left">Feb 26,2018 </td>

                                        <td class="text-left"> 7.2 Kg</td>
                                        <td class="text-left"> Warehouse1</td>
                                        <td class="text-left">Warehouse2</td>




                                    </tr>



                                    <tr>
                                        <td class="text-left"> <a href="">RA4580</a> </td>

                                        <td class="text-left"> <span class="label label-danger"> Returned </span> </td>
                                        <td class="text-left"> 6:32:11 am </td>
                                        <td class="text-left">Feb 26,2018 </td>


                                        <td class="text-left"> 1.24 Kg</td>
                                        <td class="text-left"> Warehouse2</td>
                                        <td class="text-left">Warehouse4</td>



                                    </tr>








                                </tbody>
                            </table>
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