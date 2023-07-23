


<div class="table-container">
    
<table id="roomsam-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Room</th>
      <th>Comentario</th>
      <th>Modelo</th>
      <th>Actualizado</th>
      
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
  const subdominioroomsam = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllRoomsTrue/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getRoomsam() {
  var pid="del";
  ';?>
 
	<?php

  echo '
	fetch(subdominioroomsam)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#roomsam-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.rooms.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarRoomModel1(this,&quot;${student.roomId}&quot;,&quot;${pid}&quot;)">Desasignar Room</button></td>
      
      <td>${student.roomName}</td>
        <td>${student.comments}</td>
        <td>${student.status}</td>
        <td>${student.isActive}</td>
        <td>${student.updatedAt}</td>
       
       
        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getRoomsam();
 


	</script>

';?>  
  </tbody>

          </table>
       
</div>





<script>

function asignarRoomModel1(button, roomId, modelId) {
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
      getRoomsam();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>






