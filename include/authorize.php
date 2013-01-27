<?php
include("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
//echo $log->logincheck($_SESSION['loggedin'],"student", "password", "username");
  if ($log->logincheck($_SESSION['loggedin'],"student", "password", "username") != 1)
  {
    header("location: login.php?unauthorized=1");
  }
?>