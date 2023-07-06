


<div class="table-container">
    
<table id="photographs-table" class="table">
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
	echo '
	<script>
  //const my_profyle = sessionStorage.getItem("profile");
  const subdominiophotographs = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllPhotographs`;

 // Función para obtener los datos del API
 async function getPhotographs() {
	
	fetch(subdominiophotographs,{
        headers: {
          "Content-Type": "application/json",
          "Api-Key": "'.$_SESSION['ranCode'].'",
          "x-api-Key": "'.$_SESSION['key'].'"
        }
      })
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#photographs-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.photographs.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="group.php?student_id=${student.profileId}&my_profile=${student.profileId}&owner_id=${student.profileId}">Abrir</a>
      </td>
  <td>${student.userName}</td> 
      <td>${student.name}</td>
        <td>${student.lastName}</td>
        <td>${student.rol}</td>

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPhotographs();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

