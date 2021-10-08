<?php
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die("you are lost");
  }
  require("_database.php");

  if ($con->connect_error)
  {
    die("Database Error!".$con->connect_error);
  }
  $query = "SELECT * from `admin` WHERE `email`='".$_POST['email']."' AND `password`='".$_POST['password']."';";

  if(isset($_POST['submit'])){
    $result = $con->query($query);

    if($result->num_rows > 0){
      session_start();
      $_SESSION['login'] = 'true';
      header('Location: ./dashboard.php');
    }
    else{
      header("Location: ./index.php?error='true'");
    }
  }

 ?>
