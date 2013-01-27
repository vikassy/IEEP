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
            var chartData = 
			[
			{  
			year:1880,
			val:-0.25 
				},
			{  
			year:1981,
			val:-0.21 
				},
			{  
			year:1882,
			val:-0.17 
				},
			{  
			year:1883,
			val:-0.17 
				},
			{  
			year:1884,
			val:-0.46 
				},
			{  
			year:1885,
			val:-0.32 
				},
			{  
			year:1886,
			val:-0.43 
				},
			{  
			year:1887,
			val:-0.56 
				},
			{  
			year:1888,
			val:-0.32 
				},
			{  
			year:1889,
			val:-0.1 
				},
			{  
			year:1890,
			val:-0.48 
				},
			{  
			year:1891,
			val:-0.51 
				},
			{  
			year:1892,
			val:-0.47 
				},
			{  
			year:1893,
			val:-0.5 
				},
			{  
			year:1894,
			val:-0.39 
				},
			{  
			year:1895,
			val:-0.3 
				},
			{  
			year:1896,
			val:-0.26 
				},
					{  
			year:1897,
			val:-0.13 
				},
					{  
			year:1898,
			val:-0.29 
				},
					{  
			year:1899,
			val:-0.2 
				},
					{  
			year:1900,
			val:-0.04 
				},
					{  
			year:1901,
			val:-0.05 
				},
					{  
			year:1902,
			val:-0.23 
				},
					{  
			year:1903,
			val:-0.30 
				},
					{  
			year:1904,
			val:-0.41 
				},
					{  
			year:1905,
			val:-0.24 
				},	{  
			year:1906,
			val:-0.12 
				},
					{  
			year:1907,
			val:-0.42 
				},
					{  
			year:1908,
			val:-0.27 
				},
					{  
			year:1909,
			val:-0.28 
				},
					{  
			year:1910,
			val:-0.19 
				},
					
			{  
			year:1911,
			val:-0.23 
				},
				{  
			year:1912,
			val: -0.24
				},
				{  
			year:1913,
			val:-0.22
				},
				{  
			year:1914,
			val:0.02 
				},
				{  
			year:1915,
			val:0.02 
				},
				{  
			year:1916,
			val:-0.21 
				},
				{  
			year:1917,
			val:-0.42 
				},
				{  
			year:1918,
			val:-0.33 
				},
				{  
			year:1919,
			val:-0.08 
				},
				{  
			year:1920,
			val:-0.18 
				},
				{  
			year:1921,
			val:-0.07 
				},
						{  
			year:1922,
			val:-0.12 
				},
						{  
			year:1923,
			val:-0.17 
				},
						{  
			year:1924,
			val:-0.13 
				},
						{  
			year:1925,
			val:-0.15 
				},
						{  
			year:1926,
			val:0.07 
				},
						{  
			year:1927,
			val:-0.06 
				},
						{  
			year:1928,
			val:-0.03 
				},
						{  
			year:1929,
			val:-0.22 
				},
						{  
			year:1930,
			val:-0.03 
				},
						{  
			year:1931,
			val:0.01 
				},
						{  
			year:1932,
			val:-0.01 
				},
						{  
			year:1933,
			val:-0.15 
				},
						{  
			year:1934,
			val:0.01 
				},
						{  
			year:1935,
			val:-0.12 
				},
						{  
			year:1936,
			val:-0.03 
				},
						{  
			year:1937,
			val:0.07 
				},
						{  
			year:1938,
			val:0.13 
				},
						{  
			year:1939,
			val:-0.04 
				},
						{  
			year:1940,
			val:0.11 
				},
						{  
			year:1941,
			val:0.08 
				},
							{  
			year:1942,
			val:0.08 
				},
							{  
			year:1943,
			val:0.03 
				},
							{  
			year:1944,
			val:0.08
				},
							{  
			year:1945,
			val:-0.02
				},
							{  
			year:1946,
			val:-0.03
				},
							{  
			year:1947,
			val:0.09 
				},
							{  
			year:1948,
			val:-0.04 
				},
							{  
			year:1949,
			val:-0.09 
				},
							{  
			year:1950,
			val:-0.2 
				},
							{  
			year:1951,
			val: -0.04
				},
							{  
			year:1952,
			val:0.01 
				},
							{  
			year:1953,
			val:0.10 
				},
							{  
			year:1954,
			val:-0.11 
				},
							{  
			year:1955,
			val:-0.1 
				},
							{  
			year:1956,
			val:-0.21 
				},
							{  
			year:1957,
			val:0.06 
				},
							{  
			year:1958,
			val:0.08 
				},
							{  
			year:1959,
			val:0.04 
				},
							{  
			year:1960,
			val:-0.02 
				},
							{  
			year:1961,
			val:0.08 
				},
							{  
			year:1962,
			val:0.04 
				},
							{  
			year:1963,
			val:0.02 
				},
							{  
			year:1964,
			val:-0.25 
				},
							{  
			year:1965,
			val:-0.16
				},
							{  
			year:1966,
			val:-0.07 
				},
							{  
			year:1967,
			val:-0.01 
				},
							{  
			year:1968,
			val:-0.08 
				},
							{  
			year:1969,
			val:0.01 
				},
							{  
			year:1970,
			val:0.05 
				},
								{  
			year:1971,
			val:-0.08 
				},
								{  
			year:1972,
			val:-0.05 
				},
								{  
			year:1973,
			val:0.2 
				},
								{  
			year:1974,
			val:-0.06 
				},
								{  
			year:1975,
			val:-0.01 
				},
								{  
			year:1976,
			val:-0.21 
				},
								{  
			year:1977,
			val:0.18 
				},
								{  
			year:1978,
			val:0.11 
				},
								{  
			year:1979,
			val:0.16 
				},
								{  
			year:1980,
			val:0.30 
				},
									{  
			year:1981,
			val:0.39 
				},
									{  
			year:1982,
			val:0.09 
				},
									{  
			year:1983,
			val:0.34 
				},
									{  
			year:1984,
			val:0.16 
				},
									{  
			year:1985,
			val:0.14 
				},
									{  
			year:1986,
			val:0.20 
				},
									{  
			year:1987,
			val:0.36 
				},
									{  
			year:1988,
			val:0.43 
				},
									{  
			year:1989,
			val:0.31 
				},
									{  
			year:1990,
			val:0.47 
				},
										{  
			year:1991,
			val:0.46 
				},
										{  
			year:1992,
			val:0.17 
				},
										{  
			year:1993,
			val:0.2 
				},
										{  
			year:1994,
			val:0.33 
				},
										{  
			year:1995,
			val:0.51 
				},
										{  
			year:1996,
			val:0.43 
				},
										{  
			year:1997,
			val:0.47 
				},
										{  
			year:1998,
			val:0.77 
				},
										{  
			year:1999,
			val:0.51 
				},
										{  
			year:2000,
			val:0.50 
				},
											{  
			year:2001,
			val:0.61 
				},
											{  
			year:2002,
			val:0.71
				},
											{  
			year:2003,
			val:0.71 
				},
											{  
			year:2004,
			val:0.63 
				},
											{  
			year:2005,
			val:0.80 
				},
											{  
			year:2006,
			val:0.71 
				},
											{  
			year:2007,
			val:0.79 
				},
											{  
			year:2008,
			val:0.58 
				},
											{  
			year:2009,
			val:0.73 
				},
											{  
			year:2010,
			val:0.87 
				},
											{  
			year:2011,
			val:0.72 
				}
				];
            var chartCursor;

            AmCharts.ready(function () {
                // generate some data first
                
                // SERIAL CHART    
                chart = new AmCharts.AmSerialChart();
				chart.addTitle('Average Temperature Anomoly',16);
                chart.pathToImages = "https://sites.google.com/site/tushardobhal/data-viz/";
                chart.zoomOutButton = {
                    backgroundColor: '#000000',
                    backgroundAlpha: 0.15
                };
                chart.dataProvider = chartData;
                chart.categoryField = "year";
				chart.startDuration = 2;
				chart.startEffect = 'bounce';

                // listen for "dataUpdated" event (fired when chart is rendered) and call zoomChart method when it happens
                //chart.addListener("dataUpdated", zoomChart);
				

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                //categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "YYYY"; // our data is daily, so we set minPeriod to DD
                categoryAxis.dashLength = 1;
                categoryAxis.gridAlpha = 0.15;
				categoryAxis.title = 'Year';
                categoryAxis.axisColor = "#DADADA";
				

                // value                
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0.2;
                valueAxis.dashLength = 1;
				valueAxis.title = 'Temperature Anomoly (°C)';
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.title = "red line";
				graph.type = "column";
				
                graph.valueField = "val";
                graph.bullet = "round";
                graph.bulletBorderColor = "#FFFFFF";
                graph.bulletBorderThickness = 2;
                graph.lineThickness = 2;
                graph.lineColor = "#b5030d";
                graph.negativeLineColor = "#0352b5";
                graph.lineAlpha = 0;
				graph.fillColors = "#b5030d";
				graph.negativeFillColors = "#0352b5";
				graph.fillAlphas = 1;
				graph.hideBulletsCount = 50; // this makes the chart to hide bullets when there are more than 50 series in selection
                chart.addGraph(graph);
                var graph1 = new AmCharts.AmGraph();
                //graph.title = "red line";
				graph1.type = "line";
				
                graph1.valueField = "val";
                //graph1.bullet = "round";
                //graph1.bulletBorderColor = "#FFFFFF";
                //graph1.bulletBorderThickness = 2;
                graph1.lineThickness = 2;
                graph1.lineColor = "#b5030d";
                graph1.negativeLineColor = "#0352b5";
                graph1.lineAlpha = 1;
				graph1.fillColors = "#b5030d";
				graph1.negativeFillColors = "#0352b5";
				graph1.fillAlphas = 0;
				//graph1.hideBulletsCount = 50; // this makes the chart to hide bullets when there are more than 50 series in selection
                chart.addGraph(graph1);
                // CURSOR
                chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorPosition = "mouse";
				chartCursor.oneBalloonOnly = true;
                chart.addChartCursor(chartCursor);

                // SCROLLBAR
                var chartScrollbar = new AmCharts.ChartScrollbar();
                chartScrollbar.graph = graph1;
                chartScrollbar.scrollbarHeight = 40;
                chartScrollbar.color = "#FFFFFF";
				chartScrollbar.scrollDuration = 1;
                chartScrollbar.autoGridCount = true;
                chart.addChartScrollbar(chartScrollbar);
				
                // WRITE
                chart.write("chartdiv");
            });

            
            
           
            
                    
        </script>
    </head>
    
    <body>
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
        
       <div style="text-align:center;"> <input  class="button primary" value="Next!" onClick="window.location='course-101-3.php'"/> </div>
       
       
        
    </body>

</html>
