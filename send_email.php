<?php
   
    include("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
    //$a =  $log->passwordreset($_POST['email'],"logon","password","email");
    if ($log->passwordreset($_POST['email'],"student","password","email")== 1){
        header("location: login.php?retry=1");
    }
    else{
        header("location: login.php?xyz=1");
    }
?>