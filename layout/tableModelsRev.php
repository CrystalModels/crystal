


<div class="table-container">
    
<table id="modelsrev-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
    
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Asignación</th>
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
  const subdominiomodelsrev = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllModels/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getModelsrev() {
	
	fetch(subdominiomodelsrev)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#modelsrev-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.models.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      
  
      <td>${student.name}</td>
        <td>${student.lastName}</td>

        <td>
        <button onclick="openModalPutModelVer();getPutsModelver(&quot;${student.profileId}&quot;);" class="table-button">Validar</button>
        <button onclick="setItems(&quot;${student.profileId}&quot;);openModalPutModelTotal();" class="table-button">Total</button>
        <button onclick="setItems(&quot;${student.profileId}&quot;);openModalPutModelTotalList();" class="table-button">Listado</button></td>
      
      
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getModels();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>


<script>

function ajuste(button, id, value,modeliid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var nombre = input.value;
  var valor = value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerPutsModel.php?earnId=' + encodeURIComponent(id) + '&value=' + encodeURIComponent(value) + '&comment=' + encodeURIComponent(nombre);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      getPutsModel(modeliid);
      obtenerVariablesPHP();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}



function ajusteRev(button, id, value,modeliid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;
  var valor = value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerPutsModelRev.php?earnId=' + encodeURIComponent(id) + '&value=' + encodeURIComponent(value);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
       getPutsModel(modeliid);
      obtenerVariablesPHP();
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}




function setItems(id) {
  // Obtener el valor del campo de texto correspondiente al botón
 
  // Realizar la petición GET al archivo PHP
  
     sessionStorage.setItem("currentModel", id);
     
 
}
</script>





