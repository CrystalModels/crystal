<?php

session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();



$headerslink = implode(' ', $headers);
$url = '' . $sub_domain . '/crystalGateway/apiCore/v1/validateLogIn/'.$_SESSION['key'];

// Definir los datos a enviar en la solicitud POST
$data = array(
    'userName' => $user, 
    'keyWord' => $pass
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

$response1 = trim($response1); // Eliminar espacios en blanco alrededor de la respuesta

//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "true";
    $_SESSION["mensaje"] = "Bienvenid@";
    $_SESSION["error"] = $response1;
    $_SESSION['userName'] = $user;
    echo $response1;
    header('Location: controllerValidateSecondStep.php');
}

if (strtolower($response1) === "false") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = "No iniciar sesión ";
    $_SESSION["error"] = $response1;
    $_SESSION['userName'] = $user;
    echo $response1;
   
    header ('Location: ../index.php');
}
?>
