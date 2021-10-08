<?php
if(isset($_GET['logout'])){
  session_start();
  session_destroy();
}

if(isset($_GET['error'])){
  echo "<script>alert('Email or Password is incorrect!')</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>User Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="    background-image: url(bg1.jpg);
background-size: cover;">

  <div class="container">
    <br /> <br /> <br /> <br /> <br />
    <div class="card bg-dark text-white" style="max-width: 400px; margin: auto;">
      <h5 class="card-header">Admin Login</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-lg-12">

            <form class="" action="./adminLogin.php" method="post">


              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="" placeholder="Email">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="" placeholder="Password">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success  btn-sm1" value="Log In">
                  </div>
                </div>
              </div>


            </form>



          </div>


        </div>
      </div>
    </div>

  </div>

</body>

</html>