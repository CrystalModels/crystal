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
  <input type="checkbox" id="theme-toggle-checkbox" class="theme-toggle-checkbox">
  <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
</div>



        

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
  <label for="break-toggle" class="option-toggle-label">Break</label>
</div>

<div class="option-toggle-left1">
  <input type="checkbox" id="lunch-toggle" class="option-toggle-checkbox" disabled>
  <label for="lunch-toggle" class="option-toggle-label">Lunch</label>
</div>

<div class="option-toggle-left2">
  <input type="checkbox" id="broom-toggle" class="option-toggle-checkbox" disabled>
  <label for="broom-toggle" class="option-toggle-label">Baño</label>
</div>
<div class="option-toggle-left3">
  <input type="checkbox" id="meet-toggle" class="option-toggle-checkbox" disabled>
  <label for="meet-toggle" class="option-toggle-label">Reunión</label>
</div>

<div class="option-toggle-left4">
  <input type="checkbox" id="techissue-toggle" class="option-toggle-checkbox" disabled>
  <label for="techissue-toggle" class="option-toggle-label">Problema</label>
</div>
<?php require_once 'footer.php';?>
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




.option-toggle-left2 {
  position: fixed;
  top: 150px;
  left: 20px;
}

.option-toggle-left2 + .option-toggle-left2 {
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








.option-toggle-left3 {
  position: fixed;
  top: 200px;
  left: 20px;
}

.option-toggle-left3 + .option-toggle-left3 {
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










.option-toggle-left4 {
  position: fixed;
  top: 250px;
  left: 20px;
}

.option-toggle-left4 + .option-toggle-left4 {
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
const broomToggleCheckbox = document.getElementById('broom-toggle');
const meetToggleCheckbox = document.getElementById('meet-toggle');
const techissueToggleCheckbox = document.getElementById('techissue-toggle');
const statusLabel = document.getElementById('status-label');

// Verificar el estado almacenado en el localStorage
const savedState = sessionStorage.getItem('isConnected');
const isbroom = sessionStorage.getItem('isBroom');
const ismeet = sessionStorage.getItem('isMeet');
const isbreak = sessionStorage.getItem('isBreak');
const islunch = sessionStorage.getItem('isLunch');
const isissue = sessionStorage.getItem('isIssue');

if (savedState === 'connected') {
  themeToggleCheckbox.checked = true;
  statusLabel.textContent = 'Conectado';
  enableDisableOptions(true);
}
if (isbroom === 'true') {
  broomToggleCheckbox.checked = true;
 
  hideOption('lunch-toggle');
    hideOption('break-toggle');
    hideOption('meet-toggle');
    hideOption('techissue-toggle');
}

if (ismeet === 'true') {
  meetToggleCheckbox.checked = true;
 
  hideOption('lunch-toggle');
    hideOption('break-toggle');
    hideOption('broom-toggle');
    hideOption('techissue-toggle');
}

if (isbreak === 'true') {
  breakToggleCheckbox.checked = true;
 
  hideOption('lunch-toggle');
    hideOption('meet-toggle');
    hideOption('broom-toggle');
    hideOption('techissue-toggle');
}


if (islunch === 'true') {
  lunchToggleCheckbox.checked = true;
 
  hideOption('break-toggle');
    hideOption('meet-toggle');
    hideOption('broom-toggle');
    hideOption('techissue-toggle');
}


if (isissue === 'true') {
  techissueToggleCheckbox.checked = true;
 
  hideOption('break-toggle');
    hideOption('meet-toggle');
    hideOption('broom-toggle');
    hideOption('lunch-toggle');
}
// Manejar el cambio de estado del botón principal
themeToggleCheckbox.addEventListener('change', () => {
  if (themeToggleCheckbox.checked) {
    statusLabel.textContent = 'Conectado';
    enableDisableOptions(true);
    //localStorage.setItem('themeToggleState', 'connected');
    sessionStorage.setItem('isConnected','connected');
    logInfo('conect');
    modelStatus('isConnected','connected');
    rechargePage();
  } else {
    statusLabel.textContent = 'Desconectado';
    enableDisableOptions(false);
    sessionStorage.setItem('isConnected', 'disconnected');
    sessionStorage.setItem('isBroom','false');
    sessionStorage.setItem('isLunch','false');
    sessionStorage.setItem('isBreak','false');
    sessionStorage.setItem('isIssue','false');
    sessionStorage.setItem('isMeet','false');
    lunchToggleCheckbox.checked = false;
    breakToggleCheckbox.checked = false;
    broomToggleCheckbox.checked = false;
    meetToggleCheckbox.checked = false;
    techissueToggleCheckbox.checked = false;
    enableDisableOptions(false);
    showOption('break-toggle');
    showOption('lunch-toggle');
    showOption('broom-toggle');
    showOption('meet-toggle');
    showOption('techissue-toggle');
    logInfo('disconect');
    modelStatus('isConnected','disconect');
    rechargePage();
  }
});

// Manejar el cambio de estado del botón BREAK
breakToggleCheckbox.addEventListener('change', () => {
  if (breakToggleCheckbox.checked) {
    lunchToggleCheckbox.checked = false;
    broomToggleCheckbox.checked = false;
    meetToggleCheckbox.checked = false;
    techissueToggleCheckbox.checked = false;
    hideOption('lunch-toggle');
    hideOption('broom-toggle');
    hideOption('meet-toggle');
    hideOption('techissue-toggle');
    sessionStorage.setItem('isBreak','true');
    // Ejecutar código específico para la opción BREAK activada
    // ...
    logInfo('break');
    modelStatus('isBreak','true')
  } else {
    showOption('lunch-toggle');
    showOption('meet-toggle');
    showOption('broom-toggle');
    showOption('techissue-toggle');
    sessionStorage.setItem('isBreak','false');
    // Ejecutar código específico para la opción BREAK desactivada
    // ...
    logInfo('conect');
    modelStatus('isBreak','false')
  }
});

// Manejar el cambio de estado del botón LUNCH
lunchToggleCheckbox.addEventListener('change', () => {
  if (lunchToggleCheckbox.checked) {
    breakToggleCheckbox.checked = false;
    broomToggleCheckbox.checked = false;
    meetToggleCheckbox.checked = false;
    techissueToggleCheckbox.checked = false;
    hideOption('break-toggle');
    hideOption('broom-toggle');
    hideOption('meet-toggle');
    hideOption('techissue-toggle');
    sessionStorage.setItem('isLunch','true');
    // Ejecutar código específico para la opción LUNCH activada
    // ...
    logInfo('lunch');
    modelStatus('isLunch','true')
  } else {
    showOption('break-toggle');
    showOption('meet-toggle');
    showOption('broom-toggle');
    showOption('techissue-toggle');
    
    sessionStorage.setItem('isLunch','false');
    // Ejecutar código específico para la opción LUNCH desactivada
    // ...
    logInfo('conect');
    modelStatus('isLunch','false')
  }
});

// Manejar el cambio de estado del botón BAÑO
broomToggleCheckbox.addEventListener('change', () => {
  if (broomToggleCheckbox.checked) {
    lunchToggleCheckbox.checked = false;
    breakToggleCheckbox.checked = false;
    meetToggleCheckbox.checked = false;
    techissueToggleCheckbox.checked = false;
    hideOption('meet-toggle');
    hideOption('break-toggle');
    hideOption('lunch-toggle');
    hideOption('techissue-toggle');
    
    sessionStorage.setItem('isBroom','true');
    // Ejecutar código específico para la opción BAÑO activada
    // ...
    logInfo('broom');
    modelStatus('isBroom','true')
  } else {
    showOption('lunch-toggle');
    showOption('break-toggle');
    showOption('meet-toggle');
    showOption('techissue-toggle');
    
    sessionStorage.setItem('isBroom','false');
    // Ejecutar código específico para la opción BAÑO desactivada
    // ...
    logInfo('conect');
    modelStatus('isBroom','false')
  }
});

// Manejar el cambio de estado del botón REUNIÓN
meetToggleCheckbox.addEventListener('change', () => {
  if (meetToggleCheckbox.checked) {
    lunchToggleCheckbox.checked = false;
    breakToggleCheckbox.checked = false;
    broomToggleCheckbox.checked = false;
    techissueToggleCheckbox.checked = false;
    hideOption('techissue-toggle');
    hideOption('break-toggle');
    hideOption('broom-toggle');
    hideOption('lunch-toggle');
    
    sessionStorage.setItem('isMeet','true');
    // Ejecutar código específico para la opción REUNIÓN activada
    // ...
    logInfo('meet');
    modelStatus('isMeet','true')
  } else {
    showOption('lunch-toggle');
    showOption('break-toggle');
    showOption('broom-toggle');
    showOption('techissue-toggle');
    // Ejecutar código específico para la opción REUNIÓN desactivada
    // ...
    sessionStorage.setItem('isMeet','false');
    logInfo('conect');
    modelStatus('isMeet','false')
  }
});

// Manejar el cambio de estado del botón PROBLEMA
techissueToggleCheckbox.addEventListener('change', () => {
  if (techissueToggleCheckbox.checked) {
    lunchToggleCheckbox.checked = false;
    breakToggleCheckbox.checked = false;
    broomToggleCheckbox.checked = false;
    meetToggleCheckbox.checked = false;
    hideOption('break-toggle');
    hideOption('broom-toggle');
    hideOption('lunch-toggle');
    hideOption('meet-toggle');
    sessionStorage.setItem('isIssue','true');
    // Ejecutar código específico para la opción PROBLEMA activada
    // ...
    logInfo('techissue');
    modelStatus('isIssue','true')
  } else {
    showOption('lunch-toggle');
    showOption('break-toggle');
    showOption('broom-toggle');
    showOption('meet-toggle');
    sessionStorage.setItem('isIssue','false');
    // Ejecutar código específico para la opción PROBLEMA desactivada
    // ...
    logInfo('conect');
    modelStatus('isIssue','false')
  }
});

// Función para habilitar o deshabilitar las opciones dependiendo del estado del botón principal
function enableDisableOptions(enabled) {
  breakToggleCheckbox.disabled = !enabled;
  lunchToggleCheckbox.disabled = !enabled;
  broomToggleCheckbox.disabled = !enabled;
  meetToggleCheckbox.disabled = !enabled;
  techissueToggleCheckbox.disabled = !enabled;
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

// Función para imprimir información en la consola
function logInfo(message) {
  console.log(`Estado actual: ${message}`);
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



function modelStatus(dbvalue,value) {
  // Obtener el valor del campo de texto correspondiente al botón
  

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerPutModelStatus.php?dbvalue=' + encodeURIComponent(dbvalue) + '&value=' + encodeURIComponent(value);

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
