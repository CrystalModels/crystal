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

</style>

<script>
const themeToggleCheckboxLeft = document.getElementById('theme-toggle-checkbox-left');

themeToggleCheckboxLeft.addEventListener('change', function() {
  if (this.checked) {
    // Checkbox activado
    // Ejecutar función cuando está activado
    console.log('Checkbox activado (izquierda)');
    // Llama a tu función específica aquí
    funcionCuandoEstaActivadoIzquierda();
  } else {
    // Checkbox desactivado
    // Ejecutar función cuando está desactivado
    console.log('Checkbox desactivado (izquierda)');
    // Llama a tu función específica aquí
    funcionCuandoEstaDesactivadoIzquierda();
  }
});

function funcionCuandoEstaActivadoIzquierda() {
  // Realiza acciones cuando el checkbox está activado (izquierda)
  // Código de la función cuando está activado (izquierda)
}

function funcionCuandoEstaDesactivadoIzquierda() {
  // Realiza acciones cuando el checkbox está desactivado (izquierda)
  // Código de la función cuando está desactivado (izquierda)
}const themeToggleCheckbox = document.getElementById('theme-toggle-checkbox-left');
const statusLabel = document.getElementById('status-label');

// Verificar el estado almacenado en el localStorage
const savedState = localStorage.getItem('themeToggleState');
if (savedState === 'connected') {
  themeToggleCheckbox.checked = true;
  statusLabel.textContent = 'Conectado';
}

// Manejar el cambio de estado del botón
themeToggleCheckbox.addEventListener('change', () => {
  if (themeToggleCheckbox.checked) {
    statusLabel.textContent = 'Conectado';
    localStorage.setItem('themeToggleState', 'connected');
  } else {
    statusLabel.textContent = 'Desconectado';
    localStorage.setItem('themeToggleState', 'disconnected');
  }
});


</script>