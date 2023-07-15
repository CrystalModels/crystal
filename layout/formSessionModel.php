<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar - Crystal Models</title>
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

<div class="theme-toggle">
  <input type="checkbox" id="theme-toggle-checkbox" class="theme-toggle-checkbox">
  <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
</div>


<form class="form-container">
  <h2>USUARIOS</h2>

  
<?php echo $_SESSION['sessionStatus']; ?>
<?php echo $_SESSION['sessionId']; ?>
  <!-- Contenido adicional -->
</form>


        

    </div>
    
   

  <script src="scripts/scriptDarkMode.js">


  </script>

   
<body>
    
</body>


<div class="theme-toggle-left">
  <input type="checkbox" id="theme-toggle-checkbox-left" class="theme-toggle-checkbox">
  <label for="theme-toggle-checkbox-left" class="theme-toggle-label"></label>
  <span id="status-label">Desconectado</span>
</div>

<div class="option-toggle-left">
  <input type="checkbox" id="break-toggle" class="option-toggle-checkbox" disabled>
  <label for="break-toggle" class="option-toggle-label">BREAK</label>
</div>

<div class="option-toggle-left1">
  <input type="checkbox" id="lunch-toggle" class="option-toggle-checkbox" disabled>
  <label for="lunch-toggle" class="option-toggle-label">LUNCH</label>
</div>



</html>


</html>
<style>

.theme-toggle-left {
  position: fixed;
  top: 20px;
  left: 20px;
}

.theme-toggle-label {
  display: inline-block;
  width: 40px;
  height: 20px;
  background-color: #ccc;
  border-radius: 10px;
  position: relative;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.theme-toggle-checkbox {
  display: none;
}

.theme-toggle-left .theme-toggle-checkbox:checked + .theme-toggle-label {
  background-color: #9a5cab;
}

.theme-toggle-label:before {
  content: "";
  position: absolute;
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  background-color: #9a5cab;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.theme-toggle-checkbox:checked + .theme-toggle-label:before {
  transform: translateX(20px);
}

.option-toggle {
  margin-top: 10px;
  position: relative;
  display: inline-block;
}

.option-toggle-label {
  display: inline-block;
  width: 60px;
  height: 30px;
  background-color: #ccc;
  border-radius: 15px;
  position: relative;
  cursor: pointer;
  transition: background-color 0.3s ease;
  padding: 5px;
}

.option-toggle-checkbox {
  display: none;
}

.option-toggle-checkbox:checked + .option-toggle-label {
  background-color: #9a5cab;
}

.option-toggle-label:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  width: 20px;
  height: 20px;
  background-color: #9a5cab;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.option-toggle-checkbox:checked + .option-toggle-label:before {
  transform: translateX(30px);
}

.theme-toggle-checkbox:checked ~ .option-toggle .option-toggle-checkbox {
  pointer-events: none;
  opacity: 0.5;
}

.theme-toggle-checkbox:checked ~ .option-toggle .option-toggle-label {
  pointer-events: none;
  opacity: 0.5;
}






.option-toggle-left {
  position: fixed;
  top: 50px;
  left: 20px;
}

.option-toggle-left + .option-toggle-left {
  margin-top: 10px;
}

.option-toggle-label {
  display: inline-block;
  width: 80px;
  height: 30px;
  background-color: #ccc;
  border-radius: 15px;
  position: relative;
  cursor: pointer;
  transition: background-color 0.3s ease;
  padding: 5px;
  margin-right: 10px;
}

.option-toggle-checkbox {
  display: none;
}

.option-toggle-checkbox:checked + .option-toggle-label {
  background-color: #9a5cab;
}

.option-toggle-label:before {
  content: "";
  position: absolute;
  top: 20px;
  left: 5px;
  width: 20px;
  height: 20px;
  background-color: #9a5cab;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.option-toggle-checkbox:checked + .option-toggle-label:before {
  transform: translateX(50px);
}







.option-toggle-left1 {
  position: fixed;
  top: 100px;
  left: 20px;
}

.option-toggle-left1 + .option-toggle-left1 {
  margin-top: 10px;
}

.option-toggle-label {
  display: inline-block;
  width: 80px;
  height: 30px;
  background-color: #ccc;
  border-radius: 15px;
  position: relative;
  cursor: pointer;
  transition: background-color 0.3s ease;
  padding: 5px;
  margin-right: 10px;
}

.option-toggle-checkbox {
  display: none;
}

.option-toggle-checkbox:checked + .option-toggle-label {
  background-color: #9a5cab;
}

.option-toggle-label:before {
  content: "";
  position: absolute;
  top: 20px;
  left: 5px;
  width: 20px;
  height: 20px;
  background-color: #9a5cab;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

.option-toggle-checkbox:checked + .option-toggle-label:before {
  transform: translateX(50px);
}

</style>

<script>
  const themeToggleCheckbox = document.getElementById('theme-toggle-checkbox-left');
const breakToggleCheckbox = document.getElementById('break-toggle');
const lunchToggleCheckbox = document.getElementById('lunch-toggle');
const statusLabel = document.getElementById('status-label');

// Verificar el estado almacenado en el localStorage
const savedState = localStorage.getItem('themeToggleState');
if (savedState === 'connected') {
  themeToggleCheckbox.checked = true;
  statusLabel.textContent = 'Conectado';
  enableDisableOptions(true);
  
}

// Manejar el cambio de estado del botón principal
themeToggleCheckbox.addEventListener('change', () => {
  if (themeToggleCheckbox.checked) {
    statusLabel.textContent = 'Conectado';
    enableDisableOptions(true);
    localStorage.setItem('themeToggleState', 'connected');
    logInfo('conect');
    
  } else {
    statusLabel.textContent = 'Desconectado';
    enableDisableOptions(false);
    localStorage.setItem('themeToggleState', 'disconnected');
    lunchToggleCheckbox.checked = false;
    breakToggleCheckbox.checked = false;
    enableDisableOptions(false);
    showOption('break-toggle');
     showOption('lunch-toggle');
     logInfo('disconect');
  }
});

// Manejar el cambio de estado del botón BREAK
breakToggleCheckbox.addEventListener('change', () => {
  if (breakToggleCheckbox.checked) {
    lunchToggleCheckbox.checked = false;
    hideOption('lunch-toggle');
    // Ejecutar código específico para la opción BREAK activada
    // ...
    logInfo('break');
  } else {
    showOption('lunch-toggle');
    // Ejecutar código específico para la opción BREAK desactivada
    // ...
    logInfo('conect');
  }
});

// Manejar el cambio de estado del botón LUNCH
lunchToggleCheckbox.addEventListener('change', () => {
  if (lunchToggleCheckbox.checked) {
    breakToggleCheckbox.checked = false;
    hideOption('break-toggle');
    // Ejecutar código específico para la opción LUNCH activada
    // ...
    logInfo('lunch');
  } else {
    showOption('break-toggle');
    // Ejecutar código específico para la opción LUNCH desactivada
    // ...
    logInfo('conect');
  }
});

// Función para habilitar o deshabilitar las opciones dependiendo del estado del botón principal
function enableDisableOptions(enabled) {
  breakToggleCheckbox.disabled = !enabled;
  lunchToggleCheckbox.disabled = !enabled;
}

// Función para ocultar una opción
function hideOption(optionId) {
  const optionElement = document.getElementById(optionId);
  optionElement.parentNode.style.display = 'none';
}

// Función para mostrar una opción
function showOption(optionId) {
  const optionElement = document.getElementById(optionId);
  optionElement.parentNode.style.display = 'block';
}







function logInfo(value) {
  // Obtener el valor del campo de texto correspondiente al botón
  

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerPostLogReport.php?value=' + encodeURIComponent(value);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}

</script>