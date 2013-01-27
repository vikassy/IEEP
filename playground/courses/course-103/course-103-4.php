<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <script src="../js/amcharts.js" type="text/javascript"></script>          
        <script type="text/javascript">
            var chart;

            var chartData = [{
                gas: "CO2 (Carbon di Oxide)",
                year2009:386300 ,
                year2010: 388500,
				p : "ppb"
            },
			{
                gas: "CH4 (Methane)",
                year2009: 1794.2,
                year2010: 1799.1,
				p:"ppb"
            },
			{
                gas: "N2O (Nitrous Oxide)",
                year2009:322.5 ,
                year2010: 323.1,
				p:"ppb"
            },
			/*{
                gas: "CFCs (Chlorofluoro Carbon)",
                year2009: 775.7,
                year2010: 771.3,
				p:"ppt"
            },*/
			{
                gas: "Carbon Compounds (CFCs, HCFCs, HFCs)",
                year2009: 1.026,
                year2010: 1.035,
				p:"ppt"
            }
			/*{
                gas: "HCFC-22 (Hydrochlorofluoro Carbon)",
                year2009: 198.4,
                year2010: 206.2,
				p:"ppt"
            },
			{
                gas: "HFC-134a (Hydrofluoro Carbon)",
                year2009: 52.4,
                year2010: 57.8,
				p:"ppt"
            }*/
			];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "gas";
                chart.color = "#FFFFFF";
                chart.fontSize = 14;
                chart.startDuration = 1;
                chart.plotAreaFillAlphas = 0.2;
				chart.addTitle('Concentration of Greenhouse Gases',16);
                // the following two lines makes chart 3D
                chart.angle = 30;
                chart.depth3D = 60;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0.2;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridColor = "#FFFFFF";
                categoryAxis.axisColor = "#FFFFFF";
                categoryAxis.axisAlpha = 0.5;
                categoryAxis.dashLength = 5;
				categoryAxis.labelRotation = 10;

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = "3d"; // This line makes chart 3D stacked (columns are placed one behind another)
                valueAxis.gridAlpha = 0.2;
                valueAxis.gridColor = "#FFFFFF";
                valueAxis.axisColor = "#FFFFFF";
                valueAxis.axisAlpha = 0.5;
                valueAxis.dashLength = 5;
                valueAxis.title = "Concentration of Gases"
                valueAxis.titleColor = "#FFFFFF";
				
               // valueAxis.unit = "%";
                chart.addValueAxis(valueAxis);

                // GRAPHS         
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.title = "2009";
                graph1.valueField = "year2009";
                graph1.type = "column";
                graph1.lineAlpha = 0;
                graph1.lineColor = "#D2CB00";
                graph1.fillAlphas = 1;
                graph1.balloonText = "[[category]] (2009): [[value]] [[p]]";
                chart.addGraph(graph1);

                // second graph
                var graph2 = new AmCharts.AmGraph();
                graph2.title = "2010";
                graph2.valueField = "year2010";
                graph2.type = "column";
                graph2.lineAlpha = 0;
                graph2.lineColor = "#BEDF66";
                graph2.fillAlphas = 1;
                graph2.balloonText = "[[category]] (2010): [[value]] [[p]]";
                chart.addGraph(graph2);
				
				 var legend = new AmCharts.AmLegend();
                legend.position = "bottom";
                legend.borderAlpha = 0.3;
                legend.horizontalGap = 10;
                legend.switchType = "v";
				legend.color = "#FFFFFF";
                chart.addLegend(legend);


                chart.write("chartdiv");
            });
        </script>
    </head>
    
    <body style="background-color:#000000;">
    <h2>Greenhouse Effect</h2>
The greenhouse effect is the process by which absorption and emission of infrared radiation by gases in the atmosphere warm a planet's lower atmosphere and surface. Naturally occurring amounts of greenhouse gases have a mean warming effect of about 33 °C (59 °F).[54][C] The major greenhouse gases are water vapor, which causes about 36–70% of the greenhouse effect; carbon dioxide (CO2), which causes 9–26%; methane (CH4), which causes 4–9%; and ozone (O3), which causes 3–7%.[55][56][57] Clouds also affect the radiation balance through cloud forcings similar to greenhouse gases.
The following figure shows the flows of energy between space, the atmosphere, and the Earth's surface, and shows how these flows combine to trap heat near the surface and create the greenhouse effect. Energy exchanges are expressed in watts per square meter (W/m2)
 

Human activity since the Industrial Revolution has increased the amount of greenhouse gases in the atmosphere, leading to increased radiative forcing from CO2, methane, tropospheric ozone, CFCs and nitrous oxide. The concentrations of CO2 and methane have increased by 36% and 148% respectively since 1750. The concentrations of various greenhouse gasses are shown:<br>

        <div id="chartdiv" style="width: 100%; height: 700px;"></div>
    </body>

</html>