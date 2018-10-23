<?php

  $hostname = "localhost";
  $login = "root";
  $password = "";
  $dbname = "strzelnica";

  $connect = mysqli_connect($hostname,$login,$password,$dbname);
  if(!$connect)
  {
    trigger_error(mysqli_connect_error());
    exit;
  }
?>
