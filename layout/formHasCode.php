


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
        <label for="username">Escribe el código de confirmación y nueva contraseña</label>  </div>
     
      <div class="form-group">
        <label for="vcode">Código de confirmación</label>
        <input type="password" id="vcode" name="vcode" placeholder="Ingresa código de confirmación" required>
      </div>
      
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="password" id="username" name="username" placeholder="Ingresa tu usuario" required>
      </div>
      
      <div class="form-group">
        <label for="keyword">Nueva Contraseña</label>
        <input type="password" id="keyword" name="keyword" placeholder="Ingresa tu nueva contraseña" required>
      </div>
     
      
      <div class="form-group">
        <button type="submit">Validar</button>
      </div>

    </form>

  </div>

 
</body>
</html>
