


<div class="table-container">
    
<table id="reminds-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        
    <th>Acciones</th>
      <th>Recordatorio</th>
      <th>Fefha</th>
      <th>Hora</th>
      <th>Tipo</th>
      
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
		
  //const profileid = sessionStorage.getItem("profileId");
 // Función para obtener los datos del API
 async function getReminds() {
  
  const subdominioreminds = "' . $sub_domain . '/crystalGateway/apiIntegrations/v1/getMyReminds/' . $headerslink . '/'.$_SESSION['profileId'].';
    
  
  ';?>
 
	<?php

  echo '
	fetch(subdominioreminds)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#reminds-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    var counterRemind=0;
    data.reminds.forEach(remnind => {
  
      const row = document.createElement("tr");
      row.innerHTML = `
      
    
    <td>${remnind.comments}</td>
    <td>${remnind.remindType}</td>
    <td>${remnind.rDate}</td>
    <td>${remnind.rTime}</td>
    
       

        
       
        
      `;

      
      

      publicgroupsTableBody.appendChild(row);
      
    }
  );

  //sessionStorage.setItem("remindCounter", counterRemind);
  })
  .catch(error => {
    console.error("Error:", error);
  });



 }
 
 // Llamar a la función para obtener los datos del API
 getReminds();
 


	</script>

';?>  






<div id="publicgroups-container"></div>










</tbody>
          </table>
       
</div>
