

<?php

?>




<!-- HTML -->

<nav class="navbar">
    <button id="navbar-toggle-button" class="navbar-toggle-button">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="navbar-menu" id="navbar-menu">
        <li class="navbar-item"><a href="#"><H4>INICIO</H4></a></li>
        <li class="navbar-item has-submenu">
            <a href="#"><H4>RECURSOS</H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Usuarios</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalRooms();getRooms();">Rooms</a></li>
             
            <li class="navbar-item"><a href="#" onclick="openModalPages();getPages();">Páginas</a></li>
          
                <li class="navbar-item"><a href="#" onclick="openModalCurrency();getCurrency();">Moneda</a></li>
            </ul>
        </li>
        
        <li class="navbar-item has-submenu">
            <a href="#"><H4>OPERACIÓN</H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalModels();getModels();">Modelos</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalMonitors();getMonitors();">Monitores</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalPhotograph();getPhotographs();">Fotógrafos</a></li>

           
            </ul>
        </li>
        <li class="navbar-item has-submenu">
            <a href="#"><H4>SISTEMA</H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Credenciales</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Roles y permisos</a></li>
          
            </ul>
        </li>
        <li class="navbar-item has-submenu">
            <a href="#"><H4>ESTADÍSTICA</H4></a>
            <ul class="submenu">
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Horas</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Pagos</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalUsersSuperAdmin();getUsersSuperAdmin();">Transmisiones</a></li>
            
            </ul>
        </li>

        
        <li class="navbar-item has-submenu">
            <a href="#"><H4>PERFIL</H4></a>
            <ul class="submenu">
                
            <li class="navbar-item"><a href="#" onclick="getMyProfileInfo1();openModalmyModalProfile1();">Ver</a></li>
            <li class="navbar-item"><a href="#" onclick="getMyProfileInfo();openModalmyModalProfile();">Cambiar Contraseña</a></li>
            <li class="navbar-item"><a href="controller/controllerLogOut.php">Cerrar Sesión</a></li>
       
                
            </ul>
        </li>
        
         </ul>
</nav>

<script>
    // JavaScript
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