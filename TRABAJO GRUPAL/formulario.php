<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['Menu1']);
    $categoria = htmlspecialchars($_POST['categoria']);
    $precio = htmlspecialchars($_POST['precio']);
    $carpetaDestinoImagen = "imagenes/";
    
    echo  $precio;
   //  if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0 && is_uploaded_file($_FILES['Imagen']['tmp_name'])) {
       /*  $nombreImagen = $_FILES['Imagen']['name'];
        $tipoImagen = $_FILES['Imagen']['type'];
        $tamanoImagen = $_FILES['Imagen']['size'];
        $rutaTemporal = $_FILES['Imagen']['tmp_name'];
        $rutaDestino = $carpetaDestinoImagen . basename($nombreImagen);

        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "<h2>Imagen subido exitosamente:</h2>";
            echo "Nombre: " . $nombre . "<br>";
            echo "categoria";
            echo "precio" ;
            echo "Imagen: " . $nombreImagen . "<br>";
            echo "Tipo: " . $tipoImagen . "<br>";
            echo "Tamaño: " . ($tamanoImagen / 1024) . " KB<br>";
            echo "Ruta: " . $rutaDestino . "<br>";
        } else {
            echo "Hubo un error al subir el Imagen. Por favor, inténtelo de nuevo.";
        } */
    


        $carpetaDestino = 'uploads/';array(
            'categoria' => $categoria,
            'nombre' => $nombre,
            'precio' => $precio
          
        );

        $Imagen_json = 'procesador.json';
        

        if (!file_exists($Imagen_json)) {
            $contenido_actaul =file_get_contents($Imagen_json);
            $array_datos = json_decode($contenido_actual, true);
 
        } else {
            $array_datos = array();
        }
        $array_datos[] = $datos;
        

        file_put_contents($Imagen_json, json_decode($array_datos, JSON_PRETTY_PRINT));

        
        



  //  } else {
  //      echo "No se ha seleccionado ningún Imagen o hubo un error en la subida.";
  //  }
} else { 

    echo "Método no permitido.";
}
?>
