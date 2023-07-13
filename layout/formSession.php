<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar - Crystal Models</title>
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  <link rel="stylesheet" href="style/styleSession.css">
  <style>
    .form-container {
      max-height: 400px;
      overflow-y: auto;
    }
  </style>


</head>
<body>




    <div class="form-container">
        
      <form>
        
      <h2>USUARIOS</h2>
      <?php require_once 'layout/tableUsersSuperAdmin.php';?>
      <h2>ROOMS</h2>
      <?php
      require_once 'layout/tableRooms.php';
      ?>
      <script>getUsersSuperAdmin();getRooms();</script>
      </form>
    </div>
    

  <div class="theme-toggle">
        <input type="checkbox" id="theme-toggle-checkbox">
        <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
      </div>
  <script src="scripts/scriptDarkMode.js">


  </script>

   
<body>
    
</body>
</html>


</html>
