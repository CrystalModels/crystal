<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["foto"])) {
    $nombreArchivo = $_FILES["foto"]["name"];
    $rutaTempArchivo = $_FILES["foto"]["tmp_name"];
    $directorioDestino = "fotos/"; // Directorio donde se guardarán las fotos

    // Mover el archivo desde la ruta temporal al directorio destino
    if (move_uploaded_file($rutaTempArchivo, $directorioDestino . $nombreArchivo)) {
        echo "La foto se ha subido correctamente.";
    } else {
        echo "Error al subir la foto.";
    }
}
?>