<!DOCTYPE html>
<html>
<head>
  <title>WEATHER UPDATE</title>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
intefrity="sha256-hwg4gsxgFZhOsEEamdOVGBf13fyQuiTwlAQgxVSNgta="
crossorigin="anonymous"></script>
</head>
<body>

<input id="city"></input>
<button id="getWeatherForcast">Get Weather</button>
<div id="showWeatherForcast"></div>


<script type="text/javascript">
  $(document).ready(function() {
    $("#getWeatherForcast").click(function(){
      var city = $("#city").val();
      var key = '8df08730e309d4e3f7164b6abd5a7735';


      $.ajax({  
        url: 'https://api.openweathermap.org/data/2.5/weather',
        dataType:'json',
        type:'GET',
        data:{q:city, appid: key, units: 'metric'},

        success: function(data){
        	var wf='';
        	$.each(data.weather, function(index, val){
        		wf += '<p><br>' + data.name + "</b><img src="+ val.icon +".png></p>"+
        		data.main.temp + '&deg;C' + '|' + val.main + "," + val.description
        	});
        	$("#showWeatherUpdate").html(wf)
        }



      });
    });

  });


</script>

</body>
</html>
