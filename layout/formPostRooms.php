



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    
  <div class="login-container">
    
    <form method="post" action="controller/controllerPostRooms.php">
      <div class="form-group">
        <label for="name">Room</label>
        <input type="text" id="name" name="name" placeholder="Ingrese nombre de room" required>
      </div>
      <div class="form-group">
        <label for="comments">Comentarios</label>
        <input type="text" id="comments" name="comments" placeholder="Ingrese comentarios">
      </div>
      
      
      <div class="form-group">
        <button type="submit">Crear Room</button>
      </div>
    </form>
    
  </div>

  


</body>
</html>
