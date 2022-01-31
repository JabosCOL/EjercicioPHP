<?php

    require '..\class\vehiculo.php';

    $auto = new vehiculo("Mazda", "Gris", "2022", "35S87A96B", "5332525");

    $venta = $auto->valorVenta(21500000,35);
    $auto->setPropietario("David Bolívar");
    $propietario = $auto->getPropietario();

    echo "Felicidades Sr ".$propietario." por la compra de su nuevo ".$auto->marca.
    " modelo ".$auto->modelo. " por el monto total de: $".$venta;


?>