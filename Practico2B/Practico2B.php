<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos</title>
</head>
<body>
<?php
echo "<h2> titulo </h2>"

$equipos = array(

array(
"nombre" => "Nacional",
"escudo" => "",
"puntos" => 0,
"partidos_ganados" => 1,
"partidos_empatados" => 1,
"partidos_perdidos" => 0,
"goles_a_favor" => 3,
"goles_en_contra" => 2,
"diferencia" => 0
    
),

array(
    "nombre" => "Liverpol",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 2,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 3,
    "goles_en_contra" => 3,
    "diferencia" => 0
        
),
    
array(
        "nombre" => "Peñarol",
        "escudo" => "",
        "puntos" => 0,
        "partidos_ganados" => 2,
        "partidos_empatados" => 0,
        "partidos_perdidos" => 0,
        "goles_a_favor" => 4,
        "goles_en_contra" => 1,
        "diferencia" => 0
            
),
        
array(
        "nombre" => "Boston River",
        "escudo" => "",
        "puntos" => 0,
        "partidos_ganados" => 1,
        "partidos_empatados" => 1,
        "partidos_perdidos" => 0,
        "goles_a_favor" => 2,
        "goles_en_contra" => 1,
        "diferencia" => 0
                
),

array(
        "nombre" => "Progreso",
        "escudo" => "",
        "puntos" => 0,
        "partidos_ganados" => 2,
        "partidos_empatados" => 0,
        "partidos_perdidos" => 0,
        "goles_a_favor" => 6,
        "goles_en_contra" => 4,
        "diferencia" => 0
                
),
 
array(
    "nombre" => "Danubio",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 1,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 2,
    "goles_en_contra" => 1,
    "diferencia" => 0
        
),
    
array(
    "nombre" => "Cerro Largo",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 1,
    "goles_a_favor" => 1,
    "goles_en_contra" => 2,
    "diferencia" => 0
        
),

array(
    "nombre" => "Wanders",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 1,
    "goles_a_favor" => 1,
    "goles_en_contra" => 2,
    "diferencia" => 0
        
),
    
array(
    "nombre" => "Fénix",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 1,
    "goles_a_favor" => 1,
    "goles_en_contra" => 2,
    "diferencia" => 0
        
),

array(
    "nombre" => "Rampla",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 0,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 0,
    "goles_en_contra" => 0,
    "diferencia" => 0
        
),

array(
    "nombre" => "Miramar Misiones",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 0,
    "partidos_perdidos" => 2,
    "goles_a_favor" => 2,
    "goles_en_contra" => 5,
    "diferencia" => 0
        
),

array(
    "nombre" => "Deportivo Maldonado",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 0,
    "partidos_perdidos" => 2,
    "goles_a_favor" => 2,
    "goles_en_contra" => 5,
    "diferencia" => 0
        
),

array(
    "nombre" => "Cerro",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 0,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 2,
    "goles_a_favor" => 3,
    "goles_en_contra" => 9,
    "diferencia" => 0
        
),

array(
    "nombre" => "Defensor",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 2,
    "partidos_empatados" => 0,
    "partidos_perdidos" => 0,
    "goles_a_favor" => 7,
    "goles_en_contra" => 1,
    "diferencia" => 0
        
),

array(
    "nombre" => "Racing",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 1,
    "partidos_empatados" => 1,
    "partidos_perdidos" => 1,
    "goles_a_favor" => 4,
    "goles_en_contra" => 4,
    "diferencia" => 0
        
),

array(
    "nombre" => "River",
    "escudo" => "",
    "puntos" => 0,
    "partidos_ganados" => 1,
    "partidos_empatados" => 0,
    "partidos_perdidos" => 1,
    "goles_a_favor" => 4,
    "goles_en_contra" => 3,
    "diferencia" => 0
            
)
        
)
$cantidad_de_equipos = sizeof ($equipos) -1;
for ($i=0; $i < $cantidad_de_equipos; $i++) { 
    $equipos [$i] ["puntos"] = $equipos [$i] ["partidos_ganados"] *3 + $equipos [$i] ["partidos_empatados"]; 
    
}

for ($i=0; $i < $cantidad_de_equipos ; $i++) { 
    $equipos [$i] ["diferencia"] = $equipos [$i] ["goles_a_favor"] - $equipos [$i] ["goles_en_contra"]; 
}

echo
?>
</body>
</html>

