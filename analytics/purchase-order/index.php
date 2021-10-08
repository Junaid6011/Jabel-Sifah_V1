<!DOCTYPE html>
<?php require("_authentication.php") ?>
<html class="no-js before-run" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                var h = $(window).height() - 0;
                $('.frambox').height(h);
                $(window).resize(function () {
                    $('.frambox').height(h);
                });
            });
        </script>
    </head>

    <body class="">
        <div class="container-fluid text-center" style="max-width: 1300px;">
            <iframe class="frambox" src="https://app.powerbi.com/view?r=eyJrIjoiNGVjMjAwMDUtMDliNC00ZWQxLWFjM2QtNzAwYzFjYjE3YTc1IiwidCI6IjcwMjdmNDcxLTk0ODktNDY0NS1hNmU2LWY1NDc5MWEzNGU3NiIsImMiOjl9" style=" width: 100%;   border: 0px solid #000; vertical-align: top;"></iframe>
        </div>
    </body>

</html>