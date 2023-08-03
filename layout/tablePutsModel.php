



<div class="table-container">





<table id="putsmodel-table" class="table">
 
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
 async function getPutsModel(modelid) {';?>
 
	<?php

  echo '

  
  const subputsmodel = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getModelEarnAdd/' . $headerslink . '/" + modelid;

  
	fetch(subputsmodel)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#putsmodel-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      
      <td> </td>
      <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.cuttingId}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
       
        <td>${student.startDate} ${student.startTime}</td>
        <td>${student.endDate} ${student.endTime}</td>
        <td>${student.totalTime}</td>

        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.startAmount}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
        
        <td>${student.endAmount}</td>
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.paymentCurrency}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
        
        
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.discountAmmount}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.discountPercent}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
       
        <td><input type="text" class="input-schedule" id="${student.earnId}" value="${student.comments}"> <button onclick="editar(this,&quot;${student.earnId}&quot;,&quot;mon&quot;)" class="table-button">Ajustar</button></td>
       
       

        
       
        
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

function editar(button, id, day) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditMySchedule.php?scheduleId=' + encodeURIComponent(id) + '&day=' + encodeURIComponent(day) + '&value=' + encodeURIComponent(nombre);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>

