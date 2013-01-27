<?php
include("class.login.php");
$login = new logmein();
$login->encrypt = true; //set encryption
// echo $login->logincheck($_SESSION['loggedin'],"student", "password", "username");
  if ($login->logincheck($_SESSION['loggedin'],"student", "password", "username") == 1)
  {
    header("location: profile.php");
  }
// echo $_SESSION['loggedin'];
?>