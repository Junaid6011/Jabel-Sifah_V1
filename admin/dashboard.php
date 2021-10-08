<?php
require("_authentication.php");
require("_database.php");
if ($con->connect_error)
{
  die("Database Error!".$con->connect_error);
}

$query= "SELECT `login`.`user_id`,`login`.`email`,`is_active`,`create_date`,`expiry_time`,`expiry_date`, `login`.`password`, GROUP_CONCAT(name SEPARATOR ',') as `services` , GROUP_CONCAT(service.id SEPARATOR ',') as `services_id`  from `login`,`service`,`login_service_table` WHERE `login`.`user_id` = `login_service_table`.`login_fk` AND `login_service_table`.`service_fk` = `service`.`id` GROUP By `user_id`;";
$queryServices= "SELECT * FROM `service`";
$result = $con->query($query);
$resultService = $con->query($queryServices);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <style>
    body {
      font-size: 13px;
    }

    .btn-sm {
      font-size: 12px;
    }

    .inline-block {
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
    }
  </style>


  <!-- <script>
  $(".bbb").click(function () {
    $('html, body').animate({
      scrollTop: $(".userdetails").offset().top
    }, 2000);
  });
</script> -->

  <body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Admin</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">dashboard </a>
          </li>
        </ul>
        <form class="form-inline">
          <a class="btn btn-outline-success my-2 my-sm-0" href="./index.php?logout=true">Logout</a>
        </form>
      </div>
    </nav>

    <br />
    <div class="container">


      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home"> Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#menu1"> Create Service</a>
        </li>

      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane  active" id="home">

          <div class="card bg-dark text-white">

            <div class="card-body">

              <div class="row">
                <div class="col-lg-12">
                  <form class="form-inline1" action="./create.php" method="post">

                    <div class="row">
                      <div class="col-lg-8">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control form-control-sm" type="email" name="email" value="" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Password</label>
                              <input class="form-control form-control-sm" type="text" name="password" value="" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Expiry Time (Minutes)</label>
                              <input class="form-control form-control-sm" type="text" name="expiry_time" value="" required>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Expiry Date (YYYY-MM-DD)</label>
                              <input class="form-control form-control-sm" type="date" name="expiry_date" value="" required>
                            </div>
                          </div>

                          <div class="col-lg-12">

                            <div class="form-group">
                              <!-- <label style="opacity: 0;"> 1 </label> <br /> -->
                              <input class="btn btn-info btn-sm" type="submit" name="" value="Add User">
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label>Services</label>
                          <select class="form-control form-control-sm" name="services[]" multiple required style="min-height: 105px;">
                            <?php while ($row = mysqli_fetch_array($resultService)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                              }
                              mysqli_data_seek($resultService, 0);?>
                          </select>

                        </div>
                      </div>
                    </div>






                  </form>
                </div>



              </div>

            </div>
          </div>


        </div>
        <div class="tab-pane  fade" id="menu1">
          <div class="card bg-dark text-white">

            <div class="card-body">

              <div class="row">
                <div class="col-lg-6">
                  <form class="form-inline1" action="./createService.php" method="post">

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Create Service</label>
                          <input type="text" class="form-control form-control-sm" name="service" value="" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <!-- <label style="opacity: 0;"> 1 </label> <br /> -->
                          <input type="submit" class="btn btn-success  btn-sm" name="" value="Add Service">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col-lg-6">
                  <form class="form-inline1" action="./deleteService.php" method="post">
                    <div class="form-group">
                      <label>Delete Sevice </label>
                      <select class="form-control form-control-sm" name="service" required>
                        <?php while ($row = mysqli_fetch_array($resultService)) {
                          echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                        }?>
                      </select> </div>
                    <input type="submit" class="btn btn-danger  btn-sm" name="" value="Delete">


                  </form>


                </div>
              </div>
            </div>
          </div>


        </div>


      </div>




















      <hr />
      <div class="card">
        <h5 class="card-header">Users Listing</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 table-responsive">



              <table class='table table-bordered table-hover table-sm table-striped'>
                <thead class="thead-dark text-uppercase">
                  <tr>
                    <!-- <th scope="col">Id</th> -->
                    <th scope="col">Email</th>
                    <th scope="col">password</th>
                    <th scope="col">service</th>
                    <th scope="col">status</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col">Expiry (Min)</th>
                    <th scope="col">Expiry Date</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <!-- <td><?php echo $row['user_id'] ?></td> -->
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                      <div style="max-width:200px;"><?php echo str_replace(',', " / ",$row['services'] ) ?> </div>
                    </td>
                    <td class='<?php echo $row["is_active"]? "table-success1": "table-danger1" ?>'>
                      <div class='<?php echo $row["is_active"]? "badge badge-secondary": "badge badge-danger" ?>'>
                        <?php echo $row['is_active']? "Active": "Inactive" ?> </div>
                    </td>
                    <td><?php echo $row['create_date'] ?></td>
                    <td><?php echo $row['expiry_time'] ?></td>
                    <td><?php echo $row['expiry_date'] ?></td>
                    <td><button class='btn btn-info btn-sm  bbb'
                        onclick="updateUser('<?php echo $row['user_id'] ?>','<?php echo $row['email'] ?>','<?php echo $row['password'] ?>','<?php echo $row["is_active"]?>','<?php echo $row['expiry_time'] ?>','<?php echo $row['expiry_date'] ?>' ,'<?php echo $row['services_id'] ?>')">Edit</button>
                      <a class='btn btn-info btn-sm' href='./dashboard.php?id=<?php echo $row['user_id']?>'>Details</a>
                      <button class='btn btn-info btn-sm' onclick='confirmFunction(<?php echo $row['user_id'] ?>)'>Delete</button></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>

        </div>
      </div>






      <?php if(isset($_GET['id'])){
      $query = "SELECT * FROM `logs` WHERE `logs`.`user_id`=".$_GET['id'].";";
      $logResults = $con->query($query);
      $userQuery = "SELECT `email`,`is_active` FROM `login` WHERE `user_id`=".$_GET['id'];
      $userResult = mysqli_fetch_array($con->query($userQuery));
     ?>

      <hr />


      <div class="card userdetails">
        <h5 class="card-header">User Details</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 table-responsive">


              <a href="./dashboard.php" class="float-right btn btn-warning btn-sm">Close</a>
              <div class="row">
                <div class="col-lg-3 ">
                  <p> <b>Email:</b> <br /> <?php echo $userResult['email'] ?></p>
                </div>
                <div class="col-lg-3 ">
                  <p> <b>Status:</b> <br /> <span style='color:<?php echo $userResult["is_active"]? "green": "red" ?>'><?php echo $userResult['is_active']? "Active": "Inactive" ?></span>
                  </p>
                </div>
                <div class="col-lg-3 ">
                  <p> <b>Login Attempts:</b> <br /> <?php echo $logResults->num_rows?></p>
                </div>
              </div>
              <hr />




              <h6>Login Details</h6>
              <table class='table table-bordered table-hover table-sm '>
                <thead class="thead-dark text-uppercase">
                  <tr>
                    <th scope="col">Number</th>
                    <th scope="col">IP Address</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date and Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                 $i = 1;
                 while ($row = mysqli_fetch_array($logResults)) {
                   ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td>
                      <input class="ip<?php echo $i ?> " value="<?php echo $row['IP'] ?>">
                      <button class="send btn btn-sm btn-info" id="<?php echo $i ?>" style="margin-right:20px;">Location</button>
                      <div style="margin-top: 5px">
                        <span class="badge badge-light" id="city<?php echo $i?>" title="city"></span>
                        <span class="badge badge-light" id="country_name<?php echo $i?>" title="country_name"></span>
                        <span class="badge badge-light" id="region<?php echo $i?>" title="region"></span>
                        <span class="badge badge-light" id="org<?php echo $i?>" title="org"></span>
                        <span class="badge badge-light" id="timezone<?php echo $i?>" title="timezone"></span>


                        <span class="badge  " id="latitude<?php echo $i?>" title="latitude"></span>
                        <span class="badge  " id="longitude<?php echo $i?>" title="longitude"></span>


                      </div>
                    </td>
                    <td><?php echo $row['service_name'] ?></td>
                    <td><?php echo $row['date_time'] ?></td>
                  </tr>
                  <?php $i++;} ?>
                </tbody>
              </table>


            </div>

          </div>

        </div>
      </div>




      <?php } ?>
      <script type="text/javascript">
        function confirmFunction(id) {
          if (confirm("Are you sure want to delete record?")) {
            window.location = `./delete.php?id=${id}`;
          }
        }
      </script>



      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




      <script>


        $('.send').on('click', function () {
          dId = this.id
          $.getJSON('https://ipapi.co/' + $('.ip' + dId).val() + '/json', function (data) {
            $('#city' + dId).text(data.city);
            $('#country_name' + dId).text(data.country_name);
            $('#region' + dId).text(data.region);
            $('#timezone' + dId).text(data.timezone);
            $('#org' + dId).text(data.org);

            $('#latitude' + dId).text(data.latitude);
            $('#longitude' + dId).text(data.longitude);

          });

        });
      </script>












      <!-- Modal -->
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form" action="./edit.php" method="post">
                <input type="text" name="update_id" value="" hidden>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control form-control-sm" type="email" name="email" value="" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control form-control-sm" type="text" name="password" value="" required>
                </div>
                <div class="form-group text-left">
                  <label>Status: <span id='updateCheckboxLabel'></span></label>
                  <input class="form-control1 form-control-sm1" type="checkbox" name="is_active" value="1">
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group my_services">
                      <label>Services : </label> <br />

                      <?php
                      $queryServices= "SELECT * FROM `service`";
                      $result = $con->query($query);
                      $resultService = $con->query($queryServices);
                     
                     while ($row = mysqli_fetch_array($resultService)) {
                      ?>
                      <div class="inline-block">
                        <input name="services[]" type="checkbox" value="<?php  echo $row[0]; ?>" /> <?php echo $row[1] ; ?></div>
                      <?php }
                         mysqli_data_seek($resultService, 0);?>

                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Expiry Time (Minutes)</label>
                  <input class="form-control form-control-sm" type="text" name="expiry_time" value="" required>
                </div>
                <div class="form-group">
                  <label>Expiry Date</label>
                  <input class="form-control form-control-sm" type="date" name="expiry_date" value="" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        const updateUser = (user_id, email, password, is_active, expiry_time, expiry_date, services) => {
          let updateInput = $("#updateModal :input")
          const serviceArray = services.split(',');
          for (let i = 0; i < serviceArray.length; i++) {
            console.log(serviceArray[i])
            $('.my_services  input[type=checkbox][value="' + serviceArray[i] + '"]').prop('checked', true);
            // $(".my_services value=+serviceArray[i]).attr("selected");
            // $("#my_services").val(serviceArray[i]).attr("selected");

          }
          updateInput.eq(1).val(user_id)
          updateInput.eq(2).val(email)
          updateInput.eq(3).val(password)
          $("#updateCheckboxLabel").html(is_active == 1 ? "Active" : "Inactive")
          $("#updateCheckboxLabel").css("color", (is_active == 1 ? "green" : "red"))
          $('input[name=is_active]').val('000000').prop("checked", is_active == 1 ? true : false)
          $('input[name=expiry_time]').val(expiry_time)
          $('input[name=expiry_date]').val(expiry_date)

          $("#updateModal").modal('show')
        }
      </script>
    </div>
  </body>

</html>