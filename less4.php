<?php

$cityurl = 'Omsk';
$metric = 'units=metric';
$key = '1493baecbc388deebfa091b42ae63850';
$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$cityurl.',ru&'.$metric.'&APPID='.$key;
$content = file_get_contents($url);
$cont_arr = json_decode($content,true);

$filename = 'D:\netology\lesson4\less4.json';
$jsonfile = fopen($filename, "w");
fwrite($jsonfile, $content);
fclose($jsonfile);

if (file_exists($filename)) {
    $gg = date("G", filectime($filename));
    $data = date("G");
    if ($gg<=$data+1) {
        $content = file_get_contents($filename);
        $cont_arr = json_decode($content,true);
    }
    else{
        $content = file_get_contents($url);
        $cont_arr = json_decode($content,true);
        $filename = 'D:\netology\lesson4\less4.json';
        $jsonfile = fopen($filename, "w");
        fwrite($jsonfile, $content);
        fclose($jsonfile);
    }
}

$n = $cont_arr['name'];
$tmain = $cont_arr["main"];
$t = $tmain["temp"];
$c = $cont_arr["weather"]["0"]["description"];
$c_all = $cont_arr["clouds"]["all"];
$p = $tmain["pressure"];
$h = $tmain["humidity"];
$w = $cont_arr["wind"]["speed"];

$City = 'The weather in '.$n.'.';
$Weather = $t.' °C. ';
$Cloud = $c.' '.$c_all.'. ';
$press = $p.' Па. ';
$hum = $h.'. ';
$wind = $w. ' m/s. ';

?>

<h1><?= $City ?></h1>
<table>
    <tr>
        <td>Temperature:</td>
        <td><?= $Weather ?></td>
    </tr>
    <tr>
        <td>Clouds:</td>
        <td><?= $Cloud ?></td>
    </tr>
    <tr>
        <td>Pressure:</td>
        <td><?= $press ?></td>
    </tr>
    <tr>
        <td>Humidity:</td>
        <td><?= $hum ?></td>
    </tr>
    <tr>
        <td>Wind:</td>
        <td><?= $wind ?></td>
</table>



