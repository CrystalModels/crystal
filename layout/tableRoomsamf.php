


<div class="table-container">
    
<table id="roomsamf-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Room</th>
      <th>Comentario</th>
      <th>Estado</th>
      <th>Activo</th>
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
  const subdominioroomsamf = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllRoomsFalse/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getRoomsamf() {';?>
 
	<?php

  echo '
	fetch(subdominioroomsamf)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#roomsamf-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.rooms.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="openModalModelsar();getModelsar(&quot;${student.roomId}&quot;);">Asignar room</button></td>
    
  
      <td>${student.name}</td>
        <td>${student.comments}</td>
        <td>${student.status}</td>
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
 //getRoomsamf();
 


	</script>

';?>  
  </tbody>

          </table>
       
</div>





























