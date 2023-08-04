


<div class="table-container">
    
<table id="pagesassign-table" class="table">
  <thead style="position: sticky; top: 0; background-color: #fff;">
    <tr>
        <th>Acciones</th>
      <th>Página</th>
      <th>Url</th>
      
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
  //const subdominiopages = `'.$sub_domain.'/crystalGateway/apiIntegrations/v1/getAllPages/'.$headerslink.'`;

 // Función para obtener los datos del API
 async function getPagesAssign(profileid) {
  var pid=profileid;
  sessionStorage.setItem("assignPageId", pid);

	
	fetch(subdominiopages)
   
  .then(response => response.json())
  .then(data => {
    const publicgroupsTableBody = document.querySelector("#pagesassign-table tbody");
    // Borramos los datos antiguos
    publicgroupsTableBody.innerHTML = "";
    data.pages.forEach(student => {
      const row = document.createElement("tr");
      row.innerHTML = `
      <td><button onclick="asignarPagina(this,&quot;${student.pageId}&quot;,&quot;${pid}&quot;)" class="table-button">Asignar página</button></td>
    
  
      <td>${student.name}</td>
        <td>${student.urlPage}</td>
       

        
       
        
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
<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>

    <?php
// Tu código PHP para configurar la sesión y obtener el mensaje (asumiendo que se ha configurado la sesión previamente)
$mensaje = $_SESSION['mensaje'];
$error = $_SESSION['error'];
?>

<script>
// Crear una variable de JavaScript con el valor del mensaje de la sesión de PHP
var mensaje = <?php echo json_encode($mensaje); ?>;
</script>
<script>
// Crear una variable de JavaScript con el valor del mensaje de la sesión de PHP

var err=<?php echo json_encode($error); ?>;
</script>
<script>

function asignarPagina(button, pageid, profileid) {
  // Obtener el valor del campo de texto correspondiente al botón
  var input = button.previousElementSibling;
  //var nombre = input.value;

  // Construir la URL con los parámetros de la petición GET
  var url = 'controller/controllerAssignPage.php?pageId=' + encodeURIComponent(pageid) + '&profileId=' + encodeURIComponent(profileid);

  // Realizar la petición GET al archivo PHP
  fetch(url)
    .then(response => {
      // Aquí puedes realizar alguna acción con la respuesta del servidor, si lo deseas
      // Por ejemplo, mostrar un mensaje de éxito o actualizar la información en la página
      
      //getSch();
      
      var res = mensaje;
      var er1=err;
     
      if(er1==="true"){
       
        var re="success";
      }
      if(er1==="false"){
        
        var re="error";
      }

      
      mostrarNotificacion(res, re);

      sessionStorage.setItem('mensaje', '');
      var res = "";
      var er1="";
 
    })
    .catch(error => {
      // Aquí puedes manejar los errores en caso de que la petición falle
      console.log('Error en la petición:', error);
    });
}








// Función para mostrar la notificación
function mostrarNotificacion(mensaje, tipo) {
    const notificacion = document.getElementById('notification');
    const notificacionText = document.getElementById('notificationText');

    notificacionText.textContent = mensaje;
    notificacion.classList.remove('error'); // Remover clase de error (en caso de que esté presente)

    if (tipo === 'error') {
        notificacion.classList.add('error');
    }

    notificacion.style.display = 'block';

    // Desaparecer la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = 'none';
    }, 3000);
}

</script>

<style>
		/* Estilos para la notificación */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none;
}
.notification.error {
    background-color: #f44336;
}

	</style>
  

