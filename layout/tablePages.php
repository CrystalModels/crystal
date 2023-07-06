


<div class="table-container">
    
<table id="pages-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Página</th>
      <th>Modena</th>
      <th>%</th>
      <th>Url</th>
      <th>Estado</th>
      <th>Actualizado</th>
      
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
  const subdominiopages = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPages/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPages() {
	
	fetch(subdominiopages)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pages-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="page.php?pageId=${student.pageId}" target="_blank">Abrir</a>
     </td>
  
      <td>${student.name}</td>
        <td>${student.currency}</td>
        <td>${student.percentValue}</td>
        <td>${student.urlPage}</td>
        <td>${student.isActive}</td>
        <td>${student.updatedAt}</td>
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPages();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

