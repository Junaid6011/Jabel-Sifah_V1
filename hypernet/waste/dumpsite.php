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



        <div class="page-content  container-fluid">

            <div class="row ">
                <div class="col-md-4">
                    <div class="widget shadow card">
                        <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                            <div class="white">
                                <div class="margin-bottom-10   ">
                                    <div class=" ">
                                        Total Dumpsite
                                    </div>
                                </div>
                                <div class="">
                                    <div class=" margin-right-15 inline">
                                        <i> <img src="images/icon-job-total - Copy.png" alt="img" height="40"> </i>
                                    </div>
                                    <b class="font-size-24" style="position:relative; top:5px;">36</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-4">

                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-teal-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Active </div>

                                </div>
                            </div>
                            <b class="font-size-24">20</b>
                        </div>

                        <div
                            class="label white  bg-teal-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                            All
                        </div>
                    </div>


                </div>



                <div class="col-md-4">
                    <div class="widget shadow card">
                        <div class=" padding-10 pa bg-green-800  height-100 white  text-center relative ">
                            <div class="">
                                <div class="margin-bottom-0 ">

                                    <div class=" margin-bottom-5 ">Inactive </div>

                                </div>
                            </div>
                            <b class="font-size-24">16</b>

                            <div
                                class="label white  bg-green-700 font-size-10 margin-top-10 flat absolute  left right bottom">
                                All
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-default  padding-0  card shadow light" style="min-height: 200px;">
                        <div class="panel-heading font-weight-600 margin-bottom-0">
                            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                                <li class="active"><a data-toggle="tab" href="#Active">
                                        Active</a></li>
                                <li class=""><a data-toggle="tab" href="#Inactive">Inactive </a></li>
                                
                                
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="Active">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15 ">


                                        <div class="margin-bottom-20 p clearfix"
                                                            style="border-bottom: 1px solid #eee">
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <div class="inline-block    ">
                                                                    <div class="form-group  margin-bottom-0  ">
                                                                        <div class="input-daterange   ">
                                                                            <div class="input-group  input-group-sm">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon ion-calendar"></i>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>

                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Name </th>
                                                            <th class="text-left"> Type</th>
                                                            <th class="text-left">Location </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Sohar
                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Asolyah
                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Ras abuoud

                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Musandam</a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                            </div>





                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="Inactive">
                                    <div class="panel panel-default margin-bottom-0 ">
                                        <div class="panel-body padding-15  ">
                                        <div class="margin-bottom-20 p clearfix"
                                                            style="border-bottom: 1px solid #eee">
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <div class="inline-block    ">
                                                                    <div class="form-group  margin-bottom-0  ">
                                                                        <div class="input-daterange   ">
                                                                            <div class="input-group  input-group-sm">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon ion-calendar"></i>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/24/17">
                                                                            </div>
                                                                            <div class="input-group input-group-sm">
                                                                                <div class="input-group-addon">to</div>
                                                                                <input type="text"
                                                                                    class="form-control date"
                                                                                    value="10/25/17">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                         
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>
                                            <div class="table-responsive">
                                                <table
                                                    class="table  margin-bottom-0  table-condensed table-bordered text-wrap">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left"> Name </th>
                                                            <th class="text-left"> Type</th>
                                                            <th class="text-left">Location </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Musandam</a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">

                                                            <td> <a href="customer.php"> Ras abuoud

                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Asolyah
                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
                                                            </td>
                                                            

                                                        </tr>
                                                        <tr class="">


                                                            <td> <a href="customer.php"> Sohar
                                                                </a></td>
                                                            <td>Dumpsite</td>
                                                            <td>Mulburge
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





    <?php include_once('_maptrail.php'); ?>


    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>

















</body>

</html>