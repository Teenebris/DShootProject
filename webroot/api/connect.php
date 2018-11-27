<?php

  $hostname = "localhost";
  $login = "root";
  $password = "";
  $dbname = "strzelnica";

  $opentime = 6;
  $closetime = 22;

  $connect = mysqli_connect($hostname,$login,$password,$dbname);
  if(!$connect)
  {
    trigger_error(mysqli_connect_error());
    exit;
  }
?>
