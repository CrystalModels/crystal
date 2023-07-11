


<div class="table-container">
    
<table id="sch-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
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
      <td><a class="table-button" href="schedule.php?schId=${student.schId}" target="_blank">Abrir</a>
      </td>
      <td>${schedule.sTime}</td>
      <td>${schedule.mon}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=mon">Editar</a></td>
      <td>${schedule.tus}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=tus">Editar</a></td>
      <td>${schedule.wen}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=wen">Editar</a></td>
      <td>${schedule.thu}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=thu">Editar</a></td>
      <td>${schedule.fri}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=fri">Editar</a></td>
      <td>${schedule.sat}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=sat">Editar</a></td>
      <td>${schedule.sun}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=sun">Editar</a></td>
      <td>${schedule.maxTime}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=maxt">Editar</a></td>
      <td>${schedule.minTime}<br><a class="btn btn-secondary" href="schedule.php?id=${schedule.schId}&day=mint">Editar</a></td>
 
        
       

        
       
        
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



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

