<?php

session_start();
$name = $_POST['name'];
$comments = $_POST['comments'];


require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];

$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/postRooms/".$_SESSION['ranCode']."/".$_SESSION['key'];

echo $url;

// Definir los datos a enviar en la solicitud POST
$data = array(
    'name' => $name, 
    'comments' => $comments
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
$headers = array(
    'Content-Type: application/json'
);
curl_setopt($curl1, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud y obtener la respuesta
$response1 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta
echo $response1;
echo $json_data;
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "true";
    $_SESSION["mensaje"] = "Room creado correctamente";
    $_SESSION["error"] = $response1;
    echo $response1;
    echo $json_data;
    //header('Location: ../session.php');
}

if (strtolower($response1) != "false") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = "Error al crear room";
    $_SESSION["error"] = $response1;
    echo $response1;
    echo $json_data;
    //header ('Location: ../session.php');
}
?>
