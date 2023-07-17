


<div class="table-container">
    
<table id="models-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    <th>Acciones</th>
      <th>Usuario</th>
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Rol</th>
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
  const subdominiomodels = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllModels/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getModels() {
	
	fetch(subdominiomodels)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#models-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.models.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="group.php?student_id=${student.profileId}&my_profile=${student.profileId}&owner_id=${student.profileId}">Abrir</a>
      </td>
  <td>${student.userName}</td> 
      <td>${student.name}</td>
        <td>${student.lastName}</td>
        <td>${student.rol}</td>

        <td><button onclick="openModalPagesAssign();getPagesAssign(&quot;${student.profileId}&quot;);">Asigna Página</button></td>
    
       
        
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

