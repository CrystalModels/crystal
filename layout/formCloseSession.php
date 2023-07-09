


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
    <h2><img src="public/logo.png" alt="Crystal Models"></h2>
    <form method="post" action="controller/controllerHasCode.php">

    <div class="form-group">
        <label for="username">Escribe código de confirmación y nueva contraseña</label>  </div>
     
      <div class="form-group">
       

<?php
session_start();
      require_once 'tableSessions.php';
      ?>

      </div>

    </form>

  </div>

 
</body>
</html>
