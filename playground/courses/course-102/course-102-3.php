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
    <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
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
          ['Renewable',      'On the basis of Exhaustibility',             2,                               42],
          ['Non-Renewable', 'On the basis of Exhaustibility',             2,                               7],
          ['Individual',    'On the basis of Ownership',             4,                               16],
          ['Community',    'On the basis of Ownership',            4,                              10],
          ['National',       'On the basis of Ownership',            4,                              31],
          ['International',    'On the basis of Ownership',            4,                              12],
          ['Potential',    'On the basis of Status of Development',            3,                              -23],
          ['Developed Stock',    'On the basis of Status of Development',             3,                              -11],
          ['Reserve',   'On the basis of Status of Development',             3,                              -2],
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
  There are various methods of categorizing natural resources, these include source of origin, stage of development, and by their renewability, these classifications are described below. <br />

    <div id="visualization" style="width: 600px; height: 400px; margin:auto;"></div>
    <div>Press Right Click to go Back</div>
    <br />
<br />
 On the basis of origin, resources may be divided into:<br />

•	Biotic – Biotic resources are obtained from the biosphere (living and organic material), such as forests and animals, and the materials that can be obtained from them. Fossil fuels such as coal and petroleum are also included in this category because they are formed from decayed organic matter.
<br />

•	Abiotic – Abiotic resources are those that come from non-living, non-organic material. Examples of abiotic resources include land, fresh water, air and heavy metals including ores such as gold, iron, copper, silver, etc.
Renewability is a very popular topic and many natural resources can be categorized as either renewable or non-renewable:
<br />

•	Renewable resources are ones that can be replenished naturally. Some of these resources, like sunlight, air, wind, etc., are continuously available and their quantity is not noticeably affected by human consumption. Though many renewable resources do not have such a rapid recovery rate, these resources are susceptible to depletion by over-use. Resources from a human use perspective are classified as renewable only so long as the rate of replenishment/recovery exceeds that of the rate of consumption.<br />

•	Non-renewable resources are resources that form extremely slowly and those that do not naturally form in the environment. Minerals are the most common resource included in this category. By the human perspective, resources are non-renewable when their rate of consumption exceeds the rate of replenishment/recovery; a good example of this are fossil fuels, which are in this category because their rate of formation is extremely slow (potentially millions of years), meaning they are considered non-renewable. Some resources actually naturally deplete in amount without human interference, the most notable of these being radio-active elements such as uranium, which naturally decay into heavy metals. Of these, the metallic minerals can be re-used by recycling them,[1] but coal and petroleum cannot be recycled. <br />

Other types of classifications are shown in the Tree Map.<br />



  </body>
</html>
​