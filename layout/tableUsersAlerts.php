


<div class="table-container">
    
<table id="usersSuperAdminAlert-table" class="table">
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
$headerslink=$_SESSION['ranCode']." ".$_SESSION['key'];
	echo '
	<script>
		
  //const my_profyle = sessionStorage.getItem("profile");
 
 // const subdominio = `'.$sub_domain.'/crystalGateway/apiCore/v1/getAllUsersBySuperAdmin/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getUsersSuperAdminAlerts() {
	
	fetch(subdominio)
    
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#usersSuperAdminAlert-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.users.forEach(profile => {
      const row = document.createElement("tr");
      row.innerHTML = `
     
    <td><input type="text" class="input-schedule" id="${profile.profileId}" value=""> <button onclick="editarAlertaUsuario(this,&quot;${profile.profileId}&quot;)">Alertar</button></td>
    
  <td>${profile.userName}</td> 
      <td>${profile.name}</td>
        <td>${profile.lastName}</td>
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
 //getUsersSuperAdminSc();
 


	</script>

';?>  



<script>

function editarAlertaUsuario(button, id) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerEditUserAlert.php?profileId=' + encodeURIComponent(id) + '&value=' + encodeURIComponent(nombre);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
     //getSch();
      const mensaje = sessionStorage.getItem("mensaje");
      showAlert(mensaje);
      
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}
</script>


<div id="publicgroups-container"></div>








</tbody>
          </table>
       
</div>
