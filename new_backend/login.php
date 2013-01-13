<?php 
include 'db_connect.php';
include 'functions.php';
session_start();
if (isset($_SESSION['user_name']))
{
    header("location: index.php");
}
if (isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
if ( mysql_num_rows(mysql_query($query)) == 0 )
{
    header("location: login.php?failed=1");
}
else
{
    $res = query($query);
    $row = mysql_fetch_assoc($res);
    $_SESSION['user_name'] = $user_name;
    $_SESSION['type'] = $row['type'];
    header("location: index.php");
    
}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Login Page</title>
</head>

<body>
<form action="login.php" method="post" name="login"  >
<table>
<tr><td style="color: #000F00;">Username: </td><td><input type="text" name = 'user_name'/></td></tr>
<tr><td style="color: #000F00;">Password: </td><td><input type="password" name ="password" /></td></tr>
</table>
<input type="submit"  value="login"/>
</form>
 </div>  
</body>
</html>