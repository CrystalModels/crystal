


<div class="table-container">
    
<table id="monitors-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
    
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
  const subdominiomonitors = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllMonitors/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getMonitors() {
	
	fetch(subdominiomonitors)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#monitors-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.monitors.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
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
 //getMonitors();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

