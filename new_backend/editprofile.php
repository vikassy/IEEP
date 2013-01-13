<?php
include_once"db_connect.php";
include_once"functions.php";
session_start();
if( !isset($_SESSION['user_name']) )
{
    header("location:login.php");
}
?>
<html>
<head>
<title>
    Edit profile
</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <form method="post" action="editprofile.php">
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
</body>
</html>