<?php
  if (!($_SERVER["REQUEST_METHOD"] == "POST"))
  {
    die("You are lost!");
  }

  $con = new mysqli('50.62.209.150:3306','demodb','demodb@123','login_db');

  if ($con->connect_error)
  {
    die("Database Error!".$con->connect_error);
  }

  $service = "iol";
  $number_Services = 7;

  $get_service_id = "(SELECT `service`.`id` from `service` WHERE `service`.`name`='".$service."')";

  $get_user_id = "(SELECT `login`.`user_id` FROM `login` WHERE `login`.`email`='".strtolower($_POST['email'])."' AND `login`.`password`='".$_POST['password']."')";

 //$query = "SELECT `login_fk` FROM `login_service_table` WHERE `login_service_table`.`login_fk` = ".$get_user_id." AND `login_service_table`.`service_fk` =".$get_service_id.";";

  $query = "SELECT `login_fk` FROM `login_service_table` WHERE `login_service_table`.`login_fk` = ".$get_user_id.";";

  $result = $con->query($query);

  $user_id = $result->fetch_assoc()["login_fk"];

  if($result->num_rows == $number_Services)
  {
    session_start();
    $_SESSION['SU'] = true;
    $_SESSION['login'] = $user_id;
    $_SESSION["time"] = time();
    header("Location:index.php");
  }
  elseif ($result->num_rows > 0 and $result->num_rows < $number_Services) {

    $query = "SELECT `service_fk` FROM `login_service_table` WHERE `login_service_table`.`service_fk` =".$get_service_id." AND `login_service_table`.`login_fk`=".$user_id.";";

    $result_service = $con->query($query);

    if($result_service->num_rows > 0)
    {
      session_start();
      $_SESSION['service'] = $service;
      $_SESSION['login'] = $user_id;
      $_SESSION["time"] = time();
      header("Location:index.php");
    }
    else {
      header("Location:login.php?error=e341");
    }
  }
  else {
    header("Location:login.php?error=e342");
  }
 ?>
