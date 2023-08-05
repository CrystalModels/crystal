

<button onclick="descargarCSVcur()" class="table-button">Descargar resporte CSV</button>
<button onclick="descargarExcelcur()" class="table-button">Descargar reporte Excel</button>
<div class="table-container">
    
<table id="currency-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Moneda</th>
      <th>Simbolo</th>
      <th>Currency</th>
      <th>Valor</th>
      <th>Comparación</th>
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
  const subdominiocurrency = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllCurrency/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getCurrency() {
	
	fetch(subdominiocurrency)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#currency-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.currency.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="currency.php?currencyId=${student.curId}" target="_blank">Abrir</a>
     </td>
  
      <td>${student.name}</td>
        <td>${student.symbol}</td>
        <td>${student.currency}</td>
        <td>${student.currentValue}</td>
        <td>${student.comparative}</td>
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
 //getCurrency();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>


<script>
function convertirTablaAFormatoCSVcur() {
    const tabla = document.getElementById('currency-table');
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

function descargarCSVcur() {
    const contenidoCSV = convertirTablaAFormatoCSVcur();
    const blob = new Blob([contenidoCSV], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');



    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_monedas_creadas_'+fechaActual+'.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

function convertirTablaAFormatoJSONcur() {
    const tabla = document.getElementById('currency-table');
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

function descargarJSONcur() {
    const contenidoJSON = convertirTablaAFormatoJSONcur();
    const blob = new Blob([contenidoJSON], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');

    a.href = url;
    a.download = 'tabla.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




function convertirTablaAFormatoExcelcur() {
    const tabla = document.getElementById('currency-table');
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

function descargarExcelcur() {
    const contenidoExcel = convertirTablaAFormatoExcelcur();
    const blob = new Blob(['\ufeff', contenidoExcel], { type: 'application/vnd.ms-excel' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_monedas_creadas_'+fechaActual+'.xls';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

</script>

