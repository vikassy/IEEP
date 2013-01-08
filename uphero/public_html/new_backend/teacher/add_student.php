<?php
include '../db_connect.php';
include '../functions.php';
if (isset($_POST['user_name']))
{
    $user_name = sanitizeString($_POST['user_name']);
    $password = sanitizeString($_POST['password']);
    $re_password = sanitizeString($_POST['re_password']);
    $e_mail = sanitizeString($_POST['e_mail']);
    $school = sanitizeString($_POST['school']);
    $type = sanitizeString($_POST['type']);
    $country = $_POST['country'];
    $place = $_POST['place'];
    $query1 = "SELECT * FROM signup WHERE user_name = '$user_name' and password = '$password'";
    $rand = $user_name.$password;
    $rand_str = md5($rand);
    $result1 = mysql_query($query1);
    if (mysql_num_rows($result1))
    {
        //header("location:index.php?res=failed&reason=username_taken");
        echo "Username and password combination already takes."; 
        
    }
    $time = time();
    $query2 = "INSERT INTO users VALUES"."('','$user_name','$e_mail','$password','$school','$country','$place','$type','$time','$rand_str','1')";
    mysql_query($query2);
   
    if (! mysql_query($query))
    {
        echo "not done!";
    }
            header("location: ../index.php?res=added");
            
}
?>