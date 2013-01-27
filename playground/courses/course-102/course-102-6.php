<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="../js/amcharts.js" type="text/javascript"></script>        
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  /> 
        <script type="text/javascript">
            var chart;

            var chartData = [{
                year1: "2011",
				year2:"2006-2011",
                type: "Solar Photovoltaics",
                perc1: 74,
				perc2: 58
				 
            }, 
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Wind Power",
                perc1: 20,
				perc2: 26
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Solar Thermal Power",
                perc1: 35,
				perc2: 37
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Geothermal Power",
                perc1: 1,
				perc2: 2
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Hydropower",
                perc1: 3,
				perc2: 3
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Solar Hot Power/Heating",
                perc1: 27,
				perc2: 17
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Ethanol Production",
                perc1: -0.5,
				perc2: 17
				 
            },
			{
                year1: "2011",
				year2:"2006-2011",
                type: "Biodiesel Production",
                perc1: 16,
				perc2: 27
				 
            }
			];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "type";
                chart.startDuration = 1;
                chart.plotAreaBorderColor = "#DADADA";
                chart.plotAreaBorderAlpha = 1;
                // this single line makes the chart a bar chart          
                chart.rotate = true;
				chart.startDuration = 2;
				chart.addTitle('Growth Rates of Renewable Energy Capacity',16)
			

                // AXES
                // Category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridAlpha = 0.1;
                categoryAxis.axisAlpha = 0;

                // Value
                /*var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.gridAlpha = 0.1;
                valueAxis.position = "top";
                chart.addValueAxis(valueAxis);*/

                // GRAPHS
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "2011";
                graph1.valueField = "perc1";
				
                graph1.balloonText = "2011:[[value]]%";
                graph1.lineAlpha = 0;
                graph1.fillColors = "#EBEB00";
                graph1.fillAlphas = 1;
				graph1.labelText = '[[perc1]]%';
                chart.addGraph(graph1);

                // second graph
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "column";
                graph2.title = "Five Year Period 2006-2011";
                graph2.valueField = "perc2";
                graph2.balloonText = "2006-2011:[[value]]%";
                graph2.lineAlpha = 0;
                graph2.fillColors = "#81acd9";
                graph2.fillAlphas = 1;
				graph2.labelText = '[[perc2]]%';
                chart.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                chart.addLegend(legend);

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body>
   <h2> STEPS TO BE TAKEN</h2>

1.	MANAGEMENT –<br>

Natural resource management is a discipline in the management of natural resources such as land, water, soil, plants and animals, with a particular focus on how management affects the quality of life for both present and future generations.<br>

Management of natural resources involves identifying who has the right to use the resources and who does not for defining the boundaries of the resource.[24] The resources are managed by the users according to the rules governing of when and how the resource is used depending on local condition.[25]
A successful management of natural resources should[neutrality is disputed] engage the community because of the nature of the shared resources the individuals who are affected by the rules can participate in setting or changing them.[24] The users have the rights to device their own management institutions and plans under the recognition by the government. The right to resources includes land, water, fisheries and pastoral rights.[25] The users or parties accountable to the users have to actively monitor and ensure the utilisation of the resource compliance with the rules and to impose penalty on those peoples who violates the rules.[24] These conflicts are resolved in a quick and low cost manner by the local institution according to the seriousness and context of the offence<br>

2.	USE OF RENEWABLE RESOURCES – <br>

Renewable energy resources and significant opportunities for energy efficiency exist over wide geographical areas, in contrast to other energy sources, which are concentrated in a limited number of countries. Rapid deployment of renewable energy and energy efficiency, and technological diversification of energy sources, would result in significant energy security and economic benefits.[17]
Renewable energy replaces conventional fuels in four distinct areas: electricity generation, hot water/space heating, motor fuels, and rural (off-grid) energy services:[18]<br>

•	Power generation. Renewable energy provides 19% of electricity generation worldwide. Renewable power generators are spread across many countries, and wind power alone already provides a significant share of electricity in some areas: for example, 14% in the U.S. state of Iowa, 40% in the northern German state of Schleswig-Holstein, and 20% in Denmark. Some countries get most of their power from renewables, including Iceland (100%), Norway (98%), Brazil (86%), Austria (62%), New Zealand (65%), and Sweden (54%).[19]<br>

•	Heating. Solar hot water makes an important contribution to renewable heat in many countries, most notably in China, which now has 70% of the global total (180 GWth). Most of these systems are installed on multi-family apartment buildings and meet a portion of the hot water needs of an estimated 50–60 million households in China. Worldwide, total installed solar water heating systems meet a portion of the water heating needs of over 70 million households. The use of biomass for heating continues to grow as well. In Sweden, national use of biomass energy has surpassed that of oil. Direct geothermal for heating is also growing rapidly.[19]<br>

•	Transport fuels. Renewable biofuels have contributed to a significant decline in oil consumption in the United States since 2006.[19] The 93 billion liters of biofuels produced worldwide in 2009 displaced the equivalent of an estimated 68 billion liters of gasoline, equal to about 5% of world gasoline production.[19]
In international public opinion surveys there is strong support for promoting renewable sources such as solar power and wind power, requiring utilities to use more renewable energy (even if this increases the cost), and providing tax incentives to encourage the development and use of such technologies. There is substantial optimism that renewable energy investments will pay off economically in the long term.<br>

The Growth Rates of  Renewable Energy Capacity is shown 

        <div id="chartdiv" style="width: 100%; height: 600px;"></div>
    </body>

</html>