<?php
include_once("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
if($_POST['action'] == "login"){
    if($log->login("logon", $_POST['username'], $_POST['password']) == true){
        header("location: playground/index.php");
    }else{
        header("location: login.php?failed=1");
    }
}

?>