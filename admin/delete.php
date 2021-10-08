<?php
if($_SERVER['REQUEST_METHOD'] != 'GET'){
  die("you are lost");
}
require("_authentication.php");
  require("_database.php");

  if ($con->connect_error)
  {
    die("Database Error!".$con->connect_error);
  }

  $query = "DELETE FROM `login` WHERE `login`.`user_id`=". $_GET['id'];

  $con->query($query);

  header("Location:./dashboard.php");
 ?>
