


<div class="table-container">
    
<table id="sessions-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Navegador</th>
      <th>Hora de Inicio</th>
      <th>Fecha de Inicio</th>
      
    </tr>
  </thead>
            <tbody>

	<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
$headerslink=$_SESSION['key']." ".$_SESSION['key'];
	echo '
	<script>
		
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiosessions = `'.$sub_domain.'/crystalGateway/apiCore/v1/getSessions/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getSessions() {';?>
 
	<?php

  echo '
	fetch(subdominiosessions)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#sessions-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.session.forEach(session => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="room.php?roomId=${session.roomId}" target="_blank">Abrir</a>
      </td>
  
      <td>${session.browser}</td>
        <td>${session.time}</td>
        <td>${session.date}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getSessions();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

