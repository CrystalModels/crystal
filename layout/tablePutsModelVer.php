



<div class="table-container">





<table id="putsmodelver-table" class="table">
 
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Corte</th>
      <th>Inicio</th>
      <th>Final</th>
      <th>Tiempo total</th>
      <th>Monto inicial</th>
      <th>Monto Final</th>
      <th>Moneda</th>
      <th>Descuentos</th>
      <th>% Descuento</th>
      <th>Comentarios</th>
      
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
  
 // Función para obtener los datos del API
 async function getPutsModelver(modelid) {';?>
 
	<?php

  echo '
var modeliid=modelid;
  
  const subputsmodelver = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getModelEarnAddver/' . $headerslink . '/" + modelid;

  
	fetch(subputsmodelver)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#putsmodelver-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      
      <td><button onclick="ajusteRev1(this,&quot;${student.earnId}&quot;,&quot;rev&quot;,&quot;${student.modelId}&quot;)" class="table-button">Revisión</button>
      <button onclick="ajusteRev1(this,&quot;${student.earnId}&quot;,&quot;close&quot;,&quot;${student.modelId}&quot;)" class="table-button">Cerrar</button></td>
      <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.cuttingId}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;cuttingId&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
       
        <td>${student.startDate} ${student.startTime}</td>
        <td>${student.endDate} ${student.endTime}</td>
        <td>${student.totalTime}</td>

        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.startAmount}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;startAmmount&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
        
        <td>${student.endAmount}</td>
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.paymentCurrency}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;paymentCurrency&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
        
        
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.discountAmmount}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;discountAmmount&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.discountPercent}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;discountPercent&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
       
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.comments}"> <button onclick="ajuste1(this,&quot;${student.earnId}&quot;,&quot;comments&quot;,&quot;${student.modelId}&quot;)" class="table-button">Ajustar</button></td>
       
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPutsModel();
 


	</script>

';?>  
  


<div id="publicgroups-container"></div>






</tbody>
          </table>
       
</div>



<script>

function ajuste1(button, id, value,modeliid) {
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
      const mensaje = sessionStorage.getItem("mensaje");
      getPutsModelver(modeliid);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}



function ajusteRev1(button, id, value,modeliid) {
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
      const mensaje = sessionStorage.getItem("mensaje");
      getPutsModelver(modeliid);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>

