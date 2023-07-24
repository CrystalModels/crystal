// list_images.php

<?php
// Ruta de la carpeta que contiene las imágenes
$carpeta_imagenes = 'public';

// Obtener la lista de nombres de archivos en la carpeta
$archivos = scandir($carpeta_imagenes);

// Filtrar solo los archivos de imagen (puedes ajustar esta condición según los tipos de imágenes que quieras incluir)
$imagenes = array_filter($archivos, function($archivo) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $archivo);
});

// Enviar la lista de nombres de imágenes como respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($imagenes);
?>
