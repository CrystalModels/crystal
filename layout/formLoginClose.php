



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
    <form method="post" action="controller/controllerValidateFirstStepCancel.php">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
      </div>
      <div class="form-group">
        <button type="submit">Validar</button>
      </div>

      

    </form>
    
  </div>

</body>
</html>
