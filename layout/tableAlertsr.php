


<div class="table-container">
    
<table id="alertsr-table" class="table">
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
 async function getAlertsr(profileid) {
  
  const subdominioalertsr = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyAlertsr/' . $headerslink . '/" + profileid;
    
  
  ';?>
 
	<?php

  echo '
	fetch(subdominioalertsr)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#alertsr-table tbody");
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



</script>


<div id="publicgroups-container"></div>










</tbody>
          </table>
       
</div>
