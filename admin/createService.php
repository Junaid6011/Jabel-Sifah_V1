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
$query = "INSERT INTO `service`(`name`) VALUES ('".$_POST["service"]."')";

$con->query($query);

header("location:./dashboard.php");
 ?>
