



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
  <h2>Seleccionar fecha inicial</h2>

  <h2><input type="text" id="fechaInput121" class="table-button"></h2>

  
  
  
<br>
<br>
<h2><a href="#" onclick="openModalPutModelTotal11();" class="table-button">Ver total</a></h2>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhis111-table" class="table">
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
		
 
  function openModalPutModelTotal11() {
    var fechaSeleccionada = document.getElementById("fechaInput121").value;
    // Realizar las acciones deseadas con la fecha seleccionada
    //getPagesAssignModelsHis(fechaSeleccionada,fechaSeleccionada1);
    
var modelidnow = sessionStorage.getItem("currentModel");
    getPagesAssignModelsHis111(modelidnow,fechaSeleccionada);
    
  }
 
 // Función para obtener los datos del API
 async function getPagesAssignModelsHis111(modelid,datetime) {
  sessionStorage.setItem("modelIdNow", modelid);
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelshis111 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getModelEarn/'.$headerslink.'/${modelid}/${datetime}`;

	
	fetch(subdominiopagesmodelshis111)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelhis111-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.earns.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.cuttingId}</td>
      <td>${student.modelId}</td>
      <td>${student.startAmount}</td>
      <td>${student.endAmount}</td>
      <td>${student.discountAmmount}</td>
      <td>${student.discountPercent}</td>
      <td>${student.totalTime}</td>
        
       
        
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
