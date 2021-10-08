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

   <body class="layout-boxed1 admin-bg1 site-menubar-unfold ">
      <?php include_once('_header.php'); ?>

      <?php include_once('_leftmenu.php'); ?>
      <div class="page">
         <div>



            <div class="page-content  container-fluid">

               <div class="row ">
                  <div class="col-md-4">


                     <div class=" padding-10 bg-orange-800 text-center relative card white  margin-bottom-30  ">
                        <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                           Total Orders
                        </div>
                        <div class="margin-bottom-0 margin-right-10 inline-block"><img src="images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                        <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 280 </b>

                        <div class="bg-orange-700 padding-5 white  margin-top-15">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="font-size-10">Avg Daily </div>
                                 <div class="font-size-12">70</div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="font-size-10"> Today </div>
                                 <div class="font-size-12">17</div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="col-md-4">

                     <div class=" padding-10 bg-blue-800 text-center relative card white  margin-bottom-30  ">
                        <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                           Pending Shipments
                        </div>
                        <div class="margin-bottom-0 margin-right-10 inline-block" "=""><img src=" images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                        <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 217 </b>

                        <div class="bg-blue-700 padding-5 white  margin-top-15">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="font-size-10">Avg Daily </div>
                                 <div class="font-size-12">190</div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="font-size-10"> Today </div>
                                 <div class="font-size-12">10</div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>


                  <div class="col-md-4">

                     <div class=" padding-10 bg-green-800 text-center relative card white  margin-bottom-30  ">
                        <div class="font-size-14 margin-bottom-10  text-uppercase  ">
                           Overdue Shipments
                        </div>
                        <div class="margin-bottom-0 margin-right-10 inline-block" "=""><img src=" images/confrence-booth.png" style="height:24px;" class="img-bordered1"></div>

                        <b class="font-size-20 margin-bottom-10" style="position:relative; top:5px;"> 17 </b>

                        <div class="bg-green-700 padding-5 white  margin-top-15">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="font-size-10">Avg Daily </div>
                                 <div class="font-size-12">5</div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="font-size-10"> Today </div>
                                 <div class="font-size-12">0</div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>




               </div>


               <div class="panel panel-default shadow" style="min-height: 200px;">
                  <div class="panel-heading font-weight-600 margin-bottom-0">
                     <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                        <li class="active"><a data-toggle="tab" href="#Pending"> Pending </a></li>
                        <li class=""><a data-toggle="tab" href="#Scheduled"> Scheduled </a></li>
                        <li class=""><a data-toggle="tab" href="#Inprogress"> Inprogress </a></li>
                        <li class=""><a data-toggle="tab" href="#Completed"> Completed</a></li>
                     </ul>
                  </div>
                  <div class="panel-body padding-0">
                     <div class="tab-content">
                        <div class="tab-pane active " id="Pending">
                           <div class="panel panel-default margin-bottom-0 ">
                              <div class="panel-body padding-15 ">

                                 <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                       <input type="text" class="form-control input-sm" placeholder="Search">
                                    </div>
                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By City</option>
                                       </select>
                                    </div>
                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By Type</option>
                                       </select>
                                    </div>

                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                       <div class="">
                                          <input type="submit" class="btn btn-sm btn-info" value="Go">
                                       </div>
                                    </div>
                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                       <a href="supplier-add-stock.php" class="btn btn-sm   btn-default btn-dark">
                                          Add/Update
                                       </a>
                                    </div>
                                 </div>

                                 <div class="table-responsive ">
                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered" id="">

                                       <thead>
                                          <tr class="">

                                             <th class="text-left">Order # </th>
                                             <th class="text-left">Customer</th>
                                             <th class="text-left"> Product </th>
                                             <th class="text-left">Order Date</th>
                                             <th class="text-right"></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AA1854444</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Interchange Hand & Machine Tools </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr><tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>

                                 </div>





                              </div>
                           </div>
                        </div>

                        <div class="tab-pane " id="Scheduled">
                           <div class="panel panel-default margin-bottom-0 ">
                              <div class="panel-body padding-15 ">

                                 <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                       <input type="text" class="form-control input-sm" placeholder="Search">
                                    </div>



                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By City</option>
                                       </select>
                                    </div>
                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By Type</option>
                                       </select>
                                    </div>

                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                       <div class="">
                                          <input type="submit" class="btn btn-sm btn-info" value="Go">
                                       </div>
                                    </div>


                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                       <a href="supplier-add-stock.php" class="btn btn-sm   btn-default btn-dark">
                                          Add/Update
                                       </a>
                                    </div>
                                 </div>

                                 <div class="table-responsive ">
                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered" id="">

                                       <thead>
                                          <tr class="">

                                             <th class="text-left">Order # </th>
                                             <th class="text-left">Customer</th>
                                             <th class="text-left"> Product </th>
                                             <th class="text-left">Order Date</th>
                                             <th class="text-right"></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr><tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr><tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AA1854444</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Interchange Hand & Machine Tools </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>

                                 </div>






                              </div>
                           </div>
                        </div>

                        <div class="tab-pane " id="Inprogress">
                           <div class="panel panel-default margin-bottom-0 ">
                              <div class="panel-body padding-15 ">

                                 <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                       <input type="text" class="form-control input-sm" placeholder="Search">
                                    </div>



                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By City</option>
                                       </select>
                                    </div>
                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By Type</option>
                                       </select>
                                    </div>

                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                       <div class="">
                                          <input type="submit" class="btn btn-sm btn-info" value="Go">
                                       </div>
                                    </div>


                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                       <a href="supplier-add-stock.php" class="btn btn-sm   btn-default btn-dark">
                                          Add/Update
                                       </a>
                                    </div>
                                 </div>

                                 <div class="table-responsive ">
                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered" id="">

                                       <thead>
                                          <tr class="">

                                             <th class="text-left">Order # </th>
                                             <th class="text-left">Customer</th>
                                             <th class="text-left"> Product </th>
                                             <th class="text-left">Order Date</th>
                                             <th class="text-right"></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr><tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr><tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AA1854444</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Interchange Hand & Machine Tools </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>

                                 </div>






                              </div>
                           </div>
                        </div>


                        <div class="tab-pane" id="Completed">
                           <div class="panel panel-default margin-bottom-0 ">
                              <div class="panel-body padding-15  ">
                                 <div class="margin-bottom-20 p clearfix" style="border-bottom: 1px solid #eee">

                                    <div class="inline-block pull-left  margin-bottom-10 margin-right-10">
                                       <input type="text" class="form-control input-sm" placeholder="Search">
                                    </div>



                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By City</option>
                                       </select>
                                    </div>
                                    <div class="inline-block pull-left margin-right-10">
                                       <select class="form-control input-sm ">
                                          <option>Filter By Type</option>
                                       </select>
                                    </div>

                                    <div class="inline-block pull-left   margin-bottom-10 margin-right-10">
                                       <div class="">
                                          <input type="submit" class="btn btn-sm btn-info" value="Go">
                                       </div>
                                    </div>


                                    <div class="inline-block pull-right   margin-bottom-10 margin-right-10">
                                       <a href="supplier-add-stock.php" class="btn btn-sm   btn-default btn-dark">
                                          Add/Update
                                       </a>
                                    </div>
                                 </div>
                                 <div class="table-responsive ">
                                    <table class="table  margin-bottom-0 table-hover table-condensed1 bg-white table-bordered" id="">

                                       <thead>
                                          <tr class="">

                                             <th class="text-left">Order # </th>
                                             <th class="text-left">Customer</th>
                                             <th class="text-left"> Product </th>
                                             <th class="text-left">Order Date</th>
                                             <th class="text-right"></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AA1854444</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Interchange Hand & Machine Tools </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">TC1854333</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Electric Lasers </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">GAMCO</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CARINA SHIPPING </td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="text-left">AC1854567</td>
                                             <td class="text-left">CECC</td>
                                             <td class="text-left">Machinery Parts </td>
                                             <td class="text-left">11:34pm, May 17,2019 </td>
                                             <td class="text-center">
                                                <button type="button" class="btn btn-icon  btn-default btn-xs " data-target="#orderdetail-popup" data-toggle="modal">
                                                   Details
                                                </button>
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






      <div class="modal fade example-modal-lg" id="orderdetail-popup">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="exampleOptionalLarge">Order Summary

                     <!-- <button type="button" class="btn btn-primary pull-right btn-sm margin-right-20">Print </button> </h4> -->
               </div>
               <div class="modal-body padding-top-0">


                  <div class="">
                     <div class=" ">





                        <div class="  margin-bottom-15">
                           <div class="row">

                              <div class="col-md-4">

                                 <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Shipment Status:</div>
                                 <div>

                                    <div class="margin-bottom-5"><b>Current Status </b></div>
                                    <div class="margin-bottom-15 grey-600">
                                       <label class="label label-info">Pending</label>
                                    </div>
                                    <div class="margin-bottom-5"><b>Order Date / Time </b></div>
                                    <div class="margin-bottom-15 grey-600">
                                       20 May, 2019, 10:34pm
                                    </div>



                                 </div>
                              </div>
                              <div class="col-md-4">

                                 <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Shipment Details:</div>
                                 <div>

                                    <div class="margin-bottom-15 grey-600">
                                       SPTDigital <br>
                                       Office Plot#5, New Broad KDA

                                       <br>
                                       info@sptdigial.com
                                       <br>
                                       +923145140022
                                    </div>

                                    <!-- <div class="margin-bottom-5"><b> Shipment Details </b></div>
                                    <div class="grey-600">
                                       Same as shipper details
                                    </div> -->

                                 </div>
                              </div>



                              <div class="col-md-4">

                                 <div class=" bg-green-600 white padding-5 text-center font-size-12 margin-bottom-15"> Order Number</div>
                                 <div>

                                    <!-- <div class=" text-center margin-bottom-0">
                                       <img src="images/bar-code.png" width="80" heigt="80" />
                                    </div> -->

                                    <input type="url" readonly class="form-control input-sm text-center" value="AA1234567" />
                                    <!-- <div class=" text-center font-weight-600">AA1234567 </div> -->



                                 </div>
                              </div>




                           </div>
                        </div>



                        <div class=" bg-teal-800 white padding-5 text-center font-size-12 margin-bottom-15"> Order Details</div>
                        <table class=" table  table-bordered1  text-wrap1 table-hover1 table-condensed1  table-striped1 margin-bottom-15 grey-800 " cellspacing="0" cellpadding="0">

                           <tbody>




                              <tr>
                                 <td class="font-weight-600">Payment Type</td>
                                 <td>In Cash by the Shipper</td>

                                 <td class="font-weight-600">Total Weight</td>
                                 <td>12kg</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-600">Number of Pieces</td>
                                 <td>20</td>

                                 <td class="font-weight-600">Value of Shipment</td>
                                 <td>3800</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-600">Delivery Notes</td>
                                 <td> Machinery Parts</td>

                                 <td class="font-weight-600"></td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td class="font-weight-600 green-800">Estimated Delivery Time/Date</td>
                                 <td>
                                    <div class=" ">Monday, 17-June-2019</div>
                                 </td>
                                 <td class="font-weight-600 "> </td>
                                 <td> </td>
                              </tr>
                              <tr class="bg-white">
                                 <td colspan="4"></td>
                              </tr>
                              <tr class="bg-blue-200 ">
                                 <td class="font-weight-600">Esimated Price</td>
                                 <td colspan="3">
                                    <div class="text-right clearfix padding-10">
                                       <div class="pull-right1">
                                          <p>Sub - Total amount:
                                             <span>3750 </span>
                                          </p>
                                          <p>VAT:
                                             <span>35 </span>
                                          </p>
                                          <p class="page-invoice-amount font-size-18">Grand Total:
                                             <span>4835 </span>
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>


                     </div>
                  </div>




               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-dark">Confirm & Print </button>
                  <button type="button" class="btn btn-primary">Confirm </button> -->
               </div>
            </div>
         </div>
      </div>



      <script src="../plugins/d3/d3.min.js"></script>
      <script src="../plugins/c3/c3.js"></script>
      <script src="../plugins/js/core.js"></script>
      <script src="js/scripts.js"></script>
   </body>

</html>