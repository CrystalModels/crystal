<?php


$nombreCarpeta = $_GET['profileId']; // Nombre de la carpeta que deseas crear
$rutaCarpeta = "../public/images/" . $nombreCarpeta; // Ruta completa de la nueva carpeta

// Verificar si la carpeta ya existe antes de intentar crearla
if (!is_dir($rutaCarpeta)) {
    // Crear la carpeta con permisos 0755 (puedes ajustarlos según tus necesidades)
    if (mkdir($rutaCarpeta, 0757)) {
      //  echo "La carpeta se ha creado correctamente.";
    } else {
       // echo "Error al crear la carpeta.";
    }
} else {
    //echo "La carpeta ya existe.";
}
?>
