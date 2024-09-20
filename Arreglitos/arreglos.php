<?php
$departamentos = ["Colonia", "Artigas", "Montevideo", "Canelones", "Lavalleja", "Maldonado","Durazno","Cerro Largo","Flores", "Florida","Paysandú","Río Negro","Rivera","Rocha","Salto","San José","Soriano","Tacuarembó","Treinta y Tres"];
$capitales = ["Colonia del Sacramento", "Artigas","Montevideo","Canelones","Minas","Montevideo", "Durazno", "Melo", "Trinidad","Florida", "Paysandú","Fray Bentos", "Rivera", "Rocha","Salto", "San José de Mayo", "Mercedes", "Tacuarembó","Treita y Tres"];
$result = array_merge($departamentos, $capitales);
sort($result);
count($result);

$quitar = array_pop($result);

print_r($result);




?>