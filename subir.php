<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["foto"])) {
    $nombreArchivo = $_FILES["foto"]["name"];
    $rutaTempArchivo = $_FILES["foto"]["tmp_name"];
    $directorioDestino = "public/"; // Directorio donde se guardarán las fotos
    $nombreArchivo1=$_GET['profileId'];
    // Mover el archivo desde la ruta temporal al directorio destino
    if (move_uploaded_file($rutaTempArchivo, $directorioDestino . $nombreArchivo1."-".$nombreArchivo)) {
        echo "La foto se ha subido correctamente.";
        header('Location: session.php');
        
    } else {
        echo "Error al subir la foto.";
    }
}
?>

<?php
$carpeta = 'public'; // Nombre de la carpeta con las imágenes
$ID_a_buscar = $_GET['profileId']; // ID que quieres buscar

// Función para filtrar archivos que empiecen con el ID especificado
function filtrarPorID($archivo, $ID_a_buscar) {
    return strpos($archivo, $ID_a_buscar . '-') === 0;
}

// Obtener la lista de archivos en la carpeta
$archivos = scandir($carpeta);

// Filtrar solo los archivos que cumplen con la condición del ID
$imagenes_con_ID = array_filter($archivos, function($archivo) use ($ID_a_buscar) {
    return filtrarPorID($archivo, $ID_a_buscar);
});

// Mostrar las imágenes en pantalla
foreach ($imagenes_con_ID as $imagen) {
    echo '<br><img src="' . $carpeta . '/' . $imagen . '" alt="' . $imagen . '" width="200" height="150">';
}
?>
