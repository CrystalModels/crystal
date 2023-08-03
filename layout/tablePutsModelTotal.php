



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
  <h2>Seleccionar fecha inicial</h2>

  <h2><input type="date" id="fechaInput" class="table-button"></h2>

  
  
  
<br>
<br>
<h2><a href="#" onclick="openModalPutModelTotal1();" class="table-button">Ver total</a></h2>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhis11-table" class="table">
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

  
require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
 
  function openModalPutModelTotal1() {
    var fechaSeleccionada = document.getElementById("fechaInput").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    //getPagesAssignModelsHis(fechaSeleccionada,fechaSeleccionada1);
    
var modelidnow = sessionStorage.getItem("currentModel");
    getPagesAssignModelsHis11(modelidnow,fechaSeleccionada);
    
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHis11(modelid,datetime) {
  sessionStorage.setItem("modelIdNow", modelid);
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshis11 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getModelEarnTotal/'.$headerslink.'/${modelid}/${datetime}`;

	
	fetch(subdominiopagesmodelshis11)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhis11-table tbody");
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

?>  





<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>



  <!-- Botón para imprimir la tabla en PDF -->
  
</body>
</html>
