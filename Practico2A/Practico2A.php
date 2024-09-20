<?php
$DistanciaTotal = 400;
$Velocidad = 70;


echo ($DistanciaTotal);
echo ("km");
echo ("/");
echo ($Velocidad);
echo ("Km/h");
echo (" = ");

$TiempoTotal = $DistanciaTotal / $Velocidad; 
echo ("Hrs");

if ($Velocidad > 90) {
    echo ("|Exceso de velocidad");
}

?>