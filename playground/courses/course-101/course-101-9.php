

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
      google.load('visualization', '1', {packages: ['geomap']});
    </script>
      <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
    <script type="text/javascript">
    var visualization;

    function drawVisualization() {
      // To see the data that this visualization uses, browse to
      // http://spreadsheets.google.com/ccc?key=pCQbetd-CptGXxxQIG7VFIQ
      var query = new google.visualization.Query('https://docs.google.com/spreadsheet/ccc?key=0Ajf0Qu3iKU02dC1keEwyM0l3X1gwLThUOHRlQl9US0E#gid=0');
    
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
        region: 'IN',
        displayMode: 'markers',
		magnifyingGlass:{enable: true, zoomFactor: 5.0},
        colorAxis: {colors: ['red', 'green']}
      };

	  visualization = new google.visualization.GeoMap(document.getElementById('visualization'));
      visualization.draw(data, options);
    }
    

    google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="height: 700px; width:400px; margin:auto;"></div><br />
<br />
 
       <div style="text-align:center;"> <input  class="button primary" value="Next!" onClick="window.location='course-101-10.php'"/> </div>
  </body>
</html>