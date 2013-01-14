<?php

include("class.login.php");
$log=new logmein();
$log->encrypt=true;
$flag=1;
if (isset($_POST['id']))
{
    if(isset($_POST['name']))
    {
        $tbl=$_POST['id'];
        $name=$_POST['name'];
        $result1=$log->qry("SELECT * FROM ".$tbl." WHERE name = '?'",$name);
        $row1=mysql_fetch_assoc($result1);
        
        if(!$row1)
        {
            if($tbl=="school")
            {
                 $pr_name=$_POST['pr_name'];
                 $pr_email=$_POST['pr_email'];
                 $tr_name=$_POST['tr_name'];
                 $tr_email=$_POST['tr_email'];
                 $address=$_POST['address'];
                 $city=$_POST['city'];
                 $country=$_POST['country'];
                 $result2=$log->qry("INSERT INTO ".$tbl." (name,pr_name,pr_email,tr_name,tr_email,address,city,country) VALUES
                           ('?', '?', '?', '?', '?', '?', '?', '?');",$name,$pr_name,$pr_email,$tr_name,$tr_email,$address,$city,$country);
                 $final=$log->composeMail($email,$msg,$subject);
            }
            elseif($tbl=="student")
            {
                $email=$_POST['email'];
                $school=$_POST['school'];
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                $q1=$_POST['q1'];
                $a1=$_POST['a1'];
                $a1=strtolower($a1);
                $q2=$_POST['q2'];
                $a2=$_POST['a2'];
                $a2=strtolower($a2);
                $result2=$log->qry("INSERT INTO ".$tbl." (name,username,email,school,password,q1,a1,q2,a2) VALUES
                           ('?', '?', '?', '?', '?', '?', '?', '?', '?');",$name,$username,$email,$school,$password,$q1,$a1,$q2,$a2);
                $subject="About YourGreenPlayground Account";
                $msg="Hello ".$name."\n Your Green Playground account has been created. You can login now at http://link www.thegreenplayground.org//login.php
                        and access your profile and your courses. Your username is ".$username."\n Thank You, \n TheGreenPlayground Team";
                if($email)
                $final=$log->composeMail($email,$msg,$subject);
            }
            if($final==1)
            {
                if($tbl=="student")
                {
                    header("location: login.php?success=1");
                }
                else
                {
                    header("location: signup.php?success=1");
                }
            }
            elseif($final==2||$final==3)
            {
                header("location: signup.php?err=1");
            }
            elseif(!$email)
            {
                header("location: login.php?success=1");
            }
        }
        else
        {
            //echo $tbl." has already Registered";
            header("location: signup.php?error=1");
        }
    }
}
?>