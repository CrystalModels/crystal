<?php

session_start();
$remind = $_POST['remind'];
$rtype = $_POST['rtype'];
$rdate = $_POST['rdate'];
$rtime = $_POST['rtime'];


 

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];

$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/postReminds/".$_SESSION['ranCode']."/".$_SESSION['key'];



// Definir los datos a enviar en la solicitud POST
$data = array(
    'comments' => $remind, 
    'remindType' => $rtype,
    'profileId' => $_SESSION['profileId'], 
    'ownerId' => $_SESSION['profileId'],
    'rDate' => $rdate, 
    'rTime' => $rtime
);

// Convertir los datos a formato JSON


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

$response12=$array[0];
$message=$array[1];
//echo $_SESSION['key'];

$response1 = trim($response12); // Eliminar espacios en blanco alrededor de la respuesta

if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    //echo $response1;
   // echo $json_data;
    header('Location: ../session.php');
}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    //echo $response1;
   // echo $json_data;
   header ('Location: ../session.php');
}
?>
