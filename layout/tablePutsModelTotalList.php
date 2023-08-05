



<!DOCTYPE html>
<html>
<head>

 
</head>
<body>
<h2>Escribe nombre de corte</h2>

  <h2><input type="text" id="fechaInput121" class="table-button"></h2>

  
  
  
<br>
<br>
<h2><a href="#" onclick="openModalPutModelTotal11();" class="table-button">Ver total</a></h2>
<button onclick="descargarCSVtlist()" class="table-button">Descargar resporte CSV</button>
<button onclick="descargarExceltlist()" class="table-button">Descargar reporte Excel</button>

</body>
</html>
<div class="table-container">
<table id="pagesassignmodelhis111-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
   
    <th>Corte</th>
      <th>Id model</th>
      <th>Monto inicial</th>
      <th>Monto final</th>
      <th>Descuento</th>

      <th>%descuento</th>
      <th>Tiempo promedio</th>
      
      
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

<script>
function convertirTablaAFormatoCSVtlist() {
    const tabla = document.getElementById('pagesassignmodelhis111-table');
    const filas = tabla.getElementsByTagName('tr');
    const contenidoCSV = [];

    for (let i = 0; i < filas.length; i++) {
        const celdas = filas[i].getElementsByTagName('td');
        const filaCSV = [];

        for (let j = 0; j < celdas.length; j++) {
            filaCSV.push(celdas[j].innerText);
        }

        contenidoCSV.push(filaCSV.join(','));
    }

    return contenidoCSV.join('\n');
}

function descargarCSV() {
    const contenidoCSV = convertirTablaAFormatoCSVtlist();
    const blob = new Blob([contenidoCSV], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');



    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_cortes_model_creadas_'+fechaActual+'.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

function convertirTablaAFormatoJSONtlist() {
    const tabla = document.getElementById('pagesassignmodelhis111-table');
    const filas = tabla.getElementsByTagName('tr');
    const contenidoJSON = [];

    for (let i = 1; i < filas.length; i++) {
        const celdas = filas[i].getElementsByTagName('td');
        const filaJSON = {};

        for (let j = 0; j < celdas.length; j++) {
            const columna = document.querySelector('th:nth-child(' + (j + 1) + ')').innerText;
            filaJSON[columna] = celdas[j].innerText;
        }

        contenidoJSON.push(filaJSON);
    }

    return JSON.stringify(contenidoJSON, null, 2);
}

function descargarJSONtlisttlist() {
    const contenidoJSON = convertirTablaAFormatoJSONtlist();
    const blob = new Blob([contenidoJSON], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');

    a.href = url;
    a.download = 'tabla.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




function convertirTablaAFormatoExceltlist() {
    const tabla = document.getElementById('pagesassignmodelhis111-table');
    const filas = tabla.getElementsByTagName('tr');
    const contenidoExcel = [];

    for (let i = 0; i < filas.length; i++) {
        const celdas = filas[i].getElementsByTagName('td');
        const filaExcel = [];

        for (let j = 0; j < celdas.length; j++) {
            filaExcel.push(celdas[j].innerText);
        }

        contenidoExcel.push(filaExcel.join('\t'));
    }

    return contenidoExcel.join('\n');
}

function descargarExceltlist() {
    const contenidoExcel = convertirTablaAFormatoExceltlist();
    const blob = new Blob(['\ufeff', contenidoExcel], { type: 'application/vnd.ms-excel' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_paginas_creadas_'+fechaActual+'.xls';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

</script>

