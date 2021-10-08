<?php
session_start();

require('_service.php');

if(!isset($_SESSION['user'])){
  header("Location:login.php");
  die();
}

if (!(isset($_SESSION['login'])) or ((time() - ($_SESSION['time'])) > $_SESSION['user']['expiry_time']*60) or !($_SESSION['user']['is_active']))
{
  session_destroy();

  if((strtotime($_SESSION['user']['expiry_date']) < strtotime(date('Y-m-d')))){
    header("Location:login.php?error=e345");
    die();
  }
  else {
    header("Location:login.php?error=e344");
    die();
  }

}
elseif ((isset($_SESSION['services'])))
{
  $auth = false;
  foreach ($_SESSION['services'] as $name) {
    if($name == $service){
      $auth = true;
    }
  }
  if (!$auth){
    header("Location:login.php");
  }
}
?>