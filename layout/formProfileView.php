


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <link rel="stylesheet" href="style/styleLogin.css">


</head>
<body>


  <div class="login-container">
 
    <?php
    //session_start();
    $headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];

    if($_SESSION['rol']=="SUPERADMIN" || $_SESSION['rol']=="ADMIN"){
echo '
<form method="post" action="controller/controllerPutUserBySuperAdmin.php?profileId='.$_GET['profileId'].'&userName='.$_GET['userName'].'">
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>


';
    if($_SESSION['rol']=="SUPERADMIN"){
        require_once 'env/domain.php';
        $sub_domaincon = new model_dom();
        $sub_domain = $sub_domaincon->dom();
        //echo $_SESSION['key'];
        echo '
        <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
        <div id="myProfile-div"></div>
        <script>
        //const rancode = sessionStorage.getItem("ranCode");
        //const key = sessionStorage.getItem("key");
        const urlMyProfile1 = "' . $sub_domain . '/crystalGateway/apiCore/v1/getProfileInfoLogJS/'.$_SESSION['ranCode'].'/'.$_SESSION['key'].'/'.$_SESSION['userName'].'/'.$_SESSION['sessionId'].'";
     </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getMyProfileInfo() {
                fetch(urlMyProfile1)
                    .then(response => response.json())
                    .then(data => {
                        const userData = data.users[0];

                        // Mostrar los datos en la pantalla
                        const profileDiv = document.querySelector("#myProfile-div");
                        profileDiv.innerHTML = `
                            <h4 align="center">${userData.name} ${userData.lastName}</h4>
                            <h5 align="center">Usuario: ${userData.userName}</h5>
                            <h5 align="center">Rol: ${userData.rol}</h5>
                            <h5 align="center">Id de usuario: ${userData.userId}</h5>
                            <h5 align="center">Id de Perfil: ${userData.profileId}</h5>
                            <h5 align="center">Sesiones Activas: ${userData.sessionCounter}</h5>
                            <h5 align="center">Activo: ${userData.isActive}</h5>
                            <h5 align="center">Estado: ${userData.status}</h5>
                            <h5 align="center">Horas de Conexión: ${userData.totalHours}</h5>
                            <h5 align="center">Correo empresarial: <input type="email" id="cmail" name="cmail" placeholder="Ingresa tu nombre" value="${userData.companyMail}"></h5>
                            <h5 align="center">Correo Interno: <input type="email" id="imail" name="imail" placeholder="Ingresa tu nombre" value="${userData.internalMail}"></h5>
                           
                            <h5 align="center">Nombre: <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" value="${userData.name}"></h5>
                            <h5 align="center">Apellido: <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido" value="${userData.lastName}"></h5>
                            <h5 align="center">Correo Personal: <input type="email" id="pmail" name="pmail" placeholder="Ingresa tu correo personal" value="${userData.personalMail}"></h5>
                            <h5 align="center">Url de imagen: <input type="url" id="urlimage" name="urlimage" placeholder="Ingresa tu correo personal" value="${userData.imageUrl}"></h5>
                           
                            <img src="${userData.imageUrl}" alt="profile_image" class="img-fluid mx-auto d-block rounded" style="max-height: 200px;">
                            <h5 align="center"><a href="#" onclick="openModalPutRol();" class="table-button">Cambiar Rol</a><br></h5>
                            <h5 align="center"><a href="#" onclick="openModalPutUserStatus();" class="table-button">Eliminar/Desactivar/Ocultar</a><br></h5>
        
                            `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getMyProfileInfo();
        </script>
       
    
        <button type="submit" class="table-button">Editar</button>
       ';
          }
        
       
          

    if($_SESSION['rol']=="ADMIN"){
      echo '
<form method="post" action="controller/controllerPutUserBySuperAdmin.php?profileId='.$_GET['profileId'].'&userName='.$_GET['userName'].'">
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
';
        require_once 'env/domain.php';
        $sub_domaincon = new model_dom();
        $sub_domain = $sub_domaincon->dom();
        //echo $_SESSION['key'];
        echo '
        <div id="myProfile-div"></div>
        <script>
        //const rancode = sessionStorage.getItem("ranCode");
        //const key = sessionStorage.getItem("key");
            const urlMyProfile = "' . $sub_domain . '/crystalGateway/apiCore/v1/getProfileInfoLogJS/'.$_SESSION['ranCode'].'/'.$_SESSION['key'].'/'.$_GET['userName'].'/'.$_SESSION['sessionId'].'";
        </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getMyProfileInfo() {
                fetch(urlMyProfile)
                    .then(response => response.json())
                    .then(data => {
                        const userData = data.users[0];

                        // Mostrar los datos en la pantalla
                        const profileDiv = document.querySelector("#myProfile-div");
                        profileDiv.innerHTML = `
                            <h4 align="center">${userData.name} ${userData.lastName}</h4>
                            <h5 align="center">Usuario: ${userData.userName}</h5>
                            <h5 align="center">Rol: ${userData.rol}</h5>
                            <h5 align="center">Id de usuario: ${userData.userId}</h5>
                            <h5 align="center">Id de Perfil: ${userData.profileId}</h5>
                            <h5 align="center">Sesiones Activas: ${userData.sessionCounter}</h5>
                            <h5 align="center">Activo: ${userData.isActive}</h5>
                            <h5 align="center">Estado: ${userData.status}</h5>
                            <h5 align="center">Horas de Conexión: ${userData.totalHours}</h5>
                            <h5 align="center">Correo empresarial: <input type="email" id="cmail" name="cmail" placeholder="Ingresa tu nombre" value="${userData.companyMail}"></h5>
                            <h5 align="center">Correo Interno: <input type="email" id="imail" name="imail" placeholder="Ingresa tu nombre" value="${userData.internalMail}"></h5>
                           
                            <h5 align="center">Nombre: <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" value="${userData.name}"></h5>
                            <h5 align="center">Apellido: <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido" value="${userData.lastName}"></h5>
                            <h5 align="center">Correo Personal: <input type="email" id="pmail" name="pmail" placeholder="Ingresa tu correo personal" value="${userData.personalMail}"></h5>
                            <h5 align="center">Url de imagen: <input type="url" id="urlimage" name="urlimage" placeholder="Ingresa tu correo personal" value="${userData.imageUrl}"></h5>
                           
                            <img src="${userData.imageUrl}" alt="profile_image" class="img-fluid mx-auto d-block rounded" style="max-height: 200px;">
                            <h5 align="center"><a href="#" onclick="openModalPutRolAdmin();" class="table-button">Cambiar Rol</a><br></h5>
        
                            `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getMyProfileInfo();
        </script>
       
    
        <button type="submit" class="table-button">Editar</button>
       ';}
          }else{

            echo "UNAUTHORIZED";
          }
        
        ?>
    </form>
    
  </div>

  <div class="theme-toggle">
    <input type="checkbox" id="theme-toggle-checkbox">
    <label for="theme-toggle-checkbox" class="theme-toggle-label"></label>
  </div>

  <script src="scripts/scriptDarkMode.js"></script>
</body>
</html>

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
?>