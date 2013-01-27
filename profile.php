<?php include_once 'include/authorize.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IEEP | Profile</title>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/profile.css" />

</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80" onload="counter();temp_poll();date();">


 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">

       <a class="brand" href="index.php">The Green Playground</a>
       <a class="brand" style="position:relative;left:50%;margin-left:-300px;cursor:default;">Welcome to Earth</a>

       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a><div class="nav-collapse" id="main-menu">

        <ul class="nav pull-right" id="main-menu-right">

          <!-- User Info-->



          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $log->user["username"]; ?><b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="editprofile.php">Profile Settings</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>

       </div>
     </div>
   </div>
 </div>

    <div class="container">


<section id="typography">
  <div class="page-header">

<br />

 <div class="tiles">

    <div class="tile">
      <h3>Local Weather</h3>
      <div id="weather-data" style="text-align:right;font-family: 'Raleway', sans-serif;color:#000">Loading...</div>
    </div>

<div class="void-tile"></div>

    <div class="tile">
      <h3>World Population</h3>
      <div id="poo" style="text-align:center;font-family: 'Raleway', sans-serif;color:#000000"></div>
    </div>

<div class="void-tile"></div>

   <div class="tile">
      <h3>Poll</h3>
      <div id="poll" style="text-align:right;font-family: 'Raleway', sans-serif;color:#000"></div>
    </div>

<div class="void-tile"></div>

<div class="tile"  title="The average combined global land and ocean surface temperature for November 2012">
      <h3>Global Temperature</h3>
      <div style="text-align:center;font-family: 'Raleway', sans-serif;color:#000">13.57*C</div>
    </div>

<div class="void-tile"></div>

<div class="tile" id="playground" onclick="window.open('playground/index.html','_self');">
      <h3>Playground >></h3>
    </div>

 </div>

 <br />

<!--habitat of the species-->
 <h3 style="margin-left:310px;margin-right:50px;color:#FFFFFF;">You are on planet earth , <span id="habitat">Northern Hemisphere</span>

  <div class="pull-right" id="todate" style="color:#317eac;display:inline;font-size:18px">
  today's date
  </div>

 </h3>
 </div>


  <div class="row">
   <div class="span10">

      <div class="well" style="padding:2px;width:280px;height:210px;float:left;margin-left:20px;margin-top:-135px;box-shadow: 0px 0px 5px #888888;">
        <!--profile pic-->
        <img src="img/default.jpg" style="height:100%;width:100%;" />
      </div>


      <div style="padding-left:8px;width:220px;float:left">
       <!-- User Info-->

       <h5><?php echo $log->user["username"]; ?> </h5><br />
       <h5>Species : </h5><span id="species">Homosapien</span><br />
       <h5>Found in : </h5><span id="found">Everywhere</span><br />

      </div>

       <!--Local Weather-->

   </div>




  </div>





</section>



<div class="navbar navbar-fixed-bottom">
   <div class="navbar-inner" style="text-align:center">
     <div class="container">
     <div class="nav-collapse" id="main-menu">
        <div class="btn-group">
  <button class="btn" onclick="window.open ('about.php','_self',false)">About</button>
  <button class="btn" onclick="window.open ('approach.php','_self',false)">Approach</button>
  <button class="btn" onclick="window.open ('research.php','_self',false)">Research</button>
  <button class="btn" onclick="window.open ('team.php','_self',false)">Team</button>
  <button class="btn" onclick="window.open ('contact.php','_self',false)">Contact Us</button>
  <button class="btn" onclick="window.open ('faq.php','_self',false)">FAQs</button>
</div>

       </div>

     </div></div></div>



<br><br><br><br>


    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/load_tiles.js"></script>




</body>
</html>
