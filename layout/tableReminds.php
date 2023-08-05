


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
    data.reminds.forEach(remind => {
  
      const row = document.createElement("tr");
      row.innerHTML = `
         
        
        <td><button onclick="editarRemind(this,&quot;${remind.remindId}&quot;,&quot;${remind.ownerId}&quot;)" class="table-button">Cerrar recordatorio</button></td>
   
    <td>${remind.comments}</td>
    <td>${remind.rDate}</td>
    <td>${remind.rTime}</td>
      <td>${remind.remindType}</td>
      
       
    
        
       
        
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

function editarRemind(button, id,profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var response = input.value;

  // Construir la URL con los parámetros de la petición GET

    var url = 'controller/controllerEditMyRemindClose.php?remindId=' + encodeURIComponent(id) + '&profileId=' + encodeURIComponent(profileid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      const profileid = sessionStorage.getItem("profileId");
      getReminds();
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

