<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IEEP | Profile</title>
<link rel="stylesheet" href="css/style.css" />
</head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">


 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       
       <a class="brand" href="index.html">IEEP</a>
       <a class="brand" style="position:relative;left:50%;margin-left:-170px;cursor:default;">Welcome to Earth</a>
       
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a><div class="nav-collapse" id="main-menu">
       
        <ul class="nav pull-right" id="main-menu-right">
          
          <!-- User Info-->
          <?php
        if ( $_SESSION['type'] == 1 )
        {
         ?>
         <li><a href="add_student.php">Add a student</a></li>
         <?
          }
		 ?>
          <li><a id="user" href="profile.php"><? echo $_SESSION['user_name']; ?></a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
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
<br /><br /><br />
<!--habitat of the species-->   
 <h3>You are on planet earth , <span id="habitat">Northern Hemisphere</span> <div class="pull-right">Day 361</div></h3>
 
 </div>


  <div class="row">
   <div class="span10">
 
      <div class="well" style="padding:2px;width:140px;height:120px;float:left">
        <!--profile pic-->
        <img src="img/default.jpg" style="height:100%;width:100%;" />
      </div>
     
    
      <div style="padding-left:8px;width:620px;float:left">
       <!-- User Info-->
       
       <h5 id="user">UserName</h5><br />
       <h5>Species : </h5><span id="species">Homosapien</span><br />
       <h5>Population : </h5><span id="population">1000,000,000</span><br />
       <h5>Found in : </h5><span id="found">Everywhere</span><br />
       
      </div>
 
       <!--Local Weather-->
      <div id="local_info" style="width:780px;float:left">
      
       <center><h5>Local Info</h5><br />
       You are in 
          <span id="location">Mangalore. </span>
       The weather is 
          <span id="weather">Sunny</span>
       and the temperature is 
          <span id="temperature">45*C</span></center>
      </div>
   </div>


  <div class="span2">
   <div class="well" style="padding:5px">
   <h5>Planet Earth</h5><br /><br />
  <a class="brand" href="profile_earth.php?category=population">Population</a><br />
  <a class="brand" href="profile_earth.php?category=temperature">Global Temperature</a><br />
  <a class="brand" href="profile_earth.php?category=mountains">Mountains</a><br />
  <a class="brand" href="profile_earth.php?category=oceans">Oceans</a><br />
  <a class="brand" href="profile_earth.php?category=rivers">Rivers</a><br />
  <a class="brand" href="profile_earth.php?category=glaciers">Glaciers</a><br />
  <a class="brand" href="profile_earth.php?category=lakes">Lakes</a><br />
  <a class="brand" href="profile_earth.php?category=species">Species</a><br />
  </div>
  </div>

  </div>
  
 <div class="row">
 <div class="span12">
 <center><h5>Meet Fellow Species!</h5></center><br />
   <div class="navbar">
    <div class="navbar-inner">
     <div class="container">
     
     <ul class="nav" id="main-menu-left">
     
   <li>  <a class="nav" href="profile_species.php?species=penguins">Penguins</a></li>
   <li>  <a class="nav" href="profile_species.php?species=polarbears">Polar Bears</a></li>
   <li>  <a class="nav" href="profile_species.php?species=parrots">Parrots</a></li>
   <li>  <a class="nav" href="profile_species.php?species=lions">Lions</a></li>
   <li>  <a class="nav" href="profile_species.php?species=tigers">Tigers</a></li>
   <li>  <a class="nav" href="profile_species.php?species=cats">Cats</a></li>
   <li>  <a class="nav" href="profile_species.php?species=sparrows">Sparrows</a></li>
   <li>  <a class="nav" href="profile_species.php?species=dogs">Dogs</a></li>
   <li>  <a class="nav" href="profile_species.php?species=pigeons">Pigeons</a></li>
   <li>  <a class="nav" href="profile_species.php?species=peacocks">Peacocks</a></li>
   <li>  <a class="nav" href="profile_species.php?species=leopards">Leopards</a></li>
   <li>  <a class="nav" href="profile_species.php?species=honeybees">Honey Bees</a></li>
   <li>  <a class="nav" href="profile_species.php?species=walrus">Walrus</a></li>
   <li>  <a class="nav" href="profile_species.php?species=kiwis">Kiwis</a></li>
   <li>  <a class="nav" href="profile_species.php?species=zebras">Zebras</a></li>
   
  </ul>
     </div>
    </div>
   </div>
 </div>
 
 </div> 
  
  
 
</section>



<div class="navbar navbar-fixed-bottom">
   <div class="navbar-inner" style="text-align:center">
     <div class="container">
     <div class="nav-collapse" id="main-menu">
        <div class="btn-group">
  <button class="btn" onclick="window.open ('about.html','_self',false)">About</button>
  <button class="btn" onclick="window.open ('approach.html','_self',false)">Approach</button>
  <button class="btn" onclick="window.open ('research.html','_self',false)">Research</button>
  <button class="btn" onclick="window.open ('team.html','_self',false)">Team</button>
  <button class="btn" onclick="window.open ('contact.html','_self',false)">Contact Us</button>
  <button class="btn" onclick="window.open ('faq.html','_self',false)">FAQs</button>


</div>
        
       </div>
     
     </div></div></div>

  <br><br><br><br><br><br><br><br>
       
   
<br><br><br><br>


    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

  

</body>
</html>
