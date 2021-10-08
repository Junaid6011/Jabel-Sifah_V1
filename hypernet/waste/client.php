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
            <div class="breadcrumb-box">
                <ol class="breadcrumb breadcrumb-arrow ">
                    <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a> </li>
                    <li><a href="javascript:void(0)">Clients</a></li>
                    <li>Client</li>

                </ol>
            </div>

            <div class="page-content  container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget  margin-bottom-30 ">
                            <div class="padding-15 bg-green-100 " style="height:auto">
                                <div class="text-center ">
                                    <div class="">

                                        <div class="margin-bottom-10 " style="padding: 10px;">
                                            <i> <img src="images/icon_waste_management.png" alt="img" style="height: 176px;" class=""> </i>
                                        </div>
                                        <div class="padding-0 bg-cyan-000 text-left  margin-bottom-0 ">
                                            <div class="font-size-20 text-center   ">Client Name</div>
                                            <div class="font-size-20  margin-bottom-15 text-center"><span class="badge badge-success">Active</span>
                                            </div>


                                            <div class="bg-green-100 padding-0">

                                                <div class="padding-10  bg-white  margin-bottom-0 ">
                                                    <div class="table-responsive vscroll" style="height:200px;">
                                                        <table class="table  table-condensed  no-border  margin-bottom-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th><b> Party Code</b></th>
                                                                    <td class="text-left">1432</td>
                                                                </tr>

                                                                <tr>
                                                                    <th><b> Email </b></th>
                                                                    <td class="text-left text-break">
                                                                        client@company.com
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><b> Phone </b></th>
                                                                    <td class="text-left text-break">
                                                                        0320-1676446
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><b> Address </b></th>
                                                                    <td class="text-left text-break">
                                                                        House# Dummy House, Street # Dummy Street,<br /> Lala Land, Dummy Country
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
                    <div class="col-lg-9 ">
                        <div class="row">


                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-blue-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5   clearfix">
                                                <span class="font-size-14 ">
                                                    Total Bins
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-teal-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5   clearfix">
                                                <span class="font-size-14 ">
                                                    Operational
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-orange-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5   clearfix">
                                                <span class="font-size-14 ">
                                                    Spare
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-green-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5 clearfix">
                                                <span class="font-size-14 ">
                                                    Stored
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-teal-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5 clearfix">
                                                <span class="font-size-14 ">
                                                    Leased
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                                <!--                  <span class="-related font-size-12">L</span>-->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="widget shadow">
                                    <div class="widget-content padding-10 bg-red-700 height-90 text-center relative">
                                        <div class="white">
                                            <div class="counter-label margin-bottom-5 clearfix">
                                                <span class="font-size-14 ">
                                                    Owned
                                                </span>
                                            </div>
                                            <div class="">
                                                <span class="counter-icon margin-right-5 ">
                                                    <i> <img src="images/asset-icon (1).png" alt="img" height="24"> </i>
                                                </span>
                                                <b class=" font-size-20">20</b>
                                                <!--                  <span class="-related font-size-12">L</span>-->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row no-space shadow card margin-bottom-30">

                            <div class="">
                                <div class="slikslider margin-bottom-0 bg-teal-500  " id="slikslider-types">
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-70 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="widget margin-0 ">
                                            <div class=" padding-10 bg-teal-500 height-60 text-center relative">
                                                <div class="white">
                                                    <div class="margin-bottom-0   ">
                                                        <div class="font-size-14 ">
                                                            Hook Loader
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <b class="font-size-18">200</b>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <script>
                                    $('#slikslider-types').slick({
                                        infinite: false,
                                        slidesToShow: 6,
                                        slidesToScroll: 1,
                                        arrows: true,
                                        dots: true,
                                        responsive: [
                                            {
                                                breakpoint: 1160,
                                                settings: {
                                                    slidesToShow: 3,
                                                }
                                            },
                                            {
                                                breakpoint: 1025,
                                                settings: {
                                                    slidesToShow: 3,
                                                }
                                            },
                                            {
                                                breakpoint: 769,
                                                settings: {
                                                    slidesToShow: 2,
                                                }
                                            },
                                            {
                                                breakpoint: 600,
                                                settings: {
                                                    slidesToShow: 2,
                                                }
                                            },
                                            {
                                                breakpoint: 480,
                                                settings: {
                                                    slidesToShow: 2,
                                                }
                                            }

                                        ]
                                    });
                                </script>
                            </div>




                        </div>


                        <div class="row no-space hidden">
                            <div class="col-lg-12">
                                <div class="row no-space  margin-bottom-30 text-center  bg-teal-700 shadow ">


                                    <!--            <ngx-slick-carousel class="carousel"-->
                                    <!--                                #slickModal="slick-carousel"-->
                                    <!--                                [config]="slideConfig">-->
                                    <!--              <div ngxSlickItem *ngFor="let slide of slides" class="slide">-->
                                    <!--                <img src="{{ slide.img }}" alt="" width="100%">-->
                                    <!--              </div>-->
                                    <!--            </ngx-slick-carousel>-->
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">1.1 cbm</div>
                                                <b class=" font-size-16">0</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">1.2 cbm</div>
                                                <b class=" font-size-16">8</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">5 cbm</div>
                                                <b class=" font-size-16">1</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">8 cbm</div>
                                                <b class=" font-size-16">28</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">10 cbm</div>
                                                <b class=" font-size-16"> 4</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">12 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 20 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">14 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 0 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">18 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 17 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">20 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 7 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">26 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 20 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">30 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 20 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class=" white vertical-align height-70 ">
                                            <div class="vertical-align-middle">
                                                <div class="font-size-12">40 cbm</div>
                                                <div class="">
                                                    <b class=" font-size-16"> 20 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class=" col-lg-8">
                                <div class="panel panel-default  card light ">
                                    <div class="panel-heading margin-bottom-0">
                                        <h3 class="panel-title font-weight-600 text-center1">Contracts
                                            Statistics</h3>
                                    </div>
                                    <div class="panel-body padding-30">
                                        <div class="row">


                                            <div class="col-md-6 ">
                                                <div class="padding-15 margin-bottom-30  bg-grey-100  card ">
                                                    <div class="media">
                                                        <div class="media-left padding-right-20">
                                                            <img src="images/icon_leftmenu_dashboard.png" height="24">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class=" font-size-18">120</div>
                                                            <div class="text-uppercase">Total Contracts</div>
                                                        </div>
                                                        <!-- <div class="media-right ">
                                                            <div class=" font-size-18 text-center bg-white  padding-5">
                                                                <div class="font-size-12 font-weight-600">
                                                                    This Month</div>
                                                                <div class="font-size-12">Available
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="padding-15 margin-bottom-30  bg-grey-100  card ">
                                                    <div class="media">
                                                        <div class="media-left padding-right-20">
                                                            <img src="images/icon_leftmenu_dashboard.png" height="24">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class=" font-size-18">120</div>
                                                            <div class="text-uppercase">New
                                                                Contracts</div>
                                                        </div>
                                                        <!-- <div class="media-right ">
                                                            <div class=" font-size-18 text-center bg-white  padding-5">
                                                                <div class="font-size-12 font-weight-600">
                                                                    20%</div>
                                                                <div class="font-size-12">Available
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="padding-15 margin-bottom-0  bg-grey-100  card ">
                                                    <div class="media">
                                                        <div class="media-left padding-right-20">
                                                            <img src="images/icon_leftmenu_dashboard.png" height="24">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class=" font-size-18">120</div>
                                                            <div class="text-uppercase">Renewed Contracts</div>
                                                        </div>
                                                        <!-- <div class="media-right ">
                                                            <div class=" font-size-18 text-center bg-white  padding-5">
                                                                <div class="font-size-12 font-weight-600">
                                                                    20%</div>
                                                                <div class="font-size-12">Available
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="padding-15 margin-bottom-0  bg-grey-100  card ">
                                                    <div class="media">
                                                        <div class="media-left padding-right-20">
                                                            <img src="images/icon_leftmenu_dashboard.png" height="24">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class=" font-size-18">120</div>
                                                            <div class="text-uppercase">Expired Contracts</div>
                                                        </div>
                                                        <!-- <div class="media-right ">
                                                            <div class=" font-size-18 text-center bg-white  padding-5">
                                                                <div class="font-size-12 font-weight-600">
                                                                    This Month</div>

                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget  white margin-bottom-30 shadow card">
                                    <div class="padding-15 bg-green-700 " style="height:295px;">
                                        <div class="text-center padding-top-0">
                                            <div class="">
                                                <div class=" font-size-18 margin-bottom-10">Invoice</div>
                                                <div class="dropdown margin-bottom-10 ">
                                                    <select type="button" class="btn bg-green-800 white btn-xs text-center " id="mrq-dd-violations">
                                                        <option>This Week</option>
                                                        <option>This Month</option>
                                                    </select>
                                                </div>

                                                <div class="font-size-12  ">Received </div>
                                                <div class="font-size-20  margin-bottom-20 font-weight-600" id="mrq-v1">
                                                    32050 AED </div>
                                                <i> <img src="images/asset-icon (2).png" alt="img" height="40"> </i>

                                                <div class="font-size-12  margin-top-20">Pending </div>
                                                <div class="font-size-14  margin-bottom-10" id="mrq-v2"> 32050 AED </div>
                                                <div class="font-size-10">
                                                    <span class="margin-right-5"><i class="ion-arrow-graph-up-right"></i></span>
                                                    <span class="" id="mrq-v3">17%</span>
                                                    <span class="" id="mrq-v4">more than last week</span>
                                                </div>
                                                <script>
                                                    $("#mrq-dd-violations").on('change', function () {
                                                        if (this.value.trim().toLowerCase().includes('week')) {
                                                            $("#mrq-v1").text('	    Marshal Goods ')
                                                            $("#mrq-v2").text('55 Fleets')
                                                            $("#mrq-v3").text('17%')
                                                            $("#mrq-v4").text('more than last week')
                                                        }
                                                        else {
                                                            $("#mrq-v1").text('	Slik Logistics ')
                                                            $("#mrq-v2").text('150 Fleets')
                                                            $("#mrq-v3").text('13%')
                                                            $("#mrq-v4").text('more than last month')
                                                        }
                                                    })
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-8">
                        <div class="panel panel-default nav-tabs-horizontal padding-0 margin-bottom-0">
                            <div class="panel-heading font-weight-600">
                                <div class="panel-title">
                                    Bins/Skips
                                </div>
                            </div>
                            <div class="panel-body padding-0">
                                <table class="table  margin-bottom-0 nowrap" id="">
                                    <thead>
                                        <tr class="">
                                            <th class="text-left">Name</th>
                                            <th class="text-left">Contract</th>
                                            <!--                  <th class="text-left">Location</th>-->
                                            <!--                  <th class="text-left">Area</th>-->

                                            <th class="text-left">Material</th>
                                            <!--                  <th class="text-left">Skip<br>Rate(AED</th>-->
                                            <th class="text-left">Skip<br>Size</th>
                                            <th class="text-left">Field<br>Status</th>
                                            <th class="text-left">Last<br>Collection</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">E121bleh121bleh008121</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Dummy COntract</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Plastic</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">1.1 cbm</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Operational</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">July 16,2019</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">E121bleh121bleh008121</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Dummy COntract</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Galvanized Metal</td>

                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">5 cbm</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Operational</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">June 16,2019</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">E121bleh121bleh008121</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Dummy COntract</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Plastic</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">5cbm</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Operational</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">July 16,2019</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">E121bleh121bleh008121</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Dummy COntract</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Galvanized Metal</td>

                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">1.1 cbm</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">Operational</td>
                                            <td class="text-muted margin-top-30 margin-left-10 " style="color: #A9A9A4;">June 16,2019</td>
                                        </tr>



                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mapbox   margin-bottom-0 ">
                            <span class="icon" style="left:35%; top:25%;">
                                <a data-toggle="popover" data-original-title="Bin1" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                                    <img src="images/icon-map-bin-8cbm.png" alt="img" height="50">
                                </a>
                            </span>

                            <span class="icon" style="left:5%; top:25%;">
                                <a data-toggle="popover" data-original-title="Bin2" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                                    <img src="images/icon-map-bin-5cbm.png" alt="img" height="50">
                                </a>
                            </span>


                            <span class="icon" style="left:50%; top:10%;">
                                <a data-toggle="popover" data-original-title="Bin5" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                                    <img src="images/icon-map-bin-1.1cbm.png" alt="img" height="50">
                                </a>
                            </span>

                            <span class="icon" style="left:70%; top:80%;">
                                <a data-toggle="popover" data-original-title="Bin5" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                                    <img src="images/icon-map-bin-2.5cbm.png" alt="img" height="50">
                                </a>
                            </span>

                            <span class="icon" style="left:90%; top:60%;">
                                <a data-toggle="popover" data-original-title="Bin5" data-trigger="hover" data-container="body" data-placement="top" data-html="true" href="#" id="start">
                                    <img src="images/icon-map-bin-240litres.png" alt="img" height="50">
                                </a>
                            </span>

                            <div id="popover-content-start" class="hide">
                                <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                    <tbody>
                                        <tr>
                                            <th> Speed</th>
                                            <td class="text-left">33.2 km/h</td>
                                        </tr>
                                        <tr>
                                            <th> Volume</th>
                                            <td class="text-left">25.00 %</td>
                                        </tr>
                                        <tr>
                                            <th> Temperature</th>
                                            <td class="text-left">28.00 ℃</td>
                                        </tr>
                                        <tr>
                                            <th> Last Updated</th>
                                            <td class="text-left">Feb, 08, 2018, 7:00:57 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7039003.094634424!2d73.164877!3d30.520665!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1491977956402" width="100%" height="295" frameborder="0" style="border:0; " allowfullscreen=""
                                class="map pull-right1"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12  ">


                        <div class="panel panel-default ">
                            <div class="panel-heading">
                                <h3 class="panel-title font-weight-600">Statistics</h3>

                            </div>
                            <div class="panel-body padding-0">

                                <div class="">


                                    <div class="nav-tabs-vertical sm">
                                        <ul class="nav nav-tabs nav-tabs-solid1  margin-right-25 " data-plugin="nav-tabs" role="tablist">

                                            <li class="active"><a data-toggle="tab" href="#Collections" role="tab">Collections</a></li>
                                            <li class=""><a data-toggle="tab" href="#Invoices" role="tab">Invoices</a></li>
                                            <li class=""><a data-toggle="tab" href="#TripSheet" role="tab">TripSheet</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="Collections" role="tabpanel">

                                                <div class="margin-bottom-10  row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">
                                                                        <i class="icon wb-calendar"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control date" value="10/24/17">


                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">to</span>
                                                                    <input type="text" class="form-control date" value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a class="btn btn-sm white no-border  bg-teal-600 " href=""> <i class="ion-android-print"></i>
                                                            Generate Pdf</a>
                                                    </div>
                                                    <div class="col-sm-4 text-right">
                                                        <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                                                            <label class="btn btn-outline btn-success active">
                                                                <input type="radio" name="multiples" checked=""> Today
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                Last 24 Hours
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                This Week
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="vscroll padding-right-10" style="height:220px;">
                                                            <table class="table  margin-bottom-0 nowrap" id="">
                                                                <thead>
                                                                    <tr class="">
                                                                        <th class="">Driver</th>
                                                                        <th class="text-left">Status</th>
                                                                        <th class="text-left">Contract</th>
                                                                        <th class="text-left">Client</th>
                                                                        <th class="text-left">Area</th>
                                                                        <th class="text-left">Bin</th>
                                                                        <th class="text-left">Weight</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="">

                                                                        <td class="">Dummy Driver</td>
                                                                        <td class="text-left">Status</td>
                                                                        <td class="text-left">Contract</td>
                                                                        <td class="text-left">Client</td>
                                                                        <td class="text-left">Area</td>
                                                                        <td class="text-left">Bin</td>
                                                                        <td class="text-left">Weight</td>


                                                                    </tr>
                                                                    <tr class="">

                                                                        <td class="">Dummy Driver</td>
                                                                        <td class="text-left">Status</td>
                                                                        <td class="text-left">Contract</td>
                                                                        <td class="text-left">Client</td>
                                                                        <td class="text-left">Area</td>
                                                                        <td class="text-left">Bin</td>
                                                                        <td class="text-left">Weight</td>


                                                                    </tr>
                                                                    <tr class="">

                                                                        <td class="">Dummy Driver</td>
                                                                        <td class="text-left">Status</td>
                                                                        <td class="text-left">Contract</td>
                                                                        <td class="text-left">Client</td>
                                                                        <td class="text-left">Area</td>
                                                                        <td class="text-left">Bin</td>
                                                                        <td class="text-left">Weight</td>


                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane " id="Invoices" role="tabpanel">

                                                <div class="margin-bottom-10  row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">
                                                                        <i class="icon wb-calendar"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control date" value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">to</span>
                                                                    <input type="text" class="form-control date" value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control input-sm">
                                                            <option> Select Contract</option>
                                                            <option> Contract A</option>
                                                            <option> Contract B</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 text-right">
                                                        <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                                                            <label class="btn btn-outline btn-success active">
                                                                <input type="radio" name="multiples" checked=""> Today
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                Last 24 Hours
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                This Week
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="vscroll padding-right-10" style="height:250px;">
                                                            <table class="table  margin-bottom-0 nowrap" id="">
                                                                <thead>
                                                                    <tr class="">
                                                                        <th class="text-left">Invoice No</th>
                                                                        <th class="text-left">Client</th>
                                                                        <th class="text-left">Start Date</th>
                                                                        <th class="text-left">End Date</th>

                                                                        <th class="text-left">Payment Status</th>
                                                                        <th class="text-left">Total Sum (AED)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="">

                                                                        <td class="text-left">20102102</td>
                                                                        <td class="text-left">Client A</td>
                                                                        <td class="text-left">Aug 1, 2019</td>
                                                                        <td class="text-left">Jan1, 2019</td>

                                                                        <td class="text-left">Un Paid</td>
                                                                        <td class="text-left">65</td>


                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                            <div class="tab-pane" id="TripSheet" role="tabpanel">

                                                <div class="margin-bottom-10  row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="input-daterange   ">
                                                                <div class="input-group  input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">
                                                                        <i class="icon wb-calendar"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control date" value="10/24/17">
                                                                </div>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-addon hidden-xs">to</span>
                                                                    <input type="text" class="form-control date" value="10/25/17">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select class="form-control input-sm">
                                                            <option> Select Contract</option>
                                                            <option> Contract A</option>
                                                            <option> Contract B</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 text-right">
                                                        <div class="btn-group btn-group-sm btn-group-sm" data-toggle="buttons">
                                                            <label class="btn btn-outline btn-success active">
                                                                <input type="radio" name="multiples" checked=""> Today
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                Last 24 Hours
                                                            </label>
                                                            <label class="btn btn-outline btn-default ">
                                                                This Week
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <!--<input type="text" class="form-control input-sm" placeholder="Search" />-->
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="vscroll padding-right-10" style="height:250px;">
                                                            <table class="table  margin-bottom-0 nowrap" id="">
                                                                <thead>
                                                                    <tr class="">
                                                                        <th class="text-left">Bin</th>
                                                                        <th class="text-left">Contract</th>

                                                                        <th class="text-left">COntract Type</th>
                                                                        <th class="text-left">Invoice</th>
                                                                        <th class="text-left">Driver</th>
                                                                        <th class="text-left">Client Rep</th>
                                                                        <th class="text-left">Datetime</th>
                                                                        <th class="text-left">Verified</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="">
                                                                        <th class="text-left">E2009009090</th>
                                                                        <th class="text-left">Contract A</th>

                                                                        <th class="text-left">trip based</th>
                                                                        <th class="text-left">62</th>
                                                                        <th class="text-left">Driver A</th>
                                                                        <th class="text-left">-</th>
                                                                        <th class="text-left">July 16,2019</th>
                                                                        <th class="text-left">No</th>


                                                                    </tr>
                                                                    <tr class="">
                                                                        <th class="text-left">E2009009090</th>
                                                                        <th class="text-left">Contract A</th>

                                                                        <th class="text-left">trip based</th>
                                                                        <th class="text-left">62</th>
                                                                        <th class="text-left">Driver A</th>
                                                                        <th class="text-left">-</th>
                                                                        <th class="text-left">July 16,2019</th>
                                                                        <th class="text-left">No</th>


                                                                    </tr>
                                                                    <tr class="">
                                                                        <th class="text-left">E2009009090</th>
                                                                        <th class="text-left">Contract A</th>

                                                                        <th class="text-left">trip based</th>
                                                                        <th class="text-left">62</th>
                                                                        <th class="text-left">Driver A</th>
                                                                        <th class="text-left">-</th>
                                                                        <th class="text-left">July 16,2019</th>
                                                                        <th class="text-left">No</th>


                                                                    </tr>
                                                                    <tr class="">
                                                                        <th class="text-left">E2009009090</th>
                                                                        <th class="text-left">Contract A</th>

                                                                        <th class="text-left">trip based</th>
                                                                        <th class="text-left">62</th>
                                                                        <th class="text-left">Driver A</th>
                                                                        <th class="text-left">-</th>
                                                                        <th class="text-left">July 16,2019</th>
                                                                        <th class="text-left">No</th>


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





        </div>





        <?php include_once('_maptrail.php'); ?>


        <?php include_once('_footer.php'); ?>
        <script src="../plugins/d3/d3.min.js"></script>
        <script src="../plugins/c3/c3.js"></script>
        <script src="../plugins/js/core.js"></script>
        <script src="js/scripts.js"></script>

















    </body>

</html>