<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['geochart']});
    </script>
    <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
    <script type="text/javascript">
    var visualization;

    function drawVisualization() {
      // To see the data that this visualization uses, browse to
      // http://spreadsheets.google.com/ccc?key=pCQbetd-CptGXxxQIG7VFIQ
      var query = new google.visualization.Query('https://docs.google.com/spreadsheet/ccc?key=0Ajf0Qu3iKU02dF9SdVBZUHgwalVrZGpNX1JqQnFNZ3c#gid=0');
    
      // Send the query with a callback function.
      query.send(handleQueryResponse);
    }
    
    function handleQueryResponse(response) {
      if (response.isError()) {
        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
        return;
      }
    
      var data = response.getDataTable();
      var options = {
        region: 'world',
        displayMode: 'markers',
		backgroundColor:'#646464',
		tooltip:{trigger:'focus'},
        colorAxis: {colors: ['#FFAA00', '#FF0000']}
      };

	  visualization = new google.visualization.GeoChart(document.getElementById('visualization'));
      visualization.draw(data, options);
    }
    

    google.setOnLoadCallback(drawVisualization);
    </script>
     <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <h2>CO2 Emissions</h2>
    <div id="visualization" style="height: 800px; width: 800px; margin:auto;"></div>
       
       

        
        <form class="questions" action="submit.php" method="post">        
        <h2>Question 1</h2><br>
        What is the CO2 emmision in your country?<br>       
		<input type="text" name="q1"><br />
        
        <h2>Question 2</h2><br>
        Which country has the maximum CO2 emmision?<br>       
		<input type="radio" name="q3" value="good">Kuwait<br>
		<input type="radio" name="q3" value="bad">Qatar<br>
        <input type="radio" name="q3" value="bad">Aruba<br>
		<input type="radio" name="q3" value="bad">Russia<br>
        
        <br>

       <div style="text-align:center;"> <input  class="button primary" value="Next!" onClick="window.location='course-101-4.php'"/> </div>
       
       
        </form>
        

  </body>
</html>
