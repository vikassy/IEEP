    function date()
	{
	 var today = new Date();
	 var dd = today.getDate();
	 var yyyy = today.getFullYear();
	 
     var month=new Array();
     month[0]="January";
	 month[1]="February";
	 month[2]="March";
	 month[3]="April";
	 month[4]="May";
	 month[5]="June";
	 month[6]="July";
	 month[7]="August";
	 month[8]="September";
	 month[9]="October";
	 month[10]="November";
	 month[11]="December";
	 var mm = month[today.getMonth()]; 
	 today = dd+' '+mm+' '+yyyy;
	 document.getElementById('todate').innerHTML=today;	
	}
	
	function counter() {

    popstat=5946422755;
    poprate=2.4452;
    today=new Date()
    statsdate = new Date("February 1, 1999");
    offset = today.getTimezoneOffset()*60*1000
    diffpop = (( today.getTime() + offset ) - statsdate.getTime() ) / 1000
    var newpop = Math.ceil(popstat + (diffpop * poprate));
    newpop = "" + newpop;
    p1 = newpop.substring(0,1)
    p2 = newpop.substring(1,4)
    p3 = newpop.substring(4,7)
    p4 = newpop.substring(7,10)
    var pops= p1 + "," + p2 + "," + p3 + "," + p4;
    var popul = document.getElementById("poo");
    popul.innerHTML = pops;
    setTimeout('counter()',200);
}//end of counter()

function temp_poll()
{	


var place='Mangalore';
$.ajax({
    url:"http://free.worldweatheronline.com/feed/weather.ashx?q=" +place+ ",india&format=json&num_of_days=2&key=9a60bafee0055049122209",
    dataType: 'jsonp',  // You  need to use 'jsonp' here because it is cross domain request 
    success: function(data) {
        $.each(data, function(index, value) {
   
			document.getElementById('weather-data').innerHTML= place+"<br/>"+value.current_condition[0].weatherDesc[0].value + "<br/>" + value.current_condition[0].temp_C + "&deg;C";
         
            
        });
    }
});


$.ajax({
    url:"poll.php",
    success: function(data) {
      document.getElementById("poll").innerHTML=data+"<input type='button' value='yes' onclick='poll_no();' /><input type='button' value='no' onclick='poll_yes();' />";
	  qsn=data;
    }
});


}//end of temp_poll()

function poll_no()
{
	$.post('pollres.php',{p:1,q:qsn}, function(data) {
 	 document.getElementById("poll").innerHTML=data;
});  
}

function poll_yes()
{
	$.post('pollres.php', {p:1,q:qsn}, function(data) {
 	 document.getElementById("poll").innerHTML=data;
});
}

