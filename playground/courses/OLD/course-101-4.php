
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href ="https://sites.google.com/site/tushardobhal/data-viz/style.css?attredirects=0&d=1" type="text/css">
        <script src="../js/amcharts.js" type="text/javascript"></script>        
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <script type="text/javascript">
            var chart;

            var chartData = [{
                year: "1950",
                europe:"547460",
                namerica: "171615",
                asia: "1402887",
                lamerica: "167307",
                oceania: "12807",
                africa: "227270",
				world: "2529346"
            }, {
                year: "1975",
                europe:"676207",
                namerica:"242360" ,
                asia: "2379374",
                lamerica: "323323",
                oceania: "21286",
                africa: "418765",
				world: "4061317"
            },
			{
                year: "2000",
                europe:"726568" ,
                namerica: "318654",
                asia: "3698296",
                lamerica: "521228",
                oceania: "31160",
                africa: "819462",
				world: "6115367"
            },
			{
                year: "2010",
                europe:"732759" ,
                namerica:"351659",
                asia: "4166741",
                lamerica: "588649",
                oceania: "35838",
                africa: "1033043",
				world: "6908688"
            },
			{
                year: "2025",
                europe:"729264",
                namerica: "397522",
                asia: "4772523",
                lamerica: "669533",
                oceania: "42507",
                africa: "1400184",
				world: "8011533"
            },
			{
                year: "2050",
                europe:"691048" ,
                namerica: "448464",
                asia: "5231485",
                lamerica: "729184",
                oceania: "51338",
                africa: "1998466",
				world: "9149984"
            }];

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
				chart.addTitle("World Population (*1000)",16);
                chart.categoryField = "year";
                chart.plotAreaBorderAlpha = 0.2;
				chart.startDuration = 1;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0.1;
                categoryAxis.axisAlpha = 0;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = "regular";
                valueAxis.gridAlpha = 0.1;
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph    
                var graph = new AmCharts.AmGraph();
                graph.title = "Asia";
                graph.labelText = "[[value]]";
                graph.valueField = "asia";
				graph.balloonText = "Asia:[[value]]";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#C72C95";
                chart.addGraph(graph);

                // second graph              
                graph = new AmCharts.AmGraph();
                graph.title = "Africa";
                graph.labelText = "[[value]]";
				graph.balloonText = "Africa:[[value]]";
                graph.valueField = "africa";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#D8E0BD";
                chart.addGraph(graph);

                // third graph                              
                graph = new AmCharts.AmGraph();
                graph.title = "Europe";
                graph.labelText = "[[value]]";
				graph.balloonText = "Europe:[[value]]";
                graph.valueField = "europe";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#B3DBD4";
                chart.addGraph(graph);

                // fourth graph  
                graph = new AmCharts.AmGraph();
                graph.title = "Latin America and the Caribbean";
                graph.labelText = "[[value]]";
				graph.balloonText = "Latin America and the Caribbean:[[value]]";
                graph.valueField = "lamerica";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#69A55C";
                chart.addGraph(graph);

                // fifth graph
                graph = new AmCharts.AmGraph();
                graph.title = "North America";
                graph.labelText = "[[value]]";
				graph.balloonText = "North America:[[value]]";
                graph.valueField = "namerica";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#B5B8D3";
                chart.addGraph(graph);

                // sixth graph   
                graph = new AmCharts.AmGraph();
                graph.title = "Oceania";
                graph.labelText = "[[value]]";
				graph.balloonText = "Oceania:[[value]]";
                graph.valueField = "oceania";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = "#F4E23B";
                chart.addGraph(graph);
				
				graph1 = new AmCharts.AmGraph();
                graph1.title = "World";
                graph1.labelText = "[[value]]";
				graph1.balloonText = "World:[[value]]";
                graph1.valueField = "world";
                graph1.type = "line";
                graph1.lineThickness = 2;
                graph1.bullet = "round";
                chart.addGraph(graph1);

               

                // LEGEND                  
                var legend = new AmCharts.AmLegend();
                legend.position = "right";
				legend.borderAlpha = 0.2;
                legend.horizontalGap = 10;
                chart.addLegend(legend);
				chart.depth3D = 30;

                // WRITE
                chart.write("chartdiv");
            });

           


          
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width: 900px; height: 600px;"></div><br>
<br>
 
       <div style="text-align:center;"> <input  class="button primary" value="Next!" onClick="window.location='course-101-3.php'"/> </div>
    </body>

</html>