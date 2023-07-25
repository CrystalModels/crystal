

<?php
require_once 'env/domain.php';
require_once 'env/codes.php';
session_start();
$sub_domaincon=new model_dom();
$sub_domain=$sub_domaincon->dom();
$codes=new model_code();
$code=$codes->domcode();
$response = file_get_contents($sub_domain.'/crystalGateway/apiCore/v1/getSecretKey/'.$code, false);
         
   $_SESSION['key']= trim($response);
   $_SESSION['sessionStatus']="0";
   
//echo $response;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  <title>Iniciar - Crystal Models</title>
  <link rel="stylesheet" href="style/styleLogin.css">


</head>
<body>
    

  <div class="login-container">
    
<?php
require_once 'env/option.php';
$opt=new model_option();
$opt1=$opt->dom();

if($opt1=="1"){
echo "<H2>ESTE ES UN AMBIENTE LOCAL<H2>";
}
if($opt1=="2"){
  echo "<H2>ESTE ES UN AMBIENTE DE DESARROLLO<H2>";
}
if($opt1=="3"){
  echo "<H2>ESTE ES UN AMBIENTE DE PRUEBAS<H2>";
}


?>
    <h2><img src="public/logo.png" alt="Crystal Models"></h2>
    <form method="post" action="controller/controllerValidateFirstStep.php">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <div class="form-group">
        <button type="submit">Iniciar sesión</button>
      </div>

      

    </form>
    
    <div class="forgot-password">
      <a href="#" onclick="openModalmyModalForgotPass();">¿Olvidaste tu contraseña?</a>
    </div>
    <div class="forgot-password">
      <a href="#" onclick="openModalmyModalCloseSession();">Cerrar sesión en otros dispositivos</a>
    </div>

    <div class="forgot-password">
      <?php
      require_once 'version/version.php';
      $sub_domaincon = new model_ver();
      echo $sub_domain = $sub_domaincon->versioning();
      ?>
  </div>

  </div>

</body>
</html>

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
?>