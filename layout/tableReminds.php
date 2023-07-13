


<div class="table-container">
    
<table id="reminds-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        
    <th>Acciones</th>
      <th>Recordatorio</th>
      <th>Fefha</th>
      <th>Hora</th>
      <th>Tipo</th>
      
    </tr>
  </thead>
            <tbody>

	<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
  //const profileid = sessionStorage.getItem("profileId");
 // Función para obtener los datos del API
 async function getReminds() {
  const subdominioreminds = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getMyReminds/'.$headerslink.'/'.$_SESSION['profileId'].'`;

  
  ';?>
 
	<?php

  echo '
	fetch(subdominioreminds)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#reminds-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    //var counter=0;
    data.reminds.forEach(alert => {
  
      const row = document.createElement("tr");
      row.innerHTML = `
      
    
    <td>${alert.comments}</td>
    <td>${alert.alertType}</td>
    <td><input type="text" class="input-schedule" id="${alert.alertId}" value="${alert.alertResponse}"> <button onclick="editarAlerta(this,&quot;${alert.alertId}&quot;,&quot;${alert.profileId}&quot;)">Responder</button></td>
   

      
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
     // counter++;
    }
  );

  //sessionStorage.setItem("alertCounter", counter);
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getAlerts();
 


	</script>

';?>  







<script>

function editarAlerta(button, id,profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var response = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditMyAlert.php?alertId=' + encodeURIComponent(id) + '&response=' + encodeURIComponent(response)+ '&profileId=' + encodeURIComponent(profileid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      const profileid = sessionStorage.getItem("profileId");
      getAlerts(profileid);
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
setInterval(miFuncion, 60000);

function miFuncion() {
  // Código de la función que se ejecutará cada 5 segundos
  const profileid = sessionStorage.getItem("profileId");
      getAlerts(profileid);
  //getAlerts();
  const alertcounter = sessionStorage.getItem("alertCounter");
if(alertcounter>0){
  openModalAlertsMessage();

}else{

}
  //console.log('Se ejecutó la función');
}


</script>


<div id="publicgroups-container"></div>










</tbody>
          </table>
       
</div>


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
    alert.style.top = "o";

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


<?php
require_once 'alertsCounter.php';
?>  