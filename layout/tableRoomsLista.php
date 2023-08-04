


<div class="table-container">
    
<table id="roomslista-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
  
      <th>Room</th>
      <th>Comentario</th>
      <th>Modelo</th>
      <th>Usuario</th>
      
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
  const subdominioroomslista = `'.$sub_domain.'/crystalGateway/apiBroker/v1/getModelInfo/'.$headerslink.'/12345`;

 // Función para obtener los datos del API
 async function getRoomsLista() {
  var pid="del";
  ';?>
 
	<?php

  echo '
	fetch(subdominioroomslista)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#roomslista-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.modelInfo.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      
      <td>${student.roomName}</td>
        <td>${student.comments}</td>
        <td>${student.name} ${student.lastName}</td>
        <td>${student.userName}</td>
       
       
        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getRoomsLista();
 


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
      obtenerVariablesPHP();
      getRoomsam();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>






