<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_COOKIE)["miCookie"])){
    echo "Hola" . $_COOKIE["miCookie"];
}
else{


    echo '<h1>Bienvenido a nuestro sitio</h1>
    <form method = "POST" action="welcome.php">
                <label for="name">Ingresa tu nombre:</label>
                <input type="text" id="name" name="name" required>
                <input type="submit" value="Enviar">
               </form>';
    }       

    ?>
</body>
</html>