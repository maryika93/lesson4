<?php
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=Omsk,ru&units=metric&APPID=1493baecbc388deebfa091b42ae63850';
    $content = file_get_contents($url);
    $cont_arr = json_decode($content,true);

        echo '<pre>';
        print_r($cont_arr);

    $n = $cont_arr['name'];
    $tmain = $cont_arr["main"];
    $t = $tmain["temp"];
    $c = $cont_arr["weather"]["0"]["description"];
    $c_all = $cont_arr["clouds"]["all"];
    $p = $tmain["pressure"];
    $h = $tmain["humidity"];
    $w = $cont_arr["wind"]["speed"];
    $wd = $cont_arr["wind"]["deg"];

    $City = 'The weather in '.$n.'.';
    $Weather = 'Temperature: '.$t.' °C. ';
    $Cloud = 'Clouds: '.$c.' '.$c_all.'. ';
    $press = 'Pressure: '.$p.' Па. ';
    $hum = 'Humidity: '.$h.'. ';
    $wind = 'Wind: '.$w. ' m/s. ';
    $wind_deg = 'Wind deg: '.$wd.'.';

        echo '<pre>';
        print_r($City);
        print_r($Weather);
        print_r($Cloud);
        print_r($press);
        print_r($hum);
        print_r($wind);
        print_r($wind_deg);
?>

