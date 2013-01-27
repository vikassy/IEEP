<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="https://sites.google.com/site/tushardobhal/data-viz/style.css?attredirects=0&d=1" type="text/css">
        <script src="../js/amcharts.js" type="text/javascript"></script>        
        <link type="text/css" rel="stylesheet" href="../css/common.css"  /><link type="text/css" rel="stylesheet" href="../css/buttons.css"  />
        <link type="text/css" rel="stylesheet" href="css/buttons.css"  />
        <script type="text/javascript">
            var chart;

            
			  var chartData = [{
                year: new Date(1961, 0),
                value: 456949783

            }, {
                year: new Date(1962, 0),
                value: 466337036

            }, {
                year: new Date(1963, 0),
                value: 476025147

            }, {
                year: new Date(1964, 0),
                value: 486038945

            }, {
                year: new Date(1965, 0),
                value: 496400381

            }, {
                year: new Date(1966, 0),
                value: 507115411

            }, {
                year: new Date(1967, 0),
                value: 518192403

            }, {
                year: new Date(1968, 0),
                value: 529658233

            }, {
                year: new Date(1969, 0),
                value: 541544619

            }, {
                year: new Date(1970, 0),
                value: 553873890

            }, {
                year: new Date(1971, 0),
                value: 566651479

            }, {
                year: new Date(1972, 0),
                value: 579871075
            }, {
                year: new Date(1973, 0),
                value: 593526633

            }, {
                year: new Date(1974, 0),
                value: 607606569

            }, {
                year: new Date(1975, 0),
                value: 622096682

            }, {
                year: new Date(1976, 0),
                value: 636992593

            }, {
                year: new Date(1977, 0),
                value: 652279308

            }, {
                year: new Date(1978, 0),
                value: 667917437

            }, {
                year: new Date(1979, 0),
                value: 683857312

            }, {
                year: new Date(1980, 0),
                value: 700058589

            }, {
                year: new Date(1981, 0),
                value: 716493309

            }, {
                year: new Date(1982, 0),
                value: 733151769

            }, {
                year: new Date(1983, 0),
                value: 750033539

            }, {
                year: new Date(1984, 0),
                value: 767146806

            }, {
                year: new Date(1985, 0),
                value: 784490842

            }, {
                year: new Date(1986, 0),
                value: 802051806

            }, {
                year: new Date(1987, 0),
                value: 819800055

            }, {
                year: new Date(1988, 0),
                value:837699675

            }, {
                year: new Date(1989, 0),
                value: 855707358

            }, {
                year: new Date(1990, 0),
                value: 873785449

            }, {
                year: new Date(1991, 0),
                value: 891910180

            }, {
                year: new Date(1992, 0),
                value: 910064576

            }, {
                year: new Date(1993, 0),
                value: 928226051

            }, {
                year: new Date(1994, 0),
                value: 946373316

            }, {
                year: new Date(1995, 0),
                value: 964486155
            }, {
                year: new Date(1996, 0),
                value: 982553253

            }, {
                year: new Date(1997, 0),
                value: 1000558144

            }, {
                year: new Date(1998, 0),
                value: 1018471141

            }, {
                year: new Date(1999, 0),
                value: 1036258683

            }, {
                year: new Date(2000, 0),
                value: 1053898107

            }, {
                year: new Date(2001, 0),
                value:1071374264

            }, {
                year: new Date(2002, 0),
                value: 1088694080

            }, {
                year: new Date(2003, 0),
                value: 1105885689

            }, {
                year: new Date(2004, 0),
                value: 1122991192

            }, {
                year: new Date(2005, 0),
                value: 1140042863

            },
			{
                year: new Date(2006, 0),
                value: 1157038539

			},
				{
                year: new Date(2007, 0),
                value: 1173971629

				},
				{
                year: new Date(2008, 0),
                value: 1190863679

				},
				{
                year: new Date(2009, 0),
                value: 1207740408

				},
				{
                year: new Date(2010, 0),
                value: 1224614327

				},
				{
                year: new Date(2011, 0),
                value: 1241491960
				}];


            AmCharts.ready(function () {
                // generate some random data first   
              

                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.pathToImages = "https://sites.google.com/site/tushardobhal/data-viz/";
               
                chart.dataProvider = chartData;
				chart.addTitle("Population of India (1961-2011)",16);
                chart.categoryField = "year";

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "YYYY"; // our data is daily, so we set minPeriod to DD
                // value axis
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.inside = true;
                valueAxis.tickLength = 0;
                valueAxis.axisAlpha = 0;
                valueAxis.minimum = 456949783;
                valueAxis.maximum = 1241491960;
				valueAxis.title = "Population";
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.dashLength = 3;
                graph.lineColor = "#7717D7";
                graph.valueField = "value";
                graph.dashLength = 3;
				
                graph.bullet = "triangleUp";
                chart.addGraph(graph);
				
                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 1;
				chartCursor.categoryBalloonDateFormat = "YYYY";
                chart.addChartCursor(chartCursor);

                // GUIDES are used to create horizontal range fills
                var guide = new AmCharts.Guide();
                guide.value = 400000000;
                guide.toValue = 500000000;
                guide.fillColor = "#CC0000";
                guide.fillAlpha = 0.2;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 500000000;
                guide.toValue = 600000000;
                guide.fillColor = "#CC0000";
                guide.fillAlpha = 0.15;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 600000000;
                guide.toValue = 700000000;
                guide.fillColor = "#CC0000";
                guide.fillAlpha = 0.1;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 700000000;
                guide.toValue = 800000000;
                guide.fillColor = "#CC0000";
                guide.fillAlpha = 0.05;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 800000000;
                guide.toValue = 900000000;
                guide.fillColor = "#0000cc";
                guide.fillAlpha = 0.05;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 900000000;
                guide.toValue = 1000000000;
                guide.fillColor = "#0000cc";
                guide.fillAlpha = 0.1;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 1000000000;
                guide.toValue = 1100000000;
                guide.fillColor = "#0000cc";
                guide.fillAlpha = 0.15;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);

                var guide = new AmCharts.Guide();
                guide.value = 1100000000;
                guide.toValue = 1200000000;
                guide.fillColor = "#0000cc";
                guide.fillAlpha = 0.2;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);
				
				 var guide = new AmCharts.Guide();
                guide.value = 1200000000;
                guide.toValue = 1300000000;
                guide.fillColor = "#0000cc";
                guide.fillAlpha = 0.2;
                guide.lineAlpha = 0;
                valueAxis.addGuide(guide);
				
				var chartScrollbar = new AmCharts.ChartScrollbar();
                chartScrollbar.graph = graph;
                chartScrollbar.backgroundColor = "#DDDDDD";
                chartScrollbar.scrollbarHeight = 30;
                chartScrollbar.selectedBackgroundColor = "#FFFFFF";
                chart.addChartScrollbar(chartScrollbar);

                // WRITE
                chart.write("chartdiv");
            });

          
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
        
        <form class="questions" action="submit.php" method="post">        
        <h2>Q1</h2><br>
        Is such a huge rise in population a :<br>       
		<input type="radio" name="q1" value="good">Good Thing<br>
		<input type="radio" name="q1" value="bad">Bad Thing<br>

        
        <h2>Q2</h2><br>
        Is such a huge rise in population a :<br>       
		<input type="radio" name="q3" value="good">Good Thing<br>
		<input type="radio" name="q3" value="bad">Bad Thing<br>
		
        <h2>Q3</h2><br>
        Is such a huge rise in population a :<br>       
		<input type="radio" name="q2" value="good">Good Thing<br>
		<input type="radio" name="q2" value="bad">Bad Thing
        
        <br>

       <div style="text-align:center;"> <input type="submit" class="button primary" value="Done!"/> </div>
       
       
        </form>
        
    </body>

</html>