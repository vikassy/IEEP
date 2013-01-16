<?php
include 'include/unauthorize.php';
include("class.login.php");
$log=new logmein();
$log->encrypt=true;
$flag=1;
if (isset($_POST['id']))
{
    if(isset($_POST['name']))
    {
        $tbl=$_POST['id'];
        if($tbl=="school")
        {
            $name=$_POST['name'];
            $result1=$log->qry("SELECT * FROM ".$tbl." WHERE name = '?'",$name);
        }
        elseif($tbl=="student")
        {
            $username=$_POST['username'];
            $result1=$log->qry("SELECT * FROM ".$tbl." WHERE username = '?'",$username);
        }
        
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
                 $subject="About Your TheGreenPlayground Account";
                $msg="Hello Mr./Mrs.".$name.",\nYour school has now been registered in TheGreenPlayground.
The students of your school can now signup at http://www.thegreenplayground.org/signup.php and access their profile and courses.
Your may contact us ieep.nitk@gmail.com for further infromation. \nThank You, \nTheGreenPlayground Team";
                 $final=$log->composeMail($pr_email,$msg,$subject);
            }
            elseif($tbl=="student")
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $school=$_POST['school'];
                $password=md5($_POST['password']);
                $q1=$_POST['q1'];
                $a1=$_POST['a1'];
                $a1=strtolower($a1);
                $q2=$_POST['q2'];
                $a2=$_POST['a2'];
                $a2=strtolower($a2);
                $result2=$log->qry("INSERT INTO ".$tbl." (name,username,email,school,password,q1,a1,q2,a2) VALUES
                           ('?', '?', '?', '?', '?', '?', '?', '?', '?');",$name,$username,$email,$school,$password,$q1,$a1,$q2,$a2);
                $subject="About Your TheGreenPlayground Account";
                $msg="Hello ".$name."\nYour Green Playground account has been created.
You can login now at http://www.thegreenplayground.org/login.php and access your profile and your courses.
Your username is ".$username."\nThank You,
\nTheGreenPlayground Team";
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