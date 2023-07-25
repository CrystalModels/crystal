


<div class="table-container">
    
<table id="usersSuperAdminsch-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellido</th>
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
 
 // const subdominio = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllUsersBySuperAdmin/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getUsersSuperAdminSc() {
	
	fetch(subdominio)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#usersSuperAdminsch-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.users.forEach(profile => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a href="#" onclick="openModalScheduleUsers();getSchUsers(&quot;${profile.profileId}&quot;);" class="table-button">Ver</a>
      </td>
  <td>${profile.userName}</td> 
      <td>${profile.name}</td>
        <td>${profile.lastName}</td>
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
 //getUsersSuperAdminSc();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>
