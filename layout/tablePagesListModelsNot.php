


<div class="table-container">
    
<table id="pagesassignmodelnot-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Página</th>
      <th>Url</th>

      <th>Estado</th>
      <th>Usuario de página</th>
      <th>LLave de página</th>
      <th>Acceso directo</th>

      
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
 async function getPagesAssignModelsNot() {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelsnot = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsNot/'.$headerslink.'/'.$_GET['modelId'].'`;

	
	fetch(subdominiopagesmodelsnot)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelnot-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="conectarTransmision(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;);" class="table-button">Iniciar transmisión</button></td>
    
  
      <td>${student.pageName}</td>
        <td>${student.urlPage}</td>
        <td>${student.isActive}</td>
        <td><input type="text" id="pageuname" name="pageuname" placeholder="Ingresa nombre de usuario" value="${student.pageUserName}"><button onclick="editarCredenciales(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;,&quot;pName&quot;);" class="table-button">Editar</button></td>
        <td><input type="text" id="pageKey" name="pagekey" placeholder="Ingresa contraseña" value="${student.pageKey}"><button onclick="editarCredenciales(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;,&quot;pKey&quot;);" class="table-button">Editar</button></td>
        <td><input type="text" id="pageKey" name="pagekey" placeholder="Ingresa contraseña" value="${student.pageLink}"><button onclick="editarCredenciales(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;,&quot;pLink&quot;);" class="table-button">Editar</button><a href="${student.pageLink}" target="_blank">Acceso directo</a>
        </td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPagesAssignModelsNot();
 


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
 async function getPagesAssignModelsNot1() {
  
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiopagesmodelsnot1 = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPagesModelsNot/'.$headerslink.'/'.$_SESSION['profileId'].'`;

	
	fetch(subdominiopagesmodelsnot1)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassignmodelnot-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="conectarTransmisionModel(this,&quot;${student.pageId}&quot;,&quot;${student.modelId}&quot;,&quot;${student.transId}&quot;);getPagesAssignModelsNot1();" class="table-button">Iniciar transmisión</button></td>
      
  
      <td>${student.pageName}</td>
        <td>${student.urlPage}</td>
        <td>${student.isActive}</td>
       
        <td>${student.pageUserName}</td>
        <td>${student.pageKey}</td>
        <td><a href="${student.pageLink}" target="_blank">Acceso directo</a></td>

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPagesAssignModelsNot1();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>



<script>

function conectarTransmision(button, pageid, profileid,transid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerConnectModelPage.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid) + '&transId=' + encodeURIComponent(transid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      obtenerVariablesPHP();
      getPagesAssignModelsNot();
      
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}



function conectarTransmisionModel(button, pageid, profileid,transid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerConnectModelPage.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid) + '&transId=' + encodeURIComponent(transid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      obtenerVariablesPHP();
      getPagesAssignModelsNot1();
      
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}





function editarCredenciales(button, pageid, profileid,transid,param) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditCredentials.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid) + '&transId=' + encodeURIComponent(transid) + '&param=' + encodeURIComponent(param)+ '&value=' + encodeURIComponent(nombre);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      obtenerVariablesPHP();
      getPagesAssignModelsNot();
      
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}

</script>
