<?php

session_start();
$name = $_POST['name'];
$cvalue = $_POST['cvalue'];
$symbol = $_POST['symbol'];
$curId = $_GET['currencyId'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/putCurrency/".$_SESSION['ranCode']."/".$_SESSION['key'];

// Definir los datos a enviar en la solicitud POST
$data = array(
    'name' => $name, 
    'currentValue' => $cvalue,
    'symbol' => $symbol,
    'curId' => $curId
    
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

//$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta

$array = explode("*", $response1);

$response12=$array[0];
$message=$array[1];
//echo $_SESSION['key'];

$response1 = trim($response12); // Eliminar espacios en blanco alrededor de la respuesta

if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    
 
  
    header ('Location: ../currency.php?currencyId='.$curId);
}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    
  
    
  
    header ('Location: ../currency.php?currencyId='.$curId);
}
?>
