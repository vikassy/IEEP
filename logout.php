<?php
include_once("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
$log->logout();
header("location: index.php")
?>