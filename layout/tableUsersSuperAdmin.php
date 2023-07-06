


<div class="table-container">
    
<table id="usersSuperAdmin-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Correo Empresarial</th>
      <th>Correo Interno</th>
      <th>Correo Personal</th>
      <th>Rol</th>
      
    </tr>
  </thead>
            <tbody>

	<?php

require_once 'env/domain.php';
$sub_domaincon=new model_dom;
$sub_domain=$sub_domaincon->dom();
	echo '
	<script>
		
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominio = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllUsersBySuperAdmin`;

 // Función para obtener los datos del API
 async function getUsersSuperAdmin() {
	
	fetch(subdominio,{
        headers: {
         
          "Api-Key": "'.$_SESSION['ranCode'].'",
          "x-api-Key": "'.$_SESSION['key'].'"
        }
      })
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#usersSuperAdmin-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.users.forEach(profile => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="profile.php?profileId=${profile.profileId}&userName=${profile.userName}" target="_blank">Abrir</a>
      </td>
  <td>${profile.userName}</td> 
      <td>${profile.name}</td>
        <td>${profile.lastName}</td>
        <td>${profile.companyMail}</td>
        <td>${profile.internalMail}</td>
        <td>${profile.personalMail}</td>
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
 //getUsersSuperAdmin();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

