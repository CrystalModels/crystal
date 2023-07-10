


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
    <form method="post" action="controller/controllerChangePassSession.php">

    <div class="form-group">
       
    <label for="nkeyword">Recuerde que la contraseña debe contener mínimo 8 carácteres (MAYúSCULAS, minúsculas y simbolos *.-_?¡¿!)</label>
      <div class="form-group">
        <label for="keyword">Contraseña Actual</label>
        <input type="password" id="keyword" name="keyword" placeholder="Contraseña actual" required>
      </div>
      
      <div class="form-group">
        <label for="nkeyword">Nueva contraseña</label>
        <input type="password" id="nkeyword" name="nkeyword" placeholder="Nueva contraseña" required>
      </div>
      
      
      <div class="form-group">
        <button type="submit">Actualizar</button>
      </div>

    </form>

  </div>

 
</body>
</html>
