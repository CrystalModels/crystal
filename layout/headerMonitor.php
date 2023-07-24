

<!-- HTML -->

<nav class="navbar">
    
    <ul class="navbar-menu" id="navbar-menu">
      
        
        <li class="navbar-item has-submenu">
            <a href="#"> <H4> OPERACIÓN </H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalModels();getModels();">Modelos</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalMonitors();getMonitors();">Monitores</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalPhotograph();getPhotographs();">Fotógrafos</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalRoomsam();getRoomsam();getRoomsamf();">Rooms</a></li>
           
            </ul>
        </li>
     
        <li class="navbar-item has-submenu">
         
            <a href="#"><H4> ORGANIZADOR </H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalUsersAlerts();getUsersSuperAdminAlerts();">Alertas</a></li>
             
          </ul>
        </li>
        <script>var profileif=sessionStorage.getItem("profileId") </script>
       
        
        <li class="navbar-item has-submenu">
         
         <a href="#"><H4> NOTIFICACIONES </H4></a>
         <ul class="submenu">
         <li class="navbar-item"><a href="#" onclick="openModalAlerts();getAlerts(profileif);">Alertas</a></li>
         <li class="navbar-item"><a href="#" onclick="openModalReminds();getReminds();">Recordatorios</a></li>
        </ul>
     </li>
        
        <li class="navbar-item has-submenu">
            <a href="#"><H4> PERFIL </H4></a>
            <ul class="submenu">
                
            <li class="navbar-item"><a href="#" onclick="getMyProfileInfo();openModalmyModalProfile1();">Ver</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalmyModalChangePassSession();">Cambiar Contraseña</a></li>
            <li class="navbar-item"><a href="controller/controllerLogOut.php">Cerrar Sesión</a></li>
       
                
            </ul>
        </li>
        
         </ul>
</nav>



<script>

    document.addEventListener("DOMContentLoaded", function() {
        const button = document.getElementById("navbar-toggle-button");
        const menu = document.getElementById("navbar-menu");

        button.addEventListener("click", function() {
            this.classList.toggle("active");
            menu.classList.toggle("active");
        });

        const submenuItems = document.querySelectorAll(".has-submenu");
        submenuItems.forEach(function(item) {
            item.addEventListener("click", function(e) {
                e.stopPropagation();
                this.classList.toggle("active");
            });
        });
    });



   
function setupMenu() {
  const menuItems = document.querySelectorAll('.navbar-item');

  menuItems.forEach((menuItem) => {
    menuItem.addEventListener('click', () => {
      const submenu = menuItem.querySelector('.submenu');
      if (submenu) {
        submenu.classList.toggle('active');
      }
    });
  });
}

// Ejecutar la función de configuración del menú cuando se carga el DOM
document.addEventListener('DOMContentLoaded', () => {
  setupMenu();
});

</script>


<script>

</script>
  <style>
		.alert {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #2d572c;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}

		.alertno {
			position: fixed;
			top: -100px;
			width: 100%;
			background-color: #cb3234;
			color: white;
			text-align: center;
			padding: 3px;
			transition: top 0.6s ease;
			z-index: 1;
		}
	</style>
  <div id="alert" class="alert"></div>
	<div id="alertno" class="alertno"></div>
  


    
<?php
  
  echo '<script>
  const gatewayDomain = "' . $_SESSION["gatewayDomain"] . '";
  sessionStorage.setItem("gatewayDomain", gatewayDomain);
  const respuesta = "' . $_SESSION["respuesta"] . '";
  sessionStorage.setItem("respuesta", respuesta);
  const mensaje = "' . $_SESSION["mensaje"] . '";
  sessionStorage.setItem("mensaje", mensaje);
  const error = "' . $_SESSION["error"] . '";
  sessionStorage.setItem("error", error);





  
  const userId = "' . $_SESSION["userId"] . '";
  sessionStorage.setItem("userId", userId);
  const personalMail = "' . $_SESSION["personalMail"] . '";
  sessionStorage.setItem("personalMail", personalMail);
  const companyMail = "' . $_SESSION["companyMail"] . '";
  sessionStorage.setItem("companyMail", companyMail);

  
  const internalMail = "' . $_SESSION["internalMail"] . '";
  sessionStorage.setItem("internalMail", internalMail);
  const userName = "' . $_SESSION["userName"] . '";
  sessionStorage.setItem("userName", userName);
  const sessionCounter = "' . $_SESSION["sessionCounter"] . '";
  sessionStorage.setItem("sessionCounter", sessionCounter);

 
  const profileId = "' . $_SESSION["profileId"] . '";
  sessionStorage.setItem("profileId", profileId);
  const name = "' . $_SESSION["name"] . '";
  sessionStorage.setItem("name", name);
  const lastName = "' . $_SESSION["lastName"] . '";
  sessionStorage.setItem("lastName", lastName);

  const imageUrl = "' . $_SESSION["imageUrl"] . '";
  sessionStorage.setItem("imageUrl", imageUrl);
  const totalHours = "' . $_SESSION["totalHours"] . '";
  sessionStorage.setItem("totalHours", totalHours);
  const rol = "' . $_SESSION["rol"] . '";
  sessionStorage.setItem("rol", rol);
  const ranCode = "' . $_SESSION["ranCode"] . '";
  sessionStorage.setItem("ranCode", ranCode);

  const clientkey = "'.$_SESSION["key"].'";
  sessionStorage.setItem("key", clientkey);
  
  const sessionId = "'.$_SESSION["sessionId"].'";
  sessionStorage.setItem("sessionId", sessionId);


  const alerta = sessionStorage.getItem("respuesta");
  if(alerta=="true"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlert(mensaje);
  }
  if(alerta=="false"){
	const mensaje = sessionStorage.getItem("mensaje");
	  showAlertno(mensaje);
  }

		function showAlert(alertas) {
    // Mostrar la alerta
    var alert = document.getElementById("alert");
    alert.innerHTML = alertas;
    alert.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alert.style.top = "-100px";
    }, 5000);
	
	//sessionStorage.removeItem("respuesta");
	//sessionStorage.removeItem("mensaje");
}

function showAlertno(alertas) {
    // Mostrar la alerta
    var alertno = document.getElementById("alertno");
    alertno.innerHTML = alertas;
    alertno.style.top = "0";

    // Ocultar la alerta después de 5 segundos
    setTimeout(function(){
        alertno.style.top = "-100px";
    }, 5000);
	

}

  
</script>';
$_SESSION['respuesta']="";
$_SESSION['mensaje']="";
$_SESSION['error']="";
//echo $_SESSION['key'];
?>
