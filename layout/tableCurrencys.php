


<div class="table-container">
    
<table id="currency-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Moneda</th>
      <th>Simbolo</th>
      <th>Currency</th>
      <th>Valor</th>
      <th>Comparación</th>
      <th>Estado</th>
      <th>Actualizado</th>
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
  const subdominiocurrency = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllCurrency`;

 // Función para obtener los datos del API
 async function getCurrency() {
	
	fetch(subdominiocurrency,{
        headers: {
          "Content-Type": "application/json",
          "Api-Key": "'.$_SESSION['ranCode'].'",
          "x-api-Key": "'.$_SESSION['key'].'"
        }
      })
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#currency-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.currency.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><a class="table-button" href="currency.php?currencyId=${student.curId}" target="_blank">Abrir</a>
     </td>
  
      <td>${student.name}</td>
        <td>${student.symbol}</td>
        <td>${student.currency}</td>
        <td>${student.currentValue}</td>
        <td>${student.comparative}</td>
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
 //getCurrency();
 


	</script>

';?>  



<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>

