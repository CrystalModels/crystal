<?php

session_start();

$uname=$_SESSION['userName'];
$keyword=$_POST['keyword'];
$newk=$_POST['nkeyword'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();




$url = '' . $sub_domain . '/crystalGateway/apiCore/v1/changeKeywordSession/'.$_SESSION['key'];
//$browser = base64_encode($_SERVER['HTTP_USER_AGENT']);
// Definir los datos a enviar en la solicitud POST
$data = array(
    'userName' => $uname,
    'keyword' => $keyword,
    'newkeyWord' => $newk
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
$response2 = curl_exec($curl);

// Cerrar la sesión cURL
curl_close($curl);

$array = explode("*", $response2);

$response12=$array[0];

//echo $_SESSION['key'];

$response1 = trim($response12); 
//echo $_SESSION['key'];
if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
   

    $message=$array[1];

    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    header ('Location: ../session.php');
}



if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
   
    $message=$array[1];
    $_SESSION["respuesta"] = "false";
    $_SESSION["mensaje"] = "¡Contraseña incorrecta!";
    $_SESSION["error"] = $message;
   
    header ('Location: ../session.php');
}
?>
