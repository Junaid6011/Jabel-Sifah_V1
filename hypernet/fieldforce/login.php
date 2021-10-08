
<!DOCTYPE html>
<?php
  require("_login_authentication.php")
?>
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

<body class="dashboard " style="background-image: url(images/bg-login.jpg);  background-size:100%; ">



    <div class="pic"></div>


    <div class="loginbox card">
        <div class="back">
            <div class="padding-30">
                <img class="brand-img" src="images/hypernet.png" alt="..." height="200">
            </div>
        </div>

        <div class="front shadow">
            <div class="login padding-20 text-center">
                <div class="font-size-40">
                    <i class="ion-ios-locked"></i>
                </div>
                <h4 class="font-weight-600 text-uppercase green-800 margin-top-10 margin-bottom-30">Login</h4>

                <?php include("_form.php") ?>
            </div>



        </div>
    </div>


























    <!-- <div class="login-bg">

    <div class="">


        <br /> <br />
        <div class="form-box padding-20 bg-white card light text-center" style="width:400px;  margin:auto;">
            <div class="brand margin-bottom-30">
                <img class="brand-img" src="images/hypernet.png" alt="..." height="150">

            </div>
            <form>
                <div class="form-group">
                    <label class="sr-only">Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only">Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline pull-left">
                        <input type="checkbox" id="inputCheckbox" name="checkbox">
                        <label for="inputCheckbox">Remember me</label>
                    </div>
                    <a class="pull-right" href="">Forgot password?</a>
                </div>
                <a href="" class="btn btn-warning  btn-block">Sign in</a>
            </form>


            <footer class="page-copyright" style="margin-top:20px;">
                <p>© 2017 Hypernet</p>
            </footer>
        </div>
    </div>



</div> -->






















</body>

</html>
