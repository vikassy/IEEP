// JavaScript Document

var effectBoxToggle=1;

function slideEffectBox()
{
	if(effectBoxToggle==1)
	{
	$('#effect-box').animate({height: "50px"},700);
	effectBoxToggle=0;
	}
	else
	{
	$('#effect-box').animate({height: "0px"},700);
	effectBoxToggle=1;	
	}
}

function pageLoad()
{
place="bangalore";
$.ajax({
    url:"http://free.worldweatheronline.com/feed/weather.ashx?q=" +place+ ",india&format=json&num_of_days=2&key=9a60bafee0055049122209",
    dataType: 'jsonp', 
    success: function(data) {
        $.each(data, function(index, value) {
         //place+"<br/>"+value.current_condition[0].weatherDesc[0].value + "<br/>" + value.current_condition[0].temp_C + "&deg;C");
		//alert(value.current_condition[0].weatherDesc[0].value);
          
        });
    }
});

var hr = (new Date()).getHours();
hr = Number(hr);

if(hr>6&&hr<18)
{
	$('#background-effects').css({"background-image" : "url('./img/sunny.jpg')"});
	$('#background-effects').css('background-position','center');
	$('#background-effects').css('background-size','cover');
	
	$('#weather-effects').css({"background-image" : "url('./img/clear.png	')"});
	$('#weather-effects').css('background-position','center');
	$('#weather-effects').css('background-size','cover');
	
}
else
{
    $('#background-effects').css({"background-image" : "url('./img/rain.jpg')"});
	$('#background-effects').css('background-position','center');
	$('#background-effects').css('background-size','cover');
	$('div').css('color','#FFF');
	
	$('#weather-effects').css({"background-image" : "url('./img/clear-night.png	')"});
	$('#weather-effects').css('background-position','center');
	$('#weather-effects').css('background-size','cover');
}


 $("body").niceScroll();
$("#main-frame").niceScroll();
}






         function calcHeight()
         {
        
			 document.getElementById('main-frame').style.opacity=1;
		  document.getElementById('loading').style.display="none";
         var the_height=
         document.getElementById('main-frame').contentWindow.
         document.body.scrollHeight;

         //change the height of the iframe
         document.getElementById('main-frame').height=
         the_height+15;
	 resizeHandlers();


		 }



function loadUrl(url,div)
{
	if(div!=null)
	{
	 $(".level-marker").css({"opacity":"0.7"});
	 div.style.opacity=1;
	}
	 document.getElementById('main-frame').src=url;
	 document.getElementById('main-frame').style.opacity=0.1;
	 document.getElementById('loading').style.display="inline";
	 resizeHandlers();
}


function resizeHandlers()
{
	$("body").getNiceScroll().resize();

$("#main-frame").getNiceScroll().resize();

}

function changeWeather(w)
{
	
if(w=="day")
{
	
	$('#background-effects').css({"background-image" : "url('./img/sunny.jpg')"});
	$('#background-effects').css('background-position','center');
	$('#background-effects').css('background-size','cover');
	
	$('#weather-effects').css({"background-image" : "url('./img/clear.png	')"});
	$('#weather-effects').css('background-position','center');
	$('#weather-effects').css('background-size','cover');
		
}
else
{
	
    $('#background-effects').css({"background-image" : "url('./img/rain.jpg')"});
	$('#background-effects').css('background-position','center');
	$('#background-effects').css('background-size','cover');
	$('div').css('color','#FFF');
	
	$('#weather-effects').css({"background-image" : "url('./img/clear-night.png	')"});
	$('#weather-effects').css('background-position','center');
	$('#weather-effects').css('background-size','cover');
}
}