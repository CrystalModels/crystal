


<div class="table-container">
    
<table id="models-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Rol</th>
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
  const subdominiomodels = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllModels/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getModels() {
	
	fetch(subdominiomodels)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#models-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.models.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="model.php?modelId=${student.profileId}&names=${student.name} ${student.lastName}" target="_blank">Estado actual</a>
      </td>
  <td>${student.userName}</td> 
      <td>${student.name}</td>
        <td>${student.lastName}</td>
        <td>${student.rol}</td>

        <td><button onclick="openModalPagesAssign();getPagesAssign(&quot;${student.profileId}&quot;);" class="table-button">Página</button><button onclick="openModalRoomsModelassign();getRoomsAssign(&quot;${student.profileId}&quot;);" class="table-button">Room</button></td>
        <td><button onclick="openModalPagesModelHis();getPagesAssignModelsHis1(&quot;${student.profileId}&quot;,&quot;${student.profileId}&quot;);" class="table-button">Historial</button>
        <button onclick="openModalPutModel();getPutsModel(&quot;${student.profileId}&quot;);" class="table-button">Validar</button><button onclick="openModalPutModel();getPutsModel(&quot;${student.profileId}&quot;);" class="table-button">Logs</button></td>
      
      
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getModels();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>


<script>

function crearCarpeta(button, modelId) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerCrearPortafolio.php?profileId=' + encodeURIComponent(modelId);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      obtenerVariablesPHP();
      //getRoomsam();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>






