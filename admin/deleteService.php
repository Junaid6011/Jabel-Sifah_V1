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
$query = "DELETE FROM `service` WHERE `service`.`id`=".$_POST['service'].";";

$con->query($query);

header("location:./dashboard.php");
 ?>
