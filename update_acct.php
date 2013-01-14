<?php
    
    include("class.login.php");
    $log=new logmein();
    $log->encrypt=true;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=md5($password);
    $result=$log->qry("UPDATE student SET password='?' WHERE username='?'",$password,$username);
    header("location: login.php?change=1");

?>