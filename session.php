
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



</script>