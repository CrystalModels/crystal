

<?php
require_once 'env/domain.php';
session_start();
$sub_domaincon=new model_dom();
$sub_domain=$sub_domaincon->dom();
$response = file_get_contents($sub_domain.'/crystalGateway/apiCore/v1/getSecretKey/c66e63ca-fa63-42c8-95e7-eab4db5d41d8', false);
         
   $_SESSION['key']= trim($response);
  
//echo $response;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar - Crystal Models</title>
  <link rel="stylesheet" href="../style/styleLogIn.css">


</head>
<body>
    

  <div class="login-container">
    <h2><img src="public/logo.png" alt="Crystal Models"></h2>
    <form method="post" action="controller/controllerValidateFirstStep.php">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
      </div>
      <div class="form-group">
        <button type="submit">Iniciar sesión</button>
      </div>
    </form>
    <div class="forgot-password">
      <a href="#">¿Olvidó su contraseña?</a>
    </div>
  </div>

  <div class="theme-toggle">
    <input type="checkbox" id="theme-toggle-checkbox">
    <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
  </div>

  <script src="scripts/scriptDarkMode.js"></script>
</body>
</html>
