


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

<div class="notification" id="notification1">
        <p id="notificationText1"></p>
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
      obtenerVariablesPHP1();
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}










// Función para mostrar la notificación
function mostrarNotificacion1(mensaje, tipo) {
    const notificacion1 = document.getElementById('notification1');
    const notificacionText1 = document.getElementById('notificationText1');

    notificacionText1.textContent = mensaje;
    notificacion1.classList.remove('error'); // Remover clase de error (en caso de que esté presente)

    if (tipo === 'error') {
        notificacion.classList.add('error');
    }

    notificacion.style.display = 'block';

    // Desaparecer la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = 'none';
    }, 3000);
}












function obtenerVariablesPHP1() {
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

      mostrarNotificacion1(nuevoMensaje, re);
     

    })
    .catch(error => {
      console.error('Error al obtener las variables PHP:', error);
    });
}
</script>





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
  

