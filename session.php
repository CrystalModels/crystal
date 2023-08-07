
<?php

session_start();
require_once 'controller/recharge.php';
unset($_SESSION['password']);
unset($_SESSION['username']);

if($_SESSION['rol']=="SUPERADMIN"){
   
    require_once 'view/viewSessionSuperAdmin.php';
}
if($_SESSION['rol']=="ADMIN"){
 
    require_once 'view/viewSessionAdmin.php';
}
if($_SESSION['rol']=="MODEL"){
    
    require_once 'view/viewSessionModel.php';
}
if($_SESSION['rol']=="MONITOR"){
    
    require_once 'view/viewSessionMonitor.php';
}
if($_SESSION['rol']=="PHOTO"){
   
    require_once 'view/viewSessionPhotograf.php';
}


?>
<?php 
 
?>


<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>
    <audio id="audioPlayer" src="public/alerts.mp3" preload="auto"></audio>
    <audio id="audioPlayer3" src="public/error.mp3" preload="auto"></audio>

    <audio id="audioPlayer4" src="public/success.mp3" preload="auto"></audio>
<script>


    

// Función para mostrar la notificación
function mostrarNotificacion(mensaje, tipo) {
    const notificacion = document.getElementById('notification');
    const notificacionText = document.getElementById('notificationText');

    notificacionText.textContent = mensaje;
    notificacion.classList.remove('error'); // Remover clase de error (en caso de que esté presente)

    if (tipo === 'error') {
        notificacion.classList.add('error');
    }

    notificacion.style.display = 'block';

    // Desaparecer la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = 'none';
    }, 3000);
}


function reproducirSonidoerr() {
  var audio = document.getElementById('audioPlayer3');
  audio.play();
}

function reproducirSonidoesucc() {
  var audio = document.getElementById('audioPlayer4');
  audio.play();
}
function obtenerVariablesPHP() {
  fetch('layout/getPHPVariables.php')
    .then(response => response.json())
    .then(data => {
      // Aquí obtienes los nuevos valores de las variables PHP en el objeto "data"
      // Puedes acceder a los valores como data.mensaje y data.error
      // Por ejemplo:
      var nuevoMensaje = data.mensaje;
      var nuevoError = data.error;

    

      if(nuevoError==="true"){
        
        var re="success";
        reproducirSonidoesucc();
      }
      if(nuevoError==="false"){
      
        var re="error";
        reproducirSonidoerr();
        
      }

      mostrarNotificacion(nuevoMensaje, re);
     

    })
    .catch(error => {
      console.error('Error al obtener las variables PHP:', error);
    });
}





function enviarCorreo(modeliid,value,sub) {
 

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerSendMessageCut.php?modelId=' + encodeURIComponent(modeliid) + '&value=' + encodeURIComponent(value)+ '&sub=' + encodeURIComponent(sub);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      obtenerVariablesPHP();
      
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}



</script>

<style>
		/* Estilos para la notificación */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none;
    z-index: 9999;
}
.notification.error {
    background-color: #f44336;
}

	</style>
  
