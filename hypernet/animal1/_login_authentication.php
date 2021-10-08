<?php
session_start();
require('_service.php');
if($_SERVER["REQUEST_METHOD"] == "GET")
{
  if (isset($_GET['logout']))
  {
    if ($_GET['logout'])
    {
      session_destroy();
    }
  }
}
if (isset($_SESSION['login']))
{
  foreach ($_SESSION['services'] as $name) {
    if($name == $service){
      header("Location:index.php");
    }
  }
} 
 ?>