



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style/styleSession.css">


</head>
<body>
    
  
    
    <form method="post" action="controller/controllerPostReminds.php">
      <div class="form-group">
        <label for="remind">Recordatorio</label>
        <input type="text" id="remind" name="remind" placeholder="Ingresa recordatorio" required>
      </div>
  
      
 <div class="form-group">
 <label for="rtype">Tipo de Recordatorio</label>
<select id="repos-select" class="form-group table-button" name="rtype">

<option value="personal">Personal</option>
  <option value="general">General</option>


</select>

      </div>

      <div class="form-group">
        <label for="rdate">Fecha</label>
        <input type="date" id="rdate" name="rdate">
      </div>
      <div class="form-group">
        <label for="rtime">Hora</label>
        <input type="time" id="hora" name="rtime">
      </div>

      <div class="form-group">
        <button type="submit">Crear recordatorio</button>
      </div>
      </div>
      
      
    </form>
    
  

  

 
</body>
</html>
