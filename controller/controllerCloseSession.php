<?php

session_start();

$sessionId=$_GET['sessionId'];
$usename=$_SESSION['userName'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();




$url = '' . $sub_domain . '/crystalGateway/apiCore/v1/closeSession/'.$_SESSION['key'];
//$browser = base64_encode($_SERVER['HTTP_USER_AGENT']);
// Definir los datos a enviar en la solicitud POST
$data = array(
    'userName' => $usename,
    'sessionId' => $sessionId
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

// Agregar los headers

//curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud y obtener la respuesta
$response1 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

$array = explode("*", $response1);

$response12=$array[0];
$message=$array[1];

$response1 = trim($response12); // Eliminar espacios en blanco alrededor de la respuesta

//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
   

    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = "true";

  
    header ('Location: ../closeSession.php');
}



if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
 
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = "true";
    header ('Location: ../closeSession.php');
}
?>
