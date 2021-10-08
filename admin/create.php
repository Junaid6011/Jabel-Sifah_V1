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
$query = "INSERT INTO `login`(`email`, `password`,`expiry_date`,`expiry_time`,`create_date`) VALUES ('".$_POST["email"]."','".$_POST["password"]."','".$_POST['expiry_date']."','".$_POST['expiry_time']."','".date("Y-m-d H:i:s")."')";

$con->query($query);
$lastUser = $con->insert_id;

foreach ($_POST['services'] as $service) {
  $query =  "INSERT INTO `login_service_table` VALUES($lastUser,$service);";
  $con->query($query);
}

header("location:./dashboard.php");

   ?>
