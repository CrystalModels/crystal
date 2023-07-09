


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
    <form method="post" action="controller/controllerValidateFirstStep.php">

    <div class="form-group">
        <label for="username">Se enviará un código de recuperación a tu correo Empresarial</label>  </div>
     
      <div class="form-group">
        <label for="username">Usuario / Correo Empresarial</label>
        <input type="text" id="username" name="username" placeholder="Ingrese su usuario" required>
      </div>
     
      
      <div class="form-group">
        <button type="submit">Enviar código</button>
      </div>

    </form>
     <div class="forgot-password">
      <a href="#" onclick="openModalmyModalHasCode();">Ya tengo código de recuperación</a>
    </div>
  </div>

 
</body>
</html>
