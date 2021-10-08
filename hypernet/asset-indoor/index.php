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


        <div class="page-header page-header-bordered shadow">
            <!-- <div class="row">
                <div class="col-lg-8">

                    <div class="media">
                        <div class="media-left">
                            <img src="images/excel-middle-east-logo.jpg" class="img-bordered" style="height:55px">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Excel Middle East</h3>
                            <div> <b>Code: E1071</b> | Contarct Expiray: 25 Mar 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-right">


                        <button type="button" class="btn btn-sm btn-info  ">
                            <span class="text">Details</span>

                        </button>
                    </div>
                </div>
            </div>


            <hr class="margin-bottom-10 margin-top-10" /> -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Location</label>
                        <select class="form-control selectpicker " id="filter-Location" data-width="100%"
                            title="Location" data-style="btn-select" data-live-search="true"
                            style="max-width:100px; min-width:inherit;">
                            <option value="all">All </option>
                            <option value="loc1">Blue Road, Malburg </option>
                            <option value="loc2" name="name">Hanna Road, East </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Warehouse</label>
                        <select class="form-control selectpicker " id="filter-Warehouse" data-width="100%"
                            title="Warehouse" data-style="btn-select" data-live-search="true"
                            style="max-width:100px; min-width:inherit;">
                            <option value="all"> All </option>
                            <option value="loc1">WH01 </option>
                            <option value="loc2"> WH02 </option>
                        </select>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="form-group margin-bottom-0">
                        <label class="control-label">Project</label>
                        <select class="form-control selectpicker " id="filter-Project" data-width="100%" title="Project"
                            data-style="btn-select" data-live-search="true" style="max-width:100px; min-width:inherit;">
                            <option value="all"> All </option>
                            <option value="loc1">PRO01 </option>
                            <option value="loc2"> PRO02 </option>
                        </select>
                    </div>
                </div>

            </div>

            <script>
                $('#filter-Location').change(function () {
                    var value = $(this).children("option:selected").val();
                    if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5000');
                        $(".med2").text('1600');
                        $(".med3").text('300');


                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');

                    }
                    else if (value == 'loc1') {
                        $(".inf1").text('1200');
                        $(".inf2").text('700');
                        $(".inf3").text('500');

                        $(".con1").text('3400');
                        $(".con2").text('1500');
                        $(".con3").text('531');

                        $(".med1").text('1240');
                        $(".med2").text('180');
                        $(".med3").text('20');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('1400');
                        $(".rel2").text('800');
                        $(".rel3").text('831');

                        $(".avi1").text('140');
                        $(".avi2").text('10');
                        $(".avi3").text('280');


                        $(".edu1").text('3390');
                        $(".edu2").text('3896');
                        $(".edu3").text('284');

                        $(".hum1").text('2500');
                        $(".hum2").text('1800');
                        $(".hum3").text('300');

                    }
                    else if (value == 'loc2') {
                        $(".inf1").text('1240');
                        $(".inf2").text('190');
                        $(".inf3").text('250');

                        $(".con1").text('3890');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('3600');
                        $(".med2").text('1400');
                        $(".med3").text('551');


                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                    }

                });



                $('#filter-Warehouse').change(function () {
                    var value = $(this).children("option:selected").val();
                    if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3190');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5000');
                        $(".med2").text('1600');
                        $(".med3").text('300');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');

                    }
                    else if (value == 'loc1') {
                        $(".inf1").text('1720');
                        $(".inf2").text('770');
                        $(".inf3").text('770');

                        $(".con1").text('3470');
                        $(".con2").text('1780');
                        $(".con3").text('891');

                        $(".med1").text('1240');
                        $(".med2").text('180');
                        $(".med3").text('220');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                    }
                    else if (value == 'loc2') {
                        $(".inf1").text('1290');
                        $(".inf2").text('180');
                        $(".inf3").text('201');

                        $(".con1").text('4390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('3800');
                        $(".med2").text('1250');
                        $(".med3").text('51');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                    }

                });

                $('#filter-Project').change(function () {
                    var value = $(this).children("option:selected").val();
                    if (value == 'all') {
                        $(".inf1").text('3123');
                        $(".inf2").text('2890');
                        $(".inf3").text('233');

                        $(".con1").text('3390');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('5700');
                        $(".med2").text('1600');
                        $(".med3").text('300');

                    }
                    else if (value == 'loc1') {
                        $(".inf1").text('1800');
                        $(".inf2").text('790');
                        $(".inf3").text('590');

                        $(".con1").text('3400');
                        $(".con2").text('1500');
                        $(".con3").text('531');

                        $(".med1").text('1340');
                        $(".med2").text('189');
                        $(".med3").text('20');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                    }
                    else if (value == 'loc2') {
                        $(".inf1").text('1240');
                        $(".inf2").text('180');
                        $(".inf3").text('20');

                        $(".con1").text('3890');
                        $(".con2").text('3096');
                        $(".con3").text('284');

                        $(".med1").text('2400');
                        $(".med2").text('1700');
                        $(".med3").text('581');

                        $(".mar1").text('1200');
                        $(".mar2").text('700');
                        $(".mar3").text('500');

                        $(".rel1").text('3400');
                        $(".rel2").text('1500');
                        $(".rel3").text('531');

                        $(".avi1").text('1240');
                        $(".avi2").text('180');
                        $(".avi3").text('20');


                        $(".edu1").text('3390');
                        $(".edu2").text('3096');
                        $(".edu3").text('284');

                        $(".hum1").text('5000');
                        $(".hum2").text('1600');
                        $(".hum3").text('300');
                    }

                });





            </script>



            <!-- <div class="page-header-actions">



                <button type="button" class="btn btn-sm btn-info  ">
                    <span class="text">View Details</span>

                </button>
            </div> -->
        </div>


        <div class="page-content  container-fluid">







            <div class="row no-space1  ">

            <div class="col-lg-3 ">
                    
                    <div onclick="window.location.href='assets-industry-medical.php'">

                        <div
                            class="padding-15 bg-teal-800 text-center relative shadow card white margin-bottom-30 hover">
                            <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                Medical/Health
                            </div>
                            <div class=" margin-bottom-5 ">
                                <i> <img src="images/asset-icon (8).png" alt="img" height="40"> </i>
                            </div>
                            <div class="font-size-18 font-weight-600 margin-bottom-10 med1">
                                5000
                            </div>
                            <div class="row no-space">
                                <div class="col-md-6">
                                    <div class="  bg-teal-600   font-size-10  padding-5  ">
                                        In Use
                                        <div class="med2">1600</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="  bg-teal-600   font-size-10  padding-5  ">
                                        Idle
                                        <div class="med3">300</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">

                    <div onclick="window.location.href='assets-industry-it.php'" id="box-Information">
                        <div
                            class="padding-15 bg-red-800 text-center relative shadow card white margin-bottom-30 hover">
                            <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                Information Technology
                            </div>
                            <div class=" margin-bottom-5 ">
                                <i> <img src="images/asset-icon (4).png" alt="img" height="40"> </i>
                            </div>
                            <div class="font-size-18 font-weight-600 margin-bottom-10 inf1">
                                3123
                            </div>
                            <div class="row no-space">
                                <div class="col-md-6">
                                    <div class="  bg-red-600   font-size-10 padding-5  ">
                                        In Use
                                        <div class="inf2">2890</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="  bg-red-600   font-size-10 padding-5  ">
                                        Idle
                                        <div class="inf3">233</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


               

                <div class="col-lg-3 ">
                    <div
                        class="padding-15 bg-indigo-800 text-center relative shadow card white margin-bottom-30 hover1">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Human Resources
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (6).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10 hum1">
                            3500
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-indigo-600   font-size-10 padding-5  ">
                                    In Use
                                    <div class="hum2">3250</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-indigo-600   font-size-10 padding-5  ">
                                    Idle
                                    <div class="hum3">250</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="padding-15 bg-green-800 text-center relative shadow card white margin-bottom-30 hover1">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                           Warehouse
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (2).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10 rel1">
                            1800
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    In Use
                                    <div class="rel2">1690</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-green-600   font-size-10 padding-5  ">
                                    Idle
                                    <div class="rel3">110</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 hidden">
                    <div class="padding-15 bg-blue-800 text-center relative shadow card white margin-bottom-30 hover1">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Marine
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (1).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10 mar1">
                            2890
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    In Use
                                    <div class="mar2">2600</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-blue-600   font-size-10 padding-5  ">
                                    Idle
                                    <div class="mar3">290</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden">
                    <!-- onclick="window.location.href='assets-industry-construction.php'" -->
                    <div onclick="window.location.href='assets-industry-construction.php'" id="box-Construction">
                        <div
                            class="padding-15 bg-orange-800 text-center relative shadow card white margin-bottom-30 hover">
                            <div class="font-size-14 margin-bottom-10  text-uppercase ">
                                Construction
                            </div>
                            <div class=" margin-bottom-5 ">
                                <i> <img src="images/asset-icon (7).png" alt="img" height="40"> </i>
                            </div>
                            <div class="font-size-18 font-weight-600 margin-bottom-10 con1" class="">
                                3390
                            </div>
                            <div class="row no-space">
                                <div class="col-md-6">
                                    <div class="  bg-orange-600   font-size-10 padding-5  ">
                                        In Use
                                        <div class="con2">3096</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="  bg-orange-600   font-size-10 padding-5  ">
                                        Idle
                                        <div class="con3">294</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              

                <div class="col-lg-3 hidden">
                    <div class="padding-15 bg-grey-800 text-center relative shadow card white margin-bottom-30 hover1">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Aviation
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (3).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10 avi1">
                            3210
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-grey-600   font-size-10 padding-5  ">
                                    In Use
                                    <div class="avi2">3000</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-grey-600   font-size-10 padding-5  ">
                                    Idle
                                    <div class="avi3">210</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 hidden">
                    <div class="padding-15 bg-cyan-800 text-center relative shadow card white margin-bottom-30 hover1">
                        <div class="font-size-14 margin-bottom-10  text-uppercase ">
                            Education
                        </div>
                        <div class=" margin-bottom-5 ">
                            <i> <img src="images/asset-icon (5).png" alt="img" height="40"> </i>
                        </div>
                        <div class="font-size-18 font-weight-600 margin-bottom-10 edu1">
                            2907
                        </div>
                        <div class="row no-space">
                            <div class="col-md-6">
                                <div class="  bg-cyan-600   font-size-10 padding-5  ">
                                    In Use
                                    <div class="edu2">2690</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="  bg-cyan-600   font-size-10 padding-5  ">
                                    Idle
                                    <div class="edu3">217</div>
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