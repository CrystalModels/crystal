


<div class="table-container">
    
<table id="alerts-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        
        
      <th>Alerta</th>
      <th>Tipo</th>
      <th>Respuesta</th>
      
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
 async function getAlerts(profileid) {
  
  const subdominioalerts = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyAlerts/' . $headerslink . '/" + profileid;
    
  
  ';?>
 
	<?php

  echo '
	fetch(subdominioalerts)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#alerts-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    var counter=0;
    data.alerts.forEach(alert => {
  
      const row = document.createElement("tr");
      row.innerHTML = `
      
    
    <td>${alert.comments}</td>
    <td>${alert.alertType}</td>
    <td><input type="text" class="input-schedule" id="${alert.alertId}" value="${alert.alertResponse}"> <button onclick="editarAlerta(this,&quot;${alert.alertId}&quot;,&quot;${alert.profileId}&quot;)" class="table-button">Responder alerta</button></td>
   

      
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
      counter++;
    }
  );

  sessionStorage.setItem("alertCounter", counter);
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
      
      obtenerVariablesPHP();
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
setInterval(miFuncion, 180000);

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
        
      }
      if(nuevoError==="false"){
      
        var re="error";
        
      }

      mostrarNotificacion(nuevoMensaje, re);
     

    })
    .catch(error => {
      console.error('Error al obtener las variables PHP:', error);
    });
}
</script>


<div id="publicgroups-container"></div>










</tbody>
          </table>
       
</div>

<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>
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
}
.notification.error {
    background-color: #f44336;
}

	</style>
  

