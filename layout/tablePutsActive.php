


<div class="table-container">





<table id="putsactive-table" class="table">
 
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Corte</th>
      <th>Inicio</th>
      <th>Final</th>
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
  const subputsactive = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getPutsCreatedStart/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPutsactive() {';?>
 
	<?php

  echo '
	fetch(subputsactive)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#putsactive-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.puts.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarPagina(this,&quot;${student.cutId}&quot;)" class="table-button">Iniciar corte</button></td>
    
  
      <td>${student.cutName}</td>
        <td>${student.startDate}</td>
        <td>${student.endDate}</td>
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
 //getPutsactive();
 


	</script>

';?>  



<div id="publicgroups-container"></div>




<?php

require_once 'env/domain.php';
$sub_domaincon = new model_dom;
$sub_domain = $sub_domaincon->dom();
$headerslink = $_SESSION['ranCode'] . " " . $_SESSION['key'];
echo '
<script>
  // Función para obtener los datos del API
  async function getSchUsersx() {
   const subdominioschx = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyAlerts/' . $headerslink . '/'.$_SESSION['profileId'].';
  
    fetch(subdominioschx)
      .then(response => response.json())
      .then(data => {
        const alertas = data.alerts;
        const recordatorios = data.alerts;
        
        // Actualizar los enlaces del menú con los datos del API
        const alertasLink = document.querySelector("#alertas-link");
        const recordatoriosLink = document.querySelector("#recordatorios-link");
        
        alertasLink.textContent = alertas;
        recordatoriosLink.textContent = recordatorios;
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
  getSchUsersx();
</script>
';?>







</tbody>
          </table>
       
</div>

