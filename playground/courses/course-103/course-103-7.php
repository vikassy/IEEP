<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="../amcharts/style.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <script src="../js/amcharts.js" type="text/javascript"></script>         
        <script type="text/javascript">
            var chart;

             window.onload = function() {
            createChart();            
                                               
        }

            function createChart()
			{
				var chartData = [{
                cause: "Electricity and heat",
                perc: 24.9,
				}, 
				{
                cause: "Industry",
                perc: 14.7,
				},
				{
                cause: "Transportation",
                perc: 14.3,
				},
				{
                cause: "Agriculture",
                perc: 13.8,
				},
				{
                cause: "Land use change",
                perc: 12.2,
				},
				{
                cause: "Other fuel combustion",
                perc: 8.6,
				},
				{
                cause: "Industrial processes",
                perc: 4.3,
				},
				{
                cause: "Fugitive emissions",
                perc: 4.0,
				},
				{
                cause: "Waste",
                perc: 3.2,
				}];

                // PIE CHART
                chart = new AmCharts.AmPieChart();

                // title of the chart
                chart.addTitle("Sources of Greenhouse Gases", 16);

                chart.dataProvider = chartData;
                chart.titleField = "cause";
                chart.valueField = "perc";
                chart.sequencedAnimation = true;
                chart.startEffect = "elastic";
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;
				radius = 200;
				

                // the following two lines makes the chart 3D
              
				
				chart.balloonText = "[[title]]: [[value]]%";

               
                // WRITE                                 
                chart.write("chartdiv");
            }
        </script>
    </head>
    
    <body>
  <h2>  SOURCES OF GREENHOUSE GASES </h2>
Water vapor is available in the atmosphere and contributes to about 50% of the total greenhouse effect. Over the last three decades of the 20th century, gross domestic product per capita and population growth were the main drivers of increases in greenhouse gas emissions.[65] CO2 emissions are continuing to rise due to the burning of fossil fuels and land-use change.
The burning of fossil fuels has contributed to a 40% increase in the concentration of carbon dioxide in the atmosphere from 280 ppm to 397 ppm, despite the uptake of a large portion of the emissions by various natural "sinks" involved in the carbon cycle.[5][6] Anthropogenic carbon dioxide (CO2) emissions (i.e., emissions produced by human activities) come from combustion of carbon based fuels, principally wood, coal, oil, and natural gas.[7] 
Here is a pie chart depicting the various human activities that lead to the emissions of these gases – 
<br>

        <div id="chartdiv" style="width:800px; height:800px; margin:auto;"></div>
    </body>

</html>
