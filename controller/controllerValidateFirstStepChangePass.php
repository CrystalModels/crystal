<?php

session_start();
$user = $_GET['username'];
$pass = $_GET['password'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();




$url = '' . $sub_domain . '/crystalGateway/apiCore/v1/validateLogInChange/'.$_SESSION['key'];
$browser = base64_encode($_SERVER['HTTP_USER_AGENT']);
// Definir los datos a enviar en la solicitud POST
$data = array(
    'userName' => $user, 
    'keyWord' => $pass,
    'ipAdd' => $_SERVER['SERVER_ADDR'],
    'browser' => $browser
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

//curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud y obtener la respuesta
$response1 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);
//$response2 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta
$parts = explode("*", $response1);
$response12=$parts[0];
$response11=$parts[1];
//echo $_SESSION['key'];

$response1 = trim($response12); // Eliminar espacios en blanco alrededor de la respuesta

if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
   
    $_SESSION['userName'] = $user;
    $_SESSION['sessionId'] = $parts[1];
    echo $response1;
    header ('Location: ../index.php');
}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response11;
    $_SESSION["mensaje"] = $response11;
    $_SESSION["error"] = $response11;
    $_SESSION['userName'] = $user;
   
    header ('Location: ../index.php');
}
?>
