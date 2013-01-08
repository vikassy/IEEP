<?php 
include 'db_connect.php';
session_start();
if (isset($_SESSION['user_name']))
{
    header("location: profile.php");
}
if (isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $query = "SELECT user_name, password FROM users WHERE user_name = '$user_name' AND password = '$password'";
if ( mysql_num_rows(mysql_query($query)) == 0 )
{
    header("location: login.php?failed=1");
}
else
{
    $_SESSION['user_name'] = $user_name;
    header("location: profile.php");
    
}
}
?>
