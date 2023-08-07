



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
  <h2>Seleccionar fecha</h2>

  <h2><input type="date" id="fechaInputlog" class="table-button"></h2>
<br>
<br>
<h2><a href="#" onclick="openModalPagesModelHislogs();" class="table-button">Ver historial</a></h2>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhislogs-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
   
      <th>Página</th>
      <th>Url</th>
      <th>Inicio</th>
      <th>Final</th>
      <th>Tiempo promedio</th>

      <th>Estado</th>
      
    </tr>
  </thead>
            <tbody>

	<?php

if (isset($_GET['modelId'])) {
  // La variable GET 'nombre' existe


  

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
  function openModalPagesModelHislogs() {
    var fechaSeleccionada = document.getElementById("fechaInputlog").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    getPagesAssignModelsHislogs(fechaSeleccionada);
    
var modelidnow = sessionStorage.getItem("modelIdNow");
   // getPagesAssignModelsHislogs(modelidnow,fechaSeleccionada);
    console.log(fechaSeleccionada);
    
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHislogs(datetime) {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshislogs = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsHislogs/'.$headerslink.'/'.$_GET['modelId'].'/${datetime}`;

	
	fetch(subdominiopagesmodelshislogs)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhislogs-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.logs.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.type}</td>
      <td>${student.dater} ${student.timer}</td>
      <td>${student.createdAt}</td>
      <td>${student.logId}</td>
        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPagesAssignModelsHis();
 


	</script>

';
  
} else {
  
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
 
  function openModalPagesModelHislogs() {
    var fechaSeleccionada = document.getElementById("fechaInputlog").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    //getPagesAssignModelsHis(fechaSeleccionada);
    
var modelidnow = sessionStorage.getItem("currentModel");
    getPagesAssignModelsHislogs(modelidnow,fechaSeleccionada);
    console.log(fechaSeleccionada);
    
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHislogs(modelid,datetime) {
  sessionStorage.setItem("modelIdNow", modelid);
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshislogs1 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsHislogs/'.$headerslink.'/${modelid}/${datetime}`;

	
	fetch(subdominiopagesmodelshislogs1)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhislogs-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.logs.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${student.type}</td>
      <td>${student.dater} ${student.timer}</td>
      <td>${student.createdAt}</td>
      <td>${student.logId}</td>
        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPagesAssignModelsHis1();
 


	</script>

';
}
?>  





<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>



<script>

function desconectarModel(button, pageid, profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerAssignPage.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid);

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

  <!-- Botón para imprimir la tabla en PDF -->
  
</body>
</html>
