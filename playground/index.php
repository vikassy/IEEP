<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Playground</title>
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
</head>


<body onload="pageLoad()" onResize="resizeHandlers()">
<div id="weather-effects">
</div>
<div id="background-effects">
</div>
  <div class="container" id="header-container">
    <div class="row" id="header">
      <div class="onecol"  style="cursor:pointer;">  </div>
       <div class="onecol" > </div>
      <div class="eightcol">
        <h1>Playground</h1>
      </div>
      <div class="twocol  last">  <div id="user-name">Demo User</div></div>
    </div>
  </div>
  <br />
  <div class="container">
  <div class="row" >
    <div class="onecol"> </div>
    <div class="tencol" id="body-content">
  <h1>   Welcome to the Dashboard.</h1><br>
	<h2>Available Courses:</h2><br><br>
<br>


    
     <div class="course" onClick="window.location='course-101.php'">Environment 101</div>    <div class="course" onClick="window.location='course-101.php'">Environment 101</div>
     <br>
   <div class="course" onClick="window.location='course-101.php'">Environment 101</div>
     
     
     
    </div>
    <div class="onecol last"> </div>
  </div>
  <div  id="footer">
    <div class="row">
       <div class="elevencol"> &nbsp;</div>
      <div class="onecol last" onclick="slideEffectBox()"> <p id="tab"> Tools </p></div>
    </div>
    <div class="row" id="effect-box">
      <div class="twelvecol">
        <div class="level-marker" onClick="changeWeather('day');">Day</div>
        <div class="level-marker" onClick="changeWeather('night');">Night</div>
      </div>
    </div>
  </div>


</body>
</html>
