<!DOCTYPE html>
<?php require("_login_authentication.php") ?>
<html class="no-js before-run" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body class="dashboard " style="background-image: url(bg-login.jpg);  background-size:100%; ">
        <div class="pic"></div>
        <br /> <br /> <br /> <br /> <br /> <br />
        <div class="loginbox card" style=" background: #fff; padding: 30px; max-width: 350px; border-radius: 20px;  margin: auto;">
            <div class="back">
                <div class="padding-30 text-center">
                    <img class="brand-img" src="logo-analytics.png" alt="..." height="100">
                </div>
            </div>
            <div class="front shadow">
                <div class="login padding-20 text-center">
                    <div class="font-size-40">
                        <i class="ion-ios-locked"></i>
                    </div>
                    <h4 class="font-weight-600 text-uppercase green-800 margin-top-10 margin-bottom-30 white">Login</h4>
                    <br /> <br />
                    <?php include("_form.php") ?>
                </div>
            </div>
        </div>
    </body>

</html>