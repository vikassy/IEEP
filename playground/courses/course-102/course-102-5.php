<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="../amcharts/style.css">
        <script src="../js/amcharts.js" type="text/javascript"></script>         
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <script type="text/javascript">
            var chart;
			var value;

             window.onload = function() {
				 value = "life_expectancy0";
				 effect = "bounce";
            createChart();            
                                               
        }

            function createChart()
			{
				var chartData = [{
                mineral: "Coal",
                life_expectancy0:216,
				life_expectancy2:84,
				life_expectancy5:49,
				
				des:"841,000 Million Metric Tonnes"
			 },
			 {
                mineral: "Crude Oil",
                life_expectancy0:44,
				life_expectancy2:31,
				life_expectancy5:23,
				
				des:"1,035 Billion Barrels"
			 },
			 {
                mineral: "Natural Gas",
                life_expectancy0:64,
				life_expectancy2:41,
				life_expectancy5:29,
				
				des:"5,145 Trillion Cubic Feet"
			 },
			 {
                mineral: "Aluminium",
                life_expectancy0:202,
				life_expectancy2:81,
				life_expectancy5:48,
				des:"28,000 Million Metric Tonnes"
			 },
			 {
                mineral: "Copper",
                life_expectancy0:28,
				life_expectancy2:22,
				life_expectancy5:18,
				
				des:"630,000 Thousand Metric Tonnes"
			 },
			 {
                mineral: "Iron",
                life_expectancy0:132,
				life_expectancy2:65,
				life_expectancy5:41,
				
				des:"180,000 Million Metric Tonnes"
			 },
			 {
                mineral: "Lead",
                life_expectancy0:21,
				life_expectancy2:17,
				life_expectancy5:14,
				
				des:"64,000 Thousand Metric Tonnes"
			 },
			  {
                mineral: "Silver",
                life_expectancy0:17,
				life_expectancy2:15,
				life_expectancy5:13,
				
				des:"510,000 Metric Tonnes"
			 },
			  {
                mineral: "Tin",
                life_expectancy0:37,
				life_expectancy2:28,
				life_expectancy5:21,
				
				des:"5200 Thousand Metric Tonnes"
			 } 
			];

                // PIE CHART
                chart = new AmCharts.AmPieChart();

                // title of the chart
                chart.addTitle("Life Expectancy of various Minerals at different Growth Rates", 16);

                chart.dataProvider = chartData;
                chart.titleField = "mineral";
                chart.valueField = value;
				chart.descriptionField = "des";
                chart.sequencedAnimation = true;
                chart.startEffect = effect;
                chart.innerRadius = "30%";
                chart.startDuration = 2;
                chart.labelRadius = 15;
				radius = 200;
				chart.outlineAlpha = 1;
				chart.outlineColor = "#FFFFFF";
				chart.outlineThickness = 2;

                // the following two lines makes the chart 3D
                chart.depth3D = 20;
                chart.angle = 40;
				
				chart.balloonText = "[[title]]: [[value]] years,\n Reserve:[[description]]";
				chart.write("chartdiv");
			}
               
			   
			    function set()
				{
					 if (document.getElementById("rb1").checked)
					 {
						  value = "life_expectancy0";
						  effect = "bounce";
						    
					 }
					 
					 else if(document.getElementById("rb2").checked)
					 {
						  value = "life_expectancy2";
						   effect = "elastic";
					 }
					 else
					 {
						  value = "life_expectancy5";
						  effect = "<";
					 }
					 createChart();
				}
              
                
                
            
        </script>
    </head>
    
    <body>
   <h2>  DEPLETION</h2>In recent years, the depletion of natural resources has become a major focus of governments and organizations such as the United Nations (UN). The depletion of natural resources is caused by 'direct drivers of change'[13] such as Mining, petroleum extraction, fishing and forestry as well as 'indirect drivers of change' such as demography, economy, society, politics and technology.[13] The current practice of Agriculture is another factor causing depletion of natural resources. For example the depletion of nutrients in the soil due to excessive use of nitrogen[13] and desertification[4] The depletion of natural resources is a continuing concern for society.
The various life expectancy (Years a particular mineral will be available) of different minerals at three different growth rates is shown.

        <div id="chartdiv" style="width:800px; height:600px;"></div>
        <div style="margin-left:35px;">
            <input type="radio" checked="true" name="group" id="rb1" onclick="set()">Growth Rate - 0%
            <input type="radio" name="group" id="rb2" onclick="set()">Growth Rate - 2%
            <input type="radio" name="group" id="rb3" onclick="set()">Growth Rate - 5%
		</div>        

		<?php
include_once("include/load_question.php");
  $quest = new question();
  $quest->load_question(4,102);
?>
    </body>

</html>
