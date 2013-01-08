<?php
include 'db_connect.php';
if (isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $e_mail = $_POST['e_mail'];
    $school = $_POST['school'];
    $type = $_POST['type'];
    $query1 = "SELECT * FROM signup WHERE user_name = '$user_name'";
    $rand = $user_name.$password;
    $rand_str = md5($rand);
    $result1 = mysql_query($query1);
    if (mysql_num_rows($result1))
    {
        header("location:register.php?res=failed");
        exit();
    }
    $time = time();
    $query2 = "INSERT INTO users VALUES"."('','$user_name','$e_mail','$password','$school','$type','$time','$rand_str','0')";
    mysql_query($query2);
   
    if (! mysql_query($query))
    {
        echo "not done!";
    }
            header("location: login.php");
            exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Page</title>
</head>
<body>

<a href="#" id="student" class="select">Student</a>|
<a href="#" id ="teacher" class="select">Teacher</a>|
<a href="#" id="org" class="select">Organization</a>
<h1>Register Now </h1>
<!-- for students -->
<div id="student">
<h2>Students</h2>
<form name = "register" action ='signup.php' method = 'post' id="student" style="display:block;">
    <table>
        <tr><td>User Name*:</td><td><input type="text"  name = 'user_name' id='full_name'/></td></tr>
        <tr><td>Email ID:</td><td><input type="text"  id="email" name = 'e_mail' /></td></tr>
        <tr><td>School*:</td><td><input type="text"  id="college" name = 'school'/></td></tr>
        <tr><td>Password*:</td><td><input type="password" id="password" name = 'password'/></td></tr>
        <tr><td>Confirm*:</td><td><input type="password" id="conpassword" name = 're_password'/></td></tr>
    </table>
    <input type = "hidden" name="type" value="0"/>
    <input type = 'submit' value ="Register"/>
</form>
</div>
<!-- for teachers -->
<div id="teacher"  style="display:block;">
<h2>Teachers</h2>
<form name = "register" action ='signup.php' method = 'post' id="teacher">
    <table>
        <tr><td>User Name*:</td><td><input type="text"  name = 'user_name' id='full_name'/></td></tr>
        <tr><td>Email ID:</td><td><input type="text"  id="email" name = 'e_mail' /></td></tr>
        <tr><td>School*:</td><td><input type="text"  id="college" name = 'school'/></td></tr>
        <tr><td>Password*:</td><td><input type="password" id="password" name = 'password'/></td></tr>
        <tr><td>Confirm*:</td><td><input type="password" id="conpassword" name = 're_password'/></td></tr>
    </table>
    <input type = "hidden" name="type" value="1"/>
    <input type = 'submit' value ="Register"/>
</form>
</div>
<!-- for org -->
<div id="org"  style="display:block;">
<h2>Organization</h2>
<form name = "register" action ='signup.php' method = 'post' id="org">
    <table>
        <tr><td>User Name*:</td><td><input type="text"  name = 'user_name' id='full_name'/></td></tr>
        <tr><td>Email ID:</td><td><input type="text"  id="email" name = 'e_mail' /></td></tr>
        <tr><td>Org name*:</td><td><input type="text"  id="college" name = 'school'/></td></tr>
        <tr><td>Password*:</td><td><input type="password" id="password" name = 'password'/></td></tr>
        <tr><td>Confirm*:</td><td><input type="password" id="conpassword" name = 're_password'/></td></tr>
    </table>
    <input type = "hidden" name="type" value="2"/>
    <input type = 'submit' value ="Register"/>
</form>
</div>
</body>
</html>