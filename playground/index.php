<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Playground</title>
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/tiles_playgrnd.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/load_tiles.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
</head>


<body onLoad="pageLoad();counter();temp_poll();date();" onResize="resizeHandlers()">
<div id="weather-effects">
</div>
<div id="background-effects">
</div>
  <div class="container" id="header-container">
    <div class="row" id="header">
      <div class="fourcol" onClick="window.location='../index.php'" style="cursor:pointer;"><h2>The Green Playground</h2></div>
       
      <div class="sixcol">
        <h1 style="margin-left:-180px">Playground</h1>
      </div>
      <div class="twocol  last">  <div id="user-name">Guest User</div></div>
    </div>
  </div>
  <br />
  <div class="container">
  <div class="row" >
    <div class="onecol"> </div>
    <div class="tencol" id="body-content">
  <h1>   Welcome to the Dashboard.</h1><br>
	<h4>This is a work in progress and will be available completely at the end of January 2013. 
    Meanwhile you can browse through Environment 101 and see the interactive visualizations</h4><br><br>
<br>


    
     <div class="course" onClick="window.location='course-101.php'">Environment 101</div>&nbsp;
     <div class="course" title="Course content to be added">Environment 102</div>&nbsp;
     <div class="course" title="Course content to be added">Environment 103</div>&nbsp;
     <div class="course" title="Course content to be added">Environment 104</div>
     
     
     
   
    
  
   <div class="tiles">

    <div class="tile">
      <h3>Local Weather</h3>
      <div id="weather-data" style="text-align:right;font-family: 'Raleway', sans-serif;">Loading...</div>
    </div>

<div class="void-tile"></div>

    <div class="tile">
      <h3>World Population</h3>
      <div id="poo" style="text-align:center;font-family: 'Raleway', sans-serif;"></div>
    </div>

<div class="void-tile"></div>

   <div class="tile">
      <h3>Poll</h3>
      <div id="poll" style="text-align:right;font-family: 'Raleway', sans-serif;">
       Do you think excessive use of refrigerators is causing global warming?
       <input type='button' value='yes' onclick=''/>
       <input type='button' value='no' onclick='' />
      </div>
    </div>

<div class="void-tile"></div>

<div class="tile"  title="The average combined global land and ocean surface temperature for November 2012">
      <h3>Global Temperature</h3>
      <div style="text-align:center;font-family: 'Raleway', sans-serif;">13.57*C</div>
    </div>

<div class="void-tile"></div>



  </div>
 <br />
 </div>
<div class="onecol last"> </div>
  </div>
  
  <div  id="footer">
    <div class="row">
       <div class="elevencol"> &nbsp;</div>
      <div class="onecol last" onClick="slideEffectBox()"> <p id="tab"> Tools </p></div>
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
