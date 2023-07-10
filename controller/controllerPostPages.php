<?php

session_start();
$name = $_POST['name'];
$urlPage = $_POST['urlpage'];
$percent = $_POST['percent'];
$currency = $_POST['currency'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();

$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/postPages/".$_SESSION['ranCode']."/".$_SESSION['key'];

// Definir los datos a enviar en la solicitud POST
$data = array(
    'pageName' => $name, 
    'urlPage' => $urlPage,
    'currency' => $currency,
    'percentValue' => $percent
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

//$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta

$array = explode("*", $response1);

$response1=$array[0];
$message=$array[1];
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;

    header('Location: ../session.php');
}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;

  
    
    header ('Location: ../session.php');
}
?>
