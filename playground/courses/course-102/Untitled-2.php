<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
   
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['treemap']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Location', 'Parent', 'Market trade volume (size)', 'Market increase/decrease (color)'],
          ['Classification of Natural Resources',   null,             0,                               0],
		  ['On the basis of Origin',   'Classification of Natural Resources',             0,                               0],
	      ['On the basis of Exhaustibility',   'Classification of Natural Resources',             0,                               0],
		  ['On the basis of Ownership',   'Classification of Natural Resources',             0,                               0],
		  ['On the basis of Status of Development',   'Classification of Natural Resources',             0,                               0],
	      ['Biotic',   'On the basis of Origin',             2,                               10],
          ['Abiotic',    'On the basis of Origin',             2,                               1],
          ['Renewable',      'On the basis of Exhaustibility',             2,                               4],
          ['Non-Renewable', 'On the basis of Exhaustibility',             2,                               7],
          ['Individual',    'On the basis of Ownership',             4,                               0],
          ['Community',    'On the basis of Ownership',            4,                              10],
          ['National',       'On the basis of Ownership',            4,                              31],
          ['International',    'On the basis of Ownership',            4,                              12],
          ['Potential',    'On the basis of Status of Development',            3,                              -23],
          ['Developed Stock',    'On the basis of Status of Development',             3,                              -11],
          ['obtained from biosphere',   'Biotic',             3,                              -2],
		  ['composed of non-living things like rocks and metals.',   'Abiotic',             3,                              -2],
		  ['can be renewed and reproduced by physical, chemical or mechanical processes',   'Renewable',             3,                              -2],
		  ['this process takes place over a long geological time',   'Non-Renewable',             3,                              -2],
		  ['these are owned by individuals privately',   'Individual',             3,                              -2],
		  ['accessible to all the members of the community',   'Community',             3,                              -2],
		  ['all the resources belong to the nation eg. minerals',   'National',             3,                              -2],
		  ['The oceanic resources beyond 200km of the Exclusive Economic Zone',   'International',             3,                              -2],
		  ['resources which have not been put to use',   'Potential',             3,                              -2],
		  ['the materials which have not been put to use due to lack of technology',   'Developed Stock',             3,                              -2],
		  ['Reserves can be used for meeting future requirements',   'Reserve',             3,                              -2],
		  ['Reserve',   'On the basis of Status of Development',             3,                              -2],
          
        ]);
      
        // Create and draw the visualization.
        var treemap = new google.visualization.TreeMap(document.getElementById('visualization'));
        treemap.draw(data, {
          minColor: '#f00',
          midColor: '#ddd',
          maxColor: '#0d0',
          headerHeight: 15,
          fontColor: 'black',
          showScale: false});
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
    <div>Press Right Click to go Back</div>
  </body>
</html>
​