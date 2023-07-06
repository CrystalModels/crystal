<?php

session_start();
$name = $_POST['name'];
$vchange = $_POST['vchange'];
$symbol = $_POST['symbol'];
$currency = $_POST['currency'];
$comparative = $_POST['comparative'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();

$url = '' . $sub_domain . '/crystalGateway/apiIntegrations/v1/postCurrency/';

// Definir los datos a enviar en la solicitud POST
$data = array(
    'name' => $name, 
    'currentValue' => $vchange,
    'currency' => $currency,
    'comparative' => $comparative,
    'symbol' => $symbol
);

// Convertir los datos a formato JSON
$json_data = json_encode($data);

// Inicializar la sesión cURL
$curl = curl_init();

// Configurar las opciones de la sesión cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Agregar los headers
$headers = array(
    'Content-Type: application/json', // Tipo de contenido JSON
    'Api-Key: '.$_SESSION['ranCode'], // Token de autorización
    'x-api-Key: '.$_SESSION['key']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud y obtener la respuesta
$response1 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta
echo $response1;
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "true";
    $_SESSION["mensaje"] = "Moneda creada correctamente";
    $_SESSION["error"] = $response1;
 
 
    header('Location: ../session.php');
}

if (strtolower($response1) === "false") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = "Error al crear moneda";
    $_SESSION["error"] = $response1;

  
    
    header ('Location: ../session.php');
}
?>