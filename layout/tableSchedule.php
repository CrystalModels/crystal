


<div class="table-container">
    
<table id="sch-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        
        <th>Hora</th>
      <th>Lunes</th>
      <th>Martes</th>
      <th>Miercoles</th>
      <th>Jueves</th>
      <th>viernes</th>
      <th>Sábado</th>
      <th>Domingo</th>
      <th>Cantidad Max de horas</th>
      <th>Cantidad Min de horas</th>
      
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
  const subdominiosch = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getMyschedule/'.$headerslink.'/'.$_SESSION['profileId'].'`;

 // Función para obtener los datos del API
 async function getSch() {';?>
 
	<?php

  echo '
	fetch(subdominiosch)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#sch-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.sche.forEach(schedule => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td>${schedule.sTime}</td>
    
    <td><input type="text" id="${schedule.schId}" value="${schedule.mon}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;mon&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.tus}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.wen}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.thu}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.fri}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.sat}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.sun}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;tus&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.maxTime}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;maxt&quot;)">Editar</button></td>
    <td><input type="text" id="${schedule.schId}" value="${schedule.minTime}"> <button onclick="editar(&quot;${schedule.schId}&quot;,&quot;mint&quot;)">Editar</button></td>
    

      
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getSch();
 


	</script>

';?>  



<script>
function editar(id,day) {
  // Obtener el valor del campo de texto correspondiente al ID
  var nombre = document.getElementById(id).value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditMySchedule.php?scheduleId=' + encodeURIComponent(id) + '&day=' + encodeURIComponent(day) + '&value=' + encodeURIComponent(nombre);


  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      console.log(id," ",day," ",nombre);
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>


<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

