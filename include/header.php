<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home|The Green Playground</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">


 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       
       <a class="brand" href="index.php">The Green Playground </a>
       
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a><div class="nav-collapse" id="main-menu">
       <?php 
       include("class.login.php");
       $log = new logmein();
        $log->encrypt = true; //set encryption
       if ($log->logincheck($_SESSION['loggedin'],"student", "password", "username") != 1) { ?>
        <ul class="nav pull-right" id="main-menu-right">
          <li><a onclick="window.open ('login.php','_self',false)">Login</a></li>
          <li><a onclick="window.open ('signup.php','_self',false)">Signup</a></li>
        </ul>
        <? }
        else {
           ?>
        <ul class="nav pull-right" id="main-menu-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $log->user["username"]; ?><b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="editprofile.php">Profile Settings</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <? } ?>

       </div>
     </div>
   </div>
 </div>

    <div class="container">    


<section id="typography">
  <div class="page-header">
<br /><br /><br />   