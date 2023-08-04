


<div class="table-container">
    
<table id="roomsassign-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
      <th>Acciones</th>
        <th>Room</th>
      <th>Comentario</th>
      
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
  const subdominiorooms1 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllRooms/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getRoomsAssign(profileid) {';?>
 
	<?php

  echo '
  var pid=profileid;
  sessionStorage.setItem("assignPageId", pid);
	fetch(subdominiorooms1)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#roomsassign-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.rooms.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarRoom(this,&quot;${student.roomId}&quot;,&quot;${pid}&quot;)" class="table-button">Asignar room</button></td>
    
  
      <td>${student.name}</td>
        <td>${student.comments}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getRoomsAssign();
 


	</script>

';?>  



<div id="publicgroups-container"></div>





</tbody>
          </table>
       
</div>

<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>

<script>

function asignarRoom(button, roomID, profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerAssignRoom.php?roomId=' + encodeURIComponent(roomID) + '&profileId=' + encodeURIComponent(profileid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      obtenerVariablesPHP();
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}




















</script>





