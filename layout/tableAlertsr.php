


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
      
      <td><button onclick="reproducirSonido1();editarAlertad(this,&quot;${alert.alertId}&quot;,&quot;${alert.profileId}&quot;)" class="table-button">Eliminar</button></td>
    <td>${alert.comments}</td>
    <td>${alert.alertType}</td>
    <td>${alert.alertResponse}</td>
   

      
       

        
       
        
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




<audio id="audioPlayer1" src="public/delete.mp3" preload="auto"></audio>



<script>
  function reproducirSonido1() {
  var audio = document.getElementById('audioPlayer1');
  audio.play();
}
function editarAlertad(button, id,profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var response = "del";

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditMyAlert.php?alertId=' + encodeURIComponent(id) + '&response=' + encodeURIComponent(response)+ '&profileId=' + encodeURIComponent(profileid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      getAlertsr(profileid);
      obtenerVariablesPHP();
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}



</script>


<div id="publicgroups-container"></div>










</tbody>
          </table>
       
</div>
