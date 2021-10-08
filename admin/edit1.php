<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  die("you are lost");
}
require("_authentication.php");
require("_database.php");

if ($con->connect_error)
{
  die("Database Error!".$con->connect_error);
}

$query = "UPDATE `login` SET `email`='".$_POST['email']."',`expiry_date`='".$_POST['expiry_date']."',`expiry_time`='".$_POST['expiry_time']."',`is_active`='".((isset($_POST['is_active'])) ? 1 : 0)."',`password`='".$_POST['password']."' WHERE `login`.`user_id` = ".$_POST['update_id'];

$result = $con->query($query);

if($result){
  header("Location:./dashboard.php");
}
else {
  die("Edit request failed!");
}
 ?>
