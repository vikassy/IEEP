
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
                year: 2001,
                Coal: 2381.1,
                Oil: 3595.6,
                Natural_Gas: 2215.4,
				Nuclear:600.8,
				Hydro:587.2,
				other:54.0
            },
			{
                year: 2002,
                Coal: 2443.2,
                Oil: 3629.8,
                Natural_Gas: 2271.0,
				Nuclear:610.5,
				Hydro:598.6,
				other:60.9
            },
			{
                year: 2003,
                Coal: 2637.7,
                Oil: 3702.7,
                Natural_Gas: 2347.0,
				Nuclear:598.3,
				Hydro:598.4,
				other:66.1
            },
			{
                year: 2004,
                Coal: 2839.3,
                Oil: 3856.6,
                Natural_Gas: 2417.8,
				Nuclear:624.9,
				Hydro:635.8,
				other:75.1
            },
			{
                year: 2005,
                Coal: 2982.3,
                Oil: 3901.7,
                Natural_Gas: 2497.5,
				Nuclear:626.7,
				Hydro:662.3,
				other:84.1
            },
			{
                year: 2006,
                Coal: 3139.0,
                Oil: 3944.2,
                Natural_Gas: 2548.9,
				Nuclear:635.2,
				Hydro:687.2,
				other:93.9
            },
			{
                year: 2007,
                Coal: 3267.3,
                Oil: 4005.0,
                Natural_Gas: 2645.8,
				Nuclear:621.8,
				Hydro:700.4,
				other:107.3
            },
			{
                year: 2008,
                Coal: 3324.1,
                Oil: 3987.3,
                Natural_Gas: 2712.0,
				Nuclear:619.0,
				Hydro:727.7,
				other:122.7
            },
			{
                year: 2009,
                Coal: 3346.6,
                Oil: 3908.9,
                Natural_Gas: 2643.7,
				Nuclear:614.1,
				Hydro:737.5,
				other:140.6
            },
			{
                year: 2010,
                Coal: 3532.0,
                Oil: 4031.9,
                Natural_Gas: 2843.1,
				Nuclear:626.3,
				Hydro:778.9,
				other: 165.5
            },
			{
                year: 2011,
                Coal: 3724.3,
                Oil: 4059.1,
                Natural_Gas: 2905.6,
				Nuclear:599.3,
				Hydro:791.5,
				other: 194.8
            }
			];

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.pathToImages = "../amcharts/images/";
                chart.zoomOutButton = {
                    backgroundColor: '#000000',
                    backgroundAlpha: 0.15
                };
                chart.dataProvider = chartData;
                chart.marginTop = 10;
                chart.categoryField = "year";
				chart.addTitle("Consumption of Renewable and Non-Renewable Resources",16);

                // AXES
                // Category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0.07;
                categoryAxis.axisColor = "#DADADA";
                categoryAxis.startOnAxis = true;
				categoryAxis.title = 'Year';

                // Value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = "regular"; // this line makes the chart "stacked"
                valueAxis.gridAlpha = 0.07;
                valueAxis.title = "Consumption (in Oil Equivalent)";
                chart.addValueAxis(valueAxis);

                // GUIDES are vertical (can also be horizontal) lines (or areas) marking some event.
                // first guide
         

                // GRAPHS
                // first graph
                var graph = new AmCharts.AmGraph();
                graph.type = "line";
                
                graph.title = "Coal";
                graph.valueField = "Coal";
				graph.balloonText = "Coal: [[Coal]] Million Tonnes Oil Equivalent";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6; // setting fillAlphas to > 0 value makes it area graph
                chart.addGraph(graph);

                // second graph
                graph = new AmCharts.AmGraph();
                graph.type = "line";
                graph.title = "Oil";
                graph.valueField = "Oil";
				graph.balloonText = "Oil: [[Oil]] Million Tonnes";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6;
                chart.addGraph(graph);

                // third graph
                graph = new AmCharts.AmGraph();
                graph.type = "line";
                graph.title = "Natural Gas";
                graph.valueField = "Natural_Gas";
				graph.balloonText = "Natural Gas: [[Natural_Gas]] Million Tonnes Oil Equivalent";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6;
                chart.addGraph(graph);
				
				 graph = new AmCharts.AmGraph();
                graph.type = "line";
                graph.title = "Nuclear Energy";
                graph.valueField = "Nuclear";
				graph.balloonText = "Nuclear Energy: [[Nuclear]] Million Tonnes Oil Equivalent";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6;
                chart.addGraph(graph);


 graph = new AmCharts.AmGraph();
                graph.type = "line";
                graph.title = "Hydro-electric Energy";
                graph.valueField = "Hydro";
				graph.balloonText = "Hydro-electric Energy: [[Hydro]] Million Tonnes Oil Equivalent";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6;
                chart.addGraph(graph);


 graph = new AmCharts.AmGraph();
                graph.type = "line";
                graph.title = "Other Renewable Resources (Solar, Wind, etc.)";
                graph.valueField = "other";
				graph.balloonText = "Other Renewable Resources: [[other]] Million Tonnes Oil Equivalent";
                graph.lineAlpha = 1;
                graph.fillAlphas = 0.6;
                chart.addGraph(graph);




                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.position = "bottom";
                chart.addLegend(legend);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.zoomable = true; // as the chart displayes not too many values, we disabled zooming
                chartCursor.cursorAlpha = 0;
				
                chart.addChartCursor(chartCursor);

                // WRITE
                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body>
   <h2> USES</h2>
<br />

•	Rock and mineral resources have a wide variety of uses and play a huge role in our lives The Mineral Information Institute has a poster showing how much of a variety of minerals each person uses in his or her lifetime. <br />

•	Minerals are important to our health. We need small amounts of a wide variety of minerals. Minerals found in Tennessee which people need include: calcium, phosphorus, sulfur, copper, fluoride, iron, and zinc. <br />

•	Coal, oil and natural gas provide us with almost all of the energy we use to light, heat and run our world. <br />

•	Oil and natural gas are used as fuels and ingredients in the chemical industry to produce petroleum based products notably plastics.<br />

•	Minerals are ingredients in almost all of the products we use from fertilizer to plastics, from toothpaste to kitty litter, from knives to plates. <br />

•	Minerals are common ingredients in pigments. In fact, some of the earliest uses of minerals were as pigments.<br />
 
•	Minerals also play an important role in the processing of materials. Bentonite is important in well drilling, Barite is important in oil drilling. Fluorite is important in making steel<br />


        <div id="chartdiv" style="width:100%; height:400px;"></div>
 

    </body>

</html>