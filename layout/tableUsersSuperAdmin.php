

<button onclick="descargarCSVusers()" class="table-button">Descargar resporte CSV</button>
<button onclick="descargarExcelusers()" class="table-button">Descargar reporte Excel</button>
<div class="table-container">
    
<table id="usersSuperAdmin-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Correo Empresarial</th>
      <th>Correo Interno</th>
      <th>Correo Personal</th>
      <th>Rol</th>
      
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
 
  const subdominio = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllUsersBySuperAdmin/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getUsersSuperAdmin() {
	
	fetch(subdominio)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#usersSuperAdmin-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.users.forEach(profile => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="profile.php?profileId=${profile.profileId}&userName=${profile.userName}" target="_blank">Abrir</a>
      </td>
  <td>${profile.userName}</td> 
      <td>${profile.name}</td>
        <td>${profile.lastName}</td>
        <td>${profile.companyMail}</td>
        <td>${profile.internalMail}</td>
        <td>${profile.personalMail}</td>
        <td>${profile.rol}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getUsersSuperAdmin();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>


<script>
function convertirTablaAFormatoCSVusers() {
    const tabla = document.getElementById('usersSuperAdmin-table');
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

function descargarCSVusers() {
    const contenidoCSV = convertirTablaAFormatoCSVusers();
    const blob = new Blob([contenidoCSV], { type: 'text/csv' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');



    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_usuarios_creados_'+fechaActual+'.csv';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

function convertirTablaAFormatoJSONusers() {
    const tabla = document.getElementById('usersSuperAdmin-table');
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

function descargarJSONusers() {
    const contenidoJSON = convertirTablaAFormatoJSONusers();
    const blob = new Blob([contenidoJSON], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');

    a.href = url;
    a.download = 'tabla.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}




function convertirTablaAFormatoExcelusers() {
    const tabla = document.getElementById('usersSuperAdmin-table');
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

function descargarExcelusers() {
    const contenidoExcel = convertirTablaAFormatoExcelusers();
    const blob = new Blob(['\ufeff', contenidoExcel], { type: 'application/vnd.ms-excel' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    const fecha = new Date();
    const year = fecha.getFullYear();
    const month = String(fecha.getMonth() + 1).padStart(2, '0'); // Sumamos 1 al mes ya que los meses en JavaScript van de 0 a 11
    const day = String(fecha.getDate()).padStart(2, '0');
    const fechaActual = `${year}-${month}-${day}`;
    a.href = url;
    a.download = 'reporte_usuarios_creados_'+fechaActual+'.xls';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
}

</script>
