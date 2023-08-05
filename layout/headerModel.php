
<!-- HTML -->

<nav class="navbar">
 
    <ul class="navbar-menu" id="navbar-menu">
      
       
        
    <script>
  window.addEventListener('DOMContentLoaded', function() {
    const isConnected = sessionStorage.getItem('isConnected');

    if (isConnected === 'connected') {
      const navbarItem = document.createElement('li');
      navbarItem.className = 'navbar-item has-submenu';

      const link = document.createElement('a');
      link.href = '#';
      link.innerHTML = '<h4>TRANSMISIÓN</h4>';

      const submenu = document.createElement('ul');
      submenu.className = 'submenu';

      const listItem1 = document.createElement('li');
      listItem1.className = 'navbar-item';
      const link1 = document.createElement('a');
      link1.href = '#';
      link1.addEventListener('click', function() {
        openModalPagesModelNot();
        getPagesAssignModelsNot1();
      });
      link1.textContent = 'Iniciar Transmisión';
      listItem1.appendChild(link1);

      const listItem2 = document.createElement('li');
      listItem2.className = 'navbar-item';
      const link2 = document.createElement('a');
      link2.href = '#';
      link2.addEventListener('click', function() {
        openModalPagesModel();
        getPagesAssignModels1();
      });
      link2.textContent = 'Para Transmisión';
      listItem2.appendChild(link2);

      submenu.appendChild(listItem1);
      submenu.appendChild(listItem2);

      navbarItem.appendChild(link);
      navbarItem.appendChild(submenu);

      const navbar = document.querySelector('.navbar');
      navbar.appendChild(navbarItem);
    }
  });

  function rechargePage() {
    location.reload(true); 
  }
</script>
<style>
  .navbar {
    list-style: none;
  }

 

  .submenu {
    list-style: none;
  }

</style>


        <script>var profileif=sessionStorage.getItem("profileId") </script>
       <li class="navbar-item has-submenu">
         
         <a href="#"><H4> ORGANIZADOR </H4></a>
         <ul class="submenu">
         <li class="navbar-item"><a href="#" onclick="openModalSchedule();getSch();">Mi Horario</a></li>
         <li class="navbar-item"><a href="#" onclick="openModalembed();">Tasa de cambio</a></li>
            <li class="navbar-item"><a href="#" onclick="openModalembedcal();">Calculadora</a></li>
             
       </ul>
     </li>
        
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
