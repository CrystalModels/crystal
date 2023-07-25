


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  <title>Iniciar - Crystal Models</title>
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    

 
    <h2><img src="public/logo.png" alt="Crystal Models"></h2>
    <form method="post" action="controller/controllerChangePassSession.php">

    <div class="form-group">
       
    <label for="nkeyword">Recuerda que la contraseña debe contener mínimo 8 carácteres (MAYúSCULAS, minúsculas, simbolos (*.-_?¡¿!) y números)</label>
      <div class="form-group">
        <label for="keyword">Contraseña Actual</label>
        <input type="password" id="keyword" name="keyword" placeholder="Ingresa contraseña actual" required>
      </div>
      
      <div class="form-group">
        <label for="nkeyword">Nueva contraseña</label>
        <input type="password" id="nkeyword" name="nkeyword" placeholder="Ingresa nueva contraseña" required>
      </div>
      
      
      <div class="form-group">
        <button type="submit">Actualizar</button>
      </div>

    </form>

 

 
</body>
</html>
