
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



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.0/css/bootstrap-slider.css"
        media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.0/bootstrap-slider.js"></script>




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
                <li><a class="icon ion-ios-home" href="javascript:void(0)"> Dashboard </a></li>
                <li><a href="javascript:void(0)">Vehicles</a></li>
            </ol>
        </div> -->




        <div class="page-content  container-fluid">



            <div class="row ">
                <div class="col-md-6">

                    <div class="row ">
                        <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-orange-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Warehouse
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-warehouse2.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">250</b>
                                        </div>
                                    </div>
									
                                </div>
                            </div>
                        </div>
							
							
                       <div class="col-md-6">
                            <div class="widget shadow card">
                                <div class=" padding-10 bg-green-800 height-100 text-center relative ">
                                    <div class="white">
                                        <div class="margin-bottom-10   ">
                                            <div class="font-size-14 ">
                                                Total Locations
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class=" margin-right-15 inline">
                                                <i> <img src="images/icon-locations.png" alt="img" height="40"> </i>
                                            </div>
                                            <b class="font-size-24" style="position:relative; top:5px;">50</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-12 ">
                            <div class="row no-space shadow card margin-bottom-30">

                                <div class="">
                                    <div class="slikslider margin-bottom-0 bg-teal-500  " id="slikslider-types">
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10 bg-teal-500 height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0   ">
                                                            <div class="font-size-14 ">
                                                                Electronics
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18">125</b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            120 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                               Spare Parts
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class="font-size-18"> 100 </b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            90 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                FMCG
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 10</b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            08 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										 <div>
                                            <div class="widget margin-0 ">
                                                <div class=" padding-10   height-90 text-center relative">
                                                    <div class="white">
                                                        <div class="margin-bottom-0 ">
                                                            <div class="font-size-14 ">
                                                                Clothes
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <b class=" font-size-18"> 15</b>
                                                        </div>
                                                        <div class="label white  bg-teal-600 absolute1  left right bottom">
                                                            13 Online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
                                      

                                    </div>
                                    <script>
                                        $('#slikslider-types').slick({
                                            infinite: false,
                                            slidesToShow: 4,
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
                        </div>
                        



                    </div>
                </div>
				 <div class="col-lg-6">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-teal-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">
                                            <div class=" font-size-18 margin-bottom-20">Most Utilized</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-teal-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-Most">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-v1">
                                               	Warehouse 3</div>

<!--                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> 06 Violations </div>-->
                                            <div class="font-size-10">
<!--
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">13%</span>
-->
                                                <span class="" id="mrq-v4">more than yesterday</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-Most").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                       $("#mrq-v1").text('	Warehouse 3')
//                                                        $("#mrq-v2").text('12 Violations')
//                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-v4").text('more than last year')
                                                    }
                                                    else {
                                                        $("#mrq-v1").text('	Warehouse 1')
//                                                        $("#mrq-v2").text('12 Violations')
//                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-v4").text('more than last year')
                                                    }
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                        </div>
                                </div>
                        <div class="col-lg-6">
                            <div class="widget  white margin-bottom-30 shadow card">
                                <div class="padding-15 bg-teal-700 " style="height:220px;">
                                    <div class="text-center padding-top-0">
                                        <div class="">
                                            <div class=" font-size-18 margin-bottom-20">Least Utilized</div>
                                            <div class="dropdown margin-bottom-20 ">
                                                <select type="button"
                                                    class="btn bg-teal-800 btn-block1 white dropdown-toggle btn-xs text-center "
                                                    data-toggle="dropdown" id="mrq-dd-Least">
                                                    This Month
                                                    <span class="caret"></span>

                                                    <option>This Month</option>
                                                    <option>This Year</option>
                                                </select>
                                            </div>
                                            <div class="font-size-20  margin-bottom-10 font-weight-600" id="mrq-w1">
                                               	Warehouse 2</div>

<!--                                            <div class="font-size-14 margin-bottom-10" id="mrq-v2"> 06 Violations </div>-->
                                            <div class="font-size-10">
<!--
                                                <span class="margin-right-5"><i
                                                        class="ion-arrow-graph-up-right"></i></span>
                                                <span class="" id="mrq-v3">13%</span>
-->
                                                <span class="" id="mrq-w4">more than yesterday</span>
                                            </div>
                                            <script>
                                                $("#mrq-dd-Least").on('change', function () {
                                                    if (this.value.trim().toLowerCase().includes('month')) {
                                                       $("#mrq-w1").text('	Warehouse 2')
//                                                        $("#mrq-v2").text('12 Violations')
//                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-w4").text('more than last year')
                                                    }
                                                    else {
                                                        $("#mrq-w1").text('	Warehouse 4')
//                                                        $("#mrq-v2").text('12 Violations')
//                                                        $("#mrq-v3").text('17%')
                                                        $("#mrq-w4").text('more than last year')
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



                <div class="col-lg-12">
                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading font-weight-600 ">
                            <h3 class="panel-title "><b>Listing </b></h3>
                            <div class="panel-actions ">
                                <a class="panel-action icon ion-loop " data-toggle="tooltip" data-original-title="Refresh"></a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="sidebox">
                                <div class="page-aside left-filters">
                                    <div class="page-aside-switch">
                                        <i class="icon wb-chevron-left"></i>
                                        <i class="icon wb-chevron-right"></i>
                                    </div>
                                    <div class="page-aside-inner">
                                        <section class="page-aside-section">
                                            <div class=" padding-left-20 padding-right-20 left-filters">


                                                <div class="panel">
                                                    <div class="panel-heading" role="tab">
                                                        <div class="panel-title">
                                                            Fill Level (0%-100%)
                                                        </div>


                                                    </div>
                                                    <div class="panel-body padding-0">

                                                        <div class="rangeslider">






                                                            <input id="ex14" type="text" data-slider-value="[10, 32]"
                                                                data-slider-ticks="[0, 100, 200, 300, 400]"
                                                                data-slider-ticks-snap-bounds="30"
                                                                data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'
                                                                data-slider-ticks-positions="[0, 30, 70, 90, 100]" />

                                                            <script>
                                                                $("#ex14").slider({
                                                                    ticks: [0, 50, 100],
                                                                    ticks_positions: [0, 50, 100],
                                                                    ticks_labels: ['0%', '50%', '100%'],
                                                                    ticks_snap_bounds: 1
                                                                });



                                                            </script>

                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="panel-group " id="AccordionFilters1">

                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#Status"
                                                                data-parent="#AccordionFilters">
                                                                Status
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Status" role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered ">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">78</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online1"
                                                                                    name="Online" data-trigger="hidden_fields_one" checked class="trigger" />
                                                                                <label for="Online1">Online</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    
<!--
                                                                     <li class="list-group-item">
                                                                        <span class="badge badge-default">78</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online16"
                                                                                    name="Online" data-trigger="hidden_fields_nine" checked class="trigger" />
                                                                                <label for="Online16">Online</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
-->
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">80</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Offline"
                                                                                    name="Offline" data-trigger="hidden_fields_two" class="trigger" />
                                                                                <label for="Offline">Offline</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    
                                                    <div class="panel">
                                                        <div class="panel-heading" role="tab">
                                                            <a class="panel-title" data-toggle="collapse" href="#Types"
                                                                data-parent="#AccordionFilters">
                                                                Types
                                                            </a>
                                                        </div>
                                                        <div class="panel-collapse collapse in" id="Types" role="tabpanel">
                                                            <div class="panel-body padding-0">
                                                                <ul class="list-group list-group-bordered ">
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">100</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online3"
                                                                                    name="Online" data-trigger="W1" class="trigger" />
                                                                                <label for="Online3">Small</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <span class="badge badge-default">150</span>
                                                                        <div class="inline-block ">
                                                                            <div class="checkbox-custom checkbox-info margin-0 ">
                                                                                <input type="checkbox" id="Online4"
                                                                                    name="Online" data-trigger="W2" class="trigger" />
                                                                                <label for="Online4">Large</label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                             <script>
                                                            $('.trigger').change(function() {  
                                                                    var hiddenId = $(this).attr("data-trigger");
    
                                                            if ($(this).is(':checked')) {
                                                                $("." + hiddenId).removeClass('hide')
                                                             }
                                                                else{
                                                                    $("." + hiddenId).addClass('hide')
                                                                }
                                                                 });
                                                    </script>
                                                        </div>
                                                    </div>



                                                </div>


                                            </div>
                                        </section>

                                    </div>
                                </div>
                                <div class="page-main">


                                    <div class="row">

                                        <div class="col-md-12">




                                            <div class="mapbox   margin-bottom-0 ">

                                                <div id="popover-content-start1" class="hide">
                                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                        <tr>
                                                            <th> Volume </th>
                                                            <td class="">90 %</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Last Updated </th>
                                                            <td class="">Feb 26,2018 10:07:08 am</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div id="popover-content-start2" class="hide">
                                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                        <tr>
                                                            <th> Volume </th>
                                                            <td class="">40 %</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Last Updated </th>
                                                            <td class="">Feb 23,2018 9:11:12 am</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div id="popover-content-start3" class="hide">
                                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                        <tr>
                                                            <th> Volume </th>
                                                            <td class="">63 %</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Last Updated </th>
                                                            <td class="">Feb 26,2018 10:08:03 am</td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div id="popover-content-start4" class="hide">
                                                    <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                                                        <tr>
                                                            <th> Volume </th>
                                                            <td class="">70 %</td>
                                                        </tr>
                                                        <tr>
                                                            <th> Last Updated </th>
                                                            <td class="">Feb 26,2018 10:05:11 am</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                  

                                                <div class="hidden_fields_one" >
                                                <span class="icon" style="left:10%; top:65%;">
                                                    <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start1">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>





                                                <span class="icon" style="left:20%; top:57%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>



                                                <span class="icon" style="left:32%; top:67%;">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>

                                                <span class="icon" style="left:10%; top:77%;">
                                                    <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start4">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                            </div>
                                                
                                                <div class="hidden_fields_two hide">
                                                <span class="icon" style="left:60%; top:85%;">
                                                    <a data-toggle="popover" data-original-title="RAAR150" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start1">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:45%; top:25%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:53%; top:67%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:19%; top:23%;">
                                                    <a data-toggle="popover" data-original-title="RAAR180" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start4">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                               </div> 
                                                <div class="W1 hide">
                                                <span class="icon" style="left:38%; top:65%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:64%; top:49%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                </div>
                                                <div class="W2 hide">
                                                <span class="icon" style="left:79%; top:25%;">
                                                    <a data-toggle="popover" data-original-title="RAAR160" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start2">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                <span class="icon" style="left:13%; top:49%; ">
                                                    <a data-toggle="popover" data-original-title="RAAR170" data-trigger="hover"
                                                        data-container="body" data-placement="top" data-html="true"
                                                        href="#" id="start3">
                                                        <img src="images/icon-map-warehouse1.png" alt="img" height="50">
                                                    </a>
                                                </span>
                                                </div>
                                                 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                    width="100%" height="600" frameborder="0" style="border:0" class="pull-left map"></iframe> 
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

                <div class="col-lg-12  ">


                    <div class="panel panel-default  card shadow light">
                        <div class="panel-heading">
                            <h3 class="panel-title font-weight-600">Statistics</h3>

                        </div>
                        <div class="panel-body ">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="margin-bottom-10 clearfix text-center">
                                        <div class="form-group1">
                                            <div class="inline-block">
                                                <select class="form-control input-sm" id="mrq-dd-class3">
                                            <option>This Month </option>
                                            <option>This Year</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="chartbox">
                                        <div id="chart-hours"></div>
                                        <script>
                                            var simple_line_chart2; 
                                            $(document).ready(function ($) {
                                                (function () {
                                                    simple_line_chart2 = c3.generate({
                                                        bindto: '#chart-hours',
                                                        size: {
                                                            height: 260,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['Numbers', 250, 85, 55, 17],
                                                            ],
                                                            type: 'bar',
                                                        },
                                                        color: {
                                                            pattern: ['#465bd4', '#178d81', '#ec9940']
                                                        },
                                                        axis: {
                                                            rotated: true,
                                                            x: {
                                                                label: {
                                                                    show: false,
                                                                    text: '',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Near to Fill', 'Over Filled', 'Empty', 'Full']
                                                            },
                                                            y: {
                                                                label: {

                                                                    text: ' ',
                                                                    position: 'outer-middle'
                                                                },
                                                            },
                                                        },
                                                        bar: {
                                                            width: {
                                                                ratio: 0.5
                                                            }
                                                        },
                                                        grid: {
                                                            x: {
                                                                show: true
                                                            },
                                                            y: {
                                                                show: true
                                                            }
                                                        }
                                                    });
                                                })();
                                            });
                                        </script>
                                         <script>
                                $("#mrq-dd-class3").on('change', function () {

                                    if (this.value.trim().toLowerCase().includes('month')) {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns: [
                                                                ['Numbers', 250, 85, 55, 17],
                                                            ],
                                        });
                                    }
                                    else {
                                        simple_line_chart2.load({
                                            unload: true,
                                            columns: [
                                                                ['Numbers', 350, 285, 255, 117],
                                                            ],
                                        });
                                    }
                                });
                            </script>
                                    </div>

                                </div>
                                <div class="col-lg-4">


                                    <div class="padding-15 bg-cyan-100 margin-bottom-0">
                                        <div class="vscroll" style="height: 250px;">
                                            <table class="table  table-condensed  table-hovered    no-border   font-size-16 margin-bottom-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <figure class="fillimg">
                                                                <img src="images/icon-bin-fill-1.png" class="" style="height: 70px">
                                                                <div class="count">20%</div>
                                                            </figure>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 201
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 "> Average daily
                                                                Collection</div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">20%</span>
                                                                <span class="">less than last month</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" width="80">
                                                            <figure class="fillimg">
                                                                <img src="images/icon-bin-fill-2.png" class="" style="height: 70px">
                                                                <div class="count">50%</div>
                                                            </figure>
                                                        </td>
                                                        <td width="">
                                                            <div class="font-size-24  font-weight-600 red-800"> 150
                                                            </div>
                                                            <div class="font-size-12 font-weight-600 ">
                                                                Collection Effeciency</div>
                                                            <div class="font-size-10 margin-top-0">
                                                                <span class="">50%</span>
                                                                <span class="">less than last month</span>
                                                            </div>

                                                        </td>
                                                        <td class="text-center">
                                                            <div class="margin-top-0 bg-white padding-5 font-size-30 red-800">
                                                                <i class="ion-arrow-graph-down-right"></i>
                                                                <!--<img src="images/arrow-down.png" alt="img" height="30" class="inline">-->
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>



                                <div class="col-lg-3">



                                    <div class="padding-15 bg-cyan-1001 margin-bottom-0">

                                        <div class="font-size-16 text-center margin-bottom-10"> Consignment Collection</div>


                                        <div class="chartbox">
                                            <div id="chart-alerts1"></div>
                                            <script>
                                                $(document).ready(function ($) {
                                                    (function () {
                                                        var simple_line_chart = c3.generate({
                                                            bindto: '#chart-alerts1',
                                                            size: {
                                                                height: 200,
                                                            },
                                                            legend: {
                                                                show: true,
                                                                position: 'bottom',
                                                            },
                                                            data: {
                                                                columns: [
                                                                    ['Collected ', 25,],
                                                                    ['Pending ', 75],


                                                                ],
                                                                type: 'donut',
                                                            },
                                                            color: {
                                                                // pattern: ['#ef6666', '#36ab7a']
                                                            },
                                                            axis: {
                                                                rotated: false,
                                                                x: {
                                                                    label: {
                                                                        text: 'Jobs',
                                                                        position: 'outer-center'
                                                                    },
                                                                    type: 'category',
                                                                    categories: ['15', 'T', 'W', 'T', 'F', 'S', 'S']
                                                                },
                                                                y: {
                                                                    label: {
                                                                        text: 'No of Jobs ',
                                                                        position: 'outer-middle'
                                                                    },
                                                                },
                                                            },
                                                            bar: {
                                                                width: {
                                                                    ratio: 0.1
                                                                }
                                                            }
                                                        });
                                                    })();
                                                });
                                            </script>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-lg-4">


                                    <div class="widget">
                                        <div class="padding-0 margin-top-20 bg-white  text-center">
                                            <div class=" ">
                                                <div class="text-uppercase font-size-14 margin-bottom-5">Average
                                                    Time
                                                    Between Warehouse to Destination</div>
                                                <div class="margin-bottom-10">
                                                    <span class="font-size-30 green-800">2h 30min</span>
                                                </div>
                                                <div class="counter-label">

                                                    <div class="counter counter-sm ">
                                                        <div class="counter-number-group">
                                                            <span class="counter-icon blue-600 margin-right-5"><i class="wb-graph-up"></i></span>
                                                            <span class="counter-number">38%</span>
                                                            <span class="counter-number-related">more than last month</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="widget bg-cyan-100 margin-20">
                                        <div class="padding-15  text-center">
                                            <div class=" ">
                                                <div class="text-uppercase font-size-12 margin-bottom-5">Average
                                                    Deliveries
                                                    per day</div>
                                                <div class="margin-bottom-0">
                                                    <span class="font-size-18 blue-800">234</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-lg-8">

                                    <div class=" font-size-24 margin-bottom-10 margin-top-0 text-center">Avg Monthly
                                        Collection</div>
                                    <div class="chartbox">
                                        <div id="chart-home1"></div>
                                        <script>
                                            $(document).ready(function ($) {
                                                (function () {
                                                    var simple_line_chart = c3.generate({
                                                        bindto: '#chart-home1',
                                                        size: {
                                                            height: 230,
                                                        },
                                                        legend: {
                                                            show: false,
                                                            position: 'bottom',
                                                        },
                                                        data: {
                                                            columns: [
                                                                ['%', 68, 95, 78, 100, 88, 65, 76, 89, 66, 87, 44, 59],
                                                            ],
                                                            type: 'line',
                                                        },
                                                        color: {
                                                            pattern: ['#2b9646']
                                                        },
                                                        axis: {
                                                            rotated: false,
                                                            x: {
                                                                label: {
                                                                    text: 'Months',
                                                                    position: 'outer-center'
                                                                },
                                                                type: 'category',
                                                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
                                                            },
                                                            y: {
                                                                label: {
                                                                    text: ' ',
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
                                <li class="active"><a data-toggle="tab" href="#History">Listing</a></li>
                            </ul>
                        </div>
                        <div class="panel-body padding-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="History">
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
<!--
                                                            <div class="inline-block pull-left margin-right-10">
                                                                <select class="form-control input-sm ">
                                                                    <option>All Jobs</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                    <option>JOB119 </option>
                                                                    <option>JOB221</option>
                                                                    <option>JOB123</option>
                                                                </select>
                                                            </div>
-->
                                                            <div
                                                                class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                                                <div class="">
                                                                    <input type="submit" class="btn btn-sm btn-info"
                                                                        value="Go">
                                                                </div>
                                                            </div>
                                                        </div>


                                            <div class="table-responsive">
                                                <table class="table  margin-bottom-0 table-hover table-condensed table-bordered   "
                                                    id=" ">
                                                    <thead>
                                                        <tr class="">
                                                            <th class="text-left">Warehouse</th>
                                                            <th class="text-left">Status</th>
															<th class="text-left" width="150">Employee</th>
                                                            <th class="text-left">Fill %</th>
                                                            <th class="text-left"> CONSIGNMENTS</th>
                                                            <th class="text-left"> CONTACT # </th>
                                                            <th class="text-left">Location </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse.png" class="img-bordered"
                                                                            style="height:36px; width:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            Warehouse 1 </a>
                                                                        <br />
                                                                        <i class="small">Technology </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Joe Denly
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 45%;">
                                                                                <span class="progress-label">45%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">895</td>
															 
                                                             <td class="text-left">051-5116168</td>
                                                             
<td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse1.png" class="img-bordered"
                                                                            style="height:36px; width:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            warehouse 2 </a>
                                                                        <br />
                                                                        <i class="small">FMCG </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Sam Bill
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 76%;">
                                                                                <span class="progress-label">76%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             
															 <td class="text-left">989</td>
                                                             <td class="text-left">051-21569429</td>
<td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">College Road,West
                                                                    </div>





                                                                </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse3.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                           Warehouse 3 </a>
                                                                        <br />
                                                                        <i class="small">Spare Parts </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-danger">Offline</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Karim Benzema
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 64%;">
                                                                                <span class="progress-label">64%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">954 </td>
                                                             
                                                             <td class="text-left">051-21568924</td>

                                                           <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Khanna Road, East
                                                                    </div>





                                                                </td>

                                                        </tr>
														<tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse2.png" class="img-bordered"
                                                                            style="height:36px; width:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            Warehouse 53 </a>
                                                                        <br />
                                                                        <i class="small">Technology </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Adma Smith
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 96%;">
                                                                                <span class="progress-label">96%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">895</td>
															 
                                                             <td class="text-left">051-5116168</td>
                                                             
<td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                        </tr>
                                                        <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse2.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            Warehouse 4 </a>
                                                                        <br />
                                                                        <i class="small">Technology </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img2.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Paulo Dybala
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 23%;">
                                                                                <span class="progress-label">23%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">466</td>
                                                             
                                                             <td class="text-left">051-25669429</td>

                                                            <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Tayo Road, 1856 Hill Station
                                                                    </div>





                                                                </td>

                                                        </tr>
														<tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse3.png" class="img-bordered"
                                                                            style="height:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                           Warehouse 34 </a>
                                                                        <br />
                                                                        <i class="small">Spare Parts </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-danger">Offline</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img3.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Joe Denly
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 34%;">
                                                                                <span class="progress-label">34%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">954 </td>
                                                             
                                                             <td class="text-left">051-21568924</td>

                                                           <td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">
                                                                        Khanna Road, East
                                                                    </div>





                                                                </td>

                                                        </tr>
														<tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse2.png" class="img-bordered"
                                                                            style="height:36px; width:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            Warehouse 32 </a>
                                                                        <br />
                                                                        <i class="small">Technology </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Neymar Jr.
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                          <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 56%;">
                                                                                <span class="progress-label">56%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             <td class="text-left">895</td>
															 
                                                             <td class="text-left">051-5116168</td>
                                                             
<td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">Blue Road,Malburg
                                                                    </div>





                                                                </td>

                                                        </tr>
														 <tr>


                                                            <td class="text-left">
                                                                <div class="media" style="max-width: 150px;">
                                                                    <div class="media-left padding-right-10">
                                                                        <img src="images/icon_warehouse1.png" class="img-bordered"
                                                                            style="height:36px; width:36px">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <a href="warehouse.php" class="font-weight-600">
                                                                            warehouse 23 </a>
                                                                        <br />
                                                                        <i class="small">FMCG </i>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                            <td class="text-left"><span class="label label-success">Active</span> </td>
															 <td class="text-left">
                                                                    <div class="media" style="max-width: 200px;">
                                                                        <div class="media-left padding-right-10">
                                                                            <img src="images/user-img1.jpg"
                                                                                class="img-bordered" style="height:36px">
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <a href="employee.php" class="font-weight-600">Harshal Martin
                                                                            </a>
                                                                            <br />
                                                                            <i class="small">Manager</i>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            <td class="" width="100">
                                                                        <div class="progress margin-bottom-0"
                                                                            data-labeltype="percentage" data-plugin="progress">
                                                                            <div class="progress-bar progress-bar-warning"
                                                                                role="progressbar" style="width: 23%;">
                                                                                <span class="progress-label">23%</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                             
															 <td class="text-left">989</td>
                                                             <td class="text-left">051-21569429</td>
<td class="text-left">

                                                                    <div class="pull-right" data-target="#Track"
                                                                        data-toggle="modal" type="button">
                                                                        <i class="icon-location"><img src="images/icon-location.png"
                                                                                alt="img" height="20"></i></div>
                                                                    <div class="">College Road,West
                                                                    </div>





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
    <?php include_once('_maptrail-loc.php'); ?>
    <?php include_once('_footer.php'); ?>
    <script src="../plugins/d3/d3.min.js"></script>
    <script src="../plugins/c3/c3.js"></script>
    <script src="../plugins/js/core.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
