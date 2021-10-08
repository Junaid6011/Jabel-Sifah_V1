<?php
  if (!($_SERVER["REQUEST_METHOD"] == "POST"))
  {
    die("You are lost!");
  }

  $con = new mysqli('50.62.209.150:3306','hashamzafar','Metis123@@','login_db');


  if ($con->connect_error)
  {
    die("Database Error!".$con->connect_error);
  }

  require('_service.php');

  $get_user = "(SELECT `login`.`user_id`,`login`.`is_active`,`login`.`expiry_date`,`login`.`expiry_time` FROM `login` WHERE `login`.`email`='".strtolower($_POST['email'])."' AND `login`.`password`='".$_POST['password']."')";

  $users = $con->query($get_user);

  if($users->num_rows > 0){

      $row = mysqli_fetch_assoc($users);

      if((strtotime($row['expiry_date']) < strtotime(date('Y-m-d'))))
      {
        $update = "UPDATE `login` SET `is_active`=0 WHERE `user_id`=".$row['user_id'];
        $con->query($update);
        header("Location:login.php?error=e343");
        die();
      }

      if($row['is_active'] == 0){
        header("Location:login.php?error=e343");
        die();
      }

      $user = array('user_id'=>$row['user_id'],'is_active'=>$row['is_active'],'expiry_date'=>$row['expiry_date'],'expiry_time'=>$row['expiry_time']);
      $get_services = "SELECT `service`.`name` from `login_service_table`,`service` WHERE `service`.`id` = `login_service_table`.`service_fk` AND `login_service_table`.`login_fk` =".$row['user_id'];
      $services = $con->query($get_services);

      if($services->num_rows > 0){
        $services_name =array();
        while( $row = mysqli_fetch_assoc($services)){
          array_push($services_name, $row['name']);
        }
        session_start();
        $_SESSION['services'] = $services_name;
      }

      foreach ($_SESSION['services'] as $name) {
        if($name == $service){
          $_SESSION['login'] = true;
          $_SESSION["time"] = time();
          $_SESSION["user"] = $user;

          $user_info = "INSERT INTO `logs`(`user_id`, `IP`, `service_name`,`date_time`) VALUES (".$user['user_id'].",'".$_SERVER['REMOTE_ADDR']."','$name','".date('Y-m-d H:i:s')."')";

          $con->query($user_info);
          header("Location:index.php");
        }
      }

      header("Location:login.php?error=e341");
  }
  else {
     header("Location:login.php?error=e342");
   }
 ?>
