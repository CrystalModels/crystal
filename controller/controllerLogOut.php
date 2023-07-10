<?php

session_start();


require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();




$url = '' . $sub_domain . '/crystalGateway/apiCore/v1/validateLogOut/'.$_SESSION['key'];
$browser = base64_encode($_SERVER['HTTP_USER_AGENT']);
// Definir los datos a enviar en la solicitud POST
$data = array(
    'profileId' => $_SESSION['profileId'],
    'sessionId' =>$_SESSION['sessionId']
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

$response1=$array[0];
$message=$array[1];
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
   
    $_SESSION['userName'] = $user;
    $_SESSION['sessionId'] = $parts[1];

    // Borrar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

echo '<script>
sessionStorage.clear();

<script/>';
    header ('Location: ../index.php');}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = $response1;
    $_SESSION["error"] = $response1;
    $_SESSION['userName'] = $user;
   
    //header ('Location: ../index.php');
}
?>
