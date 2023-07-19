


<div class="table-container">
<!DOCTYPE html>
<html>
<head>
  <title>Fecha Actual</title>
</head>
<body>
  <h3>Seleccionar Fecha Inicial</h3>

  <input type="date" id="fechaInput">

  
  
  <h3>Seleccionar Fecha Final</h3>

  <input type="date" id="fechaInput1">

  <a href="#" onclick="openModalPagesModelHis1();" class="table-button">Historial</a>

  <script>
    function openModalPagesModelHis1() {
      var fechaSeleccionada = document.getElementById('fechaInput').value;
      var fechaSeleccionada1 = document.getElementById('fechaInput1').value;
      // Realizar las acciones deseadas con la fecha seleccionada
      getPagesAssignModelsHis(fechaSeleccionada,fechaSeleccionada1);
      console.log(fechaSeleccionada);
      console.log(fechaSeleccionada1);
    }
  </script>
</body>
</html>

<table id="pagesassignmodelhis-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
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
      <td><button onclick="desconectarModel(this,&quot;${student.pageId}&quot;)">Conectar Transmisión</button></td>
    
  
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

';?>  



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
