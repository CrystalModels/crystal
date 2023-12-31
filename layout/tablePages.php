

<button onclick="descargarCSV()" class="table-button">Descargar resporte CSV</button>
<button onclick="descargarExcel()" class="table-button">Descargar reporte Excel</button>

<div class="table-container">

<table id="pages-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Página</th>
      <th>Modena</th>
      <th>%</th>
      <th>Url</th>
      <th>Estado</th>
      <th>Actualizado</th>
      
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
  const subdominiopages = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPages/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPages() {
	
	fetch(subdominiopages)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pages-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="page.php?pageId=${student.pageId}" target="_blank">Abrir</a>
     </td>
  
      <td>${student.name}</td>
        <td>${student.currency}</td>
        <td>${student.percentValue}</td>
        <td>${student.urlPage}</td>
        <td>${student.isActive}</td>
        <td>${student.updatedAt}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPages();
 




 
	</script>

';?>  



<div id="publicgroups-container"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
   



<script>
function convertirTablaAFormatoCSV() {
    const tabla = document.getElementById('pages-table');
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
    const contenidoCSV = convertirTablaAFormatoCSV();
    const blob = new Blob([contenidoCSV], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');



    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_paginas_creadas_'+fechaActual+'.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

function convertirTablaAFormatoJSON() {
    const tabla = document.getElementById('pages-table');
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

function descargarJSON() {
    const contenidoJSON = convertirTablaAFormatoJSON();
    const blob = new Blob([contenidoJSON], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');

    a.href = url;
    a.download = 'tabla.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




function convertirTablaAFormatoExcel() {
    const tabla = document.getElementById('pages-table');
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

function descargarExcel() {
    const contenidoExcel = convertirTablaAFormatoExcel();
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


</tbody>
          </table>
       
</div>

