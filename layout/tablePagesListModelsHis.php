



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
  <h2>Seleccionar fecha inicial</h2>

  <h2><input type="date" id="fechaInput" class="table-button"></h2>

  
  
  <h2>Seleccionar fecha final</h2>

  <h2><input type="date" id="fechaInput1" class="table-button"></h2>
<br>
<br>
<h2><a href="#" onclick="openModalPagesModelHis1();" class="table-button">Ver historial</a></h2>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhis-table" class="table">
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
		
  function openModalPagesModelHis1() {
    var fechaSeleccionada = document.getElementById("fechaInput").value;
    var fechaSeleccionada1 = document.getElementById("fechaInput1").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    getPagesAssignModelsHis(fechaSeleccionada,fechaSeleccionada1);
    
var modelidnow = sessionStorage.getItem("modelIdNow");
   // getPagesAssignModelsHis1(modelidnow,fechaSeleccionada,fechaSeleccionada1);
    console.log(fechaSeleccionada);
    
    console.log(fechaSeleccionada1);
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHis(datetime,datetimeend) {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshis = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsHis/'.$headerslink.'/'.$_GET['modelId'].'/${datetime}/${datetimeend}`;

	
	fetch(subdominiopagesmodelshis)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhis-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.pageName}</td>
      <td>${student.urlPage}</td>
      <td>${student.startDate} ${student.startTime}</td>
      <td>${student.endDate} ${student.endTime}</td>
      <td>${student.totalTime}</td>
      <td>${student.isActive}</td>
        
       
        
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
		
 
  function openModalPagesModelHis1() {
    var fechaSeleccionada = document.getElementById("fechaInput").value;
    var fechaSeleccionada1 = document.getElementById("fechaInput1").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    //getPagesAssignModelsHis(fechaSeleccionada,fechaSeleccionada1);
    
var modelidnow = sessionStorage.getItem("modelIdNow");
    getPagesAssignModelsHis1(modelidnow,fechaSeleccionada,fechaSeleccionada1);
    console.log(fechaSeleccionada);
    
    console.log(fechaSeleccionada1);
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHis1(modelid,datetime,datetimeend) {
  sessionStorage.setItem("modelIdNow", modelid);
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshis1 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsHis/'.$headerslink.'/${modelid}/${datetime}/${datetimeend}`;

	
	fetch(subdominiopagesmodelshis1)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhis-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.pageName}</td>
      <td>${student.urlPage}</td>
      <td>${student.startDate} ${student.startTime}</td>
      <td>${student.endDate} ${student.endTime}</td>
      <td>${student.totalTime}</td>
      <td>${student.isActive}</td>
        
       
        
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
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 console.log(profileid);
 console.log(pageid);
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
