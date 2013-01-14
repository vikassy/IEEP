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
      <div class="onecol"  onClick="loadUrl('courses/course-101/course-101-1.html'')"> Dashboard </div>
       <div class="onecol" > </div>
      <div class="eightcol">
        <h1>Playground</h1>
      </div>
      <div class="twocol  last">Environment 101</div>
    </div>
  </div>
  <br />
  <div class="container">
    <div class="row" id="body-head">
      <div class="threecol"> </div>
      <div class="sixcol">
      <!-- Dynamically generated -->
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-2.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-3.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-4.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-5.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-6.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-7.php',this)"> </div>
      	<div class="level-marker" onClick="loadUrl('courses/course-101/course-101-8.php',this)"> </div>
        <div class="level-marker" onClick="loadUrl('courses/course-101/course-101-9.php',this)"> </div>
          <div class="level-marker" onClick="loadUrl('courses/course-101/course-101-10.php',this)"> </div>
       <!-- Dynamically generated -->
      </div>
      <div class="threecol last"> </div>
    </div>
  </div>
  <div class="row" >
    <div class="onecol"> </div>
    <div class="tencol" id="body-content">
      <iframe onload="calcHeight()" src="courses/course-101/course-101-1.php" id="main-frame" height="100%" ></iframe>
      <div id="loading">Loading.</div>
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
        <div class="level-marker"> </div>
        <div class="level-marker"> </div>
      </div>
    </div>
  </div>


</body>
</html>
