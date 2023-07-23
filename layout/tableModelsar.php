


<div class="table-container">
    
<table id="modelsar-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Asignación</th>
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
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiomodelsar = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllModels/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getModelsar(roomid) {
  var pid=roomid;
	fetch(subdominiomodelsar)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#modelsar-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.models.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.name}</td>
        <td>${student.lastName}</td>

        <td><button onclick="asignarRoomModel(this,&quot;${student.profileId}&quot;,&quot;${pid}&quot;)">Asignar Room</button></td>
      
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getModelsar();
 


	</script>

';?>  











</tbody>
          </table>
       
</div>


<script>

function asignarRoomModel(button, modelId, roomId) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerAssignRoomByModel.php?roomId=' + encodeURIComponent(roomId) + '&modelId=' + encodeURIComponent(modelId);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>
