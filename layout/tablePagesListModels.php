


<div class="table-container">
    
<table id="pagesassignmodel-table" class="table">
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
 async function getPagesAssignModels() {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodels = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModels/'.$headerslink.'/'.$_GET['modelId'].'`;

	
	fetch(subdominiopagesmodels)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodel-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="desconectarTransmision(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;);">Conectar Transmisiónq</button></td>
    
  
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
 //getPagesAssignModels();
 


	</script>

';?>  



<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
 
 // Función para obtener los datos del API
 async function getPagesAssignModels1() {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodels1 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModels/'.$headerslink.'/'.$_SESSION['profileId'].'`;

	
	fetch(subdominiopagesmodels1)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodel-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="desconectarTransmisionModel(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;);getPagesAssignModels1();">Parar Transmisión</button></td>
    
  
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
 //getPagesAssignModels1();
 


	</script>

';?>  


<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>


<script>

function desconectarTransmision(button, pageid, profileid,transid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerConnectModelPageNot.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid) + '&transId=' + encodeURIComponent(transid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      getPagesAssignModels();
      
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}




function desconectarTransmisionModel(button, pageid, profileid,transid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerConnectModelPageNot.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid) + '&transId=' + encodeURIComponent(transid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      getPagesAssignModels1();
      
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>