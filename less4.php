<?php
$url = 'http://api.openweathermap.org/data/2.5/weather?q=Omsk,ru&units=metric&APPID=1493baecbc388deebfa091b42ae63850';
$content = file_get_contents($url);
$cont_arr = json_decode($content,true);
echo '<pre>';
print_r($cont_arr);
$City = 'The weather in '.$cont_arr['name'].'.';
$Weather = 'Temperature: '.$cont_arr["main"]["temp"].' °C. ';
$Cloud = 'Clouds: '.$cont_arr["weather"]["0"]["description"].' '.$cont_arr["clouds"]["all"].'. ';
$press = 'Pressure: '.$cont_arr["main"]["pressure"].'. ';
$hum = 'Humidity: '.$cont_arr["main"]["humidity"].'. ';
$wind = 'Wind: '.$cont_arr["wind"]["speed"]. ' m/s. ';
$wind_deg = 'Wind deg: '.$cont_arr["wind"]["deg"].'.';
echo '<pre>';
print_r($City);
print_r($Weather);
print_r($Cloud);
print_r($press);
print_r($hum);
print_r($wind);
print_r($wind_deg);
?>

