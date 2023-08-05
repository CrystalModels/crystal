



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
  <h2>Escribe nombre de corte</h2>

  <h2><input type="text" id="fechaInput12" class="table-button"></h2>

  
  
  
<br>
<br>
<h2><a href="#" onclick="openModalPutModelTotal1();" class="table-button">Ver total</a></h2>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhis11-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
   
      <th>Corte</th>
      <th>Id model</th>
      <th>Monto inicial</th>
      <th>Monto final</th>
      <th>Descuento</th>

      <th>%descuento</th>
      <th>Tiempo promedio</th>
      <th>Acciones</th>
      
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
    var fechaSeleccionada = document.getElementById("fechaInput12").value;
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
    data.earns.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
      <td>${student.cuttingId}</td>
      <td>${student.modelId}</td>
      <td>${student.start}</td>
      <td>${student.end}</td>
      <td>${student.discount}</td>
      <td>${student.percent}</td>
      <td>${student.time}</td>
      <td><button onclick="enviarCorreo(&quot;${student.modelId}&quot;,&quot;El corte ID ${student.cuttingId} fue cerrado con un valor inicial de $ ${student.start}, un total de descuentos $ ${student.discount} (${student.percent}%), para un total de $ ${student.end} por recibir, un promedio de tiempo trabajado ${student.time}&quot;,&quot;Cierre de corte&quot;)" class="table-button">Enviar correo</button></td>
        
       
        
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