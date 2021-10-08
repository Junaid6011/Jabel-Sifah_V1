<?php
session_start();

if(!isset($_SESSION['login'])){
  die('You are not authorized!');
}
 ?>
