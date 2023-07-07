<?php

session_start();
$name = $_POST['name'];
$lastName = $_POST['lastname'];
$pMail = $_POST['pmail'];
$cMail = $_POST['cmail'];
$rol = $_POST['rol'];
$image = $_POST['urlimage'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();

$url = $sub_domain . "/crystalGateway/apiCore/v1/postUsersBySuperAdmin".$_SESSION['ranCode']."/".$_SESSION['key'];
// Definir los datos a enviar en la solicitud POST
$data = array(
    'name' => $name, 
    'lastName' => $lastName,
    'personalMail' => $pMail, 
    'companyMail' => $cMail,
    'ownerId' => $_SESSION['profileId'], 
    'rolId' => $rol,
    'imageUrl' => $image
);

// Convertir los datos a formato JSON
$json_data = json_encode($data);

// Inicializar la sesión cURL
$curl = curl_init();

// Configurar las opciones de la sesión cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



// Ejecutar la solicitud y obtener la respuesta
$response1 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta
echo $response1;
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "true";
    $_SESSION["mensaje"] = "Usuario creado correctamente";
    $_SESSION["error"] = $response1;

 
    header('Location: ../session.php');
}

if (strtolower($response1) === "false") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = "Error al crear usuario";
    $_SESSION["error"] = $response1;
 
  
    
    header ('Location: ../session.php');
}
?>
