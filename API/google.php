<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API DE GOOGLE</title>
</head>
<body>
    <form action="" method="GET">
        <label for="direccion">Ingrese su ubicación</label>
        <br>
        <br>
        <input type="text" name="direccion">
        <button type="submit">Consultar</button>
    </form>
</body>
</html>

<?php

if (isset($_GET['direccion']))
{

    $direccion = $_GET['direccion'];
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$direccion."&key=AIzaSyC8pozs1hxaly7msnsuc3RuVJ10DOR7gaQ";
    $json = file_get_contents($url);
    $datos = json_decode($json,true);
    $address = $datos["results"][0]["formatted_address"];
    $lat = $datos["results"][0]["geometry"]["location"]["lat"];
    $lng = $datos["results"][0]["geometry"]["location"]["lng"];

    echo "<br>Mostrando resultados para: ". $address;
    echo "<br>La latitud es: ".$lat;
    echo "<br>La longitud es: ".$lng;
    
}

?>