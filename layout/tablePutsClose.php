


<div class="table-container">





<table id="putsclose-table" class="table">
 
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Corte</th>
      <th>Inicio</th>
      <th>Final</th>
      <th>Días</th>
      <th>Ganancia</th>
      <th>Inicio sistema</th>
      <th>Final sistema</th>
      <th>Días sistema</th>
      <th>Ganancia sistema</th>
      <th>Activo</th>
      <th>Estado</th>
      
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
  const subputsclose = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getPutsCreatedFinished/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPutsclose() {';?>
 
	<?php

  echo '
	fetch(subputsclose)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#putsclose-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarPagina(this,&quot;${student.cutId}&quot;)" class="table-button">Recalcular</button></td>
    
  
      <td>${student.cutName}</td>
        <td>${student.startDate}</td>
        <td>${student.endDate}</td>
        <td>${student.totalDays}</td>
        <td>${student.totalAmount}</td>
        <td>${student.realStartDate}</td>
        <td>${student.realEndDate}</td>
        <td>${student.realTotalDays}</td>
        
        <td>${student.realTotalAmount}</td>
        <td>${student.isActive}</td>
        <td>${student.status}</td>
      
        
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 //getPutsclose();
 


	</script>

';?>  



<div id="publicgroups-container"></div>





</tbody>
          </table>
       
</div>

