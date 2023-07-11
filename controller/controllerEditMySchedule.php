<?php

session_start();
$scheduleId = $_GET['scheduleId'];
$day = $_GET['day'];
$value = $_GET['value'];

require_once '../env/domain.php';
$sub_domaincon = new model_dom();
$sub_domain = $sub_domaincon->dom();

$url = $sub_domain . "/crystalGateway/apiIntegrations/v1/putMySchedule/".$_SESSION['ranCode']."/".$_SESSION['key'];

// Definir los datos a enviar en la solicitud POST
$data = array(
    'day' => $day, 
    'value' => $value,
    'scheId' => $scheduleId
    
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
$response12=$array[0];
//$message=$array[1];
//echo $_SESSION['key'];

$response1 = trim($response12); // Eliminar espacios en blanco alrededor de la respuesta

if (strtolower($response1) === "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;

    
   // header ('Location: ../room.php?roomId='.$roomId);
}

if (strtolower($response1) != "true") { // Convertir la respuesta a minúsculas antes de comparar
    $_SESSION["respuesta"] = $response1;
    $_SESSION["mensaje"] = $message;
    $_SESSION["error"] = $response1;
    
  
  
  
    //header ('Location: ../room.php?roomId='.$roomId);
}
?>
<script>

getSch();
 


	</script>
<style>
		.alert {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #2d572c;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}

		.alertno {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #cb3234;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}
	</style>
  <div id="alert" class="alert"></div>
	<div id="alertno" class="alertno"></div>
  


    
<?php
  
  echo '<script>
  const respuesta = "' . $_SESSION["respuesta"] . '";
  sessionStorage.setItem("respuesta", respuesta);
  const mensaje = "' . $_SESSION["mensaje"] . '";
  sessionStorage.setItem("mensaje", mensaje);
  const error = "' . $_SESSION["error"] . '";
  sessionStorage.setItem("error", error);





  
  const userId = "' . $_SESSION["userId"] . '";
  sessionStorage.setItem("userId", userId);
  const personalMail = "' . $_SESSION["personalMail"] . '";
  sessionStorage.setItem("personalMail", personalMail);
  const companyMail = "' . $_SESSION["companyMail"] . '";
  sessionStorage.setItem("companyMail", companyMail);

  
  const internalMail = "' . $_SESSION["internalMail"] . '";
  sessionStorage.setItem("internalMail", internalMail);
  const userName = "' . $_SESSION["userName"] . '";
  sessionStorage.setItem("userName", userName);
  const sessionCounter = "' . $_SESSION["sessionCounter"] . '";
  sessionStorage.setItem("sessionCounter", sessionCounter);

 
  const profileId = "' . $_SESSION["profileId"] . '";
  sessionStorage.setItem("profileId", profileId);
  const name = "' . $_SESSION["name"] . '";
  sessionStorage.setItem("name", name);
  const lastName = "' . $_SESSION["lastName"] . '";
  sessionStorage.setItem("lastName", lastName);

  const imageUrl = "' . $_SESSION["imageUrl"] . '";
  sessionStorage.setItem("imageUrl", imageUrl);
  const totalHours = "' . $_SESSION["totalHours"] . '";
  sessionStorage.setItem("totalHours", totalHours);
  const rol = "' . $_SESSION["rol"] . '";
  sessionStorage.setItem("rol", rol);
  const ranCode = "' . $_SESSION["ranCode"] . '";
  sessionStorage.setItem("ranCode", ranCode);

  const clientkey = "'.$_SESSION["key"].'";
  sessionStorage.setItem("key", clientkey);
  
  const sessionId = "'.$_SESSION["sessionId"].'";
  sessionStorage.setItem("sessionId", sessionId);


  const alerta = sessionStorage.getItem("respuesta");
  if(alerta=="true"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlert(mensaje);
  }
  if(alerta=="false"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlertno(mensaje);
  }

		function showAlert(alertas) {
    // Mostrar la alerta
    var alert = document.getElementById("alert");
    alert.innerHTML = alertas;
    alert.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alert.style.top = "-100px";
    }, 5000);
	
	//sessionStorage.removeItem("respuesta");
	//sessionStorage.removeItem("mensaje");
}

function showAlertno(alertas) {
    // Mostrar la alerta
    var alertno = document.getElementById("alertno");
    alertno.innerHTML = alertas;
    alertno.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alertno.style.top = "-100px";
    }, 5000);
	

}

  
</script>';
$_SESSION['respuesta']="";
$_SESSION['mensaje']="";
$_SESSION['error']="";
//echo $_SESSION['key'];
?>