<?php
include 'db_connect.php';
include 'functions.php';
if (isset($_POST['user_name']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $e_mail = $_POST['e_mail'];
    $school = $_POST['school'];
    $type = $_POST['type'];
    $country = $_POST['country'];
    $place = $_POST['place'];
    $query1 = "SELECT * FROM signup WHERE user_name = '$user_name' and password = '$password'";
    $rand = $user_name.$password;
    $rand_str = md5($rand);
    $result1 = mysql_query($query1);
    if (mysql_num_rows($result1))
    {
        header("location:signup.php?res=failed");
        exit();
    }
    $time = time();
    $query2 = "INSERT INTO users VALUES"."('','$user_name','$e_mail','$password','$school','$country','$place','$type','$time','$rand_str','0')";
    query($query2);
    $to = $e_mail;
    $sub = "Mail from Ieep";
    $from = "IEEP Team";
    $header = "From:".$from;
    mail( $to,$sub, $message,$header);
    /*
    
    if ( $type == 0 )//student
    {
        query("INSERT INTO students VALUES"."('','$user_name','$e_mail','$password','$school','$teacher','$time','$feeds','$activies')");
    }
    elseif ( $type == 1 )//teacher
    {
        query("INSERT INTO teachers VALUES"."('','$user_name','$e_mail','$password','$school','$type','$time','$rand_str','0')");
    }
    elseif ( $type == 2 )//org
    {
        query("INSERT INTO org VALUES"."('','$user_name','$e_mail','$password','$school','$type','$time','$rand_str','0')");
    }
   */
    if (! mysql_query($query))
    {
        echo "not done!";
    }
            header("location: login.html");
            exit();
}
?>