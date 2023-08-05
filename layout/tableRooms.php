

<button onclick="descargarCSVrooms()" class="table-button">Descargar resporte CSV</button>
<button onclick="descargarExcelrooms()" class="table-button">Descargar reporte Excel</button>
<div class="table-container">
    
<table id="rooms-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Room</th>
      <th>Comentario</th>
      <th>Estado</th>
      <th>Activo</th>
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
  const subdominiorooms = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllRooms/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getRooms() {';?>
 
	<?php

  echo '
	fetch(subdominiorooms)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#rooms-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.rooms.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="room.php?roomId=${student.roomId}" target="_blank">Abrir</a>
      </td>
  
      <td>${student.name}</td>
        <td>${student.comments}</td>
        <td>${student.status}</td>
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
 //getRooms();
 


	</script>

';?>  



<div id="publicgroups-container"></div>




<?php

require_once 'env/domain.php';
$sub_domaincon = new model_dom;
$sub_domain = $sub_domaincon->dom();
$headerslink = $_SESSION['ranCode'] . " " . $_SESSION['key'];
echo '
<script>
  // Función para obtener los datos del API
  async function getSchUsersx() {
   const subdominioschx = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyAlerts/' . $headerslink . '/'.$_SESSION['profileId'].';
  
    fetch(subdominioschx)
      .then(response => response.json())
      .then(data => {
        const alertas = data.alerts;
        const recordatorios = data.alerts;
        
        // Actualizar los enlaces del menú con los datos del API
        const alertasLink = document.querySelector("#alertas-link");
        const recordatoriosLink = document.querySelector("#recordatorios-link");
        
        alertasLink.textContent = alertas;
        recordatoriosLink.textContent = recordatorios;
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
  getSchUsersx();
</script>
';?>







</tbody>
          </table>
       
</div>


<script>
function convertirTablaAFormatoCSVrooms() {
    const tabla = document.getElementById('rooms-table');
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

function descargarCSVrooms() {
    const contenidoCSV = convertirTablaAFormatoCSVrooms();
    const blob = new Blob([contenidoCSV], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');



    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_rooms_creados_'+fechaActual+'.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

function convertirTablaAFormatoJSONrooms() {
    const tabla = document.getElementById('rooms-table');
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

function descargarJSONrooms() {
    const contenidoJSON = convertirTablaAFormatoJSONrooms();
    const blob = new Blob([contenidoJSON], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');

    a.href = url;
    a.download = 'tabla.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




function convertirTablaAFormatoExcelrooms() {
    const tabla = document.getElementById('rooms-table');
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

function descargarExcelrooms() {
    const contenidoExcel = convertirTablaAFormatoExcelrooms();
    const blob = new Blob(['\ufeff', contenidoExcel], { type: 'application/vnd.ms-excel' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_rooms_creados_'+fechaActual+'.xls';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

</script>

