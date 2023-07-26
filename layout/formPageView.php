


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página</title>
  <link rel="icon" type="image/x-icon" href="public/logo.png">
  
  <link rel="stylesheet" href="style/styleLogin.css">


</head>
<body>


  <div class="login-container">
 
    <?php
    //session_start();
    $headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
    if($_SESSION['rol']=="SUPERADMIN" || $_SESSION['rol']=="ADMIN"){
echo '
<form method="post" action="controller/controllerPutPageBySuperAdmin.php?pageId='.$_GET['pageId'].'">



';
    if($_SESSION['rol']=="SUPERADMIN"){
        require_once 'env/domain.php';
        $sub_domaincon = new model_dom();
        $sub_domain = $sub_domaincon->dom();
        //echo $_SESSION['key'];
        echo '
        
        <div id="myProfile-div"></div>
        <script>
        //const rancode = sessionStorage.getItem("ranCode");
        //const key = sessionStorage.getItem("key");
            const urlMyProfile = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getOnePages/'.$headerslink.'/'.$_GET['pageId'].'";
        </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getRooms() {
                fetch(urlMyProfile)
                    .then(response => response.json())
                    .then(data => {
                        const userData = data.pages[0];

                        // Mostrar los datos en la pantalla
                        const profileDiv = document.querySelector("#myProfile-div");
                        profileDiv.innerHTML = `
                              
                        <h5 align="center">Pagina Id: ${userData.pageId}</h5>
                        <h5 align="center">Moneda de pago: ${userData.currency}</h5>
                        <h5 align="center">Activo: ${userData.isActive}</h5>
                        <h5 align="center">Estado: ${userData.status}</h5>
                        <h5 align="center">Página: <input type="text" id="name" name="name" placeholder="Ingresa nombre de página" value="${userData.name}"></h5>
                        <h5 align="center">Url de página: <input type="text" id="pageurl" name="pageurl" placeholder="Ingresa url de página" value="${userData.urlPage}"></h5>
                        <h5 align="center">Porcentaje de cobro: <input type="text" id="percent" name="percent" placeholder="Ingresa porcentaje de cobro" value="${userData.percentValue}"></h5>
                        
                        <h5 align="center"><a href="#" onclick="openModalPutPageStatus();" class="table-button">Cambiar estado</a><br></h5>
                        <h5 align="center"><a href="#" onclick="openModalPutPageCurrency();" class="table-button">Cambiar moneda de pago</a><br></h5>
    
                            `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getRooms();
        </script>
       
    
        <button type="submit" class="table-button">Editar</button>
       ';
          }
        
       
          

    if($_SESSION['rol']=="ADMIN"){
      echo '
      <form method="post" action="controller/controllerPutPageBySuperAdmin.php?pageId='.$_GET['pageId'].'"> 

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
        const urlMyProfile = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getOnePages/'.$headerslink.'/'.$_GET['pageId'].'";
        </script>';
        echo '<script>
            // Función para obtener los datos del API
            async function getRooms() {
                fetch(urlMyProfile)
                    .then(response => response.json())
                    .then(data => {
                        const userData = data.pages[0];

                        // Mostrar los datos en la pantalla
                        const profileDiv = document.querySelector("#myProfile-div");
                        profileDiv.innerHTML = `
                        <h5 align="center">Pagina Id: ${userData.pageId}</h5>
                        <h5 align="center">Moneda de pago: ${userData.currency}</h5>
                        <h5 align="center">Activo: ${userData.isActive}</h5>
                        <h5 align="center">Estado: ${userData.status}</h5>
                        <h5 align="center">Página: <input type="text" id="name" name="name" placeholder="Ingresa nombre de página" value="${userData.name}"></h5>
                        <h5 align="center">Url de página: <input type="text" id="pageurl" name="pageurl" placeholder="Ingresa url de página" value="${userData.urlPage}"></h5>
                        <h5 align="center">Porcentaje de cobro: <input type="text" id="percent" name="percent" placeholder="Ingresa porcentaje de cobro" value="${userData.percentValue}"></h5>
                      
                        <h5 align="center"><a href="#" onclick="openModalPutPageStatus();" class="table-button">Cambiar estado</a><br></h5>
                        <h5 align="center"><a href="#" onclick="openModalPutPageCurrency();" class="table-button">Cambiar moneda de pago</a><br></h5>
    
                            `;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            }

            // Llamar a la función para obtener los datos del API
            getRooms();
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