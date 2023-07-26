<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crystal Models</title>
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  
  <style>
  .form-container {
  max-height: 800px; /* Establecer la altura máxima deseada */
  overflow-y: auto; /* Agregar desplazamiento vertical */
  padding: 20px;
  margin: auto;
}


@media screen and (max-width: 768px) {
  .form-container {
    max-width: 100%; /* Hacer el formulario ocupar el ancho completo en pantallas pequeñas */
  }
}

  </style>


</head>
<body>


<h2><img src="public/logo.png" alt="Crystal Models"></h2>
        

    
    

  <div class="theme-toggle">
        <input type="checkbox" id="theme-toggle-checkbox">
        <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
      </div>
  <script src="scripts/scriptDarkMode.js">


  </script>

</body>





<style>
          footer {
            background-color: #f0f0f0;
            padding: 5px;
            text-align: center;
            font-size: 10px;
            color: #555;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
<footer>
        <div>
            <p>Versión del software: <?php
      require_once 'version/version.php';
      $sub_domaincon = new model_ver();
      echo $sub_domain = $sub_domaincon->versioning();
      ?></p>
            <p>&copy; 2023 Todos los derechos reservados</p>
            <p>Soporte: soporte@example.com</p>
            <p><a class="table-button" href="room.php?roomId=${student.roomId}" target="_blank">Versiones anteriores</a></p>
        </div>
    </footer>
</html>


